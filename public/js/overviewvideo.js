var playlistCode = {
    sunday: 'PLB11HZgGUeJC7N3ndR1ZA8ybKozUIhYVB',
    meditation: 'PLB11HZgGUeJAxUAJg8TvsRJOnsZ7yRl7i',
    special: 'PLB11HZgGUeJBhhAq7HcRqxBcsL3VZqgT0',
    series: 'PLB11HZgGUeJCTa_WrTLScvzJFCzDw6Sn7'
};

function getVids(category, PageToken, playlistId = playlistCode[category]){
    $.ajax({
        url: "https://www.googleapis.com/youtube/v3/playlistItems",
        data: {
            part : 'snippet', 
            maxResults : 9,
            playlistId : playlistId,
            key: 'AIzaSyC-MUni0kdhsJhGGKpuJcryCdfwQ2h0jn4',
            pageToken: PageToken
        },
        method: "GET",
        async: false,
        success: function(data) {
            var html = '';
            var div;
            var date;
            var title;

            for (var i=0; i < 9; i++) {
                if(typeof data.items[i] === "undefined") {
                    continue;
                };
                if(typeof data.items[i].snippet.thumbnails.standard === "undefined") {
                    continue;
                };
                
                // date = data.items[i].snippet.title.match(/\d\d\d\d\d\d\d\d/);

                // if(date == null || playlistId == 'PLB11HZgGUeJBhhAq7HcRqxBcsL3VZqgT0') {
                //     title = data.items[i].snippet.title.split('|')[0].split('ㅣ')[0];
                // } else {
                //     title = date[0].substring(0,4) + `년 ` + date[0].substring(4,6) + `월 ` + date[0].substring(6,8) + `일`;
                // }

                div = `
                    <div class="col-lg-4">
                        <div class="card" style="width: 100%; margin-bottom: 20px;" onclick="showModal('https://www.youtube.com/embed/`+ data.items[i].snippet.resourceId.videoId + `')">
                            <img class="card-img-top" src="https://img.youtube.com/vi/` + data.items[i].snippet.resourceId.videoId + `/mqdefault.jpg" style="width: 100%">
                            <div class="card-body">
                                <p class="card-body">
                                    <p class="video-overview card-text" id="sunday-subtitle">` + data.items[i].snippet.title + `</p>
                                </p>
                            </div>
                        </div>
                    </div>
                `;

                if(div == 'undefined') {
                    continue;
                }

                html = html + div;
            }

            $('#videos').html(html);
            
            var prevpage = '';
            var nextpage = '';
            
            
            if(data.prevPageToken) {
                prevpage = "<div class=pagination><a href=#><span class='left' onClick=getVids('" + category + "','" + data.prevPageToken + "')></span></a></div>";
            }

            if(data.nextPageToken) {
                nextpage = "<div class=pagination><a href=#><span class='right' onClick=getVids('" + category + "','" + data.nextPageToken + "')></span></a></div>";
            }
            $('#pagination').html(prevpage + nextpage);
        }
    })
};