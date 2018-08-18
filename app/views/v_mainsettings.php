
<form method="post" action="">
  <div class="form-group">
    <label for="sitename">Site Name</label>
    <input type="text" class="form-control" id="sitename" name="sitename" value="<?php echo $data['site_name']?>" >
  </div>
  <div class="form-group">
    <label for="siteurl">Site Url</label>
    <input type="url" class="form-control" name="siteurl" id="siteurl"  value="<?php echo $data['site_url']?>" >
  </div>
  <div class="form-group">
    <label for="sitedesc">Site Description</label>
    <textarea type="email" class="form-control" id="sitedesc" name="sitedesc"  ><?php echo $data['site_description']?></textarea>
  </div>
  <div class="form-group">
    <label for="siteemail">Site Emai</label>
    <input type="text" class="form-control" id="siteemail" name="siteemail"  value="<?php echo $data['site_email']?>" >
  </div>
  <div class="form-group">
    <label for="sitetages">Site Tages</label>
    <input type="text" class="form-control" id="sitetages" name="sitetages"   value="<?php echo $data['site_tages']?>">
  </div>
  <div class="form-group">
    <label for="sitehomepanel">Site Homepanel</label>
    <input type="text" class="form-control" id="sitehomepanel" name="sitehomepanel"  value="<?php echo $data['site_homepanel']?>" >
  </div>
  <div class="form-group">
    <label for="fb">FaceBook Link</label>
    <input type="url" class="form-control" id="fb" name="fb" value="<?php echo $data['fb']?>" >
  </div>
  <div class="form-group">
    <label for="fw">Twiter Link</label>
    <input type="url" class="form-control" id="fw" name="tw" value="<?php echo $data['fw']?>" >
  </div>
  <div class="form-group">
    <label for="rss">Rss Link</label>
    <input type="url" class="form-control" id="rss" name="rss" value="<?php echo $data['rss']?>">
  </div>
  <div class="form-group">
    <label for="yt">Youtub Link</label>
    <input type="url" class="form-control" id="yt" name="yt" value="<?php echo $data['yt']?>">
  </div>
  <input type="hidden" name="username" value="<?php echo $_SESSION['user']?>">
  <input type="submit" class="btn btn-danger mb-5 btn-block btn-lg" name="submit" value="Update">
</form>