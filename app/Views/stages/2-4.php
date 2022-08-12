<style>
.slider_area {
    /* background-image: url(<?=base_url('img/game/park1.png')?>); */
    background-size: cover;
    background-position: center;
}
.btn {
    font-size: 30px;
}

.subtitleframe {
    margin-bottom: 40px;
    padding: 20px;
    border: 5px solid #fff;
    border-radius: 20px;
    background-color: rgba(0,0,0,0.4);
    font-size: 35px;
    color: #fff;
    text-shadow: 2px 2px 2px gray;
}

.animation {
    animation: fadeIn; 
    animation-duration: 2s;
}

.hidden {
    display: none;
}

.pointer {
    cursor: pointer;
    color: #D5745D;
}

@media (max-width: 767px) {
    .subtitleframe {
        font-size: 20px;
        margin-bottom: 20px;
    }
    img {
        width: 60px;
    }
    
}

@media (min-width: 767px) {
    .subtitleframe {
        font-size: 30px;
    }
    img {
        width: 100px;
    }
}

</style>

<div class="carousel-item active">
    <div class="slider_area">
        <div class="single_slider" style="height: 100vh;">
            <div class="container">             
                <div class="row d-flex align-items-end justify-content-center" style="height: 100vh">

                    <audio id="audio" controls="controls" style="display:none;">
                        <source id="audioSource" src=""></source>
                        오디오를 재생하려면 크롬 브라우저를 사용해 주세요.
                    </audio>

                    <div class="col-6 mrx" style="z-index:2; text-align:left">
                        <img src="<?=base_url('/img/game/sprites/mrx.png')?>">
                    </div>
                    <div class="col-6 sprites_faith_love" style="z-index:1; text-align:right">
                        <img src="<?=base_url('/img/game/sprites/faith.png')?>">
                        <img src="<?=base_url('/img/game/sprites/love.png')?>">
                    </div>
                    <div class="subtitleframe" style="z-index:99">
                        <div class="subtitle1 hidden">
                            스크랜톤 선교사님은 옛날 한국 땅에 살던 사람들을 돕고 복음을 전하기 위해 이 먼 땅까지 오셨구나. 
                            <span class="pointer" onClick="transit(2)">[다음]</span>
                        </div>
                        <div class="subtitle2 hidden">
                            어, 그런데 나랑 비슷한 또래의 아이들인 것 같은데 무거운 지게를 지고 일을 하는 것 같다. 그 때는 아이들이 학교에 가지 못하고 저렇게 일을 하는 것이 당연했을까?
                            [<span class="pointer" onClick="transit(1)">이전</span> | <span class="pointer" onClick="transit(3)">다음</span>]
                        </div>
                        <div class="subtitle3 hidden">
                            그러면 메리 스크랜톤 선교사님과 윌리엄 스크랜톤 선교사님은 어떤 사역들을 통해 이 땅의 사람들에게 도움을 주셨을까? 
                            [<span class="pointer" onClick="transit(2)">이전</span> | <span class="pointer" onClick="transit(4)">다음</span>]
                        </div>
                        <div class="subtitle4 hidden">
                            음, 바닥에 이건 무엇이지? 아이들이 사방치기를 했던 흔적일까? 그런데 여기에 무언가 암호와도 같은 글귀가 적혀있는 것 같다. 
                            [<span class="pointer" onClick="transit(3)">이전</span> | <span class="pointer" onClick="location.href='/stages/index/2-5'">다음</span>]
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

function transit(num) {

    if(num == 1) {
        document.querySelector(".slider_area").style.backgroundImage = "url(<?=base_url('img/game')?>/laundry.png)";
    } else if(num == 4) {
        document.querySelector(".slider_area").style.backgroundImage = "url(<?=base_url('img/game')?>/hopscotch.png)";
    } else {
        document.querySelector(".slider_area").style.backgroundImage = "url(<?=base_url('img/game')?>/children.png)";
    }

    let div = document.querySelector('.subtitle' + num);
    div.classList.remove('hidden');
    div.classList.add('animation');
    
    if(num-1 > 0) {
        let prev_div = document.querySelector('.subtitle' + (num-1));
        prev_div.classList.add('hidden');
    }
    if(num+1 < 5) {
        let next_div = document.querySelector('.subtitle' + (num+1));
        next_div.classList.add('hidden');
    }

    let audiodata = ['', '<?=base_url('audio/2-4-1.mp3')?>', '<?=base_url('audio/2-4-2.mp3')?>', '<?=base_url('audio/2-4-3.mp3')?>', '<?=base_url('audio/2-4-4.mp3')?>'];
    let audio = document.getElementById('audio');
    let audiosource = document.getElementById('audioSource');

    audiosource.src = audiodata[num];
    audio.load();
    audio.play();

    if(num == 1) {
        document.querySelector('.mrx').classList.remove('hidden');
        document.querySelector('.sprites_faith_love').classList.remove('hidden');
        document.querySelector('.mrx').classList.add('animation');
        document.querySelector('.sprites_faith_love').classList.add('animation');
    } else if(num == 4) {
        document.querySelector('.mrx').classList.remove('hidden');
        document.querySelector('.sprites_faith_love').classList.remove('hidden');
        document.querySelector('.mrx').classList.add('animation');
        document.querySelector('.sprites_faith_love').classList.add('animation');
    } else {
        document.querySelector('.mrx').classList.add('hidden');
        document.querySelector('.sprites_faith_love').classList.add('hidden');
    }
    

}

transit(1);

</script>