@extends('layout.default4')
@section('content')
<div id="loading">
    <div id="container" style="margin: 20% auto 0;width: 250px;">
        <img src="images/ajax-loader.gif" alt="" style="margin:0 117px;" />
    </div>
</div>
<div class="col-md-12">
    <div class="row s-al-main-content">
        <div class="s-al-main-content s-al-chapters">
            <div class="col-md-12 s-al-page-heading" style="background:url('images/party.jpg'); background-size:100%;">
                <h2><i class="fa fa-female"></i> Khushi Randhawa <a class="pull-right member-count" href={{route('users.edit.profile', $id)}}><i class="fa fa-pencil"></i> Edit Profile</a></h2>
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
        <div class="col-md-6 col-md-offset-3">
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

    </div>
</div>
    @endsection