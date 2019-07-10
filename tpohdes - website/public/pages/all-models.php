<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>tp design open house models</title>
<link href="../css/main-style.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
	
<link rel="icon" href="../images/model.png">
	
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
	  
	  
<main id="displayModels">THIS IS WHERE WE SHOW ALL THE MODELS
	
	<div class="container">

      <?php

        require ('phpconnect.php');

        $sql = "SELECT * FROM models";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            echo "<table><tr><th>id</th><th>title</th><th>picture</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["_id"]. "</td><td>" . $row["model_title"]. "</td><td><a href='model-info.php?id=".$row['_id']."'><img class='img-fluid img-thumbnail' src='images/" .$row["model_pic"]. "'></a></td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close();

      ?> 
		
    </div>

	  
</main>
	
</div>
	
<div class="copyright" id="footerbar">&copy;2019 - <strong>GROUP 14</strong></div>
	
</div>

<script type="text/javascript" src="../js/app2.js"></script>

</body>
</html>
