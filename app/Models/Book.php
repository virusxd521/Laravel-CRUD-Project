<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';

    public function indexBooks(){
        // get must come after any otheer query than all
        return $this->limit(20)->get();
    }

    public function createBook($title, $pages, $slug){
        $this->title = $title;
        $this->pages = $pages;
        $this->slug = $slug;
        return $this->save();
    }

}
