<?php
header('Access-Control-Allow-Origin: *');

class locus extends CI_controller{
    function index()
        { 
        $data['flag']=6;
        $data['v']=1;
        $this->load->view('home.php',$data);
        }

 function index_food()
        { 
          $data['flag']=6;
        $data['v']=1;
        $data['cafe'] =  $this->mlocus->m_get_thumbnails('c');
        $data['restaurant'] =  $this->mlocus->m_get_thumbnails('r');
        $data['beverages']=$this->mlocus->m_get_thumbnails('b');
        $data['dess']=$this->mlocus->m_get_thumbnails('d');  
        $this->load->view('food.php',$data);
        }
 function index_food_category($category){
  $data['flag']=6;
   $data['category'] = $category;
   $data[$category] =  $this->mlocus->m_get_thumbnails($category);     
        $this->load->view('categories.php',$data);

 }
 function index_food_place($food_place){
  $data['item'] =  $this->mlocus->m_get_item($food_place);  
   $this->load->view('food_place.php',$data);

 }

 function index_admin()
        {          
  
        $this->load->view('admin.php');
        }


      function set_register(){
         $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]|max_length[20]|callback_alpha_space_only');
         $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
         $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
         $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');
         $this->form_validation->set_rules('phone', 'Mobile number', 'trim|required','required|regex_match[/^[0-9]{10}$/]');

         if ($this->form_validation->run() == FALSE)
         {
         echo validation_errors();
         }
         else
         {

        $data = array(
          'name'=>$this->input->post("name"),
          'email'=>$this->input->post("email"),
          'password'=>$this->input->post("password"),
          'mobile_no'=>$this->input->post("phone"),
        );

             if($this->mlocus->mregister($data)){
                 if($this->session->userdata('location_set'))
                    {
                     $data = array(
                      'city'=>$this->session->userdata("city"),
                      'address'=>$this->session->userdata("address"),
                      'radius'=>$this->session->userdata("radius"),
                      'lat'=>(double)$this->session->userdata("lat"),
                      'lng'=>(double)$this->session->userdata("lng"),
                      'location_set'=>TRUE
                     );
                     $this->mlocus->mlocation($data);
                    }
               echo('success');

              }
              else echo('failure');
        }
}

        function alpha_space_only($str)
         {
             if (!preg_match("/^[a-zA-Z ]+$/",$str))
             {
                 $this->form_validation->set_message('alpha_space_only', 'The %s field must contain only alphabets and space');
                 return FALSE;
             }
             else
             {
                 return TRUE;
             }
         }

  public function check_login(){
      $ema=$this->input->post("email");
      $pwd=$this->input->post("password");
      if($this->mlocus->login($ema,$pwd)==FALSE)
        {
        echo 'fail';

       }
       else
       {
          
          if($this->session->userdata('location_set'))
          {
           $data = array(
            'city'=>$this->session->userdata("city"),
            'address'=>$this->session->userdata("address"),
            'radius'=>$this->session->userdata("radius"),
            'lat'=>(double)$this->session->userdata("lat"),
            'lng'=>(double)$this->session->userdata("lng"),
            'location_set'=>TRUE
           );
           $this->mlocus->mlocation($data);
          }
         else{
          $this->mlocus->m_get_location();
         }
          echo 'success';
      }
     }

  


  function set_location(){
     $data = array(
          'city'=>$this->input->post("city"),
          'address'=>$this->input->post("address"),
          'radius'=>$this->input->post("radius"),
          'lat'=>(double)$this->input->post("lat"),
          'lng'=>(double)$this->input->post("lng"),
          'location_set'=>TRUE
       );

     if($this->session->userdata('logged_in')){
      if($this->session->userdata('location_set'))
        $this->session->set_userdata($data);
      else{
        $temp = $this->session->userdata();
        $final = array_merge($data, $temp);
        $this->session->set_userdata($final);
       }
        if($this->mlocus->mlocation($data)){
               echo('success');
              }
        else
             echo('failure');

     }
    else{
      $this->session->set_userdata($data);
     echo 'success';

    }
}
 function logout(){
  $this->session->sess_destroy(); 
  $data['flag']=1;
        $data['v']=0;
  $this->load->view('home.php',$data);
}

 function first_reload(){
  $data['flag']=6;
    $data['v'] = 0;
  $this->load->view('home.php',$data);

}


function insert_values(){

       $data = array(
          'name'=>$this->input->post("name"),
          'address'=>$this->input->post("address"),
          'description'=>$this->input->post("phone"),
          'category'=>$this->input->post("category"),
          'thumbnail'=>$this->input->post("thumbnail")
       );
       
         $this->form_validation->set_rules('address', 'address', 'trim|required|valid_email|is_unique[food.address]');
          if ($this->form_validation->run() == FALSE)
         {
         $v['status']=validation_errors();
         }
         else{
           
             if($this->mlocus->m_insert_values($data))
                    { $v['status'] ="success";}
                    
              else
                  { $v['status']="failure";}
            }
       $this->load->view('admin.php',$v);
  }


}
 ?>
