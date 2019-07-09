<?php $this->load->view('shared/header')?>

    <!-- Page Content-->
    <section class="parallax-container bg-river-bed" data-parallax-img="<?php echo base_url('assets/images/top.jpg')?>">
        <div class="parallax-content section-45 section-sm-top-60 section-sm-bottom-68">
            <div class="shell text-center">
                <div class="range range-fix">
                    <div class="cell-xs-12">
                        <h2>Our Services</h2>
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
                        <li class="active">Our Services</li>
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
                                        <li><a href="<?php echo base_url('service')?>">Credit Report Assistance</a></li>
                                        <li><a href="<?php echo base_url('service/ifrs')?>">IFRS 9 Modelling for Financial Instruments for Expected Credit Losses </a></li>
                                        <li><a href="<?php echo base_url('service/analytics')?>">Data Analytics</a></li>
                                        <li><a href="<?php echo base_url('service/crd')?>">Credit Reference Databank (CRD) Data Submission</a></li>
                                        <li class="active"><a href="<?php echo base_url('service/financial')?>">Financial Advice</a></li>
                                        <li><a href="<?php echo base_url('service/training')?>">Safari Analytika Training</a></li>
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
                                    <h3 class="text-bold"><a href="#">Financial Advice</a></h3>
                                    <hr class="hr-block hr-left hr-curious-red"/>
                                <p>
                                    Safari Analytika offer independent professionals advice on financial matters to clients and recommend suitable financial products
                                    from the whole of the market. Such advice ranges from those operating their own businesses i.e. SME’s & Corporate entities,
                                    consumers or households looking to acquire personal loans or mortgages.
                                </p>
                            </div>
                            </div>
                        </article>
                    </div>
                    <div class="section-inner section-25 section-md-30">

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $this->load->view('shared/footer')?>