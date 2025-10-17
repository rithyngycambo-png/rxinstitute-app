<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'enrollments'; 
    protected $primaryKey = 'id';
    protected $fillable = [
        'enrollNo',
        'studentID',
        'departmentID',
        'joinDate',
        'fee'
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }
}
