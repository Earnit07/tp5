<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\View;
class Index
{
    public function hello($name = 'thinkphp')
    {
        echo 'hello! '.$name;
    }
    public function index($name = 'thinkphp')
    {
      	$tester = model('Tester');
	$tester->name = 'earnit';
	$tester->select();
	$data = $tester->data;
	return view('index',[
	   'data' => $data,
	]);
    }
}
