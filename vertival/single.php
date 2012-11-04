<?php get_header(); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			
			<?php 
				$cover_title = get_post_meta($post->ID, 'vt_cover_title', TRUE);
				$cover_sbt = get_post_meta($post->ID, 'vt_cover_sbt', TRUE);
				$cover_sbt = apply_filters('the_content', $cover_sbt);
				$cover_sbt = str_replace(']]>', ']]&gt;', $cover_sbt);
				$focus_txt = get_post_meta($post->ID, 'vt_focus', TRUE);
				$focus_txt = apply_filters('the_content', $focus_txt);
				$focus_txt = str_replace(']]>', ']]&gt;', $focus_txt);
				$description_title = get_post_meta($post->ID, 'vt_description_title', TRUE);
				$description_txt = get_post_meta($post->ID, 'vt_description', TRUE);
				$description_txt = apply_filters('the_content', $description_txt);
				$description_txt = str_replace(']]>', ']]&gt;', $description_txt);
				$list_title = get_post_meta($post->ID, 'vt_list_title', TRUE);
				$list_txt = get_post_meta($post->ID, 'vt_bullet_list', TRUE);
				$list_txt = apply_filters('the_content', $list_txt);
				$list_txt = str_replace(']]>', ']]&gt;', $list_txt); 
				$photo_img = get_post_meta($post->ID, 'vt_photo_img', TRUE); 
				$caption = get_post_meta($post->ID, 'vt_photo_cpt', TRUE);
				$mood_title = get_post_meta($post->ID, 'vt_moodboard_title', TRUE); 
				$mood_img1 = get_post_meta($post->ID, 'vt_moodboard_img1', TRUE);
				$mood_img2 = get_post_meta($post->ID, 'vt_moodboard_img2', TRUE); 
				$mood_img3 = get_post_meta($post->ID, 'vt_moodboard_img3', TRUE); 
				$mood_img4 = get_post_meta($post->ID, 'vt_moodboard_img4', TRUE);  
				$video_title = get_post_meta($post->ID, 'vt_video_title', TRUE);
				$embed = get_post_meta($post->ID, 'vt_slide_embed_code', TRUE);
			?>
			<?php if (has_post_thumbnail( $post->ID ) ): //se le slide hanno background?> 

				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' ); ?>
				<?php if($cover_title!='' || $cover_sbt!='') : // Cover slide ?>
					
					<div class="slide blocco t_cover" id="post-<?php the_ID(); ?>" style="background-image: url('<?php echo $image[0]; ?>')">
						<div class="filtro">
							<table width="90%" border="0" cellpadding="0" cellspacing="0" >
								<tr>
									<td align="center">
										<h1><?php echo $cover_title; ?></h1>										
										<?php echo htmlspecialchars_decode(nl2br($cover_sbt)); ?>																	
									</td>
								</tr>	
							</table>					
						</div>
					</div>

				<?php elseif($focus_txt!='') : // Focus slide ?>
					<div class="slide blocco t_focus" id="post-<?php the_ID(); ?>" style="background-image: url('<?php echo $image[0]; ?>')">
						<div class="filtro">
							<table width="90%" border="0" cellpadding="0" cellspacing="0" >
								<tr>
									<td align="right">
										<div class="animate-in" data-animation="fly-in-left" ><?php echo $focus_txt; ?></div>
									</td>
								</tr>	
							</table>					
						</div>
					</div>	
				<?php elseif($description_title!='' || $description_txt!='') : // Testo slide ?>
					<div class="slide blocco t_text" id="post-<?php the_ID(); ?>" style="background-image: url('<?php //echo $image[0]; ?>')">
							<table width="100%" border="0" cellpadding="0" cellspacing="0" >
								<tr>
									<td align="center">
										<h1><?php echo $description_title; ?></h1>
										<div class="pic_slide" style="background-image: url('<?php echo $image[0]; ?>')"></div>
										<div class="animate-in" data-animation="fly-in-left"><?php echo htmlspecialchars_decode($description_txt); ?> </div>								
									</td>
								</tr>	
							</table>							
					</div>
				<?php elseif($list_title!='' || $list_txt!='') : // bullet list slide ?>
					<div class="slide blocco t_list" id="post-<?php the_ID(); ?>" style="background-image: url('<?php echo $image[0]; ?>')">							
						<div class="filtro">
							<table width="90%" border="0" cellpadding="0" cellspacing="0" >
								<tr>
									<td align="left">
										<h1><?php echo $list_title; ?></h1>
										<br><br><br><br>
										<?php echo htmlspecialchars_decode($list_txt); ?>
									</td>
								</tr>	
							</table>
						</div>					
					</div>			
				<?php elseif($photo_img!='' || $caption!='') : // Foto slide ?>
					<div class="slide blocco t_photo" id="post-<?php the_ID(); ?>" style="background-image: url('<?php echo $image[0]; ?>')">
						<div class="filtro">
							<table width="100%" border="0" cellpadding="0" cellspacing="0" >
								<tr>
									<td align="right">
										<h3><?php echo $caption; ?></h3>										
										<div class="img_photo" style="background-image: url('<?php echo $photo_img; ?>');"></div>
									</td>
								</tr>	
							</table>					
						</div>
					</div>
				<?php elseif($mood_title!='' || $mood_img1!='' || $mood_img2!='' || $mood_img3!='' || $mood_img4!='') : // Moodboard slide ?>
					<div class="slide blocco t_mood4" id="post-<?php the_ID(); ?>" style="background-image: url('<?php echo $image[0]; ?>')">
						<div class="filtro">
							<table width="90%" border="0" cellpadding="0" cellspacing="0" >
								<tr>
									<td align="center">
										<h1><?php echo $mood_title; ?></h1>
										<div class="centerer">
											<table border="0" cellpadding="0" cellspacing="0" style="vertical-align:middle; width:100%">
												<tr>
												    <td valign="center">
														<div class="sx">
															<div class="sx1">
																<img class="mood4_foto1 mood4_foto" src="<?php echo $mood_img1; ?>" alt="<?php the_title(); ?>" /><br>
															</div>
															<div class="clearer"></div>
															<div class="sx2">
																<img class="mood4_foto2 mood4_foto" src="<?php echo $mood_img2; ?>" alt="<?php the_title(); ?>" />
															</div>
														</div>
														<div  class="dx">
															<div class="dx1">
																<br><br>
																<img class="mood4_foto3 mood4_foto" src="<?php echo $mood_img3; ?>" alt="<?php the_title(); ?>" /><br>
															</div>
															<div class="clearer"></div>
															<div class="dx2">
																<img class="mood4_foto4 mood4_foto" src="<?php echo $mood_img4; ?>" alt="<?php the_title(); ?>" />
															</div>
														</div>
													</td>
												</tr>
											</table>
										</div>
									</td>
								</tr>	
							</table>					
						</div>
					</div>					
				<?php elseif($embed!='') : // Video slide ?>
					<div class="slide blocco t_video" id="post-<?php the_ID(); ?>" style="background-image: url('<?php echo $image[0]; ?>')">
						<div class="filtro">
							<table width="90%" border="0" cellpadding="0" cellspacing="0" >
								<tr>
									<td align="right">
										<h1><?php echo $video_title; ?></h1>
										<div ><?php echo htmlspecialchars_decode($embed); ?></div>										
									</td>
								</tr>	
							</table>					
						</div>
					</div>
				<?php else : // No post ?>
					<div class="slide blocco" id="post-<?php the_ID(); ?>" style="background-image: url('<?php echo $image[0]; ?>')">
						<div class="filtro">
							<table width="90%" border="0" cellpadding="0" cellspacing="0" >
								<tr>
									<td align="right">
										<h1><?php the_title(); ?></h1>
										<?php the_content(); ?>
									</td>
								</tr>	
							</table>					
						</div>
					</div>					
				<?php endif; // End normal post?>		

				<?php else : // Slide senza feautured background ?>	

				<?php if($cover_title!='' || $cover_sbt!='') : // Cover slide ?>
					
					<div class="slide blocco t_cover" id="post-<?php the_ID(); ?>">
						<table width="90%" border="0" cellpadding="0" cellspacing="0" >
							<tr>
								<td align="center">
									<h1><?php echo $cover_title; ?></h1>
									<?php echo htmlspecialchars_decode(nl2br($cover_sbt)); ?>
								</td>
							</tr>	
						</table>					
					</div>
					
				<?php elseif($focus_txt!='') : // Focus slide ?>
					<div class="slide blocco t_focus" id="post-<?php the_ID(); ?>">
						<table width="90%" border="0" cellpadding="0" cellspacing="0" >
							<tr>
								<td align="right">
									<div class="animate-in" data-animation="fly-in-left" ><?php echo $focus_txt; ?></div>
								</td>
							</tr>	
						</table>					
					</div>

				<?php elseif($description_title!='' || $description_txt!='') : // Testo slide ?>
					<div class="slide blocco t_text no_pic" id="post-<?php the_ID(); ?>">
						<table width="90%" border="0" cellpadding="0" cellspacing="0" >
							<tr>
								<td align="right">
									<h1><?php echo $description_title; ?></h1>
									<div class="animate-in" data-animation="fly-in-left"><?php echo htmlspecialchars_decode($description_txt); ?></div>
								</td>
							</tr>	
						</table>					
					</div>

				<?php elseif($list_title!='' || $list_txt!='') : // bullet list slide ?>
					<div class="slide blocco t_list" id="post-<?php the_ID(); ?>">
						<table width="90%" border="0" cellpadding="0" cellspacing="0" >
							<tr>
								<td align="left">
									<h1><?php echo $list_title; ?></h1>
									<br><br><br><br>
									<?php echo htmlspecialchars_decode($list_txt); ?>
								</td>
							</tr>	
						</table>					
					</div>

					
				<?php elseif($photo_img!='' || $caption!='') : // Foto slide ?>
					<div class="slide blocco t_photo" id="post-<?php the_ID(); ?>">
						<table width="90%" border="0" cellpadding="0" cellspacing="0" >
							<tr>
								<td align="right">
									<h3><?php echo $caption; ?></h3>
									<div class="img_photo" style="background-image: url('<?php echo $photo_img; ?>');"></div>
								</td>
							</tr>	
						</table>					
					</div>

				<?php elseif($mood_title!='' || $mood_img1!='' || $mood_img2!='' || $mood_img3!='' || $mood_img4!='') : // Moodboard slide ?>
					<div class="slide blocco t_mood4" id="post-<?php the_ID(); ?>">
						<table width="90%" border="0" cellpadding="0" cellspacing="0" >
							<tr>
								<td align="center">
									<h1><?php echo $mood_title; ?></h1>
									<div class="centerer">
										<table border="0" cellpadding="0" cellspacing="0">
											<tr>
											    <td valign="center">
													<div class="sx">
														<div class="sx1">
															<img class="mood4_foto1 mood4_foto" src="<?php echo $mood_img1; ?>" alt="<?php the_title(); ?>" /><br>
														</div>
														<div class="clearer"></div>
														<div class="sx2">
															<img class="mood4_foto2 mood4_foto" src="<?php echo $mood_img2; ?>" alt="<?php the_title(); ?>" />
														</div>
													</div>
													<div  class="dx">
														<div class="dx1">
															<br><br>
															<img class="mood4_foto3 mood4_foto" src="<?php echo $mood_img3; ?>" alt="<?php the_title(); ?>" /><br>
														</div>
														<div class="clearer"></div>
														<div class="dx2">
															<img class="mood4_foto4 mood4_foto" src="<?php echo $mood_img4; ?>" alt="<?php the_title(); ?>" />
														</div>
													</div>
												</td>
											</tr>
										</table>
									</div>
								</td>
							</tr>	
						</table>					
					</div>				

				<?php elseif($embed!='') : // Video slide ?>
					<div class="slide blocco t_video" id="post-<?php the_ID(); ?>">
						<table width="90%" border="0" cellpadding="0" cellspacing="0" >
							<tr>
								<td align="right">
									<h1><?php echo $video_title; ?></h1>
									<div><?php echo htmlspecialchars_decode($embed); ?></div>									
								</td>
							</tr>	
						</table>					
					</div>

				<?php else : // Normal post ?>
					<div class="slide blocco" id="post-<?php the_ID(); ?>">
						<table width="90%" border="0" cellpadding="0" cellspacing="0" >
							<tr>
								<td align="right">
									<h1><?php the_title(); ?></h1>
									<?php the_content(); ?>
								</td>
							</tr>	
						</table>					
					</div>								
				<?php endif; // End normal post?>

			<?php endif; //End if con o senza background?>
				
		<?php endwhile; ?>

		<?php else : ?>

		<h2>Non Trovato.</h2>

		<?php endif; ?>	



<?php get_footer(); ?>