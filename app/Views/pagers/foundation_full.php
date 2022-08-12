
<?php $pager->setSurroundCount(2) ?>

<!-- 호스팅에서 public 경로 때문에 오류가 생기는 관계로 문자 치환 추가 -->
<div class="pagination__wrapper">
    <ul class="pagination">
        <li>
            <a href="<?=str_replace("/public", "", $pager->getPreviousPage())?>">
                <button class="prev" title="previous page">&#10094;</button>
            </a>

        </li>
        <?php foreach ($pager->links() as $link) : ?>
        <li>
            <a href="<?=str_replace("/public", "", $link['uri']) ?>">
                <button><?= $link['title'] ?><button>
            </a>
        </li>
        <?php endforeach ?>
        <li>
            <a href="<?=str_replace("/public", "", $pager->getNextPage())?>">
                <button class="next" title="next page">&#10095;</button>
            </a>

        </li>
    </ul>
</div>
