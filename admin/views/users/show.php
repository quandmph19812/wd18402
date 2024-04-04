<h1>Chi tiết người dùng</h1>
<table>
    <tr>
        <th>Trường dữ liệu</th>
        <th>Dữ liệu</th>
    </tr>
    <?php  foreach($user as $fielName => $value): ?>
    <tr>
        <td><?= $fielName ?></td>
        <td><?= $value?></td>
    </tr>
    <?php endforeach;  ?>
</table>