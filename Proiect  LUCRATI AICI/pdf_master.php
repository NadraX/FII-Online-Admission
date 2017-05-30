
<?php
header('Content-type: text/plain; charset=utf-8');
 if(isset($_POST['Submit'])) {
require('FPDF/fpdf.php');
class PDF extends FPDF
{

function Header()
{
    $data = '15/15/2017';
    $this->Ln(-4);
    $this->Image('imagini/fii.png',12,12,20);
    $this->SetFont('Arial','B',9);
    $this->Cell(50);
    $this->Cell(30,20,'UNIVERSITATEA "ALEXANDRU IOAN CUZA" DIN IASI',0,0,'C');
    $this->Ln(5);
    $this->Cell(34.5);
    $this->Cell(30,20,'FACULTATEA DE INFORMATICA',0,0,'C');
    $this->Ln(10);
	$this->Cell(65);
	$this->SetFont('Arial','B',12);
	$this->Cell(50, 20, 'FISA DE INSCRIERE - ADMITERE SESIUNEA', 0, 0, 'C');
	$this->Cell(27);
	$this->SetFont('Arial','BU',12);
	$this->Cell(10, 20, 'IULIE 2017', 0, 0, 'C');
	
	$this->Ln(5);
	$this->Cell(76);
	$this->SetFont('Arial','B',10);
	$this->Cell(50, 20, 'Studii universitare de MASTER - forma de invatamant:', 0, 0, 'C');
	
	$this->Ln(5);
	$this->Cell(76.5);
	$this->SetFont('Arial','I',9);
	$this->Cell(50, 20, 'invatamant cu frecventa; invatamant cu frecventa redusa', 0, 0, 'C');
	
	$this->Ln(10);
	$this->Cell(71);
	$this->SetFont('Arial','B',10);
	$this->Cell(10, 20, 'Dosar nr. ', 0, 0, 'C');
	
	$this->Cell(7.5);
	$this->SetFont('Arial','BU',10);
	$this->Cell(5, 20, '21012', 0, 0, 'C');
	
	$this->Cell(7.5);
	$this->SetFont('Arial','B',10);
	$this->Cell(5, 20, 'Data', 0, 0, 'C');
	
	$this->Cell(11);
	$this->SetFont('Arial','BU',10);
	$this->Cell(5, 20, '16/16/2016', 0, 0, 'C');
	
	$this->Ln(16);
	$this->Cell(40);
	$x = $this->GetX();
	$y = $this->GetY();
	
	$this->SetFont('Arial','B',10);
	$this->MultiCell(40, 10, 'Taxa de inscriere', 1, 1);
	$this->SetXY($x + 40, $y);
	$this->SetFont('Arial','',10);
	$this->MultiCell(40, 10,'Chitanta nr. ',1,  1);
	$this->SetXY($x + 80, $y);	
	$this->MultiCell(40, 10,'Suma ',1,  1);

}

function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

  if(isset($_POST['Submit'])){      
            
            $v_Numele_De_Familie = $_POST["Licenta_Numele_De_Familie"];
        
            $v_Licenta_Initiala_Tata = $_POST["Licenta_Initiala_Tata"];
            
            $v_Licenta_Prenumele = $_POST["Licenta_Prenumele"];
            
            $v_Licenta_Prenume_Mama = $_POST["Licenta_Prenume_Mama"];
        
            $v_Licenta_Prenume_Tata = $_POST["Licenta_Prenume_Tata"];
        
            $v_Licenta_Nationalitate = $_POST["Licenta_Nationalitate"];
        
            $v_Licenta_Etnie = $_POST["Licenta_Etnie"];
        
            $v_Licenta_Limba_Materna = $_POST["Licenta_Limba_Materna"];
        
            $v_Licenta_CNP = $_POST["Licenta_CNP"];
        
            $v_Licenta_Tip_Buletin = $_POST["Licenta_Tip_Buletin"];  // V
        
            $v_Licenta_Serie_Buletin = $_POST["Licenta_Serie_Buletin"];  // V
        
            $v_Licenta_Serie_Buletin = $_POST["Licenta_Numar_Buletin"];  // V
        
            $v_Licenta_Buletin_Eliberat_De = $_POST["Licenta_Buletin_Eliberat_De"];  // V
        
            $v_Licenta_Medie_BAC = $_POST["Licenta_Medie_BAC"];
        
            $v_Licenta_Nota_MI = $_POST["Licenta_Nota_MI"];  // V
        
            $v_Licenta_Strada = $_POST["Licenta_Strada"];  // V
	
	        $v_Licenta_Numar = $_POST["Licenta_Numar"];
	
            $v_Licenta_Bloc = $_POST["Licenta_Bloc"];
	
            $v_Licenta_Scara = $_POST["Licenta_Scara"];
						
			$v_Licenta_Etaj = $_POST["Licenta_Etaj"];
						
			$v_Licenta_Apartament = $_POST["Licenta_Apartament"];
						
			$v_Licenta_Localitate = $_POST["Licenta_Localitate"];  // V
						
			$v_Licenta_Cod_Postal = $_POST["Licenta_Cod_Postal"];
						
			$v_Licenta_Tara = $_POST["Licenta_Tara"];  // V

			$v_Licenta_Judet = $_POST["Licenta_Judet"]; // V
        
            $v_Licenta_Telefon = $_POST["Licenta_Telefon"];  // V
        
        
            $v_Licenta_Email = $_POST["Licenta_Email"];  // V
        
            $v_sex = $_POST["Licenta_Sex"];
      
            $v_stare_civila = $_POST["Licenta_Stare_Civila"]; 
      
            $v_cetatenie = 'romana';
      
            $v_data_nastere_luna = $_POST['Licenta_Nastere_Luna'];
      
            $v_data_nastere_zi = $_POST['Licenta_Nastere_Zi'];
      
            $v_data_nastere_an = $_POST['Licenta_Nastere_An'];
      
            $v_numar_buletin = $_POST['Licenta_Numar_Buletin'];
      
            $v_buletin_zi = $_POST['Licenta_Buletin_Ziua'];
      
            $v_buletin_an = $_POST['Licenta_Buletin_An'];
      
            $v_buletin_luna = $_POST['Licenta_Buletin_Luna'];
      
            $v_Licenta_Serie_Buletin = $_POST['Licenta_Serie_Buletin'];
        
            $v_Licenta_Medie_BAC = $_POST["Licenta_Medie_BAC"];
      
            $v_Licenta_Nota_MI = $_POST["Licenta_Nota_MI"];  // V
        
            $v_Licenta_Obiect_Ales =  $_POST["Licenta_Obiect_Test_Ales"]; 
      
            $v_Licenta_Preferinte =  $_POST["Licenta_Limba_Aleasa"];  
      
            $v_Licenta_Liceu =  $_POST["Licenta_Liceu"]; 
        
	  $pdf = new PDF('P', 'mm', 'A4' );
	  $pdf->AliasNbPages();
	  $pdf->AddPage();
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 72, 210-10, 72);

	  $pdf->Ln(8);
	  $pdf->SetFont('Times','B',11);
	  $pdf->Cell(10);

	  $pdf->Cell(0,0,'I. INFORMATII GENERALE',0,1);
	  $pdf->SetLineWidth(0);
	  $pdf->Line(20, 77, 210-20, 77);

	  $pdf->Ln(3);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','BI',10);

	  $pdf->Cell(10);
	  $pdf->MultiCell(90, 10, '1. Numele de familie la nastere (din certificatul de nastere)', 0, 1);
	  $pdf->SetXY($x + 145, $y);
	  $pdf->MultiCell(45, 10,'2. Initiala (ele) tatalui',0,  1);

	  $pdf->Ln(-3);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(10);
	  $pdf->MultiCell(120, 6, ''.$v_Numele_De_Familie, 1, 1);
	  $pdf->SetXY($x + 150, $y);
	  $pdf->MultiCell(10, 6,''.$v_Licenta_Initiala_Tata,1,  1);

	  $pdf->Ln(3);
	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'3. Numele de familie actual (dupa casatorie, infiere, modificare la cerere conform actului doveditor, daca este cazul)',0,0,'C');
	  
	  $pdf->Ln(7);
	  $pdf->Cell(10);
	  $pdf->SetFont('Times','B',9);
	  $pdf->Cell(170,6,'Bla Bla',1,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(9);
	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'4. Prenumele candidatului',0,0,'L');
	  
	  $pdf->Ln(7);
	  $pdf->Cell(10);
	  $pdf->SetFont('Times','B',9);
	  $pdf->Cell(170,6,'Bla Bla',1,0,'L');
	  
	  $pdf->Ln(10);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(10);
	  
	  $pdf->MultiCell(60, 6, '5. Prenumele parintilor (din certificatul de nastere al candidatului)', 1, 1);
	  $pdf->SetXY($x + 70, $y);
	  $pdf->MultiCell(12, 12,'Mama',1,  1);
	  $pdf->SetXY($x + 82, $y);
	  $pdf->SetFont('Times','B',9);
	  $pdf->MultiCell(43, 12,'Bla Bla',1,  1);
	  $pdf->SetXY($x + 125, $y);
	  $pdf->SetFont('Times','BI',10);
	  $pdf->MultiCell(12, 12,'Tata',1,  1);
	  $pdf->SetXY($x + 137, $y);
	  $pdf->SetFont('Times','B',9);
	  $pdf->MultiCell(43, 12,'bla Bla',1,  1);

	  $pdf->Ln(4);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','BI',10);

	  $pdf->Cell(10);
	  $pdf->MultiCell(13, 6, '6. CNP', 1, 1);
	  $pdf->SetXY($x + 23, $y);
	  $pdf->SetFont('Times','B',9);
	  $pdf->MultiCell(90, 6,'BDADA',1,  1);
	  $pdf->SetXY($x + 150, $y);
	  $pdf->SetFont('Times','BI',10);
	  $pdf->MultiCell(15, 6, '7. Sexul', 1, 1);
	  $pdf->SetXY($x + 165, $y);
	  $pdf->SetFont('Times','B',9);
	  $pdf->MultiCell(15, 6,'M',1,  1);

	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'8. Data nasterii (zz/ll/aaa)',0,0,'C');
	  
	  $pdf->Ln(7);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);
	  $pdf->Cell(50);
	  $pdf->MultiCell(30, 6,''.$v_buletin_zi,1,  1);
	  $pdf->SetXY($x + 80, $y);
	  $pdf->MultiCell(30, 6,''.$v_buletin_luna,1,  1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(30, 6,''.$v_buletin_an,1,  1);
	  
	  $pdf->Ln(6);
	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'9. Locul nasterii',0,0,'C');
	  
	  $pdf->Ln(7);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','BI',10);

	  $pdf->Cell(12);
	  $pdf->MultiCell(55, 6, 'Tara', 1, 1);
	  $pdf->SetXY($x + 67, $y);
	  $pdf->MultiCell(55, 6,'Judetul',1,  1);
	  $pdf->SetXY($x + 122, $y);
	  $pdf->MultiCell(55, 6,'Localitatea',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(12);
	  $pdf->MultiCell(55, 6, 'Tara', 1, 1);
	  $pdf->SetXY($x + 67, $y);
	  $pdf->MultiCell(55, 6,'Judetul',1,  1);
	  $pdf->SetXY($x + 122, $y);
	  $pdf->MultiCell(55, 6,'Localitatea',1,  1);

	  $pdf->Ln(7);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','BI',10);

	  $pdf->Cell(15);
	  $pdf->MultiCell(40, 6, 'Cetatenia (tara)', 1, 1);
	  $pdf->SetXY($x + 55, $y);
	  $pdf->MultiCell(40, 6,'Nationalitatea',1,  1);
	  $pdf->SetXY($x + 95, $y);
	  $pdf->MultiCell(40, 6,'Etnia',1,  1);
	  $pdf->SetXY($x + 135, $y);
	  $pdf->MultiCell(40, 6,'Limba materna',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(15);
	  $pdf->MultiCell(40, 6, 'Cetatenia (tara)', 1, 1);
	  $pdf->SetXY($x + 55, $y);
	  $pdf->MultiCell(40, 6,'Nationalitatea',1,  1);
	  $pdf->SetXY($x + 95, $y);
	  $pdf->MultiCell(40, 6,'Etnia',1,  1);
	  $pdf->SetXY($x + 135, $y);
	  $pdf->MultiCell(40, 6,'Limba materna',1,  1);
	  
	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'10. Starea civila',0,0,'C');
	  
	  $pdf->Ln(7);
	  $pdf->Cell(69.5);
	  $pdf->SetFont('Times','B',9);
	  $pdf->Cell(50,6,'Bla Bla',1,0,'C');
	  
	  $pdf->Ln(7);
	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'11. Actul de identitate/Documentul de calatorie',0,0,'C'); 
	  
	  $pdf->Ln(7);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();
	  $pdf->SetFont('Times','BI',11);

	  $pdf->Cell(12);
	  $pdf->MultiCell(55, 6, 'Tip', 1, 1);
	  $pdf->SetXY($x + 67, $y);
	  $pdf->MultiCell(55, 6,'Seria',1,  1);
	  $pdf->SetXY($x + 122, $y);
	  $pdf->MultiCell(55, 6,'Numarul',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(12);
	  $pdf->MultiCell(55, 6, ''.$v_Licenta_Tip_Buletin, 1, 1);
	  $pdf->SetXY($x + 67, $y);
	  $pdf->MultiCell(55, 6,''.$v_Licenta_Serie_Buletin,1,  1);
	  $pdf->SetXY($x + 122, $y);
	  $pdf->MultiCell(55, 6,''.$v_numar_buletin,1,  1);

	  $pdf->Ln(7);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();
	  $pdf->SetFont('Times','BI',11);

	  $pdf->Cell(15);
	  $pdf->MultiCell(70, 6, 'Eliberat de', 1, 1);
	  $pdf->SetXY($x + 85, $y);
	  $pdf->MultiCell(30, 6,'Ziua',1,  1);
	  $pdf->SetXY($x + 115, $y);
	  $pdf->MultiCell(30, 6,'Luna',1,  1);
	  $pdf->SetXY($x + 145, $y);
	  $pdf->MultiCell(30, 6,'Anul',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(15);
	  $pdf->MultiCell(70, 6, ''.$v_Licenta_Buletin_Eliberat_De, 1, 1);
	  $pdf->SetXY($x + 85, $y);
	  $pdf->MultiCell(30, 6,''.$v_buletin_zi,1,  1);
	  $pdf->SetXY($x + 115, $y);
	  $pdf->MultiCell(30, 6,''.$v_buletin_luna,1,  1);
	  $pdf->SetXY($x + 145, $y);
	  $pdf->MultiCell(30, 6,''.$v_buletin_an,1,  1);

	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 270, 210-10, 270);
	  $pdf->SetLineWidth(0);
	  
	  $pdf->AddPage();
	  $pdf->Ln(7);
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 72, 210-10, 72);
	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'12. Domiciliul stabil',0,0,'C'); 
      
	  $pdf->SetLineWidth(0);
	  $pdf->Ln(8);
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','BI',10);

	  $pdf->Cell(15);
	  $pdf->MultiCell(60, 6, '1. Strada', 0, 1);
	  $pdf->SetXY($x + 120, $y);
	  $pdf->MultiCell(95, 6,'2. Numarul',0,  1);

	  $pdf->Ln(-0.5);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(15);

	  $pdf->MultiCell(95, 6, ''.$v_Licenta_Strada, 1, 1);
	  $pdf->SetXY($x + 120, $y);
	  $pdf->MultiCell(60, 6,''.$v_Licenta_Numar,1,  1);
	  
	  $pdf->Ln(1.5);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','BI',10);

	  $pdf->Cell(15);
   	  $pdf->MultiCell(45, 6, 'Bloc', 0, 1);
	  $pdf->SetXY($x + 100, $y);
	  $pdf->MultiCell(35, 6,'Scara',0,  1);
	  $pdf->SetXY($x + 125, $y);
	  $pdf->MultiCell(35, 6,'Etaj',0,  1);
	  $pdf->SetXY($x + 150, $y);
	  $pdf->MultiCell(35, 6,'Apartament',0,  1);

	 $pdf->Ln(-0.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','B',9);

	 $pdf->Cell(15);

	 $pdf->MultiCell(65, 6, ''.$v_Licenta_Bloc, 1, 1);
	 $pdf->SetXY($x + 100, $y);
	 $pdf->MultiCell(25, 6,''.$v_Licenta_Scara,1,  1);
	 $pdf->SetXY($x + 125, $y);
	 $pdf->MultiCell(25, 6,''.$v_Licenta_Etaj,1,  1);
	 $pdf->SetXY($x + 150, $y);
	 $pdf->MultiCell(25, 6,''.$v_Licenta_Apartament,1,  1);


	 $pdf->Ln(1.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);

	 $pdf->Cell(15);
	 $pdf->MultiCell(85, 6, 'Localitate', 0, 1);
	 $pdf->SetXY($x + 110, $y);
	 $pdf->MultiCell(95, 6,'Judet',0,  1);

	 $pdf->Ln(-0.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','B',9);

	 $pdf->Cell(15);

	 $pdf->MultiCell(60, 6, ''.$v_Licenta_Localitate, 1, 1);
	 $pdf->SetXY($x + 105, $y);
	 $pdf->MultiCell(60, 6,''.$v_Licenta_Judet,1,  1);

	 $pdf->Ln(1.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);

	 $pdf->Cell(15);
	 $pdf->MultiCell(85, 6, 'Cod postal', 0, 1);
	 $pdf->SetXY($x + 85, $y);
	 $pdf->MultiCell(95, 6,'Tara',0,  1);

	 $pdf->Ln(-0.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','B',9);
	 $pdf->Cell(15);

	 $pdf->MultiCell(60, 6, ''.$v_Licenta_Cod_Postal, 1, 1);
	 $pdf->SetXY($x + 85, $y);
	 $pdf->MultiCell(70, 6,''.$v_Licenta_Tara,1,  1);
    
	 $pdf->Ln(1.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(15);
	 $pdf->MultiCell(50, 6, 'Nr. telefon', 0, 1);
	 $pdf->SetXY($x + 85, $y);
	 $pdf->MultiCell(105, 6,'E-mail',0,  1);
      
	 $pdf->Ln(-0.5);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','B',9);

	 $pdf->Cell(15);

    
	 $pdf->MultiCell(50, 6, ''.$v_Licenta_Telefon, 1, 1);
	 $pdf->SetXY($x + 85, $y);
	 $pdf->MultiCell(95, 6,''.$v_Licenta_Email,1,  1);

	 $pdf->Ln(5);
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(23);
	 $pdf->MultiCell(62, 6, '13. Solicitati cazare pe timpul studiilor?', 1, 1);
	 $pdf->SetXY($x + 85, $y);
	 $pdf->MultiCell(90, 6,'14. Solicitati cazare in perioada testului scris de admitere?',1,  1);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','B',9);

     $pdf->Cell(23);
	 $pdf->MultiCell(62, 6, 'DA', 1, 1);
	 $pdf->SetXY($x + 85, $y);
	 $pdf->MultiCell(90, 6,'Idk, poate',1,  1);
	  
	 $pdf->Ln(5);
	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(19);
	 $pdf->MultiCell(110, 6, '15. Candidat care se incadreaza in categoria persoanelor cu dizabilitati', 1, 1);
	 $pdf->SetXY($x + 129, $y);
	 $pdf->MultiCell(50, 6,'16. Stare sociala speciala',1,  1);

	 $x = $pdf->GetX();
	 $y = $pdf->GetY();

	 $pdf->SetFont('Times','B',9);

     $pdf->Cell(19);
	 $pdf->MultiCell(110, 6, 'Nien! nien! nien!', 1, 1);
	 $pdf->SetXY($x + 129, $y);
	 $pdf->MultiCell(50, 6,'Rada rada rada rada',1,  1);
	 
	 $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 186.5, 210-10, 186.5);

	 $pdf->Ln(10);
	 $pdf->SetFont('Times','B',11);
	 $pdf->Cell(10);

	 $pdf->Cell(0,0,'II. DATE PRIVIND PREGATIREA ANTERIOARA A CANDIDATULUI',0,1);
	 $pdf->SetLineWidth(0);
	 $pdf->Line(20, 191.5, 210-20, 191.5); 
	 
	 $pdf->Ln(3);
	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(0,10,'Institutia absolvita (liceu)',0,0,'C');
	  
	 $pdf->Ln(7);
	 $pdf->Cell(25);
	 $pdf->SetFont('Times','B',9);
	 $pdf->Cell(140,6,'Bla Bla',1,0,'C');
	  
	 $pdf->Ln(7);
	 $pdf->SetFont('Times','BI',10);
	 $pdf->Cell(0,10,'Institutia de invatamant superior absolvita (licenta)',0,0,'C');
	  
	 $pdf->Ln(7);
	 $pdf->Cell(25);
	 $pdf->SetFont('Times','B',9);
	 $pdf->Cell(140,6,'Bla Bla',1,0,'C'); 
	  
	 $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 226.5, 210-10, 226.5);

	 $pdf->Ln(16);
	 $pdf->SetFont('Times','B',11);
	 $pdf->Cell(10);

	 $pdf->Cell(0,0,'III. CERINTE SPECIFICE FACULTATII',0,1);
	 $pdf->SetLineWidth(0);
	 $pdf->Line(20, 231.5, 210-20, 231.5); 
	 
	 $pdf->Ln(13);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','BI',10);

	  $pdf->Cell(25);
	  $pdf->MultiCell(70, 6, 'Media generala la examenul de licenta', 1, 1);
	  $pdf->SetXY($x + 95, $y);
	  $pdf->MultiCell(70, 6,'Media de admitere',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(25);
	  $pdf->MultiCell(70, 6, '9.00', 1, 1);
	  $pdf->SetXY($x + 95, $y);
	  $pdf->MultiCell(70, 6,'9.9',1,  1);
	  
	
	  
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(20, 270, 210-20, 270);    
	  
	  $pdf->AddPage();
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 72, 210-10, 72);

	  $pdf->Ln(8);
	  $pdf->SetFont('Times','B',11);
	  $pdf->Cell(10);

	  $pdf->Cell(0,0,'IV. OPTIUNEA DE ADMITERE, IN ORDINEA PREFERINTELOR',0,1);
	  $pdf->SetLineWidth(0);
	  $pdf->Line(20, 77, 210-20, 77);

	  $pdf->Ln(7);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','BI',10);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Domeniul/Programul', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,'Ordinea preferintelor',1,  1);

	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Ingineria sistemelor software (buget)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,'',1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Lingvistica computationala (buget)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,'',1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Optimizare computationala (buget)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,'',1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Securitatea informatiei (buget)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,'',1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Sisteme distribuite (buget)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,'',1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Ingineria sistemelor software (taxa)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,'',1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Lingvistica computationala (taxa)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,'',1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Optimizare computationala (taxa)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,'',1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Securitatea informatiei (taxa)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,'',1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Sisteme distribuite (taxa)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,'',1,  1);
	  
	  $x = $pdf->GetX();
	  $y = $pdf->GetY();

	  $pdf->SetFont('Times','B',9);

	  $pdf->Cell(40);
	  $pdf->MultiCell(70, 6, 'Studii avansate in informatica (taxa)', 1, 1);
	  $pdf->SetXY($x + 110, $y);
	  $pdf->MultiCell(40, 6,'',1,  1);
	  
	  
	  
	  $pdf->SetLineWidth(0.5);
	 $pdf->Line(10, 163, 210-10, 163);

	 $pdf->Ln(12);
	 $pdf->SetFont('Times','B',11);
	 $pdf->Cell(10);

	 $pdf->Cell(0,0,'V. CERINTE SPECIFICE FACULTATII',0,1);
	 $pdf->SetLineWidth(0);
	 $pdf->Line(20, 168, 210-20, 168); 
	  
	 $pdf->Ln(4);
	 $pdf->Cell(20);
	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'Taxe',0,0,'L');
	  
	  $pdf->Ln(7);
	  $pdf->Cell(30);
	  $pdf->SetFont('Times','B',9);
	  $pdf->Cell(0,10,'-Taxa de inscriere: 300 Ron',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-Taxa de scolarizare: 3900 Ron',0,0,'L');
	  
	  
	  $pdf->Ln(7);
	  $pdf->Cell(20);
	  $pdf->SetFont('Times','BI',10);
	  $pdf->Cell(0,10,'Acte necesare',0,0,'L');
	  
	  $pdf->Ln(7);
	  $pdf->Cell(30);
	  $pdf->SetFont('Times','B',9);
	  $pdf->Cell(0,10,'-fisa de inscriere tip',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-diploma de bacalaureat si diploma de licenta (sau echivalentul ei), originale sau copii legalizate',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(35);
	  $pdf->Cell(0,10,'insotite de dovada că originalele sunt depuse la alta facultate',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-foaia matricola din facultate - nivel licenta (cu media ECTS)', 0, 0, 'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-certificat de nastere, in copie legalizata',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-copie simpla carte de identitate;',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-doua fotografii tip buletin',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-chitanta ce dovedeste plata taxei de inscriere',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-adeverinta medicala tip',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-adeverinta din care sa rezulte calitatea de masterand',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-certificatul de căsătorie sau documentul care atestă schimbarea numelui, în copie legalizată',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-dosar plic',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-chitanta care dovedeste plata taxei de inscriere sau actele necesare pentru scutirea de plata taxei',0,0,'L');
	  
	  $pdf->Ln(5);
	  $pdf->Cell(30);
	  $pdf->Cell(0,10,'-dosar plic',0,0,'L');
	  
	  
	  
	  $pdf->SetLineWidth(0.5);
	  $pdf->Line(10, 270, 210-10, 270);
	  $pdf->SetLineWidth(0);
	  $pdf->Output();
            }
         }
 

?>