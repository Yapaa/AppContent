<div class="pt-7 pb-6 bg-cover"
    style="background-image: url('<?= $this->Url->webroot("img/header-orange-purple.jpg") ?>'); background-position: bottom;">
</div>
<div class="container">
    <div class="card card-body py-2 bg-transparent shadow-none">
        <div class="row">
            <div class="col-auto">
                <div class="avatar avatar-2xl rounded-circle position-relative mt-n7 border border-gray-100 border-4">
                    <img src="<?= $this->Url->webroot("img/team-2.jpg") ?>" alt="profile_image" class="w-100">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h3 class="mb-0 font-weight-bold">
                        <td><?= h($user->email) ?></td>
                    </h3>
                    <p class="mb-0">
                        <span class="text-secondary">Member since:</span> <?= $user->created->format('d M Y') ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 text-sm-end">
                <a href="javascript:;" class="btn btn-sm btn-white">Cancel</a>
                <a href="javascript:;" class="btn btn-sm btn-dark">Save</a>
            </div>
        </div>
    </div>
</div>
<div class="container my-3 py-3">
    <div class="row">
        <div class="col-12 col-xl-4 mb-4">
            <div class="card border shadow-xs h-100">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0 font-weight-semibold text-lg">Notifications settings</h6>
                    <p class="text-sm mb-1">Here you can set preferences.</p>
                </div>
                <div class="card-body p-3">
                    <h6 class="text-dark font-weight-semibold mb-1">Account</h6>
                    <ul class="list-group">
                        <li class="list-group-item border-0 px-0">
                            <div class="form-check form-switch ps-0">
                                <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault"
                                    checked>
                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                    for="flexSwitchCheckDefault">Email me when someone follows me</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 px-0">
                            <div class="form-check form-switch ps-0">
                                <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1">
                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                    for="flexSwitchCheckDefault1">Email me when someone answers on my post</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 px-0">
                            <div class="form-check form-switch ps-0">
                                <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault2"
                                    checked>
                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                    for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                            </div>
                        </li>
                    </ul>
                    <h6 class="text-dark font-weight-semibold mt-2 mb-1">Application</h6>
                    <ul class="list-group">
                        <li class="list-group-item border-0 px-0">
                            <div class="form-check form-switch ps-0">
                                <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault3">
                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                    for="flexSwitchCheckDefault3">New launches and projects</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 px-0">
                            <div class="form-check form-switch ps-0">
                                <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault4"
                                    checked>
                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                    for="flexSwitchCheckDefault4">Monthly product updates</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 px-0 pb-0">
                            <div class="form-check form-switch ps-0">
                                <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault5">
                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                    for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 mb-4">
            <div class="card border shadow-xs h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 col-9">
                            <h6 class="mb-0 font-weight-semibold text-lg">Profile information</h6>
                            <p class="text-sm mb-1">Edit the information about you.</p>
                        </div>
                        <div class="col-md-4 col-3 text-end">
                            <button type="button" class="btn btn-white btn-icon px-2 py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <p class="text-sm mb-4">
                        Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally
                        difficult paths, choose the one more painful in the short term (pain avoidance is creating an
                        illusion of equality).
                    </p>
                    <ul class="list-group">
                        <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pt-0 pb-1 text-sm"><span
                                class="text-secondary">First Name:</span> &nbsp; Noah</li>
                        <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm"><span
                                class="text-secondary">Last Name:</span> &nbsp; Mclaren</li>
                        <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm"><span
                                class="text-secondary">Email Address:</span> &nbsp; <?= $user->email ?></li>
                        <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm"><span
                                class="text-secondary">Mobile Phone:</span> &nbsp; +(44) 123 1234 123</li>
                        <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm"><span
                                class="text-secondary">Member since:</span>&nbsp; <?= $user->created->format('d M Y') ?>
                        </li>
                        <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm"><span
                                class="text-secondary">Location:</span> &nbsp; Indonesia</li>
                        <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
                            <span class="text-secondary">Social:</span> &nbsp;
                            <a class="btn btn-link text-dark mb-0 ps-1 pe-1 py-0"
                                href="https://twitter.com/intent/tweet?text=Check%20Corporate%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fcorporate-ui-dashboard"
                                target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                    viewBox="0 0 50 50">
                                    <path
                                        d="M 5.9199219 6 L 20.582031 27.375 L 6.2304688 44 L 9.4101562 44 L 21.986328 29.421875 L 31.986328 44 L 44 44 L 28.681641 21.669922 L 42.199219 6 L 39.029297 6 L 27.275391 19.617188 L 17.933594 6 L 5.9199219 6 z M 9.7167969 8 L 16.880859 8 L 40.203125 42 L 33.039062 42 L 9.7167969 8 z">
                                    </path>
                                </svg>
                            </a>
                            <a class="btn btn-link text-dark mb-0 ps-1 pe-1 py-0" href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35"
                                    viewBox="0 0 48 48">
                                    <path fill="#3F51B5"
                                        d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z">
                                    </path>
                                    <path fill="#FFF"
                                        d="M34.368,25H31v13h-5V25h-3v-4h3v-2.41c0.002-3.508,1.459-5.59,5.592-5.59H35v4h-2.287C31.104,17,31,17.6,31,18.723V21h4L34.368,25z">
                                    </path>
                                </svg>
                            </a>
                            <a class="btn btn-link text-dark mb-0 ps-1 pe-1 py-0" href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35"
                                    viewBox="0 0 48 48">
                                    <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035"
                                        r="44.899" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fd5"></stop>
                                        <stop offset=".328" stop-color="#ff543f"></stop>
                                        <stop offset=".348" stop-color="#fc5245"></stop>
                                        <stop offset=".504" stop-color="#e64771"></stop>
                                        <stop offset=".643" stop-color="#d53e91"></stop>
                                        <stop offset=".761" stop-color="#cc39a4"></stop>
                                        <stop offset=".841" stop-color="#c837ab"></stop>
                                    </radialGradient>
                                    <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)"
                                        d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                    </path>
                                    <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54"
                                        r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#4168c9"></stop>
                                        <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)"
                                        d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                    </path>
                                    <path fill="#fff"
                                        d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z">
                                    </path>
                                    <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                    <path fill="#fff"
                                        d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 mb-4">
            <div class="card border shadow-xs h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row mb-sm-0 mb-2">
                        <div class="col-md-8 col-9">
                            <h6 class="mb-0 font-weight-semibold text-lg">Internal chat</h6>
                            <p class="text-sm mb-0">/marketing channel</p>
                        </div>
                        <div class="col-md-4 col-3 text-end">
                            <button type="button" class="btn btn-white btn-icon px-2 py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.5 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3 pt-0">
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-1">
                            <div class="avatar avatar-sm rounded-circle me-2">
                                <img src="<?= $this->Url->webroot("img/team-1.jpg") ?>" alt="kal" class="w-100">
                            </div>
                            <div class="d-flex align-items-start flex-column justify-content-center">
                                <h6 class="mb-0 text-sm font-weight-semibold">Sarah Lamalo</h6>
                                <p class="mb-0 text-sm text-secondary">Hi! I need more information about ...</p>
                            </div>
                            <span class="p-1 bg-success rounded-circle ms-auto me-3">
                                <span class="visually-hidden">Online</span>
                            </span>
                        </li>
                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-1">
                            <div class="avatar avatar-sm rounded-circle me-2">
                                <img src="<?= $this->Url->webroot("img/marie.jpg") ?>" alt="kal" class="w-100">
                            </div>
                            <div class="d-flex align-items-start flex-column justify-content-center">
                                <h6 class="mb-0 text-sm font-weight-semibold">Vicky Hladynets</h6>
                                <p class="mb-0 text-sm text-secondary">Hello, Noah!</p>
                            </div>
                            <span class="p-1 bg-success rounded-circle ms-auto me-3">
                                <span class="visually-hidden">Online</span>
                            </span>
                        </li>
                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-1">
                            <div class="avatar avatar-sm rounded-circle me-2">
                                <img src="<?= $this->Url->webroot("img/team-5.jpg") ?>" alt="kal" class="w-100">
                            </div>
                            <div class="d-flex align-items-start flex-column justify-content-center">
                                <h6 class="mb-0 text-sm font-weight-semibold">Charles Deluvio</h6>
                                <p class="mb-0 text-sm text-secondary">Great, thank you!</p>
                            </div>
                            <span class="p-1 bg-success rounded-circle ms-auto me-3">
                                <span class="visually-hidden">Online</span>
                            </span>
                        </li>
                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-1">
                            <div class="avatar avatar-sm rounded-circle me-2">
                                <img src="<?= $this->Url->webroot("img/team-4.jpg") ?>" alt="kal" class="w-100">
                            </div>
                            <div class="d-flex align-items-start flex-column justify-content-center">
                                <h6 class="mb-0 text-sm font-weight-semibold">Leio Mclaren</h6>
                                <p class="mb-0 text-sm text-secondary">Don't worry! 🙏🏻</p>
                            </div>
                            <span class="p-1 bg-success rounded-circle ms-auto me-3">
                                <span class="visually-hidden">Online</span>
                            </span>
                        </li>
                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-1">
                            <div class="avatar avatar-sm rounded-circle me-2">
                                <img src="<?= $this->Url->webroot("img/team-3.jpg") ?>" alt="kal" class="w-100">
                            </div>
                            <div class="d-flex align-items-start flex-column justify-content-center">
                                <h6 class="mb-0 text-sm font-weight-semibold">Mateus Campos</h6>
                                <p class="mb-0 text-sm text-secondary">Call me, please.</p>
                            </div>
                            <span class="p-1 bg-success rounded-circle ms-auto me-3">
                                <span class="visually-hidden">Online</span>
                            </span>
                        </li>
                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-1">
                            <div class="avatar avatar-sm rounded-circle me-2">
                                <img src="<?= $this->Url->webroot("img/team-2.jpg") ?>" alt="kal" class="w-100">
                            </div>
                            <div class="d-flex align-items-start flex-column justify-content-center">
                                <h6 class="mb-0 text-sm font-weight-semibold">Miriam Lore</h6>
                                <p class="mb-0 text-sm text-secondary">Well done!</p>
                            </div>
                            <span class="p-1 bg-success rounded-circle ms-auto me-3">
                                <span class="visually-hidden">Online</span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card shadow-xs border mb-4 pb-3">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0 font-weight-semibold text-lg">Last articles</h6>
                    <p class="text-sm mb-1">Here you will find the latest articles.</p>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                    <div class="col-xl-4 col-md-6 mb-xl-0 mb-4 p-2">
                        <div class="card h-100 card-plain border border-dashed px-5">
                        <div class="card-body d-flex flex-column justify-content-center text-center">
                            <a href="javascript:;">
                            <div class="icon icon-shape bg-dark text-center text-white rounded-circle mx-auto d-flex align-items-center justify-content-center mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h5 class="text-dark text-lg"><?= $this->Html->link(__(" Create new post "), ['controller' => 'articles', 'action' => 'add'], [
                                'escape' => false, 'class' => 'text-dark text-lg']) ?></h5>
                            <p class="text-sm text-secondary mb-0">Drive into the editor and add your content.</p>
                            </a>
                        </div>
                        </div>
                    </div>
                        <?php foreach ($user->articles as $article): ?>
                    <div class="col-xl-4 col-md-6 mb-xl-0 mb-4 p-2">
                        <div class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">
                        <div class="full-background bg-cover" style="background-image: url('<?=$this->Url->webroot("img/img-8.jpg")?>"></div>
                        <span class="mask bg-dark opacity-1 border-radius-sm"></span>
                        <div class="card-body text-start p-3 w-100">
                            <div class="row">
                            <div class="col-12">
                                <div class="blur shadow d-flex align-items-center w-100 border-radius-md border border-white mt-8 p-3">
                                <div class="w-50">
                                    <p class="text-dark text-sm font-weight-bold mb-1"><?= $this->Html->link($article->title, ['controller' => 'Articles', 'action' => 'article_user', $article->slug]) ?></p>
                                    <p class="text-xs text-secondary mb-0"><?= $this->Html->link($article->created, ['controller' => 'Articles', 'action' => 'article_user', $article->slug]) ?></p>
                                </div>
                                <?php foreach (explode(', ', $article->tag_string) as $tag): ?>
                                <p class="text-dark text-sm font-weight-bold ms-auto">
                                    <?= $this->Html->link($tag, ['controller' => 'Articles', 'action' => 'tags', $tag]) ?>
                                </p>
                                <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                        <a href="javascript:;">
                        <h4 class="font-weight-semibold">
                            <?= $this->Html->link($article->title, ['controller' => 'Articles', 'action' => 'article_user', 'class' => '', $article->slug]) ?>
                        </h4>
                        </a>
                        <div class="truncate-overflow" style="overflow: hidden; -webkit-line-clamp: 5; display: -webkit-box; -webkit-box-orient: vertical; padding: 20px;">
                            <?= $this->Html->link($article->body, ['controller' => 'Articles', 'action' => 'article_user', $article->slug]) ?>
                        </div>
                        <a href="javascript:;" class="text-dark font-weight-semibold icon-move-right mt-auto w-100 mb-5">
                            Read post
                            <i class="fas fa-arrow-right-long text-sm ms-1" aria-hidden="true"></i>
                        </a>
                        <div>
                        <?= $this->Form->postLink(
                            $article->published
                                ? '<i class="bi bi-x-circle"></i> Unpublish'
                                : '<i class="bi bi-check-circle"></i> Publish',
                            ['controller' => 'Articles', 'action' => 'togglePublish', $article->id],
                            [
                                'confirm' => $article->published
                                    ? 'Are you sure you want to unpublish this article?'
                                    : 'Are you sure you want to publish this article?',
                                'class' => $article->published ? 'btn btn-danger btn-sm' : 'btn btn-success btn-sm',
                                'escape' => false
                            ]
                        ) ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>