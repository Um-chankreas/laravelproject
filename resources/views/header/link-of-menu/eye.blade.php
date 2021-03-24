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
    <h1>Healthy Eye</h1>
    <h3>12 Ways to Take Care of Your Eyes Everyday</h3><br>
    <h1>1. Avoid rubbing your eyes</h1>
    <p>The hands are exposed to a lot of dirt, dust and bacteria, and all of these can be easily transferred to your peepers each time you touch or rub them.
        So avoid putting your hands to your eyes to prevent infection and irritation.
        If the habit is so ingrained on you, make an effort to get rid of it as soon as possible.
    </p><br>
    <img class="img" src="{{ asset('image/eye1.jpg') }}"><br>
    <br>
    <h1>2. Practice frequent hand washing</h1>
    <p>Wash your hands regularly to keep bacteria at bay and prevent them from getting in contact with your eyes, eyeglasses, and contact lenses.
    </p><br>
    <img class="img" src="{{ asset('image/eye2.jpg') }}"><br><br>

    <h1>3. Protect your eyes from the sun</h1>
    <p>Exposure to sunlight and UV rays increases your risk for age-related macular degeneration and may cause cornea sunburn or photokeratitis.
        So aside from making a fashion statement and adding oomph to your overall look, put on those sunglasses to protect your eyes.
        If wearing them is not up your alley, UV-protected eyeglasses or contact lenses will do. Putting on caps, visors and hats are also advisable.
    </p><br>
    <img class="img" src="{{ asset('image/eye3.jpg') }}"><br><br>

    <h1>4. Stay hydrated</h1>
    <p>Sufficient fluid intake is essential to your body’s overall wellbeing, including the eyes.
        If you’re hydrated enough, you prevent your eyes from getting dry and irritated.
    </p><br>
    <img class="img" src="{{ asset('image/eye4.jpg') }}"><br><br>

    <h1>5. Don’t smoke</h1>
    <p>Smoking makes you more susceptible to age-related macular degeneration and other eye conditions such as cataract.
        Smoking can also damage the optic nerves, which can have adverse effects on your vision overtime.
    </p><br>
    <img class="img" src="{{ asset('image/eye5.jpg') }}"><br><br>

    <h1>6. Keep a balanced diet</h1>
    <p>Beta-carotene, Lutein, Omega-3, Lycopene, and Vitamins C, A, and E are essential for maintaining your eye health.
        Make sure that your diet is infused with different foods that are rich in those nutrients.
    </p><br>
    <img class="img" src="{{ asset('image/eye6.jpg') }}"><br><br>

    <h1>7. Keep proper monitor distance and room lighting</h1>
    <p>Computer monitors should be positioned about an arm’s length away from the eyes and 20 degrees below eye level.
               This keeps your eyes from getting strained. Likewise, make sure that you have sufficient but diffused lighting in your room.
               Focused and too bright lights may result to glare, and this can put too much stress on the eyes.
    </p><br>
    <img class="img" src="{{ asset('image/eye7-1.jpg') }}"><br><br>

    <h1>8. Observe the 20-20-20 rule.</h1>
    <p>If you want to keep your eyes in great shape, you should adhere to the 20-20-20 rule, which states that:
        <ul>
            <li>
                Every 20 minutes, look away from your computer monitor and fix your gaze on an object that’s 20 feet away from you.
            </li>
            <li>
                Blink 20 successive times to prevent eye dryness.
            </li>
            <li>
                Every 20 minutes, get out of your seat and take 20 steps. This is not just good for your vision,
                but also promotes proper posture and blood circulation throughout the body. Yes, it keeps you from being sedentary too.
            </li>
        </ul>
    </p><br>
    <img class="img" src="{{ asset('image/eye8.jpg') }}"><br><br>

    <h1>9. Use the right kind of eye make-up</h1>
    <p>If you wear make-up, choose the brands that work well for you. Steer clear of eye shadows, mascara, and eyeliners that cause an allergic reaction to your eyes.
        Don’t forget to use a make-up remover before going to bed to avoid bacterial build-up from residual make-up left in the eye area.
        Likewise, clean your make-up brushes regularly, especially those that you use for eye make-up application.
    </p><br>
    <img class="img" src="{{ asset('image/eye9.jpg') }}"><br><br>

    <h1>10. Get enough sleep</h1>
    <p>Just like the rest of your body, your eyes need to recharge too, and this happens while you sleep.
        So make sure that you get sufficient shut-eye each day to keep your eyes revitalized and healthy.
    </p><br>
    <img class="img" src="{{ asset('image/eye10.jpg') }}"><br><br>

    <h1>11. Wear the appropriate eye safety gear for different activities.</h1>
    <p>No matter what you do, make sure that your eyes are protected. If you’re going swimming, wear goggles to avoid exposing your eyes to chlorine. Meanwhile,
        if you’re gardening or attending to a DIY project at home, put on safety glasses to protect your eyes from dust particles, bacteria, and injuries.
    </p><br>
    <img class="img" src="{{ asset('image/eye11.jpg') }}"><br><br>

    <h1>12. Keep your surroundings clean</h1>
    <p>Exposure to dirt and dust can irritate the eyes;
        so make sure that the places you frequent are well maintained and clean. Change you linens and towels regularly and keep your workstation clutter-free.
    </p><br>
    <img class="img" src="{{ asset('image/eye12.jpg') }}"><br><br>
    <a href="https://www.arizonaretinalspecialists.com/blog/12-ways-to-take-care-of-your-eyes-everyday/">To Get More!!</a><br>
    <br>
</div>
</section>
@include('header.footer')

