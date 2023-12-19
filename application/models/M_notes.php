<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_notes extends CI_Model {
    function getAllNotes(){
        $query = $this->db->get('notebook');
        return $query->result();
    }

    function insertNote($data){
        $this->db->insert('notebook', $data);
    }

    function deleteNote($id){
        $this->db->where('id', $id);
        $this->db->delete('notebook');
    }

    function getNoteById($id){
        $this->db->where('id', $id);
        $query = $this->db->get('notebook');
        return $query->row();
    }

    function updateNote($id, $data){
        $this->db->where('id', $id);
        $this->db->update('notebook', $data);
    }

    function getDataMahasiswaDetail($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('notebook');
        return $query->row();
    }
    
    function updateDataMahasiswa($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('notebook', $data);
    }
}