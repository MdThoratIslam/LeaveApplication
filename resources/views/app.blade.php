<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'leaveApplication') }} @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content=""/>
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded"/>
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('assets/images/3387310.png')}}" type="image/x-icon">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

</head>
<body class="">
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ navigation menu ] start -->
@include('layouts.left_side_navbar')
<!-- [ navigation menu ] end -->
<!-- [ Header ] start -->
@include('layouts.header_section')
<!-- [ Header ] end -->

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
       @yield('content')
    </div>
</div>
<!-- [ Main Content ] end -->


<!-- Required Js -->

<script src="{{asset('assets/js/jQueryLibraryv3.7.1.js')}}"></script>
<script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/pcoded.min.js')}}"></script>
<!-- Apex Chart -->
<script src="{{asset('assets/js/plugins/apexcharts.min.js')}}"></script>
<!-- custom-chart js -->
<script src="{{asset('assets/js/pages/dashboard-main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
<script>
    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton"       : true,
            "newestOnTop"       : true,
            "progressBar"       : true,
            "positionClass"     : "toast-top-center",
            "preventDuplicates" : false,
            "showDuration"      : "900",
            "hideDuration"      : "1000",
            "timeOut"           : "5000",
            "extendedTimeOut"   : "1000",
            "showEasing"        : "swing",
            "hideEasing"        : "linear",
            "className"         : "custom-toastr", // Set your custom CSS class here
            "showMethod"        : "fadeIn",
            "hideMethod"        : "fadeOut"
        }
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type)
    {
        case 'info':
            toastr.info("{!! Session::get('message') !!} ");
            break;

        case 'warning':
            toastr.warning("{!! Session::get('message') !!}");
            break;

        case 'success':
            toastr.success("{!! Session::get('message') !!}");
            break;

        case 'error':
            toastr.error("{!! Session::get('message') !!}");
            break;
    }
    @endif

    // ================= Add Member Page photo Privew===================================================================

    function emp_photo(input)
    {
        if (input.files && input.files[0])
        {
            var reader = new FileReader();
            reader.onload = function (e)
            {
                $('#canv1').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function ()
    {
        emp_photo(this);
    });
    // =============================================================================================================




    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function()
    {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    //==================================================================================================================
    // ========================= Leave Apply From Total days count======================================================
    $(document).ready(function(){
        // Function to calculate total leave days
        function calculateTotalDays()
        {
            var startingDate    = $('#leaveStartingDate').val();
            var resumptionDate  = $('#leaveResumptionDate').val();
            // Check if both dates are selected
            if(startingDate && resumptionDate)
            {
                // Calculate the difference in days and govt_holiday is value of 1 day then minus 1 day from total days of leave days count and update the total days input field
                var totalDays = (new Date(resumptionDate) - new Date(startingDate)) / (1000 * 60 * 60 * 24);
                var govt_holiday = $('#govt_holiday').val();
                if(govt_holiday)
                {
                    totalDays = totalDays - 1;}
                $('#total_days').val(totalDays);
            }
        }
        // Event listeners for date inputs
        $('#leaveStartingDate, #leaveResumptionDate, #govt_holiday').change(function(){
            calculateTotalDays();
        });
    });
    //==================================================================================================================

    // ========================= Division, Distrivt, Upazila and Union ajax load========================================
    $(document).ready(function()
    {

        $('#division').on('change', function(){
            var division_id = $(this).val();
            if(division_id)
            {
                $.ajax({
                    // url use to route name  and type is GET
                    url: "{{ url('district-show') }}/" + division_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data)
                    {
                        $('#district').empty();
                        $('#district').append('<option value="" disabled selected>Select District</option>');
                        $.each(data.data, function(key, value){
                            $('#district').append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        // Handle errors
                        alert("An error occurred: " + error);
                    }
                });
            }
            else
            {
                $('#district').empty();
                $('#upazila').empty();
            }
        });

        $('#district').on('change', function()
        {
            var district_id = $(this).val();
            if(district_id)
            {
                $.ajax({
                    url: "{{ url('upazila-show') }}/" + district_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data)
                    {
                        $('#upazila').empty();
                        $('#upazila').append('<option value="" disabled selected>Select Upazila</option>');
                        $.each(data.data, function(key, value){
                            $('#upazila').append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                    }
                });
            }
            else
            {
                $('#upazila').empty();
            }
        });

        $('#upazila').on('change', function()
        {
            var upazila_id = $(this).val();
            if(upazila_id)
            {
                $.ajax({
                    url: "{{ url('union-show') }}/" + upazila_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data)
                    {
                        $('#union').empty();
                        $('#union').append('<option value="" disabled selected>Select Union</option>');
                        $.each(data.data, function(key, value)
                        {
                            $('#union').append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                    }
                });
            }
            else
            {
                $('#union').empty();
            }
        });
    });


    function deleteUser(id) {
        bootbox.confirm({
            message: "Do you want to delete this user?",
            buttons: {
                confirm: {
                    label: 'Yes',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'No',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if (result) {
                    window.location.href = '{{ route("users.destroy", ":id") }}'.replace(':id', id);
                }
            }
        });
    }

</script>
</body>



</html>

