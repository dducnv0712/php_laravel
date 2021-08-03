
{{--<!-- SCRIPTS -->--}}
{{--<!-- JQuery -->--}}
<script type="text/javascript" src="{{asset('user_public/js/jquery-3.4.1.min.js')}}"></script>
{{--<!-- Bootstrap tooltips -->--}}
{{--<script type="text/javascript" src="{{asset('user_public/js/popper.min.js')}}"></script>--}}
{{--<!-- Bootstrap core JavaScript -->--}}
{{--<script type="text/javascript" src="{{asset('user_public/js/bootstrap.min.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('js/sweetalert.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#submit').click(function (){
            var name = $('.name').val();
            var phone = $('.phone').val();
            var email = $('.email').val();
            var feedback = $('.feedback').val();
            var _token = $('input[name="_token"]').val();

            $.ajax({
                url:"{{url('/submit')}}",
                method:'POST',
                data:{name:name,phone:phone,email:email,feedback:feedback,_token:_token},
                success:function (data){
                    swal("Hey, Good job !!","You clicked the button !!","success")

                },
                error:function (data){
                        sweetAlert("Oops...","Something went wrong !!","error")
                }

            });
            $('input,textarea').val("");

        })

    })
    // document.querySelector(".message").onclick=function(){swal("Hey, Good job !!","You clicked the button !!","success")}
</script>

{{--<!-- MDB core JavaScript -->--}}
{{--<script type="text/javascript" src="{{asset('user_public/js/mdb.min.js')}}"></script>--}}
{{--<!-- Initializations -->--}}
{{--<script type="text/javascript">--}}
{{--    // Animations initialization--}}
{{--    new WOW().init();--}}

{{--</script>--}}
{{--<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>--}}

{{--<script type="text/javascript">--}}
{{--    jQuery(function($) {--}}
{{--        jQuery(document).ready(function($) {--}}
{{--            $('#woocommerce_ckwc_display_opt_in').change(function() {--}}
{{--                var $dependents = $('[id^="woocommerce_ckwc_opt_in_"]').parents('tr');--}}

{{--                $dependents.toggle($(this).prop('checked'));--}}
{{--            }).trigger('change');--}}


{{--            $(document).on('click', '#refresh_ckwc_subscription_options', refreshSubscriptionOptions);--}}

{{--        });--}}

{{--        refreshSubscriptionOptions = function (e) {--}}
{{--            e.preventDefault();--}}
{{--            startSpinner();--}}
{{--            $.ajax({--}}
{{--                url: window.ajaxurl,--}}
{{--                data: { action: 'ckwc_refresh_subscription_options', api_key: $('#woocommerce_ckwc_api_key').val() },--}}
{{--                success: function (resp) {--}}
{{--                    console.log(resp);--}}
{{--                    if ( resp.success ) {--}}
{{--                        $('#woocommerce_ckwc_subscription').replaceWith( resp.data );--}}
{{--                    } else {--}}
{{--                        alert( resp.data );--}}
{{--                    }--}}
{{--                },--}}
{{--                error: function( resp ) {--}}
{{--                    alert( resp.statusText );--}}
{{--                },--}}
{{--                complete: function () {--}}
{{--                    stopSpinner();--}}
{{--                }--}}
{{--            });--}}
{{--        };--}}

{{--        startSpinner = function () {--}}
{{--            $('#refreshCKSpinner').addClass('is-active').css('float', 'none');--}}
{{--        };--}}

{{--        stopSpinner = function () {--}}
{{--            $('#refreshCKSpinner').removeClass('is-active');--}}
{{--        };--}}
{{--    });--}}
{{--</script>--}}


{{--<script>--}}


{{--</script>--}}

{{--<script>--}}
{{--    $(document).ready(function() {--}}
{{--        $(".button-collapse").sideNav();--}}
{{--        var el = document.querySelector('.custom-scrollbar');--}}
{{--        var ps = new PerfectScrollbar(el);--}}
{{--    });--}}
{{--</script>--}}



{{--<script>--}}

{{--    $(function (){--}}
{{--        $('.select2').select2();--}}
{{--    });--}}
{{--    $(document).ready(() => {--}}
{{--        let product =100;--}}


{{--        $('#basic-example-add, #basic-example-decrease').on('click', (e) => {--}}
{{--            const productsQuantity = $(e.currentTarget).siblings('.quantity').val()--}}
{{--            const price = 100--}}
{{--            product = productsQuantity * price;--}}
{{--            $('#basic-example-price').html(product.toFixed(2));--}}

{{--        });--}}
{{--    })--}}
{{--</script>--}}
{{--<script src="https://code.jquery.com/jquery-3.5.0.js"></script>--}}

{{--<script>--}}
{{--    $( ".select" )--}}
{{--        .change(function() {--}}
{{--            var str = "";--}}
{{--            $( ".select option:selected" ).each(function() {--}}
{{--                str += $( this ).val() + " ";--}}
{{--            });--}}
{{--            $( ".shipping" ).var(str);--}}
{{--        })--}}
{{--        .trigger( "change" );--}}
{{--</script>--}}
