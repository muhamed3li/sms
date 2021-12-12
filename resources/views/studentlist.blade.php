<div class="card mb-3">
    <img src="https://www.european-agency.org/sites/default/files/styles/grid_2_col/public/2017-12/shutterstock_407031889.jpg?h=2e5cdddf&itok=wse8ywUm" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List Of Students</h5>
        <p class="card-text">you can find here all the informations about students in the system</p>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">CNE</th>
                <th scope="col">First Name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->cne}}</td>
                    <td>{{$student->firstName}}</td>
                    <td>{{$student->secondName}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->speciality}}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-info">Show</a>
                        <a href="{{url('/edit'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{url('/delete'.$student->id)}}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


