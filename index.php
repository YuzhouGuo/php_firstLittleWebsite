<?php

include 'assets/include.php';
require 'assets/dbInfo.php';

 if(count($_POST)> 0)
 {
    if($_POST["email"] != '')
    {
        $_SESSION['formPostData'] = $_POST;
        header('Location: final.php');
    }
    else
    {
        $emailError = 'validation';
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Child of Light Mailing Page</title>
		<link href="assets/format.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
		<div id="Header">
			<img src="assets/ubisoft.png" width= 33% height=80% border="0" alt="">
			<h2>
				Join Our Adventure!
			</h2>
		</div>        
        <div id="Body">
            <form method="post" action="index.php" >
                <div>
                    <label><strong>Favorite platform:</strong></label>
                    <select name="plarform">
                        <?php while($row = $resultObj->fetch_assoc()): ?>
                            <option value="<?=$row['platformName']?>"><?=$row['platformName']?></option>
                        <?php endWhile; ?>
                    </select>
                </div>		
                <div class="multiple">
                    <label><strong>Your Mode is:</strong></label>
                    Single-player <input type="checkbox" name="mode[]" value="Single-player">
                    Multiplayer <input type="checkbox" name="mode[]" value="Multiplayer"> 
                </div>
                <div>
                    <label><strong>Comments:</strong></label>
                    <textarea name="comments"></textarea>
                </div>
                <div>
                    <label><strong>Your name:</strong></label>
                    <input type="text" name="name" />
                </div>
                <div class="<?=$emailError?>">
                    <label><strong>E-mail Address:</strong></label>
                    <input type="text" name="email" />
                </div>
                <div  class="multiple">
                    <label><strong>Receive Updates:</strong></label>
                    Yes <input type="radio" name="update" value="no">
                    No <input type="radio" name="update" value="yes">
                </div>
                <div class="SubmitButton">
                    <label>&nbsp;</label>
                    <input type="submit" name="submit" value="Join Mailing List">
                </div>
            </form>
        </div>
	</body>
</html>

<?php

$resultObj->close();
$connection->close();

// print_r( $_POST );
// echo count($_POST);

?>
