<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class main extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('angular_model');
    }
    public function index() {
        $this->load->view('design/header');
        $this->load->view('user/study');
        $this->load->view('/design/modal/modal');
        $this->load->view('design/footer');

    }
    public function get_cars()
    {
        $data = array();
        $displayCar = $this->db->get('tbl_car')->result_array();
        foreach($displayCar as $res)
        {
            $data[] = array(
                'car_id' => $res['car_id'],
                'car_name' => $res['car_name'],
                'car_color' => $res['car_color'],
                'car_image' => $res['car_image'],
            );
        }
        print_r(json_encode($data));
        return json_encode($data);
    }
    public function car_insert()
    {
        $result=$this->angular_model->car_insert();
        if($result)
        {
            $arr = array('msg' => "Car Added Successfully!!!", 'error' => '');
            $jsn = json_encode($arr);
        }
        else
        {
            $arr = array('msg' => "", 'error' => 'Error In inserting record');
            $jsn = json_encode($arr);
        }
    }
    public function  car_edit()
    {
        $data = json_decode(file_get_contents("php://input"));
        $index = $data->car_index;
        $this->db->where('car_id',$index);
        $output=$this->db->get('tbl_car')->result_array();
        $data = array();
        foreach($output as $rows)
        {
            $data[] = array(
                "car_id"            =>  $rows['car_id'],
                "car_name"     =>  $rows['car_name'],
                "car_color"     =>  $rows['car_color'],

            );
        }
        print_r(json_encode($data));
        return json_encode($data);
    }
    public function update_car()
    {
        $result=$this->angular_model->update_car();
        if($result)
        {
            $arr = array('msg' => "Car Updated Successfully!!!", 'error' => '');
            $jsn = json_encode($arr);
        }
        else
        {
            $arr = array('msg' => "", 'error' => 'Error In updating record');
            $jsn = json_encode($arr);
        }
    }
    public function car_delete()
    {
        $result=$this->angular_model->car_delete();
        if($result)
        {
            $arr = array('msg' => "Car Deleted Successfully!!!", 'error' => '');
            $jsn = json_encode($arr);
        }
        else
        {
            $arr = array('msg' => "", 'error' => 'Error In deleting record');
            $jsn = json_encode($arr);
        }
    }
}
