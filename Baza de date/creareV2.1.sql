-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2017-05-03 16:02:33.147

-- tables:

Drop table Categorie;
-- Table: Categorie
CREATE TABLE Categorie (
    Id integer  NOT NULL,
    Nume varchar2(50)  NOT NULL,
    Categorie_Id integer  NULL,
    CONSTRAINT Categorie_pk PRIMARY KEY (Id)
) ;

Drop table Date_Medie_Concurs;
-- Table: Date_Medie_Concurs
CREATE TABLE Date_Medie_Concurs (
    Id integer  NOT NULL,
    Medie_Bac float(5)  NOT NULL,
    Nota_Matematica float(5)  NULL,
    Nota_Proba_Alegere float(5)  NOT NULL,
    Nota_Concurs float(5) NULL,
    CONSTRAINT Date_Medie_Concurs_pk PRIMARY KEY (Id)
) ;

Drop table Date_Personale_Candidat;
-- Table: Date_Personale_Candidat
CREATE TABLE Date_Personale_Candidat (
    Id integer  NOT NULL,
    CNP varchar2(13)  NOT NULL,
    Nume varchar2(50)  NOT NULL,
    Nume_Actual varchar2(50) NULL,
    Prenume varchar2(50)  NOT NULL,
    Initiala_Tata varchar2(4)  NOT NULL,
    Sex char(1)  NOT NULL,
    StareCivila varchar2(30)  NOT NULL,
    Cetatenie varchar2(30)  NOT NULL,
    Prenume_Mama varchar2(50)  NOT NULL,
    Prenume_Tata varchar2(50)  NOT NULL,
    Telefon varchar2(16)  NOT NULL,
    Email varchar2(60)  NOT NULL,
    Data_Nasterii date  NOT NULL,
    Nationalitate varchar2(30)  NOT NULL,
    Etnie varchar2(30)  NOT NULL,
    Limba_Materna varchar2(20)  NOT NULL,
    Tip_Buletin varchar2(10)  NOT NULL,
    Serie_Buletin varchar2(2)  NOT NULL,
    Numar_Buletin number(6,0)  NOT NULL,
    Buletin_Eliberat_De varchar2(50)  NOT NULL,
    Buletin_Data_Eliberarii date  NOT NULL,
    tara varchar2(200 byte) not null,
    judet varchar2(60 byte) not null,
    localitate varchar2(100 byte) not null,
    domiciliu_stabil varchar2(6) not null,
    strada varchar2(30 byte),
    numar_domiciliu number(38,0),
    bloc_domiciliu varchar2(6 byte),
    etaj_domiciliu varchar2(6 byte),
    scara_domiciliu varchar2(6 byte),
    apartament_domiciliu number(38, 0),
    cod_postal_domiciliu number(6, 0) not null,
    CONSTRAINT Date_Personale_Candidat_pk PRIMARY KEY (Id)
) ;

Drop table Detalii_Aplicare;
-- Table: Detalii_Aplicare
CREATE TABLE Detalii_Aplicare (
    Id integer  NOT NULL,
    Tip_Aplicare varchar2(30)  NOT NULL,
    Proba_Concurs varchar2(30)  NOT NULL,
    Preferinta_Limba_Studiu varchar2(20)  NOT NULL,
    Tip_Frecventa char(1)  NOT NULL,
    Optional varchar2(50)  NULL,
    Stare_Sociala_Speciala char(1) NOT NULL,
    Nume_Stare_Sociala varchar2(30)  NULL,
    Scutit_Plata_Camin char(1) NOT NULL,
    Motiv_Scutire varchar2(50) NULL,
    Echivalare_Diploma_Olimpiada char(1) NOT NULL,
    Cazare_Pe_Timpul_Studiilor char(1)  NOT NULL,
    Cazare_Pe_Timpul_Examenului char(1)  NOT NULL,
    CONSTRAINT Detalii_Aplicare_pk PRIMARY KEY (Id)
) ;

DROP table Formular;
-- Table: Formular
CREATE TABLE Formular (
    Id integer  NOT NULL,
    DetaliiAplicare_Id integer  NOT NULL,
    DateMedieConcurs_Id integer  NOT NULL,
    Date_Personale_Candidat_Id integer  NOT NULL,
    Preferinte_Master_Id integer  NULL,
    Data_Ultimei_Modificari date  NOT NULL,
    Data_Compozitiei date  NOT NULL,
    Validat varchar2(1)  NOT NULL,
    Persoana_Ultima_Modificare varchar2(50)  NOT NULL,
    Creation_Date timestamp  NOT NULL,
    Last_Update_Date timestamp  NOT NULL,
    Serie_Chitanta varchar2(20)  NOT NULL,
    Suma_Achitata NUMBER(6,2) NOT NULL,
    CONSTRAINT Formular_pk PRIMARY KEY (Id)
) ;
Drop table Institutie;
-- Table: Institutie
CREATE TABLE Institutie (
    Id integer  NOT NULL,
    Tip_Institutie varchar2(50) null,
    Data_Inceput date  NULL,
    Data_Sfarsit date   NULL,
    Filiera varchar2(40)   NULL,
    Profil varchar2(10)   NULL,
    Specializare varchar2(55)   NULL,
    An_Absolvire integer   NULL,
    Pregatiri_Anterioare_Id integer   NULL,
    tara varchar2(200 byte),
    judet varchar2(60 byte),
    localitate varchar2(100 byte),
    CONSTRAINT Institutie_pk PRIMARY KEY (Id)
) ;

