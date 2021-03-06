<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type"     content = "text/html; charset=utf-8"/>
		<meta http-equiv="Content-Language" content="zh-cn" />
		<meta http-equiv="Pragma"           content="no-cache">
		<meta http-equiv="Cache-Control"    content="no-cache">
		<meta http-equiv="Expires"          content="0">
		<meta name = "owner"       content = "Dennis Lan/R&D/ARES CHINA"/>
		<meta name = "author"      content = "Dennis Lan, Lan Jiangtao"/>
		<meta name = "Copyright"   content = "ARES China Inc."/>
		<meta name = "create-date" content = "2004-07-16 15:21:30"/>
		<meta name = "update-date" content = "2008-07-09 13:19:30"/>
		<meta name = "description" content = "eHR for HCP"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		
		<link rel = "icon" href = "/think/Public/img/ares.ico" type = "image/x-icon"/>
		<link rel = "shortcut icon" href = "/think/Public/img/ares.ico"/>
		<link rel="stylesheet" href="/think/Public/css/blueprint/screen.css" type="text/css" media="screen, projection">
		<!--[if IE]>
			<link rel="stylesheet" href="/think/Public/css/blueprint/ie.css" type="text/css" media="screen, projection">
		<![endif]-->
		<link rel="stylesheet" href="/think/Public/css/jqueryui/themes/redmond/jquery.ui.all.css" type="text/css" />
		<link rel="stylesheet" href="/think/Public/css/default.css?m=20130917" type="text/css" media="screen, projection">
	    <script src="/think/Public/js/jqueryui/jquery-1.4.4.min.js" type = "text/javascript"></script>
	    <script src="/think/Public/js/jqueryui/jquery-ui-1.8.11.custom.min.js" type = "text/javascript"></script>
	    <!--{if $smarty.scssion.user.language <> 'US'}-->
	    <script src="/think/Public/js/i18n/ui.datepicker-<!--{if $smarty.scssion.user.language == 'ZHS'}-->zh-CN<!--{else}-->zh-TW<!--{/if}-->.min.js" type = "text/javascript"></script>
	    <!--{/if}-->