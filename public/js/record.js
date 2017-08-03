function putRecords(array) {
    var rec = '';
    for (var i = 0; i < array.length; i++) {
        rec = '';
        rec += "<table class=\"record\">";
        rec += "<tr>";
        if (typeof array[i].poster_m !== "undefined") {
            rec += "<th rowspan=\"4\" width=\"30%\">";
            rec += "<img class=\"poster-m\" src=" + array[i].poster_m + " alt=\"\" />";
            rec += "</th>";
        } else {
            rec += "<th rowspan=\"4\" width=\"25%\">";
            rec += "<img class=\"poster\" src=" + array[i].poster + " alt=\"\" />";
            rec += "</th>";
        }
        rec += "<th><h1>" + array[i].name + "</h1></th>";
        rec += "</tr>";
        rec += "<tr><th><h3>" + array[i].author + "</h3></th></tr> ";
        rec += "<tr><th><h3>" + array[i].year + "</h3></th></tr> ";
        rec += "<tr>";
        rec += "<th>";
        if (typeof array[i].livelib_href !== "undefined") {
            rec += "<a href=\"" + array[i].livelib_href + "\" target=\"_blank\">";
            rec += "<img class=\"icon\" src=\"../../../public/assets/img/icos/livelib.jpg\" alt=\"Livelib - " + array[i].name + "\" />";
            rec += "</a>";
        }
        if (typeof array[i].kinopoisk_href !== "undefined") {
            rec += "<a href=\"" + array[i].kinopoisk_href + "\" target=\"_blank\">";
            rec += "<img class=\"icon\" src=\"../../../public/assets/img/icos/kinopoisk.png\" alt=\"Kinopoisk - " + array[i].name + "\"/>";
            rec += "</a>";
        }
        if (typeof array[i].lastfm_href !== "undefined") {
            rec += "<a href=\"" + array[i].lastfm_href + "\" target=\"_blank\">";
            rec += "<img class=\"icon\" src=\"../../../public/assets/img/icos/lastfm.jpg\" alt=\"Lastfm - " + array[i].name + "\"/>";
            rec += "</a>";
        }
        if (typeof array[i].yam_href !== "undefined") {
            rec += "<a href=\"" + array[i].yam_href + "\" target=\"_blank\">";
            rec += "<img class=\"icon\" src=\"../../../public/assets/img/icos/yam.jpg\" alt=\"Yandex Music - " + array[i].name + "\"/>";
            rec += "</a>";
        }
        if (typeof array[i].insta_href !== "undefined") {
            rec += "<a href=\"" + array[i].insta_href + "\" target=\"_blank\">";
            rec += "<img class=\"icon\" src=\"../../../public/assets/img/icos/instagram.jpg\" alt=\"Instagram - " + array[i].name + "\"/>";
            rec += "</a>";
        }
        if (typeof array[i].youtube_href !== "undefined") {
            rec += "<a href=\"" + array[i].youtube_href + "\" target=\"_blank\">";
            rec += "<img class=\"icon\" src=\"../../../public/assets/img/icos/youtube.png\" alt=\"YouTube - " + array[i].name + "\"/>";
            rec += "</a>";
        }
        rec += "</th>";
        rec += "</tr>";
        rec += "</table>";
        document.write(rec);
    }
}
