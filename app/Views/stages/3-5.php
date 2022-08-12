<style>

#phaser-example {
    overflow: hidden; 
    width: 100%; 
    height: 95%; 
    /* background-image: url(<?=base_url('img/game/port.png')?>);  */
    background-size: cover; 
    background-position: center;
}

p {
    font-family: 'NanumBarunGothic';
}

.stage_header {
    display: none;
}

@media (max-width: 767px) {
    h3 {
        font-size: 20px;
    }

    /* #phaser-example {
        height: 85%;
    } */

}


</style>

<script>
    var config = {
        type: Phaser.WEBGL,
        backgroundColor: 'rgba(255,255,255,0.5)',
        transparent: true,
        scene: {
            preload: preload,
            create: create
        },
        physics: {
            default: 'arcade',
            arcade: {
                gravity: { y: 0 }
            }
        },
        scale: {
            mode: Phaser.Scale.FIT,
            parent: 'phaser-example',
            autoCenter: Phaser.Scale.CENTER_BOTH,
            width: 640,
            height: 1000
        },
        pixelArt: true,
    };

    var game = new Phaser.Game(config);
    var cardarray = [0, 1, 2, 3, 4, 5, 6, 7, 8];
    var road = [[60, 90], [190, 90], [190,220], [450, 220], [450, 350], [450, 480], [580, 480], [580, 610]];
    var yellowloc = [[0,0], [70, 750], [200, 750], [330, 750], [460, 750], [70, 900], [200, 900], [330, 900], [460, 900]];
    var destination = [580, 610];
    var beforerock = [190, 220];
    var newcardarray;
    var location1;
    var location2;
    var cardinfo1;
    var cardinfo2;
    var player;
    var currentloc;
    var move;
    var i = 1;

    function preload ()
    {
        this.load.setBaseURL('<?=base_url('img/game')?>');
        this.load.image('tiles', 'tile/tileset.png');
        this.load.tilemapTiledJSON('map', 'tile/scranton.json');

        this.load.image('card1', 'quiz/cards/1.png');
        this.load.image('card2', 'quiz/cards/2.png');
        this.load.image('card3', 'quiz/cards/3.png');
        this.load.image('card4', 'quiz/cards/4.png');
        this.load.image('card5', 'quiz/cards/5.png');
        this.load.image('card6', 'quiz/cards/6.png');
        this.load.image('card7', 'quiz/cards/7.png');
        this.load.image('card8', 'quiz/cards/8.png');
        this.load.image('gocard', 'quiz/cards/go.png');
        this.load.image('player', 'quiz/cards/player.png');
        this.load.image('yellow', 'quiz/cards/yellowcard.png');
        this.load.image('sign', 'quiz/cards/sign.png');
    }

    function create ()
    {
        var map = this.make.tilemap({ key: 'map' });
        var tiles1 = map.addTilesetImage('tileset', 'tiles');
        var tiles2 = map.addTilesetImage('tileset', 'tiles');
        var layer1 = map.createLayer(0, tiles1, 0, 20).setScale(4);
        var layer2 = map.createLayer(1, tiles2, 0, 20).setScale(4);

        console.log(layer1);

        player = this.add.image(60, 90, 'player');

        yellow = this.add.image(70,750,'yellow').setScale(0.45);
        sign = this.add.image(-200,-200,'sign');

        const card1 = this.add.image(70,750,'card1').setScale(0.45).setInteractive();
        card1.on('pointerdown', function (pointer) {
            if(!location1 && !location2) {
                location1 = cardarray.indexOf(1);

                cardinfo1 = [card1.x, card1.y, card1];
                
            } else if(location1 && !location2) {
                location2 = cardarray.indexOf(1);
                newcardarray = cardarray.slice();
                newcardarray[location2] = cardarray[location1];
                newcardarray[location1] = cardarray[location2];
                cardarray = newcardarray.slice();
                location1 = '';
                location2 = '';

                cardinfo2 = [card1.x, card2.y, card1];
                cardinfo1[2].x = cardinfo2[0];
                cardinfo1[2].y = cardinfo2[1];
                cardinfo2[2].x = cardinfo1[0];
                cardinfo2[2].y = cardinfo1[1];
            }
        });

        const card2 = this.add.image(200,750,'card2').setScale(0.45).setInteractive();
        card2.on('pointerdown', function (pointer) {
            if(!location1 && !location2) {
                location1 = cardarray.indexOf(2);

                cardinfo1 = [card2.x, card2.y, card2]
            } else if(location1 && !location2) {
                location2 = cardarray.indexOf(2);
                newcardarray = cardarray.slice();
                newcardarray[location2] = cardarray[location1];
                newcardarray[location1] = cardarray[location2];
                cardarray = newcardarray.slice();
                location1 = '';
                location2 = '';

                cardinfo2 = [card2.x, card2.y, card2];
                cardinfo1[2].x = cardinfo2[0];
                cardinfo1[2].y = cardinfo2[1];
                cardinfo2[2].x = cardinfo1[0];
                cardinfo2[2].y = cardinfo1[1];
            }
        });

        const card3 = this.add.image(330,750,'card3').setScale(0.45).setInteractive();
        card3.on('pointerdown', function (pointer) {
            if(!location1 && !location2) {
                location1 = cardarray.indexOf(3);

                cardinfo1 = [card3.x, card3.y, card3]
            } else if(location1 && !location2) {
                location2 = cardarray.indexOf(3);
                newcardarray = cardarray.slice();
                newcardarray[location2] = cardarray[location1];
                newcardarray[location1] = cardarray[location2];
                cardarray = newcardarray.slice();
                location1 = '';
                location2 = '';

                cardinfo2 = [card3.x, card3.y, card3];
                cardinfo1[2].x = cardinfo2[0];
                cardinfo1[2].y = cardinfo2[1];
                cardinfo2[2].x = cardinfo1[0];
                cardinfo2[2].y = cardinfo1[1];
            }
        });

        const card4 = this.add.image(460,750,'card4').setScale(0.45).setInteractive();
        card4.on('pointerdown', function (pointer) {
            if(!location1 && !location2) {
                location1 = cardarray.indexOf(4);

                cardinfo1 = [card4.x, card4.y, card4]
            } else if(location1 && !location2) {
                location2 = cardarray.indexOf(4);
                newcardarray = cardarray.slice();
                newcardarray[location2] = cardarray[location1];
                newcardarray[location1] = cardarray[location2];
                cardarray = newcardarray.slice();
                location1 = '';
                location2 = '';

                cardinfo2 = [card4.x, card4.y, card4];
                cardinfo1[2].x = cardinfo2[0];
                cardinfo1[2].y = cardinfo2[1];
                cardinfo2[2].x = cardinfo1[0];
                cardinfo2[2].y = cardinfo1[1];
            }
        });

        const card5 = this.add.image(70,900,'card5').setScale(0.45).setInteractive();
        card5.on('pointerdown', function (pointer) {
            if(!location1 && !location2) {
                location1 = cardarray.indexOf(5);

                cardinfo1 = [card5.x, card5.y, card5]
            } else if(location1 && !location2) {
                location2 = cardarray.indexOf(5);
                newcardarray = cardarray.slice();
                newcardarray[location2] = cardarray[location1];
                newcardarray[location1] = cardarray[location2];
                cardarray = newcardarray.slice();
                location1 = '';
                location2 = '';

                cardinfo2 = [card5.x, card5.y, card5];
                cardinfo1[2].x = cardinfo2[0];
                cardinfo1[2].y = cardinfo2[1];
                cardinfo2[2].x = cardinfo1[0];
                cardinfo2[2].y = cardinfo1[1];
            }
        });

        const card6 = this.add.image(200,900,'card6').setScale(0.45).setInteractive();
        card6.on('pointerdown', function (pointer) {
            if(!location1 && !location2) {
                location1 = cardarray.indexOf(6);

                cardinfo1 = [card6.x, card6.y, card6]
            } else if(location1 && !location2) {
                location2 = cardarray.indexOf(6);
                newcardarray = cardarray.slice();
                newcardarray[location2] = cardarray[location1];
                newcardarray[location1] = cardarray[location2];
                cardarray = newcardarray.slice();
                location1 = '';
                location2 = '';

                cardinfo2 = [card6.x, card6.y, card6];
                cardinfo1[2].x = cardinfo2[0];
                cardinfo1[2].y = cardinfo2[1];
                cardinfo2[2].x = cardinfo1[0];
                cardinfo2[2].y = cardinfo1[1];
            }
        });

        const card7 = this.add.image(330,900,'card7').setScale(0.45).setInteractive();
        card7.on('pointerdown', function (pointer) {
            if(!location1 && !location2) {
                location1 = cardarray.indexOf(7);

                cardinfo1 = [card7.x, card7.y, card7]
            } else if(location1 && !location2) {
                location2 = cardarray.indexOf(7);
                newcardarray = cardarray.slice();
                newcardarray[location2] = cardarray[location1];
                newcardarray[location1] = cardarray[location2];
                cardarray = newcardarray.slice();
                location1 = '';
                location2 = '';

                cardinfo2 = [card7.x, card7.y, card7];
                cardinfo1[2].x = cardinfo2[0];
                cardinfo1[2].y = cardinfo2[1];
                cardinfo2[2].x = cardinfo1[0];
                cardinfo2[2].y = cardinfo1[1];
            }
        });
        
        const card8 = this.add.image(460,900,'card8').setScale(0.45).setInteractive();
        card8.on('pointerdown', function (pointer) {
            if(!location1 && !location2) {
                location1 = cardarray.indexOf(8);

                cardinfo1 = [card8.x, card8.y, card8]
            } else if(location1 && !location2) {
                location2 = cardarray.indexOf(8);
                newcardarray = cardarray.slice();
                newcardarray[location2] = cardarray[location1];
                newcardarray[location1] = cardarray[location2];
                cardarray = newcardarray.slice();
                location1 = '';
                location2 = '';

                cardinfo2 = [card8.x, card8.y, card8];
                cardinfo1[2].x = cardinfo2[0];
                cardinfo1[2].y = cardinfo2[1];
                cardinfo2[2].x = cardinfo1[0];
                cardinfo2[2].y = cardinfo1[1];
            }
            
        });

        const gocard = this.add.image(580,750,'gocard').setScale(0.45).setInteractive();
        gocard.on('pointerdown', function (pointer) {
            if(i == 9) {
                player.x = 60;
                player.y = 90;
                i = 1;
                yellow.x = yellowloc[1][0];
                yellow.y = yellowloc[1][1];
            } else {
                move = moveplayer(cardarray[i], player);
                if(move == 'double') {
                    moveplayer(cardarray[i-1], player);
                    i++;
                    yellow.x = yellowloc[i][0];
                    yellow.y = yellowloc[i][1];
                } else if(move == 'rock') {
                    if(player.x == beforerock[0] && player.y == beforerock[1]) {
                        if(cardarray[i+1] == 8) {
                            moveplayer(8, player);
                            i += 2;
                            yellow.x = yellowloc[i][0];
                            yellow.y = yellowloc[i][1];
                        } else {
                            window.alert('바위를 넘을 수 있는 카드가 없습니다!');
                            player.x = 60;
                            player.y = 90;
                            i = 1;
                            yellow.x = yellowloc[1][0];
                            yellow.y = yellowloc[1][1];
                        }

                    } else {
                        window.alert('앞에 바위가 없습니다!');
                        player.x = 60;
                        player.y = 90;
                        i = 1;
                        yellow.x = yellowloc[1][0];
                        yellow.y = yellowloc[1][1];
                    }

                } else {
                    if(i < 8) {
                        i++;
                    }

                    yellow.x = yellowloc[i][0];
                    yellow.y = yellowloc[i][1];
                }
                
                
            }

            currentloc = [player.x, player.y];
            console.log(currentloc);

            if(!isItemInArray(road, currentloc)) {
                window.alert('길이 아닙니다');
                player.x = 60;
                player.y = 90;
                i = 1;
                yellow.x = yellowloc[1][0];
                yellow.y = yellowloc[1][1];
            };
            

            if(player.x == destination[0] && player.y == destination[1]) {
                window.alert('목적지에 도착했습니다!');
                yellow.x = yellowloc[1][0];
                yellow.y = yellowloc[1][1];
                sign.x = 320;
                sign.y = 500;
            }
            
        });       
    }

    function moveplayer(num, player) {
        if(num == 1 || num == 3) {
            player.x += 130; 
        }
        else if(num == 2 || num == 4 || num == 6) {
            player.y += 130;
        }
        else if(num == 8) {
            player.x += 260;
        } 
        else if(num == 5) {
            return 'double';
        }
        else if(num == 7) {
            return 'rock';
        }
    }

    function isItemInArray(array, item) {
    for (var i = 0; i < array.length; i++) {
        // This if statement depends on the format of your array
        if (array[i][0] == item[0] && array[i][1] == item[1]) {
            return true;   // Found it
        }
    }
        return false;   // Not found
    }

    // function getIndexOfK(arr, k){
    //     if (!arr){
    //         return [];
    //     }
        
    //     for(var i=0; i<arr.length; i++){
    //         var index = arr[i].indexOf(k);
    //         if (index > -1){
    //             return [i, index];
    //         }
    //     }
        
    //     return [];
    // }


