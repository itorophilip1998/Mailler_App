<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mailler App Demo</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="app border-info border-1">
    @if(Session::has('success_message'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success_message') }}
    </div>
    @endif

    <header>
        <div class="header text-center text-dark jumbotron p-2">
            <h2 class="text-info"> Mailer App Demo </h2> <img src="data:image/png;base64,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" alt="">
        </div>
    </header>
    <section>
            <div class="message-body text-center p-2">
                  <div class="text-dark">{{$e_mail}}</div>
            </div>
    </section>
    <br>
    <footer class="shadow-lg p-3 text-dak">
        <div class="footer bg-default text-center">
           <span > <b> Design And Implement by Itkeyzzpianny </b> </span>
             </div>
    </footer>

</div>

<style>
 .text-info{
      color: royalblue !important;
 }
 footer{
     background: black !important;
     opacity: 70%;
     color: azure !important;
 }
</style>

</body>
</html>
