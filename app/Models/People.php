<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $fillable = ['name','email'];

    function displayNameandEmail(){
        echo $this->name ." : ". $this->email;
    }

    function addjr(){
        $this->name .= "Jr";
    }

    function posts(){
        return $this->hasMany(Post::class);
    }   
}
