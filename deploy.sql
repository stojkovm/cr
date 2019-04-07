
create database cr;
use cr;
GRANT ALL PRIVILEGES ON cr.* TO root@'localhost' IDENTIFIED BY 'root';
create table users ( login VARCHAR(50) not null  primary key , password VARCHAR(50));

INSERT INTO `users` (login,password) VALUES ('admin','21232F297A57A5A743894A0E4A801FC3');



