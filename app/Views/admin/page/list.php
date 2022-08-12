<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                <h4 class="card-title" style="text-align:center">페이지 리스트</h4>
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
                            페이지보기
                            </th>
                            <th>
                            페이지수정
                            </th>
                            <th>
                            페이지삭제
                            </th>
                        </thead>
                        <tbody>
                            <?php $n = count($pages); ?>
                            <?php foreach ($pages as $page): ?>
                            <tr>
                                <td>
                                    <?= $n ?>
                                </td>
                                <td>
                                    <?= $page['title'] ?>
                                </td>
                                <td>
                                    <a href="/pages/index/<?=$page['url']?>" target="_blank">글보기</a>
                                </td>
                                <td>
                                    <a href="/pages/edit/<?=$page['id']?>">글수정</a>
                                </td>
                                <td>
                                    <a href="/pages/remove/<?=$page['id']?>">글삭제</a>
                                </td>
                            </tr>
                            <?php $n--; ?>
                            <?php endforeach ?>
                        </tbody>
                        </table>
                        <div style="text-align:center">
                            <button type="button" class="btn btn-outline-primary" onclick="location.href='/pages/add'">새글작성</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>