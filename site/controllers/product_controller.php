<?php require "C:/xampp/htdocs/ltweb/system/core/Function.php"; ?>
<?php require "C:/xampp/htdocs/ltweb/system/core/Database.php"; ?>
<?php session_start(); ?>
<?php
class PRODUCT_CONTROLLER {
	private $model;
	public function __construct(){
		require ('models/product_model.php');
		$this->model = new PRODUCT_MODEL();
	}
	public function run(){
		$action = isset($_GET['action'])?$_GET['action']:'';
		switch ($action) {
			case 'listProduct':
			$this->listProduct();
			break;

			case 'searchProduct':
			$this->searchProduct();
			break;

			case 'detailProduct':
			$this->detailProduct();
			break;

			case 'register':
			$this->register();
			break;

			case 'filter':
			$this->filter();
			break;

			case 'filter2':
			$this->filter2();
			break;

			case 'searchall':
			$this->searchall();
			break;

			case 'aboutus':
			$this->aboutus();
			break;

			default:
				# code...
			break;
		}
	}
	public function filter(){
		$idBrand =getInput('id');
		$listProducts=$this->model->listProduct();
		$listCataloge=$this->model->cataloge();
		$listBrand=$this->model->listBrand();
		$filter=$this->model->filter($idBrand);
		require('views/filter.php');
	}

	public function filter2(){
		$idCate =getInput('id');
		$idBrand = getInput('brand');
		$listProducts=$this->model->listProduct();
		$listCataloge=$this->model->cataloge();
		$listBrand=$this->model->listBrand();
		$filter=$this->model->filter($idBrand);
		$filter2=$this->model->filter($idCate,$idBrand);
		require('views/filter2.php');
	}

	public function listProduct(){
		$listProducts=$this->model->listProduct();
		$listCataloge=$this->model->cataloge();
		$listBrand=$this->model->listBrand();
		require('views/view.php');
	}

	public function detailProduct(){
		$id=getInput('id');
		$listProducts=$this->model->listProduct();
		$detailProducts=$this->model->detailProduct($id);
		$listCataloge=$this->model->cataloge();
		$listBrand=$this->model->listBrand();
		require('views/product.php');
	}


	public function searchall(){
		$key_value =" ";
		if(!isset($_POST['searchall']))
			require('views/view.php');
			else{
				$key_value = $_POST['key_search'];
		}
		$listProducts=$this->model->listProduct();
		$listCataloge=$this->model->cataloge();
		$listBrand=$this->model->listBrand();
		$listsearchall=$this->model->searchall($key_value);
		require('views/searchall.php');
	}


	public function searchProduct(){
		if(!isset($_POST['search']))
			require('views/view.php');
			else{
				$valueSearchfrom = $_POST['price_from'];
				$valueSearchto = $_POST['price_to'];
		}
		$listCataloge=$this->model->cataloge();
		$listBrand=$this->model->listBrand();
		$listProducts=$this->model->searchProduct($valueSearchfrom,$valueSearchto);
		require('views/search.php');
	}

	public function register(){
		$id=getInput('id');
		$listProducts=$this->model->listProduct();
		$detailProducts=$this->model->detailProduct($id);
		$listCataloge=$this->model->cataloge();
		$listBrand=$this->model->listBrand();
		require('views/register.php');
	}

	public function aboutus(){
		$listCataloge=$this->model->cataloge();
		$listBrand=$this->model->listBrand();
		require('views/aboutus.php');
	}
}
	?>
