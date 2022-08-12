<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align:center">관리자 추가</h4>
                </div>
                <div class="card-body" style="min-height: 500px">

                    <div class="container" style="padding: 30px 0px;">
                        <form method="post" action="/adm/adduser/1" enctype="multipart/form-data">
                            <div class="form-group" style="max-width: 500px; margin: auto">
                                <input placeholder="이메일" id="email" type="text" class="form-control" name="email">
                                <br>
                                <input placeholder="비밀번호" id="password" type="password" class="form-control" name="password">
                            </div>
                            <br>
                            <div style="text-align:center">
                                <button type="submit" class="btn btn-outline-primary">등록하기</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>