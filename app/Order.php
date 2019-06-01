<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Order extends Model
{
    public  function Total()
    {
        return $this->pages * $this->cpp;
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
