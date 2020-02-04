<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{

    protected $primaryKey = 'event_id';
    protected $dates = ['start_date', 'end_date'];

    protected $fillable = ['image'];
}
