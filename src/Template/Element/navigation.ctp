<div>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="#">List of user</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">Users</a>
    <div class="dropdown-menu">
      <a><?= $this->Html->link(__('List'), ['controller' => 'Users','action' => 'index'], array('class' => 'dropdown-item')); ?></a>
      <a><?= $this->Html->link(__('New User'), ['controller' => 'Users','action' => 'add'], array('class' => 'dropdown-item')); ?></a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">Shifts</a>
    <div class="dropdown-menu">
      <a><?= $this->Html->link(__('List'), ['controller' => 'Shifts', 'action' => 'index'], array('class' => 'dropdown-item')); ?></a>
      <a><?= $this->Html->link(__('Add New'), ['controller' => 'Shifts', 'action' => 'add'], array('class' => 'dropdown-item')); ?></a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">Computers</a>
    <div class="dropdown-menu">
      <a><?= $this->Html->link(__('List'), ['controller' => 'Computers', 'action' => 'index'], array('class' => 'dropdown-item')); ?></a>
      <a><?= $this->Html->link(__('Add New'), ['controller' => 'Computers', 'action' => 'add'], array('class' => 'dropdown-item')); ?></a>
    </div>
  </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">Clients</a>
    <div class="dropdown-menu">
      <a><?= $this->Html->link(__('List'), ['controller' => 'Locations', 'action' => 'index'], array('class' => 'dropdown-item')); ?></a>
      <a><?= $this->Html->link(__('Add New'), ['controller' => 'Locations', 'action' => 'add'], array('class' => 'dropdown-item')); ?></a>
    </div>
  </li>
  <li>
  <?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout'], array('class' => 'btn btn-outline-info')); ?>
  </li>
</ul>