<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Service_Entrie extends Model
{
    protected $fillable = ['nume', 'produs', 'sn', 'defect'];

    public function comments(){

        return $this->hasMany(Comment::class);
    }
}
