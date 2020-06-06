<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    @yield('custom-seo')
    <link href="{{ asset('public/frontend/mat/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    
    @yield('custom-css')
    
  </head>
  <body data-spy="scroll" data-target=".navbar">
    
    @include('frontend.include.header-nav')

    @yield('content')

    @include('frontend.include.footer')

    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>   --}}
    <script src="{{ asset('public/frontend/mat/js/jquery.min.js') }}"></script> 
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="{{ asset('public/frontend/mat/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src = "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(Session::has('success-msg'))
            toastr.success("{{Session::get('success-msg')}}");
        @endif
        @if(Session::has('info-msg'))
            toastr.info("{{Session::get('info-msg')}}"); 
        @endif
        @if(Session::has('error-msg'))
            toastr.error("{{Session::get('error-msg')}}");
        @endif
        @if(Session::has('warning-msg'))
            toastr.warning("{{Session::get('warning-msg')}}");
        @endif
    </script>
    
    <script>
        $(document).ready(function(){

            $('#search').keyup(function(){ 
                var query = $(this).val();
                
                if(query == '')
                {
                    $('#searchList').fadeOut();
                }

                if(query != '')
                {
                 var _token = $('input[name="_token"]').val();
                     $.ajax({
                        url:"{{ route('search-frontend-packages') }}",
                        method:"GET",
                        data:{query:query, _token:_token},
                        success:function(data){
                        $('#searchList').fadeIn();  
                                $('#searchList').html(data);
                        }
                    });
                }
            });

            $(document).on('click', 'li', function(){  
                $('#searchList').val($(this).text());  
                $('#searchList').fadeOut();  
            });  

        });
    </script>
    <script>
      $(document).ready(function(){ 
        $("input").attr("autocomplete", "off"); 
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {

            updateChildPackage();
            
            function updateChildPackage()
            {
                var package_id = $('#parent_package').val();
                $.ajax({
                    'method' : 'GET', 
                    'url' : '{{route('child-packages-from-select-box')}}', 
                    'data' : {
                        'package_id' : package_id
                    }  
                }).done(function(data){
                    $('#child_package').html(data);
                })
            }

            $('#parent_package').change(function() {

                var package_id = $('#parent_package').val();
                $.ajax({
                    'method' : 'GET', 
                    'url' : '{{route('child-packages-from-select-box')}}', 
                    'data' : {
                        'package_id' : package_id
                    }  
                }).done(function(data){
                    $('#child_package').html(data);
                })
            })
            
        });
    </script>
    @yield('custom-js')
    </section>
  </body>
</html>