<style>

#phaser-example {
    overflow: hidden; 
    width: 100%; 
    height: 95%; 
    background-image: url(<?=base_url('img/game/port.png')?>); 
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
        backgroundColor: 'rgba(255,255,255,0.5)',
        transparent: true,
        physics: {
            default: 'matter',
            matter: {
                // debug: true,
                gravity: {
                    x: 0,
                    y: 0
                }
            },
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

        this.load.image('blue12', 'sprites/tetris/blue12.png');
        this.load.image('violet21', 'sprites/tetris/violet21.png');        
        this.load.image('blue22', 'sprites/tetris/blue22.png');
        this.load.image('pink22', 'sprites/tetris/pink22.png');
        this.load.image('green111', 'sprites/tetris/green111.png');
        this.load.image('yellow121', 'sprites/tetris/yellow121.png');
        this.load.image('yellow211', 'sprites/tetris/yellow211.png');

        this.load.json('shapes', 'sprites/tetris/shapes.json');
    }

    function create ()
    {
        var rect = new Phaser.Geom.Rectangle(100, 100, 600, 600);
        var graphics = this.add.graphics({ 
            lineStyle: { 
                width: 5, 
                color: 0xE69138 
            }, 
            fillStyle: { 
                color: 0xff0000 
            }
        });
        graphics.strokeRectShape(rect);

        var shapes = this.cache.json.get('shapes');
        console.log(shapes.blue12);
        this.input.addPointer(6);

        var blue12 = this.matter.add.sprite(200, 200, 'blue12', null, { shape: shapes.blue12 }).setScale(0.7).setInteractive({ draggable: true });
        blue12.on('drag', function (pointer, dragX, dragY) {
            this.x = dragX;
            this.y = dragY;
        });

        var blue22 = this.matter.add.sprite(400, 300, 'blue22').setScale(0.7).setInteractive({ draggable: true });
        blue22.on('drag', function (pointer, dragX, dragY) {
            this.x = dragX;
            this.y = dragY;
        });

        var green111 = this.matter.add.sprite(600, 220, 'green111').setScale(0.7).setInteractive({ draggable: true });
        green111.on('drag', function (pointer, dragX, dragY) {
            this.x = dragX;
            this.y = dragY;
        });

        var pink22 = this.matter.add.sprite(200, 380, 'pink22').setScale(0.7).setInteractive({ draggable: true });
        pink22.on('drag', function (pointer, dragX, dragY) {
            this.x = dragX;
            this.y = dragY;
        });

        var violet21 = this.matter.add.sprite(400, 500, 'violet21', null, { shape: shapes.violet21 }).setScale(0.7).setInteractive({ draggable: true });
        violet21.on('drag', function (pointer, dragX, dragY) {
            this.x = dragX;
            this.y = dragY;
        });

        var yellow121 = this.matter.add.sprite(600, 500, 'yellow121', null, { shape: shapes.yellow121 }).setScale(0.7).setInteractive({ draggable: true });
        yellow121.on('drag', function (pointer, dragX, dragY) {
            this.x = dragX;
            this.y = dragY;
        });

        var yellow211 = this.matter.add.sprite(200, 550, 'yellow211', null, { shape: shapes.yellow211 }).setScale(0.7).setInteractive({ draggable: true });
        yellow211.on('drag', function (pointer, dragX, dragY) {
            this.x = dragX;
            this.y = dragY;
        });

    }

</script>

<div id="phaser-example">
</div>

<br>
<h3 style="text-align:center">힌트:먼저 스크랜톤과 한국 단어를 맞춰보자 [<a href="/stages/index/1-5">초기화</a>] [<a href="/stages/index/1-5-1">답입력</a>]</h3>