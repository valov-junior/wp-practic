<footer>
        <div class="container footer">
            <!-- <a href="#"><img src="./img/Logologo.png" alt=""></a> <hr color="#181818"> --><?php the_custom_logo(); ?> <hr color="#181818">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <h4>adress</h4>
                    

       
                    <div class="footer-left">
                        <p>м.київ, 01042 вул.маккайна джона, буд.39 офіс13, <a href="mailto:HELLO@AMEDIA.UA" >hello@amedia.ua</a> </p>
                            
                        </li>
                        <a href="#"><i class="fa fa-linkedin-square fa-lg" style="color:#181818;" aria-hidden="true"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-instagram fa-lg" style="color: #181818;" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <h4><?php the_title(); ?></h4>
                    <div class="row">
                        <div class="col-md-6">
                        <?php wp_nav_menu( array(
                        'theme_location' => 'footer-middle',
                        'container' => null,
                        'container_class' => null,
                        
                        

        )); ?>
                            <!-- <ul>
                                <li><a href="#">apparel</a></li>
                                <li><a href="#">office & home</a></li>
                                <li><a href="#">bags</a></li>
                            </ul> -->
                        </div>
                        <div class="col-md-6">
                        <?php wp_nav_menu( array(
                        'theme_location' => 'footer-middle-right',
                        'container' => null,
                        'container_class' => null,
                        
        )); ?>
                    
                            <!-- <ul>
                                <li><a href="#">tech</a></li>
                                <li class="only_drinkware"><a href="#">drinkware</a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <h4><?php the_content(); ?></h4>
                    <div class="row">
                        <div class="col-md-6">
                        <?php wp_nav_menu( array(
                        'theme_location' => 'footer-right',
                        'container' => null,
                        'container_class' => null,
                        
                    )); ?>
                            <!-- <ul>
                                <li><a href="#">доставка</a></li>
                                <li><a href="#">размерная сетка</a></li>
                                <li><a href="#">связатся с нами</a></li>
                            </ul> -->
                        
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><a href="#">faq</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer_finish">
                <span class="footer_first">looking for amedia product? go to: <a href="#">amedia.ua</a></span>
                <span class="footer_second">Copyright 2022</span>
            </div>
        </div>
        
    </footer>

          
    
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="./custom.js"></script>
</body>
</html>