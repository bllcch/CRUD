CREATE DATABASE info;

CREATE TABLE users(
id INT (255) AUTO_INCREMENT PRIMARY KEY,
NAME VARCHAR (255),
age INT (255),
address VARCHAR (255),
username VARCHAR (255),
PASSWORD VARCHAR (255)
);

SELECT * FROM users;

INSERT INTO  users (id, NAME, age, address, username, PASSWORD)
VALUES
(1, "Belle", 17, "cal city", "belle@gmail.com", "belle pogi");

DROP DATABASE info;
DROP TABLE users;