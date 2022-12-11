<?php include "./routs.php"; 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./views/components/header.php"; ?>
</head>
<body>
    <header >
    <nav class="navbar bg-light navbar-dark bg-dark p-3">
    <?php include "./views/components/nav.php";?>
    </nav>
    </header>

<div class="container">
    <div class="row">
        
        <div class="col-6">
            <form action="" method="post">
            
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="inputEmail3" class="form-label">Pet</label>
                        <input type="text" class="form-control" name="petTitle" id="inputEmail3" placeholder="E.g. Dog" value="<?= (isset($_GET['edit'])) ? $pet->petTitle : ""   ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="inputEmail3" class="form-label">Pet name</label>
                        <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="E.g. Bob" value="<?= (isset($_GET['edit'])) ? $pet->name : ""   ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Price </label>
                        <input type="number" class="form-control" name="price" id="inputEmail4" placeholder="E.g. 50" value="<?= (isset($_GET['edit'])) ? $pet->price : ""   ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input  class="form-check-input" <?=$checked?> type="checkbox"  name="isVaccinated"  id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                        Vaccinated
                        </label>
                    </div>
                </div>
                <h6 class="mt-3">Gender</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="1" <?=$checked?>  id="flexRadioDisabled" >
                    <label class="form-check-label" for="flexRadioDisabled">
                     Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="0"  <?=$checked?>  id="flexRadioCheckedDisabled" >
                    <label class="form-check-label" for="flexRadioCheckedDisabled">
                    Female
                    </label>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                    <label for="birthday" class="form-label mt-3">Birthday:</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" value="<?= (isset($_GET['edit'])) ? $pet->birthday : ""   ?>"> 
                    </div>
                </div>
                    <?php if(!isset($_GET['edit'])) { ?>
                    <button class="btn btn-success mb-3 px-5" name="save" type="submit">Save</button>
                <?php }  else { ?>  
                    <input type="hidden" name="id" value="<?=$pet->id?>">
                    <button class="btn btn-info mb-3 px-5" name="update" type="submit">Update</button>    
                    <?php } ?>
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