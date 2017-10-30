CREATE TABLE `user` (
	`userid` int NOT NULL AUTO_INCREMENT,
	`uniid` char(13) NOT NULL,
	`pasword` varchar(50) NOT NULL,
	`email` varchar(50) NOT NULL,
	`phone` varchar(20) NOT NULL,
	PRIMARY KEY (`userid`)
);

CREATE TABLE `admin` (
	`adminid` int NOT NULL AUTO_INCREMENT,
	`username` varchar(50) NOT NULL UNIQUE,
	`pasword` varchar(50) NOT NULL,
	`email` varchar(50) NOT NULL,
	`phone` varchar(20) NOT NULL,
	`fullname` varchar(100) NOT NULL,
	PRIMARY KEY (`adminid`)
);

CREATE TABLE `department` (
	`departmentid` int NOT NULL AUTO_INCREMENT,
	`departmentcode` varchar(10) NOT NULL UNIQUE,
	`departmentname` varchar(100) NOT NULL,
	PRIMARY KEY (`departmentid`)
);

CREATE TABLE `course` (
	`courseid` int NOT NULL AUTO_INCREMENT,
	`coursecode` varchar(15) NOT NULL UNIQUE,
	`coursename` varchar(50) NOT NULL,
	`description` TEXT NOT NULL,
	`credit` int NOT NULL,
	`prerequisite` varchar(10) NOT NULL,
	`userid` int NOT NULL,
	`adminid` int NOT NULL,
	`departmentid` int NOT NULL,
	PRIMARY KEY (`courseid`)
);

ALTER TABLE `course` ADD CONSTRAINT `course_fk0` FOREIGN KEY (`userid`) REFERENCES `user`(`userid`);

ALTER TABLE `course` ADD CONSTRAINT `course_fk1` FOREIGN KEY (`adminid`) REFERENCES `admin`(`adminid`);

ALTER TABLE `course` ADD CONSTRAINT `course_fk2` FOREIGN KEY (`departmentid`) REFERENCES `department`(`departmentid`);

