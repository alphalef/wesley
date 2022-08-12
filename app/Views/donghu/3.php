<style>

.slider_area {
    background-image: url(<?=base_url('img/game/donghu.png')?>);
    background-size: cover;
    background-position: center;
}

.btn {
    font-size: 30px;
}

@media (max-width: 767px) {
    .btn {
        font-size: 20px;   
    }

    h3 {
        font-size: 20px;
    }
}

.modal-dialog {
      max-width: 800px;
      margin: 30px auto;
  }



.modal-body {
  position:relative;
  padding:0px;
}
.close {
  position:absolute;
  right:-30px;
  top:0;
  z-index:999;
  font-size:2rem;
  font-weight: normal;
  color:#fff;
  opacity:1;
}

</style>


<div class="carousel-item active">
    <div class="slider_area">
        <div class="single_slider d-flex align-items-center" style="height: 100vh;">
            <div style="position: absolute; width: 100%;">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-8" style="text-align:center">
                            <h1 style="padding-bottom: 10px;">내가 동후다!</h1>
                            <h3 style="padding-bottom: 20px;">아래의 버튼을 누르면 부서별 영상을 보실 수 있습니다</h3>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-grid gap-2 col-lg-8 mx-auto">
                                <button type="button" class="cBtnYouTube btn btn-primary" data-bs-toggle="modal" data-bs-target="#oModalYouTube" data-url="https://www.youtube.com/embed/YZy2_5RiXJI?html5=1&autoplay=1" data-titre="유치부 - 선교사님 얼굴 그리기">
                                    유치부 - 색 모래로 우리 교회 완성하기
                                </button>
                                <button type="button" class="cBtnYouTube btn btn-primary" data-bs-toggle="modal" data-bs-target="#oModalYouTube" data-url="https://www.youtube.com/embed/jXZcAHl8vT4?html5=1&autoplay=1" data-titre="아동부/중고등부 - 4컷 만화 만들기">
                                    아동부/중고등부 - 미래의 나에게 편지 쓰기
                                </button>
                                <button type="button" class="cBtnYouTube btn btn-primary" data-bs-toggle="modal" data-bs-target="#oModalYouTube" data-url="https://www.youtube.com/embed/qDm4QIiAmQA?html5=1&autoplay=1" data-titre="와서 도우라">
                                    청년부 - 긍휼의 마음
                                </button>                                

                                <!-- <button type="button" class="cBtnYouTube btn btn-primary" onClick="window.alert('아직 준비중입니다')">
                                    유치부 - 색 모래로 우리 교회 완성하기
                                </button>
                                <button type="button" class="cBtnYouTube btn btn-primary" onClick="window.alert('아직 준비중입니다')">
                                    아동부/중고등부 - 미래의 나에게 편지 쓰기
                                </button>
                                <button type="button" class="cBtnYouTube btn btn-primary" onClick="window.alert('아직 준비중입니다')">
                                    청년부 - 긍휼의 마음
                                </button>   -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="oModalYouTube" tabindex="-1" aria-labelledby="oModalYouTubeTitre" aria-hidden="true">
      <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content rounded-0">
          <div class="modal-header rounded-0 border-0" style="color:#fff;background-color:#000">
            <p id="oModalYouTubeTitre" class="modal-title lh-1"></p>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body p-0">
            <div class="ratio ratio-16x9">
              <iframe id="oVideoYouTubeiFrame" src="" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

<script>
// Exemple en pur JavaScript (Vanilla)
document.addEventListener('DOMContentLoaded', function() {
  var oModalYouTubeElement = document.getElementById('oModalYouTube')
  oModalYouTubeElement.addEventListener('hide.bs.modal', function (event) {
    document.getElementById('oModalYouTubeTitre').innerHTML = '';
    document.getElementById('oVideoYouTubeiFrame').setAttribute('src', '');
  })
});

window.addEventListener("DOMContentLoaded", function(e) {
  x = document.getElementsByClassName("cBtnYouTube");
  var i;
  for (i = 0; i < x.length; i++) {
    x[i].addEventListener("click", 
      function (event) {
        event.preventDefault();
        document.getElementById('oModalYouTubeTitre').innerHTML = '<i class="fab fa-youtube"></i> '+this.getAttribute('data-titre');
        document.getElementById('oVideoYouTubeiFrame').setAttribute('src', this.getAttribute('data-url'));
      }, 
    false);
  }
}, false);
</script>

