<?php 
require("class/Calculator.php");
$Calculator   = new Calculator();


if(isset($_POST['submit']) && $_POST['submit']=="submitbtn")
{
    $post           = $_POST;
    $result         =  $Calculator->calculate($_POST);
}
else
{
    $result             = "";
    $post               = array();
    $post['num1']       = "";
    $post['num2']       = "";
    $post['operator']   = "";
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Simple Calculator</title>
    <style>
        body {
            height: 100%;
        }

        .container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .divbox{
            width:50%;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            text-align:center;
        }
    </style>
  </head>
  <body>
  <div class="container">
    <div class="divbox" >
        <h2>Simple Calculator</h2>
        <form action="" method="post">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Number 1</label>
                <div class="col-sm-8">
                <input type="number"  class="form-control" name="num1" id="num2" value="<?php echo $post['num1'];?>" required min="0">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Number 2</label>
                <div class="col-sm-8">
                <input type="number"  class="form-control" name="num2" id="num2" value="<?php echo $post['num2'];?>" required min="0">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Operator</label>
                <div class="col-sm-8">
                <select class="form-control" name="operator" id="operator" required>
                    <option value="" >---Select Operator---</option>
                    <option value="ADD" <?php echo $post['operator']=="ADD"? "selected" : ""; ?> >Addition</option>
                    <option value="SUB" <?php echo $post['operator']=="SUB"? "selected" : ""; ?>>Substration</option>
                    <option value="MULT" <?php echo $post['operator']=="MULT"? "selected" : ""; ?>>Multiply</option>
                    <option value="DIV" <?php echo $post['operator']=="DIV"? "selected" : ""; ?>>Division</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Result</label>
                <div class="col-sm-8 text-left">
                    <span class=" align-middle"><b><?php echo $result;?></b></span>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary" value="submitbtn">Submit</button>
            <button type="reset" name="" class="btn btn-default">Reset</button>

        </form>
    </div>
</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>