<?php
	include 'config/connect.php';
	include 'config/authentication.php';
	$conn = connect();
	$database = "CREATE DATABASE c1";
	if ($conn->query($database) === TRUE)
	{
	}
	else
	{
	}
	closeConnect($conn);
	$conn = connectdb();
	//created users
	//Should now return "Error creating table: table 'users' already exists"
	$usersT = "CREATE TABLE `users` (
	`id` bigint(64) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
	`updated_at` timestamp NULL DEFAULT NULL,
	`created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`),
	UNIQUE KEY `email` (`email`)
	) ENGINE=InnoDB DEFAULT CHARSET=utf8";
	if($conn->query($usersT) === TRUE)
	{
		echo "Table 'users' created successfully<br>";
	}
	else
	{
	}
	//created notes
	//Should now return "Error creating table: table 'notes' already exists"
	$notesT = "CREATE TABLE `notes` (
	`id` bigint(64) NOT NULL AUTO_INCREMENT,
	`owner_id` bigint(64) NOT NULL,
	`title` varchar(255) NULL DEFAULT NULL,
	`author` varchar(255) NOT NULL,
	`last_edit_at` timestamp NULL DEFAULT NULL,
	`created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`content` varchar(255) NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8";
	if($conn->query($notesT) === TRUE)
	{
		echo "Table 'notes' created successfully<br>";
	}
	else
	{
	}
	//Creating the test account
	//In a full application this would be user input
	//Should now return "Duplicate entry 'test@test.com' for key 'email'"
	$testPassword = '$sh4rpspr1nG$';
	$encrypted = encryption($testPassword);
	$testUser = "INSERT into users (name, email, password, updated_at)
	VALUES ('test', 'test@test.com', '$encrypted', CURRENT_TIMESTAMP)";
	if($conn->query($testUser) === TRUE){
		echo "User successfully created!";
	}
	else
	{
    }
	$testPassword2 = 'admin';
	$encrypted2 = encryption($testPassword2);
	$testUser2 = "INSERT into users (name, email, password, updated_at)
	VALUES ('admin', 'admin@admin.com', '$encrypted2', CURRENT_TIMESTAMP)";
	if ($conn->query($testUser2) === TRUE){
		echo "User successfully created!";
	}
	else
	{
	}
	closeConnect($conn);
	header('location:view/login.php');
?>