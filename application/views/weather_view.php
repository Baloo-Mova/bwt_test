<h1 class="text-center page-header">Данные о погоде на: <?= date("d-m-Y H:i:s") ?></h1>

<div style="margin: 0 auto; width: 50%;">
    <table class="table table-user-information">
        <tbody>
            <tr>
                <td>Облачность</td>
                <td><?= $model->cloudness ?></td>
            </tr>
            <tr>
                <td>Ветер</td>
                <td><?= $model->wind ?></td>
            </tr> 
            <tr>
                <td>Температура</td>
                <td><?= $model->temperature ?></td>
            </tr>
            <tr>
                <td>Давление</td>
                <td><?= $model->barp ?></td>
            </tr>
            <tr>
                <td>Влажность</td>
                <td><?= $model->hum ?></td>
            </tr> 
            <tr>
                <td>Температура воды</td>
                <td><?= $model->water ?></td>
            </tr>
        </tbody>
    </table> 
</div>