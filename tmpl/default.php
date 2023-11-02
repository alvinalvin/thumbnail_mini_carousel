<?php
defined('_JEXEC') or die;
// jquery
JHtml::_('jquery.framework');
JHtml::script('https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js');
// root
$eot = JURI::base()."modules/mod_thumbnail_mini_carousel/fonts/h-smart-icon.eot";
$woff = JURI::base()."modules/mod_thumbnail_mini_carousel/fonts/h-smart-icon.woff";
$ttf = JURI::base()."modules/mod_thumbnail_mini_carousel/fonts/h-smart-icon.ttf";
$svg = JURI::base()."modules/mod_thumbnail_mini_carousel/fonts/h-smart-icon.svg";
?>
<!-- style -->
<style media="screen">
@charset "UTF-8";
@font-face {
  font-family: "h-smart-icon";
  src:url("<?php echo $eot ; ?>");
  src:url("<?php echo $eot ; ?>?#iefix") format("embedded-opentype"),
    url("<?php echo $woff ; ?>") format("woff"),
    url("<?php echo $ttf; ?>") format("truetype"),
    url("<?php echo $svg; ?>#h-smart-icon") format("svg");
  font-weight: normal;
  font-style: normal;
}

</style>
<!-- html -->
<div class="container">
  <div class="plugin" style="display:none">
      <ul>
        <?php foreach ($img as $value):?>
          <li>
            <img src="<?php echo $value->image; ?>">
          </li>
        <?php endforeach; ?>
      </ul>
  </div>
</div>
  <!-- script -->
   <script type="text/javascript">
		$('.plugin').hSmartThumbnail();
		$('.plugin').imagesLoaded( function() {
  $('.plugin').css("display", "block");
   });
  </script>
