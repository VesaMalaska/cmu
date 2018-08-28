<?php
  if(!$operatorOnlineStatus){
    $operatorOnlineSatusText = 'Offline';
    $colorClass = 'text-danger';
  } else if($operatorOnlineStatus == 1){
    $operatorOnlineSatusText = 'Online';
    $colorClass = 'text-success';
  } else if($operatorOnlineStatus == 2){
    $operatorOnlineSatusText = 'Busy';
    $colorClass = 'text-warning';
  }
?>

<nav class="navbar navbar-expand-sm navbar-dark" style="z-index:100;">
  <a class="navbar-brand py-0 my-0 ml-3" href="<?php echo base_url(); ?>">Chat Me Up!</a>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link" href="user" id="userNavDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="<?php echo base_url(); ?>assets/images/default-user.png" alt="<?php echo $username; ?>" class="rounded-circle user-pic-small">
        <?php echo $username; ?>
        <i class="fas fa-circle <?php echo $colorClass; ?>" title="Status: <?php echo $operatorOnlineSatusText; ?>"></i>
      </a>
      <div class="dropdown-menu" aria-labelledby="userNavDropdown">
        <div class="row mx-0">
          <div class="col-3 pr-0 pt-1"><?php if($operatorOnlineStatus == 1) echo '<i class="fas fa-check"></i>'; ?></div>
          <div class="col px-0"><a class="dropdown-item px-1" href="<?php echo base_url(); ?>Operator_status/change_operator_online_status/1">Online</a></div>
          <div class="col-2 pl-0 pt-1"><i class="fas fa-circle text-success"></i></div>
        </div>
        <div class="row mx-0">
          <div class="col-3 pr-0 pt-1"><?php if($operatorOnlineStatus == 2) echo '<i class="fas fa-check"></i>'; ?></div>
          <div class="col px-0"><a class="dropdown-item px-1" href="<?php echo base_url(); ?>Operator_status/change_operator_online_status/2">Busy</a></div>
          <div class="col-2 pl-0 pt-1"><i class="fas fa-circle text-warning"></i></div>
        </div>
        <div class="row mx-0">
          <div class="col-3 pr-0 pt-1"><?php if($operatorOnlineStatus == 0) echo '<i class="fas fa-check"></i>'; ?></div>
          <div class="col px-0"><a class="dropdown-item px-1" href="<?php echo base_url(); ?>Operator_status/change_operator_online_status/0">Offline</a></div>
          <div class="col-2 pl-0 pt-1"><i class="fas fa-circle text-danger"></i></div>
        </div>
        <div class="dropdown-divider"></div>
        <div class="row mx-0">
          <div class="col-3 pr-0 pt-1"><i class="fas fa-sign-out-alt"></i></div>
          <div class="col px-0"><a class="dropdown-item px-1" href="<?php echo base_url(); ?>auth/logout"> Log out</a></div>
          <div class="col-2 pl-0 pt-1"></div>
        </div>
      </div>
    </li>
  </ul>
</nav>


<div class="row p-0 m-0">
  <div class="col-sm-auto p-0 m-0">
    <nav class="vertical-nav pr-4" style="z-index:1;">
      <ul class="nav flex-column">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url(); ?>">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>users">Users</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </nav>
  </div>
  <div class="col">
    <?php if($operatorsOnline) echo 'Operators online!'; ?>
  </div>
</div>
