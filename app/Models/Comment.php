<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $primaryKey = 'comments_id';
    public $timestamps = false;

    public function user() {
        
        return $this->hasOne('App\Models\User');

    }
    public function task() {
        
        return $this->hasOne('App\Models\Task');

    }
}
