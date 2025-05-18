<?php if($error = $this->session->flashdata('msg')){ ?>

	 <h3 class="text-success"><?php echo  $error; ?></h3>

<?php } ?>