@extends("layout.main")

@section("content")
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content"><h3 class="nk-block-title page-title">
                                    Tableau de Bord</h3></div>
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt">
                                                <a href="#sendnew" data-bs-toggle="modal"
                                                   class="btn btn-primary">
                                                    <em class="icon ni ni-reports"></em>
                                                    <span>Envoyer une notification</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title"><h6 class="title">Utilisateurs inscrits</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount">{{ count($students) }}</div>
                                                    <div class="nk-ecwg6-ck">
                                                        <canvas class="ecommerce-line-chart-s3"
                                                                id="todayOrders"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title"><h6 class="title">Messages envoyés</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount">{{ count($messages) }}</div>
                                                    <div class="nk-ecwg6-ck">
                                                        <canvas class="ecommerce-line-chart-s3"
                                                                id="todayRevenue"></canvas>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title"><h6 class="title">Récement envoyés</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-list mt-n2">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span>ID</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>Promotion</span></div>
                                            <div class="nk-tb-col tb-col-md"><span>Sujet</span></div>
                                            <div class="nk-tb-col"><span>Date</span></div>
                                        </div>
                                        @foreach($messages as $message)
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col"><span class="tb-lead"><a
                                                            href="#">#{{ $message->id }}</a></span>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <div class="user-card">
                                                        <div class="user-name"><span class="tb-lead">{{ $message->promotion->name }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-sub">{{ $message->subject }}</span>
                                                </div>
                                                <div class="nk-tb-col"><span
                                                        class="tb-sub tb-amount">{{ \Carbon\Carbon::create($message->created_at)->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="card-inner">
                                        {{ $messages->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
