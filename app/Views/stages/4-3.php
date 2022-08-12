<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta charset="utf-8">
    <base target="_parent" />
    <title>Responsive Jigsaw Puzzle</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Styles -->
    <link rel="stylesheet" href="<?=base_url('css/puzzle.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/demo.css')?>">
    <!-- Include Polyfills First -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=default"></script>
    <script src="<?=base_url('js/puzzle.js')?>"></script>
</head>

<body class="center-content">

    <style>

        .animation {
            animation: fadeIn; 
            animation-duration: 2s;
        }

        .hidden {
            display: none;
        }

        .video-button {
            display: flex;
            align-items: center;
            justify-content: center;
            /* z-index: 80; */
            height: 70%;
            position: fixed;
            padding-top: 200px;
            width: 100%;
            z-index: 99;
        }

        .next-button {
            display: flex;
            align-items: flex-end;
            justify-content: center;
            z-index: 80;
            height: 90%;
            position: fixed;
            width: 100%;
        }

        .title {
            /* display: flex;
            align-items: flex-end;
            justify-content: center;
            z-index: 80;
            height: 13%;
            position: fixed;
            width: 100%; */

            display: block;
            text-align: center;
            width: 100%;
            margin-top: 30px;
            margin-bottom: -20px;
        }

        .stage_header {
            height: 40px;
            background: #519EB1;
            text-align: center;
            margin-bottom: -40px;
            z-index: 99;
            position: absolute;
            width: 100%;
            padding-top: 7px;
            /* margin: 0px; */
        }

        button {
            min-width: 300px;
            height: 50px;
        }

        a {
            text-decoration: none;
        }

        .dragWrapper {
            overflow: auto;
        }
    </style>

    <?php

        if(!isset($_GET['opt'])) {
            $img = base_url('img/game/quiz/puzzle-1.png');
            $button = '
                <button class="btn btn-success btn-lg" id="link1">
                   이 곳은 어디일까?
                </button>
                ';
            $next = '다음 문제 보기';
            $link = '/stages/index/4-3?opt=1';
        } elseif($_GET['opt']==1) {
            $img = base_url('img/game/quiz/puzzle-2.png');
            $button = '
            <button class="btn btn-success btn-lg" id="link2">
                    이 곳은 어디일까?
                </button>
                ';
            $next = '나는 동후다';
            $link = '/donghu/index/4';
        }

    ?>
    
    <input type="checkbox" name="options" id="options" style="display: none;">

    <!-- <label for="options" class="controls no-select">옵션</label> -->

    <div class="title">
        <h3>어떤 장소일까요?</h3>
        <h4>아래의 퍼즐을 맞춰보고 어떤 장소인지 영상을 확인하실 수 있습니다!</h4>
    </div>

    <div class="stage_header">
        <a href="/stages" style="text-decoration:none;"><h3 style="margin:0px;">메뉴 보기</h3></a>
    </div>
    
    <!-- <div class="dragWrapper"> -->
        <div id="puzzle1" style="padding: 20px; max-width:800px; width:100%; margin:auto; touch-action: none;"></div>
    <!-- </div> -->

    <div class="options">
        <div class="fgroup grid">
            <div class="fieldset">
                <label for="numrows"># of rows</label>
                <input type="number" id="numrows" name="numrows" value="3" min="1" max="10">

                <label for="numcolumns"># of columns</label>
                <input type="number" id="numcolumns" name="numcolumns" value="3" min="1" max="10">
            </div>
        </div>

        <div class="fgroup image">
            <div class="fieldset" style="text-align: left;">
                <label for="image">Image URL</label>
                <input type="text" id="image" name="image" style="width: 100%;" value="">
            </div>
        </div>

        <div class="fgroup no-select">
            <div class="fieldset difficulty">
                <input type="radio" id="easy" name="difficulty" value="easy">
                <label for="easy">Easy</label>

                <input type="radio" id="normal" name="difficulty" value="normal">
                <label for="normal">Normal</label>

                <input type="radio" id="hard" name="difficulty" value="hard">
                <label for="hard">Hard</label>

                <input type="radio" id="expert" name="difficulty" value="expert" checked>
                <label for="expert">Expert</label>
            </div>
        </div>

        <div class="btngroup">
            <div class="ui-btn no-select" data-attr="reset">UPDATE</div>
        </div>
    </div>
    
    <div class="video-button hidden">
        <?=$button?>
    </div>

    <div class="next-button hidden">
        <button class="btn btn-primary btn-lg" onClick="location.href='<?=$link?>'">
            <?=$next?>
        </button>
    </div>

