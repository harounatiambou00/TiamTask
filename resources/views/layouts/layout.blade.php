<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TiamTasks</title>

        {{-- Bootstrap CSS --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        {{--Font awesome icons link--}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="icon" type="image/png" sizes="16x16" href="https://icons.iconarchive.com/icons/mattahan/buuf/16/A-Proper-Journal-Icon-icon.png">
    </head>
    <body class="antialiased">
        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                    <h1 id="logo" class="display-10 mt-1" style="color:#943126;font-family: 'Courier New', Courier, monospace;font-weight: bold;"><i class="fa fa-book"></i>  TiamTasks</h1>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-5">
                            <li class="nav-item mx-sm-0 mx-md-5">
                                <a class="nav-link active" aria-current="page" href="">Toutes vos t&acirc;ches</a>
                            </li>
                            <li class="nav-item mx-sm-0 mx-md-5">
                                <a class="nav-link" href="{{ route('task.create') }}"><i class="fa fa-plus-circle"></i> Créer une t&acirc;che</a>
                            </li>
                            <li class="nav-item dropdown ml-sm-5 mx-md-5">
                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    @yield('User-name')
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                    <li>
                                        <a href="{{  route('index') }}" class="dropdown-item bg-danger">
                                            Se déconnecter 
                                        </a>
                                    </li>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>

        {{--Body--}}
        <div class="container p-5">
            @yield('main-content')
        </div>
        {{-- Bootstrap JS --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>
