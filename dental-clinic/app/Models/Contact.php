<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['phone', 'email', 'address', 'city', 'maps_url', 'facebook_url', 'instagram_url', 'hours_weekday_open', 'hours_weekday_close', 'hours_saturday_open', 'hours_saturday_close', 'sunday_closed'];
}
