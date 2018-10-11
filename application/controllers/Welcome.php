<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function CreationConference()
	{
		$this->load->model("Model_conference");
		$data["numConference"] = $this->Model_conference->getNumConference();
		$data["niveaux"] = $this->Model_conference->getNiveaux();
		$data["themes"] = $this->Model_conference->getThemes();
		$data["technos"] = $this->Model_conference->getTechnos();
		$this->load->view("creationConference", $data);
	}

	public function InsertionConference()
	{
		$this->load->model("Model_conference");
		$this->Model_conference->insertConference($_GET["num"], 0, $_GET["theme"], $_GET["niveau"], $_GET["titre"], $_GET["contenu"], 0);
		$this->Model_conference->insertTechno($_GET["num"], $_GET["tab1"], $_GET["tab2"]);
		$data["numConference"] = $_GET["num"] + 1;
		$data["niveaux"] = $this->Model_conference->getNiveaux();
		$data["themes"] = $this->Model_conference->getThemes();
		$data["technos"] = $this->Model_conference->getTechnos();
		$this->load->view("creationConference_insertion", $data);
	}

	public function ListeConference()
	{
		$this->load->model("Model_conference");
		$data["Conferences"] = $this->Model_conference->getConference();
		$this->load->view("listeConference", $data);
	}

	public function AddVote()
	{
		$this->load->model("Model_conference");
		$this->Model_conference->addVote($_GET["tab1"], $_GET["tab2"]);
		$data["Conferences"] = $this->Model_conference->getConference();
		$this->load->view("listeConference", $data);
	}
}
