<?php wp_footer();?>
<script type='text/javascript' src="<?php echo JSPATH;?>jquery.validate.min.js" id="jvalidate"></script>

<!-- <script src="https://momentjs.com/downloads/moment.js" type="text/javascript"></script> -->

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

         //datetime picker
                  $(function () {
                     var today = new Date();
                     var yesterday = today.setDate(today.getDate() - 1);
                     $('#namsinh').datetimepicker({
                        format: 'DD/MM/YYYY',
                        // defaultDate:today,
                        minDate:'+1970/01/01',
                        maxDate:yesterday,
                     });
                     $("#namsinh").val("");
                  });

               $(document).ready(function(){

                        //add comma when input is number
                        $("input[name='thunhap']").keyup(function(event){
                           // skip for arrow keys
                           if(event.which >= 37 && event.which <= 40){
                              event.preventDefault();
                           }
                           var $this = $(this);
                           var num = $this.val().replace(/,/gi, "");
                           var num2 = num.split(/(?=(?:\d{3})+$)/).join(",");
                           $this.val(num2);
                     });
               });


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



   

   jQuery.validator.addMethod('allowComma', function (value) {
      var regex= /^[0-9.,]+$/; //allow , and any number
      return value.trim().match(regex);
   });

   jQuery.validator.addMethod('notspecial', function (value) {
      var regex= /^[a-zA-Z ]+$/; //allow , and any number
      return value.trim().match(regex);
   });

   jQuery.validator.addMethod('valid_phone', function (value) {
   //  var regex = /^(09|03|07|08|05)+([0-9]{8})$/; 
   var regex= /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/; //allow + and any number
    return value.trim().match(regex);
  });

   var name_vn = 'Vui lòng nhập họ tên';
   var name_en = 'Please enter full name';


   $("form[name='formdata']").validate({
      rules: {
         name: {
            required : true,
            notspecial: true
         },
         namsinh: {
            required : true,
            // maxlength: 4,
            // minlength: 4
         },
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
         },
         donvicongtac: "required",
         phongban: "required",
         chucdanh: "required",
         thunhap: {
            required: true,
            // digits: true,
            allowComma: true
         },
         diachithuongtru: "required",
         diachilapdat: "required"
         
      },
      messages: {
         name: {
            required: name_vn,
            notspecial: name_vn
         },
         namsinh: {
            required: "Năm sinh sai",
            // digits: "Năm sinh sai",
            // minlength: "Năm sinh sai",
            // maxlength: "Năm sinh sai",
         },
         sdt: {
            valid_phone: "Vui lòng điền SĐT",
            required: "Vui lòng điền SĐT",
            minlength: "Vui lòng điền SĐT",
            maxlength: "Vui lòng điền SĐT",
         },
         email: {
            required: "Vui lòng điền Email",
            email: "Vui lòng điền Email",
         },
         cmnd: "Hãy kiểm tra CMND",
         donvicongtac: "Vui lòng nhập đơn vị công tác",
         phongban: "Vui lòng nhập phòng ban",
         chucdanh: "Vui lòng nhập chức danh",
         thunhap:{
            required: "Vui lòng nhập thu nhập",
            allowComma: "Hãy nhập số",
         },
         diachithuongtru: "Vui lòng nhập địa chỉ thường trú",
         diachilapdat: "Vui lòng nhập địa chỉ lắp đặt"

      },
      submitHandler: function(form) {
         // form.submit();


         // start ajax

               var name = $('.name').val();
               var namsinh = $('.namsinh').val();
               var cmnd = $('.cmnd').val();
               var sdt = $('.sdt').val();
               var email = $('.email').val();
              
               var donvicongtac = $('.donvicongtac').val();
               var phongban = $('.phongban').val();
               var chucdanh = $('.chucdanh').val();
               var hopdong = $('.hopdong option:selected').text();
               var thunhap = $('.thunhap').val();
               var diachithuongtru = $('.diachithuongtru').val();
               var diachilapdat = $('.diachilapdat').val();
               
               event.preventDefault();

               $.ajax({
                    type : "post", //Phương thức truyền post hoặc get
                    dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
                    url : '<?php echo admin_url('admin-ajax.php');?>', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                    data : {
                        action: "senddata", //Tên action
                        name: name,
                        namsinh:namsinh,
                        sdt: sdt,
                        email : email,
                        cmnd: cmnd,
                        donvicongtac:donvicongtac,
                        phongban:phongban,
                        chucdanh:chucdanh,
                        hopdong: hopdong,
                        thunhap: thunhap,
                        diachithuongtru: diachithuongtru,
                        diachilapdat : diachilapdat
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