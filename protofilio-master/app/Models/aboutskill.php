<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutskill extends Model
{
    use HasFactory;
    protected $table = 'aboutskills';

    protected $fillable = [
        'html',
        'css',
        'js',
        'photoshop',
        'php',
        'bootstrap'
    ];

    protected $hidden = [
        'updated_at',
        'created_at'
    ];

    protected $casts = [
        'html' =>'integer',
        'css'=>'integer',
        'js'=>'integer',
        'photoshop' =>'integer',
        'php' =>'integer',
        'bootstrap' => 'integer',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
