var neonHeadline, headlineCreate, headlineIv, headlineE, introTimeline, changed, navTimeline, l1, l2, l3, nav, navOffset, spacerTimeline, openPortfolio, portfolioTimeline, portfolioFill, portfolioFill2, portfolioName, portfolioClose, portfolioInner, openPortfolioTimeline, openPortfolioFill, openPortfolioFill2, openPortfolioName, openPortfolioClose, openPortfolioInner;
function ready() {
	"use strict";		
	addTimelines();
	addAllEvents();
	addBeforeAfter();
}
function addTimelines() {
	"use strict";
	neonHeadline = document.getElementById("neon-headline");
	headlineCreate = document.getElementById("headline-create");
	headlineIv = document.getElementById("headline-iv");
	headlineE = document.getElementById("headline-e");

	introTimeline = new TimelineLite();
	introTimeline.to(headlineCreate, 0.8, {delay:0.3, ease: Bounce.easeIn, className: "+=neon"});
	introTimeline.to(headlineIv, 0.8, {delay:0.3, ease: Bounce.easeIn, className: "+=neon"}, '-=1.1');
	introTimeline.to(headlineE, 0.8, {delay:0.3, ease: Bounce.easeIn, className: "+=neon"}, '-=1.1');
	introTimeline.to(headlineIv, 0.3, {ease: Bounce.easeOut, className: "-=neon"}, '+=1.2');
	
	changed = false;
	navTimeline = new TimelineLite();
	l1 = document.getElementById("line1");
	l2 = document.getElementById("line2");
	l3 = document.getElementById("line3");

	navTimeline.to(l1, 0.2, {top: 28});
	navTimeline.to(l3, 0.2, {top: 28}, '-=.2');
	navTimeline.to(l1, 0.75, {ease: Back.easeOut, rotation:"-135_ccw", delay:0.2});
	navTimeline.to(l2, 0.75, {ease: Back.easeOut, rotation:"-135_ccw"}, '-=.75');
	navTimeline.to(l3, 0.75, {ease: Back.easeOut, rotation:"135_ccw"}, '-=.75');
	navTimeline.stop();		
	
	nav = document.getElementById("nav");
	navOffset = nav.offsetHeight;
	
	spacerTimeline = new TimelineMax({repeat:-1});
	spacerTimeline.to(".color-spacer", 5, {backgroundColor: "#ed008c"});
	spacerTimeline.to(".color-spacer", 5, {backgroundColor: "#fff200", color: "#131318"});
	spacerTimeline.to(".color-spacer", 5, {backgroundColor: "#92c83e"});
	spacerTimeline.to(".color-spacer", 5, {backgroundColor: "#00aef0", color: "#eaeaf4"});
	
	openPortfolioTimeline = new TimelineMax();
	openPortfolioTimeline.stop();
	
	portfolioTimeline = new TimelineMax();
	portfolioTimeline.stop();
}
function addAllEvents() {
	"use strict"
	//Menu event listener
	var menu = document.getElementById("menu");
	menu.addEventListener('click', animateSequence);
	
	//Neon hover events
	neonHeadline.onmouseover = function() {
		TweenMax.to(headlineIv, .5, {ease: Bounce.easeIn, className: "+=neon"});
	};
	neonHeadline.onmouseout = function() {
		TweenMax.to(headlineIv, .4, {ease: Bounce.easeOut, className: "-=neon"});
	};
	
	//Portfolio Events
	var portfolioItems = document.querySelectorAll(".portfolio-item");
	for (var i=0; i<portfolioItems.length; i++) {
		var pi = document.getElementById(portfolioItems[i].id);
		pi.addEventListener('click', function(e) {
			var continueOn = true;
			if (openPortfolio) {
				openPortfolioInner = document.getElementById(openPortfolio.id+'-inner');
				openPortfolioFill = openPortfolio.querySelector(".fill");
				openPortfolioFill2 = openPortfolio.querySelector(".fill-2");
				openPortfolioName = openPortfolio.querySelector(".portfolio-name");
				openPortfolioClose = openPortfolio.querySelector(".portfolio-close");
				openPortfolioTimeline.to(openPortfolioInner, .4, {ease:Power1.easeOut, height:0});
				openPortfolioTimeline.to(openPortfolioClose, .3, {ease:Power1.easeOut, top:200});
				openPortfolioTimeline.to(openPortfolioName, .3, {ease:Power1.easeOut, top:0}, '-=.2');
				openPortfolioTimeline.to(openPortfolioFill, .3, {ease:Power1.easeOut, width:20}, '-=.3');
				openPortfolioTimeline.to(openPortfolioFill2, .3, {ease:Power1.easeOut,  width:20}, '-=.3');
				openPortfolioTimeline.play();
				
				if (this.id==openPortfolio.id) {
					openPortfolio = '';	
					continueOn = false;
				}
				else {
					openPortfolio = this;
				}
			}
			if (continueOn) {
				portfolioInner = document.getElementById(this.id+'-inner');
				portfolioFill = this.querySelector(".fill");
				portfolioFill2 = this.querySelector(".fill-2");
				portfolioName = this.querySelector(".portfolio-name");
				portfolioClose = this.querySelector(".portfolio-close");
				portfolioTimeline.to(portfolioFill, .4, {ease:Power1.easeOut, width:'50%'});
				portfolioTimeline.to(portfolioFill2, .4, {ease:Power1.easeOut, width:'50%'}, '-=.4');
				portfolioTimeline.to(portfolioName, .4, {ease:Power1.easeOut, top:-200}, '-=.3');
				portfolioTimeline.to(portfolioClose, .4, {ease:Power1.easeOut, top:20}, '-=.5');
				portfolioTimeline.to(portfolioInner, .6, {delay:.1, ease:Power1.easeOut, opacity:1, height:portfolioInner.scrollHeight}, '-=.1');
				portfolioTimeline.play();
				if (!openPortfolio) {
					openPortfolio = this;
				}
				//scrollIt(this.id);
			}
		});
	}
}
function animateSequence() {
	"use strict";
	if (changed==false) {
		navTimeline.play();			
		changed = true;
		nav.style.top = navOffset*-1+'px';
		TweenMax.to(nav, .5, {opacity:1, top:0});
	}
	else {
		navTimeline.reverse();
		changed = false;
		var newOffset = navOffset*-1+'px';
		TweenMax.to(nav, .5, {delay:.2, opacity:0, top:newOffset});
	}
}
function scrollIt(targ) {
	"use strict";
	var target, animDelay, currentLocation, destination, duration, headerHeight;
	headerHeight = document.getElementById("header").scrollHeight;
	if (targ) {
		if (changed==true) {
			animateSequence();
		}
		target = document.getElementById(targ);
		target = target.offsetTop-headerHeight;
		animDelay = 0.8;
	}
	else {
		if (changed==true) {
			animateSequence();
		}
		target = 0;	
		animDelay = 0;
	}
	currentLocation = window.pageYOffset;
	duration = Math.abs(currentLocation-target)/1000;
	if (duration>1.5) {
		duration = 1.5;	
	}
	console.log(duration);
	TweenMax.to(window, duration, {delay:animDelay, ease:Power1.easeOut, scrollTo:target});
}
function addBeforeAfter() {
	"use strict";
	var beforeAfterItems = document.getElementsByClassName("before-after");
	for (var i=0; i<beforeAfterItems.length; i++) {
		var cur = beforeAfterItems[i];
		var width = cur.offsetWidth+'px';
		var res = cur.getElementsByClassName("resize")[0];
		var resImg = res.getElementsByTagName("img")[0];
		resImg.style.width = width;
		var handle = cur.getElementsByClassName("handle")[0];
		drags(handle, res, cur);
	}		
	window.addEventListener("resize", sliderResize);
}
function sliderResize() {
	var beforeAfterItems = document.getElementsByClassName("before-after");
	for (var i=0; i<beforeAfterItems.length; i++) {
		var cur = beforeAfterItems[i];
		var width = cur.offsetWidth+'px';
		var resImg = cur.getElementsByClassName("resize")[0].getElementsByTagName("img")[0];
		resImg.style.width = width;
	}
}

