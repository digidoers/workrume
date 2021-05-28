<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status'
        
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
	
	public function posts()
    {
        return $this->belongsToMany(Posts::class);
    }
}
