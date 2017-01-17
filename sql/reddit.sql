CREATE TABLE profile (
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileDateCreated TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	profileEmail VARCHAR (128) NOT NULL,
	profileUserDob DATE,
	UNIQUE (profileEmail),
	UNIQUE (profileId),
	PRIMARY KEY (profileId)
);
CREATE TABLE post (
	postId INT UNSIGNED NOT NULL,
	postProfileId INT UNSIGNED NOT NULL,
	postContent VARCHAR(255),
	postDateTime TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	UNIQUE (postId),
	UNIQUE (postProfileId),
	PRIMARY KEY (postId),
	FOREIGN KEY (postProfileId)
);
CREATE TABLE comment (
	commentPostId INT UNSIGNED NOT NULL,
	commentProfileId INT UNSIGNED NOT NULL,
	commentContent VARCHAR(255),
	commentDateTime TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	UNIQUE (commentPostId),
	UNIQUE (commentProfileId),
	FOREIGN KEY (commentPostId),
	FOREIGN KEY (commentProfileId)
);