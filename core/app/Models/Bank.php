<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = ['name', 'account_start', 'account_digits'];
    public function receiverAccounts()
    {
        return $this->hasMany(ReceiverBank::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
