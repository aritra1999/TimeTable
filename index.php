<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KIIT-HELP | Home</title>
    <?php include'include/link.php';?>
</head>

<body>

    <?php include'include/header.php'?>
    <div class="container">

        <span id="top">TIME TABLE</span>

        <form style="padding-top: 3vh" action="result.php" method="POST">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Semester</label>
                <select class="form-control" name="year" id="exampleFormControlSelect1" require>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Section</label>
                <select class="form-control" name="sec" id="exampleFormControlSelect1" require>
                    <option>B17</option>
                    <option>B18</option>
                    <option>B19</option>
                    <option>B20</option>
                    <option>B21</option>
                    <option>B23</option>
                    <option>B24</option>
                    <option>B25</option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary custom my-1">Submit</button>
    </div>
    </form>

  
    </form>


    </div>
    <?php include'include/footer.php'?>
</body>

</html>