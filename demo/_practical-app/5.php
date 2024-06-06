<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

 echo rand(1, 3000);
 echo strtoupper('hello world');
 $array = [345,456,123,7,8,9,1,3,2];
 echo sort($array);
 print_r($array);
	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>