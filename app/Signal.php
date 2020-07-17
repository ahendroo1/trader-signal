<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signal extends Model
{
    //
    protected $table = 'Signal' ;
    protected $fillable = ['buy_sell', 'buy_sell_number', 'currency_name', 'take_profile', 'stop_lost', 'date_time', 'description', 'status', 'view_premium', 'description_close', 'result' ];

    // public function mapel(){
    //     return $this->hasMany(Mapel::class);
    // }

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }
    

}
