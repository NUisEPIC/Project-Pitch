$(document).ready(function() {

    $('#links a').click(function(e) {
        e.preventDefault(); // we'll get the pages via ajax.

        var url = $(this).attr('href'); // use href as url to loag
        alert(url);
        $.ajax({
            url: url,
            success: function(data) {

                // when ajax is done, fade old content out
                $('#content').fadeOut(function() {

                    $(this).html(data); // replace contents

                    // fade new content in
                    $(this).fadeIn();
                });
            }
        });
    });
});​​​​