@extends('layouts.main')

@section('content')
    <!-- BEGIN PAGINA CONTAINER -->
    <div class="container main-content">
        <div class="row first-row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Threads</span>
                        <div class="collection">

                            @foreach($threads as $thread)
                            <!-- BEGIN VAN EEN THREAD -->
                            <a href="thread.html" class="collection-item avatar collection-link">
                                <img src="img/icon-php.png" alt="" class="circle">
                                <div class="row">
                                    <div class="col s9">
                                        <div class="row last-row">
                                            <div class="col s12">
                                                <span class="title">
                                                    {{ $thread->title }}
                                                </span>
                                                <p>
                                                    {{ $thread->description }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row last-row">
                                            <div class="col s12 post-timestamp">Moderator: {{ $thread->user->username }}</div>
                                        </div>
                                    </div>
                                    <div class="col s3">
                                        <h6 class="title center-align">Statistieken</h6>
                                        <p class="center-align">26 topics</p>
                                    </div>
                                </div>
                            </a>
                            <!-- EINDE VAN EEN THREAD -->
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- EINDE PAGINA CONTAINER -->
@endsection

