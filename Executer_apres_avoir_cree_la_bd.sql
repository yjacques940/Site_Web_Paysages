call RegisterUser("Yannick","Jacques","yannJac","1234");
call RegisterUser("Jessy","Rodrigue","JesRod","1234");
call RegisterUser("YOh","Orange","YOhOr","1234");
call RegisterUser("Vincent","TheRock","TheRockVince970","1234");
call RegisterUser("Marko","Olivier","MarkO","1234");
call RegisterUser("Sam","Son","Samson","1234");

insert into tbl_category(category)
values("Été");
insert into tbl_category(category)
values("Automne");
insert into tbl_category(category)
values("Printemps");
insert into tbl_category(category)
values("hiver");
select * from tbl_category;

insert into tbl_country(countryName )
values("Montréal");
insert into tbl_country(countryName )
values("Québec");
insert into tbl_country(countryName )
values("Suède");
insert into tbl_country(countryName )
values("Japon");
insert into tbl_country(countryName )
values("Alaska");
insert into tbl_country(countryName )
values("États-Unis");
insert into tbl_country(countryName )
values("Brésil");
select * from tbl_country;

INSERT INTO `tbl_pictures` (`id_picture`,`picture`,`picture_title`,`dateTimePicture`,`id_category`,`id_country`,`id_user`) VALUES (1,'Images/20181207041316.jpg','Petite rivi&egrave;re ','2018-12-07 04:13:16',3,4,1);
INSERT INTO `tbl_pictures` (`id_picture`,`picture`,`picture_title`,`dateTimePicture`,`id_category`,`id_country`,`id_user`) VALUES (2,'Images/20181207041333.jpg','Lac &agrave; p&ecirc;che','2018-12-07 04:13:33',3,3,1);
INSERT INTO `tbl_pictures` (`id_picture`,`picture`,`picture_title`,`dateTimePicture`,`id_category`,`id_country`,`id_user`) VALUES (3,'Images/20181207041412.jpg','Le chemin du destin','2018-12-07 04:14:12',1,5,5);
INSERT INTO `tbl_pictures` (`id_picture`,`picture`,`picture_title`,`dateTimePicture`,`id_category`,`id_country`,`id_user`) VALUES (4,'Images/20181207041438.jpg','Glace glaciale','2018-12-07 04:14:38',4,2,5);
INSERT INTO `tbl_pictures` (`id_picture`,`picture`,`picture_title`,`dateTimePicture`,`id_category`,`id_country`,`id_user`) VALUES (5,'Images/20181207041456.jpg','Que c\'est beau','2018-12-07 04:14:56',2,1,1);
INSERT INTO `tbl_pictures` (`id_picture`,`picture`,`picture_title`,`dateTimePicture`,`id_category`,`id_country`,`id_user`) VALUES (6,'Images/20181207041528.jpg','Bunzai','2018-12-07 04:15:28',2,5,1);
INSERT INTO `tbl_pictures` (`id_picture`,`picture`,`picture_title`,`dateTimePicture`,`id_category`,`id_country`,`id_user`) VALUES (7,'Images/20181207041604.jpg','Le quai','2018-12-07 04:16:04',3,3,3);
INSERT INTO `tbl_pictures` (`id_picture`,`picture`,`picture_title`,`dateTimePicture`,`id_category`,`id_country`,`id_user`) VALUES (8,'Images/20181207041619.jpeg','Bonne nuit','2018-12-07 04:16:19',2,4,1);
INSERT INTO `tbl_pictures` (`id_picture`,`picture`,`picture_title`,`dateTimePicture`,`id_category`,`id_country`,`id_user`) VALUES (9,'Images/20181207041657.jpg','La vall&eacute;e chanceuse','2018-12-07 04:16:57',3,4,1);
INSERT INTO `tbl_pictures` (`id_picture`,`picture`,`picture_title`,`dateTimePicture`,`id_category`,`id_country`,`id_user`) VALUES (10,'Images/20181207041714.jpg','Assurance maladie','2018-12-07 04:17:14',2,4,4);
INSERT INTO `tbl_pictures` (`id_picture`,`picture`,`picture_title`,`dateTimePicture`,`id_category`,`id_country`,`id_user`) VALUES (11,'Images/20181207041734.jpg','Mon jardin','2018-12-07 04:17:34',2,1,1);
INSERT INTO `tbl_pictures` (`id_picture`,`picture`,`picture_title`,`dateTimePicture`,`id_category`,`id_country`,`id_user`) VALUES (12,'Images/20181207041756.jpg','Glacier g&eacute;ant','2018-12-07 04:17:56',4,4,1);
INSERT INTO `tbl_pictures` (`id_picture`,`picture`,`picture_title`,`dateTimePicture`,`id_category`,`id_country`,`id_user`) VALUES (13,'Images/20181207041812.jpg','Sapins blancs','2018-12-07 04:18:12',4,5,2);
INSERT INTO `tbl_pictures` (`id_picture`,`picture`,`picture_title`,`dateTimePicture`,`id_category`,`id_country`,`id_user`) VALUES (14,'Images/20181207041825.jpeg','Windows xp','2018-12-07 04:18:26',2,5,1);
INSERT INTO `tbl_pictures` (`id_picture`,`picture`,`picture_title`,`dateTimePicture`,`id_category`,`id_country`,`id_user`) VALUES (15,'Images/20181207041842.jpg','Buttes de neige','2018-12-07 04:18:42',4,5,2);
INSERT INTO `tbl_pictures` (`id_picture`,`picture`,`picture_title`,`dateTimePicture`,`id_category`,`id_country`,`id_user`) VALUES (16,'Images/20181207041859.jpeg','La chute','2018-12-07 04:18:59',3,4,1);
INSERT INTO `tbl_pictures` (`id_picture`,`picture`,`picture_title`,`dateTimePicture`,`id_category`,`id_country`,`id_user`) VALUES (17,'Images/20181207042729.jpg','Glace glac&eacute;e','2018-12-07 04:27:29',4,5,3);


