<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/navbar'); ?>
<div class="container">
<br />
<div class="content" style="display:none">
  <div class="page-header">
    <h2>De fem senaste inloggningarna</h2>
  </div>
  <div class="row">
    <div class="span9 offset1">
      <table class="table table-striped table-bordered tablesorter" id="tloginat">
        <thead>
          <tr>
            <th><i class="icon-flag"></i> Status</th>
            <th><i class="icon-eye-open"></i> IP-adress</th>
            <th><i class="icon-calendar"></i> Datum</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($loginattempts_log as $loginattempts_logv): ?>
          <tr>
            <td><?php echo $loginattempts_logv['lal_outcome'] == 1 ? "Inloggad" : "Fel lösenord"; ?></td>
            <td><?php echo $loginattempts_logv['lal_iphost']; ?></td>
            <td><?php echo $loginattempts_logv['lal_when']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script src="<?php echo base_url('js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.tablesorter.js'); ?>"></script>
<script>
$(document).ready(function() {

  $('#tloginat').tablesorter();

  $('.content').fadeIn(1000);
});
</script>
<?php $this->load->view('includes/footer'); ?>
