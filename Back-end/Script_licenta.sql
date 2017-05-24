--Secventele au fost create deoarece, la o inserare in 2-3-4-etc tabele (cand candidatul apasa pe "Trimite formularul"), id-ul trebuie sa fie la fel in toate tabelele in care se vor insera datele.

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
  

alter table formular
    modify (data_ultimei_modificari date null, data_compozitiei date null, validat varchar2(1 byte) null, persoana_ultima_modificare varchar2(50 byte) null, last_update_date timestamp(6) null);
    
alter table detalii_aplicare
    modify (proba_concurs varchar2(30 byte) null,tip_frecventa char(1 byte) null, cazare_pe_timpul_studiilor char(1 byte) null);