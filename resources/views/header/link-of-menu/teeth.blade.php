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
        <h1>Healthy Teeth</h1>
        <h3>10 tips to look after your teeth</h3><br>
        <h1>1. Brush at least twice a day</h1>
        <p>The best time to brush teeth is after meals. Choose a toothbrush with a small head for better access to back teeth.
            Soft bristles are kinder on your gums.
        </p><br>
        <img class="img" src="{{ asset('image/teeth1-1.jpg') }}"><br>
        <br>
        <h1>2. Use fluoridated toothpaste</h1>
        <p>Fluoride helps to harden tooth enamel and reduces your risk of decay.
        </p><br>
        <img class="img" src="{{ asset('image/teath2.png') }}"><br><br>

        <h1>3. Brush thoroughly</h1>
        <p>Tooth brushing should take between two and three minutes.
        </p><br>
        <img class="img" src="{{ asset('image/teeth3.jpg') }}"><br><br>

        <h1>4. Floss your teeth daily</h1>
        <p>Use a slow and gentle sawing motion.
        </p><br>
        <img class="img" src="{{ asset('image/teath4.jpg') }}"><br><br>

        <h1>5. Limit acidic drinks like soft drinks, cordials and fruit juices</h1>
        <p>Food acids soften tooth material and dissolve the minerals in tooth enamel, causing holes (cavities or caries). In s
            ever cases, teeth may be ‘eaten’ right down to the gum.
        </p><br>
        <img class="img" src="{{ asset('image/teath5.jpg') }}"><br><br>

        <h1>6. Limit sugary foods</h1>
        <p>Bacteria in dental plaque change sugars into acids.
        </p><br>
        <img class="img" src="{{ asset('image/teath6.jpg') }}"><br><br>

        <h1>7. Protect your teeth from injury</h1>
        <p>Wear a mouthguard or full-face helmet when playing sports.
        </p><br>
        <img class="img" src="{{ asset('image/teath7.jpg') }}"><br><br>

        <h1>8. Try to save a knocked out tooth</h1>
        <p>If possible, hold the tooth back in place while you seek immediate dental advice. If this is not possible,
            wrap the tooth in plastic or place it in milk and seek dental advice immediately.
        </p><br>
        <img class="img" src="{{ asset('image/teeth7.jpg') }}"><br><br>

        <h1>9. Avoid using your teeth for anything other than chewing food</h1>
        <p>If you use them to crack nuts, remove bottle tops or rip open packaging, you risk chipping or even breaking your teeth.
        </p><br>
        <img class="img" src="{{ asset('image/teeth9.png') }}"><br><br>

        <h1>10. See your dentist for regular check-ups</h1>
        <p>You should also visit your dentist if you have a dental problem such as a toothache or bleeding gums.
        </p><br>

        <img class="img" src="{{ asset('image/teath10.jpg') }}"><br><br>
        <a href="https://www.betterhealth.vic.gov.au/health/ten-tips/10-tips-to-look-after-your-teeth">To Get More!!</a><br>
        <br>
    </div>
</section>
@include('header.footer')