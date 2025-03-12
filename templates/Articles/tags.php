<h1>
    Articles tagged with
    <?= $this->Text->toList(h($tags), 'or') ?>
</h1>

<section>
<?php foreach ($articles as $article): ?>
    <div class="row my-4">
<div class="col-12">
      <div class="card shadow-xs border mb-4 pb-3">
      <div class="card-body p-3">
          <div class="row">
              <?php foreach ($articles as $article): ?>
          <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
              <div class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">
              <div class="full-background bg-cover" style="background-image: url('<?=$this->Url->webroot("img/img-8.jpg")?>"></div>
              <span class="mask bg-dark opacity-1 border-radius-sm"></span>
              <div class="card-body text-start p-3 w-100">
                  <div class="row">
                  <div class="col-12">
                      <div class="blur shadow d-flex align-items-center w-100 border-radius-md border border-white mt-8 p-3">
                      <div class="w-50">
                          <p class="text-dark text-sm font-weight-bold mb-1"><?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?></p>
                          <p class="text-xs text-secondary mb-0"><?= $this->Html->link($article->created, ['action' => 'view', $article->slug]) ?></p>
                      </div>
                      </div>
                  </div>
              </div>
              </div>
          </div>
              <a href="javascript:;">
              <h4 class="font-weight-semibold">
                  <?= $this->Html->link($article->title, ['action' => 'view', 'class' => '', $article->slug]) ?>
              </h4>
              </a>
              <div class="truncate-overflow" style="overflow: hidden; -webkit-line-clamp: 5; display: -webkit-box; -webkit-box-orient: vertical; padding: 20px;">
                  <?= $this->Html->link($article->body, ['action' => 'view', $article->slug]) ?>
                  </div>
              <a href="javascript:;" class="text-dark font-weight-semibold icon-move-right mt-auto w-100 mb-5">
                  Read post
                  <i class="fas fa-arrow-right-long text-sm ms-1" aria-hidden="true"></i>
              </a>
          </div>
          <?php endforeach; ?>
          </div>
      </div>
      </div>
  </div>
</div>
<?php endforeach; ?>
</section>