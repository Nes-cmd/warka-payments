<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    protected $fillable = ['country_id', 'city_id', 'adress_line_1','adress_line_2','adress_line_3','house_number'];
    public function country()
    {
        return $this->hasOne(Country::class);
    }
    public function city()
    {
        return $this->hasOne(City::class);
    }
}
