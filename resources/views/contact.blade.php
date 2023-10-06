@extends('layouts.theme')
@section('body')
    <div class="bg-primary text-center py-20 w-full">
        <h1 class="text-3xl md:text-4xl title_about md:w-[60%] mx-auto">DROP US A LINE. <br /> WE WILL GET BACK TO YOU SOON!</h1>
    </div>
    <div class="bg-contact">
        <form action="{{ route('mail-contact') }}" method="POST" class="bg-contact-green" id="contactUsMail">
            <div class="grid grid-cols-1 w-[90%] md:w-[50%] mx-auto">
                <input type="text" name="name" class="mt-10 input-suscribe" placeholder="Full Name">
                <input type="text" name="business" class="mt-5 input-suscribe" placeholder="Business Name">
                <input type="text" name="email" class="mt-5 input-suscribe" placeholder="Email Address">
                <input type="text" name="phone" class="mt-5 input-suscribe" placeholder="Phone Number">
            </div>
            <div class="flex justify-center mt-10" id="btn_contact_container">
                <button type="button" class="btn-suscribe uppercase bg-[#55957a]" id="btn_contact">Submit</button>
            </div>
            <div class="text-center text-[#06446c] mt-10 hidden" id="contact_info" style="background:rgb(255, 255, 255, 0.5)">
                <h1 class="text-lg lato-light">We have successfully submitted the information, we will contact you soon!</h1>
                <h1 class="text-2xl lato-regular">Thank you!</h1>
            </div>
            <br />
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
                    document.getElementById('contact_info').classList.remove('hidden');
                }
                else {
                    document.getElementById('btn_contact').innerHTML  =   'Submit';
                    document.getElementById('btn_contact').disabled   =   false;
                }
            })
            .catch(function (error) {
                console.log(error);
            });
        });
    </script>
@endsection