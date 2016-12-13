<?php

	include('../includes/header.php');
	include('../includes/navBar.php');
	include('../includes/dbConn.php');	

	$search		= $_POST['search'];
	$postCode	= $_POST['postcode'];

	if(!isset($postCode) || trim($postCode) == '')
	{
		$url	= 'http://api.lmiforall.org.uk/api/v1/vacancies/search?keywords='.$search;	
	}
	else
	{
		$postCode=preg_replace('/\s+/', '', $postCode);

		$url	= 'http://api.lmiforall.org.uk/api/v1/vacancies/search?postcode='.$postCode.'&keywords='.$search;
	}

	function curlGetContents($url)
	{
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}

	$json 	= json_decode(curlGetcontents($url),true);

?>

<section class="contentArea">
	<form id="contactName" action="processSearch.php" method="post">
		<p> Enter the term to search for below: </p>
		<div>
			<br>
			<p>Job field to search for:</p>
			<input name="search" type="text" value="" size="30"/>
			<br>
		</div>
		<div>
			<br>
			<p>Post-Code to search for (optional):</p>
			<input name="postcode" type="text" value="" size="30"/>
			<br>
		</div>

		<input name="kwSearch" type="submit" value="Find vacancies"/>
		<br><br>
		<div class="phpDiv">
			<?php
				foreach ($json as $key => $value)
				{
					foreach ($value as $k => $v)
					{
						echo ucfirst($k.": ");
						if (is_array($v))
						{
							foreach ($v as $vKey => $vValue)
							{
								echo ucfirst($vKey.': ');
								echo $vValue;
								echo '<br>';
							}
						}
						else
						{
							echo $v;	
						}
					echo "<br>";
					}
				echo "<br>";
				}
			?>
		</div>
	</form>
</section>

<?php 
	include('../includes/footer.php')
?>	

</div>
</body>
</html>