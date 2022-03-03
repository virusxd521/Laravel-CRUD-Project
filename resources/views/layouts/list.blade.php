@extends('layouts.master')


@section('content')
@if (Route::current()->uri === 'admin/authors')
    <div>
        <ul>
            <?php foreach($authors as $value) :?>
                <li style="list-style:none;">
                    {{$value->name}}
                </li>
                <br>
            <?php endforeach; ?>
        </ul>
    </div>
@elseif (Route::current()->uri === 'admin/books')
    <div>
        <ul>
            <?php foreach($books as $value) :?>
                <li class="item" style="list-style:none; :hover{cursor:pointer}">
                    {{-- Todo add option to edit the book --}}
                    {{-- Todo add the right route    --}}
                    {{-- {{route('', ['id' => $value->id ])}} --}}
                    {{-- <a href="" style="text-decoration: none; color:black;"> --}}
                    {{$value->title}}
                    {{-- </a> --}}
                </li>
                <form action="{{route('book.edit', ['book_id' => $value->id])}}" method="POST" style="margin-top: 15px;" class="edit-form">
                    @csrf
                    @method('PUT')
                    <input style="width: 40%;" type="text" name="title" value="{{$value->title}}"><br>
                    <input style="width: 40%;" type="text" name="slug" value="{{$value->slug}}"><br>
                    <input style="width: 10%;  margin-top: 15px; border-radius:5px; border:none; padding: 5px 0; background-color:antiquewhite;" type='submit' name='submit' id='submit'>
                </form>

                <br>
            <?php endforeach; ?>
        </ul>
    </div>

            <script type="text/javascript">
            let displayed = false;
            const items = document.querySelectorAll('.item');
            
            const editForm = document.querySelectorAll('.edit-form');
                
            // .filter(item => item === 'input')
            items.forEach((item, i) => {
                editForm[i].style.display = "none";
                item.addEventListener('click' , e => {
                // e.preventdefault();
                displayed = !displayed;
               if(displayed){
                console.log(displayed);
                editForm[i].style.display = "block";
            } else {
                editForm[i].style.display = "none";
            }
            });
            })

        </script>
@endif
@endsection

