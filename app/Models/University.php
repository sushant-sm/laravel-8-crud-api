<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function colleges()
    {
        return $this->hasMany(College::class);
    }

    public function students()
    {
        return $this->hasManyThrough(Student::class, College::class); 
    }
}
