<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/nli_navbar'); ?>
<div class="container">
<br />
<div class="content" style="display:none">
  <div class="page-header">
    <h2>Registrera dig</h2>
  </div>
  <div class="row">
    <div class="span4">
      <form id="formSignup" class="well" accept-charset="utf-8">
        <input type="text" class="input-block-level" name="email" placeholder="Din Email" required maxlength="40" autofocus />
        <input type="text" class="input-block-level" name="email2" placeholder="Upprepa Email" required maxlength="40" data-validation-matches-match="email" data-validation-matches-message="Must match email address entered above" />
        <input type="password" class="input-block-level" name="pwd" placeholder="Önskat lösenord" required maxlength="20" />
        <input type="password" class="input-block-level" name="pwd2" placeholder="Upprepa önskat lösenord" required maxlength="20" />
        <p class="help-block">Lösenord måste vara minst 4 tecken. </p>
        <button type="submit" class="btn btn-primary btn-large">
        <i class="icon-bell icon-white"></i> Registera</button>
      </form>
    </div>
  </div>
  <div id="success" class="row" style="display: none">
    <div class="span4">
      <div id="successMessage" class="alert alert-success">
      <p><strong>Registrering</strong> lyckad!</p>
      <a href="<?php echo site_url('login'); ?>" class="btn btn-success"><i class="icon-arrow-right icon-white"></i> Logga in nu</a>
      </div>
    </div>
  </div>
  <div id="error" class="row" style="display: none">
    <div class="span4">
      <div id="errorMessage" class="alert alert-error"></div>
    </div>
  </div>
</div>
<script src="<?php echo base_url('js/jquery.js'); ?>"></script>
<script type="text/javascript">
$(document).ready(function() {
  
  $('#formSignup').submit(function() {
    
    var form = $(this);
    form.children('button').prop('disabled', true);
    $('#success').hide();
    $('#error').hide();
    
    var faction = "<?php echo site_url('signup/check'); ?>";
    var fdata = form.serialize();

    $.post(faction, fdata, function(rdata) {
      
      var json = jQuery.parseJSON(rdata);
      
      if(json.isSuccessful) {
          $('#success').show();
          form.children('input').val('');
          form.children('input').blur()
      } else {
          $('#errorMessage').html(json.message);
          $('#error').show();
          form.children('input[name="email"]').select();
      }
      
      form.children('button').prop('disabled', false);
    });
      
    return false;
  });

  $('.content').fadeIn(1000);
});
</script>
<?php $this->load->view('includes/footer'); ?>
