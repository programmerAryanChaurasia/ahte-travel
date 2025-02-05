@extends('layouts.frontend.layout')


@section('style')


    <style>

.about-section{
	position:relative;
	/* padding:120px 0px; */
}

.about-section .content-column{
	position:relative;
	margin-bottom:40px;
}

.about-section .content-column .inner-column{
	position:relative;
	padding-top:50px;
	padding-right:100px;
}

/* .about-section .content-column .text{
	position:relative;
	color:#777777;
	font-size:15px;
	line-height:2em;
	margin-bottom:40px;
} */

.about-section .content-column .email{
	position:relative;
	color:#252525;
	font-weight:700;
	margin-bottom:50px;
}

.about-section .image-column{
	position:relative;
	margin-bottom:50px;
}

.about-section .image-column .inner-column{
	position:relative;
	padding:40px 40px 0px 0px;
	margin-left:50px;
}

.about-section .image-column .inner-column:after{
	position:absolute;
	content:'';
	right:0px;
	top:0px;
	left:40px;
	bottom:100px;
	z-index:-1;
	border:2px solid #d7a449;
}

.about-section .image-column .inner-column .image{
	position:relative;
}

.about-section .image-column .inner-column .image:before{
	position:absolute;
	content:'';
	left:-50px;
	bottom:-50px;
	width:299px;
	height:299px;
	background:url(img/pattern-2.png) no-repeat;
}

.about-section .image-column .inner-column .image img{
	position:relative;
	width:100%;
	display:block;
}

.about-section .image-column .inner-column .image .overlay-box{
	position:absolute;
	left:40px;
	bottom:48px;
}

.about-section .image-column .inner-column .image .overlay-box .year-box{
	position:relative;
	color:#252525;
	font-size:24px;
	font-weight:700;
	line-height:1.4em;
	padding-left:125px;
}

.about-section .image-column .inner-column .image .overlay-box .year-box .number{
	position:absolute;
	left:0px;
	top:0px;
	width:110px;
	height:110px;
	color:#d7a449;
	font-size:68px;
	font-weight:700;
	line-height:105px;
	text-align:center;
	background-color:#ffffff;
	border:1px solid #000000;
}
.about-section .btn-style-three:before {
    position: absolute;
    content: '';
    left: 10px;
    top: 10px;
    z-index: -1;
    right: -10px;
    bottom: -10px;
    background: url(https://i.ibb.co/DKn55Qz/pattern-1.jpg) repeat;
}
.about-section .btn-style-three:hover {
    color: #ffffff;
    background: #d7a449;
}
.about-section .btn-style-three {
    position: relative;
    line-height: 24px;
    color: #252525;
    font-size: 15px;
    font-weight: 700;
    background: none;
    display: inline-block;
    padding: 11px 40px;
    background-color: #ffffff;
    text-transform: capitalize;
    border: 2px solid #d7a449;
    font-family: 'Arimo', sans-serif;
}
.sec-title2{
	color:#fff;
}
.sec-title {
    position: relative;
    padding-bottom: 40px;
}
.sec-title .title {
    position: relative;
    color: #d7a449;
    font-size: 18px;
    font-weight: 700;
    padding-right: 50px;
    margin-bottom: 15px;
    display: inline-block;
    text-transform: capitalize;
}
.sec-title .title:before {
    position: absolute;
    content: '';
    right: 0px;
    bottom: 7px;
    width: 40px;
    height: 1px;
    background-color: #bbbbbb;
}
    </style>
   
@endsection

@section('content')
    <div class="">

        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-caption">
                            <h1 class="page-title">About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="about-section">
            <div class="container">
                <div class="row clearfix">

                    <!--Content Column-->
                    <div class="content-column col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <div class="title">About Company</div>
                                <h2>We Are The Leader In <br> The Interiores</h2>
                            </div>
                            <p><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio natus pariatur illo, laboriosam, sequi esse minus sapiente molestias odio similique delectus. Est quis excepturi ut eligendi, sint, quasi nostrum autem ea tempora deserunt qui tempore laborum recusandae ducimus omnis doloremque vero in quidem! Delectus soluta, voluptate vero voluptatibus totam perferendis, voluptates dolor sed magnam fugit molestiae dolorem consequatur odio possimus cupiditate sunt sit laudantium ab, id explicabo. Deserunt nesciunt exercitationem porro enim consequuntur ut laboriosam blanditiis, magni magnam quos eum totam earum officia aliquid aspernatur necessitatibus perferendis dolores reiciendis! Voluptatum maxime corrupti necessitatibus quod pariatur aperiam at veniam! Veniam, non!</small></p>
                            <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</div>
                            <div class="email">Request Quote: <span class="theme_color">freequote@gmail.com</span></div>
                            <a href="#" class="theme-btn btn-style-three">Read More</a>
                        </div>
                    </div>

                    <!--Image Column-->
                    <div class="image-column col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column " data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="https://i.ibb.co/vQbkKj7/about.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="year-box"><span class="number">5</span>Years <br> Experience <br> Working</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <!-- feature-section -->
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                    <div class="well-block">
                        <!-- feature-left -->
                        <div class="feature-left">
                            <div class="feature-icon"><img src="{{ asset('frontend/images/calendar.png') }}" alt=""></div>
                            <div class="feature-content">
                                <h4>Everything’s on Schedule</h4>
                                <p>Cras porttitor tortor erateget accumsan is feltumsit.</p>
                            </div>
                        </div>
                        <!-- /.feature-left -->
                        <!-- feature-left -->
                        <div class="feature-left">
                            <div class="feature-icon"><img src="{{ asset('frontend/images/adventure.png') }}" alt=""></div>
                            <div class="feature-content">
                                <h4>Destination Variety</h4>
                                <p>Pellentesque imperdiet esmpus finibusse euismunc.</p>
                            </div>
                        </div>
                        <!-- /.feature-left -->
                        <!-- feature-left -->
                        <div class="feature-left">
                            <div class="feature-icon"><img src="{{ asset('frontend/images/hotel.png') }}" alt=""></div>
                            <div class="feature-content">
                                <h4>Comfortable Housing</h4>
                                <p>Vestiulum sodales tempudin one erlctus iedate. </p>
                            </div>
                        </div>
                        <!-- /.feature-left -->
                    </div>
                </div>
                <!-- /.feature-section -->
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                    <div class="well-block">
                        <div class="counter-block">
                            <h1 class="counter-numbers">689+</h1>
                            <div class="counter-content">
                                <h4>Tours</h4>
                                <p>Cras porttitor tortor erateget taccumsan.</p>
                            </div>
                        </div>
                        <div class="counter-block">
                            <h1 class="counter-numbers">320+</h1>
                            <div class="counter-content">
                                <h4>Destinations</h4>
                                <p>Pellentesque luctus felisnon nib its consecteuis.</p>
                            </div>
                        </div>
                        <div class="counter-block">
                            <h1 class="counter-numbers">60+</h1>
                            <div class="counter-content">
                                <h4>Countries</h4>
                                <p>Sed gravida eleequenec fringilla dolonteger.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
@endsection

@section('js')

@endsection
