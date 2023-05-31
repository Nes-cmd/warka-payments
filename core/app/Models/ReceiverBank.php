<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReceiverBank extends Model
{
    protected $fillable = ['bank_id','name_on_account', 'account_number', 'status'];
    public function banks()
    {
        return  $this->belongsTo(Bank::class);
    }
}
