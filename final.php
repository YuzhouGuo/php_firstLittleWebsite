<?php

include 'assets/include.php';

if(isset($_SESSION['formPostData']))
{
    $postedData = $_SESSION['formPostData'];
    //unset($_SESSION['formPostData']);
    session_destroy();
}
else
{
    header('Location: index.php');  
}
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

$postedData = $_SESSION['formPostData'];


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Result Page</title>
		<link href="assets/format.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
		<div id="Header">
			<img src="assets/ubisoft.png" width= 33% height=80% border="0" alt="">
			<h2>
				Mailing List Information
			</h2>
		</div>        
        <div id="Body">
            <div>
                <h3>
				    Thank you so much for your feedback!
			    </h3>
            </div>	
            <div>
                <label><strong>Favorite platform:</strong></label> 
                <span><?=$postedData['plarform']?>&nbsp;</span>
            </div>		
            <div>
                <label><strong>Mode:</strong></label>
                <span><?php foreach ($postedData['mode'] as $mode) {echo $mode."  ";}?>&nbsp;</span>
            </div>
            <div>
                <label><strong>Comments:</strong></label>
                <span><?=$postedData['comments']?>&nbsp;</span>
            </div>
            <div>
                <label><strong>Name:</strong></label>
                <span><?=$postedData['name']?>&nbsp;</span>
            </div>
            <div>
                <label><strong>E-mail Address:</strong></label>
                <span><?=$postedData['email']?>&nbsp;</span>
            </div>
            <div>
                <label><strong>Receive Updates:</strong></label>
                <span><?=$postedData['update']?>&nbsp;</span>
            </div>
        </div>
	</body>
</html>
