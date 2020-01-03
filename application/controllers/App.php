<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	
	public function index()
	{
		
		if ($this->session->userdata('username') == "") {
			redirect('app/login');
		}
		$data = array(
			'konten' => 'home',
            'judul' => 'Dashboard',
		);
		$this->load->view('v_index', $data);
	}

	public function lap_karyawan()
	{
		$data = array(
			'rw' => $this->db->query("SELECT * FROM karyawan, pekerjaan where karyawan.id_pekerjaan=pekerjaan.id_pekerjaan"),
			'konten' => 'lapkaryawan',
            'judul' => 'Dashboard',
		);
		$this->load->view('lapkaryawan', $data);
	}

	public function lap_gajikaryawan()
	{
		$data = array(
			'rw' => $this->db->query("SELECT * FROM karyawan, pekerjaan where karyawan.id_pekerjaan=pekerjaan.id_pekerjaan "),
			'konten' => 'lapgajikaryawan',
            'judul' => 'Dashboard',
		);
		$this->load->view('lapgajikaryawan', $data);
	}

	public function tampilprofil($id)
	{
		$d = $this->db->query("SELECT * from karyawan, pekerjaan where karyawan.id_pekerjaan=pekerjaan.id_pekerjaan and id_karyawan='$id'")->row();
		$data = array(
			'rw' => $d,
			'konten' => 'tampilprofil',
            'judul' => 'Data User',
		);
		$this->load->view('v_index', $data);
	}

	function profiluser($id){
		if ($_POST==NULL) {
			$d = $this->db->query("SELECT * from karyawan, pekerjaan where karyawan.id_pekerjaan=pekerjaan.id_pekerjaan and id_karyawan='$id'")->row();
			$data = array(
				'rw' => $d,
				'konten' => 'profiluser',
	            'judul' => 'Data Profil',
			);
			$this->load->view('v_index', $data);
		} else {
			$data = array(
				'nik' => $this->input->post('nik'),
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'agama' => $this->input->post('agama'),
				'pendidikan' => $this->input->post('pendidikan'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
				'id_pekerjaan' => $this->input->post('id_pekerjaan'),
			);

			$this->db->where('id_karyawan', $id);
			$this->db->update('karyawan', $data);
			?>
			<script type="text/javascript">
				alert('Berhasil ubah data !');
				window.location='<?php echo base_url()?>app/profiluser/<?php echo $id; ?>';
			</script>
			<?php
		}
	}

	function profiladmin($id){
		if ($_POST==NULL) {
			$d = $this->db->query("SELECT * from user where id_user='$id'")->row();
			$data = array(
				'rw' => $d,
				'konten' => 'profiladmin',
	            'judul' => 'Data Profil',
			);
			$this->load->view('v_index', $data);
		} else {
			$data = array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),				
			);

			$this->db->where('id_user', $id);
			$this->db->update('user', $data);
			?>
			<script type="text/javascript">
				alert('Berhasil ubah data !');
				window.location='<?php echo base_url()?>app/profiladmin/<?php echo $id; ?>';
			</script>
			<?php
		}
	}

	function ubahpass($id){
		if ($_POST == NULL) {
			$data = array(
				'konten' => 'ubahpass',
	            'judul' => 'Ubah password',
			);
			$this->load->view('v_index', $data);
		} else {
			$pass_lama = $this->input->post('pass_lama');
			$pass_baru = $this->input->post('pass_baru');

			$cek = $this->db->query("SELECT password FROM karyawan where id_karyawan='$id'")->row();
			if ($cek->password == $pass_lama) {
				$data = array(
					'password' => $pass_baru
				);
				$this->db->where('id_karyawan', $id);
				$this->db->update('karyawan',$data);
				?>
				<script type="text/javascript">
					alert('Berhasil ubah password, silahkan login kembali');
					window.location='<?php echo base_url()?>app/logout';
				</script>
				<?php
			}
		}

	}

	public function login()
	{
		

		if ($this->input->post() == NULL) {
			$this->load->view('login');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$cek_user = $this->db->query("SELECT * FROM user WHERE username='$username' and password='$password' ");
			$cek_kry = $this->db->query("SELECT * FROM karyawan WHERE username='$username' and password='$password' ");
			if ($cek_user->num_rows() == 1) {
				foreach ($cek_user->result() as $row) {
					$sess_data['id_user'] = $row->id_user;
					$sess_data['nama'] = $row->nama;
					$sess_data['username'] = $row->username;
					$sess_data['level'] = 'admin';
					$this->session->set_userdata($sess_data);
				}
				redirect('app');
			} elseif ($cek_kry->num_rows() == 1) {
				foreach ($cek_kry->result() as $row) {
					$sess_data['id_user'] = $row->id_karyawan;
					$sess_data['nama'] = $row->nama;
					$sess_data['username'] = $row->username;
					$sess_data['level'] = 'user';
					$this->session->set_userdata($sess_data);
				}
				redirect('app');
			} else {
				?>
				<script type="text/javascript">
					alert('Username dan password kamu salah !');
					window.location="<?php echo base_url('app/login'); ?>";
				</script>
				<?php
			}

		}
	}

	function slip_gaji($nik, $tgl){

		$data = array(
			'nik' => $nik,
			'tgl' => $tgl,
		);
		$this->load->view('slipgaji', $data);
	}

	function logout()
	{
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('username');
		session_destroy();
		redirect('app/login');
	}

	
}
