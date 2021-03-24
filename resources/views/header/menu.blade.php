<style>
    .nav-item a{
        text-decoration: none;
        color: white;
    }
    .nav-item a:hover{
        color: greenyellow;
    }

    #navbarDropdown {
        color: white;
    }
    #navbarDropdown:hover {
        color: greenyellow;
        background-color: grey;
    }
    .h1{
        color: greenyellow;
        font-size: 20px;
    }
    .dropdown {
        position: static !important;
    }


    .dropdown-menu {
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15)!important;
        margin-top: 0px !important;
        width: 100% !important;
        background-color: #424242;
        height: 510px !important ;

    }
    .dropdown-item{
        display: block;
    }
    .dropdown-item:hover{
        background-color: #424242;

    }
</style>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle"
       id="navbarDropdown"
       data-toggle="dropdown"
       data-target="#dropdown">
        Menu
    </a>
    <div class="dropdown-menu"
         aria-labelledby="navbarDropdown">
        <button type="button" class="close" data-dismiss="modal" style="color: red;background-color: #121416;margin-right: 8px">&times;</button>
        <div class="row" style="margin-left: 200px;">
            <div class="col-lg-4">
                <h1 class="h1">Body Care</h1>
                <a class="dropdown-item" href="">


                    <a href="{{asset('ear')}}">Healthy ear</a><br>
                    <a href="{{asset('lostweight')}}">Healthy Weight</a><br>
                    <a href="{{asset('hair')}}">Healthy hair</a><br>
                    <a href="{{asset('eye')}}">Healthy Eye</a><br>
                    <a href="{{asset('teeth')}}">Healthy Teeth</a><br>
                    <a href="{{asset('nail')}}">Healthy Nails</a><br>
                </a>
            </div>
            <div class="col-lg-4">
                <h1 class="h1">Skin Care</h1>
                <a class="dropdown-item" href="#">
                    <a href="{{asset('face')}}">Face Skin Care</a><br>
                    <a href="{{asset('white')}}">Brighter Face Skin</a><br>
                    <a href="{{asset('clearskin')}}">Good Routine With Skin</a><br>
                    <a href="{{asset('night-skin')}}">Face Skin Care At Night Time</a><br>
                    <a href="{{asset('body-skin')}}">How To Take Care of Body Skin</a><br>
                    <a href="{{asset('order-skin')}}">How To Take Care Skin When You are getting old</a><br>
                </a>
            </div>
            <div class="col-lg-4">
                <h1 class="h1">Beauty Care</h1>
                <a class="dropdown-item" href="#">
                    <a href="/lip">Get Pink Lip</a><br>
                    <a href="{{asset('brow')}}">Get Pretty Eye Brows</a><br>
                    <a href="/lostweight">Easy Tip To Get Beauty Make UP</a><br>
                    <a href="/lostweight">How to get Beauty nail Style</a><br>
                    <a href="/lostweight">Nice Hair Style</a><br>
                    <a href="/lostweight">How to Make Up to party</a><br>
                </a>
            </div>
            <div class="col-lg-4">
                <h1 class="h1">Healthy Food</h1>
                <a class="dropdown-item" href="#">
                    <a href="{{asset('secret')}}">The Secrete Benefit of Healthy Food</a><br>
                    <a href="/lostweight">The Best Healthy Foods You Should Know</a><br>
                    <a href="/lostweight">The best Healthy breakfast</a><br>
                    <a href="/lostweight">The best Healthy for dinner</a><br>
                    <a href="/lostweight">Healthy Food For lost Weight</a><br>
                    <a href="/lostweight">Healthy Food For Fast Glow</a><br>
                </a>
            </div>
            <div class="col-lg-4">
                <h1 class="h1">Vegetable and Fruit</h1>
                <a class="dropdown-item" href="#">
                    <a href="{{asset('banana')}}">The Benefit of Banana</a><br>
                    <a href="{{asset('tomato')}}">The Benefit of Tomato</a><br>
                    <a href="/lostweight">The benefit of Avocado</a><br>
                    <a href="/lostweight">The Benefit of Lemon</a><br>
                    <a href="/lostweight">The Benefit of Potato</a><br>
                    <a href="/lostweight">The Benefit of KiWi</a><br>
                </a>
            </div>
            <div class="col-lg-4">
                <h4 class="h1">Pregnancy</h4>
                <a class="dropdown-item" href="#">
                    <a href="/lostweight">Healthy Food For Pregnancy</a><br>
                    <a href="/lostweight">Good Daily Active For Pregnancy </a><br>
                    <a href="/lostweight">Thing Should and Shouldn't When You get Pregnancy</a><br>
                    <a href="/lostweight">Regular Go to Hospital </a><br>
                    <a href="/lostweight">Warning food that not allow for pregnancy</a><br>
                    <a href="/lostweight">How to take care of pregnancy woman</a><br>
                </a>
            </div>
        </div>
    </div>
</li>
    <!--dropdown sub items of menu-->

    <!--dropdown sub items of menu-->
