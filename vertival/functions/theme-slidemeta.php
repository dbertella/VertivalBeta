<?php




/*-----------------------------------------------------------------------------------*/
/*	Define Metabox Fields
/*-----------------------------------------------------------------------------------*/

$prefix = 'vt_';
 
$meta_box = array(
	'id' => 'vt-meta-box-slide',
	'title' =>  __('General Settings', 'framework'),
	'page' => 'slide',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
	
	array(
			'name' => 'cover',
			'desc' => '',
			'id' => $prefix.'cover_button',
			'type' => 'button',
			'std' => 'Cover'
		),
	array(
			'name' => 'focus',
			'desc' => '',
			'id' => $prefix.'focus_button',
			'type' => 'button',
			'std' => 'Focus'
		),
	array(
			'name' => 'descrption',
			'desc' => '',
			'id' => $prefix.'description_button',
			'type' => 'button',
			'std' => 'Text + Image'
		),
	array(
			'name' => 'list',
			'desc' => '',
			'id' => $prefix.'list_button',
			'type' => 'button',
			'std' => 'List'
		),
	array(
			'name' => 'photo',
			'desc' => '',
			'id' => $prefix.'photo_button',
			'type' => 'button',
			'std' => 'Photo'
		),
	array(
			'name' => 'moodboard',
			'desc' => '',
			'id' => $prefix.'moodboard_button',
			'type' => 'button',
			'std' => 'Moodboard'
		),
	array(
			'name' => 'video',
			'desc' => '',
			'id' => $prefix.'video_button',
			'type' => 'button',
			'std' => 'Video'
		),

	/*array(
			'name' =>  __('Slide Type', 'framework'),
			'desc' => __('Choose the type of slide post you wish to display.', 'framework'),
			'id' => $prefix.'switch',
			"type" => "select",
			'std' => 'cover',
			'options' => array('cover', 'description', 'focus', 'photo', 'video')
		),*/
	),
	
);

$meta_box_slide_cover = array(
  'id' => 'vt-meta-box-slide-cover',
  'title' =>  __('Cover Slide', 'framework'),
  'page' => 'slide',
  'context' => 'normal',
  'priority' => 'high',
  'fields' => array(

array(
		'name' =>  __('Slide Title', 'framework'),
		'desc' => __('', 'framework'),
		'id' => $prefix.'cover_title',
		'type' => 'text',
		'std' => ''
	),
  array(
      'name' =>  __('Text', 'framework'),
      'desc' => __('', 'framework'),
      'id' => $prefix.'cover_sbt',
      'type' => 'textarea',
      'std' => ''
    ),
  
  
  ),
  
);

$meta_box_slide_focus = array(
  'id' => 'vt-meta-box-slide-focus',
  'title' =>  __('Focus Slide', 'framework'),
  'page' => 'slide',
  'context' => 'normal',
  'priority' => 'high',
  'fields' => array(

  array(
      'name' =>  __('Focus', 'framework'),
      'desc' => __('', 'framework'),
      'id' => $prefix.'focus',
      'type' => 'textarea',
      'std' => ''
    ),
  
  
  ),
  
);

$meta_box_slide_description = array(
	'id' => 'vt-meta-box-slide-description',
	'title' =>  __('Description Slide', 'framework'),
	'page' => 'slide',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(

	array(
		'name' =>  __('Slide Title', 'framework'),
		'desc' => __('', 'framework'),
		'id' => $prefix.'description_title',
		'type' => 'text',
		'std' => ''
	),

	array(
			'name' =>  __('Text', 'framework'),
			'desc' => __('', 'framework'),
			'id' => $prefix.'description',
			'type' => 'textarea',
			'std' => ''
		),
	array(
			'name' =>  __('Image', 'framework'),
			'desc' => __('Insert your image', 'framework'),
			'id' => $prefix.'description_img',
			'type' => 'text',
			'std' => ''
		),
	array(
			'name' => '',
			'desc' => '',
			'id' => $prefix.'description_img_button',
			'type' => 'button',
			'std' => 'Browse'
		),
	
	),
	
);

