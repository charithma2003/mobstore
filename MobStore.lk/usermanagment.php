<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <title>User Managment</title>
</head>
<body class="bdu">

<div class="container">
  <div class="row">
    <div class="col-12">
      <h2 class="text-center mt-5">User Management</h2>
      <div class="row justify-content-end mt-4">
        <div>
          <div class="d-none" id="msgDiv" onclick="relord();">
            <div class="alert alert-danger" id="msg"></div>
          </div>
        </div>
        <div class="col-auto">
          <input type="text" class="form-control" id="uid" placeholder="user Id">
        </div>
        <div class="col-auto">
          <button class="btn btn-outline-light" id="status" onclick="updateUserStatus();">Change Status</button>
        </div>
      </div>
      <div class="mt-3">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">User Id</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mobile</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody id="tb">
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

        <!-- Footer -->
        <div class="fixed-bottom col-12">
            <p class="text-center"> &copy; 2024  MobStore.lk || All Rights Reserved </p>
        </div>
        <!-- Footer -->
    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>
</html>