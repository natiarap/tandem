<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Komunitas extends Model
{
    use HasFactory;

    public function created_by():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
