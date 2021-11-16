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
          width: 70%;
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 16px;
          margin:auto;
        }
        </style>
</head>
<body>
    <div class="row" style="margin-top: 20px;">
        <div class="col-8">
             <h1 style="text-align: center">Staff Edit</h1>
        </div>
        <div class="col-2">
            <a href="{{ route('staffs.index') }}" class="btn btn-info btn-lg" style="margin-left: 120px;">Back</a>
        </div>
    </div><br>

    <form action="{{route('staffs.update',$staff->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="photo">Upload Profile Picture</label>
			<input type="file" name="photo" value="" />
                    <img src="/uploads/{{ $staff->photo }}" width="200px"><br><br>

        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="{{ $staff->first_name }}"><br><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="{{ $staff->last_name }}"><br><br>

		<label for="gender">Gender</label><br>
            <input type="radio" name="gender" id="male" value="male" {{ $staff->gender=='male' ? 'checked' : '' }}> <label for="male">Male</label>
			<input type="radio" name="gender" id="female" value="female" {{ $staff->gender=='female' ? 'checked' : '' }}> <label for="female">Female</label><br><br>

        <label for="grade">Grade</label>
			<select id="grade" name="grade">
				<option value="10" {{ $staff->grade==10 ? 'selected' : '' }}>10</option>
				<option value="11" {{ $staff->grade==11 ? 'selected' : '' }}>11</option>
				<option value="12" {{ $staff->grade==12 ? 'selected' : '' }}>12</option>
			</select><br><br>

        <label for="Subjects">Subjects</label><br>
            <input type="checkbox" id="tamil" name="subject[]" value="Tamil" {{ in_array("Tamil", json_decode($staff->subject)) ? 'checked' : ''}}>
            <label for="tamil"> Tamil</label><br>
            <input type="checkbox" id="maths" name="subject[]" value="Maths" {{ in_array("Maths", json_decode($staff->subject)) ? 'checked' : ''}}>
            <label for="maths"> Maths</label><br>
            <input type="checkbox" id="english" name="subject[]" value="English" {{ in_array("English", json_decode($staff->subject)) ? 'checked' : ''}}>
            <label for="english"> English</label><br><br>

        <label for="email_address">Email Address</label>
        <input type="email" id="email_address" name="email_address" value="{{ $staff->email_address }}"><br><br>

        <label for="mobile_no">Mobile Number</label>
        <input type="number" id="mobile_no" name="mobile_no" value="{{ $staff->mobile_no }}"><br><br>

        <label for="dob">Date ob birth</label>
        <input type="date" id="dob" name="dob" value="{{ $staff->dob }}"><br><br>

        <label for="address">Address</label>
        <textarea id="address" name = "address" rows="2" onKeyPress class="form-control">{{ $staff->address }}</textarea><br>

        <input type="submit" class="btn btn-primary">
    </form><br>

</body>
</html>


