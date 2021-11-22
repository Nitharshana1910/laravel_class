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
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <div class="row" style="margin-top: 20px;">
        <div class="col-8">
             <h1 style="text-align: center">Staff Create</h1>
        </div>
        <div class="col-2">
            <a href="{{ route('staffs.index') }}" class="btn btn-info btn-lg" style="margin-left: 120px;">Back</a>
        </div>
    </div><br>

    <form action="{{route('staffs.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                 <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{old('first_name')}}" placeholder="Enter First Name">
                  </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{old('last_name')}}" placeholder="Enter Last Name">
                 </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                 <div class="form-group">
                    <label for="email_address">Email address</label>
                    <input type="email" class="form-control" id="email_address" name="email_address" value="{{old('email_address')}}" placeholder="Enter Email">
                  </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group">
                    <label for="mobile_no">Email address</label>
                    <input type="number" class="form-control" id="mobile_no" name="mobile_no" value="{{old('mobile_no')}}" placeholder="Enter Mobile No">
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="grade">Grade</label>
                    <select class="form-control" id="grade" name="grade">
                        <option value="10" {{ old('grade')==10 ? 'selected' : '' }}>10</option>
                        <option value="11" {{ old('grade')==11 ? 'selected' : '' }}>11</option>
                        <option value="12" {{ old('grade')==12 ? 'selected' : '' }}>12</option>
                    </select>
                  </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group">
                    <label for="dob">Date ob birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" value="{{old('dob')}}" required>
                    @error('dob')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="gender">Gender</label><br>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="gender" id="radioMale" value="male" {{ old('gender')=='male' ? 'checked' : '' }}>
                    <label class="form-check-label" for="radioMale">Male</label>
                </div>
                <div class="form-check form-check-inline ms-3">
                    <input type="radio" class="form-check-input" name="gender" id="radioFemale" value="female" {{ old('gender')=='female' ? 'checked' : '' }}>
                    <label class="form-check-label" for="radioFemale">Female</label>
                </div>
            </div>
            <div class="col-md-6">
                <label for="Subjects">Subjects</label><br>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="tamil" name="subject[]" value="Tamil" {{ (is_array(old('subject')) && in_array('Tamil',old('subject'))) ? 'checked' : ''}}>
                    <label class="form-check-label" for="tamil">Tamil</label>
                </div>
                <div class="form-check form-check-inline ms-3">
                    <input type="checkbox" class="form-check-input" id="maths" name="subject[]" value="Maths" {{ (is_array(old('subject')) && in_array('Maths',old('subject'))) ? 'checked' : ''}}>
                    <label class="form-check-label" for="maths">Maths</label>
                </div>
                <div class="form-check form-check-inline ms-3">
                    <input type="checkbox" class="form-check-input" id="english" name="subject[]" value="English" {{ (is_array(old('subject')) && in_array('English',old('subject'))) ? 'checked' : ''}}>
                    <label class="form-check-label" for="english">English</label>
                </div>
            </div>
        </div><br>
        <div class="form-group">
            <label for="photo">Upload Profile Picture</label>
            <input type="file" class="form-control-file" id="photo" aria-describedby="fileHelp" name="photo" value="{{old('photo')}}" />
          </div>
        <div class="form-group">
          <label for="address">Address</label>
          <textarea class="form-control" id="address" name="address" rows="3">{{old('address')}}</textarea><br>
        </div>

        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
        <input type="submit" class="btn btn-primary">
    </form>

    {{-- <form action="{{route('staffs.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="photo">Upload Profile Picture</label><br>
			<input type="file" name="photo" value="{{old('photo')}}" /><br><br>

        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="{{old('first_name')}}"><br><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="{{old('last_name')}}"><br><br>

		<label for="gender">Gender</label><br>
            <input type="radio" name="gender" id="male" value="male" {{ old('gender')=='male' ? 'checked' : '' }}> <label for="male">Male</label>
			<input type="radio" name="gender" id="female" value="female" {{ old('gender')=='female' ? 'checked' : '' }}> <label for="female">Female</label><br>

        <label for="grade">Grade</label>
			<select id="grade" name="grade">
				<option value="10" {{ old('grade')==10 ? 'selected' : '' }}>10</option>
				<option value="11" {{ old('grade')==11 ? 'selected' : '' }}>11</option>
				<option value="12" {{ old('grade')==12 ? 'selected' : '' }}>12</option>
			</select><br>

        <label for="Subjects">Subjects</label><br>
            <input type="checkbox" id="tamil" name="subject[]" value="Tamil" {{ (is_array(old('subject')) && in_array('Tamil',old('subject'))) ? 'checked' : ''}}>
            <label for="tamil"> Tamil</label><br>
            <input type="checkbox" id="maths" name="subject[]" value="Maths" {{ (is_array(old('subject')) && in_array('Maths',old('subject'))) ? 'checked' : ''}}>
            <label for="maths"> Maths</label><br>
            <input type="checkbox" id="english" name="subject[]" value="English" {{ (is_array(old('subject')) && in_array('English',old('subject'))) ? 'checked' : ''}}>
            <label for="english"> English</label><br><br>

        <label for="email_address">Email Address</label>
        <input type="email" id="email_address" name="email_address" value="{{old('email_address')}}" required><br><br>

        <label for="mobile_no">Mobile Number</label>
        <input type="number" id="mobile_no" name="mobile_no" value="{{old('mobile_no')}}" required><br><br>

        <label for="dob">Date ob birth</label>
        <input type="date" id="dob" name="dob" class="@error('dob') is-invalid @enderror" value="{{old('dob')}}" required><br><br>
        @error('dob')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="address">Address</label>
        {{-- <input type="textarea" id="address" name="address"><br><br> --}}

        {{-- <textarea id="address" name = "address" rows="2" onKeyPress class="form-control" required>{{old('address')}}</textarea><br>

        <input type="submit" class="btn btn-primary">
    </form><br> --}} 
    {{-- <a href="{{ route('staffs.index') }}" class="btn btn-info btn-sm">Show all</a> --}}


</body>
</html>


