
@extends('layouts.app-management')
@section('content')
    <!-- Main -->
    <main class="main-container">
    <div id="content">
            <div id="content-header">               
                <h1>Post detail</h1>
            </div>
                <hr>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">                          
                            <div class="widget-content nopadding">  
                            <div class="control-group">
                                        <label class="control-label">Post ID : {{ $post->id }}</label>                                                                             
                            </div>                             
                            <div class="central-meta item">                                   
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<img src="{{ asset('images/resources/' . $post->user->avatar) }}" alt="">
											</figure>
											<div class="friend-name">
												<ins><a href="{{ url('time-line') }}" title="">{{$post->user->last_name." ".$post->user->first_name}}</a></ins>
												<span>published: {{$post->created_at }}</span>
                                                
											</div>                                           
											<div class="post-meta">
												<img src="images/resources/user-post.jpg" alt="">
												<div class="we-video-info">
													<ul>
														<li>
															<span class="views" data-toggle="tooltip" title="views">
																<i class="fa fa-eye"></i>
																<ins>1.2k</ins>
															</span>
														</li>
														<li>
															<span class="comment" data-toggle="tooltip" title="Comments">
																<i class="fa fa-comments-o"></i>
																<ins>52</ins>
															</span>
														</li>
														<li>
															<span class="like" data-toggle="tooltip" title="like">
																<i class="ti-heart"></i>
																<ins>2.2k</ins>
															</span>
														</li>
														<li>
															<span class="dislike" data-toggle="tooltip" title="dislike">
																<i class="ti-heart-broken"></i>
																<ins>200</ins>
															</span>
														</li>														
													</ul>
												</div>
												<div class="description">
													
													<p>
														World's most beautiful car in Curabitur <a href="#" title="">#test drive booking !</a> the most beatuiful car available in america and the saudia arabia, you can book your test drive by our official website
													</p>
												</div>
											</div>
										</div>
										<div class="coment-area">
											<ul class="we-comet">
												<li>
													<div class="comet-avatar">
														<img src="images/resources/comet-1.jpg" alt="">
													</div>
													<div class="we-comment">
														<div class="coment-head">
															<h5><a href="{{ url('time-line') }}" title="">Jason borne</a></h5>
															<span>1 year ago</span>
															<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                            <a href="" class="btn btn-mini">{{ $post->status == 1? 'Show' : 'Hide' }}</a>
                                                            <a href="" class="btn btn-mini">Delete</a>
														</div>
														<p>we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post</p>
													</div>
													<ul>
														<li>
															<div class="comet-avatar">
																<img src="images/resources/comet-2.jpg" alt="">
															</div>
															<div class="we-comment">
																<div class="coment-head">
																	<h5><a href="{{ url('time-line') }}" title="">alexendra dadrio</a></h5>
																	<span>1 month ago</span>
																	<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                    <a href="" class="btn btn-mini">Hide</a>
                                                                    <a href="" class="btn btn-mini">Delete</a>
																</div>
																<p>yes, really very awesome car i see the features of this car in the official website of <a href="#" title="">#Mercedes-Benz</a> and really impressed :-)</p>
															</div>
														</li>
														<li>
															<div class="comet-avatar">
																<img src="images/resources/comet-3.jpg" alt="">
															</div>
															<div class="we-comment">
																<div class="coment-head">
																	<h5><a href="{{ url('time-line') }}" title="">Olivia</a></h5>
																	<span>16 days ago</span>
																	<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                    <a href="" class="btn btn-mini">Hide</a>
                                                                    <a href="" class="btn btn-mini">Delete</a>
																</div>
																<p>i like lexus cars, lexus cars are most beautiful with the awesome features, but this car is really outstanding than lexus</p>
															</div>
														</li>
													</ul>
												</li>
												<li>
													<div class="comet-avatar">
														<img src="images/resources/comet-1.jpg" alt="">
													</div>
													<div class="we-comment">
														<div class="coment-head">
															<h5><a href="{{ url('time-line') }}" title="">Donald Trump</a></h5>
															<span>1 week ago</span>
															<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                            <a href="" class="btn btn-mini">Hide</a>
                                                            <a href="" class="btn btn-mini">Delete</a>
														</div>
														<p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel
															<i class="em em-smiley"></i>
														</p>
													</div>
												</li>
												<li>
													<a href="#" title="" class="showmore underline">more comments</a>
												</li>												
											</ul>
										</div>
									</div>                                    
								</div>
                            </div>
                            <a href="" class="btn btn-mini">{{ $post->status == 0 ? 'Show' : 'Hide' }}</a>
                            <a href="" class="btn btn-mini">Delete</a>
                        </div>
                    </div>
                </div>
        </div>
    </main>
    <!-- End Main -->

</div>

@endsection