<?php
// if ($this->session->userdata('username') == "" ); {
//     $this->session->set_flashdata('pesan','Anda Belum Login');
//     redirect('auth');
// }

// if ($_COOKIE['status'] != "login") {
//     $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
//     <strong>Anda Belum Login</strong>
//     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//         <span aria-hidden="true">&times;</span>
//     </button>
//     </div>');
//     redirect('auth');
// }

// //filter bukan admin
// if ($this->session->userdata('role_id') != 1) {
//     $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//     <strong>Anda Bukan admin!</strong> 
//     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//         <span aria-hidden="true">&times;</span>
//     </button>
//     </div>');
//     redirect('auth');
// }



$this->load->view('template/v_header');
$this->load->view('template/v_nav');
$this->load->view('template/v_aside');
$this->load->view('template/v_content');
$this->load->view('template/v_footer');
