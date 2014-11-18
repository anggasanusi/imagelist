CREATE TABLE user
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
username VARCHAR(500),
name VARCHAR(100),
photo VARCHAR(500),
socialid VARCHAR(500)
)

CREATE TABLE media
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
user_id INT,
user_username VARCHAR(50),
picurl VARCHAR(500),
title VARCHAR(500),
category VARCHAR(500),
timeup VARCHAR(100),
description VARCHAR(5000), 
gvote INT DEFAULT 0,
bvote INT DEFAULT 0,
status VARCHAR(50),
view INT DEFAULT 0
)

CREATE TABLE comment
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
user_id INT,
user_username VARCHAR(50),
media_id INT,
timecom VARCHAR(100),
comment VARCHAR(5000)
)