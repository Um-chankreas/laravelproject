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
    <h1>Healthy Hair</h1>
    <h3>How to Look After Your Hair</h3><br>
            <h1>1. Don’t pick at your hair</h1>
            <p>Playing with your hair can make your hair become greasier because of the oils that you naturally have on your fingers.
                You should also try to avoid pulling or picking at split ends, as doing this will only make the situation worse.
            </p><br>
            <img class="img" src="{{ asset('image/hair1.jpg') }}"><br>
            <br>
            <h1>2. Get your hair trimmed often</h1>
            <p>If you are prone to split ends, get your hair trimmed often to keep it looking healthy.
                Try to get your hair cut every 3 months, and consider getting it trimmed every 6 weeks.<br>
                If you have severely damaged hair, consider getting a very thorough cut.
                This means that all of the dead hair should be cut away, which may leave you with a short haircut.
            </p><br>
            <img class="img" src="{{ asset('image/hair2.jpg') }}"><br><br>

            <h1>3. Don't change your hair colour too often</h1>
            <p> Try to avoid dying your hair too often, as dye can really dry out and damage your hair.
                Hair dye contains main harsh chemicals that can leave your hair dry and broken.<br>
                Try to avoid dying your hair too often, as dye can really dry out and damage your hair.
                Hair dye contains main harsh chemicals that can leave your hair dry and broken.
            </p><br>
            <img class="img" src="{{ asset('image/hair3.jpg') }}"><br><br>

            <h1>4. Eat healthy foods</h1>
            <p>By choosing the correct foods, you can increase hair growth and repair and prevent hair loss.
                If you do not get enough nutrients each day, your hair will most likely become thin.<br>
                Make sure you are eating enough protein. Hair is made of protein, so eating plenty of meat, eggs,
                and other protein-rich foods will give your body what it needs to grow and repair your hair.
            </p><br>
            <img class="img" src="{{ asset('image/hair4.jpg') }}"><br><br>

            <h1>5. Drink lots of water</h1>
            <p> Healthy hair needs to be hydrated, so make sure you drink plenty of water to give it the hydration it needs.
                This will also help to hydrate your skin and nails, as well as making you feel healthier.
            </p><br>
            <img class="img" src="{{ asset('image/hair5.jpg') }}"><br><br>

            <h1>6. Don't let your environment affect your hair</h1>
            <p> Pollution, smoke and smoking all dry out your hair.
                Do your best to limit the amount that you smoke or are around others who smoke,
                and avoid heavily polluted areas.
            </p><br>
            <img class="img" src="{{ asset('image/hair6.jpg') }}"><br><br>

            <h1>7. Protect your hair from the sun</h1>
            <p>If you are often out in the hot sun, then protect your hair by wearing a hat or bandana;
                doing this can also help to protect your skin from getting burnt.<br>
                If you don’t like wearing hats, apply products that can protect your hair from the sun,
                such as protective leave-in conditioner, or watered down sunscreen.<br>
                Try to avoid using products that contain alcohol if you are going to be out in the sun,
                as these can damage your hair even more.
            </p><br>
            <img class="img" src="{{ asset('image/hair7.jpg') }}"><br><br>

            <h1>8.Keep your hair from being damaged by harsh chemicals</h1>
            <p>When you go swimming, protect your hair from harsh chemicals such as chlorine. Use a spray leave-in conditioner before going swimming to minimize the amount of chlorine that your hair can absorb.
                For maximum protection from the chlorine you can either avoid getting your hair wet, or wear a swimming cap.<br>
                If your hair gets damaged by chlorine, try mixing a small amount of vinegar into your shampoo to help restore your hair’s natural strength,
                or you can add about 1 teaspoon of olive oil into your leave-in conditioner (if you have one) since olive oil helps strengthen hair.
            </p><br>
            <img class="img" src="{{ asset('image/hair8.jpg') }}"><br><br>


            <a href="https://www.wikihow.com/Look-After-Your-Hair">To Get More!!</a>
</div>
</section>
@include('header.footer')