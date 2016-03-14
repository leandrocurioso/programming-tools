//jQuery

$(document).ready(function(){
	
	//Load window
	$(window).on("load" , function(){
		$("body").fadeIn("normal"); 
	});
	
	//resetActive
	function resetActive(obj){
		obj.removeClass("active");
	}
	
	//addActive
	function addActive(obj){
		obj.addClass("active");
	}
	
	//stripHTML
	function stripHTML(dirtyString) {
		var container = document.createElement('div');
		container.innerHTML = dirtyString;
		return container.textContent || container.innerText;
	}
	
	//changeWindowFrame function
	var changeWindowFrame= function () {
		resetActive($(".dropdown-menu li"));
		addActive($(this).parent("li"));
		var windowFrameId = "#" + $(this).attr("data-frame");
		$(".box-frame").hide();
		$(windowFrameId).fadeIn("normal");
	}
	
	//jQuery change window frame
	$(".dropdown-menu li a").on("click" , changeWindowFrame);
	
	//validateField
	function validateField(objElement){
		if(objElement.val().length == 0){
			swal("Error =(", "You must type a string to continue with the action!", "error");
			return false;
		}
	}
	
	//Md5 action
	$("#md5-btn-submit").on("click" , function(){
		validateField($("#md5-ta-01"));
		$("#md5-ta-02").val( $().crypt({method:"md5",source:$("#md5-ta-01").val()}) );    
	});
	
	//SHA1 action
	$("#sha1-btn-submit").on("click" , function(){
		validateField($("#sha1-ta-01"));
		$("#sha1-ta-02").val( $().crypt({ method:"sha1",source:$("#sha1-ta-01").val() }) );    
	});
	
	//Base64 encode action
	$("#base64Encode-btn-submit").on("click" , function(){
		validateField($("#base64Encode-ta-01"));
		$("#base64Encode-ta-02").val( $().crypt({ method:"b64enc",source:$("#base64Encode-ta-01").val() }) );    
	});
	
	//Base64 decode action
	$("#base64Decode-btn-submit").on("click" , function(){
		validateField($("#base64Decode-ta-01"));
		$("#base64Decode-ta-02").val( $().crypt({ method:"b64dec",source:$("#base64Decode-ta-01").val() }) );    
	});
	
	//Xtea encode action
	$("#xteaEncode-btn-submit").on("click" , function(){
		validateField($("#xteaEncode-ta-01"));
		$("#xteaEncode-ta-02").val( $().crypt({ method:"xteaenc",source:$("#xteaEncode-ta-01").val() }) );    
	});
	
	//Xtea decode action
	$("#xteaDecode-btn-submit").on("click" , function(){
		validateField($("#xteaDecode-ta-01"));
		$("#xteaDecode-ta-02").val( $().crypt({ method:"xteadec",source:$("#xteaDecode-ta-01").val() }) );    
	});
	
	//Reverse a string
	$("#reverseString-btn-submit").on("click" , function(){
		var objElement = $("#reverseString-ta-01");
		validateField(objElement);
		$("#reverseString-ta-02").val(objElement.val().split("").reverse().join(""));
	});
	
	//Replace a string
	$("#replaceString-btn-submit").on("click" , function(){
		var objElement = $("#replaceString-ta-01");
		var str = $("#replaceString-ta-01").val().replace($("#replaceString-it-01").val(), $("#replaceString-it-02").val());
		$("#replaceString-ta-02").val(str);
	});
	
	//String length
	$("#stringLength-btn-submit").on("click" , function(){
		var objElement = $("#stringLength-ta-01");
		var objElementLength = objElement.val();
		var objElementLength = parseInt(objElementLength.length);
		console.log(objElementLength);
		var resultString = "";
		if(objElementLength == 1){
			resultString = "The string above contains " + objElementLength + " character!";
		}else if(objElementLength > 1){
			resultString = "The string above contains " + objElementLength + " characters!";
		}else if(objElementLength == 0){
			resultString = "The string above contains " + objElementLength + " characters!";
		}
		$("#stringLength-ta-02").val(resultString);
	});
	
	
	//Strip HTML tags
	$("#stripHTMLTags-btn-submit").on("click" , function(){
		var objElement = $("#stripHTMLTags-ta-01");
		validateField(objElement);
		$("#stripHTMLTags-ta-02").val(stripHTML(objElement.val()));
	});
	
	//Substring
	$("#substring-btn-submit").on("click" , function(){
		var objElement = $("#substring-ta-01");
		$("#substring-ta-02").val(  objElement.val().substring( $("#substring-it-01").val() , $("#substring-it-02").val() )  );
	});
	
	
});