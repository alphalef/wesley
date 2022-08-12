<?php 
    if(!$title) {
        $banner_title = "새로운 페이지 추가";
        $action = "/pages/add/put";
        $content = "";
        $opt = '';
    } else {
        $banner_title = "페이지 수정";
        $action = "/pages/edit/".$id."/1";
        $opt = "<input type='hidden' name='opt' value=1>";
    }
?>

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
                                <input placeholder="제목" id="title" type="text" class="form-control" name="title" value="<?= $title ?>"> <br>
                                <input placeholder="설명(50자이내)" id="comment" type="text" class="form-control" name="comment" value="<?= $comment ?>"> <br>
                                <input placeholder="URL" id="url" type="text" class="form-control" name="url" value="<?= $url ?>">

                                <input type="hidden" name="attached" value=<?=$attached?>>
                                <?= $opt ?>
                            </div>
                            <div class="form-group">
                                <textarea class="editor" name="content"><?=$content?></textarea>
                            </div>

                            <br>

                            <div style="text-align:center">
                                <button type="submit" class="btn btn-outline-primary">저장하기</button>
                                <button type="button" class="btn btn-outline-primary" onclick="location.href='/pages/list'">페이지목록</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>