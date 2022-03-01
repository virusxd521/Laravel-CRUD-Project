@extends('layouts.master')


@section('content')
    <div>
        <ul>
            <?php foreach($authors as $value) :?>
                <li>{{$value->name}}</li>
                <br>
            <?php endforeach; ?>
        </ul>
    </div>
@endsection