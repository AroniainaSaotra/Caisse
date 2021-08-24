create database Caisse;
use Caisse;

create table produit(
    id int primary key not null auto_increment,
    nom VARCHAR(250),
    prix double,
    stock int not null,
    images varchar(50)
)ENGINE=InnoDB;

create table caisse(
    id int primary key not null auto_increment,
    numero VARCHAR(250)
)ENGINE=InnoDB;

create table achat(
    id int primary key not null auto_increment,
    idCaisse int not null,
    idProduit int not null,
    quantite int not null,
    dateAchat date not null,
    foreign key (idCaisse) references caisse(id),
    foreign key (idProduit) references produit(id)
)ENGINE=InnoDB;

create table admin(
    idAdmin int primary key not null auto_inccrement,
    nomAdmin varchar(10),
    mdp varchar(10)
);ENGINE=InnoDB;

insert into produit(nom,prix,stock) values ("BonBon",200,10),("Biscuit",300,20),("Yaourt",500,19),("Coca",1200,25),("Chipss",500,13);
insert into caisse(numero) values ('caisse1'),('caisse2');
insert into achat (idCaisse,idProduit,quantite,dateAchat) VALUES
        ('2','1','5','curdate()')


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

CREATE view detailsAchat AS
    select c.id as idCaisse,p.nom,p.prix,a.quantite,(p.prix*a.quantite) as montant from achat a,caisse c,produit p
        where 
            a.idCaisse = c.id AND
                a.idProduit = p.id ;