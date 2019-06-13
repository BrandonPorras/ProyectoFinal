<?php

namespace INTEGRATEITM;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

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


    public function publications(){
        return $this->hasMany('\INTEGRATEITM\Publication');
        }


        public function roles(){
            return $this
            ->belongsToMany('INTEGRATEITM\Role','role_user','user_id','role_id')
            ->withTimestamps();
        }
        public function authorizeRoles($roles)
        {
            if ($this->hasAnyRole($roles)) {
                return true;
            }
            abort(401, 'Esta acción no está autorizada.');
        }
        public function hasAnyRole($roles)
        {
            if (is_array($roles)) {
                foreach ($roles as $role) {
                    if ($this->hasRole($role)) {
                        return true;
                    }
                }
            } else {
                if ($this->hasRole($roles)) {
                    return true;
                }
            }
            return false;
        }
        public function hasRole($role)
        {
            if ($this->roles()->where('name', $role)->first()) {
                return true;
            }
            return false;
        }
    
    
        public function itsAdmin(){
            return $this->hasRole('admin');
        }
}
