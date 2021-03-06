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

// +----------------------------------------------------------------------
// | 模板设置
// +----------------------------------------------------------------------

return [
    // 模板引擎类型 支持 php think 支持扩展
    'type'         => 'Think',
    // 模板路径
    'view_path'    => '',
    // 模板后缀
    'view_suffix'  => 'html',
    // 模板文件名分隔符
    'view_depr'    => DIRECTORY_SEPARATOR,
    // 模板引擎普通标签开始标记
    'tpl_begin'    => '{',
    // 模板引擎普通标签结束标记
    'tpl_end'      => '}',
    // 标签库标签开始标记
    'taglib_begin' => '{',
    // 标签库标签结束标记
    'taglib_end'   => '}',
    //模板输出替换 ##替换规则严格区分大小写
    'tpl_replace_string'  =>  [
        '__ROOT__'           => WEB_URL,
        '__UPLOADS__'        => WEB_URL.'/uploads',
        '__COMMON__'         => WEB_URL.'/static/common',
        '__INSTALL__'          => WEB_URL.'/static/install',
        '__NAME__'=>'AndPHP',
        '__COMPANY__'=>'重庆吾与众科技有限公司',
        '__WEBSITE__'=>'www.andphp.com',
        '__COMPANY_WEBSITE__'=>'www.wyz.ltd'
    ],
];
