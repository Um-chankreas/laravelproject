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
        <h1>Healthy weight</h1>
        <h3>12 tips to help you lose weight on the 12-week plan</h3><br>
        <h1>1. Do not skip breakfast</h1>
        <p>Skipping breakfast will not help you lose weight.
            You could miss out on essential nutrients and you may end up snacking more throughout the day because you feel hungry.
        </p><br>
        <img class="img" src="{{ asset('image/breakfast.jpg') }}"><br>
        <br>
        <h1>2. Eat regular meals</h1>
        <p>Eating at regular times during the day helps burn calories at a faster rate.
            It also reduces the temptation to snack on foods high in fat and sugar.
        </p><br>
        <img class="img" src="{{ asset('image/meals.jpeg') }}"><br><br>

        <h1>3. Eat plenty of fruit and veg</h1>
        <p>Fruit and veg are low in calories and fat, and high in fibre – 3 essential ingredients for successful weight loss.
            They also contain plenty of vitamins and minerals.
        </p><br>
        <img class="img" src="{{ asset('image/fruit.jpg') }}"><br><br>

        <h1>4. Get more active</h1>
        <p>Being active is key to losing weight and keeping it off. As well as providing lots of health benefits,
            exercise can help burn off the excess calories you cannot lose through diet alone.
        </p><br>
        <img class="img" src="{{ asset('image/active.jpg') }}"><br><br>

        <h1>5. Drink plenty of water</h1>
        <p>People sometimes confuse thirst with hunger.
            You can end up consuming extra calories when a glass of water is really what you need.
        </p><br>
        <img class="img" src="{{ asset('image/water.jpg') }}"><br><br>

        <h1>6. Eat high fibre foods</h1>
        <p>Foods containing lots of fibre can help keep you feeling full, which is perfect for losing weight. Fibre is only found in food from plants, such as fruit and veg,
            oats, wholegrain bread, brown rice and pasta, and beans, peas and lentils.
        </p><br>
        <img class="img" src="{{ asset('image/fibre.jpg') }}"><br><br>

        <h1>7. Read food labels</h1>
        <p>Knowing how to read food labels can help you choose healthier options.
            Use the calorie information to work out how a particular food fits into your daily calorie allowance on the weight loss plan.
        </p><br>
        <img class="img" src="{{ asset('image/smaller.jpg') }}"><br><br>

        <h1>8. Use a smaller plate</h1>
        <p>Using smaller plates can help you eat smaller portions. By using smaller plates and bowls, you may be able to gradually get used to eating smaller portions without going hungry.
            It takes about 20 minutes for the stomach to tell the brain it's full,
            so eat slowly and stop eating before you feel full.
        </p><br>
        <img class="img" src="{{ asset('image/smaller.jpg') }}"><br><br>

        <h1>9. Do not ban foods</h1>
        <p>Do not ban any foods from your weight loss plan, especially the ones you like.
            Banning foods will only make you crave them more.
            There's no reason you cannot enjoy the occasional treat as long as you stay within your daily calorie allowance.
        </p><br>
        <img class="img" src="{{ asset('image/food1.jpg') }}"><br><br>

        <h1>10. Do not stock junk food</h1>
        <p>To avoid temptation, do not stock junk food – such as chocolate, biscuits, crisps and sweet fizzy drinks – at home.
            Instead, opt for healthy snacks, such as fruit, unsalted rice cakes, oat cakes, unsalted or unsweetened popcorn, and fruit juice.
        </p><br>
        <img class="img" src="{{ asset('image/No-Junk-Food.jpg') }}"><br><br>

        <h1>11. Cut down on alcohol</h1>
        <p>A standard glass of wine can contain as many calories as a piece of chocolate.
            Over time, drinking too much can easily contribute to weight gain.
        </p><br>
        <img class="img" src="{{ asset('image/cut.jpg') }}"><br><br>

        <h1>12. Plan your meal</h1>
        <p>Try to plan your breakfast, lunch, dinner and snacks for the week, making sure you stick to your calorie allowance.
            You may find it helpful to make a weekly shopping list.
        </p><br>
        <img class="img" src="{{ asset('image/plan.jpg') }}"><br><br>
        <a href="https://www.nhs.uk/live-well/healthy-weight/12-tips-to-help-you-lose-weight/">To Get More!!</a>

    </div>
</section>
@include('header.footer')

