<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYANMANJARI VIDYAPITH</title>
    <!-- CSS only  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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

        .back {
            background: linear-gradient(45deg, #8CC6EC, #92A8E5);
        }
    </style>
</head>

<body>
    <div class="wrapper rounded bg-white">
        <div class="h3"><i class="fa-solid fa-user"></i> School Registration Form</div>
        <hr>
        <form class="form" action="insert_teacher.php" method="post">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="name">School Name :</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="enter School Name" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="email">School email :</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="enter School email" required>
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
                    <input type="number" name="pincode" id="pincode" class="form-control" placeholder="Enter Pincode" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="trust">Name of trust/Society the school :</label>
                    <input type="text" name="trust" id="trust" class="form-control" placeholder="Enter Name of trust/Society" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="gst">GST Number of trust/Society :</label>
                    <input type="text" name="gst" id="gst" class="form-control" placeholder="Enter GST Number of trust/Society" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="email1">Email :</label>
                    <input type="email" name="email1" id="email1" class="form-control" placeholder="Enter Email id" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="phone1">Phone Number :</label>
                    <input type="number" name="phone1" id="phone1
                            " class="form-control" placeholder="Enter Number" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="phone2">Phone Number :</label>
                    <input type="number" name="phone2" id="phone2
                            " class="form-control" placeholder="Enter Number" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="mobile1">mobile1 :</label>
                    <input type="number" name="mobile1" id="mobile1
                            " class="form-control" placeholder="Enter Number" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="mobile2">mobile2 :</label>
                    <input type="number" name="mobile2" id="mobile2
                            " class="form-control" placeholder="Enter Number" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="mobile3">mobile3 :</label>
                    <input type="number" name="mobile3" id="mobile3" class="form-control" placeholder="Enter Number" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="mobile4">mobile4 :</label>
                    <input type="number" name="mobile4" id="mobile4" class="form-control" placeholder="Enter Number" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="mobile5">mobile5 :</label>
                    <input type="number" name="mobile5" id="mobile5" class="form-control" placeholder="Enter Number" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="mobile5">mobile6 :</label>
                    <input type="number" name="mobile6" id="mobile6" class="form-control" placeholder="Enter Number" required>
                </div>
                <label for=""></label>
                <label for="gender">Gender :</label>
                <div class="d-flex align-items-center mt-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="option1">
                        <label class="form-check-label" for="gender">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="option2">
                        <label class="form-check-label" for="gender">Female</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="principal_name">Principal's Name :</label>
                    <input type="text" name="principal_name" id="principal_name" class="form-control" placeholder="Enter principal name" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="principal_phone">Phone-1 :</label>
                    <input type="number" name="principal_phone" id="principal_phone" class="form-control" placeholder="Enter phonr number" required>
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
                    <input type="text" name="gko_name" id="gko_name" class="form-control" placeholder="Enter  Name" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="email5"> email :</label>
                    <input type="email" name="email5" id="email5" class="form-control" placeholder="Enter  Email" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="phone3">Phone :</label>
                    <input type="number" name="phone3" id="phone3" class="form-control" placeholder="Enter Number" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="eo_name">EO Incharge Teacher's Name :</label>
                    <input type="text" name="eo_name" id="eo_name" class="form-control" placeholder="Enter  Name" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="email6"> email :</label>
                    <input type="email" name="email6" id="email6" class="form-control" placeholder="Enter  Email" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="phone4">Phone :</label>
                    <input type="number" name="phone4" id="phone4" class="form-control" placeholder="Enter Number" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="so_name">SO Incharge Teacher's Name :</label>
                    <input type="text" name="so_name" id="so_name" class="form-control" placeholder="Enter  Name" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="email7"> email :</label>
                    <input type="email" name="email7" id="email7" class="form-control" placeholder="Enter  Email" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="phone6">Phone :</label>
                    <input type="number" name="phone6" id="phone6" class="form-control" placeholder="Enter Number" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="co_name">CO Incharge Teacher's Name :</label>
                    <input type="text" name="co_name" id="co_name" class="form-control" placeholder="Enter  Name" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="email8"> email :</label>
                    <input type="email" name="email8" id="email8" class="form-control" placeholder="Enter  Email" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="phone7">Phone :</label>
                    <input type="number" name="phone7" id="phone7" class="form-control" placeholder="Enter Number" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="mo_name">MO Incharge Teacher's Name :</label>
                    <input type="text" name="mo_name" id="mo_name" class="form-control" placeholder="Enter  Name" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="email9"> email :</label>
                    <input type="email" name="email9" id="email9" class="form-control" placeholder="Enter  Email" required>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="phone8">Phone :</label>
                    <input type="number" name="phone8" id="phone8" class="form-control" placeholder="Enter Number" required>
                </div>
            </div>

            <div>
                <h6>
                    ->International Gk olympiad IO/SO/MO/CO
                </h6>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label for="date1">Select Date of Exam :</label>
                <input type="date" name="date1" id="date1" class="form-control" required>
            </div>

            <LAbel></LAbel>
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
                <p> schools in Gujarat pay to₹__a registration fee of ₹__ per student/ only exam towards quotes of examination.school may charge an additional₹__per student olympia exam towards honorarium of incharge, remuneration to teachers to teach and guide and for other expenses
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
                    <input type="date" name="date1" id="date1" class="form-control" placeholder="Date" required>
                </div>
                <div class="col-md-4 mt-md-0 mt-3">
                    <label for="fees"></label>
                    <input type="number" name="fees" id="fees" class="form-control" placeholder="Enter Fees ₹" required>
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
                    <label for="fees_pay"></label>
                    <input type="number" name="fees_pay" id="fees_pay" class="form-control" placeholder="Fees mode ₹ " required>
                </div>
                <div class="col-md-4 mt-md-0 mt-3">
                    <label for="txn_id"></label>
                    <input type="number" name="txn_id" id="txn_id" class="form-control" placeholder=" Enter Txn ID" required>
                </div>
            </div>
            <div class="row">
                <p>
                    -> School may send payment diseetly through 'NEFT/RTGS/TRANSFER'
                    (Please fill the following detail and mention school code) :
                </p>

                <div class="row">
                    <div class="col-md-4 mt-md-0 mt-3">
                        <label for="date_pay">Date :</label>
                        <input type="date" name="date_pay" id="date_pay" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-4 mt-md-0 mt-3">
                        <label for="fee_pay"></label>
                        <input type="number" name="fee_pay" id="fee_pay" class="form-control" placeholder="For ₹" required>
                    </div>
                    <div class="col-md-4 mt-md-0 mt-3">
                        <label for="txn_no"></label>
                        <input type="number" name="txn_no" id="txn_no" class="form-control" placeholder="Txn ID " required>
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
                    <label for="fees_online"></label>
                    <input type="number" name="fees_online" id="fees_online" class="form-control" placeholder="Fees_online ₹" required>
                </div>
                <div class="col-md-4 mt-md-0 mt-3">
                    <label for="txn"></label>
                    <input type="number" name="txn" id="txn" class="form-control" placeholder="txn ID " required>
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
            <label for="inlineRadioOptions"></label>
            <div class="row">
                <div class="col-md-12 mt-md-0 mt-3">
                    <p> -> Are you applying directly to through a co-orditinators form :
                    </p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadioOptions1" value="option1">
                        <label class="form-check-label" for="inlineRadioOptions1">Directly</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadioOptions2" value="option2">
                        <label class="form-check-label" for="inlineRadioOptions2">Co-ordinator</label>
                    </div>
                </div>
                <label for=""></label>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label for="ordinator1"></label>
                    <p>-> Name of the Co-ordinator</p>
                    <input type="text" name="ordinator1" id="ordinator1" class="form-control" placeholder="Enter co-ordinator Name" required>
                </div>
                <div class="col-md-4 mt-10">
                    <label for=""></label>
                    <p>-> Scan Qr code</p>
                    <img src="../frontand6/images/qr code1.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class=" col-md-5 justify-content-md-end">
                <label for="formFile" class="form-label">Principal Signature upload:</label>
                <input class="form-control" name="formFile" type="file" id="formFile">
            </div>
            <label for=""></label>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2" type="submit">Submit</button>
            </div>
            <!-- <div class="table-responsive">
        <table id="example2" class="table table-striped table-bordered table-sm">
            <thead>
                <tr>
                    <th></th>
                    <th width="5%">Sr.no</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Pincode</th>
                    <th>Email</th>
                    <th width="30%">Remarks</th>
                </tr>
            </thead>
            <tbody>
    </div> -->
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- <script>
        $(document).ready(function() {
            var table = $('#form').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });
            table.buttons().container()
                .appendTo('#form .col-md-6:eq(0)');
        });
    </script> -->
    </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- // JavaScript Bundle with Popper // -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/20994dd270.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>