<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <!-- Toastr CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     <!-- jQuery (Required) -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <!-- Toastr JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
     <script>
         $(document).ready(function () {
             @if(Session::has('success'))
                 toastr.success("{{ Session::get('success') }}");
             @endif
 
             @if(Session::has('error'))
                 toastr.error("{{ Session::get('error') }}");
             @endif
 
             @if(Session::has('info'))
                 toastr.info("{{ Session::get('info') }}");
             @endif
 
             @if(Session::has('warning'))
                 toastr.warning("{{ Session::get('warning') }}");
             @endif
     });
     </script>
</head>
  <body>
   <div class="container">
    <div class="row">
        <div class="col-sm-5 p-3 px-5 mt-5 shadow-lg m-auto">
            <h3 class="text-center text-primary">Login Here</h3>
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="mt-2">
                    <label for="email">Enter Email</label>
                    <input type="email" placeholder="Enter your email" name="email" class="form-control rounded-0">
                </div>
                <div class="mt-2">
                    <label for="password">Enter Password</label>
                    <input type="password" placeholder="Enter password" name="password" class="form-control rounded-0">
                </div>
                <div class="mt-2">
                    <button class="btn btn-primary rounded-0">Login</button>
                </div>
            </form>
        </div>
    </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>