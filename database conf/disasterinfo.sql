CREATE TABLE disasterinfo (
    id int(11) PRIMARY KEY not null AUTO_INCREMENT,
    disaster_desc varchar(256) NOT null,
    dis_control_number varchar(256) not null,
    Sdate varchar(20) not null,
    Edate varchar(20) not null,
    Stime varchar(20) not null,
    Etime varchar(20) not null,
    disaster_type varchar(256) not null,
    AreaofEffect varchar(256) not null,
    encoded_by varchar(256) not null,
    date_log date not null);