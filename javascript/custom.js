$(document).ready(function() {
	
 //Contact Form
 $('#contactfrm').validate({ // initialize the plugin
        rules: {
            firstname: {
                required: true
            },
			lastname: {
                required: true
            },
			company: {
                required: true
            },
			phone: {
                required: true,
				number: true
            },
			message: {
                required: true
            },
            email: {
                required: true,
                email: true
            }
        },
		
        submitHandler: function (form) { // for demo
            $('#contactfrm').submit();
        }
    });
	
	
	
	
 //Apply Form   
 
    $('#apply_btn').click(function(e){
        e.stopPropagation();
    })
    
    $('#applyfrm').validate({ // initialize the plugin
        rules: {
            applyfirstname: {
                required: true
            },
			applylastname: {
                required: true
            },
			applydob: {
                required: true
            },
			applyphone: {
                required: true,
				number: true
            },
			applyemail: {
                required: true,
                email: true
            },
			applyhomeaddress: {
                required: true
            },
			applylicensetype: {
                required: true
            },
			applylicensenumber: {
                required: true
            },
			applyexp: {
                required: true
            },
			applydoa: {
                required: true
            },
			applymessage: {
                required: true
            }
        },
		
        submitHandler: function (form) { // for demo
            $('#applyfrm').submit();
        }
    });
	
	
	
	
// Enquery form	

 $('#enq_btn').click(function(e){
        e.stopPropagation();
    })
    
    $('#enqfrm').validate({ // initialize the plugin
        rules: {
            enqfirstname: {
                required: true
            },
			enqlastname: {
                required: true
            },
			enqcompany: {
                required: true
            },
			enqphone: {
                required: true,
				number: true
            },
			enqemail: {
                required: true,
                email: true
            },
			enqgeneral: {
                required: true
            },
			enqdesc: {
                required: true
            },
			enqsitename: {
                required: true
            },
			enqsiteaddress: {
                required: true
            },
			enqsitestartdate: {
                required: true
            },
			enqsitefinishdate: {
                required: true
            },
			enqsitestarttime: {
                required: true
            },
			enqsitefinishtime: {
                required: true
            },
			enqspecial: {
                required: true
            },
			enqtools: {
                required: true
            }
        },
		
        submitHandler: function (form) { // for demo
            $('#enqfrm').submit();
        }
    });
	 
});