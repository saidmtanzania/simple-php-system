<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <title>AppOne</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5 text-center">
            <div class="col-lg-12 col-md-12 bg-info">
                <h1>EIS's</h1>
            </div>
        </div>
        <div class="row text-center mt-2">
            <div class="col-lg-2 col-md-2 bg-light"></div>
            <div class="col-lg-8 col-md-8 bg-light">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#view">View</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#insert">insert</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#update">Update</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#delete">Delete</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-2 bg-light"></div>
        </div>
        <div class="tab-content">
            <div id="view" class="container mt-1 tab-pane active">
                <div class="col-lg-12 col-md-12">
                    <?php
                    include_once './component/_conn.php';
                    $result = mysqli_query($con, "SELECT * FROM Employee") or die(mysqli_error($mysqli));
                    echo "<table class='table table-info table-hover'>";
                    echo "<tr><th>ID</th><th>Firstname</th> <th>Lastname</th> <th>Email</th><th>Position</th><th>Salary</th></tr>";
                    // loop through results of database query, displaying them in the table
                    while ($row = mysqli_fetch_array($result)) {
                        // echo out the contents of each row into a table
                        echo "<tr>";
                        echo '<td>' . $row['empno'] . '</td>';
                        echo '<td>' . $row['eFname'] . '</td>';
                        echo '<td>' . $row['eLname'] . '</td>';
                        echo '<td>' . $row['eEmail'] . '</td>';
                        echo '<td>' . $row['post'] . '</td>';
                        echo '<td>' . $row['salary'] . '</td>';
                    }
                    echo "</table>";
                    ?>
                </div>
            </div>
            <div id="insert" class="container tab-pane fade">
                <?php
                include_once './component/_conn.php';
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $empid = $_REQUEST['uid'];
                    $email = $_REQUEST['email'];
                    $fname = $_REQUEST['fname'];
                    $lname = $_REQUEST['lname'];
                    $post = $_REQUEST['post'];
                    $salary = $_REQUEST['salary'];

                    if (!$con) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "INSERT INTO Employee(empno, eFname, eLname, eEmail, post, salary) VALUES ('$empid','$fname','$lname','$email','$post','$salary')";

                    if (mysqli_query($con, $sql)) {
                        header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($con);
                    }

                    mysqli_close($conn);
                }
                ?>
                <form class="form-inline" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <label for="uid">UserID:</label>
                            <input type="number" class="form-control" id="uid" placeholder="Enter ID" name="uid" required>
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                            <label for="warning"><?= $message1 ?></label>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <label for="fname">First name:</label>
                            <input type="text" class="form-control" id="fname" placeholder="Enter First name" name="fname" required>
                            <label for="lname">Last name:</label>
                            <input type="text" class="form-control" id="lname" placeholder="Enter Last name" name="lname" required>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <label for="post">Position:</label>
                            <input type="text" class="form-control" id="post" placeholder="Enter Position" name="post" required>
                            <label for="salary">Salary:</label>
                            <input type="text" class="form-control" id="pwd" placeholder="Enter Salary" name="salary" required>
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="update" class="container tab-pane fade">
                <div class="col-lg-12 col-md-12">
                    <table class='table table-info table-hover'>
                        <thead>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Position</th>
                            <th>Salary</th>
                            <th>Update details</th>
                        </thead>
                        <tbody>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "assignment");
                            $query = mysqli_query($conn, "select * from `Employee`");
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <td><span id="uid<?php echo $row['empno']; ?>"><?php echo $row['empno']; ?></span></td>
                                    <td><span id="firstname<?php echo $row['empno']; ?>"><?php echo $row['eFname']; ?></span></td>
                                    <td><span id="lastname<?php echo $row['empno']; ?>"><?php echo $row['eLname']; ?></span></td>
                                    <td><span id="email<?php echo $row['empno']; ?>"><?php echo $row['eEmail']; ?></span></td>
                                    <td><span id="position<?php echo $row['empno']; ?>"><?php echo $row['post']; ?></span></td>
                                    <td><span id="salary<?php echo $row['empno']; ?>"><?php echo $row['salary']; ?></span></td>
                                    <td><button type="button" class="btn btn-link edit" value="<?php echo $row['empno']; ?>"><span class="glyphicon glyphicon-edit"></span> EditInfo</button></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="delete" class="container tab-pane fade mt-2">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <h5>SELECT EMPLOYEE TO REMOVE FROM THE TABLE</h5>
                                <h6>SELECT EMPLOYEE No</h6>
                            </div>
                            <div class="row">
                                <div class="col-lg-5 col-md-5">
                                    <?php
                                    include_once './component/_conn.php';
                                    if ($_SERVER["REQUEST_METHOD"] == "GET") {
                                        $empid = $_GET['users'];

                                        $sql = "delete from Employee where empno='$empid'";
                                        if (mysqli_query($con, $sql)) {
                                            header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
                                        } else {
                                            echo "Error: " . $sql . "<br>" . mysqli_error($con);
                                        }
                    
                                        mysqli_close($conn);
                                    }
                                    ?>
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <?php
                                    include_once './component/_conn.php';
                                    $result = mysqli_query($con, "SELECT empno FROM Employee") or die(mysqli_error($mysqli));
                                    echo "<select class='form-control' name='users' size='1'>";
                                    // loop through results of database query, displaying them in the table
                                    while ($row = mysqli_fetch_array($result)) {
                                        $val =  $row['empno'];
                                        // echo out the contents of each row into a table
                                        echo "<option value=$val>" . $row['empno'] . "</option>";
                                    }
                                    echo "</select>";
                                    ?>
                                </div>
                                <div class="col-lg-5 col-md-5"></div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-5 col-md-5"></div>
                                <div class="col-lg-2 col-md-2"><button type="submit" class="btn btn-danger">delete</button></div>
                                <div class="col-lg-4 col-md-4">
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="text-center mt-3">
                        <h4></h4>
                    </div>


                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-lg-12 col-md-12 bg-info">
                <div class="text-center">
                    &copy; eis's
                </div>
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(".nav-tabs a").click(function() {
                $(this).tab('show');
            });
        });
    </script>
    <?php include('modal.php'); ?>
    <script src="custom.js"></script>
</body>

</html>