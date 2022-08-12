<?php 
    if(!$title) {
        $banner_title = "새로운 글 추가";
        $action = "/admin/postadd";
        $content = "";
        $opt = '';

    } else {
        $banner_title = "글 수정";
        $action = "/admin/postedit/".$id.'-'.$url;
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
                                <input placeholder="제목" id="title" type="text" class="form-control" name="title" value="<?= $title ?>">
                                <input type="hidden" name="category" value=<?=$category?>>
                                <input type="hidden" name="attached" value=<?=$attached?>>
                                <?= $opt ?>
                            </div>
                            <div class="form-group">
                                <textarea class="editor" name="content"><?=$content?></textarea>
                            </div>

                            <!-- 첨부된 파일이 있을 경우 파일 출력 -->
                            <div>
                            <?php
                                $resource_dir = ROOTPATH . 'public/attached/'.$attached.'/resourcefile';
                                if(is_dir($resource_dir)) {
                                    if ($dh = opendir($resource_dir)){   
                                        echo "<div><h4>첨부파일</h4></div>";     
                                        echo "<p>삭제하기 원하는 파일은 파일명 앞의 체크박스를 선택하고 저장을 누르시면 됩니다</p>" ;           
                                        echo "<div>"; 
                                        while (($file = readdir($dh)) !== false && $file !== '...' && $file !== '..'){
                                            $fileurl = base_url('attached/'.$attached.'/resourcefile/'.$file);
                                            echo "<input type='checkbox' name='removefiles[]' value=".$file."> <a href=".$fileurl.">" . $file . "</a><br>";        
                                        };            
                                        echo "</div>";                               
                                        closedir($dh);                              
                                    }                                             
                                }  
                            ?>
                            </div>

                            <br>

                            <!-- 자료실일 경우 첨부파일 폼 추가 -->
                            <?php if ($category == "resource"): ?>
                                <input type="file" name="resourcefiles[]" /> <br><br>
                                <input type="file" name="resourcefiles[]" /> <br><br>
                                <input type="file" name="resourcefiles[]" /> <br><br>
                            <?php endif ?>


                            <div style="text-align:center">
                                <button type="submit" class="btn btn-outline-primary">저장하기</button>
                                <button type="button" class="btn btn-outline-primary" onclick="location.href='/admin/post/<?=$category?>'">글목록</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>