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
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <h1 style="margin-top: 20px;">All Subjects</h1>
            </div>
            
            <div class="col-md-4">
                <a href="{{ route('subjects.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing" style="margin-top: 20px;">Create Subject</a>
                <hr>
            </div>       
        </div>
    
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Subject Name</th>
                        {{-- <th>Created at</th> --}}
                        <th>Actions</th>
                        <th></th>
                        
                    </thead>
                    <tbody>
                        @foreach ($subjects as $subject)
                            <tr>
                                <th>{{ $subject->id }}</th>
                                <td>{{ $subject->subject_name }}</td>                         
                                <td>
                                   <a href="{{ route('subjects.show',$subject->id) }}" class="btn btn-info btn-sm">View</a> 
                                   <a href="{{ route('subjects.edit',$subject->id) }}" class="btn btn-warning btn-sm">Edit</a>      
                                
                                    <form action="{{ route('subjects.destroy',$subject->id) }}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="if(!confirm('Are you sure want to delete this record?')){ return false; }">delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

