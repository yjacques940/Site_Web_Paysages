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
        id_country  Varchar (50) NOT NULL ,
        countryName Varchar (50) NOT NULL
	,CONSTRAINT tbl_country_PK PRIMARY KEY (id_country)
)ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_bin;


#------------------------------------------------------------
# Table: tbl_pictures
#------------------------------------------------------------

CREATE TABLE tbl_pictures(
        id_picture      Int  Auto_increment  NOT NULL ,
        picture         Varchar(50) NOT NULL ,
        dateTimePicture Datetime NOT NULL ,
        id_category     Int NOT NULL ,
        id_country      Varchar (50) NOT NULL ,
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
)ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_bin;;

        
delimiter | 
create procedure RegisterUser(IN $firstname Varchar(50), IN $lastname Varchar(50), IN $username Varchar(50), IN $password Varchar(50))
BEGIN
	INSERT INTO tbl_user(firstName, lastName, userName, password)
    VALUES($firstname,$lastname, $username, $password);
END
| 
delimiter |
create procedure RegisterPicture(IN $picture varchar(50), IN $dateTimePicture DateTime, IN $id_category int, IN $id_country Varchar(50), IN $id_user int)
BEGIN
	INSERT INTO tbl_pictures(picture,dateTimePicture,id_category,id_country,id_user)
	VALUES($picture,$dateTimePicture,$id_category,$id_country,$id_user);
END
|

select * from tbl_user;



insert into tbl_category(id_category,category)
values(1,"Montagnes");
insert into tbl_category(id_category,category)
values(2,"Soleil");
insert into tbl_category(id_category,category)
values(3,"Plan d'eau");
insert into tbl_category(id_category,category)
values(4,"hiver");
select * from tbl_category;


insert into tbl_country(id_country  ,countryName )
values(1,"Montréal");
insert into tbl_country(id_country  ,countryName )
values(2,"Québec");
insert into tbl_country(id_country  ,countryName )
values(3,"Australie");
insert into tbl_country(id_country  ,countryName )
values(4,"Saint-Alfred");
insert into tbl_country(id_country  ,countryName )
values(5,"Saint-Glinglin-des-Îles-Moutmouths");
select * from tbl_country;
call RegisterUser("Yannick","Jacques","yannJac","1234");
call RegisterUser("Jessy","Rodrigue","JesRod","1234");
call RegisterUser("YOh","Orange","YOhOr","1234");
call RegisterUser("Vincent","TheRock","TheRockVince970","1234");
