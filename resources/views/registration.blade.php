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
                <span class="badge bg-warning text-black" id="title">Inscription</span>
            </div>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <i class="fas fa-info-circle"></i>
                Les champs avec le symbole (*) sont des champs obligatoires vous devez donc les remplir pour pouvoir créer un compte.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe<span style="color:red;"> *</span></label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mt-4 mb-3">
                    <div class="float-start">
                        <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Valider</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Politique de Confidentialité</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque a congue lorem, in sodales urna. Donec sed aliquam ante. Suspendisse vel enim eleifend ipsum tincidunt pretium. Aliquam blandit, felis sed pharetra sagittis, ipsum nibh scelerisque est, pretium hendrerit est nisl id sem. Aliquam purus ex, venenatis at commodo sed, sodales a enim. Donec ac elit augue. In pharetra semper scelerisque. In a vehicula lorem, non scelerisque ex. In sit amet pellentesque sem. Nullam aliquet tempus mi, eu accumsan dui. Quisque fermentum, ligula vitae rhoncus lacinia, ipsum mi venenatis nisl, sed varius orci quam sed nisl.

                                        Quisque eget vestibulum metus, ut sodales odio. Mauris ex elit, malesuada vitae justo vel, volutpat venenatis dolor. Nulla eget leo fermentum, posuere ligula condimentum, hendrerit dui. Vivamus mattis eleifend ex at varius. Nam accumsan tellus eget nunc tincidunt, pellentesque mattis ipsum dignissim. In ligula enim, fringilla non quam vitae, pellentesque rhoncus arcu. Cras cursus eget ante et viverra. In vel nisi leo. Proin tempor a sapien ut lacinia. Fusce convallis volutpat magna, vel eleifend odio imperdiet et. Maecenas pharetra aliquet ligula, in viverra quam vehicula ut. Vivamus maximus diam et odio pharetra ullamcorper et vel massa.

                                        Proin rutrum cursus est vel fermentum. Nulla justo dui, dapibus eget pulvinar nec, pulvinar in lacus. Vestibulum hendrerit venenatis dui, nec luctus lorem sodales sed. Mauris vitae augue dolor. Fusce laoreet viverra facilisis. Suspendisse ante libero, ultrices ut ornare et, lobortis nec velit. Integer id scelerisque leo. Pellentesque et est quam. Etiam vel odio ante.

                                        Aliquam pulvinar, mauris ac hendrerit egestas, nibh lacus placerat tortor, sit amet ultricies libero ex quis ipsum. Sed quam nibh, placerat in eros quis, condimentum vehicula quam. Nam vitae metus nec mi cursus malesuada in et nisl. Morbi viverra consequat elit. Aenean congue interdum arcu. Fusce sed efficitur lacus. Cras posuere quis sapien ut maximus. Donec sit amet diam molestie, fringilla nisl semper, viverra odio.

                                        Integer lacinia quam eu est sodales varius. Nulla convallis dictum enim ac tincidunt. Maecenas elementum ipsum odio, vel cursus nibh vulputate sit amet. Aliquam erat volutpat. In ac mattis metus, ut efficitur odio. Aliquam erat volutpat. Donec at urna eu augue elementum placerat. Vestibulum sed aliquam libero.
                                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                            </div>
                            <div class="form-check m-3">
                                <input class="form-check-input" type="checkbox" value="" id="acceptTermesCheckbox">
                                <label class="form-check-label" for="acceptTermesCheckbox">
                                    Accepter les termes d'utilisation.
                                </label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">
                                    <i class="fa fa-arrow-left"></i> Annuler
                                </button>
                                <button type="submit" class="btn btn-sm btn-primary">
                                    <i class="fa fa-check"></i> Confimer
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4">Vous avez déja un compte?   <a href="{{ route('login') }}">Connectez-vous</a></div>
                <span class="w-100 h-100 badge bg-secondary text-light">Copyright &#169; 2021 TIAMTECH. All rights reserved</span>
            </form>
        </div>
        {{-- Bootstrap JS --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>