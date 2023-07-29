@extends("layout.header-footer")

@section("tiltle")
tec_web Contact 
@endsection
@section("layout_H_F")
    <!-- contact location link area -->
    <div class="contact-link">
        <div class="container">
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="contact-item">
                            <div class="left-item">
                                <a href="#">
									<i class="fas fa-map-marker-alt"></i>
								</a>
                            </div>
                            <div class="right-item">
                                <p>Sector # 48,123 Street,karachi City pakistan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="contact-item">
                            <div class="left-item">
                                <a href="#">
									<i class="fas fa-phone"></i>
								</a>
                            </div>
                            <div class="right-item">
                                <p>033453210, 0078-98-954 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="contact-item">
                            <div class="left-item">
                                <a href="#">
									<i class="fas fa-envelope"></i>
								</a>
                            </div>
                            <div class="right-item">
                                <p>azhar@gmail.com www,azhar@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-location">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="location-map">
                        <div id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7235.14477189155!2d66.93341763744286!3d24.94663323937887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb36b3d57aeb849%3A0xf6cdaeb8344f76b1!2sNaval%20Colony%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1690635652409!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="contact-form">
                        <form action="#" method="POST" id="commentform" class="comment-form">
                            <input type="text" name="name" class="" placeholder="Name*">
                            <input type="email" name="email" class="" placeholder="Email*">
                            <input type="text" name="subject" class="" placeholder="Subject*">
                            <textarea name="text" id="role" cols="30" rows="10" placeholder="Message*"></textarea>
                            <button type="submit" class="contact-btn">
								<span>Submit Now</span>
							</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  contact location link ends -->
@endsection
   