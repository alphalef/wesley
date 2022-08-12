<?php 

    if(!isset($userid)) {
        $userid = '';
        $email = '';
        $name = '';
        $id_form = '<input type="text" class="form-control" name="userid" required>';
        $button_title = '회원가입';
        $action = '/user/signup/adduser';
        $leave = '
            <div class="d-flex justify-content-center align-items-center mt-4">
                <span class="font-weight-normal">
                    이미 회원이신가요?
                    <a href="/user/login" class="font-weight-bold">로그인 하기</a>
                </span>
            </div>        
        ';
    } else {
        $id_form = '<input type="text" class="form-control" name="userid" value="'.$userid.' (아이디는 수정불가)" readonly><input type="hidden" name="userid" value='.$userid.'>';
        $button_title = '정보수정';
        $action = '/user/signup/doedit';
        $leave = '
            <form method=post action="/user/removeuser">
                <div class="d-flex justify-content-center align-items-center mt-4">
                    <input type="checkbox" name="remove_confirm" class="form-check-input"> 
                    &nbsp;&nbsp;
                    본인의 계정을 삭제합니다 
                    &nbsp;&nbsp;
                    <input type="submit" class="btn btn-dark" value="회원탈퇴">                    
                </div>
            </form>
        ';
    } 


?>
    
    
    <main>
        <!-- Section -->
        <section class="min-vh-100 d-flex align-items-center bg-soft">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="signin-inner mt-3 mt-lg-0 bg-white shadow border rounded border-light w-100">
                            <div class="row gx-0 align-items-center justify-content-between">
                                <div class="col-12 col-lg-7 px-3 py-5 px-sm-5 px-md-6" style="margin:auto;">
                                    <div class="text-center text-md-center mb-4 mt-md-0">
                                        <h1 class="mb-0 h3">필진회원가입</h1>
                                    </div>
                                    <form action="<?=$action?>" method="post" oninput='password2.setCustomValidity(password2.value != password.value ? "패스워드가 일치하지 않습니다" : "")'>
                                        <!-- Form -->
                                        <div class="form-group mb-4">
                                            <div class="input-group">
                                                <span class="input-group-text"><span style="min-width:84px;">이름</span></span>
                                                <input type="text" class="form-control" name="name" value="<?=$name?>" required>
                                            </div>  
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="input-group">
                                                <span class="input-group-text"><span style="min-width:84px;">이메일</span></span>
                                                <input type="email" class="form-control" name="email" value="<?=$email?>">
                                            </div>  
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="input-group">
                                                <span class="input-group-text"><span style="min-width:84px;">아이디</span></span>
                                                <?=$id_form?>
                                            </div>  
                                        </div>
                                        <!-- End of Form -->
                                        <div class="form-group">
                                            <!-- Form -->
                                            <div class="form-group mb-4">
                                                <div class="input-group">
                                                    <span class="input-group-text"><span style="min-width:84px;">비밀번호</span></span>
                                                    <input type="password" class="form-control" name="password" required>
                                                </div>  
                                            </div>
                                            <!-- End of Form -->
                                            <!-- Form -->
                                            <div class="form-group mb-4">
                                                <div class="input-group">
                                                    <span class="input-group-text"><span style="min-width:84px;">비밀번호 확인</span></span>
                                                    <input type="password" class="form-control" name="password2">
                                                </div>  
                                            </div>

                                        </div>
                                        <div style="text-align:center">
                                            <button type="submit" class="btn btn-block btn-secondary"><?=$button_title?></button>
                                        </div>
                                    </form>
                                    <?=$leave?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>