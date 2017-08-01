// Contact Form Scripts

// Footer Contact Form
$(function(result) {
    $("#modal-footer-contact input,#modal-footer-contact textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var email = $("input#email").val();
            var description = $("textarea#description").val();
            var firstName = email; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
           		url: 'https://crm.zoho.com/crm/WebToCaseForm',
           		type: "POST",
          		data: { 
            		'Reported By': 'Contact Factba.se', 
	            	'Company': 'N/A', 
    	        	'Email': email, 
        	    	'Phone': 'N/A', 
            		'Subject': 'General Contact Form', 
            		'Description': description, 
            		'xnQsjsdp': 'rRGf185227Y$', 
	            	'zc_gad': '', 
    	        	'xmIwtLD': 'DndnYpEfzq0mwbVU-G45YXYDTxR5kYBU', 
        	    	'actionType': 'Q2FzZXM=', 
            		'Case Origin': 'Factba.se Footer',
            		'returnURL': 'http://factba.se/new/'
                },
                cache: false,
                beforeSend: function() {
                        $('#footercontactsubmit').html('<img src="img/loading.svg" width=20 height=20>');
				},
                success: function() {
                    // Success message
                    $('#footersuccess').html("<div class='alert alert-success'>");
                    $('#footersuccess > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#footersuccess > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#footersuccess > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#modal-footer-contact').trigger("reset");
                    $('#footercontactsubmit').html('Send');

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                	console.log(XMLHttpRequest);
                	console.log(textStatus);
                	console.log(errorThrown);
                                      // Success message
                    $('#footersuccess').html("<div class='alert alert-success'>");
                    $('#footersuccess > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#footersuccess > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#footersuccess > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#modal-footer-contact').trigger("reset");
                    $('#footercontactsubmit').html('Send');
                },
            });
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});








// Pro Page Contact / Sign Up Pro Pop Up
$(function(result) {
    $("#modal-contact-pro input").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var proemail = $("input#proemail").val();
            var firstName = proemail; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
           		url: 'https://crm.zoho.com/crm/WebToCaseForm',
           		type: "POST",
          		data: { 
            		'Reported By': 'Interested in Factba.se Pro', 
	            	'Company': 'N/A', 
    	        	'Email': proemail, 
        	    	'Phone': 'N/A', 
            		'Subject': 'Let Me Know When Pro Is Available', 
            		'Description': 'Please let me know.', 
            		'xnQsjsdp': 'rRGf185227Y$', 
	            	'zc_gad': '', 
    	        	'xmIwtLD': 'DndnYpEfzq0mwbVU-G45YXYDTxR5kYBU', 
        	    	'actionType': 'Q2FzZXM=', 
            		'Case Origin': 'Factba.se Pro Subscription',
            		'returnURL': 'http://factba.se/new/pro'
                },

                cache: false,
                beforeSend: function() {
                        $('#modalcontactsubmit').html('<img src="img/loading.svg" width=20 height=20>');
				},
                success: function() {
                    // Success message
                    $('#modalsuccess').html("<div class='alert alert-success'>");
                    $('#modalsuccess > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#modalsuccess > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#modalsuccess > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#modal-contact-pro').trigger("reset");
                    $('#modalcontactsubmit').html('Let Me Know');

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                	console.log(XMLHttpRequest);
                	console.log(textStatus);
                	console.log(errorThrown);
                                      // Success message
                    $('#modalsuccess').html("<div class='alert alert-success'>");
                    $('#modalsuccess > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#modalsuccess > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#modalsuccess > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#modal-contact-pro').trigger("reset");
                    $('#modalcontactsubmit').html('Let Me Know');
                },
            });
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});







// PRO CONTACT FORM
$(function(result) {
    $("#maincontactform input,#maincontactform textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var mcfname = $("input#mcfname").val();
            var mcfcompany = $("input#mcfcompany").val();
            var mcfemail = $("input#mcfemail").val();
            var mcfphone = $("input#mcfphone").val();
            var mcfsubject = $("input#mcfsubject").val();
            var mcfdescription = $("textarea#mcfdescription").val();
            var firstName = mcfname; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
           		url: 'https://crm.zoho.com/crm/WebToCaseForm',
           		type: "POST",
          		data: { 
            		'Reported By': mcfname, 
	            	'Company': mcfcompany, 
    	        	'Email': mcfemail, 
        	    	'Phone': mcfphone, 
            		'Subject': mcfsubject, 
            		'Description': mcfdescription, 
            		'xnQsjsdp': 'rRGf185227Y$', 
	            	'zc_gad': '', 
    	        	'xmIwtLD': 'DndnYpEfzq0mwbVU-G45YXYDTxR5kYBU', 
        	    	'actionType': 'Q2FzZXM=', 
            		'Case Origin': 'Factba.se Pro',
            		'returnURL': 'http://factba.se/new/pro'
                },
                cache: false,
                beforeSend: function() {
                        $('#mcfsubmit').html('<img src="img/loading.svg" width=20 height=20>');
				},
                success: function() {
                    // Success message
                    $('#modalsuccess').html("<div class='alert alert-success'>");
                    $('#modalsuccess > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#modalsuccess > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#modalsuccess > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                    $('#prosubmit').html('Contact Us');

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                	console.log(XMLHttpRequest);
                	console.log(textStatus);
                	console.log(errorThrown);
                                      // Success message
                    $('#modalsuccess').html("<div class='alert alert-success'>");
                    $('#modalsuccess > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#modalsuccess > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#modalsuccess > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#maincontactform').trigger("reset");
                    $('#mcfsubmit').html('Contact Us');

                },
            });
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#modalsuccess').html('');
});
