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
                    <form enctype="multipart/form-data" role="form" action="index.php?controller=visa&amp;action=add_visapost" method="post">
                        <div class="form-group">
                            <label>2/Danh mục các dịch vụ Visa : </label>
                            <select name="passport_visa_name">
                                <?php foreach ($visa_name as $key => $value):?>
                                <option value="<?php echo $value['passport_visa_name'];?>"><?php echo $value['passport_visa_name'];?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>3/Title : </label>
                            <input name="title" type="text" value="" required>
                        </div>
                        <div class="form-group">
                            <label>4/Description : </label>
                            <input name="description" type="text" value="" required>
                        </div>
                        <div class="form-group">
                            <label>5/Content : </label>
                            <textarea id="contents" name="noidung" cols="100" rows="20" ><script>img_find('contents');</script></textarea>
                            <br />
                        </div>
                        <div class="form-group">
                            <label>6/Image : </label><input type="file" name="fileToUpload" id="fileToUpload" required>
                        </div>
                        <div class="form-group">
                            <label>7/Create at : </label>
                            <input type="datetime" name="create_at" >
                        </div>
                        <div class="form-group">
                            <label>8/Update at : </label>
                            <input type="datetime" name="update_at" >
                        </div>
                        <button type="submit" name="submit" class="btn btn-default">Thêm </button>
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