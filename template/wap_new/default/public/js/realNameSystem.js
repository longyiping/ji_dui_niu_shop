$(function(){
	$('#submit').click(function(){
		var myReg = /^[\u4e00-\u9fa5]+$/;
		var userName = $('#userName').val(),
			userCard = $('#userCard').val();
		if(userName == ''){
			$('.msg').html('请输入真实姓名!').show();
			$("#userName").focus();
		}else if(!myReg.test(userName)){
			$('.msg').html('请输入正确的姓名!').show();
			$("#userName").focus();
			$('#userName').val('');
		}else if(userCard == ''){
			$('.msg').html('请输入身份证号!').show();
			$("#userCard").focus();
		}else{
			element(userCard);
		}
	})
	$("input[id$='Img']").change(function() {
		var filepath = $(this).val();
		var extStart = filepath.lastIndexOf(".");
		var ext = filepath.substring(extStart, filepath.length).toUpperCase();
		if (ext != ".PNG" && ext != ".JPG" &&  ext != ".JPEG") {
			alert("图片限于png,jpg,jpeg格式");
			//清空文件选择
			$(this).after($(this).clone(true).val(""))
			$(this).remove();
		}
		if(this.files){	//IE10及其它
			var fileObject = this.files[0];
			if(fileObject){
				var fileSize = fileObject.size,
					size = fileSize/1024/1024;
				if (size > 5){
					alert("上传的图片大小不能超过5M!");
					//清空文件选择
					$(this).after($(this).clone(true).val(""));
					$(this).remove();
					return;
				}
				//获取图片blob编码
				var windowURL = window.URL || window.webkitURL,
				dataURL = windowURL.createObjectURL(fileObject);
				$(this).next('img').attr("src", dataURL).show();     //将图片路劲赋给img标签
			}
		}
    });
})
function element(element) {   //身份证号码验证
    var value = element,
        isValid = true;
    var cityCode = {11:"北京",12:"天津",13:"河北",14:"山西",15:"内蒙古",21:"辽宁",22:"吉林",23:"黑龙江 ",31:"上海",32:"江苏",33:"浙江",34:"安徽",35:"福建",36:"江西",37:"山东",41:"河南",42:"湖北 ",43:"湖南",44:"广东",45:"广西",46:"海南",50:"重庆",51:"四川",52:"贵州",53:"云南",54:"西藏 ",61:"陕西",62:"甘肃",63:"青海",64:"宁夏",65:"新疆",71:"台湾",81:"香港",82:"澳门",91:"国外 "};
    var rFormat =/^\d{6}(19|20)\d{2}(0[1-9]|1[012])(0[1-9]|[12]\d|3[01])\d{3}(\d|X)$|^\d{6}\d{2}(0[1-9]|1[012])(0[1-9]|[12]\d|3[01])\d{3}$/;    // 格式验证
    if ( !rFormat.test(value) || !cityCode[value.substr(0,2)] ) {
        isValid = false;
    }else if (value.length === 18) {// 18位身份证需要验证最后一位校验位
        var Wi = [ 7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2, 1 ];    // 加权因子
        var Ci = "10X98765432"; // 校验字符
        // 加权求和
        var sum = 0;
        for (var i = 0; i < 17; i++) {
            sum += value.charAt(i) * Wi[i];
        }
        // 计算校验值
        var C17 = Ci.charAt(sum % 11);
        // 与校验位比对
        if ( C17 !== value.charAt(17) ) {
            isValid =false;
        }
    }
    return isValid || $('.msg').html('请填写正确的身份证号码!').show();
}
