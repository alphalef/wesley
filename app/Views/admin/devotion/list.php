
<?php 
    $page = isset($_GET['page_group1']) ? $_GET['page_group1'] :1;
?>

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
                                제목
                                </th>
                                <th>
                                게시일
                                </th>
                                <th>
                                작성일
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
                                <?php $n = $totalcount - (($page - 1)*$countperpage); ?>
                                <?php foreach ($devotions as $devotion): ?>
                                <tr>
                                    <td>
                                        <?= $n ?>
                                    </td>
                                    <td>
                                        <?= stripslashes($devotion['title']) ?>
                                    </td>
                                    <td>
                                        <?= $devotion['date'] ?>
                                    </td>
                                    <td>
                                        <?= date("Ymd", $devotion['created_date']) ?>
                                    </td>
                                    <td>
                                        <a href="/devotion/daily/<?=$devotion['date']?>" target="_blank">글보기</a>
                                    </td>
                                    <td>
                                        <a href="/devotion/edit/<?=$devotion['id']?>">글수정</a>
                                    </td>
                                    <td>
                                        <a href="/devotion/remove/<?=$devotion['id']?>">글삭제</a>
                                    </td>
                                </tr>
                                <?php $n--; ?>
                                <?php endforeach ?>
                            </tbody>
                            </table>

                            <div style="text-align:center">
                                <?= $pager->links('group1', 'front_full') ?>
                            </div>
                            
                            <div style="text-align:center">
                                <button type="button" class="btn btn-outline-primary" onclick="location.href='/devotion/add'">새글작성</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>