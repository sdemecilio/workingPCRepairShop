<?php
/**
    The MIT License (MIT)		Copyright (c) 2017 Stacey Demecilio, Shimbey Assie, Axumawit Gebregorgis		Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:		The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.		THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/
    require('fpdf.php');
    
    //connect to database
    require ('../../../databaseConnect.php');
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $id = $_GET['workOrderID'];
    try {
        $statement = $conn->query("SELECT * FROM workOrder WHERE workOrderID =" . $id);
        $statement->setFetchMode(PDO::FETCH_OBJ);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
    class PDF extends FPDF	{
        
        //page header
        function Header()
        {
            //logo
            $this->Image('../images/grcRepairLogo.jpg', 10, 6, 30);
            $this->SetFont('Arial', 'B', 18);
            
            //move to the right - moves title section
            $this->Cell(70);
            
            //title
            $this->Cell(0, 0, 'Green River Repair Shop', 'C');
            
            //line break
            $this->Ln(10);
        }
        
        //page footer
        function Footer()
        {
            //position at 1.5cm from bottom
            $this->SetY(-15);
            $this->SetFont('Arial', 'I', 8);
            
            //page number
            $this->Cell(0, 10, 'Page ' . $this->PageNo(). '/{nb}', 0, 0, 'C');
        }
        
        //sets the title
        function title($text)
        {
            $this->SetFont('Arial', 'B', 14);
            $this->Cell(70);
        }
    }
    
    //initializes new pdf page
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    
    //title of page
    $pdf->SetFont('Times', 'B', 18);
    $pdf->Cell(195, 20, 'Work Order Form', 0, 0, 'C');
    $pdf->Ln(13);
    
    //sets fonts
    $pdf->SetFont('Times', '', 14);
    
    //pulls inforamtion from database
    foreach ($result as $row)
    {
        $pdf->Cell(40, 25, 'Faculty/Student: ' . $row['student_faculty']);
        
        $pdf->Ln(15);
        $pdf->Cell(60, 20, 'First Name: ' . $row['first_name']);
        $pdf->Cell(75, 20, 'Last Name: ' . $row['last_name']);
        $pdf->Cell(15, 20, 'Phone Number: ' . $row['phone_number']);
        
        $pdf->Ln(10);
        $pdf->Cell(100, 20, 'Email: ' . $row['email']);
        $pdf->Cell(15, 20, 'Green River ID: ' . $row['greenriverID']);
        
        $pdf->Ln(10);
        $pdf->Cell(25, 20, 'Computer Language - English: ' . $row['computer_language']);
        
        $pdf->Ln(10);
        $pdf->Cell(85, 20, 'Computer Username: ' . $row['computer_username']);
        $pdf->Cell(20, 20, 'Computer Password: ' . $row['computer_password']);
        
        $pdf->Ln(10);
        $pdf->Cell(85, 20, 'Ccleaner Removmal: ' . $row['ccleaner']);
        $pdf->Cell(50, 20, 'Customer Initials: ' . $row['customer_initials']);
        
        $pdf->Ln(10);
        $pdf->Cell(60, 20, 'Issues: ' . $row['issues']);
        
        $pdf->Ln(20);	}
        
        //customer agreement and acknowledgement
        
        $pdf->Cell(175, 20, 'RELEASE AND HOLD HARMLESS AGREEMENT', 0, 0, 'C');
        
        $pdf->Ln(15);
        $pdf->MultiCell(195, 5, 'The Green River PC Repair Shop will not be held liable for ANY services performed on ANY equipment recieved by the Party or Parties below. Further, if we are unable to repair any equipment received, the Green River PC Repair Shop or its members, will not be responsible for replacing hardware, software, or information lost or damaged during diagnostics of, and ore repairing of the equipment received from any inteded parties.');
        
        $pdf->Ln(3);
        $pdf->SetFont('Times', 'B', 14);
        $pdf->MultiCell(195, 5, 'The suggested donation is non-refundable and will still apply regardless of services rendered, even if no repair is made.');
        
        $pdf->Ln(5);
        $pdf->SetFont('Times', '', 14);
        $pdf->Cell(175, 20, 'ACKNOWLEDGEMENT OF RISK', 0, 0, 'C');
        
        $pdf->Ln(15);
        $pdf->MultiCell(195, 5, 'I, ________________________________________, acknowledge that I have read the above statements and definitions, and hereby indemnify and hold harmless, Green River PC Repair Shop, ad its students or advisors from any liability arising from accident, theft, or damages to all equipment and property. I have receieved a copy of Green River PC Repair Shop\'s Policies and will adhere to them strictly. This agreement shall continue for each and every visit to Green River PC Repair Shop\'s property.');
        
        $pdf->Ln(5);
        $pdf->MultiCell(195, 5, 'The terms of this release form shall be construed as the entire agreement and may not be altered, amended, or modified except in writing and signed by both parties. The terms of this release shall be governed by the laws of the State of Washington.');
        
        $pdf->Ln(5);
        $pdf->Cell(195, 5, 'Date:__________________________');
        
        $pdf->Ln(10);
        $pdf->Cell(195, 5, 'Customer Signature:_______________________________________________');
        
        $pdf->Output();
        
?>