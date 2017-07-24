$("#add_form1").on("click",function(){
	swal({
		title: "Penambahan Form",
		text: "Apakah anda akan yakin akan membuat Form 01 yang baru?",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#4DAF7C",
		confirmButtonText: "Yes",
		closeOnConfirm: false
	},
	function(){
		// di sini dia ajax, baru di fungsi successnya di kasih yang bawah ini..?, let's try then
		$.ajax(){
			url:"", //base url ke controller
			type:"POST",
			data:"",
			success:function(data){ //data yang di kirim balik dari function
				
			}
		}
		swal("Deleted!", "Your imaginary file has been deleted.", "success");
	});
})