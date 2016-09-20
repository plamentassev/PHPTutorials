<?php 
	#variable
	$heading = 'Hello world';
	
	#array
	$fruits = array('Apple','Orange','Grapes');
	
	#associated array
	$fruit = array('fruit1' => 'Apple', 'fruit2' =>'Orange', 'fruit3' =>'Grapes');
	
	#loops
	$users = array('First Name' => 'Brad', 'Last Name' =>'Tassev', 'Email' =>'plamentassev@gmail.com');
	
	//$user = array('Brad', 'Tassev', 'plamentassev@gmail.com');
	//loop over none associated array
	
	/*foreach($fruits as $fruit){
		echo $fruit.'<br>';
	}
	*/
	
	/*
	<?php foreach($fruits as $fruit) : ?>
	<li><?php echo $fruit; ?><li>
	<?php endforeach; ?>
	*/
	
	/*
	<ul>
	<?php foreach($users as $key => $value) : ?>
		<li><?php echo $key; ?> : <?php echo $value; ?></li>
	<?php endforeach; ?>
	</ul>
	*/
	
	#if statement
	/*
	$x = 1;
	if($x ==1 ){
		echo 'yes';
	} else {
		echo 'no';
	}
	*/
	
	#function
	function sayIt($words){
		echo $words;
	}
	
	sayIt('Hello world');
	
?>
<h1><?php echo $heading; ?></h1>

