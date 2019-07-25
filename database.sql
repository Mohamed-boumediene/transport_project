
# script créé le : Wed Jun 08 21:37:32 WET 2016 -   syntaxe MySQL ;
 # use  VOTRE_BASE_DE_DONNEE ;
 DROP TABLE IF EXISTS Voyages_ ;
 CREATE TABLE Voyages_ (idvoya INT(30) NOT NULL,
 datevoya DATETIME NOT NULL,
 numchaise INT(30),
 idligne VARCHAR(30) NOT NULL,
 idprix INT(30) NOT NULL,
 matriclecleint VARCHAR(56) NOT NULL,
 idchauf INT(34) NOT NULL,
 PRIMARY KEY (idvoya) ) ENGINE=InnoDB;


 CREATE TABLE appartenir (idappar INT(30) NOT NULL,
 chauff_id INT(12) NOT NULL,
 bus_id INT(12) NOT NULL,
 PRIMARY KEY (idappar)) ENGINE=InooDB;


 CREATE TABLE client (matriclecleint VARCHAR(56) NOT NULL,
 nom VARCHAR(30),
 prenom VARCHAR(30),
 numtelphone INT(30),
 PRIMARY KEY (matriclecleint) ) ENGINE=InnoDB;


 CREATE TABLE prix (idprix INT(30) NOT NULL,
 pointdepart VARCHAR(30),
 pointarriver VARCHAR(30),
 prix INT(30),
 PRIMARY KEY (idprix) ) ENGINE=InnoDB;


 CREATE TABLE ligne_ (idligne VARCHAR(30) NOT NULL,
 depart VARCHAR(30),
 arriverr VARCHAR(30),
 PRIMARY KEY (idligne) ) ENGINE=InnoDB;


 CREATE TABLE tiqueté (idtiq INT(30) NOT NULL,
 tiqvalider VARCHAR(45),
 idvoya INT(30) NOT NULL,
 matriclecleint VARCHAR(56) NOT NULL,
 PRIMARY KEY (idtiq) ) ENGINE=InnoDB;


 CREATE TABLE bagage (idbag INT(30) NOT NULL,
 poids VARCHAR(40),
 bagprix VARCHAR(56),
 depart VARCHAR(35) NOT NULL,
 arriver VARCHAR(40) NOT NULL,
 temps DATE NOT NULL,
 matriclecleint VARCHAR(56) NOT NULL,
 PRIMARY KEY (idbag) ) ENGINE=InnoDB;


 CREATE TABLE bagconfirm (idconfirm INT(40) NOT NULL,
 temps DATE NOT NULL,
 status VARCHAR(45) NOT NULL,
 numero_recepteur  VARCHAR(50) NOT NULL,
 idbag INT(13) NOT NULL,
 PRIMARY KEY (idconfirm)) ENGINE=InnoDB;


 CREATE TABLE argent (idargent INT(45) NOT NULL,
 source VARCHAR(30),
 destination VARCHAR(56),
 temps VARCHAR(45),
 montant VARCHAR(34),
 frais INT(23) NOT NULL,
 matriclecleint VARCHAR(56) NOT NULL,
 matriclecleint_transfert VARCHAR(45) NOT NULL,
 PRIMARY KEY (idargent) ) ENGINE=InnoDB;


 CREATE TABLE bus (idbus INT(34) NOT NULL,
 modele VARCHAR(56),
 marque VARCHAR(45),
 matricule VARCHAR(34),
 maxchaise INT(34),
 idchafint VARCHAR(34) NOT NULL,
 PRIMARY KEY (idbus) ) ENGINE=InnoDB;

 CREATE TABLE place_vide (idplace_vide INT(30) NOT NULL,
  numechaise INT(11) NOT NULL,
  date DATE NOT NULL,
  ligne VARCHAR(23) NOT NULL,
  idtiq INT(11) NOT NULL ,
  PRIMARY KEY (idplace_vide)) ENGINE=InooDB;

 CREATE TABLE chauffeur (idchauf INT(34) NOT NULL,
 nomchaf VARCHAR(34),
 cartechaff VARCHAR(56),
 idbus INT(34) NOT NULL,
 PRIMARY KEY (idchafint) ) ENGINE=InnoDB;

 ALTER TABLE Voyages_ ADD CONSTRAINT FK_Voyages__idligne FOREIGN KEY (idligne) REFERENCES ligne_ (idligne);
 ALTER TABLE Voyages_ ADD CONSTRAINT FK_Voyages__idprix FOREIGN KEY (idprix) REFERENCES prix (idprix);
 ALTER TABLE Voyages_ ADD CONSTRAINT FK_Voyages__matriclecleint FOREIGN KEY (matriclecleint) REFERENCES client (matriclecleint);
 ALTER TABLE Voyages_ ADD CONSTRAINT FK_Voyages__idchafint FOREIGN KEY (idchafint) REFERENCES chauffeur (idchafint);
 ALTER TABLE tiqueté ADD CONSTRAINT FK_tiqueté_idvoya FOREIGN KEY (idvoya) REFERENCES Voyages_ (idvoya);
 ALTER TABLE tiqueté ADD CONSTRAINT FK_tiqueté_matriclecleint FOREIGN KEY (matriclecleint) REFERENCES client (matriclecleint);
 ALTER TABLE bagage ADD CONSTRAINT FK_bagage_matriclecleint FOREIGN KEY (matriclecleint) REFERENCES client (matriclecleint);
 ALTER TABLE argent ADD CONSTRAINT FK_argent_matriclecleint FOREIGN KEY (matriclecleint) REFERENCES client (matriclecleint);
 ALTER TABLE argent ADD CONSTRAINT FK_argent_matriclecleint_transfert FOREIGN KEY (matriclecleint_transfert) REFERENCES client (matriclecleint);
 ALTER TABLE bus ADD CONSTRAINT FK_bus_idchafint FOREIGN KEY (idchafint) REFERENCES chauffeur (idchafint);
 ALTER TABLE chauffeur ADD CONSTRAINT FK_chauffeur_idbus FOREIGN KEY (idbus) REFERENCES bus (idbus);