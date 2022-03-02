@if(Route::current()->uri === 'admin/authors/create')
    <header>
        <h1>Enter a new Author to the list</h1>
    </header>
@elseif(Route::current()->uri === 'admin/books/create')
    <header>
        <h1>Enter a new Book to the list</h1>
    </header>
@endif
