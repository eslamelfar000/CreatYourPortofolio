<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    protected $table = 'medias';
    use HasFactory;
    protected $fillable = [
        'Facebook',
        'instagram',
        'Twitter',
        'LinkedIn',
    ];


    protected $hidden = [
        'updated_at',
        'created_at'
    ];

    protected $casts = [
        'id' => 'integer',
        'facebook' => 'string',
        'instagram' => 'string',
        'twitter' => 'string',
        'linkedin' => 'string',
    ];
}
