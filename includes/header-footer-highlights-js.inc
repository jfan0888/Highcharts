	$(".navbar-toggle").on("click", function() {
		ga('send', 'event', 'internal', 'header', 'navbartoggle', 1, {'NonInteraction': 0});
		$(this).toggleClass("active");
	});
	var pagename = location.pathname.substring(1);
	if (pagename.includes('topics')) {
		$('ul.nav > li#nav-topics').addClass('active');
	}
	// Top Level
	if (pagename.includes('search')) {
		$('ul.nav > li#nav-search').addClass('active');
	}
	if (pagename == 'new' || pagename == 'index' || pagename == '/' || pagename == '') {
		$('ul.nav > li#nav-home').addClass('active');
	}
	if (pagename.includes('topic')) {
		$('ul.nav > li#nav-topic-dropdown').addClass('active');
	}	
	if (pagename.includes('pro')) {
		$('ul.nav > li#nav-pro').addClass('active');
	}
	// Drop Down Level
	if (topicpage == "latest") {
		$('ul.nav > li#nav-topic-dropdown > ul.dropdown-menu > li#nav-topic-latest').addClass('active');
	}
	if (topicpage == "calendar") {
		$('ul.nav > li#nav-topic-dropdown > ul.dropdown-menu > li#nav-topic-calendar').addClass('active');
	}
	if (topicpage == "transcripts") {
		$('ul.nav > li#nav-topic-dropdown > ul.dropdown-menu > li#nav-topic-transcripts').addClass('active');
	}
	if (topicpage == "assets") {
		$('ul.nav > li#nav-topic-dropdown > ul.dropdown-menu > li#nav-topic-assets').addClass('active');
	}
	if (topicpage == "twitter") {
		$('ul.nav > li#nav-topic-dropdown > ul.dropdown-menu > li#nav-topic-twitter').addClass('active');
	}
	if (topicpage == "deleted-tweets") {
		$('ul.nav > li#nav-topic-dropdown > ul.dropdown-menu > li#nav-topic-deleted-tweets').addClass('active');
	}
	if (topicpage == "inauguration") {
		$('ul.nav > li#nav-topic-dropdown > ul.dropdown-menu > li#nav-topic-inauguration').addClass('active');
	}
	if (topicpage == "h1b") {
		$('ul.nav > li#nav-topic-dropdown > ul.dropdown-menu > li#nav-topic-h1b').addClass('active');
	}
	if (topicpage == "twitter") {
		$('ul.nav > li#nav-topic-dropdown > ul.dropdown-menu > li#nav-topic-twitter').addClass('active');
	}

	
