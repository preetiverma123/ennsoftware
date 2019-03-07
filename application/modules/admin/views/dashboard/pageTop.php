<div class="page-top clearfix" scroll-position="scrolled" max-height="50" ng-class="{'scrolled': scrolled}">
    <div class="row">
        <div class="col-md-4">
            <a href="#/dashboard" class="al-logo logo-lg clearfix"><span><img src="<?php echo base_url('assets/bluradmin/uploads/logo-enn.jpg')?>" alt="logo" style="height:55px;width:78px;"></span>
            </a>
        </div>
        <div class="col-md-4">
            <span class="enn-head">Welcome To ENN Technologies</span>
        </div>
       
            <a href class="collapse-menu-link ion-navicon" ba-sidebar-toggle-menu></a>
       
    

 <div class="col-md-4">
  <div class="user-profile clearfix">
    <div class="al-user-profile" uib-dropdown>
      <a uib-dropdown-toggle class="profile-toggle-link">
          Amresh Singh
    <!--<?php if(!empty($user->image)){?>-->
   <!--     <img ng-src="<?php echo base_url('assets/bluradmin/uploads/images/'.$user->image)?>">-->
   <!--   <?php }else{ ?>-->
    <!--  <img ng-src="<?php echo base_url('assets/bluradmin/uploads/avatar5.png')?>">-->
    <!--<?php } ?>-->
    </a>
      <ul  class="top-dropdown-menu profile-dropdown" uib-dropdown-menu>
        <li><i class="dropdown-arr"></i></li>
    <?php /*?>    <li><a href="#/profile"><i class="fa fa-user"></i>Profile</a></li>
        <li><a href><i class="fa fa-cog"></i>Settings</a></li><?php */?>
        <li><a href='<?php echo site_url('admin/login/logout') ?>' class="signout"><i class="fa fa-power-off"></i>Sign out</a></li>
      </ul>
    </div>
    <msg-center></msg-center>
  </div>
  </div>
 </div>
</div>