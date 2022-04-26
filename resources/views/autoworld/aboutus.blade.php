@extends('autoworld.masterAuto.masterNav')

@section('main')
    <div class="container-xl" style="padding: 15px 0">
        <div class="col-12">
            <div class="card" >
                <article id="single-page">
                    <h1 class="entry-title text-center font-weight-light">ABOUT US</h1>
                    <div class="entry-content">
                        <div class="intro">
                            <h2 class="text-warning text-center">AutoWorld - Kingdom of high-rise cars</h2>
                            <p class="text-center font-italic">AutoWorld Company ( <b>AutoWorld</b> ) is a unit specializing in the sale of used high-rise vehicles.</p>
                            <img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="Logo Images">
                        </div>
                       {{-- ///////////////////////////////////////// MISSION //////////////////////--}}
                        <div class="mission-content" style="margin: 25px 0">
                            <div class="container ">
                                <div class="row ">
                                    <div class="border border-warning rounded col" style="margin:0 10px ">
                                        <h3 class="text-warning text-center">I.Mission</h3>
                                       <p>- In the context of the <b>used car market</b>,it is not really transparent and safe for customers.</p>
                                        <p>- We always keep in mind that we only bring to our customers <b>beautiful cars</b>, <b>quality</b> and <b>legally clear</b> cars, saying no to faulty cars.</p>
                                    </div>
                                    <div class="border border-warning rounded col" style="margin:0 10px ">
                                        <h3 class="text-warning text-center">II.Business Product Line</h3>
                                        <p class="font-italic">Specializing in trading high-rise vehicles such as:</p>
                                        <p>- <b>Toyota Fortuner</b></p>
                                        <p>- <b>Ford Everest</b></p>
                                        <p>- <b>Hyundai Santafe</b></p>
                                        <p>- <b>Honda CRV</b></p>
                                        <p>- <b>Mazda CX5…</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--///////////////////////////////// VISION ///////////////////////////////--}}
                        <div class="company-vision" style="margin: 25px 10px">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="text-warning">III.Vision</h3>
                                        <p>- Become the most loved and trusted used car business brand in Vietnam</p>
                                    </div>
                                    <div class="col">
                                        <img class="img-fluid" src="{{ asset('images/aboutus/tamnhin.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--///////////////////////////////// Core values ///////////////////////////////--}}
                        <div class="core-values" style="margin: 25px 10px">
                            <div class="container">
                                <h3 class="text-warning text-center">IV.Core Values</h3><br>
                                <div class="row">
                                    <div class="col">
                                        <h3 class="text-warning text-center">Trust</h3><br>
                                        <img class="img-fluid" src="{{ asset('images/aboutus/trust.jpg') }}" alt="">
                                    </div>
                                    <div class="col">
                                        <h3 class="text-warning text-center">Sincere</h3><br>
                                        <img class="img-fluid" src="{{ asset('images/aboutus/hand.png') }}" alt="">
                                    </div>
                                    <div class="col">
                                        <h3 class="text-warning text-center">Kind</h3><br>
                                        <img class="img-fluid" src="{{ asset('images/aboutus/couple1024x683.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--///////////////////////////////// Staff ///////////////////////////////--}}
                        <div class="company-vision" style="margin: 25px 10px">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="text-warning">III.Staff</h3>
                                        <p>- Personnel team with dozens of enthusiastic and dynamic people.</p>
                                        <p>- Highly qualified technical personnel with seniority in the industry.</p>
                                    </div>
                                    <div class="col">
                                        <img class="img-fluid" src="{{ asset('images/aboutus/nhan-su-1024x531.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--/////////////////////////////////  Infrastructure ///////////////////////////////--}}
                        <div class="company-vision" style="margin: 25px 10px">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <img class="img-fluid" src="{{ asset('images/aboutus/co-so-vat-chat-1024x768.jpg') }}" alt="">
                                    </div>
                                    <div class="col">
                                        <h3 class="text-warning">III.Infrastructure</h3>
                                        <p>- Company has an area of more than thousand square meters, located in an extremely favorable location.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--/////////////////////////////////  Location ///////////////////////////////--}}
                        <div class="container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d465.5277388833328!2d105.7898857!3d21.023805!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b329f68977%3A0x6ddf5ff1e829fc56!2zxJDhuqFpIEjhu41jIEdyZWVud2ljaA!5e0!3m2!1svi!2s!4v1650802581905!5m2!1svi!2s"
                                width="100%" height="600" style="border:0;"
                                allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
