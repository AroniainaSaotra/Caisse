create database caissebase;
use caissebase;

create table produit(
    idProduit int primary key not null auto_increment,
    categorie VARCHAR(50),
    nomProduit VARCHAR(250),
    prix double,
    quantiteStock int not null,
    images varchar(30)
)ENGINE=InnoDB;

create table caisse(
    idCaisse int primary key not null auto_increment,
    numeroCaisse VARCHAR(250)
)ENGINE=InnoDB;

create table achat(
    idAchat int primary key not null auto_increment,
    idCaisse int not null,
    idProduit int not null,
    quantiteAchat int not null,
    dateAchat date not null,
    foreign key (idCaisse) references caisse(idCaisse),
    foreign key (idProduit) references produit(idProduit)
)ENGINE=InnoDB;

create table admin(
    idAdmin int( primary key not null auto_increment),
    email VARCHAR(21),
    motDePasse VARCHAR(15)
)ENGINE=InnoDB;

insert into produit (categorie,nomProduit,prix,quantiteStock,images) values ('Nouriturres','Chips',500,50,'chips.jpg');
insert into produit (categorie,nomProduit,prix,quantiteStock,images) values ('Nouriturres','Pomme de terre',2000,100,'pommedeterre.jpg');
insert into produit (categorie,nomProduit,prix,quantiteStock,images) values ('Nouriturres','Pao',1500,10,'pao.jpg');
insert into produit (categorie,nomProduit,prix,quantiteStock,images) values ('Nouriturres','Fromage',4500,8,'fromage.jpg');
insert into produit (categorie,nomProduit,prix,quantiteStock,images) values ('Nouriturres','Soda',100,200,'soda.jpg');

insert into produit (categorie,nomProduit,prix,quantiteStock,images) values ('Jouets','Mini Voiture',1000,20,'minivoiture.jpg');
insert into produit (categorie,nomProduit,prix,quantiteStock,images) values ('Jouets','Poupée',5000,50,'poupe.jpg');
insert into produit (categorie,nomProduit,prix,quantiteStock,images) values ('Jouets','Vélo',30000,10,'velo.jpg');
insert into produit (categorie,nomProduit,prix,quantiteStock,images) values ('Jouets','Corde à sauter',9000,10,'corde.jpg');
insert into produit (categorie,nomProduit,prix,quantiteStock,images) values ('Jouets','Dinette',20000,10,'dinette.jpg');

insert into produit (categorie,nomProduit,prix,quantiteStock,images) values ('Technologies','Ordinateur HP',20000,4,'hp.jpg');
insert into produit (categorie,nomProduit,prix,quantiteStock,images) values ('Technologies','Ordinateur DELL',10000,3,'dell.jpg');
insert into produit (categorie,nomProduit,prix,quantiteStock,images) values ('Technologies','Iphone 7',60000,5,'iphone');
insert into produit (categorie,nomProduit,prix,quantiteStock,images) values ('Technologies','Samsung Note 6',50000,10,'samsung.jpg');
insert into produit (categorie,nomProduit,prix,quantiteStock,images) values ('Technologies','Smart watch',90000,4,'smartwatch.jpg');