<div  >

<div class="w3-padding-32"></div>
		

<div class="w3-container w3-padding-16" id="contact">
    <div class="w3-content w3-container w3-white  w3-card w3-round-large" style="max-width:500px">
		<div class="w3-padding">
			

		
			<form action="" method="post">
			<img src="<?= base_url('images/logo.jpg') ?>" class="w3-image">

			<h3><b>Registration</b></h3>
			
                    <form class="user" method="post" action="<?=base_url('auth/register'); ?>">                                                           
                        <!-- <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="name" name="name"
                                placeholder="Full name" value="<?= set_value('name'); ?>">
                                    <?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="email" name="email"
                                placeholder="Email Address" value="<?= set_value('email'); ?>">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user"
                                    id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user"
                                    id="password2" name="password2" placeholder="Repeat Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </button> -->
                        <div class="w3-section">
                            <input type="text" class="w3-input w3-border" id="email" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                            <?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
                        </div>
                        <div class="w3-section">
                            <input type="text" class="w3-input w3-border" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                            <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                        </div>
                        <div class="w3-section">
                            <input type="password" class="w3-input w3-border" id="password" name="password1" placeholder="Password">
                            <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
                        </div>
                        <div class="w3-section">
                            <input type="password" class="w3-input w3-border" id="password2" name="password2" placeholder="Repeat Password">
                            <?= form_error('password2','<small class="text-danger pl-3">','</small>'); ?>
                        </div>
                        <button type="submit" class="w3-button w3-block w3-padding-large w3-black w3-margin-bottom ">
                            Register Account
                        </button> 
                    </form>

                    <div class="text-center">
                        <a class="small" href="<?= base_url(); ?>auth">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

