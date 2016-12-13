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
		<p>
			This page allows you to search for job vacancies for a given keyword.
			An important thing to keep in mind when considering a career is the amount of time expected. In some fields, 60 hours a week or more is not uncommon, while in others the limit is much lower. Note - This search requires an SOC code, which can be found by searching for a career on ths search page.
		</p>
		<form id="contactName" action="processHours.php" method="post">
			<div>
				<br>
				<p>Enter SOC code: </p>
				<input name="search" type="text" value="" size="30"/>
				<input name="kwSearch" type="submit" value="Find vacancies"/>
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