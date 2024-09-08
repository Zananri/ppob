<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cod extends Model
{
    use HasFactory;


    protected $guarded = ['id'];


    protected $table = 'cods';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
