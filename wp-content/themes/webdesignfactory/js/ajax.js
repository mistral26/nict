jQuery(document).ready(function($) {

    $( '#applying_single_job' ).click( function( event ) { 
        event.preventDefault(); 
        var id=$(this).attr('data-id');
        $('.red_big_button span').css("display","none");
        $('.loader').css("display","block");
        $.post(
            MyAjax.ajaxurl,
            {
                action : 'job_apply_gl',
                id : id
            },
            function(data) {
                $(".jobApplyRes").html(data);
                $('.loader').css("display","none");
                $('.already_app').css("display","block");
            }
            );
    });

}); //rdy