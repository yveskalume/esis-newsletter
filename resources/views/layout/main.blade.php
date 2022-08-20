<!DOCTYPE html>
<html lang="zxx" class="js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Default Dashboard | DashLite Admin Template</title>
    <link rel="stylesheet" href="{{ asset("assets/css/dashlite41fe.css") }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset("assets/css/theme41fe.css") }}">
</head>
<body class="nk-body bg-lighter npc-default has-sidebar ">
<div class="nk-app-root">
    <div class="nk-main ">
        @include("layout.parts.sidebar")
        <div class="nk-wrap ">
            @include("layout.parts.header")
            @yield("content")
            @include("layout.parts.footer")
        </div>
    </div>
</div>

<div class="modal fade" role="dialog" id="sendnew">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Envoyer un message</h6>
                <a href="#" class="close" data-bs-dismiss="modal"><em
                        class="icon ni ni-cross-sm"></em></a>
            </div>
            <div class="modal-body p-0">
                <form method="post" action="{{ route("message.new") }}">
                    {{ csrf_field() }}
                    <div class="nk-reply-form-header">
                        <div class="nk-reply-form-group">
                            <div class="nk-reply-form-input-group">
                                <div class="nk-reply-form-input nk-reply-form-input-to">
                                    <label class="label">Promotion</label>
                                    <select name="promotion" class="form-control">
                                        @foreach($promotions as $promotion)
                                            <option value="{{ $promotion->id }}">{{ $promotion->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="nk-reply-form-editor">
                        <div class="nk-reply-form-field">
                            <input name="subject" type="text" class="form-control form-control-simple"
                                   placeholder="Sujet">
                        </div>
                        <div class="nk-reply-form-field">
                            <textarea name="message" class="form-control form-control-simple no-resize ex-large"
                                      placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="nk-reply-form-tools">
                        <ul class="nk-reply-form-actions g-1">
                            <li class="me-2">
                                <button class="btn btn-primary" type="submit">Envoyer</button>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset("assets/js/bundle41fe.js") }}"></script>
<script src="{{ asset("assets/js/scripts41fe.js") }}"></script>
<script src="{{ asset("assets/js/demo-settings41fe.js") }}"></script>
<script src="{{ asset("assets/js/charts/chart-ecommerce41fe.js") }}"></script>
</body>
<!-- Mirrored from dashlite.net/demo2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2022 13:37:27 GMT -->
</html>
