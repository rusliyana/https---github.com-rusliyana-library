

<div  >

<div class="w3-padding-48"></div>
		

<div class="w3-container w3-padding-16" id="contact">
    <div class="w3-content w3-container w3-white w3-card w3-round-large" style="max-width:500px">
		<div class="w3-padding">
			<form action="" method="post">
			<img src="<?= base_url('images/logo.jpg') ?>" class="w3-image">

			<h3><b>Login User</b></h3>

                            <?= $this->session->flashdata('message'); ?>

                            <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                <div class="w3-section">
                                    <input type="text" class="w3-input w3-border"
                                        id="email" name="email"
                                        placeholder="Enter Email Address..." 
                                        value="<?= set_value('email'); ?>">
                                        <?= form_error('email','<small 
                                        class="text-danger pl-3">','</small>'); ?>

                                </div>
                                <div class="w3-section">
                                    <input type="password" class="w3-input w3-border"
                                        id="password" name="password" placeholder="Password">
                                        <?= form_error('password','<small 
                                        class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <button type="submit" class="w3-button w3-block w3-padding-large w3-black w3-margin-bottom ">
                                    Login
                                </button> 
                            </form>
                            <hr>
                            <div class="w3-center w3-padding">Don't have an account yet? 
                                <a href="<?= base_url('auth/register'); ?>" class="w3-text-red">REGISTER NOW!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</div>

</div>

