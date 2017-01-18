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

        <form method = "POST" action = "#">
            <fieldset>
                <legend>Customer Information</legend>
                <div class = "requiredFields">* Form must be completely filled out</div>
                <p>
                    First Name: <input type = "text" name = "firstName"> &nbsp; &nbsp;
                    Last Name: <input type = "text" name = "lastName"> &nbsp;&nbsp;
                    Student/Faculty ID: <input type = "number" name = "ID">
                </p>
                <p>
                    Email (must be .edu): <input type = "email" name = "email"> &nbsp;&nbsp;
                    Phone Number: <input type = "number" name = "phoneNumber">
                </p>
            </fieldset>

            <fieldset>
                <legend>Computer Information</legend>
                <p>Is your computer language English?
                    <input type = "checkbox" name = "answer" value = "yes">Yes
                    <input type = "checkbox" name = "answer" value = "no">No
                </p>
                <p>
                    Username: <input type = "text" name = "username"> &nbsp; &nbsp;
                    Password: <input type = "text" name = "password">
                </p>
                <p>
                    <b>CCleaner:</b> is a freeware system optimization, privacy and cleaning tool. It removes unused files from you system allowing Windoes to run faster and freeing up valuable hard disk space. <br>
                    Do you want CCleaner removed from your computer?
                        <input type = "checkbox" name = "cleaner" value = "yes">Yes
                        <input type = "checkbox" name = "cleaner" value = "no">No
                    <br>
                    <b>Customer Initials: </b> <input type = "text" name = "cInitials">
                </p>
            </fieldset>

            <fieldset>
                <legend>Types of Issues</legend>
                <p>AC Adapter: <input type = "text" name = "acAdapter"></p>
                <p>Keyboard: <input type = "text" name = "keyboard"></p>
                <p>Heat Sink: <input type = "text" name = "heatSink"></p>
                <p>PCI Card: <input type = "text" name = "pciCard"></p>
                <p>Screen: <input type = "text" name = "screen"></p>
                <p>CPU: <input type = "text" name = "cpu"></p>
                <p>Fan: <input type = "text" name = "fan"></p>
                <p>Optical Drive (CD/DVD Rom): <input type = "text" name = "optDrive"></p>
                <p>RAM: <input type = "text" name = "ram"></p>
                <p>Touch Pad: <input type = "text" name = "touchPad"></p>
                <p>Data Recovery: <input type = "text" name = "dataRecovery"></p>
                <p>Hard Drive: <input type = "text" name = "hardDrive"></p>
                <p>Operating System: <input type = "text" name ="opSystem"></p>
                <p>System Board: <input type = "text" name = "sysBoard"></p>
                <p>Malware: <input type = "text" name = "malware"></p>
                <p>Software: <input type = "text" name = "software"></p>
                <p>Other: <input type = "text" name = "other"></p>
            </fieldset>

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

            <fieldset>
                <legend>Work Order</legend>
                    <b>Grand total (without taxes): $</b>
            </fieldset>
        </form>

    <p class = "heading">RELEASE AND HOLD HARMLESS AGREEMENT</p>
    <p>
        The Green River PC Repair Shop will not be held liable for ANY services performed on ANY equipment received by the Party or Parties below. Further, if we are unable to repair any equipment received, the Green River PC Repair Shop or its members, will not be responsible for replacing hardware, software, or information lost or damaged during diagnostics of, and or repairing of the equipment received from any intended parties.
    </p>

        <p class = "heading">Acknowledgement of Risk</p>
        <p>I, ___________________________________, acknowledge that I have read the above statements and definitions, and hereby indemnify and hold harmless, Green River PC Repair Shop, and its students or advisors from any liability arising from accident, theft, or damages to all equipment and property. I have received a copy of Green River PC Repair Shop's Policies and will adhere to them strictly. This agreement shall continue for each and every visit to Green River PC Repair Shop's property.</p>
    <p>The terms of this release form shall be constructed as the entire agreement and may not be altered, amended, or modified except in writing and signed by both parties. The terms of this release shall be governed by the laws of the State of Washington. <br>
    <b>Date:__________________________ &nbsp;&nbsp;
        Customer Signature:_____________________________________</b>
    </p>



    </body>
</html>

