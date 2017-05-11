
/************************************* Chinese Zodiac **************************************/

function showSign(){

var signtwo = signtwo;
var birthdate = document.getElementById('birthday');
var bday = new Date(birthday.value)

/************ Year of the Rat ******************/

//var rat = "Rat: Most compatible with Dragons, Monkeys and Ox. Least compatible with Horse, Rabbit, and Rooster.";

var ratStart = new Date('02/02/1924');
var ratEnd = new Date('01/23/1925');

var ratStart2 = new Date('01/24/1936');
var ratEnd2 = new Date('02/10/1937');

var ratStart3 = new Date('02/10/1948');
var ratEnd3 = new Date('01/28/1949');

var ratStart4 = new Date('01/28/1960');
var ratEnd4 = new Date('02/14/1961');

var ratStart5 = new Date('02/15/1972');
var ratEnd5 = new Date('02/02/1973');

var ratStart6 = new Date('02/02/1984');
var ratEnd6 = new Date('02/19/1985');

var ratStart7 = new Date('02/19/1996');
var ratEnd7 = new Date('02/06/1997');

var ratStart8 = new Date('02/07/2008');
var ratEnd8 = new Date('01/25/2009');

var ratStart9 = new Date('01/25/2020');
var ratEnd9 = new Date('02/11/2021');

var ratStart10 = new Date('02/11/2032');
var ratEnd10 = new Date('01/30/2033');

/*************** Year of the Ox ******************/	

//var ox = "Ox: Most compatible with Snake, Rooster, Rat and Pig. Least compatible with Sheep, Horse and Dog.";

var oxStart = new Date('01/24/1925');
var oxEnd = new Date('02/12/1926');

var oxStart2 = new Date('02/11/1937');
var oxEnd2 = new Date('01/30/1938');

var oxStart3 = new Date('01/29/1949');
var oxEnd3 = new Date('02/16/1950');

var oxStart4 = new Date('02/15/1961');
var oxEnd4 = new Date('02/04/1962');

var oxStart5 = new Date('02/03/1973');
var oxEnd5 = new Date('01/22/1974');

var oxStart6 = new Date('02/20/1985');
var oxEnd6 = new Date('02/08/1986');

var oxStart7 = new Date('02/07/1997');
var oxEnd7 = new Date('01/27/1998');

var oxStart8 = new Date('01/26/2009');
var oxEnd8 = new Date('02/13/2010');

var oxStart9 = new Date('02/12/2021');
var oxEnd9 = new Date('01/31/2022');

var oxStart10 = new Date('01/31/2033');
var oxEnd10 = new Date('02/18/2034');

/*************** Year of the Tiger ******************/	

//var tiger = "Tiger: Most compatible with Horse, Dog and Rabbit. Least compatible with Monkey.";

var tigerStart = new Date('02/13/1926');
var tigerEnd = new Date('02/01/1927');

var tigerStart2 = new Date('01/31/1938');
var tigerEnd2 = new Date('02/18/1939');

var tigerStart3 = new Date('02/17/1950');
var tigerEnd3 = new Date('02/05/1951');

var tigerStart4 = new Date('02/05/1962');
var tigerEnd4 = new Date('01/24/1963');

var tigerStart5 = new Date('01/23/1974');
var tigerEnd5 = new Date('02/10/1975');

var tigerStart6 = new Date('02/09/1986');
var tigerEnd6 = new Date('01/28/1987');

var tigerStart7 = new Date('01/28/1998');
var tigerEnd7 = new Date('02/15/1999');

var tigerStart8 = new Date('02/14/2010');
var tigerEnd8 = new Date('02/02/2011');

var tigerStart9 = new Date('02/01/2022');
var tigerEnd9 = new Date('01/21/2023');

var tigerStart10 = new Date('02/19/2034');
var tigerEnd10 = new Date('02/07/2035');

/*************** Year of the Rabbit ******************/	

//var rabbit = "Rabbit: Most compatible with Tiger, Sheep, Pig and Dog. Least compatible with Rooster and Rat.";

var rabbitStart = new Date('02/02/1927');
var rabbitEnd = new Date('01/22/1928');

var rabbitStart2 = new Date('02/19/1939');
var rabbitEnd2 = new Date('02/07/1940');

var rabbitStart3 = new Date('02/06/1951');
var rabbitEnd3 = new Date('01/26/1952');

var rabbitStart4 = new Date('01/25/1963');
var rabbitEnd4 = new Date('02/12/1964');

var rabbitStart5 = new Date('02/11/1975');
var rabbitEnd5 = new Date('01/30/1976');

var rabbitStart6 = new Date('01/29/1987');
var rabbitEnd6 = new Date('02/16/1988');

var rabbitStart7 = new Date('02/16/1999');
var rabbitEnd7 = new Date('02/04/2000');

var rabbitStart8 = new Date('02/03/2011');
var rabbitEnd8 = new Date('01/22/2012');

var rabbitStart9 = new Date('01/22/2023');
var rabbitEnd9 = new Date('02/09/2024');

var rabbitStart10 = new Date('02/08/2035');
var rabbitEnd10 = new Date('01/27/2036');

/*************** Year of the Dragon ******************/	

//var dragon = "Dragon: Most compatible with Monkey, Rat, Snakes and Rooster. Least compatible with Dog.";

var dragonStart = new Date('01/23/1928');
var dragonEnd = new Date('02/09/1929');

var dragonStart2 = new Date('02/08/1940');
var dragonEnd2 = new Date('01/26/1941');

var dragonStart3 = new Date('01/27/1952');
var dragonEnd3 = new Date('02/13/1953');

var dragonStart4 = new Date('02/13/1964');
var dragonEnd4 = new Date('02/01/1965');

var dragonStart5 = new Date('01/31/1976');
var dragonEnd5 = new Date('02/17/1977');

var dragonStart6 = new Date('02/17/1988');
var dragonEnd6 = new Date('02/05/1989');

var dragonStart7 = new Date('02/05/2000');
var dragonEnd7 = new Date('01/23/2001');

var dragonStart8 = new Date('01/23/2012');
var dragonEnd8 = new Date('02/09/2013');

var dragonStart9 = new Date('02/10/2024');
var dragonEnd9 = new Date('01/28/2025');

var dragonStart10 = new Date('01/28/2036');
var dragonEnd10 = new Date('02/14/2037');

/*************** Year of the Snake ******************/	

//var snake = "Snake: Most compatible with Rooster, Monkey, Dragon and Ox. Least compatible with Pig.";

var snakeStart = new Date('02/10/1929');
var snakeEnd = new Date('01/29/1930');

var snakeStart2 = new Date('01/27/1941');
var snakeEnd2 = new Date('02/14/1942');

var snakeStart3 = new Date('02/14/1953');
var snakeEnd3 = new Date('02/02/1954');

var snakeStart4 = new Date('02/02/1965');
var snakeEnd4 = new Date('01/20/1966');

var snakeStart5 = new Date('02/18/1977');
var snakeEnd5 = new Date('02/06/1978');

var snakeStart6 = new Date('02/06/1989');
var snakeEnd6 = new Date('01/26/1990');

var snakeStart7 = new Date('01/24/2001');
var snakeEnd7 = new Date('02/11/2002');

var snakeStart8 = new Date('02/10/2013');
var snakeEnd8 = new Date('01/30/2014');

var snakeStart9 = new Date('01/29/2025');
var snakeEnd9 = new Date('02/16/2026');

var snakeStart10 = new Date('02/15/2037');
var snakeEnd10 = new Date('02/03/2038');

/*************** Year of the Horse ******************/	

//var horse = "Horse: Most compatible with Tiger, Dog, and Sheep. Least compatible with Rat and Ox.";

var horseStart = new Date('01/30/1930');
var horseEnd = new Date('02/16/1931');

var horseStart2 = new Date('02/15/1942');
var horseEnd2 = new Date('02/04/1943');

var horseStart3 = new Date('02/03/1954');
var horseEnd3 = new Date('01/23/1955');

var horseStart4 = new Date('01/21/1966');
var horseEnd4 = new Date('02/08/1967');

var horseStart5 = new Date('02/07/1978');
var horseEnd5 = new Date('01/27/1979');

var horseStart6 = new Date('01/27/1990');
var horseEnd6 = new Date('02/14/1991');

var horseStart7 = new Date('02/12/2002');
var horseEnd7 = new Date('01/31/2003');

var horseStart8 = new Date('01/31/2014');
var horseEnd8 = new Date('02/18/2015');

var horseStart9 = new Date('02/17/2026');
var horseEnd9 = new Date('02/05/2027');

var horseStart10 = new Date('02/04/2038');
var horseEnd10 = new Date('01/23/2039');

/*************** Year of the Sheep ******************/	

//var sheep = "Sheep: Most compatible with Rabbit, Pig, Horse. Least compatible with Ox.";

var sheepStart = new Date('02/17/1931');
var sheepEnd = new Date('02/05/1932');

var sheepStart2 = new Date('02/05/1943');
var sheepEnd2 = new Date('01/24/1944');

var sheepStart3 = new Date('01/24/1955');
var sheepEnd3 = new Date('02/11/1956');

var sheepStart4 = new Date('02/09/1967');
var sheepEnd4 = new Date('01/29/1968');

var sheepStart5 = new Date('01/28/1979');
var sheepEnd5 = new Date('02/15/1980');

var sheepStart6 = new Date('02/15/1991');
var sheepEnd6 = new Date('02/03/1992');

var sheepStart7 = new Date('02/01/2003');
var sheepEnd7 = new Date('01/21/2004');

var sheepStart8 = new Date('02/19/2015');
var sheepEnd8 = new Date('02/07/2016');

var sheepStart9 = new Date('02/06/2027');
var sheepEnd9 = new Date('01/25/2028');

var sheepStart10 = new Date('01/24/2039');
var sheepEnd10 = new Date('02/11/2040');

/*************** Year of the Monkey ******************/	

//var monkey = "Monkey: Most compatible with Dragon, Snake and Rat. Least compatible with Tiger.";

var monkeyStart = new Date('02/06/1932');
var monkeyEnd = new Date('01/25/1933');

var monkeyStart2 = new Date('01/24/1944');
var monkeyEnd2 = new Date('02/12/1945');

var monkeyStart3 = new Date('02/12/1956');
var monkeyEnd3 = new Date('01/30/1957');

var monkeyStart4 = new Date('01/30/1968');
var monkeyEnd4 = new Date('02/16/1969');

var monkeyStart5 = new Date('02/16/1980');
var monkeyEnd5 = new Date('02/04/1981');

var monkeyStart6 = new Date('02/04/1992');
var monkeyEnd6 = new Date('01/22/1993');

var monkeyStart7 = new Date('01/22/2004');
var monkeyEnd7 = new Date('02/08/2005');

var monkeyStart8 = new Date('02/08/2016');
var monkeyEnd8 = new Date('01/27/2017');

var monkeyStart9 = new Date('01/26/2028');
var monkeyEnd9 = new Date('02/12/2029');

var monkeyStart10 = new Date('02/12/2040');
var monkeyEnd10 = new Date('01/31/2041');

/*************** Year of the Rooster ******************/	

//var rooster = "Rooster: Most compatible with Ox, Snake, Pig and Dragon. Least compatible with Rabbit and Rat.";

var roosterStart = new Date('01/26/1933');
var roosterEnd = new Date('02/13/1934');

var roosterStart2 = new Date('02/13/1945');
var roosterEnd2 = new Date('02/01/1946');

var roosterStart3 = new Date('01/31/1957');
var roosterEnd3 = new Date('02/17/1958');

var roosterStart4 = new Date('02/17/1969');
var roosterEnd4 = new Date('02/05/1970');

var roosterStart5 = new Date('02/05/1981');
var roosterEnd5 = new Date('01/24/1982');

var roosterStart6 = new Date('01/23/1993');
var roosterEnd6 = new Date('02/09/1994');

var roosterStart7 = new Date('02/09/2005');
var roosterEnd7 = new Date('01/28/2006');

var roosterStart8 = new Date('01/28/2017');
var roosterEnd8 = new Date('02/15/2018');

var roosterStart9 = new Date('02/13/2029');
var roosterEnd9 = new Date('02/02/2030');

var roosterStart10 = new Date('02/01/2041');
var roosterEnd10 = new Date('01/21/2042');

/*************** Year of the Dog ******************/	

//var dog = "Dog: Most compatible with Horse, Pig, Tiger and Rabbit. Least compatible with Dragon and Ox.";

var dogStart = new Date('02/14/1934');
var dogEnd = new Date('02/03/1935');

var dogStart2 = new Date('02/02/1946');
var dogEnd2 = new Date('01/21/1947');

var dogStart3 = new Date('02/18/1958');
var dogEnd3 = new Date('02/07/1959');

var dogStart4 = new Date('02/06/1970');
var dogEnd4 = new Date('01/26/1971');

var dogStart5 = new Date('01/25/1982');
var dogEnd5 = new Date('02/12/1983');

var dogStart6 = new Date('02/10/1994');
var dogEnd6 = new Date('01/30/1995');

var dogStart7 = new Date('01/29/2006');
var dogEnd7 = new Date('02/17/2007');

var dogStart8 = new Date('02/16/2018');
var dogEnd8 = new Date('02/04/2019');

var dogStart9 = new Date('02/03/2030');
var dogEnd9 = new Date('01/22/2031');

var dogStart10 = new Date('01/22/2042');
var dogEnd10 = new Date('02/09/2043');

/*************** Year of the Pig ******************/	

//var pig = "Pig: Most compatible with Rabbit, Rooster, Ox, Dog and Sheep. Least compatible with Snake.";

var pigStart = new Date('02/04/1935');
var pigEnd = new Date('01/23/1936');

var pigStart2 = new Date('01/22/1947');
var pigEnd2 = new Date('02/09/1948');

var pigStart3 = new Date('02/08/1959');
var pigEnd3 = new Date('01/27/1960');

var pigStart4 = new Date('01/27/1971');
var pigEnd4 = new Date('02/14/1972');

var pigStart5 = new Date('02/13/1983');
var pigEnd5 = new Date('02/01/1984');

var pigStart6 = new Date('01/31/1995');
var pigEnd6 = new Date('02/18/1996');

var pigStart7 = new Date('02/18/2007');
var pigEnd7 = new Date('02/06/2008');

var pigStart8 = new Date('02/05/2019');
var pigEnd8 = new Date('01/24/2020');

var pigStart9 = new Date('01/23/2031');
var pigEnd9 = new Date('02/10/2032');

var pigStart10 = new Date('02/10/2043');
var pigEnd10 = new Date('01/29/2044');

//Rat Display

	if (bday >= ratStart && bday <= ratEnd)
		{
		signtwo = "rat";
		}	

	if (bday >= ratStart2 && bday <= ratEnd2)
			{
			signtwo = "rat";
			}

	if (bday >= ratStart3 && bday <= ratEnd3)
			{
			signtwo = "rat";
			}

	if (bday >= ratStart4 && bday <= ratEnd4)
			{
			signtwo = "rat";
			}

	if (bday >= ratStart5 && bday <= ratEnd5)
			{
			signtwo = "rat";
			}

	if (bday >= ratStart6 && bday <= ratEnd6)
			{
			signtwo = "rat";
			}

	if (bday >= ratStart7 && bday <= ratEnd7)
			{
			signtwo = "rat";
			}

	if (bday >= ratStart8 && bday <= ratEnd8)
			{
			signtwo = "rat";
			}

	if (bday >= ratStart9 && bday <= ratEnd9)
			{
			signtwo = "rat";
			}

	if (bday >= ratStart10 && bday <= ratEnd10)
			{
			signtwo = "rat";
			}

// Ox display

	if (bday >= oxStart && bday <= oxEnd)
		{
		signtwo = "ox";
		}

	if (bday >= oxStart2 && bday <= oxEnd2)
		{
		signtwo = "ox";
		}

	if (bday >= oxStart3 && bday <= oxEnd3)
		{
		signtwo = "ox";
		}

	if (bday >= oxStart4 && bday <= oxEnd4)
		{
		signtwo = "ox";
		}

	if (bday >= oxStart5 && bday <= oxEnd5)
		{
		signtwo = "ox";
		}

	if (bday >= oxStart6 && bday <= oxEnd6)
		{
		signtwo = "ox";
		}

	if (bday >= oxStart7 && bday <= oxEnd7)
		{
		signtwo = "ox";
		}

	if (bday >= oxStart8 && bday <= oxEnd8)
		{
		signtwo = "ox";
		}

	if (bday >= oxStart9 && bday <= oxEnd9)
		{
		signtwo = "ox";
		}

	if (bday >= oxStart10 && bday <= oxEnd10)
		{
		signtwo = "ox";
		}

// Tiger display

	if (bday >= tigerStart && bday <= tigerEnd)
		{
		signtwo = "tiger";
		}

	if (bday >= tigerStart2 && bday <= tigerEnd2)
		{
		signtwo = "tiger";
		}

	if (bday >= tigerStart3 && bday <= tigerEnd3)
		{
		signtwo = "tiger";
		}

	if (bday >= tigerStart4 && bday <= tigerEnd4)
		{
		signtwo = "tiger";
		}

	if (bday >= tigerStart5 && bday <= tigerEnd5)
		{
		signtwo = "tiger";
		}

	if (bday >= tigerStart6 && bday <= tigerEnd6)
		{
		signtwo = "tiger";
		}

	if (bday >= tigerStart7 && bday <= tigerEnd7)
		{
		signtwo = "tiger";
		}

	if (bday >= tigerStart8 && bday <= tigerEnd8)
		{
		signtwo = "tiger";
		}

	if (bday >= tigerStart9 && bday <= tigerEnd9)
		{
		signtwo = "tiger";
		}

	if (bday >= tigerStart10 && bday <= tigerEnd10)
		{
		signtwo = "tiger";
		}

// Rabbit display

	if (bday >= rabbitStart && bday <= rabbitEnd)
		{
		signtwo = "rabbit";
		}

	if (bday >= rabbitStart2 && bday <= rabbitEnd2)
		{
		signtwo = "rabbit";
		}

	if (bday >= rabbitStart3 && bday <= rabbitEnd3)
		{
		signtwo = "rabbit";
		}

	if (bday >= rabbitStart4 && bday <= rabbitEnd4)
		{
		signtwo = "rabbit";
		}

	if (bday >= rabbitStart5 && bday <= rabbitEnd5)
		{
		signtwo = "rabbit";
		}

	if (bday >= rabbitStart6 && bday <= rabbitEnd6)
		{
		signtwo = "rabbit";
		}

	if (bday >= rabbitStart7 && bday <= rabbitEnd7)
		{
		signtwo = "rabbit";
		}

	if (bday >= rabbitStart8 && bday <= rabbitEnd8)
		{
		signtwo = "rabbit";
		}

	if (bday >= rabbitStart9 && bday <= rabbitEnd9)
		{
		signtwo = "rabbit";
		}

	if (bday >= rabbitStart10 && bday <= rabbitEnd10)
		{
		signtwo = "rabbit";
		}

// Dragon display

	if (bday >= dragonStart && bday <= dragonEnd)
		{
		signtwo = "dragon";
		}

	if (bday >= dragonStart2 && bday <= dragonEnd2)
		{
		signtwo = "dragon";

		}

	if (bday >= dragonStart3 && bday <= dragonEnd3)
		{
		signtwo = "dragon";

		}

	if (bday >= dragonStart4 && bday <= dragonEnd4)
		{
		signtwo = "dragon";

		}

	if (bday >= dragonStart5 && bday <= dragonEnd5)
		{
		signtwo = "dragon";

		}

	if (bday >= dragonStart6 && bday <= dragonEnd6)
		{
		signtwo = "dragon";

		}

	if (bday >= dragonStart7 && bday <= dragonEnd7)
		{
		signtwo = "dragon";

		}

	if (bday >= dragonStart8 && bday <= dragonEnd8)
		{
		signtwo = "dragon";

		}

	if (bday >= dragonStart9 && bday <= dragonEnd9)
		{
		signtwo = "dragon";

		}

	if (bday >= dragonStart10 && bday <= dragonEnd10)
		{
		signtwo = "dragon";
		}

// Snake display

	if (bday >= snakeStart && bday <= snakeEnd)
		{
		signtwo = "snake";
		}

	if (bday >= snakeStart2 && bday <= snakeEnd2)
		{
		signtwo = "snake";
		}

	if (bday >= snakeStart3 && bday <= snakeEnd3)
		{
		signtwo = "snake";
		}

	if (bday >= snakeStart4 && bday <= snakeEnd4)
		{
		signtwo = "snake";
		}

	if (bday >= snakeStart5 && bday <= snakeEnd5)
		{
		signtwo = "snake";
		}

	if (bday >= snakeStart6 && bday <= snakeEnd6)
		{
		signtwo = "snake";
		}

	if (bday >= snakeStart7 && bday <= snakeEnd7)
		{
		signtwo = "snake";
		}

	if (bday >= snakeStart8 && bday <= snakeEnd8)
		{
		signtwo = "snake";
		}

	if (bday >= snakeStart9 && bday <= snakeEnd9)
		{
		signtwo = "snake";
		}

	if (bday >= snakeStart10 && bday <= snakeEnd10)
		{
		signtwo = "snake";
		}

// Horse display

	if (bday >= horseStart && bday <= horseEnd)
		{
		signtwo = "horse";
		}

	if (bday >= horseStart2 && bday <= horseEnd2)
		{
		signtwo = "horse";
		}

	if (bday >= horseStart3 && bday <= horseEnd3)
		{
		signtwo = "horse";
		}

	if (bday >= horseStart4 && bday <= horseEnd4)
		{
		signtwo = "horse";
		}

	if (bday >= horseStart5 && bday <= horseEnd5)
		{
		signtwo = "horse";
		}

	if (bday >= horseStart6 && bday <= horseEnd6)
		{
		signtwo = "horse";
		}

	if (bday >= horseStart7 && bday <= horseEnd7)
		{
		signtwo = "horse";
		}

	if (bday >= horseStart8 && bday <= horseEnd8)
		{
		signtwo = "horse";
		}

	if (bday >= horseStart9 && bday <= horseEnd9)
		{
		signtwo = "horse";
		}

	if (bday >= horseStart10 && bday <= horseEnd10)
		{
		signtwo = "horse";
		}

// Sheep display

	if (bday >= sheepStart && bday <= sheepEnd)
		{
		signtwo = "sheep";
		}

	if (bday >= sheepStart2 && bday <= sheepEnd2)
		{
		signtwo = "sheep";
		}

	if (bday >= sheepStart3 && bday <= sheepEnd3)
		{
		signtwo = "sheep";
		}

	if (bday >= sheepStart4 && bday <= sheepEnd4)
		{
		signtwo = "sheep";
		}

	if (bday >= sheepStart5 && bday <= sheepEnd5)
		{
		signtwo = "sheep";
		}

	if (bday >= sheepStart6 && bday <= sheepEnd6)
		{
		signtwo = "sheep";
		}

	if (bday >= sheepStart7 && bday <= sheepEnd7)
		{
		signtwo = "sheep";
		}

	if (bday >= sheepStart8 && bday <= sheepEnd8)
		{
		signtwo = "sheep";
		}

	if (bday >= sheepStart9 && bday <= sheepEnd9)
		{
		signtwo = "sheep";
		}

	if (bday >= sheepStart10 && bday <= sheepEnd10)
		{
		signtwo = "sheep";
		}

// Monkey display

	if (bday >= monkeyStart && bday <= monkeyEnd)
		{
		signtwo = "monkey";
		}

	if (bday >= monkeyStart2 && bday <= monkeyEnd2)
		{
		signtwo = "monkey";
		}

	if (bday >= monkeyStart3 && bday <= monkeyEnd3)
		{
		signtwo = "monkey";
		}

	if (bday >= monkeyStart4 && bday <= monkeyEnd4)
		{
		signtwo = "monkey";
		}

	if (bday >= monkeyStart5 && bday <= monkeyEnd5)
		{
		signtwo = "monkey";
		}

	if (bday >= monkeyStart6 && bday <= monkeyEnd6)
		{
		signtwo = "monkey";
		}

	if (bday >= monkeyStart7 && bday <= monkeyEnd7)
		{
		signtwo = "monkey";
		}

	if (bday >= monkeyStart8 && bday <= monkeyEnd8)
		{
		signtwo = "monkey";
		}

	if (bday >= monkeyStart9 && bday <= monkeyEnd9)
		{
		signtwo = "monkey";
		}

	if (bday >= monkeyStart10 && bday <= monkeyEnd10)
		{
		signtwo = "monkey";
		}

// Rooster display

	if (bday >= roosterStart && bday <= roosterEnd)
		{
		signtwo = "rooster";
		}

	if (bday >= roosterStart2 && bday <= roosterEnd2)
		{
		signtwo = "rooster";
		}

	if (bday >= roosterStart3 && bday <= roosterEnd3)
		{
		signtwo = "rooster";
		}

	if (bday >= roosterStart4 && bday <= roosterEnd4)
		{
		signtwo = "rooster";
		}

	if (bday >= roosterStart5 && bday <= roosterEnd5)
		{
		signtwo = "rooster";
		}

	if (bday >= roosterStart6 && bday <= roosterEnd6)
		{
		signtwo = "rooster";
		}

	if (bday >= roosterStart7 && bday <= roosterEnd7)
		{
		signtwo = "rooster";
		}

	if (bday >= roosterStart8 && bday <= roosterEnd8)
		{
		signtwo = "rooster";
		}

	if (bday >= roosterStart9 && bday <= roosterEnd9)
		{
		signtwo = "rooster";
		}

	if (bday >= roosterStart10 && bday <= roosterEnd10)
		{
		signtwo = "rooster";
		}

// Dog display

	if (bday >= dogStart && bday <= dogEnd)
	{
		signtwo = "dog";
	}

	if (bday >= dogStart2 && bday <= dogEnd2)
	{
		signtwo = "dog";
	}

	if (bday >= dogStart3 && bday <= dogEnd3)
	{
		signtwo = "dog";
	}

	if (bday >= dogStart4 && bday <= dogEnd4)
	{
		signtwo = "dog";
	}

	if (bday >= dogStart5 && bday <= dogEnd5)
	{
		signtwo = "dog";
	}

	if (bday >= dogStart6 && bday <= dogEnd6)
	{
		signtwo = "dog";
	}

	if (bday >= dogStart7 && bday <= dogEnd7)
	{
		signtwo = "dog";
	}

	if (bday >= dogStart8 && bday <= dogEnd8)
	{
		signtwo = "dog";
	}

	if (bday >= dogStart9 && bday <= dogEnd9)
	{
		signtwo = "dog";
	}

	if (bday >= dogStart10 && bday <= dogEnd10)
	{
		signtwo = "dog";
	}

// Pig display

	if (bday >= pigStart && bday <= pigEnd)
		{
		signtwo = "pig";
		}

	if (bday >= pigStart2 && bday <= pigEnd2)
		{
		signtwo = "pig";
		}

	if (bday >= pigStart3 && bday <= pigEnd3)
		{
		signtwo = "pig";
		}

	if (bday >= pigStart4 && bday <= pigEnd4)
		{
		signtwo = "pig";
		}

	if (bday >= pigStart5 && bday <= pigEnd5)
		{
		signtwo = "pig";
		}

	if (bday >= pigStart6 && bday <= pigEnd6)
		{
		signtwo = "pig";
		}

	if (bday >= pigStart7 && bday <= pigEnd7)
		{
		signtwo = "pig";
		}

	if (bday >= pigStart8 && bday <= pigEnd8)
		{
		signtwo = "pig";
		}

	if (bday >= pigStart9 && bday <= pigEnd9)
		{
		signtwo = "pig";
		}

	if (bday >= pigStart10 && bday <= pigEnd10)
		{
		signtwo = "pig";
		}



/********** Ajax Call Back **********/

	$.ajax({
		url: 'http://www.desireebryant.com/projects/horoscope/predictionstwo.php',
		cache: false,
		type: "GET",
		data: {signtwo : signtwo},
		success: function(datatwo)
			{
			$('#showdate').html(datatwo);
			}



	})

//alert(signtwo);

/********** End of function **********/



}