<?php if (!empty(validation_errors())) : ?>
	<div class="alert alert-danger"><?php echo validation_errors(); ?></div>
<?php endif; ?>

<form action="<?= base_url('home/login') ?>" method="post">
    <div class="form-group">
        <label for="userMail">Mail</label>
        <input type="email" name="userMail" id="userMail" class="form-control">
    </div>
    <div class="form-group">
        <label for="userPassword">Password</label>
        <input type="password" name="userPassword" id="userPassword" class="form-control">
    </div>
    <input type="submit" value="Login" class="btn btn-primary">
</form>
<p>Not logged in ? <a href="<?= base_url('home/register')?>">Register</a></p>