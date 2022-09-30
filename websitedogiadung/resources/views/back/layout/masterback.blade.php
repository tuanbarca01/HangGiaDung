<!DOCTYPE html>
<html>
<head>
    <base href="{{asset('/')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="back/css/bootstrap.min.css" rel="stylesheet">
    <link href="back/css/datepicker3.css" rel="stylesheet">
    <link href="back/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="front/fontawesome-free-6.0.0-beta2-web/css/fontawesome.css">
    <link rel="stylesheet" href="front/fontawesome-free-6.0.0-beta2-web/css/brands.css">
    <link rel="stylesheet" href="front/fontawesome-free-6.0.0-beta2-web/css/solid.css">
    <script type="text/javascript" src="back/ckeditor/ckeditor.js"></script>
    <script src="back/js/lumino.glyphs.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{asset('admin/home')}}">Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{Auth::user()->email}} <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
    <li><a href="{{asset('logout')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
</ul>
</li>
</ul>
</div>

</div><!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li role="presentation" class="divider"></li>
        <li class="active"><a href="{{asset('admin/home')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
        <li><a href="{{asset('admin/product')}}"><i class="fab fa-dropbox" style="margin-right: 14px"></i> Sản phẩm</a></li>
        <li><a href="{{asset('admin/category')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Danh mục</a></li>
        <li><a href="{{asset('admin/order')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Đơn hàng</a></li>
        <li><a href="{{asset('admin/list-coupon')}}"><i class="fas fa-cart-arrow-down" style="margin-right: 14px"></i>Mã Giảm Giá</a></li>
        <li><a href="{{asset('admin/user')}}"><i class="fas fa-user" style="margin-right: 14px"></i> Người dùng</a></li>
        <li role="presentation" class="divider"></li>
    </ul>

</div><!--/.sidebar-->

{{--Main--}}
@yield('main')
    <script src="back/js/jquery-1.11.1.min.js"></script>
    <script src="back/js/bootstrap.min.js"></script>
    <script src="back/js/chart.min.js"></script>
    <script src="back/js/chart-data.js"></script>
    <script src="back/js/easypiechart.js"></script>
    <script src="back/js/easypiechart-data.js"></script>
    <script src="back/js/bootstrap-datepicker.js"></script>
    <script>
        $('#calendar').datepicker({
        });

        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){
                $(this).find('em:first').toggleClass("glyphicon-minus");
            });
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
            if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
            if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>
</body>

</html>
