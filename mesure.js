// block right click
document.addEventListener("contextmenu", function(e){
    e.preventDefault();
}, false);
// deseable text selection
document.onselectstart = function() { return false; }

// deseable ctrl + u

document.addEventListener('keydown', function(e) {
    if (e.ctrlKey && e.keyCode == 85) {
        e.preventDefault();
    }
}, false);

