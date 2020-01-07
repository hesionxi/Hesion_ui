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
        return 'admin\index\index';
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }



}
