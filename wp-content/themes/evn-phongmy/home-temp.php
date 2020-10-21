<?php /* Template Name: Home page */ 

get_header();
?>

<!-- slider -->
<div class="owl-carousel owl-theme web-background-lite">
            <?php
                  if( have_rows('slider','option') ):
                     while( have_rows('slider','option') ) : the_row();
                     
                              // Load sub field value.
                              $img = get_sub_field('slider_img');
                              $sliderlink = get_sub_field('slider_link_x'); ?>

                              <div class="item">
                                       <div class="web-background1">
                                             <img src="<?php echo $img; ?>" alt="banner"/>
                                             <div class="bg-dangky">
                                                      <?php if($sliderlink): ?>
                                                         <div class="btn-dangky-ngay">
                                                            <a href="<?php echo $sliderlink;?>">Đăng ký vay <img src="<?php echo IMGPATH;?>right.png"></a>
                                                         </div>
                                                      <?php endif; ?>
                                             </div>
                                       </div>
                              </div>
                        <?php endwhile;
                     else :
                     endif;
               ?>
</div>
         

<!--home-content-top starts from here-->
<section class="home-content-top">
  <div class="container">
    
    <!--our-quality-shadow-->
    <div class="clearfix"></div>
    <!-- <h1 class="heading1">Welcome to webenlance</h1> -->
    <div class="tabbable-panel margin-tops4 ">
      <div class="tabbable-line">
        <ul class="nav nav-tabs tabtop  tabsetting">
        <?php
            $name1 = get_field('tab1name','option');
            $tab1_img = get_field('tab1_img','option');
            $tab1content = get_field('tab1content','option');

            $name2 = get_field('tab2name','option');
            $tab2_img = get_field('tab2img','option');
            $tab2content = get_field('tab2content','option');

            
        ?>
            <li class="active"> <a href="#tab_default_1" data-toggle="tab"> <?php echo $name1;?> </a> </li>
            <li> <a href="#tab_default_2" data-toggle="tab"> Các bước vay</a> </li>
        </ul>
        <div class="tab-content margin-tops">
          <div class="tab-pane active fade in" id="tab_default_1">
            <div class="col-md-4">
              <div class="row"> <img src="<?php echo $tab1_img; ?>" class="img-responsive"> </div>
            </div>
               <div class="col-md-8">
               <?php echo $tab1content; ?>
               
               </div>
          </div>

          <div class="tab-pane fade" id="tab_default_2">
            <div class="col-md-4">
             <div class="row"> <img src="<?php echo $tab2_img; ?>" class="img-responsive"> </div>
            </div>
               <div class="col-md-8">
               <?php echo $tab2content; ?>   
               </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!--home-content-top ends here--> 

<!-- end thay the -->



