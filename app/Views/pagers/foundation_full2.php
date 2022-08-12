<?php $pager->setSurroundCount(3) ?>

<div class="pagination-wrapper">
  <div class="pagination">
    <?php if ($pager->hasPrevious()) : ?>
        <a class="prev page-numbers" href="<?=str_replace("/public", "", $pager->getPrevious())?>">&#10094;</a>
    <?php else: ?>
        <a class="prev page-numbers">&nbsp;</a>
    <?php endif ?>

    <?php foreach ($pager->links() as $link) : ?>
        <?php if(!isset($_GET['page_group1'])) { $_GET['page_group1'] = 1; } ?>
        <?php if($_GET['page_group1'] == $link['title']): ?>
            <span aria-current="page" class="page-numbers current"><?=$link['title']?></span>
        <?php else: ?>
            <a class="page-numbers" href="<?=str_replace("/public", "", $link['uri']) ?>"><?= $link['title'] ?></a>
        <?php endif ?>
        
    <?php endforeach ?>

    <?php if ($pager->hasNext()) : ?>
        <a class="next page-numbers" href="<?=str_replace("/public", "", $pager->getNext())?>">&#10095;</a>
    <?php else: ?>
        <a class="next page-numbers">&nbsp;</a> 
    <?php endif ?>
  </div>
</div>