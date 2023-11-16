
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>{{ config('app.name') }}</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="https://themewagon.github.io/deskapp2/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="https://themewagon.github.io/deskapp2/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="https://themewagon.github.io/deskapp2/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="https://themewagon.github.io/deskapp2/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="https://themewagon.github.io/deskapp2/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="https://themewagon.github.io/deskapp2/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="https://themewagon.github.io/deskapp2/src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="https://themewagon.github.io/deskapp2/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	@include('Backend.Partial.MainHeader')

	@include('Backend.Partial.NavigationBar')
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				@yield('Main Content')
			</div>



			<div class="footer-wrap pd-20 mb-20 card-box">
               @include('Backend.Partial.Footer')
            </div>
		</div>
	</div>
	<!-- js -->
	<script src="https://themewagon.github.io/deskapp2/vendors/scripts/core.js"></script>
	<script src="https://themewagon.github.io/deskapp2/vendors/scripts/script.min.js"></script>
	<script src="https://themewagon.github.io/deskapp2/vendors/scripts/process.js"></script>
	<script src="https://themewagon.github.io/deskapp2/vendors/scripts/layout-settings.js"></script>
	<script src="https://themewagon.github.io/deskapp2/src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="https://themewagon.github.io/deskapp2/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="https://themewagon.github.io/deskapp2/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://themewagon.github.io/deskapp2/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="https://themewagon.github.io/deskapp2/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="https://themewagon.github.io/deskapp2/vendors/scripts/dashboard.js"></script>
</body>
</html>
