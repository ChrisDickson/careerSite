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
   		   <p> Enter the term to search for below: </p>
    	   <form id="contactName" action="processSearch.php" method="post">
   		       <div><br>
                   	<input name="search" type="text" value="" size="60"/>
				   <br>
				   	<input name="kwSearch" type="submit" value="Search by keyword"/>
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