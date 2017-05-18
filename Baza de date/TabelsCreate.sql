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
    Nota_Matematica float(5)  NOT NULL,
    Nota_Proba_Alegere float(5)  NOT NULL,
    Nota_Concurs float(5)  NOT NULL,
    CONSTRAINT Date_Medie_Concurs_pk PRIMARY KEY (Id)
) ;

Drop table Date_Personale_Candidat;
-- Table: Date_Personale_Candidat
CREATE TABLE Date_Personale_Candidat (
    Id integer  NOT NULL,
    CNP varchar2(13)  NOT NULL,
    Nume varchar2(50)  NOT NULL,
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
    Optional varchar2(50)  NOT NULL,
    Cazare_Pe_Timpul_Studiilor char(1)  NOT NULL,
    CONSTRAINT Detalii_Aplicare_pk PRIMARY KEY (Id)
) ;

Drop table Domiciliu;
-- Table: Domiciliu
CREATE TABLE Domiciliu (
    Id integer  NOT NULL,
    Numar integer  NULL,
    Bloc varchar2(6)  NOT NULL,
    Etaj varchar2(6)  NOT NULL,
    Scara varchar2(6) NOT NULL,
    Apartament integer  NOT NULL,
    Cod_Postal number(6,0)  NOT NULL,
    Locatie_Id integer  NOT NULL,
    CONSTRAINT Domiciliu_pk PRIMARY KEY (Id)
) ;

Create table Formular;
-- Table: Formular
CREATE TABLE Formular (
    Id integer  NOT NULL,
    DetaliiAplicare_Id integer  NOT NULL,
    DateMedieConcurs_Id integer  NOT NULL,
    Pregatiri_Anterioare_Id integer  NOT NULL,
    Date_Personale_Candidat_Id integer  NOT NULL,
    Data_Ultimei_Modificari date  NOT NULL,
    Data_Compozitiei date  NOT NULL,
    Validat varchar2(1)  NOT NULL,
    Persoana_Ultima_Modificare varchar2(50)  NOT NULL,
    Creation_Date timestamp  NOT NULL,
    Last_Update_Date timestamp  NOT NULL,
    CONSTRAINT Formular_pk PRIMARY KEY (Id)
) ;

