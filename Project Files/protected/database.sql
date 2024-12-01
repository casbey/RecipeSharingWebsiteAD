CREATE USER 'rsw_project'@'localhost' IDENTIFIED VIA mysql_native_password USING '***';GRANT USAGE ON *.* TO 'rsw_project'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;CREATE DATABASE IF NOT EXISTS `rsw_project`;GRANT ALL PRIVILEGES ON `rsw\_project`.* TO 'rsw_project'@'localhost';

 CREATE TABLE recipes ( 
    recipe_id INT NOT NULL AUTO_INCREMENT, 
    recipename VARCHAR(255) NOT NULL, 
    ingredients VARCHAR(255) NOT NULL,
    servings TINYINT NOT NULL DEFAULT 1,
    instructions VARCHAR(500) NOT NULL, 
    CONSTRAINT PK_recipes PRIMARY KEY(recipe_id)
 );