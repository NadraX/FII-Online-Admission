--Secventele au fost create deoarece, la o inserare in 2-3-4-etc tabele (cand candidatul apasa pe "Trimite formularul"), id-ul trebuie sa fie la fel in toate tabelele in care se vor insera datele.

drop sequence dept_seq;
drop sequence dept_seq1;
drop sequence dept_seq2;
drop sequence dept_seq3;
drop sequence dept_seq4;
drop sequence dept_seq5;
drop sequence dept_seq6;
drop sequence dept_seq7;
drop sequence dept_seq8;
drop sequence dept_seq9;

CREATE SEQUENCE dept_seq1
  START WITH 1
  INCREMENT BY 1;
  
CREATE SEQUENCE dept_seq2
  START WITH 1
  INCREMENT BY 1;
  
CREATE SEQUENCE dept_seq3
  START WITH 1
  INCREMENT BY 1;
    
CREATE SEQUENCE dept_seq4
  START WITH 1
  INCREMENT BY 1;
  
CREATE SEQUENCE dept_seq5
  START WITH 1
  INCREMENT BY 1;

CREATE SEQUENCE dept_seq6
  START WITH 1
  INCREMENT BY 1;
  
CREATE SEQUENCE dept_seq7
  START WITH 1
  INCREMENT BY 1;
  
CREATE SEQUENCE dept_seq8
  START WITH 1
  INCREMENT BY 1;
  
CREATE SEQUENCE dept_seq9
  START WITH 1
  INCREMENT BY 1;
  

drop table locatie cascade constraints;
drop table domiciliu cascade constraints;
drop table locul_nasterii cascade constraints;

alter table liceu
    drop column locatie_id;

alter table institutie
    drop column locatie_id;
    
alter table date_personale_candidat
    drop column domiciliu_id;
    
alter table date_personale_candidat
    drop column locul_nasterii_id;
    


alter table date_personale_candidat
    add tara varchar2(200 byte);

alter table date_personale_candidat
    add judet varchar2(60 byte);
    

alter table date_personale_candidat
    add localitate varchar2(100 byte);
    

alter table date_personale_candidat
    add strada varchar2(30 byte);
    
    
    
alter table date_personale_candidat
    add numar_domiciliu number(38,0);
    
alter table date_personale_candidat
    add bloc_domiciliu varchar2(6 byte);
    
alter table date_personale_candidat
    add etaj_domiciliu varchar2(6 byte);
    
alter table date_personale_candidat
    add apartament_domiciliu number(38, 0);
    
alter table date_personale_candidat
    add cod_postal_domiciliu number(6, 0);
    
    
    
alter table institutie
    add tara varchar2(200 byte);

alter table institutie
    add judet varchar2(60 byte);
    

alter table institutie
    add localitate varchar2(100 byte);
    
alter table liceu
    add (tara varchar2(200 byte) not null, judet varchar2(60) not null, localitate varchar2(100 byte) not null) ;

alter table date_personale_candidat
    add (scara varchar2(10 byte));
    
alter table liceu
    drop column diploma_serie;
    
    alter table liceu
    drop column diploma_nr;
    
    alter table liceu
    drop column diploma_emisa;
    
    alter table liceu
    drop column diploma_data_eliberarii;
    
alter table date_personale_candidat
    modify (cod_postal_domiciliu number(6, 0) not null, tara varchar2(200 byte) not null, judet varchar2(60 byte) not null, localitate varchar2(100 byte) not null);
    
alter table liceu 
    modify (data_inceput date null, data_sfarsit date null, profil null);
    
alter table date_medie_concurs
    modify (nota_matematica float null, nota_concurs float null);
  
alter table formular
    modify (pregatiri_anterioare_id number(38,0) null ,data_ultimei_modificari date null, data_compozitiei date null, validat varchar2(1 byte) null, persoana_ultima_modificare varchar2(50 byte) null, last_update_date timestamp(6) null);
    
alter table olimpiada
    modify (participare_nationala char(1 byte) null, disciplina varchar2(15 byte) null, an number(38, 0) null, premiul_obtinut varchar2(20 byte) null, datemedieconcurs_id number(38,0) null);
    
alter table detalii_aplicare
    modify (proba_concurs varchar2(30 byte) null, tip_frecventa char(1 byte) null, optional varchar2(50 byte) null, cazare_pe_timpul_studiilor char(1 byte) null);
