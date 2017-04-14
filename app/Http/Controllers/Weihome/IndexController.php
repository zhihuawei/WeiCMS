<?php
/**
 * =================================================
 * Created by Pocket Knife Technology.
 * Author: Wei ZhiHua <zhihua_wei@foxmail.com>
 * Date: 2017/2/5 0005
 * Time: 下午 4:32
 * Project: WeiCMS
 * Version: 1.0.0
 * Power: 前台首页控制器
 * =================================================
 */
namespace App\Http\Controllers\Weihome;


class IndexController extends WeihomeController
{
    public function index(){
        return view('weihome.index');
        //return "WeiCMS首页";
    }

}