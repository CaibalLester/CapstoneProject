<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
    <ul class="pagination justify-content-center">

        <?php if ($pager->hasPreviousPage()) : ?>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                    <span aria-hidden="true"><?= lang('Pager.first') ?></span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getPreviousPage() ?>" aria-label="<?= lang('Pager.previous') ?>">
                    <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
                </a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link): ?>
            <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                <a class="page-link" href="<?= $link['uri'] ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNextPage()) : ?>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.next') ?>">
                    <span aria-hidden="true"><?= lang('Pager.next') ?></span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                    <span aria-hidden="true"><?= lang('Pager.last') ?></span>
                </a>
            </li>
        <?php endif ?>

    </ul>
</nav>



<!-- <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">Prev</span>
                                                </a>
                                            </li>

                                            <li class="page-item active" aria-current="page">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>

                                            <li class="page-item">
                                                <a class="page-link" href="#">4</a>
                                            </li>
                                            
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav> -->
