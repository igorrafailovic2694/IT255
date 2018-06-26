DROP DATABASE IF EXISTS met_hotels_igor_rafailovic_2694;

CREATE DATABASE IF NOT EXISTS met_hotels_igor_rafailovic_2694;

USE met_hotels_igor_rafailovic_2694;

CREATE TABLE rooms(room_number INT PRIMARY KEY AUTO_INCREMENT,
                   floor INT NOT NULL,
                   occupied VARCHAR(5)
                 );

CREATE TABLE IF NOT EXISTS users(id INT PRIMARY KEY AUTO_INCREMENT,
                                 username VARCHAR(30) NOT NULL,
                                 password VARCHAR(100) NOT NULL,
                                 email VARCHAR(256) NOT NULL,
                                 first_name VARCHAR(30) NOT NULL,
                                 last_name VARCHAR(30) NOT NULL,
                                 room_number INT,
                                 FOREIGN KEY(room_number) REFERENCES rooms(room_number)
                               );

DELIMITER $$

CREATE PROCEDURE fillRooms()
  BEGIN
    DECLARE i INT;
    DECLARE j INT;

    SET i = 1;
    SET j = 0;

    WHILE i <= 4 DO
      WHILE j < 400 DO
        INSERT INTO rooms(floor, occupied) VALUES(i, 'no');
        SET j = j + 1;
      END WHILE;

      SET j = 0;
      SET i = i + 1;

    END WHILE;
  END $$

DELIMITER ;

CALL fillRooms();
