<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="signInBody">

    <div class="adminSignInBox">
        <h2 class=" text-center">Admin Login</h2>

        <div class="mt-3">
            
            <input type="text" class="form-control border-black bg-transparent" placeholder=" UserName" id="un">
        </div>

        <div class="mt-3 mb-3">
           
            <input type="password" class="form-control border-black bg-transparent" placeholder=" Password" id="pw">
        </div>

        <div class="d-none" id="alertdiv">
            <div class="alert alert-danger " id="alert"></div>
        </div>

        <div class="mt-4">
            <button class="btn btn-secondary col-12" onclick="adminSignIn();">Sign In</button>
        </div>

    </div>
    <script src="script.js"></script>
</body>

</html>