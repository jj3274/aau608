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
                            <img class="d-block img-fluid" src="images/googlehomemini1.jpg" alt="First slide" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/googlehomemini2.jpg" alt="Second slide" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/googlehomemini3.jpg" alt="Third slide" width="100%">
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
                        <h2 class="center">Google Home mini</h2>
                    </div>
                </div>
                <div class="row">
                    <p class="center mt-4">Hands-free help around the house. Mini is powered by the Google Assistant. So whenever you need help, it’s by your side.</p>
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
                                <option>Chalk</option>
                                <option>Charcoal</option>
                                <option>Coral</option>
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
                        <h3>$49.00</h3></div>
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
                                <th>Dimensions</th>
                                <th>Weight</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Diameter: 3.86 in (98 mm)</td>
                                <td>Device: 6.10 oz (173 g)</td>
                            </tr>
                            <tr>
                                <td>Height: 1.65 in (42 mm)</td>
                                <td>Power adapter and cable: approximately 2.65 oz (75 g)</td>
                            </tr>
                            <tr>
                                <td>Power cable: 4.92 ft (1.5 m)</td>
                                <td></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Colors</th>
                                <th>Materials</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Chalk</td>
                                <td>Durable fabric top</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>Charcoal</td>
                                <td>Plastic housings created using recycled material</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>Coral - Google Store exclusive</td>
                                <td>Non-skid silicone base</td>
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
                                <td> HE-AAC, LC-AAC+, MP3, Vorbis, WAV (LPCM), FLAC</td>
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
                                <td>802.11b/g/n/ac (2.4GHz/5Ghz) Wi-Fi</td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>Chromecast and Chromecast Audio built-</td>
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
                                <td> 360 sound with 40mm driver</td>
                                <td></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Mics</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Far-field voice recognition supports hands-free use
                                </td>
                                <td></td>
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
                                <td>5V, 1.8A</td>
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
                                <td>Micro USB port1<small>1USB are trademarks of USB Implementers Forum.</small></td>
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
                                <td>Android 4.4 and higher<small>1iOS is a trademark or registered trademark of Cisco and is used under license.</small></td>
                                <td>iOS 9.1 and higher1</td>
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
                <img class="img-responsive" width="100%" src="images/googlehome1.jpg">
            </div>
            <div class="col-xs-12 col-md-2">
                <img class="img-responsive" width="100%" src="images/broadlink1.jpg">
            </div>
        </div>
    </div>
      <?php include "partials/footer.html";?>
</body>

</html>