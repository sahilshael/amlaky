<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = ['username','first_name','last_name','email','image','password','decoded_password','created_at','updated_at','_token'];
    
    protected $table = 'admins';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}