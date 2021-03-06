<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class MSublet_rents extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_by_id($id) {
    $data = array();
    $this->db->select('sublet.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('sublet_rents AS sublet');
    $this->db->join('districts', 'districts.id = sublet.district_id');
    $this->db->join('areas', 'areas.id = sublet.area_id');
    $this->db->join('users', 'users.id = sublet.user_id');
    $this->db->where('sublet.id', $id);
    $this->db->limit(1);
    $q = $this->db->get();
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function get_latest($user_id = NULL) {
    $data = array();
    $this->db->select('sublet.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('sublet_rents AS sublet');
    $this->db->join('districts', 'districts.id = sublet.district_id');
    $this->db->join('areas', 'areas.id = sublet.area_id');
    $this->db->join('users', 'users.id = sublet.user_id');
    if ($user_id) {
      $this->db->where('sublet.user_id', $user_id);
    }
    $this->db->limit(8);
    $this->db->order_by('sublet.id', 'DESC');
    $q = $this->db->get();
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function get_featured($limit = NULL) {
    $data = array();
    $this->db->select('sublet.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('sublet_rents AS sublet');
    $this->db->join('districts', 'districts.id = sublet.district_id');
    $this->db->join('areas', 'areas.id = sublet.area_id');
    $this->db->join('users', 'users.id = sublet.user_id');
    if($limit){
      $this->db->limit($limit);
    }
    $this->db->where('sublet.featured', 1);
    $this->db->order_by('sublet.id', 'DESC');
    $q = $this->db->get();
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function get_all($user_id = NULL) {
    $data = array();
    $this->db->select('sublet.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('sublet_rents AS sublet');
    $this->db->join('districts', 'districts.id = sublet.district_id');
    $this->db->join('areas', 'areas.id = sublet.area_id');
    $this->db->join('users', 'users.id = sublet.user_id');
    if ($user_id) {
      $this->db->where('sublet.user_id', $user_id);
    }
    $this->db->order_by('sublet.id', 'DESC');
    $q = $this->db->get();
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }
  
  public function count_by_area($area_id = NULL) {
    $this->db->select('id');
    if ($area_id) {
      $this->db->where('area_id', $area_id);
    }
    $this->db->from('sublet_rents');
    
    return $this->db->count_all_results();
  }

  public function get_area_list($district_id = NULL) {
    $data = array();
    $this->db->select('sublet.*, districts.name as district_name, areas.name as area_name, users.name as user_name');
    $this->db->from('sublet_rents AS sublet');
    $this->db->join('districts', 'districts.id = sublet.district_id');
    $this->db->join('areas', 'areas.id = sublet.area_id');
    $this->db->join('users', 'users.id = sublet.user_id');
    $this->db->group_by('sublet.area_id');
    if ($district_id) {
      $this->db->where('sublet.district_id', $district_id);
    }
    $this->db->order_by('sublet.id', 'DESC');
    $q = $this->db->get();
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $row['total_by_area'] = MSublet_rents::count_by_area($row['area_id']);
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }
  
  public function get_list($area_id = NULL, $sublet_id = NULL) {
    $data = array();
    $this->db->select('sublet.*, districts.name as district_name, areas.name as area_name, users.name as user_name, users.email, profiles.phone');
    $this->db->from('sublet_rents AS sublet');
    $this->db->join('districts', 'districts.id = sublet.district_id');
    $this->db->join('areas', 'areas.id = sublet.area_id');
    $this->db->join('users', 'users.id = sublet.user_id');
	$this->db->join('profiles', 'profiles.user_id = users.id','left');
    if($sublet_id){
      $this->db->where('sublet.id', $sublet_id);
    }
    if ($area_id) {
      $this->db->where('sublet.area_id', $area_id);
    }
    $this->db->order_by('sublet.id', 'DESC');
    $q = $this->db->get();
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function create($user_id = NULL) {
    $data = array(
        'user_id' => $user_id,
        'title' => $this->input->post('title'),
        'house' => $this->input->post('house'),
        'road' => $this->input->post('road'),
        'sector' => $this->input->post('sector'),
        'area_id' => $this->input->post('area_id'),
        'district_id' => $this->input->post('district_id'),
        'total_bed' => $this->input->post('total_bed'),
        'current_members' => $this->input->post('current_members'),
        'required_members' => $this->input->post('required_members'),
        'bed_sublet' => $this->input->post('bed_sublet'),
        'food' => $this->input->post('food'),
        'kitchen' => $this->input->post('kitchen'),
        'attached_bath' => $this->input->post('attached_bath'),
        'member_occupation' => $this->input->post('member_occupation'),
        'details' => $this->input->post('details'),
        'rent' => $this->input->post('rent'),
        'advance' => $this->input->post('advance'),
        'security_charge' => $this->input->post('security_charge'),
        'service_charge' => $this->input->post('service_charge'),
        'status' => $this->input->post('status'),
		'owner_name' => $this->input->post('owner_name'),
        'owner_number' => $this->input->post('owner_number'),
        'created' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('sublet_rents', $data);

    return $this->db->insert_id();
  }

  function add_pic($field, $pic, $id) {
    $data = array(
        $field => $pic
    );

    $this->db->where('id', $id);
    $this->db->update('sublet_rents', $data);
  }

  function update($id) {
    $data = array(
        'title' => $this->input->post('title'),
        'house' => $this->input->post('house'),
        'road' => $this->input->post('road'),
        'sector' => $this->input->post('sector'),
        'area_id' => $this->input->post('area_id'),
        'district_id' => $this->input->post('district_id'),
        'total_bed' => $this->input->post('total_bed'),
        'current_members' => $this->input->post('current_members'),
        'required_members' => $this->input->post('required_members'),
        'bed_sublet' => $this->input->post('bed_sublet'),
        'food' => $this->input->post('food'),
        'kitchen' => $this->input->post('kitchen'),
        'attached_bath' => $this->input->post('attached_bath'),
        'member_occupation' => $this->input->post('member_occupation'),
        'details' => $this->input->post('details'),
        'rent' => $this->input->post('rent'),
        'advance' => $this->input->post('advance'),
        'security_charge' => $this->input->post('security_charge'),
        'service_charge' => $this->input->post('service_charge'),
        'status' => $this->input->post('status'),
		'owner_name' => $this->input->post('owner_name'),
        'owner_number' => $this->input->post('owner_number'),
        'modified' => date('Y-m-d H:i:s', time())
    );

    $this->db->where('id', $id);
    $this->db->update('sublet_rents', $data);
  }

  function toggle($value, $id) {
    $data = array('featured' => $value);
    $this->db->where('id', $id);
    $this->db->update('sublet_rents', $data);
  }

  function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('sublet_rents');
  }

}