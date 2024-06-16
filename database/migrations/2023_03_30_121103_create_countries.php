<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('code', 2)->unique();
            $table->longText('name')->nullable();
        });

        if (\MetaFramework\Accessors\Locale::multilang()) {


            $sql = "INSERT INTO `countries` (`id`, `code`, `name`) VALUES
    (1, 'AF', '{\"fr\":\"Afghanistan\",\"en\":\"Afghanistan\"}'),
	(2, 'AL', '{\"fr\":\"Albanie\",\"en\":\"Albania\"}'),
	(3, 'AQ', '{\"fr\":\"Antarctique\",\"en\":\"Antarctica\"}'),
	(4, 'DZ', '{\"fr\":\"Alg\\u00e9rie\",\"en\":\"Algeria\"}'),
	(5, 'AS', '{\"fr\":\"Samoa Am\\u00e9ricaines\",\"en\":\"American Samoa\"}'),
	(6, 'AD', '{\"fr\":\"Andorre\",\"en\":\"Andorra\"}'),
	(7, 'AO', '{\"fr\":\"Angola\",\"en\":\"Angola\"}'),
	(8, 'AG', '{\"fr\":\"Antigua-et-Barbuda\",\"en\":\"Antigua and Barbuda\"}'),
	(9, 'AZ', '{\"fr\":\"Azerba\\u00efdjan\",\"en\":\"Azerbaijan\"}'),
	(10, 'AR', '{\"fr\":\"Argentine\",\"en\":\"Argentina\"}'),
	(11, 'AU', '{\"fr\":\"Australie\",\"en\":\"Australia\"}'),
	(12, 'AT', '{\"fr\":\"Autriche\",\"en\":\"Austria\"}'),
	(13, 'BS', '{\"fr\":\"Bahamas\",\"en\":\"Bahamas\"}'),
	(14, 'BH', '{\"fr\":\"Bahre\\u00efn\",\"en\":\"Bahrain\"}'),
	(15, 'BD', '{\"fr\":\"Bangladesh\",\"en\":\"Bangladesh\"}'),
	(16, 'AM', '{\"fr\":\"Arm\\u00e9nie\",\"en\":\"Armenia\"}'),
	(17, 'BB', '{\"fr\":\"Barbade\",\"en\":\"Barbados\"}'),
	(18, 'BE', '{\"fr\":\"Belgique\",\"en\":\"Belgium\"}'),
	(19, 'BM', '{\"fr\":\"Bermudes\",\"en\":\"Bermuda\"}'),
	(20, 'BT', '{\"fr\":\"Bhoutan\",\"en\":\"Bhutan\"}'),
	(21, 'BO', '{\"fr\":\"Bolivie\",\"en\":\"Bolivia\"}'),
	(22, 'BA', '{\"fr\":\"Bosnie-Herz\\u00e9govine\",\"en\":\"Bosnia and Herzegovina\"}'),
	(23, 'BW', '{\"fr\":\"Botswana\",\"en\":\"Botswana\"}'),
	(24, 'BV', '{\"fr\":\"\\u00cele Bouvet\",\"en\":\"Bouvet Island\"}'),
	(25, 'BR', '{\"fr\":\"Br\\u00e9sil\",\"en\":\"Brazil\"}'),
	(26, 'BZ', '{\"fr\":\"Belize\",\"en\":\"Belize\"}'),
	(27, 'IO', '{\"fr\":\"Territoire Britannique de l\'Oc\\u00e9an Indien\",\"en\":\"British Indian Ocean Territory\"}'),
	(28, 'SB', '{\"fr\":\"\\u00celes Salomon\",\"en\":\"Solomon Islands\"}'),
	(29, 'VG', '{\"fr\":\"\\u00celes Vierges Britanniques\",\"en\":\"British Virgin Islands\"}'),
	(30, 'BN', '{\"fr\":\"Brun\\u00e9i Darussalam\",\"en\":\"Brunei Darussalam\"}'),
	(31, 'BG', '{\"fr\":\"Bulgarie\",\"en\":\"Bulgaria\"}'),
	(32, 'MM', '{\"fr\":\"Myanmar\",\"en\":\"Myanmar\"}'),
	(33, 'BI', '{\"fr\":\"Burundi\",\"en\":\"Burundi\"}'),
	(34, 'BY', '{\"fr\":\"B\\u00e9larus\",\"en\":\"Belarus\"}'),
	(35, 'KH', '{\"fr\":\"Cambodge\",\"en\":\"Cambodia\"}'),
	(36, 'CM', '{\"fr\":\"Cameroun\",\"en\":\"Cameroon\"}'),
	(37, 'CA', '{\"fr\":\"Canada\",\"en\":\"Canada\"}'),
	(38, 'CV', '{\"fr\":\"Cap-vert\",\"en\":\"Cape Verde\"}'),
	(39, 'KY', '{\"fr\":\"\\u00celes Ca\\u00efmanes\",\"en\":\"Cayman Islands\"}'),
	(40, 'CF', '{\"fr\":\"R\\u00e9publique Centrafricaine\",\"en\":\"Central African\"}'),
	(41, 'LK', '{\"fr\":\"Sri Lanka\",\"en\":\"Sri Lanka\"}'),
	(42, 'TD', '{\"fr\":\"Tchad\",\"en\":\"Chad\"}'),
	(43, 'CL', '{\"fr\":\"Chili\",\"en\":\"Chile\"}'),
	(44, 'CN', '{\"fr\":\"Chine\",\"en\":\"China\"}'),
	(45, 'TW', '{\"fr\":\"Ta\\u00efwan\",\"en\":\"Taiwan\"}'),
	(46, 'CX', '{\"fr\":\"\\u00cele Christmas\",\"en\":\"Christmas Island\"}'),
	(47, 'CC', '{\"fr\":\"\\u00celes Cocos (Keeling)\",\"en\":\"Cocos (Keeling) Islands\"}'),
	(48, 'CO', '{\"fr\":\"Colombie\",\"en\":\"Colombia\"}'),
	(49, 'KM', '{\"fr\":\"Comores\",\"en\":\"Comoros\"}'),
	(50, 'YT', '{\"fr\":\"Mayotte\",\"en\":\"Mayotte\"}'),
	(51, 'CG', '{\"fr\":\"R\\u00e9publique du Congo\",\"en\":\"Republic of the Congo\"}'),
	(52, 'CD', '{\"fr\":\"R\\u00e9publique D\\u00e9mocratique du Congo\",\"en\":\"The Democratic Republic Of The Congo\"}'),
	(53, 'CK', '{\"fr\":\"\\u00celes Cook\",\"en\":\"Cook Islands\"}'),
	(54, 'CR', '{\"fr\":\"Costa Rica\",\"en\":\"Costa Rica\"}'),
	(55, 'HR', '{\"fr\":\"Croatie\",\"en\":\"Croatia\"}'),
	(56, 'CU', '{\"fr\":\"Cuba\",\"en\":\"Cuba\"}'),
	(57, 'CY', '{\"fr\":\"Chypre\",\"en\":\"Cyprus\"}'),
	(58, 'CZ', '{\"fr\":\"R\\u00e9publique Tch\\u00e8que\",\"en\":\"Czech Republic\"}'),
	(59, 'BJ', '{\"fr\":\"B\\u00e9nin\",\"en\":\"Benin\"}'),
	(60, 'DK', '{\"fr\":\"Danemark\",\"en\":\"Denmark\"}'),
	(61, 'DM', '{\"fr\":\"Dominique\",\"en\":\"Dominica\"}'),
	(62, 'DO', '{\"fr\":\"R\\u00e9publique Dominicaine\",\"en\":\"Dominican Republic\"}'),
	(63, 'EC', '{\"fr\":\"\\u00c9quateur\",\"en\":\"Ecuador\"}'),
	(64, 'SV', '{\"fr\":\"El Salvador\",\"en\":\"El Salvador\"}'),
	(65, 'GQ', '{\"fr\":\"Guin\\u00e9e \\u00c9quatoriale\",\"en\":\"Equatorial Guinea\"}'),
	(66, 'ET', '{\"fr\":\"\\u00c9thiopie\",\"en\":\"Ethiopia\"}'),
	(67, 'ER', '{\"fr\":\"\\u00c9rythr\\u00e9e\",\"en\":\"Eritrea\"}'),
	(68, 'EE', '{\"fr\":\"Estonie\",\"en\":\"Estonia\"}'),
	(69, 'FO', '{\"fr\":\"\\u00celes F\\u00e9ro\\u00e9\",\"en\":\"Faroe Islands\"}'),
	(70, 'FK', '{\"fr\":\"\\u00celes (malvinas) Falkland\",\"en\":\"Falkland Islands\"}'),
	(71, 'GS', '{\"fr\":\"G\\u00e9orgie du Sud et les \\u00celes Sandwich du Sud\",\"en\":\"South Georgia and the South Sandwich Islands\"}'),
	(72, 'FJ', '{\"fr\":\"Fidji\",\"en\":\"Fiji\"}'),
	(73, 'FI', '{\"fr\":\"Finlande\",\"en\":\"Finland\"}'),
	(74, 'AX', '{\"fr\":\"\\u00celes Go\\u00c5land\",\"en\":\"\Go\u00c5land Islands\"}'),
	(75, 'FR', '{\"fr\":\"France\",\"en\":\"France\"}'),
	(76, 'GF', '{\"fr\":\"Guyane Fran\\u00e7aise\",\"en\":\"French Guiana\"}'),
	(77, 'PF', '{\"fr\":\"Polyn\\u00e9sie Fran\\u00e7aise\",\"en\":\"French Polynesia\"}'),
	(78, 'TF', '{\"fr\":\"Terres Australes Fran\\u00e7aises\",\"en\":\"French Southern Territories\"}'),
	(79, 'DJ', '{\"fr\":\"Djibouti\",\"en\":\"Djibouti\"}'),
	(80, 'GA', '{\"fr\":\"Gabon\",\"en\":\"Gabon\"}'),
	(81, 'GE', '{\"fr\":\"G\\u00e9orgie\",\"en\":\"Georgia\"}'),
	(82, 'GM', '{\"fr\":\"Gambie\",\"en\":\"Gambia\"}'),
	(83, 'PS', '{\"fr\":\"Territoire Palestinien Occup\\u00e9\",\"en\":\"Occupied Palestinian Territory\"}'),
	(84, 'DE', '{\"fr\":\"Allemagne\",\"en\":\"Germany\"}'),
	(85, 'GH', '{\"fr\":\"Ghana\",\"en\":\"Ghana\"}'),
	(86, 'GI', '{\"fr\":\"Gibraltar\",\"en\":\"Gibraltar\"}'),
	(87, 'KI', '{\"fr\":\"Kiribati\",\"en\":\"Kiribati\"}'),
	(88, 'GR', '{\"fr\":\"Gr\\u00e8ce\",\"en\":\"Greece\"}'),
	(89, 'GL', '{\"fr\":\"Groenland\",\"en\":\"Greenland\"}'),
	(90, 'GD', '{\"fr\":\"Grenade\",\"en\":\"Grenada\"}'),
	(91, 'GP', '{\"fr\":\"Guadeloupe\",\"en\":\"Guadeloupe\"}'),
	(92, 'GU', '{\"fr\":\"Guam\",\"en\":\"Guam\"}'),
	(93, 'GT', '{\"fr\":\"Guatemala\",\"en\":\"Guatemala\"}'),
	(94, 'GN', '{\"fr\":\"Guin\\u00e9e\",\"en\":\"Guinea\"}'),
	(95, 'GY', '{\"fr\":\"Guyana\",\"en\":\"Guyana\"}'),
	(96, 'HT', '{\"fr\":\"Ha\\u00efti\",\"en\":\"Haiti\"}'),
	(97, 'HM', '{\"fr\":\"\\u00celes Heard et Mcdonald\",\"en\":\"Heard Island and McDonald Islands\"}'),
	(98, 'VA', '{\"fr\":\"Saint-Si\\u00e8ge (\\u00e9tat de la Cit\\u00e9 du Vatican)\",\"en\":\"Vatican City State\"}'),
	(99, 'HN', '{\"fr\":\"Honduras\",\"en\":\"Honduras\"}'),
	(100, 'HK', '{\"fr\":\"Hong-Kong\",\"en\":\"Hong Kong\"}'),
	(101, 'HU', '{\"fr\":\"Hongrie\",\"en\":\"Hungary\"}'),
	(102, 'IS', '{\"fr\":\"Islande\",\"en\":\"Iceland\"}'),
	(103, 'IN', '{\"fr\":\"Inde\",\"en\":\"India\"}'),
	(104, 'ID', '{\"fr\":\"Indon\\u00e9sie\",\"en\":\"Indonesia\"}'),
	(105, 'IR', '{\"fr\":\"R\\u00e9publique Islamique d\'Iran\",\"en\":\"Islamic Republic of Iran\"}'),
	(106, 'IQ', '{\"fr\":\"Iraq\",\"en\":\"Iraq\"}'),
	(107, 'IE', '{\"fr\":\"Irlande\",\"en\":\"Ireland\"}'),
	(108, 'IL', '{\"fr\":\"Isra\\u00ebl\",\"en\":\"Israel\"}'),
	(109, 'IT', '{\"fr\":\"Italie\",\"en\":\"Italy\"}'),
	(110, 'CI', '{\"fr\":\"C\\u00f4te d\'Ivoire\",\"en\":\"C\\u00f4te d\'Ivoire\"}'),
	(111, 'JM', '{\"fr\":\"Jama\\u00efque\",\"en\":\"Jamaica\"}'),
	(112, 'JP', '{\"fr\":\"Japon\",\"en\":\"Japan\"}'),
	(113, 'KZ', '{\"fr\":\"Kazakhstan\",\"en\":\"Kazakhstan\"}'),
	(114, 'JO', '{\"fr\":\"Jordanie\",\"en\":\"Jordan\"}'),
	(115, 'KE', '{\"fr\":\"Kenya\",\"en\":\"Kenya\"}'),
	(116, 'KP', '{\"fr\":\"R\\u00e9publique Populaire D\\u00e9mocratique de Cor\\u00e9e\",\"en\":\"Democratic People\'s Republic of Korea\"}'),
	(117, 'KR', '{\"fr\":\"R\\u00e9publique de Cor\\u00e9e\",\"en\":\"Republic of Korea\"}'),
	(118, 'KW', '{\"fr\":\"Kowe\\u00eft\",\"en\":\"Kuwait\"}'),
	(119, 'KG', '{\"fr\":\"Kirghizistan\",\"en\":\"Kyrgyzstan\"}'),
	(120, 'LA', '{\"fr\":\"R\\u00e9publique D\\u00e9mocratique Populaire Lao\",\"en\":\"Lao People\'s Democratic Republic\"}'),
	(121, 'LB', '{\"fr\":\"Liban\",\"en\":\"Lebanon\"}'),
	(122, 'LS', '{\"fr\":\"Lesotho\",\"en\":\"Lesotho\"}'),
	(123, 'LV', '{\"fr\":\"Lettonie\",\"en\":\"Latvia\"}'),
	(124, 'LR', '{\"fr\":\"Lib\\u00e9ria\",\"en\":\"Liberia\"}'),
	(125, 'LY', '{\"fr\":\"Jamahiriya Arabe Libyenne\",\"en\":\"Libyan Arab Jamahiriya\"}'),
	(126, 'LI', '{\"fr\":\"Liechtenstein\",\"en\":\"Liechtenstein\"}'),
	(127, 'LT', '{\"fr\":\"Lituanie\",\"en\":\"Lithuania\"}'),
	(128, 'LU', '{\"fr\":\"Luxembourg\",\"en\":\"Luxembourg\"}'),
	(129, 'MO', '{\"fr\":\"Macao\",\"en\":\"Macao\"}'),
	(130, 'MG', '{\"fr\":\"Madagascar\",\"en\":\"Madagascar\"}'),
	(131, 'MW', '{\"fr\":\"Malawi\",\"en\":\"Malawi\"}'),
	(132, 'MY', '{\"fr\":\"Malaisie\",\"en\":\"Malaysia\"}'),
	(133, 'MV', '{\"fr\":\"Maldives\",\"en\":\"Maldives\"}'),
	(134, 'ML', '{\"fr\":\"Mali\",\"en\":\"Mali\"}'),
	(135, 'MT', '{\"fr\":\"Malte\",\"en\":\"Malta\"}'),
	(136, 'MQ', '{\"fr\":\"Martinique\",\"en\":\"Martinique\"}'),
	(137, 'MR', '{\"fr\":\"Mauritanie\",\"en\":\"Mauritania\"}'),
	(138, 'MU', '{\"fr\":\"Maurice\",\"en\":\"Mauritius\"}'),
	(139, 'MX', '{\"fr\":\"Mexique\",\"en\":\"Mexico\"}'),
	(140, 'MC', '{\"fr\":\"Monaco\",\"en\":\"Monaco\"}'),
	(141, 'MN', '{\"fr\":\"Mongolie\",\"en\":\"Mongolia\"}'),
	(142, 'MD', '{\"fr\":\"R\\u00e9publique de Moldova\",\"en\":\"Republic of Moldova\"}'),
	(143, 'MS', '{\"fr\":\"Montserrat\",\"en\":\"Montserrat\"}'),
	(144, 'MA', '{\"fr\":\"Maroc\",\"en\":\"Morocco\"}'),
	(145, 'MZ', '{\"fr\":\"Mozambique\",\"en\":\"Mozambique\"}'),
	(146, 'OM', '{\"fr\":\"Oman\",\"en\":\"Oman\"}'),
	(147, 'NA', '{\"fr\":\"Namibie\",\"en\":\"Namibia\"}'),
	(148, 'NR', '{\"fr\":\"Nauru\",\"en\":\"Nauru\"}'),
	(149, 'NP', '{\"fr\":\"N\\u00e9pal\",\"en\":\"Nepal\"}'),
	(150, 'NL', '{\"fr\":\"Pays-Bas\",\"en\":\"Netherlands\"}'),
	(151, 'AN', '{\"fr\":\"Antilles N\\u00e9erlandaises\",\"en\":\"Netherlands Antilles\"}'),
	(152, 'AW', '{\"fr\":\"Aruba\",\"en\":\"Aruba\"}'),
	(153, 'NC', '{\"fr\":\"Nouvelle-Cal\\u00e9donie\",\"en\":\"New Caledonia\"}'),
	(154, 'VU', '{\"fr\":\"Vanuatu\",\"en\":\"Vanuatu\"}'),
	(155, 'NZ', '{\"fr\":\"Nouvelle-Z\\u00e9lande\",\"en\":\"New Zealand\"}'),
	(156, 'NI', '{\"fr\":\"Nicaragua\",\"en\":\"Nicaragua\"}'),
	(157, 'NE', '{\"fr\":\"Niger\",\"en\":\"Niger\"}'),
	(158, 'NG', '{\"fr\":\"Nig\\u00e9ria\",\"en\":\"Nigeria\"}'),
	(159, 'NU', '{\"fr\":\"Niu\\u00e9\",\"en\":\"Niue\"}'),
	(160, 'NF', '{\"fr\":\"\\u00cele Norfolk\",\"en\":\"Norfolk Island\"}'),
	(161, 'NO', '{\"fr\":\"Norv\\u00e8ge\",\"en\":\"Norway\"}'),
	(162, 'MP', '{\"fr\":\"\\u00celes Mariannes du Nord\",\"en\":\"Northern Mariana Islands\"}'),
	(163, 'UM', '{\"fr\":\"\\u00celes Mineures \\u00c9loign\\u00e9es des \\u00c9tats-Unis\",\"en\":\"United States Minor Outlying Islands\"}'),
	(164, 'FM', '{\"fr\":\"\\u00c9tats F\\u00e9d\\u00e9r\\u00e9s de Micron\\u00e9sie\",\"en\":\"Federated States of Micronesia\"}'),
	(165, 'MH', '{\"fr\":\"\\u00celes Marshall\",\"en\":\"Marshall Islands\"}'),
	(166, 'PW', '{\"fr\":\"Palaos\",\"en\":\"Palau\"}'),
	(167, 'PK', '{\"fr\":\"Pakistan\",\"en\":\"Pakistan\"}'),
	(168, 'PA', '{\"fr\":\"Panama\",\"en\":\"Panama\"}'),
	(169, 'PG', '{\"fr\":\"Papouasie-Nouvelle-Guin\\u00e9e\",\"en\":\"Papua New Guinea\"}'),
	(170, 'PY', '{\"fr\":\"Paraguay\",\"en\":\"Paraguay\"}'),
	(171, 'PE', '{\"fr\":\"P\\u00e9rou\",\"en\":\"Peru\"}'),
	(172, 'PH', '{\"fr\":\"Philippines\",\"en\":\"Philippines\"}'),
	(173, 'PN', '{\"fr\":\"Pitcairn\",\"en\":\"Pitcairn\"}'),
	(174, 'PL', '{\"fr\":\"Pologne\",\"en\":\"Poland\"}'),
	(175, 'PT', '{\"fr\":\"Portugal\",\"en\":\"Portugal\"}'),
	(176, 'GW', '{\"fr\":\"Guin\\u00e9e-Bissau\",\"en\":\"Guinea-Bissau\"}'),
	(177, 'TL', '{\"fr\":\"Timor-Leste\",\"en\":\"Timor-Leste\"}'),
	(178, 'PR', '{\"fr\":\"Porto Rico\",\"en\":\"Puerto Rico\"}'),
	(179, 'QA', '{\"fr\":\"Qatar\",\"en\":\"Qatar\"}'),
	(180, 'RE', '{\"fr\":\"R\\u00e9union\",\"en\":\"R\\u00e9union\"}'),
	(181, 'RO', '{\"fr\":\"Roumanie\",\"en\":\"Romania\"}'),
	(182, 'RU', '{\"fr\":\"F\\u00e9d\\u00e9ration de Russie\",\"en\":\"Russian Federation\"}'),
	(183, 'RW', '{\"fr\":\"Rwanda\",\"en\":\"Rwanda\"}'),
	(184, 'SH', '{\"fr\":\"Sainte-H\\u00e9l\\u00e8ne\",\"en\":\"Saint Helena\"}'),
	(185, 'KN', '{\"fr\":\"Saint-Kitts-et-Nevis\",\"en\":\"Saint Kitts and Nevis\"}'),
	(186, 'AI', '{\"fr\":\"Anguilla\",\"en\":\"Anguilla\"}'),
	(187, 'LC', '{\"fr\":\"Sainte-Lucie\",\"en\":\"Saint Lucia\"}'),
	(188, 'PM', '{\"fr\":\"Saint-Pierre-et-Miquelon\",\"en\":\"Saint-Pierre and Miquelon\"}'),
	(189, 'VC', '{\"fr\":\"Saint-Vincent-et-les Grenadines\",\"en\":\"Saint Vincent and the Grenadines\"}'),
	(190, 'SM', '{\"fr\":\"Saint-Marin\",\"en\":\"San Marino\"}'),
	(191, 'ST', '{\"fr\":\"Sao Tom\\u00e9-et-Principe\",\"en\":\"Sao Tome and Principe\"}'),
	(192, 'SA', '{\"fr\":\"Arabie Saoudite\",\"en\":\"Saudi Arabia\"}'),
	(193, 'SN', '{\"fr\":\"S\\u00e9n\\u00e9gal\",\"en\":\"Senegal\"}'),
	(194, 'SC', '{\"fr\":\"Seychelles\",\"en\":\"Seychelles\"}'),
	(195, 'SL', '{\"fr\":\"Sierra Leone\",\"en\":\"Sierra Leone\"}'),
	(196, 'SG', '{\"fr\":\"Singapour\",\"en\":\"Singapore\"}'),
	(197, 'SK', '{\"fr\":\"Slovaquie\",\"en\":\"Slovakia\"}'),
	(198, 'VN', '{\"fr\":\"Viet Nam\",\"en\":\"Vietnam\"}'),
	(199, 'SI', '{\"fr\":\"Slov\\u00e9nie\",\"en\":\"Slovenia\"}'),
	(200, 'SO', '{\"fr\":\"Somalie\",\"en\":\"Somalia\"}'),
	(201, 'ZA', '{\"fr\":\"Afrique du Sud\",\"en\":\"South Africa\"}'),
	(202, 'ZW', '{\"fr\":\"Zimbabwe\",\"en\":\"Zimbabwe\"}'),
	(203, 'ES', '{\"fr\":\"Espagne\",\"en\":\"Spain\"}'),
	(204, 'EH', '{\"fr\":\"Sahara Occidental\",\"en\":\"Western Sahara\"}'),
	(205, 'SD', '{\"fr\":\"Soudan\",\"en\":\"Sudan\"}'),
	(206, 'SR', '{\"fr\":\"Suriname\",\"en\":\"Suriname\"}'),
	(207, 'SJ', '{\"fr\":\"Svalbard et\\u00cele Jan Mayen\",\"en\":\"Svalbard and Jan Mayen\"}'),
	(208, 'SZ', '{\"fr\":\"Swaziland\",\"en\":\"Swaziland\"}'),
	(209, 'SE', '{\"fr\":\"Su\\u00e8de\",\"en\":\"Sweden\"}'),
	(210, 'CH', '{\"fr\":\"Suisse\",\"en\":\"Switzerland\"}'),
	(211, 'SY', '{\"fr\":\"R\\u00e9publique Arabe Syrienne\",\"en\":\"Syrian Arab Republic\"}'),
	(212, 'TJ', '{\"fr\":\"Tadjikistan\",\"en\":\"Tajikistan\"}'),
	(213, 'TH', '{\"fr\":\"Tha\\u00eflande\",\"en\":\"Thailand\"}'),
	(214, 'TG', '{\"fr\":\"Togo\",\"en\":\"Togo\"}'),
	(215, 'TK', '{\"fr\":\"Tokelau\",\"en\":\"Tokelau\"}'),
	(216, 'TO', '{\"fr\":\"Tonga\",\"en\":\"Tonga\"}'),
	(217, 'TT', '{\"fr\":\"Trinit\\u00e9-et-Tobago\",\"en\":\"Trinidad and Tobago\"}'),
	(218, 'AE', '{\"fr\":\"\\u00c9mirats Arabes Unis\",\"en\":\"United Arab Emirates\"}'),
	(219, 'TN', '{\"fr\":\"Tunisie\",\"en\":\"Tunisia\"}'),
	(220, 'TR', '{\"fr\":\"Turquie\",\"en\":\"Turkey\"}'),
	(221, 'TM', '{\"fr\":\"Turkm\\u00e9nistan\",\"en\":\"Turkmenistan\"}'),
	(222, 'TC', '{\"fr\":\"\\u00celes Turks et Ca\\u00efques\",\"en\":\"Turks and Caicos Islands\"}'),
	(223, 'TV', '{\"fr\":\"Tuvalu\",\"en\":\"Tuvalu\"}'),
	(224, 'UG', '{\"fr\":\"Ouganda\",\"en\":\"Uganda\"}'),
	(225, 'UA', '{\"fr\":\"Ukraine\",\"en\":\"Ukraine\"}'),
	(226, 'MK', '{\"fr\":\"Mac\\u00e9doine du Nord\",\"en\":\"North Macedonia\"}'),
	(227, 'EG', '{\"fr\":\"\\u00c9gypte\",\"en\":\"Egypt\"}'),
	(228, 'GB', '{\"fr\":\"Royaume-Uni\",\"en\":\"United Kingdom\"}'),
	(229, 'IM', '{\"fr\":\"\\u00cele de Man\",\"en\":\"Isle of Man\"}'),
	(230, 'TZ', '{\"fr\":\"R\\u00e9publique-Unie de Tanzanie\",\"en\":\"United Republic Of Tanzania\"}'),
	(231, 'US', '{\"fr\":\"\\u00c9tats-Unis\",\"en\":\"United States\"}'),
	(232, 'VI', '{\"fr\":\"\\u00celes Vierges des \\u00c9tats-Unis\",\"en\":\"U.S. Virgin Islands\"}'),
	(233, 'BF', '{\"fr\":\"Burkina Faso\",\"en\":\"Burkina Faso\"}'),
	(234, 'UY', '{\"fr\":\"Uruguay\",\"en\":\"Uruguay\"}'),
	(235, 'UZ', '{\"fr\":\"Ouzb\\u00e9kistan\",\"en\":\"Uzbekistan\"}'),
	(236, 'VE', '{\"fr\":\"Venezuela\",\"en\":\"Venezuela\"}'),
	(237, 'WF', '{\"fr\":\"Wallis et Futuna\",\"en\":\"Wallis and Futuna\"}'),
	(238, 'WS', '{\"fr\":\"Samoa\",\"en\":\"Samoa\"}'),
	(239, 'YE', '{\"fr\":\"Y\\u00e9men\",\"en\":\"Yemen\"}'),
	(240, 'CS', '{\"fr\":\"Serbie-et-Mont\\u00e9n\\u00e9gro\",\"en\":\"Serbia and Montenegro\"}'),
	(241, 'ZM', '{\"fr\":\"Zambie\",\"en\":\"Zambia\"}')";

        } else {
            $sql = "INSERT INTO `countries` (`id`, `code`, `name`) VALUES
	(1, 'AF', 'Afghanistan'),
	(2, 'AL', 'Albanie'),
	(3, 'AQ', 'Antarctique'),
	(4, 'DZ', 'Algérie'),
	(5, 'AS', 'Samoa Américaines'),
	(6, 'AD', 'Andorre'),
	(7, 'AO', 'Angola'),
	(8, 'AG', 'Antigua-et-Barbuda'),
	(9, 'AZ', 'Azerbaïdjan'),
	(10, 'AR', 'Argentine'),
	(11, 'AU', 'Australie'),
	(12, 'AT', 'Autriche'),
	(13, 'BS', 'Bahamas'),
	(14, 'BH', 'Bahreïn'),
	(15, 'BD', 'Bangladesh'),
	(16, 'AM', 'Arménie'),
	(17, 'BB', 'Barbade'),
	(18, 'BE', 'Belgique'),
	(19, 'BM', 'Bermudes'),
	(20, 'BT', 'Bhoutan'),
	(21, 'BO', 'Bolivie'),
	(22, 'BA', 'Bosnie-Herzégovine'),
	(23, 'BW', 'Botswana'),
	(24, 'BV', 'Île Bouvet'),
	(25, 'BR', 'Brésil'),
	(26, 'BZ', 'Belize'),
	(27, 'IO', 'Territoire Britannique de l\'Océan Indien'),
	(28, 'SB', 'Îles Salomon'),
	(29, 'VG', 'Îles Vierges Britanniques'),
	(30, 'BN', 'Brunéi Darussalam'),
	(31, 'BG', 'Bulgarie'),
	(32, 'MM', 'Myanmar'),
	(33, 'BI', 'Burundi'),
	(34, 'BY', 'Bélarus'),
	(35, 'KH', 'Cambodge'),
	(36, 'CM', 'Cameroun'),
	(37, 'CA', 'Canada'),
	(38, 'CV', 'Cap-vert'),
	(39, 'KY', 'Îles Caïmans'),
	(40, 'CF', 'République Centrafricaine'),
	(41, 'LK', 'Sri Lanka'),
	(42, 'TD', 'Tchad'),
	(43, 'CL', 'Chili'),
	(44, 'CN', 'Chine'),
	(45, 'TW', 'Taïwan'),
	(46, 'CX', 'Île Christmas'),
	(47, 'CC', 'Îles Cocos (Keeling)'),
	(48, 'CO', 'Colombie'),
	(49, 'KM', 'Comores'),
	(50, 'YT', 'Mayotte'),
	(51, 'CG', 'République du Congo'),
	(52, 'CD', 'République Démocratique du Congo'),
	(53, 'CK', 'Îles Cook'),
	(54, 'CR', 'Costa Rica'),
	(55, 'HR', 'Croatie'),
	(56, 'CU', 'Cuba'),
	(57, 'CY', 'Chypre'),
	(58, 'CZ', 'République Tchèque'),
	(59, 'BJ', 'Bénin'),
	(60, 'DK', 'Danemark'),
	(61, 'DM', 'Dominique'),
	(62, 'DO', 'République Dominicaine'),
	(63, 'EC', 'Équateur'),
	(64, 'SV', 'El Salvador'),
	(65, 'GQ', 'Guinée Équatoriale'),
	(66, 'ET', 'Éthiopie'),
	(67, 'ER', 'Érythrée'),
	(68, 'EE', 'Estonie'),
	(69, 'FO', 'Îles Féroé'),
	(70, 'FK', 'Îles (malvinas) Falkland'),
	(71, 'GS', 'Géorgie du Sud et les Îles Sandwich du Sud'),
	(72, 'FJ', 'Fidji'),
	(73, 'FI', 'Finlande'),
	(74, 'AX', 'Îles Goéland'),
	(75, 'FR', 'France'),
	(76, 'GF', 'Guyane Française'),
	(77, 'PF', 'Polynésie Française'),
	(78, 'TF', 'Terres Australes Françaises'),
	(79, 'DJ', 'Djibouti'),
	(80, 'GA', 'Gabon'),
	(81, 'GE', 'Géorgie'),
	(82, 'GM', 'Gambie'),
	(83, 'PS', 'Territoire Palestinien Occupé'),
	(84, 'DE', 'Allemagne'),
	(85, 'GH', 'Ghana'),
	(86, 'GI', 'Gibraltar'),
	(87, 'KI', 'Kiribati'),
	(88, 'GR', 'Grèce'),
	(89, 'GL', 'Groenland'),
	(90, 'GD', 'Grenade'),
	(91, 'GP', 'Guadeloupe'),
	(92, 'GU', 'Guam'),
	(93, 'GT', 'Guatemala'),
	(94, 'GN', 'Guinée'),
	(95, 'GY', 'Guyana'),
	(96, 'HT', 'Haïti'),
	(97, 'HM', 'Îles Heard et Mcdonald'),
	(98, 'VA', 'Saint-Siège (état de la Cité du Vatican)'),
	(99, 'HN', 'Honduras'),
	(100, 'HK', 'Hong-Kong'),
	(101, 'HU', 'Hongrie'),
	(102, 'IS', 'Islande'),
	(103, 'IN', 'Inde'),
	(104, 'ID', 'Indonésie'),
	(105, 'IR', 'République Islamique d\'Iran'),
	(106, 'IQ', 'Iraq'),
	(107, 'IE', 'Irlande'),
	(108, 'IL', 'Israël'),
	(109, 'IT', 'Italie'),
	(110, 'CI', 'Côte d\'Ivoire'),
	(111, 'JM', 'Jamaïque'),
	(112, 'JP', 'Japon'),
	(113, 'KZ', 'Kazakhstan'),
	(114, 'JO', 'Jordanie'),
	(115, 'KE', 'Kenya'),
	(116, 'KP', 'République Populaire Démocratique de Corée'),
	(117, 'KR', 'République de Corée'),
	(118, 'KW', 'Koweït'),
	(119, 'KG', 'Kirghizistan'),
	(120, 'LA', 'République Démocratique Populaire Lao'),
	(121, 'LB', 'Liban'),
	(122, 'LS', 'Lesotho'),
	(123, 'LV', 'Lettonie'),
	(124, 'LR', 'Libéria'),
	(125, 'LY', 'Jamahiriya Arabe Libyenne'),
	(126, 'LI', 'Liechtenstein'),
	(127, 'LT', 'Lituanie'),
	(128, 'LU', 'Luxembourg'),
	(129, 'MO', 'Macao'),
	(130, 'MG', 'Madagascar'),
	(131, 'MW', 'Malawi'),
	(132, 'MY', 'Malaisie'),
	(133, 'MV', 'Maldives'),
	(134, 'ML', 'Mali'),
	(135, 'MT', 'Malte'),
	(136, 'MQ', 'Martinique'),
	(137, 'MR', 'Mauritanie'),
	(138, 'MU', 'Maurice'),
	(139, 'MX', 'Mexique'),
	(140, 'MC', 'Monaco'),
	(141, 'MN', 'Mongolie'),
	(142, 'MD', 'République de Moldova'),
	(143, 'MS', 'Montserrat'),
	(144, 'MA', 'Maroc'),
	(145, 'MZ', 'Mozambique'),
	(146, 'OM', 'Oman'),
	(147, 'NA', 'Namibie'),
	(148, 'NR', 'Nauru'),
	(149, 'NP', 'Népal'),
	(150, 'NL', 'Pays-Bas'),
	(151, 'AN', 'Antilles Néerlandaises'),
	(152, 'AW', 'Aruba'),
	(153, 'NC', 'Nouvelle-Calédonie'),
	(154, 'VU', 'Vanuatu'),
	(155, 'NZ', 'Nouvelle-Zélande'),
	(156, 'NI', 'Nicaragua'),
	(157, 'NE', 'Niger'),
	(158, 'NG', 'Nigéria'),
	(159, 'NU', 'Niué'),
	(160, 'NF', 'Île Norfolk'),
	(161, 'NO', 'Norvège'),
	(162, 'MP', 'Îles Mariannes du Nord'),
	(163, 'UM', 'Îles Mineures Éloignées des États-Unis'),
	(164, 'FM', 'États Fédérés de Micronésie'),
	(165, 'MH', 'Îles Marshall'),
	(166, 'PW', 'Palaos'),
	(167, 'PK', 'Pakistan'),
	(168, 'PA', 'Panama'),
	(169, 'PG', 'Papouasie-Nouvelle-Guinée'),
	(170, 'PY', 'Paraguay'),
	(171, 'PE', 'Pérou'),
	(172, 'PH', 'Philippines'),
	(173, 'PN', 'Pitcairn'),
	(174, 'PL', 'Pologne'),
	(175, 'PT', 'Portugal'),
	(176, 'GW', 'Guinée-Bissau'),
	(177, 'TL', 'Timor-Leste'),
	(178, 'PR', 'Porto Rico'),
	(179, 'QA', 'Qatar'),
	(180, 'RE', 'Réunion'),
	(181, 'RO', 'Roumanie'),
	(182, 'RU', 'Fédération de Russie'),
	(183, 'RW', 'Rwanda'),
	(184, 'SH', 'Sainte-Hélène'),
	(185, 'KN', 'Saint-Kitts-et-Nevis'),
	(186, 'AI', 'Anguilla'),
	(187, 'LC', 'Sainte-Lucie'),
	(188, 'PM', 'Saint-Pierre-et-Miquelon'),
	(189, 'VC', 'Saint-Vincent-et-les Grenadines'),
	(190, 'SM', 'Saint-Marin'),
	(191, 'ST', 'Sao Tomé-et-Principe'),
	(192, 'SA', 'Arabie Saoudite'),
	(193, 'SN', 'Sénégal'),
	(194, 'SC', 'Seychelles'),
	(195, 'SL', 'Sierra Leone'),
	(196, 'SG', 'Singapour'),
	(197, 'SK', 'Slovaquie'),
	(198, 'VN', 'Viet Nam'),
	(199, 'SI', 'Slovénie'),
	(200, 'SO', 'Somalie'),
	(201, 'ZA', 'Afrique du Sud'),
	(202, 'ZW', 'Zimbabwe'),
	(203, 'ES', 'Espagne'),
	(204, 'EH', 'Sahara Occidental'),
	(205, 'SD', 'Soudan'),
	(206, 'SR', 'Suriname'),
	(207, 'SJ', 'Svalbard etÎle Jan Mayen'),
	(208, 'SZ', 'Swaziland'),
	(209, 'SE', 'Suède'),
	(210, 'CH', 'Suisse'),
	(211, 'SY', 'République Arabe Syrienne'),
	(212, 'TJ', 'Tadjikistan'),
	(213, 'TH', 'Thaïlande'),
	(214, 'TG', 'Togo'),
	(215, 'TK', 'Tokelau'),
	(216, 'TO', 'Tonga'),
	(217, 'TT', 'Trinité-et-Tobago'),
	(218, 'AE', 'Émirats Arabes Unis'),
	(219, 'TN', 'Tunisie'),
	(220, 'TR', 'Turquie'),
	(221, 'TM', 'Turkménistan'),
	(222, 'TC', 'Îles Turks et Caïques'),
	(223, 'TV', 'Tuvalu'),
	(224, 'UG', 'Ouganda'),
	(225, 'UA', 'Ukraine'),
	(226, 'MK', 'Macédoine du Nord'),
	(227, 'EG', 'Égypte'),
	(228, 'GB', 'Royaume-Uni'),
	(229, 'IM', 'Île de Man'),
	(230, 'TZ', 'République-Unie de Tanzanie'),
	(231, 'US', 'États-Unis'),
	(232, 'VI', 'Îles Vierges des États-Unis'),
	(233, 'BF', 'Burkina Faso'),
	(234, 'UY', 'Uruguay'),
	(235, 'UZ', 'Ouzbékistan'),
	(236, 'VE', 'Venezuela'),
	(237, 'WF', 'Wallis et Futuna'),
	(238, 'WS', 'Samoa'),
	(239, 'YE', 'Yémen'),
	(240, 'CS', 'Serbie-et-Monténégro'),
	(241, 'ZM', 'Zambie')";
        }

        DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};