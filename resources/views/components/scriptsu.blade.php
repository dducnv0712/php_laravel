
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


            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: 'Yes, I am sure!',
                    cancelButtonText: "No, cancel it!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){

                    if (isConfirm){

                        $.ajax({
                            url:"{{url('/submit')}}",
                            method:'POST',
                            data:{name:name,phone:phone,email:email,feedback:feedback,_token:_token},
                            success:function (data){
                                // swal("Hey, Good job !!","You clicked the button !!","success")
                                alert(data)

                            },
                            error:function (data){
                                sweetAlert("Oops...","Something went wrong !!","error")
                            }


                        });
                        $('input,textarea').val("");

                    } else {
                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                    }
                });





        })

    })
      //  .onclick=function(){swal({title:"Are you sure to delete ?",text:"You will not be able to recover this imaginary file !!",type:"warning",showCancelButton:!0,confirmButtonColor:"#DD6B55",confirmButtonText:"Yes, delete it !!",cancelButtonText:"No, cancel it !!",closeOnConfirm:!1,closeOnCancel:!1},function(e){e?swal("Deleted !!","Hey, your imaginary file has been deleted !!","success"):swal("Cancelled !!","Hey, your imaginary file is safe !!","error")})},
    // document.querySelector(".message").onclick=function(){swal("Hey, Good job !!","You clicked the button !!","success")}
</script>
{{--<script>--}}
{{--    var test = $('#country_id option:selected').text()--}}
{{--    console.log(test)--}}

{{--    $(document).ready(function() {--}}

{{--        $('#country_id').change(function() {--}}
{{--            $('#state_id, #city_id, #city_name').val("");--}}

{{--            if($('#country_id option:selected').text() == "Vietnam") {--}}
{{--                $('#cityName').hide(150);--}}
{{--                $('#city_id').html('<option value="" selected>Choose city</option>');--}}
{{--                $('#state, #city').show(150);--}}
{{--            } else {--}}
{{--                $('#state, #city').hide(150);--}}
{{--                $('#cityName').show(150);--}}
{{--            }--}}
{{--        });--}}

{{--        $('#state_id').change(function() {--}}
{{--            var $city = $('#city_id');--}}
{{--            $.ajax({--}}
{{--                url: "{{ route('cities.index') }}",--}}
{{--                data: {--}}
{{--                    state_id: $(this).val()--}}
{{--                },--}}
{{--                success: function(data) {--}}
{{--                    $city.html('<option value="" selected>Choose city</option>');--}}
{{--                    $.each(data, function(id, value) {--}}
{{--                        $city.append('<option value="'+id+'">'+value+'</option>');--}}
{{--                    });--}}
{{--                    $('#city').show(150);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}

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
