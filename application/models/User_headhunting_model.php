<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/25
 * Time: 15:44
 */
class User_headhunting_model extends CI_Model
{
    private $table = 'user_headhuntings';
    public function lists()
    {
        $this->db->join('relations',$this->table.'.id = relations.he_id');
        $this->db->join('industries','relations.in_id = industries.id');
        $headhuntings =
            $this->db
                ->select('user_headhuntings.*,GROUP_CONCAT(bdm_industries.`name`) as excel')
                ->group_by($this->table.'.id')
                ->get($this->table)
                ->result_array();
        return $headhuntings;
    }
}