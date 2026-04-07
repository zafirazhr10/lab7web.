<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div id="login-wrapper" style="max-width: 400px; margin: 40px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; background: #fff;">
    <h1 style="margin-bottom: 20px; text-align: center;">Sign In</h1>

    <?php if(session()->getFlashdata('flash_msg')):?>
        <div style="color: #721c24; background-color: #f8d7da; border: 1px solid #f5c6cb; padding: 10px; margin-bottom: 20px; border-radius: 4px; font-size: 14px;">
            <?= session()->getFlashdata('flash_msg') ?>
        </div>
    <?php endif;?>

    <form action="" method="post">
        <div style="margin-bottom: 15px;">
            <label for="InputForEmail">Email address</label>
            <input type="email" name="useremail" id="InputForEmail" value="<?= set_value('useremail') ?>" required 
                   style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 20px;">
            <label for="InputForPassword">Password</label>
            <input type="password" name="userpassword" id="InputForPassword" required 
                   style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        <button type="submit" class="btn btn-primary" style="width: 100%; padding: 10px; font-weight: bold;">Login</button>
    </form>
</div>
<?= $this->endSection() ?>