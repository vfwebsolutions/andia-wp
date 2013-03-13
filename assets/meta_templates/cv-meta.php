<?php global $cv_media; ?>
<div class="my_meta_control">
 
	<label>CV Picture</label>
	
	<?php $metabox->the_field('cvPic'); ?>
    <?php $cv_media->setGroupName('cvPicture')->setInsertButtonLabel('Insert Picture')->setTab('type'); ?>
 
    <p>
        <?php echo $cv_media->getField(array('name' => $metabox->get_the_name(), 'value' => $metabox->get_the_value())); ?>
        <?php echo $cv_media->getButton(array('label' => 'Add CV Picture')); ?>
    </p>
	
	<label>Title</label>
	<p>
		<input type="text" name="<?php $metabox->the_name('title'); ?>" value="<?php $metabox->the_value('title'); ?>"/>
		<span>Enter in a Title</span>
	</p>
	
	<label>Email</label>
	<p>
		<input type="text" name="<?php $metabox->the_name('email'); ?>" value="<?php $metabox->the_value('email'); ?>"/>
	</p>
	
	<label>Website</label>
	<p>
		<input type="text" name="<?php $metabox->the_name('website'); ?>" value="<?php $metabox->the_value('website'); ?>"/>
		<span>Do not type "http://"</span>
	</p>
	
	<label>Mobile</label>
	<p>
		<input type="text" name="<?php $metabox->the_name('mobile'); ?>" value="<?php $metabox->the_value('mobile'); ?>"/>
	</p>
 
	<h4>Work Experience</h4>
 
	<a style="float:right; margin:0 10px;" href="#" class="dodelete-work button">Remove All Work Experience</a>
 
	<p></p>
 
	<?php while($mb->have_fields_and_multi('work')): ?>
	<?php $mb->the_group_open(); ?>
 
		<?php $mb->the_field('jobTitle'); ?>
		<label>Job Title</label>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>
		
		<?php $mb->the_field('company'); ?>
		<label>Company Name</label>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>
 
		<?php $mb->the_field('datePeriod'); ?>
		<label>Date Period of Work</label>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>
		
		<?php $mb->the_field('workDesc'); ?>
		<label>Work Description</label>
		<div class="customEditor" style="background: #fff !important"><textarea name="<?php $mb->the_name(); ?>"><?php $mb->the_value(); ?></textarea></div>
 
			<a href="#" class="dodelete button">Remove Work Experience</a>
 
	<?php $mb->the_group_close(); ?>
	<?php endwhile; ?>
 
	<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-work button">Add Work Experience</a></p>
	
	
	
	<h4>Key Skills</h4>
 
 	<h5>Beginner Skills</h5>
 	
	<a style="float:right; margin:0 10px;" href="#" class="dodelete-beginner-skills button">Remove All Beginner Skills</a>
 
	<?php while($mb->have_fields_and_multi('beginner-skills')): ?>
	<?php $mb->the_group_open(); ?>
 
		<?php $mb->the_field('bSkillType'); ?>
		<label>Skill Type</label>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>
 
		<a href="#" class="dodelete button">Remove Beginner Skill</a>
 
	<?php $mb->the_group_close(); ?>
	<?php endwhile; ?>
 
	<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-beginner-skills button">Add Another Beginner Skill</a></p>
	
	<hr />
	
	<h5>Intermediate Skills</h5>
	<a style="float:right; margin:0 10px;" href="#" class="dodelete-intermediate-skills button">Remove All Intermediate Skills</a>
 
	<?php while($mb->have_fields_and_multi('intermediate-skills')): ?>
	<?php $mb->the_group_open(); ?>
 
		<?php $mb->the_field('iSkillType'); ?>
		<label>Skill Type</label>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>
 
		<a href="#" class="dodelete button">Remove Intermediate Skill</a>
 
	<?php $mb->the_group_close(); ?>
	<?php endwhile; ?>
 
	<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-intermediate-skills button">Add Another Intermediate Skills</a></p>
	
	<hr />
	
	<h5>Advanced Skills</h5>
	<a style="float:right; margin:0 10px;" href="#" class="dodelete-advanced-skills button">Remove All Advanced Skills</a>
 
	<?php while($mb->have_fields_and_multi('advanced-skills')): ?>
	<?php $mb->the_group_open(); ?>
 
		<?php $mb->the_field('aSkillType'); ?>
		<label>Skill Type</label>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>
 
		<a href="#" class="dodelete button">Remove Advanced Skill</a>
 
	<?php $mb->the_group_close(); ?>
	<?php endwhile; ?>
 
	<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-advanced-skills button">Add Another Advanced Skill</a></p>
	
	
	<h4>Education</h4>
 
	<a style="float:right; margin:0 10px;" href="#" class="dodelete-education button">Remove All Education</a>
 
	<p></p>
 
	<?php while($mb->have_fields_and_multi('education')): ?>
	<?php $mb->the_group_open(); ?>
 
		<?php $mb->the_field('organisation'); ?>
		<label>College / University</label>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>
		
		<?php $mb->the_field('academicYear'); ?>
		<label>Academic Year</label>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>
		
		<?php $mb->the_field('qualification'); ?>
		<label>Qualification</label>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>
		
		<?php $mb->the_field('educationDesc'); ?>
		<label>Achievements / Comments </label>
		<div class="customEditor" style="background: #fff !important"><textarea name="<?php $mb->the_name(); ?>"><?php $mb->the_value(); ?></textarea></div>
 
			<a href="#" class="dodelete button">Remove Education Item</a>
 
	<?php $mb->the_group_close(); ?>
	<?php endwhile; ?>
 
	<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-education button">Add Education Item</a></p>

</div>