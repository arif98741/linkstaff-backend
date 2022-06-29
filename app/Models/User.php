<?php

namespace App\Models;

use App\Models\User\LanguageProficiency;
use App\Models\User\SavedAddress;
use App\Models\User\UserAcademicInfo;
use App\Models\User\UserAddress;
use App\Models\User\UserOtherInfo;
use App\Models\User\UserProfessionalData;
use App\Models\User\UserService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use  HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'phone',
        'otp_verified',
        'gender',
        'document_verified',
        'role_id',
        'user_slug',
        'profile_photo',
        'firebase_token',
        'signature_otp',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    /**
     * @return HasOne
     */
    public function user_address()
    {
        return $this->hasMany(UserAddress::class);
    }

    /**
     * @return HasMany
     */
    public function user_services()
    {
        return $this->hasMany(UserService::class);
    }


    /**
     * @return BelongsToMany
     */
    public function specialities()
    {
        return $this->belongsToMany(Speciality::class, 'user_specialities');
    }

    /**
     * @return BelongsToMany
     */
    public function user_academic_infos()
    {
        return $this->hasMany(UserAcademicInfo::class);
    }

    /**
     * @return BelongsToMany
     */
    public function save_addresses()
    {
        return $this->hasMany(SavedAddress::class);
    }


    /**
     * @return BelongsToMany
     */
    public function profession_data()
    {
        return $this->hasMany(UserProfessionalData::class);
    }

    /**
     * @return BelongsToMany
     */
    public function language_proficiency()
    {
        return $this->hasMany(LanguageProficiency::class);
    }

    /**
     * @return BelongsToMany
     */
    public function user_other_info()
    {
        return $this->hasMany(UserOtherInfo::class);
    }

    /**
     * @return BelongsToMany
     */
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }


}
