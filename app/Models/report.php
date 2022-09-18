<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'user_id', 'title', 'category', 'country', 'content',
    ];


    public function sender()
    {
    return $this->belongsTo('App\Models\client','user_id','id');
    }
}
