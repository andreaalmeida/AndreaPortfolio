$(document).ready(function() {
    $(document.body).keyup(function(event) {
        if (event.which === 37) {
            $('#previous-item').click();
        } else if (event.which === 39) {
            $('#next-item').click();
        }
    });
});