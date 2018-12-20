<h1>Tous les articles du Blog</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Date creation</th>
    </tr>

    <!-- Ici se trouve l'itération sur l'objet query de nos $articles, l'affichage des infos des articles -->

    <?php foreach ($articles as $article): ?>
        <tr>
            <td><?= $article->id ?></td>
            <td>
                <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
            </td>
            <td>
                 <?= $article->date = '11-12-2018';
                 $article->date ?>
            </td>
            <td>
                <?= $this->Form->postLink(
                    'Supprimer',
                    ['action' => 'delete', $article->id],
                    ['confirm' => 'Etes-vous sûr?'])
                ?>
                <?= $this->Html->link('Modifier', ['action' => 'edit', $article->id]) ?>
            </td>
        </tr>
    <?php endforeach; ?>

    <?= $this->Html->link('Ajouter un article', ['action' => 'add']) ?>
</table>