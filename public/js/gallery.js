function gallery(n) {
    var photogallery = '';
    for (var i = 1; i <= n; i++) {
        photogallery += '<a href="images/photos/' + i + '.jpg" target="_blank"><img class="pht" src="images/photos/mic/' + i + '.jpg" alt=""/></a>';
    }
    document.getElementById('photogallery').innerHTML = photogallery;
}
