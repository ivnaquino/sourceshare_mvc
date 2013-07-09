<?php  

class homeController extends Controller
{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->_view->_titulo = "Home";
		$this->_view->renderizar('home');
	}
}

?>