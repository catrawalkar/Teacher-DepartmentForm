<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <script src="//ajax.googleapis.com/ajax/libs/dojo/1.14.1/dojo/dojo.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <link rel="stylesheet" href="../custom/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="../custom/js/JavaScript.js"></script>

    <title>Teacher-Department Form</title>
</head>


<body>
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <ul class="nav ">
            <li class="nav-item" style="padding:5px">
                <a class="nav-link btn btn-default" href="../index.htm">Home</a>
            </li>
            <li class="nav-item" style="padding:5px">
                <a class="nav-link btn btn-primary active" href="insertTeacher.php">Insert Teacher</a>
            </li>
            <li class="nav-item" style="padding:5px">
                <a class="nav-link btn btn-default" href="insertDepartment.php">Insert Department</a>
            </li>
            <li class="nav-item" style="padding:5px">
                <a class="nav-link btn btn-default" href="viewTeacher.php">View Teacher</a>
            </li>
            <li class="nav-item" style="padding:5px">
                <a class="nav-link btn btn-default" href="viewDepartment.php">View Department</a>
            </li>

        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 border-right">
                <h2>
                    Insert Teacher's data
                </h2>
                <form method="get" action="">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="first_name">First Name: </label>
                                <input id="first_name" class="form-control" type="text" placeholder="Enter First Name">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="last_name">Last Name: </label>
                                <input id="last_name" class="form-control" type="text" placeholder="Enter Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="department_id">Department Id: </label>
                                <input id="department_id" class="form-control" type="number" placeholder="Enter Department Id">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="email">Email Id: </label>
                                <input id="email" class="form-control" type="text" placeholder="Enter Email Id">
                            </div>
                        </div>

                        <div class="col-5">
                            <div class="form-group">
                                <label for="mobile_no">Mobile Number: </label>
                                <input id="mobile_no" class="form-control" type="number" placeholder="Enter Mobile Number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="date_of_birth">Date Of Birth: </label>
                                <input id="date_of_birth" class="form-control" type="date" placeholder="Enter Date Of Birth"
                                    value="1980-01-01">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding: 20px;">
                        <div class="col-5"></div>
                        <div class="col-4">
                            <button class="btn btn-primary" type="button" id="teacher_btn">Submit</button>
                        </div>
                        <div class="col-3"></div>
                    </div>


                </form>
            </div>
            <div class="col-6">
                <h2>
                    lorem ipsum
                </h2>
            </div>
        </div>
    </div>
</body>

</html>