jQuery(document).ready(function() {
	
    jQuery('#vt_description_img_button').click(function() {
        
        window.send_to_editor = function(html) 
        
        {
            imgurl = jQuery('img',html).attr('src');
            jQuery('#vt_description_img').val(imgurl);
            tb_remove();
        }
     
     
        tb_show('', 'media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=true');
        return false;
        
    });

	jQuery('#vt_photo_img_button').click(function() {
		
		window.send_to_editor = function(html) 
		
		{
			imgurl = jQuery('img',html).attr('src');
			jQuery('#vt_photo_img').val(imgurl);
			tb_remove();
		}
	 
	 
		tb_show('', 'media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=true');
		return false;
		
	});
	
	jQuery('#vt_moodboard_img1_button').click(function() {
		
		window.send_to_editor = function(html) 
		
		{
			imgurl = jQuery('img',html).attr('src');
			jQuery('#vt_moodboard_img1').val(imgurl);
			tb_remove();
		}
	 
	 
		tb_show('', 'media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=true');
		return false;
		
	});

	jQuery('#vt_moodboard_img2_button').click(function() {
		
		window.send_to_editor = function(html) 
		
		{
			imgurl = jQuery('img',html).attr('src');
			jQuery('#vt_moodboard_img2').val(imgurl);
			tb_remove();
		}
	 
	 
		tb_show('', 'media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=true');
		return false;
		
	});
	
	jQuery('#vt_moodboard_img3_button').click(function() {
		
		window.send_to_editor = function(html) 
		
		{
			imgurl = jQuery('img',html).attr('src');
			jQuery('#vt_moodboard_img3').val(imgurl);
			tb_remove();
		}
	 
	 
		tb_show('', 'media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=true');
		return false;
		
	});

	jQuery('#vt_moodboard_img4_button').click(function() {
		
		window.send_to_editor = function(html) 
		
		{
			imgurl = jQuery('img',html).attr('src');
			jQuery('#vt_moodboard_img4').val(imgurl);
			tb_remove();
		}
	 
	 
		tb_show('', 'media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=true');
		return false;
		
	});



	//show and hide meta boxes
	   jQuery("#vt-meta-box-slide-cover").hide();
       jQuery("#vt_cover_button").show();
       jQuery("#vt-meta-box-slide-focus").hide();
       jQuery("#vt_focus_button").show();
       jQuery("#vt-meta-box-slide-description").hide();
       jQuery("#vt_description_button").show();
       jQuery("#vt-meta-box-slide-list").hide();
       jQuery("#vt_list_button").show();
       jQuery("#vt-meta-box-slide-photo").hide();
       jQuery("#vt_photo_button").show();
       jQuery("#vt-meta-box-slide-moodboard").hide();
       jQuery("#vt_moodboard_button").show();
       jQuery("#vt-meta-box-slide-video").hide();
       jQuery("#vt_video_button").show();
 
    jQuery('#vt_cover_button').click(function(){
    	jQuery('#vt_cover_button').css('background', '#F8A83C');
    	jQuery('#vt_focus_button').css('background', 'white');
    	jQuery('#vt_description_button').css('background', 'white');
    	jQuery('#vt_list_button').css('background', 'white');
    	jQuery('#vt_photo_button').css('background', 'white');
    	jQuery('#vt_moodboard_button').css('background', 'white');
    	jQuery('#vt_video_button').css('background', 'white');
    jQuery("#vt-meta-box-slide-cover").slideToggle();
    jQuery("#vt-meta-box-slide-video").hide();
    jQuery("#vt-meta-box-slide-photo").hide();
    jQuery("#vt-meta-box-slide-list").hide();
    jQuery("#vt-meta-box-slide-description").hide();
	jQuery("#vt-meta-box-slide-focus").hide();
	jQuery("#vt-meta-box-slide-moodboard").hide();
    });

    jQuery('#vt_focus_button').click(function(){
    	jQuery('#vt_cover_button').css('background', 'white');
    	jQuery('#vt_focus_button').css('background', '#F8A83C');
    	jQuery('#vt_description_button').css('background', 'white');
    	jQuery('#vt_list_button').css('background', 'white');
    	jQuery('#vt_photo_button').css('background', 'white');
    	jQuery('#vt_moodboard_button').css('background', 'white');
    	jQuery('#vt_video_button').css('background', 'white');
    jQuery("#vt-meta-box-slide-focus").slideToggle();
    jQuery("#vt-meta-box-slide-video").hide();
    jQuery("#vt-meta-box-slide-photo").hide();
    jQuery("#vt-meta-box-slide-list").hide();
    jQuery("#vt-meta-box-slide-description").hide();
	jQuery("#vt-meta-box-slide-cover").hide();
	jQuery("#vt-meta-box-slide-moodboard").hide();
    });

    jQuery('#vt_description_button').click(function(){
    	jQuery('#vt_cover_button').css('background', 'white');
    	jQuery('#vt_focus_button').css('background', 'white');
    	jQuery('#vt_description_button').css('background', '#F8A83C');
    	jQuery('#vt_list_button').css('background', 'white');
    	jQuery('#vt_photo_button').css('background', 'white');
    	jQuery('#vt_moodboard_button').css('background', 'white');
    	jQuery('#vt_video_button').css('background', 'white');
    jQuery("#vt-meta-box-slide-description").slideToggle();
    jQuery("#vt-meta-box-slide-video").hide();
    jQuery("#vt-meta-box-slide-photo").hide();
    jQuery("#vt-meta-box-slide-list").hide();
    jQuery("#vt-meta-box-slide-cover").hide();
	jQuery("#vt-meta-box-slide-focus").hide();
	jQuery("#vt-meta-box-slide-moodboard").hide();
    });

    jQuery('#vt_list_button').click(function(){
    	jQuery('#vt_cover_button').css('background', 'white');
    	jQuery('#vt_focus_button').css('background', 'white');
    	jQuery('#vt_description_button').css('background', 'white');
    	jQuery('#vt_list_button').css('background', '#F8A83C');
    	jQuery('#vt_photo_button').css('background', 'white');
    	jQuery('#vt_moodboard_button').css('background', 'white');
    	jQuery('#vt_video_button').css('background', 'white');
    jQuery("#vt-meta-box-slide-list").slideToggle();
	jQuery("#vt-meta-box-slide-cover").hide();
    jQuery("#vt-meta-box-slide-photo").hide();
    jQuery("#vt-meta-box-slide-video").hide();
    jQuery("#vt-meta-box-slide-description").hide();
	jQuery("#vt-meta-box-slide-focus").hide();
	jQuery("#vt-meta-box-slide-moodboard").hide();
    });

    jQuery('#vt_photo_button').click(function(){
    	jQuery('#vt_cover_button').css('background', 'white');
    	jQuery('#vt_focus_button').css('background', 'white');
    	jQuery('#vt_description_button').css('background', 'white');
    	jQuery('#vt_list_button').css('background', 'white');
    	jQuery('#vt_photo_button').css('background', '#F8A83C');
    	jQuery('#vt_moodboard_button').css('background', 'white');
    	jQuery('#vt_video_button').css('background', 'white');
    jQuery("#vt-meta-box-slide-photo").slideToggle();
  	jQuery("#vt-meta-box-slide-video").hide();
    jQuery("#vt-meta-box-slide-cover").hide();
    jQuery("#vt-meta-box-slide-list").hide();
    jQuery("#vt-meta-box-slide-description").hide();
	jQuery("#vt-meta-box-slide-focus").hide();
	jQuery("#vt-meta-box-slide-moodboard").hide();   
    });

    jQuery('#vt_moodboard_button').click(function(){
    	jQuery('#vt_cover_button').css('background', 'white');
    	jQuery('#vt_focus_button').css('background', 'white');
    	jQuery('#vt_description_button').css('background', 'white');
    	jQuery('#vt_list_button').css('background', 'white');
    	jQuery('#vt_photo_button').css('background', 'white');
    	jQuery('#vt_moodboard_button').css('background', '#F8A83C');
    	jQuery('#vt_video_button').css('background', 'white');
    jQuery("#vt-meta-box-slide-moodboard").slideToggle();
  	jQuery("#vt-meta-box-slide-video").hide();
    jQuery("#vt-meta-box-slide-cover").hide();
    jQuery("#vt-meta-box-slide-list").hide();
    jQuery("#vt-meta-box-slide-description").hide();
	jQuery("#vt-meta-box-slide-focus").hide();
	jQuery("#vt-meta-box-slide-photo").hide();
    });

    jQuery('#vt_video_button').click(function(){
    	jQuery('#vt_cover_button').css('background', 'white');
    	jQuery('#vt_focus_button').css('background', 'white');
    	jQuery('#vt_description_button').css('background', 'white');
    	jQuery('#vt_list_button').css('background', 'white');
    	jQuery('#vt_photo_button').css('background', 'white');
    	jQuery('#vt_moodboard_button').css('background', 'white');
    	jQuery('#vt_video_button').css('background', '#F8A83C');
    jQuery("#vt-meta-box-slide-video").slideToggle();
	jQuery("#vt-meta-box-slide-cover").hide();
    jQuery("#vt-meta-box-slide-photo").hide();
    jQuery("#vt-meta-box-slide-list").hide();
    jQuery("#vt-meta-box-slide-description").hide();
	jQuery("#vt-meta-box-slide-focus").hide();
	jQuery("#vt-meta-box-slide-moodboard").hide();
    });
		
//nascondo il tasto POST dal menù laterale
    jQuery('#menu-posts').css('display','none');

//nascondo il tasto PAGES dal menù laterale
    jQuery('#menu-pages').css('display','none');


//inserisce label di indicazione per quando si scrive un nuovo post
    jQuery('#title-prompt-text').css('display', 'none');
    jQuery('<label class="hide-if-no-js" style="color:#000000;font-size:12px;" id="label_number_id" for="title">Enter here the <b>number ID</b> (for the slide ordering) and a custom title to make the slide recognizable in the future (ex: 01 cover)</label>').insertAfter('#post-body #title-prompt-text');






});


 
     
jQuery('#apply-form input').blur(function()
{
    if( !jQuery(this).val() ) {
          jQuery(this).parents('p').addClass('warning');
    }
});
 











