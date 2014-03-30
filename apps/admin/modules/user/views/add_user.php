<div id="main" role="main">
  <div id="content">
    <div class="content-wrapper has-header">
      <div class="content-header clearfix">
        <h2 class="pull-left">New User</h2>
        <div class="actions pull-right">
          <div class="btn-group">
            <a href="/user/user_list" class="btn">Cancel</a>
          </div>
        </div>
      </div>
      <div class="content-body scrollable">
        <div class="column-left">
          <div class="block">
            <div class="pad">
              <div class="block-header form-header">
                <h4>Information</h4>
              </div>
              <form action="" class="form-horizontal" method="post">
                <div class="control-group">
                  <label for="username" class="control-label">Email*</label>
                  <div class="controls">
                    <input type="email" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>" maxlength="64" class="input-block-level" name="username" id="username" required>
                  </div>
                </div>
                <div class="control-group">
                  <label for="password" class="control-label">Password*</label>
                  <div class="controls">
                    <input type="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>" maxlength="64" class="input-block-level" name="password" id="password" required>
                  </div>
                </div>
                <div class="control-group">
                  <label for="first_name" maxlength="24" class="control-label">First Name*</label>
                  <div class="controls">
                    <input type="text" value="<?php echo isset($_POST['first_name']) ? $_POST['first_name'] : ''; ?>" class="input-block-level" id="first_name" name="first_name" required>
                  </div>
                </div>
                <div class="control-group">
                  <label for="last_name" maxlength="24" class="control-label">Last Name*</label>
                  <div class="controls">
                    <input type="text" value="<?php echo isset($_POST['last_name']) ? $_POST['last_name'] : ''; ?>" class="input-block-level" id="last_name" name="last_name" required>
                  </div>
                </div>
                <div class="control-group">
                  <label for="title" maxlength="24" class="control-label">Title</label>
                  <div class="controls">
                    <input type="text" value="<?php echo isset($_POST['title']) ? $_POST['title'] : ''; ?>" class="input-block-level" id="title" name="title">
                  </div>
                </div>
<!--                 <div class="control-group">
                  <label for="facebook" class="control-label">Facebook</label>
                  <div class="controls">
                    <input type="text"  class="input-block-level" id="facebook" value="<?php echo isset($_POST['facebook']) ? $_POST['facebook'] : ''; ?>">
                  </div>
                </div>
                <div class="control-group">
                  <label for="twitter" class="control-label">Twitter</label>
                  <div class="controls">
                    <input type="text"  class="input-block-level" id="twitter" value="<?php echo isset($_POST['twitter']) ? $_POST['twitter'] : ''; ?>">
                  </div>
                </div> -->
<!--                 <div class="control-group">
                  <label for="title" maxlength="24" class="control-label">Gender</label>
                  <div class="controls">
                        <label for="sex-male">
                          <input type="radio" id="sex-male" name="gender" value="male"   >
                          <span>Male</span>
                        </label>
                        <label for="sex-female">
                          <input type="radio" id="sex-female" name="gender" value="female"  >
                          <span>Female</span>
                        </label>
                 </div>
                </div> -->

                <div class="form-actions">
                  <a href="/user/user_list/"><input type="submit" class="btn btn-primary" value="Submit"></a>
                </div>
                <input type="hidden" name="posted" value="true" />
              </form>
            </div>
          </div>
        </div>
        <div class="column-right">
        </div>
      </div>
    </div>
  </div>
</div>