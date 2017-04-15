<?php
class mlocus extends CI_Model{

  public function mregister($data){

    $this->db->insert('users',$data);
    $data2 = array(
      'name'=>$data['name'],
      'email' => $data['email'],
      'logged_in'=>TRUE
    );
    $this->session->set_userdata($data2);
      return TRUE;

  }





  function login($email,$password){
		$this->db->select('email,name');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query=$this->db->get('users');
		if($query->num_rows()>0){
			$array = $query->row_array();
			$data = array(
				'email'=>$array['email'],
        		'name'=>$array['name'],
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data);
			return TRUE;
    }
    else{
			return FALSE;
		}
	}



	function mlocation($data){
		$this->db->where('email',$this->session->userdata('email'));
       $this->db->update('users', $data); 
       return TRUE;
	}
    function m_get_location(){
		    	$this->db->select('city,address,radius,lat,lng');
		    	$this->db->where('email',$this->session->userdata('email'));
		    	$query=$this->db->get('users');
				if($query->num_rows()>0){
					$array = $query->row_array();
					if($array['city']!="")
						{
					$data = array(
						'city'=>$array['city'],
		        		'address'=>$array['address'],
						'radius'=>$array['radius'],
						'lat' =>$array['lat'],
						'lng'=>$array['lng'],
						'location_set' =>TRUE
						);
					$final = array_merge($this->session->get_userdata(),$data);
					$this->session->set_userdata($final);
					
				  }
		    	
		    }
		}


function m_get_thumbnails($category){
	$this->db->select('id,name,phone,category,thumbnail');
		$this->db->where('category',$category);
		$query=$this->db->get('food');
		if($query->num_rows()>0){
        $count =0;
        $arr = array();
		foreach ($query->result() as $row)
		{
		    
		    $arr[$count++] = array(
				'id'=>$row->id,
        		'name'=>$row->name,
        		'phone'=>$row->phone,
        		'category'=>$row->category,
				'thumbnail'=>$row->thumbnail
				);
		}
		return $arr;
			}
}
function m_get_item($food_place){

$this->db->select('id,name,description,address,phone,category,thumbnail');
		$this->db->where('name',$food_place);
		$query=$this->db->get('food');
		if($query->num_rows()>0){
		  $row = $query->row_array();
		    $arr = array(
				
        		'name'=>$row['name'],
        		
        		'address'=>$row['address']
        		
				);
		
		return $arr;
			}
			else {
				$arr = array(
				
        		'name'=>$food_place,
        		
        		'address'=>'bjhcjs'
        		
				);

		return $arr;
			}

		}

function m_insert_values(){
	 $this->db->insert('food',$data);
	 return TRUE;
}


}
 ?>
