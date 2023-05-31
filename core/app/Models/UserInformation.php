<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    protected $fillable = ['user_id','profile_url', 'adress_id', 'warka_score'];
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
