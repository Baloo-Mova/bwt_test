<h1 class="text-center page-header">Регистрация</h1>


<form class="form-horizontal" method="POST" id="registerForm">

    <?php if ($model->hasErrors()): ?> 
        <?php foreach ($model->getErrors() as $error): ?>
            <div class="alert alert-danger">
                <p>
                    <?= $error ?>
                </p>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success">
            <p class="text-center">
                Спасибо за регистрацию, для получения доступа к дополнительным возможностям вам нужно пройти авторизацию.
            </p>
        </div>
    <?php endif; ?>

    <div class="form-group">
        <label class="control-label col-xs-3" for="lastName">Фамилия:</label>
        <div class="col-xs-6">
            <input type="text" name="sureName" value="<?= $model->sureName; ?>" class="form-control" id="lastName" placeholder="Введите фамилию">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" for="firstName">Имя:</label>
        <div class="col-xs-6">
            <input type="text" name="name" value="<?= $model->name; ?>" class="form-control" id="firstName" placeholder="Введите имя">
        </div>
    </div>
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
        <label class="control-label col-xs-3">Дата рождения:</label>
        <div class="col-xs-6">
            <div class="input-group date">
                <input type="text" name="date" value="<?= $model->date; ?>" class="form-control datepicker"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
            </div>
        </div> 
    </div> 
    <div class="form-group">
        <label class="control-label col-xs-3">Пол:</label>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="gender" value="male" <?= $model->gender == "male" ? 'checked' : '' ?> > Мужской
            </label>
        </div>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="gender" value="female" <?= $model->gender == "female" ? 'checked' : '' ?> > Женский
            </label>
        </div>
    </div>

    <br />
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-primary" id="register" name="register" value="Регистрация">
            <input type="reset" class="btn btn-default" value="Очистить форму">
        </div>
    </div>
</form>

