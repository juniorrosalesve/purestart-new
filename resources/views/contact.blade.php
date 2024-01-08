<div class="h-[150px] md:h-[210px] py-7 wrapper bg-primary">
    <div class="flex items-center h-full">
        <h1 class="40% md:35% 2xl:w-[800px] mx-auto text-2xl md:text-5xl abril text-left text-pastel -mt-3">
            Drop Us A Line! <br /> 
            @for ($i = 0; $i < 5; $i++)
                &nbsp;
            @endfor
            <span class="lato-thin italic">
                We will get back to you soon!!
            </span>
        </h1>
    </div>
    @for ($i = 1; $i < 10; $i++)
        <div class="burbuja"><span class="dot"></span></div>
    @endfor
</div>

<div class="bg-contact md:-ml-10" id="allContact">
    <video class="bg-video-contact w-full" loop autoplay muted playsinline>
        <source src="{{ asset('images/llave.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <form action="{{ route('mail-contact') }}" method="POST" id="contactUsMail">
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
    </form>
</div>
<div class="text-center py-10 bg-pastel hidden" id="contact_info">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10 mx-auto"><path fill="#72B59A" d="M22 5.5H9C7.9 5.5 7 6.4 7 7.5V16.5C7 17.61 7.9 18.5 9 18.5H22C23.11 18.5 24 17.61 24 16.5V7.5C24 6.4 23.11 5.5 22 5.5M22 16.5H9V9.17L15.5 12.5L22 9.17V16.5M15.5 10.81L9 7.5H22L15.5 10.81M5 16.5C5 16.67 5.03 16.83 5.05 17H1C.448 17 0 16.55 0 16S.448 15 1 15H5V16.5M3 7H5.05C5.03 7.17 5 7.33 5 7.5V9H3C2.45 9 2 8.55 2 8S2.45 7 3 7M1 12C1 11.45 1.45 11 2 11H5V13H2C1.45 13 1 12.55 1 12Z" /></svg>
    <p class="text-lg lato-regular text-primary mt-5 text-center">
        Information Freshly Submited. Talk to you soon!! <br />
        THANK YOU!
    </p>
    <img src="{{ asset('images/gg.png') }}" alt="dada" class="mx-auto w-[220px] my-7">
    <p class="lato-light mt-7" style="color:#6c938c">The PS Team</p>
    <hr style="width:90px; border-color:#6c938c; margin:auto;" />
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
                document.getElementById('allContact').classList.add('hidden');
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