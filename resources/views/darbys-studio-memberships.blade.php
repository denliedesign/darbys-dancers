@extends('layouts.app')
@section('content')

    {{--    <div class="banner-wrap">--}}
    {{--        <div class="banner"></div>--}}
    {{--    </div>--}}

    <div class="brand-bg-gradient-yo d-flex align-items-center justify-content-center" style="position: relative; height: 100%;">
        <div>
            <h2 class="text-center py-5">Studio Memberships</h2>
            <div style="height: 34px;"></div>
            <div class="custom-shape-divider-bottom-1665960448">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-sm">
                <div class="d-flex align-items-center" style="height: 100%;">
                    <div>
                        <h3 class="lead font-fira" style="font-size: 2.75em;">Support Darby's Dancers</h3>
                        <p class="m-0 p-0">
                            <span class="font-archivo-plain">Darbys’ Dancers relies on the membership and volunteers of dance studios, parents and the community.</span>
                            The National DD Organization is committed to providing the best programs possible to help our dancers grow and excel in their physical, social, and emotional development.  We require no minimum of children with special needs to get started and enroll your studio as a member.
                            <br><br>
                            Your memberships are designed to help and provide as many of the tools that are needed to grow and nurture any Studio Member’s Darby’s Program.                            <br><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="d-flex justify-content-center">
                    <img src="/images/member-studios.jpg" alt="" class="img-fluid shadow rounded">
                </div>
            </div>
        </div>
    </div>

    <div class="brand-bg-gradient-yo" style="position: relative;">
        <div class="container py-5">
            <div>
                <div class="text-center">
                    <h3 class="lead font-fira" style="font-size: 2.75em;">Membership means being <span class="brand-bg-dark-blue text-white px-4 fw-bold">included</span> in all parts of Darby's Dancers</h3>
                    <p>
                        Darby’s Dancers is not just a dance class, but a part of a movement to include all children, regardless of special needs, race, sex, or any other way to subcategorize a person. We believe in changing the world and how the world views inclusion and community.
                    </p>
                </div>
            </div>
        </div>
        <div style="height: 34px;"></div>
        <div class="custom-shape-divider-bottom-1665960448">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="container">
        <div class="my-5">
            {{--            <h3 class="lead font-fira text-center" style="font-size: 2.75em;">Dance Studio Membership Options</h3>--}}
            <h2 class="text-center">Dance Studio Membership Options</h2>
            <p class="text-center">
                All Studio Members will receive recognition as part of the national organization which promotes the participation in the performing arts by children and young adults with diverse learning needs.
{{--                We offer two membership packages listed below.--}}
                <br><br>
                Please contact us if you would like to talk
                through membership details.
{{--                through your options to pick the best package for your dance studio and community offerings. --}}
                You’ll get to speak directly with Valerie Jones, Co-founder, to answer any and all of your questions regarding Darby’s Dancers.
            </p>
            <div class="row">
{{--                <div class="col-sm">--}}
{{--                    <div class="p-4 m-4 shadow rounded" style="border: 6px solid #A5AEB9;">--}}
{{--                        <div class="text-center"><ion-icon name="home" style="font-size: 3em; background: #A5AEB9; border-radius: 50%; padding: 12px;"></ion-icon></div>--}}
{{--                        <p class="text-center">--}}
{{--                            <strong>STUDIO SILVER MEMBERSHIP</strong>--}}
{{--                            <br>--}}
{{--                            Everything you need to get your program started off on the right Pointe--}}
{{--                        </p>--}}
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <ul>--}}
{{--                                <li>Silver Membership Plan</li>--}}
{{--                                <li>Member Only Resources</li>--}}
{{--                                <li>National member as a 501(c)(3)</li>--}}
{{--                                <li>Story telling with Valerie</li>--}}
{{--                                <li>Welcome Kit & DD Tools</li>--}}
{{--                                <li>Access to DD Apparel</li>--}}
{{--                                <li>Annual Memberships</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-sm"></div>
                <div class="col-sm">
                    <div class="p-4 m-4 shadow rounded" style="border: 6px solid #FFC300;">
                        <div class="text-center"><ion-icon name="home" style="font-size: 3em; background: #FFC300; border-radius: 50%; padding: 12px;"></ion-icon></div>
                        <p class="text-center">
                            <strong><span class="realistic-marker-highlight">STUDIO MEMBERSHIP</span></strong>
{{--                            <br>Full access to the offerings in the Silver Membership PLUS additional tools--}}
                        </p>
                        <div class="d-flex justify-content-center">
                            <ul>
                                <li>Gold Membership Plan</li>
                                <li>Member Only Resources</li>
                                <li>National member as a 501(c)(3)</li>
                                <li>Direct-to-Parent Support</li>
                                <li>Virtual Workshop</li>
                                <li>15% Discount on Apparel</li>
                                <li>Annual Memberships</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm"></div>
            </div>
        </div>
    </div>


    <div class="brand-bg-gradient-yo my-5" style="position: relative;">
        <div class="container py-5">
            <h2 class="text-center">Studio Enrollment Form</h2>
            @include('_register')
{{--            @include('enroll.create')--}}
        </div>
        <div style="height: 34px;"></div>
        <div class="custom-shape-divider-bottom-1665960448">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>


    <div class="container my-5">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Studio Expectations
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>A dance studio willing to donate studio space and a teacher one hour a week</li>
                            <li>Dance education classes will be taught through the studio’s outlets (in the studio and/or online) by a certified dance instructor</li>
                            <li>Recruit teen volunteers permitted to assist participants</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Code of Conduct
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        A formal agreement that all parties agree to conduct selves in a professional and respectful manner regarding each child and their family with safety being the top priority.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Fees
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Dance Studio has an annual fee of $495.00
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Volunteer Requirements
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>One teenage volunteer for each special needs dancer</li>
                            <li>A person to coordinate your fund-raising efforts</li>
                            <li>A communication coordinator between the national organization, dance studio and the participants</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Annual Dues
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Pay annual membership dues on-time</li>
                            <li>Ensure dance participants are registered and paid on-time</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <svg xmlns="//www.w3.org/2000/svg" version="1.1" class="svg-filters" style="display:none;">
        <defs>
            <filter id="marker-shape">
                <feTurbulence type="fractalNoise" baseFrequency="0 0.15" numOctaves="1" result="warp" />
                <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="30" in="SourceGraphic" in2="warp" />
            </filter>
        </defs>
    </svg>

@endsection
