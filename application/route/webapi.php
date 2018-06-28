<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


//这里配置批量路由

use \think\Route;

Route::rule(['h2/:id'=>'home/Demo/hello','blog/:name'=>'Blog/detail']);


return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

	'new2Hello/:id'   => 'index/hello',
	
	'm2/:id'   => 'home/Demo/hello',
	
	'new2' =>'home/Demo/index'
	
	
	

];





/*
Route::get("/h2",function(){
	
		return "Hello World";
});
*/




