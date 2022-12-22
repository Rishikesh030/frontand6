<?php

session_start();
require_once("../connectionfile/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYANMANJARI VIDYAPITH</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        /* Importing fonts from Google */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
        /* Reseting */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            margin-bottom: 0px;
        }
        body {
            background: linear-gradient(45deg, #8CC6EC, #92A8E5);
            min-height: 100vh;
        }

        body::-webkit-scrollbar {
            display: none;
        }

        .wrapper {
            max-width: 800px;
            margin: 80px auto;
            padding: 30px 45px;
            box-shadow: 5px 25px 35px #3535356b;
        }

        .wrapper label {

            padding-bottom: 0.2rem;
        }

        .wrapper .form .row {
            padding: 0.6rem 0;
        }

        .wrapper .form .row .form-control {
            box-shadow: none;
        }

        .wrapper .form .option {
            position: relative;
            padding-left: 20px;
            cursor: pointer;
        }


        .wrapper .form .option input {
            opacity: 0;
        }

        .wrapper .form .checkmark {
            position: absolute;
            top: 1px;
            left: 0;
            height: 20px;
            width: 20px;
            border: 1px solid #bbb;
            border-radius: 50%;
        }

        .wrapper .form .option input:checked~.checkmark:after {
            display: block;
        }

        .wrapper .form .option:hover .checkmark {
            background: #f3f3f3;
        }

        .wrapper .form .option .checkmark:after {
            content: "";
            width: 10px;
            height: 10px;
            display: block;
            background: linear-gradient(45deg, #8CC6EC, #92A8E5);
            position: absolute;
            top: 50%;
            left: 50%;
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: 300ms ease-in-out 0s;
        }

        .wrapper .form .option input[type="radio"]:checked~.checkmark {
            background: #fff;
            transition: 300ms ease-in-out 0s;
        }

        .wrapper .form .option input[type="radio"]:checked~.checkmark:after {
            transform: translate(-50%, -50%) scale(1);
        }

        #sub {
            display: block;
            width: 100%;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            color: #333;
        }

        #sub:focus {
            outline: none;
        }

        @media(max-width: 768.5px) {
            .wrapper {
                margin: 30px;
            }

            .wrapper .form .row {
                padding: 0;
            }
        }

        @media(max-width: 400px) {
            .wrapper {
                padding: 25px;
                margin: 20px;
            }
        }
        .back{
            background: linear-gradient(45deg, #8CC6EC, #92A8E5);
        }
    </style>
</head>
<body>
    <div class="wrapper rounded bg-white">
        <div class="h3"><i class="fa-solid fa-user"></i> School Registration Form</div><hr>
        <form  class="form" action="../submit/insert_data.php" method="POST">
            
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="name">School Name :</label>
                            <input type="text"name="name" id="name" class="form-control" placeholder="enter School Name" required>
                        </div>  
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="email">School email :</label>
                            <input type="email" name="email" id="email"class="form-control" placeholder="enter School email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="address">Address :</label>
                            <textarea name="address" id="address" cols="10" rows="5" class="form-control" required placeholder="address">
                            </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="city">City :</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder="Enter City" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="district">District :</label>
                            <input type="text" name="district" id="district" class="form-control" placeholder="Enter District" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="state">State :</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder="Enter State" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="pincode">Pincode :</label>
                            <input type="" name="pincode" id="pincode" class="form-control" placeholder="Enter Pincode" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="trust">Name of trust/Society the school :</label>
                            <input type="text"name="trust" id="trust"class="form-control" placeholder="Enter Name of trust/Society" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="gst">GST Number of trust/Society :</label>
                            <input type="text" name="gst" id="gst" class="form-control" placeholder="Enter GST Number of trust/Society" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="email1">Email :</label>
                            <input type="email"name="email1" id="email1"class="form-control"  placeholder="Enter Email id" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="phonen">Phone Number :</label>
                            <input type="tel"name="phonen" id="phonen" class="form-control"  placeholder="Enter Number"required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="mobile1">School Ph.no.1 :</label>
                            <input type="" name="mobile1" id="mobile1"class="form-control" placeholder="School Ph.no.1" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="mobile2">School Ph.no.2 :</label>
                            <input type="" name="mobile2" id="mobile2" class="form-control" placeholder="School Ph.no.2"required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3 mb">
                            <label for="mobile3"></label>
                            <input type="" name="mobile3" id="mobile3" class="form-control" placeholder="Phone-1" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="mobile4"></label>
                            <input type="" name="mobile4" id="mobile4" class="form-control" placeholder="Phone-2" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label></label>
                            <input type="" class="form-control" placeholder="Mobile-1" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3 center-block">
                            <label></label>
                            <input type="" class="form-control" placeholder="Mobile-2" required>
                        </div>
                        <label for=""></label>
                            <label for="gender">Gender :</label>
                            <div class="d-flex align-items-center mt-2">
                            <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>     
                            </div>
                        </div>
                    <!-- //////////////////////////////////////////////////////////////////////// -->
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="principal_name">Principal's Name :</label>
                            <input type="text"  name="principal_name" id="principal_name" class="form-control" placeholder="Enter principal name" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="principal_phone">Phone-1 :</label>
                            <input type="" name="principal_phone" id="principal_phone" class="form-control"  placeholder="Enter phonr number" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3 ml-3">
                            <label for="principal_email">Principal's Email :</label>
                            <input type="email" name="principal_email" id="principal_email" class="form-control" placeholder="Enter email" required>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="gko_name">GKO Incharge Teacher's Name :</label>
                            <input type="text" name="gko_name"id="gko_name" class="form-control" placeholder="Enter  Name" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="email6"> email :</label>
                            <input type="email"  name="email6" id="email6"class="form-control" placeholder="Enter  Email" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="phone33">Phone :</label>
                            <input type="" name="phone33" id="phone33"class="form-control"  placeholder="Enter Number"required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="eo_name">EO Incharge Teacher's Name :</label>
                            <input type="text" name="eo_name" id="eo_name" class="form-control" placeholder="Enter  Name" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="email5"> email :</label>
                            <input type="email" name="email5" id="email5" class="form-control" placeholder="Enter  Email" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="phone4">Phone :</label>
                            <input type=""  name="phone4" id="phone4"class="form-control" placeholder="Enter Number" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="so_name">SO Incharge Teacher's Name :</label>
                            <input type="text"  name="so_name" id="so_name" class="form-control" placeholder="Enter  Name" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="email4"> email :</label>
                            <input type="email" name="email4" id="email4" class="form-control" placeholder="Enter  Email" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="phone44">Phone :</label>
                            <input type="" name="phone44" id="phone44" class="form-control" placeholder="Enter Number" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="co_name">CO Incharge Teacher's Name :</label>
                            <input type="text" name="co_name" id="co_name" class="form-control" placeholder="Enter  Name" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="email3"> email :</label>
                            <input type="email" name="email3" id="email3" class="form-control" placeholder="Enter  Email" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="phone6">Phone :</label>
                            <input type="" name="phone6" id="phone6" class="form-control" placeholder="Enter Number" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="mo_name">MO Incharge Teacher's Name  :</label>
                            <input type="text" name="mo_name" id="mo_name" class="form-control" placeholder="Enter  Name" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="email2"> email :</label>
                            <input type="email" name="email2" id="email2" class="form-control" placeholder="Enter  Email" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="phone111">Phone :</label>
                            <input type="" name="phone111" id="phone111" class="form-control" placeholder="Enter Number" required>
                        </div>
                    </div>
                    <div>
                        <h6>
                            ->International Gk olympiad IO/SO/MO/CO
                        </h6>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-3">
                        <label for="date">Select Date of Exam :</label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>
                    <LAbel></LAbel>
                    <!-- <div>
                        <table class="table back">
                            <thead>
                            <tr>
                                <th scope="col">Sr no.</th>
                                <th scope="col">Name Of the Teacher</th>
                                <th scope="col">Teacher Number</th>
                                <th scope="col">No.Of Student</th>
                                <th scope="col">City</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mahendra Bhai</td>
                                <td>99857...</td>
                                <td>8</td>
                                <td>Bhavanagar</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Rahul Bhai</td>
                                <td>94785....</td>
                                <td>5</td>
                                <td>Bhavanagar</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Dinesh Bhai</td>
                                <td>98745....</td>
                                <td>6</td>
                                <td>Bhavanagar</td>
                            </tr>
                            </tbody>
                        </table>
                    </div> -->
                    <div class="row">   
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="teacher_name">Name of teacher :</label>
                            <input type="text" name="teacher_name" id="teacher_name" class="form-control" placeholder="Enter Class teacher" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="name_student">Name of Student :</label>
                            <input type="text" name="name_student" id="name_student" class="form-control" placeholder="Enter Class teacher" required>
                        </div>
                        <div class="col-md-2 mt-md-0 mt-3">
                            <label for="std"></label>
                            <select class="form-select" name="std" id="std" aria-label="Default select example">
                                <option selected>STD</option>
                                <option value="1">1st</option>
                                <option value="2">2nd</option>
                                <option value="3">3rd</option>
                                <option value="3">4th</option>
                                <option value="3">5th</option>
                                <option value="3">6th</option>
                                <option value="3">7th</option>
                                <option value="3">8th</option>
                                <option value="3">9th</option>
                                <option value="3">10th</option>
                                <option value="3">11th</option>
                                <option value="3">12th</option>
                            </select>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-3">
                            <label for="no_student">Total Number's of Student :</label>
                            <input type="text" name="no_student" id="no_student" class="form-control" placeholder="Enter Number of Student" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="exam_date">Select Date of Exam :</label>
                            <input type="date" name="exam_date" id="exam_date" class="form-control" required>
                        </div>
                    </div>
                    <label for=""></label>
                    <div class="col-md-12 mt-md-0 mt-3">
                        <h6>
                            -> Registration fee :
                        </h6>
                        <p> schools in Gujarat pay to₹__a registration fee of ₹__ per student/   only exam towards quotes of examination.school may charge an additional₹__per student olympia exam towards honorarium of incharge, remuneration to teachers to teach and guide and for other expenses 
                        </p>
                        <h6>-> optional :</h6>
                        <p> 
                            No fee is payable for students suffering for any major physical disability.
                        </p>
                        <h6>-> Mode of payment :</h6>
                        <p> 
                            The School May make payment through any of the following method :
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="bank_name">Name of Bank Detail :</label>
                            <input type="text" name="bank_name" id="bank_name" class="form-control" placeholder="Enter Bank Name" required>
                        </div>  
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label for="place">Place :</label>
                            <input type="text" name="place" id="place" class="form-control" placeholder="Enter Place" required>
                        </div>  
                    </div>  
                    <div class="row">             
                        <div class="col-md-4 mt-md-0 mt-3">
                            <label for="draft_no"></label>
                        <input type="" name="draft_no" id="draft_no" class="form-control" placeholder="Demand Draft No. " required>
                    </div>
                
                        <div class="col-md-4 mt-md-0 mt-3">
                            <label for="date1"></label>
                        <input type="date"  name="date1" id="date1" class="form-control" placeholder="Date" required>
                    </div>
                    <div class="col-md-4 mt-md-0 mt-3">
                        <label for="Fees"></label>
                        <input type="" name="Fees" id="Fees" class="form-control" placeholder="Fees ₹" required>
                    </div>
                </div>
                <div class="row">       
                    <div class="col-md-6 mt-md-0 mt-3">
                        <p> 
                            -> Demand On (Bank & Branch) :
                        </p>
                        <label for="branch_name"></label>
                        <input type="text" name="branch_name" id="branch_name" class="form-control" placeholder="Enter Branch " required>
                    </div>  
                </div>
                <label for=""></label>
                <div class="row">
                    <p> 
                    -> Transfer the Payment Online at https :
                    </p>
                    <div class="col-md-4 mt-md-0 mt-3">
                        <label for="date_payment">Date</label>
                        <input type="date" name="date_payment" id="date_payment" class="form-control" placeholder="" required>
                    </div> 
                    <div class="col-md-4 mt-md-0 mt-3">
                        <label for="Fees_pay"></label>
                        <input type="" name="Fees_pay" id="Fees_pay" class="form-control" placeholder="Fees ₹ "required>
                    </div> 
                    <div class="col-md-4 mt-md-0 mt-3">
                        <label for="Txn_id"></label>
                        <input type="" name="Txn_id" id="Txn_id" class="form-control" placeholder="Txn ID " required>
                    </div> 
                </div>
                <div class="row">
                    <p> 
                        -> School may send payment diseetly through 'NEFT/RTGS/TRANSFER' 
                        (Please fill the following detail and mention  school code)  :
                    </p>
                   
                    <div class="row">
                        <div class="col-md-4 mt-md-0 mt-3">
                            <label for="date_pay">Date :</label>
                            <input type="date" name="date_pay" id="date_pay" class="form-control" placeholder="" required>
                        </div> 
                        <div class="col-md-4 mt-md-0 mt-3">
                            <label for="fee_pay"></label>
                            <input type="" name="fee_pay" id="fee_pay" class="form-control" placeholder="For ₹" required>
                        </div> 
                        <div class="col-md-4 mt-md-0 mt-3">
                            <label for="txn_no"></label>
                            <input type="" name="txn_no" id="txn_no" class="form-control" placeholder="Txn ID " required>
                        </div> 
                    </div>
                </div>
                <label for=""></label>
                <div class="row">
                    <p> -> Schools may pay through Credit Card/Debite Card Powered by RUPAY/BHIM UPI/UPI : 
                    </p>
                    <div class="col-md-4 mt-md-0 mt-3">
                        <label for="date_upi">Date :</label>
                        <input type="date" name="date_upi" id="date_upi" class="form-control" placeholder="" required>
                    </div> 
                    <div class="col-md-4 mt-md-0 mt-3">
                        <label for="Fees_online"></label>
                        <input type="" name="Fees_online" id="Fees_online" class="form-control" placeholder="Fees_online ₹" required>
                    </div> 
                    <div class="col-md-4 mt-md-0 mt-3">
                        <label for="Txn"></label>
                        <input type="" name="Txn" id="Txn" class="form-control" placeholder="Txn ID " required>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-4 mt-md-0 mt-3">
                        <label for="upiid">UPI Address :</label>
                        <input type="" name="upiid" id="upiid" class="form-control" placeholder="@UPI id" required>
                    </div> 
                    <div class="col-md-3 mt-md-0 mt-3">
                        <label for="fees_upi"></label>
                        <input type="" name="fees_upi" id="fees_upi" class="form-control" placeholder="fess ₹" required>
                    </div> 
                    <div class="col-md-5 mt-md-0 mt-3">
                        <label for="qrcode"></label>
                        <input type="" name="qrcode" id="qrcode" class="form-control" placeholder="QR Code (to Scan and pay)" required>
                    </div> 
                </div>
                <label for=""></label>
                <div class="row">
                    <div class="col-md-12 mt-md-0 mt-3">
                    <p> -> Are you applying directly to through a co-orditinators form  : 
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Directly</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Co-ordinator</label>
                    </div>                
                    </div>
                    <label for=""></label>
                </div>
                <div class="row">
                        <div class="col-md-4 mt-md-0 mt-3">
                            <label for="ordinator"></label>
                            <p>-> Name of the Co-ordinator</p>
                            <input type="text" name="ordinator" id="ordinator" class="form-control" placeholder="Enter co-ordinator Name" required>
                    </div>  
                </div>
                <div class=" col-md-5 justify-content-md-end">
                <label for="formFile" class="form-label">Principal Signature upload:</label>
                <input class="form-control" type="file" id="formFile">
               </div>
                <label for=""></label>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2" type="submit">Submit</button>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>

        </form>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/20994dd270.js"crossorigin="anonymous"></script>

    </body>
</html>