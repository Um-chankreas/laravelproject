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
        <h1>Vegetables and Fruit</h1>
        <h3>5 Surprising Health Benefits of Avocados</h3><br>
        <h1>1. Heart Health</h1>
        <p>Avocados contain the plant chemical beta-sitosterol which helps maintain healthy cholesterol levels.
            They are packed with monounsaturated fat and according to the American Heart Association,
            when monounsaturated fats are eaten in moderation in place of saturated and trans fat, this can help reduce the bad (LDL) cholesterol.
        </p><br>
        <img class="img" src="{{ asset('image/avocado1.jpg') }}"><br>
        <br>
        <h1>2. Healthy Eyes</h1>
        <p>The carotenoids lutein and zeaxanthin are also found in these fruit.
            Both have been shown to keep the eyes healthy as we age and may help reduce the risk of macular degeneration,
            the leading cause of vision loss as we get older.
        </p><br>
        <img class="img" src="{{ asset('image/avocado2.jpg') }}"><br><br>

        <h1>3. Growth and Development</h1>
        <p>Avocados contain 3.5 grams of unsaturated fat per 1 ounce serving (about 1/5th an avocado).
            Studies have shown that unsaturated fat is important for proper growth and development of the central nervous system and the brain of youngsters.
        </p><br>
        <img class="img" src="{{ asset('image/avocado3.jpg') }}"><br><br>

        <h1>4. Blood Pressure</h1>
        <p>Avocados are free of sodium and are recommended while on the DASH Diet – which is the prescribed diet to help lower blood pressure.
            They also have a nice amount of potassium, which may also help lower blood pressure.
            Studies have found that when avocados are eaten in place of other fats (like butter and mayo), they can help control blood pressure.
        </p><br>
        <img class="img" src="{{ asset('image/avocado4.jpg') }}"><br><br>

        <h1>5. Weight Loss</h1>
        <p>These babies are brimming with healthy fat,
            which takes the body longer to digest and help keep you full and satisfied (so you’re less likely to snack!).
            Further, avocados are nutrient-packed with over 20 vitamins,
            minerals and phytonutrients which is especially beneficial if you’re trying to cut calories and keep up with all the nutrition your body needs.
        </p><br>
        <img class="img" src="{{ asset('image/avocado5.jpg') }}"><br><br>

        <a href="https://www.foodnetwork.com/healthyeats/recipes/2014/12/5-surprising-health-benefits-of-avocados"><b>To Get More!!</b></a><br>
        <br>
    </div>
</section>
@include('header.footer')