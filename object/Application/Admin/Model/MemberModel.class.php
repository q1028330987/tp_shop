<?php 

    namespace Admin\Model;

    use Think\Model;

    class MemberModel extends Model
    {

	protected $tableName = "user";
	public function Memberlist()
	{
		//实例化模型
		$m=M("user");

		//获取表中的所有数据，得到二维数组。
		$list=$m->field('id,phone,status')->select();
		
		//返回数组给控制器
		foreach ($list as $k=>$v) { 

	        		switch ($v['status']) {

	        			case '1':
	        				$list[$k]['status'] = '正常';
	        			break;

	        			case '2':
	        				$list[$k]['status'] = '禁用';
	        			break;
	        			default:
	        				$list[$k]['status'] = '异常';
	        			break;
			
	        		}
	        	}
				return $list;
	}

	// public function Memberedit()
	// {

	// }

	public function Memberdel()
	{
		$id = I('get.id');
		$del = M('user');

		// dump($id);exit;

		$res = $del->where("id=$id")->delete();
		return $res;
		
	}

}