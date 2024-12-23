$(document).ready(function () {
    $('#registrationForm').on('submit', function (e) {
        e.preventDefault(); // Prevent form from refreshing the page
        const formData = $(this).serialize(); // Collect form data
        
        $.post('submit.php', formData, function (response) {
            $('#response').html(response).css({ "color": "green", "font-weight": "bold" });
        }).fail(function () {
            $('#response').html('Error submitting the form!').css({ "color": "red", "font-weight": "bold" });
        });
    });
});
