<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */


if( 10 === 10){
	echo "I love programming";
} elseif(9 > 10) {
	echo "I love JavaScript";
} else {
	echo "I love php <3";
}

for($counter = 0; $counter < 10; $counter++) {
	echo $counter;
}

$number = 15;
switch($number) {
	case 15:
	echo "its 15";
	break;
	case 17:
	echo "its 17";
	break;
	case 18:
	echo "its 18";
	break;
}
	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>