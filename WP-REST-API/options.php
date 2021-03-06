<?php
/*
 * 
 * WordPres 连接微信小程序
 * Author: jianbo + 艾码汇
 * github:  https://github.com/dchijack/WP-REST-API-PRO
 * 基于 守望轩 WP REST API For App 开源插件定制
 * 
 */
// 插件参数选项
include(WP_REST_API_PRO.'guide.php');
$themename = "小程序设置选项";
$version = "2018.8.30";
$options = array();
$options[] = array (
	"name" => $themename,
	"type" => "title");
	   
// 常规设置

$options[] = array(
	"name" => "常规设置",
    "type" => "section");
		   
$options[] = array( "type" => "open");

$options[] = array(
	"name" => "AppId",
	"desc" => "说明：微信小程序 AppId 需要到微信小程序后台获取",
    "id" => "appid",
    "type" => "text",
    "std" => "");
	
$options[] = array(
	"name" => "AppSecret",
	"desc" => "说明：微信小程序 AppSecret 需要到微信小程序后台获取",
	"id" => "secretkey",
	"type" => "text",
	"std" => "");

$options[] = array(
	"name" => "焦点幻灯片",
	"desc" => "说明：焦点幻灯片文章 ID 需要到网站后台查看获取",
    "id" => "swipe",
    "type" => "text",
	"std" => "");
	
$options[] = array(
	"name" => "自定义栏目",
    "id" => "meta_list",
	"desc" => "自定义标签 Key , 使用英文 ',' 逗号隔开;如有填写，请注意辅助选项不要禁止 meta 标签",
    "type" => "text",
	"std" => "");
	
$options[] = array(
	"name" => "赞赏消息",
    "id" => "prasie",
	"desc" => "用户赞赏后推送消息的感谢语",
    "type" => "text",
	"class" => "imglink",
	"std" => "谢谢赞赏，你的赞赏是我前进的动力");
	
$options[] = array(
	"name" => "微信用户分组",
    "desc" => "subscriber：订阅者,contributor：投稿者,author：作者,editor：编辑",
    "id" => "use_role",
    "type" => "select",
    'options' => array('subscriber','contributor','author','editor'));

$options[] = array(
	"name" => "默认缩略图",
	"desc" => "说明：默认缩略图，同时也是海报生成头图",
	"id" => "prefix",
	"type" => "text",
	"class" => "imglink",
	"std" => "");
	
$options[] = array( "type" => "close");

// 辅助功能

$options[] = array(
	"name" => "辅助功能",
	"type" => "section");

$options[] = array( "type" => "open");

$options[] = array(
	"name" => "",
    "id" => "encomments",
	"desc" => "是否开启小程序评论功能",
    "type" => "checkbox",
	"std" => "false");
	
$options[] = array(
	"name" => "",
    "id" => "approved",
	"desc" => "是否开启小程序评论审核",
    "type" => "checkbox",
	"std" => "false");
	
$options[] = array(
	"name" => "",
    "id" => "user_sers",
	"desc" => "是否禁用小程序用户列表",
    "type" => "checkbox",
	"std" => "false");
	
$options[] = array(
	"name" => "",
    "id" => "post_excerpt",
	"desc" => "是否禁止文章输出 excerpt 摘要项目",
    "type" => "checkbox",
	"std" => "false");
	
$options[] = array(
	"name" => "",
    "id" => "post_format",
	"desc" => "是否禁止文章输出 format 文章格式",
    "type" => "checkbox",
	"std" => "false");
	
$options[] = array(
	"name" => "",
    "id" => "post_type",
	"desc" => "是否禁止文章输出 type 标签项目",
    "type" => "checkbox",
	"std" => "false");
	
$options[] = array(
	"name" => "",
    "id" => "post_author",
	"desc" => "是否禁止文章输出 author 标签项目",
    "type" => "checkbox",
	"std" => "false");
	
$options[] = array(
	"name" => "",
    "id" => "post_meta",
	"desc" => "是否禁止文章输出 meta 标签项目",
    "type" => "checkbox",
	"std" => "false");
	
$options[] = array(
	"name" => "",
    "id" => "post_prev",
	"desc" => "是否开启文章输出上一篇及下一篇",
    "type" => "checkbox",
	"std" => "false");
	
