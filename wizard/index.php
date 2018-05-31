<?php
$tabs = ['Tuup','Valjaanded','Tellija','Sisu','limumine','Maskmine'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Ads website</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Ads Website</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
    <div class="container">

      <div id="wizard">
          <ul>
            <?php foreach( $tabs as $key => $tab ){?>
              <li><a href="#" data-step="<?php echo $key; ?>"> <?php echo $key + 1; ?>. <span class="tab-name"><?php echo $tab; ?><span></a></li>
            <?php }?>
          </ul>
            <form action="" method="get">
                <div class="steps-container" data-activetab="0">

                  <?php foreach( $tabs as $key => $tab ){?>
                    <div class="hide step">
                        <h3 class="border-bottom border-gray pb-2"><?php echo $tab; ?></h3>
                                <div class="form-group">
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">
                                        <div class="form-check">
                                            <label class="container">

                                        <input type="checkbox" class="form-check-input">


                                        </label>
                                        </div>
                                      </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Kuulutus">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">
                                        <div class="form-check">
                                                <label class="container">
                                          <input type="checkbox" class="form-check-input" >
                                            </label>

                                        </div>
                                      </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Onnitlus">
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">
                                        <div class="form-check">
                                          <label class="container">
                                          <input type="checkbox" class="form-check-input">
                                        </label>

                                        </div>
                                      </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Kaastundeavaldus">
                                  </div>
                                </div>

                    </div>
                  <?php }?>

                  </div>

                <div class="row">
                  <div class="col-md-12">
                    <center>
                      <button class="btn btn-default btn-previous"> Previous</button>
                      <button class="btn btn-primary btn-next"> Next</button>
                      <button type="submit" class="btn btn-success btn-finish">Finish</button>
                    </center>
                  </div>
                </div>
              </form>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/wizard.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
</html>
