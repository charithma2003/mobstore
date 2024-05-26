<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Managment</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="bd">

<ul class="nav">
  <li class="nav-item ms-5 me-4">
    <a class="nav-link active" aria-current="page" href="usermanagment.php">User Managment</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="productReg.php">Product Managment</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Reports</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#">Stock Managment</a>
  </li>
</ul>
    <h1 class="text-center fw-bold mt-5 text-light">Product Managment</h1>

    <div class="row">
        <!-- Brand Registration -->
        <div class="col-8 offset-2 col-lg-4 offset-lg-4  mt-4 mb-4">
            <label for="form-label">Enter Brand:</label>
            <input type="text" class="form-control" placeholder="Enter Brand" id="brand">

            
                <div id="alertDiv" class="d-none" onclick="reload();">
                    <div class="alert alert-danger" role="alert" id="alertmsg">
                        A simple danger alert—check it out!
                    </div>
                </div>
           
            <div class="mt-3 mb-3">
                <button class="btn btn-outline-primary col-12" onclick="brandReg();">Register Brand</button>
            </div>
        </div>
        <!-- brand Registration -->

        <!-- Model Registration -->
        <div class="col-8 offset-2 col-lg-4 offset-lg-4  mt-4 mb-4">
            <label for="form-label">Enter Model:</label>
            <input type="text" class="form-control" placeholder="Enter model" id="model">

            
                <div id="msgBox" class="d-none" onclick="reload();">
                    <div class="alert alert-danger" role="alert" id="msg">
                       
                    </div>
                </div>
           
            <div class="mt-3 mb-3">
                <button class="btn btn-outline-primary col-12" onclick="modelReg();">Register Model</button>
            </div>
        </div>
        <!-- Model REgistration -->

        <!-- Color Registration -->

        <div class="col-8 offset-2 col-lg-4 offset-lg-4  mt-4 mb-4">
            <label for="form-label">Enter Color:</label>
            <input type="text" class="form-control" placeholder="Enter color" id="color">

            
                <div id="msgBox2" class="d-none" onclick="reload();">
                    <div class="alert alert-danger" role="alert" id="msg2">
                        A simple danger alert—check it out!
                    </div>
                </div>
           
            <div class="mt-3 mb-3">
                <button class="btn btn-outline-primary col-12" onclick="colorreg();">Register Colour</button>
            </div>
        </div>

        <!-- Color Registration -->


    </div>
    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>