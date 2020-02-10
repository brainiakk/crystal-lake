    <!--================ Footer ================-->
    <footer id="milenia-footer" class="milenia-footer">
        <!--================ Footer row ================-->
        <div class="milenia-footer-row milenia-colorizer--scheme-dark milenia-footer-row--medium">
          <div class="container">
            <div class="milenia-footer-row--inner">
              <div class="milenia-grid milenia-grid--cols-1">
                <!--================ Widget ================-->
                <div class="milenia-grid-item milenia-widget milenia-widget--info">
                  <div class="milenia-grid-item-inner">
                    <div class="milenia-grid-item-content">
                      <div class="milenia-info-widget">
                      <div class="milenia-info-widget-logo"><a href="{{ url('/') }}" class="milenia-ln--independent"><img src="{{ asset('images/header_logo_crystallake.png') }}" alt=""></a></div>
                        <div class="milenia-grid milenia-grid--cols-3">
                          <div class="milenia-grid-item">
                            <address><span class="milenia-text-color--contrast">Address: </span><br>No. 1 Tourismo Boulevard<br>  by Ministry of Works, <br>Oguta, Imo State</address>
                            {{-- <a href="#" class="milenia-uppercased-link">Get Direction</a> --}}
                          </div>
                          <div class="milenia-grid-item">
                            <address><span class="milenia-text-color--contrast">Phone: </span><br>09068116377<br>08063566576<br>08030877889</address>
                          </div>
                          <div class="milenia-grid-item milenia-widget--email">
                            <address><span class="milenia-text-color--contrast">Email:<br> </span><a href="mailto:reservations@crystallakeresortoguta.com">reservations@crystallakeresortoguta.com</a></address>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--================ End of Widget ================-->
              </div>
            </div>
          </div>
        </div>
        <!--================ End of Footer row ================-->
        <!--================ Footer row ================-->
        <div class="milenia-footer-row milenia-colorizer--scheme-dark milenia-footer-row--thin">
          <div class="container">
            <div class="milenia-footer-row--inner">
              <div class="milenia-grid milenia-grid--valign-middle milenia-grid--cols-1">
                <!--================ Widget ================-->
                <div class="milenia-grid-item milenia-widget milenia-widget--list-horizontal">
                  <div class="milenia-grid-item-inner">
                    <div class="milenia-grid-item-content">
                      <nav class="milenia-tt-uppercase">
                        <ul>
                          <li><a href="{{ url('/about') }}">About Us</a></li>
                          <li>||</li>
                          <li><a href="{{ url('/events') }}">Events</a></li>
                          <li>||</li>
                          <li><a href="{{ url('/reservation') }}">Make a Reservation</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
                <!--================ End of Widget ================-->
                <div class="milenia-grid-item milenia-widget">Copyright © {{ date('Y') }} Crystal Lake Resort and Tours. All Rights Reserved.</div>
              </div>
            </div>
          </div>
        </div>
        <!--================ End of Footer row ================-->
      </footer>
      <!--================ End of Footer ================-->
    </div>
    <script src="{{ asset('vendors/modernizr.js') }}"></script>
    <script src="{{ asset('vendors/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('vendors/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery.easing.1.3.min.js') }}"></script>
    <script src="{{ asset('vendors/instafeed.min.js') }}"></script>
    <script src="{{ asset('vendors/instafeed.wrapper.min.js') }}"></script>
    <script src="{{ asset('vendors/monkeysan.accordion.js') }}"></script>
    <script src="{{ asset('vendors/jquery.parallax-1.1.3.min.js') }}"></script>
    <script src="{{ asset('vendors/monkeysan.tabs.min.js') }}"></script>
    <script src="{{ asset('vendors/monkeysan.sameheight.min.js') }}"></script>
    <script src="{{ asset('vendors/monkeysan-tooltip/monkeysan-jquery-tooltip.js') }}"></script>
    <script src="{{ asset('vendors/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/monkeysan.jquery.nav.1.0.min.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('http://maps.google.com/maps/api/js?key=AIzaSyDe0Jbcnve8wjMa7p4ZzFpKSxCU8pNUjaw&amp;amp;libraries=geometry&amp;amp;v=3.20') }}"></script>
    <script src="{{ asset('vendors/maplace-0.1.3.min.js') }}"></script>
    <script src="{{ asset('vendors/arcticmodal/jquery.arcticmodal-0.3.min.js') }}"></script>
    <script src="{{ asset('vendors/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('vendors/mediaelement/mediaelement-and-player.min.js') }}"></script>
    <script src="{{ asset('vendors/monkeysan.validator.min.js') }}"></script>
    <script src="{{ asset('vendors/handlebars-v4.0.5.min.js') }}"></script>
    <script src="{{ asset('vendors/mad.customselect.js') }}"></script>
    <script src="{{ asset('vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('vendors/revolution/js/jquery.themepunch.revolution.min.js') }}">   </script>
    <script src="{{ asset('vendors/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('vendors/momentjs/moment.min.js') }}"></script>
    <script src="{{ asset('vendors/retina.min.js') }}"></script>
    <script src="{{ asset('js/modules/milenia.sidebar-hidden.min.js') }}"></script>
    <script src="{{ asset('js/modules/milenia.newsletter-form.min.js') }}"></script>
    <script src="{{ asset('js/modules/milenia.alert-box.min.js') }}"></script>
    <script src="{{ asset('js/modules/milenia.isotope.js') }}"></script>
    <script src="{{ asset('js/modules/milenia.tabbed-grid.min.js') }}"></script>
    <script src="{{ asset('js/modules/milenia.sticky-header-section.min.js') }}"></script>
    <script src="{{ asset('js/milenia.app.js') }}"></script>
    <script src="{{ asset('js/rtypes.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>

    <script>
      $('.start_date').datepicker({
          format: 'yyyy-mm-dd',
        }).on('hide', function(event) {
          event.preventDefault();
          event.stopPropagation();
        });
    </script>

<script>
  $('.end_date').datepicker({
      format: 'yyyy-mm-dd',
    }).on('hide', function(event) {
      event.preventDefault();
      event.stopPropagation();
    });
</script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.png"/></a></div>'; //New input field html
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
    <script type="text/javascript" src="{{ asset('vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>

  </body>
</html>
