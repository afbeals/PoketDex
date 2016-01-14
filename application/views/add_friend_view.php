<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="PoketDex" description="Pokemon game based on your location">
  <title>PoketDex Registration</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  <?=link_tag('assets/add_friend_style.css');?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
  <script type="text/javascript">
    $(document).ready(function() {
      $("div.poketdex-tab-menu>div.list-group>a").click(function(e) {
          e.preventDefault();
          $(this).siblings('a.active').removeClass("active");
          $(this).addClass("active");
          var index = $(this).index();
          $("div.poketdex-tab>div.poketdex-tab-content").removeClass("active");
          $("div.poketdex-tab>div.poketdex-tab-content").eq(index).addClass("active");
      });
    });
  </script>
</head> 
<body>
<div class="container">
  <div class="row col-sm-offset-3">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-sm-offset-6 poketdex-tab-container">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 poketdex-tab-menu">
              <div class="list-group">
                <a href="/users/view_profile">
                  <div>
                    <a href="/users/view_profile" class="list-group-item text-center">
                      <h4 class="glyphicon glyphicon-user"></h4><br/>Profile
                    </a>
                  </div>
                </a>
                <a href="/pokemons/index">
                  <div>
                    <a href="/pokemons/index" class="list-group-item text-center">
                      <h4 class="glyphicon glyphicon-phone"></h4><br/>Pokedex
                    </a>    
                  </div>
                </a>
                <a href="/pokemons/users_pokemon/">
                  <div>
                    <a href="/pokemons/users_pokemon/" class="list-group-item text-center">
                      <h4 class="glyphicon glyphicon-list-alt"></h4><br/>My Pokemon
                    </a>
                  </div>
                </a>
                <a href="/users/view_profile/">
                  <div>
                    <a href="#" class="list-group-item text-center">
                      <h4 class="glyphicon glyphicon-alert"></h4><br/>New Pokemon
                    </a>
                  </div>
                </a>
                <a href="/users/view_profile/">
                  <div>
                    <a href="#" class="list-group-item text-center">
                      <h4 class="glyphicon glyphicon-globe"></h4><br/>(Map)
                    </a>
                  </div>
                </a>
                <a href="/users/view_profile/">
                  <div>
                    <a href="#" class="list-group-item text-center">
                      <h4 class="glyphicon glyphicon-eye-open"></h4><br/>Friends
                    </a>
                  </div>
                </a>
                <a href="#" class="list-group-item active text-center">
                  <h4 class="glyphicon glyphicon-phone"></h4><br/>Add Friend
                </a>
                <a href="/users/view_profile/">
                  <div>
                    <a href="#" class="list-group-item text-center">
                      <h4 class="glyphicon glyphicon-tasks"></h4><br/>(Settings)
                    </a>
                  </div>
                </a>
                <a href="/users/view_profile/">
                  <div>
                    <a href="#" class="list-group-item text-center">
                      <h4 class="glyphicon glyphicon-off"></h4><br/>Log Out
                    </a>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 poketdex-tab">
                <div class="poketdex-tab-content active">
                    <center class="left_text">
                      <div class="col-sm-offset-2">
                        <img src="" alt="Profile Image">
                      </div>
                      <form class="" action="" method="post">
                        <label for="input-add-friend-search">
                          <input class="top-margin col-sm-11 col-sm-offset-2" type="search" name="input-add-friend-search" placeholder="Search" id="input-add-friend-search"/>
                        </label>
                      </form>
                      <h3 class="top-margin">Name:</h3>
                      <h3 class="top-margin">Username:</h3>
                      <form action="" method="post">
                        <label>
                          <input class="top-margin col-sm-offset-7" type="submit" value="Add as a friend" />
                        </label>
                      </form>
                    </center>
                </div>
            </div>
        </div>
  </div>
</div>
</body>
</html>