<style>

.slider_area {
    background-image: url(<?=base_url('img/game/chungdongmap.png')?>);
    background-size: cover;
    background-position: center;
}

.btn {
    font-size: 30px;
}

h1, h3 {
  text-shadow: 2px 2px 2px gray;
  color: white;
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
                            <h1 style="padding-bottom: 10px;">병원과 학교 사역</h1>
                            <h3 style="padding-bottom: 20px;">아래의 버튼을 누르면 영상을 보실 수 있습니다</h3>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-grid gap-2 col-lg-8 mx-auto">
                                <button type="button" class="cBtnYouTube btn btn-primary" data-bs-toggle="modal" data-bs-target="#oModalYouTube" data-url="https://www.youtube.com/embed/KuddCtoBO8Q?html5=1&autoplay=1" data-titre="시병원">
                                    시병원
                                </button>
                                <button type="button" class="cBtnYouTube btn btn-primary" data-bs-toggle="modal" data-bs-target="#oModalYouTube" data-url="https://www.youtube.com/embed/QNKFkBKIP5E?html5=1&autoplay=1" data-titre="시병원">
                                    이화학당
                                </button>
                                <button type="button" class="cBtnYouTube btn btn-primary" data-bs-toggle="modal" data-bs-target="#oModalYouTube" data-url="https://www.youtube.com/embed/Q45eyheyPqc?html5=1&autoplay=1" data-titre="[JTBC] 한국에 바친 생명과 사랑">
                                    한국에 바친 생명과 사랑(JTBC)
                                </button>
                                <button type="button" class="cBtnYouTube btn btn-primary" onClick="location.href='/donghu/index/2'">
                                    나는 동후다
                                </button>
                                
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

