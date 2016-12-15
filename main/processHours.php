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
		<div class="col col-large">
			<div class="col col-small">
			<form id="contactName" action="processHours.php" method="post">
				<div>
					<br>
					<p>Enter SOC code: </p>
					<input name="search" type="text" value="" size="30"/>
					<input name="kwSearch" type="submit" value="Find vacancies"/>
				</div>
				</form>
			</div>
<?php
				echo "SOC being searched for: ".$search; 
				foreach ($json as $key => $value)
				{
					if (is_array($value))
					{
					foreach ($value as $k => $v)
					{
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