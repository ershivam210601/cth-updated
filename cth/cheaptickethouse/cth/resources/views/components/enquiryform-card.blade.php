<!--====== REQUEST A QUOTE ==========-->
<section>
    <div class="tb-space cus-pack-form">
        <div class="rows container">
            <div class="spe-title cus-title">
                <h2>Book your <span>Custom Package</span> Now!</h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p><?php echo $subtitle; ?></p>
            </div>
            <div class="cus-book-form form_1">
                    <form class="contact__form v2-search-form" method="post" action="/enquirenow">
                        @csrf
                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                            Thank you for arranging a wonderful trip for us! Our team will contact you shortly!
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text"  class="validate" name="name" placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="number"  class="validate" name="phone" placeholder="Enter your phone" required>
                            </div>
                            <div class="input-field col s6">
                                <input type="email"  class="validate" name="email" placeholder="Enter your email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="submit" value="Book Now" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</section>
