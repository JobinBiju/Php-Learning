<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php

if (3>4) {
    echo "3>4";
} elseif (7<6) {
    echo "7<6";
} else {
    echo "I love PHP\n";
}


for ($i=0; $i<10; $i++) {
    echo($i . "\n");
}

$number = 2;

switch ($number) {
    case 1: echo "You selected 1\n";
            break;
    case 2: echo "You selected 2\n";
            break;

	default: echo "Wrong Choice";
			 break;
}
    
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>