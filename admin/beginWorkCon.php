<?php
    /**
    The MIT License (MIT)
    Copyright (c) 2017 Stacey Demecilio, Shimbey Assie, Axumawit Gebregorgis
    
    Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
    The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
    */
    
    //connecting to db
    require ('../../../databaseConnect.php');
    
    $id = $_GET['workOrderID'];
        
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (!empty($_POST['begin-submit']))
        {
            try
            {
                // grab variable
                $work_began = $_POST['work_began'];
                
                // SQL statement
                $stmt = $conn->prepare("UPDATE office_use
                                       SET work_began = :work_began
                                       WHERE workOrderID = $id");
            
                $statusUpdate = $conn->prepare("UPDATE workOrder SET wo_status = 'Working' WHERE workOrderID = $id");
                
                // bind parameters
                $stmt->bindParam(':work_began', $work_began);
                $statusUpdate->bindParam(':workOrderID', $workOrderID);
                
                //execute
                $stmt->execute();
                $statusUpdate->execute();
                
                //echo "Update Successfull";
            }
            
            catch (PDOException $e)
            {
               // echo "Error: " . $e->getMessage();
            }
        }

        if(!empty($_POST['finish-submit'])) 
        {
            try
            {
                // grab variable
                $work_finished = $_POST['work_finished'];
                $ledger_picked = $_POST['ledger_pickup'];
                
                // SQL statement
                $statement = $conn->prepare("UPDATE office_use
                                       SET work_finished = :work_finished,
                                       ledger_pickup = :ledger_pickup
                                       WHERE workOrderID = $id");
            
                $status = $conn->prepare("UPDATE workOrder SET wo_status = 'Completed' WHERE workOrderID = $id");
                
                // bind parameters
                $statement->bindParam(':work_finished', $work_finished);
                $statement->bindParam(':ledger_pickup', $ledger_picked);
                $status->bindParam(':workOrderID', $workOrderID);
                
                //execute
                $statement->execute();
                $status->execute();
                
                //echo "Work order complete";
            }
            
            catch (PDOException $e)
            {
                //echo "Error: " . $e->getMessage();
            }
        }
    }