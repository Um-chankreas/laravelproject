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
        <h1>Daily skin care routine:</h1>
        <h3>getting clear skin in 5 steps</h3><br>
        <h1>Step 1: Cleanse</h1><br>
        <p><b>What it do :</b><br>
            Cleansing the skin removes sweat, oil, dirt and other pollutants that your skin naturally collects throughout the day and night.
            It’s the first step in your new simple skincare routine.<br><br>
            <b>How to do it :</b><br>
            Cleanse your skin in the morning and in the evening to keep your pores clear and your face fresh.
            Your cleanser may vary based on skin type, but with all cleansers, the general consensus is to apply them using an upward,
            circular motion so as to prevent wrinkles from forming. Make sure your hands are clean in order to prevent excess dirt from entering your pores.
            If you have very sensitive skin, using only water would also do the trick!<br><br>
            <b>Word of advice :</b><br>
            It’s best to steer clear of harsh bar soaps when cleansing your face, as they tend to dry out your skin and cause it to overproduce sebum,
            the natural oils your skin produces for protection which also contribute to clogged pores and breakouts.
        </p><br>
        <img class="img" src="{{ asset('image/clear1.jpg') }}"><br>
        <br>
        <h1>Step 2: Tone</h1><br>
        <p><b>What it do :</b><br>
            There is a lot of confusion around toner, and when you’re first establishing a daily skincare routine, it may even seem unnecessary.
            But most experts agree that toning is an important addition to your skincare routine with beneficial effects for your skin.
            After you cleanse your skin of impurities, toner removes any residue left behind by the cleanser as well as any makeup or
            oils your cleanser might have missed. The added cleansing effects help prepare your skin to absorb moisturizer and minimize
            the appearance of pores. Some toners may have PH balancing and antiseptic effects as well.<br><br>
            <b>How to do it :</b><br>
            Apply toner right after you have cleansed your skin, while it is still damp. The best way to apply it is with a cotton pad or cotton ball,
            simply soaking the pads in the toner and wiping upwards, starting at your neck.<br><br>
            <b>Word of advice :</b><br>
            Most experts advise against using harsh alcohol or citrus-based toners as they can damage and irritate your skin.
            See if a toner works for you, and if not, take this step out of your routine.
        </p><br>
        <img class="img" src="{{ asset('image/clear2.jpg') }}"><br><br>

        <h1>Step 3: Exfoliate</h1><br>
        <p><b>What it do :</b><br>
            Our skin is constantly shedding millions of skin cells every day, but sometimes those cells can build up on the surface of our skin
            and need some extra help to be removed. Exfoliating removes these dead skin cells that have accumulated in our pores.
            If you struggle with blackheads, acne or breakouts, you’re not going to want to miss this step.<br><br>
            <b>How to do it :</b><br>
            It’s best to exfoliate after toning and before moisturizing. Most dermatologists agree that you should exfoliate one to three times a week,
            but this depends on your skin type and how it reacts to exfoliation. Experiment and find what works best for you.
            There are chemical exfoliators and granule exfoliators such as your traditional sugar or salt scrub.
            Both can be effective tools for removing dead skin cells, but chemical exfoliating ingredients like
            AHA and BHA are often more effective in getting deep into your pores and removing buildup.<br><br>
            <b>Word of advice :</b><br>
            If you struggle with blackhead and acne or sun damage, opt for chemical exfoliators that contain AHA and BHA over your traditional granule scrub.
            For acne and blackhead plagued skin, look for an exfoliator containing BHA as it penetrates deeply into your pores.
            If you struggle with sun damage, AHA is your preferred option as it mainly exfoliates the upper layers of skin.
        </p><br>
        <img class="img" src="{{ asset('image/clear3.jpg') }}"><br><br>

        <h1>Step 4: Moisturize</h1><br>
        <p><b>What it do :</b><br>
            Moisturizing provides a protective layer to the skin that locks in moisture and keeps skin hydrated. This hydration is what gives your skin a smooth,
            luminous appearance.
            Needless to say, this is a step in your skincare routine you don’t want to skip.<br><br>
            <b>How to do it :</b><br>
            Choose a moisturizer based on your skin type — it can be a cream, lotion, gel or oil—and gently rub it into your skin in an upward motion, being
            careful not to tug on the delicate skin around your eyes. Once the moisturizer is applied,
            give it time to sink in so you receive its full benefits.<br><br>
            <b>Word of advice :</b><br>
            Look for a moisturizer with an SPF of at least 15 for the daytime, an important factor in preventing skin cancer symptoms and
            keeping your skin healthy as you age. Find a moisturizer that works for your skin type. People with oily skin should opt for
            lighter moisturizers while people with drier skin should use heavier and richer creams.
        </p><br>
        <img class="img" src="{{ asset('image/clear4.jpg') }}"><br><br>

        <h1>Step 5: Apply SPF</h1><br>
        <p><b>What it do :</b><br>
            The sun is the most damaging factor for skin and the leading cause of skin cancer. That’s why using a moisturizer that contains SPF or applying
            sunscreen after your moisturizer is key for protecting your skin from the sun’s damaging UV rays and maintaining a youthful and healthy visage.<br><br>
            <b>How to do it :</b><br>
            Apply SPF of at least 15 to your face for the daytime, using a higher SPF if you anticipate heavy sun exposure throughout the day.<br><br>
            <b>Word of advice :</b><br>
            Be sure to re-apply every few hours as it wears off.
        </p><br>
        <img class="img" src="{{ asset('image/clear5.jpg') }}"><br><br>

        <a href="https://www.skinvision.com/articles/daily-skin-care-routine-getting-clear-skin-in-5-steps"><b>To Get More!!</b></a><br>
        <br>
    </div>
</section>
@include('header.footer')