$meta_box_slide_list = array(
	'id' => 'vt-meta-box-slide-list',
	'title' =>  __('List Slide', 'framework'),
	'page' => 'slide',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(

	array(
		'name' =>  __('List Title', 'framework'),
		'desc' => __('', 'framework'),
		'id' => $prefix.'list_title',
		'type' => 'text',
		'std' => ''
	),

	array(
			'name' =>  __('List', 'framework'),
			'desc' => __('One line every item to list', 'framework'),
			'id' => $prefix.'bullet_list',
			'type' => 'textarea',
			'std' => ''
		),
	
	
	),
	
);

$meta_box_slide_photo = array(
	'id' => 'vt-meta-box-slide-photo',
	'title' =>  __('Photo Slide', 'framework'),
	'page' => 'slide',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(

	
	array(
			'name' =>  __('Image', 'framework'),
			'desc' => __('Insert your image', 'framework'),
			'id' => $prefix.'photo_img',
			'type' => 'text',
			'std' => ''
		),
	array(
			'name' => '',
			'desc' => '',
			'id' => $prefix.'photo_img_button',
			'type' => 'button',
			'std' => 'Browse'
		),
	array(
			'name' =>  __('Image caption', 'framework'),
			'desc' => __('', 'framework'),
			'id' => $prefix.'photo_cpt',
			'type' => 'text',
			'std' => ''
		),
	
	),
	
);

$meta_box_slide_moodboard = array(
	'id' => 'vt-meta-box-slide-moodboard',
	'title' =>  __('Moodboard Slide', 'framework'),
	'page' => 'slide',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(

	array(
		'name' =>  __('Moodboard Title', 'framework'),
		'desc' => __('', 'framework'),
		'id' => $prefix.'moodboard_title',
		'type' => 'text',
		'std' => ''
	),
	array(
			'name' =>  __('Image 1', 'framework'),
			'desc' => __('First image', 'framework'),
			'id' => $prefix.'moodboard_img1',
			'type' => 'text',
			'std' => ''
		),
	array(
			'name' => '',
			'desc' => '',
			'id' => $prefix.'moodboard_img1_button',
			'type' => 'button',
			'std' => 'Browse'
		),

	array(
			'name' =>  __('Image 2', 'framework'),
			'desc' => __('Second image', 'framework'),
			'id' => $prefix.'moodboard_img2',
			'type' => 'text',
			'std' => ''
		),
	array(
			'name' => '',
			'desc' => '',
			'id' => $prefix.'moodboard_img2_button',
			'type' => 'button',
			'std' => 'Browse'
		),

	array(
			'name' =>  __('Image 3', 'framework'),
			'desc' => __('Third image', 'framework'),
			'id' => $prefix.'moodboard_img3',
			'type' => 'text',
			'std' => ''
		),
	array(
			'name' => '',
			'desc' => '',
			'id' => $prefix.'moodboard_img3_button',
			'type' => 'button',
			'std' => 'Browse'
		),
	array(
			'name' =>  __('Image 4', 'framework'),
			'desc' => __('Fourth image', 'framework'),
			'id' => $prefix.'moodboard_img4',
			'type' => 'text',
			'std' => ''
		),
	array(
			'name' => '',
			'desc' => '',
			'id' => $prefix.'moodboard_img4_button',
			'type' => 'button',
			'std' => 'Browse'
		),

	),
	
);

$meta_box_slide_video = array(
	'id' => 'vt-meta-box-slide-video',
	'title' => __('Video Slide', 'framework'),
	'page' => 'slide',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array(
			'name' =>  __('Video title', 'framework'),
			'desc' => __('', 'framework'),
			'id' => $prefix.'video_title',
			'type' => 'text',
			'std' => ''
		),
		array(
			'name' => __('Embedded Code', 'framework'),
			'desc' => __('If you are using something other than self hosted video such as Youtube or Vimeo, paste the embed code here.', 'framework'),
			'id' => $prefix.'slide_embed_code',
			'type' => 'textarea',
			'std' => ''
		)
	),
	
);



