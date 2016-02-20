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

            </div>
        </div>
    </div>
    <div>
        <ol class="breadcrumb n-al-breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">News</li>
        </ol>
    </div>
    <div class="col-md-12 n-al-news-list s-al-content">
        <!-- News Detail 1 start-->
        <div class="row">
            <div class="col-md-12 ">
                <div class="col-md-12 n-al-news-detail">
                    <div class="col-md-12 n-al-news-detail-bg">
                        <div class="col-md-12 n-al-detail-header">
                            <div class="col-md-11 n-al-detail-header">
                                <div class="col-md-4 date-button">
                                    15/04/2014
                                </div>
                            </div>
                            <div class="col-md-1 n-al-detail-header">
                            </div>
                        </div>

                        <div class="col-md-12 n-al-news-detail-content">
                            <div class="col-md-12 n-al-news-detail-heading"><h4>{{$news['topic_name']}} </h4></div>
                            <div class="col-md-12 n-al-detail-desc">
                                <p><!--<img src="assets/img/news-img/avg.jpg" align="left" class="n-al-content-img" width="170" height="140">-->
                                    {{$news['topic_description']}}
                                </p>
                            </div>

                        </div>





                    </div>



                </div>



            </div>

        </div>
        <!-- News Detail 1 end -->

    </div>
    </section>
    <section class="col-md-3 right">
        <div class="row">
            <div class="widget profile-dash">
                <div class="widget-contant">
                    <img src="{{asset('assets/img/complete-profile.jpg')}}" />
                </div>
            </div>
            <div class="widget invite-dash">
                <div class="widget-contant">
                    <img src="{{asset('assets/img/invite.jpg')}}" />
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
    </section>
</div>
</div>
@endsection