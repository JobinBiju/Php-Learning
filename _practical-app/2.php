<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		$number1 = 10;
		$number2 = 20;

		echo $number1 + $number2 . "<br>";

		$list = array(34, 45, 56);
		$list_ass = array("PHP" => 70);
		
		echo $list[2] . "<br>";
		echo $list_ass['PHP'];

		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>