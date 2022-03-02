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
    public function createItem($name, $slug){
        // bill-bryson-author
        // $data = ['name' => $name, 'slug' => $slug];
        $this->name = $name;
        $this->slug = $slug;
        return $this->save();
    }   


}
