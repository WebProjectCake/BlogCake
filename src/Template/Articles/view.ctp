<h1><?= h($article->title) ?></h1>
<p><?= h($article->content) ?></p>
<p><small>created: <?= $article->date->format(DATE_RFC850) ?></small></p>
