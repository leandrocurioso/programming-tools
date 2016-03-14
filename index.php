<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tools! - Tools for helping programmers and not programmers!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<meta name="description" content="Tools for helping programmers and not programmers!">
	<meta name="keywords" content="md5,sha1,base64 encode, base64 decode, xtea encode,xtea decode, string length,substring,replace a string, strip html tags, reverse a string">
	
	<meta name='robots'content='index,follow'>
	<meta name='googlebot' content='index,follow'>
	<meta name='Slurp' content='index,follow'>
	<meta name='msnbot' content='index,follow'>
	<meta name='author' content='Leandro Curioso'> 

	<meta property="og:title" content="Tools! - Tools for helping programmers and not programmers!">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://tools.leandrocurioso.com">
	<meta property="og:image" content="http://tools.leandrocurioso.com/img/tools200x200.jpg">
	<meta property="og:site_name" content="Tools! - Tools for helping programmers and not programmers!">
	<meta property="fb:admins" content="leandrocurioso">
	<meta property="og:description" content="Tools for helping programmers and not programmers!">
	
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/vnd.microsoft.icon">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/sweet-alert.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/tools.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>
	
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="site-wrapper">
		
        <div class="site-wrapper-inner">

            <div class="cover-container">

                <div class="masthead clearfix">
                    <div class="inner">
                        <a href="index.php" title="Tools!"><h2 class="masthead-brand">Tools!</h2></a>
                        <ul class="nav masthead-nav">

                            <!--<li>
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="string-beautify" data-toggle="dropdown">
                                        String Beautifier
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="string-beautify">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#html">HTML</a>
                                        </li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#javascript">Javascript</a>
                                        </li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#json">JSON</a>
                                        </li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#xml">XML</a>
                                        </li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#css">CSS</a>
                                        </li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#explode">Explode a string</a>
                                        </li>
										<li role="presentation" class="divider"></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#minify">Minify a string</a>
										</li>
									</ul>
                                </div>
                            </li>-->

                            <li>
								<div class="dropdown">
									<button class="btn btn-success dropdown-toggle" type="button" id="string-cryptography" data-toggle="dropdown">
										String Cryptography
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" role="menu" aria-labelledby="string-cryptography">
										<li role="presentation"><a role="menuitem" data-frame="md5-frame" tabindex="-1" href="#md5">MD5</a>
										</li>
										<li role="presentation"><a role="menuitem" data-frame="sha1-frame" tabindex="-1" href="#sha1">SHA1</a>
										</li>
										<li role="presentation"><a role="menuitem" tabindex="-1" data-frame="base64Encode-frame" href="#base64Encode">Base64 Encode</a>
										</li>
										<li role="presentation"><a role="menuitem" tabindex="-1" data-frame="base64Decode-frame" href="#base64Decode">Base64 Decode</a>
										</li>
										<li role="presentation"><a role="menuitem" data-frame="xteaEncode-frame" tabindex="-1" href="#xteaEncode">Xtea Encode</a>
										</li>
										<li role="presentation"><a role="menuitem" data-frame="xteaDecode-frame" tabindex="-1" href="#xteaDecode">Xtea Decode</a>
										</li>
									</ul>
								</div>
							</li>
							
							<li>
								<div class="dropdown">
									<button class="btn btn-primary dropdown-toggle" type="button" id="string-operations" data-toggle="dropdown">
										String Operations
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" role="menu" aria-labelledby="string-operations">
										<li role="presentation"><a role="menuitem" tabindex="-1" data-frame="reverseString-frame" href="#reverseString">Reverse a string</a>
										</li>
										<li role="presentation"><a role="menuitem" tabindex="-1" data-frame="replaceString-frame" href="#replaceStirng">Replace a string</a>
										</li>
										<li role="presentation"><a role="menuitem" tabindex="-1"  data-frame="stringLength-frame" href="#stringLength">String Length</a>
										</li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#stripHTMLtags" data-frame="stripHTMLTags-frame">Strip HTML tags</a>
										</li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#substring" data-frame="substring-frame">Substring</a>
										</li>
									</ul>
								</div>
							</li>
                        </ul>
                        </div>
                    </div>
					
                    <div class="inner cover box-frame" id="first-frame">
					<img src="img/tools.png" width='250' height='250'/>
                        <h1 class="cover-heading">A nice web toolkit for helping!</h1>
                        <p class="lead">We have a lot of nice tools that helps you handle string without the need of programming knowledge!</p>
                        <p>It's 100% free and will always be! Have a nice coding!</p>
						<p class="lead">
                            <a href="mailto:mail@leandrocurioso.com" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-envelope"></span> Contact the developer!</a>
                        </p>
                    </div>
					
					
					<div style="display:none;" class="inner cover box-frame" id="md5-frame">
                      <h1>MD5 Cryptography</h1>
					  
					  <p class="lead">Put the string to encrypt</p>
					  <textarea class="form-control" id="md5-ta-01" rows="6" placeholder="Type the string to encrypt"></textarea>
                      <br/>
					  <button type="button" id="md5-btn-submit" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-wrench"></span> Tool it!</button>
					  <br/> <br/>
					  <textarea readonly="readonly" id="md5-ta-02" class="form-control" rows="6">The result string will be placed here...</textarea>
					  <br/>
                    </div>
					
					<div style="display:none;" class="inner cover box-frame" id="sha1-frame">
                      <h1>SHA1 Cryptography</h1>
					  
					  <p class="lead">Put the string to encrypt</p>
					  <textarea class="form-control" id="sha1-ta-01" rows="6" placeholder="Type the string to encrypt"></textarea>
                      <br/>
					  <button type="button" id="sha1-btn-submit" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-wrench"></span> Tool it!</button>
					  <br/> <br/>
					  <textarea readonly="readonly" id="sha1-ta-02" class="form-control" rows="6">The result string will be placed here...</textarea>
					  <br/>
                    </div>
					
					<div style="display:none;" class="inner cover box-frame" id="base64Encode-frame">
                      <h1>Base64 Encode Cryptography</h1>
					  
					  <p class="lead">Put the string to encrypt</p>
					  <textarea class="form-control" id="base64Encode-ta-01" rows="6" placeholder="Type the string to encrypt"></textarea>
                      <br/>
					  <button type="button" id="base64Encode-btn-submit" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-wrench"></span> Tool it!</button>
					  <br/> <br/>
					  <textarea readonly="readonly" id="base64Encode-ta-02" class="form-control" rows="6">The result string will be placed here...</textarea>
					  <br/>
                    </div>
					
					<div style="display:none;" class="inner cover box-frame" id="base64Decode-frame">
                      <h1>Base64 Decode Cryptography</h1>
					  
					  <p class="lead">Put the string to encrypt</p>
					  <textarea class="form-control" id="base64Decode-ta-01" rows="6" placeholder="Type the string to encrypt"></textarea>
                      <br/>
					  <button type="button" id="base64Decode-btn-submit" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-wrench"></span> Tool it!</button>
					  <br/> <br/>
					  <textarea readonly="readonly" id="base64Decode-ta-02" class="form-control" rows="6">The result string will be placed here...</textarea>
					  <br/>
                    </div>
					
					<div style="display:none;" class="inner cover box-frame" id="xteaEncode-frame">
                      <h1>Xtea Encode Cryptography</h1>
					  
					  <p class="lead">Put the string to encrypt</p>
					  <textarea class="form-control" id="xteaEncode-ta-01" rows="6" placeholder="Type the string to encrypt"></textarea>
                      <br/>
					  <button type="button" id="xteaEncode-btn-submit" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-wrench"></span> Tool it!</button>
					  <br/> <br/>
					  <textarea readonly="readonly" id="xteaEncode-ta-02" class="form-control" rows="6">The result string will be placed here...</textarea>
					  <br/>
                    </div>
					
					<div style="display:none;" class="inner cover box-frame" id="xteaDecode-frame">
                      <h1>Xtea Decode Cryptography</h1>
					  
					  <p class="lead">Put the string to encrypt</p>
					  <textarea class="form-control" id="xteaDecode-ta-01" rows="6" placeholder="Type the string to encrypt"></textarea>
                      <br/>
					  <button type="button" id="xteaDecode-btn-submit" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-wrench"></span> Tool it!</button>
					  <br/> <br/>
					  <textarea readonly="readonly" id="xteaDecode-ta-02" class="form-control" rows="6">The result string will be placed here...</textarea>
					  <br/>
                    </div>
					
					<div style="display:none;" class="inner cover box-frame" id="reverseString-frame">
                      <h1>Reverse a String</h1>
					  
					  <p class="lead">Put the string to reverse it</p>
					  <textarea class="form-control" id="reverseString-ta-01" rows="6" placeholder="Type the string to reverse it"></textarea>
                      <br/>
					  <button type="button" id="reverseString-btn-submit" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-wrench"></span> Tool it!</button>
					  <br/> <br/>
					  <textarea readonly="readonly" id="reverseString-ta-02" class="form-control" rows="6">The result string will be placed here...</textarea>
					  <br/>
                    </div>
					
					<div style="display:none;" class="inner cover box-frame" id="replaceString-frame">
                      <h1>Replace a String</h1>
					  
					  <p class="lead">Put the strings for replacing</p>
					  <textarea style="margin-bottom:4px;" class="form-control" id="replaceString-ta-01" rows="6" placeholder="Type the full string"></textarea>
					  <input style="margin-bottom:4px;" id="replaceString-it-01" type="text" placeholder="Type the string you want to replace" class="form-control"/>
					  <input style="margin-bottom:4px;" id="replaceString-it-02" type="text" placeholder="Type the replace string" class="form-control"/>
                      <br/>
					  <button type="button" id="replaceString-btn-submit" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-wrench"></span> Tool it!</button>
					  <br/> <br/>
					  <textarea readonly="readonly" id="replaceString-ta-02" class="form-control" rows="6">The result string will be placed here...</textarea>
					  <br/>
                    </div>
					
					<div style="display:none;" class="inner cover box-frame" id="stringLength-frame">
                      <h1>String Length</h1>
					  
					  <p class="lead">Put the string to count the amount of chars</p>
					  <textarea class="form-control" id="stringLength-ta-01" rows="6" placeholder="Type the string"></textarea>
                      <br/>
					  <button type="button" id="stringLength-btn-submit" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-wrench"></span> Tool it!</button>
					  <br/> <br/>
					  <textarea readonly="readonly" id="stringLength-ta-02" class="form-control" rows="6">The result string will be placed here...</textarea>
					  <br/>
                    </div>
					
					<div style="display:none;" class="inner cover box-frame" id="stripHTMLTags-frame">
                      <h1>Strip HTML tags</h1>
					  
					  <p class="lead">Put the string to strip the HTML tags from it</p>
					  <textarea class="form-control" id="stripHTMLTags-ta-01" rows="6" placeholder="Type the string for HTML tag striping..."></textarea>
                      <br/>
					  <button type="button" id="stripHTMLTags-btn-submit" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-wrench"></span> Tool it!</button>
					  <br/> <br/>
					  <textarea readonly="readonly" id="stripHTMLTags-ta-02" class="form-control" rows="6">The result string will be placed here...</textarea>
					  <br/>
                    </div>
					
					
					<div style="display:none;" class="inner cover box-frame" id="substring-frame">
                      <h1>Substring</h1>
					  
					  <p class="lead">Put the string for substring</p>
					  <textarea style="margin-bottom:4px;" class="form-control" id="substring-ta-01" rows="6" placeholder="Type the full string"></textarea>
					  <input style="margin-bottom:4px;" id="substring-it-01" type="text" placeholder="Type the first pointer" class="form-control"/>
					  <input style="margin-bottom:4px;" id="substring-it-02" type="text" placeholder="Type the second pointer" class="form-control"/>
                      <br/>
					  <button type="button" id="substring-btn-submit" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-wrench"></span> Tool it!</button>
					  <br/> <br/>
					  <textarea readonly="readonly" id="substring-ta-02" class="form-control" rows="6">The result string will be placed here...</textarea>
					  <br/>
                    </div>
									
                    <div class="mastfoot">
						<a id="iframe-publicity-container"></a>
                        <div class="inner">
                            <p>© <?php echo date("Y"); ?> | Tools for helping programmers and not programmers! Developed by <a target="_blank" title="Leandro Curioso" href="http://leandrocurioso.com">Leandro Curioso</a></p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	<script src="js/sweet-alert.min.js"></script>
	<script src="js/jquery.crypt.js"></script>
	<script src="js/tools.js"></script>
	
</body>

</html>