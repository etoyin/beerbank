<?php



/**
 *
 */
class Home extends CI_Controller
{

  function __construct()
  {
    parent:: __construct();

  }

  public function index()
	{
		$this->load->view('home_view');
	}

  public function advance()
  {
    $this->load->view('advance');
  }

  public function favorite()
  {
    //$image_check = $_POST['image_check'];
    if (!empty($_POST['image_check'])) {
      $favorite = implode("|", $_POST["image_check"]);
      $data = array('favorite' => $favorite);
      $this->load->view('favorite', $data);
    }else {
      $data = array('favorite' => 'No Favorites selected');
      $this->load->view('favorite', $data);
    }

  }
}


 ?>
