@include('header.link')
<style>
    .container-fluid h1 {
        margin-left: 30px;
        font-size: 50px;
        font-family: 'Sniglet', cursive;
        color: rgb(15, 55, 56);
    }
    .container-fluid p {
        font-size:19px;
        margin-left: 70px;
        font-family: 'Dancing Script', cursive;
        color: rgb(87, 79, 79);
    }

    .container-fluid img {
        width:100%;
        height: auto;
    }
    html {
        box-sizing: border-box;
    }

    *, *:before, *:after {
        box-sizing: inherit;
    }

    .column {
        float: left;
        width: 30%;
        margin-bottom: 50px;
        padding: 0px 50px;
        margin-left: 35px;
    }
    .row{
        margin-right: 0;
    }
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
    }
    .title {
        color: grey;
    }
    .about-section {
        padding: 50px;
        text-align: center;
        background-color: #474e5d;
        color: white;
    }
    .a{
        margin-top: 70px;
        padding-left: 450px;
    }

    .container {
        padding: 0 15px;
    }

    .container::after, .row::after {
        content: "";
        clear: both;
        display: table;
    }
    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
    }
</style>
@include('header.navba')

<div class="container-fluid">
    <h1 class="a">About us</h1><br>
    <div class="row">
        <div class="col-sm-5">
            <p>Healthy Care is now one of Cambodia website that related to how to take care of your health and your body every day.<br><br>
                If your health fails, it can overshadow everything else that’s going on in your life.
                So our aim is to provide the best tips to all people who wanna take care of their health.
                but they don't know how? and they can using our website too easily to apply .<br>
                <br>
                The advantages of this page are save time , save money , can practice anywhere , get new tip in life style ,<br>  get new idea and get healthy and comfort.
                <br>
                <br>
                And this page created by 3 member.we work hard to try to find new tip for health. and make people more easily to apply it by themself
                at home or else.
            </p>
        </div>
        <div  class="col-7">
            <img src="{{ asset('image/about.jfif') }}">
            <br>
            <br>
        </div>
    </div>
</div>
<br>
<br>
<br>
<h1 style="text-align:center">Team Member</h1>
<div class="row">
    <div class="column">
        <div class="card">
            <img src="{{ asset('image/chankreasck.jfif') }}" style="width:100%">
            <div class="container">
                <h2>ChanKreas Um</h2>
                <p class="title">Team Member</p>
                <p>Student year 2 at NIPTICT</p>
                <p>chankreasum@gmail.com</p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <img src="{{ asset('image/visal4.png') }}" style="width:100%">
            <div class="container">
                <h2>Visal Meng</h2>
                <p class="title">Team Member</p>
                <p>Student year 2 at NIPTICT</p>
                <p>visalmeng@gmail.com</p>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="card">
            <img src="{{ asset('image/nita1.jfif') }}" style="width:100%">
            <div class="container">
                <h2>Sonita Thorn</h2>
                <p class="title">Team Member</p>
                <p>Student year 2 at NIPTICT</p>
                <p>sonita.thorn2016@gmail.com</p>
            </div>
        </div>
    </div>
</div>
@include('header.footer')


