<?php 
	include('../includes/header.php');
?>
<div class="wrapper">
	<aside>
		<?php
			include('../includes/navBar.php');
		?>
	</aside>
<main>
	<div class="col col-1">
     <p>You can find us here!</p>
    <iframe id="location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2159.36671383329!2d-4.413882683734437!3d57.233318884303294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTfCsDEzJzU5LjkiTiA0wrAyNCc0Mi4xIlc!5e0!3m2!1sen!2suk!4v1474305710244" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="col col-2">
      <form id="contactName" action="processSurvey.php" method="post">
            <p>If you have the time, please also complete our short survey.<br>
                Please select your primary mode of transport:
                <select name="select">
                    <option value="car">Car</option>
                    <option value="bus">Bus</option>
                    <option value="train">Train</option>
                    <option value="bike">Bike</option>
                    <option value="walk">Walking</option>
                </select>
            </p>
            <p>Which forms of transport do you use? 
                Car <input type="checkbox" name="car" value="yes">
                Bus <input type="checkbox" name="bus" value="yes">
                Train <input type="checkbox" name="train" value="yes">
                Bicycle <input type="checkbox" name="bike" value="yes">
                Walking <input type="checkbox" name="walk" value="yes">
            </p>
            <p>
                Do you mind if we include these in our published results?
                Yes <input type="radio" name="survey" value="yes">
                No <input type="radio" name="survey" value="no">
            </p>
            <input type="submit" value="Submit"/>
        </form>
	</div>
</main>
</div>   
</body>
<?php 
	include('../includes/footer.php')
?>	
</html>   