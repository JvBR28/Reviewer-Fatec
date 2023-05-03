<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'advisor',
        'presentation',
        'documentation',
        'cover',
        'github',
        'description'
    ];

    public function authors()
    {
        return $this->hasMany(Author::class);
    }

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
