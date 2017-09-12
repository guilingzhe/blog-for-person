	@extends('layout/main')
	@section('title')
	<title>Evolving Home Page</title>
	@endsection

	@section('content')

	<!-- CAROUSEL -->
	<div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel" data-interval="4000">
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="{{url('/images/banner3.jpg')}}" alt="...">
				<!-- Static Header -->
				<div class="container">
				<div class="header-text hidden-xs">
					<div class="col-md-12 text-center">
						<h1>focus</h1>
						<hr>
						<p>学无止境</p>
					</div>
				</div><!-- /header-text -->
				</div>
			</div>
			<div class="item">
				<img src="{{url('/images/banner4.jpg')}}" alt="...">
				<!-- Static Header -->
				<div class="header-text hidden-xs">
					<div class="col-md-12 text-center">
						<h1>notes</h1>
						<hr>
						<p>上线个人笔记</p>
						<a href="" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
					</div>
				</div><!-- /header-text -->
			</div>
			
		</div>
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div> <!-- Carousel -->
	
	<header class="container">
		<div class="site-branding">
			<h1 class="site-title">
				<a href="index.html">
					<span>最新文章</span>
				</a>
			</h1>
		</div>
		<div class="social-links">
			<ul class="list-inline">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
				<li><a href="#"><i class="fa fa-rss"></i></a></li>
			</ul>
		</div>
	</header>
	
	@section('page-script')

	<div id="page-content">
	
		<!-- ////////////Content Box 01 -->
		<section class="box-content box-1">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="box-item">
							<img src="images/13.jpg" class="img-responsive"/>
							<div class="content">
								<h3>面向对象小结</h3>
								<p>1.类的封装性：禁止某些方法、属性，不允许外部调用，并开放部分方法，来间接调用，。protected 保护一个属性或方法；
                                    2.类的继承性：子类可以继承父类的属性及方法，并允许覆盖父类的方法或新增方法，通过进化来获得新的特性，同时不影响旧物种；
                                    class a extends b{};
                                    php是单继承的；子类只能继承一个父类；
                                    final类和final方法；final类不能被继承，final方法不能被子类重写（可以调用）；通过子类声明的子类方法调用父类对象...........

                                </p>
								<a href="single.html">Read More...</a>
								<br><br>
								<span>MAY 21, 2014 BY VAFPRESS</span><br>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-item">
							<img src="images/3.jpg" class="img-responsive"/>
							<div class="content">
								<h3>cookie和session</h3>
								<p>http是无状态的协议，客户每次读取web页面时，服务器都打开新的会话，而且服务器也不会自动维护客户的上下文信息，那么要怎么才能实现网上商店中的 购物车呢，session就是一种保存上下文信息的机制，
                                    它是针对每一个用户的，变量的值保存在服务器端，通过SessionID来区分不同的客 户,
                                    session是以cookie或URL重写为基础的，默认使用cookie来实现，
                                    系统会创造一个名为JSESSIONID的输出cookie，我 们叫做session cookie,以区别persistent cookies,
                                    也就是我们通常所说的cookie,注意session cookie是存储于浏览器内存中的，并不是写到硬盘上的.........

                                </p>
								<a href="single.html">Read More...</a>
								<br><br>
								<span>MAY 21, 2014 BY VAFPRESS</span><br>
							</div>
						</div>


					</div>
					<div class="col-md-4">
						<div class="box-item">
							<img src="images/5.jpg" class="img-responsive"/>
							<div class="content">
								<h3>关于LAMP,你可能掌握的还不够好</h3>
								<p>Apache（全称Apache HTTP Server）：是世界使用排名第一的Web服务器软件。可以在大多数计算机操作系统中运行，由于其多平台和安全性被广泛使用，是最流行的Web服务器端软件之一。它快速、可靠并且可通过简单的API扩展，将Perl/Python等解释器编译到服务器中。

                                    MySQL：MySQL数据库系统使用最常用的数据库管理语言--结构化查询语言（SQL）进行数据库管理。（嗯，简单点说就是放东西的地方）

                                    PHP：脚本语言的一种。

                                    几乎初学PHP的小伙伴总会在入门教程里看到这三个单词，网上的解释也很详细。但是就是因为其中太详细太专业的术语让还谈不上入门的小伙伴发懵。所以这里我就用通俗易懂的方式让大家来了解这几样东西。^_^
                                    打个比方：我是一名作家。
                                    现实生活中人们阅读的书籍几乎来自同一个地方：出版社。没错，我给出版社投稿，出版社通过校验，排版，最终是我的作品变成书本出版发行，让其出现在社会上供人们阅读了解。
                                </p>
								<a href="single.html">Read More...</a>
								<br><br>
								<span>MAY 21, 2014 BY VAFPRESS</span><br>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
	</div>
	
	<!-- FOOTER -->
	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row"> 
					<div class="col-footer col-md-3">
						<h2 class="footer-title">关于我们</h2>
						<div class="textwidget">
                           Curabitur tincidunt porta lorem vitae accumsan. <br> <br>
						ac interdum magna porta non. Pellentesque rutrum fringilla elementum.</div>
					</div> 
					<div class="col-footer col-md-3 widget_recent_entries">
						<h2 class="footer-title">Recent Posts</h2>
						<ul>
							<li><a href="#">从这里开始</a></li>
							<li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
						</ul>
					</div>
					<div class="col-footer col-md-3">
						<h2 class="footer-title">标签</h2>
						<div class="footer-tags">
							<a href="#">PHP基础笔记</a>
							<a href="#">MySQL</a>
							<a href="#">think PHP</a>
							<a href="#">laravel</a>
							<a href="#">面向对象</a>
							<a href="#">Linux</a>
							<a href="#">杂记</a>
							<a href="#">琐事</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p>Copyright &copy; 2017.Evolving All rights reserved.
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
  
	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<!-- Custom Theme JavaScript -->
	<script src="js/agency.js"></script>

	<!-- Plugin JavaScript -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/cbpAnimatedHeader.js"></script>
	
</body>
</html>
@endsection