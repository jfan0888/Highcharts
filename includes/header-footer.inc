<nav class="navbar navbar-inverse navbar-fixed-top custom-navbar" style="opacity:0.9;">
    <div class="container">
        <div class="navbar-header">
        	<!-- Hamburger Stack -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>

            <a class="navbar-brand" href="/" onClick="ga('send', 'event', 'internal', 'header', 'logo', 1, {'NonInteraction': 0});">
                <div style="font-size:2em; font-family: 'Trajan Pro', serif; letter-spacing:-2.5px; text-shadow: 1px 1px #5C5C5B; padding-top:3px;">Factba<span style="letter-spacing:-5px; opacity:0.7;">.</span>se</div>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li id="nav-home"><a href="https://factba.se" onClick="ga('send', 'event', 'internal', 'header', 'home', 1, {'NonInteraction': 0});">Home</a>
                </li>
                <li id="nav-search"><a href="https://factba.se/search" onClick="ga('send', 'event', 'internal', 'header', 'search', 1, {'NonInteraction': 0});">Search</a>
                </li>
				<li id="nav-topic-dropdown" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Topics <span class="caret"></span></a>
					<ul class="dropdown-menu">
					<li id ="nav-topic-latest">
					<a href="https://factba.se/topic/latest" onClick="ga('send', 'event', 'internal', 'header', 'topics-latest', 1, {'NonInteraction': 0});">White House Releases - Realtime</a>
					</li>
					<li id ="nav-topic-calendar">
					<a href="https://factba.se/topic/calendar" onClick="ga('send', 'event', 'internal', 'header', 'topics-calendar', 1, {'NonInteraction': 0});">President's Public Calendar</a>
					</li>
					<li role="separator" class="divider"></li>

					<li id ="nav-topic-transcripts">
					<a href="https://factba.se/transcripts" onClick="ga('send', 'event', 'internal', 'header', 'topics-transcripts', 1, {'NonInteraction': 0});">Browse Speeches and Interviews - Analysis</a>
					</li>
					
					<li id ="nav-topic-assets">
					<a href="https://factba.se/topic/assets" onClick="ga('send', 'event', 'internal', 'header', 'topics-assets', 1, {'NonInteraction': 0});">Assets / Net Worth</a>
					</li>
					<li id ="nav-topic-twitter">
					<a href="https://factba.se/topic/twitter" onClick="ga('send', 'event', 'internal', 'header', 'topics-twitter', 1, {'NonInteraction': 0});">Twitter</a>
					</li>
					<li id ="nav-topic-deleted-tweets">
					<a href="https://factba.se/topic/deleted-tweets" onClick="ga('send', 'event', 'internal', 'header', 'topics-deleted-tweets', 1, {'NonInteraction': 0});">Deleted Tweets</a>
					</li>
					<li id ="nav-topic-inauguration"><a href="https://factba.se/topics/inauguration" onClick="ga('send', 'event', 'internal', 'header', 'topics-inauguration', 1, {'NonInteraction': 0});">Inauguration Analysis</a>
					</li>
					<li id ="nav-topic-h1b"><a href="https://factba.se/topics/h1b" onClick="ga('send', 'event', 'internal', 'header', 'topics-inauguration', 1, {'NonInteraction': 0});">Trump H-1B Visa Filings</a>
					</li>
					<li id ="nav-topic-youtube"><a href="https://www.youtube.com/c/cantymedia" target="_blank" onClick="ga('send', 'event', 'internal', 'header', 'topics-youtube', 1, {'NonInteraction': 0});"><i class="fa fa-youtube"></i> YouTube - Videos</a>
					</li>
					</ul>
				</li>
                <li id="nav-pro"><a href="http://factsquared.com" target=_blank onClick="ga('send', 'event', 'internal', 'header', 'FactSquared', 1, {'NonInteraction': 0});">Enterprise</a>
                </li>
                <li id="nav-blog"><a href="https://factba.se/blog/" onClick="ga('send', 'event', 'internal', 'header', 'blog', 1, {'NonInteraction': 0});" target=_blank>Blog</a>
                </li>
            </ul>
        </div>
        <div class="pull-right" style="margin-top:-20px;"> 
        	<div id="factsearch" class="factsearch"><form class="factsearch-form"><input id="searchbox" class="factsearch-input" type="search" placeholder="Search..." autocomplete="off" /><button class="factsearch-submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button></form></div>
        </div>
    </div>
</nav>

