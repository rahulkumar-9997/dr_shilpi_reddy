$(document).ready(function () {
    $(document).on('click', 'a[data-mapped-modal="true"]', function () {
        var title = $(this).data('title');
        var size = ($(this).data('size') == '') ? 'md' : $(this).data('size');
        var url = $(this).data('url');
        var data = {
            _token: $('meta[name="csrf-token"]').attr('content'),
            size: size,
            url: url
        };
        $("#commonModal .modal-title").html(title);
        $.ajax({
            url: url,
            type: 'get',
            data: data,
            success: function (data) {
                $('#commonModal .render-data').html(data.form);
                $("#commonModal").modal('show');
            },
            error: function (data) {
                data = data.responseJSON;
            }
        });
    });

    $(document).off('submit', '#mappedWorkToFoundationForm').on('submit', '#mappedWorkToFoundationForm', function (event) {
        event.preventDefault();
        var form = $(this);
        var submitButton = form.find('button[type="submit"]');
        $('.form-control').removeClass('is-invalid');
        $('.invalid-feedback').remove();
        submitButton.prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Saving...');
        var formData = new FormData(this);
        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                submitButton.prop('disabled', false);
                submitButton.html('Save changes');
                if (response.status === 'success') {
                    form[0].reset();
                    $('#commonModal').modal('hide');
                    showSuccess(response.message);
                    window.location.reload();
                }
            },
            error: function(xhr, status, error) {
                submitButton.prop('disabled', false);
                submitButton.html('Save changes');
                var errors = xhr.responseJSON.errors;
                if (errors) {
                    $.each(errors, function(key, value) {
                        var errorElement = $('#' + key + '_error');
                        if (errorElement.length) {
                            errorElement.text(value[0]);
                        }
                        var inputField = $('#' + key);
                        inputField.addClass('is-invalid');
                        inputField.after('<div class="invalid-feedback">' + value[0] + '</div>'); 
                    });
                }
            }
        });
    });

});

$(document).ready(function () {
    $(document).on('change', '#foundation_check', function () {
        if ($(this).is(':checked')) {
            $('#foundation_category').val('');
        }
    });
    $(document).on('change', '#foundation_category', function () {
        if ($(this).val() !== '') {
            $('#foundation_check').prop('checked', false);
        }
    });
});
