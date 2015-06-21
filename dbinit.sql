create database fb_connect_php;
grant all on fb_connect_php.* to dbuser@localhost identified by 'パスワード';

use fb_connect_php;

create table users (
	id int not null auto_increment primary key,
	facebook_user_id varchar(30) unique,
	facebook_name varchar(255),
	facebook_picture varchar(255),
	facebook_access_token varchar(255),
	created datetime,
	modified datetime
);

