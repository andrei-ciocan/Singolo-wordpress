<?php

if(isset($_POST['submit'])){

	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$description=$_POST['description'];

	require_once('../../../wp-config.php');
	global $wpdb;
	$table_name = 'singolo_users';

	$wpdb->insert( 
		$table_name, 
		array( 
			'name' => $name, 
			'email' => $email, 
			'subject' => $subject,
			'description' => $description
			),
		array('%s','%s','%s','%s') 
		);
}


?>