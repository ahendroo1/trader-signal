<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberRequest extends Model
{
    //
    
    protected $table = 'member_request' ;
    protected $fillable = ['user_id', 'currency_request',];
}
