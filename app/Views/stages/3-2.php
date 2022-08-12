<style>

#phaser-example {
    overflow: hidden; 
    width: 100%; 
    height: 95%; 
    background-image: url(<?=base_url('img/game/eastgate.png')?>); 
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
            width: 400,
            height: 900
        },
    };

    var game = new Phaser.Game(config);
    var quiz;

    function preload ()
    {
        this.load.plugin('rexperspectiveimageplugin', 'https://raw.githubusercontent.com/rexrainbow/phaser3-rex-notes/master/dist/rexperspectiveimageplugin.min.js', true);

        this.load.setBaseURL('<?=base_url('img/game')?>');
        this.load.image('quiz', 'quiz/stage3_quiz1.png');
    }

    function create ()
    {   
        // this.add.image(200, 450, 'quiz');
        quiz = this.add.rexPerspectiveImage(200, 450, 'quiz', null, { hideCCW: false });

        this.input.on('pointermove', function (pointer) {

            if (!pointer.isDown) {
                return;
            }

            quiz.rotationX += pointer.velocity.y * (1 / 800);
        });

    }

</script>


<div id="phaser-example">
</div>

<br>

<h3 style="text-align:center">힌트: 이미지를 위아래로 드래그해서 기울여보자 [<a href="/stages/index/3-3">답입력</a>]</h3>
