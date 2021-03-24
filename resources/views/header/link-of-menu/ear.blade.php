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
    <h1>Healthy Ear</h1>
    <h3>9 Ways to Protect Your Ears and Hearing Health</h3><br>
    <h1>1. Use earplugs around loud noises</h1>
    <p>Approximately 15% of Americans have noise-induced hearing loss because of loud work or leisure environments.
        Clubs, concerts, lawnmowers, chainsaws, and any other noises that force you to shout so the person next to you can hear your voice all create dangerous levels of sound.
        Earplugs are convenient and easy to obtain. You can even have a pair custom fitted for your ears by your local hearing healthcare provider.
        Musicians' earplugs are custom earplugs with filters that allow a person to hear conversations and music but still reduce harmful sound levels while maintaining the quality of the original sound as closely as possible.
    </p><br>
    <img class="img" src="{{ asset('image/ear1.jpg') }}"><br>
    <br>
    <h1>2. Turn the volume down</h1>
    <p>according to the World Health Organization, 1.1 billion teenagers and young adults worldwide are at risk for noise-induced hearing loss from unsafe use of audio devices.

        If you like to enjoy music through headphones or earbuds, you can protect your ears by following the 60/60 rule. The suggestion is to listen with headphones at no more than 60% volume for no more than 60 minutes a day.
        Earfuls are especially dangerous, as they fit directly next to the eardrum. If possible, opt for over-the-ear headphones.
        Don't forget that any loud music, not just music played through headphones, presents a risk for noise-induced hearing loss. If you're hosting a social event, keep the music at a volume which won't force people to shout in order to hold a conversation
    </p><br>
    <img class="img" src="{{ asset('image/ear2.jpg') }}"><br><br>

    <h1>3. Give your ears time to recover</h1>
    <p>If you are exposed to loud noises for a prolonged period of time, like at a concert or a bar, your ears need time to recover. If you can, step outside for five minutes every so often in order to let them rest.
        What’s more, researchers have found that your ears need an average of 16 hours of quiet to recover from one loud night out.
    </p><br>
    <img class="img" src="{{ asset('image/ear3.jpg') }}"><br><br>

    <h1>4. Stop using cotton swabs in your ears</h1>
    <p>It’s common for people to use cotton swabs to clean wax out of their ear canal, but this is definitely not advisable.
        A little bit of wax in your ears is not only normal, but it’s also important. The ears are self-cleaning organs, and wax stops dust and other harmful particles from entering the canal. Plus, inserting anything inside your ear canals risks damaging sensitive organs like your ear drum.
        If you have excess wax, you can clean around the canal with a damp towel—gently. You could also use ear wax removal solution over the course of a few nights. This softens the wax so that it will eventually flow out on its own.
        The best solution is always to seek a professional opinion and care when possible.
    </p><br>
    <img class="img" src=" {{ asset('image/ear4.jpg') }}"><br><br>

    <h1>5. Take medications only as directed</h1>
    <p>Certain medications, such as non-steroidal anti-inflammatory drugs (NSAIDS) like aspirin, ibuprofen and naproxen, can sometimes contribute to hearing loss.
        Discuss medications with your doctor if you're concerned that they'll impact your hearing ability and take them only as directed.
    </p><br>
    <img class="img" src="{{ asset('image/ear5.jpg') }}"><br><br>

    <h1>6. Keep your ears dry</h1>
    <p>Excess moisture can allow bacteria to enter and attack the ear canal. This can cause swimmer's ear or other types of ear infections, which can be dangerous for your hearing ability. Be sure you gently towel-dry your ears after bathing or swimming.
        If you can feel water in the ear, tilt your head to the side and tug lightly on the ear lobe to coax the water out.

        You can also ensure that your ears stay dry and healthy by using custom-fit swimmers' earplugs, which block water from entering the ear canal.
        They're great for adults and kids alike, and they work wonders in preventing swimmer's ear. Make an appointment with your local hearing health professional to get fitted.
    </p><br>
    <img class="img" src="{{ asset('image/ear6.jpg') }}"><br><br>

    <h1>7. Get up and move</h1>
    <p>Did you know that exercise is good for your ears? It’s true. Cardio exercises like walking, running,
        or cycling gets the blood pumping to all parts of your body, including the ears. This helps the ears’ internal parts stay healthy and working to their maximum potential.
        Make sure to stay safe! When cycling, always wear a helmet. If you fall and hit your head, a concussion can harm your hearing.
    </p><br>
    <img class="img" src="{{ asset('image/ear7.jpg') }}"><br><br>

    <h1>8. Manage stress levels</h1>
    <p>Stress and anxiety have been linked to both temporary and permanent tinnitus (a phantom ringing in the ears).
        High levels of stress cause your body to go into fight or flight mode, which is an instinctual reaction that fills your body with adrenaline to help you either fight or flee from danger. This process puts a lot of pressure on your nerves, blood flow, body heat, and more.
        It's commonly thought that this pressure and stress can travel up into your inner ear and contribute to tinnitus symptoms.
    </p><br>
    <img class="img" src="{{ asset('image/ear8.jpg') }}"><br><br>

    <h1>9. Get regular checkups</h1>
    <p>Ask your primary care physician to incorporate hearing screenings into your regular checkups. Because hearing loss develops gradually,
        it’s also recommended that you have annual hearing consultations with a hearing healthcare professional. That way, you’ll be more likely to recognize signs of hearing loss and take action as soon as you do.

        Taking action is important because untreated hearing loss, besides detracting from quality of life and the strength of relationships,
        has been linked to other health concerns like depression, dementia, and heart disease.
    </p><br>
    <img class="img" src="{{ asset('image/ear9.jpg') }}"><br><br>

    <a href="https://www.earq.com/hearing-health/articles/9-ways-to-protect-your-ears">To Get More!!</a><br>
    <br>
</div>
</section>
@include('header.footer')
