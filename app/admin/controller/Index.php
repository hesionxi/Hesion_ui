<?php

namespace app\admin\controller;

use app\admin\model\Test;
use app\common;
use think\facade\Validate;
use think\facade\View;
use think\Request;


class Index extends common
{
    public function index() {
//        return '这是后台首页';
        return View::fetch('admin/index');
    }

    public function home(Request $request) {
//        $re = Test::where('test_age', '>',10)->order('test_id', 'desc')->limit(1)->select();
//        $re = Test::select();
//        dump($re) ;
        $data = $request->get();

        $rule = [
            'name ' => 'require|max:25',
            'email' => 'email'
        ];

        $msg = [
            'name.require' => '名字必须填写',
            'name.max' => '名字长度要小于25个字符',
            'email.email' => '必须是邮件格式'
        ];

        $arr = new Validate($rule, $msg);
        $array = $arr->check($data);
        dd($array->getError());

//        return '这个是home方法';
    }

    // 新增数据
    public function save(Request $request) {
        $arr = array();
         // 判断是否是post请求
        if ($_POST) {
            $data = $request->post();   // 获取post请求数据
            $arr = [
                'test_name' => $data['name'],
                'test_pwd' => $data['pwd'],
            ];
        }

    }

    // 更新数据
    public function update(Request $request) {
        $re = $request->get();
        dump($re);
    }
}