<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'year',
        'synopsis',
        'duration',
        'type',
        'seasson',
        'chapter',
        'image',
        'genere',
        'file',
    ];
    public function scopeTitle($query, $param)
    {
        return $query->where('title', 'like', $param);
    }
    public function scopeSynopsis($query, $param)
    {
        return $query->where('synopsis', 'like', $param);
    }
    public function scopeDuration($query, $param)
    {
        return $query->where('duration', 'like', $param);
    }
    public function scopeYear($query, $param)
    {
        return $query->where('year', 'like', $param);
    }
    public function scopeType($query, $param)
    {
    
        if ($param != 0) {
            return $query->where('type', $param);
        } 
        
    }
    public function scopeGenere($query, $param)
    {
        return $query->where('genere', $param);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'remember_token',
    ];

    /**
     * 
     */
    public function generes()
    {
        return $this->hasMany('App\Genere');
    }
}
