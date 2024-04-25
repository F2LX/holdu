<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Chat extends Model
{
    use HasFactory;

    protected $fillable=['date','is_bot','sender_id','content'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
