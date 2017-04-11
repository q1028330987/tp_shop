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
		$list=$m->select();
		//返回数组给控制器
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
		if($result){
		//设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']    
			// $this->success('删除成功', 'Member/member_list');

		} else {
		//错误页面的默认跳转页面是返回前一页，通常不需要设置
		// $this->error('新增失败');
		}
		// $this->success('删除成功', 'Member/Memberlist');

	}
}