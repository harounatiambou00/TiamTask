<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TiamTasks</title>
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">

        <link rel="icon" type="image/png" sizes="16x16" href="https://icons.iconarchive.com/icons/mattahan/buuf/16/A-Proper-Journal-Icon-icon.png">

        {{-- Bootstrap CSS --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

         {{--Font awesome icons link--}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="p-4" id="body">
        <div class="container jumbotron pb-1" id="container">
            <h1 id="logo" class="display-3 mb-4"><i class="fa fa-book"></i>  TiamTasks</h1>
            <div class="bg-light p-3 rounded">
                <h2 class="text-center fw-bold">Jamais débordé,<br>Toujours éfficace</h2>
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <p>Avec TiamTasks ayez l'esprit tranquille en ajoutant toutes vos tâches à votre to-do list<br>(où que vous soyez ou quel que soit l'appareil utilisé).<br>N'attendez pas plus longtemps créer un compte ou inscrivez-vous pour organisez votre quotidien.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        Harouna Tiambou Abdoul Wahabou<cite title="Source Title"></cite>
                    </figcaption>
                </figure>
                <hr class="my-4">
                <div class="text-center">
                    <div class="float-start mb-4 mb-md-0">
                        <blockquote class="blockquote">
                            <p>&Ecirc;tes-vous déja un habitué?<br>Veuillez vous connécter pour pouvoir acceder à votre compte.<br></p>
                        </blockquote>
                        <a class="btn btn-warning btn-lg" href="{{ route('login') }}" role="button">Connexion</a>
                    </div>
                    <div class="float-end">
                        <blockquote class="blockquote">
                            <p>Vous n'avez pas encore un créer un compte?<br>Pas de panique, cliquez sur le lien en dessous et commencez l'aventure.</p>
                        </blockquote>
                        <a class="btn btn-warning btn-lg" href="{{ route('registration') }}" role="button">Inscription</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <h4><span class="w-100 badge text-light">Copyright &#169; 2021 TIAMTECH. All rights reserved</span></h4>
        {{-- Bootstrap JS --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>