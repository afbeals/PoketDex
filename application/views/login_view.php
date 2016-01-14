<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="PoketDex" description="Pokemon game based on your location">
  <title>PoketDex Login</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  <?=link_tag('assets/login_style.css');?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="col-sm-4 col-xs-4 col-md-4 col-lg-4 col-sm-offset-4 background">
      <div class="center_text">
        <h1>PoketDex</h1>
      </div>
      <div>
        <form class="form-horizontal" action="/users/login_user" method="post">
          <div class="form-group">
            <label for="input-login-username" class="col-sm-offset-1 col-sm-3 control-label">Username:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="input-login-username" placeholder="Example1231" name="input-login-username">
            </div>
          </div>
          <div class="form-group ">
            <label for="input-login-password" class="col-sm-offset-1 col-sm-3 control-label">Password:</label>
            <div class="col-sm-7">
              <input type="password" class="form-control" id="input-login-password" placeholder="Password" name="input-login-password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-4">
              <button type="submit" class="btn btn-default">Log in</button>
            </div>
          </div>
        </form>
      </div>
      <div>
        <a href="/users/registration" class="col-sm-offset-5 bottom">Register Here</a>
      </div>
    </div>
    <?php 
        if ($this->session->flashdata('login_errors'))
        {  
          echo "<p class='text-capitalize'><em>" . ' ' . $this->session->flashdata('login_errors') . ' ' . "</em></p>";
          header('refresh: 2, /');
        }

    ?> 
  </div>
</body>
</html>