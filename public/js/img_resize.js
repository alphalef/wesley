jQuery(document).ready(function () {
    // portfolio image resize
    // if (jQuery(window).width() > 789) {
        jQuery('.post-image.card img').each(function(index, item) {
            var div = jQuery('div.post-image.card');
            var img = item;
            var divAspect = 0.8; // div의 가로세로비는 알고 있는 값이다
            var imgAspect = img.height / img.width;

            console.log(item);
            console.log('height:'+img.height);
            console.log('width:'+img.width);
            console.log(imgAspect);

            if (imgAspect <= divAspect) {
                var divWidth = div.offsetWidth;

                // 이미지가 div보다 납작한 경우 세로를 div에 맞추고 가로는 잘라낸다
                var imgWidthActual = divWidth / imgAspect;
                var imgWidthToBe = divWidth / divAspect;
                var marginLeft = (imgWidthToBe - imgWidthActual) / 2;
                jQuery(img).css('width', 'auto')
                    .css('height', '100%')
                    .css('margin-left', marginLeft + 'px');
            } else {
                // 이미지가 div보다 길쭉한 경우 가로를 div에 맞추고 세로를 잘라낸다
                jQuery(img).css('width', '100%')
                    .css('height', 'auto')
                    .css('margin-left', '0')
            }
        });
    // };
});