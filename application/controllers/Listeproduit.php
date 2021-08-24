defined('BASEPATH') OR exit('No direct script access allowed');

class Listeprpoduit extends BaseController {

	public function __construct()
	{
		parent::__construct();
	}

	public function listeproduit()
	{
		$this->load->model('Produit');
		$c=new Produit();
		$c=$c->listeProduit();
		$data=array();
		$data["caisse"]=$c;
		$data['vue']='accueil.php';
		$this->load->view('template',$data);
	}	

	

	