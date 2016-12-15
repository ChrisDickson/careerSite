<?php

	include('../includes/header.php');

    $first      = $_POST['first'];
    $last       = $_POST['last'];
    $email      = $_POST['email'];
    $message    = $_POST['message'];

    $query=$conn->prepare("INSERT INTO contacts VALUES ('','$first','$last','$email', '$message')");
    $query->execute();

    $conn=null;
?>
<div class="wrapper">
    <aside>
        <?php
            include('../includes/navBar.php');
        ?>
    </aside>
    <main>
        <div class="col col-1">
            <div class="phpDiv">
                <?php
                echo '</br>Hello '.$_POST['first'].' '.$_POST['last'].'.    Thanks for the interest.</br>';

                echo 'We will contact you at '.$_POST['email'].' soon</br></br>';
                ?>
            </div>
        </div>
        <div class="col col-2">
        </div>
    </main>
</div>   
</body>
<?php 
	include('../includes/footer.php')
?>	
</html>