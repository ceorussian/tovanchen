<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
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
