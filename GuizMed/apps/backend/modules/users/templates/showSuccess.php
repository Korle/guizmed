<table>
  <tbody>
    <tr>
      <th>User:</th>
      <td><?php echo $ad_user->getUserId() ?></td>
    </tr>
    <tr>
      <th>Fname:</th>
      <td><?php echo $ad_user->getFname() ?></td>
    </tr>
    <tr>
      <th>Lname:</th>
      <td><?php echo $ad_user->getLname() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $ad_user->getEmail() ?></td>
    </tr>
    <tr>
      <th>Uname:</th>
      <td><?php echo $ad_user->getUname() ?></td>
    </tr>
    <tr>
      <th>Passw:</th>
      <td><?php echo $ad_user->getPassw() ?></td>
    </tr>
    <tr>
      <th>Phone:</th>
      <td><?php echo $ad_user->getPhone() ?></td>
    </tr>
    <tr>
      <th>Ad role:</th>
      <td><?php echo $ad_user->getAdRoleId() ?></td>
    </tr>
    <tr>
      <th>Ad function:</th>
      <td><?php echo $ad_user->getAdFunctionId() ?></td>
    </tr>
    <tr>
      <th>Unlock code:</th>
      <td><?php echo $ad_user->getUnlockCode() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('users/edit?user_id='.$ad_user->getUserId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('users/index') ?>">List</a>
