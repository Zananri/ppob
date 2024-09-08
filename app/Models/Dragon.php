<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dragon extends Model
{
    use HasFactory;

    protected $table = 'dragons'; // Nama tabel dalam database

    protected $guarded = ['id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
