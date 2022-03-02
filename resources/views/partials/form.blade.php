
@if(Route::current()->uri === 'admin/authors/create')
    <form method="POST" action="{{ route('author.store') }}"> 
        @csrf
        <input name="name" id="name" type="text" placeholder="Enter a name"><br>
        <input name="slug" id="slug" type="text" placeholder="Enter a name"><br>
        <input name="submit" type="submit">
    </form>
@elseif (Route::current()->uri() === 'admin/books/create')
    <form method="POST" action="{{ route('book.store') }}"> 
        @csrf
        {{-- title --}}
        <input name="title" id="title" type="text" placeholder="Enter a book title"><br>
        {{-- slug --}}
        <input name="slug" id="slug" type="text" placeholder="Enter a slug"><br>
        {{-- number of pages --}}
        <input name="pages" id="pages" type="number" placeholder="Enter the number of pages"><br>
        <input name="submit" type="submit">
    </form>
@endif