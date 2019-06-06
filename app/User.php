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
    //    para saber el role del usuario
    public function hasRole($role){
    //retorna true si es cierto o false si es null
       return $this->roles()->where('name', $role)->first()!==null;
    }
    
    public function hasAnyRoles($roles){
        /****
         * para saber si el user tiene mas de un rol
         * 
         * @param roles array de roles o solo un role
         */
         if(is_array($roles)){
    
            foreach($roles as $role){
                if($this-hasRole($role)){
                    return true;
                }
            }
    
         }
         else return $this->hasRole($roles);
    }
    
     /****
         * autorizar roles 
         * 
         * @param $roles los roles se van a permitir
         */
        public function authorizeRoles($roles){
            if($this->hasAnyRoles($roles)){
                return true;
            }
            abort(401, 'No tiene permiso');
        }
    
    
        public function itsAdmin(){
            return $this->hasRole('admin');
        }
}
