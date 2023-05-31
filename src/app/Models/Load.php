<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models;

class Load extends Model
{
    use HasFactory;

    public function user() {
        // tie load to user
        return $this->belongsTo(User::class, 'user_id');
    }
}
