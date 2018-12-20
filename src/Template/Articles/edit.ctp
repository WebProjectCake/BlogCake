<h1>Modifier un article</h1>
<?php
echo $this->Form->create($article);
echo $this->Form->control('title');
echo $this->Form->control('content', ['rows' => '3']);
echo $this->Form->button(__('Sauvegarder l\'article'));
echo $this->Form->end();
?>