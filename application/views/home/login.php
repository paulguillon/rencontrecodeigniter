<form action="">
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
<p>Not logged in ? <a href="<?= base_url()?>register">Register</a></p>