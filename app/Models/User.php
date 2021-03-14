<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\MediaLibrary\MediaCollections\File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements HasMedia, MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use HasRoles;
    use InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar_id',
        'last_login_time',
        'last_login_ip',
        'active',
    ];

    protected $appends = ['registered'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeToday($query)
    {
        return $query->where('created_at', today());
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('active', 0);
    }

    public function getRegisteredAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    /**
     * Hash password
     * @param $input
     */
    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('avatar')
            //->singleFile() // limitar a somente 1 imagem
            //->useDisk('s3') // Usando um disco específico
            //->onlyKeepLatest(3) // limitar a 3 imagens
            ->useFallbackUrl('/img/no-user.png')
            ->useFallbackPath(public_path('/img/no-user.png'))
            ->withResponsiveImages()
            ->acceptsFile(function (File $file) {
                return in_array($file->mimeType, ['image/jpeg', 'image/png']);
            })
            ->registerMediaConversions(function (Media $media) {
                // $this->addMediaConversion('card')
                //     ->width(400)
                //     ->height(300);

                $this->addMediaConversion('thumb')
                    ->width(100)
                    ->height(100);
            });

        $this
            ->addMediaCollection('fotos')
            ->acceptsFile(function (File $file) {
                return in_array($file->mimeType, ['image/jpeg', 'image/png', 'image/gif', 'image/tiff']);
            });

        $this
            ->addMediaCollection('videos')
            ->acceptsFile(function (File $file) {
                return in_array($file->mimeType, ['video/x-msvideo', 'video/mpeg']);
            });
    }

    public function avatar()
    {
        return $this->hasOne(Media::class, 'id', 'avatar_id');
    }
}
