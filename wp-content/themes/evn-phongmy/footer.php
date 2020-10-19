
<?php wp_footer();?>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>

<?php 
        $diachi1 = get_field('diachi1','option');
        $diachi2 = get_field('diachi2','option');
        $diachi3 = get_field('diachi3','option');

        $hotlinecn1 = get_field('hotlinecn1','option');
        $hotlinecn2 = get_field('hotlinecn2','option');
        $hotlinecn3 = get_field('hotlinecn3','option');
    ?>

<div class="web-footer">
   <div class="container">
         <div class="web-footer-content">
               <div class="chi-nhanh">
                  <div class="dis-inflex1111">
                     <div class="chinhanh-left1">
                           <h3>Công ty Tài chính Cổ phần Điện lực</h3>
                           <p><?php echo $diachi3;?></p>
                           <p><?php echo $hotlinecn3;?></p>
                           <p>Giấy phép số 90/GP-TTĐT cấp ngày 29/08/2008</p>
                     </div>
                     
                  </div>
               </div>



               <div class="chi-nhanh">
                  <div class="dis-inflex">
                     
                     <div class="chinhanh-left">
                        <h3>Chi nhánh Thành phố Đà Nẵng</h3>
                        <p><?php echo $diachi1;?></p>
                        <p><?php echo $hotlinecn1;?></p>
                     </div>

                     <div class="chinhanh-right">
                        <h3>Chi nhánh Thành phố Hồ Chí Minh</h3>
                        <p><?php echo $diachi2;?></p>
                        <p><?php echo $hotlinecn2;?></p>
                     </div>

                  </div>
               </div>

         </div>
         <div class="copy-right">Bản quyền &copy 2020 thuộc Công ty Tài Chính Cổ phần Điện lực</div>
   </div>
</div>




<!-- MODAL POPUP THONG BAO THANH CONG -->
<!-- Modal -->
<div class="modal fade" id="popupsuccess" tabindex="-1" role="dialog" aria-labelledby="popupsuccess" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body text-center align-center">
         <p class="alert success">
            <img src="<?php echo IMGPATH; ?>tick.png" alt="tickk" style="width: 100px;
    display: block;
    margin: 0 auto;
    margin-bottom: 15px;"/>
            <?php echo __('Bạn đã đăng ký tư vấn thành công','phongmy'); ?>
         </p>

      </div>
       
    </div>
  </div>
</div>

          
      <script>
         function openCity(evt, cityName) {
           var i, x, tablinks;
           x = document.getElementsByClassName("city");
           for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";
           }
           tablinks = document.getElementsByClassName("tablink");
           for (i = 0; i < x.length; i++) {
             tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
           }
           document.getElementById(cityName).style.display = "block";
           evt.currentTarget.className += " w3-red";
         }
      </script>
      <script>
         var navList = document.getElementById("nav-lists");
         function Show() {
         navList.classList.add("_Menus-show");
         }
         
         function Hide(){
         navList.classList.remove("_Menus-show");
         }


         //owl slider
         jQuery('.web-background-lite').owlCarousel({
            loop:true,
            margin:10,
            items:1,
            nav: true,
            navText: ['<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arr_left.png"/>', '<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arr_right.png"/>'],
            dots: false,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true
         });

         //logo doi tac
         jQuery('.logoitem').owlCarousel({
         items: 6,
         margin: 10,
         loop: true,
         center: true,
         mouseDrag: true,
         touchDrag: true,
         nav: false,
         dots: true,
         lazyLoad: true,
         autoplay: true,
         autoplayTimeout: 3000,
         autoplayHoverPause: true,
         
         responsive:{
        0:{
            items:2,
        },
        600:{
            items:3,
        },
        1000:{
            items:6,
        }
    }

         });


   //menu bootstrap auto hover
   var windowsize = jQuery(window).width();
   if(windowsize > 768){
      jQuery(function(){
         jQuery("#menu-main li").hover(
            function() {
               jQuery(this).toggleClass('open');
            },
            function() {
               jQuery(this).toggleClass('open');
            });
      });
   }

</script>



<script type="text/javascript">

$(function() {

   jQuery.validator.addMethod('valid_phone', function (value) {
   //  var regex = /^(09|03|07|08|05)+([0-9]{8})$/; 
   var regex= /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/; //allow + and any number
    return value.trim().match(regex);
  });

   var name_vn = 'Vui lòng nhập họ tên';
   var name_en = 'Please enter full name';


   $("form[name='formdata']").validate({
      rules: {
         name: "required",

         sdt:  {
            required : true,
            // digits: true,
            valid_phone: true,
            minlength: 8,
            maxlength: 15
         },

         email: {
         required: true,
         email: true
         },
         cmnd: {
         required: true,
         digits: true
         }
         
      },
      messages: {
         name: name_vn,
         sdt: {
            valid_phone: "SĐT chưa hợp lệ",
            required: "Vui lòng điền SDT",
            // digits: "SĐT chưa hợp lệ",
            minlength: "SĐT chưa hợp lệ",
            maxlength: "SĐT chưa hợp lệ"
         },
         email: {
            required: "Vui lòng điền email",
            email: "Email không hợp lệ"
         },
         cmnd: "Số CMND không hợp lệ"
         // email: "Please enter a valid email address"
      },
      submitHandler: function(form) {
         // form.submit();


         // start ajax

         var name = $('.name').val();
               var sdt = $('.sdt').val();
               var email = $('.email').val();
               var cmnd = $('.cmnd').val();
               var coquan = $('.coquan').val();
               var diachilap = $('.diachilap').val();
               var thanhpho = $('.thanhpho option:selected').text();
               
               event.preventDefault();

               $.ajax({
                    type : "post", //Phương thức truyền post hoặc get
                    dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
                    url : '<?php echo admin_url('admin-ajax.php');?>', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                    data : {
                        action: "senddata", //Tên action
                        name: name,
                        sdt: sdt,
                        email : email,
                        cmnd: cmnd,
                        coquan:coquan,
                        diachilap: diachilap,
                        thanhpho : thanhpho
                    },
                    context: this,
                    beforeSend: function(){
                        //Làm gì đó trước khi gửi dữ liệu vào xử lý
                        $('.content-before').addClass('before');
                    },
                    success: function(response) {
                       

                        if(response.success) {
                           console.log(response);
                           
                           $('.content-before').removeClass('before');
                           $('.formdata').trigger("reset");
                           

                           $("#popupsuccess").modal('show');

                           setTimeout(function() {
                              $("#popupsuccess").modal('hide');
                           }, 5000);
                        }
                        else {
                            alert('Đã có lỗi xảy ra');
                        }
                    },
                    error: function( jqXHR, textStatus, errorThrown ){
                        //Làm gì đó khi có lỗi xảy ra
                        console.log( 'The following error occured: ' + textStatus, errorThrown );
                    }
                })
                return false;

         // end ajax
      }
   });
   });

</script>

</body>
</html>  