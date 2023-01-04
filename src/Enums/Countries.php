<?php
namespace App\Enums;

enum Countries: string
{
	case None													  = '';
    case United_Kingdom											  = 'GB';	
    case Afghanistan                                              = 'AF';
    case Aland_Islands                                            = 'AX';
    case Albania                                                  = 'AL';
    case Algeria                                                  = 'DZ';
    case American_Samoa                                           = 'AS';
    case Andorra                                                  = 'AD';
    case Angola                                                   = 'AO';
    case Anguilla                                                 = 'AI';
    case Antarctica                                               = 'AQ';
    case Antigua_and_Barbuda                                      = 'AG';
    case Argentina                                                = 'AR';
    case Armenia                                                  = 'AM';
    case Aruba                                                    = 'AW';
    case Australia                                                = 'AU';
    case Austria                                                  = 'AT';
    case Azerbaijan                                               = 'AZ';
    case Bahamas_the                                              = 'BS';
    case Bahrain                                                  = 'BH';
    case Bangladesh                                               = 'BD';
    case Barbados                                                 = 'BB';
    case Belarus                                                  = 'BY';
    case Belgium                                                  = 'BE';
    case Belize                                                   = 'BZ';
    case Benin                                                    = 'BJ';
    case Bermuda                                                  = 'BM';
    case Bhutan                                                   = 'BT';
    case Bolivia_Plurinational_State_of                           = 'BO';
    case Bonaire_Sint_Eustatius_and_Saba                          = 'BQ';
    case Bosnia_and_Herzegovina                                   = 'BA';
    case Botswana                                                 = 'BW';
    case Bouvet_Island                                            = 'BV';
    case Brazil                                                   = 'BR';
    case British_Indian_Ocean_Territory_the                       = 'IO';
    case Brunei_Darussalam                                        = 'BN';
    case Bulgaria                                                 = 'BG';
    case Burkina_Faso                                             = 'BF';
    case Burundi                                                  = 'BI';
    case Cabo_Verde                                               = 'CV';
    case Cambodia                                                 = 'KH';
    case Cameroon                                                 = 'CM';
    case Canada                                                   = 'CA';
    case Cayman_Islands_the                                       = 'KY';
    case Central_African_Republic_the                             = 'CF';
    case Chad                                                     = 'TD';
    case Chile                                                    = 'CL';
    case China                                                    = 'CN';
    case Christmas_Island                                         = 'CX';
    case Cocos_Keeling_Islands_the                                = 'CC';
    case Colombia                                                 = 'CO';
    case Comoros_the                                              = 'KM';
    case Congo_the                                                = 'CG';
    case Congo_the_Democratic_Republic_of_the                     = 'CD';
    case Cook_Islands_the                                         = 'CK';
    case Costa_Rica                                               = 'CR';
    case Cote_d_Ivoire                                            = 'CI';
    case Croatia                                                  = 'HR';
    case Cuba                                                     = 'CU';
    case Curacao                                                  = 'CW';
    case Cyprus                                                   = 'CY';
    case Czechia                                                  = 'CZ';
    case Denmark                                                  = 'DK';
    case Djibouti                                                 = 'DJ';
    case Dominica                                                 = 'DM';
    case Dominican_Republic_the                                   = 'DO';
    case Ecuador                                                  = 'EC';
    case Egypt                                                    = 'EG';
    case El_Salvador                                              = 'SV';
    case Equatorial_Guinea                                        = 'GQ';
    case Eritrea                                                  = 'ER';
    case Estonia                                                  = 'EE';
    case Eswatini                                                 = 'SZ';
    case Ethiopia                                                 = 'ET';
    case Falkland_Islands_the_Malvinas                            = 'FK';
    case Faroe_Islands_the                                        = 'FO';
    case Fiji                                                     = 'FJ';
    case Finland                                                  = 'FI';
    case France                                                   = 'FR';
    case French_Guiana                                            = 'GF';
    case French_Polynesia                                         = 'PF';
    case French_Southern_Territories_the                          = 'TF';
    case Gabon                                                    = 'GA';
    case Gambia_the                                               = 'GM';
    case Georgia                                                  = 'GE';
    case Germany                                                  = 'DE';
    case Ghana                                                    = 'GH';
    case Gibraltar                                                = 'GI';
    case Greece                                                   = 'GR';
    case Greenland                                                = 'GL';
    case Grenada                                                  = 'GD';
    case Guadeloupe                                               = 'GP';
    case Guam                                                     = 'GU';
    case Guatemala                                                = 'GT';
    case Guernsey                                                 = 'GG';
    case Guinea                                                   = 'GN';
    case Guinea_Bissau                                            = 'GW';
    case Guyana                                                   = 'GY';
    case Haiti                                                    = 'HT';
    case Heard_Island_and_McDonald_Islands                        = 'HM';
    case Holy_See_the                                             = 'VA';
    case Honduras                                                 = 'HN';
    case Hong_Kong                                                = 'HK';
    case Hungary                                                  = 'HU';
    case Iceland                                                  = 'IS';
    case India                                                    = 'IN';
    case Indonesia                                                = 'ID';
    case Iran_Islamic_Republic_of                                 = 'IR';
    case Iraq                                                     = 'IQ';
    case Ireland                                                  = 'IE';
    case Isle_of_Man                                              = 'IM';
    case Israel                                                   = 'IL';
    case Italy                                                    = 'IT';
    case Jamaica                                                  = 'JM';
    case Japan                                                    = 'JP';
    case Jersey                                                   = 'JE';
    case Jordan                                                   = 'JO';
    case Kazakhstan                                               = 'KZ';
    case Kenya                                                    = 'KE';
    case Kiribati                                                 = 'KI';
    case Korea_the_Democratic_People_s_Republic_of                = 'KP';
    case Korea_the_Republic_of                                    = 'KR';
    case Kuwait                                                   = 'KW';
    case Kyrgyzstan                                               = 'KG';
    case Lao_People_s_Democratic_Republic_the                     = 'LA';
    case Latvia                                                   = 'LV';
    case Lebanon                                                  = 'LB';
    case Lesotho                                                  = 'LS';
    case Liberia                                                  = 'LR';
    case Libya                                                    = 'LY';
    case Liechtenstein                                            = 'LI';
    case Lithuania                                                = 'LT';
    case Luxembourg                                               = 'LU';
    case Macao                                                    = 'MO';
    case Madagascar                                               = 'MG';
    case Malawi                                                   = 'MW';
    case Malaysia                                                 = 'MY';
    case Maldives                                                 = 'MV';
    case Mali                                                     = 'ML';
    case Malta                                                    = 'MT';
    case Marshall_Islands_the                                     = 'MH';
    case Martinique                                               = 'MQ';
    case Mauritania                                               = 'MR';
    case Mauritius                                                = 'MU';
    case Mayotte                                                  = 'YT';
    case Mexico                                                   = 'MX';
    case Micronesia_Federated_States_of                           = 'FM';
    case Moldova_the_Republic_of                                  = 'MD';
    case Monaco                                                   = 'MC';
    case Mongolia                                                 = 'MN';
    case Montenegro                                               = 'ME';
    case Montserrat                                               = 'MS';
    case Morocco                                                  = 'MA';
    case Mozambique                                               = 'MZ';
    case Myanmar                                                  = 'MM';
    case Namibia                                                  = 'NA';
    case Nauru                                                    = 'NR';
    case Nepal                                                    = 'NP';
    case Netherlands_the                                          = 'NL';
    case New_Caledonia                                            = 'NC';
    case New_Zealand                                              = 'NZ';
    case Nicaragua                                                = 'NI';
    case Niger_the                                                = 'NE';
    case Nigeria                                                  = 'NG';
    case Niue                                                     = 'NU';
    case Norfolk_Island                                           = 'NF';
    case North_Macedonia                                          = 'MK';
    case Northern_Mariana_Islands_the                             = 'MP';
    case Norway                                                   = 'NO';
    case Oman                                                     = 'OM';
    case Pakistan                                                 = 'PK';
    case Palau                                                    = 'PW';
    case Palestine_State_of                                       = 'PS';
    case Panama                                                   = 'PA';
    case Papua_New_Guinea                                         = 'PG';
    case Paraguay                                                 = 'PY';
    case Peru                                                     = 'PE';
    case Philippines_the                                          = 'PH';
    case Pitcairn                                                 = 'PN';
    case Poland                                                   = 'PL';
    case Portugal                                                 = 'PT';
    case Puerto_Rico                                              = 'PR';
    case Qatar                                                    = 'QA';
    case Reunion                                                  = 'RE';
    case Romania                                                  = 'RO';
    case Russian_Federation_the                                   = 'RU';
    case Rwanda                                                   = 'RW';
    case Saint_Barthelemy                                         = 'BL';
    case Saint_Helena_Ascension_and_Tristan_da_Cunha              = 'SH';
    case Saint_Kitts_and_Nevis                                    = 'KN';
    case Saint_Lucia                                              = 'LC';
    case Saint_Martin_French_part                                 = 'MF';
    case Saint_Pierre_and_Miquelon                                = 'PM';
    case Saint_Vincent_and_the_Grenadines                         = 'VC';
    case Samoa                                                    = 'WS';
    case San_Marino                                               = 'SM';
    case Sao_Tome_and_Principe                                    = 'ST';
    case Saudi_Arabia                                             = 'SA';
    case Senegal                                                  = 'SN';
    case Serbia                                                   = 'RS';
    case Seychelles                                               = 'SC';
    case Sierra_Leone                                             = 'SL';
    case Singapore                                                = 'SG';
    case Sint_Maarten_Dutch_part                                  = 'SX';
    case Slovakia                                                 = 'SK';
    case Slovenia                                                 = 'SI';
    case Solomon_Islands                                          = 'SB';
    case Somalia                                                  = 'SO';
    case South_Africa                                             = 'ZA';
    case South_Georgia_and_the_South_Sandwich_Islands             = 'GS';
    case South_Sudan                                              = 'SS';
    case Spain                                                    = 'ES';
    case Sri_Lanka                                                = 'LK';
    case Sudan_the                                                = 'SD';
    case Suriname                                                 = 'SR';
    case Svalbard_and_Jan_Mayen                                   = 'SJ';
    case Sweden                                                   = 'SE';
    case Switzerland                                              = 'CH';
    case Syrian_Arab_Republic_the                                 = 'SY';
    case Taiwan_Province_of_China                                 = 'TW';
    case Tajikistan                                               = 'TJ';
    case Tanzania_the_United_Republic_of                          = 'TZ';
    case Thailand                                                 = 'TH';
    case Timor_Leste                                              = 'TL';
    case Togo                                                     = 'TG';
    case Tokelau                                                  = 'TK';
    case Tonga                                                    = 'TO';
    case Trinidad_and_Tobago                                      = 'TT';
    case Tunisia                                                  = 'TN';
    case Turkey                                                   = 'TR';
    case Turkmenistan                                             = 'TM';
    case Turks_and_Caicos_Islands_the                             = 'TC';
    case Tuvalu                                                   = 'TV';
    case Uganda                                                   = 'UG';
    case Ukraine                                                  = 'UA';
    case United_Arab_Emirates_the                                 = 'AE';
    case United_States_Minor_Outlying_Islands_the                 = 'UM';
    case United_States_of_America_the                             = 'US';
    case Uruguay                                                  = 'UY';
    case Uzbekistan                                               = 'UZ';
    case Vanuatu                                                  = 'VU';
    case Venezuela_Bolivarian_Republic_of                         = 'VE';
    case Viet_Nam                                                 = 'VN';
    case Virgin_Islands_British                                   = 'VG';
    case Virgin_Islands_U_S                                       = 'VI';
    case Wallis_and_Futuna                                        = 'WF';
    case Western_Sahara                                           = 'EH';
    case Yemen                                                    = 'YE';
    case Zambia                                                   = 'ZM';
    case Zimbabwe                                                 = 'ZW';
	
}