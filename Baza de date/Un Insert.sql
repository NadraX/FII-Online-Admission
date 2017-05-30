Insert into DATE_PERSONALE_CANDIDAT values(1,
                                          '1960303071375',
                                          'Atodiresei',
                                          'Atodiresei',
                                          'Alin',
                                          'M',
                                          'M',
                                          'necasatorit',
                                          'romana',
                                          'Viorica',
                                          'Mihai',
                                          '0756636643',
                                          'alin.atod@gmail.com', 
                                          to_Date('03/03/1996','dd/mm/yyyy'),
                                          'romana',
                                          'romana',
                                          'Romana',
                                          'CI',
                                          'XT',
                                          '692582',
                                          'SPCLEP RESITA',
                                          to_date('03/04/2015','dd/mm/yyyy'),
                                          'Romania',
                                          'Vaslui',
                                          'Vaslui',
                                          'Urban',
                                          'St. Traian',
                                          1,
                                          'bl.3',
                                          '1',
                                          'A',
                                          '8',
                                          715200);



  insert into detalii_aplicare values(1,'licenta','Info','Romana','1','Sport','1','Orfan un parinte','1','Fiu cadru didactic','1','1','1');
  
  insert into date_medie_concurs values(1,9,10,5,10);
  
  insert into preferinte_master values (1,'pref1','pref2','pref3','pref4','pref5','pref6','pref7','pref8','pref9','pref10','pref11');

  insert into institutie values (1,'liceu',sysdate,sysdate,null,'real','mate-info',2010,'Romania','Vaslui','Vaslui','Mihail Kogalniceanu');
  insert into pregatiri_anterioare values(1,1);
select * from formular;
   insert into formular values(1,1,1,1,1,Sysdate,sysdate,1,'admin',sysdate,sysdate,123456,250);