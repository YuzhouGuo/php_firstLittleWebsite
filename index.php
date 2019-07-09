<?php

include 'assets/include.php';
include 'assets/dbInfo.php';   // we include the dbInfo file here

if(count($_POST)> 0)
{
    if($_POST['email'] != '')
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
            <form method="post" action="final.php" >
                <div>
                    <label>Favorite Character:</label>
                    <select name="Character">
                        <?php while($row = $resultObj->fetch_assoc()): ?>
                            <option value="<?=$row['id']?>"><?=$row['name']?></option>
                        <?php endWhile; ?>
                    </select>
                </div>		
                <!-- <div class="Character">
                    <label>Favorite Character:</label>
                    Aurora <input type="checkbox" name="characters[]" value="aurora">
                    Rubella <input type="checkbox" name="characters[]" value="rubella"> 
                    Finn <input type="checkbox" name="characters[]" value="Finn"> 
                </div> -->
                <div>
                    <label>Comments:</label>
                    <textarea name="comments"></textarea>
                </div>
                <div>
                    <label>Name:</label>
                    <input type="text" name="name" />
                </div>
                <div class="<?=$emailError?>">
                    <label>E-mail Address:</label>
                    <input type="text" name="email" />
                </div>
                <div  class="notification">
                    <label>Receive Notification:</label>
                    Yes <input type="noti" name="notification" value="no">
                    No <input type="noti" name="notification" value="yes">
                </div>
                <div class="multiple">
                    <label>&nbsp;</label>
                    <input type="submit" name="submit" value="Join The Adventure!">
                </div>
            </form>
        </div>
	</body>
</html>

<?php

$resultObj->close();
$connection->close();
//Remember to close the server connection

?>
