<?php
class Hello extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('Hello_Model');
	}

	public function savedata()
	{
		$this->load->view('catalog');
		if($this->input->post('save'))
		{
		$n=$this->input->post('servername');
		$e=$this->input->post('catagory');
		$s=$this->input->post('serversize');
		$u=$this->input->post('uptime');
		$this->Hello_Model->saverecords($n,$e,$s,$u);		
		redirect("Hello/dispdata");  
		}
	}
	
	public function dispdata()
	{
	$result['data']=$this->Hello_Model->displayrecords();
	$this->load->view('display_records',$result);
	}

	public function deletedata()
	{
	$id=$this->input->get('id');
	$this->Hello_Model->deleterecords($id);
	redirect("Hello/dispdata");
	}

	public function updatedata()
	{
	$id=$this->input->get('id');
	$result['data']=$this->Hello_Model->displayrecordsById($id);
	$this->load->view('update_records',$result);	
	
		if($this->input->post('update'))
		{
		$n=$this->input->post('servername');
                $e=$this->input->post('catagory');
                $s=$this->input->post('serversize');
                $u=$this->input->post('uptime');
                $this->Hello_Model->saverecords($n,$e,$s,$u,$id);
		redirect("Hello/dispdata");
		}
	}
	
	public function exportCSV(){
        // get data
        $myData = $this->Hello_Model->displayrecords();
 
        // file name
        $filename = 'mydata_'.date('Ymd').'.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");
 
        // file creation
        $file = fopen('php://output', 'w');
 
        $header = array("Column 1","Column 2","Column 3","Column 4","Column 4");
        fputcsv($file, $header);
 
        foreach ($myData as $line){
            fputcsv($file,array($line->field1,$line->field2,$line->field3,$line->field4,$line->field5));
        }
 
        fclose($file);
        exit;
    }
}
?>
