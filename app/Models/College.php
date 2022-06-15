<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function universities()
    {
        return $this->belongsTo(University::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
