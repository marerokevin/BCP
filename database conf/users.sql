CREATE TABLE users (
    id INT(20) PRIMARY KEY NOT null AUTO_INCREMENT,
    date datetime not null,
    user_uid varchar(256) not null,
    user_fname varchar(256) not null,
    user_email varchar(256) not null,
    user_section varchar(256) not null,
    user_department varchar(256) not null,
    user_pwd varchar(256) not null,
    user_cpwd varchar(256) not null,
    user_level varchar(13) not null);