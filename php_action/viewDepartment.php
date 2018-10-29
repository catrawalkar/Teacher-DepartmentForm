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
                <a class="nav-link btn btn-default" href="viewTeacher.php">View Teacher</a>
            </li>
            <li class="nav-item" style="padding:5px">
                <a class="nav-link btn btn-primary active" href="viewDepartment.php">View Department</a>
            </li>

        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 border-right">
                <br>
                <h2>Department Information</h2>

                <br>
                <table class="table table-light " id="table">
                    <?php
                    require("connection.php");
                    $query = "select * from department";
                    $result = mysqli_query($connect, $query) or die("Cannot select from database");
                    echo "<thead class=\"thead-light\">
                                    <tr>
                                        <th>Department Id</th>
                                        <th>Department</th>
                                    </tr>
                                </thead>
                                <tbody>";
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>
                                <td>".$row['id']."</td>
                                <td>".$row['department']."</td>
                            </tr>";
                    }
                    echo "</tbody>";
                    ?>
                </table>
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