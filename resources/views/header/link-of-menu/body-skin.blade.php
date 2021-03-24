@include('header.link')
<style>
    .container-fluid h1 h3{

        font-family: 'Sniglet', cursive;
        color: rgb(15, 55, 56);
    }
    .container-fluid p {
        font-size:19px;
        margin-left: 70px;
        font-family: 'Dancing Script', cursive;
        color: rgb(87, 79, 79);
        width: 600px;
    }
    .img{
        width: 50%;
        margin-left: 70px;
    }
    h1{
        width: 625px;
    }
</style>
@include('header.navba')
<section style="margin-left: 320px">
    <div class="container-fluid">
        <h1>Get nice body Skin</h1>
        <h3>7 steps every body care routine should include</h3><br>
        <h1>1. Exfoliate</h1>
        <p>Regular exfoliation removes debris from your skin, leaving it receptive to treatment creams.
            Try Café Skin Scrub with ground coffee beans to add zing. Added bonus: a dollar from every bag sold
            will be donated to Priceline’s Sisterhood Charity.
        </p><br>
        <img class="img" src="{{ asset('image/body1.jpg') }}"><br>
        <br>
        <h1>2. Dry body brush</h1>
        <p>For glowing skin, do this every morning. Use long, sweeping movements from your left ankle,
            up towards your heart. It stimulates lymphatic drainage and aids toxin removal. Try EcoTools Bamboo Bristle Bath Brush.
        </p><br>
        <img class="img" src="{{ asset('image/body2.jpg') }}"><br><br>

        <h1>3. Defuzz</h1>
        <p>Shaving is a good option for those with lighter coloured hair. Try Gillette Venus Swirl,
            which gets into tricky areas easily thanks to its flexible ball handle. Darker, denser hair? Try at-home waxing.
            Nair Salon Divine Milk and Honey Roll-on Wax contains hydrating sugars and can be used on legs, bikini and underarms.
            For something more permanent, try the SmoothSkin Bare Long Term Hair Removal System.
            This IPL system has an ultra-fast speed and takes less than 10 minutes to complete one treatment. For delicate areas,
            use Veet Sensitive Precision Beauty Styler.
        </p><br>
        <img class="img" src="{{ asset('image/body3.jpg') }}"><br><br>

        <h1>4. Firm and tone</h1>
        <p>Use body moisturiser with firming benefits – NIVEA Contouring Cream Q10 Plus contains the enzyme CoQ10,
            which helps to boost collagen production. Think firmer, smoother skin on your tummy, thighs and toosh!
            We also love Innoxa Save Our Skin NightSlim, which works on tightening skin while you sleep.
        </p><br>
        <img class="img" src="{{ asset('image/body4.png') }}"><br><br>

        <h1>5. Minimise stretch marks</h1>
        <p>Stretch marks are scars caused by trauma to the skin due to rapid expansion – normally during puberty or pregnancy.
            The trauma creates tears in the skin’s deeper collagen layers.
            Palmer’s Cocoa Butter Formula Spray Lotion For Stretch Marks uses a blend of cocoa butter, vitamin E,
            collagen and elastin in a spray for those hard-to-reach areas.
        </p><br>
        <img class="img" src="{{ asset('image/body5.jpg') }}"><br><br>

        <h1>6. Banish cellulite</h1>
        <p>Diet and exercise are key, but products such as Alpha Keri Body Slimfit Cellulite Reductor
            and Slimming Serum help the fat burning process and inhibit further cellulite production.
        </p><br>
        <img class="img" src="{{ asset('image/body6.jpg') }}"><br><br>

        <h1>7. Get a faux glow</h1>
        <p>For a subtle glow that looks just like your skin, only more caramel, use The Base Gradual Tanning Lotion. If applied daily,
            it adapts to your natural skin tone. For a deeper tan, choose a shade a little darker than your natural tone.
            Bondi Sands Self Tanning Foam is available in Light/Medium, Dark and Ultra Dark, so you can tailor your tan to suit your mood and your skin.
        </p><br>
        <img class="img" src="{{ asset('image/body7.jpg') }}"><br><br>

        <a href="https://www.beautycrew.com.au/steps-every-body-care-routine-should-include">To Get More!!</a><br>
        <br>
    </div>
</section>
@include('header.footer')