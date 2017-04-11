1，创建userAction.class.php 文件，用户控制器userAction 继承基类Action.

2,创建 add()方法，通过$this->display()；//添加用户模板

3，在Tpl文件夹下依次创建Admin》User》文件夹，在user下新建add.html添加用户模板文件。

4，创建doAdd()方法，用户添加模块。完成用户的添加功能。

<?php

class UserAction extends Action {

   public function add(){ //显示用户添加页面

      $this->display();

   } 

  public function doAdd(){//用户添加模块

      $m=M("User");  //实例化

      $m->create($_POST); //创建数据

      $re=$m->add(); //获得主键ID；

 if($re){ 值为真，添加成功，跳转到相关的页面。 此处也可以用$this->success();

       $this->redirect('/Admin/User/userList',null,3,"添加成功,跳转中"); 

        //$this->success('添加成功',U('Admin/User/userList'));  // 通过U()方法，实现跳转。

        }else{

       $this->redirect('/Admin/User/add',null,3,"添加失败,跳转中");

        }

   }
