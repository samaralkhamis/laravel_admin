<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class elders extends Model
{
    use HasFactory;
    protected $fillable = [
        'elder_id',
       'name',
       'age',
       'phone_num',
       'needed_services',
       'time_needed',
       'gender', 
       'location',
       'guardian_name',
       'guardian_number',
       'guardian_relation',
       'guardian_id_pic',
      'is_accepted',
      'is_deleted',
      'job_taken',
       'volunteer_id',
    ];
}
