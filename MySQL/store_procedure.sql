drop procedure if exists javadb.persontrig;
DELIMITER $$
create procedure javadb.persontrig(IN fname varchar(50), IN lname varchar(50))
begin
insert into person (firstname,lastname,location) values(fname,lname,'wuhan');
END$$
DELIMITER ;

drop procedure if exists javadb.persontrig;
create procedure javadb.persontrig(IN fname varchar(50), IN lname varchar(50))
insert into person (firstname,lastname,location) values(fname,lname,'wuhan');


set @lname='mike';
set @fname='jodon';
call javadb.persontrig(@fname,@lname);


DELIMITER $$
CREATE
PROCEDURE `javadb`.`person_trigger`(IN name VARCHAR(255))
BEGIN
SELECT * FROM `person` WHERE `firstname` = name;
END$$
DELIMITER ;