<footer class="footer navbar-fixed-bottom footer-opacity ">
	<div class="pull-left" style="padding-left:10px;">
	<a href="https://itunes.apple.com/us/app/trump-white-house-consolidated-news-release-feed/id1213702329" target="_blank" onClick="ga('send', 'event', 'external', 'footer', 'itunesappstore', 1, {'NonInteraction': 0});"><img src="/img/ios-app-store.svg" alt="App Store"></a>
	</div>
	<div class="pull-right">
   	 	<p class="text-muted footerfix"><small>
        	<span class="footercopy">&copy; Copyright <?php echo date("Y", time()); ?> </span><a class="footerlinks" href="http://factsquared.com" target="_blank">FactSquared, Inc</a><br>
        	<a class="footerlinks privacy-modal" href="/modals/privacy.htm" onClick="ga('send', 'event', 'internal', 'footer', 'privacy', 1, {'NonInteraction': 0});">Privacy</a> &nbsp; 
        	<a class="footerlinks" data-toggle="modal" data-target="#footercontact" style="cursor:pointer;" onClick="ga('send', 'event', 'internal', 'footer', 'contact', 1, {'NonInteraction': 0});">Contact</a> &nbsp; 
        	<a class="footerlinks" href="http://factsquared.com" target=_blank onClick="ga('send', 'event', 'internal', 'footer', 'license', 1, {'NonInteraction': 0});">License</a> &nbsp; <a class="footerlinks" href="https://factba.se/blog/" onClick="ga('send', 'event', 'internal', 'footer', 'blog', 1, {'NonInteraction': 0});" target=_blank><small>v 2.1</small></a>
        </small>
    	</p>
    </div>
</footer>

<div id="hfmodals">
<div class="modal fade" id="privacypolicy" tabindex="-1" role="dialog" style="margin-top:60px;"><div class="modal-dialog" role="document"><div class="modal-content" style="height:60vh; overflow-y: scroll; opacity:0.9;"><div data-spy="affix" style="position:fixed; top:0; right:0; padding-right:30px; padding-top:10px;"><button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="ga('send', 'event', 'internal', 'modal', 'privacyclose', 1, {'NonInteraction': 0});"><span aria-hidden="true">&times;</span></button></div><div class="modal-header" style="padding:30px;"><div class="modal-title"><span style="font-size:1.5em; font-weight:bold; margin-top:20px; margin-left:10px; color:#222222;">FACTBA.SE PRIVACY POLICY</span></div></div><div class="modal-body" style="padding:40px; padding-top:0px; color:#222222;"></div></div></div></div>

<div class="modal fade" tabindex="-1" role="dialog" id="footercontact" style="margin-top:70px;"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header" style="margin-left:40px;"><button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="ga('send', 'event', 'internal', 'modal', 'contactclose', 1, {'NonInteraction': 0});"><span aria-hidden="true">×</span></button><h2 style="font-size:2em; font-family:'Univers LT 65'; font-weight: bold; color:#222222;">CONTACT</h2></div><div class="modal-body center-block" style="padding-left:40px; padding-bottom:80px; color:#222222;">We'd love to answer your questions. There's a business contact form <a href="http://factsquared.com" target=_blank>here</a>, or just drop us a note below.<p><form name="footercontact" id="modal-footer-contact" novalidate><div class="form-group"><input type="email" name="Email" class="form-control" placeholder="Your Email" id="email" required data-validation-required-message="Please enter your email address."><p class="help-block text-danger"></p></div><div class="form-group"><textarea class="form-control" name="Description" placeholder="Your Message" id="description" required data-validation-required-message="Please enter a message."></textarea><p class="help-block text-danger"></p></div><div id="footersuccess"></div><center><button type="submit" class="btn btn-xl" id="footercontactsubmit" style="background-color:#cd7615; color:#f2faff;">Send</button></center></form></div></div></div></div></div>

<script>
//Ajax for Privacy Modal
$('.privacy-modal').on('click', function(e){
  e.preventDefault();
  $('#privacypolicy').modal('show').find('.modal-body').load($(this).attr('href'));
});
$('#factsearch').click(function(e) {
	e.preventDefault();
	$('#searchbox').attr("placeholder", "Going to Full-Page Search...");
	window.location.href = 'https://factba.se/search';
});
var privacycheck = window.location.hash.substr(1);
if (privacycheck == "privacypolicy") {
	$('#privacypolicy').modal('show').find('.modal-body').load('/modals/privacy.htm');
}
</script>
