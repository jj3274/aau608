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
                            <img class="d-block img-fluid" src="images/amazonecho1.jpg" alt="First slide" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/amazonecho2.jpg" alt="Second slide" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/amazonecho3.jpg" alt="Third slide" width="100%">
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
                        <h2 class="center">Amazon Echo Dot</h2>
                    </div>
                </div>
                <div class="row">
                    <p class="center mt-4">Echo Dot is a hands-free, voice-controlled device that uses the same far-field voice recognition as Amazon Echo. Dot has a small built-in speaker—it can also connect to your speakers over Bluetooth or with the included audio cable. Dot connects to the Alexa Voice Service to play music, provide information, news, sports scores, weather, and more—instantly.
                    </p>
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
                                <option>Black</option>
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
                                <th>Size</th>
                                <th>Weight</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.5" x 3.3" x 3.3" (38 mm x 83.5 mm x 83.5 mm)</td>
                                <td>8.8 oz. (250 grams) Actual size and weight may vary by manufacturing process</td>
                            </tr>
                            <tr>
                                <td>Wi-Fi Connectivity</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Dual-band, dual-antenna Wi-Fi (MIMO) for faster streaming and fewer dropped connections than standard Wi-Fi. Supports 802.11a/b/g/n Wi-Fi networks. Does not support connecting to ad-hoc (or peer-to-peer) Wi-Fi networks.</td>
                                <td></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Bluetooth Connectivity</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Advanced Audio Distribution Profile (A2DP) support for audio streaming from your mobile device to Echo Dot or from Echo Dot to your bluetooth speaker. Audio/Video Remote Control Profile (AVRCP) for voice control of connected mobile devices. Hands-free voice control is not supported for Mac OS X devices. Bluetooth speakers requiring PIN codes are not supported.</td>
                                <td></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Audio</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Built-in speaker for voice feedback when not connected to external speakers. 3.5 mm stereo audio output for use with external speakers.</small>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>System Requirements</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Echo Dot comes ready to connect to your Wi-Fi. The Alexa App is compatible with Fire OS, Android, and iOS devices and also accessible via your web browser. Certain skills and services may require subscription or other fees.</td>
                                <td></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Warranty and Service</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1-year limited warranty and service included. Use of Echo Dot is subject to the terms found here.</td>
                                <td></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Included in the Box</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Echo Dot, 3.5 mm audio cable (4 ft.), power adapter (9W), USB charging cable, and Quick Start Guide</td>
                                <td></td>
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
                <img class="img-responsive" width="100%" src="images/googlehome1.jpg">
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
</body>

</html>