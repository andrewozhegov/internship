/**
 * Created by andrew on 26.05.2017.
 */

function setBg(id) {
    var ids = ["index", "aboutme", "interests", "study", "photos", "contacts", "test"];
    var pics = ["index.jpg)", "aboutme.jpg)", "interests.jpg)", "study.jpg)", "photos.jpg)", "contacts.jpg)", "test.jpg)"];

    document.getElementById("head").style.backgroundImage = "url(/img/bg/" + pics[ids.indexOf(id)];
    document.getElementById("head").style.transition = "1s";
}