<?php require('template/header.php') ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tin tức - sự kiện</h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.php?lang=<?php echo $lang ?>&amp;controller=dashboard">Bảng điều khiển</a>
                        </li>
                        <li class="active">
                            <i class="glyphicon glyphicon-refresh"></i>  <a href="index.php?lang=<?php echo $lang ?>&amp;controller=news">Tin tức - Sự kiện</a>
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
            <div class="row">
                <div class="col-lg-8">
                    <form enctype="multipart/form-data" role="form" action="index.php?lang=<?php echo $lang ?>&amp;controller=news&amp;action=add_news" method="post">
                        <div class="form-group">
                            <label for="title">Tiêu đề</label><br />
                            <input name="title" id="title" type="text" value="" required="required" class="form-group">
                        </div>
                        <div class="form-group">
                            <label for="category">Thể Loại</label>
                            <select name="category" id="category" class="form-group">
                                <?php foreach($news as $key) :?>
                                    <option value="<?php echo $key['news_event_code'] ?>"><?php echo $key['new_event_name'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Miêu tả</label>
                            <textarea name="description" id="description" cols="100" rows="20" class="form-group"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="contents">Nội dung</label>
                            <textarea id="contents" class="form-group" name="noidung" cols="100" rows="20" ></textarea>
                            <br />
                        </div>
                        <div class="form-group">
                            <label for="fileToUpload">Ảnh</label>
                            <input type="file" name="fileToUpload" class="form-group" id="fileToUpload" required="required">
                        </div>
                        <button type="submit" name="submit" class="btn btn-default">Thêm </button>
                        <button type="reset" class="btn btn-default">Làm mới</button>
                    </form>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
            </div>
        </div>
    </div>
</div>