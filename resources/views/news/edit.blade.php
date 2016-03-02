@extends('layout.default2')
@section('content')
    <div id="loading">
        <div id="container" style="margin: 20% auto 0;width: 250px;">
            <img src="images/ajax-loader.gif" alt="" style="margin:0 117px;" />
        </div>
    </div>
    <div class="s-al-main-content s-al-forums">
        <div class="row">
            <div class="col-md-12 s-al-page-heading">
                <div class="row">
                    <div class="col-md-5"><h1>Edit News</h1></div>
                    <div class="col-md-7">
                        <div class=" s-al-page-head-buttons text-right">
                            <div class="btn-group">
                                <a class="btn btn-primary" href="/fb/public/news">All News </a>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-warning" href="/fb/public/managenews">Manage News </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <ol class="breadcrumb n-al-breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">News</a></li>
                <li class="active">Add News</li>
            </ol>
        </div>
        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
        @endif
        @include('common.message')
        <div class="col-md-12 s-al-content-forum-add common-form">
            <!-- Add Topic -->
            {!!
    		Form::open(array('url' => route('news.update', $news->news_id), 'method' => 'PUT',
    		'class'=> 'main',
    		'autocomplete'=>'off',
    		'files' => true,
    		'id'=>'addTopic'
    		))
			!!}
                <fieldset>
                    <div class="s-al-form-content">
                        <div class="formRow ">
                            <div class="grid2"><label>News Headline </label></div>
                            <div class="grid10 elVal">
                                {{
  						Form::text('topic_name', $news->topic_name,
  						['class'=> 'form-control',
  					      ' id'=>'topic_name',
  						'placeholder'=>'News Headline'
  						])
  						}}
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="formRow">
                            <div class="grid2"><label>Description </label></div>
                            <div class="grid10 elVal">
                                {{
                         Form::textarea('topic_description', $news->topic_description,
                         ['class'=> 'form-control',
                           ' id'=>'topic_description',
                         'placeholder'=>'News Description'
                         ])
                         }}
                            </div>
                            <div class="clear"></div>
                            <div class="formRow ">
                                <div class="grid2"><label>Date </label></div>
                                <div class="grid10 elVal">
                                    {{
                        Form::date('date', $news->date,
                        ['class'=>'form-control datepicker',
                          ' id'=>'date',
                        'placeholder'=>'Date'
                        ])
                        }}
                                </div>
                            </div>
                            <div class="formRow ">
                                <div class="grid2"><label>Select image </label></div>
                                <div class="grid10 elVal">
                                    {{
                        Form::file('image_name')
                        }}
                                </div>
                            </div>
                            <div class="formRow ">
                                <div class="grid2"><label>Created By </label></div>
                                <div class="grid10 elVal">
                                    {{
                              Form::text('created_by', null,
                              ['class'=> 'form-control',
                                ' id'=>'created_by',
                              'placeholder'=>'Your Name'
                              ])
                              }}
                                </div>
                            <div class="clear"></div>
                        </div>

                        <div class="topic-actions">
                            {{
                    Form::submit('Publish News',
                    ['class'=>'btn btn-primary',
                    'type'=>'submit'
                    ])
                    }}
                            <a href="news.html">
                                {{
             Form::button('Cancel',
             ['class'=>'btn btn-default',
             'type'=>'button'
             ])
             }}
                            </a>

                        </div>
                        <div class="clear"></div>
                    </div>
                </fieldset>
            </form>
        </div>
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
    @endsection