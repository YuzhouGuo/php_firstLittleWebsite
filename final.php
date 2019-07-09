<?php

include 'assets/include.php';

if(isset($_SESSION['formPostData']))
{
    $postedData = $_SESSION['formPostData'];
    unset($_SESSION['formPostData']);
}
else
{
    header('Location: index.php');   
}

?>

<!DOCTYPE html>
<html>

    <head>
        <title>PHP_Practise</title>
		<link href="assets/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
		<div id="Header">
			<img src="assets/child_of_light.jpeg" border="0" alt="">
			<h2>
				Become our member!
			</h2>
		</div>        
        <div id="Body">
            <div>
                <label>Your firstName:</label> 
                <span><?=$postedData['firstName']?></span>
            </div>		
            <div>
                <label>Your lastName:</label>
                <span><?=$postedData['lastName']?></span>
            </div>
            <div>
                <label>Your Birthday:</label>
                <span><?=$postedData['Birthday']?></span>
            </div>
            <div>
                <label>E-mail Address:</label>
                <span><?=$postedData['email']?></span>
            </div>
            <div>
                <label>Comments:</label>
                <span><?=$postedData['comments']?></span>
            </div>
        </div>
	</body>

</html>