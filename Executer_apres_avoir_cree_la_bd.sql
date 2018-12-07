call RegisterUser("Yannick","Jacques","yannJac","1234");
call RegisterUser("Jessy","Rodrigue","JesRod","1234");
call RegisterUser("YOh","Orange","YOhOr","1234");
call RegisterUser("Vincent","TheRock","TheRockVince970","1234");
call RegisterUser("Marko","Olivier","MarkO","1234");
call RegisterUser("Sam","Son","Samson","1234");


call RegisterNewLike("2018-12-02 14:10:01",1,1);
call RegisterNewLike("2018-12-02 16:50:01",3,1);
call RegisterNewLike("2018-12-02 14:10:01",2,3);
call RegisterNewLike("2018-12-02 14:10:01",4,2);
call RegisterNewLike("2018-12-02 14:10:01",3,2);


insert into tbl_category(category)
values("Montagnes");
insert into tbl_category(category)
values("Soleil");
insert into tbl_category(category)
values("Plan d'eau");
insert into tbl_category(category)
values("hiver");
select * from tbl_category;


insert into tbl_country(countryName )
values("Montréal");
insert into tbl_country(countryName )
values("Québec");
insert into tbl_country(countryName )
values("Australie");
insert into tbl_country(countryName )
values("Saint-Alfred");
insert into tbl_country(countryName )
values("Saint-Glinglin-des-Îles-Moutmouths");
select * from tbl_country;