<?php foreach($articles as $article):?>
<nav class="column">
        <?= $this->Html->link(__('List Articles'), ['action' => 'index'], ['escape' => false, 'class' => 'btn btn-sm btn-outline-secondary']) ?>
        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->slug], ['escape' => false, 'class' => 'btn btn-sm btn-outline-primary']) ?>
        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $article->slug], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id), 'escape' => false, 'class' => 'btn btn-sm btn-outline-danger']) ?>
        <?= $this->Html->link(__('New Post'), ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-sm btn-outline-primary']) ?>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="column column-80">
            <div class="articles view content">
                <h1><?= h($article->title) ?></h1>
                <div class="container-fluid py-4 px-5">
                    <p class="text-wrap lead"><?= h($article->body) ?></p>
                </div>
                <p class="lead"><b>Tags:</b></p>
                <p><b>#</b><?= h($article->tag_string) ?></p>
                <p><small>Created: <?= $article->created?></small></p>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>