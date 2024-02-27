var isOut = false;

function closeIfNeeded(){
    if (isOut) {
        var modal_cover = document.getElementById('modal_cover');
        var bar_menu = document.getElementById('large-id-2');

        var bar_menu_state = document.getElementById('large-id-2').style.display;
        var modal_cover_state = document.getElementById('modal_cover').style.display;

        if (modal_cover_state == "block") {
            modal_cover.style.display = "none";
        }

        if (bar_menu_state == "block") {
            bar_menu.style.display = "none";
        }
        isOut = false;
        document.getElementById('menu_checkbox').checked = false;
    }
}

document.getElementById('modal_cover').addEventListener("click", closeIfNeeded, false);