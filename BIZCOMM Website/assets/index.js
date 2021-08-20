var texts = new Array();
texts.push("[Quick]");
texts.push("[Creative]");
texts.push("[Innovative]");
texts.push("[Elevative]");
texts.push("[Effective]");

Elevative
Effective
Reliable
Professional
Efficient
Cultivative
Sophisticated
Systematic
Productive

var point = 0;

function changeText() {
    $('#second-text').html(texts[point]);
    if (point < (texts.length - 1)) {
        point++;
    } else {
        point = 0;
    }

}

setInterval(changeText, 2000); /*Call it here*/
changeText();

window.onbeforeunload = function() {
    window.scrollTo(0, 0);
}

window.onload = function() {
    location.hash = '';
}