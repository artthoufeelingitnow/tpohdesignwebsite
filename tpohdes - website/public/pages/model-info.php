<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>tp design open house models</title>
<link href="../css/main-style.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
	
<link rel="icon" href="../images/model1.png">
	 
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>

</head>

<body class="body-bg">
<div id="mainwrapper">
  <header> 
    <!--**************************************************************************
    Header starts here. It contains Logo and 3 navigation links. 
    ****************************************************************************-->
    <div id="logo" onClick="goHome()"><img src="../images/tp.png" alt="sample logo" width="100"><!-- Company Logo text --></div>
    <nav> <a href="#" title="Link" onClick="goAllModels()">All models</a> <a href="#" title="Link" onClick="goQRScanner()">QR Scanner</a><a href="#" title="Link" onClick="goARScanner()">AR Scanner</a> </nav>
  </header>
	
 
	
<div id="content">

<?php

require ('phpconnect.php');

$sql="SELECT * FROM models WHERE _id=".$_GET['id']." ";


$result = $conn->query($sql);

$row = $result->fetch_assoc();

echo "<div class='sketchfab-embed-wrapper' style='justify-content: center; display: flex; margin-top: 7%'><iframe width='240' height='240' src=". $row["model_url"] ." frameborder='0' allow='autoplay; fullscreen; vr' mozallowfullscreen='true' webkitallowfullscreen='true'>
</iframe>";
echo "</div>";

echo "<table class='table-responsive' style='margin-top: 7%; margin-bottom: 7%;'>";
echo "<tr ><td><b>model title:</b></td><td>". $row["model_title"] ."</td></tr>
<tr><td><b>description:</b></td><td>". $row["description"] ."</td></tr>
<tr ><td><b>done by:</b></td><td>". $row["student_name"] ."</td></tr>
<tr><td><b>student's school:</b></td><td>". $row["student_school"] ."</td></tr>
<tr ><td><b>student's course:</b></td><td>". $row["student_course"] ."</td></tr>
";
echo "</table>";

      

$conn->close();

?> 
	  
	
      
	
<div class="copyright" id="footerbar">&copy;2019 - <strong>GROUP 14</strong></div>
	
</div>

<script type="text/javascript" src="../js/app2.js"></script>

</body>
</html>