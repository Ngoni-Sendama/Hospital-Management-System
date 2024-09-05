<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['staff_id', 'ward_id', 'shift_start', 'shift_end'];

    public function staff(): BelongsTo
    {
        return $this->belongsTo(Profile::class, 'staff_id');
    }

    public function ward(): BelongsTo
    {
        return $this->belongsTo(Ward::class);
    }
}
