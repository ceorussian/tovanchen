<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = ['email', 'password'];

    public static function getAll(){
        return self::orderBy('id', 'desc')->paginate(10);
    }

    public static function getUser($id){
        return self::find($id);
    }

    public static function createUser($requests){
        $user = new self();
        $user->email = $requests['email'];
        $user->password = $requests['password'];
        $user->save();
        return $user;
    }

    public static function deleteUser($id){
        return self::find($id)->delete();
    }
}
