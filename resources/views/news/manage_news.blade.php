@extends('layout.default3')
@section('content')
    <div class="col-md-12 middle">
<div id="loading">
<div id="container" style="margin: 20% auto 0;width: 250px;">
    <img src="{{asset('images/ajax-loader.gif')}}" alt="" style="margin:0 117px;" />
</div>
</div>
<div class="s-al-main-content s-al-forums">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-12 s-al-page-heading">
            <div class="row">
                <div class="col-md-5"><h1>Manage News</h1></div>
                <div class="col-md-7">
                    <div class=" s-al-page-head-buttons text-right">
                        <div class="btn-group">
                            <a class="btn btn-primary" href="/fb/public/addnews" > Add News </a>
                        </div>
                        <div class="btn-group">
                            <a class="btn btn-warning" href="/fb/public/news" > All News </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Breadcrumbs -->
    <div class="row">
        <div class="">
            <ol class="breadcrumb n-al-breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="/fb/public/news">News</a></li>
                <li class="active">Manage News</li>

            </ol>
        </div>
    </div>
    <!-- Page Content -->
    <div class="s-al-content s-al-polls">

        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>News</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            </thead>
            @foreach($news as $new)
                <tbody>
                <tr>
                    <td>{{$new->topic_name}}</td>
                    <td>{{$new->date}}</td>
                    <td>
                        <a  data-toggle="modal" data-target="#sendMessage" style="margin-right:10px;"><i class="fa fa-trash-o"></i></a>
                        <a  href="{{route('news.edit',$new->news_id)}}" style="margin-right:10px;"><i class="fa fa-edit"></i></a></td>
                </tr>
                @endforeach
                </tbody>
        </table>
        <div class="modal fade" id="sendMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Delete News</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this news ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
    @endsection