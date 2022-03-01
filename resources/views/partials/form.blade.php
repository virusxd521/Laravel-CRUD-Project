<form method="POST" action="{{ route('author.store') }}"> 
    @csrf
    <input name="name" id="name" type="text" placeholder="Enter a name">
    <input name="submit" type="submit">
</form>