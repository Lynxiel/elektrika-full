<?php
    $this->load->view('main/top-title-panel.php');
?>
<div class="short-info">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <?=$aPreviewText["tab_1"]?>
                </div>
                <div class="col-md-4 col-sm-4">
                    <img src="/images/image-about.png" alt="image about us" class="img-responsive">
                </div>
            </div>
            <div class="row buttons-full-info hidden-xs">
                <div class="col-md-6 col-sm-8">
                    <a href="#">
                        <button type="button" class="btn btn-default">
                            <span class="more">Read More</span>
                        </button>
                    </a>
                    <a href="#" >
                        <button type="button" class="btn btn-info">
                            <span class="follow">Follow Us</span>
                        </button>
                    </a>
                    <a href="#">
                        <button type="button" class="btn btn-primary">
                            <span class="facebook">Facebook</span>
                        </button>
                    </a>
                </div>
                <div class="col-md-6 col-sm-4">
                    <a href="#" class="pull-right">
                        <button type="button" class="btn btn-default">
                            <span class="get">Get in touch</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="columns-preview">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <p>
                    We are able to create anything on something real even dreams
                </p>
            </div>
        </div>
        <div class="columns clearfix">
            <div class="col-md-4 col-sm-4">
                <div>
                    <a id="people" href="#">Creative People Working</a>
                </div>
                <p><?=$aTabs["tab_1"]?></p>
                <button class="btn btn-default visible-xs" type="button">
                    <span class="more">Read More</span>
                </button>
            </div>
            <div class="col-md-4 col-sm-4">
                <div>
                    <a id="professionals" href="#">We are Professionals</a>
                </div>
                <p><?=$aTabs["tab_2"]?></p>
                <button class="btn btn-default visible-xs" type="button">
                    <span class="more">Read More</span>
                </button>
            </div>
            <div class="col-md-4 col-sm-4">
                <div>
                    <a id="quality" href="#">Quality & Beautiful Work</a>
                </div>
                <p><?=$aTabs["tab_3"]?></p>
                <button class="btn btn-default visible-xs" type="button">
                    <span class="more">Read More</span>
                </button>
            </div>
        </div>
        <div class="columns hidden-xs">
            <div class="col-md-4 col-sm-4">

                <button type="button" class="btn btn-default">
                    <span class="more">Read More</span>
                </button>
            </div>
            <div class="col-md-4 col-sm-4">

                <button type="button" class="btn btn-default">
                    <span class="more">Read More</span>
                </button>
            </div>
            <div class="col-md-4 col-sm-4">

                <button type="button" class="btn btn-default">
                    <span class="more">Read More</span>
                </button>
            </div>
        </div>
    </div>
</div>
<?php
    $this->load->view('main/tabs-images.php');
    $this->load->view('main/mail-panel.php');
?>