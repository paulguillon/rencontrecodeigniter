<form action="">
    <div class="form-group">
        <label for="userMail">Mail</label>
        <input type="email" name="userMail" id="userMail" class="form-control">
    </div>
    <div class="form-group">
        <label for="userPassword">Password</label>
        <input type="password" name="userPassword" id="userPassword" class="form-control">
    </div>
    <div class="form-group">
        <label for="userConfirm">Confirm password</label>
        <input type="password" name="userConfirm" id="userConfirm" class="form-control">
    </div>
    <input type="submit" value="Register" class="btn btn-primary">
</form>
<p>Already registered ? <a href="<?= base_url()?>login">Login</a></p>