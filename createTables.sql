CREATE TABLE users(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	username varchar(255),
	password varchar(255),
	email varchar(255)
);

INSERT INTO users (username, password, email)
VALUES ('user 0','securepassword','yeet@nasa.gov'),('someguy','somepass','gmail@yahoo.com'),('thedude','niceMarmot','ElDuderino@bowling.gov'),('sponge','bob','square@pants.nick');

CREATE TABLE modules(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	sourceFile varchar(255) NOT NULL

);
INSERT INTO modules(sourceFile)
VALUES('thatsthejoke.jpg'),('needsoreJPEG.gif');

CREATE TABLE progress(
	user_id INT,
	mod_id INT,
	progress INT DEFAULT 0,
	FOREIGN KEY (user_id) REFERENCES users(id),
	FOREIGN KEY (mod_id) REFERENCES modules(id)
); 
INSERT INTO progress(user_id, mod_id, progress)
VALUES (0,0,0), (0,1,0),(1,1,2),(2,0,9001);