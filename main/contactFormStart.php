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
					<textarea id="message" name="message" rows="7" cols="80" onkeyup="charCount(this)"></textarea><br>
					<div id='charCount'>
						0/300
					</div>
					<script>
						function charCount(val) 
						{
							var len = val.value.length;
							if (len >= 301) 
							{
								val.value = val.value.substring(0, 300);
							}
							else 
							{
								$('#charCount').text(len+"/300");
							}
						};
					</script>		
					<input type="submit" value="Submit"/>
				</div>
				<script src='../js/jquery-3.1.1.js'>
					$(document).ready(function()
					{
						var maxLen = 300;
						
						$('#message').keypress(function(event)
						{
							var length = $('#message').val().length;
							var amountLeft = maxLen - length;
							$('#text-left').html(amountLeft);
							if(length >= maxLen)
							{
								if(event.which != 300)
								{
									return false;			
								}
							}
						})
					})
				</script>
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