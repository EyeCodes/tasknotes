<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Tasks extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $fillable = [
        'title',
        'user_id',
        'description',
        'completed',
        'due_date',
    ];

    // Define inverse relationship: Task belongs to a User
    public function user()
    {
        return $this->belongsTo(Tasks::class);
    }
}
