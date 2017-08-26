<?php
##### IN PRODUCTION 6/12/17 #####
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	
	<title>Donald Trump Complete - Search Tweets, Speeches, Policies | Factbase</title>
	
	<meta name="description" content="A fully-searchable full-text search of Donald Trump interviews, speeches, tweets from twitter (including deleted tweets) and more. Bias-free. Skip the spin. Instantly access." />
	<meta name="keywords" content="donald j. trump, search, donald trump, wife, president, net worth, speech, education, hair, twitter, deleted tweets, campaign, children, latest news, bankruptcy, political views, interview, wives, religion, birthday, quotes, republican, tweet, video, biography, book, shirts, bankrupt, obama, election, business, show, worth, bankruptcies, clinton, pictures, hotel, wealth, money, presidency, networth" />
	<meta name="author" content="Factbase" />
	
	<link rel="canonical" href="https://factba.se/search">
	<link rel="shortcut icon" href="https://factba.se/img/favicon.png">
	
	<meta property="og:title" content="Donald Trump Complete - Search Tweets, Speeches, Policies | Factbase">
	<meta property="og:image" content="https://factba.se/img/social/index-fb-image.jpg?1">
	<meta property="og:description" content="A fully-searchable collection of Donald Trump interviews, speeches, tweets -- including deleted tweets -- and more. Bias-free.">
	<meta property="og:url" content="https://factba.se/search" />
	<meta property="og:site_name" content="Factbase" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Donald Trump Complete - Search Tweets, Speeches, Policies">
	<meta name="twitter:description" content="The searchable collection of Donald Trump interviews, speeches, tweets -- including deleted tweets -- and more. Bias-free. https://factba.se/search">
	<meta name="twitter:image" content="https://factba.se/img/social/index-tw-image.jpg?1">
	<meta name="twitter:site" content="@wxbase">
	<meta name="twitter:creator" content="@wxbase">
	
	<!-- JSON-LD markup -->
	
	<script type="application/ld+json">
	{	"@context" : "http://schema.org",
		"@type" : "Article",
		"name" : "Donald Trump",
		"author" : { "@type" : "Person", "name" : "Jennifer Canty" },
		"image" : "https://factba.se/img/social/index-fb-image.jpg?1",
		"url" : "https://factba.se/",
		"publisher" : { "@type" : "Organization", "name" : "CantyMedia" } }
	</script>
	
	<!-- // JSON-LD markup -->

	<?php include( 'includes/scripts.inc'); ?>	
	<link rel="stylesheet" href="css/wordcloud.css" />
	<style>
		body {
			background-image: none;
			background-repeat: no-repeat;
			background-position: right center;
			background-attachment: fixed;
			background-size: cover;
			font-family: 'Univers LT 45', Arial, sans-serif;
			font-weight: normal;
			font-size: 16px;
			color: #303030;
			height: 100%;
			padding-bottom: 30px;
		}
		#results-block {
			padding-left: 0px;
		}
		.row {
			-moz-column-width: 100%;
			-webkit-column-width: 100%;
		}
		.item {
			display: inline-block;
			padding: 1px;
			width: 100%;
		}
		.well {
			position: relative;
			display: block;
			padding-top: 0px;
			margin-bottom:0px;
			padding-bottom:0px;
		}
		.filterdrop { color: #222222; 'Univers LT 45', Arial, sans-serif; font-size:13px; }
		.filterdrop:link, a.filterdrop:visited, a.filterdrop:hover, a.filterdrop:active  { text-decoration:none; cursor:pointer; }
		li.mr:hover { color: #777777; }
		.filterdropmenu { margin-top:3px; margin-left:10px; border-radius:0px; box-shadow: 0 2px 4px rgba(0,0,0,0.16); border: 1px solid #d6d6d6; }
		.ddtype { min-width:240px; }
		.highcharts-title { font-family: 'Univers LT 65', Arial, sans-serif; font-size:1.1em; }
		li.mr { padding-left:30px; cursor:pointer; }
		li.ck { background-image:url("/img/checkmark.png"); background-position:left center; background-repeat:no-repeat; margin-left:10px; padding-left:20px !important; font-weight:bold; cursor:default !important;}
		.z { display:inline-block; }
		.ranges ul { padding-top:5px; padding-bottom:5px; margin-top:2px;  }
		.ranges li { font-size:14px; color: #222222; 'Univers LT 45', Arial, sans-serif; background-color:#fff; border:none; border-radius:0px; margin:0px; padding:0px; margin-left:30px; }
		.ranges li:hover { color: #777777; background-color:#fff; border:none; border-radius:0px; }
		.ranges li.active { background-image:url("/img/checkmark.png"); background-position:left center; background-repeat:no-repeat; margin-left:10px; padding-left:20px !important; font-weight:bold; cursor:default !important; background-color:#fff; color:#222222; border:0px; }
		.range_inputs { display:none; }
		.daterangepicker { margin-top:3px; margin-left:10px; border-radius:0px; box-shadow: 0 2px 4px rgba(0,0,0,0.16); border: 1px solid #d6d6d6; }
		.daterangepicker::before { display:none; }
		.daterangepicker::after { display:none; }
		.highcharts-credits { display:none; }
		.highcharts-background { background:transparent !important; }
		.datefilter { background:#fff; cursor:pointer; width:100%; margin-top:3px; margin-left:15px; color: #222222; 'Univers LT 45', Arial, sans-serif; font-size:13px; }
		.sortlist { margin-left:50px; }
		.show-1200 {display:none; }

		.sidenav {
		    min-height: 600px;
		    width: 300px;
		    padding-left: 10px;
		    padding-right: 10px;
		    z-index: 1;
		    top: 0;
		    right:0;
		    background-color: #f0f0f0;
		    border: 1px solid #cfcfcf;
		    border-radius: 4px;
		    color:#fff;
		    overflow-x: hidden;
		    transition: 0.5s;
		    padding-top: 0px;
		}

		.well { background-color:#fafafa; }

    	#wordcloud {
	        width: 270px;
	        height: 500px;
	        max-height: 320px;
	        border: none;
      	}
      	#wordcloud span.w10, #wordcloud span.w9, #wordcloud span.w8, #wordcloud span.w7 {
        	text-shadow: 0px 1px 1px #ccc;
      	}
      	#wordcloud span.w3, #wordcloud span.w2, #wordcloud span.w1 {
        	text-shadow: 0px 1px 1px #fff;
    	}

		@media (min-width: 1200px) {
			.mediaside { max-width:280px; }
		}
		@media screen and (max-width: 800px) {
			.z { display: inline-block !important; }
			.datefilter { margin-left:0px; }
			.sortlist { margin-left:0px; }
			.caret { transform: rotate(270deg); }
			.filterdropdown { margin-top:20px; }
		}
		
		.searchimage { width:200px; float:none; margin: 0 auto; }
		.socialicon { width:200px; color:#4099FF; width:250px; float:none; margin: 0 auto; }
		.youtube-large, .dailymotion-large { background-color:transparent; max-width:300px; }
		@media screen and (max-width: 13677px) { 
			.searchimage { width:175px; }
			.socialicon { width:175px; }

		}
		@media screen and (max-width: 1200px) { 
			.youtube-large, .dailymotion-large, .mediaside { margin-left:auto; margin-right:auto; text-align:center; }
			.hide-1200 { display:none; }
			.show-1200 {display:inline-block; margin-top:15px; }
		}
		@media screen and (max-width: 1024px) { 
			#search {
				margin-left: 0px;
				height: 50px;
				margin-top: 10px;
			}
		}
		@media screen and (max-width: 768px) { }
		@media screen and (max-width: 640px) { }

		#tabarrow { background-color:#f0f0f0; cursor:pointer; position:absolute; margin-top:50px;  color:#222; padding-top:2px; border: 1px solid #cfcfcf; border-right:0px; border-radius: 4px; z-index:2; font-size:1.5em; margin-left:-25px; }
		#tabarrow-glyph { opacity:0.5; }
		#tabarrow-glyph:hover { opacity:1; }
		.rotate{
		    -moz-transition: all 0.5s linear;
		    -webkit-transition: all 0.5s linear;
		    transition: all 0.5s linear;
		}

		.rotate.down{
		    -ms-transform:rotate(180deg);
		    -moz-transform:rotate(180deg);
		    -webkit-transform:rotate(180deg);
		    transform:rotate(180deg);
		}
		.dashbox {
			background-color: #ffffff;
		    border: 1px solid #e3e3e3;
		    border-radius: 4px;
		    margin-top: 5px;
		    margin-bottom: 10px;
		    margin-right: 10px;
		    padding-top: 8px;
		}
		.sidebarfade { width:100%; height:100%; position:absolute; margin-top:0px; margin-left:0px; background-color:#7f7f7f; opacity:0.25; display:none; }
		.side-head, .side-head-visible { font-family:"Univers LT 65", sans-serif; font-size:1.5em; font-weight:bold; color: #222; display:inline-block; display:block; font-variant:small-caps; }
		.side-head-visible { display:none; }
		#full-dashboard { display:none; }
		.side-chart-label { font-family:"Univers LT 65", sans-serif; font-size:0.75em; font-weight:bold; color: #222; display:inline-block;}
		.side-chart-gray { font-family:"Univers LT 55", sans-serif; font-size:0.9em; font-weight:normal; color: #bbb; display:inline-block;}
		.side-chart-stretch { font-family:"Univers LT 65", sans-serif; font-size:2em; font-weight:bold; color: #222; display:inline-block; font-variant:small-caps;
			transform: scale(1, 2);
			-webkit-transform: scale(1, 2); /* Safari and Chrome */
			-moz-transform: scale(1, 2); /* Firefox */
			-ms-transform: scale(1, 2); /* IE 9+ */
			-o-transform: scale(1, 2); /* Opera */
		}
		.sidebar_slide {
			width: auto;
			position: absolute;
			right: -20px;
		}
	</style>
</head>

<body>

	<?php include( 'includes/header-footer.inc'); ?>

	<div class="sidebarfade"></div>
	<div class="fixedwhitebox" style="margin-top:40px;"></div>
		<div>
			<div class="container">
				<div class="row" style="display:block; z-index:11;">
					<div class="col-lg-12" style="margin-top:50px; z-index: 11;">
						<input id="search" type="search" placeholder="Search..." autocomplete="off" />
						<br>

						<div id="filterline" style="width:100%; display:table; padding-top:3px;">
							<div style="display:table-row;">
								<div style="display:table-cell; text-align:left;">
									<div id="mobilemenu" style="margin-left: 0px;"><i class="fa fa-filter fa-border"></i>
									</div>
									<!-- Mobile -->
									<div class="filters-dropdown">
										<div class="btn-group ">
											<a class="dropdown-toggle filterdrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="media">Media <span class="caret" style="margin-right:15px;"></span></a>
								  			<ul class="dropdown-menu filterdropmenu ddmedia" aria-labelledby="media">
												<li class="ck mr fmclear filter-media-all">All <div class="fma-num z"></div></li>
												<li class="mr fmclear filter-media-text">Text <div class="fmt-num z"></div></li>
												<li class="mr fmclear filter-media-social">Social <div class="fms-num z"></div></li>
												<li class="mr fmclear filter-media-video">Video <div class="fmv-num z"></div></li>
											</ul>
										</div>
										<br>
										<div class="btn-group">
											<a class="dropdown-toggle filterdrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="type">Type <span class="caret"></span></a>
									  		<ul class="dropdown-menu filterdropmenu ddtype" aria-labelledby="type">
												<li class="ck mr ftclear filter-type-all">All <div class="ftall-num z"></div></li>
												<li class="mr ftclear filter-type-assets">Assets <div class="fta-num z"></div></li>
												<li class="mr ftclear filter-type-debate">Debate <div class="ftd-num z"></div></li>
												<li class="mr ftclear filter-type-deposition">Deposition/Testimony <div class="ftdt-num z"></div></li>
												<li class="mr ftclear filter-type-interview">Interview <div class="fti-num z"></div></li>
												<li class="mr ftclear filter-type-position-paper">Position Paper <div class="ftpp-num z"></div></li>
												<li class="mr ftclear filter-type-press-conference">Press Conference <div class="ftpc-num z"></div></li>
												<li class="mr ftclear filter-type-remarks">Remarks <div class="ftr-num z"></div></li>
												<li class="mr ftclear filter-type-speech">Speech <div class="fts-num z"></div></li>
												<li class="mr ftclear filter-type-twitter">Twitter <div class="fttw-num z"></div></li>
												<li class="mr ftclear filter-type-deleted-tweets">Twitter - Deleted Tweets <div class="ftdt-num z"></div></li>
											</ul>
										</div>
										<br>
										<div class="btn-group">
											<div class="datefilter">
												Date: <span></span> <b class="caret"></b>
											</div>
										</div>
										<br>
										<div class="btn-group sortlist">
											<a class="dropdown-toggle filterdrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="sort">Sort <span class="caret" style="margin-right:15px;"></span></a>
								  			<ul class="dropdown-menu filterdropmenu ddmedia" aria-labelledby="sort">
												<li class="ck mr sclear sort-relevant">Most Relevant</li>
												<li class="mr sclear sort-oldest">Oldest First</li>
												<li class="mr sclear sort-newest">Newest First</li>
											</ul>
										</div>
										<br>

									</div>
								
									<div style="float:right;"><div class="countermobile" style="margin-right: 0px;"></div></div>
								</div>
								<!-- Desktop -->
								<div style="display:table-cell; text-align:left;">
									<div class="filters">
										<div class="filters-desktop">
											<div class="btn-group">
												<a class="dropdown-toggle filterdrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="media">Media <span class="caret" style="margin-right:15px;"></span></a>
									  			<ul class="dropdown-menu filterdropmenu ddmedia" aria-labelledby="media">
													<li class="ck mr fmclear filter-media-all">All <div class="fma-num z"></div></li>
													<li class="mr fmclear filter-media-text">Text <div class="fmt-num z"></div></li>
													<li class="mr fmclear filter-media-social">Social <div class="fms-num z"></div></li>
													<li class="mr fmclear filter-media-video">Video <div class="fmv-num z"></div></li>
												</ul>
											</div>
											<div class="btn-group">
												<a class="dropdown-toggle filterdrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="type">Type <span class="caret"></span></a>
										  		<ul class="dropdown-menu filterdropmenu ddtype" aria-labelledby="type">
													<li class="ck mr ftclear filter-type-all">All <div class="ftall-num z"></div></li>
													<li class="mr ftclear filter-type-assets">Assets <div class="fta-num z"></div></li>
													<li class="mr ftclear filter-type-debate">Debate <div class="ftd-num z"></div></li>
													<li class="mr ftclear filter-type-deposition">Deposition/Testimony <div class="ftdt-num z"></div></li>
													<li class="mr ftclear filter-type-interview">Interview <div class="fti-num z"></div></li>
													<li class="mr ftclear filter-type-position-paper">Position Paper <div class="ftpp-num z"></div></li>
													<li class="mr ftclear filter-type-press-conference">Press Conference <div class="ftpc-num z"></div></li>
													<li class="mr ftclear filter-type-remarks">Remarks <div class="ftr-num z"></div></li>
													<li class="mr ftclear filter-type-speech">Speech <div class="fts-num z"></div></li>
													<li class="mr ftclear filter-type-twitter">Twitter <div class="fttw-num z"></div></li>
													<li class="mr ftclear filter-type-deleted-tweets">Twitter - Deleted Tweets <div class="ftdt-num z"></div></li>
												</ul>
											</div>
											<div class="btn-group">
												<div class="datefilter" style="background:#fff; cursor:pointer; width:100%; margin-top:3px; margin-left:15px; color: #222222; 'Univers LT 45', Arial, sans-serif; font-size:13px;">
													Date: <span></span> <b class="caret"></b>
												</div>
											</div>
											<div class="btn-group" style="margin-left:50px;">
												<a class="dropdown-toggle filterdrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="sort">Sort <span class="caret" style="margin-right:15px;"></span></a>
									  			<ul class="dropdown-menu filterdropmenu ddmedia" aria-labelledby="sort">
													<li class="ck mr sclear sort-relevant">Most Relevant</li>
													<li class="mr sclear sort-oldest">Oldest First</li>
													<li class="mr sclear sort-newest">Newest First</li>
												</ul>
											</div>
											<div style="float:right;"><div class="counter"></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container" style="">
			<div class="row-fluid resultsblock" id="mainbar">
				<div class="col-lg-9" id="results-block">
					<div class="spinner" style="margin-top:20px; width:100%; text-align:center;"><img align=center src="img/loading.svg" width=50></div>
					<div class="total-matches show-1200"></div>

					<div class="infinite" id="results" style=""></div>
					<div id="lazyload" style="width:100%; text-align:center; display:none; padding:20px;"><img src="img/loading.svg" width=40></div>
				</div>

				<!-- Convert to This https://jsfiddle.net/KyleMit/S9hhP/ -->
				<div class="col-lg-3" style="padding-left: 0;">
		
					<div class = 'sidebar_slide'>

						<div id="tabarrow"><div id="tabarrow-glyph" class="thearrow fa fa-arrow-left rotate" style="padding:3px;"></div></div>

						<div id="mySidenav" class="sidenav" style="margin-top:20px; z-index:inherit;">

							<div class="pull-left" style="min-width:280px;">
								<div class="total-matches" style="padding-top:15px;"></div>
								<div id="categorychart" class="clear-visible"></div><p>
								<div id="dom_emo" style="display:block;">
									<div class="side-head-visible" style="margin-bottom:15px;">Dominant Emotion</div><br>
									<div id="dom_emotion" class="side-chart-stretch clear-visible" style="text-align:center; width:100%; margin-bottom:30px;"></div>
								</div>
								<div id="dom_sent" style="display:block;">
									<div class="side-head-visible" style="margin-bottom:15px;">Overall Sentiment</div>
									<div id="dom_sentiment" class="side-chart-stretch clear-visible" style="text-align:center; width:100%; margin-bottom:2px; display:block;"></div>
									<div id="sparkline" class="clear-visible" style="text-align:center; width:100%; height:90px; display:block;"></div>
									<div id="sparktrend" class="side-chart-gray clear-visible" style="text-align:center; width:100%; margin-bottom:20px; display:block;"></div>
								</div>
							</div>
							<div class="container-fluid" id="full-dashboard" style="padding:10px; padding-left:20px;">
								<div class="row-fluid" style="margin-left:auto; margin-right:auto;">
									<div class="col-md-3 dashbox d4" id="position_one" style="width:23%; min-height:200px;">
										<div class="side-head">Grade Level</div>
										<div id="gradelevelgauge" class="clear-sidebar" style="width:100%;"></div>
									</div>
									<div class="col-md-3 dashbox d4" id="position_two" style="width:26%; min-height:200px;">
										<div class="side-head">Words&nbsp;Per&nbsp;Minute</div>
										<div id="wpmblock" class="side-chart-stretch clear-sidebar" style="text-align:center; width:100%; margin-top:30px; display:block;"></div>
										<div class="side-chart-gray clear-sidebar" style="text-align:center; position:absolute; bottom:0; margin-bottom:10px; width:100%; display:block;">Average Rate of Speech<br>in U.S.: 150-160 wpm</div>
										
									</div>
									<div class="col-md-3 dashbox d4" id="position_three" style="width:22%; min-height:200px;">
										<div class="side-head">Big 5 Emotion</div>
										<div id="big5wordcloud" class="clear-sidebar "style="width:100%; min-height:150px;"></div>
									</div>
									<div class="col-md-3 dashbox d4" id="position_four" style="width:24%; min-height:200px;">
										<div class="side-head">Positive/Negative</div>
										<div id="posneggauge" class="clear-sidebar" style="width:100%;"></div>
									</div>
								</div>
								<div class="row-fluid" style="margin-left:auto; margin-right:auto;">
									<div class="col-md-12 dashbox d12" id="position_five" style="width:97%; min-height:250px;">
										<div class="side-head">Timeline - Records By Year</div><br>
										<div class="side-chart-gray">Color indicates a positive or negative use of words overall.</div>
										<div id="timelinechart" class="clear-sidebar" style="width:100%; height:200px; margin:0;"></div>
									</div>
								</div>
								<div class="row-fluid" style="margin-left:auto; margin-right:auto;">
									<div class="col-md-6 dashbox d6" id="position_six" style="width:46%; min-height:250px;">
										<div class="side-head">Top Related Topics</div>
										<div id="topicswordcloud" class="clear-sidebar "style="width:100%; height:200px; margin-left:-20px;"></div>
									</div>
									<div class="col-md-6 dashbox d6" id="position_seven" style="width:46%; min-height:250px;">
										<div class="side-head">Twitter By Date/Time</div>
										<div id="twitterheatmap" class="clear-sidebar"style="width:100%; min-height:200px; margin:0;"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="modalblock">
		<div class="modal fade" tabindex="-1" role="dialog" id="tweetmodal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="ga('send', 'event', 'internal', 'twittermodal', close, 1, {'NonInteraction': 0});"><span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body center-block text-center">
						<div id="tweetmodalspinner"><img align=center src="img/loading.svg" width=50>
							<br>
						</div>
						<div id="tweetpop"></div>
					</div>
				</div>
			</div>
		</div>
	</div>



<script type="text/javascript">
// Set Globals
var q, l, t, i, p, f, div, n, records, filtered, ms, tweet, date, source, client, search_tweets, media_url, muwidth, text, date, time_start, id, time_end, bl, td, tr, tc, tr_url, tid, city, state_code, mapstate, citystate, tr_source, twitter_id, image_url, media_type, toembed, link_url, source, oe, record_title, twitter_embed, blmodal, mid, bid, qclean, deleted, lastq, maxpage, type, author, qcln, fallback, winwidth, fwb, fwbn, rbh, rbhn, fmedia, ftype, rtype, rtypecount, mtype, mtypecount, ytype, ytypecount, record_type, startdate, enddate, ssort, citystate, zz, sentiment_gauge_data, gradelevel_gauge_data, chart_twitter_heatmap, chart_timeline_chart, chart_gauge_gradelevel, chart_gauge_posneg, chart_topic_wordcloud, chart_big5_wordcloud, chart_category_pie, chart_sentiment_sparkline;

var topics_wordcloud_data = [];
var big5_wordcloud_data = [];
var category_data = [];
var timechart_polarity = [];
var timechart_count = [];
var timechart_categories = [];
var spark_data = [];
var twitter_heatmap_data = "";
var firstload = 0;
var sidebarstate = "closed";
var min_heatmap = 999999999;
var max_heatmap = 0;
var mid_heatmap = 0;

$(function(){Highcharts.setOptions({lang:{ thousandsSep:','}})});

// Check for Ad Blocker - It Messes Up Search

window.addEventListener('load', function() {
	if(window.ga && ga.create) {
		console.log('GA Loaded');
		$("pull-left").show();

	}
	else {
		$("pull-left").hide();
		$('#filterline').empty();
		$('#filterline').html("<span style='background-color:#fff; font-size:0.8em; color:red; font-weight:bold;';><b>Apologies. Search won't work for you. You are running uBlock, Ghostery or something that blocks our Javascript. Please turn it off to use search.</b></span>");
		console.log('GA Not Loaded');
	}
});

// Get Year for Chart Series
var getnewyear = new Date();
var current_year = getnewyear.getYear();

// Prepopulate on first load
var firstpage = 1; 

// Scrap
function placeholder_one() {
	var pone = $('#place_one').highcharts({ chart: { plotBackgroundColor: null, plotBorderWidth: null, plotShadow: false, type: 'pie' }, title: { text: 'Lorum Ipsum' }, tooltip: { pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>' }, plotOptions: { pie: { allowPointSelect: true, cursor: 'pointer', dataLabels: { enabled: true, format: '<b>{point.name}</b>: {point.percentage:.1f} %', style: { color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black' } } } }, series: [{ name: 'Brands', colorByPoint: true, data: [{ name: 'Press', y: 56.33 }, { name: 'Speech', y: 24.03, sliced: true, selected: true }, { name: 'Interview', y: 10.38 }, { name: 'Tweet', y: 4.77 }, { name: 'Facebook', y: 0.91 }, { name: 'Lorum', y: 0.2 }] }]});
}
function category_pie_chart(category_data) {
	chart_category_pie = Highcharts.chart('categorychart', {
		chart: {
			type: 'pie',
			options3d: { enabled: true, alpha: 45, beta: 0 }, 
			title: null, 
			backgroundColor: null, 
			style: '{"fontFamily":"Univers LT 55", sans-seif, "fontSize":"12px"}'
		},
		title: { text: null },
		tooltip: { pointFormat: '<b>{point.y}</b> {series.name}' },
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 35,
				dataLabels: { enabled: false, },
				color:'#222',
				showInLegend: true
			}
		},
		series: [{
			type: 'pie',
			name: 'Records',
			data: category_data
		}]
	});
}
function sentiment_spark(spark_data) {
	chart_sentiment_sparkline = Highcharts.chart('sparkline', {
		chart: { renderTo: 'container', backgroundColor:null},
		title: { text: null },
		tooltip: { enabled: false },
		legend: { enabled: false },
		credits: { enabled: false },
		plotOptions: { series: { marker: { enabled: false }, lineWidth: 4, color: '#222222'} },
		xAxis: { type: 'linear', lineWidth: 0,  labels: { enabled: false }, tickWidth: 0 },
		yAxis: { min: -1, max: 1, lineWidth: 0,  gridLineWidth: 0, title: { text: null }, labels: { enabled: false } },
		series: [{
			data: spark_data
		}]
	});
};

////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////



// Get URL Parameters for parsing
function getURLParameter(param) {
	var pageurl = window.location.search.substring(1);
	var pagevar = pageurl.split('&');
	for (var i = 0; i < pagevar.length; i++) {
		var paramname = pagevar[i].split('=');
		if (paramname[0] == param) {
			paramname[1] = paramname[1].trim()
			return paramname[1];
		}
	}
};


//YouTube - Show Thumb
function youtubeThumb(id, seq) {
	var thumb = '<img src="https://factba.se/img/thumbs/video/IDDIRECTORY/IDJPG-SEQUENCE.jpg">',
		play = '<div class="youtube-large-play"></div>';
		thumb = thumb.replace("IDDIRECTORY", id);
		thumb = thumb.replace("IDJPG", id);
		thumb = thumb.replace("SEQUENCE", seq);
	return thumb + play;
};
function youtubeIframe() {
	var iframe = document.createElement("iframe");
	iframe.setAttribute("src", "https://www.youtube.com/embed/" + this.dataset.id + "?start=" + this.dataset.time + "&autoplay=1");
	iframe.setAttribute("frameborder", "0");
	iframe.setAttribute("allowfullscreen", "1");
	this.parentNode.replaceChild(iframe, this);
};
function renderyoutube() {
	var div, n, v = document.getElementsByClassName("youtube-large");
	for (n = 0; n < v.length; n++) {
		div = document.createElement("div");
		div.setAttribute("data-id", v[n].dataset.id);
		div.setAttribute("data-sequence", v[n].dataset.sequence);
		div.setAttribute("data-time", v[n].dataset.time);
		div.innerHTML = youtubeThumb(v[n].dataset.id, v[n].dataset.sequence);
		div.onclick = youtubeIframe;
		v[n].appendChild(div);
	}
};


//DailyMotion - Show Thumb
function dailymotionThumb(tid, seq) {
	var thumb = '<img src="https://factba.se/img/thumbs/video/IDDIRECTORY/IDJPG-SEQUENCE.jpg">',
		play = '<div class="dailymotion-large-play"></div>';
		thumb = thumb.replace("IDDIRECTORY", tid);
		thumb = thumb.replace("IDJPG", tid);
		thumb = thumb.replace("SEQUENCE", seq);
	return thumb + play;
};
function dailymotionIframe() {
	var iframe = document.createElement("iframe");
	var linkId = this.dataset.id;
	linkId = linkId.replace("DaMo--", "");
	iframe.setAttribute("src", "https://www.dailymotion.com/embed/video/" + linkId + "?start=" + this.dataset.time + "&autoplay=1&html=1");
	iframe.setAttribute("frameborder", "0");
	iframe.setAttribute("allowfullscreen", "1");
	iframe.setAttribute("id", this.dataset.id);
	iframe.setAttribute("width", "200");
	iframe.setAttribute("height", "112");
	this.parentNode.replaceChild(iframe, this);
	document.getElementById(this.dataset.id).contentWindow.location.reload();
};
function renderdailymotion() {
	var div, n,
		v = document.getElementsByClassName("dailymotion-large");
	for (n = 0; n < v.length; n++) {
		div = document.createElement("div");
		div.setAttribute("data-id", v[n].dataset.id);
		div.setAttribute("data-sequence", v[n].dataset.sequence);
		div.setAttribute("data-time", v[n].dataset.time);
		div.innerHTML = dailymotionThumb(v[n].dataset.id, v[n].dataset.sequence);
		div.onclick = dailymotionIframe;
		v[n].appendChild(div);
	}
};

// Style sidebar area

function createSidebar(){
	
	var sidebar = $("#sidebar");
	var resultswidth = ($("#results-block").outerWidth())+20;

	sidebar.css({"transition-timing-function": "linear", "overflow":"hidden","position": "absolute","min-height": "600px","height": "100%","width": "350px","padding-top":"0px","padding-left":"25px", "left":$(window).width()-443,"transition": "width 2s, left 2s"});

}

// CLEAN UP, CONSOLIDATE CONCEPT OF NEW SEARCH. ONLY TRIGGER DATA ON NEW SEARCH, LEAVE ALL ELSE ALONE


////////////////////////////////////////////////////////////////////////////////////////
// Now the Doc Read Part

$(document).ready(function() {

	// createSidebar();

	console.log("reload");
	console.log("ok");
	
	// Handle Show/Hide of Dashboard
	
	var mainheight = $(window).height() - 200;
	var mwidth = $(window).width();

	$(".sidenav").css('height',mainheight);
	console.log(mwidth);;

	var topicpage = "search";
	$("#search").focus();

	// Initialize Tooltip
	$(function () { $('[data-toggle="tooltip"]').tooltip() })

	//Filter Icons
	$(".filtericon").on("click", function() {
		var x = document.getElementById("filterline");
		if (x.className === "filternav") {
			x.className += " responsive";
    	} else {
			x.className = "filternav";
   		}
	});			

	var newload = 1;
	$('.spinner').hide();
	$('#lazyload').hide();
	var timesince = "";
	var timesincemobile = "";

	// Populate the Last Tweet Time Timer
	function lasttweettime() {
		console.log(Date.now());
		$.get("https://factba.se/json/json?mr=1", function(data) {
			Number(data);
			var rightnow = Math.round(Date.now() / 1000);
			timesince = rightnow - data;
			timesincemobile = rightnow - data;
		});
	};
	function daBounce(element, times, distance, speed) {
		console.log("in daBounce");
		for (i = 0; i < times; i++) {
			element.animate({marginTop: '-='+distance},speed)
			.animate({marginTop: '+='+distance},speed);
		}
	}
	function update() {
		console.log("in update");
		timesince = timesince + 1;
		timesincemobile = timesincemobile + 1;
		$('.counter').html('Last Tweet: ' + moment.duration(timesince, 'seconds').format("h [hrs], m [min], s [sec]"));
		$('.countermobile').html('<i class="fa fa-clock-o" aria-hidden="true"></i><i class="fa fa-twitter" aria-hidden="true"></i> ' + moment.duration(timesincemobile, 'seconds').format("hh:mm:ss", {
			trim: false
		}));
	}
	lasttweettime();
	setInterval(update, 1000);
	setInterval(lasttweettime, 60000);

	// Get the Hash out of the URL
	var hash = window.location.hash.substr(1);
	
	//Set basic variables

	var queryvar = $('#search').val(); queryvar = queryvar.trim();

	f = "";
	fmedia = ""
	ftype = "";
	startdate = "";
	enddate = "";
	sort = "";
	ssort = "";
	city = ""; 
	state_code = "";
	var citystate = "";
	var rpp = 40;
	l = rpp;

////////////////////////////////////////////////////////////////////////////////////////	
	// Now handle the search stuff
	$("#search").on('input', function(value) {
		// Clear data from arrays
		//if (sidebarstate == "open") {
		//	$("#tabarrow").trigger("click");
		//}
		console.log(value);
		console.log("search on");
		console.log("case1");

		$('.spinner').show();
		
		var searchQuery = $('#search').val();

		// Fixing the 8th issue

		if (searchQuery.length == 0) $("pull-left").hide();
		else $("pull-left").show();

		window.clearTimeout($(this).data("timeout"));
		$(this).data("timeout", setTimeout(function() {
			console.log("timeout on");
			console.log("case2");			
			q = $('#search').val();
			q = q.trim();
			var qsplit = q.replace(/"/g,"");
			if (lastq == "") {
				lastq = q;
				$('#results').empty();
				p = 1;
				urlq = q;
				urlq = urlq.trim();
				urlq = urlq.replace(/ /g, "+");
				urlq = encodeURIComponent(urlq);
				location.hash = urlq;
			}
			if (q == lastq) {} else {
				$('#results').empty();
				p = 1;
				lastq = q;
				urlq = q;
				urlq = urlq.replace(/ /g, "+");
				urlq = encodeURIComponent(urlq);
				location.hash = urlq;
			}
			if (firstload != 0) {
				$('.clear-visible').empty();
				$('.clear-sidebar').empty();
				console.log("firstload");
				console.log("case3");
			};
			firstload = 1;	
			if (!t) {
				t = 'se';
			}
			lastq = q;
			var jsonurl = "https://factba.se/json/json-20170717.php?q=" + q + "&media=" + fmedia + "&type=" + ftype + "&startdate=" + startdate + "&enddate=" + enddate + "&sort=" + ssort + "&f=" + f + "&t=" + t + "&l=" + l + "&p=";

			console.log('after-json call');

			// Analytics on query
			var tclean = q.replace("+", "%20"); tclean = decodeURIComponent(tclean);
			if (newload == 1) {	newload = 0; ga('send', 'event', 'search', 'searchpage', tclean, 1, {'NonInteraction': 0}); }
			else {  ga('send', 'event', 'search', 'searchbox', tclean, 1, {'NonInteraction': 0}); }

			console.log('after-newload condition');

			// On Mobile close menu
			$('.filters-dropdown').hide();
			
			
////////////////////////////////////////////////////////////////////////////////////////			
			// Initial blocks for certain terms - Insert above search
			if (q.includes("inaug")) {
				bl = '<div class="item"><div class="well" style="border:1px solid #888;"><a href="/topics/inauguration" onClick="ga(\'send\', \'event\', \'internal\', \'search-topic-inauguration\', tid, 1, {\'NonInteraction\': 0});" style="text-decoration:none;"><h3><i class="fa fa-database"></i> Topic Page<br><br><center><b>Topic Page: Inauguration Semantic Analysis</b><br><small>Click here</small></center></a></div></div></div></div>'; $('#lazyload').hide(); $('.spinner').hide(); $('#results').append(bl);
			}
			if (q.includes("delete") == true || q.includes("Delete") == true) {
				bl = '<div class="item"><div class="well" style="border:1px solid #888;"><a href="/topic/deleted-tweets" onClick="ga(\'send\', \'event\', \'internal\', \'search-topic-deleted\', tid, 1, {\'NonInteraction\': 0});" style="text-decoration:none;"><h3><i class="fa fa-database"></i> Topic Page<br><br><center><b>Topic Page: Deleted Tweets</b><br><small>Click here</small></center></a></div></div></div></div>'; $('#lazyload').hide(); $('.spinner').hide(); $('#results').append(bl);
			}
			else if (q.includes("tweet") == true || q.includes("Tweet") == true || q.includes("twitter") == true || q.includes("Twitter") == true) {
				bl = '<div class="item"><div class="well" style="border:1px solid #888;"><a href="/topic/twitter" onClick="ga(\'send\', \'event\', \'internal\', \'search-topic-twitter\', tid, 1, {\'NonInteraction\': 0});" style="text-decoration:none;"><h3><i class="fa fa-database"></i> Topic Page<br><br><center><b>Topic Page: All Tweets</b><br><small>Click here</small></center></a></div></div></div></div>'; $('#lazyload').hide(); $('.spinner').hide(); $('#results').append(bl);
			}
			else if (q.includes("net worth") == true || q.includes("Net Worth") == true || q.includes("assets") == true || q.includes("portfolio") == true  || q.includes("real estate") == true || q.includes("Real Estate") == true ||  q.includes("money") == true || q.includes("taxes") == true ) {
				bl = '<div class="item"><div class="well" style="border:1px solid #888;"><a href="/topic/assets" onClick="ga(\'send\', \'event\', \'internal\', \'search-topic-assets\', tid, 1, {\'NonInteraction\': 0});" style="text-decoration:none;"><h3><i class="fa fa-database"></i> Topic Page<br><br><center><b>Topic Page:<br>Net Worth and Assets</b><br><small>Click here</small></center></a></div></div></div></div>'; $('#lazyload').hide(); $('.spinner').hide(); $('#results').append(bl);
			}
			

			console.log('after-configuration');


////////////////////////////////////////////////////////////////////////////////////////			
			// Getch the JSON and parse

			// console.log(jsonurl);
			// console.log("outside json call");

			$.getJSON(jsonurl + p, function(json) {
				console.log(jsonurl);
				console.log("in json call");

				$('.yeartypes').empty();
				if (p == 1) {
					firstpage = 1;
				} else {
					firstpage = "";
				}

				// Fixing the 8th issue.

				records = numeral(json.combo.records).format('0,0');
				filtered = json.combo.filtered;
				fallback = json.combo.fallback;
				if (filtered < 10) {
					$('#lazyload').hide();
					$('.spinner').hide();
					$('#results').empty();
					$('#results').html('<div class="item" style="border:0; box-shadow: 0;"><div class="well" style="padding:20px; background:transparent; border:0; box-shadow: 0;">No Enough Data</div></div>');
					if(sidebarstate == 'open') closeSidebar();
				}
				winwidth = Number($(window).width());
				if(winwidth < 1024) { rbh = 165; rbhn = 140; fwb = 130; fwbn = 100; } else { rbh = 205; rbhn = 180; fwb = 165; fwbn = 140; }
				if (fallback == 1) {
					f = f.replace("z", "");
					f = f + "-z";
					f = f.replace(/^\-/, ""); // Add and Remove if first item
					$(".fixedwhitebox").css("height", fwb+"px");
					$("#results").css("padding-top", "45px");
					$("#railad").css("padding-top", "25px");
					$(".alertarea").css("height", "25");
					if(winwidth < 1024) {
						$(".alertarea").html("No matches. Adding fuzziness.");
					} else {
						$(".alertarea").html("Your search didn't match anything, so we added fuzziness to find approximate matches.");
					}
				} else {
					$(".alertarea").css("height", "0");
					$(".alertarea").empty();
					$(".fixedwhitebox").css("height", fwbn+"px");
					$("#results").css("padding-top", "20px");
					$("#railad").css("padding-top", "0px");
				};
				maxpage = Math.ceil(filtered / l);
				filtered = numeral(json.combo.filtered).format('0,0');

				// Fixing the 8th issue

				if (filtered < 10) {

				}
				$('.total-matches').empty();
				$('.total-matches').html('<div style="font-size:1.2em; font-family: \'Univers LT 65\', Arial, sans-serif; font-variant:small-caps; font-weight:bold; color:#222; transform: scale(1, 1.25);"> References: ' + filtered + '</div>');
				ms = numeral(json.combo.milliseconds).format('0,0');
				i = 0;
				p++;
				if (newload == 1) {
					newload = 0;
				} else {
					var newpage = document.location.pathname + '?q=' + q;
					ga('set', 'page', newpage);
					ga('send', 'pageview');
				}
				
				
				
				
////////////////////////////////////////////////////////////////////////////////////////
				// The parsing part of Get JSON and making blocks on page
					$.each(json.data, function(key, val) {
					media_type = ''; text = ''; date = ''; document_id = ''; client = '';
					author = ''; type = ''; media_type = ''; twitter_id = ''; deleted = '';
					media_urls = null; record_title = ''; source = ''; link_url = ''; city = ''; state_code = '';
					i++;
					text = val['text'];
					var searchTerms = qsplit.split(' ');
					for (var z in searchTerms) 	{
						var regex = new RegExp('(\\b' + searchTerms[z] + '\\b)', 'ig');
						text = text.replace(regex,'<em>$1</em>');
					}
					text = text.replace(/<\/em> <em>/g, " ");
					date = val['date'];
					date = moment(date).format('MMM D \'YY');
					document_id = val['id'];
					author = "<span style='font-family:\"Univers LT 65\", sans-serif;'>" + val['author'] + "</span>";
					record_type = val['type'];
					media_type = val['media_type'];
					source = val['source'];
					if(typeof val['location'] != 'undefined') {
						if(typeof(val['location']['city']) == 'undefined') { city=""; } else { city = val['location']['city']; }
						if(typeof(val['location']['state']) == 'undefined') { state=""; } else { state = val['location']['state']; }
						if(typeof(val['location']['state_code']) == 'undefined') { state_code=""; } else { state_code = val['location']['state_code']; }
						if(typeof(val['location']['country']) == 'undefined') { country=""; } else { country = val['location']['country']; }
						if(typeof(val['location']['mapicon']) == 'undefined') { mapicon=""; } else { mapicon = val['location']['mapicon']; var mapstate = '<i class="mg ' + val['location']['mapicon'] + '"></i>'; }
						if (city && state_code) {
							citystate = city + ", " + state_code;
						} else if (city && state) {
							citystate = city + ", " +state;
						} else if (city && country) {
							citystate = city + ", " +country;
						} else {
						}
					} else {
						city = ""; state = ""; state_code = ""; country = ""; mapstate = ""; mapicon = ""; citystate = "";
					}

					// If Block is Twitter
					if (source == 'Twitter') {
						twitter_id = val['twitter']['twitter_id'];
						deleted = val['twitter']['deleted'];
						if (val['twitter']['retweet'] == true || val['twitter']['manual_retweet'] == true) {
							var twitter_author = "Retweet";
						} else if (val['twitter']['author_analysis'] == false) {
							var twitter_author = "Likely Staff";
						} else if (val['twitter']['author_analysis'] == true) {
							var twitter_author = "Likely Trump";
						} else {
							var twitter_author = "Unknown";
						}
						author = "<span style='font-family:\"Univers LT 65\", sans-serif;'>" + twitter_author + "</span>";
						if (deleted == true) { var deleteflag = 1; } else { var deleteflag = 0; }
						if ((typeof(val['twitter']['media_urls']) == 'undefined')) { media_url = ''; } else {
							if(val['twitter']['media_urls'] == null) { media_url = ''; } else {
								media_url = val['twitter']['media_urls'][0];
								muwidth = 60;
							};
						};
						if (media_url != '') {
							var tw_image_url = '<img src="' + media_url + '" class="searchimage">';
						} else {
							var tw_image_url = '<div class="topic-media-image-icon socialicon"><i class="fa fa-3x fa-twitter"></i></div>';
						}
						if (deleted == true) {
							var delete_tweet = '<div style="position:absolute; bottom:0; right:0; margin-right:10px; margin-bottom:10px; opacity:0.5;"><h3 class="grit" style="color:red; transform:rotate(-25deg);">DELETED</h3></div>';
						} else {
							var delete_tweet = '';
						}
						bl = '<div class="item"><div class="well"><div class="row"><div class="col-lg-12"><div style="display:inline-block;"><h3><i class="fa fa-twitter"></i> Twitter</h3></div><div style="float:right;"><h4>' + author + '</h4></div></div><div class="col-lg-3 mediaside">' + tw_image_url + '</div><div class="col-lg-9"><a data-toggle="modal" data-target="#tweetmodal" data-deleted="' + deleteflag + '" title="Open Tweet in Window" id="' + twitter_id + '" class="tweetmodal" onClick="ga(\'send\', \'event\', \'internal\', \'twittermodal\', twitter_id, 1, {\'NonInteraction\': 0});">' + text + '</a><div style="display:inline-block; width:100%;"><div style="float:left;"><h4>' + date + '</h4></div><div style="float:right;">Twitter</div></div></div></div>' + delete_tweet + '</div></div>';
					
					// If Block is an Asset
					} else if (record_type == 'Business Record'){
						record_title = val['record_title'];
						source = val['source'];
						link_url = val['url'];
						image_url = val['image_url'];
						place = val['place'];
						date = val['date'];
						date = moment(date).format('MMM D \'YY');
						text = text.replace(/;/g, "<br>");
						text = text.replace("Donald Trump holds the following positions", "<br>Donald Trump holds the following positions");
						if (image_url) { var asset_img_url = '<img src="'+image_url+'" class="interviewthumb searchimage"><br>'; } else { var asset_img_url = ""; }
						if (link_url) { var source_string = '<a href="'+link_url+'" target=_blank onClick="ga(\'send\', \'event\', \'external\', source, link_url, 1, {\'NonInteraction\': 0});">' + source + '</a>'; } else { var source_string = source; }
						bl = '<div class="item"><div class="well"><div class="row"><div class="col-lg-12"><div style="display:inline-block;"><h3><i class="fa fa-money"></i> Assets</h3></div><div style="float:right;"><h4>' + citystate + ' ' + mapstate + '</h4></div></div><div class="col-lg-3 mediaside">' + asset_img_url + '</div><div class="col-lg-9"><span><h4>'+record_title+'</h4></span><br>' + text + '</span><div style="display:inline-block; width:100%;"><div style="float:left;"><h4>' + date + '</h4></div><div style="float:right;"><h4><small>'+source_string+'</small></h4></div></div></div></div></div></div>';
					
					// If Block is position paper
					} else if (record_type == 'Position Paper'){
						record_title = val['record_title'];
						source = val['source'];
						link_url = val['url'];
						bl = '<div class="item"><div class="well"><div class="row"><div class="col-lg-12"><div style="display:inline-block;"><h3><i class="fa fa-file-text"></i> Official Document</h3></div><div style="float:right;"></div></div><div class="col-lg-3 mediaside"><img src="/img/document.png" class="interviewthumb searchimage"></div><div class="col-lg-9"><span><h4>'+record_title+'</h4><br>"...' + text + '..."</span><div style="display:inline-block; width:100%;"><div style="float:left;"><h4>' + date + '</h4></div><div style="float:right;"><h4><small><a href="'+link_url+'" target=_blank onClick="ga(\'send\', \'event\', \'external\', \'officialdoc\', link_url, 1, {\'NonInteraction\': 0});">' + source + '</a></small></h4></div></div></div></div></div></div>';


					// If Block is just text
					} else if (media_type == 'Text'){
						if (typeof val['record_title'] !== 'undefined') {  record_title = val['record_title'];} else { record_title = ""; }
						source = val['source'];
						image_url = val['image_url'];
						link_url = val['url'];
						if (source == 'The American Presidency Project' || source == 'White House Press Office') {
							var headerlabel = '<h3><i class="fa fa-file-text"></i> Speech</h3>';
						} else {
							var headerlabel = '<h3><span class="fa-stack" style="margin-top:-5px; font-size:0.8em;"><i class="fa fa-user fa-stack-1x"></i><i class="fa fa-user fa-stack-1x" style="margin-left:5px; margin-top:5px; color:#aaaaaa;"></i></span> Interview</h3>';
						}
						bl = '<div class="item"><div class="well"><div class="row"><div class="col-lg-12"><div style="display:inline-block;">' + headerlabel + '</div><div style="float:right;"><h4>' + citystate + ' ' + mapstate + '</h4></div></div><div class="col-lg-3 mediaside"><img src="'+image_url+'" class="interviewthumb searchimage"></div><div class="col-lg-9"><span><h4>'+record_title+'</h4></span><br>"...' + text + '..."</span><div style="display:inline-block; width:100%;"><div style="float:left;"><h4>' + date + '</h4></div><div style="float:right;"><h4><small><a href="'+link_url+'" target=_blank onClick="ga(\'send\', \'event\', \'external\', source, link_url, 1, {\'NonInteraction\': 0});">' + source + '</a></small></h4></div></div></div></div></div></div>';
					
					// All Else, but fallback is Video
					} else {
						// Video
						if (hasOwnProperty['transcript']) { 
							if ((typeof(val['transcript']['time_start']) == 'undefined')) { tc=0; } else {
								if(val['transcript']['time_start'] == null) { tc=9; } else {
									time_start = val['transcript']['time_start'];
									tc = time_start.split(":");
									tc = (((parseInt(tc[0]) * 3600) + (parseInt(tc[1]) * 60) + (parseInt(tc[2]))) - 2);
									tc = Math.round(tc);
								};
								time_end = val['transcript']['time_end'];					
							};
						} else {
							tc=0;
						};
						tr_url = val['url'];
						tr_source = val['source'];
						tid = val['transcript']['transcript_id'];
						id = val['id'];
						var sequence = val['sequence'];
						var record_title = val['record_title'];

						// Check DailyMotion or YouTube
						if (tid.includes("DaMo--") == true) {
							var tidDaMo = tid.replace("DaMo--", "");
							bl = '<div class="item"><div class="well"><div class="row"><div class="col-lg-12"><div style="display:inline-block;"<h3><i class="fa fa-television"></i> Video</h3></div><div style="float:right;"><h4>' + citystate + ' ' + mapstate + '</h4></div></div><div class="col-lg-3 mediaside"><div class="dailymotion-large" data-time="' + tc + '"data-id="' + tid + '" data-sequence="' + sequence + '" title="Play video right here"></div></div><div class="col-lg-9"><a data-toggle="modal" data-target="#id-' + id + '" title="Open Video in Window" data-video="https://www.dailymotion.com/embed/video/' + tidDaMo + '?start=' + tc + '&autoplay=1&html=1" class="videomodal" onClick="ga(\'send\', \'event\', \'internal\', \'videomodal\', tid, 1, {\'NonInteraction\': 0});"><h4>'+record_title+'</h4>"...' + text + '..."</a><div style="display:inline-block; width:100%;"><div style="float:left;"><h4>' + date + '</h4></div><div style="float:right;"><h4><small><a href="' + tr_url + '" target=_blank title="Open Video on DailyMotion" onClick="ga(\'send\', \'event\', \'external\', tr_source, tid, 1, {\'NonInteraction\': 0});">' + tr_source + '</a></small></h4></div></div></div></div></div></div>';
							blmodal = '<div class="modal fade" id="id-' + id + '" tabindex="-1" role="dialog"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body center-block text-center videopop"><div class="holds-the-iframe"><iframe class="ytiframe" src=""></iframe></div></div></div></div></div>';
						} else  {
							bl = '<div class="item"><div class="well"><div class="row"><div class="col-lg-12"><div style="display:inline-block;"><h3><i class="fa fa-television"></i> Video</h3></div><div style="float:right;"><h4>' + citystate + ' ' + mapstate + '</h4></div></div><div class="col-lg-3 mediaside"><div class="youtube-large" data-time="' + tc + '"data-id="' + tid + '" data-sequence="' + sequence + '" title="Play video right here"></div></div><div class="col-lg-9"><a data-toggle="modal" data-target="#id-' + id + '" title="Open Video in Window" data-video="//www.youtube.com/embed/' + tid + '?start=' + tc + '" class="videomodal" onClick="ga(\'send\', \'event\', \'internal\', \'videomodal\', tid, 1, {\'NonInteraction\': 0});"><h4>'+record_title+'</h4>"...' + text + '..."</a><div style="display:inline-block; width:100%;"><div style="float:left;"><h4>' + date + '</h4></div><div style="float:right;"><h4><small><a href="' + tr_url + '" target=_blank title="Open Video on YouTube" onClick="ga(\'send\', \'event\', \'external\', tr_source, tid, 1, {\'NonInteraction\': 0});">' + tr_source + '</a></small></h4></div></div></div></div></div></div>';
							blmodal = '<div class="modal fade" id="id-' + id + '" tabindex="-1" role="dialog"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body center-block text-center videopop"><div class="holds-the-iframe"><iframe class="ytiframe" src=""></iframe></div></div></div></div></div>';
						}
					}
					$('#lazyload').hide();
					$('.spinner').hide(); // Hide Spinner
					$('#results').append(bl);
					$('#modalblock').append(blmodal);
				});

	
	
	
	
	////////////////////////////////////////////////////////////////////////////////////////
				// Gathering of Data for Aggregates
				//Sidebar aggregations
				//Record Type Counts
				// Find out where on reload it's clearing
				if (firstpage == 1) {
					var recordcounts = "";
					var typeall = 0;
					$('.z').empty();
					$('.mediatypes').empty();
					$('.recordtypes').empty();
					$('.yeartypes').empty();
					topics_wordcloud_data = [];
					big5_wordcloud_data = [];
					category_data = [];
					timechart_polarity = [];
					timechart_count = [];
					timechart_categories = [];
					twitter_heatmap_data = "";
					spark_data = [];
					big5_wordcloud_data = [];
					category_data = [];
					timechart_polarity = [];
					timechart_categories = [];
					twitter_heatmap_data = "";
					spark_data = [];
					max_heatmap = 0;
					min_heatmap = 999999999;
					mid_heatmap = 0;
					// Overall Sentiment
					var sso_text = json.aggregations.sentiment.avg_sentiment;
						var sso = parseFloat(sso_text);
						var sso_label = "";
						if (sso < -0.5) 				{ sso_label = "Very Negative"; };
						if (sso >= -0.5 && sso < -0.4) 	{ sso_label = "Negative"; };
						if (sso >= -0.4 && sso < -0.3) 	{ sso_label = "Somewhat Negative"; };
						if (sso >= -0.3 && sso < -0.2) 	{ sso_label = "Slightly Negative"; };
						if (sso >= -0.2 && sso < -0.1)	{ sso_label = "Leans Negative"; };
						if (sso >= -0.1 && sso < 0.1) 	{ sso_label = "Neutral"; };
						if (!sso) 						{ sso_label = "Unknown"; };
						if (sso >= 0.1 && sso < 0.2)	{ sso_label = "Leans Positive"; };
						if (sso >= 0.2 && sso < 0.3)	{ sso_label = "Slightly Positive"; };
						if (sso >= 0.3 && sso < 0.4)	{ sso_label = "Somewhat Positive"; };
						if (sso >= 0.4 && sso < 0.5)	{ sso_label = "Positive"; };
						if (sso >= 0.5)					{ sso_label = "Very Positive"; };
						sso = numeral(sso).format('0.00');
						$('#dom_sentiment').text(sso_label);
						$('.side-head-visible').css('display', 'block');
					// Add Sentiment Trend
	
					// Words Per Minute
					var wpm = json.aggregations.words_per_minute;
					$('#wpmblock').text(wpm);
					
					var wpm = parseFloat(json.aggregations.words_per_minute);
					gradelevel_gauge_data = parseFloat(json.aggregations.flesch_kincaid_grade_level);
					
					sentiment_gauge_data = json.aggregations.sentiment.avg_sentiment;
					// Overall Emotion
					var dom_emo_text = json.aggregations.dominant_emotion.text;
					var dom_emo_score = parseFloat(json.aggregations.dominant_emotion.score);
						if (dom_emo_text == "Anger") { var dom_emo_color = "#ed3626"; }
						if (dom_emo_text == "Joy") { var dom_emo_color = "#f5e96f"; }
						if (dom_emo_text == "Sadness") { var dom_emo_color = "#2f5fab"; }
						if (dom_emo_text == "Disgust") { var dom_emo_color = "#63b538"; }
						if (dom_emo_text == "Fear") { var dom_emo_color = "#8a5ea9"; }
						$('#dom_emotion').text(dom_emo_text);
						$('#dom_emotion').css("color", dom_emo_color);
	
					// Category Bucket
					var category_data = [];
					var deletedcount = json.aggregations.deleted_tweets;
					$.each(json.aggregations.category, function(key, val) {
						category_data.push({'name': val['text'], 'y': val['count']});
						rtype = val['text'];
						rtypecount = val['count'];
						rsentiment = val['sentiment'];
						typeall = typeall+rtypecount;
						if (rtype == "Business Record") { $('.fta-num').html("(" + numeral(rtypecount).format(0,0) + ")"); }
						if (rtype == "Debate") { $('.ftd-num').html("(" + numeral(rtypecount).format(0,0) + ")"); }
						if (rtype == "Deposition/Testimony") { $('.ftdt-num').html("(" + numeral(rtypecount).format(0,0) + ")"); }
						if (rtype == "Interview") { $('.fti-num').html("(" + numeral(rtypecount).format(0,0) + ")"); }
						if (rtype == "Position Paper") { $('.ftpp-num').html("(" + numeral(rtypecount).format(0,0) + ")"); }
						if (rtype == "Press Conference") { $('.ftpc-num').html("(" + numeral(rtypecount).format(0,0) + ")"); }
						if (rtype == "Remarks") { $('.ftr-num').html("(" + numeral(rtypecount).format(0,0) + ")"); }
						if (rtype == "Speech") { $('.fts-num').html("(" + numeral(rtypecount).format(0,0) + ")"); }
						if (rtype == "Social") { $('.fttw-num').html("(" + numeral(rtypecount).format(0,0) + ")"); }
						if (rtype == "Deleted Tweets") { $('.ftdt-num').html("(" + numeral(rtypecount).format(0,0) + ")"); }
						recordcounts = recordcounts+rtype+","+rtypecount+"<br>";
					});
					$('#ftall-num').html("(" + numeral(typeall).format(0,0) + ")");
					$('#recordtypes').html(recordcounts+"<p><br>");
					category_pie_chart(category_data);
	
	
	
					//Media Type Counts
					var mediacounts = "";
					var mediaall = 0;
					var mediatext = 0;
					$.each(json.aggregations.media_type, function(key, val) {
						mtype = val['text'];
						mtypecount = val['count'];
						msentiment = val['sentiment'];
						mediaall = mediaall+mtypecount;
						if (mtype == "Text") { mediatext = mediatext+mtypecount; }
						if (mtype == "Video") { $('.fmv-num').html("(" + numeral(mtypecount).format(0,0) + ")"); }
						if (mtype == "Social") { $('.fms-num').html("(" + numeral(mtypecount).format(0,0) + ")"); }
						mediacounts = mediacounts+mtype+","+mtypecount+"<br>";
					});
					$('.fmt-num').html("(" + numeral(mediatext).format(0,0) + ")");
					$('.fma-num').html("(" + numeral(mediaall).format(0,0) + ")");
					$('#mediatypes').html(mediacounts+"<p><br>");
	
	
					//Entity Wordcloud			
					$.each(json.aggregations.entities, function(key, val) {
						if ((typeof(val['text']) == 'undefined')) { } else {
							var temptitle = $('#search').val();
							temptitle = temptitle.replace(/['"]+/g, '');
							var entitytext = val['text'];
							var tempurl = "search-july-17#"+val['text'];
							if (val['text'] != "") { topics_wordcloud_data.push({text:val['text'],link:tempurl,weight:val['count']}); }
						}
					});							
					//Big 5  Wordcloud			
					$.each(json.aggregations.emotion, function(key, val) {
						if ((typeof(key) == 'undefined')) { } else {
	 						{ big5_wordcloud_data.push({text:key,weight:val}); }
						}
					});
	
					//Heatmap
					var w=1; var h;		
					$.each(json.aggregations.twitter_heatmap.week, function(key, val) {
						for(h=0; h<=23; h++) {
							if(w == 1) { var heatweek = "2017-07-02"; }
							if(w == 2) { var heatweek = "2017-07-03"; }
							if(w == 3) { var heatweek = "2017-07-04"; }
							if(w == 4) { var heatweek = "2017-07-05"; }
							if(w == 5) { var heatweek = "2017-07-06"; }
							if(w == 6) { var heatweek = "2017-07-07"; }
							if(w == 7) { var heatweek = "2017-07-08"; }
							if (val['hour'][h]['count'] > max_heatmap) { max_heatmap = val['hour'][h]['count']; }
							if (val['hour'][h]['count'] < min_heatmap) { min_heatmap = val['hour'][h]['count']; }
							twitter_heatmap_data = twitter_heatmap_data+heatweek+","+h+","+val['hour'][h]['count']+"\n";
						}
						w++;
					});
					mid_heatmap = (max_heatmap+min_heatmap)/2;
	 
	
	
					//Timechart Counts
					var temp_first = "";
					var temp_last = "";
					$.each(json.aggregations.year, function(key, val) {
						ytype = val['year'];
						if (ytype < 1980) { 
						} else {
							numeral.nullFormat('null');
							ytypecount = val['count'];
							ysentiment = numeral(val['sentiment']).format('0.000');
							if(ysentiment == '') { ysentiment = 'null'; }
							timechart_categories.push(ytype);
							timechart_count.push(parseInt(ytypecount));
							timechart_polarity.push(parseFloat(ysentiment));
							if (ysentiment != "0.000") { 
								if (temp_first == "") { temp_first = parseFloat(ysentiment); }
								spark_data.push({"name": ytype, "y":parseFloat(ysentiment)}); 
								temp_last = parseFloat(ysentiment);
							}
						}
					});
					if ((temp_first-temp_last) > -0.1 && (temp_first-temp_last) < 0.1) {
						var sparktrend = "No Clear Trend";
					} else if (temp_first > temp_last) {
						var sparktrend = "Trending Negative";
					} else if (temp_first < temp_last) {
						var sparktrend = "Trending Positive";
					}
					$('#sparktrend').text(sparktrend);
					sentiment_spark(spark_data);
				
					if(sidebarstate == "open") {
				    	
				    	q = $("#search").val();

				    	if(q.length == 0){
							$("#full-dashboard").css('display','none');				    	
				    	}
				    	else{
							$("#full-dashboard").show();
							$("#full-dashboard").css('display','inline-block');				    	
			    			$("#full-dashboard").css('width', resultswidth+"px")

					    	sidebarCharts();
				    	}
				    	console.log("In openning search function called");
					}
				};
				
		// Get charts to clear and refresh properly on new search, fix formatting, make mobile-ized and push the f*** out	
	
	
	////////////////////////////////////////////////////////////////////////////////////////
					// Video Trigger Youtube					
				v = document.getElementsByClassName("youtube-large");
				for (n = 0; n < v.length; n++) {
					div = document.createElement("div");
					div.setAttribute("data-id", v[n].dataset.id);
					div.setAttribute("data-sequence", v[n].dataset.sequence);
					div.setAttribute("data-time", v[n].dataset.time);
					div.innerHTML = youtubeThumb(v[n].dataset.id, v[n].dataset.sequence);
					div.onclick = youtubeIframe;
					v[n].appendChild(div);
				}

				// Video Trigger DailyMotion					
				v = document.getElementsByClassName("dailymotion-large");
				for (n = 0; n < v.length; n++) {
					div = document.createElement("div");
					div.setAttribute("data-id", v[n].dataset.id);
					div.setAttribute("data-sequence", v[n].dataset.sequence);
					div.setAttribute("data-time", v[n].dataset.time);
					div.innerHTML = dailymotionThumb(v[n].dataset.id, v[n].dataset.sequence);
					div.onclick = dailymotionIframe;
					v[n].appendChild(div);
				}

				//Hide Video Embed until clicked. Show in modal for text click
				var trigger = $("body").find('[class="videomodal"]');
				trigger.click(function() {
					console.log('trigger in 1208');
					var themodal = $(this).data("target"),
						videosrc = $(this).attr("data-video"),
						videosrcauto = videosrc + "&autoplay=1";
					$(themodal + ' iframe').attr('src', videosrcauto);
					$(themodal + ' button.close').click(function() {
						$(themodal + ' iframe').attr('src', '');
					});
					ga('send', 'event', 'internal', 'inlinevideo', videosrc, 1, {'NonInteraction': 0});
				});



				firstpage = "";
				// $('#lazyload').hide();

			});
		}, 2000));
	});



////////////////////////////////////////////////////////////////////////////////////////
	// Modal Handling
	$('#tweetmodal').on('show.bs.modal', function(event) {
		$('#tweetmodalspinner').show();
		var tweetpopup = event.relatedTarget.id;
		var checkdeleted = $('#' + tweetpopup).data('deleted');
		if (checkdeleted == 1) {
			$('#tweetpop').html('<img src="https://s3.amazonaws.com/rdt-tweets/' + tweetpopup + '.jpg" width=500><div style="position:absolute; bottom:0; right:0; margin-right:10px; margin-bottom:10px; opacity:0.5;"><h3 class="grit" style="color:red; transform:rotate(-25deg);">DELETED</h3></div>');
			$('#tweetmodalspinner').hide();
		} else {
			twttr.ready(function() {
				twttr.widgets.createTweet(tweetpopup, document.getElementById("tweetpop"));
			}).then(function(el) {
				$('#tweetmodalspinner').hide();
			});
		}
	})
	$('#tweetmodal').on('hide.bs.modal', function(event) {
		$('#tweetpop').empty();
	});




////////////////////////////////////////////////////////////////////////////////////////
	// Filters - Media Type
	// Video
	$(".filter-media-video").on('click', function() {
		if ($(this).hasClass("ck")) { } else {
		ga('send', 'event', 'internal', 'search', 'filter-media-video', 1, {'NonInteraction': 0});
		fmedia = "video";
		$(".fmclear").removeClass("ck"); $(".filter-media-video").addClass("ck");
		if (q.length > 0) { 
			$('#results').empty(); p = 1; // Clear text and reset pagecount
			$('.spinner').show();
			$('#lazyload').hide(); 
			$('#search').trigger('input');
			console.log('trigger in 1267'); 
		} // Rerun filter, but only if there is a query

	}});
	// Text
	$(".filter-media-text").on('click', function() {
		if ($(this).hasClass("ck")) { } else {
		ga('send', 'event', 'internal', 'search', 'filter-media-text', 1, {'NonInteraction': 0});
		fmedia = "text";
		$(".fmclear").removeClass("ck"); $(".filter-media-text").addClass("ck");
		if (q.length > 0) { 
			$('#results').empty(); p = 1; // Clear text and reset pagecount
			$('.spinner').show();
			$('#lazyload').hide(); 
			$('#search').trigger('input');
			console.log('trigger in 1282');			  
		} // Rerun filter, but only if there is a query
	}});
	// Social
	$(".filter-media-social").on('click', function() {
		if ($(this).hasClass("ck")) { } else {
		ga('send', 'event', 'internal', 'search', 'filter-media-social', 1, {'NonInteraction': 0});
		fmedia = "social";
		$(".fmclear").removeClass("ck"); $(".filter-media-social").addClass("ck");
		if (q.length > 0) { 
			$('#results').empty(); p = 1; // Clear text and reset pagecount
			$('.spinner').show();
			$('#lazyload').hide(); 
			$('#search').trigger('input');
			console.log('trigger in 1296');			  
		} // Rerun filter, but only if there is a query
	}});
	// All
	$(".filter-media-all").on('click', function() {
		if ($(this).hasClass("ck")) { } else {
		ga('send', 'event', 'internal', 'search', 'filter-media-all', 1, {'NonInteraction': 0});
		fmedia = "";
		$(".fmclear").removeClass("ck"); $(".filter-media-all").addClass("ck");
		$('#results').empty();
		p = 1; // Clear text and reset pagecount
		$('.spinner').show();
		$('#lazyload').hide(); // Show Spinner, Hide More Spinner
		$('#search').trigger('input'); // Rerun filter
		console.log('trigger in 1310');
	}});


	
	
////////////////////////////////////////////////////////////////////////////////////////	
	// Filters - Record Type
	// Video
	// Assets
	$(".filter-type-assets").on('click', function() {
		if ($(this).hasClass("ck")) { } else {
		ga('send', 'event', 'internal', 'search', 'filter-type-assets', 1, {'NonInteraction': 0});
		ftype = "assets";
		$(".ftclear").removeClass("ck"); $(".filter-type-assets").addClass("ck");
		if (q.length > 0) { 
			$('#results').empty(); p = 1; // Clear text and reset pagecount
			$('.spinner').show();
			$('#lazyload').hide(); 
			$('#search').trigger('input');
			console.log('trigger in 1330');  
		} // Rerun filter, but only if there is a query
	}});
	// Debate
	$(".filter-type-debate").on('click', function() {
		if ($(this).hasClass("ck")) { } else {
		ga('send', 'event', 'internal', 'search', 'filter-type-debate', 1, {'NonInteraction': 0});
		ftype = "debate";
		$(".ftclear").removeClass("ck"); $(".filter-type-debate").addClass("ck");
		if (q.length > 0) { 
			$('#results').empty(); p = 1; // Clear text and reset pagecount
			$('.spinner').show();
			$('#lazyload').hide(); 
			$('#search').trigger('input');
			console.log('trigger in 1344');  
		} // Rerun filter, but only if there is a query
	}});
	// Deposition
	$(".filter-type-deposition").on('click', function() {
		if ($(this).hasClass("ck")) { } else {
		ga('send', 'event', 'internal', 'search', 'filter-type-deposition', 1, {'NonInteraction': 0});
		ftype = "deposition";
		$(".ftclear").removeClass("ck"); $(".filter-type-deposition").addClass("ck");
		if (q.length > 0) { 
			$('#results').empty(); p = 1; // Clear text and reset pagecount
			$('.spinner').show();
			$('#lazyload').hide(); 
			$('#search').trigger('input');
			console.log('trigger in 1357');  
		} // Rerun filter, but only if there is a query
	}});
	// Interview
	$(".filter-type-interview").on('click', function() {
		if ($(this).hasClass("ck")) { } else {
		ga('send', 'event', 'internal', 'search', 'filter-type-interview', 1, {'NonInteraction': 0});
		ftype = "interview";
		$(".ftclear").removeClass("ck"); $(".filter-type-interview").addClass("ck");
		if (q.length > 0) { 
			$('#results').empty(); p = 1; // Clear text and reset pagecount
			$('.spinner').show();
			$('#lazyload').hide(); 
			$('#search').trigger('input');
			console.log('trigger in 1372');  
		} // Rerun filter, but only if there is a query
	}});
	// Position Paper
	$(".filter-type-position-paper").on('click', function() {
		if ($(this).hasClass("ck")) { } else {
		ga('send', 'event', 'internal', 'search', 'filter-type-position-paper', 1, {'NonInteraction': 0});
		ftype = "position-paper";
		$(".ftclear").removeClass("ck"); $(".filter-type-position-paper").addClass("ck");
		if (q.length > 0) { 
			$('#results').empty(); p = 1; // Clear text and reset pagecount
			$('.spinner').show();
			$('#lazyload').hide(); 
			$('#search').trigger('input');  
		} // Rerun filter, but only if there is a query
	}});
	// Press Conference
	$(".filter-type-press-conference").on('click', function() {
		if ($(this).hasClass("ck")) { } else {
		ga('send', 'event', 'internal', 'search', 'filter-type-press-conference', 1, {'NonInteraction': 0});
		ftype = "press-conference";
		$(".ftclear").removeClass("ck"); $(".filter-type-press-conference").addClass("ck");
		if (q.length > 0) { 
			$('#results').empty(); p = 1; // Clear text and reset pagecount
			$('.spinner').show();
			$('#lazyload').hide(); 
			$('#search').trigger('input');
			console.log('trigger in 1399');  
		} // Rerun filter, but only if there is a query
	}});
	// Remarks
	$(".filter-type-remarks").on('click', function() {
		if ($(this).hasClass("ck")) { } else {
		ga('send', 'event', 'internal', 'search', 'filter-type-remarks', 1, {'NonInteraction': 0});
		ftype = "remarks";
		$(".ftclear").removeClass("ck"); $(".filter-type-remarks").addClass("ck");
		if (q.length > 0) { 
			$('#results').empty(); p = 1; // Clear text and reset pagecount
			$('.spinner').show();
			$('#lazyload').hide(); 
			$('#search').trigger('input');
			console.log('trigger in 1414');  
		} // Rerun filter, but only if there is a query
	}});
	// Speech
	$(".filter-type-speech").on('click', function() {
		if ($(this).hasClass("ck")) { } else {
		ga('send', 'event', 'internal', 'search', 'filter-type-speech', 1, {'NonInteraction': 0});
		ftype = "speech";
		$(".ftclear").removeClass("ck"); $(".filter-type-speech").addClass("ck");
		if (q.length > 0) { 
			$('#results').empty(); p = 1; // Clear text and reset pagecount
			$('.spinner').show();
			$('#lazyload').hide(); 
			$('#search').trigger('input');
			console.log('trigger in 1427');  
		} // Rerun filter, but only if there is a query
	}});
	// Twitter
	$(".filter-type-twitter").on('click', function() {
		if ($(this).hasClass("ck")) { } else {
		ga('send', 'event', 'internal', 'search', 'filter-type-twitter', 1, {'NonInteraction': 0});
		ftype = "twitter";
		$(".ftclear").removeClass("ck"); $(".filter-type-twitter").addClass("ck");
		if (q.length > 0) { 
			$('#results').empty(); p = 1; // Clear text and reset pagecount
			$('.spinner').show();
			$('#lazyload').hide(); 
			$('#search').trigger('input');
			console.log('trigger in 1441');  
		} // Rerun filter, but only if there is a query
	}});
	// Deleted Tweets
	$(".filter-type-deleted-tweets").on('click', function() {
		if ($(this).hasClass("ck")) { } else {
		ga('send', 'event', 'internal', 'search', 'filter-type-deleted-tweets', 1, {'NonInteraction': 0});
		ftype = "deleted-tweets";
		$(".ftclear").removeClass("ck"); $(".filter-type-deleted-tweets").addClass("ck");
		if (q.length > 0) { 
			$('#results').empty(); p = 1; // Clear text and reset pagecount
			$('.spinner').show();
			$('#lazyload').hide(); 
			$('#search').trigger('input');
			console.log('trigger in 1455');  
		} // Rerun filter, but only if there is a query
	}});
	// All
	$(".filter-type-all").on('click', function() {
		if ($(this).hasClass("ck")) { } else {
		ga('send', 'event', 'internal', 'search', 'filter-type-all', 1, {'NonInteraction': 0});
		ftype = "";
		$(".ftclear").removeClass("ck"); $(".filter-type-all").addClass("ck");
		$('#results').empty();
		p = 1; // Clear text and reset pagecount
		$('.spinner').show();
		$('#lazyload').hide(); // Show Spinner, Hide More Spinner
		$('#search').trigger('input'); // Rerun filter
		console.log('trigger in 1469');
	}});



////////////////////////////////////////////////////////////////////////////////////////
	// Sorting
	$(".sort-oldest").on('click', function() {
		if ($(this).hasClass("ck")) { } else {
		ga('send', 'event', 'internal', 'search', 'sort-type-oldest', 1, {'NonInteraction': 0});
		ssort = "asc";
		$(".sclear").removeClass("ck"); $(".sort-oldest").addClass("ck");
		if (q.length > 0) { 
			$('#results').empty(); p = 1; // Clear text and reset pagecount
			$('.spinner').show();
			$('#lazyload').hide(); 
			$('#search').trigger('input');
			console.log('trigger in 1486');  
		} // Rerun filter, but only if there is a query
	}});
	$(".sort-newest").on('click', function() {
		if ($(this).hasClass("ck")) { } else {
		ga('send', 'event', 'internal', 'search', 'sort-type-newest', 1, {'NonInteraction': 0});
		ssort = "desc";
		$(".sclear").removeClass("ck"); $(".sort-newest").addClass("ck");
		if (q.length > 0) { 
			$('#results').empty(); p = 1; // Clear text and reset pagecount
			$('.spinner').show();
			$('#lazyload').hide(); 
			$('#search').trigger('input');
			console.log('trigger in 1499');  
		} // Rerun filter, but only if there is a query
	}});
	$(".sort-relevant").on('click', function() {
		if ($(this).hasClass("ck")) { } else {
		ga('send', 'event', 'internal', 'search', 'sort-type-relevance', 1, {'NonInteraction': 0});
		ssort = "";
		$(".sclear").removeClass("ck"); $(".sort-relevant").addClass("ck");
		if (q.length > 0) { 
			$('#results').empty(); p = 1; // Clear text and reset pagecount
			$('.spinner').show();
			$('#lazyload').hide(); 
			$('#search').trigger('input');
			console.log('trigger in 1512');  
		} // Rerun filter, but only if there is a query
	}});



////////////////////////////////////////////////////////////////////////////////////////
	// DatePicker
	$(function() {
		var start = moment('1946-06-14T10:54:00-0400');
		var end = moment();
		function cb(start, end) {
			$('.datefilter span').html(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
    			}
		$('.datefilter').daterangepicker({
			startDate: moment('1946-06-14T10:54:00-0400'),
			endDate:  moment(),
			autoApply: true,
			autoUpdateInput: true,
			ranges: {
				'Today': [moment(), moment()],
				'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
				'Last 7 Days': [moment().subtract(6, 'days'), moment()],
				'Last 30 Days': [moment().subtract(29, 'days'), moment()],
				'This Month': [moment().startOf('month'), moment().endOf('month')],
				'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
				'Year-To-Date': [moment().startOf('year'), moment()],
				'Last Year': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')],
				'2010s': [moment('2010-01-01'), moment()],
				'2000s': [moment('2000-01-01'), moment('2010-01-01')],
				'1990s': [moment('1990-01-01'), moment('2000-01-01')],
				'1980s': [moment('1980-01-01'), moment('1990-01-01')],
				'All Time': [moment('1946-06-14T10:54:00-0400'), moment()]
        			}
    			}, cb);
    			cb(start, end);
    			$(".datefilter span").each(function() {
			var text = $(this).text();
			text = text.replace("1946-06-14 - 2017-06-12", "All Dates");
			$(this).text(text);
		});  					

		$('.datefilter').on('apply.daterangepicker', function(ev, picker) {
			startdate = picker.startDate.format('YYYY-MM-DD');
				enddate = picker.endDate.format('YYYY-MM-DD');
			if (q.length > 0) { 
				$('#results').empty(); p = 1; // Clear text and reset pagecount
				$('.spinner').show();
				$('#lazyload').hide(); 
				$('#search').trigger('input');
				console.log('trigger in 1563');  
			}
			// Rerun filter, but only if there is a query
      		$(".datefilter span").each(function() {
				var text = $(this).text();
				text = text.replace("1946-06-14 - 2017-06-12", "All Dates");
				$(this).text(text);
			});  					
		});
	});
        




////////////////////////////////////////////////////////////////////////////////////////
	// Scrollspy for infinite scroll and lazyload
	var win = $(window);
	win.scroll(function() {
		if ($(document).height() - win.height() == win.scrollTop()) {
			if (p > maxpage || p == 1) {} else {
				// $('#lazyload').show();
				$('#search').trigger('input');
				console.log('trigger in 1584');
				ga('send', 'event', 'internal', 'search', 'lazyload', 1, {'NonInteraction': 0});
			}
		}
	});

////////////////////////////////////////////////////////////////////////////////////////
	// Mobile Menu - Handle filtering
	$('#mobilemenu').on('click', function() {
		ga('send', 'event', 'internal', 'search', 'filter-mobile-dropdown', 1, {'NonInteraction': 0});
		$('.filters-dropdown').toggle();
	});
	$('#search').on('dblclick', function() {
		$('#search').val('');
		$('#search').attr('placeholder', 'Search...');
	});
	$('.filters-dropdown-close').on('click', function() {
		ga('send', 'event', 'internal', 'search', 'filter-mobile-dropdownclose', 1, {'NonInteraction': 0});
		$('.filters-dropdown').toggle();
	});

	$(".navbar-toggle").on("click", function() {
		ga('send', 'event', 'internal', 'header', 'navbartoggle', 1, {'NonInteraction': 0});
		$(this).toggleClass("active");
	});
	////////////////////////////////////////////////////////////////////////////////////////
	// Navbar
	<?php include( 'includes/header-footer-highlights-js.inc'); ?>

	$('#searchbox').prop( "disabled", true );
	$('#searchbox').attr("placeholder", "↙ Use the search box below");
	$('.factsearch').css("opacity", "0.4");

// Handle Sidebar Open and Close + Make Charts

	sidebarstate = "closed";
	var marginadjust = 26;
	var resultswidth = ($("#results-block").outerWidth())+30;
	var sidewidth = $("#mySidenav").outerWidth();
	var mainwidth = ($("#results-block").width()+75)+sidewidth;
	// var arrowoffset = $('#tabarrow').css('margin-left');
	// arrowoffset = arrowoffset.replace("px", "");
	// arrowoffset = (Number(arrowoffset));
	// var marginleftarrow = ((mainwidth-sidewidth)*-1)-(arrowoffset+marginadjust); // remove sidebar width from screen width for offset plus five

	function timelinechart_Module(element, tWidth, tMount, lDirection, lStep, lPosX, lPosY) {
			// Large Timeline
		chart_timeline_chart = Highcharts.chart(element, {
			chart: { 	
				events: { render: function () { $("tspan:contains('2020')").css("display", "none");	} },
				backgroundColor:null,
				width: tWidth
			},
			title: { text: null }, 
			legend: { enabled: false },
			tooltip: { shared: true },
			xAxis: [{
				categories: timechart_categories,
				tickAmount : tMount,
				labels: { rotation: lDirection, step: lStep, x: lPosX, y: lPosY }
	    	}],
			yAxis: [{ 	
				type: 'logarithmic',
				enabled: false,
				title: null,
				labels: { enabled: false },
				gridLineWidth: 0
				
			}],
			// plotOptions: { series: { connectNulls: true } },
			series: [{
				type: 'column',
				turboThreshold: 0, 
				data: timechart_count,
				tooltip: {
					valueSuffix: ' matches'
	        	}
			}]
		});			
	}

	function heatmap_Module(element, lAlign, lPosX, lPosY, tickLength){
		// Heatmap
		
		chart_twitter_heatmap = Highcharts.chart(element, {
			chart: { type: 'heatmap', backgroundColor:null  },
		        data: { csv: twitter_heatmap_data },
		    boost: { useGPUTranslations: true },
		    title: { text: null },
		    credits: { enabled: false },
		    xAxis: {
				type: 'datetime',
				dateTimeLabelFormats: { day: '%a' },
		        labels: {
		            align: lAlign,
		            x: lPosX,
		            y: lPosY,
		        },
		        tickLength: tickLength
		    },
		
		    yAxis: {
		        title: {
		            text: null
		        },
		        labels: {
		            format: '{value}:00'
		        },
		        minPadding: 0,
		        maxPadding: 0,
		        startOnTick: false,
		        endOnTick: false,
		        tickPositions: [0, 6, 12, 18, 24],
		        tickWidth: 1,
		        min: 0,
		        max: 23,
		        reversed: true
		    },
		
		    colorAxis: {
				stops: [
					[0, '#eeeeee'],
					[0.1, '#225ea8'],
					[0.2, '#1d91c0'],
					[0.3, '#41b6c4'],
					[0.4, '#c7e9b4'],
					[0.5, '#fffbbc'],
					[0.6, '#fed976'],
					[0.7, '#fd8d3c'],
					[0.8, '#e31a1c'],
					[0.9, '#bd0026'],
					[1, '#800026']
				],
		        min: min_heatmap,
		        max: max_heatmap,
		        startOnTick: false,
		        endOnTick: false
		        
		    },
		    legend: { enabled: false },
		
		    series: [{
		        boostThreshold: 100,
		        borderWidth: 0,
		        nullColor: '#EFEFEF',
		        colsize: 24 * 36e5, // one day
		        tooltip: {
		            headerFormat: 'Tweets by Hour and Day<br/>',
		            pointFormat: '{point.x:%A} {point.y}:00: <b>{point.value} tweets</b>'
		        },
		        turboThreshold: Number.MAX_VALUE // #3404, remove after 4.0.5 release
		    }]
		});		
	}

	function gradelevel_Module(element){
		// Grade Level
		chart_gauge_gradelevel = Highcharts.chart('gradelevelgauge', {
			chart: { type: 'solidgauge', backgroundColor: null, width: $('#'+element).outerWidth() + 20, height:150
				//events: { render: function () { $("tspan:contains('0')").text("K");	} }
			 },
			title: null,
			pane: {
				center: ['45%', '70%'],
				size: '110%',
				startAngle: -90,
				endAngle: 90,
				background: {
					backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
					innerRadius: '60%',
					outerRadius: '100%',
					shape: 'arc'
				}
			},
			tooltip: { enabled: false },
			credits: { enabled: false},
			plotOptions: { solidgauge: { dataLabels: { y: 5, borderWidth: 0, useHTML: true } } },
			yAxis: {
			stops: [
				[0.1, '#55BF3B'], // green
				[0.5, '#DDDF0D'], // yellow
				[0.9, '#DF5353'] // red
			],
			lineWidth: 0,
			minorTickInterval: null,
			tickAmount: 2,
			title: {  y: -70 },
			labels: { y: 16 },
		    min: 0,
		    max: 12
		},
			series: [{
				name: 'Grade Level',
				data: [gradelevel_gauge_data],
				dataLabels: {
				format: '<div style="text-align:center;margin-top:-40px;"><span style="font-size:20px;color:' +
							((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
							'<span style="font-size:12px;color:silver">Flesch Kincaid<br>Grade Level</span></div>'
				},
			}]
	 	});		
	}

	function pos_neg_Module(element){
		// Positive/Negative
		chart_gauge_posneg = Highcharts.chart( element, {
			chart: { type: 'solidgauge', backgroundColor: null, width: $('#'+element).outerWidth() + 20, height:150 },
			title: null,
			pane: {
				center: ['45%', '70%'],
				size: '110%',
				startAngle: -90,
				endAngle: 90,
				background: {
					backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
					innerRadius: '60%',
					outerRadius: '100%',
					shape: 'arc'
				}
			},
			tooltip: { enabled: false },
			credits: { enabled: false},
			plotOptions: { solidgauge: { dataLabels: { y: 5, borderWidth: 0, useHTML: true } } },
			yAxis: {
				stops: [
					[0.1, '#55BF3B'], // green
					[0.5, '#DDDF0D'], // yellow
					[0.9, '#DF5353'] // red
				],
				lineWidth: 0,
				minorTickInterval: null,
				tickAmount: 2,
				title: {  y: -70 },
				labels: { y: 16 },
			    min: -1,
		    	max: 1
				},
			series: [{
				name: 'Polarity',
				data: [sentiment_gauge_data],
				dataLabels: {
				format: '<div style="text-align:center; margin-top:-40px;"><span style="font-size:20px;color:' +
						((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
						'<span style="font-size:11px;color:silver">Leans Positive</span></div>'
				},
			}]
		});			
	}

	function topics_Module(){
		// Wordcloud - Topics
		chart_topic_wordcloud = $("#topicswordcloud").jQCloud(topics_wordcloud_data, { 
			autoResize: true,
			shape: 'rectangular',
			afterCloudRender : $(function () { $('[data-toggle="tooltip"]').tooltip(); })
		});		
	}

	function emotion_Module(){
		// Wordcloud - Emotion
		chart_big5_wordcloud = $("#big5wordcloud").jQCloud(big5_wordcloud_data, { 
			autoResize: true,
			shape: 'rectangular',
			afterCloudRender : $(function () { $('[data-toggle="tooltip"]').tooltip(); })
		});		
	}


	function sidebarCharts() {

		console.log("sidebarcharts function called");

		//Charts

		timelinechart_Module('timelinechart', 800, 11, -90, 1, 0, 30);
		heatmap_Module('twitterheatmap', 'left', 5, 14, 16);
		gradelevel_Module('gradelevelgauge');
		pos_neg_Module('posneggauge');
		topics_Module();		 		
		emotion_Module();			
	};

	function openCloseNav() {
	////////////////////////////////////////////////////////////////////////////////////////
		q = $('#search').val();
		console.log(q.length);
				
	   	if (sidebarstate == "closed") {

	   		if (filtered < 10) {
				$("pull-left").hide();
				$('#results').empty();
				$('#results').html('<div class="item" style="border:0; box-shadow: 0;"><div class="well" style="padding:20px; background:transparent; border:0; box-shadow: 0;">No Enough Data. Please try to search again.</div></div>');   			return;
	   		}
			$(function() {
				$("html, body").animate({ scrollTop: 0 }, "slow");
				
				if(q.length > 0){
					$("#full-dashboard").show();
					$("#full-dashboard").css('display','inline-block');
				}

				$("#big5wordcloud").empty();
				$("#topicswordcloud").empty();
				
				$(".sidebarfade").fadeIn();
	    	    $("body").css("overflow", "hidden");
	    	    $("#mySidenav").animate({width: mainwidth+"px"}, {duration: 200, queue: false, complete: function(){
	    			if (q.length > 0) {
						$("pull-left").show();
	    				$("#full-dashboard").css('display', 'flexbox')
	    				$("#full-dashboard").css('width', resultswidth+"px")
	    			}
	    			else
	    			{
						$("pull-left").hide();
					}
					$(".rotate").toggleClass("down");
			    	setTimeout(function(){
			    		sidebarCharts();
			    	},2000);
	    			sidebarstate = "open";
				}});
			});
	    }else if (sidebarstate == "open") {
	    	closeSidebar();
		}
	};
	$("#tabarrow").on('click', function() {
		openCloseNav();	
	});

	// Open to Close function

	function closeSidebar(){
		$(function() {
			$("#big5wordcloud").empty();
			$("#topicswordcloud").empty();
			$("#full-dashboard").hide()
			$(".sidebarfade").hide();
    	    $("body").css("overflow", "scroll");

    	    $("#mySidenav").animate({width: sidewidth+"px"}, {duration: 600, queue: false, complete: function(){
		    	$(".rotate").toggleClass("down");
				sidebarstate = "closed"; 
			}});
		});		
	}
	
////////////////////////////////////////////////////////////////////////////////////////
	// Hand page load with parametersLoad With Parameter
	q = getURLParameter('q');
	if (!q) {
		q = window.location.hash.substr(1);
	}
	if (q) {
		qclean = q.replace("+", "%20");
		qclean = decodeURIComponent(qclean);
		qclean = qclean.split('+').join(' ');
		qclean = qclean.trim();
		$('#search').attr('placeholder', qclean);
		$('#search').val(qclean);
		$('#search').trigger('input');
		console.log('trigger in 1898');

	};
	window.onhashchange = function() {
		q = getURLParameter('q');
		console.log(q);
		if (!q) {
			q = window.location.hash.substr(1);
		}
		console.log(q);
		// New Search
		if (q) {
			qclean = q.replace("+", "%20");
			qclean = decodeURIComponent(qclean);
			qclean = qclean.split('+').join(' ');
			qclean = qclean.trim();
			$('#search').attr('placeholder', qclean);
			$('#search').val(qclean);
			// Fixing the first issue
			// $('#search').trigger('input');
			console.log('trigger in 1915');
			if (sidebarstate == "open") {
				console.log("When search in open, hashchange function callled");
				chart_twitter_heatmap.destroy();
				chart_timeline_chart.destroy();
				chart_gauge_gradelevel.destroy();
				chart_gauge_posneg.destroy();
				$("#big5wordcloud").empty();
				$("#topicswordcloud").empty();
				chart_category_pie.destroy();
				chart_sentiment_sparkline.destroy();
			}	
		};
	};
});	

</script>
</body></html>