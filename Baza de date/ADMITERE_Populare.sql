INSERT INTO date_medie_concurs values(1,9.40,9.10,9.90,8.50);
INSERT INTO date_medie_concurs values(2,9.40,9.35,8.95,9.60);
INSERT INTO date_medie_concurs values(3,8.40,9.10,7.95,7.80);
INSERT INTO date_medie_concurs values(4,7.40,8.10,8.95,9.60);
INSERT INTO date_medie_concurs values(5,6.40,7.10,9.70,8.80);
INSERT INTO date_medie_concurs values(6,8.40,9.50,9.50,8.90);
INSERT INTO date_medie_concurs values(7,7.40,7.30,8.95,9.50);
INSERT INTO date_medie_concurs values(8,9.40,8.10,9.50,8.50);
INSERT INTO date_medie_concurs values(9,6.40,7.90,9.10,7.50);
INSERT INTO date_medie_concurs values(10,8.40,9.90,9.95,9.50);

INSERT INTO OLIMPIADA VALUES(1,'1','INFORMATICA',2017,1,1);
INSERT INTO OLIMPIADA VALUES(2,'1','INFORMATICA',2016,10,2);
INSERT INTO OLIMPIADA VALUES(3,'1','INFORMATICA',2015,7,3);
INSERT INTO OLIMPIADA VALUES(4,'1','INFORMATICA',2017,8,4);
INSERT INTO OLIMPIADA VALUES(5,'1','INFORMATICA',2015,20,5);
INSERT INTO OLIMPIADA VALUES(6,'1','INFORMATICA',2014,21,6);
INSERT INTO OLIMPIADA VALUES(7,'1','INFORMATICA',2017,31,7);
INSERT INTO OLIMPIADA VALUES(8,'1','INFORMATICA',2016,69,8);
INSERT INTO OLIMPIADA VALUES(9,'1','INFORMATICA',2017,4,9);
INSERT INTO OLIMPIADA VALUES(10,'1','INFORMATICA',2017,5,10);

---XXXXXXXXXXXXXXXXXXXXX
Insert into DETALII_APLICARE values(1,'Examen scris','Informatica','Romana','1','Programare Competitiva','1');
Insert into DETALII_APLICARE values(2,'Examen scris','Informatica','Engleza','0','Programare Competitiva','1');
Insert into DETALII_APLICARE values(3,'Examen scris','Informatica','Romana','1','Programare Competitiva','1');
Insert into DETALII_APLICARE values(4,'Examen scris','Informatica','Engleza','0','Programare Competitiva','1');
Insert into DETALII_APLICARE values(5,'Examen scris','Informatica','Romana','1','Programare Competitiva','1');
Insert into DETALII_APLICARE values(6,'Examen scris','Informatica','Engleza','0','Programare Competitiva','1');
Insert into DETALII_APLICARE values(7,'Examen scris','Informatica','Romana','1','Programare Competitiva','1');
Insert into DETALII_APLICARE values(8,'Examen scris','Informatica','Engleza','0','Programare Competitiva','1');
Insert into DETALII_APLICARE values(9,'Examen scris','Informatica','Romana','0','Programare Competitiva','1');
Insert into DETALII_APLICARE values(10,'Examen scris','Informatica','Engleza','1','Programare Competitiva','1');

