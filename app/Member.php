<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $table = 'Members' ;
    protected $fillable = ['user_id', 'member_role', 'member_image'];

}
