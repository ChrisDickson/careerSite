<?php

	include('../includes/header.php');
	include('../includes/navBar.php');
    include('../includes/dbConn.php');

    $transport  = $_POST['select'];
    $survey     = $_POST['survey'];
    if (isset($_POST['car']))
        $car = $_POST['car'];
    else 
        $car = "no";
        
    if (isset($_POST['bus']))
        $bus = $_POST['bus'];
    else 
        $bus = "no";
        
    if (isset($_POST['train']))
        $train = $_POST['train'];
    else 
        $train = "no";
        
    if (isset($_POST['bike']))
        $bike = $_POST['bike'];
    else 
        $bike = "no";
        
    if (isset($_POST['walk']))
        $walk = $_POST['walk'];
    else 
        $walk = "no";


    $query=$conn->prepare("INSERT INTO survey VALUES ('','$survey','$transport','$car','$bus','$train','$bike','$walk')");
    $query->execute();

    $conn=null;
?>

<section class="contentArea">
<div class="phpDiv">
<?php
    echo '<br>Thanks for filling out our survey!<br>';
	if($_POST['survey']=='yes')
        echo 'Thanks for letting us use your survey results!</br>';
?>
</div>
</section>

<?php 
	include('../includes/footer.php')
?>	

</div>
</body>
</html>