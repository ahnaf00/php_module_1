<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Simple Calculator</title>
  </head>
  <body>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <h2>Simple Calculator</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form method="GET" action="">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Input Number 1</label>
                                    <input type="text" name="inputValue_1" class="form-control" placeholder="Input value 1">
                                </div>

                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Input Number 2</label>
                                    <input type="text" name="inputValue_2" class="form-control" placeholder="Input value 2">
                                </div>

                                <div class="col-md-4">
                                <label for="inputState" class="form-label">State</label>
                                <select id="inputState" name="action" class="form-select">
                                    <option>Choose...</option>
                                    <option value="1" <?php if (isset($_GET['action']) && $_GET['action'] == '1') echo 'selected'; ?>>ADD</option>
                                    <option value="2" <?php if (isset($_GET['action']) && $_GET['action'] == '2') echo 'selected'; ?>>SUBTRACT</option>
                                    <option value="3" <?php if (isset($_GET['action']) && $_GET['action'] == '3') echo 'selected'; ?>>MULTIPLY</option>
                                    <option value="4" <?php if (isset($_GET['action']) && $_GET['action'] == '4') echo 'selected'; ?>>DIVIDE</option>

                                </select>

                                <input type="submit" name="convert" value="convert" class="btn btn-primary my-3">
                            </div>
                            <?php 
                                if(isset($_GET["convert"]))
                                {
                                    $inputValue_1 = filter_input(INPUT_GET, 'inputValue_1', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                                    $inputValue_2 = filter_input(INPUT_GET, 'inputValue_2', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                                    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                                    

                                    if($action == 1)
                                    {
                                        $result = $inputValue_1+$inputValue_2;
                                        echo '<div class="alert alert-primary"> Result :'.$result.'</div>';
                                    }
                                    else if ($action == 2)
                                    {
                                        $result = $inputValue_1-$inputValue_2;
                                        echo '<div class="alert alert-primary"> Result :'.$result.'</div>';
                                    }
                                    else if ($action == 3)
                                    {
                                        $result = $inputValue_1*$inputValue_2;
                                        echo '<div class="alert alert-primary"> Result :'.$result.'</div>';
                                    }
                                    else if ($action == 4)
                                    {
                                        $result = $inputValue_1/$inputValue_2;
                                        echo '<div class="alert alert-primary"> Result : '.$result.'</div>';
                                    }
                                }
                            
                            
                            ?>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>