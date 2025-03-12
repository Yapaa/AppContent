<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $tags
 */
?>
<nav class="column">
    <div class="side-nav">
        <?= $this->Html->link(__('List Articles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="text-center">
            <h2 class="heading"><?= __('Create New Post') ?></h2>
        </div>
        <div class="column column-80">
            <div class="card-body">
                <label>Title</label>
                <?= $this->Form->create($article) ?>
                <div class="mb-3">
                    <?= $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]) ?>
                </div>
                <div class="mb-3">
                    <?= $this->Form->control('title', ['label' => false,'required' => true, 'placeholder' => 'Create Your Title',
                    'class' => 'form-control', 'id' => 'title']) ?>
                </div>
                <label>Article</label>
                <div class="mb-3">
                    <?= $this->Form->control('body', ['label' => false,'required' => true, 'placeholder' => 'up your article in here',
                    'class' => 'form-control', 'id' => 'body']) ?>
                </div>
                <label>Tags</label>
                <div class="mb-3">
                    <?= $this->Form->control('tag_string', ['label' => false,'required' => true, 'placeholder' => 'place name tag',
                    'class' => 'form-control', 'id' => 'tag_string']) ?>
                </div>
                <div class="text-center">
                    <?= $this->Form->submit(__('Save Article'), ['class' => 'btn btn-dark w-100 mt-4 mb-3']); ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
