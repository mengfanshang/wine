<?php echo $__env->make('layouts.hearder', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body >
<!--头部开始-->
<div class="contentbox">
    <?php echo $__env->make('layouts.news', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="header">
    	<div class="container">
        	<div class="logo"><a href="/"><img src="../images/logo.jpeg" style="width: 345px ;height: 80px"/></a></div>
            <div class="nav">
            	<ul>
                    <li><a href="/">首页</a></li>
                    <li class="active"><a href="<?php echo e(route('index.about')); ?>">关于我们</a></li>
                    <li><a href="<?php echo e(route('index.newsinfo')); ?>">资讯中心</a></li>
                    <li><a href="<?php echo e(route('index.service')); ?>">售后服务</a></li>
                    <li><a href="<?php echo e(route('index.product')); ?>">产品中心</a></li>
                    <li><a href="<?php echo e(route('index.video')); ?>">视频中心</a></li>
                    <li><a href="<?php echo e(route('index.person')); ?>">人才招聘</a></li>
                    <li><a href="<?php echo e(route('index.contact')); ?>">联系我们</a></li>
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
        	<div class="left-title">关于我们</div>
            <ul>
            	<li class="onm"><a href="#" title="企业简介"><i></i>企业简介</a></li>
                <li><a href="#" title="员工风采"><i></i>员工风采</a></li>
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
    	<span class="fl">关于我们</span><em class="fr">首页> 关于我们 > 企业简介</em>
    </div>
    <div class="clear"></div>
    
    <!--新闻详情-->
    <div class="news-show">
    	<h3>公司简介</h3>
		<p class="show-time">来源：景森&nbsp; &nbsp; &nbsp; &nbsp;阅读量：6583 &nbsp;&nbsp;&nbsp;&nbsp;时间：2017.09.11</p>
        <div class="show-text">
        	光头强是大家所熟知的动画片一个幽默的角色，常年被李老板压榨的大森林伐木工。五一劳动节假期，电视里时不时播放着童心撞地球20170505精彩预告：熊出没之光头强创业记。看来光头强也开始变得有商业头脑了，开始加入创业风潮里。那么我们还未看这部剧时，我们先来了解一下如何让创业变得更有价值！
创业<br/><br/>
<p style="text-align:center"><img src="http://www.yizhihou.net/file/upload/201705/02/093005101.jpg" width="400" height="400" alt="创业" data-bd-imgshare-binded="1"></p>
<br/>
     首先创业者必须有更深刻的市场敏感性，必须面对更多的不确定性。再者创业过程必须冒更多的风险。然后创业者需要更多的资源储备。<br/>
     创业者在每个阶段都要问自己，怎样才能用有限的资源获得更多的价值创造？<br/>
　   学会拼凑。很多创业者都是拼凑高手，通过加入一些新元素，与已有的元素重新组合，形成在资源利用方面的创新行为，进而可能带来意想不到的惊喜。创业者通常利用身边能够找到的一切资源进行创业活动，有些资源对他人来说也许是无用的、废弃的，但创业者可以通过自己的独有经验和技巧，加以整合创造。<br/>
　   整合已有的资源，快速应对新情况，是创业的利器之一。拼凑者善于用发现的眼光，洞悉身边各种资源的属性，将它们创造性地整合起来。这种整合很多时候甚至不是事前仔细计划好的，而往往是具体情况具体分析、"摸着石头过河"的产物。而这也正体现了创业的不确定性特性，并考验创业者的资源整合能力。
        </div>
        <div class="pre-box">
        	<p>上一篇：<a href="#" title="">首科创融与知呱呱签署协议 北京市副市长程红见证签约仪式</a></p>
            <p>上一篇：<a href="#" title="">跟着方木来创业 浅谈代理记账公司的必要性</a></p>
        </div>
    </div>
    <!--新闻详情-->
    
    
</div>
<!--右侧-->
</div>
<div class="clear"></div>
<!--底部开始-->
<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>