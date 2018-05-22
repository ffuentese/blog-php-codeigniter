

CREATE TABLE category (
	id int(11) NOT NULL AUTO_INCREMENT,
	name varchar(128) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE author (
	id int(11) NOT NULL AUTO_INCREMENT,
	name varchar(128) NOT NULL,
	login varchar(60) NOT NULL,
	email varchar(128) NOT NULL,
	pass varchar(255) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE blog_posts (
        id int(11) NOT NULL AUTO_INCREMENT,
        title varchar(128) NOT NULL,
        slug varchar(128) NOT NULL,
        text text NOT NULL,
		category_id int(11) NOT NULL,
		author_id int(11) NOT NULL,
        PRIMARY KEY (id),
        KEY slug (slug),
		INDEX cat_ind (category_id),
		INDEX usr_ind (author_id),
		
		FOREIGN KEY (category_id)
			REFERENCES category(id)
			ON DELETE CASCADE,
			
		FOREIGN KEY (author_id)
        	REFERENCES author(id)
			ON DELETE CASCADE
        
);