alter table date_personale_candidat
    modify DOMICILIU_STABIL varchar2(6 byte)  null;
    
alter table detalii_aplicare
    modify preferinta_limba_studiu varchar2(20 byte) null;
    
alter table detalii_aplicare
    modify stare_sociala_speciala CHAR(1 BYTE) null;
    
alter table detalii_aplicare
    modify nume_stare_sociala VARCHAR2(30 BYTE) null;
    
alter table detalii_aplicare
    modify echivalare_diploma_olimpiada CHAR(1 BYTE) null;

alter table detalii_aplicare
    modify cazare_pe_timpul_studiilor CHAR(1 BYTE) null;
    
alter table detalii_aplicare
    modify cazare_pe_timpul_examenului CHAR(1 BYTE) null;

