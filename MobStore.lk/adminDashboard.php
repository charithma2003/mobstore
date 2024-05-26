<?php
session_start();

if (isset($_SESSION["a"])) {

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            padding: 20px;
        }

        .sidebar a {
            color: #fff;
            display: block;
            padding: 10px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            padding: 20px;
        }

        

   
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2 sidebar">
                <div class="mt-5">
                    <a href="adminDashboard.php">Dashboard</a>
                </div>

                <div class="mt-3">
                    <a href="usermanagment.php">Users</a>
                </div>

                <div class="mt-3">
                    <a href="productReg.php">produts</a>
                </div>

                <div class="mt-3">
                    <a href="#">Reports</a>
                </div>

                


            </div>
            <div class="col-md-9 col-lg-10 content">
                <h1 class="text-center"> Admin Dashboard</h1>
                <div class="row">
                    <div class="col-6">
                        <div class="card mt-5" style="width: 500px; height: 200px;">
                            <div class="card-body bg-secondary text-white">
                               <a href="usermanagment.php" style="text-decoration:none; color:inherit;"> <h5 class="card-title text-center">User Managment</h5></a>

                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card mt-5" style="width: 500px; height: 200px;">
                            <div class="card-body bg-secondary text-white ">
                                <a href="productReg.php" style="text-decoration:none; color:inherit;"><h5 class="card-title text-center">Products Managment</h5></a>

                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card mt-5" style="width: 500px; height: 200px;">
                            <div class="card-body bg-secondary text-white">
                            <a href="#" style="text-decoration:none; color:inherit;"><h5 class="card-title text-center">Reports</h5></a>

                            </div>
                        </div>
                    </div>

                    <div class="col-6 ">
                        <div class="card mt-5 " style="width: 500px; height: 200px;">
                            <div class="card-body bg-secondary text-white">
                            <a href="#" style="text-decoration:none; color:inherit;"><h5 class="card-title text-center">Stock Managment</h5></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
} else {
    echo ("you ar not a valid Admin");
}












?>

