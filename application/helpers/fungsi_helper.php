<?php
date_default_timezone_set('Asia/Jayapura');

function check_already_login()
{
	$ci = &get_instance();
	$user_session = $ci->session->userdata('userid');
	if ($user_session) {
		redirect('dashboard');
	}
}

function is_login()
{
	$ci = &get_instance();
	$user_session = $ci->session->userdata('userid');
	if (!$user_session) {
		redirect('auth');
	}
}

function check_admin()
{
	$ci = &get_instance();
	$ci->load->library('fungsi');
	if ($ci->fungsi->user_login()->level_id != 1) {
		redirect('dashboard_user');
	}
}

function cekChecked($barang_id , $nama_acc)
{
	$ci = &get_instance();
	$data = $ci->db->query("SELECT * FROM barang_acc  where nama_acc='$nama_acc' and barang_id='$barang_id'");
	if($data->num_rows() > 0){
		return 'checked';
	}
} 