insert into locatie values(1,'Romania','Vaslui','Vaslui','St. Traian');
insert into locatie values(2,'Romania','Dorohoi','Dorohoi','St. Independentei');
insert into locatie values(3,'Romania','Iasi','Iasi','St. Lt.Stoicescu');
insert into locatie values(4,'Romania','Vaslui','Vaslui','Strada St. cel Mare');
insert into locatie values(5,'Romania','Iasi','Iasi','Strada St. cel Mare');
insert into locatie values(6,'Romania','Bucuresti','Bucuresti','St. Independentei');
insert into locatie values(7,'Romania','Vaslui','Vaslui','St. Traian');
insert into locatie values(8,'Romania','Vaslui','Vaslui','St. Lt.Stoicescu');
insert into locatie values(9,'Romania','Galati','Galati','Strada St. cel Mare');
insert into locatie values(10,'Romania','Vaslui','Vaslui','St. Independentei');
insert into locatie values(13,'Romania','Vaslui','Vaslui','Bulevardul Traian 1');
insert into locatie values(12,'Romania','Vaslui','Vaslui','Strada Berzelor 15');
insert into locatie values(11,'Romania','Vaslui','Vaslui','Strada Hu?ului 48');
insert into locatie values(14,'Romania','Vaslui','Vaslui','Strada Nicolae B?lcescu 11');

insert into LOCUL_NASTERII values(1,1);
insert into LOCUL_NASTERII values(2,2);
insert into LOCUL_NASTERII values(3,3);
insert into LOCUL_NASTERII values(4,4);
insert into LOCUL_NASTERII values(5,5);
insert into LOCUL_NASTERII values(6,6);
insert into LOCUL_NASTERII values(7,7);
insert into LOCUL_NASTERII values(8,8);
insert into LOCUL_NASTERII values(9,9);
insert into LOCUL_NASTERII values(10,10);

insert into domiciliu values(1,1,'bl.3','1','8',715200,1);
insert into domiciliu values(2,1,'bl.5','2','16',715201,2);
insert into domiciliu values(3,1,'bl.6','3','18',715202,3);
insert into domiciliu values(4,1,'bl.8','4','28',715202,4);
insert into domiciliu values(5,1,'bl.1','5','12',715203,5);
insert into domiciliu values(6,1,'bl.2','6','13',715204,6);
insert into domiciliu values(7,1,'bl.10','7','14',715205,7);
insert into domiciliu values(8,1,'bl.7','6','16',715202,8);
insert into domiciliu values(9,1,'bl.4','4','18',715201,9);
insert into domiciliu values(10,1,'bl.3','2','20',715202,10);



Insert into DATE_PERSONALE_CANDIDAT values(1,'1960303071375','Atodiresei','Alin','M','M','necasatorit','romana','Viorica','Mihai',
                                          '0756636643','alin.atod@gmail.com', to_Date('03/03/1996','dd/mm/yyyy'),'romana','romana','Romana',
                                          'CI','XT','692582','SPCLEP RESITA',to_date('03/04/2015','dd/mm/yyyy'));
Insert into DATE_PERSONALE_CANDIDAT values(2,'1961220071375','Manolache','irinel','M','M','necasatorit','romana','Liliana','Mihai',
                                          '0756636643','manolache.irinel@gmail.com', to_Date('20/12/1996','dd/mm/yyyy'),'romana','romana','Romana',
                                          'CI','XT','692582','SPCLEP Bucuresti',to_date('03/04/2015','dd/mm/yyyy'));
Insert into DATE_PERSONALE_CANDIDAT values(3,'1960304071375','Marcu','Alin','M','M','necasatorit','romana','Viorica','Mihai',
                                          '0756636643','alin.marcu@gmail.com', to_Date('03/03/1996','dd/mm/yyyy'),'romana','romana','Romana',
                                          'CI','XT','692582','SPCLEP Iasi',to_date('03/04/2015','dd/mm/yyyy'));
Insert into DATE_PERSONALE_CANDIDAT values(4,'1960403071375','Radu','Alin','M','M','necasatorit','romana','Viorica','Mihai',
                                          '0756636643','alin.rd@gmail.com', to_Date('03/04/1996','dd/mm/yyyy'),'romana','romana','Romana',
                                          'CI','XT','692582','SPCLEP Vaslui',to_date('03/04/2015','dd/mm/yyyy'));
