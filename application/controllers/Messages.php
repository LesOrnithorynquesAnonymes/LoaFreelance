<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('message');
		//chargement de la librairie pour la validation du formulaire
  		$this->load->library('form_validation');
  		//chargement du helper form
  		$this->load->helper('form');
	}

	public function index()
	{
		$data = [
			'messages' => $this->message->getUserMessage($_SESSION['id'])
		];
		//var_dump($data);
		$this->load->view('messages',$data);
	}


	public function fetch()
	{
		$output = '';
		$query = '';
		if($this->input->post('id')){
			$query = $this->input->post('id');
		}
		$message_result = $this->message->getAMessage($query);


		if($message_result->num_rows() > 0)
		{
			foreach ($message_result->result() as $row) {

			$output = $row;

			}
		}
		else
		{
			$output .= '<p> Pas de message trouvé</p>';
		}

		echo json_encode($output);
	}


	public function sendMessage()
	{
		$output ='';
		$error ='';
		$destinataire ='';
		$title = '';
		$objet = '';
		$message = '';

		if($this->input->post('destinataire')){
			$destinataire = $this->input->post('destinataire');
		}
		else {
			$error .= "Destinataire manquant";

		}

		if($this->input->post('objet'))
		{
			$objet = $this->input->post('objet');
		}
		else {
			$error .= "Objet manquant";
		}
		if($this->input->post('message'))
		{
			$message = $this->input->post('message');
		}
		else {
			$error .= "Message vide";
		}
		if($this->input->post('titre'))
		{
			$title = $this->input->post('titre');
		}
		else {
			$error .= "Titre vide";
		}
		if($error == '')
		{
			$this->message->sendAMessage($_SESSION['id'],$this->message->getIdUserByEmail($this->input->post('destinataire')),$title,$objet,$message);
			$error .= "Message envoyé";
		}


		//echo json_encode($output);
		echo '<p>'. $error.'</p>';

	}


}
