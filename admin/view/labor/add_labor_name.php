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
                            <i class="fa fa-edit"></i>Thêm danh mục
                        </li>
                    </ol>
                </div>
            </div>
            <div class="table-responsive">
                <strong>Danh mục gồm có</strong><br><br>
                <table class="table table-bordered table-hover">
                            <thead>
                                
                                <?php foreach ($labor as $key => $value) {
                                        echo '<tr><th>'.$value['labor_name'].'</th>';
                                 ?>
                                 <td><a href="index.php?controller=labor&amp;action=add_labor_name&del=<?php echo $value['labor_id'];?>">Xóa</a></td>  
                                 <?php     
                                }?>
                                
                            </thead>
                        </table>
                
            </div>
            <hr>

            <div class="row">
                <div class="col-lg-8">
                    <form enctype="multipart/form-data" role="form" action="index.php?controller=labor&amp;action=add_labor_name&amp;lang=<?php echo $lang ?>" method="post">
                        <div class="form-group">
                            <label for="labor_name">Labor name : </label><br />
                            <input name="laborname" id="labor_name" type="text" value="">
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