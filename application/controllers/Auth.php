<?php 

class Auth extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() == false){
		$data['title'] = 'Login';
		$this->load->view('templates_login/header',$data);
		$this->load->view('auth/login');
		$this->load->view('templates_login/footer');
		}else{
			$this->_masuk();
		}	
	}

	private function _masuk()
	{
		$email = $this->input->post('nama');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user',['email' => $email])->row_array();
			if($user)
				if($user['is_aktif'] == 1){
					if(password_verify($password, $user['password'])){
						$data = [
							'email' => $user['email'],
							'password' => $user['password']
						];
						$this->session->set_userdata($data);
						if($user['role_id'] == 1){
						redirect('admin/dashboard');
					}else{
						redirect('home');
					}
				} else{

					 $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
											 Wrong password !!
											</div>');
					 					redirect('auth');
					}
				}else{

					 $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
											tidak teregistrasi !
											</div>');
					 					redirect('auth');
				
			}
	}
	public function registration()
	{
		

		$this->form_validation->set_rules('nama','Nama' ,'required');
		$this->form_validation->set_rules('email','Email','required|valid_email',[
			'valid_email' => 'Email tidak Valid' 
		]);
		$this->form_validation->set_rules('password1','Password','required|trim|matches[password2]'//[
		//	'matches' => 'password tidak sama'
	//	]
	);
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');
		
		if($this->form_validation->run() == false){
		$data['title'] = 'Regisration';
		$this->load->view('templates_login/header',$data);
		$this->load->view('auth/registration');
		$this->load->view('templates_login/footer');
		}else{
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama',TRUE)),
				'email' => htmlspecialchars($this->input->post('email', TRUE)),
				'gambar' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_aktif' => 1,
				'tanggal' => time()
			];
			$this->db->insert('user',$data);
			 $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
											Your account has been registered !
											</div>');
			redirect('auth');
		}
	}

}

 ?>