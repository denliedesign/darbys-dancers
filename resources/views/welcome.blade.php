@extends('layouts.app')
@section('content')

    <div style="background: black;">

    </div>

    <div class="brand-bg-gradient-yo" style="position: relative;">
        <div class="mx-0 px-0" style="overflow-x: hidden;">
            <div class="row">
                <div class="col-sm-5 px-0">
                    <img src="/images/header-darby-sm.jpeg" alt="" class="img-fluid">
                </div>
                <div class="col-sm-7 d-flex align-items-center justify-content-center font-hind">
                    <div class="px-4">
                        <h2>
                            Welcome to Darby’s Dancers Inclusive Performing Arts
                        </h2>
                        <p>
                            Darby’s Dancers is a 501(c)(3) organization dedicated to bringing the joy of the performing arts to as many children and young adults with physical and intellectual disabilities as possible.
                        </p>
                        <div class="btn btn-lg brand-bg-logo-blue shadow m-3 brand-btn" style="width: 175px;">
                            <a href="/darbys-studio-memberships" class="text-white text-decoration-none">Studio</a>
                        </div>
                        <div class="btn btn-lg brand-bg-logo-blue shadow m-3 brand-btn" style="width: 175px;">
                            <a href="/darbys-dancers-memberships" class="text-white text-decoration-none">Dancer</a>
                        </div>
                        <div class="btn btn-lg brand-bg-logo-blue shadow m-3 brand-btn" style="width: 175px;">
                            <a href="/volunteer-information" class="text-white text-decoration-none">Volunteer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--        <div style="height: 34px;"></div>--}}
        <div class="custom-shape-divider-bottom-1665960448">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="container py-5" style="position: relative; height: 425px;">
        <h3 class="lead font-fira" style="font-size: 2.75em; position: absolute; top: 27%; left: 5%;">Darby’s Dancers gain <span class="brand-bg-dark-blue text-white px-4 fw-bold">confidence</span> and lifelong<br>friends, all while feeling like a star.</h3>
        <img src="/images/img23-removebg.png" alt="" style="position: absolute; bottom: -20%; right: 3%; z-index: 2;">
    </div>

    <div class="brand-bg-gradient-yo" style="position: relative;">
        <div class="container">
            <div class="row py-5">
                <div class="col-sm">
                    <img src="/images/member-dancer.jpg" alt="" class="img-fluid rounded mb-3">
                    <h2 class="my-0 py-0 text-center">Dancer's Memberships</h2>
                    <p class="text-center py-0 my-0">
                        We welcome all dancers, big and small, to join our membership.
                    </p>
                    <p class="text-center font-fira py-0 my-0">
                        An inclusive membership that benefits all to gain confidence, coordination, strength, and lifelong friendships.
                    </p>
                    <div class="d-flex justify-content-center font-hind">
                        <div class="btn btn-lg brand-bg-logo-blue shadow m-3 brand-btn" style="width: 175px;">
                            <a href="/darbys-dancers-memberships" class="text-white text-decoration-none">Join Today</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <img src="/images/membership-studios.jpg" alt="" class="img-fluid rounded mb-3">
                    <h2 class="my-0 py-0 text-center">Studio Memberships</h2>
                    <p class="text-center py-0 my-0">
                        Join the Darby’s Dancers (DD) studios movement today!
                    </p>
                    <p class="text-center font-fira py-0 my-0">
                        Dance Studios and Owners are the lifeblood of our organization and make it possible to keep the mission alive..
                    </p>
                    <div class="d-flex justify-content-center font-hind">
                        <div class="btn btn-lg brand-bg-logo-blue shadow m-3 brand-btn" style="width: 175px;">
                            <a href="/darbys-studio-memberships" class="text-white text-decoration-none">Sign Up Here</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <img src="/images/membership-resource.jpg" alt="" class="img-fluid rounded mb-3">
                    <h2 class="my-0 py-0 text-center">Available DD Resources</h2>
                    <p class="text-center py-0 my-0">
                        Join today for members only Darby’s Dancers Resources & benefits.
                    </p>
                    <p class="text-center font-fira py-0 my-0">
                        As a member of Darby’s Dancers, you can shop here to find apparel, dance routines, support groups, and much more!
                    </p>
                    <div class="d-flex justify-content-center font-hind">
                        <div class="btn btn-lg brand-bg-logo-blue shadow m-3 brand-btn" style="width: 175px;">
                            <a href="/" class="text-white text-decoration-none">Learn More</a>
                        </div>
                    </div>
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

    <div>
        <div class="container py-5">
            {{--            <h2 class="text-center">Testimonials</h2>--}}
            <div style="position: relative;">
                <div class="brand-bg-gradient-blue text-white px-5 py-4">
                    <div class="fw-bold font-fira" style="font-size: 3.5em; position: absolute; top: 0; left: 20px;">"</div>
                    <div class="fw-bold font-fira" style="font-size: 3.5em; position: absolute; bottom: 74px; right: 20px;">"</div>
                    <p class="p-0 m-0 font-fira">
                        I love dance class! It feels like a party every week and all those mirrors on the wall just double the fun because it looks like I have twice as many friends! Dancing is great because it lets you move around in creative ways to music and hang out with friends! That’s one of life’s best combinations—music and friends! I am so thankful for my family that enjoys music with me and has taught me about all different kinds of music. We have family dance parties a lot and enjoying those even more since I started Darby’s Dancers three years ago.
                    </p>
                    <div style="height: 74px;"></div>
                    <div class="custom-shape-divider-bottom-1666106476">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M600,16.8c0-8.11-8.88-13.2-19.92-13.2H0V120H1200V3.6H619.92C608.88,3.6,600,8.66,600,16.8Z" class="shape-fill"></path>
                        </svg>
                    </div>
                </div>
                <p style="line-height: 0.9; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);" class="text-center">
                    <small>
                        <strong>Carly Jamieson</strong>
                        <br>
                        <span class="text-muted">Darby's Dancers student</span>
                    </small>
                </p>
            </div>
        </div>
    </div>

    <div class="brand-bg-gradient-yo" style="position: relative;">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-4">
                    <img src="/images/img20.jpeg" alt="" class="img-fluid shadow rounded">
                </div>
                <div class="col-sm-8 d-flex align-items-center">
                    <h3 class="lead text-center font-fira" style="font-size: 2.75em; font-weight: lighter !important;">
                        Our goal is to give <span class="text-white px-4 fw-bold brand-bg-dark-blue">every child</span> the tools to discover all that dance has to offer.
                    </h3>
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

    <div>
        <div class="container py-5">
            {{--            <h2 class="text-center">Testimonials</h2>--}}
            <div style="position: relative;">
                <div class="brand-bg-gradient-blue text-white px-5 py-4">
                    <div class="fw-bold font-fira" style="font-size: 3.5em; position: absolute; top: 0; left: 20px;">"</div>
                    <div class="fw-bold font-fira" style="font-size: 3.5em; position: absolute; bottom: 74px; right: 20px;">"</div>
                    <p class="p-0 m-0 font-fira">

                        During our class, we give each dancer the opportunity to dance across the floor one at a time. Each girl has a smile that extends beyond the walls of our studio when she takes her turn to glide, turn or leap across the room. Those smiles melt my heart.
                    </p>
                    <div style="height: 74px;"></div>
                    <div class="custom-shape-divider-bottom-1666106476">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M600,16.8c0-8.11-8.88-13.2-19.92-13.2H0V120H1200V3.6H619.92C608.88,3.6,600,8.66,600,16.8Z" class="shape-fill"></path>
                        </svg>
                    </div>
                </div>
                <p style="line-height: 0.9; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);" class="text-center">
                    <small>
                        <strong>Ashley Slemp, Inspire Dance Studio Owner</strong>
                        <br>
                        <span class="text-muted">Darby's Dancers Fredericksburg</span>
                    </small>
                </p>
            </div>
        </div>
    </div>

    <div class="brand-bg-gradient-yo" style="position: relative;">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm d-flex align-items-center">
                    <div class="text-center">
                        <h3 class="lead font-fira" style="font-size: 2.75em;">"Be Brave Like Me!"</h3>
                        <p>
                            Dance connected Darby with friends and strangers alike, and she encouraged anyone who was having a problem or facing an adversity to “be brave like me!”.
                        </p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/img9.jpeg" alt="" class="img-fluid shadow rounded">
                    </div>
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

    <div>
        <div class="container py-5">
            {{--            <h2 class="text-center">Testimonials</h2>--}}
            <div style="position: relative;">
                <div class="brand-bg-gradient-blue text-white px-5 py-4">
                    <div class="fw-bold font-fira" style="font-size: 3.5em; position: absolute; top: 0; left: 20px;">"</div>
                    <div class="fw-bold font-fira" style="font-size: 3.5em; position: absolute; bottom: 74px; right: 20px;">"</div>
                    <p class="p-0 m-0 font-fira">
                        Our family wishes to thank you for the impact and joy Darby's Dancers has brought to our lives. Daisy tried on her first recital dress and hasn't stopped beaming. She is making lasting friendships and dancing is a joy that carries over through the week
                    </p>
                    <div style="height: 74px;"></div>
                    <div class="custom-shape-divider-bottom-1666106476">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M600,16.8c0-8.11-8.88-13.2-19.92-13.2H0V120H1200V3.6H619.92C608.88,3.6,600,8.66,600,16.8Z" class="shape-fill"></path>
                        </svg>
                    </div>
                </div>
                <p style="line-height: 0.9; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);" class="text-center">
                    <small>
                        <strong>Nick and Diann Lee</strong>
                        <br>
                        <span class="text-muted">Darby's Dancers parents</span>
                    </small>
                </p>
            </div>
        </div>
    </div>

    <div class="brand-bg-gradient-yo" style="position: relative;">
        <div class="container py-5">
            <div class="">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h3 class="lead font-fira" style="font-size: 2.75em;">Diversity, Equity, Inclusion</h3>
                        <p>
                            <strong>Diversity</strong> is having a seat at the table, <strong>inclusion</strong> is having a voice, and <strong>belonging</strong> is having that voice be heard.
                        </p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="">
                        <img src="/images/img10.jpeg" alt="" class="img-fluid shadow rounded" style="height: 303px; width: auto;">
                        <img src="/images/img14.jpeg" alt="" class="img-fluid shadow rounded" style="height: 303px; width: auto;">
                    </div>
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

    <div>
        <div class="container py-5">
            <h2 class="text-center">Our Partners</h2>
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 row-cols-lg-6">
                <img src="/images/partner-1-long-stems.jpg" alt="" class="img-fluid">
                <img src="/images/partner-2-akada.jpg" alt="" class="img-fluid">
                <img src="/images/partner-3-dance-life.jpg" alt="" class="img-fluid">
                <img src="/images/partner-4-mtjgd.jpg" alt="" class="img-fluid">
                <img src="/images/partner-5-rhythm-works.jpg" alt="" class="img-fluid">
                <img src="/images/partner-6-upaf.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>


@endsection
