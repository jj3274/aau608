<!DOCTYPE html>
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
                            <img class="d-block img-fluid" src="images/image.png" alt="First slide" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/image.png" alt="Second slide" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/image.png" alt="Third slide" width="100%">
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
                        <h2 class="center">Philips Hue Single Bulb</h2>
                    </div>
                </div>
                <div class="row">
                    <p class="center mt-4">Connect It To The Hue Bridge and Control It With Your Smart Phone or Tablet</p>
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
                        <h3>$49.99</h3></div>
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
                                <th>Fitting</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>E26</td>
                                <td></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Form factor</th>
                                <th>Lifetime</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>A19 E26</td>
                                <td>25000 hour(s)</td>
                            </tr>
                            <thead>
                                <tr>
                                    <th>Wattage</th>
                                    <th>Wattage equivalent</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10W</td>
                                    <td>60W</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th>Input voltage</th>
                                    <th>Light output</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>110V-130V</td>
                                    <td>342 lm @ 2000K 570 lm @ 3000K 800 lm @ 4000K 550 lm @ 6500K 80 lm/W efficacy @4000K >80 CRI from 2000–4000K</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th>Software upgradable</th>
                                    <th>Start up</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Yes, when connected to Hue bridge</td>
                                    <td> Instant 100% light output</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th>Height</th>
                                    <th>Width</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 110mm / 4.3inch</td>
                                    <td>62mm / 2.4inch</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th>Input voltage</th>
                                    <th>Operational temperature</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>110V-130V</td>
                                    <td></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th>Supported Operating Systems</th>
                                    <th>0°C - 40°C</th>
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
        <div class="container col-12">
            <div class="row mb-5">
                <img src="images/image.png"><img src="images/image.png"><img src="images/image.png">
            </div>
        </div>
    </div>
     <?php include "partials/footer.html";?>
</body>

</html>