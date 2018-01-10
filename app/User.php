<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    

    protected $fillable = [
        'name', 'email', 'password', 'country',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = "users";

    public $timestamps = false;
    protected $primaryKey = 'user_id';

    public function inviteOn()
    {
         return $this->hasMany('App\Friend','fr1','user_id');
    }

    public function inviteOff(){
        return $this->hasMany('App\Friend','fr2','user_id');
    }

    

    public function suggestions($country_id=1){
       
        $myFriendsIds =  $this->inviteOff()->select('fr1 as id')->lists('id')->merge($this->inviteOn()->select('fr2 as id')->lists('id'));

        return  $this->whereNotIn('user_id',$myFriendsIds->toArray())->with('lang')
        ->select('email', 'real_name','country')->where('country',$country_id)->paginate(25);
    }

    public function lang()
    {
       return  $this->hasOne('App\Lang','language_id','country');
    }





}
