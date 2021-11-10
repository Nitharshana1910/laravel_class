<h1>Student Create</h1>
<form action="{{route('student.store')}}" method="post">
    @csrf
    <label for="fname">First Name</label>
	<input type="text" id="fname" name="fname"><br><br>
	<label for="lname">Last Name</label>
	<input type="text" id="lname" name="lname"><br><br>
    <input type="submit" class="btn btn-primary">
</form>

