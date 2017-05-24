
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
    $this->Image('images/sigla2.png',12,12,20);
    $this->SetFont('Arial','B',9);
    $this->Cell(50);
    $this->Cell(30,20,'UNIVERSITATEA "ALEXANDRU IOAN CUZA" DIN IASI',0,0,'C');
    $this->Ln(5);
    $this->Cell(34.5);
    $this->Cell(30,20,'FACULTATEA DE INFORMATICA',0,0,'C');
    $this->Cell(92);
    $this->Cell(30,20,'',1,0,'C');
    $this->Ln(-4);
    $this->Cell(161.5);
    $this->Cell(20,20,'NR. INSCRIERE',0,0,'C');
    $this->Ln(8);
    $this->Cell(161);
    $this->Cell(20,20,'......................',0,0,'C');
    $this->Ln(9);
    $this->Cell(70);
    $this->SetFont('Arial','',12);
    $this->Cell(20,20,'Data',0,0,'C');
    $this->Ln(7);
    $this->Cell(95);
    $this->Cell(22,6,''.$data,1,0,'C');
    $this->Ln(7);
    $this->SetFont('Arial','B',14);
    $this->Cell(87);
    $this->Cell(20,20,'FORMULAR DE INSCRIERE',0,0,'C');
    $this->Ln(20);
}

function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    //Numarul paginii
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
$pdf->Line(10, 53, 210-10, 53);

$pdf->SetFont('Times','B',12);
$pdf->Cell(10);

$pdf->Cell(0,0,'I. INFORMATII GENERALE',0,1);
$pdf->SetLineWidth(0);
$pdf->Line(20, 62, 210-20, 62);

$pdf->Ln(4);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','BI',11);

$pdf->Cell(10);
$pdf->MultiCell(55, 10, '1. Numele de familie', 0, 1);
$pdf->SetXY($x + 140, $y);
$pdf->MultiCell(45, 10,'2. Initiala tatalui',0,  1);

$pdf->Ln(-3);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',13);

$pdf->Cell(10);

$pdf->MultiCell(90, 8, ''.$v_Numele_De_Familie, 1, 1);
$pdf->SetXY($x + 145, $y);
$pdf->MultiCell(20, 8,''.$v_Licenta_Initiala_Tata,1,  1);

$pdf->Line(20, 79, 210-20, 79);

$pdf->Ln(2);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','BI',11);

$pdf->Cell(10);
$pdf->MultiCell(45, 10, '3. Prenumele', 0, 1);
$pdf->SetXY($x + 70, $y);
$pdf->MultiCell(60, 10,'4. Prenume mama',0,  1);
$pdf->SetXY($x + 140, $y);
$pdf->MultiCell(45, 8,'5. Prenume tata',0,  1);

$pdf->Ln(-1);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',13);

$pdf->Cell(10);

$pdf->MultiCell(45, 8, ''.$v_Licenta_Prenumele, 1, 1);
$pdf->SetXY($x + 70, $y);
$pdf->MultiCell(45, 8,''.$v_Licenta_Prenume_Mama,1,  1);
$pdf->SetXY($x + 135, $y);
$pdf->MultiCell(45, 8,''.$v_Licenta_Prenume_Tata,1,  1);

$pdf->Line(20, 95.5, 210-20, 95.5);

$pdf->Ln(2);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','BI',11);

$pdf->Cell(10);
$pdf->MultiCell(45, 8, '6. Stare civila', 0, 1);
$pdf->SetXY($x + 145, $y);
$pdf->MultiCell(60, 8,'7. Sex',0,  1);


$pdf->Ln(-1.5);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',13);

$pdf->Cell(10);

$pdf->MultiCell(95, 8, ''.$v_stare_civila, 1, 1);
$pdf->SetXY($x + 135, $y);
$pdf->MultiCell(35, 8,''.$v_sex,1,  1);

$pdf->Line(20, 112, 210-20, 112);

$pdf->Ln(2);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','BI',11);

$pdf->Cell(10);
$pdf->MultiCell(45, 10, '8. Nationalitate', 0, 1);
$pdf->SetXY($x + 72, $y);
$pdf->MultiCell(60, 10,'9. Etnie',0,  1);
$pdf->SetXY($x + 135, $y);
$pdf->MultiCell(55, 10,'10. Limba materna',0,  1);


$pdf->Ln(-2.5);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',13);

$pdf->Cell(10);

$pdf->MultiCell(45, 8, ''.$v_Licenta_Nationalitate, 1, 1);
$pdf->SetXY($x + 70, $y);
$pdf->MultiCell(45, 8,''.$v_Licenta_Etnie,1,  1);
$pdf->SetXY($x + 135, $y);
$pdf->MultiCell(45, 8,''.$v_Licenta_Limba_Materna,1,  1);

$pdf->Line(20, 129.5, 210-20, 129.5);


$pdf->Ln(3);

$pdf->SetFont('Times','BI',11);

$pdf->Cell(0,10,'11. CNP (Cod numeric personal)',0,0,'C');

