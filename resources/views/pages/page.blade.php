

<html>
    <h1>Welcome to Home Page</h1>

<form action="{{route('page')}}" method="post">
    @method('put')
    @csrf

    <label for="page">page</label>
	<input type="text" id="page" name="page"><br><br>
	<label for="color">color</label>
    <input type="text" id="color" name="color"><br><br>
    <input type="submit" class="btn btn-primary">
</form>

</html>