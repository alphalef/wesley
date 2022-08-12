<?php 
    $page = isset($_GET['page_group1']) ? $_GET['page_group1'] :1;
?>

<div class="container" style="max-width:700px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="margin-top: 100px;">

                <div class="card-header">
                    <h4 class="card-title" style="text-align:center; margin:0px;"><?=$title?></h4>
                </div>

                <div class="card-body" style="min-height: 500px">
                    <div class="container-sm" style="padding: 30px 0px;">
                        <?php if (! empty($posts) && is_array($posts)) : ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">번호</th>
                                        <th scope="col">제목</th>
                                        <th scope="col">공개여부</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $n = $totalcount - (($page - 1)*$countperpage); ?>
                                    <?php foreach ($posts as $post_item): ?>
                                    <tr>
                                        <td scope="col" class="post-num"><?= $n ?></td>
                                        <td scope="col"><a href="/posts/view/<?= $post_item['id'].'-'.$post_item['url'] ?>?no=<?=$n?>&page_group1=<?=$returnPage?>&listcategory=mylist"><?= stripslashes($post_item['title']) ?></a></td>
                                        <?php if($post_item['open'] == 0): ?>
                                            <td scope="col">비공개</td>
                                        <?php elseif($post_item['open'] == 1): ?>
                                            <td scope="col">이름만 비공개</td>
                                        <?php elseif($post_item['open'] == 2): ?>
                                            <td scope="col">공개</td>
                                        <?php endif ?>
                                    </tr>
                                    <?php $n--; ?>
                                    <?php endforeach ?>

                                </tbody>

                            </table>

                            <br>
                            
                        <?php else: ?>
                            <h4 style="text-align:center; margin-bottom: 50px;">글이 없습니다.</h4>
                        <?php endif ?>

                        <div style="text-align:center">
                                <a href="/posts/add/<?=$category?>/<?=date('Ymd')?>/form"><button class="btn btn-dark">작성하기</button></a>
                            </div>                            
                            <br>
                        <?= $pager->links('group1', 'front_full') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="margin-bottom: 30px;"></div>