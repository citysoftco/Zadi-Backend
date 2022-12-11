<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class mapbox_countries_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $country_list=[["Afghanistan","AF"],["Albania","AL"],["Germany","DE"],["Andorra","AD"],["Angola","AO"],["Anguilla","AI"],["Antarctica","AQ"],["Antigua and Barbuda","AG"],["Saudi Arabia","SA"],["Algeria","DZ"],["Argentina","AR"],["Armenia","AM"],["Aruba","AW"],["Australia","AU"],["Austria","AT"],["Azerbaijan","AZ"],["Belgium","BE"],["Bahamas","BS"],["Bahrain","BH"],["Bangladesh","BD"],["Barbados","BB"],["Belize","BZ"],["Benin","BJ"],["Bhutan","BT"],["Belarus","BY"],["Myanmar","MM"],["Bolivia","BO"],["Bosnia and Herzegovina","BA"],["Botswana","BW"],["Brazil","BR"],["Brunei","BN"],["Bulgaria","BG"],["Burkina Faso","BF"],["Burundi","BI"],["Cape Verde","CV"],["Cambodia","KH"],["Cameroon","CM"],["Canada","CA"],["Chad","TD"],["Chile","CL"],["China","CN"],["Cyprus","CY"],["Vatican City State","VA"],["Colombia","CO"],["Comoros","KM"],["Republic of the Congo","CG"],["Democratic Republic of the Congo","CD"],["North Korea","KP"],["South Korea","KR"],["Ivory Coast","CI"],["Costa Rica","CR"],["Croatia","HR"],["Cuba","CU"],["Curaçao","CW"],["Denmark","DK"],["Dominica","DM"],["Ecuador","EC"],["Egypt","EG"],["El Salvador","SV"],["United Arab Emirates","AE"],["Eritrea","ER"],["Slovakia","SK"],["Slovenia","SI"],["Spain","ES"],["United States","US"],["Estonia","EE"],["Ethiopia","ET"],["Philippines","PH"],["Finland","FI"],["Fiji","FJ"],["France","FR"],["Gabon","GA"],["Gambia","GM"],["Georgia","GE"],["Ghana","GH"],["Gibraltar","GI"],["Grenada","GD"],["Greece","GR"],["Greenland","GL"],["Guadeloupe","GP"],["Guam","GU"],["Guatemala","GT"],["French Guiana","GF"],["Guernsey","GG"],["Guinea","GN"],["Equatorial Guinea","GQ"],["Guinea-Bissau","GW"],["Guyana","GY"],["Haiti","HT"],["Honduras","HN"],["Hong Kong","HK"],["Hungary","HU"],["India","IN"],["Indonesia","ID"],["Iran","IR"],["Iraq","IQ"],["Ireland","IE"],["Bouvet Island","BV"],["Isle of Man","IM"],["Christmas Island","CX"],["Norfolk Island","NF"],["Iceland","IS"],["Bermuda Islands","BM"],["Cayman Islands","KY"],["Cocos (Keeling) Islands","CC"],["Cook Islands","CK"],["Åland Islands","AX"],["Faroe Islands","FO"],["South Georgia and the South Sandwich Islands","GS"],["Heard Island and McDonald Islands","HM"],["Maldives","MV"],["Falkland Islands (Malvinas)","FK"],["Northern Mariana Islands","MP"],["Marshall Islands","MH"],["Pitcairn Islands","PN"],["Solomon Islands","SB"],["Turks and Caicos Islands","TC"],["United States Minor Outlying Islands","UM"],["Virgin Islands","VG"],["United States Virgin Islands","VI"],["Israel","IL"],["Italy","IT"],["Jamaica","JM"],["Japan","JP"],["Jersey","JE"],["Jordan","JO"],["Kazakhstan","KZ"],["Kenya","KE"],["Kyrgyzstan","KG"],["Kiribati","KI"],["Kuwait","KW"],["Lebanon","LB"],["Laos","LA"],["Lesotho","LS"],["Latvia","LV"],["Liberia","LR"],["Libya","LY"],["Liechtenstein","LI"],["Lithuania","LT"],["Luxembourg","LU"],["Mexico","MX"],["Monaco","MC"],["Macao","MO"],["Macedonia","MK"],["Madagascar","MG"],["Malaysia","MY"],["Malawi","MW"],["Mali","ML"],["Malta","MT"],["Morocco","MA"],["Martinique","MQ"],["Mauritius","MU"],["Mauritania","MR"],["Mayotte","YT"],["Estados Federados de","FM"],["Moldova","MD"],["Mongolia","MN"],["Montenegro","ME"],["Montserrat","MS"],["Mozambique","MZ"],["Namibia","NA"],["Nauru","NR"],["Nepal","NP"],["Nicaragua","NI"],["Niger","NE"],["Nigeria","NG"],["Niue","NU"],["Norway","NO"],["New Caledonia","NC"],["New Zealand","NZ"],["Oman","OM"],["Netherlands","NL"],["Pakistan","PK"],["Palau","PW"],["Palestine","PS"],["Panama","PA"],["Papua New Guinea","PG"],["Paraguay","PY"],["Peru","PE"],["French Polynesia","PF"],["Poland","PL"],["Portugal","PT"],["Puerto Rico","PR"],["Qatar","QA"],["United Kingdom","GB"],["Central African Republic","CF"],["Czech Republic","CZ"],["Dominican Republic","DO"],["South Sudan","SS"],["Réunion","RE"],["Rwanda","RW"],["Romania","RO"],["Russia","RU"],["Western Sahara","EH"],["Samoa","WS"],["American Samoa","AS"],["Saint Barthélemy","BL"],["Saint Kitts and Nevis","KN"],["San Marino","SM"],["Saint Martin (French part)","MF"],["Saint Pierre and Miquelon","PM"],["Saint Vincent and the Grenadines","VC"],["Ascensión y Tristán de Acuña","SH"],["Saint Lucia","LC"],["Sao Tome and Principe","ST"],["Senegal","SN"],["Serbia","RS"],["Seychelles","SC"],["Sierra Leone","SL"],["Singapore","SG"],["Sint Maarten","SX"],["Syria","SY"],["Somalia","SO"],["Sri Lanka","LK"],["South Africa","ZA"],["Sudan","SD"],["Sweden","SE"],["Switzerland","CH"],["Suriname","SR"],["Svalbard and Jan Mayen","SJ"],["Swaziland","SZ"],["Tajikistan","TJ"],["Thailand","TH"],["Taiwan","TW"],["Tanzania","TZ"],["British Indian Ocean Territory","IO"],["French Southern Territories","TF"],["East Timor","TL"],["Togo","TG"],["Tokelau","TK"],["Tonga","TO"],["Trinidad and Tobago","TT"],["Tunisia","TN"],["Turkmenistan","TM"],["Turkey","TR"],["Tuvalu","TV"],["Ukraine","UA"],["Uganda","UG"],["Uruguay","UY"],["Uzbekistan","UZ"],["Vanuatu","VU"],["Venezuela","VE"],["Vietnam","VN"],["Wallis and Futuna","WF"],["Yemen","YE"],["Djibouti","DJ"],["Zambia","ZM"],["Zimbabwe","ZW"]];

        foreach($country_list as $country){
            $country_name = $country[0];
            $isocountry = $country[1];

            DB::table('mapbox_countries')->insert(array(
                'mapbox_country' => $country_name,
                'country_isocode' => $isocountry,
                'is_active' => ($isocountry!="US") ? '0': '1'
            ));
        }

        $this->command->info("Country List has been imported successfully");
    }
}
