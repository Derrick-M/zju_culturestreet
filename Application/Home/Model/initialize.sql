create table think_User
(
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`username` char(20) NOT NULL,
	`password` char(20) NOT NULL,
	`name` char(20) NOT NULL,
	`phonenumber` char(15),
	`privilege` int(5) NOT NULL,
	`status` int(2) NOT NULL,
	PRIMARY KEY (`id`)
)

insert into think_User values(1,'admin','admin123','admin','123',0,1);
insert into think_User values(2,'student','student123','Derrick_M','123',1,1);
insert into think_User values(3,'test1','test123','审批员1','123',2,1);
insert into think_User values(4,'test2','test123','审批员2','123',2,0);
insert into think_User values(5,'test3','test123','保洁员1','123',3,1);