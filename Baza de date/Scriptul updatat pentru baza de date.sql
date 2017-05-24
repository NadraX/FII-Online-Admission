CREATE SEQUENCE dept_seq
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
    
alter table olimpiada
    modify (participare_nationala char(1 byte) null, disciplina varchar2(15 byte) null, an number(38, 0) null, premiul_obtinut varchar2(20 byte) null, datemedieconcurs_id number(38,0) null);
