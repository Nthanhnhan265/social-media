@foreach ($posts as $post)
								<!-- loop to find owner's post -->

								<div class="central-meta item rounded-5">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<img src="{{asset('images/resources/'.$post->user->avatar)}}" alt="">
											</figure>
											<div class="friend-name">
												<ins><a href="{{ url('time-line').'/user-profile/'.$post->user->user_id }}" title="">
														{{$post->user->last_name." ".$post->user->first_name}}
													</a></ins>

												<span>published: {{$post->created_at}}</span>
											</div>
											<div class="post-meta">
												<!-- <img src="images/resources/user-post.jpg" alt=""> -->
												<!-- Print content if not null -->
												<!-- {{$post->id}} -->
												@if(!empty($post->content))
												<div class="description pb-2">
													{{$post->content}}
												</div>
												@endif


												<!-- Display imgs  -->
												@if(!empty($post->image))
												<div class="list-img">
													@foreach ($post->image as $img)
													<img src="{{asset('storage/images/'.$img->url)}}" alt="failed to display" />
													@endforeach

												</div>
												@endif

												<!-- Display video  -->
												@if(!empty($post->video) && count($post->video) !=0 )
												<video class="list-vid" controls alt="err">
													@foreach ($post->video as $video)
													<source src="{{asset('storage/videos/'.$video->url)}}">
													@endforeach
												</video>
												@endif



												<!-- views, like,dislike, comment, share -->
												<div class="we-video-info border-top my-3">
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
														<li class="social-media">
															<div class="menu">
																<div class="btn trigger"><i class="fa fa-share-alt"></i></div>
																<div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
																</div>
																<div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
																</div>
																<div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
																</div>
																<div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
																</div>
																<div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
																</div>
																<div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
																	</div>
																</div>
																<div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
																	</div>
																</div>
																<div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
																	</div>
																</div>

															</div>
														</li>
													</ul>
												</div>

											</div>
										</div>
										<div class="coment-area p-1">
											<ul class="we-comet">
												<!-- hiện commment cho mỗi bình luận tại đây -->
												@foreach ($post->comments as $comment)
													<x-comment :commenter=$comment></x-comment>
												@endforeach
												<li>
													<a href="#" title="" class="showmore underline">more comments</a>
												</li>
												<li class="post-comment">
													<div class="comet-avatar">
														<x-user-avt>
														</x-user-avt>
													</div>
													<div class="post-comt-box">
														<form method="post" action = "comment" enctype="multipart/form-data">
															@csrf
															@method("POST")
															<input type="hidden" name="post_id" value="{{$post->id}}">
															<textarea placeholder="Post your comment" name = "content"></textarea>
															<div class="add-smiles">
																<span class="em em-expressionless" title="add icon"></span>
															</div>
															<div class="attachments">
																<ul class="m-0 d-flex">
																	<li>
																		<i class="fa fa-image"></i>
																		<label class="fileContainer">
																			<input type="file" name="imgFileSelected[]" id="imgFileSelected" multiple accept="image/*">
																		</label>
																	</li>
																	<li>
																		<i class="fa fa-video-camera"></i>
																		<label class="fileContainer">
																			<input type="file" name="vdFileSelected[]" id="vdFileSelected" multiple accept="video/*">
																		</label>
																	</li>

																	<li>
																		<button type="submit" class="bg-dark">Post</button>
																	</li>
																</ul>
															</div>
															<div class="smiles-bunch">
																<i class="em em---1"></i>
																<i class="em em-smiley"></i>
																<i class="em em-anguished"></i>
																<i class="em em-laughing"></i>
																<i class="em em-angry"></i>
																<i class="em em-astonished"></i>
																<i class="em em-blush"></i>
																<i class="em em-disappointed"></i>
																<i class="em em-worried"></i>
																<i class="em em-kissing_heart"></i>
																<i class="em em-rage"></i>
																<i class="em em-stuck_out_tongue"></i>
															</div>

															<button type="submit"></button>
														</form>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								@endforeach