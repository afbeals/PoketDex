<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="PoketDex" description="Pokemon game based on your location">
  <title>PoketDex Registration</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  <?=link_tag('assets/my_pokemon_style.css');?>
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
                  <a href="/pokemons/users_pokemon/" class="list-group-item active text-center">
                    <h4 class="glyphicon glyphicon-list-alt"></h4><br/>My Pokemon
                  </a>
                <a href="/pokemons/new_pokemon/">
                  <div>
                    <a href="/pokemons/new_pokemon/" class="list-group-item text-center">
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
                <a href="/users/view_profile/">
                  <div>
                    <a href="#" class="list-group-item text-center">
                      <h4 class="glyphicon glyphicon-phone"></h4><br/>Add Friend
                    </a>
                  </div>
                </a>
                <a href="/users/view_profile/">
                  <div>
                    <a href="#" class="list-group-item text-center">
                      <h4 class="glyphicon glyphicon-tasks"></h4><br/>(Settings)
                    </a>
                  </div>
                </a>
                <a href="/users/view_log_off">
                  <div>
                    <a href="/users/view_log_off" class="list-group-item text-center">
                      <h4 class="glyphicon glyphicon-off"></h4><br/>Log Out
                    </a>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 poketdex-tab">
                <div class="poketdex-tab-content active">
                    <center class="left_text">
                      <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <img src="" alt="Profile Image">
                      </div>
                      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                        <h3 class="top-margin">Name:</h3>
                        <h3 class="top-margin">Nickname:</h3>
                        <h3 class="top-margin">Owned:</h3>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-margin2">
                        <form class="form-horizontal" action="" method="post">
                          <div class="form-group">
                            <label for="input-my-pokemon-nickname">
                              Nickname: <input type="text" name="input-my-pokemon-nickname">
                            </label>
                          </div>
                          <div class="form-group">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> <label class="col-sm-offset-6"><b>Primary</b></label>
                              </label>
                            </div>
                          </div>
                          <div class="form-group ">
                            <label class="">
                              Replace: 
                              <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </label>
                          </div>
                          <div class="form-group">
                            <label>
                              <input type="submit" value="submit">
                            </label>
                          </div>
                        </form>
                        <form class="form-horizontal" action="" method="post">
                          <div class="form-group col-sm-6">
                            <input type="submit" value="You sure?" />
                          </div>
                          <div class="checkbox">
                              <label>
                                <input type="checkbox"> <label class="col-sm-offset-6"><b>Release</b></label>
                              </label>
                            </div>
                        </form>

                      </div>
                    </center>
                </div>
            </div>
        </div>
  </div>
</div>
</body>
</html>