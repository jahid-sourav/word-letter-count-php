<?php

require_once './vendor/autoload.php';

use App\classes\Count;

$wordResult = '';
$letterResult = '';
if (isset($_POST['main_btn']))
{
    $count = new Count($_POST);
    $wordResult = $count->countword();
    $letterResult = $count->countletter();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>WORD & LETTER COUNT</title>
    <!-- CSS Links Starts Here -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css"/>
    <!-- CSS Links Ends Here -->
</head>

<body>

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-dark shadow">
                        <div class="card-header shadow bg-dark">
                            <h3 class="text-center text-uppercase card-title text-info">Word &amp; Letter Count</h3>
                        </div>

                        <div class="card-body">
                             <form action="" method="POST">
                                 <div class="form-group">
                                     <div class="row">
                                         <div class="col-lg-4">
                                             <label for="string" class="mb-0 text-info font-weight-bold">Enter Your String</label>
                                         </div>
                                         <div class="col-lg-8">
                                             <input type="text" name="user_string" required class="form-control border-info" id="string"/>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <div class="row">
                                         <div class="col-lg-4">
                                             <label for="result" class="mb-0 text-info font-weight-bold">Result(Word Count)</label>
                                         </div>
                                         <div class="col-lg-8">
                                             <input type="text" readonly value="<?= $wordResult; ?>" class="form-control border-info" id="result"/>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <div class="row">
                                         <div class="col-lg-4">
                                             <label for="lresult" class="mb-0 text-info font-weight-bold">Result(Letter Count)</label>
                                         </div>
                                         <div class="col-lg-8">
                                             <input type="text" readonly value="<?= $letterResult; ?>" class="form-control border-info" id="lresult"/>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <div class="row">
                                         <div class="col-lg-4">
                                             <label for="string" class="mb-0"></label>
                                         </div>
                                         <div class="col-lg-8">
                                             <input type="submit" name="main_btn" class="btn btn-info text-uppercase">
                                         </div>
                                     </div>
                                 </div>
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script File Links Starts Here -->
    <script src="./assets/js/jquery-3.6.0.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Script File Links Ends Here -->
</body>
</html>