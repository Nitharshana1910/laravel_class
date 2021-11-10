
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <h1>All Employees</h1>
        </div>
        
        <div class="col-md-2">
            <a href="{{ route('employee.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create Employee</a>
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
                    <th>Date of birth</th>
                    <th>Salary</th>
                    {{-- <th>Created at</th> --}}
                    <th>Actions</th>
                    <th></th>
                    
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <th>{{ $employee->id }}</th>
                            <td>{{ $employee->first_name }}</td>
                            <td>{{ $employee->last_name }}</td>                           
                            <td>{{ $employee->dob }}</td>                           
                            <td>{{ $employee->salary }}</td>                           
                            <td>
                               <a href="{{ route('employee.show',$employee->id) }}" class="btn btn-info btn-sm">View</a> 
                               <a href="{{ route('employee.edit',$employee->id) }}" class="btn btn-danger btn-sm">Edit</a>      
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
