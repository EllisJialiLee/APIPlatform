<?php $counter = intval(file_get_contents("api/icp/counter.dat")); ?>
<?php $counter1 = intval(file_get_contents("api/sjbz/counter.dat")); ?>
<?php $counter2 = intval(file_get_contents("api/qrcode/counter.dat")); ?>
<?php $counter3 = intval(file_get_contents("api/qqol/counter.dat")); ?>
<?php $counter4 = intval(file_get_contents("api/qqxtnc/counter.dat")); ?>
<!--<?php $counter5 = intval(file_get_contents("api/bing/counter.dat")); ?>-->
<?php $counter6 = intval(file_get_contents("api/wyy/counter.dat")); ?>
<!--<?php $counter7 = intval(file_get_contents("api/cxipdw/counter.dat")); ?>-->
<!--<?php $counter8 = intval(file_get_contents("api/mail/counter.dat")); ?>-->
<?php $counter9 = intval(file_get_contents("api/qmd/counter.dat")); ?>
<?php $counter10 = intval(file_get_contents("api/yyan/counter.dat")); ?>
<?php $counter11 = intval(file_get_contents("api/wzbthq/counter.dat")); ?>
<?php $counter12 = intval(file_get_contents("api/sjtx/counter.dat")); ?>
<!--<?php $counter13 = intval(file_get_contents("api/xldwz/counter.dat")); ?>-->
<!--<?php $counter14 = intval(file_get_contents("api/baidusite/counter.dat")); ?>-->
<?php $counter15 = intval(file_get_contents("api/favicon/counter.dat")); ?>
<?php $counterhome = intval(file_get_contents("counter.dat")); ?>
<?php
    $counter = intval(file_get_contents("counter.dat"));  
     $_SESSION['#'] = true;  
     $counter++;  
     $fp = fopen("counter.dat","w");  
     fwrite($fp, $counter);  
     fclose($fp); 
