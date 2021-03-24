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
        <h1>Healthy Cooking</h1>
        <h3>10 Secrets to Cooking Healthier</h3><br>
        <h1>1. Make a plan</h1>
        <p>Without a plan, it's easy to draw a blank with what to make for dinner (or breakfast or lunch for that matter).
            For some people meal planning means writing down a detailed menu and shopping list on a Sunday to be good to go all week.
            For others, it may look more like scribbles on a sticky note-taco night, pasta night, stir-fry night. Whatever your process is,
            having a plan helps set you figure out what you're going to make and sets you up for success.
        </p><br>
        <img class="img" src="{{ asset('image/cook1.jpg') }}"><br>
        <br>
        <h1>2.Eat more fruits and vegetables</h1>
        <p>Only 14 percent of adults eat the recommended amount of vegetables and 18 percent eat enough fruit.
            That means more than 80 percent of us aren't eating enough produce! Fruits and vegetables are rich in inflammation-fighting antioxidants,
            vitamins, minerals and fiber. It's recommended we eat 2 cups of fruit and 2.5 to 3 cups of vegetables every day
            (adult men are on the higher side for veg). (Here are 8 ways you can get the recommended daily amount of fruits and vegetables.)<br>
            <br>
            When you think about cooking, have produce be the star of your meals. Make a fruit smoothie in the morning,
            a big salad for lunch and stuff a spaghetti squash at dinner. Use vegetables as noodles by spiralizing a zucchini or sweet potato.
            Try to make half your plate fruits and veggies. Snacks are a great way to sneak in extra produce servings too-baby carrots,
            apple slices, dried fruit or vegetable soup are all great options.
        </p><br>
        <img class="img" src="{{ asset('image/cook2.jpg') }}"><br><br>

        <h1>3. Choose whole grains</h1>
        <p>Pick whole grains over refined grains, at least 50 percent of the time. Whole grains like brown rice and bulgur have
            their bran intact and thus have more fiber, B vitamins, magnesium, zinc and other nutrients. Try quinoa, whole wheat pasta,
            oats, farro and barley as side dishes, on top of salads and in soups. Use a light touch when lining beneath the eyes,
            or for more drama (especially on deep-set or hooded eyes), line the lower-lid waterline instead.
        </p><br>
        <img class="img" src="{{ asset('image/cook3.jpg') }}"><br><br>

        <h1>4. Mix up your protein</h1>
        <p>Meat is a great source of protein but it's often served in really large portions. A serving of protein is 3 ounces cooked or 4 ounces raw,
            about the size of a deck of cards. So eat smaller amounts of meat, fish and poultry.
            Fill up the rest of your plate with healthy vegetables and whole grains. And it doesn't have to be meat.
            There are plenty of vegetarian proteins and vegan protein-rich foods that are a great way to add more plant protein to your diet.
        </p><br>
        <img class="img" src="{{ asset('image/cook4.jpg') }}"><br><br>

        <h1>5. Cook with global flavors</h1>
        <p>Some of the healthiest diets-think Mediterranean diet or traditional Japanese or Chinese cuisine-are rich in vegetables and grains and
            skip packaged processed foods. Using spices, like curry powder, and herbs, like basil, help flavor your food without adding salt.
            Plus, eating meals like Thai curries and Greek salads are not only good for you, they're delicious (and not that hard to make at home!).
        </p><br>
        <img class="img" src="{{ asset('image/cook5.jpg') }}"><br><br>

        <h1>6. Keep portions reasonable</h1>
        <p>Even healthy foods, when heaped onto your plate, can be too much of a good thing. We're not saying you need to measure out every bite
            you put in your mouth (that would get old really fast) but having an idea of healthy portions before you plate your meal can help you
            from eating more than you intended.
        </p><br>
        <img class="img" src="{{ asset('image/cook6.jpg') }}"><br><br>

        <h1>7. Add healthy fats</h1>
        <p>Fat is not bad. Even though new research has dispelled the myth that low-fat diets are the healthiest,
            people still believe that fat is bad for you. Fat is very filling (so if you eat less of it you may not be satisfied after your meals).
            It also helps you absorb nutrients-namely vitamins A,D,E and K. And, it tastes good! Choose unsaturated (e.g., olive oil, avocados, nuts)
            over saturated fats, such as butter, more often.
        </p><br>
        <img class="img" src="{{ asset('image/cook7.jpg') }}"><br><br>

        <h1>8. Limit added sugar and salt</h1>
        <p>Most of us eat more than the recommended amount of added sugars and sodium every day. Eating too much of either, over time,
            can put you at risk for health conditions like high blood pressure or heart disease.<br>
            <br>
            Aim for less than 6 teaspoons of added sugar per day if you're a woman, and less than 9 teaspoons if you're a man.
            That includes white sugar, brown sugar, honey and maple syrup. Check ingredient labels on products and use sweeteners sparingly when you cook.<br>
            <br>
            As for salt, it's recommended we eat no more than 2,300 mg of sodium per day (for some people, like those with heart disease or kidney disease,
            it's even less). Here's where cooking can really help you. Sodium is found mostly in processed foods (see the top 10 high-sodium foods in our diets) so the more you cook at home, the easier it is to eat less. Cook with fresh whole foods as much as possible, and use herbs, spices and vinegar to add flavor without adding sodium.
        </p><br>
        <img class="img" src="{{ asset('image/cook7-1.jpg') }}"><br><br>

        <h1>9. Enjoy treats!</h1>
        <p>Yes, you read that right-treat yourself. Just because you're eating healthier and cooking healthier doesn't mean
            you shouldn't enjoy what you eat and that includes dessert. Depriving yourself can backfire,
            because when foods off limits it's much more desirable. Go ahead and eat chocolate after dinner or a cookie as a snack.
            Try not to eat desserts just because they're there (think-donuts in a break room) but rather because you really want it.
            Dark chocolate is good for you, but if you don't like it, there are plenty of other ways to tasty ways to satisfy your sweet tooth.
            Be mindful of portions here because while treats are tasty, they won't be adding lots of nutrients to your diet.
        </p><br>
        <img class="img" src="{{ asset('image/cook9.jpg') }}"><br><br>

        <h1>10. Be mindful and enjoy</h1>
        <p>Mindful eating can feel overwhelming if you're used to eating on the run.
            But being more mindful doesn't mean you need to sit down and savor every bite slowly.
            While sometimes that's ideal, mindful eating in real life may just be about making more conscious food decisions about what you're going to eat.
            For the most part try to choose delicious foods and savor them.
            Enjoying what you eat is crucial to feeling satisfied and decreasing stress about your diet.
        </p><br>
        <img class="img" src="{{ asset('cook10.jpg') }}"><br><br>

        <a href="http://www.eatingwell.com/article/15891/10-secrets-to-cooking-healthier/"><b>To Get More!!</b></a><br>
        <br>
    </div>
</section>
@include('header.footer')
