<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'studID', 
        'studFirstName', 
        'studMiddleName', 
        'studLastName', 
        'studYear',
        'studCollege',
        'studProgram',
        'studAge', 
        'studGender', 
        'studEmail', 
        'studContact'
    ];

    public function diagnoses()
    {
        return $this->hasMany(Diagnosis::class);
    }

}
