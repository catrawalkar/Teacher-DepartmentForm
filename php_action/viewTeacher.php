<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="../custom/css/style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
    <script src="../custom/js/view.js"></script>
    <title>Teacher-Department Form</title>


</head>

<body>

    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <ul class="nav ">
        <li class="nav-item" style="padding:5px">
                <a class="nav-link btn btn-default" href="../index.htm">Home</a>
            </li>
            <li class="nav-item" style="padding:5px">
                <a class="nav-link btn btn-default" href="insertTeacher.php">Insert Teacher</a>
            </li>
            <li class="nav-item" style="padding:5px">
                <a class="nav-link btn btn-default" href="insertDepartment.php">Insert Department</a>
            </li>
            <li class="nav-item" style="padding:5px">
                <a class="nav-link btn btn-primary active" href="view.php">View Teacher</a>
            </li>
            <li class="nav-item" style="padding:5px">
                <a class="nav-link btn btn-default" href="viewDepartment.php">View Department</a>
            </li>

        </ul>
    </nav>

    <div class="container">
        <br>

        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Department</th>
                    <th>Email Id</th>
                    <th>Mobile No</th>
                    <th>Date Of Birth</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require("connection.php");
                    $query = "select teacher.id,first_name,last_name, department, email, mobile, date_of_birth from teacher, department where department.id=teacher.dept_id";
                    $result = mysqli_query($connect, $query) or die("Cannot select from database").mysqli_error($result);
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>
                                <td>".$row['first_name']."</td>
                                <td>".$row['last_name']."</td>
                                <td>".$row['department']." Department</td>
                                <td>".$row['email']."</td>
                                <td>".$row['mobile']."</td>
                                <td>".$row['date_of_birth']."</td>
                                <td><a href=\"#editModal\" class=\"btn btn-primary\" data-toggle=\"modal\" data-id=\"".$row['id']."\" ><span class=\"fa fa-edit\" aria-hidden=\"true\"></span></a>
                                <a class=\"btn btn-primary\" href=\"database.php?button=delete&id=".$row['id']."\"><span class=\"fa fa-trash\" aria-hidden=\"true\"></span></a>
                                </td>
                            </tr>";
                    }
               ?>

            </tbody>
        </table>


        <!-- <div class="list-group" id="list">
        </div> -->
        <!-- The Modal -->
        <div class="modal fade" id="editModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">

                        <h4 class="modal-title">Edit</h4>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="get" action="">
                            <div class="form-group">
                                <label for="id">Teacher's Id: </label>
                                <input id="id" class="form-control" type="number" disabled>
                            </div>
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
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="department_id">Department Id: </label>
                                        <input id="department_id" class="form-control" type="number" placeholder="Enter Department Id">
                                    </div>
                                </div>
                                <div class="col-5"></div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="email">Email Id: </label>
                                        <input id="email" class="form-control" type="email" placeholder="Enter Email Id">
                                    </div>
                                </div>

                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="mobile_no">Mobile Number: </label>
                                        <input id="mobile_no" class="form-control" type="number" placeholder="Enter Number">
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
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="update">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br>

</body>

</html>