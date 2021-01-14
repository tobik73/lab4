$('#form').on('submit', function(evt) {
    evt.preventDefault();
    $.ajax({
        type: "POST",
        url: "parse.php",
        data: $(this).serialize()
    }).done(function(text) {
        alert(text);
        $('#content').html(text);
    });
});