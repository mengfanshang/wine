@include('layouts.hearder')
<body>
<div class="contentbox">
    @include('layouts.news')
    <div class="header">
    	<div class="container">
        	<div class="logo"><a href="/"><img src="images/logo.jpeg" style="width: 345px ;height: 80px"/></a></div>
            <div class="nav">
            	<ul>
                	<li class="active"><a href="/">首页</a></li>
                    <li><a href="{{route('index.about')}}">关于我们</a></li>
                    <li><a href="{{route('index.newsinfo')}}">资讯中心</a></li>
                    <li><a href="{{route('index.service')}}">售后服务</a></li>
                    <li><a href="{{route('index.product')}}">产品中心</a></li>
                    <li><a href="{{route('index.video')}}">视频中心</a></li>
                    <li><a href="{{route('index.person')}}">人才招聘</a></li>
                    <li><a href="{{route('index.contact')}}">联系我们</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="flexslider">
	<ul class="slides">
		<li style="background:url(images/banner1.jpg) 50% 0 no-repeat;"></li>
		<li style="background:url(images/banner1.jpg) 50% 0 no-repeat;"></li>
	</ul>
</div>
<div class="contentbox">
	<div class="container">
    	<div class="indtitle">
        	<p>Product center</p>
            <div class="line"></div>
            <span>产品中心</span>
        </div>
        <div class="container">
        	<div class="indvido wow slideInLeft">
            	<img src="images/videotit.jpg" />
                <div class="vidobox">
                	<div class="vido"><img src="images/vdie.jpg" width="256" height="177" /></div>
                    <h2 class="yh">视频标题</h2>
                </div>
                <div class="vidosmall">
                	<a href="vido.html"><img src="images/vdie2.jpg" /></a>
                    <a href="vido.html"><img src="images/vdie2.jpg" /></a>
                    <a href="vido.html"><img src="images/vdie2.jpg" /></a>
                </div>
                <div class="more"><a href="vido.html">查看更多视频 >></a></div>

            </div>
            <div class="indprolist wow slideInRight">
            	<ul>
                	<li><a href="proinfo.html"><img src="images/pro.jpg" width="256" height="177" /></a><h1><a href="proinfo.html">产品标产品标题产品标题产品标题产品标题题</a></h1></li>
                    <li><a href="proinfo.html"><img src="images/pro.jpg" width="256" height="177" /></a><h1><a href="proinfo.html">产品标产品标题产品标题产品标题产品标题题</a></h1></li>
                    <li><a href="proinfo.html"><img src="images/pro.jpg" width="256" height="177" /></a><h1><a href="proinfo.html">产品标产品标题产品标题产品标题产品标题题</a></h1></li>
                    <li><a href="proinfo.html"><img src="images/pro.jpg" width="256" height="177" /></a><h1><a href="proinfo.html">产品标产品标题产品标题产品标题产品标题题</a></h1></li>
                    <li><a href="proinfo.html"><img src="images/pro.jpg" width="256" height="177" /></a><h1><a href="proinfo.html">产品标产品标题产品标题产品标题产品标题题</a></h1></li>
                    <li><a href="proinfo.html"><img src="images/pro.jpg" width="256" height="177" /></a><h1><a href="proinfo.html">产品标产品标题产品标题产品标题产品标题题</a></h1></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="advtxt">
	<div class="container">
    	<div class="advt-l wow slideInLeft">为客户提供优质、全面、先进的产品是江苏旭峰科技有限公司不变的理念；打造喷涂设备智能化、小型化及移动应用平台的领导者，成为最优秀的智能喷涂设备产品供应商</div>
        <div class="advt-r wow slideInRight">
        	<p>立足创新、专注品质、诚信合作、共同发展</p>
            <span>Based on innovation, focus on quality, good faith cooperation and common development</span>
        </div>
        <div class="youshi wow bounceInDown"></div>
    </div>
    <div class="container" style="margin-top:70px;">
    	<ul class="shebeilist">
        	<li class="mg-r-15">
            	<div class="sbtxt bj1">
                	<p>粉末涂装生产线</p>
                    <span>粉末涂装生产线专业设计生产的厂家，为您定制全套设备，包含喷粉房、粉末回收装置、烘箱、热源系统、电控系统、悬挂输送链等。</span>
                </div>
                <div class="sbimg"><img src="images/sb4.jpg" width="370" height="214" /></div>
            </li>
            <li class="mg-r-15">
            	<div class="sbtxt bj2">
                	<p>静电喷塑设备</p>
                    <span>静电喷塑设备也叫喷塑生产线，是一种环保的涂装设备生产线，具有涂装效率高，涂层性能优，防腐蚀性强，环保无污染的特点。</span>
                </div>
                <div class="sbimg"><img src="images/sb5.jpg" width="370" height="214" /></div>
            </li>
            <li class="wow">
            	<div class="sbtxt bj3">
                	<p>悬挂自动输送线</p>
                    <span>悬挂输送链是自动输送线的一种，将工件悬挂在空中,通过悬挂输送链条/轨道/吊具将工件输送进行涂装，可控制速度。</span>
                </div>
                <div class="sbimg"><img src="images/sb6.jpg" width="370" height="214" /></div>
            </li>
            <li class="mg-r-15  wow slideInLeft">
            	<div class="sbtxt bj4">
                	<p>烘烤固化设备</p>
                    <span>烘烤固化设备是将喷涂好的工件进行固化的设备，主要有烘箱、烘道、热源系统等构成。</span>
                </div>
                <div class="sbimg"><img src="images/sb1.jpg" width="370" height="214" /></div>
            </li>
            <li class="mg-r-15  wow bounceInDown">
            	<div class="sbtxt bj5">
                	<p>粉末回收喷粉房</p>
                    <span>喷粉房具有粉末回收功能，为工件喷塑提供洁净的空间，可以设计单、双、多工位喷塑，自动喷塑。粉末回收率93%以上。</span>
                </div>
                <div class="sbimg"><img src="images/sb2.jpg" width="370" height="214" /></div>
            </li>
            <li class="wow slideInRight">
            	<div class="sbtxt bj6">
                	<p>五星级售后服务</p>
                    <span>专业、快捷、搞笑的售后服务团队为您提供优质的产品售后服务，我们定期回访新老顾客，聆听意见和建议。</span>
                </div>
                <div class="sbimg"><img src="images/sb3.jpg" width="370" height="214" /></div>
            </li>
        </ul>
    </div>
