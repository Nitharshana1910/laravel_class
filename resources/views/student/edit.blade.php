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
    <style>
        form{
              width: 60%;
              border-radius: 5px;
              background-color: #f2f2f2;
              padding: 16px;
              margin:auto;
            }
    </style>
</head>
<body>
    <h1 style="text-align: center">Student Edit</h1>
    <form action="{{ route('students.update',$student->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="{{ $student->first_name }}"><br><br>
        <label for="lname">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="{{ $student->last_name }}"><br><br>
        <label for="grade_id">Grade ID</label>
        <input type="number" id="grade_id" name="grade_id" value="{{ $student->grade_id }}"><br><br>
        <label for="phone_id">Salary</label>
        <input type="number" id="phone_id" name="phone_id" value="{{ $student->phone_id }}"><br><br>
        <input type="submit" class="btn btn-primary">
    </form><br>
    <a href="{{ route('students.index') }}" class="btn btn-info btn-sm">Show all</a>

</body>
</html>