<!-- Modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="display:none;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="400" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\/script>')</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<script>
    $('#link1').click(function () {
        var src = 'http://www.youtube.com/embed/d05ImtiGVag?html5=1&autoplay=1';
        $('#myModal').modal('show');
        $('#myModal iframe').attr('src', src);
    });

    $('#link2').click(function () {
        var src = 'http://www.youtube.com/embed/FxjAbfW9AN0?html5=1&autoplay=1';
        $('#myModal').modal('show');
        $('#myModal iframe').attr('src', src);
    });


    $('#myModal button').click(function () {
        $('#myModal iframe').removeAttr('src');
    });
</script>


    <!-- <div data-attr="reset" class="controls no-select" style="display: inline-block;">SHUFFLE</div> -->

    <script type="text/javascript">

        document.addEventListener('DOMContentLoaded',function() {
            function getURLParameter(sParam) {
                const sPageURL = decodeURIComponent(window.location.search.substring(1)),
                    sURLVariables = sPageURL.split('&');
                let sParameterName,
                    i;

                for (i = 0; i < sURLVariables.length; i++) {
                    sParameterName = sURLVariables[i].split('=');

                    if (sParameterName[0] === sParam) {
                        return sParameterName[1] === undefined ? true : sParameterName[1];
                    }
                }
            }

            const opts = {};
            const image = (getURLParameter('image')) ? getURLParameter('image') : "<?=$img?>";
            const puzzle1 = document.querySelector('#puzzle1');
            puzzle1.pz = new Puzzle({
                el           : puzzle1,
                image        : image,
                difficulty   : "expert",
                dragenter    : function(evt){onDragEnter(evt)},
                dragleave    : function(evt){onDragLeave(evt)},
                mousedown    : function(evt){onMouseDown(evt)},
                mouseup      : function(evt){onMouseUp(evt)},
                finished     : function(evt){puzzleFin(evt)}
            }).init();

            // Puzzle events

            function onDragEnter(evt) {
                if (!evt.target.draggable) { 
                    evt.target.classList.add('highlight');
                }
            }

            function onDragLeave(evt) {
                if (!evt.target.draggable) {
                    evt.target.classList.remove('highlight');
                }
            }

            function onMouseDown(evt) {
                evt.target.children[0].classList.add('highlight');
            }

            function onMouseUp(evt) {
                evt.target.children[0].classList.remove('highlight');
            }

            function puzzleFin(evt) {
                setTimeout(function() {
                    Object.assign(evt.self.fullImg.style,{'opacity':1,'z-index':1});
                    document.querySelector('.video-button').classList.remove('hidden');
                    document.querySelector('.video-button').classList.add('animation');
                    document.querySelector('.next-button').classList.remove('hidden');
                    document.querySelector('.next-button').classList.add('animation');
                }.bind(evt),300); 
            }

            // Update buttons
            document.querySelectorAll('div[data-attr="reset"]').forEach(function(item){
                item.addEventListener('click',function(evt){
                    updatePuzzle(evt);
                });
            });
            
            // Make sure number inputs are between 1 and 10
            document.querySelectorAll('input[type="number"]').forEach(function(item){
                item.addEventListener('change',function(){
                    if (Number(this.value) > 10) {
                        this.value = 10;
                    } else if (Number(this.value) <= 0) {
                        this.value = 1;
                    }
                });
            });

            // Update puzzle and reinitialize
            function updatePuzzle() {
                document.querySelectorAll('.options input').forEach(function(item){
                    if (item.value.length && item.type === "text" || item.type === "number") {
                        opts[item.name] = item.value;
                    }

                    if (item.value.length && item.type === "radio" && item.checked) {
                        opts[item.name] = item.value;
                    }
                });
                puzzle1.pz.usropts = opts;
                puzzle1.pz.init();      
            }
        });
    </script>
</body>
</html>