<h1 class="text-center page-header">Обратная связь</h1> 
 
<form class="form-horizontal" method="POST" id="feedbackform">

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
               Спасибо за вопрос, мы свяжемся с вами.
            </p>
        </div>
    <?php endif; ?>

    <div class="form-group">
        <label class="control-label col-xs-3" for="name">Имя:</label>
        <div class="col-xs-6">
            <input type="text" name="name" value="<?= $model->name; ?>" class="form-control" id="name" placeholder="Введите имя">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" for="inputEmail">Email:</label>
        <div class="col-xs-6">
            <input type="email" name="email" value="<?= $model->email; ?>" class="form-control" id="inputEmail" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" for="inputPassword">Сообщение:</label>
        <div class="col-xs-6">
            <textarea name="message" rows="4" value="<?= $model->message; ?>" class="form-control" id="inputPassword" placeholder="Сообщение"></textarea>
        </div>
    </div> 
    
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-3">
            <img src = "/test_bwt/captcha" alt="Тут должна быть капча"/>
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-xs-3" for="inputEmail">Введите капчу:</label>
        <div class="col-xs-6">
            <input type = "text" name = "captcha" class="form-control"/>
        </div>
    </div>
 

    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-primary" id="register" name="feedback" value="Отправить">
            <input type="reset" class="btn btn-default" value="Очистить форму">
        </div>
    </div>
</form>