<!-- tab contact -->
<div class="web-tab-contact" id="contact-form">
         <div class="dis-inflex">
            <div class="contact-img">
               <img style="width: 100%;height: 100%;" src="<?php echo IMGPATH;?>img-contact.png">
            </div>
            <div class="contact-content">
               
               <h2>Đăng ký vay</h2>
               <p>Hãy để lại thông tin, chúng tôi sẽ liên hệ bạn trong 24h</p>

                  

               <form class="formdata" method="post" name="formdata">
                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-8">
                        <label>Họ và tên</label>
                              <span class="wrap_name">
                                 <input class="name form-control" name="name" type="text"/>
                              </span>
                        </div>
                        <div class="col-md-4">
                              <label for="namsinh">Năm sinh</label>
                              <span>
                              <input type="text" name="namsinh" class="form-control namsinh" id="namsinh">
                              </span>
                        </div>
                     </div>
                  </div>




                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-4">
                        <label>Số CMTMD/CCCD</label>
                              <span class="wrap_cmnd">
                                 <input class="cmnd form-control" name="cmnd" type="text"/>
                              </span>
                        </div>
                        <div class="col-md-4">
                              <label>Điện thoại</label>
                              <span class="wrap_cmnd">
                                 <input  class="sdt form-control" name="sdt" type = "text" maxlength="15"/>
                              </span>
                        </div>
                        <div class="col-md-4">
                              <label>Email</label>
                              <span class="wrap_cmnd">
                                 <input class="email form-control" name="email" type="email"/>
                              </span>
                        </div>

                     </div>
                  </div>



                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-12">
                              <label>Đơn vị công tác</label>
                              <span class="wrap_cmnd">
                                 <input class="donvicongtac form-control" name="donvicongtac" type="text"/>
                              </span>
                        </div>
                     </div>
                  </div>



                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-6">
                              <label>Phòng ban</label>
                              <span class="wrap_cmnd">
                                 <input class="phongban form-control" name="phongban" type="text"/>
                              </span>
                        </div>

                        <div class="col-md-6">
                              <label>Vị trí/Chức danh</label>
                              <span class="wrap_cmnd">
                                 <input class="chucdanh form-control" name="chucdanh" type="text"/>
                              </span>
                        </div>
                     </div>
                  </div>



                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-6">
                              <label>Hợp đồng lao động</label>
                                 <span class="wrap_cmnd">
                                 <select class="form-control hopdong" id="">
                                    <option>1 Năm</option>
                                    <option>3 Năm</option>
                                    <option>Không thời hạn</option>
                                 </select>
                              </span>
                        </div>

                        <div class="col-md-6">
                              <label>Thu nhập trung bình/tháng</label>
                              <span class="wrap_cmnd">
                                 <input class="thunhap form-control" name="thunhap" type="text"/>
                              </span>
                        </div>
                     </div>
                  </div>


                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-12">
                              <label>Địa chỉ thường trú</label>
                                 <span class="wrap_cmnd">
                                 <input class="diachithuongtru form-control" name="diachithuongtru" type="text"/>
                              </span>
                        </div>
                     </div>
                  </div>

                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-12">
                              <label>Địa chỉ lắp đặt</label>
                                 <span class="wrap_cmnd">
                                 <input class="diachilapdat form-control" name="diachilapdat" type="text"/>
                              </span>
                        </div>
                     </div>
                  </div>

                  <div class="btn-hen-tuvan">
                     <button type="submit" value="Hẹn gọi tư vấn"/>Hẹn gọi tư vấn</button>
                     <button class="hidden" type="reset"/>reset</button>
                  </div>
                  <!-- <button type="submit" class="btn btn-primary">Pocessing</button> -->
               </form>








               <form class="formdata1 hidden" method="post" name="formdata1">

                  <span class="wrap_name">
                     <input class="name" name="name" type="text" style="width: 100%" placeholder="Họ và tên"/>
                  </span>
                  
                  <span class="wrap_sdt">
                     <input  class="sdt" name="sdt" placeholder="SĐT" style="width: 49%" type = "text" maxlength="15"/>
                  </span>
                  <span class="wrap_email">
                     <input required class="email" name="email" type="email" style="width: 49%;margin-left: 4px" placeholder="Email"/>
                  </span>
                  <span class="wrap_cmnd">
                     <input required class="cmnd" name="cmnd" type="text" style="width: 49%" placeholder="CMND"/>
                  </span>
                  <span class="wrap_coquan">
                     <input class="coquan" name="coquan" type="text" style="width: 49%;margin-left: 4px" placeholder="Cơ quan làm việc"/>
                  </span>
                  <span class="wrap_diachi">
                     <input class="diachilap" name="diachilap" type="text" style="width: 49%" placeholder="<?php echo __('Địa chỉ lắp đặt','phongmy'); ?>"/>
                  </span>
                  
                  <select class="thanhpho" style="width: 49%;margin-left: 4px;">
                           <option value="">Thành phố Hà Nội</option>
                           <option value="02">Tỉnh Hà Giang</option>
                           <option value="04">Tỉnh Cao Bằng</option>
                           <option value="06">Tỉnh Bắc Kạn</option>
                           <option value="08">Tỉnh Tuyên Quang</option>
                           <option value="10">Tỉnh Lào Cai</option>
                           <option value="11">Tỉnh Điện Biên</option>
                           <option value="12">Tỉnh Lai Châu</option>
                           <option value="14">Tỉnh Sơn La</option>
                           <option value="15">Tỉnh Yên Bái</option>
                           <option value="17">Tỉnh Hoà Bình</option>
                           <option value="19">Tỉnh Thái Nguyên</option>
                           <option value="20">Tỉnh Lạng Sơn</option>
                           <option value="22">Tỉnh Quảng Ninh</option>
                           <option value="24">Tỉnh Bắc Giang</option>
                           <option value="25">Tỉnh Phú Thọ</option>
                           <option value="26">Tỉnh Vĩnh Phúc</option>
                           <option value="27">Tỉnh Bắc Ninh</option>
                           <option value="30">Tỉnh Hải Dương</option>
                           <option value="31">Thành phố Hải Phòng</option>
                           <option value="33">Tỉnh Hưng Yên</option>
                           <option value="34">Tỉnh Thái Bình</option>
                           <option value="35">Tỉnh Hà Nam</option>
                           <option value="36">Tỉnh Nam Định</option>
                           <option value="37">Tỉnh Ninh Bình</option>
                           <option value="38">Tỉnh Thanh Hóa</option>
                           <option value="40">Tỉnh Nghệ An</option>
                           <option value="42">Tỉnh Hà Tĩnh</option>
                           <option value="44">Tỉnh Quảng Bình</option>
                           <option value="45">Tỉnh Quảng Trị</option>
                           <option value="46">Tỉnh Thừa Thiên Huế</option>
                           <option value="48">Thành phố Đà Nẵng</option>
                           <option value="49">Tỉnh Quảng Nam</option>
                           <option value="51">Tỉnh Quảng Ngãi</option>
                           <option value="52">Tỉnh Bình Định</option>
                           <option value="54">Tỉnh Phú Yên</option>
                           <option value="56">Tỉnh Khánh Hòa</option>
                           <option value="58">Tỉnh Ninh Thuận</option>
                           <option value="60">Tỉnh Bình Thuận</option>
                           <option value="62">Tỉnh Kon Tum</option>
                           <option value="64">Tỉnh Gia Lai</option>
                           <option value="66">Tỉnh Đắk Lắk</option>
                           <option value="67">Tỉnh Đắk Nông</option>
                           <option value="68">Tỉnh Lâm Đồng</option>
                           <option value="70">Tỉnh Bình Phước</option>
                           <option value="72">Tỉnh Tây Ninh</option>
                           <option value="74">Tỉnh Bình Dương</option>
                           <option value="75">Tỉnh Đồng Nai</option>
                           <option value="77">Tỉnh Bà Rịa - Vũng Tàu</option>
                           <option value="79">Thành phố Hồ Chí Minh</option>
                           <option value="80">Tỉnh Long An</option>
                           <option value="82">Tỉnh Tiền Giang</option>
                           <option value="83">Tỉnh Bến Tre</option>
                           <option value="84">Tỉnh Trà Vinh</option>
                           <option value="86">Tỉnh Vĩnh Long</option>
                           <option value="87">Tỉnh Đồng Tháp</option>
                           <option value="89">Tỉnh An Giang</option>
                           <option value="91">Tỉnh Kiên Giang</option>
                           <option value="92">Thành phố Cần Thơ</option>
                           <option value="93">Tỉnh Hậu Giang</option>
                           <option value="94">Tỉnh Sóc Trăng</option>
                           <option value="95">Tỉnh Bạc Liêu</option>
                           <option value="96">Tỉnh Cà Mau</option>
                  </select>
                  <div class="btn-hen-tuvan">
                     <button type="submit" value="Hẹn gọi tư vấn"/>Hẹn gọi tư vấn</button>
                     <button class="hidden" type="reset"/>reset</button>
                  </div>
               </form>
               
               <span class="content-before"></span>
            </div>
         </div>
