function getDate()
{
    var date = new Date();
    function getMonthString(num)
    {
        var month;
        switch(num)
        {
            case 0:
                month="Jan";
                break;
            case 1:
                month="Fab";
                break;
            case 2:
                month="Mar";
                break;
            case 3:
                month="Apr";
                break;
            case 4:
                month="May";
                break;
            case 5:
                month="Jun";
                break;
            case 6:
                month="Jul";
                break;
            case 7:
                month="Aug";
                break;
            case 8:
                month="Sep";
                break;
            case 9:
                month="Oct";
                break;
            case 10:
                month="Nov";
                break;
            case 11:
                month="Des";
                break;
            default:
                month="ERROR";
        }
        return month;
    }
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();
    var day = date.getUTCDate() + 1;
    var month = getMonthString(date.getUTCMonth());
    var year = date.getUTCFullYear();

    document.getElementById('times').innerHTML = ad0(hours) + ':' + ad0(minutes) + ':' + ad0(seconds) + ', ' + day + ' ' + month + ' ' + year;
}
setInterval(getDate, 0);

function ad0 (val) {
    if (val < 10) {
        if (val >= 0) return '0' + val;
        else return 'ERROR';
    } else return val;
}

function setCookie(name, value) {
    document.cookie = name + "=" + value;
}

function getCookie(name) {
    var r = document.cookie.match("(^|;) ?" + name + "=([^;]*)(;|$)");
    if (r) return r[2];
    else return "";
}

function deleteCookie(name) {
    var date = new Date();
    date.setTime(date.getTime() - 1);
    document.cookie = name += "=; expires=" + date.toGMTString();
}