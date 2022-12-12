<?php
require_once("include/css.php");
?>
</head>

<body>
    <!--wrapper-->
    <div class="page-wrapper">
        <?php
        require_once("include/menu.php");
        ?>
        <div class="row">
            <div class="col-11 mx-auto mt-5">
                <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">Package Management</h5>
                        </div>
                        <hr>
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name </label>
                                <input type="text" class="form-control" placeholder="Enter Name" id="name" required name="name">
                            </div>
                            <div class="col-md-6">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="number" class="form-control" placeholder="Enter Amount" id="amount" required name="amount">
                            </div>
                            <div class="col-md-12">
                                <label for="desc" class="form-label">Description</label>
                                <textarea class="form-control" id="desc" name="desc" placeholder="Add Description here." rows="3"></textarea>
                            </div>
                            <div class="col-12 text-end">
                                <button type="submit" class="btn btn-primary px-4">Add Package</button>
                                <button type="reset" class="btn btn-danger px-4">Clear All</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-11 mx-auto mt-5">
            <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">View Package</h5>
                        </div>
                        <hr>
                        <div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th width="5%">Sr.no</th>
										<th>Name</th>
										<th>Amount</th>
										<th width="40%">Description</th>
										<th>Operations</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>branch-1</td>
										<td>4000</td>
										<td>no remarks found</td>
										<td>
                                            <a href="" class="px-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit text-primary"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-primary"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                        </a>
                                        </td>
									</tr>
                                </tbody>
							</table>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once("include/script.php");
    ?>
    <script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
    </script>
</body>

</html>