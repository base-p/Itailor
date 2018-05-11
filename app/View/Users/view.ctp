<!-- File: src/Template/Content/view.ctp -->

<h1><?= h($contents->name) ?></h1>
    <p><?= h($contents->body) ?></p>
    <p><small>Created: <?= $item->created->format(DATE_RFC850) ?></small></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $contents->slug]) ?></p>