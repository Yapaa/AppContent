<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Article> $articles
 */
?>
<div class="row">
  <div class="row">
      <div class="col-md-12">
      <div class="d-md-flex align-items-center mb-3 mx-2">
      <div class="mb-md-0 mb-3">
          <h3 class="font-weight-bold mb-0">Hello, Noah</h3>
          <p class="mb-0">Apps you might like!</p>
      </div>
      <button type="button" class="btn btn-sm btn-white btn-icon d-flex align-items-center mb-0 ms-md-auto mb-sm-0 mb-2 me-2">
          <span class="btn-inner--icon">
          <span class="p-1 bg-success rounded-circle d-flex ms-auto me-2">
              <span class="visually-hidden">New</span>
          </span>
          </span>
          <span class="btn-inner--text">Messages</span>
      </button>
      <button type="button" class="btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0">
          <span class="btn-inner--icon">
          <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="d-block me-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
          </svg>
          </span>
          <span class="btn-inner--text">Sync</span>
      </button>
      </div>
  </div>
  <hr class="my-0">
  <!-- slider -->
  <!-- <div class="row">
    <div class="position-relative overflow-hidden">
      <div class="swiper mySwiper mt-4 mb-2">
        <div class="swiper-wrapper">
        <?php foreach ($articles as $article): ?>
          <div class="swiper-slide">
            <div>
              <div class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                <div class="full-background bg-cover" style="background-image: url('<?=$this->Url->webroot("img/img-1.jpg")?>')">
                    <div class="truncate-overflow" style="overflow: hidden; -webkit-line-clamp: 5; display: -webkit-box; -webkit-box-orient: vertical; padding: 20px;">
                    <?= $this->Html->link($article->body, ['action' => 'view', $article->slug]) ?>
                    </div>
                </div>
                <div class="card-body text-start px-3 py-0 w-100">
                  <div class="row mt-12">
                    <div class="col-sm-5 mt-auto">
                        <h4 class="text-dark font-weight-bolder"><?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?></h4>
                        <p class="text-dark font-weight-bolder"><?= $this->Html->link($article->created, ['action' => 'view', $article->slug]) ?></p>
                    </div>
                    <div class="col-sm-3 ms-auto mt-auto">
                      <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Category</p>
                        <?php foreach (explode(', ', $article->tag_string) as $tag): ?>
                            <?= $this->Html->link($tag, ['controller' => 'articles', 'action' => 'tags', $tag]) ?>
                        <?php endforeach;?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div> -->
</div>
<hr class="my-0">
<div class="row my-4">
<div class="col-12">
      <div class="card shadow-xs border mb-4 pb-3">
      <div class="card-header pb-0 p-3">
          <h6 class="mb-0 font-weight-semibold text-lg">Last articles</h6>
          <p class="text-sm mb-1">Here you will find the latest articles.</p>
      </div>
      <div class="card-body p-3">
          <div class="row">
              <?php foreach ($articles as $article): ?>
                <div class="col-xl-4 col-md-6 mb-xl-0 mb-4 p-2">
                        <div class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">
                        <div class="full-background bg-cover" style="background-image: url('<?=$this->Url->webroot("img/img-8.jpg")?>"></div>
                        <span class="mask bg-dark opacity-1 border-radius-sm"></span>
                        <div class="card-body text-start p-3 w-100">
                            <div class="row">
                            <div class="col-12">
                                <div class="blur shadow d-flex align-items-center w-100 border-radius-md border border-white mt-8 p-3">
                                <div class="w-50">
                                    <p class="text-dark text-sm font-weight-bold mb-1"><?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?></p>
                                </div>
                                  <p class="text-xs text-secondary ms-auto"><?= $this->Html->link($article->created, ['action' => 'view', $article->slug]) ?></p>
                                <!-- <php foreach (explode(', ', $article->tag_string) as $tag): ?>
                                  <div class="truncate-overflow" style="overflow: hidden; -webkit-line-clamp: 5; display: -webkit-box; -webkit-box-orient: horizontal; padding: 20px;">
                                    <p class="text-dark text-sm font-weight-bold ms-auto">
                                        <?= $this->Html->link($tag, ['controller' => 'Articles', 'action' => 'tags', $tag]) ?>
                                    </p>
                                  </div>
                                <php endforeach; ?> -->
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
</div>
<div class="fixed-plugin">
<a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
<i class="fa fa-cog py-2"></i>
</a>
<div class="card shadow-lg ">
<div class="card-header pb-0 pt-3 ">
  <div class="float-start">
    <h5 class="mt-3 mb-0">Corporate UI Configurator</h5>
    <p>See our dashboard options.</p>
  </div>
  <div class="float-end mt-4">
    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
      <i class="fa fa-close"></i>
    </button>
  </div>
  <!-- End Toggle Button -->
</div>
<hr class="horizontal dark my-1">
<div class="card-body pt-sm-3 pt-0">
  <!-- Sidebar Backgrounds -->
  <div>
    <h6 class="mb-0">Sidebar Colors</h6>
  </div>
  <a href="javascript:void(0)" class="switch-trigger background-color">
    <div class="badge-colors my-2 text-start">
      <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
      <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
      <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
      <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
      <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
    </div>
  </a>
  <!-- Sidenav Type -->
  <div class="mt-3">
    <h6 class="mb-0">Sidenav Type</h6>
    <p class="text-sm">Choose between 2 different sidenav types.</p>
  </div>
  <div class="d-flex">
    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-slate-900" onclick="sidebarType(this)">Dark</button>
    <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
  </div>
  <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
  <!-- Navbar Fixed -->
  <div class="mt-3">
    <h6 class="mb-0">Navbar Fixed</h6>
  </div>
  <div class="form-check form-switch ps-0">
    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
  </div>
  <hr class="horizontal dark my-sm-4">
  <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/corporate-ui-dashboard">Free Download</a>
  <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/corporate-ui-dashboard">View documentation</a>
  <div class="w-100 text-center">
    <a class="github-button" href="https://github.com/creativetimofficial/corporate-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/corporate-ui-dashboard on GitHub">Star</a>
    <h6 class="mt-3">Thank you for sharing!</h6>
    <a href="https://twitter.com/intent/tweet?text=Check%20Corporate%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fcorporate-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
      <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
    </a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/corporate-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
      <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
    </a>
  </div>
</div>