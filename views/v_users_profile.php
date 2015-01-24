
  <h3 class="page-header">Hi, <?=$user->first_name?>!</h3>
  <p>Member since: <?= date('F j, Y', $user->created) ?>.</p>
        
        <?php if ($user->image  == 'placeholder.png'): ?><br>
            <p>Would you like to update your profile picture?</p>
        <?php endif; ?>
        
        <form role="form" method='POST' enctype="multipart/form-data" action='/users/profile_image/'>
            <img class="img-rounded" src="/uploads/avatars/<?= $user->image ?>" alt="Profile image for <?=$user->first_name . ' ' . $user->last_name ?>"><br><br>                     
            <div class="form-group">    
                <input type="file" id="image" name="image">
                <br>       
                <button type="submit" class="btn btn-custom">Update</button>             
            </div>
        </form> 
       
    

        <?php if(isset($user_name)): ?>
			<h1>This is the profile for <?=$user_name?></h1>
		<?php else: ?>
			<h1>No user specified</h1>
		<? endif; ?>