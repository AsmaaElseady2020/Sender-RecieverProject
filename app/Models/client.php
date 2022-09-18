<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laratrust\Traits\LaratrustUserTrait;


class client extends Model
{
    

    use LaratrustUserTrait;

    protected $guarded = [];
    
    protected $fillable = [
       'id', 'name', 'email', 'password', 'type',
    ];


    public function reports()
    {
    return $this->hasMany('App\Models\report','user_id','d');
    }

}
