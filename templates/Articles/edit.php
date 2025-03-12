<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $tags
 */
?>
<nav class="column">
        <?= $this->Html->link(__('List Articles'), ['action' => 'index'], ['escape' => false, 'class' => 'btn btn-sm btn-outline-secondary']) ?>
        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $article->slug], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id), 'escape' => false, 'class' => 'btn btn-sm btn-outline-danger']) ?>
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
<!-- 
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $article->slug],
                ['confirm' => __('Are you sure you want to delete # {0}?', $article->slug), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Articles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="articles form content">
            <?= $this->Form->create($article) ?>
            <fieldset>
                <legend><?= __('Edit Article') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['type' => 'hidden']);
                    echo $this->Form->control('title');
                    echo $this->Form->control('body', ['rows' => '3']);
                    echo $this->Form->control('tag_string', ['type' => 'text']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div> -->
