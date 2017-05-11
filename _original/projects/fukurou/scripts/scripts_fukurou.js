/****** Hiragana Stroke Order Gallery ******/

function showPic(whichpic) {

	var e = document.getElementById('placeholder');

	if(e.style.display == 'block')
		e.style.display = 'none';
	else
		e.style.display = 'block';
	
	if(document.getElementById)	{
		document.getElementById('placeholder').src = whichpic.href;

	return false;

	}else{

	return true;

	}
}

function fadeOut() {
	var fadepic = document.getElementById('hiragana');
	fadepic.style.opacity = '0.2';
	fadepic.style.filter = 'alpha(opacity=30)';
}

function hide(div) {
document.getElementById(div).style.display = 'none';
document.getElementById('hiragana').style.opacity = '1';
document.getElementById('hiragana').style.filter = 'alpha(opacity=100)';
}

/****** Katakana Stroke Order Gallery ******/

function showPic2(whichpic) {

	var e = document.getElementById('placeholder2');

	if(e.style.display == 'block')
		e.style.display = 'none';
	else
		e.style.display = 'block';
	
	if(document.getElementById)	{
		document.getElementById('placeholder2').src = whichpic.href;

	return false;

	}else{

	return true;

	}
}

function fadeOut2() {
	var fadepic = document.getElementById('katakana');
	fadepic.style.opacity = '0.2';
	fadepic.style.filter = 'alpha(opacity=30)';
}

function hide2(div) {
document.getElementById(div).style.display = 'none';
document.getElementById('katakana').style.opacity = '1';
document.getElementById('katakana').style.filter = 'alpha(opacity=100)';
}
//To detect escape button
document.onkeydown = function(evt) {
evt = evt || window.event;
if (evt.keyCode == 27) {
hide('placeholder2');
}
};

/****** Kanji 1-80 Stroke Order Gallery ******/

function showPic3(whichpic) {

	var e = document.getElementById('placeholder3');

	if(e.style.display == 'block')
		e.style.display = 'none';
	else
		e.style.display = 'block';
	
	if(document.getElementById)	{
		document.getElementById('placeholder3').src = whichpic.href;

	return false;

	}else{

	return true;

	}
}

function fadeOut3() {
	var fadepic = document.getElementById('kanji_main');
	fadepic.style.opacity = '0.2';
	fadepic.style.filter = 'alpha(opacity=30)';
}

function hide3(div) {
document.getElementById(div).style.display = 'none';
document.getElementById('kanji_main').style.opacity = '1';
document.getElementById('kanji_main').style.filter = 'alpha(opacity=100)';
}
//To detect escape button
document.onkeydown = function(evt) {
evt = evt || window.event;
if (evt.keyCode == 27) {
hide('placeholder3');
}
};

















