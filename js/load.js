/*
 *
 * Venuprasad Naik 
 * vpnaik97@gmail.com
 * 1/1/2021
 * 
 */

var socialtags = [{
    img: "img/github.svg",
    link: "https://github.com/venuprasadnaik"
}, {
    img: "img/linkedin.svg",
    link: "https://www.linkedin.com/in/venuprasad/"
}, {
    img: "img/stackoverflow.svg",
    link: "stackoverflow.com/story/venuprasad"
}, {
    img: "img/twitter.svg",
    link: "https://twitter.com/venuprasad_naik"
}]

function loadSocialIcons() {
    var socialtext = ""
    for (x in socialtags) {
        var data = `<a class="center" href="` + socialtags[x].link + `"> <img class="center" style="padding: 5px!important;width: 40px;" src="` + socialtags[x].img + `"></a>`
        socialtext += data
    }
    document.getElementById("social-list").innerHTML = socialtext;
}

loadSocialIcons()

function dayNightToggle() {
    var element = document.body;
    element.classList.toggle("light-mode");
    var check = window.localStorage.getItem('light-mode');
    if (check == "light") {
        window.localStorage.clear();
    } else {
        window.localStorage.setItem('light-mode', 'light');
    }

}

function checkDayNight() {
    var check = window.localStorage.getItem('light-mode');
    var element = document.body;
    if (check == "light") {
        element.classList.add("light-mode");
    } else {
        element.classList.remove("light-mode");
    }
}

checkDayNight()
