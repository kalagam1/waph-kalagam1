create table users(
		username varchar(50) PRIMARY KEY,
		password varchar(100) NOT NULL);
INSERT INTO users(username,password) VALUES ('kalagam1', md('12345'));		
