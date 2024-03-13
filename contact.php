<?php
include "./common/siteheader.php";
?>
<body class="lm-animated-bg">
<section class="main-section1" style="background-position: calc(50% + 2.52529px) calc(50% + 3.85808px);">
    <div class="container-fluid pt-5 ps-2 pe-2 pb-5">
        <div class="layout">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand ms-4" href="./index.php">
                        <img src="../assets/image/logo(white)1.png" alt="" class="img-fluid">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse site-nav" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="./about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="./resume.php">Resume</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./contact.php">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="mailto: abhi.patel@adaptable.pro">@abhi.patel@adaptable.pro</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- main info -->
            <div class="container-fluid contact-form">
                <div class="row justify-content-center ">
                <div class="col-sm-8 col-xs-8 align-self-center">
                    <div class="">
                        <form id="contactForm" action="../ajaxlib/contactmail.php" method="post" class="cform" role="form" data-toggle="validator">
                            <div class="col-md-12 form-group text-center">
                                <h4 class="mb-5 display-5 text-white text-muted">Make an inquiry</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input id="contactName" name="contactName" type="text" class="form-control" data-error="Enter Your Full Name" placeholder="Your name" required>
                                    <label>Contact Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input id="contactEmail" name="contactEmail" type="email" class="form-control" placeholder="Email address" data-error="That email address is invalid" required>
                                        <label>Contact Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input id="contactMobile" name="contactMobile" type="text" class="form-control" placeholder="Mobile number" data-error="Enter Your Mobile No" required>
                                        <label>Contact Mobile</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control"  name="contactSubject" id="contactSubject" placeholder="Subject" data-error="Enter Subject here" required>
                                    <label>Contact Subject</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <textarea id="contactMessage" name="contactMessage" class="form-control" placeholder="Write you message here..." style="height:100px;" required></textarea>
                                    <label>Contact Message</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group mt-5 p-5 text-center">
                                <input type="hidden" name="action" value="send">
                                <button type="submit" class="btn btn-primary">Send Message&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                <div id="confirmModal" class="modal fade" role="dialog" data-error="Opps!! Your Inquiry is not submitted." data-success="Congratulations! Your Inquiry is submitted.">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <h4 class="modal-title"></h4>
                            </div>
                            <!-- dialog box -->
                            <div class="modal-body"></div>
                        </div>
                    </div>
                </div>
            </div>


<!--  -->
        </div>
    </div>
</section>
<!-- social sidebar -->

<div id="fixed-social">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
    <div class="collapse" id="navbarToggleExternalContent">
        <div>
            <a href="https://www.facebook.com/SCET.Social" class="fixed-facebook" target="_blank"><i class="fab fa-facebook-f fa-2x"></i><span>Facebook</span></a>
        </div>
        <div>
            <a href="https://twitter.com/ScetSurat?s=08" class="fixed-twitter" target="_blank"><i class="fab fa-twitter fa-2x"></i> <span>Instagram</span></a>
        </div>
        <div>
            <a href="https://www.youtube.com/channel/UCXy4Mvs64zNQl407vInl6fw" class="fixed-youtube" target="_blank"><i class="fab fa-youtube fa-2x"></i> <span>YouTube</span></a>
        </div>
        <div>
            <a href="https://www.instagram.com/scetsurat_official/" class="fixed-instagram" target="_blank"><i class="fab fa-instagram fa-2x"></i> <span>Instagram</span></a>
        </div>
      </div>
    </div>

    </div>



</div>

<!-- -------------------- -->
<?php
include "./common/sitefooter.php";
?>
