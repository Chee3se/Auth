<h1>Register</h1>

<form method="POST">
    <label>
        Email: 
        <input type="email" name="email" value="<?= old('email') ?>" />
        <?= error('email') ?>
    </label>
    <br>
    <label>
        Password: 
        <input type="password" name="password" value="<?= old('password') ?>" />
        <?= error('password') ?>
    </label>
    <br>
    <button>Register</button>
</form>