<h1 class="text-center page-header">Список сообщений</h1> 
 
<table class="table table-striped">
    <thead>
      <tr>
        <th>Имя</th>
        <th>Email</th>
        <th>Сообщение</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($feedbacklist as $item):?>
      <tr>
        <td><?= $item->name ?></td>
        <td><?= $item->email ?></td>
        <td><?= $item->message ?></td>
      </tr> 
    <?php endforeach; ?>
    </tbody>
  </table>