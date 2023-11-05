<div class="h-[150px] md:h-[210px] py-10 wrapper bg-primary italic">
    <h1 class="w-full text-3xl md:text-5xl abril text-center text-pastel -mt-3">
        Drop Us A Line!  <br /> 
        <span class="lato-thin">
            We will get back to you soon!!
        </span>
    </h1>
</div>
<br /><br /><br /><br /><br /><br /><br /><br /><br />
<div class="bg-contact -mt-5">
    <video class="bg-video-contact w-full" loop autoplay muted playsinline>
        <source src="{{ asset('images/llave.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <form action="{{ route('mail-contact') }}" method="POST" class="bg  -contact-green" id="contactUsMail">
        <div class="grid grid-cols-1 w-[90%] md:w-[50%] mx-auto" id="contact_inputs">
            <input type="text" name="name" class="mt-10 input-contact" placeholder="Full Name" data-aos="fade-in" data-aos-duration="500">
            <input type="text" name="business" class="mt-5 input-contact" placeholder="Business Name" data-aos="fade-in" data-aos-duration="500">
            <input type="text" name="email" class="mt-5 input-contact" placeholder="Email Address" data-aos="fade-in" data-aos-duration="500">
            <input type="text" name="phone" class="mt-5 input-contact" placeholder="Phone Number" data-aos="fade-in" data-aos-duration="500">
        </div>
        <div class="flex justify-center mt-10" id="btn_contact_container">
            <div>
                <button type="submit" class="btn-contact uppercase bg-[#55957a]" id="btn_contact" data-aos="fade-up" data-aos-duration="500">Submit</button>
                <br /><br />
            </div>
        </div>
        <div class="text-center text-[#06446c] py-20 hidden" id="contact_info" style="background:rgb(67, 111, 92, 0.5)">
            <br />
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10 mx-auto"><path fill="#FDFDF2" d="M22 5.5H9C7.9 5.5 7 6.4 7 7.5V16.5C7 17.61 7.9 18.5 9 18.5H22C23.11 18.5 24 17.61 24 16.5V7.5C24 6.4 23.11 5.5 22 5.5M22 16.5H9V9.17L15.5 12.5L22 9.17V16.5M15.5 10.81L9 7.5H22L15.5 10.81M5 16.5C5 16.67 5.03 16.83 5.05 17H1C.448 17 0 16.55 0 16S.448 15 1 15H5V16.5M3 7H5.05C5.03 7.17 5 7.33 5 7.5V9H3C2.45 9 2 8.55 2 8S2.45 7 3 7M1 12C1 11.45 1.45 11 2 11H5V13H2C1.45 13 1 12.55 1 12Z" /></svg>
            <h1 class="text-4xl lato-medium text-pastel">
                THANK YOU!
            </h1>
            <p class="text-lg lato-regular text-pastel mt-5">Information Freshly Submited. Talk to you soon!!</p>
        </div>
    </form>
</div>
<script>
    document.getElementById('contactUsMail').addEventListener('submit', function() {
        event.preventDefault();
        document.getElementById('btn_contact').innerHTML  =   'Loading...';
        document.getElementById('btn_contact').disabled   =   true;
        axios.post('{{ route('mail-contact') }}', {
            name: this.elements.name.value,
            email: this.elements.email.value,
            phone: this.elements.phone.value,
            business: this.elements.business.value,
        })
        .then(function (res) {
            if(res.data == 1) {
                document.getElementById('btn_contact_container').classList.add('hidden');
                document.getElementById('contact_inputs').classList.add('hidden');
                document.getElementById('contact_info').classList.remove('hidden');
            }
            else {
                document.getElementById('btn_contact').innerHTML  =   'Retry submit';
                document.getElementById('btn_contact').disabled   =   false;
            }
        })
        .catch(function (error) {
            console.log(error);
            document.getElementById('btn_contact').innerHTML  =   'Oops an error occurred, retry';
            document.getElementById('btn_contact').disabled   =   false;
        });
    });
</script>