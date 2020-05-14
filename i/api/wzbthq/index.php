<?php require_once($_SERVER['DOCUMENT_ROOT']."/i/website.php");?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>网站标题获取 - 免费API - <?php echo $website_array["website_banner"];?></title>
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
                    <h1><img src="../../img/API1.svg" alt="APIlogo" class="hidden">网站标题获取</h1>
                    <p>查询获取网站标题名</p>
                </div>
            </div>
        </div>
        <div class="package-info well well-md text-center">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#api" data-toggle="tab">API文档</a></li>
                    <li><a href="#code" data-toggle="tab">错误码参照</a></li>
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
                <div class="simpleline"><strong>请求示例：</strong><span class="url"><?php echo $website_array["api_url"];?><?php echo basename(dirname(__FILE__))?>/api?url=www.baidu.com</span></div>
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
		                  <td class="url">url</td>
		                  <td class="url">是</td>
		                  <td class="url">string</td>
		                  <td>输入网址，如：www.baidu.com</td>
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
		                  <td class="url">code</td>
		                  <td class="url">string</td>
		                  <td>返回状态码</td>
		              </tr>
		              		            <tr>
		                  <td>&nbsp;</td>
		                  <td class="url">msg</td>
		                  <td class="url">string</td>
		                  <td>返回状态信息</td>
		              </tr>
					  
							          	<tr>
					    <td>&nbsp;</td>
					    <td class="url">title</td>
					    <td class="url">string</td>
					    <td>返回网站标题</td>
					</tr>
		              		            </tbody>
		        </table>
                </div>
                <div class="simpleTable">
                   <p class="linep">返回示例：</p><div class="prediv"><pre>{
    "code": 10001,
    "msg": "ok",
    "title": "百度一下，你就知道"
}</pre></div>		    </div>
		</div>
        </article>
        <article class="markdown-body tab-pane fade" id="code">
            <div class="api-sub-content">
                <div class="simpleTable">
                    <p class="linep"> 服务级错误码参照(error_code)： </p> 
		    <table class="api-table" border="0" cellspacing="0" cellpadding="0"> 
		     <tbody> 
		      <tr> 
		       <th width="20"> &nbsp; </th> 
		       <th width="200"> 错误码 </th> 
		       <th> 说明 </th> 
		      </tr> 
		      		      <tr>
		          <td>&nbsp;</td>
		          <td class="url">20011</td>
			      <td class="text">无效的请求</td> 
		      </tr>
		      		     </tbody> 
		      </table> 
		     </div> 
                <div class="simpleTable">
                    <p class="linep"> 系统级错误码参照： </p> 
		    <table class="api-table" border="0" cellspacing="0" cellpadding="0"> 
		     <tbody> 
		      <tr> 
		       <th width="20"> &nbsp; </th> 
		       <th width="200"> 错误码 </th> 
		       <th> 说明 </th> 
		      </tr> 
		      <tr> 
		       <td> &nbsp; </td> 
		       <td class="url"> 10011 </td> 
		       <td class="text"> 无效的请求 </td> 
		      </tr> 
		     </tbody> 
		    </table> 
		   </div> 
                <div class="simpleTable">
                    <p class="linep"> 错误码格式说明（示例：20011）： </p> 
		    <table class="api-table" border="0" cellspacing="0" cellpadding="0"> 
		     <tbody> 
		      <tr> 
		       <th width="20"> &nbsp; </th> 
		       <th width="200"> 2 </th> 
		       <th width="200"> 001 </th> 
		       <th> 1 </th> 
		      </tr> 
		      <tr> 
		       <td> &nbsp; </td> 
		       <td> 服务级错误（1为系统级错误） </td> 
		       <td> 服务模块代码(即数据ID) </td> 
		       <td> 具体错误代码 </td> 
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
header("Content-Type:text/html;charset=UTF-8");
date_default_timezone_set("PRC");
$请求参数名 = "内容";
$result = file_get_contents("API网址".请求参数名);
$arr=json_decode($result,true);
if ($arr['json参数名']==1) {
    echo "返回信息：",$arr['返回信息'];
} else {
    echo $arr['返回信息'];
}
?&gt;</pre>
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
  </footer><a href="#" id="back-to-top"><i class="fa fa-angle-up"></i></a>
    <script src="/i/js/api_jquery.min.js"></script>
    <script src="/i/js/api_bootstrap.min.js"></script>
</body>
</html>