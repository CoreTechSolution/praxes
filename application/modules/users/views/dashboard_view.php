<!-- Main content -->
<!--<section class="content">
    <div class="callout callout-success">
        <h4>Welcome!</h4>
        <p>Welcome to Praxes! You are logged in as <?php /*echo $this->session->userdata('first_name').' '.$this->session->userdata('last_name'); */?>. </p>
    </div>
</section>-->
<div class="user_contentainer">
    <div class="user_contentainer_title">Welcome!</div>
    <div class="user_contentainer_content">
        <p>Welcome to Praxes! You are logged in as <?php echo $this->session->userdata('first_name').' '.$this->session->userdata('last_name'); ?>. </p>
    </div>
</div>
<!-- /.content -->