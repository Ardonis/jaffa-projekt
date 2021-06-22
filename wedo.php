<?php include_once('./inc/header.php'); ?>

<body>
    <div class="container">
        <div class="card mb-3">
            <img src="./assets/img/svg_images/we-do.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">What We Do</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu scelerisque ante. Vivamus ultrices orci neque.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mt-3">
                <div class="card-body">
                    <div>
                        <img class="mb-3" src="./assets/img/svg_images/awesome-taste.svg" alt="">
                    </div>
                    <h5 class="card-title">Awesome Taste</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu scelerisque ante. Vivamus ultrices orci neque.</p>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card-body">
                    <div>
                        <img class="mb-3" src="./assets/img/svg_images/organic-fruits.svg" alt="">
                    </div>
                    <h5 class="card-title">Organic Fruits</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu scelerisque ante. Vivamus ultrices orci neque.</p>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card-body">
                    <div>
                        <img class="mb-3" src="./assets/img/svg_images/healthy-blends.svg" alt="">
                    </div>
                    <h5 class="card-title">Healthy Blends</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu scelerisque ante. Vivamus ultrices orci neque.</p>
                </div>
            </div>
        </div>
        <div class="card-body mt-5">
            <h5 class="card-title">What Is Our Concept!</h5>
            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="card-body mt-5">
            <h5 class="card-title">What Is Our Idea!</h5>
            <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div>
        <div class="mt-5">
            <h1 class="title">Testimonials</h1>
            <div>
                <h5 class="slider-title mt-3">They Say!</h5>
            </div>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item" style="width:1100px">
                <div class="quotes"><span>"</span></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>
                <div class="quotes"><span>"</span></div>
            </div>
            <div class="item" style="width:1100px">
                <div class="quotes"><span>"</span></div>

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>
                <div class="quotes"><span>"</span></div>
            </div>
            <div class="item" style="width:1100px">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>
            </div>
            <div class="item" style="width:1100px">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>
            </div>
            <div class="owl-dots">
            </div>
        </div>

    </div>


    <?php include_once('./inc/footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            margin: 10,
            loop: true,
            autoWidth: true,
            items: 4
        })
    </script>
</body>

</html>