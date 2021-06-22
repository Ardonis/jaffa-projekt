<?php include_once('./inc/header.php'); ?>

<body>
    <div class="container overflow-​hidden">
        <div>
            <img src="./assets/img/svg_images/contact-us.svg" alt="">
        </div>
        <div class="card-body mb-3">
            <h5 class="card-title">Say Hi</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dui ante, consectetur non scelerisque a, ultricies id justo.</p>
        </div>

        <div class="row contact-form p-5">
            <div class="col-md-4">
                <div>
                    <h1>Kosovo</h1>
                    <ul class="p-0">
                        <li>“FLUIDI” Sh.p.k</li>
                        <li>60000 Gjilan</li>
                        <li>Republika e Kosovës</li>
                        <li>Tel: +381280310200</li>
                        <li>Cell Phone: +383 (0) 44 552 112</li>
                    </ul>
                </div>
                <div>
                    <h1>Sweden</h1>
                    <ul class="p-0">
                        <li>Wembley, HA9 0WS</li>
                        <li>Sweden</li>
                        <br>
                        <li>Tel: +381280310200</li>
                        <li>Cell Phone: +383 (0) 44 552 112</li>
                    </ul>
                </div>
                <div>

                </div>
            </div>
            <div class="col-md-8">
                <form class="needs-validation col-12" novalidate>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">YOUR NAME</label>
                            <input type="text" class="form-control" id="validationCustom01" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">PHONE NUMBER</label>
                            <input type="text" class="form-control" id="validationCustom02" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3 mt-3">
                            <label for="validationCustomUsername">PERSONAL INFO</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 mt-3">
                            <label for="validationCustomUsername">ARES</label>
                            <input type="text" class="form-control" id="validationCustom04" required>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <label for="comment">MESSAGE</label>
                                <textarea class="form-control message" rows="5" id="comment" placeholder="Leave Yourn(Optional)"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="submit-place">
                        <p class="mb-3 sumbit-p">We will contact you back via phone number
                            to confirm your message.
                        </p>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="position-absolut">
                <img src="./assets/img/svg_images/map.svg" alt="">
            </div>
        </div>
    </div>
    <?php include_once('./inc/footer.php'); ?>
</body>