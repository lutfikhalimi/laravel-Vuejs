<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function transactions(){
        return $this->hasMany('App\Models\Transactions', 'member_id');
    }
}
