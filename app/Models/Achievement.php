<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'associated_with',
        'issuer',
        'issue_date',
        'description'
    ];
}
