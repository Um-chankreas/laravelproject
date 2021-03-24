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
        <h1>4-Step Nighttime Skin</h1>
        <h3>Routine for Clear Skin</h3><br>
        <h1>Step 1: Cleanse</h1><br>
        <p>To start off, I always make sure that I’m working with a properly cleansed face. Cleansing is very important but often overlooked. Removing all the excess dirt and sebum from our face is crucial for the next step of our skin care routine to absorb and work better.
            I personally like the idea of double cleansing. Here’s the breakdown:<br><br>
            <b>Oil cleanser :</b><br>
            Whenever I’m using any base makeup product — think BB cream, foundation, or concealer — I like to start by removing them with an oil cleanser.
            I found this step is the easiest and gentlest way to melt off all the base makeup from my face.
            <br>
            I apply the oil cleanser on dry skin while giving it a little massage, and finish by rinsing it off with water.
            I then move on to the next cleansing step.<br><br>
            <b>Water-based cleanser :</b><br>
            On days where I don’t wear any makeup, I’ll jump right to this step. One thing to remember is that this product should be gentle,
            shouldn’t irritate your eyes, and shouldn’t leave your skin feeling tight and dry.
            It should rinse off easily and effectively remove dirt and grime from your skin.
            <br>
            Regardless of whether the cleanser is in gel, foam, or milk form, as long as it’s checked off the above criteria, you’re good to go.<br>
            <br>
            <b>Cleansing pro tips :</b>
        <ul>
            <li>When you’re trialing your cleanser for the first time, test out the product’s performance by wiping your face with
                a cotton pad after you rinse your face to see if there’s any residue left behind.
            </li>
            <li>
                After rinsing, I prefer to tap off excess water gently on my face instead of using a towel.
                But if you prefer the latter, remember to hang your towel out to dry in an open space with adequate air circulation,
                not inside your closet or bathroom. You should also try and expose them to UV light once in a while if you can to help kill bacteria.
            </li>
        </ul>
        </p><br>
        <img class="img" src="{{ asset('image/night1.jpg') }}"><br>
        <br>
        <h1>Step 2: Treat</h1>
        <p>I like to apply my serum right after cleansing. This is where I incorporate the “fun but mindful” approach to my skin care routine.
            Serum is a product with a concentrated amount of focused ingredients to tackle certain skin issues. And there are many varieties to choose from.
            <br>
            While I love trying out the various serums available, being mindful of what my skin really needs is equally as important.
            I learned this the hard way when I once tried a product that got a lot of hype, rather than paying attention to the ingredients.<br>
            In the end, it really didn't agree with my skin.<br>
            <br>
            Be mindful of how your skin reacts to a product, and if the result is bad, that’s when it’s time to say, “thank u, next.”<br><br>
            <b>Here are some of the ingredients that I look for in a serum for each of my skin concerns :</b>
        <ul>
            <li>
                <b>Acne :</b>BHA (salicylic acid), AHA (lactic acid, glycolic acid, mandelic acid).
            </li>
            <li>
                <b>Hyperpigmentation :</b>vitamin C, niacinamide, licorice extract, alpha arbutin.
            </li>
            <li>
                <b>Anti-aging :</b>retinol, peptide.
            </li>
        </ul>
        </p><br>
        <img class="img" src="{{ asset('image/night2.jpg') }}"><br><br>

        <h1>Step 3: Hydrate</h1>
        <p>Using toner adds an additional boost of hydration when my skin is feeling dehydrated, especially during winter.
            Toner is a water-like product that’s formulated with other beneficial ingredients that help to add more hydration to our skin.<br>
            <br>
            It’s usually packed with antioxidants or humectants, which attracts water into our skin.
            What I like to do is put a generous amount of it into the palm of my hands and gently tap them on my face until it all absorbs.<br>
            <br>
            Whenever I take this step out of my routine, my skin is greasier the next day. This is because when your skin is dehydrated,
            it stimulates your oil gland to produce more oil to naturally moisturize the skin. When this happens, your risk for acne can increase.
            Therefore, adding more hydration when your skin needs it can help cut this never-ending cycle.
        </p><br>
        <img class="img" src="{{ asset('image/night3-1.jpg') }}"><br><br>

        <h1>Step 4: Moisturize</h1>
        <p>Moisturizer helps to lock in all the goodness that you’ve just put on your skin, while ensuring your skin stays hydrated.
            Not to mention your skin often feels soft and plump directly after applying it.<br>
            <br>
            I like to apply generous amounts of moisturizer that contains a light texture and doesn’t leave any tacky residue.
            If I’m honest, it’s not easy to find a product that fits my skin. In fact,
            it took me some time to find one that doesn’t clog my pores or cause me to break out.<br>
            <br>
            <b>Moisturizer Pro tip</b><br>
            Mix your favorite moisturizer with a few drops of face oil for an added boost of moisture.
        </p><br>
        <img class="img" src="{{ asset('image/night4.jpg') }}"><br><br>

        <a href="https://www.healthline.com/health/beauty-skin-care/nighttime-skin-care-routine"><b>To Get More!!</b></a><br>
        <br>
    </div>
</section>
@include('header.footer')
