<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('getdata');
	}
	public function index()
	{

		$this->load->view('welcome_message');
	}
	public function book(){
		$form_data = $this->input->post();
		$data['servername'] = $this->input->post("servername");
		$data['catagory'] = $this->input->post("catagory");
		$data['serversize'] = $this->input->post("serversize");
		$uptime = date('Y-m-d H:i:s',strtotime($this->input->post("uptime")));
		$data['uptime'] = $uptime;
		$this->load->model('Catalog');
		$this->Catalog->save($data);
		$this->load->view('welcome_result', $data);
	}
	public function alldata()
        {

                $this->data['Welcome'] = $this->getdata->getPosts();
                $this->load->view('welcome_data', $this->data);

        }
     	
}
