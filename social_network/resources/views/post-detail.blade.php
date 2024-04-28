
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
											@if($post->user->avatar)
												<img src="{{ asset('images/resources/' . $post->user->avatar) }}" alt="">
											@else
												<img src="{{ asset('images/resources/meo.jpg') }}" alt="">
											@endif
											</figure>
											<div class="friend-name">
												<ins><a href="{{ url('time-line') }}" title="">{{$post->user->last_name." ".$post->user->first_name}}</a></ins>
												<span>published: {{$post->created_at }}</span>
                                                
											</div>                                           
											<div class="post-meta">
												<img src="{{ asset('images/resources/user-post.jpg') }}"  alt="">
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
														{{$post->content }}
													</p>
												</div>
											</div>
										</div>
										<div class="coment-area">
											<ul class="we-comet">
												@foreach($comments as $comment)
												<li>
													<div class="comet-avatar">
														<img src="{{ asset('images/resources/' . $comment->user->avatar) }}" alt="">
													</div>
													<div class="we-comment">
														<div class="coment-head">
															<h5><a href="{{ url('time-line') }}" title="">{{ $comment->user->first_name.' '.$comment->user->last_name }}</a></h5>
															<span>{{ $comment->created_at }}</span>
															<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
															<form id="update-comment-form-{{ $comment->comment_id }}" action="{{ route('update-comment', $comment->comment_id) }}" method="POST" style="display: inline;">
																@csrf
																@method('PUT')
																<input type="hidden" name="status" value="{{ $comment->status == 0 ? 1 : 0 }}">
																<button type="submit" class="btn btn-mini">
																	{{ $comment->status == 0 ? 'Show' : 'Hide' }}
																</button>
															</form> 
                                                            <form action="{{ route('delete-comment', $comment->comment_id) }}" method="POST" style="display: inline;">
																@csrf
																@method('DELETE')
																<button type="submit" class="btn btn-mini" onclick="return confirm('Are you sure you want to delete this comment?')">Delete</button>
															</form>
														</div>										
															<p>{{ $comment->content }}</p>																		
													</div>	
												</li>
												@endforeach																											
											</ul>
										</div>
									</div>                                    
								</div>
                            </div>
							<form id="update-post-form-{{ $post->id }}" action="{{ route('update-post-status', $post->id) }}" method="POST" style="display: inline;">
								@csrf
								@method('PUT')
								<input type="hidden" name="status" value="{{ $post->status == 0 ? 1 : 0 }}">
								<button type="submit" class="btn btn-mini">
									{{ $post->status == 0 ? 'Show' : 'Hide' }}
								</button>
							</form>                    
                            <form action="{{ route('delete-post', $post->id) }}" method="POST" style="display: inline;">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-mini" onclick="return confirm('Are you sure you want to delete this comment?')">Delete</button>
							</form>
                        </div>
                    </div>
                </div>
        </div>
    </main>
    <!-- End Main -->

</div>
@if(count($comments) > 0)
    <script>
        document.getElementById("update-post-form-{{ $post->id }}").addEventListener("submit", function(event) {
            var form = this;
            var confirmMessage = "Are you sure you want to {{ $post->status == 0 ? 'show' : 'hide' }} this post?";
            if (!confirm(confirmMessage)) {
                event.preventDefault(); 
            }
        });
        @foreach($comments as $comment)
            document.getElementById("update-comment-form-{{ $comment->comment_id }}").addEventListener("submit", function(event) {
                var form = this;
                var confirmMessage = "Are you sure you want to {{ $comment->status == 0 ? 'show' : 'hide' }} this comment?";
                if (!confirm(confirmMessage)) {
                    event.preventDefault(); 
                }
            });
        @endforeach
    </script>
@endif
@endsection