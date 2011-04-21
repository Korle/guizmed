<h1>Ad roles List</h1>

<table>
  <thead>
    <tr>
      <th>Role</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ad_roles as $ad_role): ?>
    <tr>
      <td><a href="<?php echo url_for('roles/show?role_id='.$ad_role->getRoleId()) ?>"><?php echo $ad_role->getRoleId() ?></a></td>
      <td><?php echo $ad_role->getName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('roles/new') ?>">New</a>
