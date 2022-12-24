<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card mt-5 shadow">
                    <div class="card-header bg-danger text-white"><h2>Student</h2></div>
                    <div class="card-body">
                        <form action="insert_student.php" method="POST">
                        <div class="form-group">
                            <label for="name" class="form-label">Enter Student Name </label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="age" class="form-label">Enter Student age </label>
                            <input type="number" name="age" id="age" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Course" class="form-label">Enter Student Course </label>
                            <input type="text" name="Course" id="Course" class="form-control">
                        </div>
                        <div class="text-end mt-3">
                            <input type="Submit" value="Save" class="btn btn-success">
                            <input type="reset" value="Clear all" class="btn btn-danger">

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
