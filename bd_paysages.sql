#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

#------------------------------------------------------------
# Table: tbl_user
#------------------------------------------------------------
CREATE DATABASE  IF NOT EXISTS `db_paysages` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `db_paysages`;

CREATE TABLE tbl_user(
        id_user      Int  Auto_increment  NOT NULL ,
        firstName    Varchar (50) NOT NULL ,
        lastName     Varchar (50) NOT NULL ,
        dateTimeUser Datetime NOT NULL default current_timestamp,
        userName     Varchar (50) NOT NULL UNIQUE,
        password     Varchar (50) NOT NULL ,
        Active       Bool NOT NULL default true
	,CONSTRAINT tbl_user_PK PRIMARY KEY (id_user)
)ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_bin;


#------------------------------------------------------------
# Table: tbl_category
#------------------------------------------------------------

CREATE TABLE tbl_category(
        id_category Int  Auto_increment  NOT NULL ,
        category    Varchar (50) NOT NULL
	,CONSTRAINT tbl_category_PK PRIMARY KEY (id_category)
)ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_bin;


#------------------------------------------------------------
# Table: tbl_country
#------------------------------------------------------------

CREATE TABLE tbl_country(
        id_country  Int Auto_increment NOT NULL ,
        countryName Varchar (50) NOT NULL
	,CONSTRAINT tbl_country_PK PRIMARY KEY (id_country)
)ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_bin;

        
#------------------------------------------------------------
# Table: tbl_pictures
#------------------------------------------------------------

CREATE TABLE tbl_pictures(
        id_picture      Int  Auto_increment  NOT NULL ,
        picture         Varchar(50) NOT NULL ,
        picture_title 	varchar(50) NOT NULL,
        dateTimePicture Datetime NOT NULL ,
        id_category     Int NOT NULL ,
        id_country      Int NOT NULL ,
        id_user         Int NOT NULL
	,CONSTRAINT tbl_pictures_PK PRIMARY KEY (id_picture)

	,CONSTRAINT tbl_pictures_tbl_category_FK FOREIGN KEY (id_category) REFERENCES tbl_category(id_category)
	,CONSTRAINT tbl_pictures_tbl_country0_FK FOREIGN KEY (id_country) REFERENCES tbl_country(id_country)
	,CONSTRAINT tbl_pictures_tbl_user1_FK FOREIGN KEY (id_user) REFERENCES tbl_user(id_user)
)ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_bin;


#------------------------------------------------------------
# Table: tbl_picture_like
#------------------------------------------------------------

CREATE TABLE tbl_picture_like(
        id_picture_like     Int  Auto_increment  NOT NULL ,
        dateTimePictureLike Datetime NOT NULL ,
        id_picture          Int NOT NULL ,
        id_user             Int NOT NULL
	,CONSTRAINT tbl_picture_like_PK PRIMARY KEY (id_picture_like)

	,CONSTRAINT tbl_picture_like_tbl_pictures_FK FOREIGN KEY (id_picture) REFERENCES tbl_pictures(id_picture)
	,CONSTRAINT tbl_picture_like_tbl_user0_FK FOREIGN KEY (id_user) REFERENCES tbl_user(id_user)
)ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_bin;


delimiter | 
create procedure RegisterUser(IN $firstname varchar(50), IN $lastname Varchar(50), IN $username Varchar(50), IN $password Varchar(50))
BEGIN
	INSERT INTO tbl_user(firstName, lastName, userName, password)
    VALUES($firstname,$lastname, $username, $password);
END
| 
delimiter |
create procedure RegisterPicture(IN $picture varchar(50),IN $title varchar(50), IN $dateTimePicture DateTime, IN $id_category int, IN $id_country int, IN $id_user int)
BEGIN
	INSERT INTO tbl_pictures(picture,picture_title,dateTimePicture,id_category,id_country,id_user)
	VALUES($picture,$title,$dateTimePicture,$id_category,$id_country,$id_user);
END
|

delimiter |
create procedure RegisterNewLike(IN $dateTimePictureLike DateTime,IN $id_picture int,IN $id_user int)
BEGIN 
	insert into tbl_picture_like(dateTimePictureLike,id_picture,id_user)
	values($dateTimePictureLike,$id_picture,$id_user);
END
|

delimiter |
create procedure GetIsLiked(IN $path varchar(50))
BEGIN
select * from tbl_pictures inner join tbl_picture_like on tbl_pictures.id_picture = tbl_picture_like.id_picture where tbl_pictures.picture = $path;
End
|

delimiter |
create procedure CheckIfUsernameExists(IN $username varchar(50))
BEGIN
select 1 from tbl_user where userName = $username;
End
|

delimiter |
create procedure GetMostLikedPictures()
BEGIN
select count(id_picture_like) as likes,id_picture from tbl_picture_like order by likes desc; 
End
|
delimiter |
create procedure CheckIfUserCredentialsAreValid(IN $username varchar(50), IN $password varchar(50))
BEGIN
select 1 from tbl_user where userName = $username and password = $password;
End
|


