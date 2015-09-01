<?php
//require_once ;
if (empty($_POST)) {
  (" ");
}
else if (!empty($_POST)) {
  $query = 'INSERT INTO users (userName, password, email, phone, firstName, lastName)
      VALUES (:userName, :password, :email, :phone, :firstName, :lastName)';

  $stmt = $dbc->prepare($query);
  $stmt->bindValue(':userName',       $_POST['userName'], PDO::PARAM_STR);
  $stmt->bindValue(':password',       $_POST['password'], PDO::PARAM_STR);
  $stmt->bindValue(':email',          $_POST['email'],    PDO::PARAM_STR);
  $stmt->bindValue(':phone',          $_POST['phone'],    PDO::PARAM_STR);
  $stmt->bindValue(':firstName',      $_POST['firstName'], PDO::PARAM_STR);
  $stmt->bindValue(':lastName',       $_POST['lastName'], PDO::PARAM_STR);
  $stmt->execute();
  echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Register</button>

<!-- Modal -->
<div class="modal fade" id="myModal" data-target="#myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registration</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="">
              <div class="userCreate form-group">
                  <label for="userName"></label>
                  <input type="text" name="userName" class="form-control" id="userName" placeholder="userName">
              </div>
              <div class="userCreate form-group">
                  <label for="password"></label>
                  <input type="text" name="password" class="form-control" id="password" placeholder="Password">
              </div>
              <div class="userCreate form-group">
                  <label for="email"></label>
                  <input type="text" name="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="userCreate form-group">
                  <label for="phone"></label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
              </div>
              <div class="userCreate form-group">
                  <label for="firstName"></label>
                  <input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name">
              </div>
              <div class="userCreate form-group">
                  <label for="lastName"></label>
                  <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name">
              </div>
              <div class="userCreate form-group">
                  <label for="image">File input</label>
                  <input type="file" name="image" id="image">
              </div>
              <button type="submit" class="userCreate btn-submit btn-default">Submit</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
