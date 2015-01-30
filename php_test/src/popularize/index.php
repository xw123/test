<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>联欣投资 | 双重豪礼大放送</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta http-equiv="content-style-type" content="text/css" />
        <meta http-equiv="content-script-type" content="text/javascript" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <link rel="stylesheet" href="css/style.css" />
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/page.js"></script>
        <!--[if IE 6]>
            <script type="text/javascript" src="js/DD_belatedPNG.js"></script>
                <script  type="text/javascript">
                        window.onload = function(){ DD_belatedPNG.fix("*"); }
                </script>
        <![endif]-->
        <script type="text/javascript">
        $(function(){ 
            $("#vcodeImg").click(function(){
                $(this).attr("src", "checkCode.php?mr="+Math.random());
            });
        }) 
        function registerUserAjax() {
            var username = $('#username').val();
            var tel = $('#tel').val();
            var qq = $('#qq').val();
            var checkCode = $('#checkCode').val();
            var postData = {username: username, tel: tel, qq: qq, checkCode: checkCode};
            $.post("submitAjax.php", postData,function (data, textStatus){
                 if (data.error) {
                     alert('注册失败，No = ' + data.error);
                 }
                 if (data.success) {
                     alert('注册成功!');
                     $(".mask").fadeOut();
                     $(".pop_close").parent().removeClass("show").fadeOut();
                 }
            }, "json");
        }
        </script>
    </head>
	<body>
		<div class="wrapper">
    	<div class="header">
    		<div class="inner clearfix">
        		<h1 class="logo"><img src="images/logo.jpg" width="564" height="91" alt="联欣投资 以人为本，以信为先，创造理财新高峰" /></h1>
            	<p class="h_tel"><img src="images/tel.jpg" width="229" height="48" alt="24小时服务热线 4000-126-555" /></p>
        	</div>
        </div>
        <div class="main_banner">
        	<img src="images/banner.jpg" width="1380" height="413" alt="双重豪礼大放送 即可开户赢iphone6 苹果笔记本 IPAD，更有金条银条等你赢...别问为什么，就是这么任性！新的一年赚个够" />
        </div>
        <div class="contents">
        	<div class="inner">
            	<div class="activeInfo">
                  <ul>
                  	<li class="ljkh"><a class="btn_join" href="javascript:void(0);">立即开户</a></li>
                    <li class="lxkf">联系客服</li>
                  </ul>
                  <dl class="infoList">
                  	<dt>报名时间：</dt>
                  	<dd>2015.1.15-2015.2.15</dd>
                  	<dt>活动时间：</dt>
                  	<dd>2015.1.15-2015.4.15</dd>
                  	<dt>活动对象：</dt>
                  	<dd>在报名时间内，有效完成开户且入金的客户</dd>
                  	<dt>报名方式：</dt>
                  	<dd>在本页面点击“立即报名”，填写报名信息之后，等待审核通过</dd>
                  </dl>
                </div>
                <div class="active01">
                	<h2>开户尊享 优惠不止一点点 活动一</h2>
                	<div class="part01">
                		<h3>尊享100g银条</h3>
						<p>活动期间，单个账户入金5万(含)-10万(不含)，且至<br />少交易3标准手，赠送100g银条</p>
                	</div>
                	<div class="part02">
                		<h3>尊享200g银条</h3>
                	<p>活动期间，单个账户入金10万(含)-30万(不含)，且至<br />交易6标准手，赠送200g银条</p>
                	</div>
                	<div class="part03">
                		<h3>尊享10g银条</h3>
						<p>活动期间，单个账户入金30万(含)以上，且至少<br />交易20标准手，赠送10g金条</p>
                	</div>
                </div>
                <div class="active02">
					<h2>投资有方 交易有礼 活动二</h2>
					<dl class="infoList">
						<dt>报名时间：</dt>
						<dd>2015.1.15-2015.2.15</dd>
						<dt>活动时间：</dt>
						<dd>2015.1.15-2015.4.15</dd>
					</dl>
					<div class="part01">
						<h3>尊享苹果平板电脑</h3>
						<p>活动期间，客户累计交易量≥50标准手，<br />赠送价值2788元的IPAD AIR一台</p>
					</div>
					<div class="part02">
						<h3>尊享苹果6手机</h3>
						<p>活动期间，客户累计交易量≥80标准手，赠送<br />价值7788元的IPHONE 6 PLUS 128G一台</p>
					</div>
					<div class="part03">
						<h3>尊享苹果15.4寸笔记本</h3>
						<p>活动期间，客户累计交易量≥180标准手，赠送<br />价值17988元的APPLE笔记本电脑一台</p>
					</div>
					<div class="part04">
						<h3>尊享苹果三件套大礼包</h3>
						<p>活动期间，客户累计交易量≥500标准手，赠<br />送价值价28564元苹果大礼包，含IPAD AIR+<br />IPHONE6 PLUS 128G+APPLE笔记本电脑</p>
					</div>
                </div>
                <div class="attentionArea">
                	<h2>活动须知</h2>
                	<ul class="attentionTxt">
                		<li><span>1</span>标准手解释：以平仓手数为准（建仓1手+平仓1手=1标准手），标准手规格为100千克白银</li>
                		<li><span>2</span>客户需在报名时间内完成开户且入金才可参与本次活动</li>
                		<li><span>3</span>活动一与活动二可以兼得，即同时满足活动一及活动二规则的客户可获得两个活动相应的礼品</li>
                		<li><span>4</span>客户报名以客服人员收到客户报名表并确认登记信息准确无误为准</li>
                		<li><span>5</span>仅报名期间可申请礼品。入金量及交易手数从申请礼品当天开始统计，入金量未在报名时间截止前达到要求视为放弃申请。交易量需在活动时间结束前达到才可获得礼品</li>
                		<li><span>6</span>礼品在达到活动要求后的一个礼拜内派送</li>
                		<li><span>7</span>本活动解释权归联欣贵金属所有，如有疑惑请于我们联系</li>
                	</ul>
                	<div class="btnWrap"><a class="btn_join" href="javascript:void(0);">即刻开户</a></div>
                </div>
            </div>
        </div>
        
        <div class="banksArea">
        	<div class="inner">
        	     <h2><img src="images/bank_ttl.jpg" width="72" height="90" alt="合作银行" /></h2>
        		 <ul class="clearfix">
        		 	<li class="bank_icbc">中国工商银行</li>
					<li class="bank_abc">中国农业银行</li>
					<li class="bank_ccb">中国建设银行</li>
        		 </ul>
        	</div>
        </div>
        <div class="footer">
        	<div class="inner">
        		<ul class="serviceArea">
        			<li class="mnzh"><i></i><p><b>模拟账户</b><br />新手申请模拟账户体验</p></li>
        			<li class="spzh"><i></i><p><b>实盘账户</b><br />快速注册真实账户投资</p></li>
        			<li class="kfrx"><i></i><p><b>客服热线</b><br />24小时在线咨询</p></li>
        			<li class="tzbd last"><i></i><p><b>投资宝典</b><br />投资需谨慎，投资有诀窍</p></li>
        		</ul>
        		<p class="copyright">Copyright C 2006 - 2015 All Rights Reserved 鑫领豪投资 版权所有<br />入市有风险 投资需谨慎</p>
        		<ul class="other clearfix">
        			<li class="item01">贵金属可信企业</li>
        			<li class="item02">中国互联网协会</li>
        			<li class="item03">中国信用企业</li>
        			<li class="item04">360网站安全监测</li>
        		</ul>
        	</div>
        </div>
        </div>
        <ul class="fixedArea">
            <li class="fa_01"><a class="btn_join" href="javascript:void(0);">立即开户</a></li>
            <li class="fa_02">二维码</li>
            <li class="fa_03"><a class="btn_top" href="javascript:void(0);"></a>返回顶部</li>
        </ul>
        <div class="mask"></div>
        <div class="pop_regist">
        	<div class="pop_close" href="javascript:void(0);">x</div>
        	<div class="pop_cont regist_form">
                    <form action="#" method="post">
                    <p class="field clearfix"><label>姓&nbsp;名</label><span><input class="ipt" type="text" name="username" id="username"/></span></p>
                    <p class="field clearfix"><label>手&nbsp;机</label><span><input class="ipt" type="text" name="tel"  id="tel"/></span></p>
                    <p class="field clearfix"><label>Q&nbsp;&nbsp;Q</label><span><input class="ipt" type="text" name="qq"  id="qq"/></span></p>
                    <p class="field_vcode clearfix"><label>验证码:</label><span><input class="ipt ipt_vcode" type="text"  name="checkCode"  id="checkCode"/></span><span class="vcodeImg"><img id="vcodeImg" src="checkCode.php" height="22" width="73" title="点击刷新验证码"/></span></p>
                    <p class="field"><input type="button" class="btn_regist" onclick="registerUserAjax()" value="提交注册"/></p>
            </form>
        	</div>
        </div>
	</body>
</html>