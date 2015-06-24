<?php require('template/header.php') ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dịch vụ xuất khẩu lao động</h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.php?controller=dashboard&amp;lang=<?php echo $lang ?>">Bảng điều khiển</a>
                        </li>
                        <li class="active">
                            <i class="glyphicon glyphicon-refresh"></i>  <a href="index.php?controller=labor&amp;lang=<?php echo $lang ?>">Dịch vụ xuất khẩu lao động</a>
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
                    <form enctype="multipart/form-data" role="form" action="index.php?controller=labor&amp;action=change&amp;labor_content_id=<?php echo $labor['labor_content_id'];?>&amp;lang=<?php echo $lang ?>" method="post">
                        <div class="form-group">
                            <label for="category_visa">Danh mục các dịch vụ xuất khẩu lao động</label><br />
                            <select name="labor_name" id="category_visa">
                                <?php foreach ($labor_name as $key => $value):?>
                                <option value="<?php echo $value['labor_name'];?>"<?php if ($value['labor_name']==$labor_name1['labor_name']) {
                                    echo 'selected';
                                    }?>><?php echo $value['labor_name'];?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label><br />
                            <input name="title" id="title" type="text" value="<?php echo $labor['title'];?>">
                        </div>
                        <div class="form-group">
                            <label for="contents">Content : </label>
                            <textarea id="contents" name="content" cols="100" rows="20"><?php echo $labor['content'];?><script>img_find('contents');</script></textarea>
                            <br />
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