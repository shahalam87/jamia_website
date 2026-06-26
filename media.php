<?php include_once('header.php');
$event_arr = array(1=>'Foundation & Construction (Buniyaad & Tameer)',
				   2=>'Hifz Convocation-I & New Mosque Opening Ceremony (Jalsa-e-Dastarbandi-I & Iftah)',
				   3=>'Hifz Convocation-II (Jalsa-e-Dastarbandi II)',
				   4=>'Inaugration of the Renovated First Floor'
				  );
$id = $_GET['evntid'];
?>
<style type="text/css">
ul img { border: 1px solid green; padding:5px}
</style>
<section id="portfolio">
<div class="container">
<div class="center">
<h2><?php echo $event_arr[$id]?></h2>
</div>
<?php if($id==1) { ?>
<ul class="portfolio-filter text-left">
<a href="images/event<?php echo $id; ?>/construction-1_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/construction-1_orig.jpg" alt="Construction 1" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/construction-2_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/construction-2_orig.jpg" alt="Construction 2" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/construction-3_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/construction-3_orig.jpg" alt="Construction 3" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/construction-4_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/construction-4_orig.jpg" alt="Construction 4" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/construction-5_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/construction-5_orig.jpg" alt="Construction 5" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/construction-6_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/construction-6_orig.jpg" alt="Construction 6" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/construction-7_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/construction-7_orig.jpg" alt="Construction 7" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/construction-8_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/construction-8_orig.jpg" alt="Construction 8" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/construction-9_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/construction-9_orig.jpg" alt="Construction 9" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/construction-10_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/construction-10_orig.jpg" alt="Construction 10" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/construction-11_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/construction-11_orig.jpg" alt="Construction 11" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/construction-12_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/construction-12_orig.jpg" alt="Construction 12" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/construction-13_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/construction-13_orig.jpg" alt="Construction 13" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/construction-14_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/construction-14_orig.jpg" alt="Construction 14" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/construction-15_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/construction-15_orig.jpg" alt="Construction 15" width=340 height=222></a>
</ul>
<?php } else if($id==2) { ?>
<ul class="portfolio-filter text-left">
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/x2Ywud6Rd8c" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/5lFRLRAhGAQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/YbwjTOALgyU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/U-xgcVS7iEU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/j-r2atAd0K4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/tVDW5j3b02Y" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/CDnfQKjR_1k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/PSjtz0Xoq_s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/zZko-kPWits" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
</ul>
<ul class="portfolio-filter text-left">
<a href="images/event<?php echo $id; ?>/ijlas-aam_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/ijlas-aam_orig.jpg" alt="Ijlase-Aam" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/jamia-banner_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/jamia-banner_orig.jpg" alt="Jamia Banner" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/iftah-1_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/iftah-1_orig.jpg" alt="Iftah 1" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/iftah-2_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/iftah-2_orig.jpg" alt="Iftah 2" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/iftah-3_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/iftah-3_orig.jpg" alt="Iftah 3" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/iftah-4_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/iftah-4_orig.jpg" alt="Iftah 4" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/iftah-5_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/iftah-5_orig.jpg" alt="Iftah 5" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/iftah-6_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/iftah-6_orig.jpg" alt="Iftah 6" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/iftah-7_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/iftah-7_orig.jpg" alt="Iftah 7" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/iftah-8_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/iftah-8_orig.jpg" alt="Iftah 8" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/iftah-9_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/iftah-9_orig.jpg" alt="Iftah 9" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/iftah-10_orig.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/iftah-10_orig.jpg" alt="Iftah 10" width=340 height=222></a>
</ul>
<?php } else if($id==3) { ?>
<ul class="portfolio-filter text-left">
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/PBlqtK3EOYY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/pYQIkzQ_JBo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/FjZq3gpluSE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/1WNNc0AWTys" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/w96GEGUPq3A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/L0OqUTHnWew" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/PtZiZ_Nygak" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/3q4L2IcX1Sk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/lTDJDuSEE-M" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/kLEAAe4WBFU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
</ul>
<?php } else if($id==4) { ?>
<ul class="portfolio-filter text-left">
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/6G50pxLQiyI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/lCVApmUOHMc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/Hkdx_jVnfZA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/BAmCbk2ZVFY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/_wG1kObavD8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/fpfJOL3oWSc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/fztcsqwScks" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/Yr_B8PM1ZLs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
<li><iframe width="340" height="222" src="https://www.youtube.com/embed/ibDpiTYkgEY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
</ul>
<ul class="portfolio-filter text-left">
<a href="images/event<?php echo $id; ?>/renovation_inaugration.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/renovation_inaugration.jpg" alt="Renovation Inaugration" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/renovation_event.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/renovation_event.jpg" alt="Renovation Event" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/water_digging.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/water_digging.jpg" alt="Water Digging" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/pre-renovation1.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/pre-renovation1.jpg" alt="Pre Renovation 1" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/pre-renovation2.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/pre-renovation2.jpg" alt="Pre Renovation 2" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/pre-renovation3.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/pre-renovation3.jpg" alt="Pre Renovation 3" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/renovation_preparation1.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/renovation_preparation1.jpg" alt="Renovation Preparation 1" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/renovation_preparation2.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/renovation_preparation2.jpg" alt="Renovation Preparation 2" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/wazu_khana.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/wazu_khana.jpg" alt="Wazu Khana" width=340 height=222></a>
<a href="images/event<?php echo $id; ?>/saathis.jpg" target="_blank"><img src="images/event<?php echo $id; ?>/saathis.jpg" alt="saathis" width=340 height=222></a>
</ul>
<?php } ?>
</div>
</section>
<?php include_once('footer.php'); ?>