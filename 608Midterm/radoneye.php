
<?php include "partials/head.html";?>

<body id="products-single">
    <?php include "partials/nav.html";?>
    <div class="container second" id="product-section">
        <div class="row">
            <div class="col-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="images/radoneye1.jpg" alt="First slide" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/radoneye2.jpg" alt="Second slide" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/radoneye3.jpg" alt="Third slide" width="100%">
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
            <div class="col-6 pl-5 align-self-center">
                <div class="row">
                    <div class="col-md-12 mt-0">
                        <h2 class="center">RadonEye</h2>
                    </div>
                </div>
                <div class="row">
                    <p class="center mt-4">The RD200 has 20 times higher sensitivity than the other handy radon detectors. A time for the first reliable data display is just 1 hour, so no longer need to wait a long time, 24~48hours. Also it offers convenience for data log, graph display, alarm setting by Bluetooth function with Smart Phone.</p>
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
                        <h3>$199.00</h3></div>
                </div>
                <div class="row mt-4 add">
                    <div class="col-6">
                        <a href="cart.php">
                            <button type="button" class="btn btn-primary btn-rounded">ADD TO CART</button>
                        </a>
                        <a class="ml-3" href="#" data-toggle="modal" data-target="#myModal"><u><small>SPECS</small></u></a>
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
                                <th>Type</th>
                                <th> Data interval </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>pulsed ion chamber</td>
                                <td>10min update (60min moving average)</td>
                            </tr>
                            <thead>
                                <tr>
                                    <th>Sensitivity</th>
                                    <th>Operating range</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0.5cpm/pCi/l at 10pCi/l (30cph/pCi/l)</td>
                                    <td>10~40℃, RH
                                        < 90%</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th>Range </th>
                                    <th>Precision</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 0.1 ~ 99.99 pCi/l</td>
                                    <td>
                                        < 10% at 10pCi/l</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th> Accuracy </th>
                                    <th>Power</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        < ±10% (min. error <±0.5pCi/l )</td>
                                            <td> DC 12 ± 0.1V, 65mA</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th> Size</th>
                                    <th>Data communication </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> Φ68(mm ) x H98(mm)</td>
                                    <td>UART</td>
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
                <img class="img-responsive" width="100%" src="images/amazonecho1.jpg">
                
            </div>
            <div class="col-xs-12 col-md-2">
                <img class="img-responsive" width="100%" src="images/googlehomemini1.jpg">
            </div>
            <div class="col-xs-12 col-md-2">
                <img class="img-responsive" width="100%" src="images/broadlink1.jpg">
            </div>
        </div>
    </div>
     <?php include "partials/footer.html";?>
