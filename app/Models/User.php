<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone',
        'cur_area',
        'cur_division_id',
        'cur_district_id',
        'cur_thana_id',
        'gross_salary',
        'designation_id',
        'department_id',
        'photo_path',
        'signature_path',
        'email',
        'password',
        'user_type',
        'status_active',
        'is_delete',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function leaves()
    {
        return $this->hasMany(Leave::class);
    }
    // Define relationships if any with other models, for example:
//    public function division()
//    {
//        return $this->belongsTo(Division::class, 'cur_division_id');
//    }
//
//    public function district()
//    {
//        return $this->belongsTo(District::class, 'cur_district_id');
//    }
//
//    public function thana()
//    {
//        return $this->belongsTo(Thana::class, 'cur_thana_id');
//    }
//
//    public function designation()
//    {
//        return $this->belongsTo(Designation::class);
//    }
//
//    public function department()
//    {
//        return $this->belongsTo(Department::class);
//    }

    public function assignRole(string $roleName)
    {
        $role = Role::where('name', $roleName)->first();

        if (!$role)
        {
            return;
        }

        $this->roles()->sync($role);
    }

    /**
     * The roles that belong to the user.
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }
}
