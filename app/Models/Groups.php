<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;
	protected $table = 'groups';
	protected $fillable = ['user_id', 'name', 'description', 'banner_image', 'group_logo', 'status'];
}
