@extends('layouts.app')

@section('content')

{{-- top area uses component 'personal_nav' and pass 2 arguments,
	 (note: don't SPACE after attributes, ex: :user = $friend (error))
--}}
<!-- top area -->
<x-personal_nav :user=$user :friend=$friend></x-personal_nav>

	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">

							<div class="col-lg-12">
								<div class="central-meta">
									<ul class="photos">
									
									<div class="photos" style=" display: flex; flex-wrap: wrap; justify-content: center">
									@foreach($posts as $post)
									@foreach($post->video as $vid)
<div style="width: calc(100vw / 4 - 10px)!important; border-radius: 10px; border: 1px solid #c4c4c4; height: calc(100vw / 4 - 10px) !important; overflow: hidden; display: block; margin: 10px 5px;">
    <video width="100%" height="100%" controls>
        <source src="{{ asset('storage/videos/' . $vid->url) }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
@endforeach

									@endforeach
										<!-- <li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="images/resources/photo2.jpg" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
													  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
														C97.3,23.7,75.7,2.3,49.9,2.5"/>
													  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
														</svg>
													</i>
												</a>
											</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="images/resources/photo3.jpg" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="images/resources/photo4.jpg" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="images/resources/photo5.jpg" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="images/resources/photo6.jpg" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
													  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
														C97.3,23.7,75.7,2.3,49.9,2.5"/>
													  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
														</svg>
													</i>
												</a>
											</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="images/resources/photo7.jpg" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="images/resources/photo8.jpg" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="images/resources/photo9.jpg" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="images/resources/photo10.jpg" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="images/resources/photo11.jpg" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="images/resources/photo12.jpg" alt="">
												<i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
											</a>
										</li> -->
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
