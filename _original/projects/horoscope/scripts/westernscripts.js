/********** Western Zodiac **********/

function showSign2(){	

var sign = sign;	
var birthmonth = document.getElementById('birthmonth');

bday2 = new Date(birthmonth.value);
bday2.setFullYear(2013);
		
/************ Aries ******************/

//var aries = "Aries: Most compatible with Libra. Least compatible with Taurus.";

var ariesStart = new Date('03/21/2013');
var ariesEnd = new Date('04/19/2013');

	if (bday2 >= ariesStart && bday2 <= ariesEnd)
		{
		sign = "aries";
		}

/************ Taurus ******************/

//var taurus = "Taurus: Most compatible with Scorpio. Least compatible with Sagittarius.";

var taurusStart = new Date('04/20/2013');
var taurusEnd = new Date('05/20/2013');

	if (bday2 >= taurusStart && bday2 <= taurusEnd)
		{
		sign = "taurus";
		}

/************ Gemini ******************/

//var gemini = "Gemini: Most compatible with Sagittarius. Least compatible with Capricorn.";

var geminiStart = new Date('05/21/2013');
var geminiEnd = new Date('06/20/2013');

	if (bday2 >= geminiStart && bday2 <= geminiEnd)
		{
		sign = "gemini";
		}

/************ Cancer ******************/

//var cancer = "Cancer: Most compatible with Taurus. Least compatible with Aquarius.";

var cancerStart = new Date('06/21/2013');
var cancerEnd = new Date('07/22/2013');

	if (bday2 >= cancerStart && bday2 <= cancerEnd)
		{
		sign = "cancer";
		}

/************ Leo ******************/

//var leo = "Leo: Most compatible with Sagittarius. Least compatible with Scorpio.";

var leoStart = new Date('07/23/2013');
var leoEnd = new Date('08/22/2013');

	if (bday2 >= leoStart && bday2 <= leoEnd)
		{
		sign = "leo";
		}

/************ Virgo ******************/

//var virgo = "Virgo: Most compatible with Scorpio. Least compatible with Sagittarius.";

var virgoStart = new Date('08/23/2013');
var virgoEnd = new Date('09/22/2013');

	if (bday2 >= virgoStart && bday2 <= virgoEnd)
		{
		sign = "virgo";
		}

/************ Libra ******************/

var libra = "Libra: Most compatible with Libra. Least compatible with Virgo.";

var libraStart = new Date('09/23/2013');
var libraEnd = new Date('10/22/2013');

	if (bday2 >= libraStart && bday2 <= libraEnd)
		{
		sign = "libra";
		}

/************ Scorpio ******************/

//var scorpio = "Scorpio: Most compatible with Pisces. Least compatible with Aries.";

var scorpioStart = new Date('10/23/2013');
var scorpioEnd = new Date('11/21/2013');

	if (bday2 >= scorpioStart && bday2 <= scorpioEnd)
		{
		sign = "scorpio";
		}

/************ Sagittarius ******************/

//var sagittarius = "Sagittarius: Most compatible with Aquarius. Least compatible with Taurus.";

var sagittariusStart = new Date('11/22/2013');
var sagittariusEnd = new Date('12/21/2013');

	if (bday2 >= sagittariusStart && bday2 <= sagittariusEnd)
		{
		sign = "sagittarius";
		}

/************ Capricorn ******************/

//var capricorn = "Capricorn: Most compatible with Virgo. Least compatible with Gemini.";

var capricornStart = new Date('12/22/2012');
var capricornEnd = new Date('01/19/2013');

	if (bday2 >= capricornStart && bday2 <= capricornEnd)
		{
		sign = "capricorn";
		}

/************ Aquarius ******************/

//var aquarius = "Aquarius: Most compatible with Sagittarius. Least compatible with Cancer.";

var aquariusStart = new Date('01/20/2013');
var aquariusEnd = new Date('02/19/2013');

	if (bday2 >= aquariusStart && bday2 <= aquariusEnd)
		{
		sign = "aquarius";
		}

/************ Pisces ******************/

//var pisces = "Pisces: Most compatible with Scorpio. Least compatible with Virgo.";

var piscesStart = new Date('02/20/2013');
var piscesEnd = new Date('03/20/2013');

	if (bday2 >= piscesStart && bday2 <= piscesEnd)
		{
		sign = "pisces";
		}
/********** Ajax Call Back **********/

$.ajax({
	url: 'http://www.desireebryant.com/projects/horoscope/predictions.php',
	cache: false,
	type: "GET",
	data: {sign : sign},
	success: function(data)
		{
		$('#showdate2').html(data);
		}

});

}
