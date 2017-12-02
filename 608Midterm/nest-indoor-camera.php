
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
                            <img class="d-block img-fluid" src="images/nestcam1.jpg" alt="First slide" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/nestcam2.jpg" alt="Second slide" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/nestcam3.jpg" alt="Third slide" width="100%">
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
                        <h2 class="center">Nest Cam Indoor</h2>
                    </div>
                </div>
                <div class="row">
                    <p class="center mt-4">The Nest Cam Indoor security camera is designed to help you look after your home and family – even when you’re away. With 24/7 live streaming, a versatile magnetic stand, person alerts with Nest Aware and one app for all your Nest products, Nest Cam Indoor helps you keep an eye on what matters. From anywhere.</p>
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
                                <th>Power</th>
                                <th>Color</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AC adapter input: 100-240V AC, 50/60Hz, 0.2A AC adapter output: 5V DC, 1.4A Camera input: 5V DC, 1.0A</td>
                                <td>Black</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Features</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <small>Nest Cam Indoor only (No additional fees) 24/7, continuous 1080p HD streaming Motion alerts Sound alerts Night Vision Talk & Listen Clear Zoom Quick, easy setup Nest App Software updates over Wi‑Fi</small></td>
                                <td><small>Get even more with Nest Aware 
                                    (Subscription sold separately)

                                    For $10/month (or $100/year) per camera
                                    10 days of 24/7, continuous, 1080p HD recording
                                    (100+ GB of rolling cloud storage)
                                    For $30/month (or $300/year) per camera
                                    30 days of 24/7, continuous, 1080p HD recording
                                    (300+ GB of rolling cloud storage)
                                    Plus:
                                    Alert summary to quickly scan your video history.
                                    Activity Zones for personalized alerts.
                                    Powerful algorithms in the cloud to help filter out false alerts.
                                    Clips you can make, download, and share.
                                    Timelapses that turn hours of video into short films.</small></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Camera</th>
                                <th>Video</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> ⅓-inch, 3-megapixel sensor with millions of colors and 8x digital zoom</td>
                                <td>Up to 1080p (1920 x 1080) at 30 frames/sec, H.264 encoding</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Field of view</th>
                                <th>Night Vision</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>130° diagonal</td>
                                <td>8 high-power infrared LEDs (850nm) with IR cut filter</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Audio and lights</th>
                                <th>Size and weight</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Speaker Microphone RGB LED</td>
                                <td>Assembled Mass: 7.5 ounces (213 g) Height: 4.5 inches (11.4 cm) Width: 2.9 inches (7.3 cm) Depth: 2.9 inches (7.3 cm) Total cable length: 10 feet (3 m)</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Connectivity requirements
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><small>Wi-Fi connection.
Working broadband internet connection with at least 2 Mbps upload speed (DSL may not qualify).
Requires a web browser or a compatible phone or tablet with the free Nest app and Bluetooth 4.0. Some phones, tablets and networks do not support 1080p. For more info visit nest.com/requirements.</small></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Wireless</th>
                                <th>Bandwidth requirements
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Wi-Fi 802.11a/b/g/n, 2.4GHz or 5GHz (WEP, WPA, WPA2 encryption supported) Bluetooth Low Energy (BLE)</td>
                                <td><small>At 720p, each camera requires 200 to 500 Kbps of upload bandwidth while streaming video.

At 1080p, each camera requires 450 to 1200 Kbps of upload bandwidth while streaming video.

Cameras will use more bandwidth to stream video when there is more motion in the scene.

If you subscribe to Nest Aware, your camera streams all video to the cloud for secure offsite storage. At 720p, each camera could use 60GB to 160GB of upload bandwidth per month. At 1080p, each camera could use 140GB to 380GB of upload bandwidth per month.</small></td>
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
