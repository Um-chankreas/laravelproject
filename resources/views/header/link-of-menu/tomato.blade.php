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
        <h3>7 Health Benefits of Tomatoes</h3><br>
        <h1>1. Tomatoes are a great source of vitamins</h1>
        <p>A single tomato can provide about 40% of the daily recommended minimum of vitamin C.
            What's more, tomatoes supply vitamin A, which supports immunity, vision, and skin health; vitamin K,
            which is good for your bones; and potassium, a key nutrient for heart function, muscle contractions,
            and maintaining a healthy blood pressure and fluid balance.
        </p><br>
        <img class="img" src="{{ asset('image/tomato1.jpg') }}"><br>
        <br>
        <h1>2. They protect heart health</h1>
        <p>Tomatoes contain an antioxidant called lycopene, which is responsible for their red color.
            Research suggests that in terms of heart health benefits, it's more effective to eat tomatoes and
            tomato products than take lycopene supplements. Other studies have shown that higher blood levels of
            lycopene are tied to lower death rates for people with metabolic syndrome, a cluster of risk factors that
            raise the chances of developing heart disease, diabetes, and stroke.
        </p><br>
        <img class="img" src="{{ asset('image/tomato2.jpg') }}"><br><br>

        <h1>3. Improve you vision</h1>
        <p>Lycopene is also good for your eyes. And that's not the only peeper-protective nutrient in tomatoes;
            they contain lutein and beta-carotene as well. According to research,
            those nutrients support vision and protect against eye conditions including cataracts and macular degeneration.
        </p><br>
        <img class="img" src="{{ asset('image/tomato3.jpg') }}"><br><br>

        <h1>4. Boost digestive health</h1>
        <p>The fluid and fiber in tomatoes may be helpful if you're prone to constipation.
            (According to the USDA one large tomato contains 6 ounces of fluid, and 1.5 grams of fiber.)
            Just be aware that in some people, the acidity from cooked tomatoes may trigger or worsen acid reflux and indigestion.
        </p><br>
        <img class="img" src="{{ asset('image/tomato4.jpg') }}"><br><br>

        <h1>5.Help with diabetes management</h1>
        <p>Tomatoes may be a protective food for people with type 2 diabetes: In one study,
            people with diabetes who supplemented with cooked tomatoes for 30 days experienced a decrease in lipid peroxidation,
            a chain reaction in which substances called free radicals attack fat, leading to damage that ups the risk of heart disease.
            This is particularly important, because diabetes doubles the risk of stroke and heart attack.
        </p><br>
        <img class="img" src="{{ asset('image/tomato5.jpg') }}"><br><br>

        <h1>6. Guard skin health</h1>
        <p>A 2011 study found that the combination of tomato paste and olive oil protected against sun damage,
            and boosted the production of pro-collagen, a molecule that gives the skin its structure and keeps it firm and youthful.
            Scientists believe that the lycopene in tomatoes is key. It’s at its highest concentration when tomatoes have been cooked,
            and olive oil boosts its absorption from your digestive system into your bloodstream.
        </p><br>
        <img class="img" src="{{ asset('image/tomato6.jpg') }}"><br><br>

        <h1>7. Protect against cancer</h1>
        <p>Observational studies have found links between the superstar compound lycopene and fewer incidences of prostate,
            ovarian, lung, and stomach cancers.
        </p><br>
        <img class="img" src="{{ asset('image/tomato7.jpg') }}"><br><br>

        <a href="https://www.health.com/nutrition/health-benefits-tomatoes"><b>To Get More!!</b></a><br>
        <br>
    </div>
</section>
@include('header.footer')