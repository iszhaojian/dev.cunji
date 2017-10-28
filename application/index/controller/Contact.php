<?php
namespace app\index\controller;
class Contact extends Base
{
    /**
     * 构造方法
     */
    public function _auto()
    {
        // 模板变量赋值
        $this->assign('active','Contact');
    }

    /**
     * 联系我们页面
     */
    public function index()
    {
        // Get
        if ($this->request->isGet()) {
            // 渲染模板输出
            return $this->fetch('index');
        }
    }
}
