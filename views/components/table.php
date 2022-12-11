<thead>
    <tr class="table-dark">
      <th scope="col">Pet</th>
      <th scope="col">Name</th>
      <th scope="col">Price (€)</th>
      <th scope="col">Vaccinated</th>
      <th scope="col">Gender</th>
      <th scope="col">Birthday</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pets as $pet) { ?>

    
    <tr class="table-warning">
      <td><?=$pet->petTitle?></td>
      <td><?=$pet->name?></td>
      <td><?=$pet->price?></td>
      <td><?=   ($pet->vaccinate) ? "Yes" : "No"   ?></td>
      <td><?=   ($pet->gender) ? "Male" : "Female" ?></td>
      <td><?=$pet->birthday?></td>
      <td>
        <form action="" metchod="get" >
          <input type="hidden" name="id" value="<?=$pet->id?>">
          <button class="btn btn-primary" name="edit"type="submit">Edit</button> 
        </form>
        
      </td>
      <td>
      <form action="" method="post">
        <input type="hidden" name="id" value="<?=$pet->id?>">
        <button class="btn btn-danger" name="destroy" type="submit">Delete</button>
      </form>
      </td>
      
    </tr>
   <?php } ?>
  </tbody>