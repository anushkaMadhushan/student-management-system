<?php
 
 
class Project_model extends CI_Model
{
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
 
    /*
        Get all the records from the database
    */
    public function get_all()
    {
        $projects = $this->db->get("students")->result();
        return $projects;
    }
 
    /*
        Store the record in the database
    */
    public function store()
    {    
        $data = [
            'Batch_id' => $this->input->post('Batch_id'),
            'Course_id' => $this->input->post('Course_id'),
            'Student_name' => $this->input->post('Student_name'),
            'Student_id' => $this->input->post('Student_id'),
            'Student_nic' => $this->input->post('Student_nic'),
            'Student_phone' => $this->input->post('Student_phone')
        ];
 
        $result = $this->db->insert('students', $data);
        return $result;
    }
 
    /*
        Get an specific record from the database
    */
    public function get($id)
    {
        $project = $this->db->get_where('students', ['ID' => $id ])->row();
        return $project;
    }
 
 
    /*
        Update or Modify a record in the database
    */
    public function update($id) 
    {
        $data = [
            'Batch_id' => $this->input->post('Batch_id'),
            'Course_id' => $this->input->post('Course_id'),
            'Student_name' => $this->input->post('Student_name'),
            'Student_id' => $this->input->post('Student_id'),
            'Student_nic' => $this->input->post('Student_nic'),
            'Student_phone' => $this->input->post('Student_phone')
        ];
 
        $result = $this->db->where('ID', $id)->update('students', $data);
        return $result;
                 
    }
 
    /*
        Destroy or Remove a record in the database
    */
    public function delete($id)
    {
        $result = $this->db->delete('students', array('ID' => $id));
        return $result;
    }
     
}
