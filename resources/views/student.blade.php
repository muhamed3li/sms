<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <title>Student Management System</title>
</head>

<body>

    @include('navbar')

    <div class=" header-container  ">
        <div class="header ">
            <h1>Student Management System</h1>
        </div>
    </div>

    @if ($layout == 'index')
        <dev class="container-fluid mt-4 ">
            <dev class="row ">
                <section class="col-8 ">
                    @include('studentlist')
                </section>
                <section class="col"></section>
            </dev>
        </dev>
    @elseif($layout == 'create')
        <dev class="container-fluid mt-4">
            <dev class="row">
                <section class="col">
                    @include('studentlist')
                </section>
                <section class="col">
                    <div class="card mb-3">
                        <img src="https://schoolsweek.co.uk/wp-content/uploads/2020/10/Home-education-feat-1000x525.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Enter the information of the new student</h5>
                        </div>
                    </div>
                    <form action="{{ url('/store') }}" method="post">
                        @csrf
                        <div class="mb-3 form-group">
                            <label class="form-label">CNE</label>
                            <input name="cne" type="text" class="form-control" placeholder="Enter Your CNE">
                        </div>
                        <div class="mb-3 form-group">
                            <label class="form-label">First Name</label>
                            <input name="firstName" type="text" class="form-control"
                                placeholder="Enter Your First Name">
                        </div>
                        <div class="mb-3 form-group">
                            <label class="form-label">Second Name</label>
                            <input name="secondName" type="text" class="form-control"
                                placeholder="Enter Your Second Name">
                        </div>
                        <div class="mb-3 form-group">
                            <label class="form-label">Age</label>
                            <input name="age" type="text" class="form-control" placeholder="Enter Your Age">
                        </div>
                        <div class="mb-3 form-group">
                            <label class="form-label">Speciality</label>
                            <input name="speciality" type="text" class="form-control"
                                placeholder="Enter Your Speciality">
                        </div>
                        <input type="submit" class="btn btn-info" value="Save">
                        <input type="reset" class="btn btn-warning" value="Reset">
                    </form>
                    </div>
                    </div>
                </section>
            </dev>
        </dev>
    @elseif($layout == 'show')
        <dev class="container-fluid mt-4">
            <dev class="row">
                <section class="col">
                    @include('studentlist')
                </section>
                <section class="col"></section>
            </dev>
        </dev>

    @elseif($layout == 'edit')
        <dev class="container-fluid mt-4">
            <dev class="row">
                <section class="col-md-7">
                    @include('studentlist')
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="https://www.education.pitt.edu/sites/default/files/feature-image/education_advance_equity.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Update information of student</h5>
                            <form action="{{ url('/update/' . $student->id) }}" method="get">
                                @csrf
                                <div class="mb-3 form-group">
                                    <label class="form-label">CNE</label>
                                    <input value="{{ $student->cne }}" name="cne" type="text" class="form-control"
                                        placeholder="Enter Your CNE">
                                </div>
                                <div class="mb-3 form-group">
                                    <label class="form-label">First Name</label>
                                    <input value="{{ $student->firstName }}" name="firstName" type="text"
                                        class="form-control" placeholder="Enter Your First Name">
                                </div>
                                <div class="mb-3 form-group">
                                    <label class="form-label">Second Name</label>
                                    <input value="{{ $student->secondName }}" name="secondName" type="text"
                                        class="form-control" placeholder="Enter Your Second Name">
                                </div>
                                <div class="mb-3 form-group">
                                    <label class="form-label">Age</label>
                                    <input value="{{ $student->age }}" name="age" type="text" class="form-control"
                                        placeholder="Enter Your Age">
                                </div>
                                <div class="mb-3 form-group">
                                    <label class="form-label">Speciality</label>
                                    <input value="{{ $student->speciality }}" name="speciality" type="text"
                                        class="form-control" placeholder="Enter Your Speciality">
                                </div>
                                <input type="submit" class="btn btn-info" value="Update">
                                <input type="reset" class="btn btn-warning" value="Reset">
                            </form>
                        </div>
                </section>
            </dev>
        </dev>
    @endif



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>

</html>
