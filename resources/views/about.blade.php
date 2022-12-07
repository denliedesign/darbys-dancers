@extends('layouts.app')
@section('content')

    <div class="brand-bg-gradient-yo d-flex align-items-center justify-content-center" style="position: relative; height: 100%;">
        <div>
            <h2 class="text-center py-5">About</h2>
            <div style="height: 34px;"></div>
            <div class="custom-shape-divider-bottom-1665960448">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="d-flex justify-content-center">
                    <video src="/images/about-darbys.mp4" type="video/mp4" controls="" style="width: auto; max-height: 100vh; transform: scale(0.9);"></video>
                </div>
            </div>
            <div class="col-sm d-flex align-items-center">
                <div>
                    <h3 class="lead font-fira" style="font-size: 2.75em;">Who We Are</h3>
                    <p>
                        Darby’s Dancers is a 501(c)(3) organization founded by the parents of Darby Jones of Huntsville, Alabama. Darby’s Dancers provides an opportunity for children with special needs to participate in the performing arts through dance education.
                        <br><br>At once-a-week classes, Darby’s Dancers learn all types of dance in a fun, encouraging atmosphere. Dancers in the program gain confidence, coordination, strength and lifelong friends, all while feeling like a star. DD also provides volunteer opportunities for teens. Our youth volunteers learn important lessons in responsibility and friendship by providing one-on-one assistance to a special needs dancer.
                        <br><br>DD classes are taught by volunteer dance instructors and take place in donated studio space. The charitable contributions of youth volunteers, dance instructors, community dance studios and local businesses allow DD to provide dance classes, supplies and costumes to dancers with special needs.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm d-flex align-items-center">
                <div>
                    <h3 class="lead font-fira" style="font-size: 2.75em;">Darby's Story</h3>
                    <p>
                        Darby Emma Jones (1999-2013) was born to Patrick and Valerie Jones of Huntsville, Alabama. Born with Down syndrome, a heart defect and leukemia, Darby lived a life full of passion, kindness, bravery, optimism, perseverance and loyalty. She never met a person she did not like. She saw no differences in people regardless of their age, race, appearance, or disability. Darby was an avid dancer, musician, reader and writer. She never had a bad day, despite her challenges.
                        <br><br>In 2008, while being treated for her third bout of leukemia and without a hair on her head, she began dancing in a silver tiara and medical face mask at Huntsville’s Merrimack Hall Performing Arts Center in a class designed for children with special needs. This led to many performance opportunities on stage at Merrimack Hall: in the recital, in holiday shows, in dance competitions, at outdoor cultural events, nursing homes, fundraisers, talent shows and anywhere she could drum up an audience. She was a star in every sense of the word. She danced with her friends and was always ready to lend a helping hand to another student who might be afraid or uncertain. One thing always radiated from her sweet face: pure joy! Darby danced her last dance at Children’s Hospital of Alabama. Because she was hospitalized, Darby missed her beloved dance recital in the spring of 2013. However, the staff and her friends from Merrimack came to the hospital and the girls put on a show for the hospital staff, patients and friends. She touched the life of every person in the room as she always did, without ever knowing or trying to do it. She lost her brave fight with leukemia six months later but she never complained a day.
                        <br><br>She handled her illness with dignity and grace to the very end. Darby’s life was short in duration but packed every day with a passion for living, loving and making others happy. Her dancing represented the joy she felt in her heart and the impact she made on people of all ages and kinds continues today. It is the belief of Darby’s parents that it would be Darby’s greatest desire to have children like herself enjoy dancing like she did. Darby’s Dancers was created to carry on Darby’s beautiful legacy and to bring joy to as many children with special needs as possible. Darby’s infectious smile and twinkling eyes are shining down from Heaven as she spreads her seeds of love and joy to all our future stars!
                    </p>
                </div>
            </div>
            <div class="col-sm">
                <div>
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="/images/img1.jpeg" alt="darby" class="img-fluid shadow rounded">
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="/images/img11.jpeg" alt="darby" class="img-fluid shadow rounded mt-3">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="brand-bg-gradient-yo mt-5">
        <div class="container py-5">
            <div>
                <div class="row pb-3">
                    <div class="col-sm text-center">
                        <div type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><h2 class="txt-gal brand-txt-logo-blue">Darby Jones Gallery</h2></div>
                    </div>
                    <div class="col-sm text-center">
                        <div type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1" aria-current="true" aria-label="Slide 2"><h2 class="txt-gal brand-txt-logo-blue">Darby's Dancers Gallery</h2></div>
                    </div>
                </div>
            </div>
            <!-- CAROUSEL -->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 d-flex justify-content-center">
                            <img src="/images/gallery1.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/gallery2.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/gallery3.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/gallery4.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/gallery5.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/gallery6.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/gallery7.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/gallery8.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/gallery9.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/gallery10.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/gallery11.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/gallery12.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/gallery13.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/gallery14.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/gallery15.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/gallery16.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/gallery17.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/gallery18.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/gallery19.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 d-flex justify-content-center">
                            <img src="/images/photos1.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1 px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/photos2.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/photos3.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/photos4.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/photos5.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/photos6.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/photos7.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/photos8.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/photos9.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/photos10.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/photos11.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/photos12.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/photos13.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/photos14.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/photos15.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/photos16.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/photos17.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/photos18.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                            <img src="/images/photos19.jpg" alt="" class="img-fluid my-1 shadow rounded px-0 mx-1" style="height: 215px; width: auto;">
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CAROUSEL -->
        </div>
    </div>



@endsection