add_action('admin_menu', 'vt_add_box_slide');


/*-----------------------------------------------------------------------------------*/
/*	Add metabox to edit page
/*-----------------------------------------------------------------------------------*/
 
function vt_add_box_slide() {
	global $meta_box, $meta_box_slide_cover, $meta_box_slide_focus, $meta_box_slide_description, $meta_box_slide_list, $meta_box_slide_photo, $meta_box_slide_moodboard, $meta_box_slide_video;
	
	add_meta_box($meta_box['id'], $meta_box['title'], 'vt_show_box_slide', $meta_box['page'], $meta_box['context'], $meta_box['priority']);

	add_meta_box($meta_box_slide_focus['id'], $meta_box_slide_focus['title'], 'vt_show_box_slide_focus', $meta_box_slide_focus['page'], $meta_box_slide_focus['context'], $meta_box_slide_focus['priority']);

	add_meta_box($meta_box_slide_description['id'], $meta_box_slide_description['title'], 'vt_show_box_slide_description', $meta_box_slide_description['page'], $meta_box_slide_description['context'], $meta_box_slide_description['priority']);

	add_meta_box($meta_box_slide_list['id'], $meta_box_slide_list['title'], 'vt_show_box_slide_list', $meta_box_slide_list['page'], $meta_box_slide_list['context'], $meta_box_slide_list['priority']);

	add_meta_box($meta_box_slide_photo['id'], $meta_box_slide_photo['title'], 'vt_show_box_slide_photo', $meta_box_slide_photo['page'], $meta_box_slide_photo['context'], $meta_box_slide_photo['priority']);

	add_meta_box($meta_box_slide_moodboard['id'], $meta_box_slide_moodboard['title'], 'vt_show_box_slide_moodboard', $meta_box_slide_moodboard['page'], $meta_box_slide_moodboard['context'], $meta_box_slide_moodboard['priority']);

	add_meta_box($meta_box_slide_video['id'], $meta_box_slide_video['title'], 'vt_show_box_slide_video', $meta_box_slide_video['page'], $meta_box_slide_video['context'], $meta_box_slide_video['priority']);
	
	add_meta_box($meta_box_slide_cover['id'], $meta_box_slide_cover['title'], 'vt_show_box_slide_cover', $meta_box_slide_cover['page'], $meta_box_slide_cover['context'], $meta_box_slide_cover['priority']);


}


/*-----------------------------------------------------------------------------------*/
/*	Callback function to show fields in meta box
/*-----------------------------------------------------------------------------------*/


//general settings
function vt_show_box_slide() {
	global $meta_box, $post;
 	
	echo '<p style="padding:10px 0 0 0;">'.__('Choose the template for the new slide.', 'framework').'</p>';
	// Use nonce for verification
	echo '<input type="hidden" name="vt_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';

	echo '<table class="form-table">';
 
	foreach ($meta_box['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
 
			
			//If Text		
			case 'text':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '" size="30" style="width:75%; margin-right: 20px; float:left;" />';
			
			break;
 
			//If Button	
			case 'button':
				echo '<input style="float: left;" type="button" class="button" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" />';
				echo 	'</td>',
			'</tr>';
			
			break;
			
			//If Select	
			case 'select':
			
				echo '<tr>',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			
				echo'<select name="'.$field['id'].'">';
			
				foreach ($field['options'] as $option) {
					
					echo'<option';
					if ($meta == $option ) { 
						echo ' selected="selected"'; 
					}
					echo'>'. $option .'</option>';
				
				} 
				
				echo'</select>';
			
			break;
		}

	}
	echo '<p style="padding:40px 0 0 0;">'.__('Pay attention to fill <strong>one template only</strong>: if you want to change a template be sure that all the input fields are empty', 'framework').'</p>';
	echo '</table>';
}

