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
            <div class="col-md-8">
                <h3 style="text-align: center">Phone Number: {{ $phone->phone_no }}</h3>
            </div>
        
            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <label>Created At:</label>
                        <p>{{ date('M j,Y h:ia', strtotime($phone->created_at)) }}</p>
                    </dl>
                    <dl class="dl-horizontal">
                        <label>Last Updated:</label>
                        <p>{{ date('M j,Y h:ia', strtotime($phone->updated_at)) }}</p>
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{ route('phones.edit',$phone->id) }}" class="btn btn-success btn-sm">Edit</a>
                          
                        </div>
                        <div class="col-sm-6">
                            {{-- <a href="{{ route('employee.destroy',$employee->id) }}" class="btn btn-danger btn-sm" method="DELETE">Delete</a>        --}}
                            <form action="{{ route('phones.destroy',$phone->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm btn-block" onclick="if(!confirm('Are you sure want to delete this record?')){ return false; }">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
           
            <a href="{{ route('phones.index') }}" class="btn btn-info btn-sm">Back</a>
                         
        </div>
    </div>

</body>
</html>