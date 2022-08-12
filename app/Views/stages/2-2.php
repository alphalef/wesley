<style>

#phaser-example {
    overflow: hidden; 
    width: 100%; 
    height: 95%; 
    background-image: url(<?=base_url('img/game/chungdonghouse.png')?>); 
    background-size: cover; 
    background-position: center;
}

@media (max-width: 767px) {
    h3 {
        font-size: 20px;
    }

    #phaser-example {
        height: 85%;
    }

}


</style>

<script>
var config = {
        type: Phaser.AUTO,
        backgroundColor: 'rgba(255,255,255,0)',
        physics: {
            default: 'arcade',
            arcade: {
                gravity: { y: 200 }
            }
        },
        scene: {
            preload: preload,
            create: create
        },
        scale: {
            mode: Phaser.Scale.FIT,
            parent: 'phaser-example',
            autoCenter: Phaser.Scale.CENTER_BOTH,
            width: 800,
            height: 800
        },
    };

    var game = new Phaser.Game(config);

    function preload ()
    {
        this.load.setBaseURL('<?=base_url('img/game')?>');
        this.load.image('quiz', 'quiz/stage2_quiz1.png');
        this.load.image('hint1', 'quiz/stage2_quiz1_hint1.png');
        this.load.image('hint2', 'quiz/stage2_quiz1_hint2.png');
    }

    function create ()
    {   
        <?php if(isset($_GET['hint']) && $_GET['hint'] == 1): ?>
            this.add.image(400, 400, 'hint1');
        <?php elseif(isset($_GET['hint']) && $_GET['hint'] == 2): ?>
            this.add.image(400, 400, 'hint2');
        <?php else: ?>
            this.add.image(400, 400, 'quiz');
        <?php endif ?>
    }

</script>


<div id="phaser-example">
</div>

<br>
<?php if(isset($_GET['hint']) && $_GET['hint'] == 1): ?>
    <h3 style="text-align:center">[<a href="/stages/index/2-2?hint=2">2단계 힌트보기</a>] [<a href="/stages/index/2-2">문제보기</a>] [<a href="/stages/index/2-3">답입력</a>]</h3>
<?php elseif(isset($_GET['hint']) && $_GET['hint'] == 2): ?>
    <h3 style="text-align:center">[<a href="/stages/index/2-2">문제보기</a>] [<a href="/stages/index/2-3">답입력</a>]</h3>
<?php else: ?>
    <h3 style="text-align:center">힌트: 전자시계 숫자를 반대로 생각해보자 [<a href="/stages/index/2-2?hint=1">1단계 힌트보기</a>] [<a href="/stages/index/2-3">답입력</a>]</h3>
<?php endif ?>