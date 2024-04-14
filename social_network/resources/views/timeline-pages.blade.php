@extends('layouts.app')

    @section('content')
	<section>
			<div class="feature-photo">
				<figure><img src="images/resources/timeline-1.jpg" alt=""></figure>
				<div class="add-btn">
					<span>1205 followers</span>
					<a href="#" title="" data-ripple="">Add Friend</a>
				</div>
				<form class="edit-phto">
					<i class="fa fa-camera-retro"></i>
					<label class="fileContainer">
						Edit Cover Photo
					<input type="file"/>
					</label>
				</form>
				<div class="container-fluid">
					<div class="row merged">
						<div class="col-lg-2 col-sm-3">
							<div class="user-avatar">
								<figure>
									<img src="images/resources/user-avatar.jpg" alt="">
									<form class="edit-phto">
										<i class="fa fa-camera-retro"></i>
										<label class="fileContainer">
											Edit Display Photo
											<input type="file"/>
										</label>
									</form>
								</figure>
							</div>
						</div>
						<div class="col-lg-10 col-sm-9">
							<div class="timeline-info">
								<ul>
									<li class="admin-name">
									  <h5>Janice Griffith</h5>
									  <span>Group Admin</span>
									</li>
									<li>
										<a class="active" href="{{ url('time-line') }}" title="" data-ripple="">time line</a>
										<a class="" href="timeline-photos" title="" data-ripple="">Photos</a>
										<a class="" href="timeline-videos" title="" data-ripple="">Videos</a>
										<a class="" href="timeline-friends" title="" data-ripple="">Friends</a>
										<a class="" href="groups" title="" data-ripple="">Groups</a>
										<a class="" href="about" title="" data-ripple="">about</a>
										<a class="" href="#" title="" data-ripple="">more</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- top area -->

	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">

							<div class="col-lg-12">
								<div class="central-meta">
									<div class="groups">
										<span><i class="fa fa-file-text-o"></i> Your Liked Pages</span>
									</div>
									<ul class="liked-pages">
										<li>
											<div class="f-page">
												<figure>
													<a href="#" title=""><img src="images/resources/page1.jpg" alt=""></a>
													<div class="dropdown pgs">
														<button class="btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ti-check"></i>liked
														  </button>
														  <div class="dropdown-menu" aria-labelledby="dropdownMenu">
															<button class="dropdown-item" type="button">Dislike</button>
														  </div>
													</div>
													<em>1039 likes</em>
												</figure>
												<div class="page-infos">
													<h5><a href="#" title="">Romantic couples</a></h5>
													<span><a href="#" title="">Love</a></span>
												</div>
											</div>
										</li>
										<li>
											<div class="f-page">
												<figure>
													<a href="#" title=""><img src="images/resources/page2.jpg" alt=""></a>
													<div class="dropdown pgs">
														<button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ti-check"></i>liked
														  </button>
														  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
															<button class="dropdown-item" type="button">Dislike</button>
														  </div>
													</div>
													<em>103K likes</em>
												</figure>
												<div class="page-infos">
													<h5><a href="#" title="">Factory shop</a></h5>
													<span><a href="#" title="">Business & finance</a></span>
												</div>
											</div>
										</li>
										<li>
											<div class="f-page">
												<figure>
													<a href="#" title=""><img src="images/resources/page3.jpg" alt=""></a>
													<div class="dropdown pgs">
														<button class="btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ti-check"></i>liked
														  </button>
														  <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
															<button class="dropdown-item" type="button">Dislike</button>
														  </div>
													</div>
													<em>1.4k likes</em>
												</figure>
												<div class="page-infos">
													<h5><a href="#" title="">Euro grils</a></h5>
													<span><a href="#" title="">Fun</a></span>
												</div>
											</div>
										</li>
										<li>
											<div class="f-page">
												<figure>
													<a href="#" title=""><img src="images/resources/page4.jpg" alt=""></a>
													<div class="dropdown pgs">
														<button class="btn dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ti-check"></i>liked
														  </button>
														  <div class="dropdown-menu" aria-labelledby="dropdownMenu4">
															<button class="dropdown-item" type="button">Dislike</button>
														  </div>
													</div>
													<em>1039 likes</em>
												</figure>
												<div class="page-infos">
													<h5><a href="#" title="">Dreamers</a></h5>
													<span><a href="#" title="">Public figure</a></span>
												</div>
											</div>
										</li>
										<li>
											<div class="f-page">
												<figure>
													<a href="#" title=""><img src="images/resources/page5.jpg" alt=""></a>
													<div class="dropdown pgs">
														<button class="btn dropdown-toggle" type="button" id="dropdownMenu5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ti-check"></i>liked
														  </button>
														  <div class="dropdown-menu" aria-labelledby="dropdownMenu5">
															<button class="dropdown-item" type="button">Dislike</button>
														  </div>
													</div>
													<em>139 likes</em>
												</figure>
												<div class="page-infos">
													<h5><a href="#" title="">Lonely Girl</a></h5>
													<span><a href="#" title="">Public & friends</a></span>
												</div>
											</div>
										</li>
										<li>
											<div class="f-page">
												<figure>
													<a href="#" title=""><img src="images/resources/page6.jpg" alt=""></a>
													<div class="dropdown pgs">
														<button class="btn dropdown-toggle" type="button" id="dropdownMenu6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ti-check"></i>liked
														  </button>
														  <div class="dropdown-menu" aria-labelledby="dropdownMenu6">
															<button class="dropdown-item" type="button">Dislike</button>
														  </div>
													</div>
													<em>13M likes</em>
												</figure>
												<div class="page-infos">
													<h5><a href="#" title="">Art School</a></h5>
													<span><a href="#" title="">Art & Entertainment</a></span>
												</div>
											</div>
										</li>
										<li>
											<div class="f-page">
												<figure>
													<a href="#" title=""><img src="images/resources/page7.jpg" alt=""></a>
													<div class="dropdown pgs">
														<button class="btn dropdown-toggle" type="button" id="dropdownMenu7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ti-check"></i>liked
														  </button>
														  <div class="dropdown-menu" aria-labelledby="dropdownMenu7">
															<button class="dropdown-item" type="button">Dislike</button>
														  </div>
													</div>
													<em>13M likes</em>
												</figure>
												<div class="page-infos">
													<h5><a href="#" title="">Baby Care</a></h5>
													<span><a href="#" title="">Family & personal</a></span>
												</div>
											</div>
										</li>
										<li>
											<div class="f-page">
												<figure>
													<a href="#" title=""><img src="images/resources/page8.jpg" alt=""></a>
													<div class="dropdown pgs">
														<button class="btn dropdown-toggle" type="button" id="dropdownMenu8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ti-check"></i>liked
														  </button>
														  <div class="dropdown-menu" aria-labelledby="dropdownMenu8">
															<button class="dropdown-item" type="button">Dislike</button>
														  </div>
													</div>
													<em>13M likes</em>
												</figure>
												<div class="page-infos">
													<h5><a href="#" title="">My city lovers</a></h5>
													<span><a href="#" title="">Travel & tour</a></span>
												</div>
											</div>
										</li>
										<li>
											<div class="f-page">
												<figure>
													<a href="#" title=""><img src="images/resources/page4.jpg" alt=""></a>
													<div class="dropdown pgs">
														<button class="btn dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ti-check"></i>liked
														  </button>
														  <div class="dropdown-menu" aria-labelledby="dropdownMenu4">
															<button class="dropdown-item" type="button">Dislike</button>
														  </div>
													</div>
													<em>1039 likes</em>
												</figure>
												<div class="page-infos">
													<h5><a href="#" title="">School Girls</a></h5>
													<span><a href="#" title="">Public figure</a></span>
												</div>
											</div>
										</li>
									</ul>
									<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
								</div><!-- photos -->
							</div><!-- centerl meta -->

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    @endsection
