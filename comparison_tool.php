<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grade Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <h1>Grade Calculator</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-6">
                    <!-- Form starts -->
                    <form method="GET" action="">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">User Input 1</label>
                            <input typ="number" name="user_input_1" class="form-control" id="formGroupExampleInput" placeholder="Input Numbers">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">User Input 2</label>
                            <input type="number" name="user_input_2" class="form-control" id="formGroupExampleInput" placeholder="Input Numbers">
                        </div>
                        <input type="submit" class="btn btn-primary my-4" name="add" value="Submit">
                    </form>
                    <!-- Form Ends -->

                    <?php


                        if (isset($_GET['add'])) {
                            $user_input_1 = filter_input(INPUT_GET, 'user_input_1', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                            $user_input_2 = filter_input(INPUT_GET, 'user_input_2', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                            $max_num = $user_input_1 > $user_input_2 ? $user_input_1 : $user_input_2;

                            echo "<div class='alert alert-info'> Max Number : <strong>$max_num</strong> </div>";

                        }

                    ?>
                </div>
            </div>
        </div>
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>