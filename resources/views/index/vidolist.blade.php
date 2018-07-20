@include('layouts.hearder')

<body style="background:#f3f4f4">
<!--头部开始-->
<div class="contentbox">
    @include('layouts.news')
    <div class="header">
    	<div class="container">
        	<div class="logo"><a href="/"><img src="../images/logo.jpeg" style="width: 345px ;height: 80px"/></a></div>
            <div class="nav">
            	<ul>
                    <li><a href="/">首页</a></li>
                    <li><a href="{{route('index.about')}}">关于我们</a></li>
                    <li><a href="{{route('index.newsinfo')}}">资讯中心</a></li>
                    <li><a href="{{route('index.service')}}">售后服务</a></li>
                    <li><a href="{{route('index.product')}}">产品中心</a></li>
                    <li class="active"><a href="{{route('index.video')}}">视频中心</a></li>
                    <li><a href="{{route('index.person')}}">人才招聘</a></li>
                    <li><a href="{{route('index.contact')}}">联系我们</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--头部结束-->
<!--详情BANNER-->
<div class="xq-banner"></div>
<!--详情BANNER-->
<div class="main">
<!--左侧-->
	<div class="xq-left">
    	<div class="left-menu">
        	<div class="left-title">视频中心</div>
            <ul>
            	<li class="onm"><a href="#" title="人才招聘"><i></i>视频中心</a></li>
            </ul>
        </div>
        
        <div class="left-tjservice">
        	<ul>
            	<li class="s-01">
                	<a href="#" title=""><i></i>产品分类</a>
                </li>
                <li class="s-01">
                	<a href="#" title=""><i></i>产品分类</a>
                </li>
                <li class="s-01">
                	<a href="#" title=""><i></i>产品分类</a>
                </li>
                <li class="s-01">
                	<a href="#" title=""><i></i>产品分类</a>
                </li>
            </ul>
        </div>
        
        <!--联系我们-->
        <div class="left-contract">
        	<img src="../images/left-tel.png">
        </div>
    </div>
<!--左侧-->
<!--右侧-->
<div class="xq-right">
	<div class="right-title">
    	<span class="fl">视频中心</span><em class="fr">首页> 视频中心</em>
    </div>
    <div class="clear"></div>
    
    <!--新闻列表-->
    <div style="margin-top:30px;">
    	<div class="indprolist">
            	<ul>
                	<li><a href="proinfo.html"><img src="../images/vdie.jpg" width="256" height="177" /></a><h1><a href="proinfo.html">产品标产品标题产品标题产品标题产品标题题</a></h1></li>
                    <li><a href="proinfo.html"><img src="../images/vdie.jpg" width="256" height="177" /></a><h1><a href="proinfo.html">产品标产品标题产品标题产品标题产品标题题</a></h1></li>
                    <li><a href="proinfo.html"><img src="../images/vdie.jpg" width="256" height="177" /></a><h1><a href="proinfo.html">产品标产品标题产品标题产品标题产品标题题</a></h1></li>
                    <li><a href="proinfo.html"><img src="../images/vdie.jpg" width="256" height="177" /></a><h1><a href="proinfo.html">产品标产品标题产品标题产品标题产品标题题</a></h1></li>
                    <li><a href="proinfo.html"><img src="../images/vdie.jpg" width="256" height="177" /></a><h1><a href="proinfo.html">产品标产品标题产品标题产品标题产品标题题</a></h1></li>
                    <li><a href="proinfo.html"><img src="../images/vdie.jpg" width="256" height="177" /></a><h1><a href="proinfo.html">产品标产品标题产品标题产品标题产品标题题</a></h1></li>
                </ul>
            </div>
        
        <div class="pages">
  <input type="hidden" id="destoon_previous" value="#"><a href="#">&nbsp;«上一页&nbsp;</a> <strong>&nbsp;1&nbsp;</strong>  <a href="#">&nbsp;2&nbsp;</a>  &nbsp;…&nbsp; <a href="#">&nbsp;3&nbsp;</a>   <a href="#">&nbsp;4&nbsp;</a>  <a href="#">&nbsp;下一页»&nbsp;</a> <input type="hidden" id="destoon_next" value="#">&nbsp;<cite>共74条/4页</cite>&nbsp;<input type="text" class="pages_inp" id="destoon_pageno" value="1"> <input type="button" class="pages_btn" value="GO">     </div>
    </div>
    <!--新闻列表-->
    
    
</div>
<!--右侧-->
</div>
<div class="clear"></div>
<!--底部开始-->
@include('layouts.footer')