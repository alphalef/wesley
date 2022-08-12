<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                <h4 class="card-title" style="text-align:center"><?=$title?></h4>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <div class="container">
                        <table class="table">
                        <thead class=" text-primary">
                            <th>
                            NO
                            </th>
                            <th>
                            게시일
                            </th>
                            <th>
                            제목
                            </th>
                            <th>
                            글보기
                            </th>
                            <th>
                            글수정
                            </th>
                            <th>
                            글삭제
                            </th>
                        </thead>
                        <tbody>
                            <?php $n = count($posts); ?>
                            <?php foreach ($posts as $post_item): ?>
                            <tr>
                                <td>
                                    <?= $n ?>
                                </td>
                                <td>
                                    <?= date("Y-m-d", $post_item['date']) ?>
                                </td>
                                <td>
                                    <?= $post_item['title'] ?>
                                </td>
                                <td>
                                    <a href="/post/view/<?=$post_item['id']?>" target="_blank">글보기</a>
                                </td>
                                <td>
                                    <a href="/admin/postedit/<?=$post_item['id']?>">글수정</a>
                                </td>
                                <td>
                                    <a href="/admin/postremove/<?=$post_item['id']?>">글삭제</a>
                                </td>
                            </tr>
                            <?php $n--; ?>
                            <?php endforeach ?>
                        </tbody>
                        </table>
                        <div style="text-align:center">
                            <button type="button" class="btn btn-outline-primary" onclick="location.href='/admin/newpost/<?= $category ?>'">새글작성</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>