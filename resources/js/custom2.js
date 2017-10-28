$(setup)
function setup() {
        $('.intro select').zelect({})
}

// change style for select box
$(".selectbox").selectbox();


/* Agent Add jS*/

$(document).on('click', '#close-preview', function () {
        $('.image-preview').popover('hide');
        // Hover befor close the preview
        $('.image-preview').hover(
                function () {
                        $('.image-preview').popover('show');
                },
                function () {
                        $('.image-preview').popover('hide');
                }
        );
});

$(function () {
        // Create the close button
        var closebtn = $('<button/>', {
                type: "button",
                text: 'x',
                id: 'close-preview',
                style: 'font-size: initial;',
        });
        closebtn.attr("class", "close pull-right");
        // Set the popover default content
        $('.image-preview').popover({
                trigger: 'manual',
                html: true,
                title: "<strong>Preview</strong>" + $(closebtn)[0].outerHTML,
                content: "There's no image",
                placement: 'bottom'
        });
        // Clear event
        $('.image-preview-clear').click(function () {
                $('.image-preview').attr("data-content", "").popover('hide');
                $('.image-preview-filename').val("");
                $('.image-preview-clear').hide();
                $('.image-preview-input input:file').val("");
                $(".image-preview-input-title").text("Browse");
        });
        // Create the preview image
        $(".image-preview-input input:file").change(function () {
                var img = $('<img/>', {
                        id: 'dynamic',
                        width: 250,
                        height: 200
                });
                var file = this.files[0];
                var reader = new FileReader();
                // Set preview image into the popover data-content
                reader.onload = function (e) {
                        $(".image-preview-input-title").text("Change");
                        $(".image-preview-clear").show();
                        $(".image-preview-filename").val(file.name);
                        img.attr('src', e.target.result);
                        $(".image-preview").attr("data-content", $(img)[0].outerHTML).popover("show");
                }
                reader.readAsDataURL(file);
        });
});

// Agency image uploading Code
function bs_input_file() {
        $(".input-file").before(
                function () {
                        if (!$(this).prev().hasClass('input-ghost')) {
                                var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
                                element.attr("name", $(this).attr("name"));
                                element.change(function () {
                                        element.next(element).find('input').val((element.val()).split('\\').pop());
                                });
                                $(this).find("button.btn-choose").click(function () {
                                        element.click();
                                });
                                $(this).find("button.btn-reset").click(function () {
                                        element.val(null);
                                        $(this).parents(".input-file").find('input').val('');
                                });
                                $(this).find('input').css("cursor", "pointer");
                                $(this).find('input').mousedown(function () {
                                        $(this).parents('.input-file').prev().click();
                                        return false;
                                });
                                return element;
                        }
                }
        );
}
$(function () {
        bs_input_file();
});
