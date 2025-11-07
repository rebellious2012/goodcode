<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'user_agent',
        'url',
        'referrer',
    ];

    public $timestamps = false;

    protected $casts = [
        'visited_at' => 'datetime',
    ];

    public function getCreatedAtColumn()
    {
        return 'visited_at';
    }

    public function getUpdatedAtColumn()
    {
        return null;
    }
}