function drags(dragElement, resizeElement, container) {
	var supportsTouch = 'ontouchstart' in window || navigator.msMaxTouchPoints;
	var eventType = supportsTouch ? 'touchstart' : 'mousedown';
	var moveEventType = supportsTouch ? 'touchmove' : 'mousemove';
	var endEventType = supportsTouch ? 'touchend' : 'mouseup';
	dragElement.addEventListener(eventType, mouseDownEvent);		

	var startX, dragWidth, dragRect, containerRect, posX, containerOffset, containerWidth, minLeft, maxLeft, parentElem;

	function mouseDownEvent(e) {
		dragElement.classList.add('draggable');
		resizeElement.classList.add('resizable');

		//Get click or touch event
		//startX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;
		startX = (e.pageX) ? e.pageX : e.targetTouches[0].pageX;

		dragWidth = dragElement.offsetWidth;
		dragRect = dragElement.getBoundingClientRect();
		containerRect = container.getBoundingClientRect();
		posX = dragRect.left + dragWidth - startX;
		containerOffset = containerRect.left;
		containerWidth = container.offsetWidth;

		minLeft = containerOffset + 28;
		maxLeft = containerOffset + containerWidth - dragWidth - 28;

		parentElem = dragElement.parentElement;
		parentElem.addEventListener(moveEventType, moveSliderEvent);
		parentElem.addEventListener(endEventType, function(e) {
			parentElem.removeEventListener(moveEventType, moveSliderEvent);
			dragElement.classList.remove('draggable');
			resizeElement.classList.remove('resizable');
			e.preventDefault();
		});

		e.preventDefault();
	}

	function moveSliderEvent(e) {
		//Get click or touch event
		//var moveX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;
		var moveX = (e.pageX) ? e.pageX : e.targetTouches[0].pageX;

		leftValue = moveX + posX - dragWidth;

		if (leftValue < minLeft) {
			leftValue = minLeft;
		} else if (leftValue > maxLeft) {
			leftValue = maxLeft;
		}

		widthValue = (leftValue + dragWidth / 2 - containerOffset) * 100 / containerWidth + '%';

		dragElement.style.left = widthValue;
		resizeElement.style.width = widthValue;
	}

	dragElement.addEventListener(endEventType, function(e) {
		dragElement.classList.remove('draggable');
		resizeElement.classList.remove('resizable');
		e.preventDefault();
	});
}