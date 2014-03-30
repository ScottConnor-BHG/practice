<h3>Admin User List</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="admin-user-list">
  <thead>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Created</th>
      <th>Last Login</th>
      <th>Login Count</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($admin_users as $pos => $user): ?>
    <tr class="<?php echo ($pos % 2 == 0) ? 'odd' : 'even'; ?>">
      <td><?php echo $user->getId(); ?></td>
      <td><?php echo $user->getUsername(); ?></td>
      <td><?php echo $user->getCreatedAt(); ?></td>
      <td><?php echo $user->getLastLoginAt(); ?></td>
      <td><?php echo $user->getLoginCount(); ?></td>
    </tr> 
    <?php endforeach; ?>
  </tbody>
</table>
<h3> User List</h3>
<a href='/user/add_user/'>  <input type='button' name='test' class="btn btn-primary btn-lg btn-block" value='Add New User'></a>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="user-list">
  <thead>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Created</th>
      <th>Last Login</th>
      <th>Login Count</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($users as $pos => $user): ?>
    <tr class="<?php echo ($pos % 2 == 0) ? 'odd' : 'even'; ?>">
      <td><?php echo $user->getId(); ?></td>
      <td><?php echo $user->getUsername(); ?></td>
      <td><?php echo $user->getCreatedAt(); ?></td>
      <td><?php echo $user->getLastLoginAt(); ?></td>
      <td><?php echo $user->getLoginCount(); ?></td>
    </tr> 
    <?php endforeach; ?>
  </tbody>
</table>