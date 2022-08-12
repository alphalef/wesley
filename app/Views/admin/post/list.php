
<?php 
    $page = isset($_GET['page_group1']) ? $_GET['page_group1'] :1;
?>

<section>
    <div class="table-responsive">
        <div class="container">
            <table class="table">
                <thead class=" text-secondary">
                    <th>
                    NO
                    </th>
                    <th>
                    제목
                    </th>
                    <th>
                    게시일
                    </th>
                    <th>
                    글보기
                    </th>
                    <th>
                    글수정
                    </th>
                </thead>
                <tbody>
                    <?php $n = $totalcount - (($page - 1)*$countperpage); ?>
                    <?php foreach ($posts as $post): ?>
                    <tr>
                        <td>
                            <?= $n ?>
                        </td>
                        <td>
                            <?= stripslashes($post['title']) ?>
                        </td>
                        <td>
                            <?= date("Y-m-d", $post['created_date']) ?>
                        </td>
                        <td>
                            <a href="/posts/view/<?=$post['id']?>-<?=$post['url']?>" target="_blank">글보기</a>
                        </td>
                        <td>
                            <a href="/posts/edit/form/<?=$post['id']?>">글수정</a>
                        </td>
                    </tr>
                    <?php $n--; ?>
                    <?php endforeach ?>
                </tbody>
            </table>

            <div style="text-align:center">
                <?= $pager->links('group1', 'front_full') ?>
            </div>
            
            <br>

            <div style="text-align:center">
                <button type="button" class="btn btn-outline-secondary" onclick="location.href='/posts/add/form'">새글작성</button>
            </div>
        </div>
    </div>
</section>
<div style="margin-bottom: 30px;"></div>
