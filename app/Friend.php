<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $table = "friends";

    public $timestamps = false;
    protected $primaryKey = 'friends_id';
}