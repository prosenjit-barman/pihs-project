<!-- FOOTER -->
<footer id="footer" class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-md-6 col-lg-4">
                    <div class="col text-center">
                        <img src="<?php echo base_url('uploads/logo.png');?>" width="60"
                             alt="">
                        &nbsp; <p class="mt-3"><?php echo $hospital_name;?></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="col">
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-1">
                            <?php echo get_phrase('main_menu');?>
                        </h4>

                        <ul class="footer-links">
                            <li>
                                <a href="<?php echo site_url('home');?>">
                                    <?php echo get_phrase('home');?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('home/doctors');?>">
                                    <?php echo get_phrase('doctors');?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('home/appointment');?>">
                                    <?php echo get_phrase('make_an_appointment');?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('login');?>"
                                    target="_blank">
                                    <?php echo get_phrase('login');?>
                                </a>
                            </li>
                        </ul>
                        </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="col">
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-1">
                            <?php echo get_phrase('help_and_support');?>
                        </h4>

                        <ul class="footer-links">
                            <li>
                                <a href="<?php echo site_url('home/contact_us');?>">
                                    <?php echo get_phrase('contact_us');?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('home/about_us');?>">
                                    <?php echo get_phrase('about_us');?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('home/blog');?>">
                                    <?php echo get_phrase('blog');?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row row-cols-xs-spaced flex flex-items-xs-middle">
                <div class="col col-sm-7 col-xs-12 text-center">
                    <div class="copyright text-xs-center text-sm-left">
                        <?php echo $this->frontend_model->get_frontend_settings('copyright_text');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>