</div>

<?php

      $title1 = get_field('text_1_-_tận_huởng_lai_suất','option');
      $title2 = get_field('text_2','option');
      $link1 = get_field('link_3','option');

      $title01= get_field('text_cau_hỏi_thuờng_gặp','option');

      $title02= get_field('text_cau_hỏi_thuờng_gặp_copy','option');
      $title03= get_field('text_cau_hỏi_thuờng_gặp_copy2','option');
      $title04= get_field('text_cau_hỏi_thuờng_gặp_copy3','option');
      $link05= get_field('link_cau_hỏi_thuờng_gặp','option');
     
?>

<!-- tab questionnn -->
<div class="web-question">

         <div class="dis-inflex">
            <div class="web-laisuat">
               <h3><?php echo $title1;?></h3>
               <p><?php echo $title2;?></p>
               <div class="btn-lh-hotro">
                  <a href="<?php echo $link1;?>">Xem thêm</a>
               </div>
               <img style="position: absolute;top: 40px;right: 40px;" src="<?php echo IMGPATH;?>lai suat.png">
            </div>
            <div class="web-cauhoi">
               <h3><?php echo $title01;?></h3>
               <h5><img src="<?php echo IMGPATH;?>smallRight.png"> <?php echo $title02;?></h5>
               <h5><img src="<?php echo IMGPATH;?>smallRight.png"> <?php echo $title03;?> </h5>
               <h5><img src="<?php echo IMGPATH;?>smallRight.png"> <?php echo $title04;?> </h5>
               <div class="btn-xemthem">
                 <a href="<?php echo $link05;?>">Xem thêm</a>
               </div>
               <img style="position: absolute;top: 40px;right: 40px;" src="<?php echo IMGPATH;?>sms.png">
            </div>
         </div>
      </div>


<!-- <section id="brand"> -->
<div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>Đối tác EVN Slolar</h1>
        <div class="owl-carousel logoitem">


        <?php 
          $images = get_field('danh_sach_logo','option');
                if( $images ): ?>
                        <?php foreach( $images as $data ): ?>

                          <div class="owl-carousel--item">
                          <img class="img-responsive" src="<?php echo $data; ?>">
                        </div>
                              <?php endforeach; ?>
                <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
<!-- </section> -->

<?php get_footer(); ?>





















