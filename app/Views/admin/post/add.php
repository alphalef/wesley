<?php 

    switch($option) {
        case 'form':
            $option_title = "추가";
            $action = "/posts/add/put";
            if(!isset($content)) { $content = ""; }
            $opt = "";
            break;
        case 'editform':
            $option_title = "수정";
            $action = "/posts/edit/put/".$id;
            $opt = "<input type='hidden' name='opt' value=1>";
            $title = $title;
            break;
    }

    switch($open) {
        case "":
            $check_close = "checked";
            $check_name_close = "";
            $check_open = "";
            break;
        case "0":
            $check_close = "checked";
            $check_name_close = "";
            $check_open = "";
            break;
        case "1":
            $check_close = "";
            $check_name_close = "checked";
            $check_open = "";
            break;
        case "2":
            $check_close = "";
            $check_name_close = "";
            $check_open = "checked";
            break;
    }

    if(!isset($id)) {
        $id = "";
    }
    
?>

<section>
    <form method="post" action="<?=$action?>" enctype="multipart/form-data" style="max-width:1000px; margin: auto">
        <div class="form-group">
            <input placeholder="제목" id="title" type="text" class="form-control" name="title" value="<?=$title?>" required>
            <input type="hidden" name="attached" value=<?=$attached?>>
            <?= $opt ?>
        </div>

        <div class="form-group">
            <textarea class="editor" name="content"><?=$content?></textarea>
        </div>

        <br>
        <div style="text-align:center">
            <button type="submit" class="btn btn-outline-secondary">저장하기</button>
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='/adm/mylist/'">글목록</button>
        </div>
    </form>

    <?php if($option == 'editform'): ?>
    <div style="text-align:center">
    <form method=post action="/posts/remove/<?=$id?>">
        <div class="d-flex justify-content-center align-items-center mt-4">
            <input type="checkbox" name="remove_confirm" class="form-check-input"> 
            &nbsp;&nbsp;
            삭제확인 
            &nbsp;&nbsp;
            <input type="submit" class="btn btn-dark" value="글삭제">                    
        </div>
    </form>
    </div>
    <?php endif ?>
</section>
<div style="margin-bottom: 30px;"></div>