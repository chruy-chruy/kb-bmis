<?php
define('FPDF_FONTPATH', '../../../vendors/FPDF/font/');
require('../../../vendors/FPDF/fpdf.php');
include "../../../db_conn.php";



class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo
        $this->Image('north-logo.png', 10, 6, 50);

        // Font
        $this->SetFont('Montserrat-Bold', '', 58);

        // Move to the right
        $this->Cell(80);

        // $this->SetTextColor(217, 185, 62);
        // Title
        $this->Cell(70, 30, 'RESIDENTS', 0, 0, 'C');

        // Font
        $this->SetFont('Montserrat-Regular', '', 14);
        $this->Cell(-75);
        $this->Cell(80, 60, 'Barangay Dadiangas North, General Santos City ', 0, 0, 'C');

        $this->SetDrawColor(198, 69, 69);
        $this->SetLineWidth(2);
        $this->Line(60, 45, 210 - 20, 45);

        // Line break
        $this->Ln(45);
    }


    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Montserrat-Regular', '', 10);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }


    function DateRange()
    {
        $this->SetFont('Montserrat-Bold', '', 10);
        $this->Cell(115);
        $this->Cell(0, 0, '', 0, 0);
        $this->Ln(7);
    }

    function TableHeader()
    {

        $width_cell = array(10, 40, 70, 40, 30);
        $this->SetFont('Montserrat-Bold', '', 10);

        //Background color of header//
        $this->SetFillColor(198, 69, 69);
        $this->SetTextColor(255);

        // Header starts /// 

        //First header column //
        $this->Cell($width_cell[0], 10, 'ID', 0, 0, 'C', true);
        //Second header column//
        $this->Cell($width_cell[1], 10, 'LAST NAME', 0, 0, 'C', true);
        //Third header column//
        $this->Cell($width_cell[2], 10, 'FIRST NAME', 0, 0, 'C', true);
        //Fourth header column//
        $this->Cell($width_cell[3], 10, 'MIDDLE NAME', 0, 0, 'C', true);
        //Third header column//
        $this->Cell($width_cell[4], 10, 'CONTACT NO.', 0, 0, 'C', true);
        //// header ends ///////
        $this->Ln();
    }
}



// Instanciation of inherited class
$pdf = new PDF('P','mm','A4');

$pdf->AddFont('Montserrat-Regular', '', 'Montserrat-Regular.php');
$pdf->AddFont('Montserrat-Bold', '', 'Montserrat-Bold.php');

$pdf->AddPage();

$pdf->DateRange();

$pdf->TableHeader();

$pdf->AliasNbPages();

$pdf->SetTextColor(0, 0, 0);


$query = "SELECT * FROM residents";
$query_run = mysqli_query($conn, $query);



$width_cell = array(10, 40, 70, 40, 30);
if (mysqli_num_rows($query_run) > 0) {

    foreach ($query_run as $row) {
        $pdf->SetFont('Montserrat-Regular', '', 8);

        $pdf->Cell($width_cell[0], 10, $row['id'], 1, 0, 'C');
        $pdf->Cell($width_cell[1], 10, $row['last_name'], 1, 0, 'C');
        // $pdf->Cell($width_cell[2], 10, $row['purpose'], 1, 0, 'C');
        $pdf->Cell($width_cell[2], 10, $row['first_name'], 1, 0, 'C');
        $pdf->Cell($width_cell[3], 10, $row['mid_name'], 1, 0, 'C');
        // $pdf->Cell($width_cell[3], 10, $row['house_number'], $row['purok'], $row['street'], 1, 0, 'C');
        $pdf->Cell($width_cell[4], 10, $row['phone_number'], 1, 0, 'C');
        $pdf->Ln();

        $pdf->SetFont('Montserrat-Regular', '', 11);
    }
}


// query for if statement;
//SELECT book_name,
// IF(pub_lang='English',"English Book","Other Language") 
// AS Language 
// FROM book_mast;

// The desired filename

date_default_timezone_set("Asia/Manila");
$filename = 'Residents-' . date("Ymd")   . '.pdf';
$pdf->Output($filename, 'I');








    // Colored table
    // function FancyTable()
    // {
    //     // Colors, line width and bold font
    //     $this->SetFillColor(255, 0, 0);
    //     $this->SetTextColor(255);
    //     $this->SetDrawColor(128, 0, 0);
    //     $this->SetLineWidth(.3);
    // }