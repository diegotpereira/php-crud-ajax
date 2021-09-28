CREATE TABLE `usuarios` ( 
  `id` INT(11) NOT NULL AUTO_INCREMENT, 
  `nome` VARCHAR(255) NULL DEFAULT NULL, 
  `idade` VARCHAR(255) NULL DEFAULT NULL, 
  `email` VARCHAR(255) NULL DEFAULT NULL, 
  `created` DATETIME NULL DEFAULT NULL, 
  PRIMARY KEY (`id`) ) 
  COLLATE = 'latin1_swedish_ci' ENGINE = InnoDB AUTO_INCREMENT = 1;

    
  INSERT INTO `usuarios` (`id`, `nome`, `idade`, `email`, `created`)
         VALUES (NULL, 'ajay', '27', 'ajay@mail.com', NULL), 
                (NULL, 'abhay', '23', 'abhay@mail.com', NULL);