Insert into DATE_PERSONALE_CANDIDAT values(5,'1960503071375','Verciuc','Sergiu','M','M','necasatorit','romana','Viorica','Mihai',
                                          '0756636643','sergiu.ver@gmail.com', to_Date('03/05/1996','dd/mm/yyyy'),'romana','romana','Romana',
                                          'CI','XT','692582','SPCLEP RESITA',to_date('03/04/2015','dd/mm/yyyy'));
Insert into DATE_PERSONALE_CANDIDAT values(6,'1960603071375','Like','Alin','M','M','necasatorit','romana','Viorica','Mihai',
                                          '0756636643','alin.like@gmail.com', to_Date('03/06/1996','dd/mm/yyyy'),'romana','romana','Romana',
                                          'CI','XT','692582','SPCLEP RESITA',to_date('03/04/2015','dd/mm/yyyy'));
Insert into DATE_PERSONALE_CANDIDAT values(7,'1960703071375','Rotaru','Alin','M','M','necasatorit','romana','Viorica','Mihai',
                                          '0756636643','alin.rot@gmail.com', to_Date('03/07/1996','dd/mm/yyyy'),'romana','romana','Romana',
                                          'CI','XT','692582','SPCLEP RESITA',to_date('03/04/2015','dd/mm/yyyy'));
Insert into DATE_PERSONALE_CANDIDAT values(8,'1960803071375','Gerasim','Cosmin','M','M','necasatorit','romana','Viorica','Mihai',
                                          '0756636643','cosmin.ger@gmail.com', to_Date('03/08/1996','dd/mm/yyyy'),'romana','romana','Romana',
                                          'CI','XT','692582','SPCLEP RESITA',to_date('03/04/2015','dd/mm/yyyy'));
Insert into DATE_PERSONALE_CANDIDAT values(9,'1960903071375','Grama','Dragos','M','M','necasatorit','romana','Viorica','Mihai',
                                          '0756636643','dragos.gr@gmail.com', to_Date('03/09/1996','dd/mm/yyyy'),'romana','romana','Romana',
                                          'CI','XT','692582','SPCLEP RESITA',to_date('03/04/2015','dd/mm/yyyy'));
Insert into DATE_PERSONALE_CANDIDAT values(10,'1960303071375','Alex','Lupu','M','M','necasatorit','romana','Viorica','Mihai',
                                          '0756636643','alex.lupu@gmail.com', to_Date('03/03/1996','dd/mm/yyyy'),'romana','romana','Romana',
                                          'CI','XT','692582','SPCLEP RESITA',to_date('03/04/2015','dd/mm/yyyy'));

insert into liceu values(1,'Liceul teoretic Mihail Kogalniceanu',to_date('15/08/2012','dd/mm/yyyy'),to_date('15/07/2016','dd/mm/yyyy'),
                          'teoretic','1',1,'Diplima de absolvire',to_date('15/07/2016','dd/mm/yyyy'),1);
insert into liceu values(2,'Liceul teoretic Emil Racovita',to_date('15/08/2012','dd/mm/yyyy'),to_date('15/07/2016','dd/mm/yyyy'),
                          'teoretic','1',1,'Diplima de absolvire',to_date('15/07/2016','dd/mm/yyyy'),11);
insert into liceu values(3,'Liceul cu Program Sportiv',to_date('15/08/2012','dd/mm/yyyy'),to_date('15/07/2016','dd/mm/yyyy'),
                          'teoretic','1',1,'Diplima de absolvire',to_date('15/07/2016','dd/mm/yyyy'),12);
insert into liceu values(4,'Liceul economic Anghel Rugina',to_date('15/08/2012','dd/mm/yyyy'),to_date('15/07/2016','dd/mm/yyyy'),
                          'teoretic','1',1,'Diplima de absolvire',to_date('15/07/2016','dd/mm/yyyy'),13);
insert into liceu values(5,'Colegiul National Rosca Codreanu',to_date('15/08/2012','dd/mm/yyyy'),to_date('15/07/2016','dd/mm/yyyy'),
                          'teoretic','1',1,'Diplima de absolvire',to_date('15/07/2016','dd/mm/yyyy'),14);
 
 
