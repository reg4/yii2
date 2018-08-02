<h1>List of elements</h1>
<?php foreach($posts as $post): ?>

 <div class="panel panel-default">
 <div class="panel-heading">
 	<p>Категория: <?= $post->category->name ?></p>
 <h3 class="panel-title"><?= $post->title ?></h3>
 </div>
 <div class="panel-body">
 <?= $post->excerpt ?>
 </div>
 </div>
<?php endforeach; ?>