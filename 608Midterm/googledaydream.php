<?php include "partials/head.html";?>

<body id="products-single">
    <?php include "partials/nav.html";?>
    <div class="container second" id="product-section">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="images/vr1.jpg" alt="First slide" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/vr2.jpg" alt="Second slide" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/vr3.jpg" alt="Second slide" width="100%">
                        </div>
                        
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 pl-5 align-self-center">
                <div class="row">
                    <div class="col-md-12 mt-0">
                        <h2 class="center">Google Daydream</h2>
                    </div>
                </div>
                <div class="row">
                    <p class="center mt-4">Support 99% air-conditioning in the market, automatic cloud panel match, one button download app to remote control.
Turn on air-conditioning before you get home, enjoy warm time when you get home.</p>
                </div>
                <div class="row mt-4">
                    <div class="col-6">
                        <small>colors</small>
                    </div>
                    <div class="col-6">
                        <small>quantity</small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <select class="selectpicker form-control">
                                <option>White</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="qty-changer">
                            <button class="qty-change-minus">-</button>
                            <input id="qty-input" type="number" value="1" />
                            <button class="qty-change-plus">+</button>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-6">
                        <h3>$99.00</h3></div>
                </div>
                <div class="add row mt-4">
                    <div class="col-6">
                        <a href="cart.php">
                            <button type="button" class="btn btn-primary btn-rounded">ADD TO CART</button>
                        </a>
                        <a class="spec ml-3" href="#" data-toggle="modal" data-target="#myModal"><u><small>SPECS</small></u></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title center-block"> Tech Specs</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Dimensions</th>
                                <th>Weight</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Diameter: 3.79 in (96.4 mm)</td>
                                <td>Device: 1.05 lbs (477 g)</td>
                            </tr>
                            <tr>
                                <td>Height: 5.62 in (142.8 mm)</td>
                                <td>Power adapter: 4.58 oz (130 g)</td>
                            </tr>
                            <tr>
                                <td>Power cable: 5.9 ft (1.8 m)</td>
                                <td></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Colors</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> Body: White</td>
                                <td>Base: Slate fabric</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Supported Audio Formats</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> HE-AAC, LC-AAC+, MP3, Vorbis, WAV (LPCM), FLAC<small>with support for high-resolution streams</small></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Wireless</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 802.11b/g/n/ac (2.4GHz/5Ghz) Wi-Fi <small>for high-performance streaming</small></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Speaker</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> High excursion speaker with 2” driver + dual 2” passive radiators</td>
                                <td>Far-field voice recognition supports hands-free use</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Power</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Required 16.5V, 2A included</td>
                                <td></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Ports & Connectors</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DC power jack</td>
                                <td></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Supported Operating Systems</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Android 4.4 and higher</td>
                                <td>iOS 9.1 and higher</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row featured">
            Also you might like
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-2">
                <img class="img-responsive" width="100%" src="images/googlechrome1.jpg">
            </div>
            <div class="col-xs-12 col-md-2">
                <img class="img-responsive" width="100%" src="images/apple1.jpg">
            </div>
            <div class="col-xs-12 col-md-2">
                <img class="img-responsive" width="100%" src="images/googlehome1.jpg">
            </div>
        </div>
    </div>
     <?php include "partials/footer.html";?>