
<?php
    if(!isset($msg)) {
        $msg = '';
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
                                        <h1 class="mb-0 h3">필진 로그인하기</h1>
                                    </div>
                                    <form action="/user/login/1" method='post' class="mt-4">
                                        <!-- Form -->
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmailCard1">이메일 혹은 아이디</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                                <input type="text" class="form-control" name="user">
                                            </div>  
                                        </div>
                                        <!-- End of Form -->
                                        <div class="form-group">
                                            <!-- Form -->
                                            <div class="form-group mb-4">
                                                <label for="exampleInputPasswordCard1">비밀번호</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                                    <input type="password" class="form-control" name="password">
                                                </div>  
                                            </div>
                                            <?php if(isset($_SERVER["HTTP_REFERER"])): ?>
                                                <input type="hidden" value=<?=$_SERVER["HTTP_REFERER"]?> name="url">
                                            <?php else: ?>
                                                <input type="hidden" value="/" name="url">
                                            <?php endif ?>
                                            <p>
                                                <?=$msg?>
                                            </p>
                                            <!-- End of Form -->
                                            <!-- <div class="d-block d-sm-flex justify-content-between align-items-center mb-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                                                    <label class="form-check-label" for="defaultCheck5">
                                                      비밀번호 기억하기
                                                    </label>
                                                </div>
                                                <div><a href="#" class="small text-right">Lost password?</a></div>
                                            </div> -->
                                        </div>
                                        <div style="text-align:center">
                                            <button type="submit" class="btn btn-block btn-secondary">로그인</button>
                                        </div>
                                    </form>
                                    <div class="d-flex justify-content-center align-items-center mt-4">
                                        <span class="font-weight-normal">
                                            회원이 아니신가요?
                                            <a href="/user/signup" class="font-weight-bold">회원 가입하기</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
