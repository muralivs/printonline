<?php
require_once('../../includes/db_connect.php'); 

$oid = $_REQUEST['oid'];

$selqry = mysql_query("SELECT * FROM `pfo_shopping` WHERE `order_id` = '$oid' ");

$row = mysql_fetch_array($selqry);

$order_id = $row['order_id'];
$img_count = $row['imgcount'];
$quantity = $row['quantity'];
$paper = $row['paper'];
$ship_method = $row['ship_method'];
$date = date("d / M / Y",$row['pur_date']);
$total = $row['total'];

$fimg = $row['imgpathf'];
$bimg = $row['imgpathb'];

require('fpdf.php');

class PDF extends FPDF
{
//Page header
function Header()
{
$oid = $_REQUEST['oid'];

$selqry = mysql_query("SELECT * FROM `pfo_shopping` WHERE `order_id` = '$oid' ");

$row = mysql_fetch_array($selqry);

$fimg = $row['imgpathf'];
$bimg = $row['imgpathb'];

    //Logo
	$this->Image('../../images/logo.jpg',10,5,50);
	
    $this->Image('../../'.$fimg,30,110,33);
	$this->Image('../../'.$bimg,130,110,33);
    //Arial bold 15
    $this->SetFont('Arial','B',15);
    //Move to the right
    $this->Cell(80);
    //Title
    $this->Cell(50,10,'Product Details',1,0,'C');
    //Line break
    $this->Ln(20);
}

//Page footer
function Footer()
{
    //Position at 1.5 cm from bottom
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',8);
    //Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

//Instanciation of inherited class
$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$line="__________________________________________________________________________________________________________________";

$space="                                                                                                         ";

$pdf->Cell(0,0,$line,0,10);


$order="Order Id: ".$order_id;
$pdf->Cell(0,10,$order,0,10,'L');

$logo="Used Images / Logo: ".$img_count;
$pdf->Cell(0,10,$logo,0,10,'L');

$quan="Quantity: ".$quantity;
$pdf->Cell(0,10,$quan,0,10,'L');

$pap="Paper: ".$paper;
$pdf->Cell(0,10,$pap,0,10,'L');

$ship="Shipping Method: ".$ship_method;
$pdf->Cell(0,10,$ship,0,10,'L');

$pur_date="Purchased Date: ".$date;
$pdf->Cell(0,10,$pur_date,0,10,'L');

$totalamt="Total: ".$total;
$pdf->Cell(0,10,$totalamt,0,10,'L');

/*function Header()
{
$this->Image('../../images/logo.jpg',10,8,33);
}*/

$pdf->Output();
?>