</script>

<div id="phaser-example">
</div>
<h3 style="text-align:center">[<a data-bs-toggle="modal" href="#exampleModalToggle">플레이방법</a>] [<a href="/stages/">처음메뉴</a>] [<a href="/stages/index/3-5">초기화</a>] [<a href="/stages/index/3-5-1">답입력</a>]</h3>


<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">플레이방법</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>카드바꾸기: 두 카드를 터치하거나 마우스 클릭을 하면 두 카드가 실행되는 위치를 서로 바꿀 수 있습니다.</p>
        <p>캐릭터 이동: 캐릭터는 배열되어 있는 카드의 순서대로 실행됩니다. 노란색으로 바탕 표시가 되어 있는 카드가 실행되는 카드이고, 오른편의 실행 버튼을 누르면 그 카드대로 움직입니다.</p>
        <p>바위카드는 캐릭터 앞에 바위가 있을 때 그 다음 카드를 실행합니다. 바위를 뛰어 넘으려면 어느 카드가 필요할까요?</p>
        <p>X2카드는 앞서 실행되었던 카드를 반복하여 또 한번 실행합니다.</p>
        <p>팻말이 있는 곳까지 가도록 카드를 배열해 보세요. 코딩카드를 받으신 분들은 동일한 화살표 카드의 경우 작은 숫자를 앞에 배열하시길 바랍니다. 모든 카드가 잘 배열되었다면 카드를 뒤집어 보세요!</p>
        <p>작동이 정상적으로 되지 않을 때에는 하단의 "초기화"를 눌러 보시기 바랍니다.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
      </div>
    </div>
  </div>
</div>