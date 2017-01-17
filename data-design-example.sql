-- this is how to make a comment. the space is required.
-- the create table function is a function that takes tons of arguments to layout the tables schema
CREATE TABLE profile (
-- this creates the attribute for the primary key
-- auto_increment tells mySQL to number them (1,2,3,...)
-- not null meant the attribute is REQUIRED
profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
profileAtHandle VARCHAR (32) NOT NULL,
profileEmail VARCHAR (128) NOT NULL,
profilePhone VARCHAR (32),
-- to make sure duplicate data cannot exist, create a unique index
UNIQUE (profileEmail),
UNIQUE (profileAtHandle),
-- this officiates the primary key for the entity
PRIMARY KEY (profileId)
);