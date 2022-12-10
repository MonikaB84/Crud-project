<?php include "./routs.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./views/components/header.php"; ?>
</head>
<body>
    <header>
    <nav class="navbar bg-light">
    <?php include "./views/components/nav.php";?>
    </nav>
    </header>

<div class="container">
    <div class="row">
        
        <div class="col-6">
            <form action="" method="post">
            
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="inputEmail3" class="form-label">Pet type</label>
                        <input type="text" class="form-control" name="petTitle" id="inputEmail3" placeholder="E.g. Dog">
                    </div>

                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" id="inputEmail4" placeholder="E.g. 50">
                    </div>

                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                        vaccinated
                        </label>
                    </div>
                </div>


                <button class="btn btn-success m-3" type="submit">Save</button>

            </form>
        </div>
        
        <div class="col-3"></div>
    </div>



    <table class="table table-striped">
        <?php include "./views/components/table.php";?>
    </table>
</div>
    


</body>
</html>