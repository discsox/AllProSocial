<?php
if (function_exists('current_user_can'))
    if (!current_user_can('manage_options')) {
        die('Access Denied');
    }
if (!function_exists('current_user_can')) {
    die('Access Denied');
}

function      html_showStyles($param_values, $op_type)
{
    ?>
<script>

jQuery(document).ready(function () {
	var strliID=jQuery(location).attr('hash');
	//alert(strliID);
	jQuery('#portfolio-view-tabs li').removeClass('active');
	if(jQuery('#portfolio-view-tabs li a[href="'+strliID+'"]').length>0){
		jQuery('#portfolio-view-tabs li a[href="'+strliID+'"]').parent().addClass('active');
	}else {
		jQuery('#portfolio-view-tabs li a[href="#portfolio-view-options-0"]').parent().addClass('active');
	}
	jQuery('#portfolio-view-tabs-contents li').removeClass('active');
	strliID=strliID;
	//alert(strliID);
	if(jQuery(strliID).length>0){
		jQuery(strliID).addClass('active');
	}else {
		jQuery('#portfolio-view-options-0').addClass('active');
	}
	jQuery('input[data-slider="true"]').bind("slider:changed", function (event, data) {
		 jQuery(this).parent().find('span').html(parseInt(data.value)+"%");
		 jQuery(this).val(parseInt(data.value));
	});	
});
</script>
<div class="wrap">

<?php $path_site2 = plugins_url("../images", __FILE__); ?>

<div id="poststuff">
		<?php $path_site = plugins_url("Front_images", __FILE__); ?>

		<div id="post-body-content" class="portfolio-options">
			<div id="post-body-heading">
				<h3>General Options</h3>
				
				<a onclick="document.getElementById('adminForm').submit()" class="save-portfolio-options button-primary">Save</a>
		
			</div>
		<form action="admin.php?page=Options_portfolio_styles&task=save" method="post" id="adminForm" name="adminForm">
		<div id="portfolio-options-list">
			
			<ul id="portfolio-view-tabs">
				<li><a href="#portfolio-view-options-0">Blocks Toggle Up/Down</a></li>
				<li><a href="#portfolio-view-options-1">Full-Height Blocks</a></li>
				<li><a href="#portfolio-view-options-2">Gallery/Content-Popup</a></li>
				<li><a href="#portfolio-view-options-3">Full-Width Blocks</a></li>
				<li><a href="#portfolio-view-options-4">FAQ Toggle Up/Down</a></li>
				<li><a href="#portfolio-view-options-5">Content Slider</a></li>
				<li><a href="#portfolio-view-options-6">Lightbox-Gallery</a></li>
			</ul>
			
			<ul class="options-block" id="portfolio-view-tabs-contents">

				<li id="portfolio-view-options-0">
					<div>
						<h3>Element Styles</h3>
						<div class="has-background">
							<label for="ht_view0_element_background_color">Element Background Color</label>
							<input name="params[ht_view0_element_background_color]" type="text" class="color" id="ht_view0_element_background_color" value="#<?php echo $param_values['ht_view0_element_background_color']; ?>" size="10" />
						</div>
						<div>
							<label for="ht_view0_element_border_width">Element Border Width</label>
							<input type="text" name="params[ht_view0_element_border_width]" id="ht_view0_element_border_width" value="<?php echo $param_values['ht_view0_element_border_width']; ?>" class="text" />
							<span>px</span>
						</div>
						<div class="has-background">
							<label for="ht_view0_element_border_color">Element Border Color</label>
							<input name="params[ht_view0_element_border_color]" type="text" class="color" id="ht_view0_element_border_color" value="#<?php echo $param_values['ht_view0_element_border_color']; ?>" size="10" />
						</div>
						<div>
							<label for="ht_view0_togglebutton_style">Toggle Button Style</label>
							<select id="ht_view0_togglebutton_style" name="params[ht_view0_togglebutton_style]">	
							  <option <?php if($param_values['ht_view0_togglebutton_style'] == 'light'){ echo 'selected="selected"'; } ?> value="light">Light</option>
							  <option <?php if($param_values['ht_view0_togglebutton_style'] == 'dark'){ echo 'selected="selected"'; } ?> value="dark">Dark</option>
							</select>
						</div>
						<div class="has-background">
							<label for="ht_view0_show_separator_lines">Show Separator Lines</label>
							<input type="hidden" value="off" name="params[ht_view0_show_separator_lines]" />
							<input type="checkbox" id="ht_view0_show_separator_lines"  <?php if($param_values['ht_view0_show_separator_lines']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view0_show_separator_lines]" value="on" />
						</div>
					</div>
					<div>
						<h3>Main Image</h3>
						<div class="has-background">
							<label for="ht_view0_block_width">Main Image Width</label>
							<input type="text" name="params[ht_view0_block_width]" id="ht_view0_block_width" value="<?php echo $param_values['ht_view0_block_width']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view0_block_height">Main Image Height</label>
							<input type="text" name="params[ht_view0_block_height]" id="ht_view0_block_height" value="<?php echo $param_values['ht_view0_block_height']; ?>" class="text" />
							<span>px</span>
						</div>
					</div>
					<div style="margin-top: 14px;">
						<h3>Title</h3>
						<div class="has-background">
							<label for="ht_view0_title_font_size">Title Font Size</label>
							<input type="text" name="params[ht_view0_title_font_size]" id="ht_view0_title_font_size" value="<?php echo $param_values['ht_view0_title_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view0_title_font_color">Title Font Color</label>
							<input name="params[ht_view0_title_font_color]" type="text" class="color" id="ht_view0_title_font_color" value="#<?php echo $param_values['ht_view0_title_font_color']; ?>" size="10" />
						</div>
					</div>
                                        
                                        <div style="margin-top:-40px;">
                                            <h3>Sorting styles</h3>
                                            <div class="has-background" style="display: none;">
                                                    <label for="ht_view0_show_sorting">Show Sorting</label>
                                                    <input type="hidden" value="off" name="params[ht_view0_show_sorting]" />
                                                    <input type="checkbox" id="ht_view0_show_sorting"  <?php if($param_values['ht_view0_show_sorting']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view0_show_sorting]" value="on" />
                                            </div>
                                            <div class="has-background">
                                                    <label for="ht_view0_sortbutton_font_size">Sort Button Font Size</label>
                                                    <input type="text" name="params[ht_view0_sortbutton_font_size]" id="ht_view0_sortbutton_font_size" value="<?php echo $param_values['ht_view0_sortbutton_font_size']; ?>" class="text" />
                                                    <span>px</span>
                                            </div>
                                            <div class="">
                                                    <label for="ht_view0_sortbutton_font_color">Sort Button Font Color</label>
                                                    <input name="params[ht_view0_sortbutton_font_color]" type="text" class="color" id="ht_view0_sortbutton_font_color" value="#<?php echo $param_values['ht_view0_sortbutton_font_color']; ?>" size="10" />
                                            </div>
                                            <div class="has-background">
                                                    <label for="ht_view0_sortbutton_hover_font_color">Sort Button Font Hover Color</label>
                                                    <input name="params[ht_view0_sortbutton_hover_font_color]" type="text" class="color" id="ht_view0_sortbutton_hover_font_color" value="#<?php echo $param_values['ht_view0_sortbutton_hover_font_color']; ?>" size="10" />
                                            </div>
                                            <div class="">
                                                    <label for="ht_view0_sortbutton_background_color">Sort Button Background Color</label>
                                                    <input name="params[ht_view0_sortbutton_background_color]" type="text" class="color" id="ht_view0_sortbutton_background_color" value="#<?php echo $param_values['ht_view0_sortbutton_background_color']; ?>" size="10" />
                                            </div>
                                            <div class="has-background">
                                                    <label for="ht_view0_sortbutton_hover_background_color">Sort Button Background Hover Color</label>
                                                    <input name="params[ht_view0_sortbutton_hover_background_color]" type="text" class="color" id="ht_view0_sortbutton_hover_background_color" value="#<?php echo $param_values['ht_view0_sortbutton_hover_background_color']; ?>" size="10" />
                                            </div>
                                            <div class="" style="display: none;">
                                                    <label for="ht_view0_sortbutton_border_width">Sort Button Border Width</label>
                                                    <input type="text" name="params[ht_view0_sortbutton_border_width]" id="ht_view0_sortbutton_border_width" value="<?php echo $param_values['ht_view0_sortbutton_border_width']; ?>" class="text" />
                                                    <span>px</span>
                                            </div>
                                            <div style="display: none;">
                                                    <input name="params[ht_view0_sortbutton_border_color]" type="text" class="color" id="ht_view0_sortbutton_border_color" value="#<?php echo $param_values['ht_view0_sortbutton_border_color']; ?>" size="10" />
                                                    <label for="ht_view0_sortbutton_border_color">Sort Button Border Color</label>
                                            </div>
                                                <div>
                                                    <label for="ht_view0_sortbutton_border_radius">Sort Button Border Radius</label>
                                                    <input type="text" name="params[ht_view0_sortbutton_border_radius]" id="ht_view0_sortbutton_border_radius" value="<?php echo $param_values['ht_view0_sortbutton_border_radius']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div  class="has-background">
                                                    <label for="ht_view0_sortbutton_border_padding">Sort Button Padding</label>
                                                    <input type="text" name="params[ht_view0_sortbutton_border_padding]" id="ht_view0_sortbutton_border_padding" value="<?php echo $param_values['ht_view0_sortbutton_border_padding']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div style="display: none;">
                                                    <label for="ht_view0_sortbutton_margin">Sort Button Margins</label>
                                                    <input type="text" name="params[ht_view0_sortbutton_margin]" id="ht_view0_sortbutton_margin" value="<?php echo $param_values['ht_view0_sortbutton_margin']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div>
                                                    <label for="ht_view0_sorting_float">Sort block Position</label>
                                                    <select id="ht_view0_sorting_float" name="params[ht_view0_sorting_float]">	
                                                      <option <?php if($param_values['ht_view0_sorting_float'] == 'left'){ echo 'selected="selected"'; } ?> value="left">Left</option>
                                                      <option <?php if($param_values['ht_view0_sorting_float'] == 'right'){ echo 'selected="selected"'; } ?> value="right">Right</option>
                                                      <option <?php if($param_values['ht_view0_sorting_float'] == 'top'){ echo 'selected="selected"'; } ?> value="top">Top</option>
                                                    </select>
						</div>
                                                <div class="has-background">
							<label for="ht_view0_sorting_name_by_default">Sort By Default Bottom Name</label>
							<input name="params[ht_view0_sorting_name_by_default]" type="text" id="ht_view0_sorting_name_by_default" value="<?php echo $param_values['ht_view0_sorting_name_by_default']; ?>" size="10" class="text"/>
						</div>
						<div class="">
							<label for="ht_view0_sorting_name_by_id">Sorting By ID Button Name</label>
							<input name="params[ht_view0_sorting_name_by_id]" type="text" id="ht_view0_sorting_name_by_id" value="<?php echo $param_values['ht_view0_sorting_name_by_id']; ?>" size="10" />
						</div>
                                                <div class="has-background">
							<label for="ht_view0_sorting_name_by_name">Sorting By ID Button Name</label>
							<input name="params[ht_view0_sorting_name_by_name]" type="text" id="ht_view0_sorting_name_by_name" value="<?php echo $param_values['ht_view0_sorting_name_by_name']; ?>" size="10" />
						</div>
						<div class="">
							<label for="ht_view0_sorting_name_by_random">Random Sorting Button Name</label>
							<input name="params[ht_view0_sorting_name_by_random]" type="text" id="ht_view0_sorting_name_by_random" value="<?php echo $param_values['ht_view0_sorting_name_by_random']; ?>" size="10" />
						</div>
                                                <div class="has-background">
							<label for="ht_view0_sorting_name_by_asc">Ascedding Sorting Button Name</label>
							<input name="params[ht_view0_sorting_name_by_asc]" type="text" id="ht_view0_sorting_name_by_asc" value="<?php echo $param_values['ht_view0_sorting_name_by_asc']; ?>" size="10" />
						</div>
						<div class="">
							<label for="ht_view0_sorting_name_by_desc">Descedding Sorting Button Name</label>
							<input name="params[ht_view0_sorting_name_by_desc]" type="text" id="ht_view0_sorting_name_by_desc" value="<?php echo $param_values['ht_view0_sorting_name_by_desc']; ?>" size="10" />
						</div>
                                            </div>
                                                                                    
					<div style="margin-top:14px;">
						<h3>Thumbnails</h3>
						<div class="has-background">
							<label for="ht_view0_show_thumbs">Show Thumbnails</label>
							<input type="hidden" value="off" name="params[ht_view0_show_thumbs]" />
							<input type="checkbox" id="ht_view0_show_thumbs"  <?php if($param_values['ht_view0_show_thumbs']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view0_show_thumbs]" value="on" />
						</div>
						<div>
							<label for="ht_view0_thumbs_position">Thumbnails Position</label>
							<select id="ht_view0_thumbs_position" name="params[ht_view0_thumbs_position]">	
							  <option <?php if($param_values['ht_view0_thumbs_position'] == 'before'){ echo 'selected="selected"'; } ?> value="before">Before Description</option>
							  <option <?php if($param_values['ht_view0_thumbs_position'] == 'after'){ echo 'selected="selected"'; } ?> value="after">After Description</option>
							</select>
						</div>
						<div class="has-background">
							<label for="ht_view0_thumbs_width">Thumbnails Width</label>
							<input type="text" name="params[ht_view0_thumbs_width]" id="ht_view0_thumbs_width" value="<?php echo $param_values['ht_view0_thumbs_width']; ?>" class="text" />
							<span>px</span>
						</div>
					</div>
                                        
                                        
					<div>
						<h3>Description</h3>
						<div class="has-background">
							<label for="ht_view0_show_description">Show Description</label>
							<input type="hidden" value="off" name="params[ht_view0_show_description]" />
							<input type="checkbox" id="ht_view0_show_description"  <?php if($param_values['ht_view0_show_description']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view0_show_description]" value="on" />
						</div>
						<div>
							<label for="ht_view0_description_font_size">Description Font Size</label>
							<input type="text" name="params[ht_view0_description_font_size]" id="ht_view0_description_font_size" value="<?php echo $param_values['ht_view0_description_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div class="has-background">
							<label for="ht_view0_description_color">Description Font Color</label>
							<input name="params[ht_view0_description_color]" type="text" class="color" id="ht_view0_description_color" value="#<?php echo $param_values['ht_view0_description_color']; ?>" size="10" />
						</div>
					</div>
                                    
                                        <div style="margin-top: 14px;">
                                            <h3>Category styles</h3>
                                            
                                                <div  style="display: none;">
                                                    <label for="ht_view0_show_filtering">Show Filtering</label>
                                                    <input type="hidden" value="off" name="params[ht_view0_show_filtering]" />
                                                    <input type="checkbox" id="ht_view0_show_filtering"  <?php if($param_values['ht_view0_show_filtering']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view0_show_filtering]" value="on" />
                                                </div>
                                                <div class="">
                                                    <label for="ht_view0_cat_all">Show All Category Button Name</label>
                                                    <input type="text" name="params[ht_view0_cat_all]" id="ht_view0_cat_all" value="<?php echo $param_values['ht_view0_cat_all']; ?>" class="text" />
                                                </div>																													
                                                <div class="has-background">
                                                    <label for="ht_view0_filterbutton_font_size">Filter Button Font Size</label>
                                                    <input type="text" name="params[ht_view0_filterbutton_font_size]" id="ht_view0_filterbutton_font_size" value="<?php echo $param_values['ht_view0_filterbutton_font_size']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>

                                                <div class="">
                                                    <label for="ht_view0_filterbutton_font_color">Filter Button Font Color</label>
                                                    <input name="params[ht_view0_filterbutton_font_color]" type="text" class="color" id="ht_view0_filterbutton_font_color" value="#<?php echo $param_values['ht_view0_filterbutton_font_color']; ?>" size="10" />
                                                </div>
                                                <div class="has-background">
                                                    <label for="ht_view0_filterbutton_hover_font_color">Filter Button Font Hover Color</label>
                                                    <input name="params[ht_view0_filterbutton_hover_font_color]" type="text" class="color" id="ht_view0_filterbutton_hover_font_color" value="#<?php echo $param_values['ht_view0_filterbutton_hover_font_color']; ?>" size="10" />
                                                </div>
                                                <div class="">
                                                    <label for="ht_view0_filterbutton_background_color">Filter Button Background Color</label>
                                                    <input name="params[ht_view0_filterbutton_background_color]" type="text" class="color" id="ht_view0_filterbutton_background_color" value="#<?php echo $param_values['ht_view0_filterbutton_background_color']; ?>" size="10" />
                                                </div>
                                                <div class="has-background" >
                                                    <label for="ht_view0_filterbutton_hover_background_color">Filter Button Background Hover Color</label>
                                                    <input name="params[ht_view0_filterbutton_hover_background_color]" type="text" class="color" id="ht_view0_filterbutton_hover_background_color" value="#<?php echo $param_values['ht_view0_filterbutton_hover_background_color']; ?>" size="10" />
                                                </div>

                                                <div class="" style="display: none;">
                                                    <label for="ht_view0_filterbutton_border_width">Filter Button Border Width</label>
                                                    <input type="text" name="params[ht_view0_filterbutton_border_width]" id="ht_view0_filterbutton_border_width" value="<?php echo $param_values['ht_view0_filterbutton_border_width']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div style="display: none;">
                                                    <input name="params[ht_view0_filterbutton_border_color]" type="text" class="color" id="ht_view0_filterbutton_border_color" value="#<?php echo $param_values['ht_view0_filterbutton_border_color']; ?>" size="10" />
                                                    <label for="ht_view0_filterbutton_border_color">Filter Button Border Color</label>
                                                </div>
                                                <div class="">
                                                    <label for="ht_view0_filterbutton_border_radius">Filter Button Border Radius</label>
                                                    <input type="text" name="params[ht_view0_filterbutton_border_radius]" id="ht_view0_filterbutton_border_radius" value="<?php echo $param_values['ht_view0_filterbutton_border_radius']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="has-background">
                                                    <label for="ht_view0_filterbutton_border_padding">Filter Button Padding</label>
                                                    <input type="text" name="params[ht_view0_filterbutton_border_padding]" id="ht_view0_filterbutton_border_padding" value="<?php echo $param_values['ht_view0_filterbutton_border_padding']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div style="display: none;">
                                                    <label for="ht_view0_filterbutton_margin">Filter Button Margins</label>
                                                    <input type="text" name="params[ht_view0_filterbutton_margin]" id="ht_view0_filterbutton_margin" value="<?php echo $param_values['ht_view0_filterbutton_margin']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="">
                                                    <label for="ht_view0_filtering_float">Filter block Position</label>
                                                    <select id="ht_view0_filtering_float" name="params[ht_view0_filtering_float]">	
                                                      <option <?php if($param_values['ht_view0_filtering_float'] == 'left'){ echo 'selected="selected"'; } ?> value="left">Left</option>
                                                      <option <?php if($param_values['ht_view0_filtering_float'] == 'right'){ echo 'selected="selected"'; } ?> value="right">Right</option>
                                                      <option <?php if($param_values['ht_view0_filtering_float'] == 'top'){ echo 'selected="selected"'; } ?> value="top">Top</option>
                                                    </select>
                                                </div>
                                            </div>
                                    
					<div style="margin-top: -264px;">
						<h3>Link Button</h3>
						<div class="has-background">
							<label for="ht_view0_show_linkbutton">Show Link Button</label>
							<input type="hidden" value="off" name="params[ht_view0_show_linkbutton]" />
							<input type="checkbox" id="ht_view0_show_linkbutton"  <?php if($param_values['ht_view0_show_linkbutton']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view0_show_linkbutton]" value="on" />
						</div>
						<div>
							<label for="ht_view0_linkbutton_text">Link Button Text</label>
							<input type="text" name="params[ht_view0_linkbutton_text]" id="ht_view0_linkbutton_text" value="<?php echo $param_values['ht_view0_linkbutton_text']; ?>" class="text" />
						</div>
						<div class="has-background">
							<label for="ht_view0_linkbutton_font_size">Link Button Font Size</label>
							<input type="text" name="params[ht_view0_linkbutton_font_size]" id="ht_view0_linkbutton_font_size" value="<?php echo $param_values['ht_view0_linkbutton_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view0_linkbutton_color">Link Button Font Color</label>
							<input name="params[ht_view0_linkbutton_color]" type="text" class="color" id="ht_view0_linkbutton_color" value="#<?php echo $param_values['ht_view0_linkbutton_color']; ?>" size="10" />
						</div>
						<div class="has-background">
							<label for="ht_view0_linkbutton_font_hover_color">Link Button Font Hover Color</label>
							<input name="params[ht_view0_linkbutton_font_hover_color]" type="text" class="color" id="ht_view0_linkbutton_font_hover_color" value="#<?php echo $param_values['ht_view0_linkbutton_font_hover_color']; ?>" size="10" />
						</div>
						<div>
							<label for="ht_view0_linkbutton_background_color">Link Button Background Color</label>
							<input name="params[ht_view0_linkbutton_background_color]" type="text" class="color" id="ht_view0_linkbutton_background_color" value="#<?php echo $param_values['ht_view0_linkbutton_background_color']; ?>" size="10" />
						</div>
						<div class="has-background">
							<label for="ht_view0_linkbutton_background_hover_color">Link Button Background Hover Color</label>
							<input name="params[ht_view0_linkbutton_background_hover_color]" type="text" class="color" id="ht_view0_linkbutton_background_hover_color" value="#<?php echo $param_values['ht_view0_linkbutton_background_hover_color']; ?>" size="10" />
						</div>
                                                
					</div>
				</li>
				

				<!-- VIEW 1 -->
				<li id="portfolio-view-options-1">
					<div>
						<h3>Element Styles</h3>
						<div class="has-background">
							<label for="ht_view1_block_width">Block Width</label>
							<input type="text" name="params[ht_view1_block_width]" id="ht_view1_block_width" value="<?php echo $param_values['ht_view1_block_width']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view1_element_background_color">Element Background Color</label>
							<input name="params[ht_view1_element_background_color]" type="text" class="color" id="ht_view1_element_background_color" value="#<?php echo $param_values['ht_view1_element_background_color']; ?>" size="10" />
						</div>
						<div class="has-background">
							<label for="ht_view1_element_border_width">Element Border Width</label>
							<input type="text" name="params[ht_view1_element_border_width]" id="ht_view1_element_border_width" value="<?php echo $param_values['ht_view1_element_border_width']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view1_element_border_color">Element Border Color</label>
							<input name="params[ht_view1_element_border_color]" type="text" class="color" id="ht_view1_element_border_color" value="#<?php echo $param_values['ht_view1_element_border_color']; ?>" size="10" />
						</div>
						<div  class="has-background">
							<label for="ht_view1_show_separator_lines">Show Separator Lines</label>
							<input type="hidden" value="off" name="params[ht_view1_show_separator_lines]" />
							<input type="checkbox" id="ht_view1_show_separator_lines"  <?php if($param_values['ht_view1_show_separator_lines']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view1_show_separator_lines]" value="on" />
						</div>
					</div>
					<div>
						<h3>Title</h3>
						<div class="has-background">
							<label for="ht_view1_title_font_size">Title Font Size</label>
							<input type="text" name="params[ht_view1_title_font_size]" id="ht_view1_title_font_size" value="<?php echo $param_values['ht_view1_title_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view1_title_font_color">Title Font Color</label>
							<input name="params[ht_view1_title_font_color]" type="text" class="color" id="ht_view1_title_font_color" value="#<?php echo $param_values['ht_view1_title_font_color']; ?>" size="10" />
						</div>
					</div>
					<div style="margin-top: 14px;">
						<h3>Thumbnails</h3>
						<div class="has-background">
							<label for="ht_view1_show_thumbs">Show Thumbnails</label>
							<input type="hidden" value="off" name="params[ht_view1_show_thumbs]" />
							<input type="checkbox" id="ht_view1_show_thumbs"  <?php if($param_values['ht_view1_show_thumbs']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view1_show_thumbs]" value="on" />
						</div>
						<div>
							<label for="ht_view1_thumbs_position">Thumbnails Position</label>
							<select id="ht_view1_thumbs_position" name="params[ht_view1_thumbs_position]">	
							  <option <?php if($param_values['ht_view1_thumbs_position'] == 'before'){ echo 'selected="selected"'; } ?> value="before">Before Description</option>
							  <option <?php if($param_values['ht_view1_thumbs_position'] == 'after'){ echo 'selected="selected"'; } ?> value="after">After Description</option>
							</select>
						</div>
						<div class="has-background">
							<label for="ht_view1_thumbs_width">Thumbnails Width</label>
							<input type="text" name="params[ht_view1_thumbs_width]" id="ht_view1_thumbs_width" value="<?php echo $param_values['ht_view1_thumbs_width']; ?>" class="text" />
							<span>px</span>
						</div>
					</div>
                                       
					<div style="margin-top:-80px;">
						<h3>Link Button</h3>
						<div class="has-background">
							<label for="ht_view1_show_linkbutton">Show Link Button</label>
							<input type="hidden" value="off" name="params[ht_view1_show_linkbutton]" />
							<input type="checkbox" id="ht_view1_show_linkbutton"  <?php if($param_values['ht_view1_show_linkbutton']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view1_show_linkbutton]" value="on" />
						</div>
						<div>
							<label for="ht_view1_linkbutton_text">Link Button Text</label>
							<input type="text" name="params[ht_view1_linkbutton_text]" id="ht_view1_linkbutton_text" value="<?php echo $param_values['ht_view1_linkbutton_text']; ?>" class="text" />
						</div>
						<div class="has-background">
							<label for="ht_view1_linkbutton_font_size">Link Button Font Size</label>
							<input type="text" name="params[ht_view1_linkbutton_font_size]" id="ht_view1_linkbutton_font_size" value="<?php echo $param_values['ht_view1_linkbutton_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view1_linkbutton_color">Link Button Font Color</label>
							<input name="params[ht_view1_linkbutton_color]" type="text" class="color" id="ht_view1_linkbutton_color" value="#<?php echo $param_values['ht_view1_linkbutton_color']; ?>" size="10" />
						</div>
						<div class="has-background">
							<label for="ht_view1_linkbutton_font_hover_color">Link Button Font Hover Color</label>
							<input name="params[ht_view1_linkbutton_font_hover_color]" type="text" class="color" id="ht_view1_linkbutton_font_hover_color" value="#<?php echo $param_values['ht_view1_linkbutton_font_hover_color']; ?>" size="10" />
						</div>
						<div>
							<label for="ht_view1_linkbutton_background_color">Link Button Background Color</label>
							<input name="params[ht_view1_linkbutton_background_color]" type="text" class="color" id="ht_view1_linkbutton_background_color" value="#<?php echo $param_values['ht_view1_linkbutton_background_color']; ?>" size="10" />
						</div>
						<div class="has-background">
							<label for="ht_view1_linkbutton_background_hover_color">Link Button Background Hover Color</label>
							<input name="params[ht_view1_linkbutton_background_hover_color]" type="text" class="color" id="ht_view1_linkbutton_background_hover_color" value="#<?php echo $param_values['ht_view1_linkbutton_background_hover_color']; ?>" size="10" />
						</div>
					</div>
                                    
                                        
                                        
                                        <div style="margin-top: 14px;">
						<h3>Description</h3>
						<div class="has-background">
							<label for="ht_view1_show_description">Show Description</label>
							<input type="hidden" value="off" name="params[ht_view1_show_description]" />
							<input type="checkbox" id="ht_view1_show_description"  <?php if($param_values['ht_view1_show_description']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view1_show_description]" value="on" />
						</div>
						<div>
							<label for="ht_view1_description_font_size">Description Font Size</label>
							<input type="text" name="params[ht_view1_description_font_size]" id="ht_view1_description_font_size" value="<?php echo $param_values['ht_view1_description_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div class="has-background">
							<label for="ht_view1_description_color">Description Font Color</label>
							<input name="params[ht_view1_description_color]" type="text" class="color" id="ht_view1_description_color" value="#<?php echo $param_values['ht_view1_description_color']; ?>" size="10" />
						</div>
					</div>
                                        
                                        <div style="margin-top:14px;">
                                            <h3>Category styles</h3>
                                                <div style="display: none;">
                                                    <label for="ht_view1_show_filtering" style="display: none;">Show Filtering</label>
                                                    <input type="hidden" value="off" name="params[ht_view1_show_filtering]" />
                                                    <input type="checkbox" id="ht_view1_show_filtering"  <?php if($param_values['ht_view1_show_filtering']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view1_show_filtering]" value="on" />
                                                </div>	
                                                <div class="">
                                                    <label for="ht_view1_cat_all">Show All Category Button Name</label>
                                                    <input type="text" name="params[ht_view1_cat_all]" id="ht_view1_cat_all" value="<?php echo $param_values['ht_view1_cat_all']; ?>" class="text" />
                                                </div>														
                                                <div class="has-background">
                                                    <label for="ht_view1_filterbutton_font_size">Filter Button Font Size</label>
                                                    <input type="text" name="params[ht_view1_filterbutton_font_size]" id="ht_view1_filterbutton_font_size" value="<?php echo $param_values['ht_view1_filterbutton_font_size']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="">
                                                    <label for="ht_view1_filterbutton_font_color">Filter Button Font Color</label>
                                                    <input name="params[ht_view1_filterbutton_font_color]" type="text" class="color" id="ht_view1_filterbutton_font_color" value="#<?php echo $param_values['ht_view1_filterbutton_font_color']; ?>" size="10" />
                                                </div>
                                                <div class="has-background">
                                                    <label for="ht_view1_filterbutton_hover_font_color">Filter Button Font Hover Color</label>
                                                    <input name="params[ht_view1_filterbutton_hover_font_color]" type="text" class="color" id="ht_view1_filterbutton_hover_font_color" value="#<?php echo $param_values['ht_view1_filterbutton_hover_font_color']; ?>" size="10" />
                                                </div>
                                                <div class="">
                                                    <label for="ht_view1_filterbutton_background_color">Filter Button Background Color</label>
                                                    <input name="params[ht_view1_filterbutton_background_color]" type="text" class="color" id="ht_view1_filterbutton_background_color" value="#<?php echo $param_values['ht_view1_filterbutton_background_color']; ?>" size="10" />
                                                </div>
                                                <div class="has-background">
                                                        <label for="ht_view1_filterbutton_hover_background_color">Filter Button Background Hover Color</label>
                                                        <input name="params[ht_view1_filterbutton_hover_background_color]" type="text" class="color" id="ht_view1_filterbutton_hover_background_color" value="#<?php echo $param_values['ht_view1_filterbutton_hover_background_color']; ?>" size="10" />
                                                </div>
                                                <div class="" style="display: none;">
                                                    <label for="ht_view1_filterbutton_border_width">Filter Button Border Width</label>
                                                    <input type="text" name="params[ht_view1_filterbutton_border_width]" id="ht_view1_filterbutton_border_width" value="<?php echo $param_values['ht_view1_filterbutton_border_width']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div style="display: none;">
                                                    <input name="params[ht_view1_filterbutton_border_color]" type="text" class="color" id="ht_view1_filterbutton_border_color" value="#<?php echo $param_values['ht_view1_filterbutton_border_color']; ?>" size="10" />
                                                    <label for="ht_view1_filterbutton_border_color">Filter Button Border Color</label>
                                                </div>
                                                <div class="">
                                                    <label for="ht_view1_filterbutton_border_radius">Filter Button Border Radius</label>
                                                    <input type="text" name="params[ht_view1_filterbutton_border_radius]" id="ht_view1_filterbutton_border_radius" value="<?php echo $param_values['ht_view1_filterbutton_border_radius']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="has-background">
                                                    <label for="ht_view1_filterbutton_border_padding">Filter Button Padding</label>
                                                    <input type="text" name="params[ht_view1_filterbutton_border_padding]" id="ht_view1_filterbutton_border_padding" value="<?php echo $param_values['ht_view1_filterbutton_border_padding']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div style="display: none;">
                                                    <label for="ht_view1_filterbutton_margin">Filter Button Margins</label>
                                                    <input type="text" name="params[ht_view1_filterbutton_margin]" id="ht_view1_filterbutton_margin" value="<?php echo $param_values['ht_view1_filterbutton_margin']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="">
                                                    <label for="ht_view1_filtering_float">Filter block Position</label>
                                                    <select id="ht_view1_filtering_float" name="params[ht_view1_filtering_float]">	
                                                      <option <?php if($param_values['ht_view1_filtering_float'] == 'left'){ echo 'selected="selected"'; } ?> value="left">Left</option>
                                                      <option <?php if($param_values['ht_view1_filtering_float'] == 'right'){ echo 'selected="selected"'; } ?> value="right">Right</option>
                                                      <option <?php if($param_values['ht_view1_filtering_float'] == 'top'){ echo 'selected="selected"'; } ?> value="top">Top</option>
                                                    </select>
                                                </div>
                                                <div class="has-background">
							<label for="ht_view1_sorting_name_by_default">Sort By Default Bottom Name</label>
							<input name="params[ht_view1_sorting_name_by_default]" type="text" id="ht_view1_sorting_name_by_default" value="<?php echo $param_values['ht_view1_sorting_name_by_default']; ?>" size="10" class="text"/>
						</div>
						<div class="">
							<label for="ht_view1_sorting_name_by_id">Sorting By ID Button Name</label>
							<input name="params[ht_view1_sorting_name_by_id]" type="text" id="ht_view1_sorting_name_by_id" value="<?php echo $param_values['ht_view1_sorting_name_by_id']; ?>" size="10" />
						</div>
                                                <div class="has-background">
							<label for="ht_view1_sorting_name_by_name">Sorting By ID Button Name</label>
							<input name="params[ht_view1_sorting_name_by_name]" type="text" id="ht_view1_sorting_name_by_name" value="<?php echo $param_values['ht_view1_sorting_name_by_name']; ?>" size="10" />
						</div>
						<div class="">
							<label for="ht_view1_sorting_name_by_random">Random Sorting Button Name</label>
							<input name="params[ht_view1_sorting_name_by_random]" type="text" id="ht_view1_sorting_name_by_random" value="<?php echo $param_values['ht_view1_sorting_name_by_random']; ?>" size="10" />
						</div>
                                                <div class="has-background">
							<label for="ht_view1_sorting_name_by_asc">Ascedding Sorting Button Name</label>
							<input name="params[ht_view1_sorting_name_by_asc]" type="text" id="ht_view1_sorting_name_by_asc" value="<?php echo $param_values['ht_view1_sorting_name_by_asc']; ?>" size="10" />
						</div>
						<div class="">
							<label for="ht_view1_sorting_name_by_desc">Descedding Sorting Button Name</label>
							<input name="params[ht_view1_sorting_name_by_desc]" type="text" id="ht_view1_sorting_name_by_desc" value="<?php echo $param_values['ht_view1_sorting_name_by_desc']; ?>" size="10" />
						</div>
                                        </div>
                                        
                                        <div style="margin-top: -574px;">
                                            <h3>Sorting styles</h3>
                                            <div class="" style="display: none;">
                                                    <label for="ht_view1_show_sorting" style="display: none;">Show Sorting</label>
                                                    <input type="hidden" value="off" name="params[ht_view1_show_sorting]" />
                                                    <input type="checkbox" id="ht_view1_show_sorting"  <?php if($param_values['ht_view1_show_sorting']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view1_show_sorting]" value="on" />
                                            </div>
                                            <div class="has-background">
                                                    <label for="ht_view1_sortbutton_font_size">Sort Button Font Size</label>
                                                    <input type="text" name="params[ht_view1_sortbutton_font_size]" id="ht_view1_sortbutton_font_size" value="<?php echo $param_values['ht_view1_sortbutton_font_size']; ?>" class="text" />
                                                    <span>px</span>
                                            </div>
                                            <div class="">
                                                    <label for="ht_view1_sortbutton_font_color">Sort Button Font Color</label>
                                                    <input name="params[ht_view1_sortbutton_font_color]" type="text" class="color" id="ht_view1_sortbutton_font_color" value="#<?php echo $param_values['ht_view1_sortbutton_font_color']; ?>" size="10" />
                                            </div>
                                            <div class="has-background">
                                                    <label for="ht_view1_sortbutton_hover_font_color">Sort Button Font Hover Color</label>
                                                    <input name="params[ht_view1_sortbutton_hover_font_color]" type="text" class="color" id="ht_view1_sortbutton_hover_font_color" value="#<?php echo $param_values['ht_view1_sortbutton_hover_font_color']; ?>" size="10" />
                                            </div>
                                            <div class="">
                                                    <label for="ht_view1_sortbutton_background_color">Sort Button Background Color</label>
                                                    <input name="params[ht_view1_sortbutton_background_color]" type="text" class="color" id="ht_view1_sortbutton_background_color" value="#<?php echo $param_values['ht_view1_sortbutton_background_color']; ?>" size="10" />
                                            </div>
                                            <div class="has-background">
                                                    <label for="ht_view1_sortbutton_hover_background_color">Sort Button Background Hover Color</label>
                                                    <input name="params[ht_view1_sortbutton_hover_background_color]" type="text" class="color" id="ht_view1_sortbutton_hover_background_color" value="#<?php echo $param_values['ht_view1_sortbutton_hover_background_color']; ?>" size="10" />
                                            </div>
                                            <div class="has-background" style="display: none;">
                                                    <label for="ht_view1_sortbutton_border_width">Sort Button Border Width</label>
                                                    <input type="text" name="params[ht_view1_sortbutton_border_width]" id="ht_view1_sortbutton_border_width" value="<?php echo $param_values['ht_view1_sortbutton_border_width']; ?>" class="text" />
                                                    <span>px</span>
                                            </div>
                                            <div style="display: none;">
                                                    <input name="params[ht_view1_sortbutton_border_color]" type="text" class="color" id="ht_view1_sortbutton_border_color" value="#<?php echo $param_values['ht_view1_sortbutton_border_color']; ?>" size="10" />
                                                    <label for="ht_view1_sortbutton_border_color">Sort Button Border Color</label>
                                            </div>
                                                <div class="">
                                                    <label for="ht_view1_sortbutton_border_radius">Sort Button Border Radius</label>
                                                    <input type="text" name="params[ht_view1_sortbutton_border_radius]" id="ht_view1_sortbutton_border_radius" value="<?php echo $param_values['ht_view1_sortbutton_border_radius']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="has-background">
                                                    <label for="ht_view1_sortbutton_border_padding">Sort Button Padding</label>
                                                    <input type="text" name="params[ht_view1_sortbutton_border_padding]" id="ht_view1_sortbutton_border_padding" value="<?php echo $param_values['ht_view1_sortbutton_border_padding']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div  style="display: none;">
                                                    <label for="ht_view1_sortbutton_margin">Sort Button Margins</label>
                                                    <input type="text" name="params[ht_view1_sortbutton_margin]" id="ht_view1_sortbutton_margin" value="<?php echo $param_values['ht_view1_sortbutton_margin']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="">
                                                    <label for="ht_view1_sorting_float">Sort block Position</label>
                                                    <select id="ht_view1_sorting_float" name="params[ht_view1_sorting_float]">	
                                                      <option <?php if($param_values['ht_view1_sorting_float'] == 'left'){ echo 'selected="selected"'; } ?> value="left">Left</option>
                                                      <option <?php if($param_values['ht_view1_sorting_float'] == 'right'){ echo 'selected="selected"'; } ?> value="right">Right</option>
                                                      <option <?php if($param_values['ht_view1_sorting_float'] == 'top'){ echo 'selected="selected"'; } ?> value="top">Top</option>
                                                    </select>
						</div>
                                        </div>
				</li>

				<!-- VIEW 2 POPUP -->
				<li id="portfolio-view-options-2">
					<div>
						<h3>Element Styles</h3>
						<div class="has-background">
							<label for="ht_view2_element_width">Element Width</label>
							<input type="text" name="params[ht_view2_element_width]" id="ht_view2_element_width" value="<?php echo $param_values['ht_view2_element_width']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view2_element_height">Element Height</label>
							<input type="text" name="params[ht_view2_element_height]" id="ht_view2_element_height" value="<?php echo $param_values['ht_view2_element_height']; ?>" class="text" />
							<span>px</span>
						</div>
						<div class="has-background">
							<label for="ht_view2_element_background_color">Element Background Color</label>
							<input name="params[ht_view2_element_background_color]" type="text" class="color" id="ht_view2_element_background_color" value="#<?php echo $param_values['ht_view2_element_background_color']; ?>" size="10" />
						</div>
						<div>
							<label for="ht_view2_element_border_width">Element Border Width</label>
							<input type="text" name="params[ht_view2_element_border_width]" id="ht_view2_element_border_width" value="<?php echo $param_values['ht_view2_element_border_width']; ?>" class="text" />
							<span>px</span>
						</div>
						<div class="has-background">
							<label for="ht_view2_element_border_color">Element Border Color</label>
							<input name="params[ht_view2_element_border_color]" type="text" class="color" id="ht_view2_element_border_color" value="#<?php echo $param_values['ht_view2_element_border_color']; ?>" size="10" />
						</div>
						<div>
							<label for="ht_view2_element_overlay_color">Element's Image Overlay Color</label>
							<input name="params[ht_view2_element_overlay_color]" type="text" class="color" id="ht_view2_element_overlay_color" value="#<?php echo $param_values['ht_view2_element_overlay_color']; ?>" size="10" />
						</div>
						<div class="has-background">
							<label for="ht_view2_zoombutton_style">Element's Image Overlay Transparency</label>
							<div class="slider-container">
								<input name="params[ht_view2_element_overlay_transparency]" id="ht_view2_element_overlay_transparency" data-slider-highlight="true"  data-slider-values="0,10,20,30,40,50,60,70,80,90,100" type="text" data-slider="true" value="<?php echo $param_values['ht_view2_element_overlay_transparency']; ?>" />
								<span><?php echo $param_values['ht_view2_element_overlay_transparency']; ?>%</span>
							</div>
						</div>
						<div>
							<label for="ht_view2_zoombutton_style">Zoom Image Style</label>
							<select id="ht_view2_zoombutton_style" name="params[ht_view2_zoombutton_style]">	
							  <option <?php if($param_values['ht_view2_zoombutton_style'] == 'light'){ echo 'selected="selected"'; } ?> value="light">Light</option>
							  <option <?php if($param_values['ht_view2_zoombutton_style'] == 'dark'){ echo 'selected="selected"'; } ?> value="dark">Dark</option>
							</select>
						</div>
					</div>
					<div>					
						<h3>Element Title</h3>
						<div class="has-background">
							<label for="ht_view2_element_title_font_size">Element Title Font Size</label>
							<input type="text" name="params[ht_view2_element_title_font_size]" id="ht_view2_element_title_font_size" value="<?php echo $param_values['ht_view2_element_title_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view2_element_title_font_color">Element Title Font Color</label>
							<input name="params[ht_view2_element_title_font_color]" type="text" class="color" id="ht_view2_element_title_font_color" value="#<?php echo $param_values['ht_view2_element_title_font_color']; ?>" size="10" />
						</div>
					</div>
					<div>					
						<h3>Element Link Button</h3>
						<div class="has-background">
							<label for="ht_view2_element_show_linkbutton">Show Link Button On Element</label>
							<input type="hidden" value="off" name="params[ht_view2_element_show_linkbutton]" />
							<input type="checkbox" id="ht_view2_element_show_linkbutton"  <?php if($param_values['ht_view2_element_show_linkbutton']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view2_element_show_linkbutton]" value="on" />
						</div>
						<div>
							<label for="ht_view2_element_linkbutton_text">Link Button Text</label>
							<input type="text" name="params[ht_view2_element_linkbutton_text]" id="ht_view2_element_linkbutton_text" value="<?php echo $param_values['ht_view2_element_linkbutton_text']; ?>" class="text" />
						</div>
						<div class="has-background">
							<label for="ht_view2_element_linkbutton_font_size">Link Button Font Size</label>
							<input type="text" name="params[ht_view2_element_linkbutton_font_size]" id="ht_view2_element_linkbutton_font_size" value="<?php echo $param_values['ht_view2_element_linkbutton_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view2_element_linkbutton_color">Link Button Font Color</label>
							<input name="params[ht_view2_element_linkbutton_color]" type="text" class="color" id="ht_view2_element_linkbutton_color" value="#<?php echo $param_values['ht_view2_element_linkbutton_color']; ?>" size="10" />
						</div>
						<div class="has-background">
							<label for="ht_view2_element_linkbutton_background_color">Link Button Background Color</label>
							<input name="params[ht_view2_element_linkbutton_background_color]" type="text" class="color" id="ht_view2_element_linkbutton_background_color" value="#<?php echo $param_values['ht_view2_element_linkbutton_background_color']; ?>" size="10" />
						</div>
					</div>
					
                                        <div style="margin-top: -36px;">
                                            <h3>Sorting styles</h3>
                                            <div class="" style="display: none;">
                                                    <label for="ht_view2_show_sorting" style="display: none;">Show Sorting</label>
                                                    <input type="hidden" value="off" name="params[ht_view2_show_sorting]" />
                                                    <input type="checkbox" id="ht_view2_show_sorting"  <?php if($param_values['ht_view2_show_sorting']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view2_show_sorting]" value="on" />
                                            </div>

                                            <div class="has-background">
                                                    <label for="ht_view2_sortbutton_font_size">Sort Button Font Size</label>
                                                    <input type="text" name="params[ht_view2_sortbutton_font_size]" id="ht_view2_sortbutton_font_size" value="<?php echo $param_values['ht_view2_sortbutton_font_size']; ?>" class="text" />
                                                    <span>px</span>
                                            </div>
                                            <div class="">
                                                    <label for="ht_view2_sortbutton_font_color">Sort Button Font Color</label>
                                                    <input name="params[ht_view2_sortbutton_font_color]" type="text" class="color" id="ht_view2_sortbutton_font_color" value="#<?php echo $param_values['ht_view2_sortbutton_font_color']; ?>" size="10" />
                                            </div>
                                            <div class="has-background">
                                                    <label for="ht_view2_sortbutton_hover_font_color">Sort Button Font Hover Color</label>
                                                    <input name="params[ht_view2_sortbutton_hover_font_color]" type="text" class="color" id="ht_view2_sortbutton_hover_font_color" value="#<?php echo $param_values['ht_view2_sortbutton_hover_font_color']; ?>" size="10" />
                                            </div>
                                            <div class="">
                                                    <label for="ht_view2_sortbutton_background_color">Sort Button Background Color</label>
                                                    <input name="params[ht_view2_sortbutton_background_color]" type="text" class="color" id="ht_view2_sortbutton_background_color" value="#<?php echo $param_values['ht_view2_sortbutton_background_color']; ?>" size="10" />
                                            </div>
                                            <div class="has-background">
                                                    <label for="ht_view2_sortbutton_hover_background_color">Sort Button Background Hover Color</label>
                                                    <input name="params[ht_view2_sortbutton_hover_background_color]" type="text" class="color" id="ht_view2_sortbutton_hover_background_color" value="#<?php echo $param_values['ht_view2_sortbutton_hover_background_color']; ?>" size="10" />
                                            </div>
                                            <div class="" style="display: none;">
                                                    <label for="ht_view2_sortbutton_border_width">Sort Button Border Width</label>
                                                    <input type="text" name="params[ht_view2_sortbutton_border_width]" id="ht_view2_sortbutton_border_width" value="<?php echo $param_values['ht_view2_sortbutton_border_width']; ?>" class="text" />
                                                    <span>px</span>
                                            </div>
                                            <div style="display: none;">
                                                    <input name="params[ht_view2_sortbutton_border_color]" type="text" class="color" id="ht_view2_sortbutton_border_color" value="#<?php echo $param_values['ht_view2_sortbutton_border_color']; ?>" size="10" />
                                                    <label for="ht_view2_sortbutton_border_color">Sort Button Border Color</label>
                                            </div>
                                                <div class="">
                                                    <label for="ht_view2_sortbutton_border_radius">Sort Button Border Radius</label>
                                                    <input type="text" name="params[ht_view2_sortbutton_border_radius]" id="ht_view2_sortbutton_border_radius" value="<?php echo $param_values['ht_view2_sortbutton_border_radius']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="has-background">
                                                    <label for="ht_view2_sortbutton_border_padding">Sort Button Padding</label>
                                                    <input type="text" name="params[ht_view2_sortbutton_border_padding]" id="ht_view2_sortbutton_border_padding" value="<?php echo $param_values['ht_view2_sortbutton_border_padding']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="" style="display: none;">
                                                    <label for="ht_view2_sortbutton_margin">Sort Button Margins</label>
                                                    <input type="text" name="params[ht_view2_sortbutton_margin]" id="ht_view2_sortbutton_margin" value="<?php echo $param_values['ht_view2_sortbutton_margin']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="">
                                                    <label for="ht_view2_sorting_float">Sort block Position</label>
                                                    <select id="ht_view2_sorting_float" name="params[ht_view2_sorting_float]">	
                                                      <option <?php if($param_values['ht_view2_sorting_float'] == 'left'){ echo 'selected="selected"'; } ?> value="left">Left</option>
                                                      <option <?php if($param_values['ht_view2_sorting_float'] == 'right'){ echo 'selected="selected"'; } ?> value="right">Right</option>
                                                      <option <?php if($param_values['ht_view2_sorting_float'] == 'top'){ echo 'selected="selected"'; } ?> value="top">Top</option>
                                                    </select>
						</div>
                                                <div class="has-background">
							<label for="ht_view2_sorting_name_by_default">Sort By Default Bottom Name</label>
							<input name="params[ht_view2_sorting_name_by_default]" type="text" id="ht_view2_sorting_name_by_default" value="<?php echo $param_values['ht_view2_sorting_name_by_default']; ?>" size="10" class="text"/>
						</div>
						<div class="">
							<label for="ht_view2_sorting_name_by_id">Sorting By ID Button Name</label>
							<input name="params[ht_view2_sorting_name_by_id]" type="text" id="ht_view2_sorting_name_by_id" value="<?php echo $param_values['ht_view2_sorting_name_by_id']; ?>" size="10" />
						</div>
                                                <div class="has-background">
							<label for="ht_view2_sorting_name_by_name">Sorting By ID Button Name</label>
							<input name="params[ht_view2_sorting_name_by_name]" type="text" id="ht_view2_sorting_name_by_name" value="<?php echo $param_values['ht_view2_sorting_name_by_name']; ?>" size="10" />
						</div>
						<div class="">
							<label for="ht_view2_sorting_name_by_random">Random Sorting Button Name</label>
							<input name="params[ht_view2_sorting_name_by_random]" type="text" id="ht_view2_sorting_name_by_random" value="<?php echo $param_values['ht_view2_sorting_name_by_random']; ?>" size="10" />
						</div>
                                                <div class="has-background">
							<label for="ht_view2_sorting_name_by_asc">Ascedding Sorting Button Name</label>
							<input name="params[ht_view2_sorting_name_by_asc]" type="text" id="ht_view2_sorting_name_by_asc" value="<?php echo $param_values['ht_view2_sorting_name_by_asc']; ?>" size="10" />
						</div>
						<div class="">
							<label for="ht_view2_sorting_name_by_desc">Descedding Sorting Button Name</label>
							<input name="params[ht_view2_sorting_name_by_desc]" type="text" id="ht_view2_sorting_name_by_desc" value="<?php echo $param_values['ht_view2_sorting_name_by_desc']; ?>" size="10" />
						</div>
                                        </div>
                                        
                                        <div style="margin-top: 14px;">
                                            <h3>Category styles</h3>
                                            
                                            <div style="display: none;">
                                                    <label for="ht_view2_show_filtering" style="display: none;">Show Filtering</label>
                                                    <input type="hidden" value="off" name="params[ht_view2_show_filtering]" />
                                                    <input type="checkbox" id="ht_view2_show_filtering"  <?php if($param_values['ht_view2_show_filtering']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view2_show_filtering]" value="on" />
                                            </div>
                                                <div class="">
                                                    <label for="ht_view2_cat_all">Show All Category Button Name</label>
                                                    <input type="text" name="params[ht_view2_cat_all]" id="ht_view2_cat_all" value="<?php echo $param_values['ht_view2_cat_all']; ?>" class="text" />
                                                </div>			
                                            <div class="has-background">
                                                    <label for="ht_view2_filterbutton_font_size">Filter Button Font Size</label>
                                                    <input type="text" name="params[ht_view2_filterbutton_font_size]" id="ht_view2_filterbutton_font_size" value="<?php echo $param_values['ht_view2_filterbutton_font_size']; ?>" class="text" />
                                                    <span>px</span>
                                            </div>
                                            <div class="">
                                                    <label for="ht_view2_filterbutton_font_color">Filter Button Font Color</label>
                                                    <input name="params[ht_view2_filterbutton_font_color]" type="text" class="color" id="ht_view2_filterbutton_font_color" value="#<?php echo $param_values['ht_view2_filterbutton_font_color']; ?>" size="10" />
                                            </div>
                                            <div class="has-background">
                                                    <label for="ht_view2_filterbutton_hover_font_color">Filter Button Font Hover Color</label>
                                                    <input name="params[ht_view2_filterbutton_hover_font_color]" type="text" class="color" id="ht_view2_filterbutton_hover_font_color" value="#<?php echo $param_values['ht_view2_filterbutton_hover_font_color']; ?>" size="10" />
                                            </div>
                                            <div class="">
                                                    <label for="ht_view2_filterbutton_background_color">Filter Button Background Color</label>
                                                    <input name="params[ht_view2_filterbutton_background_color]" type="text" class="color" id="ht_view2_filterbutton_background_color" value="#<?php echo $param_values['ht_view2_filterbutton_background_color']; ?>" size="10" />
                                            </div>
                                            <div class="has-background">
                                                    <label for="ht_view2_filterbutton_hover_background_color">Filter Button Background Hover Color</label>
                                                    <input name="params[ht_view2_filterbutton_hover_background_color]" type="text" class="color" id="ht_view2_filterbutton_hover_background_color" value="#<?php echo $param_values['ht_view2_filterbutton_hover_background_color']; ?>" size="10" />
                                            </div>

                                            <div class="" style="display: none;">
                                                    <label for="ht_view2_filterbutton_border_width">Filter Button Border Width</label>
                                                    <input type="text" name="params[ht_view2_filterbutton_border_width]" id="ht_view2_filterbutton_border_width" value="<?php echo $param_values['ht_view2_filterbutton_border_width']; ?>" class="text" />
                                                    <span>px</span>
                                            </div>
                                            <div style="display: none;">
                                                    <input name="params[ht_view2_filterbutton_border_color]" type="text" class="color" id="ht_view2_filterbutton_border_color" value="#<?php echo $param_values['ht_view2_filterbutton_border_color']; ?>" size="10" />
                                                    <label for="ht_view2_filterbutton_border_color">Filter Button Border Color</label>
                                            </div>
                                                <div class="">
                                                    <label for="ht_view2_filterbutton_border_radius">Filter Button Border Radius</label>
                                                    <input type="text" name="params[ht_view2_filterbutton_border_radius]" id="ht_view2_filterbutton_border_radius" value="<?php echo $param_values['ht_view2_filterbutton_border_radius']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="has-background">
                                                    <label for="ht_view2_filterbutton_border_padding">Filter Button Padding</label>
                                                    <input type="text" name="params[ht_view2_filterbutton_border_padding]" id="ht_view2_filterbutton_border_padding" value="<?php echo $param_values['ht_view2_filterbutton_border_padding']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div style="display: none;">
                                                    <label for="ht_view2_filterbutton_margin">Filter Button Margins</label>
                                                    <input type="text" name="params[ht_view2_filterbutton_margin]" id="ht_view2_filterbutton_margin" value="<?php echo $param_values['ht_view2_filterbutton_margin']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="">
                                                    <label for="ht_view2_filtering_float">Filter block Position</label>
                                                    <select id="ht_view2_filtering_float" name="params[ht_view2_filtering_float]">	
                                                      <option <?php if($param_values['ht_view2_filtering_float'] == 'left'){ echo 'selected="selected"'; } ?> value="left">Left</option>
                                                      <option <?php if($param_values['ht_view2_filtering_float'] == 'right'){ echo 'selected="selected"'; } ?> value="right">Right</option>
                                                      <option <?php if($param_values['ht_view2_filtering_float'] == 'top'){ echo 'selected="selected"'; } ?> value="top">Top</option>
                                                    </select>
                                                </div>
                                        </div>
                                        
                                        
                                    <div style="margin-top: 14px;">	
						<h3>Popup Title</h3>
						<div class="has-background">
							<label for="ht_view2_popup_title_font_size">Popup Title Font Size</label>
							<input type="text" name="params[ht_view2_popup_title_font_size]" id="ht_view2_element_title_font_size" value="<?php echo $param_values['ht_view2_popup_title_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view2_popup_title_font_color">Popup Title Font Color</label>
							<input name="params[ht_view2_popup_title_font_color]" type="text" class="color" id="ht_view2_element_title_font_color" value="#<?php echo $param_values['ht_view2_popup_title_font_color']; ?>" size="10" />
						</div>
					</div>
					<div style="margin-top: 14px;" >
						<h3>Popup Thumbnails</h3>
						<div class="has-background">
							<label for="ht_view2_show_thumbs">Show Thumbnails</label>
							<input type="hidden" value="off" name="params[ht_view2_show_thumbs]" />
							<input type="checkbox" id="ht_view2_show_thumbs"  <?php if($param_values['ht_view2_show_thumbs']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view2_show_thumbs]" value="on" />
						</div>
						<div>
							<label for="ht_view2_thumbs_position">Thumbnails Position</label>
							<select id="ht_view2_thumbs_position" name="params[ht_view2_thumbs_position]">	
							  <option <?php if($param_values['ht_view2_thumbs_position'] == 'before'){ echo 'selected="selected"'; } ?> value="before">Before Description</option>
							  <option <?php if($param_values['ht_view2_thumbs_position'] == 'after'){ echo 'selected="selected"'; } ?> value="after">After Description</option>
							</select>
						</div>
						<div class="has-background">
							<label for="ht_view2_thumbs_width">Thumbnails Width</label>
							<input type="text" name="params[ht_view2_thumbs_width]" id="ht_view2_thumbs_width" value="<?php echo $param_values['ht_view2_thumbs_width']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view2_thumbs_height">Thumbnails Width</label>
							<input type="text" name="params[ht_view2_thumbs_height]" id="ht_view2_thumbs_height" value="<?php echo $param_values['ht_view2_thumbs_height']; ?>" class="text" />
							<span>px</span>
						</div>
					</div>
                                        <div style="margin-top: -224px;">
						<h3>Popup Description</h3>
						<div class="has-background">
							<label for="ht_view2_show_description">Show Description</label>
							<input type="hidden" value="off" name="params[ht_view2_show_description]" />
							<input type="checkbox" id="ht_view2_show_description"  <?php if($param_values['ht_view2_show_description']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view2_show_description]" value="on" />
						</div>
						<div>
							<label for="ht_view2_description_font_size">Description Font Size</label>
							<input type="text" name="params[ht_view2_description_font_size]" id="ht_view2_description_font_size" value="<?php echo $param_values['ht_view2_description_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div class="has-background">
							<label for="ht_view2_description_color">Description Font Color</label>
							<input name="params[ht_view2_description_color]" type="text" class="color" id="ht_view2_description_color" value="#<?php echo $param_values['ht_view2_description_color']; ?>" size="10" />
						</div>
					</div>
					<div style="margin-top: -10px;">
						<h3>Popup Link Button</h3>
						<div class="has-background">
							<label for="ht_view2_show_popup_linkbutton">Show Link Button</label>
							<input type="hidden" value="off" name="params[ht_view2_show_popup_linkbutton]" />
							<input type="checkbox" id="ht_view2_show_popup_linkbutton"  <?php if($param_values['ht_view2_show_popup_linkbutton']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view2_show_popup_linkbutton]" value="on" />
						</div>
						<div>
							<label for="ht_view2_popup_linkbutton_text">Link Button Text</label>
							<input type="text" name="params[ht_view2_popup_linkbutton_text]" id="ht_view2_popup_linkbutton_text" value="<?php echo $param_values['ht_view2_popup_linkbutton_text']; ?>" class="text" />
						</div>
						<div class="has-background">
							<label for="ht_view2_popup_linkbutton_font_size">Link Button Font Size</label>
							<input type="text" name="params[ht_view2_popup_linkbutton_font_size]" id="ht_view2_popup_linkbutton_font_size" value="<?php echo $param_values['ht_view2_popup_linkbutton_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view2_popup_linkbutton_color">Link Button Font Color</label>
							<input name="params[ht_view2_popup_linkbutton_color]" type="text" class="color" id="ht_view2_popup_linkbutton_color" value="#<?php echo $param_values['ht_view2_popup_linkbutton_color']; ?>" size="10" />
						</div>
						<div class="has-background">
							<label for="ht_view2_popup_linkbutton_font_hover_color">Link Button Font Hover Color</label>
							<input name="params[ht_view2_popup_linkbutton_font_hover_color]" type="text" class="color" id="ht_view2_popup_linkbutton_font_hover_color" value="#<?php echo $param_values['ht_view2_popup_linkbutton_font_hover_color']; ?>" size="10" />
						</div>
						<div>
							<label for="ht_view2_popup_linkbutton_background_color">Link Button Background Color</label>
							<input name="params[ht_view2_popup_linkbutton_background_color]" type="text" class="color" id="ht_view2_popup_linkbutton_background_color" value="#<?php echo $param_values['ht_view2_popup_linkbutton_background_color']; ?>" size="10" />
						</div>
						<div class="has-background">
							<label for="ht_view2_popup_linkbutton_background_hover_color">Link Button Background Hover Color</label>
							<input name="params[ht_view2_popup_linkbutton_background_hover_color]" type="text" class="color" id="ht_view2_popup_linkbutton_background_hover_color" value="#<?php echo $param_values['ht_view2_popup_linkbutton_background_hover_color']; ?>" size="10" />
						</div>
					</div>
                                    
                                        <div style="margin-top: 14px;">
						<h3>Popup Styles</h3>
                                                <div class="has-background">
							<label for="ht_view2_popup_full_width">Popup Image Full Width</label>
							<input type="hidden" value="off" name="params[ht_view2_popup_full_width]" />
							<input type="checkbox" id="ht_view2_popup_full_width"  <?php if($param_values['ht_view2_popup_full_width']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view2_popup_full_width]" value="on" />
						</div>
						<div class="">
							<label for="ht_view2_popup_background_color">Popup Background Color</label>
							<input name="params[ht_view2_popup_background_color]" type="text" class="color" id="ht_view2_popup_background_color" value="#<?php echo $param_values['ht_view2_popup_background_color']; ?>" size="10" />
						</div>
						<div class="has-background">
							<label for="ht_view2_popup_overlay_color">Popup Overlay Color</label>
							<input name="params[ht_view2_popup_overlay_color]" type="text" class="color" id="ht_view2_popup_overlay_color" value="#<?php echo $param_values['ht_view2_popup_overlay_color']; ?>" size="10" />
						</div>
						<div class="">
							<label for="ht_view2_popup_overlay_transparency_color">Popup Overlay Transparency</label>
							<div class="slider-container">
								<input name="params[ht_view2_popup_overlay_transparency_color]" id="ht_view2_popup_overlay_transparency_color" data-slider-highlight="true"  data-slider-values="0,10,20,30,40,50,60,70,80,90,100" type="text" data-slider="true" value="<?php echo $param_values['ht_view2_popup_overlay_transparency_color']; ?>" />
								<span><?php echo $param_values['ht_view2_popup_overlay_transparency_color']; ?>%</span>
							</div>
						</div>
						<div class="has-background">
							<label for="ht_view2_popup_closebutton_style">Popup Close Button Style</label>
							<select id="ht_view2_popup_closebutton_style" name="params[ht_view2_popup_closebutton_style]">	
							  <option <?php if($param_values['ht_view2_popup_closebutton_style'] == 'light'){ echo 'selected="selected"'; } ?> value="light">Light</option>
							  <option <?php if($param_values['ht_view2_popup_closebutton_style'] == 'dark'){ echo 'selected="selected"'; } ?> value="dark">Dark</option>
							</select>
						</div>
						<div class="">
							<label for="ht_view2_show_separator_lines">Show Separator Lines</label>
							<input type="hidden" value="off" name="params[ht_view2_show_separator_lines]" />
							<input type="checkbox" id="ht_view2_show_separator_lines"  <?php if($param_values['ht_view2_show_separator_lines']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view2_show_separator_lines]" value="on" />
						</div>
                                                
					</div>
                                        
                                    
				</li>	
				<!-- VIEW 3 Fullwidth -->
				<li id="portfolio-view-options-3">
					<div>
						<h3>Elements Styles</h3>
						<div class="has-background">
							<label for="ht_view3_mainimage_width">Main Image Width</label>
							<input type="text" name="params[ht_view3_mainimage_width]" id="ht_view3_mainimage_width" value="<?php echo $param_values['ht_view3_mainimage_width']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view3_element_background_color">Element Background Color</label>
							<input name="params[ht_view3_element_background_color]" type="text" class="color" id="ht_view3_element_background_color" value="#<?php echo $param_values['ht_view3_element_background_color']; ?>" size="10" />
						</div>
						<div class="has-background">
							<label for="ht_view3_element_border_width">Element Border Width</label>
							<input type="text" name="params[ht_view3_element_border_width]" id="ht_view3_element_border_width" value="<?php echo $param_values['ht_view3_element_border_width']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view3_element_border_color">Element Border Color</label>
							<input name="params[ht_view3_element_border_color]" type="text" class="color" id="ht_view3_element_border_color" value="#<?php echo $param_values['ht_view3_element_border_color']; ?>" size="10" />
						</div>
						<div class="has-background">
							<label for="ht_view3_show_separator_lines">Show Separator Lines</label>
							<input type="hidden" value="off" name="params[ht_view3_show_separator_lines]" />
							<input type="checkbox" id="ht_view3_show_separator_lines"  <?php if($param_values['ht_view3_show_separator_lines']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view3_show_separator_lines]" value="on" />
						</div>
					</div>
					<div>
						<h3>Title</h3>
						<div class="has-background">
							<label for="ht_view3_title_font_size">Title Font Size</label>
							<input type="text" name="params[ht_view3_title_font_size]" id="ht_view3_title_font_size" value="<?php echo $param_values['ht_view3_title_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view3_title_font_color">Title Font Color</label>
							<input name="params[ht_view3_title_font_color]" type="text" class="color" id="ht_view3_title_font_color" value="#<?php echo $param_values['ht_view3_title_font_color']; ?>" size="10" />
						</div>
					</div>
					<div>
						<h3>Thumbnails</h3>
						<div class="has-background">
							<label for="ht_view3_show_thumbs">Show Thumbnails</label>
							<input type="hidden" value="off" name="params[ht_view3_show_thumbs]" />
							<input type="checkbox" id="ht_view3_show_thumbs"  <?php if($param_values['ht_view3_show_thumbs']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view3_show_thumbs]" value="on" />
						</div>
						<div>
							<label for="ht_view3_thumbs_width">Thumbnails Width</label>
							<input type="text" name="params[ht_view3_thumbs_width]" id="ht_view3_thumbs_width" value="<?php echo $param_values['ht_view3_thumbs_width']; ?>" class="text" />
							<span>px</span>
						</div>
						<div class="has-background">
							<label for="ht_view3_thumbs_height">Thumbnails Width</label>
							<input type="text" name="params[ht_view3_thumbs_height]" id="ht_view3_thumbs_height" value="<?php echo $param_values['ht_view3_thumbs_height']; ?>" class="text" />
							<span>px</span>
						</div>
					</div>
                                        
                                        <div style="margin-top:-80px;">
                                            <h3>Sorting styles</h3>
                                            <div class="" style="display: none;">
                                                    <label for="ht_view3_show_sorting" style="display: none;">Show Sorting</label>
                                                    <input type="hidden" value="off" name="params[ht_view3_show_sorting]" />
                                                    <input type="checkbox" id="ht_view3_show_sorting"  <?php if($param_values['ht_view3_show_sorting']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view3_show_sorting]" value="on" />
                                            </div>
                                            <div class="has-background">
                                                    <label for="ht_view3_sortbutton_font_size">Sort Button Font Size</label>
                                                    <input type="text" name="params[ht_view3_sortbutton_font_size]" id="ht_view3_sortbutton_font_size" value="<?php echo $param_values['ht_view3_sortbutton_font_size']; ?>" class="text" />
                                                    <span>px</span>
                                            </div>
                                            <div class="">
                                                    <label for="ht_view3_sortbutton_font_color">Sort Button Font Color</label>
                                                    <input name="params[ht_view3_sortbutton_font_color]" type="text" class="color" id="ht_view3_sortbutton_font_color" value="#<?php echo $param_values['ht_view3_sortbutton_font_color']; ?>" size="10" />
                                            </div>
                                            <div class="has-background">
                                                    <label for="ht_view3_sortbutton_hover_font_color">Sort Button Font Hover Color</label>
                                                    <input name="params[ht_view3_sortbutton_hover_font_color]" type="text" class="color" id="ht_view3_sortbutton_hover_font_color" value="#<?php echo $param_values['ht_view3_sortbutton_hover_font_color']; ?>" size="10" />
                                            </div>
                                            <div class="">
                                                    <label for="ht_view3_sortbutton_background_color">Sort Button Background Color</label>
                                                    <input name="params[ht_view3_sortbutton_background_color]" type="text" class="color" id="ht_view3_sortbutton_background_color" value="#<?php echo $param_values['ht_view3_sortbutton_background_color']; ?>" size="10" />
                                            </div>
                                            <div class="has-background">
                                                    <label for="ht_view3_sortbutton_hover_background_color">Sort Button Background Hover Color</label>
                                                    <input name="params[ht_view3_sortbutton_hover_background_color]" type="text" class="color" id="ht_view3_sortbutton_hover_background_color" value="#<?php echo $param_values['ht_view3_sortbutton_hover_background_color']; ?>" size="10" />
                                            </div>
                                            <div class="" style="display: none;">
                                                    <label for="ht_view3_sortbutton_border_width">Sort Button Border Width</label>
                                                    <input type="text" name="params[ht_view3_sortbutton_border_width]" id="ht_view3_sortbutton_border_width" value="<?php echo $param_values['ht_view3_sortbutton_border_width']; ?>" class="text" />
                                                    <span>px</span>
                                            </div>
                                            <div style="display: none;">
                                                    <input name="params[ht_view3_sortbutton_border_color]" type="text" class="color" id="ht_view3_sortbutton_border_color" value="#<?php echo $param_values['ht_view3_sortbutton_border_color']; ?>" size="10" />
                                                    <label for="ht_view3_sortbutton_border_color">Sort Button Border Color</label>
                                            </div>
                                                <div class="">
                                                    <label for="ht_view3_sortbutton_border_radius">Sort Button Border Radius</label>
                                                    <input type="text" name="params[ht_view3_sortbutton_border_radius]" id="ht_view3_sortbutton_border_radius" value="<?php echo $param_values['ht_view3_sortbutton_border_radius']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div  class="has-background">
                                                    <label for="ht_view3_sortbutton_border_padding">Sort Button Padding</label>
                                                    <input type="text" name="params[ht_view3_sortbutton_border_padding]" id="ht_view3_sortbutton_border_padding" value="<?php echo $param_values['ht_view3_sortbutton_border_padding']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div style="display: none;">
                                                    <label for="ht_view3_sortbutton_margin">Sort Button Margins</label>
                                                    <input type="text" name="params[ht_view3_sortbutton_margin]" id="ht_view3_sortbutton_margin" value="<?php echo $param_values['ht_view3_sortbutton_margin']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="">
                                                    <label for="ht_view3_sorting_float">Sort block Position</label>
                                                    <select id="ht_view3_sorting_float" name="params[ht_view3_sorting_float]">	
                                                      <option <?php if($param_values['ht_view3_sorting_float'] == 'left'){ echo 'selected="selected"'; } ?> value="left">Left</option>
                                                      <option <?php if($param_values['ht_view3_sorting_float'] == 'right'){ echo 'selected="selected"'; } ?> value="right">Right</option>
                                                      <option <?php if($param_values['ht_view3_sorting_float'] == 'top'){ echo 'selected="selected"'; } ?> value="top">Top</option>
                                                    </select>
						</div>
                                                <div class="has-background">
							<label for="ht_view3_sorting_name_by_default">Sort By Default Bottom Name</label>
							<input name="params[ht_view3_sorting_name_by_default]" type="text" id="ht_view3_sorting_name_by_default" value="<?php echo $param_values['ht_view3_sorting_name_by_default']; ?>" size="10" class="text"/>
						</div>
						<div class="">
							<label for="ht_view3_sorting_name_by_id">Sorting By ID Button Name</label>
							<input name="params[ht_view3_sorting_name_by_id]" type="text" id="ht_view3_sorting_name_by_id" value="<?php echo $param_values['ht_view3_sorting_name_by_id']; ?>" size="10" />
						</div>
                                                <div class="has-background">
							<label for="ht_view3_sorting_name_by_name">Sorting By ID Button Name</label>
							<input name="params[ht_view3_sorting_name_by_name]" type="text" id="ht_view3_sorting_name_by_name" value="<?php echo $param_values['ht_view3_sorting_name_by_name']; ?>" size="10" />
						</div>
						<div class="">
							<label for="ht_view3_sorting_name_by_random">Random Sorting Button Name</label>
							<input name="params[ht_view3_sorting_name_by_random]" type="text" id="ht_view3_sorting_name_by_random" value="<?php echo $param_values['ht_view3_sorting_name_by_random']; ?>" size="10" />
						</div>
                                                <div class="has-background">
							<label for="ht_view3_sorting_name_by_asc">Ascedding Sorting Button Name</label>
							<input name="params[ht_view3_sorting_name_by_asc]" type="text" id="ht_view3_sorting_name_by_asc" value="<?php echo $param_values['ht_view3_sorting_name_by_asc']; ?>" size="10" />
						</div>
						<div class="">
							<label for="ht_view3_sorting_name_by_desc">Descedding Sorting Button Name</label>
							<input name="params[ht_view3_sorting_name_by_desc]" type="text" id="ht_view3_sorting_name_by_desc" value="<?php echo $param_values['ht_view3_sorting_name_by_desc']; ?>" size="10" />
						</div>
                                        </div>
                                        
                                        <div style="margin-top: 14px;">
                                            <h3>Category styles</h3>
                                            
                                            <div style="display: none;">
                                                    <label for="ht_view3_show_filtering" style="display: none;">Show Filtering</label>
                                                    <input type="hidden" value="off" name="params[ht_view3_show_filtering]" />
                                                    <input type="checkbox" id="ht_view3_show_filtering"  <?php if($param_values['ht_view3_show_filtering']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view3_show_filtering]" value="on" />
                                            </div>
                                                <div class="">
                                                    <label for="ht_view3_cat_all">Show All Category Button Name</label>
                                                    <input type="text" name="params[ht_view3_cat_all]" id="ht_view3_cat_all" value="<?php echo $param_values['ht_view3_cat_all']; ?>" class="text" />
                                                </div>			
                                            <div class="has-background">
                                                    <label for="ht_view3_filterbutton_font_size">Filter Button Font Size</label>
                                                    <input type="text" name="params[ht_view3_filterbutton_font_size]" id="ht_view3_filterbutton_font_size" value="<?php echo $param_values['ht_view3_filterbutton_font_size']; ?>" class="text" />
                                                    <span>px</span>
                                            </div>
                                            <div >
                                                    <label for="ht_view3_filterbutton_font_color">Filter Button Font Color</label>
                                                    <input name="params[ht_view3_filterbutton_font_color]" type="text" class="color" id="ht_view3_filterbutton_font_color" value="#<?php echo $param_values['ht_view3_filterbutton_font_color']; ?>" size="10" />
                                            </div>
                                            <div class="has-background">
                                                    <label for="ht_view3_filterbutton_hover_font_color">Filter Button Font Hover Color</label>
                                                    <input name="params[ht_view3_filterbutton_hover_font_color]" type="text" class="color" id="ht_view3_filterbutton_hover_font_color" value="#<?php echo $param_values['ht_view3_filterbutton_hover_font_color']; ?>" size="10" />
                                            </div>
                                            <div class="">
                                                    <label for="ht_view3_filterbutton_background_color">Filter Button Background Color</label>
                                                    <input name="params[ht_view3_filterbutton_background_color]" type="text" class="color" id="ht_view3_filterbutton_background_color" value="#<?php echo $param_values['ht_view3_filterbutton_background_color']; ?>" size="10" />
                                            </div>
                                            <div class="has-background">
                                                    <label for="ht_view3_filterbutton_hover_background_color">Filter Button Background Hover Color</label>
                                                    <input name="params[ht_view3_filterbutton_hover_background_color]" type="text" class="color" id="ht_view3_filterbutton_hover_background_color" value="#<?php echo $param_values['ht_view3_filterbutton_hover_background_color']; ?>" size="10" />
                                            </div>
                                            <div class="has-background" style="display: none;">
                                                    <label for="ht_view3_filterbutton_border_width">Filter Button Border Width</label>
                                                    <input type="text" name="params[ht_view3_filterbutton_border_width]" id="ht_view3_filterbutton_border_width" value="<?php echo $param_values['ht_view3_filterbutton_border_width']; ?>" class="text" />
                                                    <span>px</span>
                                            </div>
                                            <div style="display: none;">
                                                    <input name="params[ht_view3_filterbutton_border_color]" type="text" class="color" id="ht_view3_filterbutton_border_color" value="#<?php echo $param_values['ht_view3_filterbutton_border_color']; ?>" size="10" />
                                                    <label for="ht_view3_filterbutton_border_color">Filter Button Border Color</label>
                                            </div>
                                                <div class="">
                                                    <label for="ht_view3_filterbutton_border_radius">Filter Button Border Radius</label>
                                                    <input type="text" name="params[ht_view3_filterbutton_border_radius]" id="ht_view3_filterbutton_border_radius" value="<?php echo $param_values['ht_view3_filterbutton_border_radius']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="has-background">
                                                    <label for="ht_view3_filterbutton_border_padding">Filter Button Padding</label>
                                                    <input type="text" name="params[ht_view3_filterbutton_border_padding]" id="ht_view3_filterbutton_border_padding" value="<?php echo $param_values['ht_view3_filterbutton_border_padding']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div style="display: none;">
                                                    <label for="ht_view3_filterbutton_margin">Filter Button Margins</label>
                                                    <input type="text" name="params[ht_view3_filterbutton_margin]" id="ht_view3_filterbutton_margin" value="<?php echo $param_values['ht_view3_filterbutton_margin']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="">
                                                    <label for="ht_view3_filtering_float">Filter block Position</label>
                                                    <select id="ht_view3_filtering_float" name="params[ht_view3_filtering_float]">	
                                                      <option <?php if($param_values['ht_view3_filtering_float'] == 'left'){ echo 'selected="selected"'; } ?> value="left">Left</option>
                                                      <option <?php if($param_values['ht_view3_filtering_float'] == 'right'){ echo 'selected="selected"'; } ?> value="right">Right</option>
                                                      <option <?php if($param_values['ht_view3_filtering_float'] == 'top'){ echo 'selected="selected"'; } ?> value="top">Top</option>
                                                    </select>
                                                </div>
                                        </div>
                                        
					<div>
						<h3>Description</h3>
						<div class="has-background">
							<label for="ht_view3_show_description">Show Description</label>
							<input type="hidden" value="off" name="params[ht_view3_show_description]" />
							<input type="checkbox" id="ht_view3_show_description"  <?php if($param_values['ht_view3_show_description']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view3_show_description]" value="on" />
						</div>
						<div>
							<label for="ht_view3_description_font_size">Description Font Size</label>
							<input type="text" name="params[ht_view3_description_font_size]" id="ht_view3_description_font_size" value="<?php echo $param_values['ht_view3_description_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div class="has-background">
							<label for="ht_view3_description_color">Description Font Color</label>
							<input name="params[ht_view3_description_color]" type="text" class="color" id="ht_view3_description_color" value="#<?php echo $param_values['ht_view3_description_color']; ?>" size="10" />
						</div>
					</div>
					<div style="margin-top: -50px;">
						<h3>Link Button</h3>
						<div class="has-background">
							<label for="ht_view3_show_linkbutton">Show Link Button</label>
							<input type="hidden" value="off" name="params[ht_view3_show_linkbutton]" />
							<input type="checkbox" id="ht_view3_show_linkbutton"  <?php if($param_values['ht_view3_show_linkbutton']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view3_show_linkbutton]" value="on" />
						</div>
						<div>
							<label for="ht_view3_linkbutton_text">Link Button Text</label>
							<input type="text" name="params[ht_view3_linkbutton_text]" id="ht_view3_linkbutton_text" value="<?php echo $param_values['ht_view3_linkbutton_text']; ?>" class="text" />
						</div>
						<div class="has-background">
							<label for="ht_view3_linkbutton_font_size">Link Button Font Size</label>
							<input type="text" name="params[ht_view3_linkbutton_font_size]" id="ht_view3_linkbutton_font_size" value="<?php echo $param_values['ht_view3_linkbutton_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view3_linkbutton_color">Link Button Font Color</label>
							<input name="params[ht_view3_linkbutton_color]" type="text" class="color" id="ht_view3_linkbutton_color" value="#<?php echo $param_values['ht_view3_linkbutton_color']; ?>" size="10" />
						</div>
						<div class="has-background">
							<label for="ht_view3_linkbutton_font_hover_color">Link Button Font Hover Color</label>
							<input name="params[ht_view3_linkbutton_font_hover_color]" type="text" class="color" id="ht_view3_linkbutton_font_hover_color" value="#<?php echo $param_values['ht_view3_linkbutton_font_hover_color']; ?>" size="10" />
						</div>
						<div>
							<label for="ht_view3_linkbutton_background_color">Link Button Background Color</label>
							<input name="params[ht_view3_linkbutton_background_color]" type="text" class="color" id="ht_view3_linkbutton_background_color" value="#<?php echo $param_values['ht_view3_linkbutton_background_color']; ?>" size="10" />
						</div>
						<div class="has-background">
							<label for="ht_view3_linkbutton_background_hover_color">Link Button Background Hover Color</label>
							<input name="params[ht_view3_linkbutton_background_hover_color]" type="text" class="color" id="ht_view3_linkbutton_background_hover_color" value="#<?php echo $param_values['ht_view3_linkbutton_background_hover_color']; ?>" size="10" />
						</div>
					</div>
				</li>
				
				<!-- VIEW 4 FAQ  -->
				<li id="portfolio-view-options-4">
					<div>
						<h3>First Shown Block</h3>
						<div class="has-background">
							<label for="ht_view4_block_width">Block Width</label>
							<input type="text" name="params[ht_view4_block_width]" id="ht_view4_block_width" value="<?php echo $param_values['ht_view4_block_width']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view4_element_background_color">Block Background Color</label>
							<input name="params[ht_view4_element_background_color]" type="text" class="color" id="ht_view4_element_background_color" value="#<?php echo $param_values['ht_view4_element_background_color']; ?>" size="10" />
						</div>
						<div  class="has-background">
							<label for="ht_view4_element_border_width">Block Border Width</label>
							<input type="text" name="params[ht_view4_element_border_width]" id="ht_view4_element_border_width" value="<?php echo $param_values['ht_view4_element_border_width']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view4_element_border_color">Block Border Color</label>
							<input name="params[ht_view4_element_border_color]" type="text" class="color" id="ht_view4_element_border_color" value="#<?php echo $param_values['ht_view4_element_border_color']; ?>" size="10" />
						</div>
					</div>
					<div>
						<h3>Title</h3>
						<div class="has-background">
							<label for="ht_view4_title_font_size">Title Font Size</label>
							<input type="text" name="params[ht_view4_title_font_size]" id="ht_view4_title_font_size" value="<?php echo $param_values['ht_view4_title_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view4_title_font_color">Title Font Color</label>
							<input name="params[ht_view4_title_font_color]" type="text" class="color" id="ht_view4_title_font_color" value="#<?php echo $param_values['ht_view4_title_font_color']; ?>" size="10" />
						</div>
						<div  class="has-background">
							<label for="ht_view4_togglebutton_style">Toggle Button Style</label>
							<select id="ht_view4_togglebutton_style" name="params[ht_view4_togglebutton_style]">	
							  <option <?php if($param_values['ht_view4_togglebutton_style'] == 'light'){ echo 'selected="selected"'; } ?> value="light">Light</option>
							  <option <?php if($param_values['ht_view4_togglebutton_style'] == 'dark'){ echo 'selected="selected"'; } ?> value="dark">Dark</option>
							</select>
						</div>
					</div>
					
                                        <div style="margin-top: 14px;">
                                            <h3>Sorting styles</h3>
                                            <div class="" style="display: none;">
                                                    <label for="ht_view4_show_sorting" style="display: none;">Show Sorting</label>
                                                    <input type="hidden" value="off" name="params[ht_view4_show_sorting]" />
                                                    <input type="checkbox" id="ht_view4_show_sorting"  <?php if($param_values['ht_view4_show_sorting']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view4_show_sorting]" value="on" />
                                            </div>

                                            <div class="has-background">
                                                    <label for="ht_view4_sortbutton_font_size">Sort Button Font Size</label>
                                                    <input type="text" name="params[ht_view4_sortbutton_font_size]" id="ht_view4_sortbutton_font_size" value="<?php echo $param_values['ht_view4_sortbutton_font_size']; ?>" class="text" />
                                                    <span>px</span>
                                            </div>
                                            <div class="">
                                                    <label for="ht_view4_sortbutton_font_color">Sort Button Font Color</label>
                                                    <input name="params[ht_view4_sortbutton_font_color]" type="text" class="color" id="ht_view4_sortbutton_font_color" value="#<?php echo $param_values['ht_view4_sortbutton_font_color']; ?>" size="10" />
                                            </div>
                                            <div class="has-background">
                                                    <label for="ht_view4_sortbutton_hover_font_color">Sort Button Font Hover Color</label>
                                                    <input name="params[ht_view4_sortbutton_hover_font_color]" type="text" class="color" id="ht_view4_sortbutton_hover_font_color" value="#<?php echo $param_values['ht_view4_sortbutton_hover_font_color']; ?>" size="10" />
                                            </div>
                                            <div class="">
                                                    <label for="ht_view4_sortbutton_background_color">Sort Button Background Color</label>
                                                    <input name="params[ht_view4_sortbutton_background_color]" type="text" class="color" id="ht_view4_sortbutton_background_color" value="#<?php echo $param_values['ht_view4_sortbutton_background_color']; ?>" size="10" />
                                            </div>
                                            <div class="has-background">
                                                    <label for="ht_view4_sortbutton_hover_background_color">Sort Button Background Hover Color</label>
                                                    <input name="params[ht_view4_sortbutton_hover_background_color]" type="text" class="color" id="ht_view4_sortbutton_hover_background_color" value="#<?php echo $param_values['ht_view4_sortbutton_hover_background_color']; ?>" size="10" />
                                            </div>
                                            <div class="has-background" style="display: none;">
                                                    <label for="ht_view4_sortbutton_border_width">Sort Button Border Width</label>
                                                    <input type="text" name="params[ht_view4_sortbutton_border_width]" id="ht_view4_sortbutton_border_width" value="<?php echo $param_values['ht_view4_sortbutton_border_width']; ?>" class="text" />
                                                    <span>px</span>
                                            </div>
                                            <div style="display: none;">
                                                    <input name="params[ht_view4_sortbutton_border_color]" type="text" class="color" id="ht_view4_sortbutton_border_color" value="#<?php echo $param_values['ht_view4_sortbutton_border_color']; ?>" size="10" />
                                                    <label for="ht_view4_sortbutton_border_color">Sort Button Border Color</label>
                                            </div>
                                                <div class="">
                                                    <label for="ht_view4_sortbutton_border_radius">Sort Button Border Radius</label>
                                                    <input type="text" name="params[ht_view4_sortbutton_border_radius]" id="ht_view4_sortbutton_border_radius" value="<?php echo $param_values['ht_view4_sortbutton_border_radius']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="has-background">
                                                    <label for="ht_view4_sortbutton_border_padding">Sort Button Padding</label>
                                                    <input type="text" name="params[ht_view4_sortbutton_border_padding]" id="ht_view4_sortbutton_border_padding" value="<?php echo $param_values['ht_view4_sortbutton_border_padding']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div style="display: none;">
                                                    <label for="ht_view4_sortbutton_margin">Sort Button Margins</label>
                                                    <input type="text" name="params[ht_view4_sortbutton_margin]" id="ht_view4_sortbutton_margin" value="<?php echo $param_values['ht_view4_sortbutton_margin']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="">
                                                    <label for="ht_view4_sorting_float">Sort block Position</label>
                                                    <select id="ht_view4_sorting_float" name="params[ht_view4_sorting_float]">	
                                                      <option <?php if($param_values['ht_view4_sorting_float'] == 'left'){ echo 'selected="selected"'; } ?> value="left">Left</option>
                                                      <option <?php if($param_values['ht_view4_sorting_float'] == 'right'){ echo 'selected="selected"'; } ?> value="right">Right</option>
                                                      <option <?php if($param_values['ht_view4_sorting_float'] == 'top'){ echo 'selected="selected"'; } ?> value="top">Top</option>
                                                    </select>
						</div>
                                                <div class="has-background">
                                                        <label for="ht_view4_sorting_name_by_default">Sort By Default Bottom Name</label>
                                                        <input name="params[ht_view4_sorting_name_by_default]" type="text" id="ht_view4_sorting_name_by_default" value="<?php echo $param_values['ht_view4_sorting_name_by_default']; ?>" size="10" class="text"/>
                                                </div>
                                                <div class="">
                                                        <label for="ht_view4_sorting_name_by_id">Sorting By ID Button Name</label>
                                                        <input name="params[ht_view4_sorting_name_by_id]" type="text" id="ht_view4_sorting_name_by_id" value="<?php echo $param_values['ht_view4_sorting_name_by_id']; ?>" size="10" />
                                                </div>
                                                <div class="has-background">
                                                        <label for="ht_view4_sorting_name_by_name">Sorting By ID Button Name</label>
                                                        <input name="params[ht_view4_sorting_name_by_name]" type="text" id="ht_view4_sorting_name_by_name" value="<?php echo $param_values['ht_view4_sorting_name_by_name']; ?>" size="10" />
                                                </div>
                                                <div class="">
                                                        <label for="ht_view4_sorting_name_by_random">Random Sorting Button Name</label>
                                                        <input name="params[ht_view4_sorting_name_by_random]" type="text" id="ht_view4_sorting_name_by_random" value="<?php echo $param_values['ht_view4_sorting_name_by_random']; ?>" size="10" />
                                                </div>
                                                <div class="has-background">
                                                        <label for="ht_view4_sorting_name_by_asc">Ascedding Sorting Button Name</label>
                                                        <input name="params[ht_view4_sorting_name_by_asc]" type="text" id="ht_view4_sorting_name_by_asc" value="<?php echo $param_values['ht_view4_sorting_name_by_asc']; ?>" size="10" />
                                                </div>
                                                <div class="">
                                                        <label for="ht_view4_sorting_name_by_desc">Descedding Sorting Button Name</label>
                                                        <input name="params[ht_view4_sorting_name_by_desc]" type="text" id="ht_view4_sorting_name_by_desc" value="<?php echo $param_values['ht_view4_sorting_name_by_desc']; ?>" size="10" />
                                                </div>
                                            </div>
                                    
                                            <div style="margin-top: -600px;">
                                            <h3>Category styles</h3>
                                                <div class="" style="display: none;">
                                                    <label for="ht_view4_show_filtering" style="display: none;">Show Filtering</label>
                                                    <input type="hidden" value="off" name="params[ht_view4_show_filtering]" />
                                                    <input type="checkbox" id="ht_view4_show_filtering"  <?php if($param_values['ht_view4_show_filtering']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view4_show_filtering]" value="on" />
                                                </div>
                                                <div class="">
                                                    <label for="ht_view4_cat_all">Show All Category Button Name</label>
                                                    <input type="text" name="params[ht_view4_cat_all]" id="ht_view4_cat_all" value="<?php echo $param_values['ht_view4_cat_all']; ?>" class="text" />
                                                </div>													
                                                <div class="has-background">
                                                        <label for="ht_view4_filterbutton_font_size">Filter Button Font Size</label>
                                                        <input type="text" name="params[ht_view4_filterbutton_font_size]" id="ht_view4_filterbutton_font_size" value="<?php echo $param_values['ht_view4_filterbutton_font_size']; ?>" class="text" />
                                                        <span>px</span>
                                                </div>
                                                <div class="">
                                                        <label for="ht_view4_filterbutton_font_color">Filter Button Font Color</label>
                                                        <input name="params[ht_view4_filterbutton_font_color]" type="text" class="color" id="ht_view4_filterbutton_font_color" value="#<?php echo $param_values['ht_view4_filterbutton_font_color']; ?>" size="10" />
                                                </div>
                                                <div class="has-background">
                                                        <label for="ht_view4_filterbutton_hover_font_color">Filter Button Font Hover Color</label>
                                                        <input name="params[ht_view4_filterbutton_hover_font_color]" type="text" class="color" id="ht_view4_filterbutton_hover_font_color" value="#<?php echo $param_values['ht_view4_filterbutton_hover_font_color']; ?>" size="10" />
                                                </div>
                                                <div class="">
                                                        <label for="ht_view4_filterbutton_background_color">Filter Button Background Color</label>
                                                        <input name="params[ht_view4_filterbutton_background_color]" type="text" class="color" id="ht_view4_filterbutton_background_color" value="#<?php echo $param_values['ht_view4_filterbutton_background_color']; ?>" size="10" />
                                                </div>
                                                <div class="has-background">
                                                        <label for="ht_view4_filterbutton_hover_background_color">Filter Button Background Hover Color</label>
                                                        <input name="params[ht_view4_filterbutton_hover_background_color]" type="text" class="color" id="ht_view4_filterbutton_hover_background_color" value="#<?php echo $param_values['ht_view4_filterbutton_hover_background_color']; ?>" size="10" />
                                                </div>
                                                <div class="" style="display: none;">
                                                        <label for="ht_view4_filterbutton_border_width">Filter Button Border Width</label>
                                                        <input type="text" name="params[ht_view4_filterbutton_border_width]" id="ht_view4_filterbutton_border_width" value="<?php echo $param_values['ht_view4_filterbutton_border_width']; ?>" class="text" />
                                                        <span>px</span>
                                                </div>
                                                <div style="display: none;">
                                                        <input name="params[ht_view4_filterbutton_border_color]" type="text" class="color" id="ht_view4_filterbutton_border_color" value="#<?php echo $param_values['ht_view4_filterbutton_border_color']; ?>" size="10" />
                                                        <label for="ht_view4_filterbutton_border_color">Filter Button Border Color</label>
                                                </div>
                                                <div class="">
                                                    <label for="ht_view4_filterbutton_border_radius">Filter Button Border Radius</label>
                                                    <input type="text" name="params[ht_view4_filterbutton_border_radius]" id="ht_view4_filterbutton_border_radius" value="<?php echo $param_values['ht_view4_filterbutton_border_radius']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="has-background">
                                                    <label for="ht_view4_filterbutton_border_padding">Filter Button Padding</label>
                                                    <input type="text" name="params[ht_view4_filterbutton_border_padding]" id="ht_view4_filterbutton_border_padding" value="<?php echo $param_values['ht_view4_filterbutton_border_padding']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div style="display: none;">
                                                    <label for="ht_view4_filterbutton_margin">Filter Button Margins</label>
                                                    <input type="text" name="params[ht_view4_filterbutton_margin]" id="ht_view4_filterbutton_margin" value="<?php echo $param_values['ht_view4_filterbutton_margin']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="">
                                                    <label for="ht_view4_filtering_float">Filter block Position</label>
                                                    <select id="ht_view4_filtering_float" name="params[ht_view4_filtering_float]">	
                                                      <option <?php if($param_values['ht_view4_filtering_float'] == 'left'){ echo 'selected="selected"'; } ?> value="left">Left</option>
                                                      <option <?php if($param_values['ht_view4_filtering_float'] == 'right'){ echo 'selected="selected"'; } ?> value="right">Right</option>
                                                      <option <?php if($param_values['ht_view4_filtering_float'] == 'top'){ echo 'selected="selected"'; } ?> value="top">Top</option>
                                                    </select>
                                                </div>
                                            </div>
                                    
                                            <div style="margin-top: -186px;">
						<h3>Link Button</h3>
						<div class="has-background">
							<label for="ht_view4_show_linkbutton">Show Link Button</label>
							<input type="hidden" value="off" name="params[ht_view4_show_linkbutton]" />
							<input type="checkbox" id="ht_view4_show_linkbutton"  <?php if($param_values['ht_view4_show_linkbutton']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view4_show_linkbutton]" value="on" />
						</div>
						<div>
							<label for="ht_view4_linkbutton_text">Link Button Text</label>
							<input type="text" name="params[ht_view4_linkbutton_text]" id="ht_view4_linkbutton_text" value="<?php echo $param_values['ht_view4_linkbutton_text']; ?>" class="text" />
						</div>
						<div class="has-background">
							<label for="ht_view4_linkbutton_font_size">Link Button Font Size</label>
							<input type="text" name="params[ht_view4_linkbutton_font_size]" id="ht_view4_linkbutton_font_size" value="<?php echo $param_values['ht_view4_linkbutton_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view4_linkbutton_color">Link Button Font Color</label>
							<input name="params[ht_view4_linkbutton_color]" type="text" class="color" id="ht_view4_linkbutton_color" value="#<?php echo $param_values['ht_view4_linkbutton_color']; ?>" size="10" />
						</div>
						<div class="has-background">
							<label for="ht_view4_linkbutton_font_hover_color">Link Button Font Hover Color</label>
							<input name="params[ht_view4_linkbutton_font_hover_color]" type="text" class="color" id="ht_view4_linkbutton_font_hover_color" value="#<?php echo $param_values['ht_view4_linkbutton_font_hover_color']; ?>" size="10" />
						</div>
						<div>
							<label for="ht_view4_linkbutton_background_color">Link Button Background Color</label>
							<input name="params[ht_view4_linkbutton_background_color]" type="text" class="color" id="ht_view4_linkbutton_background_color" value="#<?php echo $param_values['ht_view4_linkbutton_background_color']; ?>" size="10" />
						</div>
						<div class="has-background">
							<label for="ht_view4_linkbutton_background_hover_color">Link Button Background Hover Color</label>
							<input name="params[ht_view4_linkbutton_background_hover_color]" type="text" class="color" id="ht_view4_linkbutton_background_hover_color" value="#<?php echo $param_values['ht_view4_linkbutton_background_hover_color']; ?>" size="10" />
						</div>
					</div>
                                    
                                        <div>
						<h3>Description</h3>
						<div class="has-background">
							<label for="ht_view4_show_description">Show Description</label>
							<input type="hidden" value="off" name="params[ht_view4_show_description]" />
							<input type="checkbox" id="ht_view4_show_description"  <?php if($param_values['ht_view4_show_description']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view4_show_description]" value="on" />
						</div>
						<div>
							<label for="ht_view4_description_font_size">Description Font Size</label>
							<input type="text" name="params[ht_view4_description_font_size]" id="ht_view4_description_font_size" value="<?php echo $param_values['ht_view4_description_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div class="has-background">
							<label for="ht_view4_description_color">Description Font Color</label>
							<input name="params[ht_view4_description_color]" type="text" class="color" id="ht_view4_description_color" value="#<?php echo $param_values['ht_view4_description_color']; ?>" size="10" />
						</div>
					</div>
					
				</li>
				<!-- View 5 Slider -->
				<li id="portfolio-view-options-5">
					<div>
						<h3>Slider</h3>					
						<div  class="has-background">
							<label for="ht_view5_slider_background_color">Slider Background Color</label>
							<input name="params[ht_view5_slider_background_color]" type="text" class="color" id="ht_view5_slider_background_color" value="#<?php echo $param_values['ht_view5_slider_background_color']; ?>" size="10" />
						</div>
						<div>
							<label for="ht_view5_icons_style">Icons Style</label>
							<select id="ht_view5_icons_style" name="params[ht_view5_icons_style]">	
							  <option <?php if($param_values['ht_view5_icons_style'] == 'light'){ echo 'selected="selected"'; } ?> value="light">Light</option>
							  <option <?php if($param_values['ht_view5_icons_style'] == 'dark'){ echo 'selected="selected"'; } ?> value="dark">Dark</option>
							</select>
						</div>
						<div class="has-background">
							<label for="ht_view5_show_separator_lines">Show Separator Lines</label>
							<input type="hidden" value="off" name="params[ht_view5_show_separator_lines]" />
							<input type="checkbox" id="ht_view5_show_separator_lines"  <?php if($param_values['ht_view5_show_separator_lines']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view5_show_separator_lines]" value="on" />
						</div>
					</div>
					<div>
						<h3>Images</h3>
						<div class="has-background">
							<label for="ht_view5_main_image_width">Main Image Width</label>
							<input type="text" name="params[ht_view5_main_image_width]" id="ht_view5_main_image_width" value="<?php echo $param_values['ht_view5_main_image_width']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view5_show_thumbs">Show Thumbs</label>
							<input type="hidden" value="off" name="params[ht_view5_show_thumbs]" />
							<input type="checkbox" id="ht_view5_show_thumbs"  <?php if($param_values['ht_view5_show_thumbs']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view5_show_thumbs]" value="on" />
						</div>		
						<div class="has-background">
							<label for="ht_view5_thumbs_width">Thumbs Width</label>
							<input type="text" name="params[ht_view5_thumbs_width]" id="ht_view5_thumbs_width" value="<?php echo $param_values['ht_view5_thumbs_width']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view5_thumbs_height">Thumbs Height</label>
							<input type="text" name="params[ht_view5_thumbs_height]" id="ht_view5_thumbs_height" value="<?php echo $param_values['ht_view5_thumbs_height']; ?>" class="text" />
							<span>px</span>
						</div>
					</div>
					<div style="margin-top:-30px;">
						<h3>Title</h3>
						<div class="has-background">
							<label for="ht_view5_title_font_size">Title Font Size</label>
							<input type="text" name="params[ht_view5_title_font_size]" id="ht_view5_title_font_size" value="<?php echo $param_values['ht_view5_title_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view5_title_font_color">Title Font Color</label>
							<input name="params[ht_view5_title_font_color]" type="text" class="color" id="ht_view5_title_font_color" value="#<?php echo $param_values['ht_view5_title_font_color']; ?>" size="10" />
						</div>
					</div>
					<div>
						<h3>Description</h3>
						<div class="has-background">
							<label for="ht_view5_show_description">Show Description</label>
							<input type="hidden" value="off" name="params[ht_view5_show_description]" />
							<input type="checkbox" id="ht_view5_show_description"  <?php if($param_values['ht_view5_show_description']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view5_show_description]" value="on" />
						</div>
						<div>
							<label for="ht_view5_description_font_size">Description Font Size</label>
							<input type="text" name="params[ht_view5_description_font_size]" id="ht_view5_description_font_size" value="<?php echo $param_values['ht_view5_description_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div class="has-background">
							<label for="ht_view5_description_color">Description Font Color</label>
							<input name="params[ht_view5_description_color]" type="text" class="color" id="ht_view5_description_color" value="#<?php echo $param_values['ht_view5_description_color']; ?>" size="10" />
						</div>
					</div>
					<div style="margin-top:-65px;">
						<h3>Link Button</h3>
						<div class="has-background">
							<label for="ht_view5_show_linkbutton">Show Link Button</label>
							<input type="hidden" value="off" name="params[ht_view5_show_linkbutton]" />
							<input type="checkbox" id="ht_view5_show_linkbutton"  <?php if($param_values['ht_view5_show_linkbutton']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view5_show_linkbutton]" value="on" />
						</div>
						<div>
							<label for="ht_view5_linkbutton_text">Link Button Text</label>
							<input type="text" name="params[ht_view5_linkbutton_text]" id="ht_view5_linkbutton_text" value="<?php echo $param_values['ht_view5_linkbutton_text']; ?>" class="text" />
						</div>
						<div class="has-background">
							<label for="ht_view5_linkbutton_font_size">Link Button Font Size</label>
							<input type="text" name="params[ht_view5_linkbutton_font_size]" id="ht_view5_linkbutton_font_size" value="<?php echo $param_values['ht_view5_linkbutton_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view5_linkbutton_color">Link Button Font Color</label>
							<input name="params[ht_view5_linkbutton_color]" type="text" class="color" id="ht_view5_linkbutton_color" value="#<?php echo $param_values['ht_view5_linkbutton_color']; ?>" size="10" />
						</div>
						<div class="has-background">
							<label for="ht_view5_linkbutton_font_hover_color">Link Button Font Hover Color</label>
							<input name="params[ht_view5_linkbutton_font_hover_color]" type="text" class="color" id="ht_view5_linkbutton_font_hover_color" value="#<?php echo $param_values['ht_view5_linkbutton_font_hover_color']; ?>" size="10" />
						</div>
						<div>
							<label for="ht_view5_linkbutton_background_color">Link Button Background Color</label>
							<input name="params[ht_view5_linkbutton_background_color]" type="text" class="color" id="ht_view5_linkbutton_background_color" value="#<?php echo $param_values['ht_view5_linkbutton_background_color']; ?>" size="10" />
						</div>
						<div class="has-background">
							<label for="ht_view5_linkbutton_background_hover_color">Link Button Background Hover Color</label>
							<input name="params[ht_view5_linkbutton_background_hover_color]" type="text" class="color" id="ht_view5_linkbutton_background_hover_color" value="#<?php echo $param_values['ht_view5_linkbutton_background_hover_color']; ?>" size="10" />
						</div>
					</div>
				</li>
				<!-- VIEW 6 Gallery  -->
				<li id="portfolio-view-options-6">
                                        <div style="margin-top: 0px">
						<h3>Title</h3>
						<div class="has-background">
							<label for="ht_view6_title_font_size">Title Font Size</label>
							<input type="text" name="params[ht_view6_title_font_size]" id="ht_view6_title_font_size" value="<?php echo $param_values['ht_view6_title_font_size']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view6_title_font_color">Title Font Color</label>
							<input name="params[ht_view6_title_font_color]" type="text" class="color" id="ht_view6_title_font_color" value="#<?php echo $param_values['ht_view6_title_font_color']; ?>" size="10" />
						</div>
						<div  class="has-background">
							<label for="ht_view6_title_font_hover_color">Title Font Hover Color</label>
							<input name="params[ht_view6_title_font_hover_color]" type="text" class="color" id="ht_view6_title_font_hover_color" value="#<?php echo $param_values['ht_view6_title_font_hover_color']; ?>" size="10" />
						</div>
						<div>
							<label for="ht_view6_title_background_color">Title Background Color</label>
							<input name="params[ht_view6_title_background_color]" type="text" class="color" id="ht_view6_title_background_color" value="#<?php echo $param_values['ht_view6_title_background_color']; ?>" size="10" />
						</div>
						<div class="has-background">
							<label for="ht_view6_title_background_transparency">Title Background Transparency</label>
							<div class="slider-container">
								<input name="params[ht_view6_title_background_transparency]" id="ht_view6_title_background_transparency" data-slider-highlight="true"  data-slider-values="0,10,20,30,40,50,60,70,80,90,100" type="text" data-slider="true" value="<?php echo $param_values['ht_view6_title_background_transparency']; ?>" />
								<span><?php echo $param_values['ht_view6_title_background_transparency']; ?>%</span>
							</div>
						</div>
					</div>
                                    
                                        <div style="margin-top: 0px;">
						<h3>Image</h3>
						<div class="has-background">
							<label for="ht_view6_width">Image Width</label>
							<input type="text" name="params[ht_view6_width]" id="ht_view6_width" value="<?php echo $param_values['ht_view6_width']; ?>" class="text" />
							<span>px</span>
						</div>
						<div>
							<label for="ht_view6_border_width">Image Border Width</label>
							<input type="text" name="params[ht_view6_border_width]" id="ht_view6_border_width" value="<?php echo $param_values['ht_view6_border_width']; ?>" class="text" />
							<span>px</span>
						</div>
						<div class="has-background">
							<label for="ht_view6_border_color">Image Border Color</label>
							<input name="params[ht_view6_border_color]" type="text" class="color" id="ht_view6_border_color" value="#<?php echo $param_values['ht_view6_border_color']; ?>" size="10" />
						</div>
						<div>
							<label for="ht_view6_border_radius">Border Radius</label>
							<input type="text" name="params[ht_view6_border_radius]" id="ht_view6_border_radius" value="<?php echo $param_values['ht_view6_border_radius']; ?>" class="text" />
							<span>px</span>
						</div>
					</div>
                                        
                                        <div>
                                            <h3>Sorting styles</h3>
                                            <div class="" style="display: none;">
                                                    <label for="ht_view6_show_sorting" style="display: none;">Show Sorting</label>
                                                    <input type="hidden" value="off" name="params[ht_view6_show_sorting]" />
                                                    <input type="checkbox" id="ht_view6_show_sorting"  <?php if($param_values['ht_view6_show_sorting']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view6_show_sorting]" value="on" />
                                            </div>

                                            <div class="has-background">
                                                    <label for="ht_view6_sortbutton_font_size">Sort Button Font Size</label>
                                                    <input type="text" name="params[ht_view6_sortbutton_font_size]" id="ht_view6_sortbutton_font_size" value="<?php echo $param_values['ht_view6_sortbutton_font_size']; ?>" class="text" />
                                                    <span>px</span>
                                            </div>
                                            <div class="">
                                                    <label for="ht_view6_sortbutton_font_color">Sort Button Font Color</label>
                                                    <input name="params[ht_view6_sortbutton_font_color]" type="text" class="color" id="ht_view6_sortbutton_font_color" value="#<?php echo $param_values['ht_view6_sortbutton_font_color']; ?>" size="10" />
                                            </div>
                                            <div class="has-background">
                                                    <label for="ht_view6_sortbutton_hover_font_color">Sort Button Font Hover Color</label>
                                                    <input name="params[ht_view6_sortbutton_hover_font_color]" type="text" class="color" id="ht_view6_sortbutton_hover_font_color" value="#<?php echo $param_values['ht_view6_sortbutton_hover_font_color']; ?>" size="10" />
                                            </div>
                                            <div class="">
                                                    <label for="ht_view6_sortbutton_background_color">Sort Button Background Color</label>
                                                    <input name="params[ht_view6_sortbutton_background_color]" type="text" class="color" id="ht_view6_sortbutton_background_color" value="#<?php echo $param_values['ht_view6_sortbutton_background_color']; ?>" size="10" />
                                            </div>
                                            <div class="has-background">
                                                    <label for="ht_view6_sortbutton_hover_background_color">Sort Button Background Hover Color</label>
                                                    <input name="params[ht_view6_sortbutton_hover_background_color]" type="text" class="color" id="ht_view6_sortbutton_hover_background_color" value="#<?php echo $param_values['ht_view6_sortbutton_hover_background_color']; ?>" size="10" />
                                            </div>
                                            <div class="" style="display: none;">
                                                    <label for="ht_view6_sortbutton_border_width">Sort Button Border Width</label>
                                                    <input type="text" name="params[ht_view6_sortbutton_border_width]" id="ht_view6_sortbutton_border_width" value="<?php echo $param_values['ht_view6_sortbutton_border_width']; ?>" class="text" />
                                                    <span>px</span>
                                            </div>
                                            <div style="display: none;">
                                                    <input name="params[ht_view6_sortbutton_border_color]" type="text" class="color" id="ht_view6_sortbutton_border_color" value="#<?php echo $param_values['ht_view6_sortbutton_border_color']; ?>" size="10" />
                                                    <label for="ht_view6_sortbutton_border_color">Sort Button Border Color</label>
                                            </div>
                                                <div class="">
                                                    <label for="ht_view6_sortbutton_border_radius">Sort Button Border Radius</label>
                                                    <input type="text" name="params[ht_view6_sortbutton_border_radius]" id="ht_view6_sortbutton_border_radius" value="<?php echo $param_values['ht_view6_sortbutton_border_radius']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="has-background">
                                                    <label for="ht_view6_sortbutton_border_padding">Sort Button Padding</label>
                                                    <input type="text" name="params[ht_view6_sortbutton_border_padding]" id="ht_view6_sortbutton_border_padding" value="<?php echo $param_values['ht_view6_sortbutton_border_padding']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div style="display: none;">
                                                    <label for="ht_view6_sortbutton_margin">Sort Button Margins</label>
                                                    <input type="text" name="params[ht_view6_sortbutton_margin]" id="ht_view6_sortbutton_margin" value="<?php echo $param_values['ht_view6_sortbutton_margin']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="">
                                                    <label for="ht_view6_sorting_float">Sort block Position</label>
                                                    <select id="ht_view6_sorting_float" name="params[ht_view6_sorting_float]">	
                                                      <option <?php if($param_values['ht_view6_sorting_float'] == 'left'){ echo 'selected="selected"'; } ?> value="left">Left</option>
                                                      <option <?php if($param_values['ht_view6_sorting_float'] == 'right'){ echo 'selected="selected"'; } ?> value="right">Right</option>
                                                      <option <?php if($param_values['ht_view6_sorting_float'] == 'top'){ echo 'selected="selected"'; } ?> value="top">Top</option>
                                                    </select>
						</div>
                                                <div class="has-background">
							<label for="ht_view6_sorting_name_by_default">Sort By Default Bottom Name</label>
							<input name="params[ht_view6_sorting_name_by_default]" type="text" id="ht_view6_sorting_name_by_default" value="<?php echo $param_values['ht_view6_sorting_name_by_default']; ?>" size="10" class="text"/>
						</div>
						<div class="">
							<label for="ht_view6_sorting_name_by_id">Sorting By ID Button Name</label>
							<input name="params[ht_view6_sorting_name_by_id]" type="text" id="ht_view6_sorting_name_by_id" value="<?php echo $param_values['ht_view6_sorting_name_by_id']; ?>" size="10" />
						</div>
                                                <div class="has-background">
							<label for="ht_view6_sorting_name_by_name">Sorting By ID Button Name</label>
							<input name="params[ht_view6_sorting_name_by_name]" type="text" id="ht_view6_sorting_name_by_name" value="<?php echo $param_values['ht_view6_sorting_name_by_name']; ?>" size="10" />
						</div>
						<div class="">
							<label for="ht_view6_sorting_name_by_random">Random Sorting Button Name</label>
							<input name="params[ht_view6_sorting_name_by_random]" type="text" id="ht_view6_sorting_name_by_random" value="<?php echo $param_values['ht_view6_sorting_name_by_random']; ?>" size="10" />
						</div>
                                                <div class="has-background">
							<label for="ht_view6_sorting_name_by_asc">Ascedding Sorting Button Name</label>
							<input name="params[ht_view6_sorting_name_by_asc]" type="text" id="ht_view6_sorting_name_by_asc" value="<?php echo $param_values['ht_view6_sorting_name_by_asc']; ?>" size="10" />
						</div>
						<div class="">
							<label for="ht_view6_sorting_name_by_desc">Descedding Sorting Button Name</label>
							<input name="params[ht_view6_sorting_name_by_desc]" type="text" id="ht_view6_sorting_name_by_desc" value="<?php echo $param_values['ht_view6_sorting_name_by_desc']; ?>" size="10" />
						</div>
                                        </div>
                                    
                                        <div style="margin-top: -600px">
                                            <h3>Category styles</h3>
                                                <div style="display: none;">
                                                    <label for="ht_view6_show_filtering" style="display: none;">Show Filtering</label>
                                                    <input type="hidden" value="off" name="params[ht_view6_show_filtering]" />
                                                    <input type="checkbox" id="ht_view6_show_filtering"  <?php if($param_values['ht_view6_show_filtering']  == 'on'){ echo 'checked="checked"'; } ?>  name="params[ht_view6_show_filtering]" value="on" />
                                                </div>
                                                <div class="">
                                                    <label for="ht_view6_cat_all">Show All Button Name</label>
                                                    <input type="text" name="params[ht_view6_cat_all]" id="ht_view6_cat_all" value="<?php echo $param_values['ht_view6_cat_all']; ?>" class="text" />
                                                </div>	
                                                <div class="has-background">
                                                    <label for="ht_view6_filterbutton_font_size">Filter Button Font Size</label>
                                                    <input type="text" name="params[ht_view6_filterbutton_font_size]" id="ht_view6_filterbutton_font_size" value="<?php echo $param_values['ht_view6_filterbutton_font_size']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="">
                                                        <label for="ht_view6_filterbutton_font_color">Filter Button Font Color</label>
                                                        <input name="params[ht_view6_filterbutton_font_color]" type="text" class="color" id="ht_view6_filterbutton_font_color" value="#<?php echo $param_values['ht_view6_filterbutton_font_color']; ?>" size="10" />
                                                </div>
                                                <div  class="has-background">
                                                        <label for="ht_view6_filterbutton_hover_font_color">Filter Button Font Hover Color</label>
                                                        <input name="params[ht_view6_filterbutton_hover_font_color]" type="text" class="color" id="ht_view6_filterbutton_hover_font_color" value="#<?php echo $param_values['ht_view6_filterbutton_hover_font_color']; ?>" size="10" />
                                                </div>
                                                <div class="">
                                                    <label for="ht_view6_filterbutton_background_color">Filter Button Background Color</label>
                                                    <input name="params[ht_view6_filterbutton_background_color]" type="text" class="color" id="ht_view6_filterbutton_background_color" value="#<?php echo $param_values['ht_view6_filterbutton_background_color']; ?>" size="10" />
                                                </div>
                                                <div class="has-background">
                                                    <label for="ht_view6_filterbutton_hover_background_color">Filter Button Background Hover Color</label>
                                                    <input name="params[ht_view6_filterbutton_hover_background_color]" type="text" class="color" id="ht_view6_filterbutton_hover_background_color" value="#<?php echo $param_values['ht_view6_filterbutton_hover_background_color']; ?>" size="10" />
                                                </div>

                                                <div class="" style="display: none;">
                                                        <label for="ht_view6_filterbutton_border_width">Filter Button Border Width</label>
                                                        <input type="text" name="params[ht_view6_filterbutton_border_width]" id="ht_view6_filterbutton_border_width" value="<?php echo $param_values['ht_view6_filterbutton_border_width']; ?>" class="text" />
                                                        <span>px</span>
                                                </div>
                                                <div style="display: none;">
                                                        <input name="params[ht_view6_filterbutton_border_color]" type="text" class="color" id="ht_view6_filterbutton_border_color" value="#<?php echo $param_values['ht_view6_filterbutton_border_color']; ?>" size="10" />
                                                        <label for="ht_view6_filterbutton_border_color">Filter Button Border Color</label>
                                                </div>
                                                <div class="">
                                                    <label for="ht_view6_filterbutton_border_radius">Filter Button Border Radius</label>
                                                    <input type="text" name="params[ht_view6_filterbutton_border_radius]" id="ht_view6_filterbutton_border_radius" value="<?php echo $param_values['ht_view6_filterbutton_border_radius']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="has-background">
                                                    <label for="ht_view6_filterbutton_border_padding">Filter Button Padding</label>
                                                    <input type="text" name="params[ht_view6_filterbutton_border_padding]" id="ht_view6_filterbutton_border_padding" value="<?php echo $param_values['ht_view6_filterbutton_border_padding']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div style="display: none;">
                                                    <label for="ht_view6_filterbutton_margin">Filter Button Margins</label>
                                                    <input type="text" name="params[ht_view6_filterbutton_margin]" id="ht_view6_filterbutton_margin" value="<?php echo $param_values['ht_view6_filterbutton_margin']; ?>" class="text" />
                                                    <span>px</span>
                                                </div>
                                                <div class="">
                                                    <label for="ht_view6_filtering_float">Filter block Position</label>
                                                    <select id="ht_view6_filtering_float" name="params[ht_view6_filtering_float]">	
                                                      <option <?php if($param_values['ht_view6_filtering_float'] == 'left'){ echo 'selected="selected"'; } ?> value="left">Left</option>
                                                      <option <?php if($param_values['ht_view6_filtering_float'] == 'right'){ echo 'selected="selected"'; } ?> value="right">Right</option>
                                                      <option <?php if($param_values['ht_view6_filtering_float'] == 'top'){ echo 'selected="selected"'; } ?> value="top">Top</option>
                                                    </select>
                                                </div>
                                        </div>                                        
				</li>
			</ul>

		<div id="post-body-footer">
			<a onclick="document.getElementById('adminForm').submit()" class="save-portfolio-options button-primary">Save</a>
			<div class="clear"></div>
		</div>
		</form>
		</div>
	</div>
</div>
</div>
<input type="hidden" name="option" value=""/>
<input type="hidden" name="task" value=""/>
<input type="hidden" name="controller" value="options"/>
<input type="hidden" name="op_type" value="styles"/>
<input type="hidden" name="boxchecked" value="0"/>

<?php
}