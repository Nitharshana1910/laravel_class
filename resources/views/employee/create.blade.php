<h1>Employee Create</h1>
<form action="{{route('employee.store')}}" method="post">
    @csrf
    <label for="fname">First Name</label>
	<input type="text" id="fname" name="fname"><br><br>
	<label for="lname">Last Name</label>
	<input type="text" id="lname" name="lname"><br><br>
    <label for="bod">Date ob birth</label>
	<input type="date" id="bod" name="bod"><br><br>
    <label for="salary">Salary</label>
	<input type="number" id="salary" name="salary"><br><br>
    <input type="submit" class="btn btn-primary">
</form>

