<?php 
	include('../includes/header.php');

	$search		= $_POST['search'];
	$url		= 'http://api.lmiforall.org.uk/api/v1/soc/search?q='.$search;

	if(empty($search))
	{
		$isEmpty = TRUE;
	}
	else
	{
		try
		{
			$stmt = $conn->prepare("SELECT * FROM searches WHERE search = ' $search'");
			$stmt->execute();

			$count = $conn->prepare("SELECT count(*) FROM searches WHERE search = '$search'");
			$count->execute();
			$rowNum = $count->fetchColumn();

			if($rowNum > 0)
			{
				$updateStmt = $conn->prepare("UPDATE searches SET hits = hits+1 WHERE search = '$search'");
				$updateStmt->execute();
			}
			else
			{
				$insertStmt = $conn->prepare("INSERT INTO searches VALUES('','$search','1')");
				$insertStmt->execute();
			}
		}
		catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
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
	}
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
				<form id="contactName" action="processSearch.php" method="post">
					<p> Enter the term to search for below: </p>
					<div>
						<br>
						<input name="search" type="text" value="" size="30"/>
						<input type="submit" value="Submit"/>
					</div>
					<br>
					<br>
				</form>
			</div>
		<?php
			if ($isEmpty)
			{
				echo "Please enter a keyword to search for below.";
			}
			else
			{
				foreach ($json as $key => $value)
				{
					foreach ($value as $k => $v)
					{
						echo ucfirst($k.": ");
					echo $v;
						echo "<br>";
					}
					echo "<br><br>";
				}	
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