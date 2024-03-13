<header class="navigation">
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom" id="mainnavbar">
        <div class="container-fluid pe-5">
            <a class="navbar-brand" href="<?php echo HTTP_SERVER.WS_ROOT;?>">
                <img src="<?php echo getThemePath(); ?>assets/images/logo-white.svg" id="logo-white" class="img-fluid" alt="Adaptable Services" title="Adaptable Services">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-expanded="false">
             <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-wow-duration="2s">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo HTTP_SERVER.WS_ROOT.'aboutus/';?>" title="Company"<?php if($module == 'aboutus'){ echo 'data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600"'; }?>>Company</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="<?php echo HTTP_SERVER.WS_ROOT.'services/';?>" title="Services" <?php if($module == 'services'){ echo 'data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600"'; }?>>Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo HTTP_SERVER.WS_ROOT.'solutions/';?>" title="Our Solutions" <?php if($module == 'solutions'){ echo 'data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600"'; }?>>Solutions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo HTTP_SERVER.WS_ROOT.'contact/';?>" title="Contact" <?php if($module == 'contact'){ echo 'data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600"'; }?>>Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-launage-icon" href="javascript:void(0);" title="Contact">Translate</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

