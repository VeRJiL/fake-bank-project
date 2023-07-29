<?php

namespace Helpers;

use Illuminate\Support\Collection;

class Region
{
    private array $provinces = [
        [
            "id" => 1,
            "slug" => "azar-shargh",
            "country_id" => "1",
            "name" => "آذربایجان  شرقی",
            "latitude" => 37.9035733,
            "longitude" => 46.2682109
        ],
        [
            "id" => 2,
            "slug" => "azar-gharb",
            "country_id" => 1,
            "name" => "آذربایجان  غربی",
            "latitude" => 37.4550062,
            "longitude" => 45
        ],
        [
            "id" => 3,
            "slug" => "ardabil",
            "country_id" => "1",
            "name" => "اردبیل",
            "latitude" => 38.4853276,
            "longitude" => 47.8911209
        ],
        [
            "id" => 4,
            "country_id" => "1",
            "slug" => "esfehan",
            "name" => "اصفهان",
            "latitude" => 32.6546275,
            "longitude" => 51.6679826
        ],
        [
            "id" => 5,
            "slug" => "alborz",
            "country_id" => "1",
            "name" => "البرز",
            "latitude" => 35.9960467,
            "longitude" => 50.9289246
        ],
        [
            "id" => 6,
            "slug" => "iilam",
            "country_id" => "1",
            "name" => "ایلام",
            "latitude" => 33.2957618,
            "longitude" => 46.670534
        ],
        [
            "id" => 7,
            "slug" => "boushehr",
            "country_id" => "1",
            "name" => "بوشهر",
            "latitude" => 28.9233837,
            "longitude" => 50.820314
        ],
        [
            "id" => 8,
            "slug" => "tehraan",
            "country_id" => "1",
            "name" => "تهران",
            "latitude" => 35.696111,
            "longitude" => 51.423056
        ],
        [
            "id" => 9,
            "slug" => "4-mahal",
            "country_id" => "1",
            "name" => "چهارمحال  و  بختیاری",
            "latitude" => 31.9614348,
            "longitude" => 50.8456323
        ],
        [
            "id" => 10,
            "slug" => "jonubi-khorasan",
            "country_id" => "1",
            "name" => "خراسان  جنوبی",
            "latitude" => 32.5175643,
            "longitude" => 59.1041758
        ],
        [
            "id" => 11,
            "slug" => "razavi-khorasan",
            "country_id" => "1",
            "name" => "خراسان  رضوی",
            "latitude" => 35.1020253,
            "longitude" => 59.1041758
        ],
        [
            "id" => 12,
            "slug" => "shomali-khorasan",
            "country_id" => "1",
            "name" => "خراسان  شمالی",
            "latitude" => 37.4710353,
            "longitude" => 57.1013188
        ],
        [
            "id" => 13,
            "slug" => "khuzestan",
            "country_id" => "1",
            "name" => "خوزستان",
            "latitude" => 31.4360149,
            "longitude" => 49.041312
        ],
        [
            "id" => 14,
            "slug" => "zanjan",
            "country_id" => "1",
            "name" => "زنجان",
            "latitude" => 36.5018185,
            "longitude" => 48.3988186
        ],
        [
            "id" => 15,
            "slug" => "semnan",
            "country_id" => "1",
            "name" => "سمنان",
            "latitude" => 35.2255585,
            "longitude" => 54.4342138
        ],
        [
            "id" => 16,
            "slug" => "sistan",
            "country_id" => "1",
            "name" => "سیستان  و  بلوچستان",
            "latitude" => 27.5299906,
            "longitude" => 60.5820676
        ],
        [
            "id" => 17,
            "slug" => "fars",
            "country_id" => "1",
            "name" => "فارس",
            "latitude" => 29.1043813,
            "longitude" => 53.045893
        ],
        [
            "id" => 18,
            "slug" => "ghazvin",
            "country_id" => "1",
            "name" => "قزوین",
            "latitude" => 36.0881317,
            "longitude" => 49.8547266
        ],
        [
            "id" => 19,
            "slug" => "qom",
            "country_id" => "1",
            "name" => "قم",
            "latitude" => 34.6399443,
            "longitude" => 50.8759419
        ],
        [
            "id" => 20,
            "slug" => "kordestan",
            "country_id" => "1",
            "name" => "کردستان",
            "latitude" => 35.9553579,
            "longitude" => 47.1362125
        ],
        [
            "id" => 21,
            "slug" => "kerman",
            "country_id" => "1",
            "name" => "کرمان",
            "latitude" => 30.2839379,
            "longitude" => 57.0833628
        ],
        [
            "id" => 22,
            "slug" => "kermanshah",
            "country_id" => "1",
            "name" => "کرمانشاه",
            "latitude" => 34.314167,
            "longitude" => 47.065
        ],
        [
            "id" => 23,
            "slug" => "kohkiloye",
            "country_id" => "1",
            "name" => "کهگیلویه  و  بویراحمد",
            "latitude" => 30.6509479,
            "longitude" => 51.60525
        ],
        [
            "id" => 24,
            "slug" => "golestan",
            "country_id" => "1",
            "name" => "گلستان",
            "latitude" => 37.2898123,
            "longitude" => 55.1375834
        ],
        [
            "id" => 25,
            "slug" => "gilan",
            "country_id" => "1",
            "name" => "گیلان",
            "latitude" => 37.1171617,
            "longitude" => 49.5279996
        ],
        [
            "id" => 26,
            "slug" => "lorestan",
            "country_id" => "1",
            "name" => "لرستان",
            "latitude" => 33.5818394,
            "longitude" => 48.3988186
        ],
        [
            "id" => 27,
            "slug" => "mazandaran",
            "country_id" => "1",
            "name" => "مازندران",
            "latitude" => 36.2262393,
            "longitude" => 52.5318604
        ],
        [
            "id" => 28,
            "slug" => "markazi",
            "country_id" => "1",
            "name" => "مركزی",
            "latitude" => 33.5093294,
            "longitude" => -92.396119
        ],
        [
            "id" => 29,
            "slug" => "hormozgan",
            "country_id" => "1",
            "name" => "هرمزگان",
            "latitude" => 27.138723,
            "longitude" => 55.1375834
        ],
        [
            "id" => 30,
            "slug" => "hamedan",
            "country_id" => "1",
            "name" => "همدان",
            "latitude" => 34.7607999,
            "longitude" => 48.3988186
        ],
        [
            "id" => 31,
            "slug" => "yazd",
            "country_id" => "1",
            "name" => "یزد",
            "latitude" => 32.1006387,
            "longitude" => 54.4342138
        ]
    ];
    private array $cities = [
        [
            "id" => 2,
            "slug" => "tehran",
            "name" => "تهران",
            "latitude" => 35.696111,
            "longitude" => 51.423056,
            "province_id" => 8
        ],
        [
            "id" => 3,
            "slug" => "karaj",
            "name" => "کرج",
            "latitude" => 35.832677,
            "longitude" => 50.927498,
            "province_id" => 5
        ],
        [
            "id" => 4,
            "slug" => "mashhad",
            "name" => "مشهد",
            "latitude" => 36.301355,
            "longitude" => 59.604209,
            "province_id" => 11
        ],
        [
            "id" => 5,
            "slug" => "isfahan",
            "name" => "اصفهان",
            "latitude" => 32.633333,
            "longitude" => 51.65,
            "province_id" => 4
        ],
        [
            "id" => 6,
            "slug" => "tabriz",
            "name" => "تبریز",
            "latitude" => 38.066667,
            "longitude" => 46.3,
            "province_id" => 1
        ],
        [
            "id" => 7,
            "slug" => "shiraz",
            "name" => "شیراز",
            "latitude" => 29.616667,
            "longitude" => 52.533333,
            "province_id" => 17
        ],
        [
            "id" => 8,
            "slug" => "ahvaz",
            "name" => "اهواز",
            "latitude" => 31.328978,
            "longitude" => 48.685473,
            "province_id" => 13
        ],
        [
            "id" => 9,
            "slug" => "qom",
            "name" => "قم",
            "latitude" => 34.65,
            "longitude" => 50.88,
            "province_id" => 19
        ],
        [
            "id" => 10,
            "slug" => "kermanshah",
            "name" => "کرمانشاه",
            "latitude" => 34.334081,
            "longitude" => 47.076058,
            "province_id" => 22
        ],
        [
            "id" => 11,
            "slug" => "urmia",
            "name" => "ارومیه",
            "latitude" => 37.548312,
            "longitude" => 45.064736,
            "province_id" => 2
        ],
        [
            "id" => 12,
            "slug" => "zahedan",
            "name" => "زاهدان",
            "latitude" => 29.492057,
            "longitude" => 60.847335,
            "province_id" => 16
        ],
        [
            "id" => 13,
            "slug" => "rasht",
            "name" => "رشت",
            "latitude" => 37.280609,
            "longitude" => 49.590197,
            "province_id" => 25
        ],
        [
            "id" => 14,
            "slug" => "kerman",
            "name" => "کرمان",
            "latitude" => 30.281899,
            "longitude" => 57.067394,
            "province_id" => 21
        ],
        [
            "id" => 15,
            "slug" => "hamedan",
            "name" => "همدان",
            "latitude" => 34.800554,
            "longitude" => 48.516941,
            "province_id" => 30
        ],
        [
            "id" => 16,
            "slug" => "arak",
            "name" => "اراک",
            "latitude" => 34.092473,
            "longitude" => 49.696541,
            "province_id" => 28
        ],
        [
            "id" => 17,
            "slug" => "yazd",
            "name" => "یزد",
            "latitude" => 31.890968,
            "longitude" => 54.356117,
            "province_id" => 31
        ],
        [
            "id" => 18,
            "slug" => "ardabil",
            "name" => "اردبیل",
            "latitude" => 38.240877,
            "longitude" => 48.296728,
            "province_id" => 3
        ],
        [
            "id" => 19,
            "slug" => "bandar-abbas",
            "name" => "بندر  عباس",
            "latitude" => 27.195098,
            "longitude" => 56.308336,
            "province_id" => 29
        ],
        [
            "id" => 20,
            "slug" => "qazvin",
            "name" => "قزوین",
            "latitude" => 36.267321,
            "longitude" => 50.003886,
            "province_id" => 18
        ],
        [
            "id" => 21,
            "slug" => "zanjan",
            "name" => "زنجان",
            "latitude" => 36.679433,
            "longitude" => 48.496056,
            "province_id" => 14
        ],
        [
            "id" => 22,
            "slug" => "gorgan",
            "name" => "گرگان",
            "latitude" => 36.835943,
            "longitude" => 54.441376,
            "province_id" => 24
        ],
        [
            "id" => 23,
            "slug" => "sari",
            "name" => "ساری",
            "latitude" => 36.562876,
            "longitude" => 53.060875,
            "province_id" => 27
        ],
        [
            "id" => 24,
            "slug" => "dezful",
            "name" => "دزفول",
            "latitude" => 32.38547,
            "longitude" => 48.400612,
            "province_id" => 13
        ],
        [
            "id" => 25,
            "slug" => "abadan",
            "name" => "آبادان",
            "latitude" => 30.347398,
            "longitude" => 48.297272,
            "province_id" => 13
        ],
        [
            "id" => 26,
            "slug" => "bushehr",
            "name" => "بوشهر",
            "latitude" => 28.922232,
            "longitude" => 50.833912,
            "province_id" => 7
        ],
        [
            "id" => 27,
            "slug" => "borujerd",
            "name" => "بروجرد",
            "latitude" => 33.893502,
            "longitude" => 48.760706,
            "province_id" => 26
        ],
        [
            "id" => 28,
            "slug" => "khorramabad",
            "name" => "خرم  آباد",
            "latitude" => 33.473836,
            "longitude" => 48.345921,
            "province_id" => 26
        ],
        [
            "id" => 29,
            "slug" => "sanandaj",
            "name" => "سنندج",
            "latitude" => 35.298315,
            "longitude" => 47.006275,
            "province_id" => 20
        ],
        [
            "id" => 30,
            "slug" => "eslamshahr",
            "name" => "اسلام  شهر",
            "latitude" => 35.541166,
            "longitude" => 51.236012,
            "province_id" => 8
        ],
        [
            "id" => 31,
            "slug" => "kashan",
            "name" => "کاشان",
            "latitude" => 33.982656,
            "longitude" => 51.424547,
            "province_id" => 4
        ],
        [
            "id" => 32,
            "slug" => "najafabad",
            "name" => "نجف  آباد",
            "latitude" => 32.63128,
            "longitude" => 51.358921,
            "province_id" => 4
        ],
        [
            "id" => 33,
            "slug" => "ilam",
            "name" => "ایلام",
            "latitude" => 33.631058,
            "longitude" => 46.408971,
            "province_id" => 6
        ],
        [
            "id" => 34,
            "slug" => "kish",
            "name" => "کیش",
            "latitude" => 26.537859,
            "longitude" => 53.975804,
            "province_id" => 29
        ],
        [
            "id" => 35,
            "slug" => "birjand",
            "name" => "بیرجند",
            "latitude" => 32.882038,
            "longitude" => 59.21079,
            "province_id" => 10
        ],
        [
            "id" => 36,
            "slug" => "semnan",
            "name" => "سمنان",
            "latitude" => 35.574962,
            "longitude" => 53.395761,
            "province_id" => 15
        ],
        [
            "id" => 37,
            "slug" => "shahrekord",
            "name" => "شهرکرد",
            "latitude" => 32.328337,
            "longitude" => 50.863214,
            "province_id" => 9
        ],
        [
            "id" => 38,
            "slug" => "mahshahr",
            "name" => "بندر  ماهشهر",
            "latitude" => 30.560192,
            "longitude" => 49.19761,
            "province_id" => 13
        ],
        [
            "id" => 39,
            "slug" => "yasuj",
            "name" => "یاسوج",
            "latitude" => 30.675715,
            "longitude" => 51.586201,
            "province_id" => 23
        ],
        [
            "id" => 40,
            "slug" => "bojnurd",
            "name" => "بجنورد",
            "latitude" => 37.4784,
            "longitude" => 57.322489,
            "province_id" => 12
        ],
        [
            "id" => 41,
            "slug" => "behbahan",
            "name" => "بهبهان",
            "latitude" => 30.596474,
            "longitude" => 50.241667,
            "province_id" => 13
        ],
        [
            "id" => 42,
            "slug" => "sabzevar",
            "name" => "سبزوار",
            "latitude" => 36.213982,
            "longitude" => 57.671178,
            "province_id" => 11
        ],
        [
            "id" => 43,
            "slug" => "masjed-e-soleyman",
            "name" => "مسجد  سلیمان",
            "latitude" => 31.958279,
            "longitude" => 49.29491,
            "province_id" => 13
        ],
        [
            "id" => 44,
            "slug" => "neyshabur",
            "name" => "نیشابور",
            "latitude" => 36.221084,
            "longitude" => 58.783621,
            "province_id" => 11
        ],
        [
            "id" => 45,
            "slug" => "shushtar",
            "name" => "شوشتر",
            "latitude" => 32.04678,
            "longitude" => 48.842367,
            "province_id" => 13
        ],
        [
            "id" => 46,
            "slug" => "qeshm",
            "name" => "قشم",
            "latitude" => 26.820786,
            "longitude" => 55.891944,
            "province_id" => 29
        ],
        [
            "id" => 47,
            "slug" => "baneh",
            "name" => "بانه",
            "latitude" => 35.996875,
            "longitude" => 45.885408,
            "province_id" => 20
        ],
        [
            "id" => 48,
            "slug" => "amol",
            "name" => "آمل",
            "latitude" => 36.465579,
            "longitude" => 52.354229,
            "province_id" => 27
        ],
        [
            "id" => 49,
            "slug" => "babol",
            "name" => "بابل",
            "latitude" => 36.538657,
            "longitude" => 52.67683,
            "province_id" => 27
        ],
        [
            "id" => 50,
            "slug" => "qaem-shahr",
            "name" => "قائم شهر",
            "latitude" => 36.464306,
            "longitude" => 52.86134,
            "province_id" => 27
        ],
        [
            "id" => 51,
            "slug" => "saveh",
            "name" => "ساوه",
            "latitude" => 35.023942,
            "longitude" => 50.358195,
            "province_id" => 28
        ],
        [
            "id" => 52,
            "slug" => "zabol",
            "name" => "زابل",
            "latitude" => 31.03484,
            "longitude" => 61.494659,
            "province_id" => 16
        ],
        [
            "id" => 53,
            "slug" => "shahrud",
            "name" => "شاهرود",
            "latitude" => 36.4167,
            "longitude" => 55.0167,
            "province_id" => 15
        ],
        [
            "id" => 54,
            "slug" => "bandar-anzali",
            "name" => "بندر  انزلی",
            "latitude" => 37.4667,
            "longitude" => 49.4667,
            "province_id" => 25
        ],
        [
            "id" => 55,
            "slug" => "nowshahr",
            "name" => "نوشهر",
            "latitude" => 36.6502264,
            "longitude" => 51.4343168,
            "province_id" => 27
        ],
        [
            "id" => 56,
            "slug" => "babolsar",
            "name" => "بابلسر",
            "latitude" => 36.7025,
            "longitude" => 52.6575,
            "province_id" => 27
        ],
        [
            "id" => 57,
            "slug" => "gonbad-e-kavus",
            "name" => "گنبد  کاووس",
            "latitude" => 37.24066855,
            "longitude" => 37.24066855,
            "province_id" => 24
        ],
        [
            "id" => 58,
            "slug" => "nur",
            "name" => "نور",
            "latitude" => 36.575037,
            "longitude" => 52.026838,
            "province_id" => 27
        ],
        [
            "id" => 59,
            "slug" => "ramsar",
            "name" => "رامسر",
            "latitude" => 36.926827,
            "longitude" => 50.643066,
            "province_id" => 27
        ],
        [
            "id" => 60,
            "slug" => "lahijan",
            "name" => "لاهیجان",
            "latitude" => 37.203792,
            "longitude" => 50.008539,
            "province_id" => 25
        ],
        [
            "id" => 61,
            "slug" => "chabahar",
            "name" => "چابهار",
            "latitude" => 25.304326,
            "longitude" => 60.645933,
            "province_id" => 16
        ],
        [
            "id" => 62,
            "slug" => "shahr-e-rey",
            "name" => "شهرری",
            "latitude" => 35.576769950533,
            "longitude" => 51.459757031905,
            "province_id" => 8
        ],
        [
            "id" => 63,
            "slug" => "firuzkuh",
            "name" => "فیروزکوه",
            "latitude" => 35.760580243828,
            "longitude" => 52.770384678672,
            "province_id" => 8
        ],
        [
            "id" => 64,
            "slug" => "pishva",
            "name" => "پیشوا",
            "latitude" => 35.307657011562,
            "longitude" => 51.724490590614,
            "province_id" => 8
        ],
        [
            "id" => 65,
            "slug" => "varamin",
            "name" => "ورامین",
            "latitude" => 35.322537184116,
            "longitude" => 51.647554109382,
            "province_id" => 8
        ],
        [
            "id" => 66,
            "slug" => "robat-karim",
            "name" => "رباط کریم",
            "latitude" => 35.475219267414,
            "longitude" => 51.082689931489,
            "province_id" => 8
        ],
        [
            "id" => 67,
            "slug" => "pardis",
            "name" => "پردیس",
            "latitude" => 35.743622512139,
            "longitude" => 51.78251391449,
            "province_id" => 8
        ],
        [
            "id" => 68,
            "slug" => "qarchak",
            "name" => "قرچک",
            "latitude" => 35.437261828267,
            "longitude" => 51.572399024653,
            "province_id" => 8
        ],
        [
            "id" => 69,
            "slug" => "damavand",
            "name" => "دماوند",
            "latitude" => 35.70211001198,
            "longitude" => 52.059672559265,
            "province_id" => 8
        ],
        [
            "id" => 70,
            "slug" => "shahriar",
            "name" => "شهریار",
            "latitude" => 35.672011922559,
            "longitude" => 51.022430305335,
            "province_id" => 8
        ],
        [
            "id" => 71,
            "slug" => "malard",
            "name" => "ملارد",
            "latitude" => 35.658768885274,
            "longitude" => 50.97658336845,
            "province_id" => 8
        ],
        [
            "id" => 72,
            "slug" => "pakdasht",
            "name" => "پاکدشت",
            "latitude" => 35.470346576201,
            "longitude" => 51.687143451494,
            "province_id" => 8
        ],
        [
            "id" => 73,
            "slug" => "lavasan",
            "name" => "لواسان",
            "latitude" => 35.821158530061,
            "longitude" => 51.623799010927,
            "province_id" => 8
        ],
        [
            "id" => 74,
            "slug" => "rudehen",
            "name" => "رودهن",
            "latitude" => 35.732694314734,
            "longitude" => 51.906537488768,
            "province_id" => 8
        ],
        [
            "id" => 75,
            "slug" => "parand",
            "name" => "پرند",
            "latitude" => 35.502824203163,
            "longitude" => 50.913345968602,
            "province_id" => 8
        ],
        [
            "id" => 76,
            "slug" => "andisheh",
            "name" => "اندیشه",
            "latitude" => 35.711350777794,
            "longitude" => 51.021998571908,
            "province_id" => 8
        ],
        [
            "id" => 77,
            "slug" => "salehiyeh",
            "name" => "صالحیه",
            "latitude" => 35.504979953383,
            "longitude" => 51.192330100298,
            "province_id" => 8
        ],
        [
            "id" => 78,
            "slug" => "qods",
            "name" => "قدس",
            "latitude" => 35.715844494372,
            "longitude" => 51.112410478017,
            "province_id" => 8
        ],
        [
            "id" => 79,
            "slug" => "bumehen",
            "name" => "بومهن",
            "latitude" => 35.73442722182,
            "longitude" => 51.867749240013,
            "province_id" => 8
        ],
        [
            "id" => 80,
            "slug" => "ahmadabad",
            "name" => "احمدآباد",
            "latitude" => 35.634347979284,
            "longitude" => 51.21347667811,
            "province_id" => 8
        ]
    ];
    private array $districts = [
        [
            "id" => 1,
            "city_id" => "2",
            "slug" => "tehran-ebrahim-abad",
            "name" => "ابراهیم آباد",
            "latitude" => 35.648578,
            "longitude" => 51.303565,
            "radius" => "800"
        ],
        [
            "id" => 2,
            "city_id" => "2",
            "slug" => "tehran-aboozar",
            "name" => "ابوذر",
            "latitude" => 35.730907,
            "longitude" => 51.329829,
            "radius" => "700"
        ],
        [
            "id" => 3,
            "city_id" => "2",
            "slug" => "tehran-ajoodanieh",
            "name" => "آجودانیه",
            "latitude" => 35.805667,
            "longitude" => 51.482492,
            "radius" => "1200"
        ],
        [
            "id" => 4,
            "city_id" => "2",
            "slug" => "tehran-ehteshamiyeh",
            "name" => "احتشامیه",
            "latitude" => 35.777471,
            "longitude" => 51.457852,
            "radius" => "400"
        ],
        [
            "id" => 5,
            "city_id" => "2",
            "slug" => "tehran-ekhtiyariyeh",
            "name" => "اختیاریه",
            "latitude" => 35.785582,
            "longitude" => 51.465613,
            "radius" => "500"
        ],
        [
            "id" => 6,
            "city_id" => "2",
            "slug" => "tehran-azari",
            "name" => "آذری",
            "latitude" => 35.666432,
            "longitude" => 51.351115,
            "radius" => "500"
        ],
        [
            "id" => 7,
            "city_id" => "2",
            "slug" => "tehran-azarbaijan",
            "name" => "آذربایجان",
            "latitude" => 35.69396,
            "longitude" => 51.381739,
            "radius" => "2000"
        ],
        [
            "id" => 8,
            "city_id" => "2",
            "slug" => "tehran-ararat",
            "name" => "آرارات",
            "latitude" => 35.76739,
            "longitude" => 51.399297,
            "radius" => "350"
        ],
        [
            "id" => 9,
            "city_id" => "2",
            "slug" => "tehran-aramaneh",
            "name" => "ارامنه",
            "latitude" => 35.713277,
            "longitude" => 51.450507,
            "radius" => "600"
        ],
        [
            "id" => 10,
            "city_id" => "2",
            "slug" => "tehran-iranshahr",
            "name" => "ایرانشهر",
            "latitude" => 35.709653,
            "longitude" => 51.421839,
            "radius" => "700"
        ],
        [
            "id" => 11,
            "city_id" => "2",
            "slug" => "tehran-arjantin",
            "name" => "آرژانتین",
            "latitude" => 35.737386,
            "longitude" => 51.415402,
            "radius" => "800"
        ],
        [
            "id" => 12,
            "city_id" => "2",
            "slug" => "tehran-tehran_eram",
            "name" => "ارم",
            "latitude" => 35.729722,
            "longitude" => 51.286398,
            "radius" => "1500"
        ],
        [
            "id" => 13,
            "city_id" => "2",
            "slug" => "tehran-azad-shahr",
            "name" => "آزاد شهر",
            "latitude" => 35.735644,
            "longitude" => 51.190096,
            "radius" => "600"
        ],
        [
            "id" => 14,
            "city_id" => "2",
            "slug" => "tehran-ozgol",
            "name" => "ازگل",
            "latitude" => 35.792448,
            "longitude" => 51.502786,
            "radius" => "700"
        ],
        [
            "id" => 15,
            "city_id" => "2",
            "slug" => "tehran-ostad-moein",
            "name" => "استاد معین",
            "latitude" => 35.692158,
            "longitude" => 51.343647,
            "radius" => "800"
        ],
        [
            "id" => 16,
            "city_id" => "2",
            "slug" => "tehran-estakhr",
            "name" => "استخر",
            "latitude" => 35.75703,
            "longitude" => 51.560971,
            "radius" => "700"
        ],
        [
            "id" => 17,
            "city_id" => "2",
            "slug" => "tehran-esfandyari",
            "name" => "اسفندیاری",
            "latitude" => 35.630024,
            "longitude" => 51.378581,
            "radius" => "700"
        ],
        [
            "id" => 18,
            "city_id" => "2",
            "slug" => "tehran-eskandari",
            "name" => " اسکندری",
            "latitude" => 35.690206,
            "longitude" => 51.382357,
            "radius" => "600"
        ],
        [
            "id" => 19,
            "city_id" => "2",
            "slug" => "tehran-eslam-abad",
            "name" => "اسلام آباد",
            "latitude" => 35.633791,
            "longitude" => 51.323649,
            "radius" => "1200"
        ],
        [
            "id" => 20,
            "city_id" => "2",
            "slug" => "tehran-afsariyeh",
            "name" => "افسریه",
            "latitude" => 35.651996,
            "longitude" => 51.492735,
            "radius" => "2000"
        ],
        [
            "id" => 21,
            "city_id" => "2",
            "slug" => "tehran-aghdasieh",
            "name" => "اقدسیه",
            "latitude" => 35.795399,
            "longitude" => 51.486648,
            "radius" => "600"
        ],
        [
            "id" => 22,
            "city_id" => "2",
            "slug" => "tehran-ekbatan",
            "name" => "اکباتان",
            "latitude" => 35.709096,
            "longitude" => 51.310431,
            "radius" => "1200"
        ],
        [
            "id" => 23,
            "city_id" => "2",
            "slug" => "tehran-almahdi",
            "name" => "المهدی",
            "latitude" => 35.773327,
            "longitude" => 51.330687,
            "radius" => "900"
        ],
        [
            "id" => 24,
            "city_id" => "2",
            "slug" => "tehran-elahiyeh",
            "name" => "الهیه",
            "latitude" => 35.790874,
            "longitude" => 51.427854,
            "radius" => "600"
        ],
        [
            "id" => 25,
            "city_id" => "2",
            "slug" => "tehran-emam-hossein",
            "name" => "امام حسین(ع)",
            "latitude" => 35.701638,
            "longitude" => 51.448447,
            "radius" => "400"
        ],
        [
            "id" => 26,
            "city_id" => "2",
            "slug" => "tehran-emamzade-ghasem",
            "name" => "امامزاده قاسم",
            "latitude" => 35.813394,
            "longitude" => 51.436265,
            "radius" => "500"
        ],
        [
            "id" => 27,
            "city_id" => "2",
            "slug" => "tehran-amaniyeh",
            "name" => "امانیه",
            "latitude" => 35.78466,
            "longitude" => 51.414825,
            "radius" => "300"
        ],
        [
            "id" => 28,
            "city_id" => "2",
            "slug" => "tehran-amir-abad",
            "name" => "امیرآباد",
            "latitude" => 35.712789,
            "longitude" => 51.393258,
            "radius" => "700"
        ],
        [
            "id" => 29,
            "city_id" => "2",
            "slug" => "tehran-amir-bahador",
            "name" => "امیر بهادر",
            "latitude" => 35.669988,
            "longitude" => 51.403729,
            "radius" => "500"
        ],
        [
            "id" => 30,
            "city_id" => "2",
            "slug" => "tehran-amiriyeh",
            "name" => "امیریه",
            "latitude" => 35.678215,
            "longitude" => 51.400553,
            "radius" => "700"
        ],
        [
            "id" => 31,
            "city_id" => "2",
            "slug" => "tehran-andisheh",
            "name" => "اندیشه",
            "latitude" => 35.746443,
            "longitude" => 51.275755,
            "radius" => "900"
        ],
        [
            "id" => 32,
            "city_id" => "2",
            "slug" => "tehran-ahang",
            "name" => "آهنگ",
            "latitude" => 35.663642,
            "longitude" => 51.478917,
            "radius" => "500"
        ],
        [
            "id" => 33,
            "city_id" => "2",
            "slug" => "tehran-oghaf",
            "name" => "اوقاف",
            "latitude" => 35.747418,
            "longitude" => 51.515824,
            "radius" => "600"
        ],
        [
            "id" => 34,
            "city_id" => "2",
            "slug" => "tehran-evin",
            "name" => "اوین",
            "latitude" => 35.793763,
            "longitude" => 51.3949,
            "radius" => "400"
        ],
        [
            "id" => 35,
            "city_id" => "2",
            "slug" => "tehran-bazaar",
            "name" => "بازار",
            "latitude" => 35.672916,
            "longitude" => 51.422965,
            "radius" => "1000"
        ],
        [
            "id" => 36,
            "city_id" => "2",
            "slug" => "tehran-baq-e-azari",
            "name" => "باغ آذری",
            "latitude" => 35.65088,
            "longitude" => 51.428706,
            "radius" => "1000"
        ],
        [
            "id" => 37,
            "city_id" => "2",
            "slug" => "tehran-baq-e-rezavan",
            "name" => "باغ رضوان",
            "latitude" => 35.583129,
            "longitude" => 51.395146,
            "radius" => "1000"
        ],
        [
            "id" => 38,
            "city_id" => "2",
            "slug" => "tehran-baqerkhan",
            "name" => "باقرخان",
            "latitude" => 35.710211,
            "longitude" => 51.381499,
            "radius" => "500"
        ],
        [
            "id" => 39,
            "city_id" => "2",
            "slug" => "tehran-beryanak",
            "name" => "بریانک",
            "latitude" => 35.67208,
            "longitude" => 51.369654,
            "radius" => "1800"
        ],
        [
            "id" => 40,
            "city_id" => "2",
            "slug" => "tehran-bolvar-e-keshavarz",
            "name" => "بلوار کشاورز",
            "latitude" => 35.707841,
            "longitude" => 51.386563,
            "radius" => "500"
        ],
        [
            "id" => 41,
            "city_id" => "2",
            "slug" => "tehran-baharan",
            "name" => "بهاران",
            "latitude" => 35.768522,
            "longitude" => 51.271206,
            "radius" => "900"
        ],
        [
            "id" => 42,
            "city_id" => "2",
            "slug" => "tehran-baharestan",
            "name" => "بهارستان",
            "latitude" => 35.694284,
            "longitude" => 51.429785,
            "radius" => "700"
        ],
        [
            "id" => 43,
            "city_id" => "2",
            "slug" => "tehran-behjat-abad",
            "name" => "بهجت آباد",
            "latitude" => 35.718852,
            "longitude" => 51.412999,
            "radius" => "900"
        ],
        [
            "id" => 44,
            "city_id" => "2",
            "slug" => "tehran-bahman-yar",
            "name" => "بهمن یار",
            "latitude" => 35.633233,
            "longitude" => 51.395575,
            "radius" => "700"
        ],
        [
            "id" => 45,
            "city_id" => "2",
            "slug" => "tehran-boostan-velayat",
            "name" => "بوستان ولایت",
            "latitude" => 35.645579,
            "longitude" => 51.381155,
            "radius" => "1000"
        ],
        [
            "id" => 46,
            "city_id" => "2",
            "slug" => "tehran-boomehen",
            "name" => "بومهن",
            "latitude" => 35.731152,
            "longitude" => 51.865283,
            "radius" => "3000"
        ],
        [
            "id" => 47,
            "city_id" => "2",
            "slug" => "tehran-azadegan-park",
            "name" => "پارک آزادگان",
            "latitude" => 35.626466,
            "longitude" => 51.471278,
            "radius" => "1500"
        ],
        [
            "id" => 48,
            "city_id" => "2",
            "slug" => "tehran-shahr-park",
            "name" => "پارک شهر",
            "latitude" => 35.68313,
            "longitude" => 51.414035,
            "radius" => "400"
        ],
        [
            "id" => 49,
            "city_id" => "2",
            "slug" => "tehran-park-e-laleh",
            "name" => "پارک لاله",
            "latitude" => 35.711256,
            "longitude" => 51.394717,
            "radius" => "400"
        ],
        [
            "id" => 50,
            "city_id" => "2",
            "slug" => "tehran-pasdaran",
            "name" => "پاسداران",
            "latitude" => 35.769288,
            "longitude" => 51.463038,
            "radius" => "750"
        ],
        [
            "id" => 51,
            "city_id" => "2",
            "slug" => "tehran-pakdasht",
            "name" => "پاکدشت",
            "latitude" => 35.477971,
            "longitude" => 51.679634,
            "radius" => "2500"
        ],
        [
            "id" => 52,
            "city_id" => "2",
            "slug" => "tehran-pamenar",
            "name" => "پامنار",
            "latitude" => 35.681283,
            "longitude" => 51.429049,
            "radius" => "800"
        ],
        [
            "id" => 53,
            "city_id" => "2",
            "slug" => "tehran-pardis",
            "name" => "پردیس",
            "latitude" => 35.736725,
            "longitude" => 51.81533,
            "radius" => "3000"
        ],
        [
            "id" => 54,
            "city_id" => "2",
            "slug" => "tehran-pardisan",
            "name" => "پردیسان",
            "latitude" => 35.74491,
            "longitude" => 51.359011,
            "radius" => "1200"
        ],
        [
            "id" => 55,
            "city_id" => "2",
            "slug" => "tehran-parand",
            "name" => "پرند",
            "latitude" => 35.463344,
            "longitude" => 50.963709,
            "radius" => "2000"
        ],
        [
            "id" => 56,
            "city_id" => "2",
            "slug" => "tehran-pirouzi",
            "name" => "پیروزی",
            "latitude" => 35.690206,
            "longitude" => 51.461493,
            "radius" => "1000"
        ],
        [
            "id" => 57,
            "city_id" => "2",
            "slug" => "tehran-paykan-shahr",
            "name" => "پیکان شهر",
            "latitude" => 35.732788,
            "longitude" => 51.183917,
            "radius" => "500"
        ],
        [
            "id" => 58,
            "city_id" => "2",
            "slug" => "tehran-pol-e-roomi",
            "name" => "پل رومی",
            "latitude" => 35.793868,
            "longitude" => 51.436222,
            "radius" => "200"
        ],
        [
            "id" => 59,
            "city_id" => "2",
            "slug" => "tehran-poonak",
            "name" => "پونک",
            "latitude" => 35.761976,
            "longitude" => 51.33309,
            "radius" => "1100"
        ],
        [
            "id" => 60,
            "city_id" => "2",
            "slug" => "tehran-tajrish",
            "name" => "تجریش",
            "latitude" => 35.802256,
            "longitude" => 51.432317,
            "radius" => "600"
        ],
        [
            "id" => 61,
            "city_id" => "2",
            "slug" => "tehran-east-tehranpars",
            "name" => "تهرانپارس شرقی",
            "latitude" => 35.741566,
            "longitude" => 51.548525,
            "radius" => "600"
        ],
        [
            "id" => 62,
            "city_id" => "2",
            "slug" => "tehran-west-tehranpars",
            "name" => "تهرانپارس غربی",
            "latitude" => 35.740661,
            "longitude" => 51.532303,
            "radius" => "600"
        ],
        [
            "id" => 63,
            "city_id" => "2",
            "slug" => "tehran-tehransar",
            "name" => "تهرانسر",
            "latitude" => 35.690067,
            "longitude" => 51.252581,
            "radius" => "1400"
        ],
        [
            "id" => 64,
            "city_id" => "2",
            "slug" => "tehran-tehran-no",
            "name" => "تهران نو",
            "latitude" => 35.708956,
            "longitude" => 51.495568,
            "radius" => "1200"
        ],
        [
            "id" => 65,
            "city_id" => "2",
            "slug" => "tehran-tehranvila",
            "name" => "تهران ویلا",
            "latitude" => 35.72359,
            "longitude" => 51.366822,
            "radius" => "700"
        ],
        [
            "id" => 66,
            "city_id" => "2",
            "slug" => "tehran-tohid",
            "name" => "توحید",
            "latitude" => 35.700314,
            "longitude" => 51.380297,
            "radius" => "500"
        ],
        [
            "id" => 67,
            "city_id" => "2",
            "slug" => "tehran-jey",
            "name" => "جی",
            "latitude" => 35.692855,
            "longitude" => 51.354548,
            "radius" => "1200"
        ],
        [
            "id" => 68,
            "city_id" => "2",
            "slug" => "tehran-jeyhoun",
            "name" => "جیحون",
            "latitude" => 35.690544,
            "longitude" => 51.363715,
            "radius" => "1100"
        ],
        [
            "id" => 69,
            "city_id" => "2",
            "slug" => "tehran-jordan",
            "name" => "جردن",
            "latitude" => 35.777505,
            "longitude" => 51.422017,
            "radius" => "400"
        ],
        [
            "id" => 70,
            "city_id" => "2",
            "slug" => "tehran-jamaran",
            "name" => "جماران",
            "latitude" => 35.820527,
            "longitude" => 51.455062,
            "radius" => "700"
        ],
        [
            "id" => 71,
            "city_id" => "2",
            "slug" => "tehran-jamalzadeh",
            "name" => "جمال زاده",
            "latitude" => 35.69885,
            "longitude" => 51.388709,
            "radius" => "700"
        ],
        [
            "id" => 72,
            "city_id" => "2",
            "slug" => "tehran-jamshidiyeh",
            "name" => "جمشیدیه",
            "latitude" => 35.826304,
            "longitude" => 51.465613,
            "radius" => "500"
        ],
        [
            "id" => 73,
            "city_id" => "2",
            "slug" => "tehran-jomhouri",
            "name" => "جمهوری",
            "latitude" => 35.695922,
            "longitude" => 51.392914,
            "radius" => "1200"
        ],
        [
            "id" => 74,
            "city_id" => "2",
            "slug" => "tehran-south-janat-abad",
            "name" => "جنت آباد جنوبی",
            "latitude" => 35.745189,
            "longitude" => 51.304766,
            "radius" => "700"
        ],
        [
            "id" => 75,
            "city_id" => "2",
            "slug" => "tehran-north-janat-abad",
            "name" => "جنت آباد شمالی",
            "latitude" => 35.772352,
            "longitude" => 51.307427,
            "radius" => "900"
        ],
        [
            "id" => 76,
            "city_id" => "2",
            "slug" => "tehran-central-janat-abad",
            "name" => "جنت آباد مرکزی",
            "latitude" => 35.75919,
            "longitude" => 51.304595,
            "radius" => "900"
        ],
        [
            "id" => 77,
            "city_id" => "2",
            "slug" => "tehran-javadiyeh",
            "name" => "جوادیه",
            "latitude" => 35.65353,
            "longitude" => 51.390082,
            "radius" => "1200"
        ],
        [
            "id" => 78,
            "city_id" => "2",
            "slug" => "tehran-javanmard-e-ghasab",
            "name" => "جوانمرد قصاب",
            "latitude" => 35.612372,
            "longitude" => 51.422183,
            "radius" => "1200"
        ],
        [
            "id" => 79,
            "city_id" => "2",
            "slug" => "tehran-chitgar",
            "name" => "چیتگر",
            "latitude" => 35.731185,
            "longitude" => 51.208636,
            "radius" => "3000"
        ],
        [
            "id" => 80,
            "city_id" => "2",
            "slug" => "tehran-north-chitgar",
            "name" => "چیتگر شمالی",
            "latitude" => 35.718085,
            "longitude" => 51.180312,
            "radius" => "2000"
        ],
        [
            "id" => 81,
            "city_id" => "2",
            "slug" => "tehran-chizar",
            "name" => "چیذر",
            "latitude" => 35.796774,
            "longitude" => 51.455645,
            "radius" => "500"
        ],
        [
            "id" => 82,
            "city_id" => "2",
            "slug" => "tehran-charsad-dastgah",
            "name" => "چهارصد دستگاه",
            "latitude" => 35.634767,
            "longitude" => 51.402527,
            "radius" => "400"
        ],
        [
            "id" => 83,
            "city_id" => "2",
            "slug" => "tehran-hassan-abad",
            "name" => "حسن آباد",
            "latitude" => 35.687139,
            "longitude" => 51.408756,
            "radius" => "400"
        ],
        [
            "id" => 84,
            "city_id" => "2",
            "slug" => "tehran-hasan-abad-baqer-far",
            "name" => "حسن آباد باقرفر",
            "latitude" => 35.580058,
            "longitude" => 51.383301,
            "radius" => "800"
        ],
        [
            "id" => 85,
            "city_id" => "2",
            "slug" => "tehran-hasan-abad-shomali",
            "name" => "حسن آباد شمالی",
            "latitude" => 35.733206,
            "longitude" => 51.319787,
            "radius" => "700"
        ],
        [
            "id" => 86,
            "city_id" => "2",
            "slug" => "tehran-heshamatiyeh",
            "name" => "حشمتیه",
            "latitude" => 35.717633,
            "longitude" => 51.455277,
            "radius" => "700"
        ],
        [
            "id" => 87,
            "city_id" => "2",
            "slug" => "tehran-hakimiyeh",
            "name" => "حکیمیه",
            "latitude" => 35.735644,
            "longitude" => 51.592299,
            "radius" => "3000"
        ],
        [
            "id" => 88,
            "city_id" => "2",
            "slug" => "tehran-khani-abad",
            "name" => "خانی آباد",
            "latitude" => 35.626884,
            "longitude" => 51.391369,
            "radius" => "1000"
        ],
        [
            "id" => 89,
            "city_id" => "2",
            "slug" => "tehran-khazaneh",
            "name" => "خزانه",
            "latitude" => 35.640208,
            "longitude" => 51.413685,
            "radius" => "500"
        ],
        [
            "id" => 90,
            "city_id" => "2",
            "slug" => "tehran-khalij-e-fars",
            "name" => "خلیج فارس",
            "latitude" => 35.66678,
            "longitude" => 51.263653,
            "radius" => "1500"
        ],
        [
            "id" => 91,
            "city_id" => "2",
            "slug" => "tehran-khureyn",
            "name" => "خورین",
            "latitude" => 35.568679,
            "longitude" => 51.396948,
            "radius" => "1000"
        ],
        [
            "id" => 92,
            "city_id" => "2",
            "slug" => "tehran-darabad",
            "name" => "دارآباد",
            "latitude" => 35.818788,
            "longitude" => 51.491436,
            "radius" => "600"
        ],
        [
            "id" => 93,
            "city_id" => "2",
            "slug" => "tehran-tehran-university",
            "name" => "دانشگاه تهران",
            "latitude" => 35.704844,
            "longitude" => 51.396948,
            "radius" => "700"
        ],
        [
            "id" => 94,
            "city_id" => "2",
            "slug" => "tehran-dabestan",
            "name" => "دبستان",
            "latitude" => 35.735923,
            "longitude" => 51.451794,
            "radius" => "700"
        ],
        [
            "id" => 95,
            "city_id" => "2",
            "slug" => "tehran-daryan-no",
            "name" => "دریان نو",
            "latitude" => 35.710489,
            "longitude" => 51.366393,
            "radius" => "1400"
        ],
        [
            "id" => 96,
            "city_id" => "2",
            "slug" => "tehran-darband",
            "name" => "دربند",
            "latitude" => 35.820771,
            "longitude" => 51.424807,
            "radius" => "600"
        ],
        [
            "id" => 97,
            "city_id" => "2",
            "slug" => "tehran-dardasht",
            "name" => "دردشت",
            "latitude" => 35.72812,
            "longitude" => 51.501404,
            "radius" => "600"
        ],
        [
            "id" => 98,
            "city_id" => "2",
            "slug" => "tehran-darakeh",
            "name" => "درکه",
            "latitude" => 35.804588,
            "longitude" => 51.384381,
            "radius" => "800"
        ],
        [
            "id" => 99,
            "city_id" => "2",
            "slug" => "tehran-darvazeh-shemiran",
            "name" => "دروازه شمیران",
            "latitude" => 35.698989,
            "longitude" => 51.434628,
            "radius" => "500"
        ],
        [
            "id" => 100,
            "city_id" => "2",
            "slug" => "tehran-darrous",
            "name" => "دروس",
            "latitude" => 35.766502,
            "longitude" => 51.449906,
            "radius" => "500"
        ],
        [
            "id" => 101,
            "city_id" => "2",
            "slug" => "tehran-dezashib",
            "name" => "دزاشیب",
            "latitude" => 35.805458,
            "longitude" => 51.451114,
            "radius" => "500"
        ],
        [
            "id" => 102,
            "city_id" => "2",
            "slug" => "tehran-south-deylaman",
            "name" => "دیلمان جنوبی",
            "latitude" => 35.596461,
            "longitude" => 51.433512,
            "radius" => "800"
        ],
        [
            "id" => 103,
            "city_id" => "2",
            "slug" => "tehran-dehkade-olympic",
            "name" => "دهکده المپیک",
            "latitude" => 35.764204,
            "longitude" => 51.257645,
            "radius" => "1300"
        ],
        [
            "id" => 104,
            "city_id" => "2",
            "slug" => "tehran-vanak-village",
            "name" => "ده ونک",
            "latitude" => 35.768209,
            "longitude" => 51.392234,
            "radius" => "500"
        ],
        [
            "id" => 105,
            "city_id" => "2",
            "slug" => "tehran-doolab",
            "name" => "دولاب",
            "latitude" => 35.66685,
            "longitude" => 51.459691,
            "radius" => "1500"
        ],
        [
            "id" => 106,
            "city_id" => "2",
            "slug" => "tehran-dolat-abad",
            "name" => "دولت آباد",
            "latitude" => 35.618582,
            "longitude" => 51.454283,
            "radius" => "1200"
        ],
        [
            "id" => 107,
            "city_id" => "2",
            "slug" => "tehran-robatkarim",
            "name" => "رباط کریم",
            "latitude" => 35.484034,
            "longitude" => 51.082327,
            "radius" => "2000"
        ],
        [
            "id" => 108,
            "city_id" => "2",
            "slug" => "tehran-roodehen",
            "name" => "رودهن",
            "latitude" => 35.736307,
            "longitude" => 51.911632,
            "radius" => "2500"
        ],
        [
            "id" => 109,
            "city_id" => "2",
            "slug" => "tehran-zargandeh",
            "name" => "زرگنده",
            "latitude" => 35.776565,
            "longitude" => 51.43232,
            "radius" => "400"
        ],
        [
            "id" => 110,
            "city_id" => "2",
            "slug" => "tehran-zafaraniyeh",
            "name" => "زعفرانیه",
            "latitude" => 35.80873,
            "longitude" => 51.41558,
            "radius" => "500"
        ],
        [
            "id" => 111,
            "city_id" => "2",
            "slug" => "tehran-zeynabeiyeh",
            "name" => "زینبیه",
            "latitude" => 35.709305,
            "longitude" => 51.508442,
            "radius" => "500"
        ],
        [
            "id" => 112,
            "city_id" => "2",
            "slug" => "tehran-zehtabi",
            "name" => "زهتابی",
            "latitude" => 35.64537,
            "longitude" => 51.365019,
            "radius" => "1000"
        ],
        [
            "id" => 113,
            "city_id" => "2",
            "slug" => "tehran-sazman-ab",
            "name" => "سازمان آب",
            "latitude" => 35.740034,
            "longitude" => 51.289917,
            "radius" => "700"
        ],
        [
            "id" => 114,
            "city_id" => "2",
            "slug" => "tehran-sazamn-barnameh",
            "name" => "سازمان برنامه",
            "latitude" => 35.731394,
            "longitude" => 51.301762,
            "radius" => "1200"
        ],
        [
            "id" => 115,
            "city_id" => "2",
            "slug" => "tehran-sattarkhan",
            "name" => "ستارخان",
            "latitude" => 35.707632,
            "longitude" => 51.375319,
            "radius" => "500"
        ],
        [
            "id" => 116,
            "city_id" => "2",
            "slug" => "tehran-seyed-khandan",
            "name" => "سید خندان",
            "latitude" => 35.740016,
            "longitude" => 51.44925,
            "radius" => "500"
        ],
        [
            "id" => 117,
            "city_id" => "2",
            "slug" => "tehran-sarsabz",
            "name" => "سرسبز",
            "latitude" => 35.733694,
            "longitude" => 51.495654,
            "radius" => "400"
        ],
        [
            "id" => 118,
            "city_id" => "2",
            "slug" => "tehran-saadat-abad",
            "name" => "سعادت آباد",
            "latitude" => 35.777854,
            "longitude" => 51.368968,
            "radius" => "1100"
        ],
        [
            "id" => 119,
            "city_id" => "2",
            "slug" => "tehran-saadabad",
            "name" => "سعدآباد",
            "latitude" => 35.811619,
            "longitude" => 51.42553,
            "radius" => "400"
        ],
        [
            "id" => 120,
            "city_id" => "2",
            "slug" => "tehran-sarsabil",
            "name" => "سلسبیل",
            "latitude" => 35.688324,
            "longitude" => 51.373602,
            "radius" => "800"
        ],
        [
            "id" => 121,
            "city_id" => "2",
            "slug" => "tehran-soleymanieh",
            "name" => "سلیمانیه",
            "latitude" => 35.682329,
            "longitude" => 51.457459,
            "radius" => "800"
        ],
        [
            "id" => 122,
            "city_id" => "2",
            "slug" => "tehran-sanglaj",
            "name" => "سنگلج",
            "latitude" => 35.677309,
            "longitude" => 51.412827,
            "radius" => "800"
        ],
        [
            "id" => 123,
            "city_id" => "2",
            "slug" => "tehran-south-sohrevardi",
            "name" => "سهروردی جنوبی",
            "latitude" => 35.721639,
            "longitude" => 51.434628,
            "radius" => "700"
        ],
        [
            "id" => 124,
            "city_id" => "2",
            "slug" => "tehran-north-sohrevardi",
            "name" => "سهروردی شمالی",
            "latitude" => 35.736968,
            "longitude" => 51.43952,
            "radius" => "700"
        ],
        [
            "id" => 125,
            "city_id" => "2",
            "slug" => "tehran-sohanak",
            "name" => "سوهانک",
            "latitude" => 35.803266,
            "longitude" => 51.535234,
            "radius" => "1000"
        ],
        [
            "id" => 126,
            "city_id" => "2",
            "slug" => "tehran-shapoor",
            "name" => "شاپور",
            "latitude" => 35.665037,
            "longitude" => 51.40227,
            "radius" => "500"
        ],
        [
            "id" => 127,
            "city_id" => "2",
            "slug" => "tehran-shadabad",
            "name" => "شادآباد",
            "latitude" => 35.657414,
            "longitude" => 51.30359,
            "radius" => "700"
        ],
        [
            "id" => 128,
            "city_id" => "2",
            "slug" => "tehran-shadman",
            "name" => "شادمان",
            "latitude" => 35.707168,
            "longitude" => 51.365474,
            "radius" => "800"
        ],
        [
            "id" => 129,
            "city_id" => "2",
            "slug" => "tehran-shian",
            "name" => "شیان",
            "latitude" => 35.772283,
            "longitude" => 51.496071,
            "radius" => "400"
        ],
        [
            "id" => 130,
            "city_id" => "2",
            "slug" => "tehran-shahin",
            "name" => "شاهین",
            "latitude" => 35.762045,
            "longitude" => 51.314293,
            "radius" => "1000"
        ],
        [
            "id" => 131,
            "city_id" => "2",
            "slug" => "tehran-sheykh-al-raeis",
            "name" => "شیخ الرئیس",
            "latitude" => 35.690834,
            "longitude" => 51.454112,
            "radius" => "600"
        ],
        [
            "id" => 132,
            "city_id" => "2",
            "slug" => "tehran-sheykh-hadi",
            "name" => "شیخ هادی",
            "latitude" => 35.693831,
            "longitude" => 51.40742,
            "radius" => "700"
        ],
        [
            "id" => 133,
            "city_id" => "2",
            "slug" => "tehran-shirazi",
            "name" => "شیرازی",
            "latitude" => 35.751145,
            "longitude" => 51.400903,
            "radius" => "500"
        ],
        [
            "id" => 134,
            "city_id" => "2",
            "slug" => "tehran-sharifabad",
            "name" => "شریف آباد",
            "latitude" => 35.427363,
            "longitude" => 51.787687,
            "radius" => "1500"
        ],
        [
            "id" => 135,
            "city_id" => "2",
            "slug" => "tehran-shokoofeh",
            "name" => "شکوفه",
            "latitude" => 35.631419,
            "longitude" => 51.36459,
            "radius" => "1000"
        ],
        [
            "id" => 136,
            "city_id" => "2",
            "slug" => "tehran-shemiran-no",
            "name" => "شمیران نو",
            "latitude" => 35.753443,
            "longitude" => 51.502569,
            "radius" => "400"
        ],
        [
            "id" => 137,
            "city_id" => "2",
            "slug" => "tehran-shams-abad",
            "name" => "شمس آباد",
            "latitude" => 35.748881,
            "longitude" => 51.474625,
            "radius" => "700"
        ],
        [
            "id" => 138,
            "city_id" => "2",
            "slug" => "tehran-shahriar",
            "name" => "شهریار",
            "latitude" => 35.659376,
            "longitude" => 51.048431,
            "radius" => "3000"
        ],
        [
            "id" => 139,
            "city_id" => "2",
            "slug" => "tehran-sharara",
            "name" => "شهرآرا",
            "latitude" => 35.717389,
            "longitude" => 51.374718,
            "radius" => "900"
        ],
        [
            "id" => 140,
            "city_id" => "2",
            "slug" => "tehran-south-shahran",
            "name" => "شهران جنوبی",
            "latitude" => 35.758911,
            "longitude" => 51.290518,
            "radius" => "700"
        ],
        [
            "id" => 141,
            "city_id" => "2",
            "slug" => "tehran-north-shahran",
            "name" => "شهران شمالی",
            "latitude" => 35.773884,
            "longitude" => 51.289917,
            "radius" => "1200"
        ],
        [
            "id" => 142,
            "city_id" => "2",
            "slug" => "tehran-shahr-e-rey",
            "name" => "شهر ری",
            "latitude" => 35.572901,
            "longitude" => 51.447931,
            "radius" => "2000"
        ],
        [
            "id" => 143,
            "city_id" => "2",
            "slug" => "tehran-shahr-e-ziba",
            "name" => "شهر زیبا",
            "latitude" => 35.749299,
            "longitude" => 51.291977,
            "radius" => "700"
        ],
        [
            "id" => 144,
            "city_id" => "2",
            "slug" => "tehran-shahr-e-qods",
            "name" => "شهر قدس",
            "latitude" => 35.711117,
            "longitude" => 51.114823,
            "radius" => "3000"
        ],
        [
            "id" => 145,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-aboozar",
            "name" => "شهرک ابوذر",
            "latitude" => 35.622001,
            "longitude" => 51.356007,
            "radius" => "700"
        ],
        [
            "id" => 146,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-apadana",
            "name" => "شهرک آپادانا",
            "latitude" => 35.707423,
            "longitude" => 51.330515,
            "radius" => "800"
        ],
        [
            "id" => 147,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-arghavan",
            "name" => "شهرک ارغوان",
            "latitude" => 35.777088,
            "longitude" => 51.32794,
            "radius" => "500"
        ],
        [
            "id" => 148,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-azadi",
            "name" => "شهرک آزادی",
            "latitude" => 35.709792,
            "longitude" => 51.274897,
            "radius" => "800"
        ],
        [
            "id" => 149,
            "city_id" => "2",
            "slug" => "tehran-shaharak-e-esteqlal",
            "name" => "شهرک استقلال",
            "latitude" => 35.70122,
            "longitude" => 51.241337,
            "radius" => "600"
        ],
        [
            "id" => 150,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-aseman",
            "name" => "شهرک آسمان",
            "latitude" => 35.680516,
            "longitude" => 51.266657,
            "radius" => "700"
        ],
        [
            "id" => 151,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-emamkhomeyni",
            "name" => "شهرک امام خمینی",
            "latitude" => 35.656111,
            "longitude" => 51.312663,
            "radius" => "500"
        ],
        [
            "id" => 152,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-omid",
            "name" => "شهرک امید",
            "latitude" => 35.763159,
            "longitude" => 51.532353,
            "radius" => "500"
        ],
        [
            "id" => 153,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-amiralmomenin",
            "name" => "شهرک امیرالمومنین",
            "latitude" => 35.659319,
            "longitude" => 51.518742,
            "radius" => "1200"
        ],
        [
            "id" => 154,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-ansar",
            "name" => "شهرک انصار",
            "latitude" => 35.710629,
            "longitude" => 51.259362,
            "radius" => "600"
        ],
        [
            "id" => 155,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-bokharaei",
            "name" => "شهرک بخارایی",
            "latitude" => 35.629675,
            "longitude" => 51.34751,
            "radius" => "700"
        ],
        [
            "id" => 156,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-besat",
            "name" => "شهرک بعثت",
            "latitude" => 35.637837,
            "longitude" => 51.430508,
            "radius" => "600"
        ],
        [
            "id" => 157,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-pars",
            "name" => "شهرک پارس",
            "latitude" => 35.755359,
            "longitude" => 51.536767,
            "radius" => "300"
        ],
        [
            "id" => 158,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-pasdaran",
            "name" => "شهرک پاسداران",
            "latitude" => 35.695992,
            "longitude" => 51.256701,
            "radius" => "700"
        ],
        [
            "id" => 159,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-parvaz",
            "name" => "شهرک پرواز",
            "latitude" => 35.727144,
            "longitude" => 51.307084,
            "radius" => "700"
        ],
        [
            "id" => 160,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-takhti",
            "name" => "شهرک تختی",
            "latitude" => 35.623466,
            "longitude" => 51.414715,
            "radius" => "1000"
        ],
        [
            "id" => 161,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-cheshmeh",
            "name" => "شهرک چشمه",
            "latitude" => 35.746721,
            "longitude" => 51.260134,
            "radius" => "800"
        ],
        [
            "id" => 162,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-daneshgah",
            "name" => "شهرک دانشگاه",
            "latitude" => 35.775834,
            "longitude" => 51.317812,
            "radius" => "400"
        ],
        [
            "id" => 163,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-darya",
            "name" => "شهرک دریا",
            "latitude" => 35.685187,
            "longitude" => 51.246058,
            "radius" => "1000"
        ],
        [
            "id" => 164,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-rezvan",
            "name" => "شهرک رضوان",
            "latitude" => 35.583409,
            "longitude" => 51.457116,
            "radius" => "300"
        ],
        [
            "id" => 165,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-razavieh",
            "name" => "شهرک رضویه",
            "latitude" => 35.606091,
            "longitude" => 51.501576,
            "radius" => "800"
        ],
        [
            "id" => 166,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-jandarmeri",
            "name" => "شهرک ژاندارمری",
            "latitude" => 35.732858,
            "longitude" => 51.356007,
            "radius" => "800"
        ],
        [
            "id" => 167,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-shahin",
            "name" => "شهرک شاهین",
            "latitude" => 35.742332,
            "longitude" => 51.312148,
            "radius" => "800"
        ],
        [
            "id" => 168,
            "city_id" => "2",
            "slug" => "tehran-shaharak-e-shariyati",
            "name" => "شهرک شریعتی",
            "latitude" => 35.632047,
            "longitude" => 51.373002,
            "radius" => "1000"
        ],
        [
            "id" => 169,
            "city_id" => "2",
            "slug" => "tehran-shaharak-e-sharifi",
            "name" => "شهرک شریفی",
            "latitude" => 35.620256,
            "longitude" => 51.340128,
            "radius" => "1200"
        ],
        [
            "id" => 170,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-shahid-mofateh",
            "name" => "شهرک شهید مفتح",
            "latitude" => 35.572798,
            "longitude" => 51.457545,
            "radius" => "800"
        ],
        [
            "id" => 171,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-shahrbani",
            "name" => "شهرک شهربانی",
            "latitude" => 35.583129,
            "longitude" => 51.450764,
            "radius" => "800"
        ],
        [
            "id" => 172,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-shahrdari",
            "name" => "شهرک شهرداری",
            "latitude" => 35.609371,
            "longitude" => 51.428963,
            "radius" => "500"
        ],
        [
            "id" => 173,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-taleghani",
            "name" => "شهرک طالقانی",
            "latitude" => 35.658761,
            "longitude" => 51.266572,
            "radius" => "600"
        ],
        [
            "id" => 174,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-abbasi",
            "name" => "شهرک عباسی",
            "latitude" => 35.58278,
            "longitude" => 51.444155,
            "radius" => "500"
        ],
        [
            "id" => 175,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-abbaspoor",
            "name" => "شهرک عباسپور",
            "latitude" => 35.588364,
            "longitude" => 51.44982,
            "radius" => "700"
        ],
        [
            "id" => 176,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-gharb",
            "name" => "شهرک غرب",
            "latitude" => 35.759259,
            "longitude" => 51.371542,
            "radius" => "1200"
        ],
        [
            "id" => 177,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-ghazali",
            "name" => "شهرک غزالی",
            "latitude" => 35.731743,
            "longitude" => 51.16469,
            "radius" => "700"
        ],
        [
            "id" => 178,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-fateme-zahra",
            "name" => "شهرک فاطمه الزهرا",
            "latitude" => 35.692786,
            "longitude" => 51.236359,
            "radius" => "800"
        ],
        [
            "id" => 179,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-ferdows",
            "name" => "شهرک فردوس",
            "latitude" => 35.665386,
            "longitude" => 51.328799,
            "radius" => "1500"
        ],
        [
            "id" => 180,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-farhangian",
            "name" => "شهرک فرهنگیان",
            "latitude" => 35.753826,
            "longitude" => 51.54424,
            "radius" => "300"
        ],
        [
            "id" => 181,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-farhangian",
            "name" => "شهرک فرهنگیان غرب",
            "latitude" => 35.737177,
            "longitude" => 51.365963,
            "radius" => "650"
        ],
        [
            "id" => 182,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-qods",
            "name" => "شهرک قدس",
            "latitude" => 35.758413,
            "longitude" => 51.374871,
            "radius" => "2000"
        ],
        [
            "id" => 183,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-kazemiyeh",
            "name" => "شهرک کاظمیه",
            "latitude" => 35.702056,
            "longitude" => 51.27627,
            "radius" => "700"
        ],
        [
            "id" => 184,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-kianshahr",
            "name" => "شهرک کیانشهر",
            "latitude" => 35.637139,
            "longitude" => 51.455142,
            "radius" => "1500"
        ],
        [
            "id" => 185,
            "city_id" => "2",
            "slug" => "tehran-shaharak-e-kamali",
            "name" => "شهرک کمالی",
            "latitude" => 35.605463,
            "longitude" => 51.429993,
            "radius" => "500"
        ],
        [
            "id" => 186,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-koohsar",
            "name" => "شهرک کوهسار",
            "latitude" => 35.781544,
            "longitude" => 51.333176,
            "radius" => "700"
        ],
        [
            "id" => 187,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-golestan",
            "name" => "شهرک گلستان",
            "latitude" => 35.760583,
            "longitude" => 51.523083,
            "radius" => "250"
        ],
        [
            "id" => 188,
            "city_id" => "2",
            "slug" => "tehran-west-shahrak-e-golestan",
            "name" => "شهرک گلستان غربی",
            "latitude" => 35.752921,
            "longitude" => 51.241852,
            "radius" => "1200"
        ],
        [
            "id" => 189,
            "city_id" => "2",
            "slug" => "tehran-shahrak-golha",
            "name" => "شهرک گلها",
            "latitude" => 35.80337,
            "longitude" => 51.499955,
            "radius" => "300"
        ],
        [
            "id" => 190,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-mahalati",
            "name" => "شهرک محلاتی",
            "latitude" => 35.804449,
            "longitude" => 51.515493,
            "radius" => "600"
        ],
        [
            "id" => 191,
            "city_id" => "2",
            "slug" => "tehran-shaharak-e-moslemin",
            "name" => "شهرک مسلمین",
            "latitude" => 35.645509,
            "longitude" => 51.314637,
            "radius" => "800"
        ],
        [
            "id" => 192,
            "city_id" => "2",
            "slug" => "tehran-shahrak-naft",
            "name" => "شهرک نفت",
            "latitude" => 35.809113,
            "longitude" => 51.511006,
            "radius" => "300"
        ],
        [
            "id" => 193,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-hejrat",
            "name" => "شهرک هجرت",
            "latitude" => 35.630372,
            "longitude" => 51.440035,
            "radius" => "600"
        ],
        [
            "id" => 194,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-valfajr",
            "name" => "شهرک والفجر",
            "latitude" => 35.74693,
            "longitude" => 51.305624,
            "radius" => "700"
        ],
        [
            "id" => 195,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-vilashahr",
            "name" => "شهرک ویلاشهر",
            "latitude" => 35.726378,
            "longitude" => 51.178595,
            "radius" => "600"
        ],
        [
            "id" => 196,
            "city_id" => "2",
            "slug" => "tehran-shahrak-e-vali-e-asr",
            "name" => "شهرک ولیعصر",
            "latitude" => 35.650043,
            "longitude" => 51.339184,
            "radius" => "1200"
        ],
        [
            "id" => 197,
            "city_id" => "2",
            "slug" => "tehran-shoosh",
            "name" => "شوش",
            "latitude" => 35.640208,
            "longitude" => 51.438405,
            "radius" => "800"
        ],
        [
            "id" => 198,
            "city_id" => "2",
            "slug" => "tehran-sadeghiyeh",
            "name" => "صادقیه",
            "latitude" => 35.724636,
            "longitude" => 51.342274,
            "radius" => "1200"
        ],
        [
            "id" => 199,
            "city_id" => "2",
            "slug" => "tehran-sad-dastgah",
            "name" => "صد دستگاه",
            "latitude" => 35.688463,
            "longitude" => 51.472994,
            "radius" => "700"
        ],
        [
            "id" => 200,
            "city_id" => "2",
            "slug" => "tehran-zarabkhaneh",
            "name" => "ضرابخانه",
            "latitude" => 35.758876,
            "longitude" => 51.458241,
            "radius" => "550"
        ],
        [
            "id" => 201,
            "city_id" => "2",
            "slug" => "tehran-taleqani",
            "name" => "طالقانی",
            "latitude" => 35.706751,
            "longitude" => 51.418467,
            "radius" => "2000"
        ],
        [
            "id" => 202,
            "city_id" => "2",
            "slug" => "tehran-tarasht",
            "name" => "طرشت",
            "latitude" => 35.707283,
            "longitude" => 51.347424,
            "radius" => "1100"
        ],
        [
            "id" => 203,
            "city_id" => "2",
            "slug" => "tehran-zafar",
            "name" => "ظفر",
            "latitude" => 35.767617,
            "longitude" => 51.41661,
            "radius" => "500"
        ],
        [
            "id" => 204,
            "city_id" => "2",
            "slug" => "tehran-zahir-abad",
            "name" => "ظهیر آباد",
            "latitude" => 35.598136,
            "longitude" => 51.44776,
            "radius" => "1000"
        ],
        [
            "id" => 205,
            "city_id" => "2",
            "slug" => "tehran-abbas-abad",
            "name" => "عباس آباد",
            "latitude" => 35.729025,
            "longitude" => 51.424672,
            "radius" => "800"
        ],
        [
            "id" => 206,
            "city_id" => "2",
            "slug" => "tehran-abdol-abad",
            "name" => "عبدل آباد",
            "latitude" => 35.607278,
            "longitude" => 51.376263,
            "radius" => "1000"
        ],
        [
            "id" => 207,
            "city_id" => "2",
            "slug" => "tehran-eshrat-abad",
            "name" => "عشرت آباد",
            "latitude" => 35.703241,
            "longitude" => 51.441323,
            "radius" => "500"
        ],
        [
            "id" => 208,
            "city_id" => "2",
            "slug" => "tehran-south-ali-abad",
            "name" => "علی آباد جنوبی",
            "latitude" => 35.625419,
            "longitude" => 51.422183,
            "radius" => "800"
        ],
        [
            "id" => 209,
            "city_id" => "2",
            "slug" => "tehran-north-ali-abad",
            "name" => "علی آباد شمالی",
            "latitude" => 35.638953,
            "longitude" => 51.422955,
            "radius" => "1300"
        ],
        [
            "id" => 210,
            "city_id" => "2",
            "slug" => "tehran-elm-o-sanat",
            "name" => "علم و صنعت",
            "latitude" => 35.739616,
            "longitude" => 51.506125,
            "radius" => "600"
        ],
        [
            "id" => 211,
            "city_id" => "2",
            "slug" => "tehran-north-karegar",
            "name" => "فاطمی",
            "latitude" => 35.717737,
            "longitude" => 51.398922,
            "radius" => "600"
        ],
        [
            "id" => 212,
            "city_id" => "2",
            "slug" => "tehran-fadak",
            "name" => "فدک",
            "latitude" => 35.729374,
            "longitude" => 51.475054,
            "radius" => "500"
        ],
        [
            "id" => 213,
            "city_id" => "2",
            "slug" => "tehran-farah-abad",
            "name" => "فرح آباد",
            "latitude" => 35.679749,
            "longitude" => 51.480633,
            "radius" => "1000"
        ],
        [
            "id" => 214,
            "city_id" => "2",
            "slug" => "tehran-farahzad",
            "name" => "فرحزاد",
            "latitude" => 35.789447,
            "longitude" => 51.344426,
            "radius" => "600"
        ],
        [
            "id" => 215,
            "city_id" => "2",
            "slug" => "tehran-farmaniyeh",
            "name" => "فرمانیه",
            "latitude" => 35.800481,
            "longitude" => 51.468752,
            "radius" => "600"
        ],
        [
            "id" => 216,
            "city_id" => "2",
            "slug" => "tehran-mehrabad-airport",
            "name" => "فرودگاه مهرآباد",
            "latitude" => 35.687906,
            "longitude" => 51.300045,
            "radius" => "3500"
        ],
        [
            "id" => 217,
            "city_id" => "2",
            "slug" => "tehran-firuzkuh",
            "name" => "فیروزکوه",
            "latitude" => 35.7587,
            "longitude" => 52.7709,
            "radius" => "2000"
        ],
        [
            "id" => 218,
            "city_id" => "2",
            "slug" => "tehran-fasham",
            "name" => "فشم",
            "latitude" => 35.929163,
            "longitude" => 51.528956,
            "radius" => "4000"
        ],
        [
            "id" => 219,
            "city_id" => "2",
            "slug" => "tehran-fallah",
            "name" => "فلاح",
            "latitude" => 35.652554,
            "longitude" => 51.360041,
            "radius" => "1800"
        ],
        [
            "id" => 220,
            "city_id" => "2",
            "slug" => "tehran-qiamdash",
            "name" => "قیامدشت",
            "latitude" => 35.523965,
            "longitude" => 51.64911,
            "radius" => "1500"
        ],
        [
            "id" => 221,
            "city_id" => "2",
            "slug" => "tehran-qarchak",
            "name" => "قرچک",
            "latitude" => 35.430426,
            "longitude" => 51.576334,
            "radius" => "2500"
        ],
        [
            "id" => 222,
            "city_id" => "2",
            "slug" => "tehran-qezel-qaleh",
            "name" => "قزل قلعه",
            "latitude" => 35.72582,
            "longitude" => 51.398493,
            "radius" => "400"
        ],
        [
            "id" => 223,
            "city_id" => "2",
            "slug" => "tehran-ghasr",
            "name" => "قصر",
            "latitude" => 35.726099,
            "longitude" => 51.449992,
            "radius" => "500"
        ],
        [
            "id" => 224,
            "city_id" => "2",
            "slug" => "tehran-qasr-e-firoozeh-yek",
            "name" => "قصر فیروزه ۱",
            "latitude" => 35.672428,
            "longitude" => 51.499344,
            "radius" => "1200"
        ],
        [
            "id" => 225,
            "city_id" => "2",
            "slug" => "tehran-qasr-e-firooze-do",
            "name" => "قصر فیروزه ۲",
            "latitude" => 35.650043,
            "longitude" => 51.502348,
            "radius" => "800"
        ],
        [
            "id" => 226,
            "city_id" => "2",
            "slug" => "tehran-qeytariyeh",
            "name" => "قیطریه",
            "latitude" => 35.792858,
            "longitude" => 51.442574,
            "radius" => "700"
        ],
        [
            "id" => 227,
            "city_id" => "2",
            "slug" => "tehran-qaleh-fath-abad",
            "name" => "قلعه فتح آباد",
            "latitude" => 35.569796,
            "longitude" => 51.416518,
            "radius" => "1500"
        ],
        [
            "id" => 228,
            "city_id" => "2",
            "slug" => "tehran-gholhak",
            "name" => "قلهک",
            "latitude" => 35.775765,
            "longitude" => 51.441065,
            "radius" => "600"
        ],
        [
            "id" => 229,
            "city_id" => "2",
            "slug" => "tehran-ghanat-kosar",
            "name" => "قنات کوثر",
            "latitude" => 35.755951,
            "longitude" => 51.524285,
            "radius" => "1000"
        ],
        [
            "id" => 230,
            "city_id" => "2",
            "slug" => "tehran-karevan",
            "name" => "کاروان",
            "latitude" => 35.609022,
            "longitude" => 51.49119,
            "radius" => "400"
        ],
        [
            "id" => 231,
            "city_id" => "2",
            "slug" => "tehran-kashanak",
            "name" => "کاشانک",
            "latitude" => 35.808765,
            "longitude" => 51.47858,
            "radius" => "700"
        ],
        [
            "id" => 232,
            "city_id" => "2",
            "slug" => "tehran-kazem-abad",
            "name" => "کاظم آباد",
            "latitude" => 35.750135,
            "longitude" => 51.468102,
            "radius" => "700"
        ],
        [
            "id" => 233,
            "city_id" => "2",
            "slug" => "tehran-kalad",
            "name" => "کالاد",
            "latitude" => 35.734669,
            "longitude" => 51.48373,
            "radius" => "300"
        ],
        [
            "id" => 234,
            "city_id" => "2",
            "slug" => "tehran-kamraniyeh",
            "name" => "کامرانیه",
            "latitude" => 35.807199,
            "longitude" => 51.46249,
            "radius" => "300"
        ],
        [
            "id" => 235,
            "city_id" => "2",
            "slug" => "tehran-iran-national-library",
            "name" => "کتابخانه ملی ایران",
            "latitude" => 35.75313,
            "longitude" => 51.431281,
            "radius" => "700"
        ],
        [
            "id" => 236,
            "city_id" => "2",
            "slug" => "tehran-karim-abad",
            "name" => "کریم آباد",
            "latitude" => 35.595344,
            "longitude" => 51.381155,
            "radius" => "1800"
        ],
        [
            "id" => 237,
            "city_id" => "2",
            "slug" => "tehran-kan",
            "name" => "کن",
            "latitude" => 35.75919,
            "longitude" => 51.27773,
            "radius" => "700"
        ],
        [
            "id" => 238,
            "city_id" => "2",
            "slug" => "tehran-kooy-e-eslam",
            "name" => "کوی اسلام",
            "latitude" => 35.594018,
            "longitude" => 51.453597,
            "radius" => "500"
        ],
        [
            "id" => 239,
            "city_id" => "2",
            "slug" => "tehran-kooy-e-bimeh",
            "name" => "کوی بیمه",
            "latitude" => 35.70589,
            "longitude" => 51.319272,
            "radius" => "600"
        ],
        [
            "id" => 240,
            "city_id" => "2",
            "slug" => "tehran-kooy-e-daneshgah",
            "name" => "کوی دانشگاه",
            "latitude" => 35.730698,
            "longitude" => 51.384932,
            "radius" => "800"
        ],
        [
            "id" => 241,
            "city_id" => "2",
            "slug" => "tehran-kooy-e-ferdos",
            "name" => "کوی فردوس",
            "latitude" => 35.720594,
            "longitude" => 51.318242,
            "radius" => "1000"
        ],
        [
            "id" => 242,
            "city_id" => "2",
            "slug" => "tehran-kooy-e-mehrabad",
            "name" => "کوی مهرآباد",
            "latitude" => 35.694249,
            "longitude" => 51.333605,
            "radius" => "700"
        ],
        [
            "id" => 243,
            "city_id" => "2",
            "slug" => "tehran-kooye-e-hefdahom-e-shahrivar",
            "name" => "کوی هفدهم شهریور",
            "latitude" => 35.668872,
            "longitude" => 51.297213,
            "radius" => "1200"
        ],
        [
            "id" => 244,
            "city_id" => "2",
            "slug" => "tehran-koohak",
            "name" => "کوهک",
            "latitude" => 35.745258,
            "longitude" => 51.486212,
            "radius" => "700"
        ],
        [
            "id" => 245,
            "city_id" => "2",
            "slug" => "tehran-gandi",
            "name" => "گاندی",
            "latitude" => 35.749438,
            "longitude" => 51.412876,
            "radius" => "700"
        ],
        [
            "id" => 246,
            "city_id" => "2",
            "slug" => "tehran-gisha",
            "name" => "گیشا (کوی نصر)",
            "latitude" => 35.734181,
            "longitude" => 51.377471,
            "radius" => "700"
        ],
        [
            "id" => 247,
            "city_id" => "2",
            "slug" => "tehran-golab-dareh",
            "name" => "گلاب دره",
            "latitude" => 35.823624,
            "longitude" => 51.43236,
            "radius" => "300"
        ],
        [
            "id" => 248,
            "city_id" => "2",
            "slug" => "tehran-gomrok",
            "name" => "گمرک",
            "latitude" => 35.667896,
            "longitude" => 51.394373,
            "radius" => "800"
        ],
        [
            "id" => 249,
            "city_id" => "2",
            "slug" => "tehran-lavasan",
            "name" => "لواسان",
            "latitude" => 35.818893,
            "longitude" => 51.639205,
            "radius" => "3500"
        ],
        [
            "id" => 250,
            "city_id" => "2",
            "slug" => "tehran-lavizan",
            "name" => "لویزان",
            "latitude" => 35.770263,
            "longitude" => 51.513249,
            "radius" => "1000"
        ],
        [
            "id" => 251,
            "city_id" => "2",
            "slug" => "tehran-mobarak-abad",
            "name" => "مبارک آباد",
            "latitude" => 35.591156,
            "longitude" => 51.40742,
            "radius" => "2000"
        ],
        [
            "id" => 252,
            "city_id" => "2",
            "slug" => "tehran-mobarak-abad-e-beheshti",
            "name" => "مبارک آباد بهشتی",
            "latitude" => 35.573356,
            "longitude" => 51.396777,
            "radius" => "500"
        ],
        [
            "id" => 253,
            "city_id" => "2",
            "slug" => "tehran-majid-abad",
            "name" => "مجید آباد",
            "latitude" => 35.76234,
            "longitude" => 51.544611,
            "radius" => "800"
        ],
        [
            "id" => 254,
            "city_id" => "2",
            "slug" => "tehran-majidiyeh",
            "name" => "مجیدیه",
            "latitude" => 35.7323,
            "longitude" => 51.467673,
            "radius" => "800"
        ],
        [
            "id" => 255,
            "city_id" => "2",
            "slug" => "tehran-azadi-sport-complex",
            "name" => "مجموعه ورزشگاه آزادی",
            "latitude" => 35.726796,
            "longitude" => 51.264254,
            "radius" => "1600"
        ],
        [
            "id" => 256,
            "city_id" => "2",
            "slug" => "tehran-mahmoodiyeh",
            "name" => "محمودیه",
            "latitude" => 35.795295,
            "longitude" => 51.414078,
            "radius" => "400"
        ],
        [
            "id" => 257,
            "city_id" => "2",
            "slug" => "tehran-azadi",
            "name" => "میدان آزادی",
            "latitude" => 35.700014,
            "longitude" => 51.337569,
            "radius" => "1000"
        ],
        [
            "id" => 258,
            "city_id" => "2",
            "slug" => "tehran-enqelab",
            "name" => "میدان انقلاب",
            "latitude" => 35.700904,
            "longitude" => 51.390676,
            "radius" => "400"
        ],
        [
            "id" => 259,
            "city_id" => "2",
            "slug" => "tehran-hor-square",
            "name" => "میدان حر",
            "latitude" => 35.688951,
            "longitude" => 51.387936,
            "radius" => "800"
        ],
        [
            "id" => 260,
            "city_id" => "2",
            "slug" => "tehran-valiasr",
            "name" => "میدان ولیعصر",
            "latitude" => 35.711595,
            "longitude" => 51.407052,
            "radius" => "500"
        ],
        [
            "id" => 261,
            "city_id" => "2",
            "slug" => "tehran-morad-abad",
            "name" => "مراد آباد",
            "latitude" => 35.783006,
            "longitude" => 51.323477,
            "radius" => "800"
        ],
        [
            "id" => 262,
            "city_id" => "2",
            "slug" => "tehran-mirdamad",
            "name" => "میرداماد",
            "latitude" => 35.760408,
            "longitude" => 51.431802,
            "radius" => "600"
        ],
        [
            "id" => 263,
            "city_id" => "2",
            "slug" => "tehran-marzdaran",
            "name" => "مرزداران",
            "latitude" => 35.73446,
            "longitude" => 51.341073,
            "radius" => "900"
        ],
        [
            "id" => 264,
            "city_id" => "2",
            "slug" => "tehran-masoudieh",
            "name" => "مسعودیه",
            "latitude" => 35.626675,
            "longitude" => 51.501147,
            "radius" => "1000"
        ],
        [
            "id" => 265,
            "city_id" => "2",
            "slug" => "tehran-moshiriyeh",
            "name" => "مشیریه",
            "latitude" => 35.620954,
            "longitude" => 51.484152,
            "radius" => "1000"
        ],
        [
            "id" => 266,
            "city_id" => "2",
            "slug" => "tehran-motahari",
            "name" => "مطهری",
            "latitude" => 35.719549,
            "longitude" => 51.420809,
            "radius" => "700"
        ],
        [
            "id" => 267,
            "city_id" => "2",
            "slug" => "tehran-malek-abad",
            "name" => "ملک آباد",
            "latitude" => 35.620814,
            "longitude" => 51.432225,
            "radius" => "500"
        ],
        [
            "id" => 268,
            "city_id" => "2",
            "slug" => "tehran-moniriyeh",
            "name" => "منیریه",
            "latitude" => 35.684002,
            "longitude" => 51.403128,
            "radius" => "600"
        ],
        [
            "id" => 269,
            "city_id" => "2",
            "slug" => "tehran-mansouriyeh",
            "name" => "منصوریه",
            "latitude" => 35.609581,
            "longitude" => 51.439606,
            "radius" => "1000"
        ],
        [
            "id" => 270,
            "city_id" => "2",
            "slug" => "tehran-manzariyeh",
            "name" => "منظریه",
            "latitude" => 35.816352,
            "longitude" => 51.466471,
            "radius" => "500"
        ],
        [
            "id" => 271,
            "city_id" => "2",
            "slug" => "tehran-south-mehrabad",
            "name" => "مهرآباد جنوبی",
            "latitude" => 35.672358,
            "longitude" => 51.331545,
            "radius" => "1500"
        ],
        [
            "id" => 272,
            "city_id" => "2",
            "slug" => "tehran-mehran",
            "name" => "مهران",
            "latitude" => 35.749229,
            "longitude" => 51.458152,
            "radius" => "500"
        ],
        [
            "id" => 273,
            "city_id" => "2",
            "slug" => "tehran-molavi",
            "name" => "مولوی",
            "latitude" => 35.662666,
            "longitude" => 51.423298,
            "radius" => "1000"
        ],
        [
            "id" => 274,
            "city_id" => "2",
            "slug" => "tehran-narmak",
            "name" => "نارمک",
            "latitude" => 35.735934,
            "longitude" => 51.501526,
            "radius" => "3000"
        ],
        [
            "id" => 275,
            "city_id" => "2",
            "slug" => "tehran-nazi-abad",
            "name" => "نازی آباد",
            "latitude" => 35.645091,
            "longitude" => 51.401841,
            "radius" => "1000"
        ],
        [
            "id" => 276,
            "city_id" => "2",
            "slug" => "tehran-niavaran",
            "name" => "نیاوران",
            "latitude" => 35.816891,
            "longitude" => 51.469871,
            "radius" => "600"
        ],
        [
            "id" => 277,
            "city_id" => "2",
            "slug" => "tehran-niroo-havayi",
            "name" => "نیرو هوایی",
            "latitude" => 35.699477,
            "longitude" => 51.473767,
            "radius" => "2000"
        ],
        [
            "id" => 278,
            "city_id" => "2",
            "slug" => "tehran-nezam-abad",
            "name" => "نظام آباد",
            "latitude" => 35.709514,
            "longitude" => 51.461064,
            "radius" => "1000"
        ],
        [
            "id" => 279,
            "city_id" => "2",
            "slug" => "tehran-nemat-abad",
            "name" => "نعمت آباد",
            "latitude" => 35.632326,
            "longitude" => 51.355063,
            "radius" => "700"
        ],
        [
            "id" => 280,
            "city_id" => "2",
            "slug" => "tehran-shahid-navab-safavi",
            "name" => "نواب",
            "latitude" => 35.694668,
            "longitude" => 51.375319,
            "radius" => "1000"
        ],
        [
            "id" => 281,
            "city_id" => "2",
            "slug" => "tehran-hashem-abad",
            "name" => "هاشم آباد",
            "latitude" => 35.649834,
            "longitude" => 51.475998,
            "radius" => "800"
        ],
        [
            "id" => 282,
            "city_id" => "2",
            "slug" => "tehran-haft-hoz",
            "name" => "هفت حوض",
            "latitude" => 35.728468,
            "longitude" => 51.48853,
            "radius" => "600"
        ],
        [
            "id" => 283,
            "city_id" => "2",
            "slug" => "tehran-vahidiyeh",
            "name" => "وحیدیه",
            "latitude" => 35.716274,
            "longitude" => 51.473338,
            "radius" => "800"
        ],
        [
            "id" => 284,
            "city_id" => "2",
            "slug" => "tehran-varamin",
            "name" => "ورامین",
            "latitude" => 35.339275,
            "longitude" => 51.65132,
            "radius" => "1500"
        ],
        [
            "id" => 285,
            "city_id" => "2",
            "slug" => "tehran-vardavard",
            "name" => "وردآورد",
            "latitude" => 35.750134,
            "longitude" => 51.132689,
            "radius" => "1500"
        ],
        [
            "id" => 286,
            "city_id" => "2",
            "slug" => "tehran-yousef-abad",
            "name" => "یوسف آباد",
            "latitude" => 35.73223,
            "longitude" => 51.405961,
            "radius" => "1000"
        ],
        [
            "id" => 287,
            "city_id" => "2",
            "slug" => "tehran-vasfenard",
            "name" => "وصفنارد",
            "latitude" => 35.650671,
            "longitude" => 51.355063,
            "radius" => "500"
        ],
        [
            "id" => 288,
            "city_id" => "2",
            "slug" => "tehran-velenjak",
            "name" => "ولنجک",
            "latitude" => 35.803927,
            "longitude" => 51.400731,
            "radius" => "700"
        ],
        [
            "id" => 289,
            "city_id" => "2",
            "slug" => "tehran-vanak",
            "name" => "ونک",
            "latitude" => 35.757525,
            "longitude" => 51.409933,
            "radius" => "500"
        ],
        [
            "id" => 290,
            "city_id" => "2",
            "slug" => "tehran-yakhchi-abad",
            "name" => "یاخچی آباد",
            "latitude" => 35.626466,
            "longitude" => 51.401583,
            "radius" => "1100"
        ],
        [
            "id" => 291,
            "city_id" => "2",
            "slug" => "tehran-yaftabad",
            "name" => "یافت آباد",
            "latitude" => 35.643208,
            "longitude" => 51.301419,
            "radius" => "1400"
        ],
        [
            "id" => 292,
            "city_id" => "3",
            "slug" => "azadegan",
            "name" => "آزادگان",
            "latitude" => 35.835286,
            "longitude" => 51.002907,
            "radius" => "1000"
        ],
        [
            "id" => 293,
            "city_id" => "3",
            "slug" => "baghestan",
            "name" => "باغستان",
            "latitude" => 35.877978,
            "longitude" => 50.961128,
            "radius" => "1500"
        ],
        [
            "id" => 294,
            "city_id" => "3",
            "slug" => "jahanshahr",
            "name" => "جهانشهر",
            "latitude" => 35.831476,
            "longitude" => 50.986195,
            "radius" => "1000"
        ],
        [
            "id" => 295,
            "city_id" => "3",
            "slug" => "hesarak",
            "name" => "حصارک",
            "latitude" => 35.845824,
            "longitude" => 50.92519,
            "radius" => "2500"
        ],
        [
            "id" => 296,
            "city_id" => "3",
            "slug" => "khorramdasht",
            "name" => "خرمدشت",
            "latitude" => 35.847578,
            "longitude" => 50.889959,
            "radius" => "1000"
        ],
        [
            "id" => 297,
            "city_id" => "3",
            "slug" => "derakhti",
            "name" => "درختی",
            "latitude" => 35.816696,
            "longitude" => 50.949664,
            "radius" => "600"
        ],
        [
            "id" => 298,
            "city_id" => "3",
            "slug" => "dehghanvilla",
            "name" => "دهقان ویلا",
            "latitude" => 35.827139,
            "longitude" => 50.958978,
            "radius" => "1000"
        ],
        [
            "id" => 299,
            "city_id" => "3",
            "slug" => "sassani",
            "name" => "ساسانی",
            "latitude" => 35.795215,
            "longitude" => 50.996256,
            "radius" => "800"
        ],
        [
            "id" => 300,
            "city_id" => "3",
            "slug" => "shahinvilla",
            "name" => "شاهین ویلا",
            "latitude" => 35.862137,
            "longitude" => 50.943772,
            "radius" => "1500"
        ],
        [
            "id" => 301,
            "city_id" => "3",
            "slug" => "shahriar",
            "name" => "شهریار",
            "latitude" => 35.621237,
            "longitude" => 51.053038,
            "radius" => "10000"
        ],
        [
            "id" => 302,
            "city_id" => "3",
            "slug" => "andishehnewcity",
            "name" => "شهر جدید اندیشه",
            "latitude" => 35.708742,
            "longitude" => 51.024059,
            "radius" => "2500"
        ],
        [
            "id" => 303,
            "city_id" => "3",
            "slug" => "hashtgerdnewcity",
            "name" => "شهر جدید هشتگرد",
            "latitude" => 35.988487,
            "longitude" => 50.734606,
            "radius" => "3000"
        ],
        [
            "id" => 304,
            "city_id" => "3",
            "slug" => "owjtown",
            "name" => "شهرک اوج",
            "latitude" => 35.847894,
            "longitude" => 50.994251,
            "radius" => "800"
        ],
        [
            "id" => 305,
            "city_id" => "3",
            "slug" => "banafsheh",
            "name" => "شهرک بنفشه",
            "latitude" => 35.779672,
            "longitude" => 51.000552,
            "radius" => "1000"
        ],
        [
            "id" => 306,
            "city_id" => "3",
            "slug" => "vahdattown",
            "name" => "شهرک وحدت",
            "latitude" => 35.757134,
            "longitude" => 51.018362,
            "radius" => "1000"
        ],
        [
            "id" => 307,
            "city_id" => "3",
            "slug" => "taleqani",
            "name" => "طالقانی",
            "latitude" => 35.823131,
            "longitude" => 50.991441,
            "radius" => "1500"
        ],
        [
            "id" => 308,
            "city_id" => "3",
            "slug" => "azimieh",
            "name" => "عظیمیه",
            "latitude" => 35.838354,
            "longitude" => 51.021803,
            "radius" => "1500"
        ],
        [
            "id" => 309,
            "city_id" => "3",
            "slug" => "fardis",
            "name" => "فردیس",
            "latitude" => 35.724114,
            "longitude" => 50.972722,
            "radius" => "3000"
        ],
        [
            "id" => 310,
            "city_id" => "3",
            "slug" => "kianmehr",
            "name" => "کیانمهر",
            "latitude" => 35.777905,
            "longitude" => 50.858631,
            "radius" => "1000"
        ],
        [
            "id" => 311,
            "city_id" => "3",
            "slug" => "kamalshahr",
            "name" => "کمالشهر",
            "latitude" => 35.882329,
            "longitude" => 50.874167,
            "radius" => "3500"
        ],
        [
            "id" => 312,
            "city_id" => "3",
            "slug" => "golshahr",
            "name" => "گلشهر",
            "latitude" => 35.825421,
            "longitude" => 50.926952,
            "radius" => "1200"
        ],
        [
            "id" => 313,
            "city_id" => "3",
            "slug" => "gohardasht",
            "name" => "گوهردشت",
            "latitude" => 35.854943,
            "longitude" => 50.968594,
            "radius" => "3000"
        ],
        [
            "id" => 314,
            "city_id" => "3",
            "slug" => "marlik",
            "name" => "مارلیک",
            "latitude" => 35.696444,
            "longitude" => 50.968795,
            "radius" => "1500"
        ],
        [
            "id" => 315,
            "city_id" => "3",
            "slug" => "mahdasht",
            "name" => "ماهدشت",
            "latitude" => 35.743391,
            "longitude" => 50.795202,
            "radius" => "3000"
        ],
        [
            "id" => 316,
            "city_id" => "3",
            "slug" => "mohammadshahr",
            "name" => "محمد شهر",
            "latitude" => 35.752427,
            "longitude" => 50.901976,
            "radius" => "3000"
        ],
        [
            "id" => 317,
            "city_id" => "3",
            "slug" => "nabovvatsquare",
            "name" => "میدان نبوت",
            "latitude" => 35.843006,
            "longitude" => 50.988904,
            "radius" => "800"
        ],
        [
            "id" => 318,
            "city_id" => "3",
            "slug" => "meshkindasht",
            "name" => "مشکین دشت",
            "latitude" => 35.747867,
            "longitude" => 50.940428,
            "radius" => "1500"
        ],
        [
            "id" => 319,
            "city_id" => "3",
            "slug" => "mesbah",
            "name" => "مصباح",
            "latitude" => 35.801286,
            "longitude" => 50.996325,
            "radius" => "1000"
        ],
        [
            "id" => 320,
            "city_id" => "3",
            "slug" => "malard",
            "name" => "ملارد",
            "latitude" => 35.683841,
            "longitude" => 50.967228,
            "radius" => "2000"
        ],
        [
            "id" => 321,
            "city_id" => "3",
            "slug" => "manzarieh",
            "name" => "منظریه",
            "latitude" => 35.752904,
            "longitude" => 50.998436,
            "radius" => "1000"
        ],
        [
            "id" => 322,
            "city_id" => "3",
            "slug" => "mehrshahr",
            "name" => "مهرشهر",
            "latitude" => 35.800976,
            "longitude" => 50.890903,
            "radius" => "5000"
        ],
        [
            "id" => 323,
            "city_id" => "3",
            "slug" => "mehrvilla",
            "name" => "مهرویلا",
            "latitude" => 35.812288,
            "longitude" => 50.956628,
            "radius" => "1500"
        ],
        [
            "id" => 324,
            "city_id" => "3",
            "slug" => "hashtgerd",
            "name" => "هشتگرد",
            "latitude" => 35.964112,
            "longitude" => 50.685846,
            "radius" => "2300"
        ],
        [
            "id" => 325,
            "city_id" => "3",
            "slug" => "haftetir",
            "name" => "هفت تیر",
            "latitude" => 35.703494,
            "longitude" => 50.978763,
            "radius" => "1000"
        ],
        [
            "id" => 326,
            "city_id" => "4",
            "slug" => "17shahrivar",
            "name" => "۱۷ شهریور",
            "latitude" => 36.272718,
            "longitude" => 59.613255,
            "radius" => "1500"
        ],
        [
            "id" => 327,
            "city_id" => "4",
            "slug" => "aboutaleb",
            "name" => "ابوطالب",
            "latitude" => 36.323667,
            "longitude" => 59.593091,
            "radius" => "1000"
        ],
        [
            "id" => 328,
            "city_id" => "4",
            "slug" => "ahmadabad",
            "name" => "احمدآباد",
            "latitude" => 35.129938,
            "longitude" => 59.340452,
            "radius" => "5000"
        ],
        [
            "id" => 329,
            "city_id" => "4",
            "slug" => "azadshahr",
            "name" => "آزادشهر",
            "latitude" => 36.333615,
            "longitude" => 59.529185,
            "radius" => "700"
        ],
        [
            "id" => 330,
            "city_id" => "4",
            "slug" => "emamat",
            "name" => "امامت",
            "latitude" => 36.335689,
            "longitude" => 59.537315,
            "radius" => "900"
        ],
        [
            "id" => 331,
            "city_id" => "4",
            "slug" => "emamkhomeini",
            "name" => "امام خمینی",
            "latitude" => 36.289513,
            "longitude" => 59.60349,
            "radius" => "800"
        ],
        [
            "id" => 332,
            "city_id" => "4",
            "slug" => "emamreza",
            "name" => "امام رضا",
            "latitude" => 36.273497,
            "longitude" => 59.599006,
            "radius" => "700"
        ],
        [
            "id" => 333,
            "city_id" => "4",
            "slug" => "andisheh",
            "name" => "اندیشه",
            "latitude" => 36.36776,
            "longitude" => 59.521048,
            "radius" => "1000"
        ],
        [
            "id" => 334,
            "city_id" => "4",
            "slug" => "irajmirzablvd",
            "name" => "بلوار ایرج میرزا",
            "latitude" => 36.332155,
            "longitude" => 59.529795,
            "radius" => "400"
        ],
        [
            "id" => 335,
            "city_id" => "4",
            "slug" => "elahiyehblvd",
            "name" => "بلوار الهیه",
            "latitude" => 36.367475,
            "longitude" => 59.488008,
            "radius" => "600"
        ],
        [
            "id" => 336,
            "city_id" => "4",
            "slug" => "bolvartoos",
            "name" => "بلوار توس",
            "latitude" => 36.34595,
            "longitude" => 59.566244,
            "radius" => "2000"
        ],
        [
            "id" => 337,
            "city_id" => "4",
            "slug" => "ferdowsiboulevard",
            "name" => "بلوار فردوسی",
            "latitude" => 36.325062,
            "longitude" => 59.555072,
            "radius" => "800"
        ],
        [
            "id" => 338,
            "city_id" => "4",
            "slug" => "pirouzi",
            "name" => "پیروزی",
            "latitude" => 36.310564,
            "longitude" => 59.512614,
            "radius" => "2000"
        ],
        [
            "id" => 339,
            "city_id" => "4",
            "slug" => "torbatheydarieh",
            "name" => "تربت حیدریه",
            "latitude" => 35.264457,
            "longitude" => 59.221373,
            "radius" => "7000"
        ],
        [
            "id" => 340,
            "city_id" => "4",
            "slug" => "tooraj",
            "name" => "تورج",
            "latitude" => 36.308852,
            "longitude" => 59.584212,
            "radius" => "1000"
        ],
        [
            "id" => 341,
            "city_id" => "4",
            "slug" => "janbaz",
            "name" => "جانباز",
            "latitude" => 36.332557,
            "longitude" => 59.561841,
            "radius" => "900"
        ],
        [
            "id" => 342,
            "city_id" => "4",
            "slug" => "lashkarintersection",
            "name" => "چهارراه لشکر",
            "latitude" => 36.281228,
            "longitude" => 59.595792,
            "radius" => "500"
        ],
        [
            "id" => 343,
            "city_id" => "4",
            "slug" => "holyshrine",
            "name" => "حرم مطهر",
            "latitude" => 36.290479,
            "longitude" => 59.620369,
            "radius" => "1200"
        ],
        [
            "id" => 344,
            "city_id" => "4",
            "slug" => "khayyam",
            "name" => "خیام",
            "latitude" => 36.337638,
            "longitude" => 59.582648,
            "radius" => "1000"
        ],
        [
            "id" => 345,
            "city_id" => "4",
            "slug" => "daneshamooz",
            "name" => "دانش آموز",
            "latitude" => 36.338622,
            "longitude" => 59.517543,
            "radius" => "800"
        ],
        [
            "id" => 346,
            "city_id" => "4",
            "slug" => "daneshjoo",
            "name" => "دانشجو",
            "latitude" => 36.334822,
            "longitude" => 59.500935,
            "radius" => "600"
        ],
        [
            "id" => 347,
            "city_id" => "4",
            "slug" => "rahnamaei",
            "name" => "راهنمایی",
            "latitude" => 36.302204,
            "longitude" => 59.570216,
            "radius" => "800"
        ],
        [
            "id" => 348,
            "city_id" => "4",
            "slug" => "resalat",
            "name" => "رسالت",
            "latitude" => 36.329426,
            "longitude" => 59.552994,
            "radius" => "600"
        ],
        [
            "id" => 349,
            "city_id" => "4",
            "slug" => "rezashahr",
            "name" => "رضاشهر",
            "latitude" => 36.289851,
            "longitude" => 59.543779,
            "radius" => "900"
        ],
        [
            "id" => 350,
            "city_id" => "4",
            "slug" => "sadjadshahr",
            "name" => "سجادشهر",
            "latitude" => 36.316534,
            "longitude" => 59.554696,
            "radius" => "1000"
        ],
        [
            "id" => 351,
            "city_id" => "4",
            "slug" => "seyyedrazi",
            "name" => "سید رضی",
            "latitude" => 36.334117,
            "longitude" => 59.520939,
            "radius" => "500"
        ],
        [
            "id" => 352,
            "city_id" => "4",
            "slug" => "sarafrazan",
            "name" => "سرافرازان",
            "latitude" => 36.299284,
            "longitude" => 59.509769,
            "radius" => "1000"
        ],
        [
            "id" => 353,
            "city_id" => "4",
            "slug" => "sadi",
            "name" => "سعدی",
            "latitude" => 36.294172,
            "longitude" => 59.601161,
            "radius" => "600"
        ],
        [
            "id" => 354,
            "city_id" => "4",
            "slug" => "sanabad",
            "name" => "سناباد",
            "latitude" => 36.298533,
            "longitude" => 59.586171,
            "radius" => "1000"
        ],
        [
            "id" => 355,
            "city_id" => "4",
            "slug" => "shandiz",
            "name" => "شاندیز",
            "latitude" => 36.39625,
            "longitude" => 59.308566,
            "radius" => "1500"
        ],
        [
            "id" => 356,
            "city_id" => "4",
            "slug" => "beheshti",
            "name" => "شهید بهشتی",
            "latitude" => 36.2838,
            "longitude" => 59.572517,
            "radius" => "500"
        ],
        [
            "id" => 357,
            "city_id" => "4",
            "slug" => "rajaee",
            "name" => "شهرک شهید رجایی",
            "latitude" => 36.266651,
            "longitude" => 59.674465,
            "radius" => "1700"
        ],
        [
            "id" => 358,
            "city_id" => "4",
            "slug" => "sayyadshirazi",
            "name" => "صیاد شیرازی",
            "latitude" => 36.31392,
            "longitude" => 59.477,
            "radius" => "600"
        ],
        [
            "id" => 359,
            "city_id" => "4",
            "slug" => "saremi",
            "name" => "صارمی",
            "latitude" => 36.317152,
            "longitude" => 59.508632,
            "radius" => "1000"
        ],
        [
            "id" => 360,
            "city_id" => "4",
            "slug" => "tabarsi",
            "name" => "طبرسی",
            "latitude" => 36.319658,
            "longitude" => 59.666692,
            "radius" => "1200"
        ],
        [
            "id" => 361,
            "city_id" => "4",
            "slug" => "toroq",
            "name" => "طرق",
            "latitude" => 36.205654,
            "longitude" => 59.661748,
            "radius" => "600"
        ],
        [
            "id" => 362,
            "city_id" => "4",
            "slug" => "torghabeh",
            "name" => "طرقبه",
            "latitude" => 36.315038,
            "longitude" => 59.388506,
            "radius" => "1500"
        ],
        [
            "id" => 363,
            "city_id" => "4",
            "slug" => "tollab",
            "name" => "طلاب",
            "latitude" => 36.299973,
            "longitude" => 59.650242,
            "radius" => "1500"
        ],
        [
            "id" => 364,
            "city_id" => "4",
            "slug" => "ebadi",
            "name" => "عبادی",
            "latitude" => 36.321408,
            "longitude" => 59.619133,
            "radius" => "600"
        ],
        [
            "id" => 365,
            "city_id" => "4",
            "slug" => "abdolmotalleb",
            "name" => "عبدالمطلب",
            "latitude" => 36.318946,
            "longitude" => 59.606779,
            "radius" => "400"
        ],
        [
            "id" => 366,
            "city_id" => "4",
            "slug" => "faramarzabbasi",
            "name" => "فرامرز عباسی",
            "latitude" => 36.332755,
            "longitude" => 59.550363,
            "radius" => "1000"
        ],
        [
            "id" => 367,
            "city_id" => "4",
            "slug" => "felestin",
            "name" => "فلسطین",
            "latitude" => 36.306075,
            "longitude" => 59.563514,
            "radius" => "1200"
        ],
        [
            "id" => 368,
            "city_id" => "4",
            "slug" => "barqsquare",
            "name" => "فلکه برق",
            "latitude" => 36.273648,
            "longitude" => 59.603394,
            "radius" => "400"
        ],
        [
            "id" => 369,
            "city_id" => "4",
            "slug" => "falakehzed",
            "name" => "فلکه ضد",
            "latitude" => 36.268084,
            "longitude" => 59.59866,
            "radius" => "300"
        ],
        [
            "id" => 370,
            "city_id" => "4",
            "slug" => "ghasemabad",
            "name" => "قاسم آباد (شهرک غرب)",
            "latitude" => 36.359081,
            "longitude" => 59.507708,
            "radius" => "1500"
        ],
        [
            "id" => 371,
            "city_id" => "4",
            "slug" => "qaem",
            "name" => "قائم",
            "latitude" => 36.332175,
            "longitude" => 59.583484,
            "radius" => "600"
        ],
        [
            "id" => 372,
            "city_id" => "4",
            "slug" => "ghoochan",
            "name" => "قوچان",
            "latitude" => 37.108474,
            "longitude" => 58.500386,
            "radius" => "5000"
        ],
        [
            "id" => 373,
            "city_id" => "4",
            "slug" => "kashmar",
            "name" => "کاشمر",
            "latitude" => 35.229486,
            "longitude" => 58.451901,
            "radius" => "10000"
        ],
        [
            "id" => 374,
            "city_id" => "4",
            "slug" => "kolahdouz",
            "name" => "کلاهدوز",
            "latitude" => 36.311148,
            "longitude" => 59.581554,
            "radius" => "700"
        ],
        [
            "id" => 375,
            "city_id" => "4",
            "slug" => "kowsar",
            "name" => "کوثر",
            "latitude" => 36.318005,
            "longitude" => 59.516496,
            "radius" => "1000"
        ],
        [
            "id" => 376,
            "city_id" => "4",
            "slug" => "kuy-e-mahdi",
            "name" => "کوی مهدی",
            "latitude" => 36.243325,
            "longitude" => 59.599513,
            "radius" => "1200"
        ],
        [
            "id" => 377,
            "city_id" => "4",
            "slug" => "koohsangi",
            "name" => "کوهسنگی",
            "latitude" => 36.2838,
            "longitude" => 59.572517,
            "radius" => "1500"
        ],
        [
            "id" => 378,
            "city_id" => "4",
            "slug" => "eastgaz",
            "name" => "گاز شرقی",
            "latitude" => 36.318598,
            "longitude" => 59.623937,
            "radius" => "800"
        ],
        [
            "id" => 379,
            "city_id" => "4",
            "slug" => "golbahar",
            "name" => "گلبهار",
            "latitude" => 36.571519,
            "longitude" => 59.174767,
            "radius" => "4000"
        ],
        [
            "id" => 380,
            "city_id" => "4",
            "slug" => "gonbadsabz",
            "name" => "گنبد سبز",
            "latitude" => 36.28617,
            "longitude" => 59.602621,
            "radius" => "300"
        ],
        [
            "id" => 381,
            "city_id" => "4",
            "slug" => "goharshad",
            "name" => "گوهرشاد",
            "latitude" => 36.28776,
            "longitude" => 59.615562,
            "radius" => "400"
        ],
        [
            "id" => 382,
            "city_id" => "4",
            "slug" => "ladan",
            "name" => "لادن",
            "latitude" => 36.32925,
            "longitude" => 59.473731,
            "radius" => "1000"
        ],
        [
            "id" => 383,
            "city_id" => "4",
            "slug" => "shohadasquare",
            "name" => "میدان شهدا",
            "latitude" => 36.298091,
            "longitude" => 59.606012,
            "radius" => "700"
        ],
        [
            "id" => 384,
            "city_id" => "4",
            "slug" => "adlekhomeinisquare",
            "name" => "میدان عدل خمینی",
            "latitude" => 36.27479,
            "longitude" => 59.592094,
            "radius" => "300"
        ],
        [
            "id" => 385,
            "city_id" => "4",
            "slug" => "mosalla",
            "name" => "مصلی",
            "latitude" => 36.272346,
            "longitude" => 59.633074,
            "radius" => "1000"
        ],
        [
            "id" => 386,
            "city_id" => "4",
            "slug" => "southmotahhari",
            "name" => "مطهری جنوبی",
            "latitude" => 36.304153,
            "longitude" => 59.594164,
            "radius" => "600"
        ],
        [
            "id" => 387,
            "city_id" => "4",
            "slug" => "northmotahhari",
            "name" => "مطهری شمالی",
            "latitude" => 36.312418,
            "longitude" => 59.602983,
            "radius" => "1000"
        ],
        [
            "id" => 388,
            "city_id" => "4",
            "slug" => "moallem",
            "name" => "معلم",
            "latitude" => 36.334735,
            "longitude" => 59.508752,
            "radius" => "1000"
        ],
        [
            "id" => 389,
            "city_id" => "4",
            "slug" => "mousavighoochani",
            "name" => "موسوی قوچانی",
            "latitude" => 36.321369,
            "longitude" => 59.586055,
            "radius" => "600"
        ],
        [
            "id" => 390,
            "city_id" => "4",
            "slug" => "nofellowshatow",
            "name" => "نوفل لو",
            "latitude" => 36.296163,
            "longitude" => 59.550773,
            "radius" => "700"
        ],
        [
            "id" => 391,
            "city_id" => "4",
            "slug" => "hashemieh",
            "name" => "هاشمیه",
            "latitude" => 36.317924,
            "longitude" => 59.509818,
            "radius" => "1000"
        ],
        [
            "id" => 392,
            "city_id" => "4",
            "slug" => "hedayat",
            "name" => "هدایت",
            "latitude" => 36.330101,
            "longitude" => 59.603577,
            "radius" => "1000"
        ],
        [
            "id" => 393,
            "city_id" => "4",
            "slug" => "haftetir",
            "name" => "هفت تیر",
            "latitude" => 36.312065,
            "longitude" => 59.48763,
            "radius" => "400"
        ],
        [
            "id" => 394,
            "city_id" => "4",
            "slug" => "honarestan",
            "name" => "هنرستان",
            "latitude" => 36.323225,
            "longitude" => 59.508331,
            "radius" => "600"
        ],
        [
            "id" => 395,
            "city_id" => "4",
            "slug" => "vakilabad",
            "name" => "وکیل آباد",
            "latitude" => 36.329866,
            "longitude" => 59.488943,
            "radius" => "1200"
        ],
        [
            "id" => 396,
            "city_id" => "5",
            "slug" => "ebnesina",
            "name" => "ابن سینا",
            "latitude" => 32.672594,
            "longitude" => 51.67937,
            "radius" => "1000"
        ],
        [
            "id" => 397,
            "city_id" => "5",
            "slug" => "atashgah",
            "name" => "آتشگاه",
            "latitude" => 32.649542,
            "longitude" => 51.587993,
            "radius" => "2000"
        ],
        [
            "id" => 398,
            "city_id" => "5",
            "slug" => "bidabad",
            "name" => "بید آباد",
            "latitude" => 32.66955,
            "longitude" => 51.660877,
            "radius" => "1200"
        ],
        [
            "id" => 399,
            "city_id" => "5",
            "slug" => "bozorgmehr",
            "name" => "بزرگمهر",
            "latitude" => 32.650529,
            "longitude" => 51.699017,
            "radius" => "1500"
        ],
        [
            "id" => 400,
            "city_id" => "5",
            "slug" => "baharestan",
            "name" => "بهارستان",
            "latitude" => 32.486376,
            "longitude" => 51.778135,
            "radius" => "2800"
        ],
        [
            "id" => 401,
            "city_id" => "5",
            "slug" => "parvin",
            "name" => "پروین",
            "latitude" => 32.679595,
            "longitude" => 51.718043,
            "radius" => "1300"
        ],
        [
            "id" => 402,
            "city_id" => "5",
            "slug" => "shiri",
            "name" => "پل شیری (صائب)",
            "latitude" => 32.645467,
            "longitude" => 51.647792,
            "radius" => "700"
        ],
        [
            "id" => 403,
            "city_id" => "5",
            "slug" => "vahid",
            "name" => "پل وحید",
            "latitude" => 32.640276,
            "longitude" => 51.640199,
            "radius" => "500"
        ],
        [
            "id" => 404,
            "city_id" => "5",
            "slug" => "tiran",
            "name" => "تیران",
            "latitude" => 32.684665,
            "longitude" => 51.664527,
            "radius" => "800"
        ],
        [
            "id" => 405,
            "city_id" => "5",
            "slug" => "jolfa",
            "name" => "جلفا",
            "latitude" => 32.63225,
            "longitude" => 51.655874,
            "radius" => "800"
        ],
        [
            "id" => 406,
            "city_id" => "5",
            "slug" => "chaharbaghkhajoo",
            "name" => "چهارباغ خواجو",
            "latitude" => 32.643617,
            "longitude" => 51.682984,
            "radius" => "800"
        ],
        [
            "id" => 407,
            "city_id" => "5",
            "slug" => "hoseinabad",
            "name" => "حسین آباد",
            "latitude" => 32.326126,
            "longitude" => 52.153377,
            "radius" => "1200"
        ],
        [
            "id" => 408,
            "city_id" => "5",
            "slug" => "hakimnezami",
            "name" => "حکیم نظامی",
            "latitude" => 32.722548,
            "longitude" => 51.683426,
            "radius" => "400"
        ],
        [
            "id" => 409,
            "city_id" => "5",
            "slug" => "khaghani",
            "name" => "خاقانی",
            "latitude" => 32.634552,
            "longitude" => 51.646497,
            "radius" => "600"
        ],
        [
            "id" => 410,
            "city_id" => "5",
            "slug" => "khayyam",
            "name" => "خیام",
            "latitude" => 32.644157,
            "longitude" => 51.64357,
            "radius" => "200"
        ],
        [
            "id" => 411,
            "city_id" => "5",
            "slug" => "khaneesfahan",
            "name" => "خانه اصفهان",
            "latitude" => 32.708647,
            "longitude" => 51.635054,
            "radius" => "2000"
        ],
        [
            "id" => 412,
            "city_id" => "5",
            "slug" => "khomeinishahr",
            "name" => "خمینی شهر",
            "latitude" => 32.687794,
            "longitude" => 51.539826,
            "radius" => "4000"
        ],
        [
            "id" => 413,
            "city_id" => "5",
            "slug" => "darvazehtehran",
            "name" => "دروازه تهران (میدان جمهوری)",
            "latitude" => 32.675027,
            "longitude" => 51.650682,
            "radius" => "1000"
        ],
        [
            "id" => 414,
            "city_id" => "5",
            "slug" => "darvazehshiraz",
            "name" => "دروازه شیراز (میدان آزادی)",
            "latitude" => 32.622258,
            "longitude" => 51.664463,
            "radius" => "800"
        ],
        [
            "id" => 415,
            "city_id" => "5",
            "slug" => "dowlatabad",
            "name" => "دولت آباد",
            "latitude" => 32.801762,
            "longitude" => 51.695596,
            "radius" => "1500"
        ],
        [
            "id" => 416,
            "city_id" => "5",
            "slug" => "robat",
            "name" => "رباط",
            "latitude" => 32.695099,
            "longitude" => 51.656925,
            "radius" => "600"
        ],
        [
            "id" => 417,
            "city_id" => "5",
            "slug" => "zarinshahr",
            "name" => "زرین شهر",
            "latitude" => 32.392935,
            "longitude" => 51.379889,
            "radius" => "1800"
        ],
        [
            "id" => 418,
            "city_id" => "5",
            "slug" => "zeynabieh",
            "name" => "زینبیه",
            "latitude" => 32.759187,
            "longitude" => 51.749669,
            "radius" => "2000"
        ],
        [
            "id" => 419,
            "city_id" => "5",
            "slug" => "sepahanshahr",
            "name" => "سپاهان شهر",
            "latitude" => 32.549796,
            "longitude" => 51.666834,
            "radius" => "2000"
        ],
        [
            "id" => 420,
            "city_id" => "5",
            "slug" => "sichan",
            "name" => "سیچان",
            "latitude" => 32.628749,
            "longitude" => 51.659925,
            "radius" => "1500"
        ],
        [
            "id" => 421,
            "city_id" => "5",
            "slug" => "soroush",
            "name" => "سروش",
            "latitude" => 32.672517,
            "longitude" => 51.699557,
            "radius" => "1500"
        ],
        [
            "id" => 422,
            "city_id" => "5",
            "slug" => "serahsimin",
            "name" => "سه راه سیمین",
            "latitude" => 32.624105,
            "longitude" => 51.626627,
            "radius" => "500"
        ],
        [
            "id" => 423,
            "city_id" => "5",
            "slug" => "shahinshahr",
            "name" => "شاهین شهر",
            "latitude" => 32.886061,
            "longitude" => 51.549117,
            "radius" => "6000"
        ],
        [
            "id" => 424,
            "city_id" => "5",
            "slug" => "sheykhbahaei",
            "name" => "شیخ بهایی",
            "latitude" => 32.655275,
            "longitude" => 51.656336,
            "radius" => "600"
        ],
        [
            "id" => 425,
            "city_id" => "5",
            "slug" => "sheykhsadooghjonoobi",
            "name" => "شیخ صدوق جنوبی",
            "latitude" => 32.618627,
            "longitude" => 51.670564,
            "radius" => "500"
        ],
        [
            "id" => 426,
            "city_id" => "5",
            "slug" => "sheykhsadooghshomali",
            "name" => "شیخ صدوق شمالی",
            "latitude" => 32.631205,
            "longitude" => 51.671637,
            "radius" => "1000"
        ],
        [
            "id" => 427,
            "city_id" => "5",
            "slug" => "shahreza",
            "name" => "شهرضا",
            "latitude" => 32.002604,
            "longitude" => 51.859074,
            "radius" => "3000"
        ],
        [
            "id" => 428,
            "city_id" => "5",
            "slug" => "abbasabad",
            "name" => "عباس آباد اصفهان",
            "latitude" => 32.646953,
            "longitude" => 51.659849,
            "radius" => "800"
        ],
        [
            "id" => 429,
            "city_id" => "5",
            "slug" => "fooladshahr",
            "name" => "فولادشهر",
            "latitude" => 32.522475,
            "longitude" => 51.357586,
            "radius" => "3000"
        ],
        [
            "id" => 430,
            "city_id" => "5",
            "slug" => "lonban",
            "name" => "لنبان",
            "latitude" => 32.651151,
            "longitude" => 51.647744,
            "radius" => "800"
        ],
        [
            "id" => 431,
            "city_id" => "5",
            "slug" => "mobarake",
            "name" => "مبارکه",
            "latitude" => 32.35065,
            "longitude" => 51.503155,
            "radius" => "3000"
        ],
        [
            "id" => 432,
            "city_id" => "5",
            "slug" => "mir",
            "name" => "میر",
            "latitude" => 32.635458,
            "longitude" => 51.668991,
            "radius" => "1000"
        ],
        [
            "id" => 433,
            "city_id" => "5",
            "slug" => "mardavich",
            "name" => "مرداویچ",
            "latitude" => 32.613677,
            "longitude" => 51.672424,
            "radius" => "1500"
        ],
        [
            "id" => 434,
            "city_id" => "5",
            "slug" => "moshtagh1",
            "name" => "مشتاق اول",
            "latitude" => 32.639396,
            "longitude" => 51.689225,
            "radius" => "600"
        ],
        [
            "id" => 435,
            "city_id" => "5",
            "slug" => "moshtagh2",
            "name" => "مشتاق دوم",
            "latitude" => 32.640199,
            "longitude" => 51.700302,
            "radius" => "600"
        ],
        [
            "id" => 436,
            "city_id" => "5",
            "slug" => "moshtaghsevvom",
            "name" => "مشتاق سوم",
            "latitude" => 32.623322,
            "longitude" => 51.739971,
            "radius" => "2000"
        ],
        [
            "id" => 437,
            "city_id" => "5",
            "slug" => "malekshahr",
            "name" => "ملک شهر",
            "latitude" => 32.721595,
            "longitude" => 51.649929,
            "radius" => "2000"
        ],
        [
            "id" => 438,
            "city_id" => "5",
            "slug" => "molavi",
            "name" => "مولوی",
            "latitude" => 32.686206,
            "longitude" => 51.681479,
            "radius" => "1000"
        ],
        [
            "id" => 439,
            "city_id" => "5",
            "slug" => "neshat",
            "name" => "نشاط",
            "latitude" => 32.654837,
            "longitude" => 51.683567,
            "radius" => "600"
        ],
        [
            "id" => 440,
            "city_id" => "5",
            "slug" => "hatef",
            "name" => "هاتف",
            "latitude" => 32.66383,
            "longitude" => 51.685024,
            "radius" => "500"
        ],
        [
            "id" => 441,
            "city_id" => "5",
            "slug" => "hashtbehesht",
            "name" => "هشت بهشت",
            "latitude" => 32.65425,
            "longitude" => 51.670243,
            "radius" => "1000"
        ],
        [
            "id" => 442,
            "city_id" => "7",
            "slug" => "adabiat",
            "name" => "ادبیات",
            "latitude" => 29.733089,
            "longitude" => 52.42944,
            "radius" => "500"
        ],
        [
            "id" => 443,
            "city_id" => "7",
            "slug" => "artesh",
            "name" => "ارتش",
            "latitude" => 29.601194,
            "longitude" => 52.525101,
            "radius" => "800"
        ],
        [
            "id" => 444,
            "city_id" => "7",
            "slug" => "eram",
            "name" => "ارم",
            "latitude" => 29.633503,
            "longitude" => 52.529712,
            "radius" => "1000"
        ],
        [
            "id" => 445,
            "city_id" => "7",
            "slug" => "atlasi",
            "name" => "اطلسی",
            "latitude" => 29.630024,
            "longitude" => 52.551257,
            "radius" => "500"
        ],
        [
            "id" => 446,
            "city_id" => "7",
            "slug" => "amirkabirblvd",
            "name" => "امیرکبیر",
            "latitude" => 29.613854,
            "longitude" => 52.48022,
            "radius" => "2000"
        ],
        [
            "id" => 447,
            "city_id" => "7",
            "slug" => "southbahonar",
            "name" => "باهنر جنوبی",
            "latitude" => 29.609908,
            "longitude" => 52.483793,
            "radius" => "400"
        ],
        [
            "id" => 448,
            "city_id" => "7",
            "slug" => "northbahonar",
            "name" => "باهنر شمالی",
            "latitude" => 29.6153,
            "longitude" => 52.486293,
            "radius" => "600"
        ],
        [
            "id" => 449,
            "city_id" => "7",
            "slug" => "besat",
            "name" => "بعثت",
            "latitude" => 29.620885,
            "longitude" => 52.507395,
            "radius" => "800"
        ],
        [
            "id" => 450,
            "city_id" => "7",
            "slug" => "rahmatblvd",
            "name" => "بلوار رحمت",
            "latitude" => 29.591929,
            "longitude" => 52.526805,
            "radius" => "3000"
        ],
        [
            "id" => 451,
            "city_id" => "7",
            "slug" => "edalatblvd",
            "name" => "بلوار عدالت",
            "latitude" => 29.585416,
            "longitude" => 52.507762,
            "radius" => "800"
        ],
        [
            "id" => 452,
            "city_id" => "7",
            "slug" => "fazilatblvd",
            "name" => "بلوار فضیلت",
            "latitude" => 29.601064,
            "longitude" => 52.575284,
            "radius" => "1200"
        ],
        [
            "id" => 453,
            "city_id" => "7",
            "slug" => "modarresblvd",
            "name" => "بلوار مدرس",
            "latitude" => 29.577539,
            "longitude" => 52.581578,
            "radius" => "2000"
        ],
        [
            "id" => 454,
            "city_id" => "7",
            "slug" => "banihashemi",
            "name" => "بنی هاشمی",
            "latitude" => 29.579908,
            "longitude" => 52.529951,
            "radius" => "800"
        ],
        [
            "id" => 455,
            "city_id" => "7",
            "slug" => "paramont",
            "name" => "پارامونت",
            "latitude" => 29.620329,
            "longitude" => 52.527206,
            "radius" => "600"
        ],
        [
            "id" => 456,
            "city_id" => "7",
            "slug" => "pasargad",
            "name" => "پاسارگاد",
            "latitude" => 29.593284,
            "longitude" => 52.499784,
            "radius" => "800"
        ],
        [
            "id" => 457,
            "city_id" => "7",
            "slug" => "pasdaran",
            "name" => "پاسداران",
            "latitude" => 29.628584,
            "longitude" => 52.476827,
            "radius" => "120"
        ],
        [
            "id" => 458,
            "city_id" => "7",
            "slug" => "dowran",
            "name" => "پایگاه هوایی",
            "latitude" => 29.557872,
            "longitude" => 52.591369,
            "radius" => "900"
        ],
        [
            "id" => 459,
            "city_id" => "7",
            "slug" => "ghadirbridge",
            "name" => "پل غدیر",
            "latitude" => 29.57716,
            "longitude" => 52.581773,
            "radius" => "500"
        ],
        [
            "id" => 460,
            "city_id" => "7",
            "slug" => "tachara",
            "name" => "تاچارا",
            "latitude" => 29.693859,
            "longitude" => 52.470338,
            "radius" => "600"
        ],
        [
            "id" => 461,
            "city_id" => "7",
            "slug" => "jomhouriblvd",
            "name" => "جمهوری",
            "latitude" => 29.640153,
            "longitude" => 52.542163,
            "radius" => "1500"
        ],
        [
            "id" => 462,
            "city_id" => "7",
            "slug" => "chamran",
            "name" => "چمران",
            "latitude" => 29.65461,
            "longitude" => 52.493238,
            "radius" => "2500"
        ],
        [
            "id" => 463,
            "city_id" => "7",
            "slug" => "kholbarin",
            "name" => "خلدبرین",
            "latitude" => 29.623573,
            "longitude" => 52.513941,
            "radius" => "600"
        ],
        [
            "id" => 464,
            "city_id" => "7",
            "slug" => "delgosha",
            "name" => "دلگشا",
            "latitude" => 29.614321,
            "longitude" => 52.578087,
            "radius" => "900"
        ],
        [
            "id" => 465,
            "city_id" => "7",
            "slug" => "zibashahr",
            "name" => "زیباشهر",
            "latitude" => 29.6612,
            "longitude" => 52.56117,
            "radius" => "800"
        ],
        [
            "id" => 466,
            "city_id" => "7",
            "slug" => "zargari",
            "name" => "زرگری",
            "latitude" => 29.62345,
            "longitude" => 52.487641,
            "radius" => "600"
        ],
        [
            "id" => 467,
            "city_id" => "7",
            "slug" => "zand",
            "name" => "زند",
            "latitude" => 29.620722,
            "longitude" => 52.537781,
            "radius" => "1500"
        ],
        [
            "id" => 468,
            "city_id" => "7",
            "slug" => "siahatgar",
            "name" => "سیاحتگر",
            "latitude" => 29.609428,
            "longitude" => 52.514611,
            "radius" => "800"
        ],
        [
            "id" => 469,
            "city_id" => "7",
            "slug" => "setad",
            "name" => "ستاد",
            "latitude" => 29.624215,
            "longitude" => 52.533199,
            "radius" => "1000"
        ],
        [
            "id" => 470,
            "city_id" => "7",
            "slug" => "sattarkhan",
            "name" => "ستارخان",
            "latitude" => 29.629801,
            "longitude" => 52.498169,
            "radius" => "800"
        ],
        [
            "id" => 471,
            "city_id" => "7",
            "slug" => "seraj",
            "name" => "سراج",
            "latitude" => 29.592531,
            "longitude" => 52.486872,
            "radius" => "1000"
        ],
        [
            "id" => 472,
            "city_id" => "7",
            "slug" => "sardaran",
            "name" => "سرداران",
            "latitude" => 29.58618,
            "longitude" => 52.59096,
            "radius" => "1000"
        ],
        [
            "id" => 473,
            "city_id" => "7",
            "slug" => "southsafir",
            "name" => "سفیر جنوبی",
            "latitude" => 29.593851,
            "longitude" => 52.491551,
            "radius" => "800"
        ],
        [
            "id" => 474,
            "city_id" => "7",
            "slug" => "northsafir",
            "name" => "سفیر شمالی",
            "latitude" => 29.603407,
            "longitude" => 52.502561,
            "radius" => "700"
        ],
        [
            "id" => 475,
            "city_id" => "7",
            "slug" => "sadicinema",
            "name" => "سینما سعدی",
            "latitude" => 29.62171,
            "longitude" => 52.523215,
            "radius" => "400"
        ],
        [
            "id" => 476,
            "city_id" => "7",
            "slug" => "shahrakebeheshti",
            "name" => "شهرک بهشتی",
            "latitude" => 29.722247,
            "longitude" => 52.440963,
            "radius" => "1200"
        ],
        [
            "id" => 477,
            "city_id" => "7",
            "slug" => "parvaztown",
            "name" => "شهرک پرواز",
            "latitude" => 29.588248,
            "longitude" => 52.589666,
            "radius" => "600"
        ],
        [
            "id" => 478,
            "city_id" => "7",
            "slug" => "shahrakeroknabad",
            "name" => "شهرک رکن آباد",
            "latitude" => 29.679769,
            "longitude" => 52.550768,
            "radius" => "2000"
        ],
        [
            "id" => 479,
            "city_id" => "7",
            "slug" => "golestan",
            "name" => "شهرک گلستان",
            "latitude" => 29.752651,
            "longitude" => 52.412381,
            "radius" => "1500"
        ],
        [
            "id" => 480,
            "city_id" => "7",
            "slug" => "motahharitown",
            "name" => "شهرک مطهری",
            "latitude" => 29.578752,
            "longitude" => 52.514268,
            "radius" => "600"
        ],
        [
            "id" => 481,
            "city_id" => "7",
            "slug" => "sadraphase2",
            "name" => "صدرا فاز دو",
            "latitude" => 29.828537,
            "longitude" => 52.450447,
            "radius" => "4000"
        ],
        [
            "id" => 482,
            "city_id" => "7",
            "slug" => "sadraphase1",
            "name" => "صدرا فاز یک",
            "latitude" => 29.796962,
            "longitude" => 52.514477,
            "radius" => "3000"
        ],
        [
            "id" => 483,
            "city_id" => "7",
            "slug" => "sanayeblvd",
            "name" => "صنایع (میرزای شیرازی)",
            "latitude" => 29.695299,
            "longitude" => 52.465783,
            "radius" => "2000"
        ],
        [
            "id" => 484,
            "city_id" => "7",
            "slug" => "afifabad",
            "name" => "عفیف آباد",
            "latitude" => 29.626665,
            "longitude" => 52.504878,
            "radius" => "1000"
        ],
        [
            "id" => 485,
            "city_id" => "7",
            "slug" => "fakhrabad",
            "name" => "فخرآباد",
            "latitude" => 29.610079,
            "longitude" => 52.526279,
            "radius" => "700"
        ],
        [
            "id" => 486,
            "city_id" => "7",
            "slug" => "forsatshirazi",
            "name" => "فرصت شیرازی",
            "latitude" => 29.56746,
            "longitude" => 52.596941,
            "radius" => "900"
        ],
        [
            "id" => 487,
            "city_id" => "7",
            "slug" => "fergaz",
            "name" => "فرگاز",
            "latitude" => 29.586992,
            "longitude" => 52.50267,
            "radius" => "900"
        ],
        [
            "id" => 488,
            "city_id" => "7",
            "slug" => "farhangshahr",
            "name" => "فرهنگ شهر",
            "latitude" => 29.656822,
            "longitude" => 52.455146,
            "radius" => "2000"
        ],
        [
            "id" => 489,
            "city_id" => "7",
            "slug" => "fasa",
            "name" => "فسا",
            "latitude" => 28.941004,
            "longitude" => 53.642292,
            "radius" => "6000"
        ],
        [
            "id" => 490,
            "city_id" => "7",
            "slug" => "azadisq",
            "name" => "فلکه گاز (آزادی)",
            "latitude" => 29.632195,
            "longitude" => 52.53851,
            "radius" => "600"
        ],
        [
            "id" => 491,
            "city_id" => "7",
            "slug" => "eastghoddusi",
            "name" => "قدوسی شرقی",
            "latitude" => 29.62345,
            "longitude" => 52.487641,
            "radius" => "1000"
        ],
        [
            "id" => 492,
            "city_id" => "7",
            "slug" => "westghoddusi",
            "name" => "قدوسی غربی",
            "latitude" => 29.62345,
            "longitude" => 52.487641,
            "radius" => "1000"
        ],
        [
            "id" => 493,
            "city_id" => "7",
            "slug" => "qasrdasht",
            "name" => "قصردشت",
            "latitude" => 29.642004,
            "longitude" => 52.497879,
            "radius" => "800"
        ],
        [
            "id" => 494,
            "city_id" => "7",
            "slug" => "kazerun",
            "name" => "کازرون",
            "latitude" => 29.625616,
            "longitude" => 51.651278,
            "radius" => "6000"
        ],
        [
            "id" => 495,
            "city_id" => "7",
            "slug" => "kolbeh",
            "name" => "کلبه",
            "latitude" => 29.615024,
            "longitude" => 52.569118,
            "radius" => "600"
        ],
        [
            "id" => 496,
            "city_id" => "7",
            "slug" => "kuyezahra",
            "name" => "کوی زهرا",
            "latitude" => 29.5907,
            "longitude" => 52.567847,
            "radius" => "800"
        ],
        [
            "id" => 497,
            "city_id" => "7",
            "slug" => "goldashthafez",
            "name" => "گلدشت حافظ",
            "latitude" => 29.733089,
            "longitude" => 52.42944,
            "radius" => "1200"
        ],
        [
            "id" => 498,
            "city_id" => "7",
            "slug" => "mianrood",
            "name" => "میانرود",
            "latitude" => 29.566635,
            "longitude" => 52.487236,
            "radius" => "2500"
        ],
        [
            "id" => 499,
            "city_id" => "7",
            "slug" => "moallemsq",
            "name" => "میدان معلم",
            "latitude" => 29.639434,
            "longitude" => 52.463707,
            "radius" => "600"
        ],
        [
            "id" => 500,
            "city_id" => "7",
            "slug" => "marvdasht",
            "name" => "مرودشت",
            "latitude" => 29.883213,
            "longitude" => 52.816086,
            "radius" => "5000"
        ],
        [
            "id" => 501,
            "city_id" => "7",
            "slug" => "motahhari",
            "name" => "مطهری",
            "latitude" => 29.629832,
            "longitude" => 52.47945,
            "radius" => "500"
        ],
        [
            "id" => 502,
            "city_id" => "7",
            "slug" => "moaliabad",
            "name" => "معالی آباد",
            "latitude" => 29.682278,
            "longitude" => 52.466242,
            "radius" => "1500"
        ],
        [
            "id" => 503,
            "city_id" => "7",
            "slug" => "mollasadra",
            "name" => "ملاصدرا",
            "latitude" => 29.628483,
            "longitude" => 52.519383,
            "radius" => "900"
        ],
        [
            "id" => 504,
            "city_id" => "7",
            "slug" => "nasr",
            "name" => "نصر",
            "latitude" => 29.605539,
            "longitude" => 52.581712,
            "radius" => "1200"
        ],
        [
            "id" => 505,
            "city_id" => "7",
            "slug" => "southhemmat",
            "name" => "همت جنوبی (ایمان)",
            "latitude" => 29.635382,
            "longitude" => 52.460254,
            "radius" => "900"
        ],
        [
            "id" => 506,
            "city_id" => "7",
            "slug" => "northhemmat",
            "name" => "همت شمالی (ایمان)",
            "latitude" => 29.642528,
            "longitude" => 52.46644,
            "radius" => "900"
        ],
        [
            "id" => 507,
            "city_id" => "7",
            "slug" => "valfajr",
            "name" => "والفجر",
            "latitude" => 29.605122,
            "longitude" => 52.45697,
            "radius" => "800"
        ],
        [
            "id" => 508,
            "city_id" => "8",
            "slug" => "ariyashahr",
            "name" => "آریاشهر",
            "latitude" => 31.310531,
            "longitude" => 48.700677,
            "radius" => "300"
        ],
        [
            "id" => 509,
            "city_id" => "8",
            "slug" => "amaniyeh",
            "name" => "امانیه",
            "latitude" => 31.320059,
            "longitude" => 48.666497,
            "radius" => "400"
        ],
        [
            "id" => 510,
            "city_id" => "8",
            "slug" => "bahonar",
            "name" => "باهنر",
            "latitude" => 31.29135,
            "longitude" => 48.72651,
            "radius" => "1000"
        ],
        [
            "id" => 511,
            "city_id" => "8",
            "slug" => "baharestan",
            "name" => "بهارستان",
            "latitude" => 31.283392,
            "longitude" => 48.623214,
            "radius" => "1000"
        ],
        [
            "id" => 512,
            "city_id" => "8",
            "slug" => "padadshahr",
            "name" => "پادادشهر",
            "latitude" => 31.309419,
            "longitude" => 48.6922,
            "radius" => "1000"
        ],
        [
            "id" => 513,
            "city_id" => "8",
            "slug" => "pardis",
            "name" => "پردیس",
            "latitude" => 31.286179,
            "longitude" => 48.593988,
            "radius" => "2000"
        ],
        [
            "id" => 514,
            "city_id" => "8",
            "slug" => "piroozi",
            "name" => "پیروزی",
            "latitude" => 31.319049,
            "longitude" => 48.6941,
            "radius" => "200"
        ],
        [
            "id" => 515,
            "city_id" => "8",
            "slug" => "hasirabad",
            "name" => "حصیرآباد",
            "latitude" => 31.323828,
            "longitude" => 48.713733,
            "radius" => "300"
        ],
        [
            "id" => 516,
            "city_id" => "8",
            "slug" => "daghagheleh",
            "name" => "دغاغله",
            "latitude" => 31.390489,
            "longitude" => 48.68999,
            "radius" => "800"
        ],
        [
            "id" => 517,
            "city_id" => "8",
            "slug" => "resalat",
            "name" => "رسالت",
            "latitude" => 31.296759,
            "longitude" => 48.747261,
            "radius" => "900"
        ],
        [
            "id" => 518,
            "city_id" => "8",
            "slug" => "zibashahr",
            "name" => "زیباشهر",
            "latitude" => 31.30498,
            "longitude" => 48.700349,
            "radius" => "900"
        ],
        [
            "id" => 519,
            "city_id" => "8",
            "slug" => "zeytunkargari",
            "name" => "زیتون کارگری",
            "latitude" => 31.335595,
            "longitude" => 48.71296,
            "radius" => "1200"
        ],
        [
            "id" => 520,
            "city_id" => "8",
            "slug" => "zeytunkarmandi",
            "name" => "زیتون کارمندی",
            "latitude" => 31.357173,
            "longitude" => 48.720696,
            "radius" => "1200"
        ],
        [
            "id" => 521,
            "city_id" => "8",
            "slug" => "zergan",
            "name" => "زرگان",
            "latitude" => 31.368607,
            "longitude" => 48.758365,
            "radius" => "500"
        ],
        [
            "id" => 522,
            "city_id" => "8",
            "slug" => "sepidar",
            "name" => "سپیدار",
            "latitude" => 31.30622,
            "longitude" => 48.735738,
            "radius" => "1000"
        ],
        [
            "id" => 523,
            "city_id" => "8",
            "slug" => "sisad-dastgah",
            "name" => "سیصد دستگاه",
            "latitude" => 31.289352,
            "longitude" => 48.761471,
            "radius" => "400"
        ],
        [
            "id" => 524,
            "city_id" => "8",
            "slug" => "shariatijonoobi",
            "name" => "شریعتی جنوبی",
            "latitude" => 31.294027,
            "longitude" => 48.674068,
            "radius" => "800"
        ],
        [
            "id" => 525,
            "city_id" => "8",
            "slug" => "shahrak-e-aghajari",
            "name" => "شهرک آغاجری",
            "latitude" => 31.31381,
            "longitude" => 48.757372,
            "radius" => "400"
        ],
        [
            "id" => 526,
            "city_id" => "8",
            "slug" => "shahrak-e-haffari",
            "name" => "شهرک حفاری",
            "latitude" => 31.317916,
            "longitude" => 48.749814,
            "radius" => "400"
        ],
        [
            "id" => 527,
            "city_id" => "8",
            "slug" => "shahrakdaneshgah",
            "name" => "شهرک دانشگاه",
            "latitude" => 31.293074,
            "longitude" => 48.609856,
            "radius" => "700"
        ],
        [
            "id" => 528,
            "city_id" => "8",
            "slug" => "shahraknaft",
            "name" => "شهرک نفت",
            "latitude" => 31.33484,
            "longitude" => 48.736132,
            "radius" => "1500"
        ],
        [
            "id" => 529,
            "city_id" => "8",
            "slug" => "saddastgah",
            "name" => "صد دستگاه",
            "latitude" => 31.293349,
            "longitude" => 48.714044,
            "radius" => "600"
        ],
        [
            "id" => 530,
            "city_id" => "8",
            "slug" => "taleghani",
            "name" => "طالقانی",
            "latitude" => 31.322147,
            "longitude" => 48.682951,
            "radius" => "250"
        ],
        [
            "id" => 531,
            "city_id" => "8",
            "slug" => "padad-phase-2",
            "name" => "فاز دو پاداد",
            "latitude" => 31.287628,
            "longitude" => 48.70589,
            "radius" => "600"
        ],
        [
            "id" => 532,
            "city_id" => "8",
            "slug" => "padadshahr-phase-1",
            "name" => "فاز یک پادادشهر",
            "latitude" => 31.294426,
            "longitude" => 48.693567,
            "radius" => "500"
        ],
        [
            "id" => 533,
            "city_id" => "8",
            "slug" => "farhangshahr",
            "name" => "فرهنگ شهر",
            "latitude" => 31.29973,
            "longitude" => 48.617506,
            "radius" => "700"
        ],
        [
            "id" => 534,
            "city_id" => "8",
            "slug" => "fooladshahr",
            "name" => "فولادشهر",
            "latitude" => 31.298511,
            "longitude" => 48.722944,
            "radius" => "800"
        ],
        [
            "id" => 535,
            "city_id" => "8",
            "slug" => "kianabad",
            "name" => "کیان آباد",
            "latitude" => 31.356293,
            "longitude" => 48.677276,
            "radius" => "500"
        ],
        [
            "id" => 536,
            "city_id" => "8",
            "slug" => "kianpars",
            "name" => "کیانپارس ",
            "latitude" => 31.350136,
            "longitude" => 48.682415,
            "radius" => "2000"
        ],
        [
            "id" => 537,
            "city_id" => "8",
            "slug" => "cantex",
            "name" => "کانتکس",
            "latitude" => 31.260263,
            "longitude" => 48.669983,
            "radius" => "700"
        ],
        [
            "id" => 538,
            "city_id" => "8",
            "slug" => "kianshahr",
            "name" => "کیانشهر",
            "latitude" => 31.369174,
            "longitude" => 48.638749,
            "radius" => "1500"
        ],
        [
            "id" => 539,
            "city_id" => "8",
            "slug" => "camplojonoobi",
            "name" => "کمپلو جنوبی (کوی انقلاب)",
            "latitude" => 31.320537,
            "longitude" => 48.650808,
            "radius" => "500"
        ],
        [
            "id" => 540,
            "city_id" => "8",
            "slug" => "camploshomali",
            "name" => "کمپلوی شمالی (لشکر)",
            "latitude" => 31.326733,
            "longitude" => 48.654241,
            "radius" => "800"
        ],
        [
            "id" => 541,
            "city_id" => "8",
            "slug" => "kut-abdollah",
            "name" => "کوت عبدالله",
            "latitude" => 31.23581,
            "longitude" => 48.655357,
            "radius" => "2000"
        ],
        [
            "id" => 542,
            "city_id" => "8",
            "slug" => "kooyramezan",
            "name" => "کوی رمضان",
            "latitude" => 31.31469,
            "longitude" => 48.726221,
            "radius" => "800"
        ],
        [
            "id" => 543,
            "city_id" => "8",
            "slug" => "koorosh",
            "name" => "کوروش (کوی ملت)",
            "latitude" => 31.362982,
            "longitude" => 48.736618,
            "radius" => "900"
        ],
        [
            "id" => 544,
            "city_id" => "8",
            "slug" => "soltanmanesh",
            "name" => "کوی سلطان منش",
            "latitude" => 31.338486,
            "longitude" => 48.718255,
            "radius" => "700"
        ],
        [
            "id" => 545,
            "city_id" => "8",
            "slug" => "kooyealavi",
            "name" => "کوی علوی",
            "latitude" => 31.313516,
            "longitude" => 48.629415,
            "radius" => "900"
        ],
        [
            "id" => 546,
            "city_id" => "8",
            "slug" => "farhangian",
            "name" => "کوی فرهنگیان",
            "latitude" => 31.359399,
            "longitude" => 48.757477,
            "radius" => "800"
        ],
        [
            "id" => 547,
            "city_id" => "8",
            "slug" => "kooy-e-modarres",
            "name" => "کوی مدرس",
            "latitude" => 31.294103,
            "longitude" => 48.68499,
            "radius" => "300"
        ],
        [
            "id" => 548,
            "city_id" => "8",
            "slug" => "mahdis",
            "name" => "کوی مهدیس",
            "latitude" => 31.279999,
            "longitude" => 48.696545,
            "radius" => "500"
        ],
        [
            "id" => 549,
            "city_id" => "8",
            "slug" => "nabovvat",
            "name" => "کوی نبوت",
            "latitude" => 31.299253,
            "longitude" => 48.73533,
            "radius" => "500"
        ],
        [
            "id" => 550,
            "city_id" => "8",
            "slug" => "kooyenaft",
            "name" => "کوی نفت",
            "latitude" => 31.322118,
            "longitude" => 48.744315,
            "radius" => "600"
        ],
        [
            "id" => 551,
            "city_id" => "8",
            "slug" => "golestan",
            "name" => "گلستان",
            "latitude" => 31.291524,
            "longitude" => 48.643566,
            "radius" => "2000"
        ],
        [
            "id" => 552,
            "city_id" => "8",
            "slug" => "lashkarabad",
            "name" => "لشکرآباد",
            "latitude" => 31.315093,
            "longitude" => 48.657643,
            "radius" => "350"
        ],
        [
            "id" => 553,
            "city_id" => "8",
            "slug" => "moeinzadeh",
            "name" => "معین زاده",
            "latitude" => 31.274956,
            "longitude" => 48.621503,
            "radius" => "900"
        ],
        [
            "id" => 554,
            "city_id" => "8",
            "slug" => "mellirah",
            "name" => "ملی راه",
            "latitude" => 31.361186,
            "longitude" => 48.713915,
            "radius" => "800"
        ],
        [
            "id" => 555,
            "city_id" => "8",
            "slug" => "naderi",
            "name" => "نادری",
            "latitude" => 31.317953,
            "longitude" => 48.683027,
            "radius" => "1000"
        ],
        [
            "id" => 556,
            "city_id" => "8",
            "slug" => "newsite",
            "name" => "نیوسایت",
            "latitude" => 31.346976,
            "longitude" => 48.709924,
            "radius" => "600"
        ],
        [
            "id" => 557,
            "city_id" => "8",
            "slug" => "yoosefi",
            "name" => "یوسفی",
            "latitude" => 31.311839,
            "longitude" => 48.697608,
            "radius" => "450"
        ],
        [
            "id" => 558,
            "city_id" => "9",
            "slug" => "azar",
            "name" => "آذر",
            "latitude" => 34.634184,
            "longitude" => 50.899861,
            "radius" => "2600"
        ],
        [
            "id" => 559,
            "city_id" => "9",
            "slug" => "azadegan",
            "name" => "آزادگان",
            "latitude" => 34.672513,
            "longitude" => 50.890697,
            "radius" => "600"
        ],
        [
            "id" => 560,
            "city_id" => "9",
            "slug" => "emam",
            "name" => "امام",
            "latitude" => 34.667163,
            "longitude" => 50.875237,
            "radius" => "2000"
        ],
        [
            "id" => 561,
            "city_id" => "9",
            "slug" => "emamzadehebrahim",
            "name" => "امامزاده ابراهیم",
            "latitude" => 34.657798,
            "longitude" => 50.858368,
            "radius" => "2700"
        ],
        [
            "id" => 562,
            "city_id" => "9",
            "slug" => "ensejam",
            "name" => "انسجام",
            "latitude" => 34.604708,
            "longitude" => 50.886206,
            "radius" => "1600"
        ],
        [
            "id" => 563,
            "city_id" => "9",
            "slug" => "ansar",
            "name" => "انصار الحسین",
            "latitude" => 34.676082,
            "longitude" => 50.882169,
            "radius" => "600"
        ],
        [
            "id" => 564,
            "city_id" => "9",
            "slug" => "enqelab",
            "name" => "انقلاب (چهارمردان)",
            "latitude" => 34.636832,
            "longitude" => 50.888671,
            "radius" => "1000"
        ],
        [
            "id" => 565,
            "city_id" => "9",
            "slug" => "bajak",
            "name" => "باجک (۱۹ دی)",
            "latitude" => 34.654591,
            "longitude" => 50.8982,
            "radius" => "2100"
        ],
        [
            "id" => 566,
            "city_id" => "9",
            "slug" => "15khordad",
            "name" => "بلوار ۱۵ خرداد",
            "latitude" => 34.6427,
            "longitude" => 50.905925,
            "radius" => "2200"
        ],
        [
            "id" => 567,
            "city_id" => "9",
            "slug" => "amin",
            "name" => "بلوار امین",
            "latitude" => 34.622155,
            "longitude" => 50.849893,
            "radius" => "1500"
        ],
        [
            "id" => 568,
            "city_id" => "9",
            "slug" => "kashani",
            "name" => "بلوار کاشانی",
            "latitude" => 34.654765,
            "longitude" => 50.864412,
            "radius" => "1500"
        ],
        [
            "id" => 569,
            "city_id" => "9",
            "slug" => "bonyad",
            "name" => "بنیاد",
            "latitude" => 34.598931,
            "longitude" => 50.864089,
            "radius" => "1000"
        ],
        [
            "id" => 570,
            "city_id" => "9",
            "slug" => "payamenoor",
            "name" => "پیام نور",
            "latitude" => 34.651706,
            "longitude" => 50.913141,
            "radius" => "400"
        ],
        [
            "id" => 571,
            "city_id" => "9",
            "slug" => "pardisan",
            "name" => "پردیسان",
            "latitude" => 34.555194,
            "longitude" => 50.809321,
            "radius" => "2200"
        ],
        [
            "id" => 572,
            "city_id" => "9",
            "slug" => "police",
            "name" => "پلیس",
            "latitude" => 34.625985,
            "longitude" => 50.907342,
            "radius" => "600"
        ],
        [
            "id" => 573,
            "city_id" => "9",
            "slug" => "tohid",
            "name" => "توحید",
            "latitude" => 34.648285,
            "longitude" => 50.85133,
            "radius" => "2200"
        ],
        [
            "id" => 574,
            "city_id" => "9",
            "slug" => "jomhoori",
            "name" => "جمهوری",
            "latitude" => 34.622831,
            "longitude" => 50.871312,
            "radius" => "1500"
        ],
        [
            "id" => 575,
            "city_id" => "9",
            "slug" => "haram",
            "name" => "حرم",
            "latitude" => 34.642552,
            "longitude" => 50.879584,
            "radius" => "850"
        ],
        [
            "id" => 576,
            "city_id" => "9",
            "slug" => "danial",
            "name" => "دانیال",
            "latitude" => 34.610723,
            "longitude" => 50.872683,
            "radius" => "800"
        ],
        [
            "id" => 577,
            "city_id" => "9",
            "slug" => "dourshahr",
            "name" => "دورشهر",
            "latitude" => 34.629725,
            "longitude" => 50.871654,
            "radius" => "800"
        ],
        [
            "id" => 578,
            "city_id" => "9",
            "slug" => "yazdanshahr",
            "name" => "یزدان شهر",
            "latitude" => 34.6176,
            "longitude" => 50.880055,
            "radius" => "500"
        ],
        [
            "id" => 579,
            "city_id" => "9",
            "slug" => "zanbilabad",
            "name" => "زنبیل آباد(شهید صدوقی)",
            "latitude" => 34.615748,
            "longitude" => 50.858642,
            "radius" => "1600"
        ],
        [
            "id" => 580,
            "city_id" => "9",
            "slug" => "Salarieh",
            "name" => "سالاریه",
            "latitude" => 34.615611,
            "longitude" => 50.847645,
            "radius" => "800"
        ],
        [
            "id" => 581,
            "city_id" => "9",
            "slug" => "somayyeh",
            "name" => "سمیه",
            "latitude" => 34.62936,
            "longitude" => 50.881012,
            "radius" => "700"
        ],
        [
            "id" => 582,
            "city_id" => "9",
            "slug" => "beheshti",
            "name" => "شهیدبهشتی",
            "latitude" => 34.670299,
            "longitude" => 50.885228,
            "radius" => "1200"
        ],
        [
            "id" => 583,
            "city_id" => "9",
            "slug" => "qods",
            "name" => "شهرک قدس",
            "latitude" => 34.598012,
            "longitude" => 50.842449,
            "radius" => "2000"
        ],
        [
            "id" => 584,
            "city_id" => "9",
            "slug" => "safashahr",
            "name" => "صفاشهر",
            "latitude" => 34.606639,
            "longitude" => 50.845238,
            "radius" => "1200"
        ],
        [
            "id" => 585,
            "city_id" => "9",
            "slug" => "safaeieh",
            "name" => "صفائیه",
            "latitude" => 34.636368,
            "longitude" => 50.872085,
            "radius" => "800"
        ],
        [
            "id" => 586,
            "city_id" => "9",
            "slug" => "attaran",
            "name" => "عطاران",
            "latitude" => 34.62174,
            "longitude" => 50.866711,
            "radius" => "800"
        ],
        [
            "id" => 587,
            "city_id" => "9",
            "slug" => "ammareyaser",
            "name" => "عمار یاسر",
            "latitude" => 34.650484,
            "longitude" => 50.902083,
            "radius" => "1800"
        ],
        [
            "id" => 588,
            "city_id" => "9",
            "slug" => "kalhori",
            "name" => "کلهری",
            "latitude" => 34.616503,
            "longitude" => 50.906648,
            "radius" => "1200"
        ],
        [
            "id" => 589,
            "city_id" => "9",
            "slug" => "keyvanfar",
            "name" => "کیوانفر",
            "latitude" => 34.657429,
            "longitude" => 50.885009,
            "radius" => "1000"
        ],
        [
            "id" => 590,
            "city_id" => "9",
            "slug" => "golzar",
            "name" => "گلزار",
            "latitude" => 34.63099,
            "longitude" => 50.897158,
            "radius" => "400"
        ],
        [
            "id" => 591,
            "city_id" => "9",
            "slug" => "modarres",
            "name" => "مدرس",
            "latitude" => 34.681453,
            "longitude" => 50.866817,
            "radius" => "1000"
        ],
        [
            "id" => 592,
            "city_id" => "9",
            "slug" => "haftetir",
            "name" => "هفت تیر",
            "latitude" => 34.65927,
            "longitude" => 50.886569,
            "radius" => "1400"
        ],
        [
            "id" => 593,
            "city_id" => "9",
            "slug" => "honarestan",
            "name" => "هنرستان",
            "latitude" => 34.62952,
            "longitude" => 50.892311,
            "radius" => "500"
        ],
        [
            "id" => 594,
            "city_id" => "30",
            "slug" => "eslamshahr",
            "name" => "اسلامشهر",
            "latitude" => 35.5427036,
            "longitude" => 51.228614,
            "radius" => "500"
        ]
    ];

    public function getProvinces(): Collection
    {
        return collect($this->provinces);
    }

    public function getCities(): Collection
    {
        return collect($this->cities);
    }

    public function getDistricts(): Collection
    {
        return collect($this->districts);
    }

    public function getProvince($provinceId): Collection
    {
        return collect($this->provinces)->where('id', $provinceId);
    }

    public function getCity($cityId): Collection
    {
        return collect($this->cities)->where('id', $cityId);
    }

    public function getDistrict($districtId): Collection
    {
        return collect($this->districts)->where('id', $districtId);
    }
}
