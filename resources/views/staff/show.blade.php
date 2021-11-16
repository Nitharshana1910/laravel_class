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
    
     

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-10">
                <h2 style="color: blueviolet"><b> Staff Profile </b></h2>
            </div>
            <div class="col-md-2">
                <a class="btn btn-primary btn-lg" href="{{ route('staffs.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-8">
            <div class="card" >
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/uploads/{{ $staff->photo }}" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h4 class="card-title">Staff Profile</h4><br>
                        <h6>First Name: {{ $staff->first_name }}</h6>
                        <h6>Last Name: {{ $staff->last_name }}</h6>
                        <h6>Gender: {{ $staff->gender }}</h6>
                        <h6>Date of birth: {{ $staff->dob }}</h6>
                        <h6>Grade: {{ $staff->grade }}</h6>
                        <h6>Address: {{ $staff->address }}</h6>
                        <h6>Email Address: {{ $staff->email_address }}</h6>
                        <h6>Mobile No: {{ $staff->mobile_no }}</h6>
                        <h6>Subjects: {{ $staff->subject }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <label>Created At:</label>
                    <p>{{ date('M j,Y h:ia', strtotime($staff->created_at)) }}</p>
                </dl>
                <dl class="dl-horizontal">
                    <label>Last Updated:</label>
                    <p>{{ date('M j,Y h:ia', strtotime($staff->updated_at)) }}</p>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ route('staffs.edit',$staff->id) }}" class="btn btn-success btn-sm">Edit</a>
                      
                    </div>
                    <div class="col-sm-6">
                        <form action="{{ route('staffs.destroy',$staff->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm btn-block" onclick="if(!confirm('Are you sure want to delete this record?')){ return false; }">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>