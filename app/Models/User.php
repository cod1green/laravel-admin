<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Prunable;
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
    use Prunable;

    public $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar_id',
        'last_login_time',
        'last_login_ip',
        'active',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login_time' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

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

    protected $appends = ['registered'];

    public function prunable()
    {
        return static::where('created_at', '<=', now()->subMonths(2))->whereNull('email_verified_at');
    }

    protected function pruning()
    {
        echo 'Pruning ' . $this->name . PHP_EOL;
    }

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
        return $this->created_at ? $this->created_at->diffForHumans() : null;
    }

    public function setPasswordAttribute($value)
    {
        if ($value) {
            $this->attributes['password'] = Hash::needsRehash($value) ? Hash::make($value) : $value;
        }
    }

    public function getEmailVerifiedAtAttribute($value)
    {
        $dateFormat = config("admin.dates." . app()->getLocale() . ".datetime_format");
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format($dateFormat) : null;
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('avatar')
            //->useDisk('s3') // Usando um disco específico
            //->singleFile() // limitar a somente 1 imagem
            //->onlyKeepLatest(3) // limitar a 3 imagens
            ->withResponsiveImages()
            ->acceptsFile(
                function (File $file) {
                    return in_array($file->mimeType, ['image/jpeg', 'image/png']);
                }
            )
            ->registerMediaConversions(
                function (Media $media) {
                    $this->addMediaConversion('thumb')
                        ->width(100)
                        ->height(100);
                }
            );

        $this
            ->addMediaCollection('photos')
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

    public function isAdmin()
    {
        if ($this->hasRole(Role::ADMIN)) {
            return true;
        }

        return false;
    }
}
