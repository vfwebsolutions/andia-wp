<?php
/*
Template Name: CV Template
*/
?>

<?php get_header(); ?>
<!--BEGIN #primary .hfeed-->
<div id="primary" class="hfeed">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php 
	global $cv_metabox;
	global $cv_media;
	
	$meta = get_post_meta(get_the_ID(), $cv_metabox->get_the_id(), TRUE);


?>
<div id="cv" class="instaFade">

	<div class="mainDetails">
		<div id="headshot" class="quickFade">
			<img src="<?php echo $meta['cvPic']; ?>" alt="<?php the_title(); ?>'s Picture" />
		</div>
		
		<div id="name">
			<h1 class="quickFade delayTwo"><?php the_title(); ?></h1>
			<h2 class="quickFade delayThree"><?php echo $meta['title']; ?></h2>
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<?php if ($meta['email']) { ?>
				<li>e: <a href="mailto:<?php echo $meta['email']; ?>" target="_blank"><?php echo $meta['email']; ?></a></li>
				<?php } ?>
				
				<?php if ($meta['website']) { ?>
				<li>w: <a href="http://<?php echo $meta['website']; ?>"><?php echo $meta['website']; ?></a></li>
				<?php } ?>
				
				<?php if ($meta['mobile']) { ?>
				<li>m: <?php echo $meta['mobile']; ?></li>
				<?php } ?>
				
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Personal Profile</h1>
				</div>
				
				<div class="sectionContent">
					<p><?php the_content(); ?></p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Work Experience</h1>
			</div>
			
			<div class="sectionContent" id="workExperience">
				<?php 
				foreach ($meta['work'] as $work) { ?>
					<article>
						<h2><?php echo $work['jobTitle']; ?> </h2>
						<h3><?php echo $work['company']; ?></h3>
						<p class="subDetails"><?php echo $work['datePeriod']; ?></p>
						<p><?php echo $work['workDesc']; ?></p>
					</article>
					
				<?php } ?>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Key Skills</h1>
			</div>
			<?php if ($meta['beginner-skills']) { ?>
			<div class="sectionContent">
				<span class="skillLevel"><h2>Beginner</h2></span>
				<ul class="keySkills">
				<?php foreach ($meta['beginner-skills'] as $beginnerSkills) { ?>
					<li><?php echo $beginnerSkills['bSkillType']; ?></li>
				<?php } ?>
				</ul>
			</div>
			<?php } ?>
			
			<?php if ($meta['intermediate-skills']) { ?>
			<div class="sectionContent">
				<span class="skillLevel"><h2>Intermediate</h2></span>
				<ul class="keySkills">
				<?php foreach ($meta['intermediate-skills'] as $beginnerSkills) { ?>
					<li><?php echo $beginnerSkills['iSkillType']; ?></li>
				<?php } ?>
				</ul>
			</div>
			<?php } ?>
			
			<?php if ($meta['advanced-skills']) { ?>
			<div class="sectionContent">
				<span class="skillLevel"><h2>Advanced</h2></span>
				<ul class="keySkills">
				<?php foreach ($meta['advanced-skills'] as $beginnerSkills) { ?>
					<li><?php echo $beginnerSkills['aSkillType']; ?></li>
				<?php } ?>
				</ul>
			</div>
			<?php } ?>
			<div class="clear"></div>
		</section>
		
		<?php if ($meta['education']) { ?>
		<section>
			<div class="sectionTitle">
				<h1>Education</h1>
			</div>
			
			<div class="sectionContent">
				<?php foreach ($meta['education'] as $education) { ?>
				<article>
					<h2><?php echo $education['organisation']; ?></h2>
					<h4><?php echo $education['academicYear']; ?></h4>
					<p class="subDetails"><?php echo $education['qualification']; ?></p>
					<p><?php echo $education['educationDesc']; ?></p>
				</article>
				<?php } ?>
			</div>
			<div class="clear"></div>
		</section>
		<?php } ?>
	</div>
	
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>

<!--END #primary .hfeed-->
			</div>

<?php get_footer(); ?>