<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\File;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements HasMedia, MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Notifiable;
    use HasRoles;
    use InteractsWithMedia;

    public $table = 'users';

    public $orderable = [
        'id',
        'name',
        'email',
        'email_verified_at',
        'active',
    ];

    public $filterable = [
        'id',
        'name',
        'email',
        'email_verified_at',
        'roles.name',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar_id',
        'last_login_time',
        'last_login_ip',
        'active',
    ];

    protected $dates = [
        'email_verified_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $appends = ['registered'];

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

    public function getRegisteredAttribute($value)
    {
//        return $this->created_at->diffForHumans();
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->diffForHumans() : null;
    }

    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = Hash::needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function getEmailVerifiedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(
            config('project.datetime_format')
        ) : null;
    }

    public function setEmailVerifiedAtAttribute($value)
    {
        $this->attributes['email_verified_at'] = $value ? Carbon::createFromFormat(
            config('project.datetime_format'),
            $value
        )->format('Y-m-d H:i:s') : null;
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
            ->acceptsFile(
                function (File $file) {
                    return in_array($file->mimeType, ['image/jpeg', 'image/png']);
                }
            )
            ->registerMediaConversions(
                function (Media $media) {
                    // $this->addMediaConversion('card')
                    //     ->width(400)
                    //     ->height(300);

                    $this->addMediaConversion('thumb')
                        ->width(100)
                        ->height(100);
                }
            );

        $this
            ->addMediaCollection('fotos')
            ->acceptsFile(
                function (File $file) {
                    return in_array($file->mimeType, ['image/jpeg', 'image/png', 'image/gif', 'image/tiff']);
                }
            );

        $this
            ->addMediaCollection('videos')
            ->acceptsFile(
                function (File $file) {
                    return in_array($file->mimeType, ['video/x-msvideo', 'video/mpeg']);
                }
            );
    }

    public function avatar()
    {
        return $this->hasOne(Media::class, 'id', 'avatar_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
