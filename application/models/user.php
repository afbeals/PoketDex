<?php date_default_timezone_set('UTC'); ?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Model {

public function register_user()
  {
    $query = "INSERT INTO users (first_name, last_name, username, email, password, birthday, created_at) VALUES (?,?,?,?,?,?,?);";
    $values = array('first_name' => $this->input->post('input-registration-first_name'), 'last_name' => $this->input->post('input-registration-last_name'), 'username' => $this->input->post('input-registration-username'), 'email' => $this->input->post('input-registration-email'), 'password' => $this->input->post('input-registration-password'), 'birthday' => $this->input->post('input-registration-birthday'), 'created_at' => date("Y-m-d, H:i:s"));
    $this->db->query($query, $values);

    $user = $this->db->query("SELECT * FROM users WHERE username = ?", array('username' => $this->input->post('input-registration-username')))->row_array();

    return $user;
  }

  public function login_user($username)
  {
    return $this->db->query("SELECT * FROM users WHERE username = ?", array('username' => $username))->row_array();
  }

  public function add_about_me($content, $username)
  {
    $query = "UPDATE users SET about_user = ?, updated_at = ? WHERE username = ? ;";
    $values = array('about_user' => $content, 'updated_at' => date("Y-m-d, H:i:s"), 'username' => $this->session->userdata('username'));
    $this->db->query($query, $values);
    return $this->db->query("SELECT * FROM users WHERE username = ?;", array('username' => $username))->result_array();
  }
}