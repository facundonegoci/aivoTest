<!-- begin:footer -->
<div id="footer">
    <div class="container">
        <div class="row">
            
            <!-- break -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h3>El sitio</h3>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo site_url('web/index'); ?>">Inicio</a></li>
                        <li><a href="<?php echo site_url('web/propiedades'); ?>">Propiedades</a></li>
                        <li><a href="<?php echo site_url('web/about'); ?>">Quienes Somos</a></li>
                        <li><a href="<?php echo site_url('web/servicios'); ?>">Servicios</a></li>
                        <li><a href="<?php echo site_url('web/contacto'); ?>">Contacto</a></li>
                    </ul>
                </div>
            </div>
            <!-- break -->
            
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <img src="<?= base_url(); ?>web/images/slp.png" class="logo_main" style="width: 87%;" alt="Sergio Linardi Propiedades">
                    <p>Somos una empresa joven motivada por el optimismo y la confianza en el futuro del país. Abocados completamente a satisfacer las necesidades de nuestros clientes, asesorando y acompañándolos durante todo el proceso de búsqueda y post venta. </p>
                    
                </div>
            </div>

            <!-- break -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h3>Contacto</h3>
                    <address>
                        Rep. Oriental del Urugual 325, Moron, Pcia. Bs. As.
                        <br>
                        Tel. :  (011) 4483-2526<br>
                        Cel. :  15 3547-4637<br>
                        Email : info@slinardipropiedades.com
                        Horario de Atencion: Lunes a Viernes de 14hs a 19hs y Sabado de 9hs a 13hs </a></li>
                    </address>
                </div>
            </div>
            <!-- break -->
            
            <!-- break -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <div id="fb-root"></div>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/slinardipropiedades/"><i class="fa fa-facebook" style="width: 150px"> slinardipropiedades</i></a>
                        <!--<a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-skype"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>-->
                    </div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=604931639567002";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/slinardipropiedades/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/slinardipropiedades/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/slinardipropiedades/">SLinardi Propiedades</a></blockquote></div>
                </div>
            </div>
            <!-- break -->
        </div>
        <!-- break -->

        <!-- begin:copyright -->
        <div class="row">
            <div class="col-md-12 copyright">
                <p>&copy; 2016 Sergio Linardi Propiedades desarrollado por <strong><a href="http://www.mtkstudio.com/">MTKSTUDIO</a>.</strong></p>
            </div>
        </div>
        <!-- end:copyright -->

    </div>
</div>
<!-- end:footer -->

<!-- begin:modal-signin 
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Log in</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="emailAddress">Email address</label>
                        <input id="emailAddress" type="email" class="form-control input-lg" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control input-lg" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="forget"> Keep me logged in
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p>Don't have account ? <a href="#modal-signin"  data-toggle="modal" data-target="#modal-signin">Sign in here.</a></p>
                <input type="submit" class="btn btn-success btn-block btn-lg" value="Log in">
            </div>
        </div>
    </div>
</div>
<!-- end:modal-signin -->

<!-- begin:modal-signup 
<div class="modal fade" id="modal-signin" tabindex="-1" role="dialog" aria-labelledby="modal-signin" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Sign in</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" placeholder="Confirm Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="agree"> Agree to our <a href="#">terms of use</a> and <a href="#">privacy policy</a>
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p>Already have account ? <a href="#modal-login" data-toggle="modal" data-target="#modal-login">Log in here.</a></p>
                <input type="submit" class="btn btn-success btn-block btn-lg" value="Sign in">
            </div>
        </div>
    </div>
</div>
<!-- end:modal-signup -->



<!--====================
=== javascript files ===
=====================-->
<!-- jQuery -->
<script src="<?= base_url(); ?>web/js/jquery-1.11.2.js"></script>
<!-- bootstrap -->
<script src="<?= base_url(); ?>web/js/bootstrap.js"></script>
<!-- Imagesloaded -->
<script src="<?= base_url(); ?>web/js/imagesloaded.pkgd.min.js"></script>
<!-- Masonry -->
<script src="<?= base_url(); ?>web/js/masonry.pkgd.min.js"></script>
<!-- owl carousel -->
<script src="<?= base_url(); ?>web/js/owl.carousel.min.js"></script>
<!-- Script -->
<script src="<?= base_url(); ?>web/js/script.js"></script>

<script src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyAEX8kuKrbxpeU78WpzAr-r4WIqW5bkHC8&signed_in=true"></script>
<!-- gmap 3 -->
<script src="<?= base_url(); ?>web/js/gmap3.min.js"></script>

<script>
    $(document).ready(function () {

        $(".pagination a").click(function () {

            var link = $(this).get(0).href; // get the link from the DOM object
            var form = $('#filtro'); // get the form you want to submit
            var segments = link.split('/');
            //alert(segments[6]);
            // assume the page number is the fifth parameter of the link
            $('#page').val(segments[6]);
            form.attr('action', link);
            $('#filtro').submit();

            return false;
        });

    });



<?php if ($opcion == 'propiedad'): ?>


        $(document).ready(function () {
            /* map property */
            get_coor_barrios();
        });

        function get_coor_barrios() {
            //alert(b);
            $.ajax({
                url: "http://maps.googleapis.com/maps/api/geocode/json?address=<?php echo $propiedad->direccion ?>,+<?php echo $propiedad->localidad; ?>>&sensor=true",
                async: false,
                success: function (data) {
                    if (data.status === 'OK') {
                        //alert('ok');
                        m_lat = data.results[0].geometry.location.lat;
                        m_lng = data.results[0].geometry.location.lng;

                        myLatLng = {lat: m_lat, lng: m_lng};

                        create_map(m_lat, m_lng)


                    } else {

                        create_map(-34.634035, -58.799586);
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    //alert('error ajax');

                }
            });
        }


        function create_map(lat, lng) {
            $("#map-property").gmap3({
                map: {
                    options: {
                        center: [lat, lng],
                        zoom: 12,
                        scrollwheel: false
                    }
                },
                marker: {
                    latLng: [lat, lng],

                }
            });
        }
<?php endif; ?>

<?php if ($opcion == 'contacto'): ?>

        $(document).ready(function () {
            /* map contact */
            $("#map").gmap3({
                map: {
                    options: {
                        center: [-34.6520642, -58.6197162],
                        zoom: 12,
                        scrollwheel: false
                    }
                },
                marker: {
                    latLng: [-34.6520642, -58.6197162],

                }
            });
        });

<?php endif; ?>
</script>

</body>

</html>
