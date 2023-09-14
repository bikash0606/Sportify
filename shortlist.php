<?php
require('session.php');
?>
<!DOCTYPE html>
<html>
<html
lang="en"
class="light-style layout-menu-fixed"
dir="ltr"
data-theme="theme-default"
data-assets-path="../sneat/assets/"
data-template="vertical-menu-template-free"
>
<head>
	<?php include('head.php'); ?>
</head>

<body>
	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-content-navbar">
		<div class="layout-container">
			<!-- Menu -->
			<?php include('aside.php')?>

			<div class="layout-page">
				<?php include('navbar.php')?>
				<!-- Content wrapper -->
				<div class="content-wrapper">
					<div class="container-xxl flex-grow-1 container-p-y">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php include('script.php')?>
</html>