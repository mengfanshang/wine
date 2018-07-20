
<?php
$url = $_SERVER['PHP_SELF'];
$params = explode('/',$url);
$params = end($params);
?>
@if($params == 'index.php')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>山佳科技</title>
    <link href="css/base.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery.slideBox.min.js" type="text/javascript"></script>
</head>
@else
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="utf-8" />
        <meta name="robots" content="all" />
        <meta name="author" content="Tencent-ISRD" />
        <meta name="Copyright" content="Tencent" />
        <link rel="stylesheet" type="text/css" href="../css/css.css">
        <script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="../js/jquery.superslide.2.1.1.js"></script>
        @if($params == 'about')
            <title>关于我们</title>
        @elseif($params == 'newsinfo')
            <title>资讯中心</title>
        @elseif($params == 'service')
            <title>售后服务</title>
        @elseif($params == 'product')
            <title>产品中心</title>
        @elseif($params == 'video')
            <title>视频中心</title>
        @elseif($params == 'person')
            <title>人才招聘</title>
        @else
            <title>联系我们</title>
        @endif
    </head>
@endif