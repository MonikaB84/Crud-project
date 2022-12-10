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


    <table class="table">
  <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pets as $pet) { ?>

    
    <tr>
      <td><?=$pet->petTitle?></td>
      <td><?=$pet->name?></td>
      <td><?=$pet->price?></td>
      <td><?=$pet->vaccinate?></td>
      <td><?=$pet->gender?></td>
      <td><?=$pet->birthday?></td>
      
    </tr>
   <?php } ?>
  </tbody>
</table>


</body>
</html>