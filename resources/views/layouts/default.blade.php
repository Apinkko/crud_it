<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <div class="container my-3">
        @yield('content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function() {
        $('#category').on('change', function() {
           var categoryID = $(this).val();
           if(categoryID) {
               $.ajax({
                   url: '/getSubCategory/'+categoryID,
                   type: "GET",
                   data : {"_token":"{{ csrf_token() }}"},
                   dataType: "json",
                   success:function(data)
                   {
                     if(data){
                        $('#category_sub').empty();
                        $('#category_sub').append('<option hidden disabled>-Choose Category Sub-</option>'); 
                        $.each(data, function(key, category_sub){
                            $('select[name="category_sub_id"]').append('<option value="'+ category_sub.id +'">' + category_sub.name + '</option>');
                        });
                    }else{
                        $('#category_sub').empty();
                    }
                 }
               });
           }else{
             $('#category_sub').empty();
           }
        });
        });
    </script>
</body>

</html>