<?php
/**
 * Template Name: Scraped data - Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>
<div class="loading"></div>
<div class="container">
	<div id="content">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<div id="appContent" class="row"></div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="userDetailsModal" tabindex="-1" role="dialog" aria-labelledby="userDetailsModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header justify-content-end">
        <button type="button" class="close btn btn-sm btn-primary ml-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
            <div class="row profile">
                <div class="col-md-3">
                    <div class="profile-sidebar">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic text-center profilePicSingleProfile">
                            <img src="" class="img-responsive bg-img" alt="">
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                
                            </div>
                            <div class="profile-usertitle-job">
                                
                            </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->

                        <div class="portlet light bordered">
                            <!-- STAT -->
                            <div class="row list-separated profile-stat">
                                <div class="col-md-4 col-sm-4 col-xs-6 text-center m-auto col-3">
                                    <div class="uppercase profile-stat-title-heigh mb-2"> </div>
                                    <div class="uppercase profile-stat-text"> Height </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6 text-center m-auto col-3">
                                    <div class="uppercase profile-stat-title-blood mb-2"> </div>
                                    <div class="uppercase profile-stat-text"> Blood </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6 text-center m-auto col-3">
                                    <div class="uppercase profile-stat-title-age mb-2"> </div>
                                    <div class="uppercase profile-stat-text"> Age </div>
                                </div>
                            </div>
                            <!-- END STAT -->
                            <div>
                                <h4 class="profile-desc-title">About <span class="aboutName">Jason Davis</span></h4>
                                <span class="profile-desc-text">
                                    <p><b>Address:</b> <span class="addressAbout"></span></p>
                                    <p><b>City:</b> <span class="cityAbout"></span></p>
                                    <p><b>Postal Code:</b> <span class="postCodeAbout"></span></p>
                                    <p><b>State:</b> <span class="stateAbout"></span></p>
                                    <p><b>Phone:</b> <span class="phoneAbout"></span></p>
                                    <p><b>Birth Date:</b> <span class="birthdateAbout"></span></p>
                                </span>
                            </div>
                            <div>
                                <h4 class="profile-desc-title-company">Company Info</h4>
                                <span class="profile-desc-text">
                                    <p><b>Name:</b> <span class="nameAboutC"></span></p>
                                    <p><b>Address:</b> <span class="addressAboutC"></span></p>
                                    <p><b>City:</b> <span class="cityAboutC"></span></p>
                                    <p><b>Postal Code:</b> <span class="postCodeAboutC"></span></p>
                                    <p><b>State:</b> <span class="stateAboutC"></span></p>
                                    <p><b>Title:</b> <span class="titleAboutC"></span></p>
                                    <p><b>Department:</b> <span class="departmentAboutC"></span></p>
                                </span>
                                <div class="margin-top-20 profile-desc-link">
                                    <i class="fa fa-globe"></i>
                                    <a href=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="profile-content">
                        <h2 class="titlePosts">Posts</h2>
                        <div class="row" id="postsContainer"></div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