call RegisterNewLike("2018-12-02 14:10:01",1,1);
call RegisterNewLike("2018-12-02 16:50:01",3,1);
call RegisterNewLike("2018-12-02 14:10:01",2,3);
call RegisterNewLike("2018-12-02 14:10:01",4,2);
call RegisterNewLike("2018-12-02 14:10:01",3,2);
call RegisterNewLike("2018-12-02 14:10:01",3,3);
call RegisterNewLike("2018-12-02 14:10:01",3,4);
call RegisterNewLike("2018-12-02 14:10:01",3,5);
call RegisterNewLike("2018-12-02 14:10:01",2,2);
call RegisterNewLike("2018-12-02 14:10:01",2,3);
call RegisterNewLike("2018-12-02 14:10:01",1,3);
call RegisterNewLike("2018-12-02 14:10:01",4,2);
call RegisterNewLike("2018-12-02 14:10:01",6,4);
call RegisterNewLike("2018-12-02 14:10:01",7,1);
call RegisterNewLike("2018-12-02 16:50:01",8,1);
call RegisterNewLike("2018-12-02 14:10:01",9,3);
call RegisterNewLike("2018-12-02 14:10:01",10,2);
call RegisterNewLike("2018-12-02 14:10:01",11,2);
call RegisterNewLike("2018-12-02 14:10:01",12,3);
call RegisterNewLike("2018-12-02 14:10:01",13,4);
call RegisterNewLike("2018-12-02 14:10:01",14,5);
call RegisterNewLike("2018-12-02 14:10:01",14,2);
call RegisterNewLike("2018-12-02 14:10:01",14,3);
call RegisterNewLike("2018-12-02 14:10:01",14,3);
call RegisterNewLike("2018-12-02 14:10:01",4,2);
call RegisterNewLike("2018-12-02 14:10:01",4,4);







