<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {

    private $table = 'halaman';
    // public $lang = '';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_notes');
    }

    public function index()
    { 

        $queryAllNotes = $this->M_notes->getAllNotes();
        $data = array('queryAllNotes' => $queryAllNotes);
        
        $this->load->view('home', $data);
    }

    public function fungsiTambah() 
	{
        $current_date = date("l, d F Y h:i:s a");
        $uid = uniqid();
		$title = $this->input->post('Title');
		$description = $this->input->post('Description');

		$data = array(
            'id' => $uid,
			'title' => $title,
			'description' => $description,
			'date_created' => $current_date,
            'date_updated' => $current_date
		);
        
		$this->M_notes->insertNote($data);
		redirect(base_url('')); 
	}

    public function fungsiDelete($id)
    {
        $this->M_notes->deleteNote($id);
        redirect(base_url(''));
    }

    public function fungsiGetNoteById($id)
    {
        $queryNoteDetail = $this->M_notes->getNoteById($id);
        $data = array('queryNoteDetail' => $queryNoteDetail);
        $this->load->view('edit_note', $data);
    }

    public function fungsiUpdate()
    {
        $id = $this->input->post('id');
        $title = $this->input->post('Title');
        $description = $this->input->post('Description');
        $current_date = date("l, d F Y h:i:s a");

        $ArrUpdate = array(
            'title' => $title,
            'description' => $description,
            'date_updated' => $current_date
        );

        $this->M_notes->updateNote($id, $ArrUpdate);
        redirect(base_url(''));
    }
        

    public function tes($id)
    {
 
        $queryNoteDetail = $this->M_notes->getNoteById($id);

        $DATA = array('queryNote' => $queryNoteDetail);
        $this->load->view('homepage/home/landing_#id', $DATA);

    }




public function getDataById($id)
{
    $query = $this->M_event->getEventById($id);
		$queryAllEvent = $this->M_event->getDataEvent();
		$DATA = array(
			'queryById' => $query,
			'queryAllEvent' => $queryAllEvent
		);

		$this->load->view('home', $DATA);
		$this->load->helper('form');
	}
    
    // public function fungsiEdit()
    // {
    //     $title = $this->input->post('Title');
    //     $description = $this->input->post('Description');
    //     // $jurusan = $this->input->post('jurusan');

    //     $ArrUpdate = array(
    //         'title' => $title,
    //         'description' => $description
    //     );

    //     $this->M_notes->updateNote($id, $ArrUpdate);
    //     redirect(base_url(''));
    // }
}


