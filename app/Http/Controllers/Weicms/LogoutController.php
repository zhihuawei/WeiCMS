<?php
/**
 * =================================================
 * Created by Pocket Knife Technology.
 * Author: Wei ZhiHua <zhihua_wei@foxmail.com>
 * Date: 2017/2/5 0005
 * Time: 下午 5:26
 * Project: WeiCMS
 * Version: 1.0.0
 * Power: 后台退出系统控制器
 * =================================================
 */

namespace App\Http\Controllers\Weicms;

class LogoutController extends WeicmsController
{
    /**
     * 退出系统
     */
    public function logout()
    {
        //清除session，跳转到首页
    }

}