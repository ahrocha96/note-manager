

	 CREATE TABLE `users` (
	`id` bigint(64) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
	`updated_at` timestamp NULL DEFAULT NULL,
	`created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`),
	UNIQUE KEY `email` (`email`)
	) ENGINE=InnoDB DEFAULT CHARSET=utf8;
	
	
	CREATE TABLE `notes` (
	`id` bigint(64) NOT NULL AUTO_INCREMENT,
	`owner_id` bigint(64) NOT NULL,
	`title` varchar(255) NULL DEFAULT NULL,
	`author` varchar(255) NOT NULL,
	`last_edit_at` timestamp NULL DEFAULT NULL,
	`created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`content` varchar(255) NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
	) ENGINE=InnoDB DEFAULT CHARSET=utf8;
	
	INSERT into users (name, email, password, updated_at)
	VALUES ('test', 'test@test.com', '$encrypted', CURRENT_TIMESTAMP);
	
	
	INSERT into users (name, email, password, updated_at)
	VALUES ('admin', 'admin@admin.com', '$encrypted2', CURRENT_TIMESTAMP);
	
	
