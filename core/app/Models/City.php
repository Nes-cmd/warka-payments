<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'country_id', 'zip_code'];
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
