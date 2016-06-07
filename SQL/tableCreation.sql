create table MuAdmin(
login varchar(30) primary key,
password varchar(30),
);

create table MuUser(
username varchar(30) primary key,
password varchar(30), /* trigger here (At least 8 characters with letters & numbers*/
email varchar(30) ,
validity boolean
);

create table MuReview(
idReview int primary key AUTO_INCREMENT,
message varchar(500),
dateReview date,
visibility boolean,
username varchar(30),
idAlbum int
);

create table MuRating(
idRating int primary key AUTO_INCREMENT,
ratingValue int, /*between 1 and 10*/
dateRating date,
username varchar(30),
idAlbum int
);

create table MuAlbum(
idAlbum int primary key AUTO_INCREMENT,
name varchar(30),
releaseDate date,
genre varchar(30), /*between ... */
globalRating float,
idArtist int
);

create table MuArtist(
idArtist int primary key AUTO_INCREMENT,
nameA varchar(20),
birthDate date,
description varchar(500)
);

alter table MuRating add foreign key (username) references MuUser(username);
alter table MuRating add foreign key (idAlbum) references MuAlbum(idAlbum);
alter table MuReview add foreign key (username) references MuUser(username);
alter table MuReview add foreign key (idAlbum) references MuAlbum(idAlbum);
alter table MuAlbum add foreign key (idArtist) references MuArtist(idArtist);