Drop table Intrebare;
-- Table: Intrebare
CREATE TABLE Intrebare (
    Id integer  NOT NULL,
    Text varchar2(500)  NOT NULL,
    Categorie_Id integer  NOT NULL,
    User_Id integer  NOT NULL,
    CONSTRAINT Intrebare_pk PRIMARY KEY (Id)
) ;




Drop table Olimpiada;
-- Table: Olimpiada
CREATE TABLE Olimpiada (
    Id integer  NOT NULL,
    Participare_Nationala char(1)   NULL,
    Disciplina varchar2(15)   NULL,
    An integer   NULL,
    Premiul_Obtinut varchar2(20)   NULL,
    DateMedieConcurs_Id integer   NULL,
    CONSTRAINT Olimpiada_pk PRIMARY KEY (Id)
) ;

Drop table Pregatiri_Anterioare;
-- Table: Pregatiri_Anterioare
CREATE TABLE Pregatiri_Anterioare (
    Formular_Id integer  NOT NULL,
    Institutie_Id integer  NOT NULL
) ;

Drop table Raspuns;
-- Table: Raspuns
CREATE TABLE Raspuns (
    Id integer  NOT NULL,
    Text varchar2(500)  NOT NULL,
    Intrebare_Id integer  NOT NULL,
    User_Id integer  NOT NULL,
    CONSTRAINT Raspuns_pk PRIMARY KEY (Id)
) ;


DROP TABLE Useri;
-- Table: Useri
CREATE TABLE Useri(
ID INTEGER, 
username VARCHAR2(50), 
parola VARCHAR2(50), 
email VARCHAR2(50), 
nume VARCHAR2(50), 
prenume VARCHAR2(50),
CONSTRAINT Useri_pk PRIMARY KEY (Id)
);

DROP TABLE Preferinte_Master;
--Table: Preferinte_Master
CREATE TABLE Preferinte_Master (
ID INTEGER,
Preferinta_1 VARCHAR2(50),
Preferinta_2 VARCHAR2(50),
Preferinta_3 VARCHAR2(50),
Preferinta_4 VARCHAR2(50),
Preferinta_5 VARCHAR2(50),
Preferinta_6 VARCHAR2(50),
Preferinta_7 VARCHAR2(50),
Preferinta_8 VARCHAR2(50),
Preferinta_9 VARCHAR2(50),
Preferinta_10 VARCHAR2(50),
Preferinta_11 VARCHAR2(50),

CONSTRAINT Preferinte_Master_pk PRIMARY KEY (ID)

);

-- foreign keys

ALTER TABLE Formular ADD CONSTRAINT Formular_Preferinte_Master
    FOREIGN KEY (Preferinte_Master_Id)
    REFERENCES Preferinte_Master (ID);


-- Reference: Categorie_Categorie (table: Categorie)
ALTER TABLE Categorie ADD CONSTRAINT Categorie_Categorie
    FOREIGN KEY (Categorie_Id)
    REFERENCES Categorie (Id);

-- Reference: FormToDate (table: Formular)
ALTER TABLE Formular ADD CONSTRAINT FormToDate
    FOREIGN KEY (Date_Personale_Candidat_Id)
    REFERENCES Date_Personale_Candidat (Id);

-- Reference: Formular_DateMedieConcurs (table: Formular)
ALTER TABLE Formular ADD CONSTRAINT Formular_DateMedieConcurs
    FOREIGN KEY (DateMedieConcurs_Id)
    REFERENCES Date_Medie_Concurs (Id);

-- Reference: Formular_DetaliiAplicare (table: Formular)
ALTER TABLE Formular ADD CONSTRAINT Formular_DetaliiAplicare
    FOREIGN KEY (DetaliiAplicare_Id)
    REFERENCES Detalii_Aplicare (Id);



-- Reference: Intrebare_Categorie (table: Intrebare)
ALTER TABLE Intrebare ADD CONSTRAINT Intrebare_Categorie
    FOREIGN KEY (Categorie_Id)
    REFERENCES Categorie (Id);

-- Reference: Intrebare_User (table: Intrebare)
ALTER TABLE Intrebare ADD CONSTRAINT Intrebare_User
    FOREIGN KEY (User_Id)
    REFERENCES Useri (Id);




-- Reference: Olimpiada_DateMedieConcurs (table: Olimpiada)
ALTER TABLE Olimpiada ADD CONSTRAINT Olimpiada_DateMedieConcurs
    FOREIGN KEY (DateMedieConcurs_Id)
    REFERENCES Date_Medie_Concurs (Id);



-- Reference: Raspuns_Intrebare (table: Raspuns)
ALTER TABLE Raspuns ADD CONSTRAINT Raspuns_Intrebare
    FOREIGN KEY (Intrebare_Id)
    REFERENCES Intrebare (Id);

-- Reference: Raspuns_User (table: Raspuns)
ALTER TABLE Raspuns ADD CONSTRAINT Raspuns_User
    FOREIGN KEY (User_Id)
    REFERENCES Useri(Id);
-- End of file.

ALTER TABLE Pregatiri_Anterioare ADD CONSTRAINT Pregatiri_Anterioare_Formular
    FOREIGN KEY (Formular_Id)
    REFERENCES Formular(Id);
    
ALTER TABLE Pregatiri_Anterioare ADD CONSTRAINT Pregatiri_Anterioare_Inst
    FOREIGN KEY (Institutie_Id)
    REFERENCES Institutie(Id);

alter table formular
  modify (data_ultimei_modificari date null, data_compozitiei date null, validat varchar2(1 byte) null,
  persoana_ultima_modificare varchar2(50 byte) null, last_update_date timestamp(6) null, 
  serie_chitanta varchar2(20 byte) null, suma_achitata number(6, 2) null);