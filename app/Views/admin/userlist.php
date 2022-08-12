<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align:center">회원목록</h4>
                </div>
                <div class="card-body" style="min-height: 500px">

                    <div class="container" style="padding: 30px 0px;">
                        <table class="table">

                            <tr>
                                <td>no</td>
                                <td>이름</td>
                                <td>아이디</td>
                                <td>이메일</td>
                                <!-- <td>계정삭제</td> -->
                            </tr>

                        <?php foreach ($list as $item): ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['name'] ?></td>
                                <td><?= $item['userid'] ?></td>
                                <td><?= $item['email'] ?></td>
                                <!-- <td><a href="/adm/removeuser/<?= $item['id'] ?>">계정제거</a></td> -->
                            </tr>
                        <?php endforeach ?>

                        </table>
                            <!-- <div style="text-align: center">
                                <button class="btn btn-outline-primary" onClick="location.href='/adm/adduser'">관리자 추가</button>
                            </div> -->
                    </div>

                </div>
            </div>
        </div>
    </div>