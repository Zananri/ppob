<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listrik extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'listriks';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
