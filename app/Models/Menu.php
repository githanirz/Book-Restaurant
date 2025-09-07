<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }
}
