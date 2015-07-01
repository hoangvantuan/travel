<!-- BEGIN: Header -->
<header>
	<div class="container-fluid top-bar-container">
		<div class="row">
       		<div class="col-md-12 col-top-bar">
           		<div class="top-bar">
                	<h1 class="top-bar-text"> Dich vu du lich gia tot, dich vu lam visa nhanh chong, dat ve may bay gia re, du hoc. Hotline 24/7 : <span><i class="glyphicon glyphicon-phone"></i>&nbsp;0987647504</span>
                		<select class="pull-right language" onchange="window.location = this.value">
                			<option <?php if(isset($_GET['lang']) && $_GET['lang'] == 'vi') echo 'selected' ?> value="index.php?controller=language&amp;lang=vi">Vietnamese</option>
                			<option <?php if(isset($_GET['lang']) && $_GET['lang'] == 'en') echo 'selected' ?> value="index.php?controller=language&amp;lang=en">English</option>
                		</select>
                	</h1>
               </div>
            </div>
        </div>
		<div class="row row-logo">
			<div  class="col-md-2" >
				<div class="logo">
					<a href="index.php">
                    	<img class="img-responsive" src="asset/image/common/logo.png" alt="Logo" />
                 	</a>
                 </div>
			</div>
			<div class="col-md-7 ">
				<img class="img-responsive" src="asset/image/common/banner.png" alt="banner" />
			</div>
      <div class="col-md-3 text-left hotline-top">
          <h1>Liên Hệ</h1>
          <p>Ms Nhã Trúc 01647267747</p>
          <p>Mr Dương 0986 151 386</p>
          <p>Mrs Hanh 0987647504</p>
      </div>
		</div>
	</div>
</header>
<!-- END: Header -->
