function first(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

//end img-1


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imagePreviewsecond').css('background-image', 'url(' + e.target.result + ')');
            $('#imagePreviewsecond').hide();
            $('#imagePreviewsecond').fadeIn(650);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

