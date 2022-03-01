<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{   

    use HasFactory;
    protected $table = 'authors';


    // Get only limited users
    public function getLimitedUsers(){
        return $this->limit(20)->get();
    }

    // Create items
    public function createItem(){
        return $this->limit(20)->push();
    }   
}
