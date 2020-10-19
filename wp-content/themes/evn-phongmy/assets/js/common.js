$(document).ready(function(){
	let id_user = $("input[name='EVNCustomerId']");    
	
	id_user.focusout(function(){
        if(id_user.val() === ''){//Neu khong co ma
            
        }else { // neu ma la: PD060082989 - Sản xuất, PD06000014083 - Sinh hoạt, PD060080357 - Thương mại, PD06000014116 - Vãng lai
            $("#sl-province option[value=2]").prop("selected", "selected");
            $("#sl-district option[value=2]").prop("selected", "selected");
        }
    });
	
    $("#phrase-one").click(function(){
		$("#step-one").css('display','none');
		$("#step-two").css('display','flex');
        if(id_user.val()==='' || id_user.val()=== 'PD06000014116'){ //PD06000014116 - Vang lai 
			$("#plan-code, #plan-tm").css('display','none');	
			$("#plan-vl").css('display','flex');
        }else{
			//chua xu ly
			if(id_user.val()=== 'PD06000014083'){//PD06000014083 - Sinh hoat
				$("#plan-vl, #plan-tm").css('display','none');	
				$("#plan-code").css('display','flex');
			} else {//Thuong mai
				$("#plan-code, #plan-vl").css('display','none');			
				$("#plan-tm").css('display','flex');
			}
            
        }
    });
	
	$("#btn_dk_vay").click(function(){
		var money_loan = $("#tiendien_bq_3").val();
		var term_loan = $("#tyledung_banngay").val();
		var dt_use = $("#dt_use .btn-active").data("val");
		var dt_repay_plan = $("#dt_repay_plan .btn-active").data("val");
		var rules_1 = $("#dieukhoan-1").val();
		var rules_2 = $("#dieukhoan-2").val();		
		var rules_3 = $("#dieukhoan-3").val();		
		
		if(rules_1=== '0' || rules_2=== '0' || rules_3=== '0'){
            $("#loan_info").css('display','block');
            $("#reg_profile, #loan_approval, #contract, #reg_ok").css('display','none');						
        }else{
			$("#reg_profile").css('display','block');
            $("#loan_info, #loan_approval, #contract, #reg_ok").css('display','none');					
            
        }
	});
	
	$("#btn_reg_profile").click(function(){
		$("#loan_approval").css('display','block');
		$("#loan_info, #reg_profile, #contract, #reg_ok").css('display','none');
	});
	
	$("#btn_loan_approval").click(function(){
		var rules_4 = $("#upload-1").val();
		if(rules_4=== '0'){
            $("#loan_approval").css('display','block');
			$("#loan_info, #reg_profile, #contract, #reg_ok").css('display','none');						
        }else{
			$("#contract").css('display','block');
			$("#loan_info, #reg_profile, #loan_approval, #reg_ok").css('display','none');					
            
        }		
	});
	
	$("#btn_contract").click(function(){
		$("#reg_ok").css('display','block');
		$("#loan_info, #reg_profile, #loan_approval, #contract ,.web-header,.bg-title,.main-vay").css('display','none');
	});
	
	
	//callback page
	$("#callback_reg_profile").click(function(){
		$("#loan_info").css('display','block');
		$("#reg_profile, #loan_approval, #contract, #reg_ok").css('display','none');
	});
	$("#callback_loan_approval").click(function(){
		$("#reg_profile").css('display','block');
		$("#loan_info, #loan_approval, #contract, #reg_ok").css('display','none');
	});
	$("#callback_contract").click(function(){
		$("#loan_approval").css('display','block');
		$("#loan_info, #reg_profile, #contract, #reg_ok").css('display','none');
	});
	
	/*$(".btn_view_result").click(function(){
		var ck_hotrotaichinh = $("#myCheckk").val();
		if(ck_hotrotaichinh===''){
            $("#tab_vayvondautu, #menu2").css('display','none');			
			$("#estimate-equals").css('display','block');
        }else{
			$("#tab_vayvondautu, #menu2").css('display','block');			
			$("#estimate-equals").css('display','block');
            
        }
	});
	$("#bt-supplier-noncode").click(function(){
		var sup_pin_noncode = $("#supplier-pin-noncode").val();
		if(sup_pin_noncode===''){
            $("#estimate-simple").css('display','none');			
			$("#estimate-equals").css('display','block');
        }else{
			$("#estimate-equals").css('display','none');			
			$("#estimate-simple").css('display','block');
            
        }
	});*/
	
	let error = 0;
	let user_name = $("input[name='input-name']");
	user_name.focusout(function(){
		if(user_name.val() === ''){
			showWarning(user_name,'Họ và tên không được trống');		
		}else {
			hideWarning(user_name);
			error = 1;
		}
	});
	
	let user_phone = $("input[name='input-phone']");
	user_phone.focusout(function(){
		if(user_phone.val() === ''){
			showWarning(user_phone,'Số điện thoại không được trống');
		}else if(checkPhoneNumber(user_phone.val()) === false){
			showWarning(user_phone,'Số điện thoại không tồn tại');
		}else {
			hideWarning(user_phone);
			error = 1;
		}
	});
	
	let use_email = $("input[name='input-email']");
	use_email.focusout(function(){
		if(use_email.val() === ''){
			showWarning(use_email,'Email không được trống');
		}else if(isEmail(use_email.val()) === false){
			showWarning(use_email,'Email không tồn tại');
		}else {
			hideWarning(use_email);
			error = 1;
		}
	});
		
	$("#send-contact").click(function(){
		let error = 0;
		if(user_name.val() === ''){
			showWarning(user_name,'Họ và tên không được trống');		
		}else {
			hideWarning(user_name);
			error = 1;
		}
		
		if(user_phone.val() === ''){
			showWarning(user_phone,'Số điện thoại không được trống');
		}else if(checkPhoneNumber(user_phone.val()) === false){
			showWarning(user_phone,'Số điện thoại không tồn tại');
		}else {
			hideWarning(user_phone);
			error = 1;
		}
		
		if(use_email.val() === ''){
			showWarning(use_email,'Email không được trống');
		}else if(isEmail(use_email.val()) === false){
			showWarning(use_email,'Email không tồn tại');
		}else {
			hideWarning(use_email);
			error = 1;
		}
		
		if(error === 1) {
			$('.sm-success').css('display','block');
			setTimeout(function(){ $('.sm-success').css('display','none');}, 1000);
		}
	});
	
	$(".tech-mono").click(function(){
		$(".tech-poly").removeClass('active');
		$(".tech-polymono").removeClass('active');
		$(".tech-mono").addClass('active');
	});
	$(".tech-poly").click(function(){
		$(".tech-polymono").removeClass('active');
		$(".tech-mono").removeClass('active');
		$(".tech-poly").addClass('active');
	});
	$(".tech-polymono").click(function(){
		$(".tech-mono").removeClass('active');
		$(".tech-poly").removeClass('active');
		$(".tech-polymono").addClass('active');
	});
	$(".type-mono").click(function(){
		$(".type-poly").removeClass('active');
		$(".type-mono").addClass('active');
	});
	$(".type-poly").click(function(){
		$(".type-mono").removeClass('active');
		$(".type-poly").addClass('active');
	});


	$(".tech-monoo").click(function(){
		$(".tech-polyy").removeClass('active');
		$(".tech-monoo").addClass('active');
	
	});
	$(".tech-polyy").click(function(){
		$(".tech-monoo").removeClass('active');
		$(".tech-polyy").addClass('active');
		
	});

	// $(".tech-polymono").click(function(){
	// 	$(".tech-monoo").removeClass('active');
	// 	$(".tech-polyy").removeClass('active');
	// 	$(".tech-polymono").addClass('active');
	// });
	// $(".type-monoo").click(function(){
	// 	$(".type-polyy").removeClass('active');
	// 	$(".type-monoo").addClass('active');
	// });
	// $(".type-polyy").click(function(){
	// 	$(".type-monoo").removeClass('active');
	// 	$(".type-polyy").addClass('active');
	// });
});


