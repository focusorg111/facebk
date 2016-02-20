@extends('layout.default2')
@section('content')
    <div id="loading">
        <div id="container" style="margin: 20% auto 0;width: 250px;">
            <img src="images/ajax-loader.gif" alt="" style="margin:0 117px;" />
        </div>
    </div>
    <div class="row s-al-main-content">
        <div class="col-md-12 s-al-page-heading">
            <div class="row">
                <div class="col-md-5"><h1>News</h1></div>
                <div class="col-md-7">
                    <div class="s-al-page-head-buttons text-right">
                        <div class="btn-group">
                            <a class="btn btn-primary" href="/fb/public/addnews"> Add News </a>
                        </div>
                        <div class="btn-group">
                            <a class="btn btn-warning" href="/fb/public/managenews"> Manage News </a>
                        </div>
                    </div>
                    <div class="s-al-page-head-nav">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-bg btn-default">
                                <i class="fa fa-chevron-left"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-bg btn-default">
                                <i class="fa fa-chevron-right"></i>
                            </button>
                        </div>
                        <span>Showing 1-6 News</span>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <ol class="breadcrumb n-al-breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">News</li>
            </ol>
        </div>
        <div class="n-al-news-list s-al-content">
            <div class="row n-al-nws-li">
                <!--<div class="col-md-12 n-al-nws">
                     row1 content1 -->
                @foreach ($news as $new)
                <div class="col-md-6 n-al-news-content1">
                    <!--<div class="row n-al-nws-li">-->
                    <div class="col-md-12">
                        <div class="row n-al-nws-li  n-al-news-bg">
                            <div class="col-md-12 n-al-news-main-content ">
                                <!--<ul class="cssMenu">
                                    <li><a href="#"><i class="fa fa-angle-down down-arrow"></i></a>
                                    <ul>
                                    <li><a href="#">Link</a>
                                    <li><a href="#">Link</a>
                                    <li><a href="#">Link</a>
                                    <li><a href="#">Link</a>
                                    </ul>
                                    </li>

                                </ul>-->

                                <div class="col-md-12 n-al-news-heading "><h4><a href="{{route('news.show', $new->news_id)}}">{{$new->topic_name}} </a></h4></div>
                                <div class="col-md-12 n-al-news-date-time "><strong><i class="fa fa-calendar">&nbsp;&nbsp;{{$new->date}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$new->created_by}}</i></strong></div>
                                <div class="col-md-12 n-al-desc">
                                    <p><img src="assets/images/news1.jpg" align="left" class="n-al-content-img" width="170">
                                       {{$new->topic_description}}
                                        </p>
                                </div>
                            </div>
                        </div>
                        <div class="row n-al-nws-li n-al-news-bg">
                            <div class="col-md-4 read-button">
                                <a href="news-detail.html">Read Full<i class="fa fa-arrow-circle-right right-arrow"></i>	</a>
                            </div>
                        </div>
                    </div>
                    <!--</div>-->
                </div>
                @endforeach
                <!-- row1 content1 -->


                <!--</div>	-->

            </div>


        </div>
        <div class="col-md-6 col-md-offset-4">
            <ul class="pagination pagination-sm">
                <li><a href="#" class="page">Previous</a></li>
                <li><a href="#" class="page">1</a></li>
                <li><a href="#" class="page">2</a>	</li>
                <li><span class="page active">3</span>	</li>
                <li><a href="#" class="page">4</a></li>
                <li><a href="#" class="page">5</a></li>
                <li><a href="#"	class="page">Next</a></li>
            </ul>
        </div>
        </section>
        <section class="col-md-3 right">
            <div class="row">
                <div class="widget profile-dash">
                    <div class="widget-contant">
                        <img src="assets/img/complete-profile.jpg" />
                    </div>
                </div>
                <div class="widget invite-dash">
                    <div class="widget-contant">
                        <img src="assets/img/invite.jpg" />
                    </div>
                </div>
                <div class="widget dark event-dash">
                    <div class="heading3">Upcoming Events</div>
                    <div class="widget-contant">
                        <ul class="event-wid">
                            <li>
                                <div class="meta">
                                    <h4><a href="bootstrap-calendar-master/events-detail.html">Party at sea site</a></h4>
                                    <p><small><em>12:00 pm / 6 July 2014</em></small></p>
                                </div>
                                <div class="actions"><a href="#" class="btn btn-warning btn-xs">Going</a><a href="#" class="btn btn-ghost btn-xs">Ignore</a></div>
                            </li>
                            <li>
                                <div class="meta">
                                    <h4><a href="bootstrap-calendar-master/events-detail.html">Party at sea site</a></h4>
                                    <p><small><em>12:00 pm / 6 July 2014</em></small></p>
                                </div>
                                <div class="actions"><a href="#" class="btn btn-warning btn-xs">Going</a><a href="#" class="btn btn-ghost btn-xs">Ignore</a></div>
                            </li>
                            <li>
                                <div class="meta">
                                    <h4><a href="bootstrap-calendar-master/events-detail.html">Party at sea site</a></h4>
                                    <p><small><em>12:00 pm / 6 July 2014</em></small></p>
                                </div>
                                <div class="actions"><a href="#" class="btn btn-warning btn-xs">Going</a><a href="#" class="btn btn-ghost btn-xs">Ignore</a></div>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
    @endsection