$pdf->Ln(7);
      
$pdf->Cell(45);      

$pdf->SetFont('Times','B',13);

$pdf->Cell(100,8,''.$v_Licenta_CNP,1,1,'C');

$pdf->Line(20, 147.5, 210-20, 147.5);


$pdf->Ln(2);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','BI',11);

$pdf->Cell(10);
$pdf->MultiCell(45, 10, '12. Tip buletin', 0, 1);
$pdf->SetXY($x + 72, $y);
$pdf->MultiCell(60, 10,'13. Serie buletin',0,  1);
$pdf->SetXY($x + 135, $y);
$pdf->MultiCell(55, 10,'14. Numar buletin',0,  1);


$pdf->Ln(-2);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',13);

$pdf->Cell(10);

$pdf->MultiCell(45, 8, ''.$v_Licenta_Tip_Buletin, 1, 1);
$pdf->SetXY($x + 70, $y);
$pdf->MultiCell(45, 8,''.$v_Licenta_Serie_Buletin,1,  1);
$pdf->SetXY($x + 135, $y);
$pdf->MultiCell(45, 8,''.$v_numar_buletin,1,  1);

$pdf->Line(20, 165.5, 210-20, 165.5);

$pdf->Ln(2);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','BI',11);

$pdf->Cell(10);
$pdf->MultiCell(30, 10, '15. Eliberat de', 0, 1);
$pdf->SetXY($x + 100, $y);
$pdf->MultiCell(30, 10,'16. Luna',0,  1);
$pdf->SetXY($x + 125, $y);
$pdf->MultiCell(30, 10,'17. Ziua',0,  1);
$pdf->SetXY($x + 150, $y);
$pdf->MultiCell(30, 10,'18. Anul',0,  1);

$pdf->Ln(-2);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',13);

$pdf->Cell(10);

$pdf->MultiCell(65, 8, ''.$v_Licenta_Buletin_Eliberat_De, 1, 1);
$pdf->SetXY($x + 100, $y);
$pdf->MultiCell(25, 8,''.$v_buletin_luna,1,  1);
$pdf->SetXY($x + 125, $y);
$pdf->MultiCell(25, 8,''.$v_buletin_zi,1,  1);
$pdf->SetXY($x + 150, $y);
$pdf->MultiCell(25, 8,''.$v_buletin_an,1,  1);

$pdf->Line(20, 183.5, 210-20, 183.5);

$pdf->Ln(3);

$pdf->SetFont('Times','BI',11);

$pdf->Cell(0,10,'19. Institutie absolvita',0,0,'C');

$pdf->Ln(7);
$pdf->Cell(45); 
      
$pdf->SetFont('Times','B',13);

$pdf->Cell(100,8,''.$v_Licenta_Liceu,1,1,'C');
$pdf->Line(20, 201.5, 210-20, 201.5);
      
$pdf->Ln(4);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','BI',11);

$pdf->Cell(17);
$pdf->MultiCell(85, 10, '20. Medie generala bacalaureat', 0, 1);
$pdf->SetXY($x + 105, $y);
$pdf->MultiCell(95, 10,'21. Nota la matematica/informatica',0,  1);

$pdf->Ln(-2);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',13);

$pdf->Cell(15);

$pdf->MultiCell(60, 8, ''.$v_Licenta_Medie_BAC, 1, 1);
$pdf->SetXY($x + 105, $y);
$pdf->MultiCell(60, 8,''.$v_Licenta_Nota_MI,1,  1);

$pdf->Line(20, 221.5, 210-20, 221.5);

$pdf->Ln(5);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','BI',11);

$pdf->Cell(16);
$pdf->MultiCell(85, 10, '22. Doresc invatamant de zi', 0, 1);
$pdf->SetXY($x + 103, $y);
$pdf->MultiCell(95, 10,'23. Doresc sa dau admitere la obiectul',0,  1);

$pdf->Ln(-2);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',13);

$pdf->Cell(15);

$pdf->MultiCell(60, 8, ''.$v_Licenta_Preferinte, 1, 1);
$pdf->SetXY($x + 105, $y);
$pdf->MultiCell(60, 8,''.$v_Licenta_Obiect_Ales,1,  1);

$pdf->SetLineWidth(0.5);
$pdf->Line(10, 249, 210-10, 249);

//
//              Pagina  2        
//  

$pdf->AddPage();
$pdf->SetLineWidth(0.5);
$pdf->Line(10, 53, 210-10, 53);

$pdf->SetFont('Times','B',12);
$pdf->Cell(10);

$pdf->Cell(0,0,'II. ADRESA DVS.',0,1);
$pdf->SetLineWidth(0);
$pdf->Line(20, 62, 210-20, 62);
      

//$pdf->Line(10, 90, 210-20, 90);

$pdf->Ln(5);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','BI',11);

$pdf->Cell(15);
$pdf->MultiCell(60, 10, '1. Strada', 0, 1);
$pdf->SetXY($x + 120, $y);
$pdf->MultiCell(95, 10,'2. Numarul',0,  1);

