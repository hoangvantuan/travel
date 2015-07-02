<?php require('template/header.php') ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dịch vụ Du học</h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.php?controller=dashboard&amp;lang=<?php echo $lang ?>">Bảng điều khiển</a>
                        </li>
                        <li class="active">
                            <i class="glyphicon glyphicon-refresh"></i>  <a href="index.php?controller=abroad&amp;lang=<?php echo $lang ?>">Dịch vụ du học</a>
                        </li>
                        <li>
                            <i class="fa fa-edit"></i>Thêm
                        </li>
                    </ol>
            </div>
            <?php if (isset($success)) :?>
            <div class="row">
                <div class="page-header"><?php echo '<em>'.$success.'</em>' ; $success=null;?></div>
            </div>
            <?php endif?>
            <div class="row">
                <div class="col-lg-8">
                    <form enctype="multipart/form-data" role="form" action="index.php?controller=abroad&amp;action=add_abroad&amp;lang=<?php echo $lang ?>" method="post">
                        <div class="form-group">
                            <label for="category_visa">Danh mục các dịch vụ Du học</label><br />
                            <select name="abroad_name" id="category_visa">
                                <?php foreach ($abroad_name as $key => $value):?>
                                <option value="<?php echo $value['abroad_name'];?>"><?php echo $value['abroad_name'];?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label><br />
                            <input name="title" id="title" type="text" value="">
                        </div>
                        <div class="form-group">
                            <label for="contents">Content : </label>
                            <textarea id="contents" name="content" cols="100" rows="20"></textarea>
                            <br />
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