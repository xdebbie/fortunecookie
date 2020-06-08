/* ---------------------------
$  Hide text blur on click to show the message,
$  but if the cookie has already been opened in the last 2 hours,
$  do not allow it to be opened again until the cooldown expires
 ----------------------------*/

document.querySelector('.open-it').addEventListener('click', function () {
    var elems = document.querySelectorAll(".blur");
    if (/(^|;)\s*visited=/.test(document.cookie))
        alert("You've had your fortune already, dummy! Come back later.");
    else if (elems.length > 0)
        [].forEach.call(elems, function (el) {
            el.classList.remove('blur');
            // to get a day = 60 seconds to a minute, 60 minutes to an hour, 24 hours to a day
            document.cookie = "visited=true; max-age=7200";
        });
});