Drop table Institutie;
-- Table: Institutie
CREATE TABLE Institutie (
    Id integer  NOT NULL,
    Data_Inceput date  NOT NULL,
    Data_Sfarsit date  NOT NULL,
    Filiera varchar2(40)  NOT NULL,
    Profil varchar2(10)  NOT NULL,
    Specializare varchar2(55)  NOT NULL,
    An_Absolvire integer  NOT NULL,
    Locatie_Id integer  NOT NULL,
    Pregatiri_Anterioare_Id integer  NOT NULL,
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

Drop table Liceu;
-- Table: Liceu
CREATE TABLE Liceu (
    Id integer  NOT NULL,
    Nume varchar2(100)  NOT NULL,
    Data_Inceput date  NOT NULL,
    Data_Sfarsit date  NOT NULL,
    Profil varchar2(20)  NOT NULL,
    Diploma_Serie char(1)  NOT NULL,
    Diploma_Nr integer  NOT NULL,
    Diploma_Emisa varchar2(30)  NOT NULL,
    Diploma_Data_Eliberarii date  NOT NULL,
    Locatie_Id integer  NOT NULL,
    CONSTRAINT Liceu_pk PRIMARY KEY (Id)
) ;

Drop table Locatie;
-- Table: Locatie
CREATE TABLE Locatie (
    Id integer  NOT NULL,
    Tara varchar2(200)  NOT NULL,
    Judet varchar2(60)  NOT NULL,
    Localitate varchar2(100)  NOT NULL,
    Strada varchar2(30)  NOT NULL,
    CONSTRAINT Locatie_pk PRIMARY KEY (Id)
) ;

Drop table Locul_Nasterii;
-- Table: Locul_Nasterii
CREATE TABLE Locul_Nasterii (
    Id integer  NOT NULL,
    Locatie_Id integer  NOT NULL,
    CONSTRAINT Locul_Nasterii_pk PRIMARY KEY (Id)
) ;

Drop table Olimpiada;
-- Table: Olimpiada
CREATE TABLE Olimpiada (
    Id integer  NOT NULL,
    Participare_Nationala char(1)  NOT NULL,
    Disciplina varchar2(15)  NOT NULL,
    An integer  NOT NULL,
    Premiul_Obtinut varchar2(20)  NOT NULL,
    DateMedieConcurs_Id integer  NOT NULL,
    CONSTRAINT Olimpiada_pk PRIMARY KEY (Id)
) ;

Drop table Pregatiri_Anterioare;
-- Table: Pregatiri_Anterioare
CREATE TABLE Pregatiri_Anterioare (
    Id integer  NOT NULL,
    Liceu_Id integer  NOT NULL,
    CONSTRAINT Pregatiri_Anterioare_pk PRIMARY KEY (Id)
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

Drop table "User";
-- Table: User
CREATE TABLE "User" (
    Id integer  NOT NULL,
    Username varchar2(50)  NOT NULL,
    Parola varchar2(50)  NOT NULL,
    Email varchar2(50)  NOT NULL,
    Nume varchar2(50)  NOT NULL,
    Prenume varchar2(50)  NOT NULL,
    CONSTRAINT User_pk PRIMARY KEY (Id)
) ;

DROP TABLE Useri;
-- Table: Useri
CREATE TABLE Useri(ID INTEGER, username VARCHAR2(50), parola VARCHAR2(50), email VARCHAR2(50), nume VARCHAR2(50), prenume VARCHAR2(50));

-- foreign keys
-- Reference: Candidat_Domiciliu (table: Date_Personale_Candidat)
ALTER TABLE Date_Personale_Candidat ADD CONSTRAINT Candidat_Domiciliu
    FOREIGN KEY (Domiciliu_Id)
    REFERENCES Domiciliu (Id);

-- Reference: Candidat_Locul_Nasterii (table: Date_Personale_Candidat)
ALTER TABLE Date_Personale_Candidat ADD CONSTRAINT Candidat_Locul_Nasterii
    FOREIGN KEY (Locul_Nasterii_Id)
    REFERENCES Locul_Nasterii (Id);

-- Reference: Categorie_Categorie (table: Categorie)
ALTER TABLE Categorie ADD CONSTRAINT Categorie_Categorie
    FOREIGN KEY (Categorie_Id)
    REFERENCES Categorie (Id);

-- Reference: Domiciliu_Locatie (table: Domiciliu)
ALTER TABLE Domiciliu ADD CONSTRAINT Domiciliu_Locatie
    FOREIGN KEY (Locatie_Id)
    REFERENCES Locatie (Id);

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

-- Reference: Formular_Pregatiri_Anterioare (table: Formular)
ALTER TABLE Formular ADD CONSTRAINT Formular_Pregatiri_Anterioare
    FOREIGN KEY (Pregatiri_Anterioare_Id)
    REFERENCES Pregatiri_Anterioare (Id);

-- Reference: Institutie_Locatie (table: Institutie)
ALTER TABLE Institutie ADD CONSTRAINT Institutie_Locatie
    FOREIGN KEY (Locatie_Id)
    REFERENCES Locatie (Id);

-- Reference: Institutie_Preg_Anterioare (table: Institutie)
ALTER TABLE Institutie ADD CONSTRAINT Institutie_Preg_Anterioare
    FOREIGN KEY (Pregatiri_Anterioare_Id)
    REFERENCES Pregatiri_Anterioare (Id);

-- Reference: Intrebare_Categorie (table: Intrebare)
ALTER TABLE Intrebare ADD CONSTRAINT Intrebare_Categorie
    FOREIGN KEY (Categorie_Id)
    REFERENCES Categorie (Id);

-- Reference: Intrebare_User (table: Intrebare)
ALTER TABLE Intrebare ADD CONSTRAINT Intrebare_User
    FOREIGN KEY (User_Id)
    REFERENCES "User" (Id);

-- Reference: Liceu_Locatie (table: Liceu)
ALTER TABLE Liceu ADD CONSTRAINT Liceu_Locatie
    FOREIGN KEY (Locatie_Id)
    REFERENCES Locatie (Id);

-- Reference: Locul_Nasterii_Locatie (table: Locul_Nasterii)
ALTER TABLE Locul_Nasterii ADD CONSTRAINT Locul_Nasterii_Locatie
    FOREIGN KEY (Locatie_Id)
    REFERENCES Locatie (Id);

-- Reference: Olimpiada_DateMedieConcurs (table: Olimpiada)
ALTER TABLE Olimpiada ADD CONSTRAINT Olimpiada_DateMedieConcurs
    FOREIGN KEY (DateMedieConcurs_Id)
    REFERENCES Date_Medie_Concurs (Id);

-- Reference: Pregatiri_Anterioare_Liceu (table: Pregatiri_Anterioare)
ALTER TABLE Pregatiri_Anterioare ADD CONSTRAINT Pregatiri_Anterioare_Liceu
    FOREIGN KEY (Liceu_Id)
    REFERENCES Liceu (Id);

-- Reference: Raspuns_Intrebare (table: Raspuns)
ALTER TABLE Raspuns ADD CONSTRAINT Raspuns_Intrebare
    FOREIGN KEY (Intrebare_Id)
    REFERENCES Intrebare (Id);

-- Reference: Raspuns_User (table: Raspuns)
ALTER TABLE Raspuns ADD CONSTRAINT Raspuns_User
    FOREIGN KEY (User_Id)
    REFERENCES "User" (Id);

-- End of file.

