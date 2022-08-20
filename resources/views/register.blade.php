<!DOCTYPE html>
<html lang="zxx" class="js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset("images/favicon.png") }}">
    <title>Esis newsletter</title>
    <link rel="stylesheet" href="{{ asset("assets/css/dashlite41fe.css?ver=3.0.1") }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset("assets/css/theme41fe.css?ver=3.0.1") }}">
    <script async src="{{ asset("www.googletagmanager.com/gtag/jsdae8?id=UA-91615293-4") }}"></script>
</head>
<body class="nk-body bg-white npc-default pg-auth">
<div class="nk-app-root">
    <div class="nk-main ">
        <div class="nk-wrap nk-wrap-nosidebar">
            <div class="nk-content ">
                <div class="nk-split nk-split-page nk-split-md">
                    <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                        <div class="nk-block nk-block-middle nk-auth-body">
                            <div class="brand-logo pb-5"><a href="../../index.html" class="logo-link">
                                    <img class="logo-light logo-img logo-img-lg" src="{{ asset("images/logo.png") }}"
                                         alt="logo"></a>
                            </div>
                            <div class="nk-block-head">
                                <div class="nk-block-head-content"><h5 class="nk-block-title">S'abonner à
                                        newsletter</h5>
                                    <div class="nk-block-des"><p>Recevez en temps réel les notifications concernants vos
                                            études.</p></div>
                                </div>
                            </div>
                            <form method="post" action="{{ route("student.register") }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="default-01">Email</label></div>
                                    <div class="form-control-wrap">
                                        <input name="email" type="text" class="form-control form-control-lg"
                                               placeholder="20kn132@esisala.org">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="default-01">Numéro de téléphone</label></div>
                                    <div class="form-control-wrap">
                                        <input name="phone" type="text" class="form-control form-control-lg"
                                               placeholder="+24399000324">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="default-01">Promotion</label></div>
                                    <div class="form-control-wrap">
                                        <select name="promotion" type="text" class="form-control form-control-lg">
                                            @foreach($promotions as $promotion)
                                                <option value="{{ $promotion->id }}">{{ $promotion->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block">S'abonner</button>
                                </div>
                            </form>

                        </div>
                        <div class="nk-block nk-auth-footer">
                            <div class="mt-3"><p>&copy; 2022 Esisalama</p></div>
                        </div>
                    </div>
                    <div class="nk-split-content nk-split-stretch bg-abstract"></div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
