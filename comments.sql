CREATE TABLE image (
	post_id int(11) NOT NULL AUTO_INCREMENT,
	name varchar(128) NOT NULL,
	PRIMARY KEY (post_id),
	FOREIGN KEY (post_id)
			REFERENCES blog_posts(id)
			ON DELETE CASCADE
);

CREATE TABLE comment (
	comments_id int(11) NOT NULL AUTO_INCREMENT,
	name varchar(128) NOT NULL,
	email varchar(128) NOT NULL,
	text text NOT NULL,
	post_id int(11) NOT NULL,
	PRIMARY KEY (comments_id),
	FOREIGN KEY (post_id)
			REFERENCES blog_posts(id)
			ON DELETE CASCADE
);