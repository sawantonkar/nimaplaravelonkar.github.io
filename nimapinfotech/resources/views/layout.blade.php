<!DOCTYPE html>
<html>
<head>
    <title>@yield('page_title')</title>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
                <a class="navbar-brand" href="#">Nimap infotech</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('category/create')}}">Create</a>
                        <a class="dropdown-item" href="{{url('category')}}">View</a>
                        
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Product
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('product/create')}}">Create</a>
                        <a class="dropdown-item" href="{{url('product')}}">View</a>
                        
                        </div>
                    </li>
                    
                   
                    </ul>
                   
                </div>
</nav>
        <div class="container">
            @yield('section1')
        </div>

        <script src="{{asset('assets/js/jquery-3.4.1.slim.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    </body>

    </html>