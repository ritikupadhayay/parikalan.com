create table singup
(
mid int(10) not null AUTO_INCREMENT,
mname varchar(50) not null,
email varchar(60) not null,
mpass varchar(30) not null,
mmobile int(11) not null,
chk int(5) not null,
PRIMARY KEY (mid)
)