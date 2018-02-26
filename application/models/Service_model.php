<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/25
 * Time: 17:03
 */
class Service_model extends CI_Model
{
    private $table = 'services';

    public function services($ids)
    {
        return  $this->db->where_in('he_id',$ids)->order_by('type_id')->get($this->table)->result_array();
    }
}