<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
    <h1>Employee Edit</h1>
    <form action="{{ route('employee.update',$employee->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="{{ $employee->first_name }}"><br><br>
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="{{ $employee->last_name }}"><br><br>
        <label for="dob">Date ob birth</label>
        <input type="date" id="dob" name="dob" value="{{ $employee->dob }}"><br><br>
        <label for="salary">Salary</label>
        <input type="number" id="salary" name="salary" value="{{ $employee->salary }}"><br><br>
        <input type="submit" class="btn btn-primary">
    </form><br>
    <a href="{{ route('employee.index') }}" class="btn btn-info btn-sm">Show all</a>

</body>
</html>


