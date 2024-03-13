
/* Send mail Ajax Call */
$(document).ready(function() {
    if ($("#contactForm").length > 0) {
        $('#contactForm').validator().on('submit', function(e) {

            if (e.isDefaultPrevented()) {
                // handle the invalid form...
            } else {
                e.preventDefault();
                var myform = $('#contactForm');
                var formdata = $(myform).serialize();
                var ajaxUrl = $(myform).attr('action');
                var buttonHtml = '&nbsp;&nbsp;Please Wait...&nbsp;&nbsp;<i class="fa fa-circle-o-notch fa-spin fa-fw"></i>';
                $('button[type="submit"]').attr('disabled', 'disabled');
                $('button[type="submit"]').html(buttonHtml);
                $.ajax({
                    type: 'POST',
                    url: ajaxUrl,
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        $('#confirmModal').modal("show");
                        var resp = $.parseJSON(data);
                            if(resp.status == 'Success'){
                                $('.modal-body').html('<h3 class="text-center text-success">'+resp.msg+'</h3>');
                            }else{
                                $('.modal-body').html('<h3 class="text-center text-danger">'+resp.msg+'</h3>');
                            }
                            $('#confirmModal').modal("show");
                        },
                    error: function() {
                        $('.modal-body').html('<h3 class="text-center text-danger">There is some error in sending message!!!</h3>');
                    }
                });
            }
        });

        /* On Hide modal reload url */
        $('#confirmModal').on('hidden.bs.modal', function(e) {
            location.reload();
        });
    }
});
