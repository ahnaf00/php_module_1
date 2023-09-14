<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EVEN ODD CHECKER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <h1>EVEN ODD CHECKER</h1>
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
                            <label for="formGroupExampleInput" class="form-label">Input Number</label>
                            <input typ="number" name="user_input" class="form-control" id="formGroupExampleInput" placeholder="Input Numbers">
                        </div>
                        <input type="submit" class="btn btn-primary my-4" name="number" value="Submit">
                    </form>
                    <!-- Form Ends -->

                    <?php
                        $userInputs = [];
                        $total = 0;
                        $average = 0;

                        if (isset($_GET['number'])) {
                            $user_input = filter_input(INPUT_GET, 'user_input', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                            if($user_input % 2 ==0)
                            {
                                echo "<div class='alert alert-success'> The Number is EVEN </div>";
                            }
                            else
                            {
                                echo "<div class='alert alert-primary'> THe Number is ODD </div>";
                            }
                        }



                    ?>
                </div>
            </div>
        </div>
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>