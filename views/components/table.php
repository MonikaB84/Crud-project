<thead>
    <tr class="table-dark">
      <th scope="col">Pet</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
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
      <td><button class="btn btn-primary" type="submit">Edit</button></td>
      <td><button class="btn btn-danger" type="submit">Delete</button></td>
      
    </tr>
   <?php } ?>
  </tbody>