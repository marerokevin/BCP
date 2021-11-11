CREATE TABLE workinfo (
    id int(50) PRIMARY KEY not null AUTO_INCREMENT,
    control_number varchar(256) not null,
    date_log datetime not null,
    user_fname varchar(256) NOT null,
    user_eid varchar(256) not null,
    date_encoded datetime not null,
    user_department varchar(256) not null,
    user_section varchar(256) not null,
    bcp_yes smallint(11) not null,
    bcp_no smallint(11) not null,
    bcp_info smallint(11) not null);