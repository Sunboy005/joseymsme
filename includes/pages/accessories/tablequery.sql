
CREATE TABLE IF NOT EXISTS `industry` (
    `industry_id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(225) NOT NULL,
    `description` VARCHAR(225) NOT NULL,
    PRIMARY KEY (`industry_id`)
)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `category` (
    `category_id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(225) NOT NULL,
    `description` VARCHAR(225) NOT NULL,
    PRIMARY KEY (`category_id`)
)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `status` (
    `status_id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(225) NOT NULL,
    PRIMARY KEY (`status_id`)
)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `designation` (
    `designation_id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(225) NOT NULL,
    PRIMARY KEY (`designation_id`)
)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `type` (
    `type_id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(225) NOT NULL,
    PRIMARY KEY (`type_id`)
)
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `resources` (
    `resource_id` INT NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(225) NOT NULL,
    `summary` VARCHAR(225) NOT NULL,
    `incoming_message` VARCHAR(1000) NOT NULL,
    `response` VARCHAR(500) NOT NULL,
    `link` VARCHAR(225) NOT NULL,
    `status_id` INT NOT NULL,
    `category_id` INT NOT NULL,
    `industry_id` INT NOT NULL,
    `type_id` INT NOT NULL,
    PRIMARY KEY (`resource_id`),
    INDEX `status_id_fk_idx` (`status_id` ASC),  
    INDEX `industry_id_fk_idx` (`industry_id` ASC), 
    INDEX `category_id_fk_idx` (`category_id` ASC),
    INDEX `type_id_fk_idx` (`type_id` ASC), 
    FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`),
    FOREIGN KEY (`industry_id`) REFERENCES `industry` (`industry_id`),
    FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
    FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`)
)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `users` (
    `user_id` INT NOT NULL AUTO_INCREMENT,
    `first_name` VARCHAR(225) NOT NULL,
    `last_name` VARCHAR(225) NOT NULL,
    `email` VARCHAR(1000) NOT NULL,
    `phone` VARCHAR(500) NOT NULL,
    `occupation` VARCHAR(225) NOT NULL,
    `password` VARCHAR(225) NOT NULL,
    `address_id` INT NOT NULL,
    `designation_id` INT NOT NULL,
    `industry_id` INT NOT NULL,
    PRIMARY KEY (`user_id`),
    INDEX `industry_id_fk_idx` (`industry_id` ASC), 
    INDEX `designation_id_fk_idx` (`designation_id` ASC), 
    FOREIGN KEY (`designation_id`) REFERENCES `designation` (`designation_id`),
    FOREIGN KEY (`industry_id`) REFERENCES `industry` (`industry_id`),
    
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `queries` (
    `query_id` INT NOT NULL AUTO_INCREMENT,
    `incoming_message` VARCHAR(225) NOT NULL,
    `response` VARCHAR(225) NOT NULL,
    `link` VARCHAR(225) NOT NULL,
    `status_id` INT NOT NULL,
    `category_id` INT NOT NULL,
    `industry_id` INT NOT NULL,
    `type_id` INT NOT NULL,
    PRIMARY KEY (`query_id`),
    INDEX `status_id_fk_idx` (`status_id` ASC),  
    INDEX `industry_id_fk_idx` (`industry_id` ASC), 
    INDEX `category_id_fk_idx` (`category_id` ASC),
    INDEX `type_id_fk_idx` (`type_id` ASC), 
    FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`),
    FOREIGN KEY (`industry_id`) REFERENCES `industry` (`industry_id`),
    FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
    FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`)
)
ENGINE = InnoDB;
