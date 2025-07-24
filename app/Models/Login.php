<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $fillable = ['user_id', 'ip_address', 'user_agent', 'login_time'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
