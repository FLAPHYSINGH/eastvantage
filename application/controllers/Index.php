<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Index extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library("pagination");
		$this->load->model('Billing_model');
	}

	public function index()
	{
		$data = array();
		$config = array();
		$config["base_url"] = WEB_URL."/index/index";
		$config["total_rows"] = $this->Billing_model->get_count();
		$config["per_page"] = 12;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["links"] = $this->pagination->create_links();
		$data['blogs'] = $this->Billing_model->getListDetails($config["per_page"], $page,$_GET);
		$view = "index";
		$data['pvalue'] = ["page_title" => "Index", "view" => $view];
		$this->loadView($data);
	}

	public function create()
	{
		$data = array();
		$docu_path = FILE_UPLOAD_PATH;
		if (!is_dir($docu_path)) {
			mkdir($docu_path, 0777, TRUE);
		}
		if (isset($_POST['submit']) && ($_POST['submit'] == 'submit')) {
			if (is_array($_FILES)) {
				$target_file = $docu_path . basename($_FILES["file"]["name"]);
				if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
					$_POST['file'] = $_FILES["file"]["name"];
				}
			}
			$returnVal = $this->Billing_model->saveBlog($_POST);
			$this->setSuccessFailMessage($returnVal);
			header("Location:".WEB_URL);
			die();
		}
		$view = "create_new";
		$data['pvalue'] = ["page_title" => "Index", "view" => $view];
		$this->loadView($data);
	}

	function getDetails()
	{
		$id = $this->uri->segment(3);
		$data['result'] = $this->Billing_model->getDetails($id);
		$view = "details_page";
		$data['pvalue'] = array("page_title" => "Details",  "view" => $view);
		$this->loadView($data);
	}
}

