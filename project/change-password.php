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
        <div class="page-content">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="card">
                    <div class="card-header">
                        <h5>Change Password</h5>
                    </div>
                    <div class="card-body">
						<input class="form-control form-control mb-3" type="password" 
                        placeholder="Current Password" />

                        <input class="form-control form-control mb-3" type="password" 
                        placeholder="New Password" />

                        <input class="form-control form-control mb-3" type="password" 
                        placeholder="Confirm New Password" />

                        <div class="d-grid gap-2">
							<button type="button" class="btn btn-primary">Change Password</button> 
						</div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
        
    <?php
        require_once("include/script.php");
    ?>
</body>
</html>