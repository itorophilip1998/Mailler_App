<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

    </head>
<body>
    <header class="mb-5">
        <div class="header text-center text-dark  shadow-lg ">
            <h1> <marquee behavior="" direction="y"> Mailer App Demo</marquee> </h1>
       </div>
    </header>
    <section>
        <form action="/send/mail" method="post">
            @csrf
         <div class="col-md-7 m-auto">
            <div class="card shadow-lg ">
                <div class="card-header  bg-info text-white">
                   <i class="fa fa-envelope-o" aria-hidden="true"></i> Testing Mail......
                </div>

                <div class="card-body ">
                    <div class="row px-2">
                        <div class="input-group ">
                            <div class="input-group-append">
                                <span class="input-group-text text-info" id="my-addon"><i class="fa fa-pencil" aria-hidden="true"></i> &ensp; Subject:</span>
                            </div>
                            <input class="form-control  @error('subject') is-invalid @enderror " type="text" name="subject" placeholder="My Subject" aria-label="Recipient's " aria-describedby="my-addon">
                            @error('subject')
                            <div class="invalid-feedback ">{{ $message }}</div>
                            @enderror

                    </div>
                    </div>
                    <br>
                     <div class="row px-2">
                        <div class="input-group ">
                            <div class="input-group-append">
                                <span class="input-group-text text-info" id="my-addon"><i class="fa fa-address-book" aria-hidden="true"></i> &ensp; Address</span>
                            </div>
                            <input class="form-control  @error('address') is-invalid @enderror" type="text" name="address" placeholder="(e.g) PeterParker@Example.com" aria-label="Recipient's " aria-describedby="my-addon">
                            @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>
                    </div>
                    <br>
                     <div class="row px-2">
                        <div class="input-group ">
                            <div class="input-group-append">
                                <span class="input-group-text text-info" id="my-addon"><i class="fa fa-envelope" aria-hidden="true"></i> &ensp; Email &emsp;</span>
                            </div>
                            <textarea class="form-control  @error('email') is-invalid @enderror" name="email" placeholder="My Email Content" rows="7" > </textarea>
                            @error('email')
                            <div class="invalid-feedback ">{{ $message }}</div>
                            @enderror
                    </div>
                    </div>
                </div>
                <div class="card-footer p-1 text-right">
                    <button class="btn btn-info btn-sm "><i class="fa fa-send" aria-hidden="true"></i> Send</button>
                    <button class="btn border-info text-info btn-sm "><i class="fa fa-times" aria-hidden="true"></i> Cancel</button>
                </div>
            </div>
        </div>
    </form>
    </section>
    <br>
    <footer class="shadow-lg p-3">
      <div class="footer bg-default text-center ">
          Design And Implement by Itkeyzzpianny <br>
           <a class="bg-danger text-white px-2 py-1 rounded-circle" href="mailto:Itkeyzzpianny@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
   <a class="bg-primary text-white px-2 py-1 rounded-circle" href="https://www.facebook.com/itoro.philip.148"><i class="fa fa-facebook-f " aria-hidden="true"></i></a>
      </div>
    </footer>



 </body>
</html>
