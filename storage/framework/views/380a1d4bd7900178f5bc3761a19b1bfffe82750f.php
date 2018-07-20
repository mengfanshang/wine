<?php
$url = $_SERVER['PHP_SELF'];
$params = explode('/',$url);
$params = end($params);
?>
<div class="foot">
    <div class="container">
        <div class="foot-txt container">
            <div class="footmenu">
                <dl>
                    <dt>关于我们</dt>
                    <dd>
                        <a href="#">企业简介</a>
                        <a href="#">员工风采</a>
                    </dd>
                </dl>
                <dl>
                    <dt>资讯中心</dt>
                    <dd>
                        <a href="#">行业资讯</a>
                        <a href="#">公司资讯</a>
                    </dd>
                </dl>
                <dl>
                    <dt>产品中心</dt>
                    <dd>
                        <a href="#">产品分类</a>
                        <a href="#">产品分类</a>
                        <a href="#">产品分类</a>
                        <a href="#">产品分类</a>
                    </dd>
                </dl>
                <dl>
                    <dt>视频中心</dt>
                    <dd></dd>
                </dl>
                <dl>
                    <dt>售后服务</dt>
                    <dd>
                        <a href="#">国内销售</a>
                        <a href="#">服务承诺</a>
                        <a href="#">产品资质</a>
                    </dd>
                </dl>
                <dl>
                    <dt>联系我们</dt>
                    <dd>
                        <a href="#">联系方式</a>
                        <a href="#">在线地图</a>

                    </dd>
                </dl>
            </div>
            <div class="ftewm">
                <?php if($params == 'index.php'): ?>
                    <img src="images/ewm.jpg" /><p>扫码关注企业公众号二维码</p>
                <?php else: ?>
                    <img src="../images/ewm.jpg" /><p>扫码关注企业公众号二维码</p>
                <?php endif; ?>
            </div>
            <div class="ftaddtxt">
                <p>销售部固定电话： 0527-88980666</p>
                <p>公司传真：0527-88980123</p>
                <p>联系人：王经理</p>
                <p>联系人电话：13365252958</p>
                <p>全国客服电话：4009610588</p>
                <p>公司地址：江苏省宿迁市宿城经济开发区西区古城路30号（吴中工业园）</p>
            </div>
        </div>
    </div>
    <div class="copr">
        <div class="container">
            <span>Copyright © 2013 - 2017 江苏旭峰科技有限公司 All Rights Reserved  苏ICP备14031554号-4  苏公网安备32131102000333号</span>
            <a href="#">技术支持：沃尔普科技</a>
        </div>
    </div>
</div>

<div id="kefu1">
    <div class="cs_close"><a href="javascript:;" onClick="$('#kefu1').fadeOut()"><span>关闭</span></a></div>
    <div class="cs_tel"></div>
    <div class="cs_tel_ct">
        <span class="cs_tel_num">44505628</span> 工作日：9:00-18:00<br />周　六：9:00-18:00<br />
    </div>
    <div class="cs_spr"></div>
    <div class="cs_online"></div>
    <div class="cs_online_ct">
        <div class="cs_online_qq"><a target="_blank" href="http://wp.qq.com/wpa/qunwpa?idkey=6fcb83777ae7745bd5093a1a5917f915f4e95cfc498633379ebfbb4"><img border="0" src="http://wpa.qq.com/pa?p=2:123456789:52" alt="点击这里给我发消息" title="点击这里给我发消息" align="absmiddle" /> 代理咨询</a></div>
        <div class="cs_online_qq"><a target="_blank" href="http://wp.qq.com/wpa/qunwpa?idkey=6fcb83630777ae7745bd5093a1a5917f915f4e95cfc498633379ebfbb4"><img border="0" src="http://wpa.qq.com/pa?p=2:123456789:52" alt="点击这里给我发消息" title="点击这里给我发消息" align="absmiddle" /> 销售客服01</a></div>
        <div class="cs_online_qq"><a target="_blank" href="http://wp.qq.com/wpa/qunwpa?idkey=6fcb8c3630777ae7745bd5093a1a5917f915f4e95cfc498633379ebfbb4"><img border="0" src="http://wpa.qq.com/pa?p=2:123456789:52" alt="点击这里给我发消息" title="点击这里给我发消息" align="absmiddle" /> 销售客服02</a></div>
    </div>
    <?php if($params == 'index.php'): ?>
        <div class="cs_qcode"><img src="images/ewm.jpg" width="120" height="120" title="用手机微信扫一扫" /></div>
    <?php else: ?>
        <div class="cs_qcode"><img src="../images/ewm.jpg" width="120" height="120" title="用手机微信扫一扫" /></div>
    <?php endif; ?>
    <div class="cs_spr"></div>

</div>
<!--轮播-->
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.flexslider').flexslider({
            directionNav: true,
            pauseOnAction: false
        });
    });
</script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script>
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
        new WOW().init();
    };
</script>

</body>
</html>
