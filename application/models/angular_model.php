<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Angular_model extends CI_Model{

    public function car_insert()
    {
        $data = json_decode(file_get_contents("php://input"));
        $cname      = $data->car_name;
        $ccolor      = $data->car_color;
        $datas=array(
            'car_name'=>$cname,
            'car_color'=>$ccolor
        );
        $this->db->insert('tbl_car',$datas);
        return ($this->db->affected_rows()!=1)?false:true;
    }
	Public function insert()

	{

	$data = json_decode(file_get_contents("php://input")); 
    $prod_name      = $data->prod_name;    
    $prod_desc      = $data->prod_desc;
    $prod_price     = $data->prod_price;
    $prod_quantity  = $data->prod_quantity;
 
    //print_r($data);
	
    $datas=array(
    	'prod_name'=>$prod_name,
    	'prod_desc'=>$prod_desc,
    	'prod_price'=>$prod_price,
    	'prod_quantity'=>$prod_quantity,
    	);
    $this->db->insert('product',$datas);
    return ($this->db->affected_rows()!=1)?false:true;
	}
    public function update_car()
    {
        $data = json_decode(file_get_contents("php://input"));
        $car_id             =   $data->car_id;
        $car_name      =   $data->car_name;
        $car_color      =   $data->car_color;

        $datas=array(
            'car_id'=>$car_id,
            'car_name'=>$car_name,
            'car_name'=>$car_color,

        );
        $this->db->where('car_id',$car_id);
        $this->db->update('tbl_car',$data);
        return ($this->db->affected_rows()!=1)?false:true;
    }
	Public function update()
	{
		$data = json_decode(file_get_contents("php://input")); 
    $id             =   $data->id;
    $prod_name      =   $data->prod_name;    
    $prod_desc      =   $data->prod_desc;
    $prod_price     =   $data->prod_price;
    $prod_quantity  =   $data->prod_quantity;
    
     $datas=array(
    	'prod_name'=>$prod_name,
    	'prod_desc'=>$prod_desc,
    	'prod_price'=>$prod_price,
    	'prod_quantity'=>$prod_quantity,
    	);

    	$this->db->where('id',$id);
    	$this->db->update('product',$data);
    	return ($this->db->affected_rows()!=1)?false:true;
	}
    public function car_delete()
    {
        $data = json_decode(file_get_contents("php://input"));
        $index = $data->car_index;
        $this->db->where('car_id',$index);
        $this->db->delete('tbl_car');
        return ($this->db->affected_rows()!=1)?false:true;
    }
	Public function delete()
	{
		$data = json_decode(file_get_contents("php://input"));     
    	$index = $data->prod_index;  
    	$this->db->where('id',$index);
    	$this->db->delete('product');
    	return ($this->db->affected_rows()!=1)?false:true;

	}
}