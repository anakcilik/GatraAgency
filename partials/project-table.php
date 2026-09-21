<?php
if (!isset($data)) { exit; }
?>
<section class="panel">
  <h2>Projects</h2>
  <div class="table">
    <div class="row head"><span>Project</span><span>Status</span><span>Progress</span><span>Deadline</span><span>Budget</span></div>
    <?php foreach ($data['projects'] as $project): ?>
      <div class="row">
        <span><strong><?= h($project['name']) ?></strong><small><?= h($project['client']) ?> / <?= h($project['id']) ?></small></span>
        <span><?= h($project['status']) ?></span>
        <span><div class="bar"><span style="width: <?= (int) $project['progress'] ?>%"></span></div><?= (int) $project['progress'] ?>%</span>
        <span><?= h($project['deadline']) ?></span>
        <span><?= rupiah((int) $project['budget']) ?></span>
      </div>
    <?php endforeach; ?>
  </div>
</section>