//cover slide type
function vt_show_box_slide_cover() {
	global $meta_box_slide_cover, $post;
 	
	echo '<p style="padding:10px 0 0 0;">'.__('In the Cover Slide template you can insert a title and a subtitle or a small description.', 'framework').'</p>';
	// Use nonce for verification
	echo '<input type="hidden" name="vt_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($meta_box_slide_cover['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
 
			
			//If Text		
			case 'text':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style="line-height:20px; display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'],'" size="30" style="width:75%; margin-right: 20px; float:left;" />';
			
			break;
			
			//If textarea		
			case 'textarea':
			

			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style="line-height:18px; display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';			
			// Apply filter to wp_editor() settings
				$editor_settings = apply_filters( 'rwmb_wysiwyg_settings', array( 'media_buttons' => FALSE, 'editor_class' => 'rwmb-wysiwyg', 'tinymce' => array( 'theme_advanced_buttons1' => 'styleselect,|,bold,italic,underline,removeformat,charmap,|,link,unlink,|,spellchecker,wp_fullscreen,|,undo,redo', 'theme_advanced_buttons2'=> '' )  ), 10, 1 );
				
			// Use new wp_editor() since WP 3.3
				wp_editor( $meta, $field['id'], $editor_settings );

				

			break;
 
			//If Button	
			case 'button':
				echo '<input style="float: left;" type="button" class="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
				echo 	'</td>',
			'</tr>';
			
			break;
		}

	}
 
	echo '</table>';
}

//focus slide type
function vt_show_box_slide_focus() {
	global $meta_box_slide_focus, $post;
 	
	echo '<p style="padding:10px 0 0 0;">'.__('In the Focus Slide template you can insert only the text that has to be focus without a title.', 'framework').'</p>';
	// Use nonce for verification
	echo '<input type="hidden" name="vt_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($meta_box_slide_focus['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
 
			
			//If Text		
			case 'text':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style="line-height:20px; display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'],'" size="30" style="width:75%; margin-right: 20px; float:left;" />';
			
			break;
			
			//If textarea		
			case 'textarea':
			
				echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style="line-height:18px; display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';			
			// Apply filter to wp_editor() settings
				$editor_settings = apply_filters( 'rwmb_wysiwyg_settings', array( 'media_buttons' => FALSE, 'editor_class' => 'rwmb-wysiwyg', 'tinymce' => array( 'theme_advanced_buttons1' => 'styleselect,forecolor,|,bold,italic,underline,removeformat,charmap,|,link,unlink,|,spellchecker,wp_fullscreen,|,undo,redo', 'theme_advanced_buttons2'=> '' )  ), 10, 1 );
				
			// Use new wp_editor() since WP 3.3
				wp_editor( $meta, $field['id'], $editor_settings );

			break;
 
			//If Button	
			case 'button':
				echo '<input style="float: left;" type="button" class="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
				echo 	'</td>',
			'</tr>';
			
			break;
		}

	}
 
	echo '</table>';
}


//description slide type
function vt_show_box_slide_description() {
	global $meta_box_slide_description, $post;
 	
	echo '<p style="padding:10px 0 0 0;">'.__('In the Text Slide template you can insert a title and a text.', 'framework').'</p>';
	// Use nonce for verification
	echo '<input type="hidden" name="vt_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($meta_box_slide_description['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
 
			
			//If Text		
			case 'text':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style="line-height:20px; display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'],'" size="30" style="width:75%; margin-right: 20px; float:left;" />';
			
			break;
			
			//If textarea		
			case 'textarea':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style="line-height:18px; display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';			
			// Apply filter to wp_editor() settings
				$editor_settings = apply_filters( 'rwmb_wysiwyg_settings', array( 'media_buttons' => FALSE, 'editor_class' => 'rwmb-wysiwyg', 'tinymce' => array( 'theme_advanced_buttons1' => 'styleselect,|,bold,italic,underline,removeformat,charmap,|,link,unlink,|,spellchecker,wp_fullscreen,|,undo,redo', 'theme_advanced_buttons2'=> '' )  ), 10, 1 );
				
			// Use new wp_editor() since WP 3.3
				wp_editor( $meta, $field['id'], $editor_settings );			
			break;
 
			//If Button	
			case 'button':
				echo '<input style="float: left;" type="button" class="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
				echo 	'</td>',
			'</tr>';
			
			break;
		}

	}
 
	echo '</table>';
}

