<h1 class="text-center page-header">Вход</h1>
 
<form class="form-horizontal" method="POST" id="loginForm">
<?php if ($model->hasErrors()): ?> 
    <?php foreach ($model->getErrors() as $error): ?>
        <div class="alert alert-danger">
            <p>
                <?= $error ?>
            </p>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

    <div class="form-group">
        <label class="control-label col-xs-3" for="inputEmail">Email:</label>
        <div class="col-xs-6">
            <input type="email" name="email" value="<?= $model->email; ?>" class="form-control" id="inputEmail" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" for="inputPassword">Пароль:</label>
        <div class="col-xs-6">
            <input type="password" name="password" value="<?= $model->password; ?>" class="form-control" id="inputPassword" placeholder="Пароль">
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-6">
            <input type="submit" class="btn btn-primary" id="register" value="Вход" style="width: 100%;">
        </div>
    </div>
    
</form>