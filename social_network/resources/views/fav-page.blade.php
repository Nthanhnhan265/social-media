@extends('/layouts.app')
@section('content')
    <section>
        <div class="feature-photo">
            <figure><img src="images/resources/timeline-4.jpg" alt=""></figure>
            <div class="add-btn">
                <span>1.3k followers</span>
                <a href="#" title="" data-ripple="">Add button</a>
            </div>
            <form class="edit-phto">
                <i class="fa fa-camera-retro"></i>
                <label class="fileContainer">
                    Edit Cover Photo
                    <input type="file" />
                </label>
            </form>
            <div class="container-fluid">
                <div class="row merged">
                    <div class="col-lg-2 col-sm-3">
                        <div class="user-avatar">
                            <figure>
                                <img src="images/resources/user-avatar2.jpg" alt="">
                                <form class="edit-phto">
                                    <i class="fa fa-camera-retro"></i>
                                    <label class="fileContainer">
                                        Edit Display Photo
                                        <input type="file" />
                                    </label>
                                </form>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-10 col-sm-9">
                        <div class="timeline-info">
                            <ul>
                                <li class="admin-name">
                                    <h5>Amazon Shop</h5>
                                    <span>@amazonshop</span>
                                </li>
                                <li>
                                    <a class="active" href="{{ url('fav-page') }}" title="" data-ripple="">Page</a>
                                    <a class="" href="{{ url('notifications') }}" title=""
                                        data-ripple="">Notifications</a>
                                    <a class="" href="{{ url('inbox') }}" title="" data-ripple="">inbox</a>
                                    <a class="" href="{{ url('insights') }}" title=""
                                        data-ripple="">insights</a>
                                    <a class="" href="{{ url('fav-page') }}" title="" data-ripple="">posts</a>
                                    <a class="" href="{{ url('page-likers') }}" title=""
                                        data-ripple="">likers</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="gap gray-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row" id="page-contents">
                            <div class="col-lg-3">
                                <aside class="sidebar static">
                                    <div class="widget">
                                        <h4 class="widget-title">Shortcuts</h4>
                                        <ul class="naves">
                                            <li>
                                                <i class="ti-clipboard"></i>
                                                <a href="{{ url('newsfeed') }}" title="">News feed</a>
                                            </li>
                                            <li>
                                                <i class="ti-mouse-alt"></i>
                                                <a href="{{ url('inbox') }}" title="">Inbox</a>
                                            </li>
                                            <li>
                                                <i class="ti-files"></i>
                                                <a href="{{ url('fav-page') }}" title="">My pages</a>
                                            </li>
                                            <li>
                                                <i class="ti-user"></i>
                                                <a href="{{ url('timeline-friends') }}" title="">friends</a>
                                            </li>
                                            <li>
                                                <i class="ti-image"></i>
                                                <a href="{{ url('timeline-photos') }}" title="">images</a>
                                            </li>
                                            <li>
                                                <i class="ti-video-camera"></i>
                                                <a href="{{ url('timeline-videos') }}" title="">videos</a>
                                            </li>
                                            <li>
                                                <i class="ti-bell"></i>
                                                <a href="{{ url('notifications') }}" title="">Notifications</a>
                                            </li>
                                        </ul>
                                    </div><!-- Shortcuts -->
                                    <div class="widget">
                                        <h4 class="widget-title">Recent Activity</h4>
                                        <ul class="activitiez">
                                            <li>
                                                <div class="activity-meta">
                                                    <i>10 hours Ago</i>
                                                    <span><a href="#" title="">Commented on Video posted
                                                        </a></span>
                                                    <h6>by <a href="{{ url('time-line') }}">black demon.</a></h6>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="activity-meta">
                                                    <i>30 Days Ago</i>
                                                    <span><a href="#" title="">Posted your status. “Hello guys,
                                                            how are you?”</a></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="activity-meta">
                                                    <i>2 Years Ago</i>
                                                    <span><a href="#" title="">Share a video on her
                                                            timeline.</a></span>
                                                    <h6>"<a href="#">you are so funny mr.been.</a>"</h6>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- recent activites -->
                                    <div class="widget stick-widget">
                                        <h4 class="widget-title">Who's follownig</h4>
                                        <ul class="followers">
                                            <li>
                                                <figure><img src="images/resources/friend-avatar2.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="{{ url('time-line') }}" title="">Kelly Bill</a>
                                                    </h4>
                                                    <a href="#" title="" class="underline">Add Friend</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar4.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="{{ url('time-line') }}" title="">Issabel</a></h4>
                                                    <a href="#" title="" class="underline">Add Friend</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar6.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="{{ url('time-line') }}" title="">Andrew</a></h4>
                                                    <a href="#" title="" class="underline">Add Friend</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar8.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="{{ url('time-line') }}" title="">Sophia</a></h4>
                                                    <a href="#" title="" class="underline">Add Friend</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar3.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="{{ url('time-line') }}" title="">Allen</a></h4>
                                                    <a href="#" title="" class="underline">Add Friend</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- who's following -->
                                </aside>
                            </div><!-- sidebar -->
                            <div class="col-lg-6">
                                <div class="central-meta">
                                    <div class="new-postbox">
                                        <figure>
                                            <img src="images/resources/admin3.jpg" alt="">
                                        </figure>
                                        <div class="newpst-input">
                                            <form method="post">
                                                <textarea rows="3" placeholder="write something"></textarea>
                                                <div class="attachments">
                                                    <ul>
                                                        <li>
                                                            <i class="fa fa-music"></i>
                                                            <label class="fileContainer">
                                                                <input type="file">
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-image"></i>
                                                            <label class="fileContainer">
                                                                <input type="file">
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-video-camera"></i>
                                                            <label class="fileContainer">
                                                                <input type="file">
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-camera"></i>
                                                            <label class="fileContainer">
                                                                <input type="file">
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <button type="submit">Publish</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- add post new box -->
                                <div class="loadMore">
                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img src="images/resources/friend-avatar11.jpg" alt="">
                                                </figure>
                                                <div class="friend-name">
                                                    <ins><a href="{{ url('time-line') }}" title="">Natti
                                                            Natasha</a></ins>
                                                    <span>published: june,2 2018 19:PM</span>
                                                </div>
                                                <div class="post-meta">
                                                    <img src="images/resources/user-post6.jpg" alt="">
                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
                                                                <span class="views" data-toggle="tooltip"
                                                                    title="views">
                                                                    <i class="fa fa-eye"></i>
                                                                    <ins>1.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="comment" data-toggle="tooltip"
                                                                    title="Comments">
                                                                    <i class="fa fa-comments-o"></i>
                                                                    <ins>52</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="like" data-toggle="tooltip"
                                                                    title="like">
                                                                    <i class="ti-heart"></i>
                                                                    <ins>2.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="dislike" data-toggle="tooltip"
                                                                    title="dislike">
                                                                    <i class="ti-heart-broken"></i>
                                                                    <ins>200</ins>
                                                                </span>
                                                            </li>
                                                            <li class="social-media">
                                                                <x-share-btn />
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="description">
                                                        <span>beautiful lamp on discount 50%</span>
                                                        <p>
                                                            Amazon <a href="#" title="">#amazonee</a> the most
                                                            beatuiful lamp available in america and the saudia arabia, you
                                                            can purchase for the home and shop for increase the room beauty
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
                                                                <h5><a href="{{ url('time-line') }}"
                                                                        title="">Donald Trump</a></h5>
                                                                <span>1 week ago</span>
                                                                <a class="we-reply" href="#" title="Reply"><i
                                                                        class="fa fa-reply"></i></a>
                                                            </div>
                                                            <p>we are working for the dance and sing songs. this video is
                                                                very awesome for the youngster. please vote this video and
                                                                like our channel
                                                                <i class="em em-smiley"></i>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="comet-avatar">
                                                            <img src="images/resources/comet-3.jpg" alt="">
                                                        </div>
                                                        <div class="we-comment">
                                                            <div class="coment-head">
                                                                <h5><a href="{{ url('time-line') }}" title="">Jason
                                                                        borne</a></h5>
                                                                <span>1 year ago</span>
                                                                <a class="we-reply" href="#" title="Reply"><i
                                                                        class="fa fa-reply"></i></a>
                                                            </div>
                                                            <p>we are working for the dance and sing songs. this car is very
                                                                awesome for the youngster. please vote this car and like our
                                                                post</p>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <div class="comet-avatar">
                                                                    <img src="images/resources/comet-2.jpg"
                                                                        alt="">
                                                                </div>
                                                                <div class="we-comment">
                                                                    <div class="coment-head">
                                                                        <h5><a href="{{ url('time-line') }}"
                                                                                title="">alexendra dadrio</a></h5>
                                                                        <span>1 month ago</span>
                                                                        <a class="we-reply" href="#"
                                                                            title="Reply"><i class="fa fa-reply"></i></a>
                                                                    </div>
                                                                    <p>yes, really very awesome car i see the features of
                                                                        this car in the official website of <a
                                                                            href="#"
                                                                            title="">#Mercedes-Benz</a> and really
                                                                        impressed :-)</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="comet-avatar">
                                                                    <img src="images/resources/comet-3.jpg"
                                                                        alt="">
                                                                </div>
                                                                <div class="we-comment">
                                                                    <div class="coment-head">
                                                                        <h5><a href="{{ url('time-line') }}"
                                                                                title="">Olivia</a></h5>
                                                                        <span>16 days ago</span>
                                                                        <a class="we-reply" href="#"
                                                                            title="Reply"><i class="fa fa-reply"></i></a>
                                                                    </div>
                                                                    <p>i like lexus cars, lexus cars are most beautiful with
                                                                        the awesome features, but this car is really
                                                                        outstanding than lexus</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="" class="showmore underline">more
                                                            comments</a>
                                                    </li>
                                                    <li class="post-comment">
                                                        <div class="comet-avatar">
                                                            <img src="images/resources/comet-4.jpg" alt="">
                                                        </div>
                                                        <div class="post-comt-box">
                                                            <form method="post">
                                                                <textarea placeholder="Post your comment"></textarea>
                                                                <div class="add-smiles">
                                                                    <span class="em em-expressionless"
                                                                        title="add icon"></span>
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
                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img src="images/resources/friend-avatar11.jpg" alt="">
                                                </figure>
                                                <div class="friend-name">
                                                    <ins><a href="{{ url('time-line') }}" title="">Sarah
                                                            grey</a></ins>
                                                    <span>published: june,2 2018 19:PM</span>
                                                </div>
                                                <div class="post-meta">
                                                    <img src="images/resources/user-post7.jpg" alt="">
                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
                                                                <span class="views" data-toggle="tooltip"
                                                                    title="views">
                                                                    <i class="fa fa-eye"></i>
                                                                    <ins>1.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="comment" data-toggle="tooltip"
                                                                    title="Comments">
                                                                    <i class="fa fa-comments-o"></i>
                                                                    <ins>52</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="like" data-toggle="tooltip"
                                                                    title="like">
                                                                    <i class="ti-heart"></i>
                                                                    <ins>2.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="dislike" data-toggle="tooltip"
                                                                    title="dislike">
                                                                    <i class="ti-heart-broken"></i>
                                                                    <ins>200</ins>
                                                                </span>
                                                            </li>
                                                            <li class="social-media">
                                                                <x-share-btn />
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="description">
                                                        <span>Leather bag 70% discount in Summer</span>
                                                        <p>
                                                            Curabitur <a href="#" title="">#amazon_shop</a>
                                                            ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                                                            Maecenas tempus, tellus eget condimentum rhoncus, sem quam
                                                            semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam
                                                            nunc,
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
                                                                <h5><a href="{{ url('time-line') }}" title="">Jason
                                                                        borne</a></h5>
                                                                <span>1 year ago</span>
                                                                <a class="we-reply" href="#" title="Reply"><i
                                                                        class="fa fa-reply"></i></a>
                                                            </div>
                                                            <p>we are working for the dance and sing songs. this video is
                                                                very awesome for the youngster. please vote this video and
                                                                like our channel</p>
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <div class="comet-avatar">
                                                            <img src="images/resources/comet-2.jpg" alt="">
                                                        </div>
                                                        <div class="we-comment">
                                                            <div class="coment-head">
                                                                <h5><a href="{{ url('time-line') }}"
                                                                        title="">Sophia</a></h5>
                                                                <span>1 week ago</span>
                                                                <a class="we-reply" href="#" title="Reply"><i
                                                                        class="fa fa-reply"></i></a>
                                                            </div>
                                                            <p>we are working for the dance and sing songs. this video is
                                                                very awesome for the youngster.
                                                                <i class="em em-smiley"></i>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="showmore underline">more
                                                            comments</a>
                                                    </li>
                                                    <li class="post-comment">
                                                        <div class="comet-avatar">
                                                            <img src="images/resources/comet-4.jpg" alt="">
                                                        </div>
                                                        <div class="post-comt-box">
                                                            <form method="post">
                                                                <textarea placeholder="Post your comment"></textarea>
                                                                <div class="add-smiles">
                                                                    <span class="em em-expressionless"
                                                                        title="add icon"></span>
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
                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img src="images/resources/friend-avatar10.jpg" alt="">
                                                </figure>
                                                <div class="friend-name">
                                                    <ins><a href="{{ url('time-line') }}" title="">Janice
                                                            Griffith</a></ins>
                                                    <span>published: june,2 2018 19:PM</span>
                                                </div>
                                                <div class="description">

                                                    <p>
                                                        Curabitur World's most beautiful car in <a href="#"
                                                            title="">#test drive booking !</a> the most beatuiful car
                                                        available in america and the saudia arabia, you can book your test
                                                        drive by our official website
                                                    </p>
                                                </div>
                                                <div class="post-meta">
                                                    <div class="linked-image align-left">
                                                        <a href="#" title=""><img
                                                                src="images/resources/page1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="detail">
                                                        <span>Love Maid - ChillGroves</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                        </p>
                                                        <a href="#" title="">www.sample.com</a>
                                                    </div>
                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
                                                                <span class="views" data-toggle="tooltip"
                                                                    title="views">
                                                                    <i class="fa fa-eye"></i>
                                                                    <ins>1.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="comment" data-toggle="tooltip"
                                                                    title="Comments">
                                                                    <i class="fa fa-comments-o"></i>
                                                                    <ins>52</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="like" data-toggle="tooltip"
                                                                    title="like">
                                                                    <i class="ti-heart"></i>
                                                                    <ins>2.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="dislike" data-toggle="tooltip"
                                                                    title="dislike">
                                                                    <i class="ti-heart-broken"></i>
                                                                    <ins>200</ins>
                                                                </span>
                                                            </li>
                                                            <li class="social-media">
                                                                <x-share-btn />
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img src="images/resources/friend-avatar10.jpg" alt="">
                                                </figure>
                                                <div class="friend-name">
                                                    <ins><a href="{{ url('time-line') }}" title="">Janice
                                                            Griffith</a></ins>
                                                    <span>published: june,2 2018 19:PM</span>
                                                </div>
                                                <div class="post-meta">
                                                    <iframe src="https://player.vimeo.com/video/15232052" height="315"
                                                        webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
                                                                <span class="views" data-toggle="tooltip"
                                                                    title="views">
                                                                    <i class="fa fa-eye"></i>
                                                                    <ins>1.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="comment" data-toggle="tooltip"
                                                                    title="Comments">
                                                                    <i class="fa fa-comments-o"></i>
                                                                    <ins>52</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="like" data-toggle="tooltip"
                                                                    title="like">
                                                                    <i class="ti-heart"></i>
                                                                    <ins>2.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="dislike" data-toggle="tooltip"
                                                                    title="dislike">
                                                                    <i class="ti-heart-broken"></i>
                                                                    <ins>200</ins>
                                                                </span>
                                                            </li>
                                                            <li class="social-media">
                                                                <x-share-btn />
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="description">
                                                        <span>Lonely Cat Enjoying in Summer</span>
                                                        <p>
                                                            Curabitur <a href="#" title="">#mypage</a>
                                                            ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                                                            Maecenas tempus, tellus eget condimentum rhoncus, sem quam
                                                            semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam
                                                            nunc,
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
                                                                <h5><a href="{{ url('time-line') }}" title="">Jason
                                                                        borne</a></h5>
                                                                <span>1 year ago</span>
                                                                <a class="we-reply" href="#" title="Reply"><i
                                                                        class="fa fa-reply"></i></a>
                                                            </div>
                                                            <p>we are working for the dance and sing songs. this video is
                                                                very awesome for the youngster. please vote this video and
                                                                like our channel</p>
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <div class="comet-avatar">
                                                            <img src="images/resources/comet-2.jpg" alt="">
                                                        </div>
                                                        <div class="we-comment">
                                                            <div class="coment-head">
                                                                <h5><a href="{{ url('time-line') }}"
                                                                        title="">Sophia</a></h5>
                                                                <span>1 week ago</span>
                                                                <a class="we-reply" href="#" title="Reply"><i
                                                                        class="fa fa-reply"></i></a>
                                                            </div>
                                                            <p>we are working for the dance and sing songs. this video is
                                                                very awesome for the youngster.
                                                                <i class="em em-smiley"></i>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="showmore underline">more
                                                            comments</a>
                                                    </li>
                                                    <li class="post-comment">
                                                        <div class="comet-avatar">
                                                            <img src="images/resources/comet-2.jpg" alt="">
                                                        </div>
                                                        <div class="post-comt-box">
                                                            <form method="post">
                                                                <textarea placeholder="Post your comment"></textarea>
                                                                <div class="add-smiles">
                                                                    <span class="em em-expressionless"
                                                                        title="add icon"></span>
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
                                </div>
                            </div><!-- centerl meta -->
                            <div class="col-lg-3">
                                <aside class="sidebar static">
                                    <div class="advertisment-box">
                                        <h4 class="">advertisment</h4>
                                        <figure>
                                            <a href="#" title="Advertisment"><img
                                                    src="images/resources/ad-widget.jpg" alt=""></a>
                                        </figure>
                                    </div>
                                    <div class="widget">
                                        <h4 class="widget-title">Invite friends</h4>
                                        <ul class="invition">
                                            <li>
                                                <figure><img src="images/resources/friend-avatar8.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="{{ url('time-line') }}" class="underline"
                                                            title="">Sophia hayat</a></h4>
                                                    <a href="#" title="" class="invite"
                                                        data-ripple="">invite</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar4.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="{{ url('time-line') }}" class="underline"
                                                            title="">Issabel kaif</a></h4>
                                                    <a href="#" title="" class="invite"
                                                        data-ripple="">invite</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar2.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="{{ url('time-line') }}" class="underline"
                                                            title="">Kelly Bill</a></h4>
                                                    <a href="#" title="" class="invite"
                                                        data-ripple="">invite</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar3.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="{{ url('time-line') }}" class="underline"
                                                            title="">Allen jhon</a></h4>
                                                    <a href="#" title="" class="invite"
                                                        data-ripple="">invite</a>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar6.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="{{ url('time-line') }}" class="underline"
                                                            title="">tom Andrew</a></h4>
                                                    <a href="#" title="" class="invite"
                                                        data-ripple="">invite</a>
                                                </div>
                                            </li>

                                            <li>
                                                <figure><img src="images/resources/friend-avatar3.jpg" alt="">
                                                </figure>
                                                <div class="friend-meta">
                                                    <h4><a href="{{ url('time-line') }}" title=""
                                                            class="underline">Allen doe</a></h4>
                                                    <a href="#" title="" class="invite"
                                                        data-ripple="">invite</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- invite for page  -->

                                </aside>
                            </div><!-- sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
