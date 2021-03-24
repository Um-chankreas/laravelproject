@include('header.link')
<script src="js/js.js"></script>
@include('header.navba')
<script>
    $(document).ready(function() {
        $('#search').click(function() {
            $('.nav-link').addClass('hide-item')
        })
    })
</script>
<section>
    <!-- auto slide image-->
    <div id="carouselExampleInterval" class="carousel slide"  data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="5000">
                <img src="food.jfif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Healthy vegetable</h5>
                    <p class = "animated bounceInRight" style="animation-delay: 2s">Vegetable is the best for healthy</p>
                    <p class = "animated zoomIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
                </div>
            </div>
            <div class="carousel-item" data-interval="5000">
                <img src="{{asset('image/sleep.jfif')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animated fadeInUp" style="animation-delay: 1s">Sleep Enough</h5>
                    <p class="animated bounceInRight" style="animation-delay: 2s">You should sleep 8 hour in per day</p>
                    <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
                </div>
            </div>
            <div class="carousel-item" data-interval="5000">
                <img src="{{asset('image/gym.webp')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animated fadeInUp" style="animation-delay: 1s">Exercise Or Gym</h5>
                    <p class="animated bounceInRight" style="animation-delay: 2s">Spent time at least 30min in a day to do exercise!</p>
                    <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
                </div>
            </div>
            <div class="carousel-item" data-interval="5000">
                <img src="{{asset('image/meat2.webp')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animated fadeInUp" style="animation-delay: 1s">Chose Health Meat</h5>
                    <p class="animated fadeInDown" style="animation-delay: 2s">Pleas chose meat that make you good healthy</p>
                    <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="card bg-dark text-white" id="cards">
        <img src="{{asset('image/imgslide.jfif')}}" class="card-img" id="card-img" class="img-fluid" alt="Responsive image">
        <div class="card-img-overlay">
            <h5 class="card-title"><br>
                <span class="ityped"></span>
            </h5>
        </div>
    </div>
    <script>
        window.ityped.init(document.querySelector('.ityped'),{
            strings : [' I Take Care My Health','I LOve My Self','Health is important','NO one','Live with bad health'],
            loop:true
        })
    </script>
        <div class="card-deck" id ="card-deck">
            <div class="card" id="card">
                <img src="{{ asset('image/eye6.jpg') }}" id="card-img-top" class="card-img-top" alt="...">
                <div class="card-body" id="card-body">
                    <h5 class="card-title">Eye Care</h5>
                    <p class="card-text">Computer monitors should be positioned about an arm’s length away from the eyes and 20 degrees below eye level.
                    </p>
                    <a href="{{asset('eye')}}"> Read More</a>
                </div>
            </div>
            <div class="card" id="card">
                <img src="{{ asset('image/water.jpg') }}" id="card-img-top" class="card-img-top" alt="...">
                <div class="card-body" id="card-body">
                    <h5 class="card-title">Drink Whater</h5>
                    <p class="card-text">People sometimes confuse thirst with hunger. You can end up</p>
                    <a href="{{ asset('lostweight') }}"> Read More</a>
                </div>
            </div>
            <div class="card" id="card">
                <img src="{{ asset('image/face2.jpg') }}" id="card-img-top" class="card-img-top" alt="...">
                <div class="card-body" id="card-body">
                    <h5 class="card-title">Drink Green Tea</h5>
                    <p class="card-text">“If your complexion is red or blotchy, this tea’s anti-inflammatory properties can be soothing,” says Andrea Cambio, a dermatologist</p>
                    <a href="{{ asset('face') }}"> Read More</a>
                </div>
            </div>

        </div>
</section>
<!-- footer-->
@include('header.footer')
