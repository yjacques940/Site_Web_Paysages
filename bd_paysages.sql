#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: tbl_user
#------------------------------------------------------------
CREATE DATABASE  IF NOT EXISTS `db_paysages` DEFAULT CHARACTER SET utf8 ;
USE `db_paysages`;

CREATE TABLE tbl_user(
        id_user      Int  Auto_increment  NOT NULL ,
        firstName    Varchar (50) NOT NULL ,
        lastName     Varchar (50) NOT NULL ,
        dateTimeUser Datetime NOT NULL ,
        userName     Varchar (50) NOT NULL ,
        password     Varchar (50) NOT NULL ,
        Active       Bool NOT NULL
	,CONSTRAINT tbl_user_PK PRIMARY KEY (id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tbl_category
#------------------------------------------------------------

CREATE TABLE tbl_category(
        id_category Int  Auto_increment  NOT NULL ,
        category    Varchar (50) NOT NULL
	,CONSTRAINT tbl_category_PK PRIMARY KEY (id_category)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tbl_country
#------------------------------------------------------------

CREATE TABLE tbl_country(
        id_country  Varchar (50) NOT NULL ,
        countryName Varchar (50) NOT NULL
	,CONSTRAINT tbl_country_PK PRIMARY KEY (id_country)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tbl_pictures
#------------------------------------------------------------

CREATE TABLE tbl_pictures(
        id_picture      Int  Auto_increment  NOT NULL ,
        picture         Longblob NOT NULL ,
        dateTimePicture Datetime NOT NULL ,
        id_category     Int NOT NULL ,
        id_country      Varchar (50) NOT NULL ,
        id_user         Int NOT NULL
	,CONSTRAINT tbl_pictures_PK PRIMARY KEY (id_picture)

	,CONSTRAINT tbl_pictures_tbl_category_FK FOREIGN KEY (id_category) REFERENCES tbl_category(id_category)
	,CONSTRAINT tbl_pictures_tbl_country0_FK FOREIGN KEY (id_country) REFERENCES tbl_country(id_country)
	,CONSTRAINT tbl_pictures_tbl_user1_FK FOREIGN KEY (id_user) REFERENCES tbl_user(id_user)
)ENGINE=InnoDB;


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
)ENGINE=InnoDB;

