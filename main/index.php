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
            <h2>About the Site</h2>
            <br>
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet porttitor felis. Sed fringilla elit ut luctus ultricies. Phasellus bibendum sem eu fringilla commodo. Pellentesque rhoncus pharetra finibus. Phasellus sollicitudin eros libero, at varius neque dignissim a. Curabitur auctor luctus enim vel porta. Proin convallis lectus quis leo eleifend, id auctor nunc varius. Curabitur massa leo, blandit non velit id, accumsan malesuada diam. Praesent molestie vehicula nulla, non ultrices turpis porttitor vel. Nunc imperdiet dapibus elit, ut dignissim sem ultrices at. Sed semper turpis at lacus condimentum, nec hendrerit est vehicula. Donec commodo turpis eu dolor suscipit ornare. Pellentesque et justo ut dui mattis eleifend sed a mi.</p>
			<br>
			<p>Donec malesuada blandit lectus, et efficitur diam. Aliquam pharetra, purus ac placerat consectetur, dui urna finibus erat, vehicula tempus dolor lacus nec felis. Pellentesque ac urna sed leo porta scelerisque sit amet ut ex. Curabitur volutpat nisi augue, a interdum ipsum tempus vitae. Nunc efficitur, est fringilla condimentum facilisis, ante odio dictum nisi, mattis tristique nulla quam nec leo. Pellentesque risus felis, mattis sed dui eu, molestie sollicitudin lectus. Etiam gravida, nulla ut efficitur faucibus, tellus massa mattis nulla, eu tincidunt eros sem eget nibh. Maecenas at aliquam mi, non finibus arcu. </p>
            </br>
            </br>
            <h2>One more thing</h2>
            <p>Donec malesuada blandit lectus, et efficitur diam. Aliquam pharetra, purus ac placerat consectetur, dui urna finibus erat, vehicula tempus dolor lacus nec felis. Pellentesque ac urna sed leo porta scelerisque sit amet ut ex.</p>
			<br><br>
            <h2>Important Information</h2>
            <p>Pellentesque risus felis, mattis sed dui eu, molestie sollicitudin lectus. Etiam gravida, nulla ut efficitur faucibus, tellus massa mattis nulla, eu tincidunt eros sem eget nibh. Maecenas at aliquam mi, non finibus arcu.</p>
            </div>
        <div class="col col-2">
			<p>Click to see more info!</p>
			<div class="accordian">
				<h3>Lorem</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet porttitor felis. Sed fringilla elit ut luctus ultricies. Phasellus bibendum sem eu fringilla commodo. Pellentesque rhoncus pharetra finibus.
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet porttitor felis. Sed fringilla elit ut luctus ultricies. Phasellus bibendum sem eu fringilla commodo. Pellentesque rhoncus pharetra finibus.</p>
				<h3>Ipsum</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet porttitor felis. Sed fringilla elit ut luctus ultricies. Phasellus bibendum sem eu fringilla commodo. Pellentesque rhoncus pharetra finibus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet porttitor felis. Sed fringilla elit ut luctus ultricies. Phasellus bibendum sem eu fringilla commodo. Pellentesque rhoncus pharetra finibus.</p>
				<h3>Doler</h3>
				<p>Pellentesque ac urna sed leo porta scelerisque sit amet ut ex. Curabitur volutpat nisi augue, a interdum ipsum tempus vitae. Nunc efficitur, est fringilla condimentum facilisis, ante odio dictum nisi, mattis tristique nulla quam nec leo.Pellentesque ac urna sed leo porta scelerisque sit amet ut ex. Curabitur volutpat nisi augue, a interdum ipsum tempus vitae. Nunc efficitur, est fringilla condimentum facilisis, ante odio dictum nisi, mattis tristique nulla quam nec leo.</p>
				<h3>Sit Amet</h3>
				<p>Etiam gravida, nulla ut efficitur faucibus, tellus massa mattis nulla, eu tincidunt eros sem eget nibh. Maecenas at aliquam mi, non finibus arcu.Pellentesque ac urna sed leo porta scelerisque sit amet ut ex. Curabitur volutpat nisi augue, a interdum ipsum tempus vitae. Nunc efficitur, est fringilla condimentum facilisis, ante odio dictum nisi, mattis tristique nulla quam nec leo. Pellentesque ac urna sed leo porta scelerisque sit amet ut ex. Curabitur volutpat nisi augue, a interdum ipsum tempus vitae. Nunc efficitur, est fringilla condimentum facilisis, ante odio dictum nisi, mattis tristique nulla quam nec leo.</p>
			</div>
			<script >
				$(document).ready(function(){
								  
					$(".accordian h3:first").addClass("active");
					$(".accordian p:not(:first)").hide();
				
					$(".accordian h3").click(function(){
						$(this).next("p").slideToggle("slow").siblings("p:visible").slideUp("slow");
						$(this).toggleClass("active");
						$(this).siblings("h3").removeClass("active");
					});
				});
			</script>
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