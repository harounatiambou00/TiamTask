<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TiamTasks</title>

        <link rel="stylesheet" href="{{ asset('css/login.css') }}">

        <link rel="icon" type="image/png" sizes="16x16" href="https://icons.iconarchive.com/icons/mattahan/buuf/16/A-Proper-Journal-Icon-icon.png">

        {{-- Bootstrap CSS --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        {{--Font awesome icons link--}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body id="body">
        <div id="container">
            <h1 id="logo" class="display-4 mb-4"><i class="fa fa-book"></i>  TiamTasks</h1>
            <div class=m-4 id="title_parent">
                <span class="badge bg-warning text-black" id="title">Inscription</span>
            </div>
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="firstname" class="form-label">Prénom<span style="color:red;"> *</span></label>
                    <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Nom<span style="color:red;"> *</span></label>
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email<span style="color:red;"> *</span></label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe<span style="color:red;"> *</span></label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mt-4 mb-3">
                    <div class="float-start">
                        <button type="submit" class="btn btn-success">Valider</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="mb-4">Vous avez déja un compte?   <a href="{{ route('login') }}">Connectez-vous</a></div>
                <span class="w-100 h-100 badge bg-secondary text-light">Copyright &#169; 2021 TIAMTECH. All rights reserved</span>
            </form>
        </div>
        {{-- Bootstrap JS --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>