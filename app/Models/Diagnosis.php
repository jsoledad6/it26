<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'condition', 'description'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
