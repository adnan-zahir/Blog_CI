<?php
class Post_model extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function get_all()
  {
    $query = $this->db->get('post');
    return $query->result_array();
  }

  public function get($id)
  {
    $query = $this->db->get_where('post', ['post_id' => $id]);

    return $query->row_array();
  }

  public function create()
  {
    $this->load->helper('url');

    $data = [
      'judul' => $this->input->post('judul'),
      'deskripsi' => $this->input->post('deskripsi')
    ];

    return $this->db->insert('post', $data);
  }
  public function update()
  {
   $this->load->helper('url');

   $data = [
     'judul' => $this->input->post('judul'),
     'deskripsi' => $this->input->post('deskripsi')
   ];

   $this->db->where('post_id', $this->input->post('post_id'));
   $this->db->update('post', $data);
  }

  public function delete($id)
  {
    $this->db->where('post_id', $id);
    $this->db->delete('post');
  }
}
