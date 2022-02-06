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
        $this->Image('north-logo.png', 10, 6, 37);

        // Font
        $this->SetFont('Montserrat-Bold', '', 38);

        // Move to the right
        $this->Cell(68);

        // $this->SetTextColor(217, 185, 62);
        // Title
        $this->Cell(70, 20, 'RESIDENTS', 0, 0, 'C');

        // Font
        $this->SetFont('Montserrat-Regular', '', 14);
        $this->Cell(-60);
        $this->Cell(60, 45, 'Barangay Dadiangas North, General Santos City ', 0, 0, 'C');

        // $this->SetDrawColor(198, 69, 69);
        // $this->SetLineWidth(2);
        // $this->Line(55, 40, 200 - 20, 40);

        // Line break
        $this->Ln(35);
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

    function createdDate()
    {
        date_default_timezone_set("Asia/Manila");
        $date = date("m/d/Y");
        return $date;
    }

    function residentCount()
    {
        require("../../../db_conn.php");

        $populationSql = "SELECT * FROM residents";
        $populationQuery = $conn->query($populationSql);
        $countPopulation = $populationQuery->num_rows;
        return $countPopulation;
    }

    function Date()
    {


        $this->SetFont('Montserrat-Bold', '', 10);
        $this->Cell(220);
        $this->Cell(-408, 14, 'As of ' . $this->createdDate(),  0, 0, 'C');
        $this->Ln(7);
    }

    function DateRange()
    {

        // $populationSql =  mysqli_query($conn, "SELECT count(id) FROM residents");
        // $w = mysqli_fetch_array($populationSql);

        $this->SetFont('Montserrat-Bold', '', 10);
        $this->Cell(220);
        $this->Cell(-100, 0, 'Total Residents: ' . $this->residentCount(),  0, 0, 'C');
        $this->Ln(7);
    }

    function TableHeader()
    {

        $width_cell = array(10, 70, 70, 40, 30);
        $this->SetFont('Montserrat-Bold', '', 10);

        //Background color of header//
        $this->SetFillColor(198, 69, 69);
        $this->SetTextColor(255);

        // Header starts /// 

        //First header column //
        $this->Cell($width_cell[0], 9, 'ID', 0, 0, 'C', true);
        //Second header column//
        $this->Cell($width_cell[1], 9, 'RESIDENT NAME', 0, 0, 'C', true);
        //Third header column//
        $this->Cell($width_cell[2], 9, 'ADDRESS', 0, 0, 'C', true);


        //Third header column//
        $this->Cell($width_cell[3], 9, 'CONTACT NO.', 0, 0, 'C', true);
        //// header ends ///////
        $this->Ln();
    }
}



// Instanciation of inherited class
$pdf = new PDF('P', 'mm', 'A4');

$pdf->AddFont('Montserrat-Regular', '', 'Montserrat-Regular.php');
$pdf->AddFont('Montserrat-Bold', '', 'Montserrat-Bold.php');

$pdf->AddPage();
$pdf->Date();
$pdf->DateRange();


$pdf->TableHeader();

$pdf->AliasNbPages();

$pdf->SetTextColor(0, 0, 0);


$query = "SELECT * FROM residents";
$query_run = mysqli_query($conn, $query);



$width_cell = array(10, 70, 70, 40, 30);
if (mysqli_num_rows($query_run) > 0) {

    foreach ($query_run as $row) {
        $pdf->SetFont('Montserrat-Regular', '', 9);

        $pdf->Cell($width_cell[0], 6, $row['id'], 1, 0, 'C');
        $pdf->Cell($width_cell[1], 6, $row['last_name'] . ", " . $row['first_name'] . " " . $row['mid_name'] . " " . $row['suffix'], 1, 0, 'L');
        $pdf->Cell($width_cell[2], 6, $row['house_number'] . ", " . $row['purok'] . ", " . $row['street'], 1, 0, 'L');
        $pdf->Cell($width_cell[3], 6, $row['phone_number'], 1, 0, 'L');
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