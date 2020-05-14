<?php require_once($_SERVER['DOCUMENT_ROOT']."/i/website.php");?>	
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ICP备案查询 - 免费API - <?php echo $website_array["website_banner"];?></title>
    <meta name="keywords" content="<?php echo $website_array["website_keywords"];?>">
	<meta name="description" content="<?php echo $website_array["website_description"];?>">
    <meta name="author" content="<?php echo $website_array["website_author"];?>">
    <link href="/i/css/api_bootstrap.min.css" rel="stylesheet">
    <link href="/i/css/api_site.min.css" rel="stylesheet">
</head>
<body class="home-template">
    <header class="site-header">
        <nav class="navbar navbar-static-top main-navbar" id="top">
            <div class="container">
                <div class="navbar-header">
                    <h3><a href="/"><?php echo $website_array["website_banner"];?></a></h3>
                </div>
                <nav id="bs-navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                       <li><a href="<?php echo $website_array["website_url"];?>">首页</a></li>
                       <li><a target="_blank" href="<?php echo $website_array["net_url"];?>"><?php echo $website_array["net_name"];?></a></li>
					   <li><a target="_blank" href="<?php echo $website_array["blog_url"];?>"><?php echo $website_array["blog_name"];?></a></li>
                       <li><a href="#about" onclick="_hmt.push(['_trackEvent', 'main-navbar', 'click', 'about'])">关于</a></li>
                    </ul>
                </nav>
            </div>
        </nav>
        <div class="container jumbotron">
            <div class="row">
                <div class="col-xs-12">
                    <h1><img src="/img/API1.svg" alt="APIlogo" class="hidden">ICP备案查询</h1>
                    <p>查询网站ICP备案</p>
                </div>
            </div>
        </div>
        <div class="package-info well well-md text-center">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#api" data-toggle="tab">API文档</a></li>
                    <!--<li><a href="#code" data-toggle="tab">错误码参照</a></li>-->
                    <li><a href="#demo" data-toggle="tab">示例代码</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main class="container tab-content" id="myTabContent">
        <article class="markdown-body tab-pane fade in active" id="api">
            <div class="api-sub-content">
                <div class="simpleline"><strong>接口地址：</strong><span class="url"><?php echo $website_array["api_url"];?><?php echo basename(dirname(__FILE__))?>/api</span></div>
                <div class="simpleline"><strong>返回格式：</strong><span class="url">json</span></div>
                <div class="simpleline"><strong>请求方式：</strong><span class="url">get/post</span></div>
                <div class="simpleline"><strong>请求示例：</strong><span class="url"><?php echo $website_array["api_url"];?><?php echo basename(dirname(__FILE__))?>/api?dm=www.qq.com</span></div>
                <div class="simpleTable">
                    <p class="linep">请求参数说明：</p>
                    		        <table class="api-table" border="0" cellspacing="0" cellpadding="0">
		          <tbody>
		              <tr class="title">
		                  <th width="20"></th>
		                  <th width="100">名称</th>
		                  <th width="60">必填</th>
		                  <th width="80">类型</th>
		                  <th>说明</th>
		              </tr>
		              		            <tr>
		                  <td>&nbsp;</td>
		                  <td class="url">dm </td>
		                  <td class="url">是</td>
		                  <td class="url">string</td>
		                  <td>要查询ICP备案的域名,必填</td>
		              </tr>
		              		          </tbody>
		          </table>
		          </div>
		          <div class="simpleTable">
		              <p class="linep">返回参数说明：</p>
		               <table class="api-table" border="0" cellspacing="0" cellpadding="0">
		              <tbody><tr class="title">
		                  <th width="20"></th>
		                  <th width="100">名称</th>
		                  <th width="80">类型</th>
		                  <th>说明</th>
		              </tr>
		              		            <tr>
		                  <td>&nbsp;</td>
		                  <td class="url">主办单位名称</td>
		                  <td class="url">string</td>
		                  <td>主办单位名称</td>
		              </tr>
		              		            <tr>
		                  <td>&nbsp;</td>
		                  <td class="url">主办单位性质</td>
		                  <td class="url">string</td>
		                  <td>主办单位性质</td>
		              </tr>
		              		            <tr>
		                  <td>&nbsp;</td>
		                  <td class="url">网站备案/许可证号</td>
		                  <td class="url">string</td>
		                  <td>网站备案/许可证号</td>
		              </tr>
		              		            <tr>
		                  <td>&nbsp;</td>
		                  <td class="url">网站名称</td>
		                  <td class="url">string</td>
		                  <td>网站名称</td>
		              </tr>
		              		            <tr>
		                  <td>&nbsp;</td>
		                  <td class="url">网站首页网址</td>
		                  <td class="url">string</td>
		                  <td>网站首页网址</td>
		              </tr>
		              		            <tr>
		                  <td>&nbsp;</td>
		                  <td class="url">审核时间</td>
		                  <td class="url">string</td>
		                  <td>审核时间</td>
		              </tr>
		              		            </tbody>
		        </table>
                </div>
                <div class="simpleTable">
                   <p class="linep">返回示例：</p><div class="prediv"><pre>{
    "code": 200,
    "msg": "查询成功!",
    "data": {
        "主办单位名称": "深圳市腾讯计算机系统有限公司",
        "主办单位性质": "企业",
        "网站备案/许可证号": "粤B2-20090059-5",
        "网站名称": "腾讯网",
        "网站首页网址": "www.qq.com",
        "审核时间": "2020/4/10 17:28:50"
    }
}</pre></div>		    </div>
		</div>
        </article>
        <article class="markdown-body tab-pane fade" id="code">
            <div class="api-sub-content">
                <div class="simpleTable">
                    <p class="linep"> 错误码格式说明：</p> 
		    <table class="api-table" border="0" cellspacing="0" cellpadding="0"> 
		     <tbody> 
		      <tr> 
		       <th width="20"> &nbsp; </th> 
		       <th width="200"> 名称 </th> 
		       <th width="200"> 类型 </th> 
		       <th> 说明 </th> 
		      </tr> 
		      <tr> 
		       <td> &nbsp; </td> 
		       <td> code </td> 
		       <td> string </td> 
		       <td> 返回的状态码 -1/1 失败/成功 </td> 
		      </tr> 
		      </tr> 
		      <tr> 
		       <td> &nbsp; </td> 
		       <td> msg </td> 
		       <td> string </td> 
		       <td> 返回结果提示信息！ </td> 
		      </tr> 
		     </tbody> 
		    </table> 
		   </div> 
		  </div>
	</article>
        <article class="markdown-body tab-pane fade" id="demo">
            <div class="simpleTable">
                <p class="linep">PHP演示：</p>
		    <div class="prediv">
		    	<pre>&lt;?php
