<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="PoketDex" description="Pokemon game based on your location">
  <title>PoketDex Registration</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  <?=link_tag('assets/pokedex_style.css');?>
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
      for (i = 1; i < 152; i++) {
        $.get("http://pokeapi.co/api/v1/pokemon/" + i + "/", function(res) {
                  var pokemonName = "";
                  var pokemonType = "";
                  for(var k = 0; k < 1; k++) 
                  {
                    pokemonName += res.name;
                  };
                  for (var j = 0; j < res.types.length; j++) {
                    pokemonType += res.types[j].name + ", ";
                  };


                  $("#test").append("<tr><td id='"+pokemonName+"'><a href='#'>" + pokemonName + "</a></td><td>" + pokemonType + "</td></tr>");
              }, "json");

      };
      });
    $(document).ready(function(){
      $('#pokemon_table').on('click', 'a', function(){
       var id = $(this).parent().attr('id').toLowerCase();
       alert(id);
       $.get("http://pokeapi.co/api/v1/pokemon/" + id + "/", function(data) {
          console.log(data);
          var pokemonInfo = "";
          var pokemonType2 = "";
          var pokemonLocation = "89119";
          for(var p = 0; p < 1; p++) 
          {
            pokemonInfo += data.name;
          };
          for (var t = 0; t < data.types.length; t++) 
          {
            pokemonType2 += data.types[t].name + ", ";
          };
          $('#pokemonInfo').html(pokemonInfo);
          $('#pokemonType').html(pokemonType2);
          $('#pokemonLocation').html(pokemonLocation);
              }, "json");
      })
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
                  <a href="/pokemons/index" class="list-group-item active text-center">
                    <h4 class="glyphicon glyphicon-phone"></h4><br/>Pokedex
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
                <a href="/users/log_off">
                  <div>
                    <a href="/users/log_off" class="list-group-item text-center">
                      <h4 class="glyphicon glyphicon-off"></h4><br/>Log Out
                    </a>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 poketdex-tab">
                <div class="poketdex-tab-content active ">
                    <center class="bottom_line">
                      <img src="" alt="Pokemon Image">
                      <h3 class="left_text top-margin">Info:<p id="pokemonInfo"></p></h3>
                      <h3 class="left_text top-margin">Type:<p id="pokemonType"></p></h3>
                      <h3 class="left_text top-margin">Location:<p id="pokemonLocation"></p></h3>
                    </center>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 poketdex-tab">
              <form class="" action="" method="post">
                <label class="glyphicon glyphicon-search col-sm-offset-2">
                  <input class="search_box" type="text" name="search" placeholder="Search for a pokemon" />
                </label>
                <label>
                  <input type="submit" value="Search" />
                </label>
              </form>
              <table class="table table-striped " id="pokemon_table">
                <thead>
                  <tr>
                    <th>
                      Pokemon
                    </th>
                    <th>
                      Type
                    </th>
                  </tr>
                </thead>
                <tbody id="test">
                </tbody>
              </table>
            </div>
        </div>
  </div>
</div>
</body>
</html>