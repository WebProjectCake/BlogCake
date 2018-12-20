<?php
    echo $this->Html->charset();
    echo $this->Html->css(['bootstrap']);
    echo $this->Html->script(['bootstrap']);

    echo "<nav class=\"navbar fixed-top navbar-light bg-dark\">".
                $this->Html->image("cake.icon.png", ["alt" => "Photo de Koala", 'url' => ['controller' => 'Pages', 'action' => 'home']]).
                "<h5 class=\"text-white h4\">SUPER Blog</h5>
          </nav>";
    echo "<br>";
    echo $this->Form->button('Creer un article');
    echo "<br>";
    echo $this->Form->button('Rechercher');
    echo "<br>";



