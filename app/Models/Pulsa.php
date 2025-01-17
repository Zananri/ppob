<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pulsa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'pulsas';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
