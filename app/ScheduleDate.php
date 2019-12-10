<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScheduleDate extends Model
{
    protected $table = 'date_schedule';
    protected $fillable =['schedule_id','date_id'];
}
