<?php
namespace app\index\controller;

use app\BaseController;
use think\facade\Db;

class Index extends BaseController
{
    public function index()
    {
//        $re = Db::query('SELECT * FROM `web_test`');
//        dump($re);
        return '首页index控制器的index方法';
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }



}
