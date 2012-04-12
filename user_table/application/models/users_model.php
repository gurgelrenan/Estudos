<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Users_model extends CI_Model
    {
        function get($id = null)
        {
            $this->db->select('*');
            $this->db->from('Users');
            if (!is_null($id)) $this->db->where('id', $id);
            $this->db->order_by('id', 'desc');
            return $this->db->get()->result();
        }
 
        function add($data)
        {
            $this->db->insert('Users', $data);
            return $this->db->insert_id();
        }
 
        function update($data, $id)
        {
            $this->db->where('id', $id);
            $this->db->update('Users', $data);
            return $this->db->affected_rows();
        }
 
        function delete($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('Users');
            return $this->db->affected_rows();
        }   
 
    }
