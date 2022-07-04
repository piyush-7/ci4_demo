<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DemoController extends BaseController
{

  
  public function __construct()
  {
    //insert data using raw query
     $this->db =\Config\Database::connect();
   
  }
  


  public function dbexample()
  {
     //insert data using raw query
   $insert = "Insert into registration (username,email,mobile,password) values('piyush','piyush@gmail.com','1234567895','123456') ";

   if($this->db->query($insert)):

    echo "data success";

   else:
    echo "fail";
   endif;

  }


  public function dbexample2()
  {
    $builder = $this->db->table('registration')->where(array('id'=>3,'email'=>'shivani@gmail.com'))->get()->getResultArray('');
    // $data= $builder->get()->getResultArray('');

    // echo json_encode($data);
    // echo "<pre/>";
    // // print_r($data);
    // print_r($builder);
    echo json_encode($builder);

  }


  public function getall()
  {
    $builder = $this->db->table('registration');
    $data= $builder->get()->getResultArray('');
    echo json_encode($data);

  }


  public function insertdata()
  {
    $builder = $this->db->table('registration');

    $data =       ['username'=>'jayesh',
                  'email'=>'jayesh@gmail.com',
                  'mobile'=>'8889992223',
                  'password'=>'jayesh'];

        if($builder->insert($data)):
          echo "success";
        else:
          echo "fail";

        endif;
  }

  public function deletedata()
  {
    $builder = $this->db->table('registration');

    $id = 4;


    //where clause
    // $builder->where(['id'=>$id]);

    $builder->delete(['id'=>$id]);


    echo "delete success";
  }



  public function updatedata()
  {
    $builder = $this->db->table('registration');

    $update = ['username'=>'ashish',
              'email'=>'ashish@gmail.com',
              'mobile'=>'9479503986'];

      //where clause method with short code
    $builder->where(['id'=>2])->set($update)->update();


    //  WITHOUT WHERE METHOD

    // $builder->update($update,['id'=>2]);  

    echo "success";
  }




    public function getdata_example()
    {

    //   // $db      = \Config\Database::connect();
    //   $builder = db->table('registration');
      

    //   $result = $builder->get();
    //   //  $result->data->result();
       
        
        

    //   //  echo "<pre/>";
    //    print_r(json_encode($result));

    //   //  echo json_encode($result);
       
    }




    public function show()
    {
        $data = array(
            "name"=>"piyush",
            "email"=>"piyush@gmail.com",
          );



         return view('contentview',compact('data'));

    }

    public function view_demo()
    {
      $data = array(
        "name"=>"piyush",
        "email"=>"piyush@gmail.com",
      );

       echo view('contentview',compact($data));

    //    echo $data;
       
    }

    public function master()
    {
      echo view('headerview');

    //    echo $data;
       
    }

    public function parameter($value = null)
    {
      echo "this is paramitraised url"."<br/>".$value;
    }


   
}
