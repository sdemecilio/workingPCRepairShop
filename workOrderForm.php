<?php
/**
    The MIT License (MIT)

    Copyright (c) 2017 Stacey Demecilio, Shimbey Assie, Axumawit Gebregorgis

    Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

 */
?>

<html>
    <head>
        <title>Green River Repair Shop</title>

        <!-- CSS libraries -->
        <link rel = "stylesheet" href = "css/RepairShop.css">

    </head>

    <body>
        <p class = "title">Work Order</p>
        <hr>
        
        <form id = "community_form" method = "post" action = "workOrderForm.php">
            <!-- Customer information for work order -->
            <fieldset>
                <legend>Customer Information</legend>
                <div class = "requiredFields">* From must be completely filled out</div>
                <p>First name: <input type = "text" name = "firstName" id = "firstName" required>
                    &nbsp;&nbsp;
                    Last name: <input type = "text" name = "lastName" id = "lastName" required>
                </p>
                <p>Email: <input type = "text" name = "email" id = "email" required>
                    &nbsp;&nbsp;
                    Phone number: <input type = "number" name = "phoneNumber" id = "phoneNumber" required>
                </p>
            </fieldset>
            <br>
            
            <!-- Computer information for work order -->
            <fieldset>
                <legend>Computer Information</legend>
                <p>Is your computer language English?
                    <input type = "radio" name = "compLang" id = "compLang" required>Yes
                    <input type = "radio" name = "compLang" id = "compLang">No
                </p>
                <p>Username: <input type = "text" name = "username" id = "username" required>
                    &nbsp;&nbsp;
                    Password: <input type = "text" name = "password" id = "password" requried>
                </p>
                <p>
                    <b>CCleaner:</b> is a freeware system optimization, privacy and cleaning tool. It removes unused files from you system allowing Windoes to run faster and freeing up valuable hard disk space. <br>
                    Do you want CCleaner removed from your Computer?
                    <input type = "radio" name = "ccleaner" id = "ccleaner" required>Yes
                    <input type = "radio" name = "ccleaner" id = "ccleaner">No
                    <br>
                    <b>Customer Initials: </b> <input type = "text" name = "cInitials" id = "cInitials" required>
                </p>
            </fieldset>
            <br>
            
            <!-- Issues with computer, user will check all that apply -->
            <fieldset>
                <legend>Types of Issues</legend>
                
                <input type = "checkbox" name = "issues" value = "acAdapter">AC Adapter<br>
                <input type = "checkbox" name = "issues" value = "keyboard">Keyboard<br>
                <input type = "checkbox" name = "issues" value = "heatSink">Heat Sink<br>
                <input type = "checkbox" name = "issues" value = "pciCard">PCI Card<br>
                <input type = "checkbox" name = "issues" value = "screen">Screen<br>
                <input type = "checkbox" name = "issues" value = "cpu">CPU<br>
                <input type = "checkbox" name = "issues" value = "fan">Fan<br>
                <input type = "checkbox" name = "issues" value = "opDrive">Optical Drive (CD/DVD Rom)<br>
                <input type = "checkbox" name = "issues" value = "ram">Ram<br>
                <input type = "checkbox" name = "issues" value = "touchPad">Touch Pad<br>
                <input type = "checkbox" name = "issues" value = "dataRecovery">Data Recovery<br>
                <input type = "checkbox" name = "issues" value = "hardDrive">Hard Drive<br>
                <input type = "checkbox" name = "issues" value = "opSystem">Operating System<br>
                <input type = "checkbox" name = "issues" value = "systemBoard">System Board<br>
                <input type = "checkbox" name = "issues" value = "malware">Malware<br>
                <input type = "checkbox" name = "issues" value = "software">Software: <input type = "text" name = "issues" id = "software"> <br>
                <input type = "checkbox" name = "issues" value = "other">Other: <input type = "text" name = "issues" id = "other">
            </fieldset>
             <br>

            <!-- Used only internally-->
            <fieldset>
                <legend>Office Use Only</legend>
                <p>
                    Date Received: <br>
                    Receiving Technician: <br>
                    Receipt Number: <br>
                    PC S/N: <br>
                    Manufacturer: <br>
                    Model: <br>
                    Operating System: <br>
                    OS Key: <br>
                    <b>Ledger Initialed at drop off? YES / NO</b> <br>
                    <b>Ledger Initialed at pickup? YES / NO</b> <br>
                </p>
                <p>
                    Date Work Started: <br>
                    Date Work Finished: <br>
                </p>
            </fieldset>

            <br>

            <fieldset>
                <legend>Work Order</legend>
                    <b>Grand total (without taxes): $</b>
            </fieldset>
    
            <!-- Acknowledgements and Agreements -->
            <p class = "heading">RELEASE AND HOLD HARMLESS AGREEMENT</p>
            <p>
                The Green River PC Repair Shop will not be held liable for ANY services performed on ANY equipment received by the Party or Parties below. Further, if we are       unable to repair any equipment received, the Green River PC Repair Shop or its members, will not be responsible for replacing hardware, software, or information lost or damaged during diagnostics of, and or repairing of the equipment received from any intended parties.
            </p>

            <p class = "heading">ACKNOWLEDGEMENT OF RISK</p>
            <p>I, ___________________________________, acknowledge that I have read the above statements and definitions, and hereby indemnify and hold harmless, Green River PC Repair Shop, and its students or advisors from any liability arising from accident, theft, or damages to all equipment and property. I have received a copy of Green River PC Repair Shop's Policies and will adhere to them strictly. This agreement shall continue for each and every visit to Green River PC Repair Shop's property.</p>
            <p>The terms of this release form shall be constructed as the entire agreement and may not be altered, amended, or modified except in writing and signed by both parties. The terms of this release shall be governed by the laws of the State of Washington.</p>
            <p>
                <b>Customer Signature:____________________________________________ &nbsp;&nbsp;
                    Date:_______________________________</b>
            </p>

            <p>
                <input type = "submit" name = "btn-submit" value = "Submit form" id = "btn-submit">
            </p>
        </form>
       


    <!-- including the jquery library from the jquery website -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src = "javascript/CWorkOrder.js"></script>
    </body>
</html>

