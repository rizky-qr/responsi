<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata("role_id") != 1) {
            //$this->session->set_flashdata('pesan', 'anda bukan admin');
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Anda Bukan Admin</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect('auth');
        }
        //Ending a php session after 30 minutes of inactivity

        // if ($this->session->sess_expiration <= '0') {
        //     $this->session->set_flashdata('pesan', 'session sudah expired, silahkan login kembali ');
        //     redirect('auth');
        // }

        $this->load->model('m_siswa');
        $this->load->model('m_user');
        $this->load->model('m_guru');
        $this->load->model('m_setting');
    }


    public function index()
    {
        $data = [
            'detail'  => $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row(),
            'siswa' => $this->m_siswa->jumlahdata(),
            'user' => $this->m_user->jumlahdata(),
            'guru' => $this->m_guru->jumlahdata(),
            'foto' => $this->db->get('tb_foto')->num_rows(),
            'menu'    => 'Dashboard',
            'title' => 'Dashboard',
            'isi'   => 'admin/v_dashboard'
        ];
        return $this->load->view('template/v_wrapper', $data);
    }
    public function setting()
    {

        $data = [
            'setting' => $this->m_setting->detail_web(),
            'carausel' => $this->m_setting->foto()->result(),
            // 'total' => $this->m_setting->jumlahdata(),
            'menu'    => 'Dashboard',
            'title' => 'Pengaturan WEB',
            'isi'   => 'admin/v_setting'
        ];
        return $this->load->view('template/v_wrapper', $data);
    }
    public function update()
    {
        $config['upload_path'] = './assets/foto/';
        $config['allowed_types'] = 'jpg|png';
        $config['file_name'] = $this->input->post('nama_kepsek');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file')) {
            echo "<script>alert('Ulangi Lagi !!')
                                window.location='" . base_url('dashboard/setting') . "';
                            </script>";
        } else {
            $file = $this->upload->data();
            $data = array(
                'id'                =>  '1',
                'nama_sekolah'        =>    $nama_sekolah        = $this->input->post('nama_sekolah'),
                'nama_kepsek'        =>    $nama_kepsek        = $this->input->post('nama_kepsek'),
                'nip'                =>    $nip                = $this->input->post('nip'),
                'alamat'            =>    $alamat                = $this->input->post('alamat'),
                'email'                =>    $email                  = $this->input->post('email'),
                'no_telp'            =>    $no_telp            = $this->input->post('no_telp'),
                'visi'                =>    $visi                = $this->input->post('visi'),
                'misi'                =>    $misi                = $this->input->post('misi'),
                'sambutan'            =>    $sambutan            = $this->input->post('sambutan'),
                'foto_kepsek'         =>  $file['file_name'],
            );
            $setting = $this->m_setting->detail_web();
            if (file_exists('./assets/foto/' . $setting->foto_kepsek)) {
                unlink('./assets/foto/' . $setting->foto_kepsek);
            }
            $this->m_setting->update($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
				<strong>Data berhasil di edit</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect('dashboard/setting');
        }
        $data = array(
            'id'                =>  '1',
            'nama_sekolah'        =>    $nama_sekolah        = $this->input->post('nama_sekolah'),
            'nama_kepsek'        =>    $nama_kepsek        = $this->input->post('nama_kepsek'),
            'nip'                =>    $nip                = $this->input->post('nip'),
            'alamat'            =>    $alamat                = $this->input->post('alamat'),
            'email'                =>    $email                  = $this->input->post('email'),
            'no_telp'            =>    $no_telp            = $this->input->post('no_telp'),
            'visi'                =>    $visi                = $this->input->post('visi'),
            'misi'                =>    $misi                = $this->input->post('misi'),
            'sambutan'            =>    $sambutan            = $this->input->post('sambutan'),
        );
        $this->m_setting->update($data, 'tb_setting');
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<strong>Data berhasil di edit</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');
        redirect('dashboard/setting');
    }
    public function profil()
    {

        $data = [
            'setting' => $this->m_setting->profil(),
            'menu'    => 'Dashboard',
            'title' => 'Profil',
            'isi'   => 'admin/v_profil'
        ];
        return $this->load->view('template/v_wrapper', $data);
    }

    public function updateuser()
    {
        $config['upload_path'] = './assets/foto/';
        $config['allowed_types'] = 'jpg|png';
        $config['file_name'] = $this->input->post('image');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('image')) {
            echo "<script>alert('Ulangi Lagi !!')
                                window.location='" . base_url('dashboard/profil') . "';
                            </script>";
        } else {
            $image = $this->upload->data();
            $data = array(
                'id'                =>  '1',
                'nama'        =>    $nama        = $this->input->post('nama'),
                'username'    =>    $username    = $this->input->post('username'),
                'password'    =>    $password    = $this->input->post('password'),
                'image'        =>  $image['file_name'],
            );
            $setting = $this->m_setting->profil();
            if (file_exists('./assets/foto/' . $setting->image)) {
                unlink('./assets/foto/' . $setting->image);
            }
            $this->m_setting->updateprofil($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
				<strong>Data berhasil di edit</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect('dashboard/profil');
        }
        $data = array(
            'id'                =>  '1',
            'nama'        =>    $nama        = $this->input->post('nama'),
            'username'    =>    $username    = $this->input->post('username'),
            'password'    =>    $password    = $this->input->post('password'),

        );
        $this->m_setting->updateprofil($data, 'tb_user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<strong>Data berhasil di edit</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');
        redirect('dashboard/profil');
    }

    public function tambahfoto()
    {

        $config['upload_path'] = './assets/foto/carausel';
        $config['allowed_types'] = 'jpg|png';
        $config['file_name'] = 'file_' . time();
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file')) {
            echo "<script>alert('Ulangi Lagi !!')
                                window.location='" . base_url('dashboard/setting') . "';
                            </script>";
        } else {
            $file = $this->upload->data();
            $data = array(
                'informasi'        =>    $informasi        = $this->input->post('informasi'),
                'foto'             =>     $file['file_name'],
            );
            $this->m_setting->input($data, 'tb_carausel');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil di tambahkan</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect('dashboard/setting');
        }
    }
    public function hapusfoto($id)
    {

        $where = array('id' => $id);
        $detail = $this->m_setting->detail($id);
        if (file_exists('./assets/foto/carausel/' . $detail->foto)) {
            unlink('./assets/foto/carausel/' . $detail->foto);
            $this->m_setting->hapus($where, 'tb_carausel');
            $this->session->set_flashdata('pesan', '<div class="alert alert-secondary alert-dismissible fade show" role="alert">
			<strong>Data berhasil di Hapus</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');

            redirect('dashboard/setting');
        }
    }
}
