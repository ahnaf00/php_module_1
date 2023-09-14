<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Temperature Converter</title>
  </head>
  <body>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <h2>Temperature Converter</h2>
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
                                    <label for="formGroupExampleInput" class="form-label">Input Temperature</label>
                                    <input type="text" name="inputValue" class="form-control" placeholder="Input temperature in Celcius">
                                </div>

                                <div class="col-md-4">
                                <label for="inputState" class="form-label">State</label>
                                <select id="inputState" name="toConvert" class="form-select">
                                    <option>Choose...</option>
                                    <option value="1" <?php if (isset($_GET['toConvert']) && $_GET['toConvert'] == '1') echo 'selected'; ?>>Fahrenheit</option>
                                    <option value="2" <?php if (isset($_GET['toConvert']) && $_GET['toConvert'] == '2') echo 'selected'; ?>>Celsius</option>
                                </select>

                                <input type="submit" name="convert" value="convert" class="btn btn-primary my-3">
                            </div>
                            <?php 
                                if(isset($_GET["convert"]))
                                {
                                    $inputValue = filter_input(INPUT_GET, 'inputValue', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                                    $toConvert = filter_input(INPUT_GET, 'toConvert', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                                    

                                    if($toConvert == 1)
                                    {
                                        $fahrenheit = (($inputValue/5)*9)+32;
                                        echo '<input type="text" id="result" class="form-control" value="' . $fahrenheit . '°F" readonly>';
                                    }
                                    else if ($toConvert == 2)
                                    {
                                        $celcius = (($inputValue-32)/9)*5;
                                        echo '<input type="text" id="result" class="form-control" value="' . $celcius . '°C" readonly>';
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