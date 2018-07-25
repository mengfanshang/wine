<?php
/**
 * Created by PhpStorm.
 * User: mengfanshang
 * Date: 2018/7/25
 * Time:
 */

namespace App\Services;
use App\models\Menu;

class sideBarService
{
    public function sideBar(){
        $data = Menu::all()->toArray();
        $data = Menu::demo($data,0,1);
        return \View::make('admin.layouts.sidebar',compact('data'));
    }

}