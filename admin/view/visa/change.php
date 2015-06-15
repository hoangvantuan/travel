<?php require('template/header.php') ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
			<div class="row">
                <div class="col-lg-12">
                	<h1 class="page-header">Visa - Hộ chiếu</h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.php?controller=dashboard">Bảng điều khiển</a>
                        </li>
                        <li class="active">
                            <i class="glyphicon glyphicon-refresh"></i>  <a href="index.php?controller=visa">Visa - Hộ chiếu</a>
                        </li>
                        <li>
                        	<i class="fa fa-edit"></i>Thay đổi
                        </li>
                    </ol>
                </div>
            </div>
<?php if (isset($success)) :?>
            <div class="row">
                <div class="page-header"><?php echo '<em>'.$success.'</em>' ; $success=null;?></div>
            </div>
<?php endif?>
<script>
function img_find(id) {

  var dom = document.getElementById(id);

  var e = document.createElement('div');

  e.innerHTML = _.unescape(dom.innerHTML); // Or use regex to replace &lt; to < and &gt; to >

  var imgs = e.querySelectorAll('img');

  var srcCollection = [];

  for (var i = 0; i < imgs.length; i++) {
    srcCollection.push(imgs[i].src);
  }

  return srcCollection;
}

//img_find('content'); // ["myimage1.jpg", "myimage2.jpg"]
</script>

			<div class="row">
				<div class="col-lg-8">
					<form role="form" action="index.php?controller=&amp;action=change&amp;passport_visa_offer_code=<?php echo $visa['passport_visa_offer_code'];?>" method="post">
						<div class="form-group">
                <label>STT</label>
                <p><?php echo $visa['passport_visa_offer_code'];?></p>
            </div>
            <div class="form-group"></div>
            <div class="form-group">
                <label>Nội dung</label>
                <textarea id="contents" name="noidung" cols="100" rows="20"><?php echo $visa['content'];?><script>img_find('contents');</script></textarea><br />
            </div>
                <button type="submit" name="submit" class="btn btn-default">Sửa </button>
                <button type="reset" class="btn btn-default">Làm mới </button>
					</form>
				</div>
			</div>
			<!-- end row -->
			<div class="row">

			</div>
		</div>
	</div>
</div>
