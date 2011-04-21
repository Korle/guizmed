<table>
  <tbody>
    <tr>
      <th>Role:</th>
      <td><?php echo $ad_role->getRoleId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $ad_role->getName() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('roles/edit?role_id='.$ad_role->getRoleId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('roles/index') ?>">List</a>
