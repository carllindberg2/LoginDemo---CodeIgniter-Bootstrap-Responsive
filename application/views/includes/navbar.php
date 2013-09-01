<div class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="<?php echo site_url('site')?>"><img src="<?php echo base_url('css/img/logindemo.png'); ?>"></a>
      <ul class="nav">
        <li class="divider-vertical"></li>
        <li id="nav-add"><?php echo anchor('', 'Hem'); ?></li>
        <li class="divider-vertical"></li>
      </ul>
      <div class="pull-right">
        <small class="navbar-text">User <?php echo anchor('site/profile', $this->session->userdata('email')); ?>&nbsp;&nbsp;&nbsp;&nbsp;</small>
        <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-primary"><i class="icon-road icon-white"></i> Logga ut</a>
      </div>
    </div>
  </div>
</div>
