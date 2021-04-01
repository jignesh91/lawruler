        <!-- jQuery  -->
        <script src="{{ URL::asset('js/jquery-3.3.1.min.js')}}"></script>
        <!-- JQUERY STEP -->
        <script src="{{ URL::asset('js/jquery.steps.js')}}"></script>
        <script src="{{ URL::asset('js/main.js')}}"></script>

        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

        <script src="vendor/date-picker/js/datepicker.js"></script>
        <script src="vendor/date-picker/js/datepicker.en.js"></script>

        <script type="text/javascript" src="{{ URL::asset('js/jquery.bootstrap-growl.min.js')}}"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <script type="text/javascript">
           $(function () {

                $('#txtnumber').keydown(function (e) {
                   var key = e.charCode || e.keyCode || 0;
                   $text = $(this); 
                   if (key !== 8 && key !== 9) {
                       if ($text.val().length === 3) {
                           $text.val($text.val() + '-');
                       }
                       if ($text.val().length === 6) {
                           $text.val($text.val() + '-');
                       }

                   }

                   return (key == 8 || key == 9 || key == 46 || (key >= 48 && key <= 57) || (key >= 96 && key <= 105));
               })
            });
        </script>

        @yield('script')ssn
        
        @yield('script-bottom')