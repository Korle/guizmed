<h1>Ad users List</h1>

<table>
  <thead>
    <tr>
      <th>User</th>
      <th>Fname</th>
      <th>Lname</th>
      <th>Email</th>
      <th>Uname</th>
      <th>Passw</th>
      <th>Phone</th>
      <th>Ad role</th>
      <th>Ad function</th>
      <th>Unlock code</th>
      <th>Token</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ad_users as $ad_user): ?>
    <tr>
      <td><a href="<?php echo url_for('users/show?user_id='.$ad_user->getUserId()) ?>"><?php echo $ad_user->getUserId() ?></a></td>
      <td><?php echo $ad_user->getFname() ?></td>
      <td><?php echo $ad_user->getLname() ?></td>
      <td><?php echo $ad_user->getEmail() ?></td>
      <td><?php echo $ad_user->getUname() ?></td>
      <td><?php echo $ad_user->getPassw() ?></td>
      <td><?php echo $ad_user->getPhone() ?></td>
      <td><?php echo $ad_user->getAdRoleId() ?></td>
      <td><?php echo $ad_user->getAdFunctionId() ?></td>
      <td><?php echo $ad_user->getUnlockCode() ?></td>
      <td><?php echo $ad_user->getToken() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('users/new') ?>">New</a>
