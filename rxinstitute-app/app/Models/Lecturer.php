<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $table = 'lecturers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'address',
        'mobile'
    ];
}
