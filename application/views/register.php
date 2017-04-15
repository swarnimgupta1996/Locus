<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
  <script type="text/javascript" src="<?php echo base_url("assets/bootstrap/js/jquery.js") ?>"></script>
  <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css") ?>"/>
  <script type="text/javascript" src="<?php echo base_url("assets/bootstrap/js/bootstrap.js") ?>"></script>

<style type="text/css">

</style>
</head>
<body>
  <div class="container">
  <h2>Register</h2>
  <form action="<?php echo base_url();?>index.php/locus/set_register" method="post" role="form">
    <div class="form-group">
      <label for="fname">Fist name:</label>
      <input type="text" class="form-control" name="fname" id="fname"  placeholder="Enter First Name">
    </div>
    <div class="form-group">
      <label for="lname">Last Nmae:</label>
      <input type="text" class="form-control" name="lname" id="lname"  placeholder="Enter Last Name">
    </div>
    <div class="form-group">
      <label for="uname">UserName:</label>
      <input type="text" class="form-control" name="uname" id="uname" placeholder="Enter Userame">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter password">
    </div>

    <div class="form-group">
          <label for="cpwd">Confirm Password:</label>
          <input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="Enter password again">
    </div>
    <div class="form-group">
          <label for="akey">Admin Key:</label>
          <input type="text" class="form-control" id="akey" name="akey" placeholder="Enter admin key">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
