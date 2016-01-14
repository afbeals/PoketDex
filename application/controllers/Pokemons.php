<?php date_default_timezone_set('UTC'); ?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pokemons extends CI_Controller {

    public function __construct()
  {
    parent:: __construct();
    $this->output->enable_profiler();
  }

  public function index()
  {
    $this->load->view('pokedex_view');
  }

  public function users_pokemon()
  {
    $this->load->view('my_pokemon_view');
  }

  public function new_pokemon()
  {
    $this->load->view('new_pokemon_view');
  }
}