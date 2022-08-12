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
            maxResults : 50,
            playlistId : playlistId,
            key: 'AIzaSyC-MUni0kdhsJhGGKpuJcryCdfwQ2h0jn4',
            pageToken: PageToken
        },
        method: "GET",
        async: false,
        success: function(data) {
            myPlan(category, data);
        }
    })

};

function myPlan(category, data){
    nextPageToken=data.nextPageToken;
    items = data.items;

    var result = [];
    var item;

    for (var i = 0; i < items.length; i++) {
        if(!items[i].snippet.thumbnails.standard) {
            continue;
        } else {
            item = {
                title: items[i].snippet.title,
                date: items[i].snippet.publishedAt,
                thumbnail: items[i].snippet.thumbnails.standard,
                vid: items[i].snippet.resourceId.videoId
            };
            result.push(item);
        }
    }

    $.post(
        "/youtube/writefile", {
            "data": result,
            "category": category
        },
        function(data) {
            return true;
        }
    )  

};

getVids('series');
getVids('sunday');
getVids('meditation');
getVids('special');

alert("영상 리스트가 없데이트 되었습니다");
location.href = "/admin/livestream";