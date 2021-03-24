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
        <h1>How to take care of skin</h1>
        <h3>7 Tips When you are getting older</h3><br>
        <h1>1. Bathe to relieve dry skin</h1>
        <p>Some simple changes to your bath time can reduce (or alleviate) dry, itchy skin and prevent dry,
            itchy from becoming a serious problem. Here’s what you can do :
        <ul>
            <li><b>Stop using bar soap :</b>Replace it with a gentle, creamy, fragrance-free cleanser or emollient.
            </li>
            <li>
                <b>Use warm (not hot) water :</b>Hot water strips skin of its natural oils, which can increase skin dryness.
            </li>
            <li>
                <b>Use a soft cloth to wash your skin :</b> A buff puff or bath brush can irritate your skin.
            </li>
            <li>
                <b>Keep your bath or shower short :</b> You may find that you don’t need to bathe every day. When you bathe, keep it short. Take a 10-minute bath or shower.
            </li>
            <li>
                <b>Pat water gently from your skin after bathing, but leave a bit of water on your skin :</b>Having some water on your skin when you apply moisturizer (next step) helps hydrate your skin.
            </li>
            <li>
                <b>Apply a creamy, fragrance-free moisturizer formulated for dry skin within 3 minutes of bathing and throughout the day :</b>
                This helps ease the dryness and restore your skin’s protective barrier.
            </li>
        </ul>
        </p><br>
        <img class="img" src="{{ asset('image/older1.jpg') }}"><br>
        <br>
        <h1>2. Use a humidifier when the air feels dry</h1>
        <p>Heating and air conditioning can strip humidity from the air. Dry air can make your skin feel dry and itchy.<br>
            <br>
            Keeping indoor humidity between 45% and 60% can reduce dry, itchy skin. You can easily measure the humidity in the air with a hydrometer,
            which you can buy at a hardware or home-improvement store.
        </p><br>
        <img class="img" src="{{ asset('image/older2.jpg') }}"><br><br>

        <h1>3. Wear gloves while doing housework and gardening</h1>
        <p>Working around your house and in your garden can expose your skin to harsh chemicals, sunlight,
            and other things that can irritate and dry your skin.<br>
            <br>
            <br>
            When you wear gloves, you also reduce your risk of injuring your skin.
        </p><br>
        <img class="img" src="{{ asset('image/older3.jpg') }}"><br><br>

        <h1>4.Protect your skin from the sun</h1>
        <p>If you’re seeing more wrinkles, age spots, and blotches of discolored skin, you may wonder if you still need to protect your skin from the sun.<br>
            <br>
            You do! At this stage in your life, sun protection still offers many benefits. It helps to prevent new age spots and blotchy skin. It can reduce dry, thinning skin. It also reduces your risk of developing skin cancer.
            <br><br>
            To protect your skin from the sun’s harmful rays, dermatologists recommend that you:<br>
        <ul>
            <li><b>Apply a broad-spectrum, water-resistant sunscreen with SPF 30 or higher every day :</b>
                You want to apply this to all skin that clothing won’t cover while you’re outside.
            </li>
            <li>
                <b>Seek shade when outdoors :</b>Sunscreen cannot block 100% of the sun’s harmful rays.
            </li>
            <li>
                <b>Wear clothing that protects your skin from the sun :</b> To find out if a garment offers sun protection, hold it up to a bright light. If you don’t see light shining through,
                it can protect your skin from the sun.
            </li>
        </ul>
        </p><br>
        <img class="img" src="{{ asset('image/older4.jpg') }}"><br><br>

        <h1>5. Go fragrance free</h1>
        <p>Perfumes, colognes, and skin care products that contain fragrance can irritate your skin.
            When you stop using these, you can reduce your risk of developing dry, itchy skin.
        </p><br>
        <img class="img" src="{{ asset('image/older5.jpg') }}"><br><br>

        <h1>6. See a dermatologist for skin cancer exams</h1>
        <p>Around 50 years of age, your risk of developing skin cancer and pre-cancerous growths increases. As the years pass, this risk rises.<br>
            <br>
            When skin cancer is found early and removed, that’s often the only treatment you’ll needed. If the cancer spreads, treatment becomes more difficult.
        </p><br>
        <img class="img" src="{{ asset('image/older6.jpg') }}"><br><br>

        <h1>7. Examine your skin for signs of skin cancer</h1>
        <p>Skin cancer can develop quickly. Learning how to examine your skin for signs of it can help you to find skin cancer early.
            To learn how to examine your skin, watch How to perform a skin self-exam.
        </p><br>
        <img class="img" src="{{ asset('image/older7.jpg') }}"><br><br>

        <a href="https://www.aad.org/skin-care-basics/skin-care-in-your-60s-and-70s">To Get More!!</a><br>
        <br>
    </div>
</section>
@include('header.footer')