<?php

namespace app\admin\controller;

use app\admin\model\Test;
use think\facade\View;
use think\Request;


class Index
{
    public function index() {
//        return '这是后台首页';
        return View::fetch('admin/index');
    }

    public function home() {
//        $re = Test::where('test_age', '>',10)->order('test_id', 'desc')->limit(1)->select();
        $re = Test::select();
        dump($re) ;
    }

    // 密码加密
    public function demo() {
        $a = '123456789';
        $ps = md5($a);
        echo $ps;

        $data = $a;    //  密码
        $method = 'DES-ECB';    //  加密方法（DES-ECB、DES-CBC、DES-CTR、DES-OFB、DES-CFB）
        $passwd = '123123';     //  加密的密钥
        $options = 0;           //  数据格式选项（0、OPENSSL_RAW_DATA=1、OPENSSL_ZERO_PADDING=2、OPENSSL_NO_PADDING=3）
        $iv = '';               //  密码初始向量（可选）
        $res = openssl_encrypt($data, $method, $passwd, $options, $iv);
        dump($res);
    }

    // 密码解密
    public function demo1() {
        $data = 'N1ik7Wz+cdi+vkVULRbbaA=='; //  加密后的密码
        $method = 'DES-ECB';                //  加密方法（要跟密码加密时的一样）
        $passwd = '123123';                 //  加密的密钥（要跟密码加密时的一样）
        $options = 0;                       //  数据格式选项（要跟密码加密时的一样）
        $iv = '';                           //  密码初始向量（要跟密码加密时的一样）
        $res = openssl_decrypt($data, $method, $passwd, $options, $iv);
        dump($res);
    }

    // 更新数据
    public function update(Request $request) {
        $re = $request->get();
        dump($re);
    }
}