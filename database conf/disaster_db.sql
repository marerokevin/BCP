CREATE TABLE disasterinfo (
    id int(11) PRIMARY KEY not null AUTO_INCREMENT,
    disaster_desc varchar(256) NOT null,
    dis_control_number varchar(256) not null,
    disaster_date date not null,
    time_start time not null,
    time_end time not null,
    disaster_type varchar(256) not null,
    AreaofEffect varchar(256) not null,
    encoded_by varchar(256) not null
    date_log date not null);