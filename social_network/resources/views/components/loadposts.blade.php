<div class="loadMore" id="news-container">
						@foreach ($posts as $post)
						{{-- Kiểm tra trong mảng và render ra cái phù hợp --}}
						@if (class_basename($post) === 'Posts')
						{{-- @if (false)  --}}
						<div class="central-meta newpost item rounded-5 {{isset($firstPost) && $firstPost == true ? 'firstPost': ''}}">
							<div class="user-post">
								<div class="friend-info">
									<figure style="width:3rem;height:3rem" class="border-avt">
										<img src="{{ asset('storage/images/' . $post->user->avatar) }}" alt="" style="height: 100%;width:100%">
									</figure>
									<div class="friend-name">
										<ins><a href="{{ url('time-line') . '/user-profile/' . $post->user->user_id }}" title="">
												{{ ucwords($post->user->last_name . ' ' . $post->user->first_name) }}
											</a></ins>

										<span>published:
											{{ date_format($post->created_at, 'H:i d/m/Y') }}</span>

												@if(!Request::is('newsfeed') && auth()->check() && $user->user_id == auth()->user()->user_id)
														<div class="dropdown" style="position: absolute; right: 5%;">
																<button class="btn  dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: none;background:##f4f2f2">
																	<i class="fa-solid fa-ellipsis-vertical"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-{{$post->id}}">
																	<a class="dropdown-item" href="{{url('edit-post/'. $post->id)}}" style="display:flex; align-items: center;font-size: 0.8125rem " >	
																	<i class="far fa-edit" 
																		style="margin-right:10px; width: 1rem"></i>Update</a>
																	
																	<form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="POST" style="display: inline;">
																		@csrf
																		@method('DELETE')
																		<button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this post?');" style="display:flex; align-items: center;;font-size: 0.8125rem"> 	
																		<i class="fas fa-trash-alt"
																				style="margin-right: 10px; width: 1rem"></i> Delete</button>
																	</form>
																</div>
															</div>
															@if (session('success'))
													<div class="alert alert-success" id="successMessage">
														{{ session('success') }}
													</div>
												@endif
															@endif
									</div>
									<div class="post-meta">
										<!-- <img src="images/resources/user-post.jpg" alt=""> -->
										<!-- Print content if not null -->
										<!-- {{ $post->id }} -->
										@if (!empty($post->content))
										@php
										$content = $post->content;
										@endphp
										<x-format_string :content="$content"></x-format_string>
										@endif


										@php
										$totalMedia = count($post->image) + count($post->video);

										@endphp
										<!-- Display imgs  -->
										@if ($totalMedia != 0)
										<div class="container-fluied">
											<div class="row">
												@foreach ($post->image as $img)
												<a href="{{ asset('storage/images/' . $img->url) }}" class="{{ $loop->index < 3 ? 'col-4 p-1' : 'd-none' }} {{ $loop->index == 2 ? 'position-relative' : '' }}" data-fancybox="gallery{{ $post->id }}" data-caption="{{ $post->user->last_name . ' ' . $post->user->first_name . '\'s images' }}">
													<img src="{{ asset('storage/images/' . $img->url) }}" alt="failed to display" class="d-block" />
													@if ($loop->index == 2 && $loop->count - 3 != 0)
													<div style='position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content: center;align-items: center;font-size:2rem'>
														+{{ $totalMedia - 2 }}
													</div>
													@endif
												</a>
												@endforeach

												@if (!empty($post->video) && count($post->video) != 0)
												@foreach ($post->video as $video)
												<a href="{{ asset('storage/videos/' . $video->url) }}" data-fancybox="gallery{{ $post->id }}" style="max-height:50rem" class="{{ count($post->image) > 3 || $loop->iteration + count($post->image) > 3 ? 'd-none' : 'col-3 p-1' }}{{ count($post->image) > 3 || $loop->iteration + count($post->image) == 3 ? ' position-relative' : '' }}" style="display:block;height: 100%">
													<video controls style="height:100%;width:100%" src="{{ asset('storage/videos/' . $video->url) }}"></video>
													@if (count($post->image) > 3 || $loop->iteration + count($post->image) == 3)
													<div style='position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content: center;align-items: center;font-size:2rem'>
														+{{ $totalMedia - 2 }}
													</div>
													@endif
												</a>
												@endforeach
												@endif
											</div>

										</div>
										@endif



										<!-- views, like,dislike, comment, share -->
										<div class="we-video-info border-top my-3">
											<ul style="display: flex;align-items: center;">
												<li style="margin-right:15px">
													<span id="like-count-container-{{ $post->id }}" title="Likes" data-type="{{ $post->isLikedByCurrentUser() }}" data-post="{{ $post->id }}" data-clicked="false" class="mr-2 btn btn-sm d-inline font-weight-bold saveLikeDislike" style="border: 1px solid #c4c4c4;color: #c4c4c4;display:flex!important;align-items: center;">
														<i class="fa-regular fa-thumbs-up mr-2"></i>
														<span id="like-count-{{ $post->id }}">
															@php
															$count = $post->sumLikes()
															@endphp

															<x-format_number :number=$count />
														</span>
													</span>
												</li>

												{{-- @foreach ($post->likePosts as $likePost)
                                                                @if ($likePost->post_id_fk == $post->id)
                                                                <form method="post" action="{{ route('like.store') }}"
												class="like-form">
												@csrf
												<input type="hidden" name="likepost-id" value={{ $likePost->likepost_id }} />
												<button class="like" data-toggle="tooltip" title="like">
													<i class="ti-heart"></i>
												</button>
												</form>
												@elseif($likePost->user_id_fk == $post->user_id_fk)
												<form method="post" action="{{ route('like.store') }}" class="like-form">
													@csrf
													<input type="hidden" name="like-status" value="{{ $likePost->likepost_id ? 'like' : 'done like' }}">
													<input type="hidden" name="post-id" value={{ $post->id }} />
													<input type="hidden" name="likepost-id" value={{ $likePost->likepost_id }} />
													<button class="like" data-toggle="tooltip" title="like">
														<i class="ti-heart"></i>
													</button>
												</form>
												@endif
												@endforeach --}}
												{{-- </li> --}}
												{{-- <li>
                                                                    <span class="dislike" data-toggle="tooltip"
                                                                        title="dislike">
                                                                        <i class="ti-heart-broken"></i>
                                                                        <ins>200</ins>
                                                                    </span>
                                                                </li> --}}
												<li>
													<span class="comment" data-toggle="tooltip" title="Comments">
														<i class="fa fa-comments-o"></i>
														<ins>
															@php
															$count = count($post->comments)
															@endphp

															<x-format_number :number=$count />
														</ins>
													</span>
												</li>
												<li class="social-media">
													@if(Auth::user()->user_id != $post->user_id_fk) 
													<x-share-btn>{{ $post->id }}</x-share-btn>
													@endif
												</li>


											</ul>
										</div>


									</div>
								</div>
								<div class="coment-area p-1 post-cmt post-cmt-{{ $post->id }}">
									<ul class="we-comet comment">
										<!-- hiện commment cho mỗi bình luận tại đây -->
										@php
										$count = 0;
										@endphp
										@foreach ($post->comments as $comment)
										@php
										$flag = $count >= 3 ? true : false;
										@endphp
										<x-comment :commenter=$comment :isHidden=$flag></x-comment>
										@php
										$count++;
										@endphp
										@endforeach

									</ul> <!-- list of comments-->
									<ul class="we-comet">
										<li>
											@php
											$count_of_cmt = count($post->comments);
											@endphp
											@if ($count_of_cmt > 3)
											<a title="" class="showmore underline btnshow-{{ $post->id }}">more
												comments</a>
											@endif
										</li>

										<li class="post-comment">
											<div class="comet-avatar">
												<div class="parent" style="width: 2rem; height: 2rem; border-radius: 50%;overflow:hidden">
													<x-user-avt>
													</x-user-avt>
												</div>
											</div>

											<div class="post-comt-box {{ $post->id }}">
												<form method="post" action="comment" id="form-{{ $post->id }}" enctype="multipart/form-data">
													@csrf
													@method('POST')
													<input type="hidden" name="post_id" value="{{ $post->id }}">
													<textarea placeholder="Post your comment" name="content"></textarea>
													 
													<div class="attachments">
														<ul class="m-0 d-flex align-items-center">
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
																<button type="submit" class="bg-dark btnComment" value={{ $post->id }}>Post</button>
															</li>
														</ul>
													</div>
													{{-- <div class="smiles-bunch">
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
																	</div> --}}
												</form>
											</div>

										</li>
									</ul>
								</div>
							</div>
						</div>
						@elseif (class_basename($post) === 'Share')

						@php
						$created_at = $post->created_at;
						$sharer = $post->user;
						$sharePost = $post; 
						$post = $post->post;
						
						@endphp
												
						@if (Request::is('newsfeed'))
						{{-- Chỉ hiển thị bài viết có trạng thái công khai (public) trên newsfeed --}}
						@if ($sharePost->status == 0)
							@continue
						@endif
						@else 
						{{-- Nếu không phải newsfeed, kiểm tra xem có phải trang cá nhân của người dùng hiện tại không --}}
						@if (!Request::is('time-line/user-profile/' . Auth::user()->user_id) && $sharePost->status == 0)
							@continue
						@endif
						@endif

						<div class="sharer newpost {{isset($firstPost) && $firstPost == true ? 'firstPost': ''}}">
							<div class="user-shared" style="position: relative">
								<figure style="width:3rem;height:3rem;border-radius:50%;overflow:hidden" class="border-avt">
									<img src="{{ asset('storage/images/' . $sharer->avatar) }}" alt="" style="height: 100%;width:100%">
								</figure>
								<div class="content pl-3">
									<div class="text">
										<b>{{ ucwords($sharer->last_name . ' ' . $sharer->first_name) }}</b> shared an article
										{{-- 0 is private --}}
								 
										@if ($sharePost->status == 0) 
										<i class="fa-solid fa-lock"></i>
										@else
										<i class="fa-solid fa-earth-americas"></i>
										@endif
									</div>
									<div class="publicTime">
										At: {{ date_format($created_at, 'H:i d/m/Y') }}
									</div>
								</div>
								@if (Request::is('time-line/user-profile/'.Auth::user()->user_id)) 
								<form action="{{route('share.destroy',$sharePost->share_id)}}" method="post">
									@csrf 
									@method('delete')
									<button type="submit" style="background-color:#fff;color:#000 ; position:absolute;top:50%;transform:translateY(-50%);right: 0">
										<i class="fa fa-trash" aria-hidden="true"></i>
										<div class="deleteshare" style="position:absolute;top:50%;transform:translateY(-50%);right: 0">
										</div> 
										
									</button>
								</form>
								@endif
							</div>
							<div class="central-meta item rounded-5 border-share">
								<div class="user-post">
									<div class="friend-info">
										<figure style="width:3rem;height:3rem">
											<img src="{{ asset('storage/images/' . $post->user->avatar) }}" alt="" style="height: auto;width:100%">
										</figure>
										<div class="friend-name">
											<ins><a href="{{ url('time-line') . '/user-profile/' . $post->user->user_id }}" title="">
													{{ ucwords($post->user->last_name . ' ' . $post->user->first_name) }}
												</a></ins>

											<span>published:
												{{ date_format($post->created_at, 'H:i d/m/Y') }}</span>
										</div>
										<div class="post-meta">
											<!-- <img src="images/resources/user-post.jpg" alt=""> -->
											<!-- Print content if not null -->
											<!-- {{ $post->id }} -->
											@if (!empty($post->content))
											@php
											$content = $post->content;
											@endphp
											<x-format_string :content="$content"></x-format_string>
											@endif

											
											@php
											$totalMedia = count($post->image) + count($post->video);

											@endphp
											<!-- Display imgs  -->
											@if ($totalMedia != 0)
											<div class="container-fluied">
												<div class="row">
													@foreach ($post->image as $img)
													<a href="{{ asset('storage/images/' . $img->url) }}" class="{{ $loop->index < 3 ? 'col-4 p-1' : 'd-none' }} {{ $loop->index == 2 ? 'position-relative' : '' }}" data-fancybox="gallery{{ $post->id }}" data-caption="{{ $post->user->last_name . ' ' . $post->user->first_name . '\'s images' }}">
														<img src="{{ asset('storage/images/' . $img->url) }}" alt="failed to display" class="d-block" />
														@if ($loop->index == 2 && $loop->count - 3 != 0)
														<div style='position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content: center;align-items: center;font-size:2rem'>
															+{{ $totalMedia - 2 }}
														</div>
														@endif
													</a>
													@endforeach

													@if (!empty($post->video) && count($post->video) != 0)
													@foreach ($post->video as $video)
													<a href="{{ asset('storage/videos/' . $video->url) }}" data-fancybox="gallery{{ $post->id }}" style="max-height:50rem" class="{{ count($post->image) > 3 || $loop->iteration + count($post->image) > 3 ? 'd-none' : 'col-3 p-1' }}{{ count($post->image) > 3 || $loop->iteration + count($post->image) == 3 ? ' position-relative' : '' }}" style="display:block;height: 100%">
														<video controls style="height:100%;width:100%" src="{{ asset('storage/videos/' . $video->url) }}"></video>
														@if (count($post->image) > 3 || $loop->iteration + count($post->image) == 3)
														<div style='position:absolute;inset:0;background:rgba(0,0,0,.35);color:#fff;display:flex;justify-content: center;align-items: center;font-size:2rem'>
															+{{ $totalMedia - 2 }}
														</div>
														@endif
													</a>
													@endforeach
													@endif
												</div>

											</div>
											@endif



											<!-- views, like,dislike, comment, share -->
											<div class="we-video-info border-top my-3">
												<ul style="display: flex;align-items: center;">
													<li style="margin-right:15px">
														<span id="like-count-container-{{ $post->id }}" title="Likes" data-type="{{ $post->isLikedByCurrentUser() }}" data-post="{{ $post->id }}" data-clicked="false" class="mr-2 btn btn-sm d-inline font-weight-bold saveLikeDislike" style="border: 1px solid #c4c4c4;color: #c4c4c4;display:flex!important;align-items: center;">
															<i class="fa-regular fa-thumbs-up mr-2"></i>
															<span id="like-count-{{ $post->id }}">
																@php
																$count = $post->sumLikes()
																@endphp
	
																<x-format_number :number=$count />
															</span>
														</span>
													</li>
													<li>
														<span class="comment" data-toggle="tooltip" title="Comments">
															<i class="fa fa-comments-o"></i>
															<ins>
																@php
																$count = count($post->comments)
																@endphp
	
																<x-format_number :number=$count />
															</ins>
														</span>
													</li>
													<li class="social-media">
														@if(Auth::user()->user_id != $post->user_id_fk) 
														<x-share-btn>{{ $post->id }}</x-share-btn>
														@endif
													</li>
	
												</ul>
											</div>

										</div>
									</div>
									
									<div class="coment-area p-1 post-cmt post-cmt-{{ $post->id }}">
										<ul class="we-comet comment">
											<!-- hiện commment cho mỗi bình luận tại đây -->
											@php
											$count = 0;
											@endphp
											@foreach ($post->comments as $comment)
											@php
											$flag = $count >= 3 ? true : false;
											@endphp
											<x-comment :commenter=$comment :isHidden=$flag></x-comment>
											@php
											$count++;
											@endphp
											@endforeach

										</ul> <!-- list of comments-->
										<ul class="we-comet">
											<li>
												@php
												$count_of_cmt = count($post->comments);
												@endphp
												@if ($count_of_cmt > 3)
												<a title="" class="showmore underline btnshow-{{ $post->id }}">more
													comments</a>
												@endif
											</li>
											<li class="post-comment">
												<div class="d-flex">
													<div class="col-1">
														<div class="parent" style="width: 2rem; height: 2rem; border-radius: 50%;overflow:hidden">
															<x-user-avt>
															</x-user-avt>
														</div>
													</div>
													<div class="post-comt-box {{ $post->id }} col-11">
														<form method="post" action="comment" id="form-{{ $post->id }}" enctype="multipart/form-data">
															@csrf
															@method('POST')
															<input type="hidden" name="post_id" value="{{ $post->id }}">
															<textarea placeholder="Post your comment" name="content"></textarea>
														 
															<div class="attachments">
																<ul class="m-0 d-flex align-items-center">
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
																		<button type="submit" class="bg-dark btnComment" value={{ $post->id }}>Post</button>
																	</li>
																</ul>
															</div>
															{{-- <div class="smiles-bunch">
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
																		</div> --}}
														</form>
													</div>

											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						@endif
						@php
						if (isset($firstPost) && $firstPost == true) {
						$firstPost = false;
						}

						@endphp
						@endforeach
					</div>