?>
<?php require_once("./website.php");?>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <title><?php echo $website_array["website_title"];?> - 实用API集 - 免费API数据接口调用服务平台!</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="keywords" content="<?php echo $website_array["website_keywords"];?>">
        <meta name="description" content="<?php echo $website_array["website_description"];?>">
		<meta name="author" content="<?php echo $website_array["website_author"];?>">
        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="css/oneui.css">
    </head>

	<header class="site-header">
		<nav class="nav_jsxs">
		<span style="float: left;"><a class="logo_jsxs" href="/."></a></span>
		<a href="/">首页</a>
		<a target="_blank" href="<?php echo $website_array["net_url"];?>"><?php echo $website_array["net_name"];?></a>
		<a target="_blank" href="<?php echo $website_array["blog_url"];?>"><?php echo $website_array["blog_name"];?></a>
		<a target="_blank" href="https://wpa.qq.com/msgrd?v=3&uin=1576384173">反馈</a>
		<a href="#about" onclick="_hmt.push(['_trackEvent', 'main-navbar', 'click', 'about'])">关于</a>
    </nav>
    <div class="box-text">
        <h1><?php echo $website_array["website_banner"];?></h1>
        <p>稳定、快速、免费的 API 接口服务<br>
		<span class="package-amount">共发布 <strong><?php echo $website_array["api_number"];?></strong> 个项目</span></p>
    </div>
	</header>
	<section class="content content-boxed">
		<p class="p-jsxs">拒绝流量劫持，全面使用HTTPS！</p>
		<div class="row row_jsxs">
			
	<!--BG <body style="background:url(api/sjbz/api.php?lx=dongman);">  -->
                <!-- <div style="border-radius:5px">
                    <section class="content content-boxed">
                        <div class="row"> -->
                            <div class="col-sm-4">
                                <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" target="_blank" href="api/qrcode">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter2; ?></div>
                                 
                                    <div class="block-content">
                                        <div class="h4 push-5">QRcode二维码</div>
                                        <p class="text-muted">生成网址二维码</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" target="_blank" href="api/sjbz">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter1; ?></div>
                                  
                                    <div class="block-content">
                                        <div class="h4 push-5">随机壁纸美图</div>
                                        <p class="text-muted">每次刷新带给你不同体验</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4">
                               <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" target="_blank" href="api/icp">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">ICP备案查询</div>
                                        <p class="text-muted">查询网站ICP备案</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4">
                               <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" target="_blank" href="api/qqol">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter3; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">QQ在线状态查询</div>
                                        <p class="text-muted">查看QQ是否电脑在线</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" target="_blank" href="api/qqxtnc">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter4; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">获取QQ信息</div>
                                        <p class="text-muted">获取QQ昵称和头像</p>
                                    </div>
                                </a>
                            </div>
                           <!--<div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" target="_blank" href="api/bing">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter5; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">Bing每日图</div>
                                        <p class="text-muted">获取每日Bing背景图</p>
                                    </div>
                                </a>
                            </div>-->
                        <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" target="_blank" href="api/wyy">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter6; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">网易音乐解析</div>
                                        <p class="text-muted">获取网易云音乐外链</p>
                                    </div>
                                </a>
                            </div>
                        <!--<div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" target="_blank" href="api/cxipdw">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter7; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">查询IP定位</div>
                                        <p class="text-muted">精确查询IP地理位置</p>
                                    </div>
                                </a>
                            </div>-->
                        <!--<div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" target="_blank" href="api/mail">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter8; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">邮件发送API</div>
                                        <p class="text-muted">免费发送邮件API接口</p>
                                    </div>
                                </a>
                            </div>-->
                        <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" target="_blank" href="api/qmd">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter9; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">来访IP签名档</div>
                                        <p class="text-muted">精美访客IP签名卡片</p>
                                    </div>
                                </a>
                            </div>
                        <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" target="_blank" href="api/yyan">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter10; ?></div>
                                    <div class="block-content">
                                      <div class="h4 push-5">随机一言语录</div>
                                        <p class="text-muted">每天随时送上一碗毒鸡汤</p>
                                    </div>
                                </a>
                            </div>
                       <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" target="_blank" href="api/wzbthq">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter11; ?></div>
                                    <div class="block-content">
                                      <div class="h4 push-5">网站标题获取</div>
                                        <p class="text-muted">查询获取网站标题名</p>
                                    </div>
                                </a>
                            </div>
                       <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" target="_blank" href="api/sjtx">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter12; ?></div>
                                    <div class="block-content">
                                      <div class="h4 push-5">随机头像美图</div>
                                        <p class="text-muted">随机输出各类美图头像</p>
                                    </div>
                                </a>
                            </div>
					   <!--<div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" target="_blank" href="api/xldwz">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter13; ?></div>
                                    <div class="block-content">
                                      <div class="h4 push-5">新浪短网址</div>
                                        <p class="text-muted">生成新浪短网址和还原</p>
                                    </div>
                                </a>
                            </div>-->
					   <!--<div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" target="_blank" href="api/baidusite">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter14; ?></div>
                                    <div class="block-content">
                                      <div class="h4 push-5">百度收录查询</div>
                                        <p class="text-muted">根据域名查询百度收录量</p>
                                    </div>
                                </a>
                            </div>-->
                          <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" target="_blank" href="api/favicon">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter15; ?></div>
                                    <div class="block-content">
                                      <div class="h4 push-5">网站Favicon图标获取</div>
                                        <p class="text-muted">获取指定站点favicon.ico图标</p>
                                    </div>
                                </a>
                            </div>
                       <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="#">
                                    <div class="ribbon-box font-w600">浏览:<?php echo $counterhome; ?></div>
                                    <div class="block-content">
                                      <div class="h4 push-5">接口项目待更新</div>
                                        <p class="text-muted">敬请期待更多接口陆续更新中...</p>
                                    </div>
                                </a>
                            </div>
            			<!--footer <div class="col-sm-12">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" target="_blank" href="https://www.liitk.com">
                                    <div class="block-content">
                                        <p class="text-center"><?php echo $about_array["about2"];?></p>
										<p class="text-center"><?php echo $website_array["website_copyright"];?></p>
                                    </div>
                                </a>
                            </div> -->
    </section>
    
    <footer id="footer" class="footer hidden-print">
        <div class="container">
            <div class="row">
                <div class="footer-about col-md-6 col-sm-12" id="about">
                    <h4><?php echo $footer_array["footer_title1"];?></h4>
			<p><p>
				<a href="/." target="_blank" onclick="_hmt.push(['_trackEvent', 'footer', 'click', 'footer-bootcss.com'])"><?php echo $website_array["website_title"];?></a><?php echo $footer_array["footer_text1"];?>
			</p>
			<p><?php echo $footer_array["footer_text2"];?></p>
			<p><?php echo $footer_array["footer_text3"];?></p>
		</div>
                <div class="footer-links col-md-4 col-sm-12">
                    <h4><?php echo $footer_array["footer_title2"];?></h4>
                     <p><?php echo $links_array["links"];?>
		</div>
                <div class="footer-techs col-md-2 col-sm-12">
                    <h4><?php echo $footer_array["footer_title3"];?></h4>
                     <p></p><img src="<?php echo $footer_array["footer_img"];?>" style="width: 100%;">
                </div>
            </div>
        </div>
       <div class="copy-right">
            <span><?php echo $footer_array["footer_copyright"];?></span><!-- <span><a href="http://beian.miit.gov.cn/" target="_blank"><?php echo $footer_array["footer_icp"];?></a></span> -->
        </div>
</body>
<!-- font-awesome 4.2.0 -->
<link href="https://lib.baomitu.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- JQuery 2.2.4 -->
<script src="https://lib.baomitu.com/jquery/2.2.4/jquery.min.js"></script>
<!-- JQuery-mousewheel 3.1.9 -->
<script src="https://lib.baomitu.com/jquery-mousewheel/3.1.9/jquery.mousewheel.min.js"></script>
</html>