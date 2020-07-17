<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SignalMember extends Model
{
    //
    protected $table = 'signal_member' ;
    protected $fillable = ['user_id', 'currency_member'];

}
