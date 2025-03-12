<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tag> $tags
 */
?>
<div class="tags index content">
    <div class="text-center">
        <h2><?= __('Tag List of Articles') ?></h2>
    </div>
    <div class="row">
        <div class="card border shadow-xs mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <div>
                    <ul class="row">
                    <?php foreach ($tags as $tag): ?>
                        <div class="col-md-3 col-lg-2 mb-1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" checked>
                                <label class="form-check-label font-weight-bold"><?= $this->Html->link($tag->title, ['controller' => 'Articles', 'action' => 'tags', $tag->title]) ?></label>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </ul>
                </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-12">
            <div class="card border shadow-xs mb-4">
            <div class="card-header border-bottom pb-0">
                <div class="d-sm-flex align-items-center">
                <div>
                    <h6 class="font-weight-semibold text-lg mb-0">List Tags</h6>
                    <p class="text-sm">See information about all tags</p>
                </div>
                </div>
            </div>
            <div class="card-body px-0 py-0">
                <div class="border-bottom py-3 px-3 d-sm-flex align-items-center">
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable1" autocomplete="off" checked>
                    <label class="btn btn-white px-3 mb-0" for="btnradiotable1">All</label>
                    <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable2" autocomplete="off">
                    <label class="btn btn-white px-3 mb-0" for="btnradiotable2">Monitored</label>
                    <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable3" autocomplete="off">
                    <label class="btn btn-white px-3 mb-0" for="btnradiotable3">Unmonitored</label>
                </div>
                <div class="input-group w-sm-25 ms-auto">
                    <span class="input-group-text text-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                    </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                </div>
                <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="text-secondary text-xs font-weight-semibold opacity-7">Title</th>
                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Created</th>
                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Modified</th>
                        <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Action</th>
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($tags as $tag): ?>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center ms-1">
                                <h6 class="mb-0 text-sm font-weight-semibold"><?= $this->Html->link($tag->title, ['action' => 'view', $tag->id]) ?></h6>
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-dark font-weight-semibold mb-0"><?= $tag->created->format(DATE_RFC850) ?></p>
                            </td>
                            <td>
                                <p class="text-sm text-dark font-weight-semibold mb-0"><?= $tag->modified->format(DATE_RFC850) ?></p>
                            </td>
                            <td class="align-middle text-center">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $tag->id]) ?>
                                <?= $this->Html->link('Edit', ['action' => 'edit', $tag->id]) ?>
                                <?= $this->Form->postLink(
                                    'Delete',
                                    ['action' => 'delete', $tag->id],
                                    ['confirm' => 'Are you sure?'])
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
                <div class="border-top py-3 px-3 d-flex align-items-center">
                    <p class="font-weight-semibold mb-0 text-dark text-sm">Page 1 of 10</p>
                    <div class="ms-auto">
                    <button class="btn btn-sm btn-white mb-0">Previous</button>
                    <button class="btn btn-sm btn-white mb-0">Next</button>
                </div>
                </div>
            </div>
            </div>
        </div> -->
    </div>
</div>