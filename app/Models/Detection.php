<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detection extends Model
{
    protected $fillable = ['user_id', 'crop_type', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getStatusBadge()
    {
        return match($this->status) {
            'pending' => ['label' => 'Pending', 'class' => 'bg-warning'],
            'completed' => ['label' => 'Completed', 'class' => 'bg-success'],
            default => ['label' => 'Unknown', 'class' => 'bg-secondary'],
        };
    }

}
