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

        this.load.image('up', 'quiz/stage1_quiz1_up.png');
        this.load.image('bottom', 'quiz/stage1_quiz1_bottom.png');
        this.load.image('mirror-outside', 'mirror-outside.png');
        this.load.image('mirror-inside', 'mirror-inside.png');
    }

    function create ()
    {
        this.add.image(400, 200, 'up').setScale(0.6);

        <?php if(isset($_GET['hint'])): ?>

        const bottom = this.add.image(400, 510, 'bottom').setScale(0.6);
        const lense = this.make.sprite({
            x: 400,
            y: 600,
            key: 'mirror-inside',
            add: false
        });
        bottom.mask = new Phaser.Display.Masks.BitmapMask(this, lense);
        const mirror = this.add.image(400,600,'mirror-outside');

        this.input.on('pointermove', function(pointer) {
            lense.x = pointer.x;
            lense.y = pointer.y;

            mirror.x = pointer.x;
            mirror.y = pointer.y;
        })
        <?php endif ?>
    }
</script>

<div id="phaser-example" style="overflow: hidden; width: 100%; height: 80%;">
</div>

<?php if(isset($_GET['hint'])): ?>
    <h3 style="text-align:center"><a href="/stages/index/1-3">정답입력</a></h3>
<?php else: ?>
    <h3 style="text-align:center">힌트: 거울을 이용해보자! (<a href="/stages/index/1-2?hint=1">해보기</a>)</h3>
<?php endif?>