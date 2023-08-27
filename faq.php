<?php
include('layouts/header.php');
?>
<!-- Breadcrumb Area Start Here -->
<div class="breadcrumb-area" style="background-image: url(img/bg/breadcrumb_bg_2.jpg)">
    <div class="container text-center">
        <h3>Breadcrumb Title</h3>
        <ol class="breadcrumb breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">FAQ</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb Area End Here -->


<div class="faq-area adp_top adp_bottom">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <span>#Experience</span>
                    <h2>Frequently AQ</h2>
                </div>
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-bs-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    Section 1
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum
                                    id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt
                                    ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor
                                    aliquam vitae. Curabitur molestie eros. </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-bs-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Section 2
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum
                                    id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt
                                    ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor
                                    aliquam vitae. Curabitur molestie eros. </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-bs-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Section 3
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum
                                    id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt
                                    ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor
                                    aliquam vitae. Curabitur molestie eros. </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-bs-toggle="collapse" data-parent="#accordion"
                                    href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Section 4
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFour">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum
                                    id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt
                                    ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor
                                    aliquam vitae. Curabitur molestie eros. </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-bs-toggle="collapse" data-parent="#accordion"
                                    href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Section 5
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFive">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum
                                    id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt
                                    ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor
                                    aliquam vitae. Curabitur molestie eros. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
include('layouts/footer.php');
?>