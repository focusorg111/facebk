@extends('layout.default4')
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
                            <a class="btn btn-warning" href="registerlist">Registerd User</a>
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
        <div class="col-md-12 s-al-activity-feed">
            <div id="mySliderTabs">
                <ul class="col-md-8 col-md-offset-2 text-center">
                    <li><a href="#all">All</a></li>
                    <li><a href="#messages">Messages</a></li>
                    <li><a href="#forums">Forums</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#polls">Polls</a></li>
                </ul>
                <div id="all">
                    <div class="row">
                        <div class="content-padding col-md-12">
                            <ul class="list-unstyled">
                                <li class="row s-al-activity-list">
                                    <div class="col-md-2">
                                        <img src="{{asset('assets/img/user_img/1.jpg')}}" class="img-responsive" alt="" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="s-al-activity-title">
                                            <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                            <span>enrolled</span>
                                            <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                            <span>in Imperial College London</span>
                                        </div>
                                        <div class="s-al-activity-content"></div>
                                        <div class="s-al-activity-meta">
                                            <a href="#">Like</a>
                                            <a href="#">Comment</a>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="s-al-activity-time-posted">2 Days ago</div>
                                        <div class="s-al-activity-action">
                                            <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="row s-al-activity-list">
                                    <div class="col-md-2">
                                        <img src="{{asset('assets/img/user_img/1.jpg')}}" class="img-responsive" alt="" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="s-al-activity-title">
                                            <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                            <span>enrolled</span>
                                            <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                            <span>in Imperial College London</span>
                                        </div>
                                        <div class="s-al-activity-content"></div>
                                        <div class="s-al-activity-meta">
                                            <a href="#">Like</a>
                                            <a href="#">Comment</a>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="s-al-activity-time-posted">2 Days ago</div>
                                        <div class="s-al-activity-action">
                                            <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="row s-al-activity-list">
                                    <div class="col-md-2">
                                        <img src="{{asset('assets/img/user_img/1.jpg')}}" class="img-responsive" alt="" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="s-al-activity-title">
                                            <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                            <span>enrolled</span>
                                            <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                            <span>in Imperial College London</span>
                                        </div>
                                        <div class="s-al-activity-content"></div>
                                        <div class="s-al-activity-meta">
                                            <a href="#">Like</a>
                                            <a href="#">Comment</a>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="s-al-activity-time-posted">2 Days ago</div>
                                        <div class="s-al-activity-action">
                                            <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="row s-al-activity-list">
                                    <div class="col-md-2">
                                        <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="s-al-activity-title">
                                            <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                            <span>enrolled</span>
                                            <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                            <span>in Imperial College London</span>
                                        </div>
                                        <div class="s-al-activity-content"></div>
                                        <div class="s-al-activity-meta">
                                            <a href="#">Like</a>
                                            <a href="#">Comment</a>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="s-al-activity-time-posted">2 Days ago</div>
                                        <div class="s-al-activity-action">
                                            <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="forums">
                    <div class="row">
                        <div class="content-padding col-md-12">
                            <ul class="list-unstyled">
                                <li class="row s-al-activity-list">
                                    <div class="col-md-2">
                                        <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="s-al-activity-title">
                                            <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                            <span>enrolled</span>
                                            <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                            <span>in Imperial College London</span>
                                        </div>
                                        <div class="s-al-activity-content"></div>
                                        <div class="s-al-activity-meta">
                                            <a href="#">Like</a>
                                            <a href="#">Comment</a>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="s-al-activity-time-posted">2 Days ago</div>
                                        <div class="s-al-activity-action">
                                            <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="row s-al-activity-list">
                                    <div class="col-md-2">
                                        <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="s-al-activity-title">
                                            <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                            <span>enrolled</span>
                                            <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                            <span>in Imperial College London</span>
                                        </div>
                                        <div class="s-al-activity-content"></div>
                                        <div class="s-al-activity-meta">
                                            <a href="#">Like</a>
                                            <a href="#">Comment</a>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="s-al-activity-time-posted">2 Days ago</div>
                                        <div class="s-al-activity-action">
                                            <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="row s-al-activity-list">
                                    <div class="col-md-2">
                                        <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="s-al-activity-title">
                                            <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                            <span>enrolled</span>
                                            <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                            <span>in Imperial College London</span>
                                        </div>
                                        <div class="s-al-activity-content"></div>
                                        <div class="s-al-activity-meta">
                                            <a href="#">Like</a>
                                            <a href="#">Comment</a>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="s-al-activity-time-posted">2 Days ago</div>
                                        <div class="s-al-activity-action">
                                            <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="row s-al-activity-list">
                                    <div class="col-md-2">
                                        <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="s-al-activity-title">
                                            <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                            <span>enrolled</span>
                                            <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                            <span>in Imperial College London</span>
                                        </div>
                                        <div class="s-al-activity-content"></div>
                                        <div class="s-al-activity-meta">
                                            <a href="#">Like</a>
                                            <a href="#">Comment</a>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="s-al-activity-time-posted">2 Days ago</div>
                                        <div class="s-al-activity-action">
                                            <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="gallery">
                    <div class="row">
                        <div class="content-padding col-md-12">
                            <ul class="list-unstyled">
                                <li class="row s-al-activity-list">
                                    <div class="col-md-2">
                                        <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="s-al-activity-title">
                                            <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                            <span>enrolled</span>
                                            <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                            <span>in Imperial College London</span>
                                        </div>
                                        <div class="s-al-activity-content"></div>
                                        <div class="s-al-activity-meta">
                                            <a href="#">Like</a>
                                            <a href="#">Comment</a>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="s-al-activity-time-posted">2 Days ago</div>
                                        <div class="s-al-activity-action">
                                            <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="row s-al-activity-list">
                                    <div class="col-md-2">
                                        <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="s-al-activity-title">
                                            <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                            <span>enrolled</span>
                                            <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                            <span>in Imperial College London</span>
                                        </div>
                                        <div class="s-al-activity-content"></div>
                                        <div class="s-al-activity-meta">
                                            <a href="#">Like</a>
                                            <a href="#">Comment</a>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="s-al-activity-time-posted">2 Days ago</div>
                                        <div class="s-al-activity-action">
                                            <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="row s-al-activity-list">
                                    <div class="col-md-2">
                                        <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="s-al-activity-title">
                                            <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                            <span>enrolled</span>
                                            <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                            <span>in Imperial College London</span>
                                        </div>
                                        <div class="s-al-activity-content"></div>
                                        <div class="s-al-activity-meta">
                                            <a href="#">Like</a>
                                            <a href="#">Comment</a>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="s-al-activity-time-posted">2 Days ago</div>
                                        <div class="s-al-activity-action">
                                            <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="row s-al-activity-list">
                                    <div class="col-md-2">
                                        <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="s-al-activity-title">
                                            <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                            <span>enrolled</span>
                                            <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                            <span>in Imperial College London</span>
                                        </div>
                                        <div class="s-al-activity-content"></div>
                                        <div class="s-al-activity-meta">
                                            <a href="#">Like</a>
                                            <a href="#">Comment</a>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="s-al-activity-time-posted">2 Days ago</div>
                                        <div class="s-al-activity-action">
                                            <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="polls">
                    <div class="row">
                        <div class="content-padding col-md-12">
                            <ul class="list-unstyled">
                                <li class="row s-al-activity-list">
                                    <div class="col-md-2">
                                        <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="s-al-activity-title">
                                            <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                            <span>enrolled</span>
                                            <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                            <span>in Imperial College London</span>
                                        </div>
                                        <div class="s-al-activity-content"></div>
                                        <div class="s-al-activity-meta">
                                            <a href="#">Like</a>
                                            <a href="#">Comment</a>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="s-al-activity-time-posted">2 Days ago</div>
                                        <div class="s-al-activity-action">
                                            <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="row s-al-activity-list">
                                    <div class="col-md-2">
                                        <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="s-al-activity-title">
                                            <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                            <span>enrolled</span>
                                            <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                            <span>in Imperial College London</span>
                                        </div>
                                        <div class="s-al-activity-content"></div>
                                        <div class="s-al-activity-meta">
                                            <a href="#">Like</a>
                                            <a href="#">Comment</a>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="s-al-activity-time-posted">2 Days ago</div>
                                        <div class="s-al-activity-action">
                                            <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="row s-al-activity-list">
                                    <div class="col-md-2">
                                        <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="s-al-activity-title">
                                            <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                            <span>enrolled</span>
                                            <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                            <span>in Imperial College London</span>
                                        </div>
                                        <div class="s-al-activity-content"></div>
                                        <div class="s-al-activity-meta">
                                            <a href="#">Like</a>
                                            <a href="#">Comment</a>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="s-al-activity-time-posted">2 Days ago</div>
                                        <div class="s-al-activity-action">
                                            <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="row s-al-activity-list">
                                    <div class="col-md-2">
                                        <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="s-al-activity-title">
                                            <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                            <span>enrolled</span>
                                            <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                            <span>in Imperial College London</span>
                                        </div>
                                        <div class="s-al-activity-content"></div>
                                        <div class="s-al-activity-meta">
                                            <a href="#">Like</a>
                                            <a href="#">Comment</a>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="s-al-activity-time-posted">2 Days ago</div>
                                        <div class="s-al-activity-action">
                                            <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection