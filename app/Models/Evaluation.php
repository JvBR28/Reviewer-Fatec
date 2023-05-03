<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $new_evaluation)
 */
class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
      'project_id',
      'user_id',
      'rating',
      'comment'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