$dm = $_GET['dm'];
$str = file_get_contents('https://api.liecnk.com/icp/api.php?dm='.$dm);
$data = json_decode($str,ture);
$a = $data['主办单位名称'];
$b = $data['主办单位性质'];
$c = $data['网站备案/许可证号'];
$d = $data['网站名称'];
$e = $data['网站首页网址'];
$f = $data['审核时间'];
?&gt;</pre>
                <p class="linep">HTML演示：</p>
		    <div class="prediv">
		    	<pre>&#60!--HTML代码-->
&#60ul>
  &#60li><&#63php echo $a;?>&#60/li>
  &#60li><&#63php echo $b;?>&#60/li>
  &#60li><&#63php echo $c;?>&#60/li>
  &#60li><&#63php echo $d;?>&#60/li>
  &#60li><&#63php echo $e;?>&#60/li>
  &#60li><&#63?php echo $f;?>&#60/li>
&#60/ul>
最后,假设写在了api,访问api/?dm=域名即可
&#60!--HTML代码结束--></pre>
		    </div>
		</div>
	</article>
</main>
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
            <span><?php echo $footer_array["footer_copyright"];?></span><span><a href="http://beian.miit.gov.cn/" target="_blank"><?php echo $footer_array["footer_icp"];?></a></span>
        </div>
  </footer>
    <script src="/i/js/api_jquery.min.js"></script>
    <script src="/i/js/api_bootstrap.min.js"></script>
</body>
</html>