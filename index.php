<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Coming Soon</title>
<link href="tools/style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="tools/font-awesome/css/font-awesome.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="tools/jquery.min.js"></script> 
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">


</head>
<body>

<div class="header">
	<h1 id="logo">DESTRUA.ME<span>#DestruaMe</span></h1>
</div>

<div class="content">
	<p id="large-text">Reconstrua seus conceitos.</p>
	<p id="small-text">Lançamento em Maio. Inscreve-se para notícias.</p>
</div>


<div class="form">
	<div class="field"><input type="text" class="field" id="test" value="email"/></div>
	<div class="submit"><input class="submit" type="button" value="Inscreve-se" /></div>		
</div>		




<div class="social">
	<ul>
		<li><a href="#"><span class="socicon">a</span></a></li>
		<li><a href="#"><span class="socicon">b</span></a></li>
		<li><a href="#"><span class="socicon">x</span></a></li>		
		<li><a href="#"><span class="socicon">r</span></a></li>
	</ul>
</div>

<script type="text/javascript">
var placeholder = $("#test").val();

$("#test").keydown(function() {
    if (this.value == placeholder) {
        this.value = '';
    }
}).blur(function() {
    if (this.value == '') {
        this.value = placeholder;
    }
});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76737145-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
