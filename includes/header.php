<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Career Choices</title>
        <link href="../css/styleSheet.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="../js/jquery-3.1.1.js"></script>
    </head>

    <body>
        <div id="headDiv">
            <header>
                <h1> Career Choices - Doing the research for you</h1>
                <!--<img src="images/banners/banner_black.jpg" width="900" height="126"/> -->
				<div class="hitsDiv">
					<?php
						include('../includes/dbConn.php');

						$stmt = $conn->prepare("SELECT search FROM searches ORDER BY hits DESC LIMIT 5");
						$stmt->execute();

						$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

						echo "<div id='commonSearchDiv'>Common searches:</div>";

						foreach($result as $array)
						{
							foreach($array as $searchTerm)
							{
								echo "<div id='commonSearchDiv' >".$searchTerm."</div>";
							}
						}
					?>
				</div>
            </header>

		</div>
<div class="clearDiv"></div>