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

								<div class="contain d-flex justify-content-center">
									
								<div class="central-meta photo-tl">
								<div class="photos" style=" display: flex">
									@foreach($posts as $post)
									@foreach($post->image as $img)
										<div style="width: calc(100vw / 4 - 10px)!important;border-radius:10px; border: 1px solid #c4c4c4; height:calc(100vw / 4 - 10px) !important;overflow: hidden; display: block; margin: 10px 5px">
				
											<a href="{{asset('storage/images/'.$img->url)}}" data-fancybox="gallery" data-caption="Caption #1">
												<img src="{{ asset('storage/images/'.$img->url) }}" style="width:100%;height:100%;" />
											</a>
										</div>
										@endforeach
								@endforeach
										<!-- <li>
											<a class="strip" href="images/resources/photo-33.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo3.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-44.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo4.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-55.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo5.jpg" alt=""></a>
										</li>

										<li>
											<a class="strip" href="images/resources/photo-66.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo6.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-77.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo7.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-88.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo8.jpg" alt=""></a>
										</li>

										<li>
											<a class="strip" href="images/resources/photo-99.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo12.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-101.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo10.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-101.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo11.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-22.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo1.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-33.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo9.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-99.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo12.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-66.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo6.jpg" alt=""></a>
										</li>
										<li>
											<a class="strip" href="images/resources/photo-66.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												<img src="images/resources/photo13.jpg" alt=""></a>
										</li> -->
									</div>
									<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
								</div><!-- photos -->
								
								</div>

							</div><!-- centerl meta -->

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
 @endsection
