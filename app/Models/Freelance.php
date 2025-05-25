<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Freelance extends Model
{
    use HasFactory;

    // App\Models\Komunitas
    public function freelance_id()
    {
        return $this->belongsTo(User::class);
    }

    protected $table = 'freelance'; // atau 'freelance' jika kamu pakai nama lain

}
