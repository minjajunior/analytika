<?php $this->load->view('shared/header')?>

    <!-- Page Content-->
    <section class="parallax-container bg-river-bed" data-parallax-img="<?php echo base_url('assets/images/top.jpg')?>">
        <div class="parallax-content section-45 section-sm-top-60 section-sm-bottom-68">
            <div class="shell text-center">
                <div class="range range-fix">
                    <div class="cell-xs-12">
                        <h2>About Us</h2>
                        <hr class="hr-block hr-white"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="border-bottom border-bottom-gray-lighter novi-background bg-cover">
        <div class="shell">
            <div class="range range-fix">
                <div class="cell-xs-12">
                    <ul class="breadcrumbs-custom">
                        <li><a href="<?php echo base_url()?>">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- About us-->
    <section class="section-top-55 section-bottom-85 novi-background bg-cover">
        <div class="">
            <div class="range range-fix">
                <div class="post-aside cell-xs-12 cell-md-4 cell-lg-3 offset-top-60 offset-md-top-0">
                    <div class="inset-md-left-15 inset-md-right-15">
                        <div class="range range-40 range-fix widget-list">
                            <div class="cell-xs-12 cell-sm-6 cell-md-12 widget-item">
                                <nav class="page-nav">
                                    <ul class="page-nav-list">
                                        <li><a href="<?php echo base_url('about')?>">About Us</a></li>
                                        <li><a href="<?php echo base_url('about/began')?>">How Safari Analytika began</a></li>
                                        <li><a href="<?php echo base_url('about/vision')?>">Our Vision</a></li>
                                        <li class="active"><a href="<?php echo base_url('about/mission')?>">Our Mission</a></li>
                                        <li><a href="<?php echo base_url('about/social')?>">Social Responsibility</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell-xs-12 cell-md-8 cell-lg-9 content-inner tab-content">
                    <div class="section-inner section-25 section-md-30">
                        <article class="post-info">
                            <div class="post-info-body offset-top-30 offset-md-top-45">
                                <div class="service-body">
                                    <h3 class="text-bold"><a href="#">Our Mission</a></h3>
                                    <hr class="hr-block hr-left hr-curious-red"/>
                                <p>To empower and inspire with the most trusted analytics.</p>
                                <p>Our mission is to make it easier for our customers to make well informed decisions through the power of analytics every day,
                                    to shorten the path from data to insight – and to inspire bold new discoveries that drive progress. The result is analytics
                                    that breaks down barriers, fuels ambitions and gets results.</p>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php $this->load->view('shared/footer')?>