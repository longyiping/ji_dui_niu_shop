var countdown=60; 
function sendemail(){
    var obj = $("#btn");
    var mobile = $("#phone").val();
	var vertification = $("#code").val();
//  $.ajax({       //获取验证码
//  	type: "post",
//		url: "APP_MAIN/login/sendSmsRegisterCode",
//		data: {"mobile":mobile},
//  	dataType:'json',
//  	success:function(data){
//  		if(data['code']=='0'){
//				settime(obj);
//			}else{
//				$('.msg').html(data["message"]).show();
//				return false;
//			}
//  	},
//  });
settime(obj);
}
function settime(obj) { //发送验证码倒计时
    if(countdown == 0) { 
        obj.attr('disabled',false); 
        //obj.removeattr("disabled"); 
        obj.val("发送验证码");
        countdown = 60; 
        return;
    }else { 
        obj.attr('disabled',true);
        obj.val("重新发送(" + countdown + ")");
        countdown--; 
    } 
setTimeout(function() { 
    settime(obj) 
},1000)}
// 身份证
function idCard(e){    //身份证
	var elValue = e;
	if( !(elValue.length == 18 || elValue.length == 15) ){
		return '身份证错误，请重新输入';
	}
	if(/^(\d{18}|\d{17}(\d|X|x))$/.test(elValue)){	//身份证号为18位校检年月日
		var date = new Date(),	//日期对象
		oYear = date.getFullYear(),	//当前年份
		idYear = elValue.substr(6,4);	//获取用户输入的身份证生日年份
		if(oYear - idYear > 120 || oYear - idYear < 3){
			return '身份证错误，请重新输入';
		};
		var month = elValue.substr(10,2);	//获取用户输入的身份证生日月份
		if(month<1 || month>12){
			return '身份证错误，请重新输入';
		};
		var day = elValue.substr(12,2);	//获取用户输入的身份证出生日期
		if(day < 1 || day > 31){
			return '身份证错误，请重新输入';
		}
		if(month == 4 || month == 6 || month == 9 || month == 11){
			if(day>30){
				return '身份证错误，请重新输入';
			}
		}else if( month == 2){
			if(idYear%400 == 0 || idYear%4 == 0 && idYear%100 != 0){
				if(day>29){
					return '身份证错误，请重新输入';
				}
			}else{
				if(day>28){
					return '身份证错误，请重新输入';
				}
			}
		}
		
		var coefficientArr = [7,9,10,5,8,4,2,1,6,3,7,9,10,5,8,4,2],	//身份证前17位对应系数
		remainderArr = [1,0,"X",9,8,7,6,5,4,3,2],	//余数对应的数字
		val = elValue.substr(17,1),	//获取身份证最后一位数
		sum = 0;	//用于求身份证前17位乘以系数之和
		for(var i=0, len = coefficientArr.length; i<len; i++){//身份证最后一位校检码求和	前17位乘以系数取模11
			sum += elValue.charAt(i)*coefficientArr[i];
		};
		if(remainderArr[sum%11] != val.toUpperCase()){//验证校检码
			return '身份证错误，请重新输入';
		}
	}else{	//身份证号为15位校检月份日期
		var idYear = Number(elValue.substr(6,2)) + 1900,	//用户输入的身份证年份
		month = elValue.substr(8,2);	//用户输入的身份证月份
		if(month<1 || month>12){
			return '身份证错误，请重新输入';
		};
		var day = elValue.substr(10,2);	//用户输入的身份证日期
		if(day < 1 || day > 31){
			return '身份证错误，请重新输入';
		}
		if(month == 4 || month == 6 || month == 9 || month == 11){
			if(day>30){
				return '身份证错误，请重新输入';
			}
		}else if( month == 2){
			if(idYear%400 == 0 || idYear%4 == 0 && idYear%100 != 0){
				if(day>29){
					return '身份证错误，请重新输入';
				}
			}else{
				if(day>28){
					return '身份证错误，请重新输入';
				}
			}
		}
	}
};
function bankcard(element) {   //银行卡正则
};
$(function(){
	$('#submit').click(function(){
		var bank = $('#bank').val();    //银行卡号
		var userName = $('#userName').val();   //用户名
		var userCard = $('#userCard').val();   //证件号
		var phone = $('#phone').val();    //手机号码
		var code = $('#code').val();    //验证码
		var mobile = /^1[3-9]\d{9}$/;
		if(bank == ''){
			$('.msg').html('请填写您的银行卡号!').show();
			$("#bank").focus();
		}else if(bank !=''){
			var value = bank.replace(/\s/g, ''),
		        isValid = true,
		        rFormat = /^[\d]{12,19}$/;
		    if( !rFormat.test(value) ) {
		       $('.msg').html('请填写有效的银行卡号!').show();
		    }else{
		        var arr = value.split('').reverse(),
		            i = arr.length,
		            temp,
		            sum = 0;
		        while ( i-- ) {
		            if ( i%2 === 0 ) {
		                sum += +arr[i];
		            } else {
		                temp = +arr[i] * 2;
		                sum += temp % 10;
		                if ( temp > 9 ) sum += 1;
		            }
		        }
		        if (sum % 10 !== 0 ) {
		            $('.msg').html('请填写有效的银行卡号!').show();
		        }
		    }
		    alert(userName == '');
		}else if(userName == ''){
			alert(123132);
			$('.msg').html('请填写用户名!').show();
			$("#userName").focus();
		}else if(userCard == ''){
			$('.msg').html('请填写证件号!').show();
			$("#userCard").focus();
		}else if(userCard != ''){
			$("#userCard").focus();
		}else if(phone == ''){
			$('.msg').html('请填写手机号码!').show();
			$("#phone").focus();
		}else if(!mobile.test(phone)){
			$('.msg').html('请填写有效的手机号!').show();
			$("#phone").focus();
		}else if(code == ''){
			$('.msg').html('请填写验证码!').show();
			$("#code").focus();
		}
		
	})
});
