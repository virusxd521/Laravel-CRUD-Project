@extends('layouts.master')


@section('content')
@if (Route::current()->uri === 'admin/authors')
    <div>
        <ul>
            <?php foreach($authors as $value) :?>
                <li>{{$value->name}}</li>
                <br>
            <?php endforeach; ?>
        </ul>
    </div>
@elseif (Route::current()->uri === 'admin/books')
    <div>
        <ul>
            <?php foreach($books as $value) :?>
                <li>{{$value->title}}</li>
                <br>
            <?php endforeach; ?>
        </ul>
    </div>
@endif
@endsection