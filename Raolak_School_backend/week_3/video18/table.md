CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    pwd VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    PRIMARY KEY (id) 
);


COMMENT TABLE
 CREATE TABLE comments (
     id INT(11) NOT NULL AUTO_INCREMENT,
     username VARCHAR(30) NOT NULL,
     comment_text TEXT NOT NULL,
     created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
     users_id INT(11),
     PRIMARY KEY (id),
     FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE SET NULL
 );

 inserting data
 INSERT INTO users (username, pwd, email) VALUES ('adedeni', 'adedeni666', 'mapoke28@gmail.com');

 updating data
 UPDATE users SET username = 'aderemixn', pwd = 'aderemixn123' WHERE id = 2,
UPDATE users SET username = 'aderemixn', pwd = 'aderemixn123' WHERE username = 'daniel' AND pwd = 'daniel124'
UPDATE users SET username = 'aderemixn', pwd = 'aderemixn123' WHERE username = 'daniel' OR username = 'adedeni'


deleting data from a database
DELETE FROM users WHERE id = 1;

inserting comment
INSERT INTO comments (username, comment_text, users_id) VALUES ('adedeni', 'this is the comment on the data', 3);