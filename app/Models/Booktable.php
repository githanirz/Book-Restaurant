<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booktable extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = ['nama', 'tanggal', 'waktu', 'email', 'nohp', 'pesan'];
}
