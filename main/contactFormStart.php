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
 <p> Enter your name and contact details and we'll get in touch with you     as soon as possible. </p>
    	   <form id="contactName" action="processData.php" method="post">
   		       <div>
                   Your first name:<br>
                    <input name="first" type="text" value="" size="30"/><br>
                    Your surname:<br>
                   <input name="last" type="text" value="" size="30"/><br>
                    Your email:<br>
                    <input name="email" type="text" value="" size="30"/><br>
                    Your message:<br>
                    <textarea name="message" rows="7" cols="80"></textarea><br>
                <input type="submit" value="Submit"/>
                </div>
            </form>
	</div>
	<div class="col col-2">
		<h2>About the search feature</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet porttitor felis. Sed fringilla elit ut luctus ultricies. Phasellus bibendum sem eu fringilla commodo. Pellentesque rhoncus pharetra finibus. Phasellus sollicitudin eros libero, at varius neque dignissim a.</p>
		</br>
		</br>
		<h2>Lorem Ipsum</h2>
		<p>Pellentesque risus felis, mattis sed dui eu, molestie sollicitudin lectus. Etiam gravida, nulla ut efficitur faucibus, tellus massa mattis nulla, eu tincidunt eros sem eget nibh. Maecenas at aliquam mi, non finibus arcu.</p>
	</div>
</main>
</div>   
</body>
<?php 
	include('../includes/footer.php')
?>	
</html>   