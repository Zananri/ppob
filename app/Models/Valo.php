<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valo extends Model
{
    use HasFactory;
    protected $table = 'valos'; // Nama tabel dalam database


    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
