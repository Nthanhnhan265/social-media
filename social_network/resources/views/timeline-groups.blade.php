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
								<div class="groups">
									<span><i class="fa fa-users"></i> joined Groups</span>
								</div>
								<ul class="nearby-contct">
									<li>
										<div class="nearly-pepls">
											<figure>
												<a href="{{ url('time-line') }}" title=""><img src="images/resources/group1.jpg" alt=""></a>
											</figure>
											<div class="pepl-info">
												<h4><a href="{{ url('time-line') }}" title="">funparty</a></h4>
												<span>public group</span>
												<em>32k Members</em>
												<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
											</div>
										</div>
									</li>
									<li>
										<div class="nearly-pepls">
											<figure>
												<a href="{{ url('time-line') }}" title=""><img src="images/resources/group2.jpg" alt=""></a>
											</figure>
											<div class="pepl-info">
												<h4><a href="{{ url('time-line') }}" title="">ABC News</a></h4>
												<span>Private group</span>
												<em>5M Members</em>
												<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
											</div>
										</div>
									</li>
									<li>
										<div class="nearly-pepls">
											<figure>
												<a href="{{ url('time-line') }}" title=""><img src="images/resources/group3.jpg" alt=""></a>
											</figure>
											<div class="pepl-info">
												<h4><a href="{{ url('time-line') }}" title="">SEO Zone</a></h4>
												<span>Public group</span>
												<em>32k Members</em>
												<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
											</div>
										</div>
									</li>
									<li>
										<div class="nearly-pepls">
											<figure>
												<a href="{{ url('time-line') }}" title=""><img src="images/resources/group4.jpg" alt=""></a>
											</figure>
											<div class="pepl-info">
												<h4><a href="{{ url('time-line') }}" title="">Max Us</a></h4>
												<span>Public group</span>
												<em> 756 Members</em>
												<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
											</div>
										</div>
									</li>
									<li>
										<div class="nearly-pepls">
											<figure>
												<a href="{{ url('time-line') }}" title=""><img src="images/resources/group5.jpg" alt=""></a>
											</figure>
											<div class="pepl-info">
												<h4><a href="{{ url('time-line') }}" title="">Banana Group</a></h4>
												<span>Friends Group</span>
												<em>32k Members</em>
												<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
											</div>
										</div>
									</li>
									<li>
										<div class="nearly-pepls">
											<figure>
												<a href="{{ url('time-line') }}" title=""><img src="images/resources/group6.jpg" alt=""></a>
											</figure>
											<div class="pepl-info">
												<h4><a href="{{ url('time-line') }}" title="">Bad boys n Girls</a></h4>
												<span>Public group</span>
												<em>32k Members</em>
												<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
											</div>
										</div>
									</li>
									<li>
										<div class="nearly-pepls">
											<figure>
												<a href="{{ url('time-line') }}" title=""><img src="images/resources/group7.jpg" alt=""></a>
											</figure>
											<div class="pepl-info">
												<h4><a href="{{ url('time-line') }}" title="">Bachelor's fun</a></h4>
												<span>Public Group</span>
												<em>500 Members</em>
												<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
											</div>
										</div>
									</li>
									<li>
										<div class="nearly-pepls">
											<figure>
												<a href="{{ url('time-line') }}" title=""><img src="images/resources/group4.jpg" alt=""></a>
											</figure>
											<div class="pepl-info">
												<h4><a href="{{ url('time-line') }}" title="">Max Us</a></h4>
												<span>Public group</span>
												<em> 756 Members</em>
												<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
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

<figure>
	<img src="images/resources/friend-avatar6.jpg" alt="">
	<span class="status f-away"></span>
</figure>
<div class="friendz-meta">
	<a href="time-line">andrew</a>
	<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e882899b87868aa88f85898184c68b8785">[email&#160;protected]</a></i>
</div>
</li>
<li>

	<figure>
		<img src="images/resources/friend-avatar7.jpg" alt="">
		<span class="status f-off"></span>
	</figure>
	<div class="friendz-meta">
		<a href="time-line">amy watson</a>
		<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e58f84968a8b87a58288848c89cb868a88">[email&#160;protected]</a></i>
	</div>
</li>
<li>

	<figure>
		<img src="images/resources/friend-avatar5.jpg" alt="">
		<span class="status f-online"></span>
	</figure>
	<div class="friendz-meta">
		<a href="time-line">daniel warber</a>
		<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4b212a382425290b2c262a222765282426">[email&#160;protected]</a></i>
	</div>
</li>
<li>

	<figure>
		<img src="images/resources/friend-avatar2.jpg" alt="">
		<span class="status f-away"></span>
	</figure>
	<div class="friendz-meta">
		<a href="time-line">Sarah Loren</a>
		<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="97f5f6e5f9f2e4d7f0faf6fefbb9f4f8fa">[email&#160;protected]</a></i>
	</div>
</li>
</ul>
<div class="chat-box">
	<div class="chat-head">
		<span class="status f-online"></span>
		<h6>Bucky Barnes</h6>
		<div class="more">
			<span><i class="ti-more-alt"></i></span>
			<span class="close-mesage"><i class="ti-close"></i></span>
		</div>
	</div>
	<div class="chat-list">
		<ul>
			<li class="me">
				<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
				<div class="notification-event">
					<span class="chat-message-item">
						Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
					</span>
					<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
				</div>
			</li>
			<li class="you">
				<div class="chat-thumb"><img src="images/resources/chatlist2.jpg" alt=""></div>
				<div class="notification-event">
					<span class="chat-message-item">
						Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
					</span>
					<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
				</div>
			</li>
			<li class="me">
				<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
				<div class="notification-event">
					<span class="chat-message-item">
						Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
					</span>
					<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
				</div>
			</li>
		</ul>
		<form class="text-box">
			<textarea placeholder="Post enter to post..."></textarea>
			<div class="add-smiles">
				<span title="add icon" class="em em-expressionless"></span>
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
</div>
</div><!-- friends list sidebar -->

</aside>
</div><!-- sidebar -->
</div>
</div>
</div>
</div>
</div>
</section>
@endsection<!-- topbar -->