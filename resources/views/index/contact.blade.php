@include('layouts.hearder')

<body >
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
                    <li><a href="{{route('index.video')}}">视频中心</a></li>
                    <li><a href="{{route('index.person')}}">人才招聘</a></li>
                    <li class="active"><a href="{{route('index.contact')}}">联系我们</a></li>
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
        	<div class="left-title">联系我们</div>
            <ul>
            	<li class="onm"><a href="#" title="关于我们"><i></i>联系方式</a></li>
                <li><a href="#" title="在线地图"><i></i>在线地图</a></li>
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
    	<span class="fl">关于我们</span><em class="fr">首页> 联系我们 > 联系方式</em>
    </div>
    <div class="clear"></div>
    
    <!--新闻详情-->
    <div class="news-show">

      <br/>
      <img src="../images/contract.gif">
    	
    </div>
    <!--新闻详情-->
    
    
</div>
<!--右侧-->
</div>
<div class="clear"></div>
<!--底部开始-->
@include('layouts.footer')