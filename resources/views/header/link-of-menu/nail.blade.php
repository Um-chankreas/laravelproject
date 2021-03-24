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
        <h1>Healthy Nails</h1>
        <h3>15 Important Tips to Get Strong and Healthy Nails, According to Nail Care Experts</h3><br>
        <h1>1. Keep your hands very clean</h1>
        <p>Before you do anything, it's important to make sure your nails and the skin around them are thoroughly dirt-free.
            Then remove all traces of your last color with an acetone-free remover (anything else unnecessarily dries out your nail). Dr.
            Ava Shamban, author of Heal Your Skin, recommends applying soap to a toothbrush, then gently scrubbing your nails and skin.
            This will remove dirt and exfoliate any dead skin without the need for harsh, drying chemicals or expensive scrubs.
        </p><br>
        <img class="img" src="{{asset('image/nail1.jpg') }}"><br>
        <br>
        <h1>2. Be gentle on your nails</h1>
        <p>Your nails are delicate, and scrubbing them too roughly can actually expose you to infection. Another no-no: Using metal tools under the nail,
            as too much digging can cause the nail plate to separate from the skin (called onycholysis). It's a common problem for people over 50,
            according Dr. Stern, who is also the developer of the Dr.
            Dana Nail Renewal System. This could also lead to an irregular white, arching nail tip, explains NYC dermatologist Dr. Janet Prystowsky.
        </p><br>
        <img class="img" src="{{ asset('image/nail2.jpg') }}"><br><br>

        <h1>3. Clip your nails regularly</h1>
        <p>Regular trims are as important to your nails as they are to your hair, says Dr. Prystowsky.
            So set aside time to clip them every two weeks, adjusting to more or less often once you see how your nails respond.
        </p><br>
        <img class="img" src="{{ asset('image/nail3.jpg') }}"><br><br>

        <h1>4. Prioritize nail health over length</h1>
        <p>Long nails are beautiful, but if you're someone who has struggled with snags or breakage, Dr.
            Shamban recommends that you keep your nails short — at least to start out with.
            A shorter style with a rounded edge tends to be easier to manage and looks neater,
            so you can focus on building strength without worrying about anything else.
            As long as each nail is uniform in shape and matches its nine neighbors,
            you won't miss the added length.
        </p><br>
        <img class="img" src="{{ asset('image/nail5.jpg') }}"><br><br>

        <h1>5. Always keep a nail file on hand</h1>
        <p>If you're someone whose work or gym routine causes a lot of wear and tear,
            Dr. Prystowsky suggests keeping a nail file handy to smooth away any rough edges that happen on the spot.
            The best way to do it? Work in one direction with the grain of your nail for a smoother finish.
            And it turns out, the emery board that's been sitting in your drawer could be causing your nails to peel and snag. Instead,
            try a glass (also called crystal) nail file. "A glass file will create an even edge to the nail and can be used on the weakest,
            brittle, and damaged nails," says Dr. Stern.
        </p><br>
        <img class="img" src="{{ asset('image/nail4.jpg') }}"><br><br>

        <h1>6. Don't forget to take care of your nail tools, too</h1>
        <p>Disinfecting your nail tools between uses is just as important as regularly cleaning your makeup brushes,
            and for the same reason — bacteria. To keep your nails happy and infection-free,
            Dr. Prystowsky advises washing metal tools with soap and water and then wiping down with rubbing alcohol.
            And don't forget to regularly replace disposable tools like emery boards.
            There's no reason to continue using a tattered tool when it's so easy to rotate in a new one for a few bucks.
        </p><br>
        <img class="img" src="{{ asset('image/nail6-1.jpg') }}"><br><br>

        <h1>7. Leave your cuticles alone</h1>
        <p>The cuticle has a very important purpose to serve: It seals the area at the base of the nail. So when you cut or remove the cuticle,
            it breaks that seal of protection, leaving you vulnerable to bacteria and the possibility of infection.
            The better you are at leaving cuticles alone, the more your nails will thank you.
            Taking care of your cuticles also helps minimize those dreaded hangnails (try not to tear them to avoid infections), says Dr. Stern.
            If you're dead-set on messing with your cuticles, Dr. Debbie Palmer, dermatologist and creator of Replere,
            recommends gently pushing back the cuticle once a week with a wooden orange stick after getting out of the shower,
            then massaging them with a cuticle oil or thick, creamy lotion.
        </p><br>
        <img class="img" src="{{ asset('image/nail7.jpg') }}"><br><br>

        <h1>8. Protect your nails with a base coat</h1>
        <p>Painting your nails at home is no excuse to cut corners by skipping the base coat.
            Dr. Prystowsky points out that this step not only protects the nail from being stained by the polish,
            but also helps the color look more saturated and opaque with just one coat.
            And if you really want to take things to the next level,
            Dr. Shamban suggests adding a coat of clear gloss between each layer to add extra shine and protection.
        </p><br>
        <img class="img" src="{{ asset('image/nail8.jpg') }}"><br><br>

        <h1>9. Read the labels on your polish</h1>
        <p>Just as with makeup and skincare, not all nail polish brands are created equal, so make sure you're buying or using a good product.
            Dr. Debbie Palmer urges you to steer clear of polishes containing toxic chemicals like dibutyl phthalate,
            formaldehyde, and toluene, as these toxins can contribute to brittleness, splitting, and cracking.
        </p><br>
        <img class="img" src="{{ asset('image/nail9.jpg') }}"><br><br>

        <h1>10. Use a top coat to prevent nail chips</h1>
        <p>Don't think you're squirming your way out of using top coat, either. This step is just as important,
            as the top coat seals in the polish's color and adds a much-needed gloss finish to your digits.
            Dr. Prystowsky recommends adding another top coat layer every three days to decrease chipping, so you'll get the most out of your manicure.
            Seriously, what's the point of spending all that time painting your nails if it only lasts a day?
        </p><br>
        <img class="img" src="{{ asset('image/nail10.jpg') }}"><br><br>

        <h1>11. Indulge in acrylic or gel treatments sparingly</h1>
        <p>Any nail expert you talk to is going to do their best to steer you away from acrylic or gel manicures — as long-lasting and convenient as they are because they're very hard on the nail.
            But if you're keen on getting them, there are some ways to minimize the damage to your hands and nails.
            The main issue with a gel manicure is the exposure to UV light in the drying device, which can damage the skin below and around the nail,
            leading to an increased risk of cancer. To help reduce that risk, Dr. Prystowsky recommends applying a sunscreen with an SPF of 30 to 50 before the procedure to help block the damage,
            or you can try special gloves that expose only the nails themselves, shielding the rest of your hands from the harmful UV rays.
            There's also a new type of professional service that the Good Housekeeping Institute's Beauty Lab found won't ruin your nails: CND's Shellac Luxe salon service,
            which even won a Good Housekeeping Beauty Award in 2019.
        </p><br>
        <img class="img" src="{{ asset('image/nail11.jpg') }}"><br><br>

        <h1>12. Give your nails a break</h1>
        <p>Save the elaborate nail art and those bold colors with lots of pigment for the weekend,
            and during the rest of the week, give your nails time to rest and repair with a clear gloss.
            Dr. Shamban warns that going from one strong polish color to another without giving your nails a break can dry them out,
            turn them yellow, and over time, even weaken the structure of the nail.
            Dr. Stern agrees, saying that nail polish removers could also be the reason your nails are weak.
            Sometimes going all natural "can be just the thing that your nails need in order to rejuvenate and refresh," she says.
        </p><br>
        <img class="img" src="{{ asset('image/nail12.jpg') }}"><br><br>

        <h1>13. Moisturize your hands and nails regularly</h1>
        <p>You wouldn't go to sleep without moisturizing your face, so why should your nails be any different?
            Nail artist and expert Holly Falcone likes to use a mix of almond and avocado oils to keep cuticles and nails hydrated while she gets some shut-eye,
            but any nutrient-rich oil or moisturizer will do. In a pinch, you can even use a dab of lip balm.
        </p><br>
        <img class="img" src="{{ asset('image/nail13.jpg') }}"><br><br>

        <h1>14. Wear gloves when doing dishes</h1>
        <p>Whenever you're cleaning with harsh chemicals, gardening, or doing anything that involves soaking or dirtying your hands,
            Dr. Prystowsky insists that wear rubber, vinyl, nitrile, or plastic gloves — some of which have a cotton liner.
            Cleaning dishes in hot, soapy water sans gloves can weaken the nails,
            while getting them caked with dirt from gardening will require a level of cleaning that you want to avoid wherever possible.
            <br><br>
            Similarly, when weather is chilly, remember to wear a pair of mittens or gloves so that the cold air and wind don't undo the hard work you did moisturizing,
            leaving you with dry, flaky, scaly skin.
        </p><br>
        <img class="img" src="{{ asset('image/nail14.jpg') }}"><br><br>

        <h1>15. Load up on protein-rich food</h1>
        <p>Your fingernails are made of a protein called keratin, so just as with the clarity of your skin or the shine of your hair, you can improve your nails by tweaking your diet. Falcone advises adding vitamins and supplements like biotin, Vitamin E, and fish oil to your daily regimen, while Dr. Palmer recommends protein-rich foods like beans, fish, and nuts.
            The one thing every expert agrees on: Once you hit on the combination that works for you, you'll be rewarded with stronger, clearer nails.
        </p><br>
        <img class="img" src="{{ asset('image/nail15.jpeg') }}"><br><br>
        <a href="https://www.goodhousekeeping.com/beauty/nails/a34645/healthy-nail-care-tips/">To Get More!!</a><br>
        <br>
    </div>
</section>
@include('header.footer')
