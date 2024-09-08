<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function depo()
    {
        return $this->hasOne(Depo::class);
    }

    public function aov()
    {
        return $this->hasMany(Aov::class);
    }

    public function coc()
    {
        return $this->hasMany(Coc::class);
    }

    public function cod()
    {
        return $this->hasMany(Cod::class);
    }

    public function cr()
    {
        return $this->hasMany(Cr::class);
    }

    public function dragon()
    {
        return $this->hasMany(Dragon::class);
    }

    public function ff()
    {
        return $this->hasMany(Ff::class);
    }

    public function genshin()
    {
        return $this->hasMany(Genshin::class);
    }

    public function hayday()
    {
        return $this->hasMany(Hayday::class);
    }

    public function honkai()
    {
        return $this->hasMany(Honkai::class);
    }

    public function lol()
    {
        return $this->hasMany(Lol::class);
    }

    public function ml()
    {
        return $this->hasMany(Ml::class);
    }

    public function opbr()
    {
        return $this->hasMany(Opbr::class);
    }

    public function pb()
    {
        return $this->hasMany(Pb::class);
    }

    public function pubg()
    {
        return $this->hasMany(Pubg::class);
    }

    public function valo()
    {
        return $this->hasMany(Valo::class);
    }
    public function pulsas()
    {
        return $this->hasMany(Pulsa::class);
    }
    public function internets()
    {
        return $this->hasMany(Internet::class);
    }
    public function listriks()
    {
        return $this->hasMany(Listrik::class);
    }
}
