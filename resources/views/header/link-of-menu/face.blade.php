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
        <h1>Face Skin Care</h1>
        <h3>11 Steps to Better Skin</h3><br>
        <h1>1. Consider Your Water</h1>
        <p>And tailor your skin-care products accordingly. “Soft water doesn't remove soap well,
            so it can leave a residue on your skin,” says Susan H. Weinkle,
            an assistant clinical professor of dermatology at the University of South Florida, in Tampa.
            If your water is soft, use face and body cleansers sparingly (no more than a nickel- or quarter-size amount,
            respectively). Hard water, on the other hand, doesn't allow washes to lather easily, prompting you to use even more cleanser,
            which can cause dryness. Gentle, none soap formulas, which aren't meant to lather, can minimize this, says Carolyn Jacob, a dermatologist in Chicago. Experts suggest trying Avène Extremely Gentle Cleanser.
            To check the water quality in your area, log on to the Environmental Protection Agency’s website (epa.gov).
        </p><br>
        <img class="img" src="{{ asset('image/face1.jpg') }}"><br>
        <br>
        <h1>2. Drink Green Tea</h1>
        <p>“If your complexion is red or blotchy, this tea’s anti-inflammatory properties can be soothing,” says Andrea Cambio,
            a dermatologist in Cape Coral, Florida. “Iced is best because hot beverages can worsen redness and other symptoms of rosacea.”
            Another benefit: The epigallocatechin gallate (EGCG) in green tea may help prevent the collagen destruction that leads
            to wrinkles as well as sun-induced DNA damage in the skin (think lines and discoloration), according to some experts.
            Consider subbing tea for your morning mug of coffee.
        </p><br>
        <img class="img" src="{{ asset('image/face2.jpg') }}"><br><br>

        <h1>3. Keep Stress in Check</h1>
        <p> It takes a toll on nearly every part of your body, including your skin. In a study conducted at Stanford University,
            researchers found that during exam time, students who felt stressed had more severe acne breakouts than did those under less pressure.
            That’s because stress increases the body’s production of hormones such as cortisol,
            which can make skin oilier and decrease its ability to fight off acne-causing bacteria, says Lisa Donofrio,
            an associate clinical professor of dermatology at the Yale University School of Medicine. To keep that frazzled feeling under control,
            regularly practice stress-management techniques, like yoga, deep breathing, and meditation.
            This “can help conditions such as acne, psoriasis, rosacea, and seborrhea,” Donofrio says.
        </p><br>
        <img class="img" src="{{ asset('image/face3.jpg') }}"><br><br>

        <h1>4. Improve Your Air Quality</h1>
        <p>Avoiding smoky environments is smart since “just being around smoke can lead to the release of free radicals that damage skin and hasten aging,”
            says Diane S. Berson, an assistant clinical professor of dermatology at the Weill Medical College of Cornell University, in New York City.
            Other indoor pollutants can adversely affect skin, too. Change the air filter in your furnace regularly and,
            if you cook with oil, use the fan over your range. Also keep in mind that dry indoor air can dehydrate skin and make fine lines more noticeable.
            Run a humidifier in your bedroom to minimize these problems.
        </p><br>
        <img class="img" src="{{ asset('image/face4.jpg') }}"><br><br>

        <h1>5. Switch to Plain Toothpaste</h1>
        <p> Those with tartar-control ingredients or added flavors, like cinnamon, may contribute to a common skin condition called perioral dermatitis.
            It looks like pimples, redness, and scaling around the mouth, says Donofrio. Use a basic paste instead,
            like Crest Cavity Protection Toothpaste ($3; target.com). Note: If you suffer from this problem,
            see a dermatologist for antibiotics to clear it up.
        </p><br>
        <img class="img" src="{{ asset('image/face5.png') }}"><br><br>

        <h1>6. Watch Sun Exposure Indoors</h1>
        <p> Yes, you read it right: UV rays (in particular UVA rays) can penetrate the windows in your home and office and cause wrinkling and brown spots.
            The same goes for car windows: Studies have found higher rates of skin cancers on the left side of the face and upper body than on the right,
            since that side is more exposed when you’re driving. Cancers aside, “many people have more wrinkles and sun damage on the left side of their faces, too,”
            notes Donofrio.
            Make protection a no-brainer by always wearing a moisturizer with SPF. Try La Roche-Posay Anthelios SX Daily Moisturizing Cream with Mexoryl
        </p><br>
        <img class="img" src="{{ asset('image/face6.jpg') }}"><br><br>

        <h1>7. Monitor Your Dairy Intake (If You Have Acne)</h1>
        <p>Research from the Harvard School of Public Health found that teenage girls who consume a lot of milk are almost 30 percent more likely to have acne than those who drink less,
            and experts believe the same holds true for adult women prone to serious breakouts. Surprisingly,
            skim milk seems to be a worse offender than whole milk. Scientists don’t understand exactly why milk products can lead to acne,
            but some surmise that the natural hormones present in dairy may be to blame, says Leslie Baumann, a dermatologist in Miami Beach, Florida,
            who notes that even organic milk can cause breakouts. Cottage cheese, instant breakfast drinks, and sherbet are also linked to acne.
            While cutting back on dairy won’t solve a pimple problem single-handedly, it may make a difference for those who suffer severe breakouts,
            say experts.
            (If you go this route, be sure you’re getting enough calcium from other food sources, such as leafy greens, or consider taking a supplement.)
        </p><br>
        <img class="img" src="{{ asset('image/face7.jpg') }}"><br><br>

        <h1>8.Pay Attention to Your Cleanser</h1>
        <p>It may sound counterintuitive, but if you have dry skin, your choice of face wash may be even more important than your moisturizer.
            “A nonsoap cleanser is ideal because it helps replace the moisture barrier in the skin,” Donofrio says. “Consider it a preventive approach,”
            adds Berson. “You can use your cleanser to avoid dryness, eczema, and psoriasis rather than just treating these issues when they flare up.”
            A good, inexpensive, and natural one that Donofrio likes: Burt’s Bees Orange Essence Facial Cleanser. That said,
            applying a moisturizer after you cleanse is still smart. And if you’re using an acne medication,
            wait 10 minutes after you wash to minimize irritation.
        </p><br>
        <img class="img" src="{{ asset('image/face8.jpg') }}"><br><br>

        <h1>9. Choose Water-Based Hair Products</h1>
        <p> Some conditioners, as well as pomades, volumizers, and styling creams, contain oils or waxes that can clog pores and create acne,
            especially on the forehead, the back, and the hairline. Even if you’re careful to avoid getting them on your skin,
            they can run down your face and body as you shower and when you sweat, or be transferred by your pillowcase while you sleep. Instead,
            look for water-based formulas and avoid those containing mineral oil, beeswax, or microcrystalline wax.
            Or consider SEEN Haircare products, a line of shampoos, conditioners, and styling aids created to help minimize breakouts.
        </p><br>
        <img class="img" src="{{ asset('image/face9.jpg') }}"><br><br>

        <h1>10. Check Your Medicine Cabinet</h1>
        <p>Some oral contraceptives, antibiotics, fertility drugs, and antiseizure medications can bring on breakouts,
            says Jerome Lit, a dermatologist in Beachwood, Ohio. Antihistamines, diuretics, and some antidepressants can cause dry skin.
            And certain antibiotics, diuretics, and diabetes treatments can make you vulnerable to sun damage.
            “If you find your skin is reacting more while you’re taking a particular drug, talk to your physician,”
            says Lit. “He or she may be able to either lower the dosage or switch you to a different medication.”
        </p><br>
        <img class="img" src="{{ asset('image/face10.png') }}"><br><br>

        <h1>11. Sleep a Full Night</h1>
        <p>While you’re snoozing, the skin’s repair mechanisms swing into action, says McBurney.
            Being sleep-deprived, by contrast, puts stress on the body, causing it to release more adrenaline and cortisol,
            which can trigger breakouts and other skin problems, says Barbara R. Reed,
            a clinical professor of dermatology at the University of Colorado, Denver.
            (And research from China found that insufficient sleep was a significant risk factor for acne among adolescents.)
            Make getting seven to eight hours of shut-eye your last good-skin move of each day.
        </p><br>
        <img class="img" src="{{ asset('image/face11.jpg') }}"><br><br>

        <a href="https://www.realsimple.com/beauty-fashion/skincare/skincare-face/strategies-for-better-skin">To Get More!!</a><br>
        <br>
    </div>
</section>
@include('header.footer')
