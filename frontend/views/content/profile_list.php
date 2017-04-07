
<div class="box_a">
  <div class="b_grid_and_list">
       <div class="b_grid">
       <a href="?type=list" style="<?php if($type=='list') echo 'opacity:0.5;'; ?>" class="list"></a>
       <a href="?type=thumb" style="<?php if($type=='thumb') echo 'opacity:0.5;'; ?>" class="grid"></a>
       </div>
        <div class="most_popular"><a href="<?php echo base_url()?>profile-list/<?php echo $user_info['user_id']; ?>/<?php echo url_title($user_info['username']); ?>.html"><?php echo $user_info['username']; ?>'s Extension</a></div>
        <div class="clear"></div>
        <div class="shadow"></div>
        <div class="products">
         <?php if($type=='thumb') { ?>
            <div class="bg_in">
                <?php if(isset($extension_data) && count($extension_data) > 0) {?>
            	<?php foreach($extension_data as $data) {?>
            	<div class="prodcut_page">
                	<div style="width:220px;height:149px;"><a href="<?php echo base_url();?>extension/<?php echo $data['extension_id'];?>/<?php echo url_title($data['name']); ?>me.html"><img src="<?php echo base_url(); ?><?php echo image($data['image'],$settings['default_image'],220,149);?>" /></a></div>
                    <div class="prodect_name"><a href="<?php echo base_url();?>extension/<?php echo $data['extension_id'];?>/<?php echo url_title($data['name']); ?>.html"><?php echo $data['name'];?></a></div>
                    <div class="prodect_by"><span><?=_l('by',$this);?></span><?php echo $data['username'];?></div>
                    <div class="prodect_border"></div>
                    <div class="product_text"><?php echo $data['category_name'];?> </div>
                    <div class="review_bg">
                    	<span style="float:left;" class="cover-stat cover-stat-appreciations">
                            <span><img src="<?php echo base_url(); ?>assets/frontend/img/thumb1.png" width="13" height="12" align="absmiddle" style="margin:-3px 0 0 0;" /></span>
                            <span class="stat-value"><?php echo $data['like'];?></span>
                        </span>
                        <span style="float:left;margin-left:10px;" class="cover-stat">
                            <span><img src="<?php echo base_url(); ?>assets/frontend/img/thumb2.png" width="13" height="12" align="absmiddle" style="margin:-3px 0 0 10px;" /></span>
                            <span class="stat-value"><?php echo $data['dislike'];?></span>
                        </span>
                         <span style="float:right;" class="cover-stat" style="margin-left:50px;">
                            <span><img src="<?php echo base_url(); ?>assets/frontend/img/view_icon.png" width="14" height="9" align="absmiddle" style="margin:0px 0 0 10px;" /></span>
                            <span class="stat-value"><?php echo $data['views'];?></span>
                        </span>
                    </div>
                </div>
            
                <?php } ?>
                 <?php } ?>
                 <div style="clear:both"></div>
               </div>
             
            <?php } else { ?>
            	<div class="bg_in">
            	<?php if(isset($extension_data) && count($extension_data) > 0) {?>
            	<?php foreach($extension_data as $data) {?>
            	<div class="product_list_style">
                	<div class="list-prodcut_img">
                    	<div><a href="<?php echo base_url();?>extension/<?php echo $data['extension_id'];?>/<?php echo url_title($data['name']); ?>.html"><img src="<?php echo base_url(); ?><?php echo image($data['image'],$settings['default_image'],223,149);?>"></a></div>
                    </div>
                    <div class="product_text12">
                    	<div class="David_Vicente"><a href="<?php echo base_url();?>extension/<?php echo $data['extension_id'];?>/<?php echo url_title($data['name']); ?>.html"><?php echo $data['name'];?></a></div>
                        <div class="David_Vicente_text"><?php echo split_words($data['description'],200,"...");?></div>
                        <div style="margin:20px 0 0 0;" class="product_text"><?php echo $data['category_name'];?> </div>
                        <div style="position:relative; width: 120px; left: 615px; top: -60px;" class="Price_index">
                        	<p> <?=_l('Price',$this);?>: <span style="color:#000000; font-weight:600;"><?php echo $data['price'];?></span></p>
                        </div>
                       <div style="background:none; padding-left:0px; position:relative; width:100px; left: 615px; top: -40px;" class="buynow">
                            <!-- <a href="<?php echo base_url();?>checkout/<?php echo $data['extension_id']; ?>" class="buy_now" style="margin:0px;"><?=_l('Buy Now',$this);?></a> -->
                            <?php if($data['price_orgi']!=0) {?>
                    	 <a href="javascript:;" onclick="add_to_cart('<?php echo $data['name'];?>',<?php echo $data['extension_id'];?>,<?php echo $data['price_orgi']?>,0,0);" class="buy_now cart" style="margin:0px;"><?=_l('Add to Cart',$this);?></a>
                    	<?php } else {?>
                    	 <a href="javascript:;" class="buy_now cart" style="margin:0px;"><?=_l('Add to Cart',$this);?></a>
                    	<?php }?>
                           
                            
                        </div>
                    </div>
                    <div class="clear"></div>
                    
                </div>
                <div class="index_broder"></div>
				<?php } } ?>
                <div class="clear"></div>
                <div class="paging"><?php echo $pagination;?></div>
            </div>
            <?php }?>
       
  </div>
</div>
</div>
<div style="clear:both;"></div>     
    <script type="text/javascript">
    function add_to_cart(name,id,price,update,type)
    {
        	$.ajax({
        	  url: "<?php echo base_url(); ?>add-cart?id="+id+"&price="+price+"&update="+update+"&type="+type,
        	  success: function(){
        	 	alert("Successfully, You added item '"+name+"' into your cart");
        	  }
        	});
       
    }
    </script>