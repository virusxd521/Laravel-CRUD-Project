<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index(){    
        $author = new Author;
        return view('layouts.authors', ['authors' => $author->getLimitedUsers()]);
    }

    public function create(){
        return view('layouts.create');
    }


    public function store(Request $request){
        dd($request);
    }
}