$pdf->Ln(-2);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',13);

$pdf->Cell(15);

$pdf->MultiCell(95, 8, ''.$v_Licenta_Strada, 1, 1);
$pdf->SetXY($x + 120, $y);
$pdf->MultiCell(60, 8,''.$v_Licenta_Numar,1,  1);
$pdf->Line(20, 81, 210-20, 81);

$pdf->Ln(5);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','BI',11);

$pdf->Cell(15);
$pdf->MultiCell(45, 10, '3. Bloc', 0, 1);
$pdf->SetXY($x + 100, $y);
$pdf->MultiCell(35, 10,'4. Scara',0,  1);
$pdf->SetXY($x + 125, $y);
$pdf->MultiCell(35, 10,'5. Etaj',0,  1);
$pdf->SetXY($x + 150, $y);
$pdf->MultiCell(35, 10,'6. Apartament',0,  1);

$pdf->Ln(-2);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',13);

$pdf->Cell(15);

$pdf->MultiCell(65, 8, ''.$v_Licenta_Bloc, 1, 1);
$pdf->SetXY($x + 100, $y);
$pdf->MultiCell(25, 8,''.$v_Licenta_Scara,1,  1);
$pdf->SetXY($x + 125, $y);
$pdf->MultiCell(25, 8,''.$v_Licenta_Etaj,1,  1);
$pdf->SetXY($x + 150, $y);
$pdf->MultiCell(25, 8,''.$v_Licenta_Apartament,1,  1);
$pdf->Line(20, 102.5, 210-20, 102.5);
      

$pdf->Ln(5);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','BI',11);

$pdf->Cell(15);
$pdf->MultiCell(85, 10, '7. Localitate', 0, 1);
$pdf->SetXY($x + 110, $y);
$pdf->MultiCell(95, 10,'8. Judet',0,  1);

$pdf->Ln(-2);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',13);

$pdf->Cell(15);

$pdf->MultiCell(60, 8, ''.$v_Licenta_Localitate, 1, 1);
$pdf->SetXY($x + 105, $y);
$pdf->MultiCell(60, 8,''.$v_Licenta_Judet,1,  1);
$pdf->Line(20, 123.5, 210-20, 123.5);

$pdf->Ln(5);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','BI',11);

$pdf->Cell(15);
$pdf->MultiCell(85, 10, '9. Cod postal', 0, 1);
$pdf->SetXY($x + 110, $y);
$pdf->MultiCell(95, 10,'10. Tara',0,  1);

$pdf->Ln(-2);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',13);

$pdf->Cell(15);

$pdf->MultiCell(60, 8, ''.$v_Licenta_Cod_Postal, 1, 1);
$pdf->SetXY($x + 105, $y);
$pdf->MultiCell(60, 8,''.$v_Licenta_Tara,1,  1);

      
$pdf->SetLineWidth(0.5);
$pdf->Line(10, 147, 210-10, 147);
      
$pdf->Ln(10);
$pdf->SetFont('Times','B',12);
$pdf->Cell(10);

$pdf->Cell(0,0,'III. CONTACT',0,1);
$pdf->SetLineWidth(0);
$pdf->Line(20, 155, 210-20, 155);

$pdf->Ln(5);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','BI',11);

$pdf->Cell(15);
$pdf->MultiCell(85, 10, '1. Nr. telefon', 0, 1);
$pdf->SetXY($x + 110, $y);
$pdf->MultiCell(95, 10,'2. E-mail',0,  1);
$pdf->Line(20, 175.5, 210-20, 175.5);
      
$pdf->Ln(-2);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',13);

$pdf->Cell(15);

    
$pdf->MultiCell(60, 8, ''.$v_Licenta_Telefon, 1, 1);
$pdf->SetXY($x + 105, $y);
$pdf->MultiCell(75, 8,''.$v_Licenta_Email,1,  1);


$pdf->Ln(10);
$pdf->Cell(80);
$pdf->SetFont('Times','BI',11);
$pdf->Cell(0,0,'Data nastere',0,1);
      
$pdf->Line(20, 187, 210-20, 187);
    
$pdf->Ln(5);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','BI',11);

$pdf->Cell(20);
$pdf->MultiCell(35, 10, 'Luna', 0, 1);
$pdf->SetXY($x + 70, $y);
$pdf->MultiCell(35, 10,'Zi',0,  1);
$pdf->SetXY($x + 130, $y);
$pdf->MultiCell(35, 10,'An',0,  1);


$pdf->Ln(-2);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',13);

$pdf->Cell(15);

$pdf->MultiCell(35, 8, ''.$v_data_nastere_luna, 1, 1);
$pdf->SetXY($x + 70, $y);
$pdf->MultiCell(35, 8,''.$v_data_nastere_zi,1,  1);
$pdf->SetXY($x + 130, $y);
$pdf->MultiCell(35, 8,''.$v_data_nastere_an,1,  1);

$pdf->SetLineWidth(0.5);
$pdf->Line(10, 240, 210-10, 240);     

$pdf->Output();
            }
         }
 

?>