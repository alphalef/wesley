<?php 
    if(!$title) {
        $banner_title = "새로운 묵상 추가";
        $action = "/devotion/add/put";
        $content = "";
        $opt = '';

    } else {
        $banner_title = "묵상 수정";
        $action = "/devotion/edit/".$id.'-'.$url.'/1';
        $opt = "<input type='hidden' name='opt' value=1>";
    }
?>

<style>

    input {
        margin-bottom: 10px;
    }

</style>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align:center"><?=$banner_title?></h4>
                </div>
                <div class="card-body" style="min-height: 500px">

                    <div class="container-sm" style="padding: 30px 0px;">
                        <form method="post" action="<?=$action?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <input placeholder="게시날짜 형식: 2020-12-11 (비워둘 경우 현재시간)" id="date" type="text" class="form-control" name="date" value="<?= substr($date, 0, 4) ?>-<?= substr($date, 4, 2) ?>-<?= substr($date, 6, 2) ?>" required>
                                <input placeholder="제목" id="title" type="text" class="form-control" name="title" value="<?= htmlspecialchars(stripslashes($title)) ?>" required>
                                <input placeholder="성경구절" id="subtitle" type="text" class="form-control" name="subtitle" value="<?= htmlspecialchars(stripslashes($subtitle)) ?>" required>
                                <input placeholder="유튜브 url" id="youtube" type="text" class="form-control" name="youtube" value="<?=$youtube?>">
                                <input type="hidden" name="attached" value=<?=$attached?>>
                                <?= $opt ?>
                            </div>

                            <div class="form-group">
                                <textarea class="editor" name="content"><?=$content?></textarea>
                            </div>

                            <br>

                            <div style="text-align:center">
                                <button type="submit" class="btn btn-outline-primary">저장하기</button>
                                <button type="button" class="btn btn-outline-primary" onclick="location.href='/devotion/list'">글목록</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>