//list slide type
function vt_show_box_slide_list() {
	global $meta_box_slide_list, $post;
 	
	echo '<p style="padding:10px 0 0 0;">'.__('In the List Slide template you can insert a title and a list of item.', 'framework').'</p>';
	// Use nonce for verification
	echo '<input type="hidden" name="vt_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($meta_box_slide_list['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
 
			
			//If Text		
			case 'text':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style="line-height:20px; display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'],'" size="30" style="width:75%; margin-right: 20px; float:left;" />';
			
			break;
			
			//If textarea		
			case 'textarea':
			

			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style="line-height:18px; display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';			
			// Apply filter to wp_editor() settings
				$editor_settings = apply_filters( 'rwmb_wysiwyg_settings', array( 'media_buttons' => FALSE, 'editor_class' => 'rwmb-wysiwyg', 'tinymce' => array( 'theme_advanced_buttons1' => 'styleselect,|,bold,italic,underline,removeformat,charmap,|,link,unlink,|,spellchecker,wp_fullscreen,|,undo,redo', 'theme_advanced_buttons2'=> '' )  ), 10, 1 );
				
			// Use new wp_editor() since WP 3.3
				wp_editor( $meta, $field['id'], $editor_settings );

				

			break;
 
			//If Button	
			case 'button':
				echo '<input style="float: left;" type="button" class="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
				echo 	'</td>',
			'</tr>';
			
			break;
		}

	}
 
	echo '</table>';
}

//photo slide type
function vt_show_box_slide_photo() {
	global $meta_box_slide_photo, $post;
 	
	echo '<p style="padding:10px 0 0 0;">'.__('In the Photo Slide template you can upload an image and a caption.<br><br>Upload the image and then click "insert into post". To delete the image, simply clear the field.', 'framework').'</p>';
	// Use nonce for verification
	echo '<input type="hidden" name="vt_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($meta_box_slide_photo['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
 
			
			//If Text		
			case 'text':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '" size="30" style="width:75%; margin-right: 20px; float:left;" />';
			
			break;
 
			//If Button	
			case 'button':
				echo '<input style="float: left;" type="button" class="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
				echo 	'</td>',
			'</tr>';
			
			break;
			
			//If Select	
			case 'select':
			
				echo '<tr>',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			
				echo'<select name="'.$field['id'].'">';
			
				foreach ($field['options'] as $option) {
					
					echo'<option';
					if ($meta == $option ) { 
						echo ' selected="selected"'; 
					}
					echo'>'. $option .'</option>';
				
				} 
				
				echo'</select>';
			
			break;
		}

	}
 
	echo '</table>';
}

//moodboard slide type
function vt_show_box_slide_moodboard() {
	global $meta_box_slide_moodboard, $post;
 	
	echo '<p style="padding:10px 0 0 0;">'.__('In the Moodboard Slide template you can upload four different pictures.<br><br>Upload an image and then click "insert into post". To delete an image, simply clear the field.', 'framework').'</p>';
	// Use nonce for verification
	echo '<input type="hidden" name="vt_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($meta_box_slide_moodboard['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
 
			
			//If Text		
			case 'text':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '" size="30" style="width:75%; margin-right: 20px; float:left;" />';
			
			break;
 
			//If Button	
			case 'button':
				echo '<input style="float: left;" type="button" class="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
				echo 	'</td>',
			'</tr>';
			
			break;
			
			//If Select	
			case 'select':
			
				echo '<tr>',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			
				echo'<select name="'.$field['id'].'">';
			
				foreach ($field['options'] as $option) {
					
					echo'<option';
					if ($meta == $option ) { 
						echo ' selected="selected"'; 
					}
					echo'>'. $option .'</option>';
				
				} 
				
				echo'</select>';
			
			break;
		}

	}
 
	echo '</table>';
}

