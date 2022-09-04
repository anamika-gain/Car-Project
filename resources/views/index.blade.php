
@extends('layouts.app')
@section('content')
      <div id="banner_v21">
        <div class="banner-wrap">
          <div class="video_banner">
            <div class="vidMuteDiv toggleBtnDown" onclick="toggleMute()">
              <i class="fa fa-volume-off" aria-hidden="true"></i>
            </div>
            <video
              playsinline=""
              autoplay=""
              loop=""
              muted="true"
              id="SliderVideo"
            >
              <source src="./admin/uploaded_photos/video.mp4" />
              <p class="warning">Your browser does not support HTML5 video.</p>
            </video>
          </div>
          <div class="banner-title webbs-banner-title video_text_box">
            <div class="container-center">
              <div class="title-box-banner">
                <div class="banner-title-heading">
                  <h2 class="fadeIn-3">AYAAN MOTORS LTD</h2>
                  <div class="banner-info fadeIn-3">
                    <p>Sports &amp; Prestige Specialists</p>
                  </div>
                  <div class="fadeIn-3">
                    <a
                      href="/used/cars/west-bromwich/"
                      class="btn btn-outline details_btn sliderbtn"
                    >
                      <span>SHOWROOM</span></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            id="heroImage_v21"
            class="owl-carousel owl-theme image_banner owl-loaded"
          >
            <div class="owl-stage-outer">
              <div
                class="owl-stage"
                style="
                  transform: translate3d(-2020px, 0px, 0px);
                  transition: all 0s ease 0s;
                  width: 3535px;
                "
              >
                <div class="owl-item cloned" style="width: 505px">
                  <div
                    class="item"
                    style="
                      background-image: url(./admin/uploaded_photos/0_2_banner.jpg);
                    "
                  >
                    <div class="banner-title webbs-banner-title">
                      <div class="container-center">
                        <div class="title-box-banner">
                          <div class="banner-title-heading">
                            <h2 class="fadeIn-3">AYAAN MOTORS LTD</h2>
                            <div class="banner-info fadeIn-3">
                              <p>Prestige at its best</p>
                            </div>
                            <div class="fadeIn-3">
                              <a
                                href="/used/cars/west-bromwich/"
                                class="btn btn-outline details_btn sliderbtn"
                              >
                                <span>SHOWROOM</span></a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item cloned" style="width: 505px">
                  <div
                    class="item"
                    style="
                      background-image: url(./admin/uploaded_photos/0_3_banner.jpg);
                    "
                  >
                    <div class="banner-title webbs-banner-title">
                      <div class="container-center"></div>
                    </div>
                  </div>
                </div>
                <div class="owl-item" style="width: 505px">
                  <div
                    class="item"
                    style="
                      background-image: url(./admin/uploaded_photos/0_1_banner.jpg);
                    "
                  >
                    <div class="banner-title webbs-banner-title">
                      <div class="container-center">
                        <div class="title-box-banner">
                          <div class="banner-title-heading">
                            <h2 class="fadeIn-3">AYAAN MOTORS LTD</h2>
                            <div class="banner-info fadeIn-3">
                              <p>Sports &amp; Prestige Specialists</p>
                            </div>
                            <div class="fadeIn-3">
                              <a
                                href="/used/cars/west-bromwich/"
                                class="btn btn-outline details_btn sliderbtn"
                              >
                                <span>SHOWROOM</span></a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item" style="width: 505px">
                  <div
                    class="item"
                    style="
                      background-image: url(./admin/uploaded_photos/0_2_banner.jpg);
                    "
                  >
                    <div class="banner-title webbs-banner-title">
                      <div class="container-center">
                        <div class="title-box-banner">
                          <div class="banner-title-heading">
                            <h2 class="fadeIn-3">AYAAN MOTORS LTD</h2>
                            <div class="banner-info fadeIn-3">
                              <p>Prestige at its best</p>
                            </div>
                            <div class="fadeIn-3">
                              <a
                                href="/used/cars/west-bromwich/"
                                class="btn btn-outline details_btn sliderbtn"
                              >
                                <span>SHOWROOM</span></a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item active" style="width: 505px">
                  <div
                    class="item"
                    style="
                      background-image: url(./admin/uploaded_photos/0_3_banner.jpg);
                    "
                  >
                    <div class="banner-title webbs-banner-title">
                      <div class="container-center"></div>
                    </div>
                  </div>
                </div>
                <div class="owl-item cloned" style="width: 505px">
                  <div
                    class="item"
                    style="
                      background-image: url(./admin/uploaded_photos/0_1_banner.jpg);
                    "
                  >
                    <div class="banner-title webbs-banner-title">
                      <div class="container-center">
                        <div class="title-box-banner">
                          <div class="banner-title-heading">
                            <h2 class="fadeIn-3">AYAAN MOTORS LTD</h2>
                            <div class="banner-info fadeIn-3">
                              <p>Sports &amp; Prestige Specialists</p>
                            </div>
                            <div class="fadeIn-3">
                              <a
                                href="/used/cars/west-bromwich/"
                                class="btn btn-outline details_btn sliderbtn"
                              >
                                <span>SHOWROOM</span></a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-item cloned" style="width: 505px">
                  <div
                    class="item"
                    style="
                      background-image: url(./admin/uploaded_photos/0_2_banner.jpg);
                    "
                  >
                    <div class="banner-title webbs-banner-title">
                      <div class="container-center">
                        <div class="title-box-banner">
                          <div class="banner-title-heading">
                            <h2 class="fadeIn-3">AYAAN MOTORS LTD</h2>
                            <div class="banner-info fadeIn-3">
                              <p>Prestige at its best</p>
                            </div>
                            <div class="fadeIn-3">
                              <a
                                href="/used/cars/west-bromwich/"
                                class="btn btn-outline details_btn sliderbtn"
                              >
                                <span>SHOWROOM</span></a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="owl-nav disabled">
              <button type="button" role="presentation" class="owl-prev">
                <span aria-label="Previous">‹</span></button
              ><button type="button" role="presentation" class="owl-next">
                <span aria-label="Next">›</span>
              </button>
            </div>
            <div class="owl-dots disabled"></div>
          </div>
          <div
            id="search_bar_v21"
            class="innerWhiteBox landing-page webbe-search-bar tabing_form vidSliderSearch"
            n=""
          >
            <div class="form-parent">
              <div class="banner-form-title">
                <h2><strong>SEARCH</strong> OUR COLLECTION</h2>
              </div>
              <!-- <form class="form-inline" action="/searchstock/" method="post"> -->
              <form
                name="search"
                method="POST"
                action="/searchstock/"
                onsubmit="return check_prices();"
                class="form-inline"
              >
                <div class="form-group-row">
                  <div class="custom-form-group colmd-2">
                    <select
                      name="make"
                      id="make"
                      class="custom-form-control CustomSelect select2-hidden-accessible"
                      onchange="change_div(this.value, 'none');"
                      data-select2-id="make"
                      tabindex="-1"
                      aria-hidden="true"
                    >
                      <option value="0" data-select2-id="2">Make</option>
                      <option value="25">AUDI (5)</option>
                      <option value="3">BMW (3)</option>
                      <option value="5">MERCEDES-BENZ (3)</option>
                      <option value="78">PORSCHE (1)</option>
                      <option value="2">TOYOTA (1)</option>
                      <option value="98">VOLKSWAGEN (1)</option></select
                    ><span
                      class="select2 select2-container select2-container--default"
                      dir="ltr"
                      data-select2-id="1"
                      style="width: 100%"
                      ><span class="selection"
                        ><span
                          class="select2-selection select2-selection--single"
                          role="combobox"
                          aria-haspopup="true"
                          aria-expanded="false"
                          tabindex="0"
                          aria-labelledby="select2-make-container"
                          ><span
                            class="select2-selection__rendered"
                            id="select2-make-container"
                            role="textbox"
                            aria-readonly="true"
                            title="Make"
                            >Make</span
                          ><span
                            class="select2-selection__arrow"
                            role="presentation"
                            ><b role="presentation"></b></span></span></span
                      ><span class="dropdown-wrapper" aria-hidden="true"></span
                    ></span>
                  </div>
                  <div class="custom-form-group colmd-2">
                    <select
                      name="model"
                      id="modelsr"
                      class="custom-form-control CustomSelect select2-hidden-accessible"
                      data-select2-id="modelsr"
                      tabindex="-1"
                      aria-hidden="true"
                    >
                      <option value="" data-select2-id="4">
                        All Models
                      </option></select
                    ><span
                      class="select2 select2-container select2-container--default"
                      dir="ltr"
                      data-select2-id="3"
                      style="width: 100%"
                      ><span class="selection"
                        ><span
                          class="select2-selection select2-selection--single"
                          role="combobox"
                          aria-haspopup="true"
                          aria-expanded="false"
                          tabindex="0"
                          aria-labelledby="select2-modelsr-container"
                          ><span
                            class="select2-selection__rendered"
                            id="select2-modelsr-container"
                            role="textbox"
                            aria-readonly="true"
                            title="All Models"
                            >All Models</span
                          ><span
                            class="select2-selection__arrow"
                            role="presentation"
                            ><b role="presentation"></b></span></span></span
                      ><span class="dropdown-wrapper" aria-hidden="true"></span
                    ></span>
                  </div>
                  <div class="custom-form-group colmd-2">
                    <select
                      name="transmission"
                      class="custom-form-control CustomSelect select2-hidden-accessible"
                      data-select2-id="5"
                      tabindex="-1"
                      aria-hidden="true"
                    >
                      <option data-select2-id="7">TRANSMISSION</option>
                      <option value="1">Auto</option>
                      <option value="3">Semi-Auto</option>
                      <option value="2">Manual</option></select
                    ><span
                      class="select2 select2-container select2-container--default"
                      dir="ltr"
                      data-select2-id="6"
                      style="width: 100%"
                      ><span class="selection"
                        ><span
                          class="select2-selection select2-selection--single"
                          role="combobox"
                          aria-haspopup="true"
                          aria-expanded="false"
                          tabindex="0"
                          aria-labelledby="select2-transmission-ww-container"
                          ><span
                            class="select2-selection__rendered"
                            id="select2-transmission-ww-container"
                            role="textbox"
                            aria-readonly="true"
                            title="TRANSMISSION"
                            >TRANSMISSION</span
                          ><span
                            class="select2-selection__arrow"
                            role="presentation"
                            ><b role="presentation"></b></span></span></span
                      ><span class="dropdown-wrapper" aria-hidden="true"></span
                    ></span>
                  </div>
                  <div class="custom-form-group colmd-2">
                    <select
                      name="fueltype"
                      class="custom-form-control CustomSelect select2-hidden-accessible"
                      data-select2-id="8"
                      tabindex="-1"
                      aria-hidden="true"
                    >
                      <option data-select2-id="10">Fuel Type</option>
                      <option value="2">Diesel</option>
                      <option value="1">Petrol</option></select
                    ><span
                      class="select2 select2-container select2-container--default"
                      dir="ltr"
                      data-select2-id="9"
                      style="width: 100%"
                      ><span class="selection"
                        ><span
                          class="select2-selection select2-selection--single"
                          role="combobox"
                          aria-haspopup="true"
                          aria-expanded="false"
                          tabindex="0"
                          aria-labelledby="select2-fueltype-ms-container"
                          ><span
                            class="select2-selection__rendered"
                            id="select2-fueltype-ms-container"
                            role="textbox"
                            aria-readonly="true"
                            title="Fuel Type"
                            >Fuel Type</span
                          ><span
                            class="select2-selection__arrow"
                            role="presentation"
                            ><b role="presentation"></b></span></span></span
                      ><span class="dropdown-wrapper" aria-hidden="true"></span
                    ></span>
                  </div>
                </div>
                <div class="form_tab">
                  <div class="tabpad">
                    <div class="range_slider_scroll_bar">
                      <div
                        id="slider-range_v21"
                        class="noUi-target noUi-ltr noUi-horizontal noUi-background"
                      >
                        <div class="noUi-base">
                          <div
                            class="noUi-origin noUi-connect"
                            style="left: 0%"
                          >
                            <div class="noUi-handle noUi-handle-lower"></div>
                          </div>
                          <div
                            class="noUi-origin noUi-background"
                            style="left: 100%"
                          >
                            <div class="noUi-handle noUi-handle-upper"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slider-labels">
                      <div class="caption">
                        <p>From<span id="slider-range-value21">£0</span></p>
                      </div>
                      <div class="caption">
                        <p>To<span id="slider-range-value22">£60,000</span></p>
                      </div>
                    </div>
                    <div class="right_btn_submit">
                      <a
                        class="btn btn-outline search_finance_btn"
                        name="searchformbtn"
                        onclick="document.forms['search'].submit();"
                        ><span>SEARCH</span></a
                      >
                    </div>
                    <div class="row">
                      <div class="getValue">
                        <!-- <input type="hidden" name="price1" id="min-value-slider">
                      <input type="hidden" name="price" id="max-value-slider"> -->
                        <input
                          type="hidden"
                          name="price1"
                          id="min-value"
                          value="0"
                        />
                        <input
                          type="hidden"
                          name="price"
                          id="max-value"
                          value="60000"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <input type="hidden" name="task" value="search" />
                <input type="hidden" name="frompage" value="index.php" />
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- BANNER VERSION FIVE END -->
      <script>
        // Initialize slider: Banner_v21 / Search_bar_v21
        var max_price = 60000;
        $(document).ready(function () {
          $(".noUi-handle").on("click", function () {
            $(this).width(50);
          });
          var rangeSlider = document.getElementById("slider-range_v21");
          var moneyFormat = wNumb({
            decimals: 0,
            thousand: ",",
            prefix: "&pound;",
          });
          noUiSlider.create(rangeSlider, {
            start: [0, max_price],
            step: 1000,
            range: {
              min: [0],
              max: [max_price],
            },
            format: moneyFormat,
            connect: true,
          });
          // Set visual min and max values and also update value hidden form inputs
          rangeSlider.noUiSlider.on("update", function (values, handle) {
            document.getElementById("slider-range-value21").innerHTML =
              values[0];
            document.getElementById("slider-range-value22").innerHTML =
              values[1];
            document.getElementById("min-value").value = moneyFormat.from(
              values[0]
            );
            document.getElementById("max-value").value = moneyFormat.from(
              values[1]
            );
          });
        });
      </script>
      <script>
        var slider_autostart = true;
        var slider_pause = 6000;
        $(document).ready(function () {
          //Banner_v5 script
          $("#heroImage_v21").owlCarousel({
            items: 1,
            animateOut: "fadeOut",
            autoplayTimeout: slider_pause,
            loop: true,
            autoplay: slider_autostart,
            nav: false,
            dots: false,
            mouseDrag: false,
            margin: 0,
          });
        });
      </script>
      <script>
        var video = document.getElementById("SliderVideo");
        function toggleMute() {
          video.muted = !video.muted;
          //if(video.muted){ video.muted = false; }else{ video.muted = true; }
          $(".vidMuteDiv i").toggleClass("fa-volume-off fa-volume-up");
        }
        var showSliderTextVid = "n";
        var windowSize = window.outerWidth;
        if (windowSize < 768 && showSliderTextVid != "y") {
          $(".video_text_box").empty();
        }
      </script>
      <!-- BANNERS 182 START -->
      <div id="cd5_module182">
        <div class="m182_left">
          <div class="m182_left_inner">
            <img
              src="https://admin.cardealer5.co.uk/superadmin/partnerlogos/pl_257.png"
            />
            <div class="m182_leftbox">
              <div class="m182_rating">5.0</div>
              <a
                href="https://www.autotrader.co.uk/dealers/west-midlands/west-bromwich/ayaan-motors-limited-762892#reviews-container"
                target="_blank"
              >
                <div class="m182_greybox">
                  <div class="m182_outof"><span>out of</span><br />Reviews</div>
                  <div class="m182_outof2_3digit">137</div>
                  <div class="m182_outof3">❯</div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="m182_right">
          <div class="m182_right_inner">
            <div class="m182_stars">
              <i class="fa fa-star"></i><i class="fa fa-star"></i
              ><i class="fa fa-star"></i><i class="fa fa-star"></i
              ><i class="fa fa-star"></i>
            </div>
            <div class="m182_highly_rated">Highly Rated</div>
            <div class="m182_customer_service">
              For our customer service 2018, 2019, 2020 &amp; 2021
            </div>
          </div>
        </div>
        <div style="clear: both"></div>
      </div>
      <!-- BANNERS VERSION 182 END -->

      <!--  SHOWROOM VERSION FIVE START -->
      <div id="financespecialist_v2">
        <div class="service_section">
          <div class="container-fluid">
            <div class="services_boxs">
              <div class="col-left">
                <div
                  class="service-box"
                  style="
                    background: url(/admin/uploaded_photos/module_77_BG_IMAGE_1.jpg)
                      no-repeat left top;
                    background-size: cover;
                  "
                >
                  <a href="/finance/" title="Finance" class="m77_videolink">
                    <div class="service-title title-strip">
                      <h2>Finance</h2>
                      <p>
                        Let our finance specialists help you find the right deal
                      </p>
                      <button class="btn btn-outline more-info">
                        MORE INFO
                      </button>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-right">
                <div
                  class="service-box2"
                  style="
                    background: url(/admin/uploaded_photos/module_77_BG_IMAGE_2.jpg)
                      no-repeat left top;
                    background-size: cover;
                  "
                >
                  <a href="/sellyourcarform/" title="Thinking of selling?">
                    <div class="service-title red">
                      <h2>Thinking of selling?</h2>
                      <p>Competitive prices paid for your vehicle</p>
                      <button class="btn btn-outline more-info">
                        Get Valuation
                      </button>
                    </div>
                  </a>
                </div>

                <div
                  class="service-box3"
                  style="
                    background: url(/admin/uploaded_photos/module_77_BG_IMAGE_3.jpg)
                      no-repeat left top;
                    background-size: cover;
                  "
                >
                  <a href="/warranty/" title="Warranties available">
                    <div class="service-title red">
                      <h2>Warranties available</h2>
                      <p>Drive away with complete peace of mind</p>
                      <button class="btn btn-outline more-info">
                        View Deals
                      </button>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- financespecialist VERSION 2 END -->
      <!-- WELCOME TEXT VERSION THREE START -->
      <div id="welcome_text_v3">
        <div class="about_main wow fadeInUp">
          <div class="logo_title_about hideformobile">
            <img
              class="lazyload"
              src="/admin/uploaded_photos/site_logo.png?nocache=135934"
              data-src="/admin/uploaded_photos/site_logo.png?nocache=135934"
              alt="Ayaan Motors Ltd"
              title="Ayaan Motors Ltd logo"
            />
          </div>
          <div class="container-center">
            <div class="prestige_flex">
              <div class="prestige_info">
                <div class="featured-title">
                  <h1>Your Sports &amp; Prestige Car Specialist</h1>
                </div>
                <div class="text_content">
                  <p>
                    We are a well-established, passionate used car dealer
                    specialising in the sale of sports &amp; prestige vehicles
                    based in West Bromwich, West Midlands.<br />
                    <br />
                    Whether you’re at Ayaan Motors to buy something special or
                    would just like to browse, we want to offer you a very
                    personal level of service leaving you with a great
                    impression. We will make the buying process as enjoyable as
                    possible and find the best options to suit your needs. Our
                    service will be designed around you in order to exceed your
                    expectations, so you would want to come back. <br />
                    <br />
                    If you would like to get any professional help to choose the
                    best sports or prestige car for your requirements, you can
                    trust our expert sales team because we will provide
                    considered and impartial advice which is well-respected in
                    the automotive industry. You can test drive your chosen
                    model on some of the best driving roads in the UK, putting
                    it to the test and forging the all-important bond between
                    you and the car.<br />
                    <br />
                    If you would like to upgrade from another prestige car, we
                    can purchase your old model for a fair and accurate price.
                    We are always looking for exceptional luxury and sports cars
                    to add to our stock, so can offer both cash sales and part
                    exchange against the value of a car in our existing
                    range.<br />
                    <br />
                    To speak to one of our specialist sales advisers about
                    finance, and buying or selling a car, please complete the
                    online enquiry form today or phone our dealership in West
                    Bromwich, West Midlands.<br />
                  </p>
                </div>
              </div>

              <div class="right_aside">
                <div class="vehicle_info_display">
                  <div class="open_time">
                    <h2>THURSDAY</h2>
                    <span>09:00 - 17:30</span>
                  </div>
                  <div class="current_opning">
                    <p></p>
                  </div>

                  <div class="instock_display">
                    <h2>14</h2>
                    <a href="/used/cars/west-bromwich/">
                      <p>VEHICLES IN STOCK</p>
                    </a>
                  </div>
                </div>

                <ul class="calback_list_gp">
                  <li>
                    <a href="/find_us/" title="Call Back"
                      ><img
                        class="lazyload"
                        src="https://admin.cardealer5.co.uk/sym_images/cal_back_icon.png"
                        data-src="https://admin.cardealer5.co.uk/sym_images/cal_back_icon.png"
                        alt="Call Back"
                        title="Call Back"
                        width="59"
                        height="43"
                      />
                      <p>Call Back</p></a
                    >
                  </li>
                  <li>
                    <a href="/booktestdrive/" title="Test Drive"
                      ><img
                        class="lazyload"
                        src="https://admin.cardealer5.co.uk/sym_images/test_drive_icon.png"
                        data-src="https://admin.cardealer5.co.uk/sym_images/test_drive_icon.png"
                        alt="Test Drive"
                        title="Test Drive"
                        width="59"
                        height="43"
                      />
                      <p>Test Drive</p></a
                    >
                  </li>
                  <li>
                    <a href="/find_us/" title="Location"
                      ><img
                        class="lazyload"
                        src="https://admin.cardealer5.co.uk/sym_images/location_icon.png"
                        data-src="https://admin.cardealer5.co.uk/sym_images/location_icon.png"
                        alt="Location"
                        title="Location"
                        width="59"
                        height="43"
                      />
                      <p>Location</p></a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- WELCOME TEXT VERSION THREE START -->

      <!-- BANNERS for Partner Logos 97 START -->
      <div id="partner_logos_v97">
        <div class="container-center">
          <div class="plogos">
            <div class="plogo">
              <img
                class="lazyload"
                src="https://assets.cardealer5.co.uk/superadmin_uploads/partnerlogos/pl_21.png"
                data-src="https://assets.cardealer5.co.uk/superadmin_uploads/partnerlogos/pl_21.png"
                alt="Close Brothers - white"
                title="Close Brothers - white"
              />
            </div>
            <div class="plogo">
              <img
                class="lazyload"
                src="https://assets.cardealer5.co.uk/superadmin_uploads/partnerlogos/pl_143.png"
                data-src="https://assets.cardealer5.co.uk/superadmin_uploads/partnerlogos/pl_143.png"
                alt="Alphera - white"
                title="Alphera - white"
              />
            </div>
            <div class="plogo">
              <img
                class="lazyload"
                src="https://assets.cardealer5.co.uk/superadmin_uploads/partnerlogos/pl_182.png"
                data-src="https://assets.cardealer5.co.uk/superadmin_uploads/partnerlogos/pl_182.png"
                alt="Eurodrive - white"
                title="Eurodrive - white"
              />
            </div>
          </div>
          <div style="clear: both"></div>
        </div>
        <div style="clear: both"></div>
      </div>

      <!-- BANNERS for Partner Logos 97 END -->

      <!-- ALL CAR FEATURES VERSION ONE START -->
      <div id="all_car_features_v1">
        <div class="container-center">
          <div class="car_feature_heading">
            <h2>At Ayaan as standard..</h2>
          </div>
          <div style="clear: both"></div>
          <div class="acf_v1_left">
            <div class="car_feature_list">
              <ul class="list-ticks">
                <li>Full MOT</li>
                <li>Service</li>
                <li>Full Valet</li>
                <li>HPI Clear</li>
                <li>6 Months Warranty</li>
                <li>Detailing Service Available</li>
              </ul>
              <p class="ticks-disclaimer"></p>
            </div>
          </div>
          <div class="acf_v1_right">
            <img
              src="/admin/uploaded_photos/module_42_css_image.jpg"
              data-src="/admin/uploaded_photos/module_42_css_image.jpg"
              alt="Car Image"
              class="lazyload img-responsive"
            />
          </div>
          <div style="clear: both"></div>
        </div>
        <div style="clear: both"></div>
      </div>
      <!-- ALL CAR FEATURES VERSION ONE END -->

      <!-- CUSTOMER REVIEW VERSION FOUR START -->
      <div id="customer_review_v4">
        <div class="cd5_triangle"></div>
        <div
          class="customer_reviews_full"
          style="
            background: url(/admin/uploaded_photos/module_49_CR_V3_bg_image.jpg)
              no-repeat center top;
            background-size: cover;
          "
        >
          <div class="customer_review">
            <div class="col_left">
              <div class="featured-title">
                <h2><strong>Customer</strong> Reviews</h2>
                <p>Read what our customers have to say</p>
              </div>
              <div
                id="testimonial_slide_v4"
                class="owl-carousel owl-theme owl-loaded owl-drag"
              >
                <div class="owl-stage-outer">
                  <div
                    class="owl-stage"
                    style="
                      transform: translate3d(-2575px, 0px, 0px);
                      transition: all 0.25s ease 0s;
                      width: 6180px;
                    "
                  >
                    <div
                      class="owl-item cloned"
                      style="width: 505px; margin-right: 10px"
                    >
                      <div class="item">
                        <ul class="stars">
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                        </ul>
                        <div class="quote">
                          <div class="review_text">
                            <p>
                              Very friendly amd professional experience, we were
                              picked up from the airport and driven to the
                              showroom, the car was very well prepared and after
                              a short test drive we concluded the sale. From
                              seeing... <a href="/testimonials/">Read More</a>
                            </p>
                          </div>
                          <div class="user_title"><h2>Alastair R</h2></div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="owl-item cloned"
                      style="width: 505px; margin-right: 10px"
                    >
                      <div class="item">
                        <ul class="stars">
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                        </ul>
                        <div class="quote">
                          <div class="review_text">
                            <p>
                              Brilliant service given by Ayaan Motors. Very
                              accommodating. Finance, part exchange, warranty
                              and insurance sorted out in a flash. Lovely cars
                              although I just bought the best one!
                            </p>
                          </div>
                          <div class="user_title"><h2>Samantha</h2></div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="owl-item cloned"
                      style="width: 505px; margin-right: 10px"
                    >
                      <div class="item">
                        <ul class="stars">
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                        </ul>
                        <div class="quote">
                          <div class="review_text">
                            <p>
                              I have just purchased a 730d off Ayaan Motors,
                              service was incredible and cannot reccomend them
                              enough. Car was prepared to a high standard and
                              handover was as smooth as it could of been, I will
                              defin... <a href="/testimonials/">Read More</a>
                            </p>
                          </div>
                          <div class="user_title"><h2>Dave T</h2></div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="owl-item"
                      style="width: 505px; margin-right: 10px"
                    >
                      <div class="item">
                        <ul class="stars">
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                        </ul>
                        <div class="quote">
                          <div class="review_text">
                            <p>
                              Really great experience from start to finish. Very
                              pleased with the car which was exactly as
                              described and negotiated a good price. Relaxed and
                              friendly service throughout from genuinely nice
                              guy. All... <a href="/testimonials/">Read More</a>
                            </p>
                          </div>
                          <div class="user_title"><h2>Matt W</h2></div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="owl-item"
                      style="width: 505px; margin-right: 10px"
                    >
                      <div class="item">
                        <ul class="stars">
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                        </ul>
                        <div class="quote">
                          <div class="review_text">
                            <p>
                              Fantastic service from the moment we arrived at
                              the garage, No sales pitch, car available for a
                              test drive at our leisure. The whole experience
                              provided is a refreshing change.
                            </p>
                          </div>
                          <div class="user_title"><h2>Simon H</h2></div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="owl-item active"
                      style="width: 505px; margin-right: 10px"
                    >
                      <div class="item">
                        <ul class="stars">
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                        </ul>
                        <div class="quote">
                          <div class="review_text">
                            <p>
                              Great service from start to handover, car was as
                              described and they offer detailing service for
                              discounted price. Will be coming back for next
                              vehicle
                            </p>
                          </div>
                          <div class="user_title"><h2>S Elliott</h2></div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="owl-item"
                      style="width: 505px; margin-right: 10px"
                    >
                      <div class="item">
                        <ul class="stars">
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                        </ul>
                        <div class="quote">
                          <div class="review_text">
                            <p>
                              Very friendly amd professional experience, we were
                              picked up from the airport and driven to the
                              showroom, the car was very well prepared and after
                              a short test drive we concluded the sale. From
                              seeing... <a href="/testimonials/">Read More</a>
                            </p>
                          </div>
                          <div class="user_title"><h2>Alastair R</h2></div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="owl-item"
                      style="width: 505px; margin-right: 10px"
                    >
                      <div class="item">
                        <ul class="stars">
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                        </ul>
                        <div class="quote">
                          <div class="review_text">
                            <p>
                              Brilliant service given by Ayaan Motors. Very
                              accommodating. Finance, part exchange, warranty
                              and insurance sorted out in a flash. Lovely cars
                              although I just bought the best one!
                            </p>
                          </div>
                          <div class="user_title"><h2>Samantha</h2></div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="owl-item"
                      style="width: 505px; margin-right: 10px"
                    >
                      <div class="item">
                        <ul class="stars">
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                        </ul>
                        <div class="quote">
                          <div class="review_text">
                            <p>
                              I have just purchased a 730d off Ayaan Motors,
                              service was incredible and cannot reccomend them
                              enough. Car was prepared to a high standard and
                              handover was as smooth as it could of been, I will
                              defin... <a href="/testimonials/">Read More</a>
                            </p>
                          </div>
                          <div class="user_title"><h2>Dave T</h2></div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="owl-item cloned"
                      style="width: 505px; margin-right: 10px"
                    >
                      <div class="item">
                        <ul class="stars">
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                        </ul>
                        <div class="quote">
                          <div class="review_text">
                            <p>
                              Really great experience from start to finish. Very
                              pleased with the car which was exactly as
                              described and negotiated a good price. Relaxed and
                              friendly service throughout from genuinely nice
                              guy. All... <a href="/testimonials/">Read More</a>
                            </p>
                          </div>
                          <div class="user_title"><h2>Matt W</h2></div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="owl-item cloned"
                      style="width: 505px; margin-right: 10px"
                    >
                      <div class="item">
                        <ul class="stars">
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                        </ul>
                        <div class="quote">
                          <div class="review_text">
                            <p>
                              Fantastic service from the moment we arrived at
                              the garage, No sales pitch, car available for a
                              test drive at our leisure. The whole experience
                              provided is a refreshing change.
                            </p>
                          </div>
                          <div class="user_title"><h2>Simon H</h2></div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="owl-item cloned"
                      style="width: 505px; margin-right: 10px"
                    >
                      <div class="item">
                        <ul class="stars">
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-star" data-unicode="f005"></i
                            ></a>
                          </li>
                        </ul>
                        <div class="quote">
                          <div class="review_text">
                            <p>
                              Great service from start to handover, car was as
                              described and they offer detailing service for
                              discounted price. Will be coming back for next
                              vehicle
                            </p>
                          </div>
                          <div class="user_title"><h2>S Elliott</h2></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-nav disabled">
                  <button type="button" role="presentation" class="owl-prev">
                    <span aria-label="Previous">‹</span></button
                  ><button type="button" role="presentation" class="owl-next">
                    <span aria-label="Next">›</span>
                  </button>
                </div>
                <div class="owl-dots disabled"></div>
              </div>
            </div>
            <div class="container-center">
              <ul class="review-links">
                <li>
                  <a
                    href="https://www.google.com/search?q=ayaan+motors+google+reviews&amp;oq=ayaan+motors+google+reviews&amp;aqs=chrome..69i57.10473j1j4&amp;sourceid=chrome&amp;ie=UTF-8#lrd=0x487097f885b00001:0x9c3859a566739a14,1,,,"
                    title="Google Review Link for Ayaan Motors Ltd"
                    target="_BLANK"
                    ><img
                      src="https://admin.cardealer5.co.uk/sym_images/google_logo.png"
                      title="Google Review Link for Ayaan Motors Ltd"
                      alt="Google Review Link for Ayaan Motors Ltd"
                      class="responsive-img"
                      width="200"
                      height="56"
                  /></a>
                </li>
                <li>
                  <a
                    href="https://www.autotrader.co.uk/dealers/west-midlands/west-bromwich/ayaan-motors-limited-762892#reviews-container"
                    title="Auto Trader Review Link for Ayaan Motors Ltd"
                    target="_BLANK"
                    ><img
                      src="https://admin.cardealer5.co.uk/sym_images/AutoTrader_logo.png"
                      title="Auto Trader Review Link for Ayaan Motors Ltd"
                      alt="Auto Trader Review Link for Ayaan Motors Ltd"
                      class="responsive-img"
                      width="200"
                      height="56"
                  /></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- CUSTOMER REVIEW VERSION FOUR END -->
      <script>
        $(document).ready(function () {
          // Customer review
          $("#testimonial_slide_v4").owlCarousel({
            items: 1,
            autoplay: true,
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
          });
        });
      </script>
    @stop