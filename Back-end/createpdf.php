
<?php
 if(isset($_POST['Submit'])) {
require('FPDF/fpdf.php');
class PDF extends FPDF
{

function Header()
{
    $this->Ln(10);
    $this->Image('images/sigla2.png',15,15,30);
    $this->SetFont('Arial','B',24);
    $this->Cell(50);
    $this->Cell(100,20,'Formular de admitere',1,0,'C');
    $this->Ln(50);
}

function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    //Numarul paginii
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
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
      
            $v_Licenta_Preferinte =  $_POST["Licenta_Limba_Aleasa_middle_1"];  
      
            $v_Licenta_Liceu =  $_POST["Licenta_Liceu"]; 
        
$pdf = new PDF('P', 'mm', 'A4' );
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->Line(10, 60, 210-10, 60);

$pdf->SetFont('Times','B',20);
$pdf->Cell(60);

$pdf->Cell(0,0,'I. Informatii generale',0,1);

$pdf->Line(20, 75, 210-20, 75);

$pdf->Ln(5);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',14);

$pdf->Cell(10);
$pdf->MultiCell(55, 10, '1. Numele de familie', 0, 1);
$pdf->SetXY($x + 140, $y);
$pdf->MultiCell(55, 10,'2. Initiala tatalui',0,  1);

$pdf->Ln(1);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',12);

$pdf->Cell(10);

$pdf->MultiCell(90, 10, ''.$v_Numele_De_Familie, 1, 1);
$pdf->SetXY($x + 140, $y);
$pdf->MultiCell(40, 10,''.$v_Licenta_Initiala_Tata,1,  1);

$pdf->Line(20, 102, 210-20, 102);

$pdf->Ln(10);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',14);

$pdf->Cell(10);
$pdf->MultiCell(45, 10, '3. Prenumele', 0, 1);
$pdf->SetXY($x + 70, $y);
$pdf->MultiCell(60, 10,'4. Prenume Mama',0,  1);
$pdf->SetXY($x + 140, $y);
$pdf->MultiCell(45, 10,'5. Prenume tata',0,  1);

$pdf->Ln(1);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',12);

$pdf->Cell(10);

$pdf->MultiCell(45, 10, ''.$v_Licenta_Prenumele, 1, 1);
$pdf->SetXY($x + 70, $y);
$pdf->MultiCell(45, 10,''.$v_Licenta_Prenume_Mama,1,  1);
$pdf->SetXY($x + 135, $y);
$pdf->MultiCell(45, 10,''.$v_Licenta_Prenume_Tata,1,  1);

$pdf->Line(20, 132, 210-20, 132);

$pdf->Ln(7);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',14);

$pdf->Cell(10);
$pdf->MultiCell(45, 10, '6. Stare civila', 0, 1);
$pdf->SetXY($x + 125, $y);
$pdf->MultiCell(60, 10,'7. Sex',0,  1);


$pdf->Ln(1);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',12);

$pdf->Cell(10);

$pdf->MultiCell(95, 10, ''.$v_stare_civila, 1, 1);
$pdf->SetXY($x + 125, $y);
$pdf->MultiCell(35, 10,''.$v_sex,1,  1);

$pdf->Line(20, 162, 210-20, 162);

$pdf->Ln(7);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',14);

$pdf->Cell(10);
$pdf->MultiCell(45, 10, '8. Nationalitate', 0, 1);
$pdf->SetXY($x + 72, $y);
$pdf->MultiCell(60, 10,'9. Etnie',0,  1);
$pdf->SetXY($x + 135, $y);
$pdf->MultiCell(55, 10,'10. Limba materna',0,  1);


$pdf->Ln(1);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',12);

$pdf->Cell(10);

$pdf->MultiCell(45, 10, ''.$v_Licenta_Nationalitate, 1, 1);
$pdf->SetXY($x + 70, $y);
$pdf->MultiCell(45, 10,''.$v_Licenta_Etnie,1,  1);
$pdf->SetXY($x + 135, $y);
$pdf->MultiCell(45, 10,''.$v_Licenta_Limba_Materna,1,  1);

$pdf->Line(20, 188, 210-20, 188);


$pdf->Ln(5);

$pdf->SetFont('Times','B',14);

$pdf->Cell(0,10,'11. CNP',0,0,'C');

$pdf->Ln(7);

$pdf->SetFont('Times','B',12);

$pdf->Cell(190,10,''.$v_Licenta_CNP,1,1,'C');

$pdf->Line(20, 212, 210-20, 212);


$pdf->Ln(7);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',14);

$pdf->Cell(10);
$pdf->MultiCell(45, 10, '12. Tip Buletin', 0, 1);
$pdf->SetXY($x + 72, $y);
$pdf->MultiCell(60, 10,'13. Serie Buletin',0,  1);
$pdf->SetXY($x + 135, $y);
$pdf->MultiCell(55, 10,'14. Numar Buletin',0,  1);


$pdf->Ln(1);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',12);

$pdf->Cell(10);

$pdf->MultiCell(45, 10, ''.$v_Licenta_Tip_Buletin, 1, 1);
$pdf->SetXY($x + 70, $y);
$pdf->MultiCell(45, 10,''.$v_Licenta_Serie_Buletin,1,  1);
$pdf->SetXY($x + 135, $y);
$pdf->MultiCell(45, 10,''.$v_numar_buletin,1,  1);

$pdf->Line(20, 237, 210-20, 237);

$pdf->Ln(7);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',14);

$pdf->Cell(10);
$pdf->MultiCell(45, 10, '15. Eliberat de', 0, 1);
$pdf->SetXY($x + 100, $y);
$pdf->MultiCell(30, 10,'16. Luna',0,  1);
$pdf->SetXY($x + 125, $y);
$pdf->MultiCell(30, 10,'17. Ziua',0,  1);
$pdf->SetXY($x + 150, $y);
$pdf->MultiCell(30, 10,'18. Anul',0,  1);

$pdf->Ln(1);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',12);

$pdf->Cell(10);

$pdf->MultiCell(65, 10, ''.$v_Licenta_Buletin_Eliberat_De, 1, 1);
$pdf->SetXY($x + 100, $y);
$pdf->MultiCell(25, 10,''.$v_buletin_luna,1,  1);
$pdf->SetXY($x + 125, $y);
$pdf->MultiCell(25, 10,''.$v_buletin_zi,1,  1);
$pdf->SetXY($x + 150, $y);
$pdf->MultiCell(25, 10,''.$v_buletin_an,1,  1);

$pdf->Line(20, 265, 210-20, 265);

$pdf->Ln(6);

$pdf->SetFont('Times','B',14);

$pdf->Cell(0,10,'19. Institutie absolvita',0,0,'C');

$pdf->Ln(7);

$pdf->SetFont('Times','B',12);

$pdf->Cell(190,10,''.$v_Licenta_Liceu,1,1,'C');

$pdf->Line(20, 70, 210-20, 70);

$pdf->Line(20, 125, 210-20, 125);

$pdf->Ln(10);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',14);

$pdf->Cell(10);
$pdf->MultiCell(85, 10, '20. Medie generala Bacalaureat', 0, 1);
$pdf->SetXY($x + 90, $y);
$pdf->MultiCell(95, 10,'21. Nota la Matematica sau Informatica',0,  1);

$pdf->Ln(1);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',12);

$pdf->Cell(15);

$pdf->MultiCell(60, 10, ''.$v_Licenta_Medie_BAC, 1, 1);
$pdf->SetXY($x + 105, $y);
$pdf->MultiCell(60, 10,''.$v_Licenta_Nota_MI,1,  1);

$pdf->Line(20, 165, 210-20, 165);

$pdf->Ln(10);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',14);

$pdf->Cell(10);
$pdf->MultiCell(85, 10, '22. Doresc invatamant de zi', 0, 1);
$pdf->SetXY($x + 90, $y);
$pdf->MultiCell(95, 10,'23. Doresc sa dau admitere la obiectul',0,  1);

$pdf->Ln(1);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',12);

$pdf->Cell(15);

$pdf->MultiCell(60, 10, ''.$v_Licenta_Preferinte, 1, 1);
$pdf->SetXY($x + 105, $y);
$pdf->MultiCell(60, 10,''.$v_Licenta_Obiect_Ales,1,  1);

$pdf->SetFont('Times','B',20);
$pdf->Cell(60);

$pdf->Line(20, 155, 210-20, 155);

$pdf->Ln(10);

$pdf->Cell(60);

$pdf->Cell(0,0,'II. Adresa dvs.',0,1);

$pdf->Line(10, 90, 210-20, 90);

$pdf->Ln(10);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',14);

$pdf->Cell(15);
$pdf->MultiCell(60, 10, '1. Strada', 0, 1);
$pdf->SetXY($x + 120, $y);
$pdf->MultiCell(95, 10,'2. Numarul',0,  1);

$pdf->Ln(1);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',12);

$pdf->Cell(15);

$pdf->MultiCell(95, 10, ''.$v_Licenta_Strada, 1, 1);
$pdf->SetXY($x + 120, $y);
$pdf->MultiCell(60, 10,''.$v_Licenta_Numar,1,  1);

$pdf->Line(20, 196, 210-20, 196);

$pdf->Ln(5);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',14);

$pdf->Cell(15);
$pdf->MultiCell(45, 10, '3. Bloc', 0, 1);
$pdf->SetXY($x + 100, $y);
$pdf->MultiCell(35, 10,'4. Scara',0,  1);
$pdf->SetXY($x + 125, $y);
$pdf->MultiCell(35, 10,'5. Etaj',0,  1);
$pdf->SetXY($x + 150, $y);
$pdf->MultiCell(35, 10,'6. Apartament',0,  1);

$pdf->Ln(1);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',12);

$pdf->Cell(15);

$pdf->MultiCell(65, 10, ''.$v_Licenta_Bloc, 1, 1);
$pdf->SetXY($x + 100, $y);
$pdf->MultiCell(25, 10,''.$v_Licenta_Scara,1,  1);
$pdf->SetXY($x + 125, $y);
$pdf->MultiCell(25, 10,''.$v_Licenta_Etaj,1,  1);
$pdf->SetXY($x + 150, $y);
$pdf->MultiCell(25, 10,''.$v_Licenta_Apartament,1,  1);

$pdf->Line(20, 222, 210-20, 222);

$pdf->Ln(5);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',14);

$pdf->Cell(15);
$pdf->MultiCell(85, 10, '7. Localitate', 0, 1);
$pdf->SetXY($x + 110, $y);
$pdf->MultiCell(95, 10,'8. Judet',0,  1);

$pdf->Ln(1);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',12);

$pdf->Cell(15);

$pdf->MultiCell(60, 10, ''.$v_Licenta_Localitate, 1, 1);
$pdf->SetXY($x + 105, $y);
$pdf->MultiCell(60, 10,''.$v_Licenta_Judet,1,  1);

$pdf->Line(20, 248, 210-20, 248);

$pdf->Ln(5);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',14);

$pdf->Cell(15);
$pdf->MultiCell(85, 10, '9. Cod postal', 0, 1);
$pdf->SetXY($x + 110, $y);
$pdf->MultiCell(95, 10,'10. Tara',0,  1);

$pdf->Ln(1);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',12);

$pdf->Cell(15);

$pdf->MultiCell(60, 10, ''.$v_Licenta_Cod_Postal, 1, 1);
$pdf->SetXY($x + 105, $y);
$pdf->MultiCell(60, 10,''.$v_Licenta_Tara,1,  1);


$pdf->SetFont('Times','B',20);


$pdf->Ln(10);



$pdf->Cell(75);
$pdf->Cell(0,0,'III. Contact',0,1);
$pdf->Line(10, 60, 210-20, 60);
$pdf->Line(10, 75, 210-20, 75);

$pdf->Ln(5);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',14);

$pdf->Cell(15);
$pdf->MultiCell(85, 10, '1. Nr. telefon', 0, 1);
$pdf->SetXY($x + 110, $y);
$pdf->MultiCell(95, 10,'2. E-mail',0,  1);

$pdf->Ln(1);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',12);

$pdf->Cell(15);

    
$pdf->MultiCell(60, 10, ''.$v_Licenta_Telefon, 1, 1);
$pdf->SetXY($x + 105, $y);
$pdf->MultiCell(75, 10,''.$v_Licenta_Email,1,  1);

$pdf->Line(20, 100, 210-20, 100);


$pdf->Ln(10);
$pdf->Cell(80);
$pdf->SetFont('Times','B',16);
$pdf->Cell(0,0,'Data nastere',0,1);

$pdf->Ln(5);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',14);

$pdf->Cell(20);
$pdf->MultiCell(35, 10, 'Luna', 0, 1);
$pdf->SetXY($x + 70, $y);
$pdf->MultiCell(35, 10,'Zi',0,  1);
$pdf->SetXY($x + 130, $y);
$pdf->MultiCell(35, 10,'An',0,  1);


$pdf->Ln(1);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->SetFont('Times','B',12);

$pdf->Cell(15);

$pdf->MultiCell(35, 10, ''.$v_data_nastere_luna, 1, 1);
$pdf->SetXY($x + 70, $y);
$pdf->MultiCell(35, 10,''.$v_data_nastere_zi,1,  1);
$pdf->SetXY($x + 130, $y);
$pdf->MultiCell(35, 10,''.$v_data_nastere_an,1,  1);

$pdf->Output();
            }
         }
 

?>