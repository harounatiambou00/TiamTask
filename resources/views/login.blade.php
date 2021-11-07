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
            <h1 id="logo" class="display-6 mb-4"><i class="fa fa-book"></i>  TiamTasks</h1>
            <div class=m-4 id="title_parent">
                <span class="badge bg-warning text-black" id="title">Connexion</span>
            </div>
            @if ($loginValidationStatus === "Wrong Password")
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    Mot de passe incorrect.
                </div>
                @elseif($loginValidationStatus === "Wrong Email")
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                        Aucun compte enregistré.   <a href="{{ route('registration') }}">  Inscrivez-vous</a>
                    </div>
            @endif
            <form action="loginvalidation" method="GET">
                @csrf
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
                        <button type="submit" class="btn btn-sm btn-success">Valider</button>
                    </div>
                    <div class="float-end">
                        <small><button class="btn btn-sm btn-link"  onclick="forgotPassword()">Mot de pase oublié?</button></small>
                        <script>
                            function forgotPassword(){
                                alert("Désolé cette fonctionnalité n'est pas encore disponible revenez dans quelques semaines.Nous vous recommandons de recréer un compte en attendant.");
                            }
                        </script>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="mb-4">N'avez-vous pas de compte?   <a href="{{ route('registration') }}">S'inscrire</a></div>
                <span class="w-100 h-100 badge bg-secondary text-light">Copyright &#169; 2021 TIAMTECH. All rights reserved</span>
            </form>
        </div>
        {{-- Bootstrap JS --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>