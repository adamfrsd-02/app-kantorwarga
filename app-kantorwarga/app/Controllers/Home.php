<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = 'Beranda - Kantor Warga';
		echo view('layout/header',$data);
		echo view('beranda/homepage');
		echo view('layout/footer');
	}

	public function login()
	{
		$data['title'] = 'Login - Kantor Warga';
		echo view('layout/header', $data);
		echo view('beranda/login');
		echo view('layout/footer');
	}

	public function how_to()
	{
		$data['title'] = 'Cara Penggunaan - Kantor Warga';
		echo view('layout/header', $data);
		echo view('beranda/how_to');
		echo view('layout/footer');
	}

	public function comingsoon()
	{
		echo view('errors/html/comingsoon');
	}
}
