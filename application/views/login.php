<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/nli_navbar'); ?>
<div class="container">
<br />
<div class="content" style="display:none">
  <div class="page-header">
    <h2>Loginformulär</h2>
  </div>
  <div class="row">
    <div class="span4">
      <form class="well" action="<?php echo site_url('login/check'); ?>" method="post" accept-charset="utf-8">
        <input type="text" class="input-block-level" name="email" placeholder="Email" required maxlength="40" autofocus />
        <input type="password" class="input-block-level" name="pwd" placeholder="Lösenord" required maxlength="20" />
        <button type="submit" class="btn btn-primary btn-block">
        <i class="icon-home icon-white"></i> Logga in</button>
      </form>
    </div>
  </div>
  <?php if (isset($error)): ?>
  <div class="row">
    <div class="span4">
      <div class="alert alert-error">
        <strong>Login</strong> failed!.
      </div>
    </div>
  </div>
  <?php else: ?>
  <div class="row">
    <div class="span4">
      <div class="alert alert-info">
        <small>Registrera dig här &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small>
        <a href="<?php echo site_url('signup'); ?>" class="btn btn-info"><i class="icon-arrow-right icon-white"></i> Registera dig nu</a>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="row">
   
  </div>
</div>
<script src="<?php echo base_url('js/jquery.js'); ?>"></script>
<script>
$(document).ready(function() {
  $('.content').fadeIn(1000);
});
</script>
<?php $this->load->view('includes/footer'); ?>
