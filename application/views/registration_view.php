<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="PoketDex" description="Pokemon game based on your location">
  <title>PoketDex Registration</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  <?=link_tag('assets/registration_style.css');?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
</head>
<body>
<?php
          if ($this->session->flashdata('registration_errors'))
        {  
          echo "<p class='text-capitalize'><em>" . ' ' . $this->session->flashdata('registration_errors') . ' ' . "</em></p>";
          header('refresh: 2');
        }
    ?> 
  <div class="container">
    <div class="center height background col-sm-4 col-xs-4 col-md-4 col-lg-4 col-sm-offset-4">
      <div class="center_text">
        <h1>PoketDex</h1>
      </div>
      <div>
        <form class="form-horizontal" action="/users/register_user" method="post">
          <div class="form-group">
            <label for="input-registration-username" class="col-sm-offset-1 col-sm-3 control-label">Username:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="input-registration-username" placeholder="Example1231" name="input-registration-username">
            </div>
          </div>
          <div class="form-group">
            <label for="input-registration-first_name" class=" col-sm-4 control-label">First Name:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="input-registration-first_name" placeholder="John" name="input-registration-first_name">
            </div>
          </div>
          <div class="form-group">
            <label for="input-registration-last_name" class="col-sm-4 control-label">Last Name:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="input-registration-last_name" placeholder="Doe" name="input-registration-last_name">
            </div>
          </div>
          <div class="form-group">
            <label for="input-registration-email" class="col-sm-offset-1 col-sm-3 control-label">Email:</label>
            <div class="col-sm-7">
              <input type="email" class="form-control" id="input-registration-email" placeholder="Email@example.com" name="input-registration-email">
            </div>
          </div>
          <div class="form-group">
            <label for="input-registration-password" class="col-sm-offset-1 col-sm-3 control-label">Password:</label>
            <div class="col-sm-7">
              <input type="password" class="form-control" id="input-registration-password" placeholder="Password" name="input-registration-password">
            </div>
          </div>
          <div class="form-group">
            <label for="input-registration-confirmation" class="col-sm-offset-1 col-sm-3 control-label">Confirm Password:</label>
            <div class="col-sm-7">
              <input type="password" class="form-control" id="input-registration-confirmation" placeholder="Password" name="input-registration-confirmation">
            </div>
          </div>
          <div class="form-group">
            <label for="input-registration-birthday" class="col-sm-offset-1 col-sm-3 control-label">Birthday:</label>
            <div class="col-sm-7">
              <input type="date" class="form-control" id="input-registration-birthday" name="input-registration-birthday">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-4">
              <button type="submit" class="btn btn-default">Register</button>
            </div>
          </div>
        </form>
      </div>
      <div>
        <a href="/users/index" class="col-sm-offset-5 bottom">Log In Here</a>
      </div>
    </div>
  </div>
</body>
</html>