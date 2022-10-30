<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class descrptions extends Model
{
    use HasFactory;

    protected $table = 'descrption';

    protected $fillable = [
        'name',
        'description',
    ];
    protected $hidden =
    [
        'created_at',
        'updated_at',
    ];
    protected $casts = [
        'id' => 'integer',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
