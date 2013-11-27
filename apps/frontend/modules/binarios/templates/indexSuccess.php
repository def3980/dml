<h1>Binario ss List</h1>

<table>
  <thead>
    <tr>
      <th>Bi</th>
      <th>Bi nombre</th>
      <th>Bi tamanio</th>
      <th>Bi bin</th>
      <th>Bi ext</th>
      <th>Pagos pa</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($binario_ss as $binarios): ?>
    <tr>
      <td><a href="<?php echo url_for('binarios/edit?bi_id='.$binarios->getBiId()) ?>"><?php echo $binarios->getBiId() ?></a></td>
      <td><?php echo $binarios->getBiNombre() ?></td>
      <td><?php echo $binarios->getBiTamanio() ?></td>
      <td><?php echo $binarios->getBiBin() ?></td>
      <td><?php echo $binarios->getBiExt() ?></td>
      <td><?php echo $binarios->getPagosPaId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('binarios/new') ?>">New</a>
