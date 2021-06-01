<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
	protected $table = 'posts';
	protected $fillable = ['user_id', 'name', 'description', 'image_path', 'video_path', 'status', 'is_public', 'group_id'];
	
	public function topic()
    {
        return $this->belongsToMany(Topic::class);

    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

