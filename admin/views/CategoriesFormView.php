<?php 
	//load file Layout.php vao day
	$this->fileLayout = "Layout.php";
 ?>
 <div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit category</div>
        <div class="panel-body">
        <form method="post" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input type="text" name="name" value="<?php echo isset($record->name) ? $record->name : ""; ?>" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Parent</div>
                <div class="col-md-10">
                    <?php 
                        $category_id = isset($record->id) ? $record->id : 0;
                        $categories = $this->modelCategories($category_id);
                     ?>
                    <select name="parent_id" class="form-control" style="width:250px;">
                        <option value="0"></option>
                        <?php foreach($categories as $rows): ?>
                            <option <?php if(isset($record->id) && $record->parent_id == $rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div>