insert into PREGATIRI_ANTERIOARE values(1,1);
insert into PREGATIRI_ANTERIOARE values(2,2);
insert into PREGATIRI_ANTERIOARE values(3,3);
insert into PREGATIRI_ANTERIOARE values(4,4);
insert into PREGATIRI_ANTERIOARE values(5,5); 
                           
insert into institutie values(1,to_date('15/08/2012','dd/mm/yyyy'),to_date('15/07/2016','dd/mm/yyyy'),'Vaslui','teoretic','mate-info',2017,1,1);
insert into institutie values(2,to_date('15/08/2012','dd/mm/yyyy'),to_date('15/07/2016','dd/mm/yyyy'),'Vaslui','teoretic','mate-info',2017,11,2);
insert into institutie values(3,to_date('15/08/2012','dd/mm/yyyy'),to_date('15/07/2016','dd/mm/yyyy'),'Vaslui','teoretic','mate-info',2017,12,3);
insert into institutie values(4,to_date('15/08/2012','dd/mm/yyyy'),to_date('15/07/2016','dd/mm/yyyy'),'Vaslui','teoretic','mate-info',2017,13,4);
insert into institutie values(5,to_date('15/08/2012','dd/mm/yyyy'),to_date('15/07/2016','dd/mm/yyyy'),'Vaslui','teoretic','mate-info',2017,14,5);



Insert into formular values(1,1,1,1,1,to_date('15/07/2016','dd/mm/yyyy'),to_date('15/07/2016','dd/mm/yyyy'),'1','15/07/2016',
                            TO_TIMESTAMP ('15-Aug-02 14:10:10.123000', 'DD-Mon-RR HH24:MI:SS.FF'),
                            TO_TIMESTAMP ('15-Aug-02 14:10:10.123000', 'DD-Mon-RR HH24:MI:SS.FF'));
Insert into formular values(2,2,2,2,2,to_date('15/07/2016','dd/mm/yyyy'),to_date('15/07/2016','dd/mm/yyyy'),'1','15/07/2016',
                            TO_TIMESTAMP ('15-Aug-02 14:10:10.123000', 'DD-Mon-RR HH24:MI:SS.FF'),
                            TO_TIMESTAMP ('15-Aug-02 14:10:10.123000', 'DD-Mon-RR HH24:MI:SS.FF'));
Insert into formular values(3,3,3,3,3,to_date('15/07/2016','dd/mm/yyyy'),to_date('15/07/2016','dd/mm/yyyy'),'1','15/07/2016',
                            TO_TIMESTAMP ('15-Aug-02 14:10:10.123000', 'DD-Mon-RR HH24:MI:SS.FF'),
                            TO_TIMESTAMP ('15-Aug-02 14:10:10.123000', 'DD-Mon-RR HH24:MI:SS.FF'));
Insert into formular values(4,4,4,4,4,to_date('15/07/2016','dd/mm/yyyy'),to_date('15/07/2016','dd/mm/yyyy'),'1','15/07/2016',
                            TO_TIMESTAMP ('15-Aug-02 14:10:10.123000', 'DD-Mon-RR HH24:MI:SS.FF'),
                            TO_TIMESTAMP ('15-Aug-02 14:10:10.123000', 'DD-Mon-RR HH24:MI:SS.FF'));
Insert into formular values(5,5,5,5,5,to_date('15/07/2016','dd/mm/yyyy'),to_date('15/07/2016','dd/mm/yyyy'),'1','15/07/2016',
                            TO_TIMESTAMP ('15-Aug-02 14:10:10.123000', 'DD-Mon-RR HH24:MI:SS.FF'),
                            TO_TIMESTAMP ('15-Aug-02 14:10:10.123000', 'DD-Mon-RR HH24:MI:SS.FF'));


Insert into Useri values(1, 'alin.atodiresei', 'alabala', 'alin.atod@gmail.com', 'Atodiresei', 'Alin');

