<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;
    protected $table = 'about';

    protected $fillable = [
        'dob',
        'website',
        'city',
        'degree',
        'freelance',


    ];

    protected $hidden = [
        'updated_at',
        'created_at'
    ];

    protected $casts = [
        'id' => 'integer',
        'dob' => 'string',
        'website' => 'string',
        'degree' => 'string',
        'freelance' => 'string',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
