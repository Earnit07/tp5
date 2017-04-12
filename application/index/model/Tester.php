<?php
namespace app\index\model;
use think\Db;
class Tester
{
    public $name;
    public $data;
    public function test()
    {
      echo $this->name.' create model!';
    }
    public function select()
    {
         // 获取数据集
        $users = Db::table('MyGuests')->where('id','<',9)->select();
        $this->data = $users;
        // 获取数据集记录数
        $count = count($users);
    }
    public function insertAll()
    {
	$data = [
   	    ['firstname' => 'firsttest', 'lastname' => 'lasttest'],
	];
	Db::table('MyGuests')->insertAll($data);
    }
}