$options[] = array(
	"name" => "",
    "id" => "qvideo",
	"desc" => "是否开启解析腾讯视频文章类型, 仅支持解析一个视频",
    "type" => "checkbox",
	"std" => "false");

$options[] = array( "type" => "close");

// 广告设置

$options[] = array(
	"name" => "广告设置",
	"type" => "section");

$options[] = array( "type" => "open");

$options[] = array(
	"name" => "",
    "id" => "index_adv",
	"desc" => "是否开启首页广告",
    "type" => "checkbox",
	"std" => "false");

$options[] = array(
	"name" => "首页广告类型",
    "desc" => "wechat:微信广告组件,minapp:小程序广告,picture:活动广告",
    "id" => "index_option",
    "type" => "select",
    'options' => array('wechat','minapp','picture'));
	
$options[] = array(
	"name" => "",
	"desc" => "说明：填写广告展示图片地址",
    "id" => "index_adpic",
    "type" => "text",
	"class" => "intext",
	"std" => "");
	
$options[] = array(
	"name" => "",
	"desc" => "说明：类型为 minapp 时,请填写广告链接路径;类型为 wechat 和 picture 时,请留空",
    "id" => "index_adpage",
    "type" => "text",
	"class" => "intext",
	"std" => "");
	
$options[] = array(
	"name" => "",
	"desc" => "说明：类型为 wechat 时,请填写小程序 单元id ;类型为 minapp 时,请填写小程序 appid ; 类型为 picture 时,请填写广告电话号码",
    "id" => "index_adnum",
    "type" => "text",
	"std" => "");
	
$options[] = array(
	"name" => "",
    "id" => "list_adv",
	"desc" => "是否开启列表页广告",
    "type" => "checkbox",
	"std" => "false");

$options[] = array(
	"name" => "列表页广告类型",
    "desc" => "wechat:微信广告组件,minapp:小程序广告,picture:活动广告",
    "id" => "list_option",
    "type" => "select",
    'options' => array('wechat','minapp','picture'));
	
$options[] = array(
	"name" => "",
	"desc" => "说明：填写广告展示图片地址",
    "id" => "list_adpic",
    "type" => "text",
	"class" => "intext",
	"std" => "");
	
$options[] = array(
	"name" => "",
	"desc" => "说明：类型为 minapp 时,请填写广告链接路径;类型为 wechat 和 picture 时,请留空",
    "id" => "list_adpage",
    "type" => "text",
	"class" => "intext",
	"std" => "");
	
$options[] = array(
	"name" => "",
	"desc" => "说明：类型为 wechat 时,请填写小程序 单元id ;类型为 minapp 时,请填写小程序 appid ; 类型为 picture 时,请填写广告电话号码",
    "id" => "list_adnum",
    "type" => "text",
	"std" => "");
	
$options[] = array(
	"name" => "",
    "id" => "detail_adv",
	"desc" => "是否开启详情页广告",
    "type" => "checkbox",
	"std" => "false");

$options[] = array(
	"name" => "详情页广告类型",
    "desc" => "wechat:微信广告组件,minapp:小程序广告,picture:活动广告",
    "id" => "detail_option",
    "type" => "select",
    'options' => array('wechat','minapp','picture'));
	
$options[] = array(
	"name" => "",
	"desc" => "说明：填写广告展示图片地址",
    "id" => "detail_adpic",
    "type" => "text",
	"class" => "intext",
	"std" => "");
	
$options[] = array(
	"name" => "",
	"desc" => "说明：类型为 minapp 时,请填写广告链接路径;类型为 wechat 和 picture 时,请留空",
    "id" => "detail_adpage",
    "type" => "text",
	"class" => "intext",
	"std" => "");
	
$options[] = array(
	"name" => "",
	"desc" => "说明：类型为 wechat 时,请填写小程序 单元id ;类型为 minapp 时,请填写小程序 appid ; 类型为 picture 时,请填写广告电话号码",
    "id" => "detail_adnum",
    "type" => "text",
	"std" => "");

$options[] = array(	"type" => "close");

$options[] = array(
	"name" => "API 说明",
	"type" => "section");

$options[] = array( "type" => "open");

$options[] = array(
	"name" => "",
    "id" => "api_read",
	"desc" => $page,
    "type" => "page");

$options[] = array(	"type" => "close");

return $options;
