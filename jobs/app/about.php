<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    protected $fillable = [
        'company_name',
        'title',
        'description',
        'city',
        'salary',
        'category',
        'email',
        'company_logo',
        'checkue_pic',
        'deadline',
        'isPublished'       
    ];
}
