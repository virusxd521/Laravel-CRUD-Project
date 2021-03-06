<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index(){    
        $author = new Author;
        return view('layouts.list', ['authors' => $author->getLimitedUsers()]);
    }

    public function create(){
        return view('layouts.create');
    }

    public function store(Request $request){
        $author = new Author;
        $result = $request->request->all();      
        return view('layouts.alertAdded', ['results' => $author->createItem($result['name'], $result['slug']) ]);
    }
}
