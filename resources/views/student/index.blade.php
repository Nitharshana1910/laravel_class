
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <h1>All Students</h1>
        </div>
        
        <div class="col-md-2">
            <a href="{{ route('student.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create Student</a>
            <hr>
        </div>       
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    {{-- <th>Created at</th> --}}
                    <th>Actions</th>
                    <th></th>
                    
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <th>{{ $student->id }}</th>
                            <td>{{ $student->first_name }}</td>
                            <td>{{ $student->last_name }}</td>                           
                            <td>
                               <a href="{{ route('student.show',$student->id) }}" class="btn btn-info btn-sm">View</a> 
                               <a href="{{ route('student.edit',$student->id) }}" class="btn btn-danger btn-sm">Edit</a>      
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
