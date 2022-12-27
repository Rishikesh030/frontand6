<!DOCTYPE html>
<html lang="en">
<?php
require_once("connection.php");
?>

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
    <div class="container">
        <div class="card">
    <div class="demo-html">
        <table id="example" class="display nowrap dataTable" style="width: 100%;" aria-describedby="example_info">
            <thead> 
                <tr>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 131px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 211px;" aria-label="Position: activate to sort column ascending">Position</th>
                    <th    class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 99px;" aria-label="Office: activate to sort column ascending">Office</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 41px;" aria-label="Age: activate to sort column ascending">Age</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 90px;" aria-label="Start date: activate to sort column ascending">Start date</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 76px;" aria-label="Salary: activate to sort column ascending">Salary</th>
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
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                </tr>
                <?php
                }
                    ?>
            </tbody>
            <tfoot>
                <tr>
                    <th rowspan="1" colspan="1">Name</th>
                    <th rowspan="1" colspan="1">Position</th>
                    <th rowspan="1" colspan="1">Office</th>
                    <th rowspan="1" colspan="1">Age</th>
                    <th rowspan="1" colspan="1">Start date</th>
                    <th rowspan="1" colspan="1">Salary</th>
                </tr>
            </tfoot>
        </table>
        <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
        <div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><a class="paginate_button previous disabled" aria-controls="example" data-dt-idx="previous" tabindex="-1" id="example_previous">Previous</a><span><a class="paginate_button current" aria-controls="example" data-dt-idx="0" tabindex="0">1</a><a class="paginate_button " aria-controls="example" data-dt-idx="1" tabindex="0">2</a><a class="paginate_button " aria-controls="example" data-dt-idx="2" tabindex="0">3</a><a class="paginate_button " aria-controls="example" data-dt-idx="3" tabindex="0">4</a><a class="paginate_button " aria-controls="example" data-dt-idx="4" tabindex="0">5</a><a class="paginate_button " aria-controls="example" data-dt-idx="5" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="example" data-dt-idx="next" tabindex="0" id="example_next">Next</a></div>
    </div>
    </div>
    </div>
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