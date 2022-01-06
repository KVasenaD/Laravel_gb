<h1>Список категорий</h1>
<br>
<?php foreach($category as $categoryItem): ?>
  <div>
	  <strong><a href="<?=route('news.show', 
      ['id' => $categoryItem['id']])?>"><?=$categoryItem['title']?></a></strong>
	  <hr>
  </div>
<?php endforeach; ?>