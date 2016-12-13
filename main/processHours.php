<?php 
	include('../includes/header.php');

	$search		= $_POST['search'];
	
	$url	= 'http://api.lmiforall.org.uk/api/v1/ashe/estimatePay?soc='.$search;	
	
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
<div class="wrapper">
	<aside>
		<?php
			include('../includes/navBar.php');
		?>
	</aside>
<main>
	<div class="col col-1">
	<form id="contactName" action="processHours.php" method="post">
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
	</div>
	<div class="col col-2">
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
</main>
</div>   
</body>
<?php 
	include('../includes/footer.php')
?>	
</html>