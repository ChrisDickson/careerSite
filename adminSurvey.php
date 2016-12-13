<?php 
include('../includes/header.php');
include('../includes/dbConn.php');
?>
<div class="wrapper">
    <aside>
        <?php
            include('../includes/navBarAdmin.php');
        ?>
    </aside>
    <main>
        <div class="col col-1">
            <h2>Survey Results</h2>
            <?php
				echo "<table style='border: solid 1px black;'>";
				echo "<tr><th>Main mode of ransport</th><th>Car</th><th>Bus</th><th>Train</th><th>Bike</th><th>Walk</th></tr>";
		
				class TableRows extends RecursiveIteratorIterator { 
					function __construct($it) { 
						parent::__construct($it, self::LEAVES_ONLY); 
					}
		
					function current() {
						return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
					}
		
					function beginChildren() { 
						echo "<tr>"; 
					} 
				
					function endChildren() { 
						echo "</tr>" . "\n";
					} 
				} 
	
				$stmt 	= $conn->prepare("SELECT transport,car,bus,train,bike,walk FROM survey WHERE survey='yes'");
				$stmt->execute();
				
				$result	= $stmt->setFetchMode(PDO::FETCH_ASSOC);
				foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
				
					echo $v;
				}
				
				echo "</table>";
	
			?>    
        </div>
        <div class="col col-2">
            <table id="chart">
            </table>
<?php 

/*
$stmt 	= $conn->prepare("SELECT SUM(car),SUM(bus),SUM(train),SUM(bike),SUM(walk) FROM survey WHERE survey='yes'");
$stmt->execute();

$result		= $stmt->fetchAll(PDO::FETCH_ASSOC);
$jsonStr	= json_encode($result);

$conn = null;
*/

$stmt = $conn->prepare('SELECT car,bus,train,bike,walk FROM survey');
$stmt->execute();

$colData = array(0,0,0,0,0);

while ($result=$stmt->fetchAll()){
	for ($i=0; $i<5; $i++){
		for ($j=0; $j<count($result); $j++){
			$colData[$i] = $colData[$i] + $result[$j][$i];
		}
	}
}

$newData = array(
	'car'=>$colData[0],
	'bus'=>$colData[1],
	'train'=>$colData[2],
	'bike'=>$colData[3],
	'walk'=>$colData[4]
);

function array_to_chart_json($info){
	$data = array();
	foreach ($info as $key=>$value) {
		$data[] = array (
			'name'=>$key,
			'hits'=>$value
		);
	}
	return json_encode($data, JSON_NUMERIC_CHECK);
};

$json = array_to_chart_json($newData);
$conn = null;
?>
			<script type="text/javascript">
				
				var data = {"summary": <?php echo $json; ?>};
			  //var data = '{"summary": [{"name":"car","hits":0},{"name":"bus","hits":1},{"name":"train","hits":2},{"name":"bike","hits":0},{"name":"walk","hits":1}]}';			
				var element;
				
				var names = new Array('car','bus','train','bike','walk');
				var values = new Array(0,0,0,0,0);
				
				for (var i = 0; i < data.summary.length; i++) {
					values[i] = values[i] + parseInt(data.summary[i].hits);
				}
				
			/*for (var q=0;q<5;q++){
					document.writeln(values[q]);
				}*/
				
				for (var i=0;i<5;i++){
					var node = document.createElement("tr");
					
					var subnode1 = document.createElement("td");
					var textnode1 = document.createTextNode(names[i]);
					
					subnode1.appendChild(textnode1);
					
					var subnode2 = document.createElement("td");
					var subsubnode = document.createElement("canvas");

					subnode2.appendChild(subsubnode);

					var att = document.createAttribute("id");
					att.value = i;
					subsubnode.setAttributeNode(att);

					var att3 = document.createAttribute("height");
					att3.value = "25";
					subsubnode.setAttributeNode(att3);

					node.appendChild(subnode1);
					node.appendChild(subnode2);
					document.getElementById("chart").appendChild(node);

					var c = document.getElementById(i);
					var bar = c.getContext("2d");
					
					var length = values[i];
					if (values[i] > 0) 
					{
						if (length > 100) 
						{
							length = 100;
						}
						
						bar.fillStyle = "#64B058";//"blue";
						bar.rect(1, 1, 10 * length, 20);
						bar.fill();
						bar.stroke();
					}
				}
			</script>
        </div>
    </main>
</div>   
</body>
<?php 
	include('../includes/footer.php')
?>	
</html>