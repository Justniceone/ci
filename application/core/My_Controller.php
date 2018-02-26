<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/25
 * Time: 15:33
 */
class My_Controller extends CI_Controller
{
    const SUCCESS = 200;
    const E_PARAMS = 400;
    protected function response_success($data = [],$msg = '')
    {
        $this->response(self::SUCCESS,$msg,$data);
    }

    protected function response_error($code,$msg = '')
    {
        $this->response($code ? :self::E_PARAMS, $msg);
    }

    public function response($code, $msg, $data = [])
    {
        header('content-type:application/json');
        $response = [
            'code' => $code,
            'msg'  => $msg,
            'data' => $data
        ];
        echo json_encode($response);
        exit;
    }
}