<?php 
  //load file Layout.php vao day
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>

<div class="col-xl-9">
  <div class="row">
  <div class="col-lg-12">
      <div class="section-title text-center">
          <h3>Tin tức</h3>
      </div>
  </div>
</div>
<hr> 
  <div class="wrapper-blog"> 
    <!-- list news -->
    <div class="row">
      <?php foreach($data as $rows): ?>
      <div class="col-md-6 article"> <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image"> <img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" style="width:100%; height: 350px; overflow:hidden;" class="img-responsive"> </a>
        <h3><a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
        <p class="desc"><?php echo $rows->description; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
    <!-- end list news --> 
    <ul class="pagination pull-right" style="margin-top: 0px !important">
      <li><a href="#">Trang</a></li>
      <?php for($i = 1; $i <= $numPage; $i++): ?>
      <li><a href="index.php?controller=news&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
      <?php endfor; ?>
    </ul>
  </div>
</div>