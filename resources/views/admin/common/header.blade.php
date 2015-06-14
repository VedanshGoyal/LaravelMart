@section('header')



<div class="megamenu_wrapper megamenu_light_theme"><!-- BEGIN MENU WRAPPER -->
    
    
    <div class="megamenu_container navbar navbar-default" role="navigation"><!-- BEGIN MENU CONTAINER -->
        
        
        <ul class="megamenu"><!-- BEGIN MENU -->
            
            
            <li class="megamenu_button"><a href="#_">Mega Menu</a></li>
            <li><a href="/admin" class="menuitem_drop">Dashboard</a></li>
            <li><a href="#_" class="menuitem_drop">Featured Products</a>
                <div class="dropdown_3columns">
                    <h3>Today's Hot offers</h3>
                    
                    <div class="row">
                        <div class='width-per-50'>
                            <ul class="link-list">
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                            </ul>
                        </div>
                        <div class='width-per-50'>
                            <ul class="link-list">
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <h3>Best Selling Products</h3>
                    
                    <div class="row">
                        <div class='width-per-50'>
                            <ul class="link-list">
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                            </ul>
                        </div>
                        <div class='width-per-50'>
                            <ul class="link-list">
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                                <li><a href=''>Product 1</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </li>
            
            
            <li>{!! link_to_action('ProductsController@getIndex', 'Products',[],['class'=> 'menuitem_drop'] ) !!}
                <!-- Begin Elements Item -->
                
                
                <div class="dropdown_3columns"><!-- Begin columns container -->
                    
                    
                    <div class="row">
                        
                        <h2>Products</h2>
                        
                        <div class="width-per-50">
                            
                            <ul class="link-list">
                                <li> {!! link_to_action('ProductsController@getIndex', 'All Products' ) !!}</li>
                                
                                @foreach( App\Models\Category::all() as $category)
                                <?php $active = (Request::segment(2) == 'category' && explode("--", Request::segment(3))[1] == $category->id) ? 'active' : '' ?>
                                <li>
                                    {!! link_to_action('ProductsController@getCategory', $category->name ,
                                    [snake_case($category->name).'--'.$category->id],['class'=>$active]); !!}
                                </li>
                                @endforeach
                            </ul>
                            
                        </div>
                        
                        <div class="width-per-50">
                            
                            <ul class="link-list">
                                <li><a href="#">ThemeForest</a></li>
                                <li><a href="#">GraphicRiver</a></li>
                                <li><a href="#">ActiveDen</a></li>
                                <li><a href="#">VideoHive</a></li>
                                <li><a href="#">3DOcean</a></li>
                            </ul>
                            
                        </div>
                        
                        
                    </div>
                    
                    <div class="row">
                        
                        <h3>Random Featured Products</h2>
                        
                        <img data-src="holder.js/75x75" class='width-per-25'/>
                        
                        <p class='width-per-75'>Maecenas eros lorem, nec eget eros lorem, nec vulputate, lorem sem condimentum.<br><a
                        href="#">Read more...</a></p>
                        
                        <p class='width-per-75'>Aliquam t nec nisi. Aliquam pretium mollis fringilla. Vestibulum tempor facilisis
                            malesuada.<br/><a href="#">Read more...</a></p>
                            <img data-src="holder.js/75x75" class='width-per-25'/>
                            
                        </div>
                        
                        
                    </div>
                    <!-- End columns container -->
                    
                    
                </li>
                <!-- End Elements Item -->
                
                
                
                <!-- Begin Lists Item -->
                
                
                
                
                <li class="menuitem_nodrop">
                    <a href="{!! url('/cart') !!}"><i class="i-shoping-cart"></i> Cart </a>
                </li>
                <!-- No Drop Down Item -->
                
                <li class="menuitem_right"><a href="#_" class="menuitem_drop">About</a><!-- Begin Lists Item -->
                    
                    
                    <div class="row dropdown_4columns dropdown_right">
                        @include("abouts/aboutnav")
                    </div>
                </li>
                <li class="menuitem_right"><a href="#_" class="menuitem_drop">Contact</a><!-- Begin Contact Item -->
                    
                    
                    <div class="dropdown_3columns dropdown_right"><!-- Begin right aligned columns container -->
                        
                        
                        <h2>Contact Us</h2>
                        
                        <ul class="link-list fk-font-12 fk-text-center">
                            <li><a href="/contact">24x7 Customer Care</a></li>
                            <li><a>Track Order</a></li>
                            <li><a href="/account/">Signup</a></li>
                            <li><a href="/login/" class="no-border login-required">Login</a></li>
                        </ul>
                        
                        <h2>Find us on social networks</h2>
                        
                        <ul class="social">
                            <li><a href="#"><img src='img/twitter.png' alt=""/><span>Twitter</span></a></li>
                            <li><a href="#"><img src='img/facebook.png' alt=""/><span>Facebook</span></a></li>
                            <li><a href="#"><img src='img/flickr.png' alt=""/><span>Flickr</span></a></li>
                            <li><a href="#"><img src='img/rss.png' alt=""/><span>RSS Feed</span></a></li>
                            <li><a href="#"><img src='img/technorati.png' alt=""/><span>Technorati</span></a></li>
                            <li><a href="#"><img src='img/delicious.png' alt=""/><span>Delicious</span></a></li>
                        </ul>
                        
                        
                    </div>
                    <!-- End right aligned columns container -->
                    
                    
                </li>
                <!-- End Contact Item -->
                
                <li class="menuitem_right"><a href="#_" class="menuitem_drop">Account</a><!-- Begin Lists Item -->
                    
                    
                    <div class="row dropdown_3columns dropdown_right"><!-- Begin columns container -->
                        
                        
                        <div class="width-per-50">
                            
                            <h3>Accounts</h3>
                            <ul>
                                @if(!Auth::check())
                                <li>{!! Html::link('auth/register', 'Register') !!}</li>
                                <li>{!! Html::link('auth/login', 'Login') !!}</li>
                                @else
                                <li>{!! Html::link('users/dashboard', 'Dashboard') !!}</li>
                                <li>{!! Html::link('users/profile', 'Profile') !!}</li>
                                <li>{!! Html::link('auth/logout', 'logout') !!}</li>
                                @endif
                            </ul>
                        </div>
                        
                        <div class="width-per-50">
                            
                            <h3>Useful Links</h3>
                            <ul>
                                <li><a href="#">NetTuts</a></li>
                                <li><a href="#">VectorTuts</a></li>
                                <li><a href="#">PsdTuts</a></li>
                                <li><a href="#">PhotoTuts</a></li>
                                <li><a href="#">ActiveTuts</a></li>
                            </ul>
                            
                        </div>
                        
                        <div class="width-per-50">
                            
                            <h3>Other Stuff</h3>
                            <ul>
                                <li><a href="#">FreelanceSwitch</a></li>
                                <li><a href="#">Creattica</a></li>
                                <li><a href="#">WorkAwesome</a></li>
                                <li><a href="#">Mac Apps</a></li>
                                <li><a href="#">Web Apps</a></li>
                            </ul>
                            
                        </div>
                        
                        <div class="width-per-50">
                            
                            <h3>Misc</h3>
                            <ul>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Logo</a></li>
                                <li><a href="#">Flash</a></li>
                                <li><a href="#">Illustration</a></li>
                                <li><a href="#">More...</a></li>
                            </ul>
                            
                        </div>
                        
                        
                    </div>
                    <!-- End columns container -->
                    
                    
                </li>
                
            </ul>
            <!-- END MENU -->
            
            
        </div>
        <!-- END MENU CONTAINER -->
        
        
    </div><!-- END MENU WRAPPER -->
    
    
    <div class="pagecontentclear"></div>
    
    @show
    
    
    
