<?php date_default_timezone_set('UTC'); ?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	  public function __construct()
  {
    parent:: __construct();
    $this->output->enable_profiler();
  }

	public function index()
	{
		$this->load->view('login_view');
	}

	public function registration()
	{
		$this->load->view('registration_view');
	}

	public function view_profile()
	{
		$current_user_name = $this->session->userdata('name');
		$current_birthday = $this->session->userdata('birthday');
		$current_username = $this->session->userdata('username');
    $current_about_me = $this->session->userdata('about_me');
		$this->load->view('profile_view', array('name' => $current_user_name, 'username' => $current_username, 'birthday' => $current_birthday, 'about_me' => $current_about_me));
	}

  public function view_log_off()
  {
    $this->load->view('log_out_view');
  }

  public function view_add_friend()
  {
    $this->load->view('add_friend_view');
  }

	public function log_off()
  {
    $this->session->sess_destroy();
    $this->load->view('login_view');
  }

  public function add_about_me()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules("about_me", "About Me", "trim|required");
    if ($this->form_validation->run() === FALSE) {
      $this->session->set_flashdata("registration_errors", validation_errors());
      redirect('/users/registration');
    } else
    {
      $current_user_name = $this->session->userdata('name');
      $current_birthday = $this->session->userdata('birthday');
      $current_username = $this->session->userdata('username');
      $current_about_me = null;
      $content = $this->input->post('about_me');
      $username = $this->session->userdata('username');
      $this->load->model('user');
      $about_me = $this->user->add_about_me($content, $username);
      $this->load->view('profile_view', array('name' => $current_user_name, 'username' => $current_username, 'birthday' => $current_birthday, 'about_me' => $current_about_me, 'content' => $about_me));
    }
    
  }

	public function register_user()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("input-registration-first_name", "First Name", "trim|required");
    $this->form_validation->set_rules("input-registration-last_name", "Last Name", "trim|required");
    $this->form_validation->set_rules("input-registration-username", "Userame", "trim|required");
    $this->form_validation->set_rules("input-registration-email", "Email", "trim|required|valid_email");
    $this->form_validation->set_rules("input-registration-password", "Password", "trim|required|matches[input-registration-confirmation]|md5");
    $this->form_validation->set_rules("input-registration-confirmation", "Confirmation", "trim|required");
    $this->form_validation->set_rules("input-registration-birthday", "Birthdate", "trim|required|callback_birthdate_check");
    if ($this->form_validation->run() === FALSE) {
    	$this->session->set_flashdata("registration_errors", validation_errors());
    	redirect('/users/registration');
    } else
    {
    	$this->load->model('user');
            $user = $this->user->register_user();
            $user_session = array( 
                            'name' => $user['first_name'] . ' ' . $user['last_name'],
														'username' => $user['username'],
														'birthday' => $user['birthday'],
														'id' => $user['id'],
														'logged_in' => TRUE
                      );
            $this->session->set_userdata($user_session);
            redirect('/users/view_profile');
    }
	}

	public function birthdate_check($str)
        {
                if ($str == false)
                {
                        $this->form_validation->set_message('birthdate_check', 'The birthdate field must be valid');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }

	public function login_user()
	{
		$username = $this->input->post('input-login-username');
		$password = md5($this->input->post('input-login-password'));
		$this->load->model('user');
		$user = $this->user->login_user($username);
		if($user && $user['password'] === $password)
		{
			$user_session = array(
														'name' => $user['first_name'] . ' ' . $user['last_name'],
														'username' => $user['username'],
														'birthday' => $user['birthday'],
														'id' => $user['id'],
                            'about_me' => $user['about_user'],
														'logged_in' => TRUE
														);
			$this->session->set_userdata($user_session);
			redirect('/users/view_profile');
		} else
		{
			$this->session->set_flashdata('login_errors', 'Either email or password was incorrect.');
			redirect('/users/index');

		}
	}




}

// when goes to profile view, needs to use users id to grab data
// check on validation error showing
// need to add api's (pokeapi,zipcode radius, and current location)
// need to add user zip code to session
// add about me to post to database