function SetFormUse(btnId,btn2,btn3) {
	$(""+btnId).removeClass('btn-active');
	$(""+btn2).removeClass('btn-active');
	$(""+btn3).removeClass('btn-active');

	$(btnId).addClass('btn-active');

	var loaitieuthu = "sinhhoat";
	switch (btnId) {
		case ""+btnId:			
			break;
		case ""+btn2:
			loaitieuthu = "sanxuat";						
			break;
		case ""+btn3:
			loaitieuthu = "thuongmai";						
			break;
	}
	
}

function SetRules(id) {	
	var checkBox = document.getElementById(""+id);

	if (checkBox.checked == true) {		
		$("#"+id).val("1");
	} else {		
		$("#"+id).val("0");
	}
	
}

function closePopup(id){
	id = id.trim();
	$("#"+id).hide();
}

function showWarning(field,content){
    if(field.hasClass('missing')){
        field.removeClass('missing');
        field.parent().find("h5").remove();
    }
    field.addClass('missing');
    field.parent().append('<h5 class="noti" style="color:#F2684A;font-size: 14px;"><i class="fa fa-exclamation-circle"></i> ' + content + '</h5>')
    return true;
}
function hideWarning(field){
    field.removeClass('missing');
    field.parent().find("h5").remove();
    return true;
}
function isEmail(email) {
    var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(email);
}
function checkPhoneNumber(phone){
    var check = false;
    var regexA=/^(091|094|088|089|090|093|096|097|098|099|092|032|033|034|035|036|037|038|039|070|076|077|078|079|081|082|083|084|085|086|052|056|058|059)\d+/;
    var regexB=/^(0123|0124|0125|0127|0129|0120|0121|0122|0126|0128|0162|0163|0164|0165|0166|0167|0168|0169)\d+/;
    if(regexA.test(phone) === true){
        if(phone.length === 10)
            check = true;
    }
    if(regexB.test(phone) === true) {
        if(phone.length === 11)
            check = true;
    }
    return check;
}

function myFunctionn() {
  var checkBoxx = document.getElementById("myCheckk");
  var thoigianvayy = document.getElementById("thoigianvayy");
  var tilevayy = document.getElementById("tilevayy");

  if (checkBoxx.checked == true){
    thoigianvayy.style.display = "block";
     tilevayy.style.display = "block";
  } else {
     thoigianvayy.style.display = "none";
      tilevayy.style.display = "none";
  }
}