function vt_show_box_slide_video() {
	global $meta_box_slide_video, $post;
 	
	echo '<p style="padding:10px 0 0 0;">'.__('In the Video Slide template you can embed a video.', 'framework').'</p>';
	// Use nonce for verification
	echo '<input type="hidden" name="vt_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($meta_box_slide_video['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
 
			
			//If Text		
			case 'text':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style="line-height:20px; display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'],'" size="30" style="width:75%; margin-right: 20px; float:left;" />';
			
			break;
			
			//If textarea		
			case 'textarea':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style="line-height:18px; display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<textarea name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" rows="8" cols="5" style="width:100%; margin-right: 20px; float:left;">', $meta ? $meta : $field['std'], '</textarea>';
			
			break;
 
			//If Button	
			case 'button':
				echo '<input style="float: left;" type="button" class="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
				echo 	'</td>',
			'</tr>';
			
			break;
		}

	}
 
	echo '</table>';
}


 
add_action('save_post', 'vt_save_data_slide');


/*-----------------------------------------------------------------------------------*/
/*	Save data when post is edited
/*-----------------------------------------------------------------------------------*/
 
function vt_save_data_slide($post_id) {
	global $meta_box, $meta_box_slide_cover, $meta_box_slide_focus, $meta_box_slide_description, $meta_box_slide_list, $meta_box_slide_photo, $meta_box_slide_moodboard, $meta_box_slide_video;
 
	// verify nonce
	if (!wp_verify_nonce($_POST['vt_meta_box_nonce'], basename(__FILE__))) {
		return $post_id;
	}
 
	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}
 
	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
 
	foreach ($meta_box['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], stripslashes(htmlspecialchars($new)));
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}

	/*foreach ($meta_box_slide_cover['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
 		if ($field['type']=='textarea') {
			if ($new && $new != $old) {
				$new = apply_filters('the_content', $new);
				$new = str_replace(']]>', ']]&gt;', $new);
				update_post_meta($post_id, $field['id'], html_entity_decode(nl2br($new)));
			} elseif ('' == $new && $old) {
				delete_post_meta($post_id, $field['id'], $old);
			}
		} else {
			if ($new && $new != $old) {
				update_post_meta($post_id, $field['id'], stripslashes(htmlspecialchars($new)));
			} elseif ('' == $new && $old) {
				delete_post_meta($post_id, $field['id'], $old);
			}
		}
	}*/
	foreach ($meta_box_slide_cover['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], stripslashes(htmlspecialchars_decode($new)));
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}

	foreach ($meta_box_slide_focus['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], stripslashes(htmlspecialchars_decode($new)));
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}

	foreach ($meta_box_slide_description['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], stripslashes(htmlspecialchars_decode($new)));
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}

	foreach ($meta_box_slide_list['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], stripslashes(htmlspecialchars_decode($new)));
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}

	foreach ($meta_box_slide_photo['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], stripslashes(htmlspecialchars_decode($new)));
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}

	foreach ($meta_box_slide_moodboard['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], stripslashes(htmlspecialchars_decode($new)));
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}	
	
	foreach ($meta_box_slide_video['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], stripslashes(htmlspecialchars_decode($new)));
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}

}


/*-----------------------------------------------------------------------------------*/
/*	Queue Scripts
/*-----------------------------------------------------------------------------------*/
 
function vt_admin_scripts_slide() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('vt-upload', get_template_directory_uri() . '/functions/js/upload-button.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('vt-upload');
}
function vt_admin_styles_slide() {
	wp_enqueue_style('thickbox');
}
add_action('admin_print_scripts', 'vt_admin_scripts_slide');
add_action('admin_print_styles', 'vt_admin_styles_slide');