<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_control extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		// if ($this->session->userdata("kode")) {
		// 	redirect("dashboard");
		// }
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ($this->form_validation->run() == false) {
			$data['title'] = "Login";
			$this->load->view('login', $data);
		} else {
			$this->_login();
		}
	}

	public function ambilData()
	{
		$data = $this->db_model->get_all($this->input->get('target'));
		echo json_encode($data->result());
	}

	private function _login()
	{
		$data['title'] = "Login";
		$nama = $this->input->post("nama");
		$password = $this->input->post("password");
		$user = $this->db_model->get_where("tbl_pengguna", ["id_pengguna" => $nama])->row_array();

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'id_pengguna' => $user['id_pengguna'],
					'nama' => $user['nama']
				];
				$this->session->set_userdata($data);

				redirect('dashboard_control');
			} else {
				$this->session->set_flashdata('gagal_login', 'Maaf, Password anda salah :(');
				$this->load->view('login', $data);
			}
		} else {
			$this->session->set_flashdata('gagal_login', 'Silahkan Pilih pengguna dulu ya :)');
			$this->load->view('login', $data);
		}
	}

	public function ubahPassword()
	{
		$this->form_validation->set_rules('passBaru', 'Password', 'required|trim|min_length[5]|matches[passVerif]');
		$this->form_validation->set_rules('passVerif', 'Verifikasi Password', 'required|trim|matches[passBaru]');

		$data['title'] = "Ubah password";
		if ($this->form_validation->run()) {
			$password = password_hash($this->$this->input->post("passBaru"), PASSWORD_DEFAULT);
			$email = $this->session->userdata("reset_email");

			$data = ["password" => $password];
			$this->database_model->update("user", $data, ["email" => $email]);

			$this->session->unset_userdata('reset_email');

			$this->session->set_flashdata('berhasil_logout', 'Password berhasil diubah. Silahkan Log in :)');
			redirect('auth');
		} else {
			$this->render_auth("auth/resetPassword", $data);
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('kode');
		$this->session->set_flashdata('berhasil_logout', 'Anda telah berhasil log out. Terimkasih :)');
		$data['title'] = "Login";
		redirect('Auth', $data);
	}

	public function blocked()
	{
		$data['title'] = "403 Forbidden";
		$this->render_auth("auth/blocked", $data);
	}
}
