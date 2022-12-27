<?php
require_once("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
</head>

<body>
    <div class="demo-html">
        <table id="example" class="display nowrap dataTable" style="width: 100%;" aria-describedby="example_info">
            <thead>
                <tr>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 131px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">name</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 211px;" aria-label="Position: activate to sort column ascending">email</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 99px;" aria-label="Office: activate to sort column ascending">address</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 41px;" aria-label="Age: activate to sort column ascending">city</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 90px;" aria-label="Start date: activate to sort column ascending">district</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">state</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">pincode</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">trust</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">gst</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">email1</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">phone1</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">phone2</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">mobile1</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">mobile2</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">mobile3</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">mobile4</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">mobile5</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">mobile6</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">gender</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">principal_name</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">principal_phone</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">principal_email</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">gko_name</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">email5</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">phone3</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">eo_name</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">email6</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">phone4</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">so_name</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">email7</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">phone6</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">co_name</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">email8</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">phone7</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">mo_name</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">email9</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">phone8</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">date</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">teacher_name</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">name_student</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">std</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">no_student</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">exam_date</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">bank_name</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">place</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">draft_no</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">date1</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">fees</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">branch_name</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">date_payment</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">fees_pay</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">txn_id</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">date_pay</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">fee_pay</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">txn_no</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">date_upi</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">fees_online</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">txn</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">upiid</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">fees_upi</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">qrcode</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">inlineRadioOptions1</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">ordinator1</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">formFile</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "Select * from teacher ";
                $stat = $db->prepare($sql);
                $stat->setFetchMode(PDO::FETCH_ASSOC);
                $stat->execute();
                $table = $stat->fetchAll();
                foreach ($table as $row) {

                ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['district']; ?></td>
                    <td><?php echo $row['state']; ?></td>
                    <td><?php echo $row['pincode']; ?></td>
                    <td><?php echo $row['trust']; ?></td>
                    <td><?php echo $row['gst']; ?></td>
                    <td><?php echo $row['email1']; ?></td>
                    <td><?php echo $row['phone1']; ?></td>
                    <td><?php echo $row['phone2']; ?></td>
                    <td><?php echo $row['mobile1']; ?></td>
                    <td><?php echo $row['mobile2']; ?></td>
                    <td><?php echo $row['mobile3']; ?></td>
                    <td><?php echo $row['mobile4']; ?></td>
                    <td><?php echo $row['mobile5']; ?></td>
                    <td><?php echo $row['mobile6']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['principal_name']; ?></td>
                    <td><?php echo $row['principal_phone']; ?></td>
                    <td><?php echo $row['principal_email']; ?></td>
                    <td><?php echo $row['gko_name']; ?></td>
                    <td><?php echo $row['email5']; ?></td>
                    <td><?php echo $row['phone3']; ?></td>
                    <td><?php echo $row['eo_name']; ?></td>
                    <td><?php echo $row['email6']; ?></td>
                    <td><?php echo $row['phone4']; ?></td>
                    <td><?php echo $row['so_name']; ?></td>
                    <td><?php echo $row['email7']; ?></td>
                    <td><?php echo $row['phone6']; ?></td>
                    <td><?php echo $row['co_name']; ?></td>
                    <td><?php echo $row['email8']; ?></td>
                    <td><?php echo $row['phone7']; ?></td>
                    <td><?php echo $row['mo_name']; ?></td>
                    <td><?php echo $row['email9']; ?></td>
                    <td><?php echo $row['phone8']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['teacher_name']; ?></td>
                    <td><?php echo $row['name_student']; ?></td>
                    <td><?php echo $row['std']; ?></td>
                    <td><?php echo $row['no_student']; ?></td>
                    <td><?php echo $row['exam_date']; ?></td>
                    <td><?php echo $row['bank_name']; ?></td>
                    <td><?php echo $row['place']; ?></td>
                    <td><?php echo $row['draft_no']; ?></td>
                    <td><?php echo $row['date1']; ?></td>
                    <td><?php echo $row['fees']; ?></td>
                    <td><?php echo $row['branch_name']; ?></td>
                    <td><?php echo $row['date_payment']; ?></td>
                    <td><?php echo $row['fees_pay']; ?></td>
                    <td><?php echo $row['txn_id']; ?></td>
                    <td><?php echo $row['date_pay']; ?></td>
                    <td><?php echo $row['fee_pay']; ?></td>
                    <td><?php echo $row['txn_no']; ?></td>
                    <td><?php echo $row['date_upi']; ?></td>
                    <td><?php echo $row['fees_online']; ?></td>
                    <td><?php echo $row['txn']; ?></td>
                    <td><?php echo $row['upiid']; ?></td>
                    <td><?php echo $row['fees_upi']; ?></td>
                    <td><?php echo $row['qrcode']; ?></td>
                    <td><?php echo $row['inlineRadioOptions1']; ?></td>
                    <td><?php echo $row['ordinator1']; ?></td>
                    <td><?php echo $row['formFile']; ?></td>
                </tr>
                <?php
                }
                    ?>
            </tbody>
            <tfoot></tfoot>
        </table>    
        <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 entries</div>
        <div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><a class="paginate_button previous disabled" aria-controls="example" data-dt-idx="previous" tabindex="-1" id="example_previous">Previous</a><span><a class="paginate_button current" aria-controls="example" data-dt-idx="0" tabindex="0">1</a><a class="paginate_button " aria-controls="example" data-dt-idx="1" tabindex="0">2</a><a class="paginate_button " aria-controls="example" data-dt-idx="2" tabindex="0">3</a><a class="paginate_button " aria-controls="example" data-dt-idx="3" tabindex="0">4</a><a class="paginate_button " aria-controls="example" data-dt-idx="4" tabindex="0">5</a><a class="paginate_button " aria-controls="example" data-dt-idx="5" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="example" data-dt-idx="next" tabindex="0" id="example_next">Next</a></div>
    </div>
    <script src="../frontand6/phpb20/jq/jquery/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>