</div>
<div class="container mg-tb">
	<div class="jg1"><img src="images/jg1.jpg" /></div>
    <div class="jg2">
    	<h3>涂装设备设计宗旨和标准</h3>
        <p>GB15607 粉末静电喷涂工艺安全规定<br />GB14443 涂层烘干室安全技术规定<br />GB6514 涂装设备工艺安全规定<br />GB6515 涂装工艺通风及净化规定<br />GB50058 爆炸和火灾危险环境电力装置设计规定GB5083 生产设备安全卫生设计总则</p>
    </div>
    <div class="jg3"><img src="images/jg3.jpg" /></div>
    <div class="jg4"><img src="images/jg2.jpg" /></div>
    <div class="jg4"><img src="images/jg4.jpg" /></div>
</div>
<div class="contentbox">
	<div class="container">
    	<div class="indtitle">
        	<p>Product center</p>
            <div class="line"></div>
            <span>产品中心</span>
        </div>
        <div class="container">
        	<div class="indnewshot wow slideInLeft">
            	<a href="newsinfo.html"><img src="images/news.jpg" width="364" height="228" /></a>
                <a href="newsinfo.html" class="tit yh">市领导来我公司指导视察，领导热情接待...</a>
                <a href="newsinfo.html" class="more">阅读详情</a>
            </div>
            <div class="indnewslist wow slideInRight">
            	<ul>
                	<li>
                    	<h1 class="yh"><a href="newsinfo.html">热烈祝贺我公司网站成功上线</a></h1>
                        <p>市领导班子常委江苏旭峰科技有限公司视察公司，公司领导热情接待并参观了工厂...</p>
                        <div class="time">
                        	<p>08</p><span>2018-01</span>
                        </div>
                    </li>
                    <li>
                    	<h1 class="yh"><a href="newsinfo.html">热烈祝贺我公司网站成功上线</a></h1>
                        <p>市领导班子常委江苏旭峰科技有限公司视察公司，公司领导热情接待并参观了工厂...</p>
                        <div class="time">
                        	<p>08</p><span>2018-01</span>
                        </div>
                    </li>
                    <li>
                    	<h1 class="yh"><a href="newsinfo.html">热烈祝贺我公司网站成功上线</a></h1>
                        <p>市领导班子常委江苏旭峰科技有限公司视察公司，公司领导热情接待并参观了工厂...</p>
                        <div class="time">
                        	<p>08</p><span>2018-01</span>
                        </div>
                    </li>
                    <li>
                    	<h1 class="yh"><a href="newsinfo.html">热烈祝贺我公司网站成功上线</a></h1>
                        <p>市领导班子常委江苏旭峰科技有限公司视察公司，公司领导热情接待并参观了工厂...</p>
                        <div class="time">
                        	<p>08</p><span>2018-01</span>
                        </div>
                    </li>
                    <li>
                    	<h1 class="yh"><a href="newsinfo.html">热烈祝贺我公司网站成功上线</a></h1>
                        <p>市领导班子常委江苏旭峰科技有限公司视察公司，公司领导热情接待并参观了工厂...</p>
                        <div class="time">
                        	<p>08</p><span>2018-01</span>
                        </div>
                    </li>
                    <li>
                    	<h1 class="yh"><a href="newsinfo.html">热烈祝贺我公司网站成功上线</a></h1>
                        <p>市领导班子常委江苏旭峰科技有限公司视察公司，公司领导热情接待并参观了工厂...</p>
                        <div class="time">
                        	<p>08</p><span>2018-01</span>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
	</div>
</div>
@include('layouts.footer')