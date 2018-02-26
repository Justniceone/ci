<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/25
 * Time: 15:32
 */
class Home extends My_Controller
{
    protected $redis;
    public function __construct()
    {
        parent::__construct();
        $this->redis = new Redis();
        $this->redis->connect('127.0.0.1');
    }
    public function headhuntings()
    {
        $lists = $this->user_headhunting->lists();
        $ids = array_column($lists,'id');
        $services = $this->service->services($ids);
        $this->response_success($lists);
    }

    public function redis()
    {
        $this->redis->set('uid_5','xiaopang');
        $this->response_success();
    }

    public function getKey()
    {
        $value = $this->redis->get('uid_6');
        var_dump($value);
    }
}