<?php

use Illuminate\Database\Seeder;

class CollectionRegexesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('collection_regexes')->delete();

        \DB::table('collection_regexes')->insert(array (
            0 =>
            array (
                'id' => 1,
                'group_regex' => '^alt\\.binaries\\.teevee$',
            'regex' => '/(?P<match1>\\[[\\d#]+\\]-\\[.+?\\]-\\[.+?\\])-\\[ (?P<match2>.+?) \\][- ]\\[\\d+\\/\\d+\\] - ".+?" yEnc$/i',
                'status' => 1,
                'description' => '[278997]-[FULL]-[#a.b.erotica]-[ chi-the.walking.dead.xxx ]-[06/51] - "chi-the.walking.dead.xxx-s.mp4" yEnc ::: [######]-[FULL]-[#a.b.teevee@EFNet]-[ Misfits.S01.SUBPACK.DVDRip.XviD-P0W4DVD ] [1/5] - "Misfits.S01.SUBPACK.DVDRip.XviD-P0W4DVD.nfo" yEnc ::: Re: [147053]-[FULL]-[#a.b.teevee]-[ Top_Gear.20x04.HDTV_x264-FoV ]-[11/59] - "top_gear.20x04.hdtv_x264-fov.r00" yEnc',
                'ordinal' => 0,
            ),
            1 =>
            array (
                'id' => 2,
                'group_regex' => '^alt\\.binaries\\.teevee$',
            'regex' => '/(?P<match1>\\[[\\d#]+\\]-\\[.+?\\]-\\[.+?\\])-\\[ (?P<match2>.+?) \\][ -]{0,3}".+?" yEnc$/i',
                'status' => 1,
                'description' => '[185409]-[FULL]-[a.b.teeveeEFNet]-[ Dragon.Ball.Z.S03E24.1080p.WS.BluRay.x264-CCAT ]-"dragon.ball.z.s03e24.1080p.ws.bluray.x264-ccat.nfo" yEnc',
                'ordinal' => 1,
            ),
            2 =>
            array (
                'id' => 3,
                'group_regex' => '^alt\\.binaries\\.teevee$',
            'regex' => '/^(?P<match1>\\[#a\\.b\\.teevee\\] .+? - \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '[#a.b.teevee] Parks.and.Recreation.S01E01.720p.WEB-DL.DD5.1.H.264-CtrlHD - [01/24] - "Parks.and.Recreation.S01E01.720p.WEB-DL.DD5.1.H.264-CtrlHD.nfo" yEnc',
                'ordinal' => 2,
            ),
            3 =>
            array (
                'id' => 4,
                'group_regex' => '^alt\\.binaries\\.teevee$',
            'regex' => '/^(?P<match1>[a-z0-9]+ - )\\[\\d+\\/\\d+\\] - "[a-z0-9]+\\..+?" yEnc$/',
                'status' => 1,
                'description' => 'ah63jka93jf0jh26ahjas558 - [01/22] - "ah63jka93jf0jh26ahjas558.par2" yEnc',
                'ordinal' => 3,
            ),
            4 =>
            array (
                'id' => 5,
                'group_regex' => '^alt\\.binaries\\.teevee$',
            'regex' => '/^(?P<match1>[a-z0-9]+ \\()\\d+\\/\\d+\\) ".+?" - \\d+[,.]\\d+ [mMkKgG][bB] - yEnc$/',
                'status' => 1,
            'description' => 'fhdbg34rgjdsfd008c (42/43) "fhdbg34rgjdsfd008c.vol062+64.par2" - 3,68 GB - yEnc',
                'ordinal' => 4,
            ),
            5 =>
            array (
                'id' => 6,
                'group_regex' => '^alt\\.binaries\\.teevee$',
            'regex' => '/^(?P<match1>[a-zA-Z0-9]+)\\[\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => 't2EI3CdWdF0hi5b8L9tkx[08/52] - "t2EI3CdWdF0hi5b8L9tkx.part07.rar" yEnc',
                'ordinal' => 5,
            ),
            6 =>
            array (
                'id' => 7,
                'group_regex' => '^alt\\.binaries\\.0day\\.stuffz$',
            'regex' => '/^(?P<match0>[a-zA-Z0-9].+?)(?P<match1> - )\\[\\d+(?P<match2>\\/\\d+\\] - ").+?" yEnc$/',
                'status' => 1,
                'description' => '//ArcSoft.TotalMedia.Theatre.v5.0.1.87-Lz0 - [08/35] - "ArcSoft.TotalMedia.Theatre.v5.0.1.87-Lz0.vol43+09.par2" yEnc',
                'ordinal' => 5,
            ),
            7 =>
            array (
                'id' => 8,
                'group_regex' => '^alt\\.binaries\\.0day\\.stuffz$',
            'regex' => '/^(?P<match0>[a-zA-Z0-9].+?) \\[\\d+(?P<match1>\\/\\d+\\] - ").+?" yEnc$/',
                'status' => 1,
                'description' => '//rld-tcavu1 [5/6] - "rld-tcavu1.rar" yEnc',
                'ordinal' => 10,
            ),
            8 =>
            array (
                'id' => 9,
                'group_regex' => '^alt\\.binaries\\.0day\\.stuffz$',
            'regex' => '/^(?P<match0>\\((.+?)\\) \\[)\\d+(?P<match1>\\/\\d+] - ").+?" yEnc$/',
                'status' => 1,
            'description' => '//(DVD Shrink.ss) [1/1] - "DVD Shrink.ss.rar" yEnc',
                'ordinal' => 15,
            ),
            9 =>
            array (
                'id' => 10,
                'group_regex' => '^alt\\.binaries\\.0day\\.stuffz$',
            'regex' => '/^(?P<match0>[a-zA-Z0-9].+?)\\(\\d+(?P<match1>\\/\\d+\\) - ").+?" yEnc$/',
                'status' => 1,
            'description' => '//WinASO.Registry.Optimizer.4.8.0.0(1/4) - "WinASO_RO_v4.8.0.rar" yEnc',
                'ordinal' => 20,
            ),
            10 =>
            array (
                'id' => 11,
                'group_regex' => '^alt\\.binaries\\.3d$',
            'regex' => '/^(?P<match0>.+)File \\d+ (?P<match1>of \\d+): ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//ugMBqtZw3vFnmrmr16EQhaAz9mMri9mD - File 01 of 98: "1vJ7wswi9ZG6YrzE5OGBFPKeuRv9X86xgYdK.par2" yEnc',
                'ordinal' => 5,
            ),
            11 =>
            array (
                'id' => 12,
                'group_regex' => '^alt\\.binaries\\.3d$',
            'regex' => '/^(?P<match0>.+)\\[\\d+\\/(?P<match1>\\d+\\]) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//999XL[074/103] - "LLKJ678CCDE1223ss.part073.rar" yEnc',
                'ordinal' => 10,
            ),
            12 =>
            array (
                'id' => 13,
                'group_regex' => '^alt\\.binaries\\.amazing$',
            'regex' => '/^\\(\\?+\\) \\[\\d+(?P<match0>\\/\\d+\\])[-_ ]{0,3}"(?P<match1>[\\w\\säöüÄÖÜß¶!.,&_\\()\\[\\]\\\'\\`-]{8,}?\\b.?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//(???) [1/1] - "Asimov, Isaac - [Foundation 01] - De Foundation_v2.rar" yEnc',
                'ordinal' => 5,
            ),
            13 =>
            array (
                'id' => 14,
                'group_regex' => '^alt\\.binaries\\.amazing$',
            'regex' => '/^\\([\\w!.,&_ \\()\\[\\]\\\'\\`-]{8,}\\)[-_ ]{0,3}\\[\\d+(?P<match0>\\/\\d+\\])[-_ ]{0,3}"(?P<match1>[\\w\\säöüÄÖÜß¶!.,&_\\()\\[\\]\\\'\\`-]{8,}?\\b.?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//(Ass Backwards (2013) WEBrip XviD AC3 (english subs)) [18/35] - "Ass Backwards (2013) WEBrip XviD AC3 (english subs).part17.rar" yEnc',
                'ordinal' => 10,
            ),
            14 =>
            array (
                'id' => 15,
                'group_regex' => '^alt\\.binaries\\.amazing$',
            'regex' => '/^\\w+[-_ ]{0,3}"(?P<match0>[\\w\\säöüÄÖÜß¶!.,&_\\()\\[\\]\\\'\\`-]{8,}?\\b.?)([-_](?P<match1>proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")\\d+(\\/\\d+)[-_\\s]{0,3}yEnc$/i',
                'status' => 1,
                'description' => '//05VANmA80DckBho "05VANmA80DckBho.part07.rar"08/94 yEnc',
                'ordinal' => 15,
            ),
            15 =>
            array (
                'id' => 16,
                'group_regex' => '^alt\\.binaries\\.amazing$',
            'regex' => '/^\\(Angels4Always\\)[-_ ]{0,3}\\[\\d+(?P<match0>\\/\\d+\\])[-_ ]{0,3}"(?P<match1>[\\w\\säöüÄÖÜß¶!.,&_\\()\\[\\]\\\'\\`-]{8,}?\\b.?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//(Angels4Always) [1/1] - "Vermeulen, John - De tweelingparadox.rar" yEnc',
                'ordinal' => 20,
            ),
            16 =>
            array (
                'id' => 17,
                'group_regex' => '^alt\\.binaries\\.amazing$',
            'regex' => '/^www\\.wolfsteamers\\.info[-_ ]{0,3}\\[\\d+(?P<match0>\\/\\d+\\])[-_ ]{0,3}"(?P<match1>[\\w\\säöüÄÖÜß¶!.,&_\\()\\[\\]\\\'\\`-]{8,}?\\b.?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}\\d+([.,]\\d+)? [kKmMgG][bB][-_\\s]{0,3}[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//www.wolfsteamers.info [1/6] - "Wohnen Bauen Leben - Sommer 2014.par2" - 16,46 MB yEnc',
                'ordinal' => 25,
            ),
            17 =>
            array (
                'id' => 18,
                'group_regex' => '^alt\\.binaries\\.amazing$',
            'regex' => '/^[\\w!.,&_ \\()\\[\\]\\\'\\`-]{8,}\\[\\d+(?P<match0>\\/\\d+\\])[-_ ]{0,3}"(?P<match1>[\\w\\säöüÄÖÜß¶!.,&_\\()\\[\\]\\\'\\`-]{8,}?\\b.?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//Heaven_en_Fayth Presenteren Diana Gabaldon - Reiziger Cyclus 01 - De Reiziger[0/3] - "Diana Gabaldon - Reiziger Cyclus 01 - De Reiziger.nzb" yEnc',
                'ordinal' => 30,
            ),
            18 =>
            array (
                'id' => 19,
                'group_regex' => '^alt\\.binaries\\.amazing$',
            'regex' => '/^\\w+[-_ ]{0,3}\\[\\d+(?P<match0>\\/\\d+\\])[-_ ]{0,3}"(?P<match1>[\\w\\säöüÄÖÜß¶!.,&_\\()\\[\\]\\\'\\`-]{8,}?\\b.?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//096XZFUPQ0PxH4441H14fU8V - [34/99] - "096XZFUPQ0PxH4441H14fU8V.part033.rar" yEnc',
                'ordinal' => 35,
            ),
            19 =>
            array (
                'id' => 20,
                'group_regex' => '^alt\\.binaries\\.amazing$',
            'regex' => '/^\\(.+the-ultimate-force\\.org\\.ua\\/\\)[-_ ]{0,3}\\[\\d+(?P<match0>\\/\\d+\\])[-_ ]{0,3}"(?P<match1>[\\w\\säöüÄÖÜß¶!.,&_\\()\\[\\]\\\'\\`-]{8,}?\\b.?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//(Slaapkop post voor http://the-ultimate-force.org.ua/) [0/7] - "Wham - I\'m Your Man (1985).nzb" yEnc',
                'ordinal' => 40,
            ),
            20 =>
            array (
                'id' => 21,
                'group_regex' => '^alt\\.binaries\\.amazing$',
            'regex' => '/^\\(\\d+(?P<match0>\\/\\d+\\)) - P2H - "(?P<match1>[\\w\\säöüÄÖÜß¶!.,&_\\()\\[\\]\\\'\\`-]{8,}?\\b.?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}\\d+([.,]\\d+)? [kKmMgG][bB][-_\\s]{0,3}\\w+[-_\\s]{0,3}yEnc$/i',
                'status' => 1,
            'description' => '//(001/101) - P2H - "L62WD8P4U539A7.par2" - 4,66 GB - Z9F6KN7SXRCY845 yEnc',
                'ordinal' => 45,
            ),
            21 =>
            array (
                'id' => 22,
                'group_regex' => '^alt\\.binaries\\.amazing$',
            'regex' => '/^\\(\\d+(?P<match0>\\/\\d+\\))([-_ ]{0,4}(Description|FTTEAM\\.INFO))?[-_ ]{0,4}"(?P<match1>[\\w\\säöüÄÖÜß¶!.,&_\\()\\[\\]\\\'\\`-]{8,}?\\b.?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}\\d+([.,]\\d+)? [kKmMgG][bB][-_\\s]{0,3}[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//(001/101)  "654258ItB1418pBRDNS264159.par2" - 9,74 GB - yEnc ::: //(001/105) - Description - "oH291TB0bPxf3lqm1P7QQ.par2" - 4,56 GB - yEnc ::: //(03/43) - FTTEAM.INFO - "JDSJ2J4ENASJCKR-FTTEAM.INFO.part02.rar" - 2,04 GB - yEnc',
                'ordinal' => 50,
            ),
            22 =>
            array (
                'id' => 23,
                'group_regex' => '^alt\\.binaries\\.amazing$',
            'regex' => '/^[-_ .]{0,4}\\[\\d+(?P<match0>\\/\\d+\\])[-_ ]{0,3}"(?P<match1>[\\w\\säöüÄÖÜß¶!.,&_\\()\\[\\]\\\'\\`-]{8,}?\\b.?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//- - [001/242] - "C65JuogI92CwfMo2TiX59.par2" yEnc',
                'ordinal' => 55,
            ),
            23 =>
            array (
                'id' => 24,
                'group_regex' => '^alt\\.binaries\\.amazing$',
            'regex' => '/^[-_ ]{0,4}\\[\\d+\\/\\d+\\][-_ ]{0,3}".+" yEnc[-_ ]{0,3}\\[\\d+(?P<match0>\\/\\d+\\])[-_ ]{0,3}"(?P<match1>[\\w\\säöüÄÖÜß¶!.,&_\\()\\[\\]\\\'\\`-]{8,}?\\b.?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//- [01/10] - "file.xyz" yEnc - [001/107] - "86u1Qr8mm56jGiW7nUPTM.par2" yEnc',
                'ordinal' => 60,
            ),
            24 =>
            array (
                'id' => 25,
                'group_regex' => '^alt\\.binaries\\.anime$',
            'regex' => '/^(?P<match0>\\((\\[.+?\\] .+?)\\) \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
            'description' => '//([AST] One Piece Episode 301-350 [720p]) [007/340] - "One Piece episode 301-350.part006.rar" yEnc',
                'ordinal' => 5,
            ),
            25 =>
            array (
                'id' => 26,
                'group_regex' => '^alt\\.binaries\\.anime$',
            'regex' => '/^(?P<match0>\\[.+?\\]\\[ (.+?) \\] \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
            'description' => '//[REPOST][ New Doraemon 2013.05.03 Episode 328 (TV Asahi) 1080i HDTV MPEG2 AAC-DoraClub.org ] [35/61] - "doraclub.org-doraemon-20130503-b8de1f8e.r32" yEnc',
                'ordinal' => 10,
            ),
            26 =>
            array (
                'id' => 27,
                'group_regex' => '^alt\\.binaries\\.anime$',
            'regex' => '/^(?P<match0>\\[.+?\\] (.+?) \\[[A-F0-9]+\\] \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
            'description' => '//[De.us] Suzumiya Haruhi no Shoushitsu (1920x1080 h.264 Dual-Audio FLAC 10-bit) [017CB24D] [000/357] - "[De.us] Suzumiya Haruhi no Shoushitsu (1920x1080 h.264 Dual-Audio FLAC 10-bit) [017CB24D].nzb" yEnc',
                'ordinal' => 15,
            ),
            27 =>
            array (
                'id' => 28,
                'group_regex' => '^alt\\.binaries\\.anime$',
            'regex' => '/^(?P<match0>\\[.+?\\] (.+?) - \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
            'description' => '//[eraser] Ghost in the Shell ARISE - border_1 Ghost Pain (BD 720p Hi444PP LC-AAC Stereo) - [01/65] - "[eraser] Ghost in the Shell ARISE - border_1 Ghost Pain (BD 720p Hi444PP LC-AAC Stereo) .md5" yEnc',
                'ordinal' => 20,
            ),
            28 =>
            array (
                'id' => 29,
                'group_regex' => '^alt\\.binaries\\.anime$',
            'regex' => '/^\\(\\d+(?P<match0>\\/\\d+\\) - (.+?) - ").+?" - \\d+[,.]\\d+ [mMkKgG][bB] - yEnc$/',
                'status' => 1,
            'description' => '//(01/27) - Maid.Sama.Jap.dubbed.german.english.subbed - "01 Misaki ist eine Maid!.divx" - 6,44 GB - yEnc',
                'ordinal' => 25,
            ),
            29 =>
            array (
                'id' => 30,
                'group_regex' => '^alt\\.binaries\\.anime$',
            'regex' => '/^(?P<match0>\\[ (.+?) \\] \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
            'description' => '//[ New Doraemon 2013.06.14 Episode 334 (TV Asahi) 1080i HDTV MPEG2 AAC-DoraClub.org ] [01/60] - "doraclub.org-doraemon-20130614-fae28cec.nfo" yEnc',
                'ordinal' => 30,
            ),
            30 =>
            array (
                'id' => 31,
                'group_regex' => '^alt\\.binaries\\.anime$',
            'regex' => '/^<TOWN> www\\.town\\.ag > sponsored by www\\.ssl-news\\.info > \\(\\d+(?P<match0>\\/\\d+\\) ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[,.]\\d+ [mMkKgG][bB] - yEnc$/i',
                'status' => 1,
            'description' => '//<TOWN> www.town.ag > sponsored by www.ssl-news.info > (1/3) "HolzWerken_40.par2" - 43,89 MB - yEnc ::: //<TOWN> www.town.ag > sponsored by www.ssl-news.info > (1/5) "[HorribleSubs]_Aku_no_Hana_-_01_[480p].par2" - 157,13 MB - yEnc',
                'ordinal' => 35,
            ),
            31 =>
            array (
                'id' => 32,
                'group_regex' => '^alt\\.binaries\\.anime$',
            'regex' => '/^\\(\\d+\\/\\d+\\)(?P<match0>.+?www\\.town\\.ag.+?sponsored by (www\\.)?ssl-news\\.info<+?(.+?)) ".+?" yEnc$/',
                'status' => 1,
            'description' => '//(1/9)<<<www.town.ag>>> sponsored by ssl-news.info<<<[HorribleSubs]_AIURA_-_01_[480p].mkv "[HorribleSubs]_AIURA_-_01_[480p].par2" yEnc',
                'ordinal' => 40,
            ),
            32 =>
            array (
                'id' => 33,
                'group_regex' => '^alt\\.binaries\\.anime$',
            'regex' => '/^(?P<match0>.+? \\[Dual [aA]udio, EngSub\\] .+?) - \\[\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//Overman King Gainer [Dual audio, EngSub] Exiled Destiny - [002/149] - "Overman King Gainer.part001.rar" yEnc',
                'ordinal' => 45,
            ),
            33 =>
            array (
                'id' => 34,
                'group_regex' => '^alt\\.binaries\\.anime$',
            'regex' => '/^(?P<match0>(blazedazer_.+?) \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//blazedazer_NAN000010 [140/245] - "blazedazer_NAN000010.part138.rar" yEnc',
                'ordinal' => 50,
            ),
            34 =>
            array (
                'id' => 35,
                'group_regex' => '^alt\\.binaries\\.astronomy$',
            'regex' => '/^(?P<match0>\\d+-)\\d+\\[\\d+(\\/\\d+\\] - ").+?" yEnc$/',
                'status' => 1,
                'description' => '//58600-0[51/51] - "58600-0.vol0+1.par2" yEnc',
                'ordinal' => 5,
            ),
            35 =>
            array (
                'id' => 36,
                'group_regex' => '^alt\\.binaries\\.astronomy$',
            'regex' => '/^\\[ TOWN \\][ _-]{0,3}\\[ www\\.town\\.ag \\][ _-]{0,3}\\[ partner of www\\.ssl-news\\.info \\][ _-]{0,3}\\[ .* \\] \\[\\d+\\/(?P<match0>\\d+\\][ _-]{0,3}("|#34;).+)\\.(par2|rar|nfo|nzb)("|#34;)[ _-]{0,3}\\d+[.,]\\d+ [kKmMgG][bB][ _-]{0,3}yEnc$/i',
                'status' => 1,
                'description' => '//[ TOWN ]-[ www.town.ag ]-[ partner of www.ssl-news.info ]-[ TV ] [01/16] - "Jono.And.Ben.At.Ten.S02E14.PDTV.x264-FiHTV.par2" - 198,25 MB yEnc',
                'ordinal' => 10,
            ),
            36 =>
            array (
                'id' => 37,
                'group_regex' => '^alt\\.binaries\\.ath$',
            'regex' => '/^\\[\\d+\\/\\d+ (?P<match0>[a-zA-Z0-9]+ .+?)\\..+?" yEnc$/',
                'status' => 1,
                'description' => '//[3/3 Karel Gott - Die Biene Maja Original MP3 Karel Gott - Die Biene Maja Original MP3.mp3.vol0+1.PAR2" yEnc',
                'ordinal' => 5,
            ),
            37 =>
            array (
                'id' => 38,
                'group_regex' => '^alt\\.binaries\\.ath$',
            'regex' => '/^\\[ TOWN \\][ _-]{0,3}\\[ www\\.town\\.ag \\][ _-]{0,3}\\[ partner of www\\.ssl-news\\.info \\][ _-]{0,3}\\[ .* \\] \\[\\d+\\/(?P<match0>\\d+\\][ _-]{0,3}("|#34;).+)\\.(par2|rar|nfo|nzb)("|#34;)[ _-]{0,3}\\d+[.,]\\d+ [kKmMgG][bB][ _-]{0,3}yEnc$/i',
                'status' => 1,
                'description' => '//[ TOWN ]-[ www.town.ag ]-[ partner of www.ssl-news.info ]-[ TV ] [01/16] - "Jono.And.Ben.At.Ten.S02E14.PDTV.x264-FiHTV.par2" - 198,25 MB yEnc',
                'ordinal' => 10,
            ),
            38 =>
            array (
                'id' => 39,
                'group_regex' => '^alt\\.binaries\\.ath$',
            'regex' => '/^(?P<match0>[a-f0-9]{32}) - \\(\\d+\\/\\d+\\) - "[a-f0-9]{32}\\..+" yEnc$/',
                'status' => 1,
            'description' => '//8b33bf5960714efbe6cfcf13dd0f618f - (01/55) - "8b33bf5960714efbe6cfcf13dd0f618f.par2" yEnc',
                'ordinal' => 15,
            ),
            39 =>
            array (
                'id' => 40,
                'group_regex' => '^alt\\.binaries\\.ath$',
            'regex' => '/^(?P<match0>[a-z]+ - \\[)\\d+\\/\\d+\\] - "([a-z]+)\\..+?" yEnc$/',
                'status' => 1,
                'description' => '//nmlsrgnb - [04/37] - "htwlngmrstdsntdnh.part03.rar" yEnc',
                'ordinal' => 20,
            ),
            40 =>
            array (
                'id' => 41,
                'group_regex' => '^alt\\.binaries\\.ath$',
            'regex' => '/^(?P<match0>>+Hell-of-Usenet(\\.org)?>+(?P<match1> -)? \\[)\\d+\\/\\d+\\] - "(.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")( - \\d+[.,]\\d+ [kKmMgG][bB])? yEnc$/i',
                'status' => 1,
                'description' => '//>>>>>Hell-of-Usenet>>>>> - [01/33] - "Cassadaga Hier lebt der Teufel 2011 German AC3 DVDRip XViD iNTERNAL-VhV.par2" yEnc',
                'ordinal' => 25,
            ),
            41 =>
            array (
                'id' => 42,
                'group_regex' => '^alt\\.binaries\\.ath$',
            'regex' => '/^(?P<match0>[a-z0-9]{10,}) \\(\\d+\\/\\d+\\) "[a-z0-9]{10,}\\..+?" yEnc$/',
                'status' => 1,
            'description' => '//1dbo1u5ce6182436yb2eo (001/105) "1dbo1u5ce6182436yb2eo.par2" yEnc',
                'ordinal' => 30,
            ),
            42 =>
            array (
                'id' => 43,
                'group_regex' => '^alt\\.binaries\\.ath$',
            'regex' => '/^(?P<match0><<<>>>kosova-shqip\\.eu<<< (.+?) >>>kosova-shqip.eu<<<<<< - \\()\\d+\\/\\d+\\) - ".+?" yEnc$/',
                'status' => 1,
            'description' => '//<<<>>>kosova-shqip.eu<<< Deep SWG - 90s Club Megamix 2011 >>>kosova-shqip.eu<<<<<< - (2/4) - "Deep SWG - 90s Club Megamix 2011.rar" yEnc',
                'ordinal' => 35,
            ),
            43 =>
            array (
                'id' => 44,
                'group_regex' => '^alt\\.binaries\\.ath$',
            'regex' => '/^(?P<match0><Have Fun> \\[)\\d+(?P<match1>\\/\\d+\\] - .+? )yEnc$/',
                'status' => 1,
                'description' => '//<Have Fun> [02/39] - SpongeBoZZ yEnc',
                'ordinal' => 40,
            ),
            44 =>
            array (
                'id' => 45,
                'group_regex' => '^alt\\.binaries\\.ath$',
            'regex' => '/^(?P<match0>[a-zA-Z0-9].+?\\s{2,}|Old Dad uppt\\s+)(?P<match1>.+?) \\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//Old Dad uppt Taffe Mädels XivD LD HDTV Rip oben Kleine Einblendug German 01/43] - "Taffe Mädels.par2" yEnc',
                'ordinal' => 45,
            ),
            45 =>
            array (
                'id' => 46,
                'group_regex' => '^alt\\.binaries\\.ath$',
            'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\][ _-]{0,3}".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}\\d+[.,]\\d+ [kKmMgG][bB].+UpperTeam.+ Secretusenet\\.com.+yEnc$/i',
                'status' => 1,
                'description' => '//[28/55] - "XzrgzBWoRqtcuBF.part27.rar" - 4,78 GB >>>UpperTeam for Usenet-Space-Cowboys.info and Secretusenet.com<<< yEnc',
                'ordinal' => 50,
            ),
            46 =>
            array (
                'id' => 47,
                'group_regex' => '^alt\\.binaries\\.audio\\.warez$',
            'regex' => '/^(Re: )?(?P<match0>\\[.+?\\]-\\[\\d+\\]-\\[(.+?)\\]-\\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//[#nzbx.audio/EFnet]-[1681]-[MagicScore.Note.v7.084-UNION]-[02/12] - "u-msn7.r00" yEnc',
                'ordinal' => 5,
            ),
            47 =>
            array (
                'id' => 48,
                'group_regex' => '^alt\\.binaries\\.audio\\.warez$',
            'regex' => '/^(?P<match0>([\\w.-]+) ?\\[)\\d+( of |\\/)\\d+\\] ".+?" yEnc$/',
                'status' => 1,
                'description' => '//MacProVideo.com.Pro.Tools8.101.Core.Pro.Tools8.TUTORiAL-DYNAMiCS [2 of 50] "dyn-mpvprtls101.sfv" yEnc ::: //Native.Instruments.Komplete.7.VSTi.RTAS.AU.DVDR.D02-DYNAMiCS[01/13] - "dyn.par2" yEnc ::: //Native.Instruments.Komplete.7.VSTi.RTAS.AU.DVDR.DYNAMiCS.NZB.ONLY [02/13] - "dyn.vol0000+001.PAR2" yEnc',
                'ordinal' => 10,
            ),
            48 =>
            array (
                'id' => 49,
                'group_regex' => '^alt\\.binaries\\.audio\\.warez$',
            'regex' => '/^(?P<match0>REQ : .+? ~ (.+?) \\[)\\d+ of \\d+\\] ".+?" yEnc$/',
                'status' => 1,
                'description' => '//REQ : VSL Stuff ~ Here\'s PreSonus Studio One 1.5.2 for OS X [16 of 22] "a-p152x.rar" yEnc',
                'ordinal' => 15,
            ),
            49 =>
            array (
                'id' => 50,
                'group_regex' => '^alt\\.binaries\\.audio\\.warez$',
            'regex' => '/^(?P<match0>([a-zA-Z0-9].+?) - \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
            'description' => '//Eminem - Recovery (2010) - [1/1] - "Eminem - Recovery (2010).rar" yEnc',
                'ordinal' => 20,
            ),
            50 =>
            array (
                'id' => 51,
                'group_regex' => '^alt\\.binaries\\.audio\\.warez$',
            'regex' => '/^(?P<match0>\\(\\?{4}\\) \\[)\\d+(?P<match1>\\/\\d+\\] - "(.+?))([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//(????) [1/1] - "Dust in the Wind - the Violin Solo.rar" yEnc',
                'ordinal' => 25,
            ),
            51 =>
            array (
                'id' => 52,
                'group_regex' => '^alt\\.binaries\\.audio\\.warez$',
            'regex' => '/^(?P<match0>(.+?) \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
            'description' => '//Native Instruments Battery 3 incl Library ( VST DX RTA )( windows ) Libraries [1/1] - "Native Instruments Battery 2 + 3 SERIAL KEY KEYGEN.nfo" yEnc',
                'ordinal' => 30,
            ),
            52 =>
            array (
                'id' => 53,
                'group_regex' => '^alt\\.binaries\\.b4e$',
            'regex' => '/^(?P<match0>"(B4E-vip\\d+))\\..+?" yEnc$/',
                'status' => 1,
                'description' => '//"B4E-vip2851.r83" yEnc',
                'ordinal' => 5,
            ),
            53 =>
            array (
                'id' => 54,
                'group_regex' => '^alt\\.binaries\\.b4e$',
            'regex' => '/^\\[\\d+(?P<match0>\\/\\d+\\] - "(.+?) \\().+?" yEnc$/',
                'status' => 1,
            'description' => '//[02/12] - "The.Call.GERMAN.2013.DL.AC3.Dubbed.720p.BluRay.x264 (Avi-RiP ).rar" yEnc',
                'ordinal' => 10,
            ),
            54 =>
            array (
                'id' => 55,
                'group_regex' => '^alt\\.binaries\\.b4e$',
            'regex' => '/^(?P<match0>- "(.+?))([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//- "as-jew3.vol03+3.PAR2" - yEnc',
                'ordinal' => 15,
            ),
            55 =>
            array (
                'id' => 56,
                'group_regex' => '^alt\\.binaries\\.barbarella$',
            'regex' => '/^(?P<match0>([a-zA-Z0-9].+?) - \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//ACDSee.Video.Converter.Pro.v3.5.41.Incl.Keymaker-CORE - [1/7] - "ACDSee.Video.Converter.Pro.v3.5.41.Incl.Keymaker-CORE.par2" yEnc',
                'ordinal' => 5,
            ),
            56 =>
            array (
                'id' => 57,
                'group_regex' => '^alt\\.binaries\\.barbarella$',
            'regex' => '/^(?P<match0>([\\w.-]+)\\s+-\\s+").+?" yEnc$/',
                'status' => 1,
                'description' => '//Die.Nacht.Der.Creeps.THEATRICAL.GERMAN.1986.720p.BluRay.x264-GH - "gh-notcreepskf720.nfo" yEnc ::: //The.Fast.and.the.Furious.Tokyo.Dr',
                'ordinal' => 10,
            ),
            57 =>
            array (
                'id' => 58,
                'group_regex' => '^alt\\.binaries\\.barbarella$',
            'regex' => '/^(?P<match0>((\\[[A-Za-z]+\\]\\.)?[a-zA-Z0-9].+?) ?([\\^<> ]+give-me-all\\.org[\\^<> ]+|[\\^<> ]+)DRM[\\^<> ]+.+? - \\()\\d+\\/\\d+\\)  ".+?" - .+? yEnc$/',
                'status' => 1,
            'description' => '//CorelDRAW Technical Suite X6-16.3.0.1114 x32-x64<><>DRM<><> - (10/48)  "CorelDRAW Technical Suite X6-16.3.0.1114 x32-x64.part09.rar" - 2,01 GB - yEnc ::: //AnyDVD_7.1.9.3_-_HD-BR - Beta<>give-me-all.org<>DRM<><> - (1/3)  "AnyDVD_7.1.9.3_-_HD-BR - Beta.par2" - 14,53 MB - yEnc ::: //Android Softarchive.net Collection Pack 27^^give-me-all.org^^^^DRM^^^^ - (01/26)  "Android Softarchive.net Collection Pack 27.par2" - 1,01 GB - yEnc ::: //WIN7_ULT_SP1_x86_x64_IE10_19_05_13_TRIBAL <> give-me-all.org <> DRM <> <> PW <> - (154/155)  "WIN7_ULT_SP1_x86_x64_IE10_19_05_13_TRIBAL.vol57+11.par2" - 7,03 GB - yEnc ::: //[Android].Ultimate.iOS7.Apex.Nova.Theme.v1.45 <> DRM <> - (1/3)  "[Android].Ultimate.iOS7.Apex.Nova.Theme.v1.45.par2" - 21,14 MB - yEnc',
                'ordinal' => 15,
            ),
            58 =>
            array (
                'id' => 59,
                'group_regex' => '^alt\\.binaries\\.barbarella$',
            'regex' => '/^\\(\\d+(?P<match0>\\/\\d+\\) - .+? - "(.+?))( \\(\\d+\\))?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[,.]\\d+ [mMkKgG][bB] - yEnc$/i',
                'status' => 1,
            'description' => '//(004/114) - Description - "Pluralsight.net XAML Patterns (10).rar" - 532,92 MB - yEnc',
                'ordinal' => 20,
            ),
            59 =>
            array (
                'id' => 60,
                'group_regex' => '^alt\\.binaries\\.barbarella$',
            'regex' => '/^\\(\\d+\\/\\d+\\)( -)? ".+?" - \\d+[,.]\\d+ [mMkKgG](?P<match0>[bB] - (.+?)) yEnc$/',
                'status' => 1,
            'description' => '//(59/81) "1973 .Lee.Jun.Fan.DVD9.untouched.z46" - 7,29 GB - Lee.Jun.Fan.sein.Film.DVD9.untouched yEnc ::: //(01/12) - "TransX - Living on a Video 1993.part01.rar" - 561,55 MB - TransX - Living on a Video 1993.[Lossless] Highh Quality yEnc',
                'ordinal' => 25,
            ),
            60 =>
            array (
                'id' => 61,
                'group_regex' => '^alt\\.binaries\\.barbarella$',
            'regex' => '/^(?P<match0>>>> www\\.lords-of-usenet\\.org <<<.+? "(.+?))([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") .+? \\[\\d+\\/\\d+\\] - .+? yEnc$/i',
                'status' => 1,
                'description' => '//>>> www.lords-of-usenet.org <<<  "Der Schuh Des Manitu.par2" DVD5  [001/158] - 4,29 GB yEnc',
                'ordinal' => 30,
            ),
            61 =>
            array (
                'id' => 62,
                'group_regex' => '^alt\\.binaries\\.barbarella$',
            'regex' => '/^.+? (-|\\(PW\\))\\s+\\[.+? -\\] \\[\\d+[,.]\\d+ [mMkKgG][bB]\\] \\[\\d+(?P<match0>\\/\\d+\\] "(.+?))([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//NEUES 4y - [@ usenet-4all.info - powered by ssl.news -] [5,58 GB] [002/120] "DovakinPack.part002.rar" yEnc ::: //NEUES 4y (PW)  [@ usenet-4all.info - powered by ssl.news -] [7,05 GB] [014/152] "EngelsGleich.part014.rar" yEnc',
                'ordinal' => 35,
            ),
            62 =>
            array (
                'id' => 63,
                'group_regex' => '^alt\\.binaries\\.barbarella$',
            'regex' => '/^(?P<match0>([a-zA-Z0-9].+?\\s{2,}|Old Dad uppt\\s+)(.+?) )\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//Old Dad uppt   Die Schatzinsel Teil 1+Teil2  AC3 DVD Rip German XviD Wp 01/33] - "upp11.par2" yEnc ::: //Old Dad uppt Scary Movie5 WEB RiP Line XviD German 01/24] - "Scary Movie 5.par2" yEnc',
                'ordinal' => 40,
            ),
            63 =>
            array (
                'id' => 64,
                'group_regex' => '^alt\\.binaries\\.barbarella$',
            'regex' => '/^.+?\\s{2,}\\d+[,.]\\d+ [mMkKgG][bB]\\s{2,}"(?P<match0>.+?_)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")\\s{2,}(\\d+ B|\\d+[,.]\\d+ [mMkKgG][bB]) yEnc$/i',
                'status' => 1,
                'description' => '//>>>  20,36 MB   "Winamp.Pro.v5.70.3392.Incl.Keygen-FFF.par2"   552 B yEnc ::: //..:[DoAsYouLike]:..    9,64 MB    "Snooper 1.39.5.par2"    468 B yEnc',
                'ordinal' => 45,
            ),
            64 =>
            array (
                'id' => 65,
                'group_regex' => '^alt\\.binaries\\.barbarella$',
            'regex' => '/^(?P<match0>\\(.+?\\) - "(.+?))([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//(MKV - DVD - Rip - German - English - Italiano) - "CALIGULA (1982) UNCUT.sfv" yEnc',
                'ordinal' => 50,
            ),
            65 =>
            array (
                'id' => 66,
                'group_regex' => '^alt\\.binaries\\.barbarella$',
            'regex' => '/^"(?P<match0>[a-z0-9]+)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//"sre56565ztrtzuzi8inzufft.par2" yEnc',
                'ordinal' => 55,
            ),
            66 =>
            array (
                'id' => 67,
                'group_regex' => '^alt\\.binaries\\.big$',
            'regex' => '/^(?P<match0>([\\w.-]+) - ").+?" yEnc$/',
                'status' => 1,
                'description' => '//Girls.against.Boys.2012.German.720p.BluRay.x264-ENCOUNTERS - "encounters-giagbo_720p.nfo" yEnc',
                'ordinal' => 5,
            ),
            67 =>
            array (
                'id' => 68,
                'group_regex' => '^alt\\.binaries\\.big$',
            'regex' => '/^(?P<match0>([a-z]{3,}) - \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//wtvrwschdhfthj - [001/246] - "dtstchhtmrrnvn.par2" yEnc ::: //oijhuiurfjvbklk - [01/18] - "tb5-3ioewr90f.par2" yEnc',
                'ordinal' => 10,
            ),
            68 =>
            array (
                'id' => 69,
                'group_regex' => '^alt\\.binaries\\.big$',
            'regex' => '/^\\(\\d+(?P<match0>\\/\\d+\\) - "(.+?))([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//(08/22) - "538D7B021B362A4300D1C0D84DD17E6D.r06" yEnc',
                'ordinal' => 15,
            ),
            69 =>
            array (
                'id' => 70,
                'group_regex' => '^alt\\.binaries\\.big$',
            'regex' => '/^(?P<match0>\\(\\?{4}\\) \\[)\\d+(?P<match1>\\/\\d+\\] - "(.+?))([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//(????) [02/71] - "Lasting Weep (1969-1971).part.par2" yEnc',
                'ordinal' => 20,
            ),
            70 =>
            array (
                'id' => 71,
                'group_regex' => '^alt\\.binaries\\.big$',
            'regex' => '/^\\(\\d+(?P<match0>\\/\\d+\\) "(.+?))([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[,.]\\d+ [mMkKgG][bB] -(re)? yEnc$/i',
                'status' => 1,
            'description' => '//(01/59) "ThienSuChungQuy_II_E16.avi.001" - 1,49 GB - yEnc ::: //(058/183) "LS_HoangChui_2xdvd5.part057.rar" - 8,36 GB -re yEnc',
                'ordinal' => 25,
            ),
            71 =>
            array (
                'id' => 72,
                'group_regex' => '^alt\\.binaries\\.big$',
            'regex' => '/^(?P<match0>\\[[a-zA-Z]+\\] .+? - \\[)\\d+\\/\\d+\\] - "(.+?)" yEnc$/',
                'status' => 1,
                'description' => '//[AoU] Upload#00287 - [04/43] - "Upload-ZGT1-20130525.part03.rar" yEnc',
                'ordinal' => 30,
            ),
            72 =>
            array (
                'id' => 73,
                'group_regex' => '^alt\\.binaries\\.big$',
            'regex' => '/^\\([a-z]+\\) \\[\\d+(?P<match0>\\/\\d+\\] - "(.+?))([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//(nate) [01/27] - "nate_light_13.05.23.par2" yEnc',
                'ordinal' => 35,
            ),
            73 =>
            array (
                'id' => 74,
                'group_regex' => '^alt\\.binaries\\.big$',
            'regex' => '/^(?P<match0>""(.+?))([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")" yEnc$/i',
                'status' => 1,
                'description' => '//""Absolute Database Component for BCBuilder 4-6 MultiUser Edit 4.85.rar"" yEnc',
                'ordinal' => 40,
            ),
            74 =>
            array (
                'id' => 75,
                'group_regex' => '^alt\\.binaries\\.big$',
            'regex' => '/^(?P<match0>[a-f0-9]{32}) - \\(\\d+\\/\\d+\\) - "[a-f0-9]{32}.+?" yEnc$/',
                'status' => 1,
            'description' => '//781e1d8dccc641e8df6530edb7679a0e - (26/30) - "781e1d8dccc641e8df6530edb7679a0e.rar" yEnc',
                'ordinal' => 45,
            ),
            75 =>
            array (
                'id' => 76,
                'group_regex' => '^alt\\.binaries\\.bloaf$',
            'regex' => '/^(?P<match0>[a-f0-9]{32}) - \\(\\d+\\/\\d+\\) - "[a-f0-9]{32}.+?" yEnc$/',
                'status' => 1,
            'description' => '//36c1d5d4eaf558126c67f00be46f77b6 - (01/22) - "36c1d5d4eaf558126c67f00be46f77b6.par2" yEnc',
                'ordinal' => 5,
            ),
            76 =>
            array (
                'id' => 77,
                'group_regex' => '^alt\\.binaries\\.bloaf$',
            'regex' => '/^\\[\\d+(?P<match0>\\/\\d+\\] - "(.+?))([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[,.]\\d+ [mMkKgG][bB] .+? usenet-space.+?yEnc$/i',
                'status' => 1,
                'description' => '//[10/17] - "EGk13kQ1c8.part09.rar" - 372.48 MB <-> usenet-space-cowboys.info <-> powered by secretusenet.com <-> yEnc',
                'ordinal' => 10,
            ),
            77 =>
            array (
                'id' => 78,
                'group_regex' => '^alt\\.binaries\\.bloaf$',
            'regex' => '/^(?P<match0>\\((.+?)\\) - ").+?" yEnc$/',
                'status' => 1,
            'description' => '//(Neu bei Bitfighter vom 23-07-2013) - "01 - Sido - Bilder Im Kopf.mp3" yEnc',
                'ordinal' => 15,
            ),
            78 =>
            array (
                'id' => 79,
                'group_regex' => '^alt\\.binaries\\.bloaf$',
            'regex' => '/^\\(\\d+(?P<match0>\\/\\d+\\) "(.+?))([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[,.]\\d+ [mMkKgG][bB] - yEnc$/i',
                'status' => 1,
            'description' => '//(2/8) "Mike.und.Molly.S01E22.Maennergespraeche.GERMAN.DL.DUBBED.720p.BluRay.x264-TVP.part1.rar" - 1023,92 MB - yEnc',
                'ordinal' => 20,
            ),
            79 =>
            array (
                'id' => 80,
                'group_regex' => '^alt\\.binaries\\.bloaf$',
            'regex' => '/^.+? (-|\\(PW\\))\\s+\\[.+? -\\] \\[\\d+[,.]\\d+ [mMkKgG][bB]\\] \\[\\d+(?P<match0>\\/\\d+\\] "(.+?))([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//4y (PW)   [@ usenet-4all.info - powered by ssl.news -] [27,35 GB] [001/118] "1f8867bb6f89491793d3.part001.rar" yEnc',
                'ordinal' => 25,
            ),
            80 =>
            array (
                'id' => 81,
                'group_regex' => '^alt\\.binaries\\.bloaf$',
            'regex' => '/^(?P<match0>(\\[[A-Za-z]+\\]\\.)?([a-zA-Z0-9].+?)([\\^<> ]+give-me-all\\.org[\\^<> ]+|[\\^<> ]+)DRM[\\^<> ]+.+? - \\()\\d+\\/\\d+\\)\\s+".+?" - .+? - yEnc$/',
                'status' => 1,
            'description' => '//Bennos Special Tools DVD - Die Letzte <> DRM <><> PW <> - (002/183)  "Bennos Special Tools DVD - Die Letzte.nfo" - 8,28 GB - yEnc',
                'ordinal' => 30,
            ),
            81 =>
            array (
                'id' => 82,
                'group_regex' => '^alt\\.binaries\\.bloaf$',
            'regex' => '/^\\(\\d+(?P<match0>\\/\\d+\\) - (.+?) ?- ").+?" - \\d+[,.]\\d+ [mMkKgG][bB] - yEnc$/',
                'status' => 1,
            'description' => '//(1/9) - CyberLink.PhotoDirector.4.Ultra.4.0.3306.Multilingual - "CyberLink.PhotoDirector.4.Ultra.4.0.3306.Multilingual.par2" - 154,07 MB - yEnc ::: //(1/5) - Mac.DVDRipper.Pro.4.0.8.Mac.OS.X- "Mac.DVDRipper.Pro.4.0.8.Mac.OS.X.rar" - 24,12 MB - yEnc',
                'ordinal' => 35,
            ),
            82 =>
            array (
                'id' => 83,
                'group_regex' => '^alt\\.binaries\\.bloaf$',
            'regex' => '/^\\[\\d+(?P<match0>\\/\\d+ (.+?)\\.).+?" yEnc$/',
                'status' => 1,
                'description' => '//[3/3 Helene Fischer - Die Biene Maja 2013 MP3 Helene Fischer - Die Biene Maja 2013 MP3.mp3.vol0+1.PAR2" yEnc',
                'ordinal' => 40,
            ),
            83 =>
            array (
                'id' => 84,
                'group_regex' => '^alt\\.binaries\\.blu-ray$',
            'regex' => '/^"(?P<match0>\\d+\\.MK\\.[A-Z])\\..+?" yEnc$/',
                'status' => 1,
                'description' => '//"786936833607.MK.A.part086.rar" yEnc',
                'ordinal' => 45,
            ),
            84 =>
            array (
                'id' => 85,
                'group_regex' => '^alt\\.binaries\\.blu-ray$',
            'regex' => '/^(?P<match0>\\(\\?{4}\\) \\[)\\d+\\/\\d+\\] - "(?P<match1>[a-z0-9]+)\\..+?" yEnc$/',
                'status' => 1,
            'description' => '//(????) [001/107] - "260713thbldnstnsclw.par2" yEnc',
                'ordinal' => 50,
            ),
            85 =>
            array (
                'id' => 86,
                'group_regex' => '^alt\\.binaries\\.blu-ray$',
            'regex' => '/^(?P<match0>\\[www\\..+?\\]-\\[(.+?)\\]-\\[)\\d+\\/\\d+\\] ".+?" - \\d+[,.]\\d+ [mMkKgG][bB] - yEnc$/',
                'status' => 1,
                'description' => '//[www.allyourbasearebelongtous.pw]-[The Place Beyond the Pines 2012 1080p US Blu-ray AVC DTS-HD MA 5.1-HDWinG]-[03/97] "tt1817273-us-hdwing-bd.r00" - 46.51 GB - yEnc',
                'ordinal' => 55,
            ),
            86 =>
            array (
                'id' => 87,
                'group_regex' => '^alt\\.binaries\\.blu-ray$',
            'regex' => '/^\\(\\d+(?P<match0>\\/\\d+\\)(\\s+ -)? "[a-zA-Z0-9]+?)\\d*\\..+?" - \\d+[,.]\\d+ [mMkKgG][bB] - yEnc$/',
                'status' => 1,
            'description' => '//(01/71)  - "EwRQCtU4BnaeXmT48hbg7bCn.par2" - 54,15 GB - yEnc ::: //(63/63) "dfbgfdgtghtghthgGPGEIBPBrwg34t05.rev" - 10.67 GB - yEnc',
                'ordinal' => 60,
            ),
            87 =>
            array (
                'id' => 88,
                'group_regex' => '^alt\\.binaries\\.blu-ray$',
            'regex' => '/^\\[\\d+(?P<match0>\\/\\d+\\] - "([a-zA-Z0-9]+)\\.).+?" yEnc$/',
                'status' => 1,
                'description' => '//[01/67] - "O3tk4u681gd767Y.par2" yEnc',
                'ordinal' => 65,
            ),
            88 =>
            array (
                'id' => 89,
                'group_regex' => '^alt\\.binaries\\.blu-ray$',
            'regex' => '/^(?P<match0>([a-z0-9]+) \\[.+?\\] \\[.+?\\] \\[)\\d+[,.]\\d+ [mMkKgG][bB]\\] \\[\\d+\\/\\d+\\] ".+?" yEnc$/',
                'status' => 1,
                'description' => '//209a212675ba31ca24a8 [usenet-4all.info] [powered by ssl-news] [21,59 GB] [002/223] "209a212675ba31ca24a8.part001.rar" yEnc',
                'ordinal' => 70,
            ),
            89 =>
            array (
                'id' => 90,
                'group_regex' => '^alt\\.binaries\\.blu-ray$',
            'regex' => '/^(?P<match0>([A-Z0-9]+) - "[a-z0-9]+\\.).+?" yEnc$/',
                'status' => 1,
                'description' => '//TIS97CC - "tis97cc.par2" yEnc',
                'ordinal' => 75,
            ),
            90 =>
            array (
                'id' => 91,
                'group_regex' => '^alt\\.binaries\\.blu-ray$',
            'regex' => '/^.+?<<\\d+\\/\\d+>> "(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[.,]\\d+ [kKmMgG][bB] - yEnc$/i',
                'status' => 1,
                'description' => '//<<OBLIVION - Untouched>><<TLR for usenet-4all.info>><<www.ssl-news.info>><<13/14>> "xxtxxlxxrxxbdxx05.vol421+98.par2" - 2,54 GB - yEnc',
                'ordinal' => 80,
            ),
            91 =>
            array (
                'id' => 92,
                'group_regex' => '^alt\\.binaries\\.blu-ray$',
            'regex' => '/^\\((?P<match0>\\w+)\\)[-_\\s]{0,3}\\[\\d+\\/\\d+\\][-_\\s]{0,3}"(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//(wtnybhd7i3g6p1kuj3dffhnqyrx) [27/31] - "wtnybhd7i3g6p1kuj3dffhnqyrx.vol224+8.par2" yEnc',
                'ordinal' => 85,
            ),
            92 =>
            array (
                'id' => 93,
                'group_regex' => '^alt\\.binaries\\.blu-ray$',
            'regex' => '/^(?P<match0>\\w+)[-_\\s]{0,3}File \\d+ of (?P<match1>\\d+):[-_\\s]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//nS9XNOrMzD7FNniVfWUswrGmq8hQPMBqMSuQcMty - File 91 of 98: "aWYt0MpWaY6bmDp0d8hOdvBgz6.par2" yEnc',
                'ordinal' => 90,
            ),
            93 =>
            array (
                'id' => 94,
                'group_regex' => '^alt\\.binaries\\.blu-ray$',
            'regex' => '/^"(?P<match0>.+?)(?P<match1>[-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}\\(\\d+\\/(\\d+)\\)[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//"t46e6mopz864y82-Pittis ZusatzTon.English.dtsHDma.vol168+67.PAR2" (46/46) yEnc',
                'ordinal' => 95,
            ),
            94 =>
            array (
                'id' => 95,
                'group_regex' => '^alt\\.binaries\\.blu-ray$',
            'regex' => '/^\\(\\d+\\/(?P<match0>\\d+)\\)[-_\\s]{0,3}"(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}\\d+([.,]\\d+)? [kKmMgG][bB][-_\\s]{0,3}[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//(190/201)  "Kreatur by Eisenschrott & Gollum.vol1781+137.PAR2" - 9,46 GB - yEnc',
                'ordinal' => 100,
            ),
            95 =>
            array (
                'id' => 96,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^(?P<match0>[a-zA-Z0-9]+)\\[\\d+(?P<match1>\\/\\d+\\] - "[a-zA-Z0-9]+\\.).+?" yEnc$/',
                'status' => 1,
                'description' => '//4Etmo7uBeuTW[047/106] - "006dEbPcea29U6K.part046.rar" yEnc',
                'ordinal' => 5,
            ),
            96 =>
            array (
                'id' => 97,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^\\( (?P<match0>[\\w. -]{8,}) \\)[-_ ]{0,3}\\[\\d+\\/(?P<match1>\\d+\\]) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//( Overlord II RELOADED ) - [013/112] - "rld-olii.part001.rar" yEnc',
                'ordinal' => 10,
            ),
            97 =>
            array (
                'id' => 98,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^(REPOST: )?\\[\\s*#?scnzb@?efnet\\s*\\]\\[(?P<match0>\\d+)\\] (?P<match1>.+?) \\[\\d+\\/(?P<match2>\\d+\\]) - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//[scnzbefnet][500934] Super.Fun.Night.S01E09.720p.HDTV.X264-DIMENSION [1/19] - "bieber.109.720p-dimension.sfv" yEnc ::: //REPOST: [scnzbefnet][500025] Major.Crimes.S02E13.720p.HDTV.x264-IMMERSE [16/33] - "major.crimes.s02e13.720p.hdtv.x264-immerse.r24" yEnc',
                'ordinal' => 15,
            ),
            98 =>
            array (
                'id' => 99,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^\\[\\s*#?scnzb@?efnet\\s*\\] (?P<match0>.+?) \\[\\d+\\/(?P<match1>\\d+\\]) - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//[scnzbefnet] Murdoch.Mysteries.S07E09.HDTV.x264-KILLERS [1/20] - "murdoch.mysteries.s07e09.hdtv.x264-killers.r13" yEnc',
                'ordinal' => 20,
            ),
            99 =>
            array (
                'id' => 100,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^\\(\\d+(?P<match0>\\/\\d+\\)\\s+(- )?"([a-zA-Z0-9]+)\\.).+?" - \\d+[,.]\\d+ [mMkKgG][bB] - yEnc$/',
                'status' => 1,
            'description' => '//(68/89) "dz1R2wT8hH1iQEA28gRvm.part67.rar" - 7,91 GB - yEnc ::: //(01/14)  - "JrjCY4pUjQ9qUqQ7jx6k2VLF.par2" - 4,39 GB - yEnc',
                'ordinal' => 25,
            ),
            100 =>
            array (
                'id' => 101,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^(?P<match0>\\((\\d+)\\) \\[)\\d+\\/\\d+\\] - "\\d+\\..+?" yEnc$/',
                'status' => 1,
            'description' => '//(110320152518519) [22/78] - "110320152518519.part21.rar" yEnc',
                'ordinal' => 30,
            ),
            101 =>
            array (
                'id' => 102,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^(?P<match0>[\\w. &\\()\\[\\]\\\'-]{8,}?\\b.?)\\.[A-Za-z0-9]{2,4}[-_\\s]{0,3}\\[\\d+\\/(?P<match1>\\d+\\])[-_\\s]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//A.Fantastic.Fear.of.Everything.2012.AC3.BDRiP.XviD-IJf.nfo [01/63] - "A.Fantastic.Fear.of.Everything.2012.AC3.BDRiP.XviD-IJf.nfo" yEnc',
                'ordinal' => 35,
            ),
            102 =>
            array (
                'id' => 103,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^(?P<match0>([a-zA-Z0-9]+) - \\[)\\d+\\/\\d+\\] - "[a-zA-Z0-9]+\\..+?" yEnc$/',
                'status' => 1,
                'description' => '//1VSXrAZPD - [123/177] - "1VSXrAZPD.part122.rar" yEnc',
                'ordinal' => 40,
            ),
            103 =>
            array (
                'id' => 104,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^(?P<match0>\\( (.+?) \\)\\s+\\( .+?\\) \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
            'description' => '//( Peter Gabriel Albums 24x +17 Singles = 71x cd By Dready Niek )  ( ** By Dready Niek ** ) [113/178] - "Peter Gabriel Albums 24x +17 Singles = 71CDs By Dready Niek (1977-2010).part112.rar" yEnc',
                'ordinal' => 45,
            ),
            104 =>
            array (
                'id' => 105,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^(?P<match0>([A-Za-z0-9].+?) \\((19|20)\\d\\d\\) ")\\d{2}\\. .+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//Tarja - Colours In The Dark (2013) "00. Tarja-Colours In The Dark.m3u" yEnc',
                'ordinal' => 50,
            ),
            105 =>
            array (
                'id' => 106,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^"(?P<match0>[a-zA-Z0-9]+)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\(\\d+\\/\\d+\\) - yEnc$/i',
                'status' => 1,
            'description' => '//"BB636.part14.rar" - (15/39) - yEnc',
                'ordinal' => 55,
            ),
            106 =>
            array (
                'id' => 107,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^[-a-zA-Z0-9 ]+ \\[\\d+(?P<match0>\\/\\d+\\] - "(.+?))([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//Lutheria - FC Twente TV Special - Ze wilde op voetbal [16/49] - "Lutheria - FC Twente TV Special - Ze wilde op voetbal.part16.rar" yEnc ::: // panter - [001/101] - "74518-The Hunters (2011).par2" yEnc',
                'ordinal' => 60,
            ),
            107 =>
            array (
                'id' => 108,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^(?P<match0>[-a-zA-Z0-9 ]+ - "(.+?))([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//Pee Mak Prakanong - 2013 - Thailand - ENG Subs - "Pee Mak Prakanong.2013.part22.rar" yEnc ::: //P2H - "AMHZQHPHDUZZJSFZ.vol181+33.par2" yEnc',
                'ordinal' => 65,
            ),
            108 =>
            array (
                'id' => 109,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^\\((?P<match0>\\?{4}|[a-zA-Z]+)\\) \\[\\d+(?P<match1>\\/\\d+\\] - "(.+?))([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//(????) [011/161] - "flynns-image-redux.part010.rar" yEnc ::: //(Dgpc) [000/110] - "Teen Wolf - Seizoen.3 - Dvd.2 (NLsub).nzb" yEnc',
                'ordinal' => 70,
            ),
            109 =>
            array (
                'id' => 110,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^\\("(?P<match0>[a-z0-9A-Z]+).+?" - \\d+[,.]\\d+ [mMkKgG][bB] -\\) ".+?" - \\d+[,.]\\d+ [mMkKgG][bB] - yEnc$/',
                'status' => 1,
            'description' => '//("Massaladvd5Kilusadisc4S1.par2" - 4,55 GB -) "Massaladvd5Kilusadisc4S1.par2" - 4,55 GB - yEnc',
                'ordinal' => 75,
            ),
            110 =>
            array (
                'id' => 111,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^"(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//"par.4kW9beE.1.vol122+21.par2" yEnc',
                'ordinal' => 80,
            ),
            111 =>
            array (
                'id' => 112,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^(?P<match0>.+?\\.(info|org)>+ - \\[)\\d+\\/\\d+\\] - "(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//brothers-of-usenet.info/.net <<<Partner von SSL-News.info>>> - [01/19] - "Age.of.Dinosaurs.German.AC3.HDRip.x264-FuN.par2" yEnc ::: //>>>>>Hell-of-Usenet.org>>>>> - [01/35] - "Female.Agents.German.2008.AC3.DVDRip.XviD.iNTERNAL-VideoStar.par2" yEnc',
                'ordinal' => 85,
            ),
            112 =>
            array (
                'id' => 113,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^\\[\\d+(?P<match0>\\/\\d+\\] - "(.+?))([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//[010/101] - "Bf56a8aR-20743f8D-Vf7a11fD-d7c6c0.part09.rar" yEnc ::: //[1/9] - "fdbvgdfbdfb.part.par2" yEnc',
                'ordinal' => 90,
            ),
            113 =>
            array (
                'id' => 114,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^(?P<match0>\\[[A-Z]+\\] - \\[)\\d+\\/\\d+\\] - "(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//[LB] - [063/112] - "RVL-GISSFBD.part063.rar" yEnc',
                'ordinal' => 95,
            ),
            114 =>
            array (
                'id' => 115,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^\\(.+?\\(PWP\\).+?\\) \\(\\d+(?P<match0>\\/\\d+\\) "(.+?))([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") .+? \\d+[,.]\\d+ [mMkKgG][bB] .+ yEnc$/i',
                'status' => 1,
            'description' => '//(¯`*.¸(PWP).*´¯) (071/100) "JUST4US_025.part070.rar" - 22,50 GB  yEnc',
                'ordinal' => 100,
            ),
            115 =>
            array (
                'id' => 116,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^thnx to original poster \\[\\d+(?P<match0>\\/\\d+\\] - "(.+?))(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2|\\.[A-Za-z0-9]{2,4})("| `).+? yEnc$/',
                'status' => 1,
                'description' => '//thnx to original poster [00/98] - "2669DFKKFD2008.nzb ` 2669DFKKFD2008 " yEnc',
                'ordinal' => 105,
            ),
            116 =>
            array (
                'id' => 117,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^place2home\\.net - (?P<match0>.*?) - (\\[\\d+\\/\\d+\\] - )?".+?" yEnc$/i',
                'status' => 1,
                'description' => '//place2home.net - Call.of.Duty.Ghosts.XBOX360-iMARS - [095/101] - "imars-codghosts-360b.vol049+33.par2" yEnc ::: //Place2home.net - Diablo_III_USA_RF_XBOX360-PROTOCOL - "d3-ptc.r34" yEnc',
                'ordinal' => 110,
            ),
            117 =>
            array (
                'id' => 118,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^(?P<match0>\\((.+?)\\) \\[)\\d+(?P<match1>\\/\\d+] - ").+?" yEnc$/',
                'status' => 1,
            'description' => '//(Ancient.Aliens.S03E05.Aliens.and.Mysterious.Rituals.720p.HDTV.x264.AC3.2Ch.REPOST) [41/42] - "Ancient.Aliens.S03E05.Aliens.and.Mysterious.Rituals.720p.HDTV.x264.AC3.2Ch.REPOST.vol071+66.PAR2" yEnc',
                'ordinal' => 115,
            ),
            118 =>
            array (
                'id' => 119,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^Doobz (?P<match0>[a-zA-z-_]+) \\[\\d+\\/(?P<match1>\\d+\\]) - ".+([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//Doobz Europa_Universalis_IV_Conquest_of_Paradise-FLT [10/54] - "flt-eucp.001" yEnc',
                'ordinal' => 120,
            ),
            119 =>
            array (
                'id' => 120,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^(?P<match0>[\\w. -]{8,}) - \\[\\d+\\/(?P<match1>\\d+\\])[-_\\s]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//Outlast.Whistleblower-RELOADED - [014/119] - "rld-outwhistle.part001.rar" yEnc',
                'ordinal' => 125,
            ),
            120 =>
            array (
                'id' => 121,
                'group_regex' => '^alt\\.binaries\\.boneless$',
            'regex' => '/^.+\\[\\d+\\/(?P<match0>\\d+\\]) - "(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//Charlies.Angels.2000.iNTERNAL.DVDRip.XviD-Vmr.part44.rar [46/66] - "Charlies.Angels.2000.iNTERNAL.DVDRip.XviD-Vmr.part44.rar" yEnc',
                'ordinal' => 130,
            ),
            121 =>
            array (
                'id' => 122,
                'group_regex' => '^alt\\.binaries\\.british\\.drama$',
            'regex' => '/^(?P<match0>[a-zA-Z0-9].+? \\[XviD\\] \\[)\\d\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//Coronation Street 03.05.2012 [XviD] [01/23] - "coronation.street.03.05.12.[ws.pdtv].par2" yEnc ::: //Coronation Street 04.05.2012 - Part 1 [XviD] [01/23] - "coronation.street.04.05.12.part.1.[ws.pdtv].par2" yEnc',
                'ordinal' => 5,
            ),
            122 =>
            array (
                'id' => 123,
                'group_regex' => '^alt\\.binaries\\.british\\.drama$',
            'regex' => '/^(?P<match0>[a-zA-Z0-9]+ .+? (S\\d+)?E\\d+-\\d\\d \\[)\\d+\\/\\d+\\] - "\\d(\\d |\\.).+?" yEnc$/',
                'status' => 1,
                'description' => '//The Prisoner E06-09 [001/152] - "06 The General.mkv.001" yEnc ::: //Danger Man S2E05-08 [075/149] - "7.The colonel\'s daughter.avi.001" yEnc',
                'ordinal' => 10,
            ),
            123 =>
            array (
                'id' => 124,
                'group_regex' => '^alt\\.binaries\\.british\\.drama$',
            'regex' => '/^.+?\\[\\d+\\/(?P<match0>\\d+\\][-_ ]{0,3}.+?)[-_ ]{0,3}("|#34;)(?P<match1>.+?)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}("|#34;))[-_ ]{0,3}yEnc$/',
                'status' => 1,
                'description' => '//Wizards Vs Aliens - 1x06 - Rebel Magic, Part Two [XviD][00/27] - "wizards.vs.aliens.106.rebel.magic.part.two.[ws.pdtv].nzb" yEnc',
                'ordinal' => 15,
            ),
            124 =>
            array (
                'id' => 125,
                'group_regex' => '^alt\\.binaries\\.british\\.drama$',
            'regex' => '/.*"(?P<match0>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}").+?yEnc$/i',
                'status' => 1,
                'description' => '//Vera.3x03.Young.Gods.720p.HDTV.x264-FoV - "vera.3x03.young_gods.720p_hdtv_x264-fov.r00" yEnc',
                'ordinal' => 20,
            ),
            125 =>
            array (
                'id' => 126,
                'group_regex' => '^alt\\.binaries\\.cats$',
            'regex' => '/^(?P<match0>[a-zA-Z0-9]{5,} ?\\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//Pb7cvL3YiiOu06dsYPzEfpSvvTul[02/37] - "Fkq33mlTVyHHJLm0gJNU.par2" yEnc ::: //DLJorQ37rMDvc [01/16] - "DLJorQ37rMDvc.part1.rar" yEnc',
                'ordinal' => 5,
            ),
            126 =>
            array (
                'id' => 127,
                'group_regex' => '^alt\\.binaries\\.cbt$',
            'regex' => '/^\\((?P<match0>[a-zA-Z0-9-\\.\\&_ ]+)\\) \\[\\d+\\/(?P<match1>\\d+\\]) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//(WinEdt.v8.0.Build.20130513.Cracked-EAT) [01/10] - "eatwedt8.nfo" yEnc',
                'ordinal' => 5,
            ),
            127 =>
            array (
                'id' => 128,
                'group_regex' => '^alt\\.binaries\\.cbt$',
            'regex' => '/^\\[ (?P<match0>[a-zA-Z0-9-\\.\\&\\\\(\\)\\,_ ]+) \\] [a-zA-Z0-9]{3,4}\\.[a-zA-Z0-9]{3,4} \\(\\d+\\/(?P<match1>\\d+\\)) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//[ ABCAsiaPacific.com - Study English IELTS Preparation (2006) ] AVI.PDF (17/34) - "abcap-senglishielts.r16" yEnc',
                'ordinal' => 10,
            ),
            128 =>
            array (
                'id' => 129,
                'group_regex' => '^alt\\.binaries\\.cbts$',
            'regex' => '/.*"(?P<match0>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}")(.+?)yEnc$/i',
                'status' => 1,
                'description' => '//"softWoRx.Suite.2.0.0.25.x32-TFT.rar" yEnc',
                'ordinal' => 5,
            ),
            129 =>
            array (
                'id' => 130,
                'group_regex' => '^alt\\.binaries\\.cd\\.image$',
            'regex' => '/^(?P<match0>\\[(\\d+|redump)?\\]-+\\[.+?\\]-\\[.+?\\]-)(\\s?\\[\\d+\\/\\d+\\])?(\\s?\\[.+?\\])?[- ]{0,3}".+?"( - \\d+[,.]\\d+ [mMkKgG][bB] -)? yEnc$/i',
                'status' => 1,
                'description' => '//[27849]-[altbinEFNet]-[Full]- "ppt-sogz.001" - 7,62 GB - yEnc ::: //[27925]--[altbinEFNet]-[Full]- "unl_p2rd.par2" yEnc ::: //[27608]-[FULL]-[#altbin@EFNet]-[007/136] "27608-1.005" yEnc ::: //[30605]-[altbinEFNet]-[FULL]- [10/165] - "plaza-the.witcher.3.wild.hunt.r09" yEnc ::: //[]-[#altbin@EFNet]-[Full]-[ACE.LIGHTNING.PLUS.6.TRAINER-DEViANCE]-[0/8] - "deviance.nfo" yEnc',
                'ordinal' => 5,
            ),
            130 =>
            array (
                'id' => 131,
                'group_regex' => '^alt\\.binaries\\.cd\\.image$',
            'regex' => '/^(?P<match0>\\[\\d+\\]-\\[.+?\\]-\\[.+?\\]-\\[ .+? \\] ?- ?\\[)\\d+\\/\\d+\\] (- )?".+?" yEnc$/',
                'status' => 1,
                'description' => '//[27930]-[FULL]-[altbinEFNet]-[ Ubersoldier.UNCUT.PATCH-RELOADED ]-[3/5] "rld-usuc.par2" yEnc ::: //[27607]-[#altbin@EFNet]-[Full]-[ Cars.Radiator.Springs.Adventure.READNFO-CRIME ] - [02/49] - "crm-crsa.par2" yEnc',
                'ordinal' => 10,
            ),
            131 =>
            array (
                'id' => 132,
                'group_regex' => '^alt\\.binaries\\.cd\\.image$',
            'regex' => '/^(?P<match0>\\[\\d+\\]-\\[.+?\\]-\\[.+?\\]-\\[.+?\\]-\\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//[27575]-[#altbin@EFNet]-[Full]-[CD1]-[01/58] - "CD1.par2" yEnc ::: //[27575]-[altbinEFNet]-[Full]-[CD3]-[00/59] - "dev-gk3c.sfv" yEnc',
                'ordinal' => 15,
            ),
            132 =>
            array (
                'id' => 133,
                'group_regex' => '^alt\\.binaries\\.cd\\.image$',
            'regex' => '/^(?P<match0>\\(\\d+(-\\d+)?\\) \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
            'description' => '//(27608-1) [2/5] - "skidrow.nfo" yEnc',
                'ordinal' => 20,
            ),
            133 =>
            array (
                'id' => 134,
                'group_regex' => '^alt\\.binaries\\.cd\\.image$',
            'regex' => '/^(?P<match0>\\[www\\..+?\\]-\\[.+?\\]-\\[)\\d+\\/\\d+\\] ".+?" - \\d+[,.]\\d+ [mMkKgG][bB] - yEnc$/',
                'status' => 1,
                'description' => '//[www.drlecter.tk]-[The_Night_of_the_Rabbit-FLT]-[01/67] "Dr.Lecter.nfo" - 5.61 GB - yEnc',
                'ordinal' => 25,
            ),
            134 =>
            array (
                'id' => 135,
                'group_regex' => '^alt\\.binaries\\.cd\\.image$',
            'regex' => '/^(?P<match0>[a-zA-Z0-9.-]{10,} -( PC GAME -| [A-Z0-9\\[\\]]+ -)? \\[)\\d+\\/\\d+\\] - ".+?" - (.+? - (\\d+[,.]\\d+ [mMkKgG][bB] - )?)?yEnc$/',
                'status' => 1,
                'description' => '//Slender.The.Arrival-WaLMaRT.PC - [01/26] - "wmt-stal.nfo" - yEnc ::: //The.Night.of.the.Rabbit-FLT - [03/66] - "flt-notr.r00" - FAiRLIGHT - 5,10 GB - yEnc ::: //Resident.Evil.Revelations-FLT - PC GAME - [03/97] - "Resident.Evil.Revelations-FLT.r00" - FAiRLIGHT - yEnc ::: //Afterfall.Insanity.Dirty.Arena.Edition-WaLMaRT - [MULTI6][PCDVD] - [02/45] - "wmt-adae.r00" - PC GAME - yEnc',
                'ordinal' => 30,
            ),
            135 =>
            array (
                'id' => 136,
                'group_regex' => '^alt\\.binaries\\.cd\\.image$',
            'regex' => '/^(PC Game - )?\\[\\d+(?P<match0>\\/\\d+\\] - .+? - ").+?" -( .+? -)? yEnc$/',
                'status' => 1,
                'description' => '//[01/46] - Crashtime 5 Undercover RELOADED - "rld-ct5u.nfo" - PC - yEnc ::: //[01/76] - Of.Orcs.And.Men-SKIDROW - "sr-oforcsandmen.nfo" - yEnc ::: //PC Game - [01/71] - MotoGP 13-RELOADED Including NoDVD Fix - "MotoGP 13-RELOADED Including NoDVD Fix nfo" - yEnc',
                'ordinal' => 35,
            ),
            136 =>
            array (
                'id' => 137,
                'group_regex' => '^alt\\.binaries\\.cd\\.image$',
            'regex' => '/^(?P<match0>[A-Za-z0-9][a-zA-Z0-9: ]{8,}(-[a-zA-Z]+)?( \\(.+?\\)| - [\\[A-Z0-9\\]]+)? - \\[)\\d+\\/\\d+\\] - ".+?" - .+? - yEnc$/',
                'status' => 1,
            'description' => '//Magrunner Dark Pulse FLT (FAiRLIGHT) - [02/70] - "flt-madp par2" - PC - yEnc ::: //MotoGP 13 RELOADED - [01/71] - "rld-motogp13 nfo" - PC - yEnc ::: //Dracula 4: Shadow of the Dragon FAiRLIGHT - [01/36] - "flt-drc4 nfo" - PC - yEnc',
                'ordinal' => 40,
            ),
            137 =>
            array (
                'id' => 138,
                'group_regex' => '^alt\\.binaries\\.cd\\.image$',
            'regex' => '/^(?P<match0>(\\[[A-Z ]+\\] - )?[a-zA-Z0-9.-]{10,} - ").+?" - \\[\\d+\\/\\d+\\] - yEnc$/',
                'status' => 1,
                'description' => '//[NEW PC GAME] - Lumber.island-WaLMaRT - "wmt-lisd.nfo" - [01/18] - yEnc ::: //Trine.2.Complete.Story-SKIDROW - "sr-trine2completestory.nfo" - [01/78] - yEnc',
                'ordinal' => 45,
            ),
            138 =>
            array (
                'id' => 139,
                'group_regex' => '^alt\\.binaries\\.cd\\.image$',
            'regex' => '/^(?P<match0>Uploader.Presents)[- ](?P<match1>.+?)[\\(\\[]\\d+\\/\\d+\\]".+?" yEnc$/',
                'status' => 1,
                'description' => '//Uploader.Presents-Need.For.Speed.Rivals.XBOX360-PROTOCOL[10/94]"nfs.r-ptc.r07" yEnc',
                'ordinal' => 50,
            ),
            139 =>
            array (
                'id' => 140,
                'group_regex' => '^alt\\.binaries\\.cd\\.lossless$',
            'regex' => '/^(?P<match0>Flac Flood( -)? .+? - ").+?" \\(\\d+\\/\\d+\\) .+? yEnc$/',
                'status' => 1,
            'description' => '//Flac Flood - Modern Talking - China In Her Eyes (CDM) - "1 - Modern Talking - China In Her Eyes (feat. Eric Singleton) (Video Version).flac" (01/14) (23,64 MB)   136,66 MB yEnc ::: //Flac Flood Modern Talking - America - "1 - Modern Talking - Win The Race.flac" (01/18) (29,12 MB) 549,35 MB yEnc',
                'ordinal' => 5,
            ),
            140 =>
            array (
                'id' => 141,
                'group_regex' => '^alt\\.binaries\\.cd\\.lossless$',
            'regex' => '/^(?P<match0>[a-zA-Z0-9].+? \\[)\\d+\\/\\d+\\]( -)? "\\d{2,} - .+?" yEnc$/',
                'status' => 1,
                'description' => '//Cannonball Adderley - Nippon Soul [01/17] "00 - Cannonball Adderley - Nippon Soul.nfo" yEnc ::: //Black Tie White Noise [01/24] - "00 - David Bowie - Black Tie White Noise.nfo" yEnc',
                'ordinal' => 10,
            ),
            141 =>
            array (
                'id' => 142,
                'group_regex' => '^alt\\.binaries\\.cd\\.lossless$',
            'regex' => '/^(?P<match0>(\\[\\d{4}\\] )?[a-zA-Z0-9].+? - File )\\d+ of \\d+: .+? yEnc$/',
                'status' => 1,
                'description' => '//[1977] Joan Armatrading - Show Some Emotion - File 15 of 20: 06 Joan Armatrading - Opportunity.flac yEnc ::: //The Allman Brothers Band - Statesboro Blues [Swingin\' Pig - Bootleg] [1970 April 4] - File 09 of 19: Statesboro Blues.cue yEnc',
                'ordinal' => 15,
            ),
            142 =>
            array (
                'id' => 143,
                'group_regex' => '^alt\\.binaries\\.cd\\.lossless$',
            'regex' => '/^(?P<match0>[A-Z0-9].+? - [A-z0-9].+? \\[\\d{4}\\] - )\\d{2,} .+? yEnc$/',
                'status' => 1,
                'description' => '//The Allman Brothers Band - The Fillmore Concerts [1971] - 06 The Allman Brothers Band - Done Somebody Wrong.flac yEnc',
                'ordinal' => 20,
            ),
            143 =>
            array (
                'id' => 144,
                'group_regex' => '^alt\\.binaries\\.cd\\.lossless$',
            'regex' => '/^(?P<match0>[A-Z0-9].+? - [A-Z0-9].+? Disc \\d+ of \\d+ - )[A-Z0-9].+?\\..+? yEnc$/',
                'status' => 1,
            'description' => '//The Velvet Underground - Peel Slow And See (Box Set) Disc 5 of 5 - 13 The Velvet Underground - Oh Gin.flac yEnc',
                'ordinal' => 25,
            ),
            144 =>
            array (
                'id' => 145,
                'group_regex' => '^alt\\.binaries\\.cd\\.lossless$',
            'regex' => '/^\\(\\d+(?P<match0>\\/\\d+\\) ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[,.]\\d+ [mMkKgG][bB] - yEnc$/i',
                'status' => 1,
            'description' => '//(28/55) "Ivan Neville - If My Ancestors Could See Me Now.par2" - 624,44 MB - yEnc',
                'ordinal' => 30,
            ),
            145 =>
            array (
                'id' => 146,
                'group_regex' => '^alt\\.binaries\\.chello$',
            'regex' => '/^(?P<match0>[A-Za-z0-9]{5,} ?\\[)\\d+\\/\\d+\\] - "[A-Za-z0-9]{3,}.+?" yEnc$/',
                'status' => 1,
                'description' => '//0F623Uv71RHKt0jzA7inbGZLk00[2/5] - "l2iOkRvy80bgLrZm1xxw.par2" yEnc ::: //GMC2G8KixJKy [01/15] - "GMC2G8KixJKy.part1.rar" yEnc',
                'ordinal' => 5,
            ),
            146 =>
            array (
                'id' => 147,
                'group_regex' => '^alt\\.binaries\\.chello$',
            'regex' => '/^(?P<match0>[a-zA-Z0-9][a-zA-Z0-9.-]+ \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//Imactools.Cefipx.v3.20.MacOSX.Incl.Keyfilemaker-NOY [03/10] - "parfile.vol000+01.par2" yEnc',
                'ordinal' => 10,
            ),
            147 =>
            array (
                'id' => 148,
                'group_regex' => '^alt\\.binaries\\.chello$',
            'regex' => '/^(?P<match0>[A-Za-z0-9-]+ .+?[. ]\\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//Siberian Mouses LS, BD models and special... [150/152] - "Xlola - Luba, Sasha & Vika.avi.jpg" yEnc',
                'ordinal' => 15,
            ),
            148 =>
            array (
                'id' => 149,
                'group_regex' => '^alt\\.binaries\\.classic\\.tv\\.shows$',
            'regex' => '/^(?P<match0>Re: REQ: .+? - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//Re: REQ: All In The Family - "Archie Bunkers Place 1x01 Archies New Partner part 1.nzb" yEnc',
                'ordinal' => 5,
            ),
            149 =>
            array (
                'id' => 150,
                'group_regex' => '^alt\\.binaries\\.classic\\.tv\\.shows$',
            'regex' => '/^(?P<match0>Per REQ - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") .+? \\[\\d+\\/\\d+\\] yEnc$/i',
                'status' => 1,
                'description' => '//Per REQ - "The.Wild.Wild.West.S03E11.The.Night.of.the.Cut-Throats.DVDRip.XVID-tz.par2" 512x384 [01/40] yEnc',
                'ordinal' => 10,
            ),
            150 =>
            array (
                'id' => 151,
                'group_regex' => '^alt\\.binaries\\.classic\\.tv\\.shows$',
            'regex' => '/^(?P<match0>By req: ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//By req: "Dennis The Menace - 4x25 - Dennis and the Homing Pigeons.part05.rar" yEnc',
                'ordinal' => 15,
            ),
            151 =>
            array (
                'id' => 152,
                'group_regex' => '^alt\\.binaries\\.classic\\.tv\\.shows$',
            'regex' => '/^(?P<match0>[a-zA-Z ]+HQ DVDRips ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") \\[\\d+\\/\\d+\\] yEnc$/i',
                'status' => 1,
                'description' => '//I Spy HQ DVDRips "I Spy - 3x26 Pinwheel.part10.rar" [13/22] yEnc',
                'ordinal' => 20,
            ),
            152 =>
            array (
                'id' => 153,
                'group_regex' => '^alt\\.binaries\\.classic\\.tv\\.shows$',
            'regex' => '/^(?P<match0>[a-zA-Z0-9].+? (S\\d+D\\d+|- Season \\d+ -) \\[)\\d+\\/\\d+\\] - ".+?"? yEnc$/',
                'status' => 1,
                'description' => '//Sledge Hammer! S2D2 [016/138] - "SH! S2 D2.ISO.016" yEnc ::: //Sledge Hammer! S2D2 [113/138] - "SH! S2 D2.ISO.1132 yEnc ::: //Lost In Space - Season 1 - [13/40] - "S1E02 - The Derelict.avi" yEnc',
                'ordinal' => 25,
            ),
            153 =>
            array (
                'id' => 154,
                'group_regex' => '^alt\\.binaries\\.classic\\.tv\\.shows$',
            'regex' => '/^(?P<match0>[a-zA-Z0-9].+? \\d{4}-\\d\\d-\\d\\d( \\[.+?\\])? \\()\\d+\\/\\d+\\) - ".+?" yEnc$/',
                'status' => 1,
            'description' => '//Night Flight TV Show rec 1991-01-12 (02/54) - "night flight rec 1991-01-12.nfo" yEnc ::: //Night Flight TV Show rec 1991-05-05 [NEW PAR SET] (1/9) - "night flight rec 1991-05-05.par2" yEnc',
                'ordinal' => 30,
            ),
            154 =>
            array (
                'id' => 155,
                'group_regex' => '^alt\\.binaries\\.classic\\.tv\\.shows$',
            'regex' => '/^(?P<match0>[a-zA-Z0-9][a-zA-Z0-9.-]+ \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//The.Love.Boat.S05E08 [01/31] - "The.Love.Boat.S05E08.Chefs.Special.Kleinschmidt.New.Beginnings.par2" yEnc',
                'ordinal' => 35,
            ),
            155 =>
            array (
                'id' => 156,
                'group_regex' => '^alt\\.binaries\\.classic\\.tv\\.shows$',
            'regex' => '/^(?P<match0>".+?)(\\.part\\d*|\\.rar)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") yEnc$/i',
                'status' => 1,
                'description' => '//"Batman - S1E13-The Thirteenth Hat.par2" yEnc',
                'ordinal' => 40,
            ),
            156 =>
            array (
                'id' => 157,
                'group_regex' => '^alt\\.binaries\\.classic\\.tv\\.shows$',
            'regex' => '/^(Re: )?(?P<match0>[a-zA-Z0-9]+ .+? series \\d+ - \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//Re: Outside Edge series 1 - [01/20] - "Outside Edge S01.nfo" yEnc',
                'ordinal' => 45,
            ),
            157 =>
            array (
                'id' => 158,
                'group_regex' => '^alt\\.binaries\\.classic\\.tv\\.shows$',
            'regex' => '/^(?P<match0>[a-zA-Z0-9 -_\\.:]+) - \\d+(?P<match1> of \\d+)[-_ ]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") (\\(\\d+\\/\\d+\\) )?(yEnc)?$/i',
                'status' => 1,
            'description' => '//\'Mission: Impossible\' - 1x09 - NTSC - DivX - 28 of 48 - "MI-S01E09.r23" yEnc ::: //\'Mission: Impossible\' - 1x09 - NTSC - DivX - 01 of 48 - "MI-S01E09.nfo" (1/1)',
                'ordinal' => 50,
            ),
            158 =>
            array (
                'id' => 159,
                'group_regex' => '^alt\\.binaries\\.classic\\.tv\\.shows$',
            'regex' => '/^"(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")(yEnc)?( )?$/i',
                'status' => 1,
                'description' => '//"Batman - S2E58-Ice Spy.par2"yEnc ::: //"Black Sheep Squadron 1x03 Best Three Out of Five.par2"',
                'ordinal' => 55,
            ),
            159 =>
            array (
                'id' => 160,
                'group_regex' => '^alt\\.binaries\\.classic\\.tv\\.shows$',
            'regex' => '/^"(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") \\(Not My Rip\\).+ \\d+ (?P<match1>- \\d+) .+ yEnc$/i',
                'status' => 1,
            'description' => '//"Guns of Will Sonnett - 1x04.mp4" (Not My Rip)Guns Of Will Sonnett Season 1 1 - 26 Mp4 With Pars yEnc',
                'ordinal' => 60,
            ),
            160 =>
            array (
                'id' => 161,
                'group_regex' => '^alt\\.binaries\\.classic\\.tv\\.shows$',
            'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\) ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[.,]\\d+ [kKmMgG][bB] - yEnc$/i',
                'status' => 1,
            'description' => '//(01/10) "Watch_With_Mother-Bill_And_Ben-1953_02_12-Scarecrow-VHSRip-XviD.avi" - 162.20 MB - yEnc',
                'ordinal' => 65,
            ),
            161 =>
            array (
                'id' => 162,
                'group_regex' => '^alt\\.binaries\\.classic\\.tv\\.shows$',
            'regex' => '/^\\(.+\\)  "(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") \\[\\d+\\/(?P<match1>\\d+\\]) (Last One I Have! )?yEnc$/i',
                'status' => 1,
            'description' => '//(Our Gang - Little Rascals  DVDRips)  "Our Gang -  The Lucky Corner (1936).part0.sfv" [01/19] yEnc ::: //(Our Gang - Little Rascals  DVDRips)  "Our Gang -  Wild Poses (1933).part.par" [02/20] Last One I Have! yEnc',
                'ordinal' => 70,
            ),
            162 =>
            array (
                'id' => 163,
                'group_regex' => '^alt\\.binaries\\.classic\\.tv\\.shows$',
            'regex' => '/^.+ Usenet Past .+\\[\\d+\\/(?P<match0>\\d+\\]) - "(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//[EnJoY] =>A Blast from Usenet Past (1/3)<= [00/14] - "Mcdonalds Training Film - 1972 (Vhs-Mpg).part.nzb" yEnc',
                'ordinal' => 75,
            ),
            163 =>
            array (
                'id' => 164,
                'group_regex' => '^alt\\.binaries\\.classic\\.tv\\.shows$',
            'regex' => '/^<OPA_TV> \\[\\d+\\/(?P<match0>\\d+\\]) - "(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//<OPA_TV> [01/12] - "Yancy Derringer - 03 - Geheime Fracht.par2" yEnc',
                'ordinal' => 80,
            ),
            164 =>
            array (
                'id' => 165,
                'group_regex' => '^alt\\.binaries\\.classic\\.tv\\.shows$',
            'regex' => '/^.+ [\\[\\(]\\d+( of |\\/)(?P<match0>\\d+[\\]\\)])[-_ ]{0,3}"(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//77 Sunset Strip 409 [1 of 23] "77 Sunset Strip 409 The Missing Daddy Caper.avi.vol63+34.par2" yEnc ::: //Barney.Miller.NZBs [001/170] - "Barney.Miller.S01E01.Ramon.nzb" yEnc',
                'ordinal' => 85,
            ),
            165 =>
            array (
                'id' => 166,
                'group_regex' => '^alt\\.binaries\\.classic\\.tv\\.shows$',
            'regex' => '/^.+[-_ ]{0,3}"(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") [\\[\\(]\\d+\\/(?P<match1>\\d+[\\]\\)]) yEnc$/i',
                'status' => 1,
            'description' => '//All in the Family - missing eps - DVDRips  "All in the Family - 6x23 Gloria & Mike\'s House Guests.part5.rar" [08/16] yEnc ::: //Amos \'n\' Andy - more shows---read info.txt  "Amos \'n\' Andy S01E00 Introduction of the Cast.mkv.001" (002/773) yEnc',
                'ordinal' => 90,
            ),
            166 =>
            array (
                'id' => 167,
                'group_regex' => '^alt\\.binaries\\.classic\\.tv\\.shows$',
            'regex' => '/^(?P<match0>.+\\d+x\\d+.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar)?(\\d{1,3}\\.rev|\\.vol\\d+\\+\\d+\\.par2|\\.[A-Za-z0-9]{2,4})( yEnc)?( (Series|Season) Finale)?$/',
                'status' => 1,
            'description' => '//Andy Griffith Show,The   1x05....Irresistible Andy - (DVD).part04.rar',
                'ordinal' => 95,
            ),
            167 =>
            array (
                'id' => 168,
                'group_regex' => '^alt\\.binaries\\.comp$',
            'regex' => '/^(?P<match0>[\\w.]+\\s+\\[)\\d+\\/\\d+\\] -\\d+\\s+".+?" yEnc$/i',
                'status' => 1,
                'description' => '//Sims3blokjesremover [0/0] -3162   "Sims3blokjesremover.nzb" yEnc ::: //xSIMS_The_Sims_3_Censor_Remover_v2.91',
                'ordinal' => 5,
            ),
            168 =>
            array (
                'id' => 169,
                'group_regex' => '^alt\\.binaries\\.comp$',
            'regex' => '/^(?P<match0>[a-zA-Z0-9].+?\\s+\\()\\d+\\/\\d+\\) ".+?" - \\d+[,.]\\d+ [mMkKgG][bB] - yEnc$/',
                'status' => 1,
            'description' => '//Photo Mechanic 5.0 build 13915  (1/6) "Photo Mechanic 5.0 build 13915  (1).par2" - 32,97 MB - yEnc',
                'ordinal' => 10,
            ),
            169 =>
            array (
                'id' => 170,
                'group_regex' => '^alt\\.binaries\\.comp$',
            'regex' => '/^\\(\\d+(?P<match0>\\/\\d+\\) .+? post .+? ").+?" yEnc$/',
                'status' => 1,
            'description' => '//(45/74) NikJosuf post Magento tutorials "43 - Theming Magento 19 - Adding a Responsive Slideshow.mp4" yEnc',
                'ordinal' => 15,
            ),
            170 =>
            array (
                'id' => 171,
                'group_regex' => '^alt\\.binaries\\.cores$',
            'regex' => '/^Film - \\[\\d+\\/(?P<match0>\\d+\\] - )?"(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//Film - [13/59] - "Jerry Maguire (1996) 1080p DTS multisub HUN HighCode-PHD.part13.rar" yEnc ::: //Film - "Phone.booth.2003.RERIP.Bluray.1080p.DTS-HD.x264-Grym.part001.rar" yEnc',
                'ordinal' => 5,
            ),
            171 =>
            array (
                'id' => 172,
                'group_regex' => '^alt\\.binaries\\.cores$',
            'regex' => '/^\\[Art-Of-Use\\.Net\\] :: \\[.+?\\] :: - \\[\\d+\\/(?P<match0>\\d+\\][-_ ]{0,3}"(.+?))([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//[Art-Of-Use.Net] :: [AUTO] :: - [34/36] - "ImmoralLive.13.11.10.Immoral.Orgies.Rikki.Six.Carmen.Callaway.And.Amanda.Tate.XXX.1080p.MP4-KTR.vol15+16.par2" yEnc',
                'ordinal' => 10,
            ),
            172 =>
            array (
                'id' => 173,
                'group_regex' => '^alt\\.binaries\\.cores$',
            'regex' => '/^brothers-of-usenet\\.info\\.net.+SSL-News\\.info-----(?P<match0>.+) - "(.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}\\d+([.,]\\d+)? [kKmMgG][bB][-_\\s]{0,3}[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//brothers-of-usenet.info.net Partner von---- SSL-News.info-----  brothers-of-usenet.info.net Partner von---- SSL-News.info-----AVG.Internet.Security.2014.Build.4335.x86.x64 - "AVG.Internet.Security.2014.Build.4335.vol00+01.PAR2" - 315,68 MB - yEnc',
                'ordinal' => 15,
            ),
            173 =>
            array (
                'id' => 174,
                'group_regex' => '^alt\\.binaries\\.cores$',
            'regex' => '/^>+GOU<+ (?P<match0>.+?) >+www\\..+?<+ - \\(\\d+\\/\\d+\\) - ".+?" yEnc$/',
                'status' => 1,
            'description' => '//>GOU<< ZDF.History.Das.Geiseldrama.von.Gladbeck.GERMAN.DOKU.720p.HDTV.x264-TVP >>www.SSL-News.info< - (02/35) - "tvp-gladbeck-720p.nfo" yEnc',
                'ordinal' => 20,
            ),
            174 =>
            array (
                'id' => 175,
                'group_regex' => '^alt\\.binaries\\.cores$',
            'regex' => '/^<<<usenet-space-cowboys\\.info.+secretusenet\\.com>>> \\[\\d+\\/(?P<match0>\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}\\d+([.,]\\d+)? [kKmMgG][bB][-_\\s]{0,3}[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//<<<usenet-space-cowboys.info>>> USC <<<Powered by https://secretusenet.com>>> [22/26] - "Zombie.Tycoon.2.Brainhovs.Revenge-SKIDROW.vol00+1.par2" - 1,85 GB yEnc',
                'ordinal' => 25,
            ),
            175 =>
            array (
                'id' => 176,
                'group_regex' => '^alt\\.binaries\\.cores$',
            'regex' => '/^[a-zA-Z0-9]+ post voor u op www\\..+? - \\[\\d+\\/\\d+\\] - "(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//Jipejans post voor u op www.Dreamplace.biz - [010/568] - "Alien-Antology-DC-Special-Edition-1979-1997-1080p-GER-HUN-HighCode.part009.rar" yEnc ::: //Egbert47 post voor u op www.nzbworld.me - [01/21] - "100 Hits - Lady Sings The Blues 2006 (5cd\'s).par2" yEnc',
                'ordinal' => 30,
            ),
            176 =>
            array (
                'id' => 177,
                'group_regex' => '^alt\\.binaries\\.cores$',
            'regex' => '/^>+ .+?\\.info [<>+]+ .+?\\.com <+ "(?P<match0>.+?)\\s+- .*?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - .+? yEnc$/i',
                'status' => 1,
                'description' => '//>>> usenet4ever.info <<<+>>> secretusenet.com <<< "Weltnaturerbe USA Grand Canyon Nationalpark 2012 3D Blu-ray untouched  - DarKneSS.part039.rar" - DarKneSS yEnc',
                'ordinal' => 35,
            ),
            177 =>
            array (
                'id' => 178,
                'group_regex' => '^alt\\.binaries\\.cores$',
            'regex' => '/^Old\\s+Dad\\s+uppt?\\s*?(?P<match0>.+?)( mp4| )?\\[?\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//Old Dad uppt   Der gro?e Gatsby   BD Rip AC3 Line XvidD German  01/57] - "Der gro?e Gatsby.par2" yEnc',
                'ordinal' => 40,
            ),
            178 =>
            array (
                'id' => 179,
                'group_regex' => '^alt\\.binaries\\.cores$',
            'regex' => '/^[A-Za-z]+ - \\[\\d+\\/\\d+\\] - "\\d+-(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//panter - [46/60] - "68645-Busty Beauties Car Wash XXX 3D BD26.part45.rar" yEnc ::: //Wildrose - [01/57] - "49567-Kleine Rode Tractor Buitenpret.par2" yEnc',
                'ordinal' => 45,
            ),
            179 =>
            array (
                'id' => 180,
                'group_regex' => '^alt\\.binaries\\.cores$',
            'regex' => '/^\\[ TOWN \\][ _-]{0,3}\\[ www\\.town\\.ag \\][ _-]{0,3}\\[ partner of www\\.ssl-news\\.info \\][ _-]{0,3}\\[ .* \\] \\[\\d+\\/(?P<match0>\\d+\\][ _-]{0,3}("|#34;).+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ _-]{0,3}\\d+[.,]\\d+ [kKmMgG][bB][ _-]{0,3}yEnc$/i',
                'status' => 1,
                'description' => '//[ TOWN ]-[ www.town.ag ]-[ partner of www.ssl-news.info ]-[ MOVIE ] [14/19] - "Night.Vision.2011.DVDRip.x264-IGUANA.part12.rar" - 660,80 MB yEnc',
                'ordinal' => 50,
            ),
            180 =>
            array (
                'id' => 181,
                'group_regex' => '^alt\\.binaries\\.cores$',
            'regex' => '/^\\[ TOWN \\][ _-]{0,3}\\[ www\\.town\\.ag \\][ _-]{0,3}\\[ partner of www\\.ssl-news\\.info \\] \\[\\d+\\/(?P<match0>\\d+\\][ _-]{0,3}("|#34;).+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ _-]{0,3}\\d+[.,]\\d+ [kKmMgG][bB][ _-]{0,3}yEnc$/i',
                'status' => 1,
                'description' => '//[ TOWN ]-[ www.town.ag ]-[ partner of www.ssl-news.info ] [01/28] - "Shadowrun_Returns_MULTi4-iNLAWS.par2" - 1,11 GB yEnc',
                'ordinal' => 55,
            ),
            181 =>
            array (
                'id' => 182,
                'group_regex' => '^alt\\.binaries\\.cores$',
            'regex' => '/^<kere\\.ws>[ _-]{0,3}\\w+(-\\w+)?[ _-]{0,3}\\d+[ _-]{0,3}(?P<match0>.+) - \\[\\d+\\/\\d+\\][ _-]{0,3}("|#34;).+?("|#34;) yEnc$/i',
                'status' => 1,
                'description' => '//<kere.ws> - FLAC - 1330543524 - Keziah_Jones-Femiliarise-PROMO_CDS-FLAC-2003-oNePiEcE - [01/11] - "00-keziah_jones-femiliarise-promo_cds-flac-2003-1.jpg" yEnc',
                'ordinal' => 60,
            ),
            182 =>
            array (
                'id' => 183,
                'group_regex' => '^alt\\.binaries\\.cores$',
            'regex' => '/.*[\\(\\[]\\d+\\/(?P<match0>\\d+[\\)\\]])[-_ ]{0,3}"(?P<match1>.+)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4})[-_ ]{0,3}(\\d+[.,]\\d+ [kKmMgG][bB](ytes)?)? yEnc$/i',
                'status' => 1,
                'description' => '//[ TOWN ]-[ www.town.ag ]-[ partner of www.ssl-news.info ] [26/26] - "Legally.Brown.S01E06.HDTV.x264-BWB.vol7+4.par2" - 332,80 MB yEnc',
                'ordinal' => 65,
            ),
            183 =>
            array (
                'id' => 184,
                'group_regex' => '^alt\\.binaries\\.cores$',
            'regex' => '/^Doobz (?P<match0>[a-zA-z-_]+) \\[\\d+\\/(?P<match1>\\d+\\]) - ".+([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//Doobz Europa_Universalis_IV_Conquest_of_Paradise-FLT [10/54] - "flt-eucp.001" yEnc',
                'ordinal' => 70,
            ),
            184 =>
            array (
                'id' => 185,
                'group_regex' => '^alt\\.binaries\\.cores$',
            'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|").+yEnc$/i',
                'status' => 1,
                'description' => '//[01/10] - "Wondershare.Video.Converter.Ultimate.v6.7.1.0.Multilanguage.par2" - 45,44 MB yEnc',
                'ordinal' => 75,
            ),
            185 =>
            array (
                'id' => 186,
                'group_regex' => '^alt\\.binaries\\.pictures\\.erotica\\.anime$',
            'regex' => '/(?P<match0>.*)\\s+-\\s+\\d+\\s+of\\s+\\d+\\s+-\\s+yEnc\\s+".*"/i',
                'status' => 1,
                'description' => '// pictures.erotica.anime has really only header we care about in the form ::: // [ABPEA - Original] Arima Zin - Tennen Koiiro Alcohol [BB, Boy] - 005 of 229 - yEnc "Tennen_Koiiro_Alcohol-005.jpg" ::: // in this case we only need the title of the manga, not which image we are viewing or the post file name',
                'ordinal' => 5,
            ),
            186 =>
            array (
                'id' => 187,
                'group_regex' => '^alt\\.binaries\\.console\\.ps3$',
            'regex' => '/^(?P<match0>\\[\\d+\\]-\\[ABGX\\.(?P<match1>net|NET)\\] - ").+?(" - \\d+[,.]\\d+ [kKmMgG][bB] - )yEnc$/',
                'status' => 1,
                'description' => '//[4062]-[ABGX.net] - "unlimited-skyrim.legendary.multi4.ps3.par2" - 17.10 GB - yEnc',
                'ordinal' => 5,
            ),
            187 =>
            array (
                'id' => 188,
                'group_regex' => '^alt\\.binaries\\.console\\.ps3$',
            'regex' => '/^(?P<match0>\\[\\d+\\]-\\[abgx\\] - ").+?" yEnc$/',
                'status' => 1,
                'description' => '//[4017]-[abgx]- "duplex.nfo" yEnc',
                'ordinal' => 10,
            ),
            188 =>
            array (
                'id' => 189,
                'group_regex' => '^alt\\.binaries\\.console\\.ps3$',
            'regex' => '/^(?P<match0>\\[\\d+\\] \\[\\d+\\/\\d+\\] - ").+?" yEnc$/',
                'status' => 1,
                'description' => '//[4197] [036/103] - "ant-mgstlcd2.r34" yEnc',
                'ordinal' => 15,
            ),
            189 =>
            array (
                'id' => 190,
                'group_regex' => '^alt\\.binaries\\.console\\.ps3$',
            'regex' => '/(?P<match0>[A-Z0-9]\\w{10,}-?PS3-[a-zA-Z0-9]+ \\[)\\d+\\/\\d+\\] - ".+?" $/',
                'status' => 1,
                'description' => '//Musou_Orochi_Z_JPN_PS3-JPMORGAN [62/62] - "jpmorgan.nfo" yEnc',
                'ordinal' => 20,
            ),
            190 =>
            array (
                'id' => 191,
                'group_regex' => '^alt\\.binaries\\.console\\.ps3$',
            'regex' => '/^"(?P<match0>.+)__www.realmom.info__.+" \\(\\d+\\/(?P<match1>\\d+\\)) \\d+[.,]\\d+ [kKmMgG][bB] yEnc$/',
                'status' => 1,
            'description' => '//"Armored_Core_V_PS3-ANTiDOTE__www.realmom.info__.r00" (03/78) 3,32 GB yEnc',
                'ordinal' => 25,
            ),
            191 =>
            array (
                'id' => 192,
                'group_regex' => '^alt\\.binaries\\.console\\.ps3$',
            'regex' => '/^"(?P<match0>.+)__www.realmom.info__.+"  (?P<match1>\\d+[.,]\\d+ [kKmMgG][bB]) yEnc$/',
                'status' => 1,
                'description' => '//"Ace.Combat.Assault.Horizon.PS3-DUPLEX__www.realmom.info__.nfo"  7,14 GB yEnc',
                'ordinal' => 30,
            ),
            192 =>
            array (
                'id' => 193,
                'group_regex' => '^alt\\.binaries\\.country\\.mp3$',
            'regex' => '/^(?P<match0>Attn: .+? - .+? - .+? - )(\\d+ - )?.+?\\.[A-Za-z0-9]{2,4} yEnc$/',
                'status' => 1,
                'description' => '//Attn: wulf109 - Jim Reeves - There\'s Someone Who Loves You - 01 - Anna Marie.mp3 yEnc ::: //Attn: wulf109 - Jim Reeves - There\'s Someone Who Loves You - Front.jpg yEnc',
                'ordinal' => 5,
            ),
            193 =>
            array (
                'id' => 194,
                'group_regex' => '^alt\\.binaries\\.country\\.mp3$',
            'regex' => '/^(?P<match0>[A-Z0-9].{3,} -( (19|20)\\d\\d - )?[A-Z0-9].{3,}\\s+")[A-Z0-9].{3,} - \\d+ - [A-Z0-9].+?\\.[A-Za-z0-9]{2,4}" yEnc$/',
                'status' => 1,
                'description' => '//Jo Dee Messina - A Joyful Noise    "01 - Winter Wonderland.mp3" yEnc ::: //Karen Lynne - 2000 - Six Days in December   "Pat Drummond and Karen Lynne - 01 - The Rush.mp3" yEnc',
                'ordinal' => 10,
            ),
            194 =>
            array (
                'id' => 195,
                'group_regex' => '^alt\\.binaries\\.country\\.mp3$',
            'regex' => '/^(?P<match0>(\\]?"[A-Z0-9].{3,} - )+?([A-Z0-9].{3,}? - )+?)(\\d\\d - )?[a-zA-Z0-9].+?\\.[A-Za-z0-9]{2,4}" yEnc$/',
                'status' => 1,
                'description' => '//"Heather Myles - Highways and Honky Tonks - 05 - True Love.mp3" yEnc ::: //"Reba McEntire - The Secret Of Giving - A Christmas Collection - 09 - This Christmas.mp3" yEnc ::: //]"Heather Myles - Highways and Honky Tonks - 05 - True Love.mp3" yEnc ::: //"Reba McEntire - Moments & Memories - The Best Of Reba - Australian-back.jpg" yEnc ::: //"Reba McEntire - The Secret Of Giving - A Christmas Collection - 01 - This Is My Prayer For You.mp3" yEnc ::: //"Reba McEntire - American Legends-Best Of The Early Years - 02 - You Really Better Love Me After This.Mp3" yEnc',
                'ordinal' => 15,
            ),
            195 =>
            array (
                'id' => 196,
                'group_regex' => '^alt\\.binaries\\.country\\.mp3$',
            'regex' => '/^(?P<match0>"[A-Z0-9].{3,}? - )(([A-Z0-9][^-]{3,}?|\\s*\\d\\d) - )?[a-zA-Z0-9].{2,}?\\.[A-Za-z0-9]{2,4}?" yEnc$/',
                'status' => 1,
                'description' => '//"Reba McEntire - Duets.m3u" yEnc ::: //"Reba McEntire - Greatest Hits Volume Two - back.jpg" yEnc ::: //"Reba McEntire - American Legends-Best Of The Early Years.m3u" yEnc ::: //"Jason Allen - 00 - nfo.txt" yEnc ::: //"Sean Ofarrell-L',
                'ordinal' => 20,
            ),
            196 =>
            array (
                'id' => 197,
                'group_regex' => '^alt\\.binaries\\.country\\.mp3$',
            'regex' => '/^(?P<match0>\\]"[\\w-]{10,}?)-[a-zA-Z0-9]+\\.[a-zA-Z0-9]{2,4}" yEnc$/',
                'status' => 1,
                'description' => '//]"Heather_Myles_-_Highways_And_Honky_Tonks-back.jpg" yEnc',
                'ordinal' => 25,
            ),
            197 =>
            array (
                'id' => 198,
                'group_regex' => '^alt\\.binaries\\.country\\.mp3$',
            'regex' => '/^(?P<match0>[A-Z0-9].{3,}? - [A-Z0-9].{3,}? - )\\d\\d - [a-zA-Z0-9].{2,}?\\.[A-Za-z0-9]{2,4}?" yEnc$/',
                'status' => 1,
                'description' => '//Merv & Maria - Chasing Rainbows  Merv & Maria - 01 - Sowin\' Love.mp3" yEnc',
                'ordinal' => 30,
            ),
            198 =>
            array (
                'id' => 199,
                'group_regex' => '^alt\\.binaries\\.dc$',
            'regex' => '/^(?P<match0>[A-Z0-9].+? postet\\s+.+?\\s+\\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//Eragon postet    Horror     S01 E01   german Sub    [02/22] - "kopiert neu.par2" yEnc ::: //Eragon postet   Rapunzel  S02E12   german Sub  hardcodet   [02/18] - "Rapunzel S02E12 HDTV x264-LOL ger subbed.par2" yEnc',
                'ordinal' => 5,
            ),
            199 =>
            array (
                'id' => 200,
                'group_regex' => '^alt\\.binaries\\.documentaries$',
            'regex' => '/^(?P<match0>#sterntuary - .+? - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//#sterntuary - Alex Jones Radio Show - "05-03-2009_INFO_BAK_ALJ.nfo" yEnc',
                'ordinal' => 5,
            ),
            200 =>
            array (
                'id' => 201,
                'group_regex' => '^alt\\.binaries\\.documentaries$',
            'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\)) "((BBC|ITV) )?(?P<match1>.+?)(\\.part\\d+)?(\\.(par2|(vol.+?))"|\\.[a-z0-9]{3}"|") - \\d.+? - (\\d.+? -)? yEnc$/',
                'status' => 1,
            'description' => '//(08/25) "Wild Russia 5 of 6 The Secret Forest 2009.part06.rar" - 47.68 MB - 771.18 MB - yEnc ::: //(01/24) "ITV Wild Britain With Ray Mears 1 of 6 Deciduous Forest 2011.nfo" - 4.34 kB - 770.97 MB - yEnc ::: //(24/24) "BBC Great British Garden Revival 03 of 10 Cottage Gardens And House Plants 2013.vol27+22.PAR2" - 48.39 MB - 808.88 MB - yEnc',
                'ordinal' => 10,
            ),
            201 =>
            array (
                'id' => 202,
                'group_regex' => '^alt\\.binaries\\.documentaries$',
            'regex' => '/^.+?\\[\\d+\\/(?P<match0>\\d+\\][-_ ]{0,3}.+?)[-_ ]{0,3}("|#34;)(?P<match1>.+?)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}("|#34;))[-_ ]{0,3}yEnc$/',
                'status' => 1,
            'description' => '//(World Air Routes - WESTJET - B737-700) [028/109] - "World Air Routes - WESTJET - B737-700.part027.rar" yEnc',
                'ordinal' => 15,
            ),
            202 =>
            array (
                'id' => 203,
                'group_regex' => '^alt\\.binaries\\.documentaries$',
            'regex' => '/.*[\\(\\[]\\d+\\/(?P<match0>\\d+[\\)\\]])[-_ ]{0,3}("|#34;)(?P<match1>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4})("|#34;)(.+?)yEnc$/i',
                'status' => 1,
            'description' => '//Beyond Vanilla (2010) Documentary DVDrip XviD-Uncut - (02/22) "Beyond.Vanilla.2010.Documentary.DVDrip.XviD-Uncut.par2" - yenc yEnc',
                'ordinal' => 20,
            ),
            203 =>
            array (
                'id' => 204,
                'group_regex' => '^alt\\.binaries\\.documentaries$',
            'regex' => '/.*[\\(\\[]\\d+-(?P<match0>\\d+[\\)\\]])[-_ ]{0,3}("|#34;)(?P<match1>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}("|#34;)).+?yEnc$/i',
                'status' => 1,
            'description' => '//Rough Cut - Woodworking with Tommy Mac - Pilgrim Blanket Chest (1600s) DVDrip DivX - (02-17) "Rough.Cut-Woodworking.with.Tommy.Mac-Pilgrim.Blanket.Chest.1600s-DVDrip.DivX.2010.par2" - yEnc yEnc',
                'ordinal' => 25,
            ),
            204 =>
            array (
                'id' => 205,
                'group_regex' => '^alt\\.binaries\\.documentaries$',
            'regex' => '/(?P<match0>.+) - [\\(\\[]\\d+(?P<match1>\\|\\d+[\\)\\]])[-_ ]{0,3}("|#34;).+?(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}("|#34;)).+?yEnc$/i',
                'status' => 1,
            'description' => '//Asia This Week (NHK World, 19 & 20 July 2013) - \'Malala\'s movement for girls\' education + Japan seeks imports from Southeast Asia - soccer players\' - (02|14) - "ATW-2013-07-20.par2" yEnc ::: //Asia Biz Forecast (NHK World, 6 & 7 July 2013) - \'China: limits of growth + Japan: remote access\' - (05|14) - "ABF-2013-07-07.part3.rar" yEnc',
                'ordinal' => 30,
            ),
            205 =>
            array (
                'id' => 206,
                'group_regex' => '^alt\\.binaries\\.documentaries$',
            'regex' => '/(?P<match0>.+) - File \\d+ of (?P<match1>\\d+)[-_ ]{0,3}.+?(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}).+?yEnc$/i',
                'status' => 1,
            'description' => '//Asia Biz Forecast (NHK World, 16-17 June 2012) - "Japan seeks energy options" - File 01 of 14  - ABF-2012-06-16.nfo  (yEnc',
                'ordinal' => 35,
            ),
            206 =>
            array (
                'id' => 207,
                'group_regex' => '^alt\\.binaries\\.documentaries$',
            'regex' => '/.*"(?P<match0>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}")  (?P<match1>\\d+[,.]\\d+ [kKmMgG][bB]ytes) yEnc$/i',
                'status' => 1,
                'description' => '//Dark MatterDark Energy S02E06 - "Dark Matter_Dark Energy S02E06 - The Universe - History Channel.part1.rar"  51.0 MBytes yEnc',
                'ordinal' => 40,
            ),
            207 =>
            array (
                'id' => 208,
                'group_regex' => '^alt\\.binaries\\.documentaries$',
            'regex' => '/\\(\\d+\\/(?P<match0>\\d+\\) - .+) - "(.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[.,]\\d+ [kKmMgG][bB] - yEnc$/i',
                'status' => 1,
            'description' => '//(35/45) - Keating Pt4 - "Keating Pt4.part34.rar" - 1.77 GB - yEnc',
                'ordinal' => 45,
            ),
            208 =>
            array (
                'id' => 209,
                'group_regex' => '^alt\\.binaries\\.downunder$',
            'regex' => '/^(?P<match0>[a-zA-Z0-9]{5,}\\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//RWlgVffClWxD0vXT1peIwb9DubTLMiYm3nvD1aMMDe[04/16] - "A9jFik7Fk4hCG4GWuxAg.r02" yEnc',
                'ordinal' => 5,
            ),
            209 =>
            array (
                'id' => 210,
                'group_regex' => '^alt\\.binaries\\.dvd$',
            'regex' => '/^(thnx to original poster )?\\[\\d+(?P<match0>\\/\\d+\\] - ".+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2|\\.[A-Za-z0-9]{2,4})("| `).* yEnc$/',
                'status' => 1,
                'description' => '//thnx to original poster [00/98] - "2669DFKKFD2008.nzb ` 2669DFKKFD2008 " yEnc',
                'ordinal' => 5,
            ),
            210 =>
            array (
                'id' => 211,
                'group_regex' => '^alt\\.binaries\\.dvd-r$',
            'regex' => '/^(?P<match0>katanxya "katanxya\\d+)/',
                'status' => 1,
                'description' => '//katanxya "katanxya7221.par2" yEnc',
                'ordinal' => 5,
            ),
            211 =>
            array (
                'id' => 212,
                'group_regex' => '^alt\\.binaries\\.dvd-r$',
            'regex' => '/^\\[\\d+\\/\\d+\\] - "(?P<match0>[A-Z0-9](19|20)\\d\\d[01]\\d[123]\\d_\\d+\\.).+?" - \\d+[,.]\\d+ [mMkKgG][bB] yEnc$/',
                'status' => 1,
                'description' => '//[01/52] - "H1F3E_20130715_005.par2" - 4.59 GB yEnc',
                'ordinal' => 10,
            ),
            212 =>
            array (
                'id' => 213,
                'group_regex' => '^alt\\.binaries\\.ebook$',
            'regex' => '/^New eBooks.+[ _-]{0,3}("|#34;)(?P<match0>.+?.+)\\.(par|vol|rar|nfo).*?("|#34;)/i',
                'status' => 1,
            'description' => '//New eBooks 8 June 2013 - "Melody Carlson - [Carter House Girls 08] - Last Dance (mobi).rar"',
                'ordinal' => 5,
            ),
            213 =>
            array (
                'id' => 214,
                'group_regex' => '^alt\\.binaries\\.ebook$',
            'regex' => '/www.nzbworld.me - \\[\\d+\\/(?P<match0>\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") yEnc/i',
                'status' => 1,
            'description' => '//(Nora Roberts)"Black Rose - Nora Roberts.epub" yEnc ::: //Rowwendees post voor u op www.nzbworld.me - [0/6] - "Animaniacs - Lights, Camera, Action!.nzb" yEnc (1/1)',
                'ordinal' => 10,
            ),
            214 =>
            array (
                'id' => 215,
                'group_regex' => '^alt\\.binaries\\.ebook$',
            'regex' => '/town\\.ag.+?(download all our files with|partner of).+?www\\..+?\\.info.+? \\[\\d+\\/(?P<match0>\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[.,]\\d+ [kKmMgG][bB] yEnc$/i',
                'status' => 1,
            'description' => '//<TOWN><www.town.ag > <download all our files with>>>  www.ssl-news.info <<< > [02/19] - "2013.AUG.non-fiction.NEW.releases.part.1.(PDF)-MiMESiS.part01.rar" - 1,31 GB yEnc ::: //<TOWN><www.town.ag > <partner of www.ssl-news.info > [3/3] - "Career.Secrets.Exposed.by.Gavin.F..Redelman_.RedStarResume.vol0+1.par2" - 8,16 MB yEnc',
                'ordinal' => 15,
            ),
            215 =>
            array (
                'id' => 216,
                'group_regex' => '^alt\\.binaries\\.ebook$',
            'regex' => '/\\((?P<match0>.+works)\\) \\[\\d+\\/(?P<match1>\\d+\\]) - "(?P<match2>.+?)\\.(mobi|pdf|epub|html|azw)" yEnc$/',
                'status' => 1,
            'description' => '//(Zelazny works) [36/39] - "Roger Zelazny - The Furies.mobi" yEnc',
                'ordinal' => 20,
            ),
            216 =>
            array (
                'id' => 217,
                'group_regex' => '^alt\\.binaries\\.ebook$',
            'regex' => '/^\\([a-zA-Z ]+ sampler\\) \\[\\d+(?P<match0>\\/\\d+\\]) - "(?P<match1>.+?)\\.(txt|pdf|mobi|epub|azw)" yEnc$/',
                'status' => 1,
            'description' => '//(Joan D Vinge sampler) [17/17] - "Joan D Vinge - World\'s End.txt" yEnc',
                'ordinal' => 25,
            ),
            217 =>
            array (
                'id' => 218,
                'group_regex' => '^alt\\.binaries\\.ebook$',
            'regex' => '/^New - Retail -( Juvenile Fiction -)? "(?P<match0>.+?)\\.(txt|pdf|mobi|epub|azw)" yEnc$/',
                'status' => 1,
                'description' => '//New - Retail - Juvenile Fiction - "Magic Tree House #47_ Abe Lincoln at Last! - Mary Pope Osborne & Sal Murdocca.epub" yEnc ::: //New - Retail - "Linda Howard - Cover of Night.epub" yEnc ::: //New - Retail - "Kylie Logan_Button Box Mystery 01 - Button Holed.epub" yEnc',
                'ordinal' => 30,
            ),
            218 =>
            array (
                'id' => 219,
                'group_regex' => '^alt\\.binaries\\.ebook$',
            'regex' => '/^\\(No\\. 1 Ladies Detective Agency\\) \\[\\d+(?P<match0>\\/\\d+\\]) - "(?P<match1>.+?)\\.(txt|pdf|mobi|epub|azw)" yEnc$/',
                'status' => 1,
            'description' => '//(No. 1 Ladies Detective Agency) [04/13] - "Alexander McCall Smith - No 1-12 - The Saturday Big Tent Wedding Party.mobi" yEnc',
                'ordinal' => 35,
            ),
            219 =>
            array (
                'id' => 220,
                'group_regex' => '^alt\\.binaries\\.ebook$',
            'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\]) (?P<match1>.+?)\\.(txt|pdf|mobi|epub|azw)/',
                'status' => 1,
                'description' => '//[25/33] Philip Jose Farmer - Toward the Beloved City [ss].mobi ::: //[2/4] Graham Masterton - Descendant.mobi',
                'ordinal' => 40,
            ),
            220 =>
            array (
                'id' => 221,
                'group_regex' => '^alt\\.binaries\\.ebook$',
            'regex' => '/(?P<match0>.+)[-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]][-_ ]{0,3}".+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                'status' => 1,
            'description' => '//(NordicAlbino) [01/10] - "SWHQ_NA_675qe0033102suSmzSE.sfv" yEnc ::: //365 Sex Positions A New Way Every Day for a Steamy Erotic Year [eBook] - (1/5) "365.Sex.Positions.A.New.Way.Every.Day.for.a.Steamy.Erotic.Year.eBook.nfo" - yenc yEnc',
                'ordinal' => 45,
            ),
            221 =>
            array (
                'id' => 222,
                'group_regex' => '^alt\\.binaries\\.ebook$',
            'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\] .+?) - "(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}") yEnc$/',
                'status' => 1,
            'description' => '//[001/125] (NL Epub Wierook Set 49) - "Abulhawa, Susan - Litteken van David_Ochtend in Jenin.epub" yEnc',
                'ordinal' => 50,
            ),
            222 =>
            array (
                'id' => 223,
                'group_regex' => '^alt\\.binaries\\.ebook$',
            'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\)) "(?P<match1>.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                'status' => 1,
            'description' => '//(1/1) "Radiological Imaging of the Kidney - E. Quaia (Springer, 2011) WW.pdf" - 162,82 MB - (Radiological Imaging of the Kidney - E. Quaia (Springer, 2011) WW) yEnc',
                'ordinal' => 55,
            ),
            223 =>
            array (
                'id' => 224,
                'group_regex' => '^alt\\.binaries\\.ebook$',
            'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\)) "(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                'status' => 1,
            'description' => '//(1/7) "0865779767.epub" - 88,93 MB - "Anatomic Basis of Neurologic Diagnosis - epub" yEnc',
                'ordinal' => 60,
            ),
            224 =>
            array (
                'id' => 225,
                'group_regex' => '^alt\\.binaries\\.ebook$',
            'regex' => '/^(?P<match0>Attn:|Re:|REQ:|New Scan).+?[-_ ]{0,3}"(?P<match1>.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}")[-_ ]{0,3}(\\d+[.,]\\d+ [kKmMgG][bB](ytes)?)? yEnc$/i',
                'status' => 1,
            'description' => '//Re: REQ: Jay Lake\'s Mainspring series/trilogy (see titles inside) - "Lake, Jay - Clockwork Earth 03 - Pinion [epub].rar"  405.6 kBytes yEnc ::: //Attn: Brownian - "del Rey, Maria - Paradise Bay (FBS).rar" yEnc ::: //New Scan "Herbert, James - Sepulchre (html).rar" yEnc',
                'ordinal' => 65,
            ),
            225 =>
            array (
                'id' => 226,
                'group_regex' => '^alt\\.binaries\\.ebook$',
            'regex' => '/.*"(?P<match0>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}").+?yEnc$/i',
                'status' => 1,
                'description' => '//"Gabaldon, Diana - Outlander [5] The Fiery Cross.epub" yEnc ::: //Kiny Friedman "Friedman, Kinky - Prisoner of Vandam Street_ A Novel, The.epub" yEnc',
                'ordinal' => 70,
            ),
            226 =>
            array (
                'id' => 227,
                'group_regex' => '^alt\\.binaries\\.ebook$',
            'regex' => '/(?P<match0>.+?)[-_ ]{0,3}\\d+\\/(?P<match1>\\d+[-_ ]{0,3}".+?)\\.(txt|pdf|mobi|epub|azw)"( \\(\\d+\\/\\d+\\))?( )?$/',
                'status' => 1,
                'description' => '//Patterson flood - Mobi -  15/45  "James Patterson - AC 13 - Double Cross.mobi"',
                'ordinal' => 75,
            ),
            227 =>
            array (
                'id' => 228,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^New eBooks.+[ _-]{0,3}("|#34;)(?P<match0>.+?.+)\\.(par|vol|rar|nfo).*?("|#34;)/i',
                'status' => 1,
            'description' => '//New eBooks 8 June 2013 - "Melody Carlson - [Carter House Girls 08] - Last Dance (mobi).rar"',
                'ordinal' => 80,
            ),
            228 =>
            array (
                'id' => 229,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^\\(Nora Roberts\\)"(?P<match0>.+?)\\.(?P<match1>epub|mobi|html|pdf|azw)" yEnc$/',
                'status' => 1,
            'description' => '//(Nora Roberts)"Black Rose - Nora Roberts.epub" yEnc',
                'ordinal' => 85,
            ),
            229 =>
            array (
                'id' => 230,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/town\\.ag.+?download all our files with.+?www\\..+?\\.info.+? \\[\\d+(?P<match0>\\/\\d+\\] - ".+?)(-sample)?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[.,]\\d+ [kKmMgG][bB] yEnc$/i',
                'status' => 1,
            'description' => '//<TOWN><www.town.ag > <download all our files with>>>  www.ssl-news.info <<< > [02/19] - "2013.AUG.non-fiction.NEW.releases.part.1.(PDF)-MiMESiS.part01.rar" - 1,31 GB yEnc',
                'ordinal' => 90,
            ),
            230 =>
            array (
                'id' => 231,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^Doctor Who - Target Books \\[\\d+\\/(?P<match0>\\d+\\]) - "DW[0-9]{0,3}[-_ ]{0,3}(?P<match1>.+?)\\.(txt|pdf|mobi|epub|azw)" yEnc$/',
                'status' => 1,
                'description' => '//Doctor Who - Target Books [128/175] - "DW125_ Terror of the Vervoids - Pip Baker.mobi" yEnc',
                'ordinal' => 95,
            ),
            231 =>
            array (
                'id' => 232,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^\\((?P<match0>[a-zA-Z0-9 -]+)\\) \\[\\d+\\/(?P<match1>\\d+\\]) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//(American Curves - Summer 2012) [01/10] - "AMECURSUM12.par2" yEnc',
                'ordinal' => 100,
            ),
            232 =>
            array (
                'id' => 233,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/(?P<match0>.+)[-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]][-_ ]{0,3}".+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}").+?yEnc$/i',
                'status' => 1,
            'description' => '//(NordicAlbino) [01/10] - "SWHQ_NA_675qe0033102suSmzSE.sfv" yEnc ::: //365 Sex Positions A New Way Every Day for a Steamy Erotic Year [eBook] - (1/5) "365.Sex.Positions.A.New.Way.Every.Day.for.a.Steamy.Erotic.Year.eBook.nfo" - yenc yEnc',
                'ordinal' => 105,
            ),
            233 =>
            array (
                'id' => 234,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^[\\(\\[]\\d+\\/(?P<match0>\\d+[\\)\\]][-_ ]{0,3}".+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}")([-_ ]{0,3}\\d+[.,]\\d+ [kKmMgG][bB])?[-_ ]{0,3}yEnc$/i',
                'status' => 1,
            'description' => '//[1/8] - "Robin Lane Fox - Travelling heroes.epub" yEnc ::: //(1/1) "Unintended Consequences - John Ross.nzb" - 8.67 kB - yEnc',
                'ordinal' => 110,
            ),
            234 =>
            array (
                'id' => 235,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^[\\(\\[] .+? [\\)\\][-_ ]{0,3}"(?P<match0>.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}")[-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]])[-_ ]{0,3}yEnc$/',
                'status' => 1,
            'description' => '//[ Mega Dating and Sex Advice Ebooks - Tips and Tricks for Men PDF ] - "Vatsyayana - The Kama Sutra.pdf.rar" - (54/58) yEnc',
                'ordinal' => 115,
            ),
            235 =>
            array (
                'id' => 236,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^(?P<match0>WWII in Photos)[-_ ]{0,3}"(?P<match1>.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}")[-_ ]{0,3}yEnc$/',
                'status' => 1,
                'description' => '//WWII in Photos - "WWII in Photos_05_Conflict Spreads Around the Globe - The Atlantic.epub" yEnc',
                'ordinal' => 120,
            ),
            236 =>
            array (
                'id' => 237,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^.+?"(?P<match0>.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}")[-_ ]{0,3}\\[\\d+ of (?P<match1>\\d+\\])[-_ ]{0,3}yEnc$/',
                'status' => 1,
            'description' => '//Various ebooks on History pdf format  "Chelsea House Publishing Discovering U.S. History Vol. 8, World War I and the Roaring Twenties - 1914-1928 (2010).pdf"  [1 of 1] yEnc',
                'ordinal' => 125,
            ),
            237 =>
            array (
                'id' => 238,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/.+[\\(\\[]\\d+ of (?P<match0>\\d+[\\)\\]] ".+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}") yEnc$/',
                'status' => 1,
                'description' => '//A few things -  [4 of 13] "Man From U.N.C.L.E. 08 - The Monster Wheel Affair - David McDaniel.epub" yEnc',
                'ordinal' => 130,
            ),
            238 =>
            array (
                'id' => 239,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/.+[\\(\\[]\\d+\\/(?P<match0>\\d+[\\)\\]] - ".+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}") toby\\d+$/',
                'status' => 1,
                'description' => '//DDR Kochbuch 1968-wir kochen gut [1/1] - "DDR Kochbuch 1968-wir kochen gut.pdf" toby042002',
                'ordinal' => 135,
            ),
            239 =>
            array (
                'id' => 240,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^.+?[-_ ]{0,3}"(?P<match0>.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}") [\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]]) ([-_ ]{0,3}\\d+[.,]\\d+ [kKmMgG][bB])?[-_ ]{0,3}yEnc$/',
                'status' => 1,
            'description' => '//Pottermore UK retail - "Harry Potter and the Goblet of Fire - J.K. Rowling.epub" (05/14) - 907.57 kB - yEnc',
                'ordinal' => 140,
            ),
            240 =>
            array (
                'id' => 241,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\] .+?) - "(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}") yEnc$/',
                'status' => 1,
            'description' => '//[001/125] (NL Epub Wierook Set 49) - "Abulhawa, Susan - Litteken van David_Ochtend in Jenin.epub" yEnc',
                'ordinal' => 145,
            ),
            241 =>
            array (
                'id' => 242,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\)) "(?P<match1>.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                'status' => 1,
            'description' => '//(1/1) "Radiological Imaging of the Kidney - E. Quaia (Springer, 2011) WW.pdf" - 162,82 MB - (Radiological Imaging of the Kidney - E. Quaia (Springer, 2011) WW) yEnc',
                'ordinal' => 150,
            ),
            242 =>
            array (
                'id' => 243,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\)) "(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                'status' => 1,
            'description' => '//(1/7) "0865779767.epub" - 88,93 MB - "Anatomic Basis of Neurologic Diagnosis - epub" yEnc',
                'ordinal' => 155,
            ),
            243 =>
            array (
                'id' => 244,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^(?P<match0>Attn:|Re:|REQ:|New Scan).+?[-_ ]{0,3}"(?P<match1>.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}")[-_ ]{0,3}(\\d+[.,]\\d+ [kKmMgG][bB](ytes)?)? yEnc$/i',
                'status' => 1,
            'description' => '//Re: REQ: Jay Lake\'s Mainspring series/trilogy (see titles inside) - "Lake, Jay - Clockwork Earth 03 - Pinion [epub].rar"  405.6 kBytes yEnc ::: //Attn: Brownian - "del Rey, Maria - Paradise Bay (FBS).rar" yEnc ::: //New Scan "Herbert, James - Sepulchre (html).rar" yEnc',
                'ordinal' => 160,
            ),
            244 =>
            array (
                'id' => 245,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/.*"(?P<match0>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}").+?yEnc$/i',
                'status' => 1,
                'description' => '//"Gabaldon, Diana - Outlander [5] The Fiery Cross.epub" yEnc ::: //Kiny Friedman "Friedman, Kinky - Prisoner of Vandam Street_ A Novel, The.epub" yEnc',
                'ordinal' => 165,
            ),
            245 =>
            array (
                'id' => 246,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/(?P<match0>.+?)[-_ ]{0,3}\\d+\\/(?P<match1>\\d+[-_ ]{0,3}".+?)\\.(txt|pdf|mobi|epub|azw)"( \\(\\d+\\/\\d+\\))?( )?$/',
                'status' => 1,
                'description' => '//Patterson flood - Mobi -  15/45  "James Patterson - AC 13 - Double Cross.mobi"',
                'ordinal' => 170,
            ),
            246 =>
            array (
                'id' => 247,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/\\d+\\/(?P<match0>\\d+[-_ ]{0,3}.+)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4})[-_ ]{0,3}yEnc$/i',
                'status' => 1,
                'description' => '//04/63  Brave New World Revisited - Aldous Huxley.mobi  yEnc',
                'ordinal' => 175,
            ),
            247 =>
            array (
                'id' => 248,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^- (?P<match0>.+?)\\.(par|vol|rar|nfo)[-_ ]{0,3}(?P<match1>.+)/',
                'status' => 1,
                'description' => '//- Campbell, F.E. - Susan - HIT 125.rar  BDSM Themed Adult Erotica - M/F F/F - Rtf & Pdf',
                'ordinal' => 180,
            ),
            248 =>
            array (
                'id' => 249,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^"(?P<match0>.+?)\\.(txt|pdf|mobi|epub|azw)" \\(\\d+\\/(?P<match1>\\d+\\))/',
                'status' => 1,
            'description' => '//"D. F. Jones - 03 - Colossus and The Crab.epub" (1/3)',
                'ordinal' => 185,
            ),
            249 =>
            array (
                'id' => 250,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^"(?P<match0>.+?)\\.(txt|pdf|mobi|epub|azw|lit|rar|nfo|par)" $/',
                'status' => 1,
            'description' => '//"D. F. Jones - 01 - Colossus.epub" (note the space on the end)',
                'ordinal' => 190,
            ),
            250 =>
            array (
                'id' => 251,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^\\[\\d*+\\/(?P<match0>\\d+\\]) - "(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4} "|") yEnc$/i',
                'status' => 1,
                'description' => '//[01/19] - "13_X_Panzer_Tracts_EBook.nfo " yEnc',
                'ordinal' => 195,
            ),
            251 =>
            array (
                'id' => 252,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\]) (?P<match1>.+?)\\.(txt|pdf|mobi|epub|azw|lit|rar|nfo|par).+?(yEnc)?$/',
                'status' => 1,
            'description' => '//[09/14] Sven Hassel - Legion of the Damned 09, Reign of Hell.mobi  sven hassel as requested (1/7) yEnc ::: //[1/1] Alex Berenson - John Wells 05, The Secret Soldier.mobi (space at end)',
                'ordinal' => 200,
            ),
            252 =>
            array (
                'id' => 253,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\]) - "(?P<match1>.+?)\\.(txt|pdf|mobi|epub|azw|lit|rar|nfo|par)"(  \\d+K)?( )?$/',
                'status' => 1,
            'description' => '//[1/1] - "Die Kunst der Fotografie Lehrbuch und Bildband f  r ambitionierte Fotografen.rar" ::: //[1/1] - "Demonic_ How the Liberal Mob Is Endanger - Coulter, Ann.mobi" (note space at end) ::: //[1/1] - "Paris in Love_ A Memoir - Eloisa James.mobi"  1861K',
                'ordinal' => 205,
            ),
            253 =>
            array (
                'id' => 254,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^\\d+\\/(?P<match0>\\d+)[-_ ]{0,3}(?P<match1>.+?)\\.(txt|pdf|mobi|epub|azw|lit|rar|nfo|par)$/',
                'status' => 1,
            'description' => '//002/240  Swordships.of.Scorpio.(Dray.Prescot).-.Alan.Burt.Akers.epub',
                'ordinal' => 210,
            ),
            254 =>
            array (
                'id' => 255,
                'group_regex' => '^alt\\.binaries\\.e-book$',
            'regex' => '/^(?P<match0>[a-zA-Z0-9. ].+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|) yEnc$/i',
                'status' => 1,
                'description' => '//Akers Alan Burt - Dray Prescot Saga 14 - Krozair von Kregen.rar yEnc',
                'ordinal' => 215,
            ),
            255 =>
            array (
                'id' => 256,
                'group_regex' => '^alt\\.binaries\\.e-book.flood$',
            'regex' => '/^New eBooks.+[ _-]{0,3}("|#34;)(?P<match0>.+?.+)\\.(par|vol|rar|nfo).*?("|#34;)/i',
                'status' => 1,
            'description' => '//New eBooks 8 June 2013 - "Melody Carlson - [Carter House Girls 08] - Last Dance (mobi).rar"',
                'ordinal' => 220,
            ),
            256 =>
            array (
                'id' => 257,
                'group_regex' => '^alt\\.binaries\\.e-book.flood$',
            'regex' => '/town\\.ag.+?download all our files with.+?www\\..+?\\.info.+? \\[\\d+(?P<match0>\\/\\d+\\] - ".+?)(-sample)?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[.,]\\d+ [kKmMgG][bB] yEnc$/i',
                'status' => 1,
            'description' => '//<TOWN><www.town.ag > <download all our files with>>>  www.ssl-news.info <<< > [02/19] - "2013.AUG.non-fiction.NEW.releases.part.1.(PDF)-MiMESiS.part01.rar" - 1,31 GB yEnc',
                'ordinal' => 225,
            ),
            257 =>
            array (
                'id' => 258,
                'group_regex' => '^alt\\.binaries\\.e-book.flood$',
            'regex' => '/^[A-Za-z ]+[-_ ]{0,3}"(?P<match0>.+?)\\.(txt|pdf|mobi|epub|azw)"[-_ ]{0,3}yEnc$/',
                'status' => 1,
            'description' => '//World War II History - "Spies of the Balkans - Alan Furst.mobi" yEnc ::: //True Crime  "T. J. English - Havana Nocturne (v5.0).mobi" yEnc ::: //E C Tubb Flood - "E C Tubb - Dumarest 31 The Temple of Truth.epub" - yEnc',
                'ordinal' => 230,
            ),
            258 =>
            array (
                'id' => 259,
                'group_regex' => '^alt\\.binaries\\.e-book.flood$',
            'regex' => '/^SFF Dump - "(?P<match0>.+?)\\.(txt|pdf|mobi|epub|azw)" \\(\\d+\\/\\d+\\) - \\d+[.,]\\d+ [kKmMgG][bB] - yEnc$/',
                'status' => 1,
            'description' => '//SFF Dump - "Thomas M. Disch - Camp Concentration.epub" (1033/1217) - 226.47 kB - yEnc',
                'ordinal' => 235,
            ),
            259 =>
            array (
                'id' => 260,
                'group_regex' => '^alt\\.binaries\\.e-book.flood$',
            'regex' => '/^\\((?P<match0>[a-zA-Z0-9 -]+)\\) \\[\\d+\\/(?P<match1>\\d+\\]) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//(American Curves - Summer 2012) [01/10] - "AMECURSUM12.par2" yEnc',
                'ordinal' => 240,
            ),
            260 =>
            array (
                'id' => 261,
                'group_regex' => '^alt\\.binaries\\.e-book.flood$',
            'regex' => '/(?P<match0>.+?)[-_ ]{0,3}\\d+\\/(?P<match1>\\d+[-_ ]{0,3}".+?)\\.(txt|pdf|mobi|epub|azw)"( \\(\\d+\\/\\d+\\))?( )?$/',
                'status' => 1,
                'description' => '//Patterson flood - Mobi -  15/45  "James Patterson - AC 13 - Double Cross.mobi"',
                'ordinal' => 245,
            ),
            261 =>
            array (
                'id' => 262,
                'group_regex' => '^alt\\.binaries\\.e-book.flood$',
            'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\] .+?) - "(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}") yEnc$/',
                'status' => 1,
            'description' => '//[001/125] (NL Epub Wierook Set 49) - "Abulhawa, Susan - Litteken van David_Ochtend in Jenin.epub" yEnc',
                'ordinal' => 250,
            ),
            262 =>
            array (
                'id' => 263,
                'group_regex' => '^alt\\.binaries\\.e-book.flood$',
            'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\)) "(?P<match1>.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                'status' => 1,
            'description' => '//(1/1) "Radiological Imaging of the Kidney - E. Quaia (Springer, 2011) WW.pdf" - 162,82 MB - (Radiological Imaging of the Kidney - E. Quaia (Springer, 2011) WW) yEnc',
                'ordinal' => 255,
            ),
            263 =>
            array (
                'id' => 264,
                'group_regex' => '^alt\\.binaries\\.e-book.flood$',
            'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\)) "(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                'status' => 1,
            'description' => '//(1/7) "0865779767.epub" - 88,93 MB - "Anatomic Basis of Neurologic Diagnosis - epub" yEnc',
                'ordinal' => 260,
            ),
            264 =>
            array (
                'id' => 265,
                'group_regex' => '^alt\\.binaries\\.e-book.flood$',
            'regex' => '/^(?P<match0>Attn:|Re:|REQ:|New Scan).+?[-_ ]{0,3}"(?P<match1>.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}")[-_ ]{0,3}(\\d+[.,]\\d+ [kKmMgG][bB](ytes)?)? yEnc$/i',
                'status' => 1,
            'description' => '//Re: REQ: Jay Lake\'s Mainspring series/trilogy (see titles inside) - "Lake, Jay - Clockwork Earth 03 - Pinion [epub].rar"  405.6 kBytes yEnc ::: //Attn: Brownian - "del Rey, Maria - Paradise Bay (FBS).rar" yEnc ::: //New Scan "Herbert, James - Sepulchre (html).rar" yEnc',
                'ordinal' => 265,
            ),
            265 =>
            array (
                'id' => 266,
                'group_regex' => '^alt\\.binaries\\.e-book.flood$',
            'regex' => '/^\\*(FULL )?REPOST\\* New eBooks.+[-_ ]{0,3}"(?P<match0>.+)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}")$/i',
                'status' => 1,
            'description' => '//*FULL REPOST* New eBooks 26 Nov 2012 & 20% PAR2 Set -  "Elisabeth Kyle - The Captain\'s House (siPDF).rar" ::: //*REPOST* New eBooks 23 Nov 2012 -  "Charles Culver - [The 11th Floor 02] - Awakening (mobi).rar"',
                'ordinal' => 270,
            ),
            266 =>
            array (
                'id' => 267,
                'group_regex' => '^alt\\.binaries\\.e-book.flood$',
            'regex' => '/^.+?Search (for|4) (number|Numeric String) at end of (title|Subject)[-_ ]{0,3}(?P<match0>.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4})[-\\=_ ]{0,3}\\d+[-_ ]{0,3}.+?yEnc$/i',
                'status' => 1,
            'description' => '//1 - 5 July 2013 - Search for number at end of title - Bevin Alexander - How Hitler Could Have Won World War II- The Fatal Errors That Lead to Nazi Defeat (epub).rar - 14418-25255-6053.rar.txt yEnc ::: //10 July 2013 - Search 4 Numeric String at End of Subject - Andew Hodges - Alan Turing- The Enigma (Centenary Edition) (kf8 mobi).rar = 21317-25234-21710.rar.txt yEnc',
                'ordinal' => 275,
            ),
            267 =>
            array (
                'id' => 268,
                'group_regex' => '^alt\\.binaries\\.e-book.flood$',
            'regex' => '/.*"(?P<match0>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}").+?yEnc$/i',
                'status' => 1,
                'description' => '//"Gabaldon, Diana - Outlander [5] The Fiery Cross.epub" yEnc ::: //Kiny Friedman "Friedman, Kinky - Prisoner of Vandam Street_ A Novel, The.epub" yEnc',
                'ordinal' => 280,
            ),
            268 =>
            array (
                'id' => 269,
                'group_regex' => '^alt\\.binaries\\.e-book.flood$',
            'regex' => '/^"(?P<match0>.+)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}")[-_ ]{0,3}\\d+[kKmMgG]$/i',
                'status' => 1,
                'description' => '//"Back to Pakistan_ A Fifty-Year Journey - Leslie Noyes Mass.pdf"  2778K',
                'ordinal' => 285,
            ),
            269 =>
            array (
                'id' => 270,
                'group_regex' => '^alt\\.binaries\\.e-book.flood$',
            'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\][-_ ]{0,3}.+)\\.(txt|pdf|mobi|epub|azw)[-_ ]{0,3}.+flood( )?$/',
                'status' => 1,
                'description' => '//[002/182] A. E. Van Vogt - The Anarchistic Colossus.mobi  mobi flood ::: //[002/115] Alan Dean Foster - Alien.mobi  sf single author flood',
                'ordinal' => 290,
            ),
            270 =>
            array (
                'id' => 271,
                'group_regex' => '^alt\\.binaries\\.e-book.flood$',
            'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\]) (?P<match1>.+?)\\.(txt|pdf|mobi|epub|azw)/',
                'status' => 1,
                'description' => '//[2/4] Graham Masterton - Descendant.mobi',
                'ordinal' => 295,
            ),
            271 =>
            array (
                'id' => 272,
                'group_regex' => '^alt\\.binaries\\.e-book\\.magazines$',
            'regex' => '/^(?P<match0>\\[.+?\\] - ").+?" yEnc$/',
                'status' => 1,
                'description' => '// e-book.magazines has really only header we care about in the form ::: // [Top.Gear.South.Africa-February.2014] - "Top.Gear.South.Africa-February.2014.pdf.vol00+1.par2" yEnc  - 809.32 KB',
                'ordinal' => 5,
            ),
            272 =>
            array (
                'id' => 273,
                'group_regex' => '^alt\\.binaries\\.e-book\\.rpg$',
            'regex' => '/^.+?\\[\\d+\\/(?P<match0>\\d+\\]) - "(?P<match1>.+?)\\.(txt|pdf|mobi|epub|azw)" yEnc$/',
                'status' => 1,
                'description' => '//ATTN: falsifies RE: REQ:-Pathfinder RPG anything at all TIA [362/408] - "Pathfinder_-_PZO1110B_-_Pathfinder_RPG_-_Beta_Playtest_-_Prestige_Enhancement.pdf" yEnc',
                'ordinal' => 10,
            ),
            273 =>
            array (
                'id' => 274,
                'group_regex' => '^alt\\.binaries\\.erotica$',
            'regex' => '/(?P<match0>\\[[\\d]+\\]-\\[FULL\\]-\\[#a\\.b\\.erotica@EFNet\\]-\\[) \\d{2,3}_.+? \\][- ]\\[\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '// SPECIAL CASE FOR XXX PACKS ::: //[398342]-[FULL]-[#a.b.erotica@EFNet]-[ 02_18onlygirls.com.a.golden.lady..12.10.12.stephanie ]-[04/16] - "02_18onlygirls.com.a.golden.lady..12.10.12.stephanie.part03.rar" yEnc',
                'ordinal' => 5,
            ),
            274 =>
            array (
                'id' => 275,
                'group_regex' => '^alt\\.binaries\\.erotica$',
            'regex' => '/\\[(?P<match0>[a-fA-F0-9]+)][-_ ]{0,3}.+?[-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]])[-_ ]{0,3}"(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}") yEnc$/',
                'status' => 1,
                'description' => '//[f3a543495657d38c361dbe767a8506df] - sandramilka01-casting [10/25] - "sandramilka01-casting.part08.rar" yEnc',
                'ordinal' => 10,
            ),
            275 =>
            array (
                'id' => 276,
                'group_regex' => '^alt\\.binaries\\.erotica$',
            'regex' => '/^(?P<match0>\\w+)\\[\\d+\\/(?P<match1>\\d+)\\] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//ECG190215XUTFQI4JB[34/37] - "ECG190215XUTFQI4JB.vol03+04.par2" yEnc',
                'ordinal' => 15,
            ),
            276 =>
            array (
                'id' => 277,
                'group_regex' => '^alt\\.binaries\\.erotica$',
            'regex' => '/(?P<match0>\\[[\\d#]+\\]-\\[.+?\\]-\\[.+?\\])-\\[ (?P<match1>.+?) \\][- ]\\[\\d+\\/\\d+\\] - ".+?" yEnc$/',
                'status' => 1,
            'description' => '//[278997]-[FULL]-[#a.b.erotica]-[ chi-the.walking.dead.xxx ]-[06/51] - "chi-the.walking.dead.xxx-s.mp4" yEnc ::: //[######]-[FULL]-[#a.b.teevee@EFNet]-[ Misfits.S01.SUBPACK.DVDRip.XviD-P0W4DVD ] [1/5] - "Misfits.S01.SUBPACK.DVDRip.XviD-P0W4DVD.nfo" yEnc ::: //Re: [147053]-[FULL]-[#a.b.teevee]-[ Top_Gear.20x04.HDTV_x264-FoV ]-[11/59] - "top_gear.20x04.hdtv_x264-fov.r00" yEnc (01/20)',
                'ordinal' => 20,
            ),
            277 =>
            array (
                'id' => 278,
                'group_regex' => '^alt\\.binaries\\.erotica$',
            'regex' => '/\\[.+?\\] - \\[\\d+\\/(?P<match0>\\d+\\]) - "(?P<match1>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}") yEnc$/i',
                'status' => 1,
                'description' => '//[U4A] - [11/12] - "yyf535864ky3btdmeq3bvh1y089v0bsw44oukp15fxtnqiu4wi.vol062+64.par2" yEnc ::: //[Art-of-Usenet] - [21/31] - "XxX2015PeHo02AoU15XxX.part20.rar" yEnc',
                'ordinal' => 25,
            ),
            278 =>
            array (
                'id' => 279,
                'group_regex' => '^alt\\.binaries\\.erotica$',
            'regex' => '/\\w+ - \\[\\d+\\/(?P<match0>\\d+\\]) - "(?P<match1>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}") yEnc$/i',
                'status' => 1,
                'description' => '//999akilina88cast77 - [06/27] - "999akilina88cast77.part05.rar" yEnc',
                'ordinal' => 30,
            ),
            279 =>
            array (
                'id' => 280,
                'group_regex' => '^alt\\.binaries\\.erotica$',
            'regex' => '/^<TOWN><www\\.town\\.ag > <download all our files with>>> www\\.ssl-news\\.info <<< > \\[\\d+(?P<match0>\\/\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - /i',
                'status' => 1,
                'description' => '//<TOWN><www.town.ag > <download all our files with>>> www.ssl-news.info <<< > [01/28] - "TayTO-heyzo_hd_0317_full.par2" - 2,17 GB yEnc',
                'ordinal' => 35,
            ),
            280 =>
            array (
                'id' => 281,
                'group_regex' => '^alt\\.binaries\\.erotica$',
            'regex' => '/^NihilCumsteR \\[\\d+\\/\\d+\\] - "(?P<match0>.+?NihilCumsteR\\.)/',
                'status' => 1,
                'description' => '//NihilCumsteR [1/8] - "Conysgirls.cumpilation.xxx.NihilCumsteR.par2" yEnc',
                'ordinal' => 40,
            ),
            281 =>
            array (
                'id' => 282,
                'group_regex' => '^alt\\.binaries\\.erotica$',
            'regex' => '/^(?P<match0>[a-zA-Z0-9._-]+)[-_ ]{0,3}[\\(\\[]\\d+ of (?P<match1>\\d+[\\)\\]])[-_ ]{0,3}"(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                'status' => 1,
                'description' => '//Brazilian.Transsexuals.SR.UD.12.28.13.HD.720p.HDL [19 of 24] "JhoanyWilkerXmasLD_1_hdmp4.mp4.vol00+1.par2" yEnc',
                'ordinal' => 45,
            ),
            282 =>
            array (
                'id' => 283,
                'group_regex' => '^alt\\.binaries\\.erotica$',
            'regex' => '/^(?P<match0>".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//"Lesbian seductions 26.part.nzb" yEnc',
                'ordinal' => 50,
            ),
            283 =>
            array (
                'id' => 284,
                'group_regex' => '^alt\\.binaries\\.erotica$',
            'regex' => '/(.+)[-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match0>\\d+[\\)\\]][-_ ]{0,3}("|#34;).+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4})("|#34;)(.+?)yEnc$/i',
                'status' => 1,
                'description' => '//..::kleverig.eu::.. [001/141] - "ZYGBUTD5TPgMdjjxnvrl.par2" - 13,28 GB yEnc',
                'ordinal' => 55,
            ),
            284 =>
            array (
                'id' => 285,
                'group_regex' => '^alt\\.binaries\\.erotica$',
            'regex' => '/.*"(?P<match0>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}") - \\(\\d+ - (?P<match1>\\d+\\)) yEnc$/i',
                'status' => 1,
            'description' => '//Whornitas 3 (2015) XXX DVDRiP x264-DivXfacTory - "Whornitas.3.XXX.DVDRiP.x264-DivXfacTory.part40.rar" - (42 - 50) yEnc',
                'ordinal' => 60,
            ),
            285 =>
            array (
                'id' => 286,
                'group_regex' => '^alt\\.binaries\\.erotica$',
            'regex' => '/.*"(?P<match0>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}")(?P<match1>.+?)yEnc$/i',
                'status' => 1,
                'description' => '//"Babysitters_a_Slut_4_Scene_4.part01.rar"_SpotBots yEnc ::: //- "JH2U0H5FIK8TO7YK3Q.part12.rar" yEnc',
                'ordinal' => 65,
            ),
            286 =>
            array (
                'id' => 287,
                'group_regex' => '^alt\\.binaries\\.erotica$',
            'regex' => '/^(?P<match0>.+?usenet-space.+?Powered by.+? ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|").+? \\d+\\/(\\d+.+?)$/i',
                'status' => 1,
                'description' => '//<<<>>CowboyUp2012 XXX><<<Is.Not.Force.It.My.Younger.SOE-806.Jav.Censored.DVDRip.XviD-MotTto>>>usenet-space-cowboys.info<<<Powered by https://secretusenet.com>< "Is.Not.Force.It.My.Younger.SOE-806.Jav.Censored.DVDRip.XviD-MotTto.part01.rar" >< 01/15 (1,39',
                    'ordinal' => 70,
                ),
                287 =>
                array (
                    'id' => 288,
                    'group_regex' => '^alt\\.binaries\\.erotica$',
                'regex' => '/^"(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")(?P<match1>_SpotBots)[-_\\s]{0,3}yEnc$/iu',
                    'status' => 1,
                    'description' => '//"HD_1110.part01.rar"_SpotBots yEnc',
                    'ordinal' => 75,
                ),
                288 =>
                array (
                    'id' => 289,
                    'group_regex' => '^alt\\.binaries\\.erotica$',
                'regex' => '/\\((?P<match0>[\\w\\s-]{8,})\\)[-_\\s]{0,3}\\[\\d+\\/(?P<match1>\\d+)\\][-_\\s]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                'description' => '//(Czech Amateurs 01) [30/43] - "CZEAMA01.part29.rar" yEnc',
                    'ordinal' => 80,
                ),
                289 =>
                array (
                    'id' => 290,
                    'group_regex' => '^alt\\.binaries\\.etc$',
                'regex' => '/^(?P<match0>\\d+ - \\[)\\d+\\/\\d+\\] - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                    'description' => '//7000999555666777123754 - [334/389] - "The Secret of Bible & Jesus. Beyond The Da Vinci Code - YouTube.3gp" yEnc',
                    'ordinal' => 5,
                ),
                290 =>
                array (
                    'id' => 291,
                    'group_regex' => '^alt\\.binaries\\.etc$',
                'regex' => '/^\\[\\s*#?scnzb@?efnet\\s*\\] (?P<match0>.+?) \\[\\d+\\/(?P<match1>\\d+\\]) - ".+?" yEnc$/',
                    'status' => 1,
                    'description' => '//[scnzbefnet] Were.the.Millers.2013.EXTENDED.720p.BluRay.x264-SPARKS [01/61] - "were.the.millers.2013.extended.720p.bluray.x264-sparks.nfo" yEnc',
                    'ordinal' => 10,
                ),
                291 =>
                array (
                    'id' => 292,
                    'group_regex' => '^alt\\.binaries\\.font$',
                'regex' => '/^(?P<match0>[a-zA-Z0-9]{5,}\\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                    'status' => 1,
                    'description' => '//RWlgVffClWxD0vXT1peIwb9DubTLMiYm3nvD1aMMDe[04/16] - "A9jFik7Fk4hCG4GWuxAg.r02" yEnc',
                    'ordinal' => 5,
                ),
                292 =>
                array (
                    'id' => 293,
                    'group_regex' => '^alt\\.binaries\\.fz$',
                'regex' => '/^(?P<match0>>ghost-of-usenet\\.org>.+?<.+?> ").+?" yEnc$/',
                    'status' => 1,
                    'description' => '//>ghost-of-usenet.org>Monte.Cristo.GERMAN.2002.AC3.DVDRiP.XviD.iNTERNAL-HACO<HAVE FUN> "haco-montecristo-xvid-a.par2" yEnc',
                    'ordinal' => 5,
                ),
                293 =>
                array (
                    'id' => 294,
                    'group_regex' => '^alt\\.binaries\\.game$',
                'regex' => '/(?P<match0>\\[[\\d#]+\\]-\\[.+?\\]-\\[.+?\\])-\\[ (?P<match1>.+?) \\][- ]\\[\\d+\\/\\d+\\] - ".+?" yEnc$/',
                    'status' => 1,
                'description' => '//[192474]-[MP3]-[a.b.inner-sanctumEFNET]-[ Newbie_Nerdz_-_I_Cant_Forget_that_Girl_EP-(IM005)-WEB-2012-YOU ] [17/17] - "newbie_nerdz_-_i_cant_forget_that_girl_ep-(im005)-web-2012-you.nfo" yEnc',
                    'ordinal' => 5,
                ),
                294 =>
                array (
                    'id' => 295,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/^(?P<match0>>ghost-of-usenet\\.org>.+?<.+?> ").+?" yEnc$/',
                    'status' => 1,
                    'description' => '//>ghost-of-usenet.org>Monte.Cristo.GERMAN.2002.AC3.DVDRiP.XviD.iNTERNAL-HACO<HAVE FUN> "haco-montecristo-xvid-a.par2" yEnc',
                    'ordinal' => 5,
                ),
                295 =>
                array (
                    'id' => 296,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/^\\( (?P<match0>[\\w. -]{8,}) \\)[-_ ]{0,3}\\[\\d+\\/(?P<match1>\\d+\\]) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                'description' => '//( Overlord II RELOADED ) - [013/112] - "rld-olii.part001.rar" yEnc',
                    'ordinal' => 10,
                ),
                296 =>
                array (
                    'id' => 297,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/^(?P<match0><ghost-of-usenet\\.org>.+? \\[)\\d+\\/\\d+\\] - ".+?" .+? yEnc$/',
                    'status' => 1,
                    'description' => '//<ghost-of-usenet.org>XCOM.Enemy.Unknown.Deutsch.Patch.TokZic [0/9] - "XCOM Deutsch.nzb" ein CrazyUpp yEnc',
                    'ordinal' => 15,
                ),
                297 =>
                array (
                    'id' => 298,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/^(?P<match0>\\[ [-.a-zA-Z0-9]+ \\] - \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                    'status' => 1,
                    'description' => '//[ Dawn.of.Fantasy.Kingdom.Wars-PROPHET ] - [12/52] - "ppt-dfkw.part04.rar" yEnc',
                    'ordinal' => 20,
                ),
                298 =>
                array (
                    'id' => 299,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/\\.net <<<Partner von SSL-News\\.info>>> - \\[\\d+\\/\\d+\\] - "(?P<match0>.+?)(?P<match1>[-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                    'description' => '//brothers-of-usenet.info/.net <<<Partner von SSL-News.info>>> - [11/17] - "Reload.Outdoor.Action.Target.Down.GERMAN-0x0007.vol003+004.PAR2" yEnc',
                    'ordinal' => 25,
                ),
                299 =>
                array (
                    'id' => 300,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/(?P<match0>\\[[\\d#]+\\]-\\[.+?\\]-\\[.+?\\])-\\[ (?P<match1>.+?) \\][- ]\\[\\d+\\/\\d+\\] - ".+?" yEnc$/',
                    'status' => 1,
                    'description' => '//[162198]-[FULL]-[a.b.teevee]-[ MasterChef.Junior.S01E07.720p.HDTV.X264-DIMENSION ]-[09/54] - "masterchef.junior.107.720p-dimension.nfo" yEnc',
                    'ordinal' => 30,
                ),
                300 =>
                array (
                    'id' => 301,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/^"(?P<match0>.+)__www.realmom.info__.+" \\(\\d+\\/(?P<match1>\\d+\\)) \\d+[.,]\\d+ [kKmMgG][bB] yEnc$/',
                    'status' => 1,
                'description' => '//"A.Stroke.of.Fate.Operation.Valkyrie-SKIDROW__www.realmom.info__.nfo" (02/38) 1,34 GB yEnc',
                    'ordinal' => 35,
                ),
                301 =>
                array (
                    'id' => 302,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/^"(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                    'description' => '//"Mad.Men.S06E11.HDTV.x264-2HD.par2" yEnc',
                    'ordinal' => 40,
                ),
                302 =>
                array (
                    'id' => 303,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/^"(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ _-]{0,3}\\[\\d+\\/(?P<match1>\\d+\\])[ _-]{0,3}yEnc$/i',
                    'status' => 1,
                    'description' => '//"Marvels.Agents.of.S.H.I.E.L.D.S01E07.HDTV.XviD-FUM.avi.nfo" [09/16] yEnc',
                    'ordinal' => 45,
                ),
                303 =>
                array (
                    'id' => 304,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/^\\(\\?+\\) \\[\\d+\\/(?P<match0>\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                'description' => '//(????) [03/20] - "Weblinger - The.Haunted.House.Mysteries.v1.0-ZEKE.part01.rar" yEnc',
                    'ordinal' => 50,
                ),
                304 =>
                array (
                    'id' => 305,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/^\\(\\d+\\/\\d+\\)(?P<match0> - Description)?[-_ ]{0,5}"(.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")( - \\d+([.,]\\d+ [kKmMgG])?[bB])? - \\d+([.,]\\d+ [kKmMgG])?[bB][-_ ]{0,3}(\\[REPOST\\] )?yEnc$/i',
                    'status' => 1,
                'description' => '//(001/132) "Harry.Potter.And.The.Goblet.Of.Fire.2005.810p.BluRay.x264.DTS.PRoDJi.nfo" - 8,71 GB - yEnc ::: //(01/11) - Description - "ba588f108dbd068dc93e4b0182de652d.par2" - 696,63 MB - yEnc ::: //(01/11) "Microsoft Games for Windows 8 v1.2.par2" - 189,87 MB - [REPOST] yEnc ::: //(01/24) "ExBrULlNjyRPMdxqSlJKEtAYSncStZs3.nfo" - 3.96 kB - 404.55 MB - yEnc ::: //(01/44) - - "Wii_2688_R_Knorloading.par2" - 1,81 GB - yEnc',
                    'ordinal' => 55,
                ),
                305 =>
                array (
                    'id' => 306,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\)) - \\[Lords-of-Usenet\\] presents (?P<match1>.+?)[-_ ]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - yEnc$/i',
                    'status' => 1,
                'description' => '//(01/59) - [Lords-of-Usenet] presents Sins.of.a.Solar.Empire.Rebellion.Forbidden.Worlds-RELOADED - "rld-soaserfw.nfo" - yEnc',
                    'ordinal' => 60,
                ),
                306 =>
                array (
                    'id' => 307,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\))[-_ ]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+([.,]\\d+ [kKmMgG])?[bB] -(?P<match1>[a-zA-Z0-9-_\\.]+) yEnc$/i',
                    'status' => 1,
                'description' => '//(19/28) "sr-joedanger.rar" - 816,05 MB -Joe.Danger-SKIDROW yEnc ::: //(39/40) "flt-ts31554.vol061+57.PAR2" - 1,43 GB -The_Sims_3_v1.55.4-FLTDOX yEnc',
                    'ordinal' => 65,
                ),
                307 =>
                array (
                    'id' => 308,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/^[\\(\\[]\\d+\\/(?P<match0>\\d+[\\)\\]][-_ ]{0,3}".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                    'description' => '//[02/17] - "Castle.Of.Illusion.Starring.Mickey.Mouse.PSN.PS3-DUPLEX.nfo" yEnc',
                    'ordinal' => 70,
                ),
                308 =>
                array (
                    'id' => 309,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/^\\[PROPER\\] (?P<match0>[a-zA-Z0-9-_\\.]+) [\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]])[-_ ]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                    'description' => '//[PROPER] F',
                    'ordinal' => 75,
                ),
                309 =>
                array (
                    'id' => 310,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/^<<<< (?P<match0>[a-zA-Z0-9-_ ]+) >>>> < USC> <".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")>\\[\\d+\\/(?P<match1>\\d+\\]) \\d+([.,]\\d+ [kKmMgG])?[bB] yEnc$/i',
                    'status' => 1,
                    'description' => '//<<<< Alien Zombie Death v2 EUR PSN PSP-PLAYASiA >>>> < USC> <"Alien Zombie Death v2 EUR PSN PSP-PLAYASiA.part4.rar">[06/16] 153,78 MB yEnc',
                    'ordinal' => 80,
                ),
                310 =>
                array (
                    'id' => 311,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/^<<<.+\\.info>>> fuzzy <<<Powered by .+secretusenet\\.com><(?P<match0>[a-zA-Z0-9-_ ]+)>< ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") >< \\d+\\/(?P<match1>\\d+) \\(\\d+([.,]\\d+ [kKmMgG])?[bB]\\) >< \\d+([.,]\\d+ [kKmMgG])?[bB] > yEnc$/i',
                    'status' => 1,
                'description' => '//<<<usenet-space-cowboys.info>>> fuzzy <<<Powered by https://secretusenet.com><Adventures To Go EUR PSP-ZER0>< "Adventures To Go EUR PSP-ZER0.nfo" >< 2/6 (195,70 MB) >< 10,70 kB > yEnc',
                    'ordinal' => 85,
                ),
                311 =>
                array (
                    'id' => 312,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/^(?P<match0>[a-zA-Z0-9 -\\._]+) - \\[\\d+\\/(?P<match1>\\d+\\])[-_ ]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                    'description' => '//Baku.No.JAP.Working.PSP-PaL - [1/7] - "Baku.No.JAP.Working.PSP-PaL.rar" yEnc',
                    'ordinal' => 90,
                ),
                312 =>
                array (
                    'id' => 313,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/^<TOWN>.+?town\\.ag.+?(www\\..+?|news)\\.[iI]nfo.+? \\(\\d+\\/(?P<match0>\\d+\\)) "(?P<match1>.+?)(-sample)?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[.,]\\d+ [kKmMgG][bB]? - yEnc$/i',
                    'status' => 1,
                'description' => '//<TOWN> www.town.ag > sponsored by www.ssl-news.info > (53/86) "Afro_Samurai_NTSC_PROPER_XBOX360-GameStop.part51.rar" - 7.74 GB - yEnc',
                    'ordinal' => 95,
                ),
                313 =>
                array (
                    'id' => 314,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/^FTDWORLD\\.NET\\| (?P<match0>[a-zA-Z0-9 -_\\.]+) \\[\\d+\\/(?P<match1>\\d+\\])- ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                    'description' => '//FTDWORLD.NET| Grand.Theft.Auto.V.XBOX360-QUACK [020/195]- "gtavdisc1.r17" yEnc',
                    'ordinal' => 100,
                ),
                314 =>
                array (
                    'id' => 315,
                    'group_regex' => '^alt\\.binaries\\.games$',
                'regex' => '/^\\((?P<match0>[a-zA-Z0-9 -_\\.]+)\\) \\[\\d+\\/(?P<match1>\\d+\\]) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                    'description' => '//(F',
                        'ordinal' => 105,
                    ),
                    315 =>
                    array (
                        'id' => 316,
                        'group_regex' => '^alt\\.binaries\\.games$',
                    'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\])  \\((?P<match1>[a-zA-Z0-9 -_\\.]+)\\) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                        'status' => 1,
                    'description' => '//[16/62]  (CastleStorm.XBLA.XBOX360-MoNGoLS) - "mgl-cast.part15.rar" yEnc',
                        'ordinal' => 110,
                    ),
                    316 =>
                    array (
                        'id' => 317,
                        'group_regex' => '^alt\\.binaries\\.games$',
                    'regex' => '/^GOGDump (?P<match0>.+) \\[\\d+\\/(?P<match1>\\d+\\]) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                        'status' => 1,
                    'description' => '//GOGDump Wing Commander - Privateer (1993) [GOG] [03/14] - "Wing Commander - Privateer (1993) [GOG].part2.rar" yEnc',
                        'ordinal' => 115,
                    ),
                    317 =>
                    array (
                        'id' => 318,
                        'group_regex' => '^alt\\.binaries\\.games$',
                    'regex' => '/^(?P<match0>Uploader.Presents)[- ](?P<match1>.+?)[\\(\\[]\\d+\\/\\d+\\]".+?" yEnc$/',
                        'status' => 1,
                        'description' => '//Uploader.Presents-Need.For.Speed.Rivals.XBOX360-PROTOCOL[10/94]"nfs.r-ptc.r07" yEnc',
                        'ordinal' => 120,
                    ),
                    318 =>
                    array (
                        'id' => 319,
                        'group_regex' => '^alt\\.binaries\\.games$',
                    'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\))[-_ ]{0,3}Description[-_ ]{0,3}"\\w+(?P<match1>[-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}\\d+([.,]\\d+)? [kKmMgG][bB][-_\\s]{0,3}[-_\\s]{0,3}yEnc$/ui',
                        'status' => 1,
                        'description' => '// ',
                        'ordinal' => 0,
                    ),
                    319 =>
                    array (
                        'id' => 320,
                        'group_regex' => '^alt\\.binaries\\.games\\.dox$',
                    'regex' => '/(?P<match0>\\[[\\d#]+\\]-\\[.+?\\]-\\[.+?\\])-\\[ (?P<match1>.+?) \\][- ]\\[\\d+\\/\\d+\\] - ".+?" yEnc$/',
                        'status' => 1,
                        'description' => '//[142961]-[MP3]-[a.b.inner-sanctumEFNET]-[ Pascal_and_Pearce-Passport-CDJUST477-2CD-2011-1REAL ] [28/36] - "Pascal_and_Pearce-Passport-CDJUST477-2CD-2011-1REAL.par2" yEnc',
                        'ordinal' => 5,
                    ),
                    320 =>
                    array (
                        'id' => 321,
                        'group_regex' => '^alt\\.binaries\\.games\\.dox$',
                    'regex' => '/^\\[NEW DOX\\][ _-]{0,3}(?P<match0>.+?)[ _-]{0,3}\\[\\d+\\/\\d+\\][ _-]{0,3}"(.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_ ]{0,3}yEnc$/i',
                        'status' => 1,
                        'description' => '//[NEW DOX] The.King.of.Fighters.XIII.Update.v1.1c-RELOADED [1/6] - "The.King.of.Fighters.XIII.Update.v1.1c-RELOADED.par2" yEnc ::: //[NEW DOX] Crysis.3.Crackfix.3.INTERNAL-RELOADED [00/12] ".nzb"  yEnc',
                        'ordinal' => 10,
                    ),
                    321 =>
                    array (
                        'id' => 322,
                        'group_regex' => '^alt\\.binaries\\.games\\.dox$',
                    'regex' => '/^\\[NEW DOX\\][ _-]{0,3}(?P<match0>.+?)[ _-]{0,3}"(.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_ ]{0,3}yEnc$/i',
                        'status' => 1,
                        'description' => '// for some reason the nzb is posted separately with d',
                        'ordinal' => 15,
                    ),
                    322 =>
                    array (
                        'id' => 323,
                        'group_regex' => '^alt\\.binaries\\.games\\.dox$',
                    'regex' => '/^\\[ (?P<match0>[a-zA-Z0-9-\\._ ]+)  \\d+\\/(?P<match1>\\d+ \\]) ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                        'status' => 1,
                        'description' => '//[ Assassins.Creed.3.UPDATE 1.01.CRACK.READNFO-P2P  00/17 ] "Assassins.Creed.3.UPDATE 1.01.nzb" yEnc',
                        'ordinal' => 20,
                    ),
                    323 =>
                    array (
                        'id' => 324,
                        'group_regex' => '^alt\\.binaries\\.games\\.dox$',
                    'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\]) - (?P<match1>[a-zA-Z0-9-\\.\\&_ ]+) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")( - PC)? - yEnc$/i',
                        'status' => 1,
                        'description' => '//[01/16] - GRID.2.Update.v1.0.83.1050.Incl.DLC-RELOADED - "reloaded.nfo" - yEnc ::: //[12/17] - Call.of.Juarez.Gunslinger.Update.v1.03-FTS - "fts-cojgsu103.vol00+01.PAR2" - PC - yEnc ::: //[4/5] - Dungeons.&.Dragons.HD.Chronicles.of.Mystara.Update.2-FTS - "fts-ddcomu2.vol0+1.PAR2" - PC - yEnc',
                        'ordinal' => 25,
                    ),
                    324 =>
                    array (
                        'id' => 325,
                        'group_regex' => '^alt\\.binaries\\.games\\.dox$',
                    'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\]) (?P<match1>[a-zA-Z0-9-\\._ ]+) ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                        'status' => 1,
                        'description' => '//[36/48] NASCAR.The.Game.2013.Update.2-SKIDROW - "sr-nascarthegame2013u2.r33" yEnc',
                        'ordinal' => 30,
                    ),
                    325 =>
                    array (
                        'id' => 326,
                        'group_regex' => '^alt\\.binaries\\.games\\.dox$',
                    'regex' => '/^\\[(?P<match0>[a-zA-Z0-9-\\._ ]+)\\]- ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                        'status' => 1,
                        'description' => '//[Grand_Theft_Auto_Vice_City_1.1_Blood_NoCD_Patch-gimpsRus]- "grugtavc11bcd.nfo" yEnc',
                        'ordinal' => 35,
                    ),
                    326 =>
                    array (
                        'id' => 327,
                        'group_regex' => '^alt\\.binaries\\.games\\.dox$',
                    'regex' => '/^\\[OLD DOX\\][ _-]{0,3}\\(\\d+\\/(?P<match0>\\d+\\)[ _-]{0,3}".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_ ]{0,3}\\d+[,.]\\d+ [mMkKgG][bB][-_ ]{0,3}yEnc$/i',
                        'status' => 1,
                    'description' => '//[OLD DOX] (0001/2018) - "18.Wheels.of.Steel.American.Long.Haul.CHEAT.CODES-RETARDS.7z" - 1,44 GB - yEnc',
                        'ordinal' => 40,
                    ),
                    327 =>
                    array (
                        'id' => 328,
                        'group_regex' => '^alt\\.binaries\\.games\\.dox$',
                    'regex' => '/^(?P<match0>[a-zA-Z0-9-\\._ ]+) - \\[\\d+\\/(?P<match1>\\d+\\]) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|"){0,3}yEnc$/i',
                        'status' => 1,
                        'description' => '//Endless.Space.Disharmony.v1.1.1.Update-SKIDROW - [1/6] - "Endless.Space.Disharmony.v1.1.1.Update-SKIDROW.nfo" - yEnc',
                        'ordinal' => 45,
                    ),
                    328 =>
                    array (
                        'id' => 329,
                        'group_regex' => '^alt\\.binaries\\.games\\.dox$',
                    'regex' => '/^\\((?P<match0>[a-zA-Z0-9-\\._ ]+)\\) \\[\\d+\\/(?P<match1>\\d+\\]) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|"){0,3}yEnc$/i',
                        'status' => 1,
                    'description' => '//(F.E.A.R.3.Update.1-SKIDROW) [01/12] - "F.E.A.R.3.Update.1-SKIDROW.par2" yEnc',
                        'ordinal' => 50,
                    ),
                    329 =>
                    array (
                        'id' => 330,
                        'group_regex' => '^alt\\.binaries\\.games\\.dox$',
                    'regex' => '/^\\((?P<match0>[a-zA-Z0-9-\\._ ]+)\\) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                        'status' => 1,
                    'description' => '//(Company.of.Heroes.2.Update.v3.0.0.9704.Incl.DLC.GERMAN-0x0007) - "0x0007.nfo" yEnc',
                        'ordinal' => 55,
                    ),
                    330 =>
                    array (
                        'id' => 331,
                        'group_regex' => '^alt\\.binaries\\.games\\.xbox360$',
                    'regex' => '/^(?P<match0>Uploader.Presents)[- ](?P<match1>.+?)[\\(\\[]\\d+\\/\\d+\\]".+?" yEnc$/',
                        'status' => 1,
                        'description' => '//Uploader.Presents-Injustice.Gods.Among.Us.Ultimate.Edition.XBOX360-COMPLEX(02/92]"complex-injustice.ultimate.nfo" yEnc ::: //Uploader.Presents-Need.For.Speed.Rivals.XBOX360-PROTOCOL[10/94]"nfs.r-ptc.r07" yEnc',
                            'ordinal' => 5,
                        ),
                        331 =>
                        array (
                            'id' => 332,
                            'group_regex' => '^alt\\.binaries\\.games\\.xbox360$',
                        'regex' => '/^place2home\\.net - (?P<match0>.*?) - (\\[\\d+\\/\\d+\\] - )?".+?" yEnc$/i',
                            'status' => 1,
                            'description' => '//place2home.net - Call.of.Duty.Ghosts.XBOX360-iMARS - [095/101] - "imars-codghosts-360b.vol049+33.par2" yEnc ::: //Place2home.net - Diablo_III_USA_RF_XBOX360-PROTOCOL - "d3-ptc.r34" yEnc',
                            'ordinal' => 10,
                        ),
                        332 =>
                        array (
                            'id' => 333,
                            'group_regex' => '^alt\\.binaries\\.games\\.xbox360$',
                        'regex' => '/^"(?P<match0>.+)(__www\\.realmom\\.info__)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}") [\\[\\(]\\d+\\/(?P<match1>\\d+[\\]\\)]) \\d+[,.]\\d+ [mMkKgG][bB] yEnc$/',
                            'status' => 1,
                        'description' => '//"Arcana_Heart_3_PAL_XBOX360-ZER0__www.realmom.info__.nfo" (02/89) 7,58 GB yEnc',
                            'ordinal' => 15,
                        ),
                        333 =>
                        array (
                            'id' => 334,
                            'group_regex' => '^alt\\.binaries\\.games\\.xbox360$',
                        'regex' => '/^[\\[\\(]\\d+\\/(?P<match0>\\d+[\\)\\]])[-_ ]{0,3}"(?P<match1>.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                            'status' => 1,
                        'description' => '//(01/15) "Mass.Effect.3.Collectors.Edition.DLC.JTAG-XPG.par2" - 747.42 MB - yEnc',
                            'ordinal' => 20,
                        ),
                        334 =>
                        array (
                            'id' => 335,
                            'group_regex' => '^alt\\.binaries\\.games\\.xbox360$',
                        'regex' => '/^\\(.+\\)[-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match0>\\d+[\\)\\]])[-_ ]{0,3}"(?P<match1>.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                            'status' => 1,
                        'description' => '//(????) [00/28] - "Farming.Simulator.XBOX360.JTAG.RGH.nzb" yEnc',
                            'ordinal' => 25,
                        ),
                        335 =>
                        array (
                            'id' => 336,
                            'group_regex' => '^alt\\.binaries\\.games\\.xbox360$',
                        'regex' => '/^\\(\\d+\\)[-_ ]{0,3}(?P<match0>.+)[-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]])[-_ ]{0,3}"(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                            'status' => 1,
                        'description' => '//(14227) BloodRayne_Betrayal_XBLA_XBOX360-XBLAplus [01/25] - "xp-blobe.nfo" yEnc',
                            'ordinal' => 30,
                        ),
                        336 =>
                        array (
                            'id' => 337,
                            'group_regex' => '^alt\\.binaries\\.games\\.xbox360$',
                        'regex' => '/^(?P<match0>\\(\\d+\\))[-_ ]{0,3}\\[.+EFNet\\][-_ ]{0,3}\\[(?P<match1>.+)\\][-_ ]{0,3}\\[\\][-_ ]{0,3}"(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                            'status' => 1,
                        'description' => '//(14811) [#alt.binaries.games.xbox360@EFNet]-[AMY_XBLA_XBOX360-XBLAplus]-[]-  "xp-amyxb.nfo"  yEnc',
                            'ordinal' => 35,
                        ),
                        337 =>
                        array (
                            'id' => 338,
                            'group_regex' => '^alt\\.binaries\\.games\\.xbox360$',
                        'regex' => '/^(?P<match0>\\(\\d+\\))[-_ ]{0,3}\\[.+EFNet\\][-_ ]{0,3}\\[(?P<match1>.+)\\][-_ ]{0,3}"(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                            'status' => 1,
                        'description' => '//(14872) [#alt.binaries.games.xbox360@EFNet]-[BlazBlue_CS_System_Version_Data_Pack_1.03-DLC_XBOX360]-  "xp-bbcssvdp103.nfo"  yEnc',
                            'ordinal' => 40,
                        ),
                        338 =>
                        array (
                            'id' => 339,
                            'group_regex' => '^alt\\.binaries\\.games\\.xbox360$',
                        'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\))[-_ ]{0,3}(?P<match1>.+?)[-_ ]{0,3}"(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                            'status' => 1,
                        'description' => '//(44/82) - Fuzion_Frenzy_2_REPACK-USA-XBOX360-DAGGER - "ff2r-dgr.041" - 6.84 GB - yEnc',
                            'ordinal' => 45,
                        ),
                        339 =>
                        array (
                            'id' => 340,
                            'group_regex' => '^alt\\.binaries\\.games\\.xbox360$',
                        'regex' => '/^\\[[-_ ]{0,3}(?P<match0>\\d+)[-_ ]{0,3}\\][-_ ]{0,3}\\[ ABGX.+\\][-_ ]{0,3}\\[[-_ ]{0,3}(?P<match1>.+)[-_ ]{0,4}\\][-_ ]{0,4}\\(\\d+\\/\\d+\\)[-_ ]{0,3}"(.+?)(\\.part\\d*|\\.rar)?(\\.vol.+\\(\\d+\\\\d+\\)"|\\.[A-Za-z0-9]{2,4}")[-_ ]{0,3}\\d+[,.]\\d+ [mMkKgG][bB][-_ ]{0,3}yEnc$/i',
                            'status' => 1,
                        'description' => '//[  14047  ] - [ ABGX@EFNET ] - [  Rock.Band.Pearl.Jam.Ten.DLC.XBOX360-FYK ALL DLC    ] -  (01/46) "rbpjtdlc-fyk.nfo" - 526,92 MB - yEnc ::: //[  14046  ] - [ ABGX@EFNET ] - [  Rock_Band-2011-07-19-DLC_XBOX360-XBLAplus ALL   ] -  (01/12) "xp-rb-2011-07-19.nfo" - 198,70 MB - yEnc ::: //[ 14102 ] -[ ABGX.NET ] - [ F1.2010.XBOX360-COMPLEX NTSC DVD9  ] -  (01/79) "cpx-f12010.nfo" - 6,57 GB - yEnc',
                            'ordinal' => 50,
                        ),
                        340 =>
                        array (
                            'id' => 341,
                            'group_regex' => '^alt\\.binaries\\.games\\.xbox360$',
                        'regex' => '/^\\[[-_ ]{0,3}(?P<match0>\\d+)[-_ ]{0,3}\\][-_ ]{0,3}\\[FULL\\][-_ ]{0,3}\\[ (abgx360EFNet|#abgx360@EFNet) \\][-_ ]{0,3}\\[[-_ ]{0,3}(?P<match1>.+)[-_ ]{0,3}\\][-_ ]{0,3}\\[\\d+\\/\\d+\\][-_ ]{0,3}"(.+?)(\\.part\\d*|\\.rar)?(\\.vol.+\\(\\d+\\\\d+\\)"|\\.[A-Za-z0-9]{2,4}")[-_ ]{0,3}yEnc$/i',
                            'status' => 1,
                            'description' => '//[ 17956]-[FULL]-[ abgx360EFNet ]-[ F1_2012_JPN_XBOX360-Caravan ]-[78/99] - "cvn-f12012j.r75" yEnc ::: //[ 17827]-[FULL]-[ #abgx360@EFNet ]-[ Capcom_Arcade_Cabinet_XBLA_XBOX360-XBLAplus ]-[01/34] - "xp-capac.nfo" yEnc',
                            'ordinal' => 55,
                        ),
                        341 =>
                        array (
                            'id' => 342,
                            'group_regex' => '^alt\\.binaries\\.games\\.xbox360$',
                        'regex' => '/^\\[(?P<match0>\\d+)\\][-_ ]{0,3}\\[FULL\\][-_ ]{0,3}\\[(abgx360EFNet|#abgx360@EFNet)\\][-_ ]{0,3}\\[\\d+\\/\\d+\\][-_ ]{0,3}"(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/i',
                            'status' => 1,
                            'description' => '//[19672]-[FULL]-[abgx360EFNet]-[01/29] "mgl-cont.par2" yEnc',
                            'ordinal' => 60,
                        ),
                        342 =>
                        array (
                            'id' => 343,
                            'group_regex' => '^alt\\.binaries\\.games\\.xbox360$',
                        'regex' => '/^\\[[-_ ]{0,3}GAMERZZ[-_ ]{0,3}\\][-_ ]{0,3}\\[[-_ ]{0,3}(?P<match0>.+)[-_ ]{0,3}\\][-_ ]{0,3}\\[\\d+\\/(?P<match1>\\d+\\])[-_ ]{0,3}"(.+?)(\\.part\\d*|\\.rar)?(\\.vol.+\\(\\d+\\\\d+\\)"|\\.[A-Za-z0-9]{2,4}")[-_ ]{0,3}yEnc$/i',
                            'status' => 1,
                            'description' => '//[ GAMERZZ ] - [ Grand.Theft.Auto.V.XBOX360-COMPLEX ] [159/170] - "complex-gta5.vol000+18.par2" yEnc',
                            'ordinal' => 65,
                        ),
                        343 =>
                        array (
                            'id' => 344,
                            'group_regex' => '^alt\\.binaries\\.games\\.xbox360$',
                        'regex' => '/^\\[ TOWN \\][ _-]{0,3}\\[ www\\.town\\.ag \\][ _-]{0,3}\\[ (?P<match0>.+?) \\][ _-]{0,3}\\[ partner of www\\.ssl-news\\.info \\][ _-]{0,3}\\[\\d+\\/(?P<match1>\\d+\\])[ _-]{0,3}"(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}")[ _-]{0,3}yEnc$/i',
                            'status' => 1,
                            'description' => '//[ TOWN ]-[ www.town.ag ]-[ Assassins.Creed.IV.Black.Flag.XBOX360-COMPLEX ]-[ partner of www.ssl-news.info ] [074/195]- "complex-ac4.bf.d1.r71" yEnc',
                            'ordinal' => 70,
                        ),
                        344 =>
                        array (
                            'id' => 345,
                            'group_regex' => '^alt\\.binaries\\.german\\.movies$',
                        'regex' => '/^(?P<match0>>ghost-of-usenet\\.org>.+?<.+?> ").+?" yEnc$/',
                            'status' => 1,
                            'description' => '//>ghost-of-usenet.org>Monte.Cristo.GERMAN.2002.AC3.DVDRiP.XviD.iNTERNAL-HACO<HAVE FUN> "haco-montecristo-xvid-a.par2" yEnc',
                            'ordinal' => 5,
                        ),
                        345 =>
                        array (
                            'id' => 346,
                            'group_regex' => '^alt\\.binaries\\.german\\.movies$',
                        'regex' => '/^\\( (?P<match0>[\\w. -]{8,}) \\)[-_ ]{0,3}\\[\\d+\\/(?P<match1>\\d+\\]) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//( Overlord II RELOADED ) - [013/112] - "rld-olii.part001.rar" yEnc',
                            'ordinal' => 10,
                        ),
                        346 =>
                        array (
                            'id' => 347,
                            'group_regex' => '^alt\\.binaries\\.german\\.movies$',
                        'regex' => '/^(?P<match0><ghost-of-usenet\\.org>.+? \\[)\\d+\\/\\d+\\] - ".+?" .+? yEnc$/',
                            'status' => 1,
                            'description' => '//<ghost-of-usenet.org>XCOM.Enemy.Unknown.Deutsch.Patch.TokZic [0/9] - "XCOM Deutsch.nzb" ein CrazyUpp yEnc',
                            'ordinal' => 15,
                        ),
                        347 =>
                        array (
                            'id' => 348,
                            'group_regex' => '^alt\\.binaries\\.ghosts$',
                        'regex' => '/^(?P<match0><ghost-of-usenet\\.org>.+? \\[)\\d+\\/\\d+\\] - ".+?" .+? yEnc$/',
                            'status' => 1,
                            'description' => '//<ghost-of-usenet.org>XCOM.Enemy.Unknown.Deutsch.Patch.TokZic [0/9] - "XCOM Deutsch.nzb" ein CrazyUpp yEnc',
                            'ordinal' => 5,
                        ),
                        348 =>
                        array (
                            'id' => 349,
                            'group_regex' => '^alt\\.binaries\\.ghosts$',
                        'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\)) ("|#34;)(?P<match1>.+)(\\.[vol|part].+)?\\.(par2|nfo|rar|nzb)("|#34;) - \\d+[.,]\\d+ [kKmMgG][bB] - yEnc$/i',
                            'status' => 1,
                        'description' => '//(14/20) "Jack.the.Giant.Slayer.2013.AC3.192Kbps.23fps.2ch.TR.Audio.BluRay-Demuxed.by.par2" - 173,15 MB - yEnc',
                            'ordinal' => 10,
                        ),
                        349 =>
                        array (
                            'id' => 350,
                            'group_regex' => '^alt\\.binaries\\.hdtv$',
                        'regex' => '/^(\\[ TrollHD \\] - )?[\\[\\(][-_ ]{0,3}\\d+\\/(?P<match0>\\d+[-_ ]{0,3}[\\)\\]]) - "(?P<match1>.+?) MPEG2-(DON|TrollHD)\\..+?" yEnc$/',
                            'status' => 1,
                            'description' => '//[ TrollHD ] - [ 0270/2688 ] - "Tour De France 2013 1080i HDTV MPA 2.0 MPEG2-TrollHD.part0269.rar" yEnc ::: //[17/48] - "Oprah\'s Next Chapter S02E37 Lindsay Lohan 1080i HDTV DD5.1 MPEG2-TrollHD.part16.rar" yEnc ::: //[02/29] - "Fox Sports 1 on 1 - Tom Brady 720p HDTV DD5.1 MPEG2-DON.part01.rar" yEnc',
                            'ordinal' => 5,
                        ),
                        350 =>
                        array (
                            'id' => 351,
                            'group_regex' => '^alt\\.binaries\\.hdtv$',
                        'regex' => '/.* - \\[\\d+\\/(?P<match0>\\d+\\]) - "(?P<match1>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}").+?yEnc$/i',
                            'status' => 1,
                            'description' => '//Covert.Affairs.S05E06.Embassy.Row.1080p.WEB-DL.DD5.1.H.264-NTb.vol093+82.par2 - [41/42] - "Covert.Affairs.S05E06.Embassy.Row.1080p.WEB-DL.DD5.1.H.264-NTb.vol093+82.par2" yEnc',
                            'ordinal' => 10,
                        ),
                        351 =>
                        array (
                            'id' => 352,
                            'group_regex' => '^alt\\.binaries\\.hdtv$',
                        'regex' => '/.*"(?P<match0>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}(\\.txt)?").+?yEnc$/i',
                            'status' => 1,
                            'description' => '//"bhuhirawniowrj3io2o34.vol061+4.par2" yEnc',
                            'ordinal' => 15,
                        ),
                        352 =>
                        array (
                            'id' => 353,
                            'group_regex' => '^alt\\.binaries\\.hdtv\\.x264$',
                        'regex' => '/(?P<match0>\\[\\d+\\]-\\[.+?\\]-\\[.+?\\]-\\[ .+? \\](-| ))\\[\\d+\\/\\d+\\][ -]* ".+?" yEnc$/',
                            'status' => 1,
                            'description' => '//[133170]-[FULL]-[#a.b.moovee]-[ Hansel.And.Gretel.Witch.Hunters.DVDR-iGNiTiON ]-[032/117] "ign-witchhunters.r24" yEnc ::: //Re: [133388]-[FULL]-[#a.b.moovee]-[ Familiar.Grounds.2011.DVDRip.XViD-TWiST ]-[01/59] - "twist-xvid-terrainsconus.nfo" yEnc ::: //[134212]-[FULL]-[#a.b.moovee]-[ Monsters.Inc.2001.1080p.BluRay.x264-CiNEFiLE ] [80/83] - "monsters.inc.2001.1080p.bluray.x264-cinefile.vol015+16.par2" yEnc ::: //[134912]-[FULL]-[#a.b.moovee]-[ Epic.2013.DVDRip.X264-SPARKS ]-[01/70]- "epic.2013.dvdrip.x264-sparks.nfo" yEnc',
                            'ordinal' => 5,
                        ),
                        353 =>
                        array (
                            'id' => 354,
                            'group_regex' => '^alt\\.binaries\\.hdtv\\.x264$',
                        'regex' => '/^\\(\\d+(?P<match0>\\/\\d+\\) ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[,.]\\d+ [mMkKgG][bB] - yEnc$/i',
                            'status' => 1,
                        'description' => '//(23/36) "Love.Is.In.The.Meadow.S08E08.HDTV.720p.x264.ac3.part22.rar" - 2,80 GB - yEnc',
                            'ordinal' => 10,
                        ),
                        354 =>
                        array (
                            'id' => 355,
                            'group_regex' => '^alt\\.binaries\\.hdtv\\.x264$',
                        'regex' => '/^\\[ (?P<match0>.+) \\][-_ ]{0,3}\\[\\d+(?P<match1>\\/\\d+)\\][-_ ]{0,3}".+?" yEnc$/',
                            'status' => 1,
                            'description' => '//[ House.of.Lies.S03E05.1080p.WEB-DL.DD5.1.H.264-NTb ] - [01/35] - "House.of.Lies.S03E05.Soldiers.1080p.WEB-DL.DD5.1.H.264-NTb.nfo" yEnc',
                            'ordinal' => 15,
                        ),
                        355 =>
                        array (
                            'id' => 356,
                            'group_regex' => '^alt\\.binaries\\.hdtv\\.x264$',
                        'regex' => '/^(?P<match0>[A-Z0-9a-z][A-Za-z0-9.-]+ -? \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                            'status' => 1,
                            'description' => '//Hard.Target.1993.1080p.Bluray.X264-BARC0DE - [36/68] - "BARC0DE1080pHTAR.r22" yEnc ::: //Goddess.2013.720p.BDRip.x264.AC3-noOne  [086/100] - "Goddess.2013.720p.BDRip.x264.AC3-noOne.part84.rar" yEnc',
                            'ordinal' => 20,
                        ),
                        356 =>
                        array (
                            'id' => 357,
                            'group_regex' => '^alt\\.binaries\\.hdtv\\.x264$',
                        'regex' => '/(?P<match0>.+?\\s+by Waldorf\\s+-\\s+\\[)\\d+\\/\\d+\\]\\s+-\\s+".+?"\\s+yEnc$/',
                            'status' => 1,
                        'description' => '//I Love Democracy - Norwegen - Doku -  2012 - (German)  - AC3 HD720p  Avi by Waldorf -  [02/71] - "Waldorf.jpg" yEnc',
                            'ordinal' => 25,
                        ),
                        357 =>
                        array (
                            'id' => 358,
                            'group_regex' => '^alt\\.binaries\\.hdtv\\.x264$',
                        'regex' => '/^-{NR\\.C}- - \\[\\d+\\/(?P<match0>\\d+\\]) - ("|#34;)(?P<match1>.+)(\\.[vol|part].+)?\\.(par2|nfo|rar|nzb)("|#34;) yEnc$/',
                            'status' => 1,
                            'description' => '//-{NR.C}- - [00/96] - "Being.Liverpool.S01.720p.HDTV.x264-DHD.nzb" yEnc',
                            'ordinal' => 30,
                        ),
                        358 =>
                        array (
                            'id' => 359,
                            'group_regex' => '^alt\\.binaries\\.hdtv\\.x264$',
                        'regex' => '/^- \\[\\d+\\/(?P<match0>\\d+\\]) - "(?P<match1>.+?)(\\.part\\d*|\\.rar|\\.pdf)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") yEnc$/i',
                            'status' => 1,
                            'description' => '//- [34/69] - "Zero.Charisma.2013.WEB-DL.DD5.1.H.264-HaB.part33.rar" yEnc',
                            'ordinal' => 35,
                        ),
                        359 =>
                        array (
                            'id' => 360,
                            'group_regex' => '^alt\\.binaries\\.hdtv\\.x264$',
                        'regex' => '/.+www\\.hotrodpage\\.info.+\\[\\d+\\/(?P<match0>\\d+\\]) - "(?P<match1>.+?)(\\.part\\d*|\\.rar|\\.pdf)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") yEnc$/i',
                            'status' => 1,
                        'description' => '//-=www.hotrodpage.info=- Makaveli -=HoTCreWTeam=- Post: - [000/192] - "Hop (2011) 1080p AVCHD.nzb" yEnc',
                            'ordinal' => 40,
                        ),
                        360 =>
                        array (
                            'id' => 361,
                            'group_regex' => '^alt\\.binaries\\.hdtv\\.x264$',
                        'regex' => '/^.+?\\[(?P<match0>\\d+[.,]\\d+ [kKmMgG][bB])\\] \\[\\d+\\/(?P<match1>\\d+\\][-_ ]{0,3}.+?)[-_ ]{0,3}"(?P<match2>.+?)(\\.part\\d*|\\.rar|\\.pdf)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") yEnc$/i',
                            'status' => 1,
                        'description' => '//-4y (PW)   [ usenet-4all.info - powered by ssl.news -] [12,40 GB] [49/57] "43842168c542ed3.vol000+01.par2" yEnc',
                            'ordinal' => 45,
                        ),
                        361 =>
                        array (
                            'id' => 362,
                            'group_regex' => '^alt\\.binaries\\.hdtv\\.x264$',
                        'regex' => '/.*[\\(\\[]\\d+\\/(?P<match0>\\d+[\\)\\]])[-_ ]{0,3}("|#34;)(?P<match1>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4})("|#34;)(.+?)yEnc$/i',
                            'status' => 1,
                            'description' => '//!MR [01/49] - "Persuasion 2007.par2" EN MKV yEnc',
                            'ordinal' => 50,
                        ),
                        362 =>
                        array (
                            'id' => 363,
                            'group_regex' => '^alt\\.binaries\\.hdtv\\.x264$',
                        'regex' => '/^.+ ?\\[\\d+( of |\\/)(?P<match0>\\d+\\] ("|#34;).+?)(\\.part\\d*|\\.rar)?(\\.[A-Za-z0-9]{2,4})?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4})("|#34;)(.+?)yEnc$/i',
                            'status' => 1,
                            'description' => '//Wonders.of.the.Universe.S02E03.1080p.HDTV.x264.AC3.mp4 [1 of 54] "Wonders.of.the.Universe.S02E03.The.Known.and.the.Unknown.1080p.HDTV.x264.AC3-tNe.mp4.001" yEnc ::: //Wilfred Season 2 - US - 720p WEB-DL [28 of 43] "Wilfred.US.S02E01.Progress.720p.WEB-DL.DD5.1.H264-NTb.mkv.001" yEnc',
                            'ordinal' => 55,
                        ),
                        363 =>
                        array (
                            'id' => 364,
                            'group_regex' => '^alt\\.binaries\\.hdtv\\.x264$',
                        'regex' => '/^.+ ?\\d+( of |\\/)(?P<match0>\\d+ - ("|#34;).+?)(\\.part\\d*|\\.rar)?(\\.[A-Za-z0-9]{2,4})?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4})("|#34;)(.+?)yEnc$/i',
                            'status' => 1,
                            'description' => '//The.Walking.Dead.S02E13.720p.WEB-DL.AAC2.0.H.264-CtrlHD -Kopimi- - 01/37 - "The.Walking.Dead.S02E13.Beside.the.Dying.Fire.720p.WEB-DL.AAC2.0.H.264-CtrlHD.nfo" yEnc',
                            'ordinal' => 60,
                        ),
                        364 =>
                        array (
                            'id' => 365,
                            'group_regex' => '^alt\\.binaries\\.hdtv\\.x264$',
                        'regex' => '/.*"(?P<match0>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}").+?yEnc$/i',
                            'status' => 1,
                            'description' => '//The.Guild.S05E12.Grande.Finale.1080p.WEB-DL.x264.AC3.PSIV - "The.Guild.S05E12.Grande.Finale.1080p.WEB-DL.x264.AC3.PSIV.nfo" yEnc',
                            'ordinal' => 65,
                        ),
                        365 =>
                        array (
                            'id' => 366,
                            'group_regex' => '^alt\\.binaries\\.highspeed$',
                        'regex' => '/^(?P<match0>Old\\s+Dad\\s+uppt?.+?)( mp4| )?\\[?\\d+\\/\\d+\\] - ".+?" yEnc$/',
                            'status' => 1,
                        'description' => '//Old Dad uppt 18 und immer (noch) Jungfrau DvD Rip AC3 XviD German 02/34] - "18 und immer (noch) Jungfrau.part01.rar" yEnc ::: //Old Dad uppt In ihrem Haus DVD Ripp AC3 German Xvid [01/31] - "In ihrem Haus.par2" yEnc ::: //Old Dad uppt Eine offene Rechnung XviD German DVd Rip[02/41] - "Eine offene Rechnung.part01.rar" yEnc ::: //Old Dad uppMiss Marple: Der Wachsblumenstrauß , Wunschpost Xvid German10/29] - "Miss Marple Der Wachsblumenstrauß.part09.rar" yEnc',
                            'ordinal' => 5,
                        ),
                        366 =>
                        array (
                            'id' => 367,
                            'group_regex' => '^alt\\.binaries\\.highspeed$',
                        'regex' => '/^\\[\\d+(?P<match0>\\/\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[,.]\\d+ [mMkKgG][bB] - yEnc$/i',
                            'status' => 1,
                            'description' => '//[03/61] - "www.realmom.info - xvid - xf-fatalmovecd1.r00" - 773,34 MB - yEnc',
                            'ordinal' => 10,
                        ),
                        367 =>
                        array (
                            'id' => 368,
                            'group_regex' => '^alt\\.binaries\\.highspeed$',
                        'regex' => '/^www\\..+? \\[Sponsored.+?\\] \\(\\d+(?P<match0>\\/\\d+\\) ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//www.usenet-town.com [Sponsored by Astinews] (103/103) "Intimate.Enemies.German.2007.AC3.[passwort protect].vol60+21.PAR2" yEnc',
                            'ordinal' => 15,
                        ),
                        368 =>
                        array (
                            'id' => 369,
                            'group_regex' => '^alt\\.binaries\\.highspeed$',
                        'regex' => '/^\\(\\?{4}\\) \\[\\d+\\/\\d+\\] - "(?P<match0>.+?)(\\.part\\d*|\\.rar|\\.pdf)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") yEnc$/i',
                            'status' => 1,
                        'description' => '//(????) [3/4] - "0024456.pdf.par2" yEnc',
                            'ordinal' => 20,
                        ),
                        369 =>
                        array (
                            'id' => 370,
                            'group_regex' => '^alt\\.binaries\\.inner-sanctum$',
                        'regex' => '/\\[ (?P<match0>.+) \\][-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]])[-_ ]{0,3}"(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                            'status' => 1,
                        'description' => '//[ 9970e7535ccc06155129f5971ff575e2 ] [23/30] - "19-sub6_-_blox_loggers_(mr.what_remix)-psycz_int.mp3" yEnc',
                            'ordinal' => 25,
                        ),
                        370 =>
                        array (
                            'id' => 371,
                            'group_regex' => '^alt\\.binaries\\.inner-sanctum$',
                        'regex' => '/(?P<match0>.+)[-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]])[-_ ]{0,3}"(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                            'status' => 1,
                        'description' => '////ea17079f47de702eead5114038355a70 [1/9] - "00-da_morty_-_boondock_sampler_02-(tbr002)-web-2013-srg.m3u" yEnc',
                            'ordinal' => 30,
                        ),
                        371 =>
                        array (
                            'id' => 372,
                            'group_regex' => '^alt\\.binaries\\.inner-sanctum$',
                        'regex' => '/^\\[ (?P<match0>[a-fA-F0-9]+) \\] \\[\\d+\\/\\d+\\] - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//[ 9970e7535ccc06155129f5971ff575e2 ] [23/30] - "19-sub6_-_blox_loggers_(mr.what_remix)-psycz_int.mp3" yEnc',
                            'ordinal' => 35,
                        ),
                        372 =>
                        array (
                            'id' => 373,
                            'group_regex' => '^alt\\.binaries\\.inner-sanctum$',
                        'regex' => '/^(?P<match0>\\[\\d+\\]-\\[.+?\\]-\\[ .+? \\] \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                            'status' => 1,
                            'description' => '//[30762]-[android]-[ Fairway.Solitaire.v1.91.1-AnDrOiD ] [01/10] - "AnDrOiD.nfo" yEnc',
                            'ordinal' => 40,
                        ),
                        373 =>
                        array (
                            'id' => 374,
                            'group_regex' => '^alt\\.binaries\\.inner-sanctum$',
                        'regex' => '/^\\[ nEwZ\\[NZB\\]\\.iNFO( \\])?[-_ ]{0,3}\\[ (?P<match0>.+?) \\][-_ ]{0,3}(File )?[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]]): "(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?(yEnc)?$/',
                            'status' => 1,
                            'description' => '//[ nEwZ[NZB].iNFO - [ Zed--The_Invitation-WEB-2010-WUS ] - File [12/13]: "08-zed--the_river.mp3" yEnc',
                            'ordinal' => 45,
                        ),
                        374 =>
                        array (
                            'id' => 375,
                            'group_regex' => '^alt\\.binaries\\.inner-sanctum$',
                        'regex' => '/^nEwZ\\[NZB\\]\\.iNFO[-_ ]{0,3} (?P<match0>.+?) [-_ ]{0,3}(File )?[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]]): "(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}")$/',
                            'status' => 1,
                        'description' => '//nEwZ[NZB].iNFO - VA-Universal_Music_Sampler_07_February-PROMO-CDR-FLAC-2013-WRE - File [6/9]: "01-alesso-years_(hard_rock_sofa_remix).flac"',
                            'ordinal' => 50,
                        ),
                        375 =>
                        array (
                            'id' => 376,
                            'group_regex' => '^alt\\.binaries\\.inner-sanctum$',
                        'regex' => '/.+[DoAsYouLike\\].?[ _-]{0,3}\\d+[,.]\\d+ [mMkKgG][bB][-_ ]{0,3}"(?P<match0>.+?)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}")[ _-]{0,3}\\d+([,.]\\d+ [mMkKgG])? [bB][-_ ]{0,3}yEnc$/',
                            'status' => 1,
                            'description' => '//..:[DoAsYouLike]:..   1,11 GB   "KGMmDSSHBWnxV4g7Vbq5.part01.rar"   47,68 MB yEnc',
                            'ordinal' => 55,
                        ),
                        376 =>
                        array (
                            'id' => 378,
                            'group_regex' => '^alt\\.binaries\\.inner-sanctum$',
                        'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\))( - Description -)? "(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")( - \\d+[,.]\\d+ [mMkKgG][bB])? - \\d+[,.]\\d+ [mMkKgG][bB] - yEnc$/i',
                            'status' => 1,
                        'description' => '//(01/10) "LeeDrOiD HD V3.3.2-Port-R4-A2SD.par2" - 357.92 MB - yEnc',
                            'ordinal' => 65,
                        ),
                        377 =>
                        array (
                            'id' => 379,
                            'group_regex' => '^alt\\.binaries\\.inner-sanctum$',
                        'regex' => '/^\\((?P<match0>[a-zA-Z0-9._-]+)\\) \\[\\d+\\/(?P<match1>\\d+\\]) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") yEnc$/i',
                            'status' => 1,
                        'description' => '//(VA-I_Love_Yaiza_Vol.1-WEB-2012-ServerLab) [01/11] - ".sfv" yEnc',
                            'ordinal' => 70,
                        ),
                        378 =>
                        array (
                            'id' => 380,
                            'group_regex' => '^alt\\.binaries\\.inner-sanctum$',
                        'regex' => '/^[\\[\\(]\\d+( of |\\/)(?P<match0>\\d+[\\]\\)])[-_ ]{0,3}"(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//(17/41) - "3-8139g0m530.017" yEnc',
                            'ordinal' => 75,
                        ),
                        379 =>
                        array (
                            'id' => 381,
                            'group_regex' => '^alt\\.binaries\\.inner-sanctum$',
                        'regex' => '/^\\[\\d+\\]-\\[.+?\\]-\\[(?P<match0>.+?)\\][-_ ]{0,3}\\[\\d+\\/(?P<match1>\\d+\\]) - .+? yEnc$/',
                            'status' => 1,
                            'description' => '//[153618]-[#a.b.inner-sanctum@EFNET]-[MetaProducts.DiskWatchman.v2.0.240.Incl.Keygen.And.Patch.REPACK-Lz0]-[0/6] - MetaProducts.DiskWatchman.v2.0.240.Incl.Keygen.And.Patch.REPACK-Lz0.nzb yEnc',
                            'ordinal' => 80,
                        ),
                        380 =>
                        array (
                            'id' => 382,
                            'group_regex' => '^alt\\.binaries\\.milo$',
                        'regex' => '/^(?P<match0>[a-zA-Z0-9]{5,} ?\\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                            'status' => 1,
                            'description' => '//RWlgVffClWxD0vXT1peIwb9DubTLMiYm3nvD1aMMDe[04/16] - "A9jFik7Fk4hCG4GWuxAg.r02" yEnc ::: //H8XxBd44qXBGk [05/15] - "H8XxBd44qXBGk.part5.rar" yEnc',
                            'ordinal' => 5,
                        ),
                        381 =>
                        array (
                            'id' => 383,
                            'group_regex' => '^alt\\.binaries\\.mojo$',
                        'regex' => '/^\\[\\d+(?P<match0>\\/\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[,.]\\d+ [mMkKgG][bB] - yEnc$/i',
                            'status' => 1,
                            'description' => '//[17/61] - "www.realmom.info - xvid - xf-devilstomb.r14" - 773,11 MB - yEnc',
                            'ordinal' => 5,
                        ),
                        382 =>
                        array (
                            'id' => 384,
                            'group_regex' => '^alt\\.binaries\\.mojo$',
                        'regex' => '/^(?P<match0>[a-zA-Z0-9]{5,} ?\\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                            'status' => 1,
                            'description' => '//RWlgVffClWxD0vXT1peIwb9DubTLMiYm3nvD1aMMDe[04/16] - "A9jFik7Fk4hCG4GWuxAg.r02" yEnc ::: //3JgtmNAbZbJ6Q [14/21] - "parfile.par2" yEnc',
                            'ordinal' => 10,
                        ),
                        383 =>
                        array (
                            'id' => 385,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/^(?P<match0>\\[usenet4ever\\.info\\] und \\[SecretUsenet\\.com\\] - .+?-u4e - ").+?" yEnc$/',
                            'status' => 1,
                            'description' => '//[usenet4ever.info] und [SecretUsenet.com] - 96e323468c5a8a7b948c06ec84511839-u4e - "96e323468c5a8a7b948c06ec84511839-u4e.par2" yEnc',
                            'ordinal' => 5,
                        ),
                        384 =>
                        array (
                            'id' => 386,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/(?P<match0>.+?\\.net <<<Partner von SSL-News\\.info>>> - \\[)\\d+(?P<match1>\\/\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//brothers-of-usenet.info/.net <<<Partner von SSL-News.info>>> - [01/26] - "Be.Cool.German.AC3.HDRip.x264-FuN.par2" yEnc',
                            'ordinal' => 10,
                        ),
                        385 =>
                        array (
                            'id' => 387,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/^(?P<match0>\\d+-\\d)\\[\\d+\\/(?P<match1>\\d+\\])[-_\\s]{0,3}"\\d+-\\d.+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//62544-8[30/78] - "62544-0.35" yEnc',
                            'ordinal' => 15,
                        ),
                        386 =>
                        array (
                            'id' => 388,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/^\\[Art-of-Usenet\\] ([a-fA-F0-9]+) \\[\\d+\\/(?P<match0>\\d+\\][-_ ]{0,3}".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//[Art-of-Usenet] dea75eb65e65c56197d749d57919806d [01/19] - "dea75eb65e65c56197d749d57919806d.par2" yEnc',
                            'ordinal' => 20,
                        ),
                        387 =>
                        array (
                            'id' => 389,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/^(?P<match0><ghost-of-usenet\\.org>.+? \\[)\\d+\\/\\d+\\] - ".+?" .+? yEnc$/',
                            'status' => 1,
                            'description' => '//<ghost-of-usenet.org>XCOM.Enemy.Unknown.Deutsch.Patch.TokZic [0/9] - "XCOM Deutsch.nzb" ein CrazyUpp yEnc',
                            'ordinal' => 25,
                        ),
                        388 =>
                        array (
                            'id' => 390,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/^brothers-of-usenet.info\\/\\.net <<<Partner von SSL-News.info>>> - \\[\\d+\\/\\d+\\] - "(?P<match0>.+?)(\\.vol|\\.par).+?" yEnc$/',
                            'status' => 1,
                            'description' => '//brothers-of-usenet.info/.net <<<Partner von SSL-News.info>>> - [21/22] - "e4e4ztb54238ibftu.vol127+128.par2" yEnc',
                            'ordinal' => 30,
                        ),
                        389 =>
                        array (
                            'id' => 391,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/^(?P<match0>\\d+)\\-\\d+\\s?\\[\\d+\\/\\d+\\] - ".+?" yEnc$/',
                            'status' => 1,
                            'description' => '//58600-0[51/51] - "58600-0.vol0+1.par2" yEnc',
                            'ordinal' => 35,
                        ),
                        390 =>
                        array (
                            'id' => 392,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/^\\[ TOWN \\][ _-]{0,3}\\[ www\\.town\\.ag \\][ _-]{0,3}\\[ partner of www\\.ssl-news\\.info \\][ _-]{0,3}\\[\\d+\\/(?P<match0>\\d+\\][ _-]{0,3}".+)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ _-]{0,3}\\d+[.,]\\d+ [kKmMgG][bB][ _-]{0,3}yEnc$/i',
                            'status' => 1,
                            'description' => '//[ TOWN ]-[ www.town.ag ]-[ partner of www.ssl-news.info ]-[ MOVIE ] [14/19] - "Night.Vision.2011.DVDRip.x264-IGUANA.part12.rar" - 660,80 MB yEnc',
                            'ordinal' => 40,
                        ),
                        391 =>
                        array (
                            'id' => 393,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/^\\[(?P<match0>.+?)\\][ _-]{0,3}\\[www\\.usenet4ever\\.info by Secretusenet][ _-]{0,3} ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//[A_New_Found_Glory-Its_All_About_The_Girls-Reissue-CDEP-FLAC-2003-JLM] [www.usenet4ever.info by Secretusenet] -  "00-a_new_found_glory-its_all_about_the_girls-reissue-cdep-flac-2003.jpg" yEnc',
                            'ordinal' => 45,
                        ),
                        392 =>
                        array (
                            'id' => 394,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/^(Mom\\d+[ _-]{0,3})?"(?P<match0>.+?)__www\\.realmom\\.info__([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ _-]{0,3}[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]]) \\d+[.,]\\d+ [kKmMgG][bB] yEnc$/i',
                            'status' => 1,
                        'description' => '//MoM100060 - "Florian_Arndt-Trix-(BBM36)-WEB-2012-UKHx__www.realmom.info__.nfo" [2/7] 29,04 MB yEnc ::: //"Alan.Wake.v1.02.16.4261.Update-SKIDROW__www.realmom.info__.nfo" (02/17) 138,07 MB yEnc',
                            'ordinal' => 50,
                        ),
                        393 =>
                        array (
                            'id' => 395,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/^"(?P<match0>.+?)"\\(\\d+\\/(?P<match1>\\d+\\))[ _-]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ _-]{0,3}\\d+[.,]\\d+ [kKmMgG][bB] yEnc$/i',
                            'status' => 1,
                        'description' => '//"The.Draughtsmans.Contract.1982.576p.BluRay.DD2.0.x264-EA"(15/56) "The.Draughtsmans.Contract.1982.576p.BluRay.DD2.0.x264-EA.part13.rar" - 2.37 GB yEnc',
                            'ordinal' => 55,
                        ),
                        394 =>
                        array (
                            'id' => 396,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\))[ _-]{0,3}Description[ _-]{0,3}"(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ _-]{0,3}\\d+[.,]\\d+ [kKmMgG][bB][ _-]{0,3}yEnc$/i',
                            'status' => 1,
                        'description' => '//(01/29) - Description - "Revolution.2012.S01E06.HDTV.x264-LOL.nfo" - 317.24 MB - yEnc',
                            'ordinal' => 60,
                        ),
                        395 =>
                        array (
                            'id' => 397,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\))[ _-]{0,3}\\[Lords-of-Usenet\\][ _-]{0,3}<<Partner of SSL-News\\.info>>[ _-]{0,3}(?P<match1>.+?)[ _-]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ _-]{0,3}\\d+[.,]\\d+ [kKmMgG][bB][ _-]{0,3}yEnc$/i',
                            'status' => 1,
                        'description' => '//(02/17) - [Lords-of-Usenet] <<Partner of SSL-News.info>> i8dewFjzft94BW71EI0s -"19913.r00" - 928,75 MB - yEnc',
                            'ordinal' => 65,
                        ),
                        396 =>
                        array (
                            'id' => 398,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\][ _-]{0,3}".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//[002/161] - "Rayman_Legends_USA_PS3-CLANDESTiNE.nfo" yEnc',
                            'ordinal' => 70,
                        ),
                        397 =>
                        array (
                            'id' => 399,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/^\\((?P<match0>\\w+?)\\d{3}\\.[A-Za-z0-9]{3,4}\\)[-_\\s]{0,3}\\[\\d+\\/(?P<match1>\\d+\\])[-_\\s]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//(4n4o8xq59kxq40bk8ukf3o4d163.163) [162/282] - "4n4o8xq59kxq40bk8ukf3o4d163.163" yEnc',
                            'ordinal' => 75,
                        ),
                        398 =>
                        array (
                            'id' => 400,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/^<-{Retrouvez-nous sur NextDownload}-> > >"(?P<match0>\\w+)"\\[\\d+\\/(?P<match1>\\d+\\])[ _-]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//<-{Retrouvez-nous sur NextDownload}-> > >"Next1023"[15/24] - "Next1023.9.vol001+001.par2" yEnc',
                            'ordinal' => 80,
                        ),
                        399 =>
                        array (
                            'id' => 401,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\][ _-]{0,3}".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}\\d+[.,]\\d+ [kKmMgG][bB].+UpperTeam.+ Secretusenet\\.com.+yEnc$/i',
                            'status' => 1,
                            'description' => '//[28/55] - "XzrgzBWoRqtcuBF.part27.rar" - 4,78 GB >>>UpperTeam for Usenet-Space-Cowboys.info and Secretusenet.com<<< yEnc',
                            'ordinal' => 85,
                        ),
                        400 =>
                        array (
                            'id' => 402,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/^\\(\\d+(?P<match0>\\/\\d+\\))[-_\\s]{0,3}[|][-_\\s]{0,3}"(?P<match1>[\\w\\säöüÄÖÜ¤ß¶!.,&_\\()\\[\\]\\\'\\`-]{8,}?\\b.?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}[|] yEnc$/iu',
                            'status' => 1,
                        'description' => '//(38/55)  | "Apocalypse.La.premiere.guerre.mondiale.e02.Peur.HDTV.1080p-STL.7z.037" | yEnc',
                            'ordinal' => 90,
                        ),
                        401 =>
                        array (
                            'id' => 403,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/NextDownload.+"\\w+"\\[\\d+\\/(?P<match0>\\d+)\\][-_\\s]{0,3}"(?P<match1>[\\w\\säöüÄÖÜ¤ß¶!.,&_\\()\\[\\]\\\'\\`-]{8,}?\\b.?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//<-{NextDownload}->"Next2163"[21/22] - "Next2163.6.vol127+128.par2" yEnc',
                            'ordinal' => 95,
                        ),
                        402 =>
                        array (
                            'id' => 404,
                            'group_regex' => '^alt\\.binaries\\.mom$',
                        'regex' => '/^(?P<match0>SecretUsenet\\.com.+)[-_\\s]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//SecretUsenet.com _98iu89iujh_4312 225bea29_87db55d2_b9f1844e_7842adb-u4e - "225bea29_87db55d2_b9f1844e_7842adb-u4e.par2" yEnc',
                            'ordinal' => 100,
                        ),
                        403 =>
                        array (
                            'id' => 405,
                            'group_regex' => '^alt\\.binaries\\.moovee$',
                        'regex' => '/(?P<match0>\\[\\d+\\]-\\[.+?\\]-\\[.+?\\]-\\[ .+? \\](-| ))\\[\\d+\\/\\d+\\][ -]* ".+?" yEnc$/',
                            'status' => 1,
                            'description' => '//[133170]-[FULL]-[#a.b.moovee]-[ Hansel.And.Gretel.Witch.Hunters.DVDR-iGNiTiON ]-[032/117] "ign-witchhunters.r24" yEnc ::: //Re: [133388]-[FULL]-[#a.b.moovee]-[ Familiar.Grounds.2011.DVDRip.XViD-TWiST ]-[01/59] - "twist-xvid-terrainsconus.nfo" yEnc ::: //[134212]-[FULL]-[#a.b.moovee]-[ Monsters.Inc.2001.1080p.BluRay.x264-CiNEFiLE ] [80/83] - "monsters.inc.2001.1080p.bluray.x264-cinefile.vol015+16.par2" yEnc ::: //[134912]-[FULL]-[#a.b.moovee]-[ Epic.2013.DVDRip.X264-SPARKS ]-[01/70]- "epic.2013.dvdrip.x264-sparks.nfo" yEnc',
                            'ordinal' => 5,
                        ),
                        404 =>
                        array (
                            'id' => 406,
                            'group_regex' => '^alt\\.binaries\\.moovee$',
                        'regex' => '/^(?P<match0>\\[\\d+\\]-\\[.+?\\]-\\[.+?\\]- ").+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//[42788]-[#altbin@EFNet]-[Full]- "margin-themasterb-xvid.par2" yEnc',
                            'ordinal' => 10,
                        ),
                        405 =>
                        array (
                            'id' => 407,
                            'group_regex' => '^alt\\.binaries\\.moovee$',
                        'regex' => '/^(?P<match0>\\[ [a-zA-Z0-9.-]+ \\] ?- ?\\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                            'status' => 1,
                            'description' => '//[ Hammer.of.the.Gods.2013.720p.WEB-DL.DD5.1.H.264-ELiTE ]-[01/44] - "Hammer.of.the.Gods.2013.720p.WEB-DL.DD5.1.H.264-ELiTE.par2" yEnc ::: //[ Admission.2013.720p.WEB-DL.DD5.1.H.264-HD4FUN ] - [01/82] - "Admission.2013.720p.WEB-DL.DD5.1.H.264-HD4FUN.nfo" yEnc',
                            'ordinal' => 15,
                        ),
                        406 =>
                        array (
                            'id' => 408,
                            'group_regex' => '^alt\\.binaries\\.moovee$',
                        'regex' => '/^\\(\\?{4}\\) \\[\\d+(?P<match0>\\/\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//(????) [0/1] - "A.Good.Day.to.Die.Hard.2013.nzb" yEnc',
                            'ordinal' => 20,
                        ),
                        407 =>
                        array (
                            'id' => 409,
                            'group_regex' => '^alt\\.binaries\\.moovee$',
                        'regex' => '/^\\[x+\\]-\\[.+?\\]-\\[ x+ \\]-\\[\\d+(?P<match0>\\/\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//[xxxxx]-[#a.b.moovee@EFNet]-[ xxxxx ]-[02/66] - "tulob88.part01.rar" yEnc',
                            'ordinal' => 25,
                        ),
                        408 =>
                        array (
                            'id' => 410,
                            'group_regex' => '^alt\\.binaries\\.moovee$',
                        'regex' => '/^(?P<match0>[a-zA-Z0-9._-]+ - ?\\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                            'status' => 1,
                            'description' => '//Groove.2000.iNTERNAL.DVDRip.XviD-UBiK - [001/111] - "ubik-groove-cd1.par2" yEnc ::: //Antony.and.Cleopatra.1972.720p.WEB-DL.H264-brento -[35/57] - "Antony.and.Cleopatra.1972.720p.WEB-DL.AAC2.0.H.264-brento.part34.rar" yEnc',
                            'ordinal' => 30,
                        ),
                        409 =>
                        array (
                            'id' => 411,
                            'group_regex' => '^alt\\.binaries\\.moovee$',
                        'regex' => '/^(?P<match0>\\[\\d+\\] - [a-z0-9]+.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2|\\.[A-Za-z0-9]{2,4}) - \\[\\d+\\/\\d+\\]\\s+yEnc$/',
                            'status' => 1,
                            'description' => '//[133668] - p00okjiue34635xxzx$$Â£Â£zll-b.vol3+2.PAR2 - [005/118]  yEnc',
                            'ordinal' => 35,
                        ),
                        410 =>
                        array (
                            'id' => 412,
                            'group_regex' => '^alt\\.binaries\\.moovee$',
                        'regex' => '/^(?P<match0>(\\[\\d+\\])?-(\\[REPOST\\])?\\[)\\d+(?P<match1>\\/\\d+\\] - "\\d+-)\\d\\..+?" yEnc$/',
                            'status' => 1,
                            'description' => '//-[004/115] - "134218-0.par2" yEnc ::: //[134824]-[001/117] - "134824-0.0" yEnc ::: //[134510]-[REPOST]-[001/110] - "134510-rp-0.0" yEnc',
                            'ordinal' => 40,
                        ),
                        411 =>
                        array (
                            'id' => 413,
                            'group_regex' => '^alt\\.binaries\\.moovee$',
                        'regex' => '/^\\[\\d+\\]-\\[\\d+(?P<match0>\\/\\d+\\] - ".+?)([-_](proof|sample|subs|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//[134517]-[01/76] - "Lara Croft Tomb Raider 2001 720p BluRay DTS x264-RightSiZE.nfo" yEnc',
                            'ordinal' => 45,
                        ),
                        412 =>
                        array (
                            'id' => 414,
                            'group_regex' => '^alt\\.binaries\\.moovee$',
                        'regex' => '/^(?P<match0>\\([a-zA-Z0-9.-]+\\) \\()\\d+\\/\\d+\\) - ".+?" yEnc$/',
                            'status' => 1,
                        'description' => '//(Iron.Man.3.2013.R5.DVDRip.XviD-AsA) (01/26) - "Iron.Man.3.2013.R5.DVDRip.XviD-AsA.part01.part.sfv" yEnc',
                            'ordinal' => 50,
                        ),
                        413 =>
                        array (
                            'id' => 415,
                            'group_regex' => '^alt\\.binaries\\.moovee$',
                        'regex' => '/^(?P<match0>\\([a-zA-Z0-9].+?\\) [a-zA-Z0-9.-]+ \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                            'status' => 1,
                        'description' => '//(Classic Surf) Morning.Of.The.Earth.1971 [03/29] - "Morning.Of.The.Earth.1971.part02.rar" yEnc',
                            'ordinal' => 55,
                        ),
                        414 =>
                        array (
                            'id' => 416,
                            'group_regex' => '^alt\\.binaries\\.moovee$',
                        'regex' => '/^(?P<match0>\\[\\d+\\]-\\[.+?\\]-\\[)\\d+\\/\\d+\\] - "\\d+-.+?" yEnc$/',
                            'status' => 1,
                            'description' => '// No example????? Probably : [32432]-[Something]-[4/24] - "02312-1.nzb" yEnc',
                            'ordinal' => 60,
                        ),
                        415 =>
                        array (
                            'id' => 417,
                            'group_regex' => '^alt\\.binaries\\.moovee$',
                        'regex' => '/^\\((?P<match0>[\\w.-]+)\\)\\[\\d+\\/(?P<match1>\\d+\\])[-_\\s]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//(Ringside.The.Best.of.Mike.Tyson.DVDRip.x264.AC3-FCZ)[01/68] - "Ringside.The.Best.of.Mike.Tyson.DVDRip.1.of.2.x264.AC3-FCZ.nfo" yEnc',
                            'ordinal' => 65,
                        ),
                        416 =>
                        array (
                            'id' => 418,
                            'group_regex' => '^alt\\.binaries\\.movies$',
                        'regex' => '/^(?P<match0>[a-z].+) - \\[\\d+\\/(?P<match1>\\d+\\])[ _-]{0,3}("|#34;).+("|#34;) yEnc$/i',
                            'status' => 1,
                            'description' => '//Underworld.Evolution.2006.480p.BDRip.XviD.AC3-AsA - [000/143] - "asa.nzb" yEnc',
                            'ordinal' => 5,
                        ),
                        417 =>
                        array (
                            'id' => 419,
                            'group_regex' => '^alt\\.binaries\\.movies$',
                        'regex' => '/^Have Fun - ("|#34;)(?P<match0>.+)\\.nfo("|#34;) Ph4let0ast3r yEnc$/i',
                            'status' => 1,
                        'description' => '///^Have Fun - ("|#34;)(.+).nfo("|#34;) Ph4let0ast3r yEnc$/i',
                            'ordinal' => 10,
                        ),
                        418 =>
                        array (
                            'id' => 420,
                            'group_regex' => '^alt\\.binaries\\.movies$',
                        'regex' => '/^\\(\\d+\\/\\d+\\) (?P<match0>"|#34;)(.+)\\.(?P<match1>par2|nfo|rar|nzb)("|#34;) - \\d+[.,]\\d+ [kKmMgG][bB] - yEnc$/i',
                            'status' => 1,
                        'description' => '//(01/34) "Sniper.Reloaded.2011.BluRay.810p.DTS.x264-PRoDJi.Turkish.Audio.par2" - 139,30 MB - yEnc',
                            'ordinal' => 15,
                        ),
                        419 =>
                        array (
                            'id' => 421,
                            'group_regex' => '^alt\\.binaries\\.movies$',
                        'regex' => '/^("|#34;)(?P<match0>.+)\\.rar("|#34;)$/i',
                            'status' => 1,
                            'description' => '//"Discovery.Channel.Tsunami.Facing.The.Wave.720p.HDTV.x264-PiX.rar"',
                            'ordinal' => 20,
                        ),
                        420 =>
                        array (
                            'id' => 422,
                            'group_regex' => '^alt\\.binaries\\.movies$',
                        'regex' => '/^(?P<match0>[a-z].+) .+\\.(par2|nfo|rar|nzb)$/i',
                            'status' => 1,
                            'description' => '//Saw.VII.2010.720p.Bluray.x264.DTS-HDChina Saw.VII.2010.720p.Bluray.x264.DTS-HDChina.nzb',
                            'ordinal' => 25,
                        ),
                        421 =>
                        array (
                            'id' => 423,
                            'group_regex' => '^alt\\.binaries\\.movies$',
                        'regex' => '/^\\(\\?+\\) \\[\\d+\\/(?P<match0>\\d+\\])[-_ ]{0,3}"(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//(????) [1/1] - "The Secret L',
                            'ordinal' => 30,
                        ),
                        422 =>
                        array (
                            'id' => 424,
                            'group_regex' => '^alt\\.binaries\\.movies$',
                        'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\))[-_ ]{0,3}Description[-_ ]{0,3}"(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}\\d+([.,]\\d+)? [kKmMgG][bB][-_\\s]{0,3}[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//(001/114) - Description - "The.Chronicles.of.Riddick.2004.DC.BluRay.1080p.DTS.par2" - 10,50 GB - yEnc',
                            'ordinal' => 35,
                        ),
                        423 =>
                        array (
                            'id' => 425,
                            'group_regex' => '^alt\\.binaries\\.movies$',
                        'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\])[-_ ]{0,3}"(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//[00/56] - "The.Last.Days.On.Mars.720p.BluRay.x264-DR.nzb" yEnc',
                            'ordinal' => 40,
                        ),
                        424 =>
                        array (
                            'id' => 426,
                            'group_regex' => '^alt\\.binaries\\.movies$',
                        'regex' => '/^\\[REUP\\]( )?(?P<match0>.+?) - \\[\\d+\\/(?P<match1>\\d+\\]) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//[REUP] 6.Degress.of.Hell.2012.1080p.BluRay.DTS-HD.x264-BARC0DE - [03/50] - "BARC0DE.vol00+1.PAR2" yEnc ::: //[REUP]Home.Of.The.Brave.2006.1080p.BluRay.DTS-HD.x264-BARC0DE - [03/38] - "BARC0DE.vol00+1.PAR2" yEnc',
                            'ordinal' => 45,
                        ),
                        425 =>
                        array (
                            'id' => 427,
                            'group_regex' => '^alt\\.binaries\\.movies$',
                        'regex' => '/^.+\\[\\d+\\/(?P<match0>\\d+\\]) - "(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//22.Jump.Street.2014.720p.BluRay.x264-tpU.vol000+01.PAR2 [73/84] - "22.Jump.Street.2014.720p.BluRay.x264-tpU.vol000+01.PAR2" yEnc',
                            'ordinal' => 50,
                        ),
                        426 =>
                        array (
                            'id' => 428,
                            'group_regex' => '^alt\\.binaries\\.movies$',
                        'regex' => '/^- Description - "(?P<match0>[\\w. -]{8,}?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")(?P<match1>[-_\\s]{0,3}\\d+[.,]\\d+ [kKmMgG][bB])[- ]{0,4}yEnc$/i',
                            'status' => 1,
                            'description' => '//- Description - "The.Legend.of.Hercules.2014.720p.BluRay.x264.Y',
                            'ordinal' => 55,
                        ),
                        427 =>
                        array (
                            'id' => 429,
                            'group_regex' => '^alt\\.binaries\\.movies\\.divx$',
                        'regex' => '/^(?P<match0>\\(www\\.Thunder-News\\.org\\) .+? - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//(www.Thunder-News.org) >CD2< <Sponsored by Secretusenet> - "exvid-emma-cd2.par2" yEnc',
                            'ordinal' => 5,
                        ),
                        428 =>
                        array (
                            'id' => 430,
                            'group_regex' => '^alt\\.binaries\\.movies\\.divx$',
                        'regex' => '/^(?P<match0>[a-zA-Z ]+Post Voor FTN - \\[\\d+\\/\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//Movieland Post Voor FTN - [01/43] - "movieland0560.par2" yEnc',
                            'ordinal' => 10,
                        ),
                        429 =>
                        array (
                            'id' => 431,
                            'group_regex' => '^alt\\.binaries\\.movies\\.divx$',
                        'regex' => '/(?P<match0>.+?by mayhem masta".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//Disney short films collection by mayhem masta"1923 - Alice\'s Wonderland.vol15+7.par2" yEnc',
                            'ordinal' => 15,
                        ),
                        430 =>
                        array (
                            'id' => 432,
                            'group_regex' => '^alt\\.binaries\\.movies\\.x264$',
                        'regex' => '/^http:\\/\\/nzbroyalty\\.com - (?P<match0>.+?) - \\[\\d+\\/(?P<match1>\\d+\\]) - ".+?" yEnc$/',
                            'status' => 1,
                            'description' => '//http://nzbroyalty.com - House.of.The.Rising.sun.2011.BluRay.720p.DTS.x264-CHD - [00/48] - "House.of.The.Rising.sun.2011.BluRay.720p.DTS.x264-CHD.nzb" yEnc',
                            'ordinal' => 5,
                        ),
                        431 =>
                        array (
                            'id' => 433,
                            'group_regex' => '^alt\\.binaries\\.movies\\.x264$',
                        'regex' => '/^(?P<match0>[a-zA-Z0-9._-]+ - ?\\[)\\d+\\/(?P<match1>\\d+\\]) - "(.+?)\\.(nzb|rar|par2)" yEnc$/',
                            'status' => 1,
                            'description' => '//Scream.4.2011.WS.720p.BluRay.X264-AMIABLE - [000/106] - "Scream.4.2011.WS.720p.BluRay.X264-AMIABLE.nzb" yEnc',
                            'ordinal' => 10,
                        ),
                        432 =>
                        array (
                            'id' => 434,
                            'group_regex' => '^alt\\.binaries\\.movies\\.x264$',
                        'regex' => '/^(?P<match0>[a-zA-Z0-9].+?)(?P<match1> - )\\[\\d+(?P<match2>\\/\\d+\\] - ").+?" yEnc$/',
                            'status' => 1,
                            'description' => '//The Beaver 2011 720p BluRay DD5.1 x264-CtrlHD - [00/65] - "The Beaver 2011 720p BluRay DD5.1 x264-CtrlHD.nzb" yEnc',
                            'ordinal' => 15,
                        ),
                        433 =>
                        array (
                            'id' => 435,
                            'group_regex' => '^alt\\.binaries\\.movies\\.x264$',
                        'regex' => '/("|#34;)(?P<match0>.+)("|#34;)[-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]])[-_ ]{0,3}("|#34;).+?(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4})("|#34;)[-_ ]{0,3}\\d+[.,]\\d+ [kKmMgG][bB][-_ ]{0,3}yEnc$/i',
                            'status' => 1,
                        'description' => '//"The.Hudsucker.Proxy.1994.1080p.Blu-ray.Remux.AVC.DTS.HD.MA.2.0-KRaLiMaRKo"(127/132) "The.Hudsucker.Proxy.1994.1080p.Blu-ray.Remux.AVC.DTS.HD.MA.2.0-KRaLiMaRKo.vol379+20.par2" - 24.61 GB - yEnc',
                            'ordinal' => 20,
                        ),
                        434 =>
                        array (
                            'id' => 436,
                            'group_regex' => '^alt\\.binaries\\.movies\\.x264$',
                        'regex' => '/^(?P<match0>[\\w.-]+)[-_\\s]{0,3}\\[\\d+\\/(?P<match1>\\d+\\])[-_\\s]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//Fly.With.The.Gold.2012.720p.BluRay.x264-WiKi [03/73] - "wiki-fwtg.par2" yEnc',
                            'ordinal' => 25,
                        ),
                        435 =>
                        array (
                            'id' => 437,
                            'group_regex' => '^alt\\.binaries\\.mp3$',
                        'regex' => '/"(?P<match0>.+)"[-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]])[-_ ]{0,3}".+(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                            'status' => 1,
                            'description' => '//"The Absence - Riders Of The Plague" [00/14] - "the_absence-riders_of_the_plague.nzb" yEnc',
                            'ordinal' => 5,
                        ),
                        436 =>
                        array (
                            'id' => 438,
                            'group_regex' => '^alt\\.binaries\\.mp3$',
                        'regex' => '/(?P<match0>.+)[-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]])[-_ ]{0,3}".+(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                            'status' => 1,
                        'description' => '//( Albert Cummings Albums 6x By Dready Niek (1999-2012) )  ( ** By Dready Niek ** ) [11/20] - "Albert Cummings Albums 6x By Dready Niek (1999-2012).part10.rar" yEnc ::: //( Fat Freddy\'s Drop - Blackbird (2013) -- By Dready Niek ) -- By Dready Niek ) [01/15] - "Fat Freddy\'s Drop - Blackbird (2013) -- By Dready Niek.par2" yEnc',
                            'ordinal' => 10,
                        ),
                        437 =>
                        array (
                            'id' => 439,
                            'group_regex' => '^alt\\.binaries\\.mp3$',
                        'regex' => '/^(?P<match0>.+?)[-_ ]{0,3}("|#34;)(.+?)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}("|#34;))[-_ ]{0,3}yEnc$/',
                            'status' => 1,
                            'description' => '//Metallica - Ride The Lightning    "01 - Fight Fire With Fire.mp3" yEnc',
                            'ordinal' => 15,
                        ),
                        438 =>
                        array (
                            'id' => 440,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.complete_cd$',
                        'regex' => '/^(?P<match0>\\[\\d+\\]-\\[.+?\\]-\\[.+?\\]-\\[)\\d+\\/\\d+\\] ".+?" yEnc$/',
                            'status' => 1,
                            'description' => '//[052713]-[#eos@EFNet]-[All_Shall_Perish-Montreal_QUE_0628-2007-EOS]-[09/14] "06-all_shall_perish-deconstruction-eos.mp3" yEnc',
                            'ordinal' => 5,
                        ),
                        439 =>
                        array (
                            'id' => 441,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.complete_cd$',
                        'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\))[ _-]{0,3}\\[Lords-of-usenet\\][ _-]{0,3}<<Partner of SSL-News.info>>[ _-]{0,3}"(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ _-]{0,3}\\d+[.,]\\d+ [kKmMgG][bB][ _-]{0,3}yEnc$/i',
                            'status' => 1,
                        'description' => '//(05/10) - [Lords-of-usenet] <<Partner of SSL-News.info>>  "Wynardtage Praise The Fallen(2007).vol00+01.PAR2" - 132,64 MB - yEnc',
                            'ordinal' => 10,
                        ),
                        440 =>
                        array (
                            'id' => 442,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.complete_cd$',
                        'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\))[ _-]{0,3}<www\\.lords-of-usenet\\.org><by Nerts>[ _-]{0,3}"(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ _-]{0,3}\\d+[.,]\\d+ [kKmMgG][bB][ _-]{0,3}yEnc$/i',
                            'status' => 1,
                        'description' => '//(06/11) - <www.lords-of-usenet.org><by Nerts> - "Diens - Schwarzmale.vol00+01.PAR2" - 141,07 MB - yEnc',
                            'ordinal' => 15,
                        ),
                        441 =>
                        array (
                            'id' => 443,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.complete_cd$',
                        'regex' => '/^<www\\.lords-of-usenet\\.org><by Nerts>[ _-]{0,3}\\(\\d+\\/(?P<match0>\\d+\\))[ _-]{0,3}"(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ _-]{0,3}\\d+[.,]\\d+ [kKmMgG][bB][ _-]{0,3}yEnc$/i',
                            'status' => 1,
                        'description' => '//<www.Lords-Of-Usenet.org><by Nerts> (09/18) - "Mantus - Fatum (2013) [2CD].FH.vol00+2.PAR2" - 336,39 MB - yEnc',
                            'ordinal' => 20,
                        ),
                        442 =>
                        array (
                            'id' => 444,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.complete_cd$',
                        'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\))[ _-]{0,3}"(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ _-]{0,3}\\d+[.,]\\d+ [kKmMgG][bB][ _-]{0,3}yEnc$/i',
                            'status' => 1,
                        'description' => '//(08/15) "Noemi-Red.(Unreleased).2006.by.NYCrules.vol000+01.PAR2" - 179,66 MB - yEnc',
                            'ordinal' => 25,
                        ),
                        443 =>
                        array (
                            'id' => 445,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.complete_cd$',
                        'regex' => '/^\\[(?P<match0>[a-zA-Z0-9-_\\\\(\\)\\.]+)\\] \\[www\\.usenet4ever\\.info by Secretusenet\\] -  "(.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//[16_Bit_Lolitas-Warung_Brazil_002-2CD-2012-iHF] [www.usenet4ever.info by Secretusenet] -  "000-16_bit_lolitas-warung_brazil_002-2cd-2012-ihf.sfv" yEnc ::: //[3RD_Prototype_-_On_My_Way-(TB7368)-WEB-2013-FMC] [www.usenet4ever.info by Secretusenet] -  "01-3rd_prototype_-_deafback-when_you_are_in_the_dark_(deafback_remix).mp3" yEnc ::: //[Armin_Van_Buuren_Feat._Fiora-Waiting_For_The_Night-(ARMD1140)-WEB-2013-UKHx] [www.usenet4ever.info by Secretusenet] -  "00-armin_van_buuren_feat._fiora-waiting_for_the_night-(armd1140)-web-2013-ukhx.m3u" yEnc',
                            'ordinal' => 30,
                        ),
                        444 =>
                        array (
                            'id' => 446,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.complete_cd$',
                        'regex' => '/^>ghost-of-usenet\\.org<< (?P<match0>[a-zA-Z0-9-_\\\\(\\)\\.]+) >>www\\.SSL-News\\.info> -  "(.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//>ghost-of-usenet.org<< 16_Bit_Lolitas-Warung_Brazil_002-2CD-2012-iHF >>www.SSL-News.info> -  "101-16_bit_lolitas-warung_brazil_002_cd1.mp3" yEnc',
                            'ordinal' => 35,
                        ),
                        445 =>
                        array (
                            'id' => 447,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.complete_cd$',
                        'regex' => '/^(?P<match0>[a-zA-Z0-9 -_\\\\(\\)\\.]+) \\[\\d+(\\/| of )(?P<match1>\\d+\\])[-_ ]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//Blok_B-Bienvenue_Dans_Mon_Blok_Vol.1-2005-BZ_INT [20 of 27] "01-gangsta.mp3" yEnc ::: //DJ Neev - HedKandi_2013-06-08 (Ministry of Sound Radio) [01/13] - "DJ Neev - HedKandi_2013-06-08 (Ministry of Sound Radio).par2" yEnc',
                            'ordinal' => 40,
                        ),
                        446 =>
                        array (
                            'id' => 448,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.complete_cd$',
                        'regex' => '/^\\(www\\.Thunder-News\\.org\\) >(?P<match0>.+?)< <Sponsored by Secretusenet> - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//(www.Thunder-News.org) >Dee_And_Crane-Let_The_Music_Play-WEB-2012-UKHx< <Sponsored by Secretusenet> - "05-dee_and_crane-let_the_music_play_(jay_frogs_keep_the_groove_remix_edit).mp3" yEnc',
                            'ordinal' => 45,
                        ),
                        447 =>
                        array (
                            'id' => 449,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.complete_cd$',
                        'regex' => '/^.+\\[\\d+\\/(?P<match0>\\d+\\].+)"(.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")  yEnc$/i',
                            'status' => 1,
                        'description' => '//VA 200 NRJ 2014 CD2 mp3_320kbps[18/27]VA 200 NRJ 2014 CD2 mp3_320kbps"(217) [Capital Cities] Safe And Sound.mp3"  yEnc',
                            'ordinal' => 50,
                        ),
                        448 =>
                        array (
                            'id' => 450,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.full_albums$',
                        'regex' => '/^\\. - \\[\\d+\\/(?P<match0>\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//. - [05/10] - "Blues \'N Trouble - With Friends Like These [1989].vol00+01.par2" yEnc',
                            'ordinal' => 5,
                        ),
                        449 =>
                        array (
                            'id' => 451,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.full_albums$',
                        'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\)) "\\[www\\.Lords-of-Usenet\\.org\\]_\\[Partner von SSL-News\\]_(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ _-]{0,3}\\d+[.,]\\d+ [kKmMgG][bB][ _-]{0,3}yEnc$/i',
                            'status' => 1,
                        'description' => '//(001/122) "[www.Lords-of-Usenet.org]_[Partner von SSL-News]_Blind_Guardian-Discographie.par2" - 2,20 GB - yEnc',
                            'ordinal' => 10,
                        ),
                        450 =>
                        array (
                            'id' => 452,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.full_albums$',
                        'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\)) "(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ _-]{0,4}\\d+[.,]\\d+ [kKmMgG][bB][ _-]{0,3}.+?yEnc$/i',
                            'status' => 1,
                        'description' => '//(06/10) "Pink Floyd - Dark Side Of The Moon [MFSL UDCD 517].vol00+01.PAR2"- - 67,88 MB - Pink Floyd - Dark Side Of The Moon [MFSL UDCD 517] yEnc ::: //(07/11) "VA - Twilight - New Moon - Ost.vol00+01.PAR2"- - 93,69 MB - VA - Twilight - New Moon - Ost yEnc',
                            'ordinal' => 15,
                        ),
                        451 =>
                        array (
                            'id' => 453,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.full_albums$',
                        'regex' => '/^\\(.+\\) \\[\\d+\\/(?P<match0>\\d+\\]) - "(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar)?(\\d{1,3}\\.rev|\\.vol\\d+\\+\\d+\\.par2|\\.[A-Za-z0-9]{2,4}) . http:\\/\\/usenet4ever\\.info_Sponsored by www\\.Secretusenet\\.com  " yEnc$/',
                            'status' => 1,
                        'description' => '//(Kitty Samtpfote) [01/12] - "Electronic Music of the 80s.Michael Garrison - In The Regions Of Sunreturn and beyond 1991.par2 . http://usenet4ever.info_Sponsored by www.Secretusenet.com  " yEnc',
                            'ordinal' => 20,
                        ),
                        452 =>
                        array (
                            'id' => 454,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.full_albums$',
                        'regex' => '/^\\(.+\\) >(?P<match0>.+?)< <Sponsored by AstiNews> - \\(\\d+\\/(?P<match1>\\d+\\)) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//(www.Thunder-News.org) >Boehse Onkelz - Discography< <Sponsored by AstiNews> - (113/145) - "Boehse Onkelz - Discography.s10" yEnc',
                            'ordinal' => 25,
                        ),
                        453 =>
                        array (
                            'id' => 455,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.full_albums$',
                        'regex' => '/^\\[(?P<match0>\\d+\\]-\\[".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")\\[ yEnc$/i',
                            'status' => 1,
                            'description' => '//[00021]-["1999 Alphaville - Dreamscapes.part069.rar"[ yEnc',
                            'ordinal' => 30,
                        ),
                        454 =>
                        array (
                            'id' => 456,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.full_albums$',
                        'regex' => '/^\\(.+\\) \\[\\d+\\/(?P<match0>\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//(nzbDMZ) [0/2] - "Miles Crossing - Miles Crossing (2011).nzb" yEnc',
                            'ordinal' => 35,
                        ),
                        455 =>
                        array (
                            'id' => 457,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.full_albums$',
                        'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//[06/10] - "Jeff Healey - Legacy Volume One [The Singles].vol00+01.PAR2" yEnc',
                            'ordinal' => 40,
                        ),
                        456 =>
                        array (
                            'id' => 458,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.full_albums$',
                        'regex' => '/^(?P<match0>\\d+ ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//00008 "2003 Camouflage - Sensor.par2" yEnc',
                            'ordinal' => 45,
                        ),
                        457 =>
                        array (
                            'id' => 459,
                            'group_regex' => '^alt\\.binaries\\.mp3\\.full_albums$',
                        'regex' => '/^(?P<match0>[a-zA-Z0-9 -_\\\\(\\)\\.]+) \\[\\d+(\\/| of )(?P<match1>\\d+\\])[-_ ]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//Alex Oriental Experience_-_Live II (Live II) [1/9] - "01_Red_Dress.mp3" yEnc',
                            'ordinal' => 50,
                        ),
                        458 =>
                        array (
                            'id' => 460,
                            'group_regex' => '^alt\\.binaries\\.multimedia$',
                        'regex' => '/^(?P<match0>[A-Z0-9a-z.-]{10,}\\s+(- )?\\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                            'status' => 1,
                            'description' => '//Escort.2006.DUTCH.WEB-RiP.x264-DLH - [01/23] - "Escort.2006.DUTCH.WEB-RiP.x264-DLH.par2" yEnc ::: //Tusenbroder.S01E05.PDTV.XViD.SWEDiSH-NTV  [01/69] - "ntv-tusenbroder.s01e05.nfo" yEnc',
                            'ordinal' => 5,
                        ),
                        459 =>
                        array (
                            'id' => 461,
                            'group_regex' => '^alt\\.binaries\\.multimedia$',
                        'regex' => '/.*"(?P<match0>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}").+?yEnc$/i',
                            'status' => 1,
                            'description' => '//- "Auction Hunters S04E04.HDTV.x264-StarryNights1.nzb" yEnc',
                            'ordinal' => 10,
                        ),
                        460 =>
                        array (
                            'id' => 462,
                            'group_regex' => '^alt\\.binaries\\.multimedia$',
                        'regex' => '/^(?P<match0>.+?)\\.[A-Za-z0-9]{2,4} - \\[\\d+\\/(?P<match1>\\d+\\])  yEnc$/',
                            'status' => 1,
                            'description' => '//homeland.s02e12.1080p.bluray-bia.r08 - [011/111]  yEnc',
                            'ordinal' => 15,
                        ),
                        461 =>
                        array (
                            'id' => 463,
                            'group_regex' => '^alt\\.binaries\\.multimedia$',
                        'regex' => '/^\\(TOWN\\)\\(www\\.town\\.ag \\)[ _-]{0,3}\\(partner of www\\.ssl-news\\.info \\)[ _-]{0,3} (.+?) \\[\\d+\\/(?P<match0>\\d+\\][ _-]{0,3}("|#34;).+?)\\.(par2|rar|nfo|nzb)("|#34;)[ _-]{0,3}\\d+[.,]\\d+ [kKmMgG][bB][ _-]{0,3}yEnc$/',
                            'status' => 1,
                        'description' => '//(TOWN)(www.town.ag ) (partner of www.ssl-news.info ) Twinz-Conversation-CD-FLAC-1995-CUSTODES  [01/23] - #34;Twinz-Conversation-CD-FLAC-1995-CUSTODES.par2#34; - 266,00 MB - yEnc',
                            'ordinal' => 20,
                        ),
                        462 =>
                        array (
                            'id' => 464,
                            'group_regex' => '^alt\\.binaries\\.multimedia\\.anime$',
                        'regex' => '/(?P<match0>.+? \\((360|480|720|1080)p\\|.+? ~bY .+? \\[)\\d+\\/\\d+\\] - ".+?\\[[A-F0-9]+\\].+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//High School DxD New 01 (480p|.avi|xvid|mp3) ~bY Hatsuyuki [01/18] - "[Hatsuyuki]_High_School_DxD_New_01_[848x480][76B2BB8C].avi.001" yEnc',
                            'ordinal' => 5,
                        ),
                        463 =>
                        array (
                            'id' => 465,
                            'group_regex' => '^alt\\.binaries\\.multimedia\\.anime$',
                        'regex' => '#\\[(?P<match0>[\\w-]+\\][\\w-]+_\\d+_\\[\\d{3,4}[ip])\\]\\s*\\[([0-9A-Fa-f]{8})\\]\\s*\\[\\d+/(\\d+)\\].*#i',
                            'status' => 1,
                            'description' => '//[Hatsuyuki]_Seirei_Tsukai_no_Blade_Dance_-_03_[720p] [E18FCA59] [01/18]',
                            'ordinal' => 10,
                        ),
                        464 =>
                        array (
                            'id' => 466,
                            'group_regex' => '^alt\\.binaries\\.multimedia\\.anime\\.highspeed$',
                        'regex' => '/(.+? \\((?P<match0>360|480|720|1080)p\\|.+?\\s*~bY\\s*.+?\\s*\\[)\\d+\\/\\d+\\]\\s*-\\s*".+?\\[[A-Z0-9\\[\\]\\.]+.*([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//High School DxD New 01 (480p|.avi|xvid|mp3) ~bY Hatsuyuki [01/18] - "[Hatsuyuki]_High_School_DxD_New_01_[848x480][76B2BB8C].avi.001" yEnc',
                            'ordinal' => 5,
                        ),
                        465 =>
                        array (
                            'id' => 467,
                            'group_regex' => '^alt\\.binaries\\.multimedia\\.documentaries$',
                        'regex' => '/^(?P<match0>".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\[\\d+ of \\d+ - \\d+ [kKmMgG][bB]\\] yEnc$/i',
                            'status' => 1,
                            'description' => '//"Universe S4E08.part40.rar" - [41 of 76 - 10013 kb] yEnc',
                            'ordinal' => 5,
                        ),
                        466 =>
                        array (
                            'id' => 468,
                            'group_regex' => '^alt\\.binaries\\.multimedia\\.scifi$',
                        'regex' => '/^(?P<match0>some m4vs - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//some m4vs - "SilverHawks_v1eps01_The Origin Story.par2" yEnc',
                            'ordinal' => 5,
                        ),
                        467 =>
                        array (
                            'id' => 469,
                            'group_regex' => '^alt\\.binaries\\.music$',
                        'regex' => '/^\\[ TOWN \\][ _-]{0,3}\\[ www\\.town\\.ag \\][ _-]{0,3}\\[ partner of www\\.ssl-news\\.info \\][ _-]{0,3}\\[ .* \\] \\[\\d+\\/(?P<match0>\\d+\\][ _-]{0,3}("|#34;).+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ _-]{0,3}\\d+[.,]\\d+ [kKmMgG][bB][ _-]{0,3}yEnc$/i',
                            'status' => 1,
                            'description' => '//[ TOWN ]-[ www.town.ag ]-[ partner of www.ssl-news.info ]-[ MOVIE ] [14/19] - "Night.Vision.2011.DVDRip.x264-IGUANA.part12.rar" - 660,80 MB yEnc',
                            'ordinal' => 5,
                        ),
                        468 =>
                        array (
                            'id' => 470,
                            'group_regex' => '^alt\\.binaries\\.music$',
                        'regex' => '/^.+By Dready Niek \\) \\[\\d+\\/(?P<match0>\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//( 80\'s Giga Hits Collection (32 CDs) By Dready Niek )  By Dready Niek ) [44/54] - "80\'s Giga Hits Collection (32 CDs) By Dready Niek.part43.rar" yEnc',
                            'ordinal' => 10,
                        ),
                        469 =>
                        array (
                            'id' => 471,
                            'group_regex' => '^alt\\.binaries\\.music$',
                        'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\]  .+?) ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - nightsteff  yEnc$/i',
                            'status' => 1,
                        'description' => '//(00/24]  Marco Mengoni - Prontoacorrere (2013) "Marco Mengoni - Prontoacorrere (2013).nzb" - nightsteff  yEnc',
                            'ordinal' => 15,
                        ),
                        470 =>
                        array (
                            'id' => 472,
                            'group_regex' => '^alt\\.binaries\\.music$',
                        'regex' => '/^\\((?P<match0>.+)\\) \\[\\d+\\/(?P<match1>\\d+\\]) - \\[".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")\\] yEnc$/i',
                            'status' => 1,
                        'description' => '//(80\'s Disco-Soul-Funk) [136/426] - ["Level 42 - Lessons In Love.mp3"] yEnc',
                            'ordinal' => 20,
                        ),
                        471 =>
                        array (
                            'id' => 473,
                            'group_regex' => '^alt\\.binaries\\.music$',
                        'regex' => '/^\\((?P<match0>.+)\\) \\[\\d+\\/(?P<match1>\\d+\\]) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//(Jungle Fever Tapepacks) [67/79] - "Jungle Fever Tapepacks.part65.rar" yEnc',
                            'ordinal' => 25,
                        ),
                        472 =>
                        array (
                            'id' => 474,
                            'group_regex' => '^alt\\.binaries\\.music$',
                        'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//[1/8] - "Black Market Flowers - Bind (1993).sfv" yEnc',
                            'ordinal' => 30,
                        ),
                        473 =>
                        array (
                            'id' => 475,
                            'group_regex' => '^alt\\.binaries\\.music$',
                        'regex' => '/^\\[DreamPieter\\] \\((?P<match0>.+)\\) \\[\\d+\\/(?P<match1>\\d+\\]) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//[DreamPieter] (Glen Tipton - Two solo albums) [04/23] - "Glenn Tipton - Baptizm of Fire - 04 - Fuel Me Up.mp3" yEnc',
                            'ordinal' => 35,
                        ),
                        474 =>
                        array (
                            'id' => 476,
                            'group_regex' => '^alt\\.binaries\\.music$',
                        'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\)[ -]{0,3}".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}\\d+([.,]\\d+)? [kKmMgG][bB][-_\\s]{0,3}[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//(01/10) "MylÃ¨ne Farmer - Monkey me (2012 Bluray Audio).rar" - 1,56 GB - yEnc',
                            'ordinal' => 40,
                        ),
                        475 =>
                        array (
                            'id' => 477,
                            'group_regex' => '^alt\\.binaries\\.music\\.mp3$',
                        'regex' => '/^[\\(\\[]\\d+\\/(?P<match0>\\d+[\\]\\)][ -]{0,3}.+) ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ -]{0,3}nightsteff  yEnc$/i',
                            'status' => 1,
                        'description' => '//(00/20]  Nomadi - Terzo Tempo (2012) "Nomadi - Terzo Tempo (2012).nzb" - nightsteff  yEnc',
                            'ordinal' => 5,
                        ),
                        476 =>
                        array (
                            'id' => 478,
                            'group_regex' => '^alt\\.binaries\\.music\\.mp3$',
                        'regex' => '/^\\(\\?+\\) \\[\\d+\\/(?P<match0>\\d+\\][ -]{0,3}.+)  ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//(????) [19/22] - C.K.N. Demo 85  "19-rotten system.mp3" yEnc',
                            'ordinal' => 10,
                        ),
                        477 =>
                        array (
                            'id' => 479,
                            'group_regex' => '^alt\\.binaries\\.music\\.mp3$',
                        'regex' => '/^\\((?P<match0>.+)\\) \\[\\d+\\/(?P<match1>\\d+\\])[ -]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//(BierbauchFreddy Quwinn seine grÃ¶Ãten Coversongs Vol2) [22/60] - "040c - Freddy Quinn - Don\'t Forbid Me (1957) (NH 22 639, EPH 20 575).mp3" yEnc',
                            'ordinal' => 15,
                        ),
                        478 =>
                        array (
                            'id' => 480,
                            'group_regex' => '^alt\\.binaries\\.music\\.mp3$',
                        'regex' => '/^\\[ (?P<match0>.+) \\] - \\[\\d+\\] - \\[\\d+ Kbps MP3\\] \\[\\d+ of (?P<match1>\\d+\\]) ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//[ Spectrum (ft. Matthew Koma) (Extended Mix) - Zedd ] - [2012] - [256 Kbps MP3] [1 of 7] "Spectrum (ft. Matthew Koma) [Extended Mix].mp3" yEnc',
                            'ordinal' => 20,
                        ),
                        479 =>
                        array (
                            'id' => 481,
                            'group_regex' => '^alt\\.binaries\\.music\\.mp3$',
                        'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\][ -]{0,3}\\(((Top)?\\d+ )?(MP3 )?(Album )?Charts\\)[ -]{0,3}".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")  yEnc$/i',
                            'status' => 1,
                        'description' => '//[1/1] - (150 MP3 Album Charts) - "Atlantean Kodex - The White Goddess.rar"  yEnc ::: //[1/1] - (MP3 Album Charts) - "Black Sabbath - 13.rar"  yEnc ::: //[1/1] - (Top100 Album Charts) - "Bastille - Pompeii.rar"  yEnc ::: //[1/1] - (Top100 Charts) - "Beatrice Egli - Gluecksgefuehle.rar"  yEnc',
                            'ordinal' => 25,
                        ),
                        480 =>
                        array (
                            'id' => 482,
                            'group_regex' => '^alt\\.binaries\\.music\\.mp3$',
                        'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\][ -]{0,3}(Album )?Top \\d+( Album Charts \\d+)?[ -]{0,3}".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")  yEnc$/i',
                            'status' => 1,
                            'description' => '//[1/1] - Album Top 100 - "Amy MacDonald - L',
                            'ordinal' => 30,
                        ),
                        481 =>
                        array (
                            'id' => 483,
                            'group_regex' => '^alt\\.binaries\\.music\\.mp3$',
                        'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\][ -]{0,3}\\(Album Top \\d+(( -)? \\d+)?\\)[ -]{0,3}".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")  yEnc$/i',
                            'status' => 1,
                        'description' => '//[1/1] (Album Top 100 - 2012) - "Cro - Einmal Um Die Welt.rar"  yEnc ::: //[1/1] (Album Top 100 2012) - "Cro - Einmal Um Die Welt.rar"  yEnc ::: //[1/1] (Album Top 100) - "Cro - Raop.rar"  yEnc',
                            'ordinal' => 35,
                        ),
                        482 =>
                        array (
                            'id' => 484,
                            'group_regex' => '^alt\\.binaries\\.music\\.mp3$',
                        'regex' => '/^\\[ech0park\\]-\\[spotnet\\]-\\[(?P<match0>.+?)\\] \\[\\d+\\/(?P<match1>\\d+\\]) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//[ech0park]-[spotnet]-[Snow Patrol 2012 Tour Sampler - 2012-iND] [02/20] - "02-snow_patrol-ill_never_let_go.mp3" yEnc',
                            'ordinal' => 40,
                        ),
                        483 =>
                        array (
                            'id' => 485,
                            'group_regex' => '^alt\\.binaries\\.music\\.mp3$',
                        'regex' => '/^(?P<match0>.+?)[-_\\s]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}\\[\\d+\\/ (?P<match1>\\d+\\]) nightsteff[-_\\s]{0,3}yEnc$/i',
                            'status' => 1,
                        'description' => '//40 Italo Dance Tunes (2CD) - "00. 40 Italo Dance Tunes 2011.nfo" [02/ 50] nightsteff  yEnc',
                            'ordinal' => 45,
                        ),
                        484 =>
                        array (
                            'id' => 486,
                            'group_regex' => '^alt\\.binaries\\.music\\.mp3$',
                        'regex' => '/^(?P<match0>.+?) ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ -]{0,3}nightsteff  yEnc$/i',
                            'status' => 1,
                        'description' => '//Bud Spencer & Terence Hill - Greatest Hits Vol 1 (1995) "04 - Just A Good Boy.mp3" nightsteff  yEnc',
                            'ordinal' => 50,
                        ),
                        485 =>
                        array (
                            'id' => 487,
                            'group_regex' => '^alt\\.binaries\\.music\\.mp3$',
                        'regex' => '/^Attn: \\w+ - (?P<match0>.+?)\\[\\d+\\/(?P<match1>\\d+\\]) - .+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar)?(\\d{1,3}\\.rev|\\.vol\\d+\\+\\d+\\.par2|\\.[A-Za-z0-9]{2,4})[-_\\s]{0,3}\\d+[.,]\\d+[kKmMgG][bB][-_\\s]{0,3}yEnc$/',
                            'status' => 1,
                            'description' => '//Attn: bearcat - Avenged Sevenfold - Avenged Sevenfold 320[17/18] - .vol15+16.par2 5.9Mb yEnc',
                            'ordinal' => 55,
                        ),
                        486 =>
                        array (
                            'id' => 488,
                            'group_regex' => '^alt\\.binaries\\.nl$',
                        'regex' => '/\\((\\d+|\\?+)\\) \\[\\d+\\/(?P<match0>\\d+\\]).*"(?P<match1>.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                            'status' => 1,
                        'description' => '//(????) [01/46] - "NCIS.S11E02.Past.Present.and.Future.1080p.WEB-DL.DD5.1.H.264-CtrlHD.par2" yEnc',
                            'ordinal' => 5,
                        ),
                        487 =>
                        array (
                            'id' => 489,
                            'group_regex' => '^alt\\.binaries\\.nl$',
                        'regex' => '/^\\w+[-_ ]{0,3}[\\[\\(]\\d+\\/(?P<match0>\\d+[\\]\\)])[-_ ]{0,3}"(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//JN - [1/3] - "Operatie Teheran-Joel C Rosenberg JN.par2" yEnc',
                            'ordinal' => 10,
                        ),
                        488 =>
                        array (
                            'id' => 490,
                            'group_regex' => '^alt\\.binaries\\.nl$',
                        'regex' => '/^\\( (?P<match0>[\\w. -]{8,}) \\)[-_ ]{0,3}\\[\\d+\\/(?P<match1>\\d+\\]) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//( Overlord II RELOADED ) - [013/112] - "rld-olii.part001.rar" yEnc',
                            'ordinal' => 15,
                        ),
                        489 =>
                        array (
                            'id' => 491,
                            'group_regex' => '^alt\\.binaries\\.nl$',
                        'regex' => '/^(?P<match0>[\\w. &\\()-]{8,}?\\b)[-_\\s]{0,3}\\[\\d+\\/(?P<match1>\\d+\\])[-_\\s]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//Batman.Arkham-Origins.Initiation-RELOADED - [006/296] - "r.vol010+08.PAR2" yEnc',
                            'ordinal' => 20,
                        ),
                        490 =>
                        array (
                            'id' => 492,
                            'group_regex' => '^alt\\.binaries\\.ps3$',
                        'regex' => '/^\\[\\d+\\] \\[\\d+(?P<match0>\\/\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                            'description' => '//[4197] [036/103] - "ant-mgstlcd2.r34" yEnc',
                            'ordinal' => 5,
                        ),
                        491 =>
                        array (
                            'id' => 493,
                            'group_regex' => '^alt\\.binaries\\.pwp$',
                        'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\)[-_ ]{0,4}"Giggi.+)[A-Z]\\d([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}\\d+([.,]\\d+)? [kKmMgG][bB][-_\\s]{0,3}[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//(620/899) -  "Giggi_9M05YD32TO4.part147.rar" - 252,53 GB - yEnc',
                            'ordinal' => 5,
                        ),
                        492 =>
                        array (
                            'id' => 494,
                            'group_regex' => '^alt\\.binaries\\.pwp$',
                        'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\)[-_ ]{0,4}".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}\\d+([.,]\\d+)? [kKmMgG][bB][-_\\s]{0,3}[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//(300/454) "James_Bond_You_Only_Live_Twice_bd25.part300.rar" - 22,22 GB - yEnc',
                            'ordinal' => 10,
                        ),
                        493 =>
                        array (
                            'id' => 495,
                            'group_regex' => '^alt\\.binaries\\.series\\.tv\\.french$',
                        'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\)) "(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[,.]\\d+ [mMkKgG][bB]( -)? yEnc$/i',
                            'status' => 1,
                        'description' => '//(01/34) "Merlin.2008.1x04.la.vengeance.de.nimue.par2" - 388,38 MB - yEnc',
                            'ordinal' => 5,
                        ),
                        494 =>
                        array (
                            'id' => 496,
                            'group_regex' => '^alt\\.binaries\\.series\\.tv\\.french$',
                        'regex' => '/^(?P<match0>[a-zA-Z0-9._-]+)[-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]])[-_ ]{0,3}"(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                            'status' => 1,
                            'description' => '//Breaking.Bad.S02.MULTi.720p.BluRay.AC3.x264-BoO [749/883] - "212ACS3517.part01.rar" yEnc',
                            'ordinal' => 10,
                        ),
                        495 =>
                        array (
                            'id' => 497,
                            'group_regex' => '^alt\\.binaries\\.series\\.tv\\.french$',
                        'regex' => '/^(?P<match0>[a-zA-Z0-9._-]+)[-_ ]{0,3}[\\(\\[]\\d+ of (?P<match1>\\d+[\\)\\]])[-_ ]{0,3}"(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                            'status' => 1,
                            'description' => '//Dawson.Saison2.DVDRIP.x264.FRENCH [111 of 196] "Dawson.S2.E22.Tout feu, tout flambe.m4v.003" yEnc',
                            'ordinal' => 15,
                        ),
                        496 =>
                        array (
                            'id' => 498,
                            'group_regex' => '^alt\\.binaries\\.series\\.tv\\.french$',
                        'regex' => '/^[\\(\\[]\\d+\\/(?P<match0>\\d+[\\)\\]])[-_ ]{0,3}"(?P<match1>.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                            'status' => 1,
                            'description' => '//[01/22] - "Unnatural.History.1x03.Espion.En.Sommeil.FR.LD.par2" yEnc',
                            'ordinal' => 20,
                        ),
                        497 =>
                        array (
                            'id' => 499,
                            'group_regex' => '^alt\\.binaries\\.series\\.tv\\.french$',
                        'regex' => '/^\\[(?P<match0>.+?)\\][-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]])[-_ ]{0,3}"(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                            'status' => 1,
                            'description' => '//[MagNeum 3.14 S1 D.V.D + par2][1148/1167] - "ZDFRIKK8470DO776.D7P" yEnc',
                            'ordinal' => 25,
                        ),
                        498 =>
                        array (
                            'id' => 500,
                            'group_regex' => '^alt\\.binaries\\.sony\\.psp$',
                        'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\) ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+([.,]\\d+ [kKmMgG])?[bB] yEnc$/i',
                            'status' => 1,
                        'description' => '//(01/10) "Assassins Creed - Bloodlines [EUR].par2" - 408,46 MB yEnc',
                            'ordinal' => 5,
                        ),
                        499 =>
                        array (
                            'id' => 501,
                            'group_regex' => '^alt\\.binaries\\.sony\\.psp$',
                        'regex' => '/^\\(\\d+\\) (?P<match0>[a-zA-Z0-9 -_\\.]+) \\[\\d+\\/(?P<match1>\\d+\\]) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                            'status' => 1,
                        'description' => '//(20444) F',
                            'ordinal' => 10,
                        ),
                    ));
        \DB::table('collection_regexes')->insert(array (
            0 =>
            array (
                'id' => 502,
                'group_regex' => '^alt\\.binaries\\.sound\\.mp3$',
            'regex' => '/.+[-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match0>\\d+[\\)\\]][-_ ]{0,3}".+)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ _-]{0,3}\\d+[.,]\\d+ [kKmMgG][bB][ _-]{0,3}yEnc$/i',
                'status' => 1,
                'description' => '//- codari_4_usenetrevolution.info-Partner of SSL-News UK.Single.Charts.Top.40  [01/25] - "UK.Single.Charts.Top.40.par2" - 301,70 MB - yEnc',
                'ordinal' => 5,
            ),
            1 =>
            array (
                'id' => 503,
                'group_regex' => '^alt\\.binaries\\.sound\\.mp3$',
            'regex' => '/^"(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ _-]{0,3}\\d+[.,]\\d+ [kKmMgG][bB][ _-]{0,3}\\(\\d+\\/(?P<match1>\\d+\\))[ _-]{0,3}yEnc$/i',
                'status' => 1,
            'description' => '//"Terraplane Sun - Funnel of Love.mp3" - 21.55 MB - (1/6) - yEnc',
                'ordinal' => 10,
            ),
            2 =>
            array (
                'id' => 504,
                'group_regex' => '^alt\\.binaries\\.sound\\.mp3$',
            'regex' => '/^(?P<match0>.+? meil29) ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//jean ferrat  annÃ©e 1967 Ã  1969  meil29 "17 Rien Ã  voir.mp3" yEnc',
                'ordinal' => 15,
            ),
            3 =>
            array (
                'id' => 505,
                'group_regex' => '^alt\\.binaries\\.sounds\\.flac$',
            'regex' => '/^(?P<match0>\\[\\d+\\]-\\[.+?\\]-\\[.+?\\]-\\[.+?\\]-\\[)\\d+\\/\\d+] - ".+?" yEnc$/',
                'status' => 1,
                'description' => '//[32974]-[FULL]-[#a.b.flac]-[ Tenniscoats-Tokinouta-JP-CD-FLAC-2011-BCC ]-[04/28] - "00-tenniscoats-tokinouta-jp-cd-flac-2011.nfo" yEnc',
                'ordinal' => 5,
            ),
            4 =>
            array (
                'id' => 506,
                'group_regex' => '^alt\\.binaries\\.sounds\\.lossless$',
            'regex' => '/^http:\\/\\/dream-of-usenet\\.org .+? - \\[\\d+(?P<match0>\\/\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//http://dream-of-usenet.org empfehlen newsconnection.eu - [02/32] - "Adam_Ant-Manners_and_Physique-(MCAD-6315)-CD-FLAC-1989-2Eleven.par2" yEnc',
                'ordinal' => 5,
            ),
            5 =>
            array (
                'id' => 507,
                'group_regex' => '^alt\\.binaries\\.sounds\\.lossless$',
            'regex' => '/^(?P<match0>[A-Z0-9].+? - \\d{4} - .+? - )\\d+ of \\d+ - \\d+ - .+? yEnc$/',
                'status' => 1,
                'description' => '//Sonny Landreth - 2010 - Mississippi Blues - 04 of 29 - 00 - Mississippi Blues.sfv yEnc ::: //Fruteland Jackson - 1996 - ... Is All I Crave - 08 of 20 - 00 - Fruteland Jackson - ... Is All I Crave.log yEnc',
                'ordinal' => 10,
            ),
            6 =>
            array (
                'id' => 508,
                'group_regex' => '^alt\\.binaries\\.sounds\\.lossless$',
            'regex' => '/^(?P<match0>.+?[a-zA-Z0-9][^\\[(?P<match1> ])\\d{2,}(\\/\\d+\\] - ").+?" yEnc$/',
                'status' => 1,
                'description' => '//Restless Breed00/27] - ".nzb" yEnc',
                'ordinal' => 15,
            ),
            7 =>
            array (
                'id' => 509,
                'group_regex' => '^alt\\.binaries\\.sounds\\.lossless$',
            'regex' => '/^\\([A-Z0-9][a-zA-Z0-9 ]+\\) \\[\\d+(?P<match0>\\/\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//(Rolling Stones) [01/28] - "Bell Center, Montreal, QC - 09-06-2013 (alt source sb remaster).par2" yEnc',
                'ordinal' => 20,
            ),
            8 =>
            array (
                'id' => 510,
                'group_regex' => '^alt\\.binaries\\.sounds\\.lossless$',
            'regex' => '/^.:[-_ ]{0,3}(?P<match0>.+?)[-_ ]{0,3}:..+?thunder-news\\.org.+?secretusenet\\.com:. - "(.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//.: VA-Liquid_Music-The_Future_House_Compilation-CD-FLAC-1993-WRS :. - .:www.thunder-news.org:. - .:sponsored by secretusenet.com:. - "00-va-liquid_music-the_future_house_compilation-cd-flac-1993-wrs.nfo" yEnc ::: //.:Bruce_BecVar-Arriba-CD-FLAC-1993-JLM:. - .:thunder-news.org:. - .:sponsored by secretusenet.com:. - "00-bruce_becvar-arriba-cd-flac-1993.m3u" yEnc',
                'ordinal' => 25,
            ),
            9 =>
            array (
                'id' => 511,
                'group_regex' => '^alt\\.binaries\\.sounds\\.lossless$',
            'regex' => '/^[-_ ]{0,3}"(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '//_ "CARUSO & GIGLI - O Sole Mio - The  Unknown.nzb" yEnc',
                'ordinal' => 30,
            ),
            10 =>
            array (
                'id' => 512,
                'group_regex' => '^alt\\.binaries\\.sounds\\.lossless$',
            'regex' => '/^[-_ ]{0,3}"(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_ ]{0,3}\\d+ (?P<match1>of \\d+)( \\(\\d+\\/\\d+\\)){1,2} (yEnc)?$/i',
                'status' => 1,
            'description' => '//"Art Tatum - The Complete Trio Sessions with Tiny Grimes & Slam Stewart - Vol 1.NFO" - 1 of 6 (1/1) ::: //"Galen Jeter and the Dallas Jazz Orchestra - Thank You, Leon.NFO" - 1 of 5 (1/1) (1/1)',
                'ordinal' => 35,
            ),
            11 =>
            array (
                'id' => 513,
                'group_regex' => '^alt\\.binaries\\.sounds\\.lossless$',
            'regex' => '/^[-_ ]{0,3}"(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ _-]{0,3}\\d+[.,]\\d+ [kKmMgG][bB][ _-]{0,3}yEnc$/i',
                'status' => 1,
                'description' => '//"Doc Watson - 1973 - The Essential Doc Watson - 01 - Tom Dooley.flac" - 406.64 MB - yEnc',
                'ordinal' => 40,
            ),
            12 =>
            array (
                'id' => 514,
                'group_regex' => '^alt\\.binaries\\.sounds\\.mp3\\.audiobooks$',
            'regex' => '/^\\(dream-of-usenet\\.info\\) - \\[\\d+(?P<match0>\\/\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
                'description' => '// currently these are teh same as mp3, but in the future these should be mod',
                'ordinal' => 5,
            ),
            13 =>
            array (
                'id' => 515,
                'group_regex' => '^alt\\.binaries\\.sounds\\.mp3\\.audiobooks$',
            'regex' => '/^http:\\/\\/dream-of-usenet\\.org .+? - \\[\\d+(?P<match0>\\/\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//http://dream-of-usenet.org empfehlen newsconnection.eu - [02/32] - "Adam_Ant-Manners_and_Physique-(MCAD-6315)-CD-FLAC-1989-2Eleven.par2" yEnc',
                'ordinal' => 10,
            ),
            14 =>
            array (
                'id' => 516,
                'group_regex' => '^alt\\.binaries\\.sounds\\.mp3\\.audiobooks$',
            'regex' => '/^(?P<match0>>>> CREATIVE COMMONS NZB <<< ".+?" - File )\\d+ of \\d+: ".+?" yEnc$/',
                'status' => 1,
                'description' => '//>>> CREATIVE COMMONS NZB <<< "dexter romweber duo-lookout" - File 1 of 9: "creative_commons_nzb_dexter_romweber_duo-lookout.rar" yEnc',
                'ordinal' => 15,
            ),
            15 =>
            array (
                'id' => 517,
                'group_regex' => '^alt\\.binaries\\.sounds\\.mp3\\.audiobooks$',
            'regex' => '/^(?P<match0>.+?usenet-space.+?Powered by.+? ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|").+? \\d+\\/\\d+ \\(\\d+[.,]\\d+ [kKmMgG][bB]\\) .+? \\d+[.,]\\d+ [kKmMgG][bB] .+?yEnc$/i',
                'status' => 1,
            'description' => '//<<<usenet-space-cowboys.info>>>  <<<Powered by https://secretusenet.com>< "Justin_Bieber-Believe_Acoustic-2013-pLAN9_usenet-space-cowbys.info.rar" >< 4/6 (78.65 MB) >< 60.84 MB > yEnc',
                'ordinal' => 20,
            ),
            16 =>
            array (
                'id' => 518,
                'group_regex' => '^alt\\.binaries\\.sounds\\.mp3$',
            'regex' => '/^\\(dream-of-usenet\\.info\\) - \\[\\d+(?P<match0>\\/\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//(dream-of-usenet.info) - [04/15] - "Enya-And_Winter_Came...-2008.part2.rar" yEnc',
                'ordinal' => 5,
            ),
            17 =>
            array (
                'id' => 519,
                'group_regex' => '^alt\\.binaries\\.sounds\\.mp3$',
            'regex' => '/^http:\\/\\/dream-of-usenet\\.org .+? - \\[\\d+(?P<match0>\\/\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//http://dream-of-usenet.org empfehlen newsconnection.eu - [02/32] - "Adam_Ant-Manners_and_Physique-(MCAD-6315)-CD-FLAC-1989-2Eleven.par2" yEnc',
                'ordinal' => 10,
            ),
            18 =>
            array (
                'id' => 520,
                'group_regex' => '^alt\\.binaries\\.sounds\\.mp3$',
            'regex' => '/^(?P<match0>>>> CREATIVE COMMONS NZB <<< ".+?" - File )\\d+ of \\d+: ".+?" yEnc$/',
                'status' => 1,
                'description' => '//>>> CREATIVE COMMONS NZB <<< "dexter romweber duo-lookout" - File 1 of 9: "creative_commons_nzb_dexter_romweber_duo-lookout.rar" yEnc',
                'ordinal' => 15,
            ),
            19 =>
            array (
                'id' => 521,
                'group_regex' => '^alt\\.binaries\\.sounds\\.mp3$',
            'regex' => '/^(?P<match0>.+?usenet-space.+?Powered by.+? ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|").+? \\d+\\/\\d+ \\(\\d+[.,]\\d+ [kKmMgG][bB]\\) .+? \\d+[.,]\\d+ [kKmMgG][bB] .+?yEnc$/i',
                'status' => 1,
            'description' => '//<<<usenet-space-cowboys.info>>>  <<<Powered by https://secretusenet.com>< "Justin_Bieber-Believe_Acoustic-2013-pLAN9_usenet-space-cowbys.info.rar" >< 4/6 (78.65 MB) >< 60.84 MB > yEnc',
                'ordinal' => 20,
            ),
            20 =>
            array (
                'id' => 522,
                'group_regex' => '^alt\\.binaries\\.sounds\\.mp3$',
            'regex' => '/"(?P<match0>.+)"[-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]])[-_ ]{0,3}".+(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                'status' => 1,
                'description' => '//"The Absence - Riders Of The Plague" [00/14] - "the_absence-riders_of_the_plague.nzb" yEnc',
                'ordinal' => 25,
            ),
            21 =>
            array (
                'id' => 523,
                'group_regex' => '^alt\\.binaries\\.sounds\\.mp3$',
            'regex' => '/\\( (?P<match0>.+?)\\)[-_ ]{0,3}( |\\().+\\)[-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]])[-_ ]{0,3}".+(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                'status' => 1,
            'description' => '//( Albert Cummings Albums 6x By Dready Niek (1999-2012) )  ( ** By Dready Niek ** ) [11/20] - "Albert Cummings Albums 6x By Dready Niek (1999-2012).part10.rar" yEnc ::: //( Fat Freddy\'s Drop - Blackbird (2013) -- By Dready Niek ) -- By Dready Niek ) [01/15] - "Fat Freddy\'s Drop - Blackbird (2013) -- By Dready Niek.par2" yEnc',
                'ordinal' => 30,
            ),
            22 =>
            array (
                'id' => 524,
                'group_regex' => '^alt\\.binaries\\.sounds\\.mp3$',
            'regex' => '/\\( (?P<match0>.+?) \\)[-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]])[-_ ]{0,3}".+(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                'status' => 1,
            'description' => '//( Addison_Road-Addison_Road-2008 ) [01/10] - "01. Addison Road - This Could Be Our Day.mp3" yEnc',
                'ordinal' => 35,
            ),
            23 =>
            array (
                'id' => 525,
                'group_regex' => '^alt\\.binaries\\.sounds\\.mp3$',
            'regex' => '/^.+?\\[\\d+\\/(?P<match0>\\d+\\][-_ ]{0,3}.+?)[-_ ]{0,3}("|#34;)(.+?)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}("|#34;))[-_ ]{0,3}yEnc$/',
                'status' => 1,
            'description' => '//(????) [0/8] - Crionics Post - Alice In Chains - Dirt REPOST"Alice In Chains - Dirt.nzb" yEnc',
                'ordinal' => 40,
            ),
            24 =>
            array (
                'id' => 526,
                'group_regex' => '^alt\\.binaries\\.sounds\\.mp3\\.complete_cd$',
            'regex' => '/(?P<match0>.+)[-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]][-_ ]{0,3}".+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                'status' => 1,
                'description' => '//The Refreshments - [1/9] - "The Refreshments - RockÂ´n Roll Christmas [2003].par2" yEnc',
                'ordinal' => 5,
            ),
            25 =>
            array (
                'id' => 527,
                'group_regex' => '^alt\\.binaries\\.sounds\\.mp3\\.complete_cd$',
            'regex' => '/^\\[(?P<match0>.+?)\\][-_ ]{0,3}\\[(?P<match1>.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}\\])[-_ ]{0,3}[\\(\\[]\\d+\\/(?P<match2>\\d+[\\)\\]])[-_ ]{0,3}yEnc$/',
                'status' => 1,
                'description' => '//[BFMP3] [Barrelhouse_Time Frames.nzb] [00/18] yEnc',
                'ordinal' => 10,
            ),
            26 =>
            array (
                'id' => 528,
                'group_regex' => '^alt\\.binaries\\.sounds\\.mp3\\.complete_cd$',
            'regex' => '/^(?P<match0>.+?)[-_ ]{0,3}("|#34;)(.+?)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}("|#34;))[-_ ]{0,3}yEnc$/',
                'status' => 1,
                'description' => '//Metallica - Ride The Lightning    "01 - Fight Fire With Fire.mp3" yEnc',
                'ordinal' => 15,
            ),
            27 =>
            array (
                'id' => 529,
                'group_regex' => '^alt\\.binaries\\.sounds\\.mp3\\.complete_cd$',
            'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\) ".+?) www\\.brothers-of-usenet\\.org - empfehlen - Newsconnection(\\.eu)?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                'status' => 1,
            'description' => '//(01/11) "Der Kleine Vampir Komplett - Folge 01 bis 18 www.brothers-of-usenet.org - empfehlen - Newsconnection.eu.nfo" yEnc',
                'ordinal' => 20,
            ),
            28 =>
            array (
                'id' => 530,
                'group_regex' => '^alt\\.binaries\\.sounds\\.mp3\\.complete_cd$',
            'regex' => '/^\\(D(\\))? (?P<match0>.+) {1,2}\\[\\d+\\/(?P<match1>\\d+\\]) - .+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar)?(\\d{1,3}\\.rev|\\.vol\\d+\\+\\d+\\.par2|\\.[A-Za-z0-9]{2,4}) {1,2}yEnc$/',
                'status' => 1,
                'description' => '//(D The Best Of Leon Russell [23/28] - The Best Of Leon Russell.vol00+01.PAR2  yEnc',
                    'ordinal' => 25,
                ),
                29 =>
                array (
                    'id' => 531,
                    'group_regex' => '^alt\\.binaries\\.sounds\\.mp3\\.dance$',
                'regex' => '/^\\[\\d+\\](?P<match0>.+?)[-_ ]{0,3}("|#34;)(.+?)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}("|#34;))[-_ ]{0,3}yEnc$/',
                    'status' => 1,
                'description' => '//[2707]Solarstone-Solarstone_Collected_Vol_1-ARDI3177-WEB-2012-TraX "02-solarstone_feat_kym_marsh-day_by_day_(red_jerry_smackthe_bigot_up_remix).mp3" - yEnc',
                    'ordinal' => 5,
                ),
                30 =>
                array (
                    'id' => 532,
                    'group_regex' => '^alt\\.binaries\\.sounds\\.mp3\\.electronic$',
                'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\))[ -]{0,3}"(?P<match1>[\\w. &\\()\\[\\]\\\'-]{8,}?\\b.?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}\\d+([.,]\\d+)? [kKmMgG][bB][-_\\s]{0,3}[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                'description' => '//(03/10) "Washing Machines - Planet-E CH-Basel Ultimate Hardcore - 4.9.1993.vol00+01.PAR2" - 232.39 MB - yEnc',
                    'ordinal' => 5,
                ),
                31 =>
                array (
                    'id' => 533,
                    'group_regex' => '^alt\\.binaries\\.sounds\\.mp3\\.electronic$',
                'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\))[ -]{0,3}"(?P<match1>[\\w. &\\()\\[\\]\\\'-]{8,}?\\b.?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}\\d+ [bB][-_\\s]{0,3}yEnc$/i',
                    'status' => 1,
                'description' => '//(2/7) "Cosmic Baby live at Energy 1995.vol00+01.PAR2" - 0 B - yEnc',
                    'ordinal' => 10,
                ),
                32 =>
                array (
                    'id' => 534,
                    'group_regex' => '^alt\\.binaries\\.sounds\\.mp3\\.electronic$',
                'regex' => '/^\\[0sk\\]-\\[\\d+-\\d+-\\d+\\]-\\[.+\\]-\\[.+\\]-\\[\\d+\\/(?P<match0>\\d+\\])-\\[(?P<match1>[\\w. &\\()\\[\\]\\\'-]{8,})\\]--.+? yEnc$/',
                    'status' => 1,
                'description' => '//[0sk]-[2002-12-06]-[idm]-[vinyl]-[4/5]-[Maps_And_Diagrams_-_Ti_Sta_Bene_Marone-(cact_001)-Vinyl-2002]--cact 001.sfv  yEnc',
                    'ordinal' => 15,
                ),
                33 =>
                array (
                    'id' => 535,
                    'group_regex' => '^alt\\.binaries\\.sounds\\.mp3\\.electronic$',
                'regex' => '/^\\[.+\\]-\\[.+\\]-\\[\\d+\\/(?P<match0>\\d+\\])-\\[(?P<match1>[\\w. &\\()\\[\\]\\\'-]{8,})\\]-.+? yEnc$/',
                    'status' => 1,
                'description' => '//[10_years---happy_bday_absme]-[cd]-[04/15]-[va_-_spacewars_01-(plkcd003)-cd-1996-nwd]-01-Nuw Idol - Union Of Ilk -nwd-.mp3  yEnc',
                    'ordinal' => 20,
                ),
                34 =>
                array (
                    'id' => 536,
                    'group_regex' => '^alt\\.binaries\\.sounds\\.mp3\\.electronic$',
                'regex' => '/^(?P<match0>[\\w. &\\()\\[\\]\\\'-]{8,}?)[ -]{0,3}\\d+[ -]{0,3}[\\w., &\\()\\[\\]\\\'-]{8,}?\\b.?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev|\\.vol\\d+\\+\\d+\\.par2|\\.[A-Za-z0-9]{2,4})[ -]{0,3}yEnc$/',
                    'status' => 1,
                    'description' => '//Alec Empire - Low On Ice  06 - Untitled.mp3  yEnc',
                    'ordinal' => 25,
                ),
                35 =>
                array (
                    'id' => 537,
                    'group_regex' => '^alt\\.binaries\\.teevee$',
                'regex' => '/^\\(\\d+(?P<match0>\\/\\d+\\) ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d.+?B - (\\d.+?B -)? yEnc$/i',
                    'status' => 1,
                'description' => '//(01/37) "Entourage S08E08.part01.rar" - 349,20 MB - yEnc ::: //(01/24) "EGtnu7OrLNQMO2pDbgpDrBL8SnjZDpab.nfo" - 686 B - 338.74 MB - yEnc (1/1)',
                    'ordinal' => 30,
                ),
                36 =>
                array (
                    'id' => 538,
                    'group_regex' => '^alt\\.binaries\\.teevee$',
                'regex' => '/^\\[\\d+(?P<match0>\\/\\d+\\] - "[A-Za-z0-9.-]+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                    'description' => '//[01/42] - "King.And.Maxwell.S01E08.1080p.WEB-DL.DD5.1.H264-Abjex.par2" yEnc',
                    'ordinal' => 35,
                ),
                37 =>
                array (
                    'id' => 539,
                    'group_regex' => '^alt\\.binaries\\.teevee$',
                'regex' => '/^(?P<match0>[a-zA-Z0-9 ]+ \\()\\d+(?P<match1>\\/\\d+\\) - ?".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                'description' => '//Divers (12/42) -"Juste.Pour.Rire.2013.Gala.JF.Mercier.FRENCH.720p.HDTV.x264-QuebecRules.part11.rar" yEnc ::: //Par le chapeau (06/43) - "8C7D59F472E03.part04.rar" yEnc',
                    'ordinal' => 40,
                ),
                38 =>
                array (
                    'id' => 540,
                    'group_regex' => '^alt\\.binaries\\.teevee$',
                'regex' => '/^(Re: )?(?P<match0>[a-zA-Z0-9._-]+([{}A-Z_]+)?( -)? \\[)\\d+(\\/| of )\\d+\\]( -)? ".+?" yEnc$/',
                    'status' => 1,
                    'description' => '//House.Hunters.International.S05E502.720p.hdtv.x264 [01/27] - "House.Hunters.International.S05E502.720p.hdtv.x264.nfo" yEnc ::: //Criminal.Minds.S03E01.Doubt.PROPER.DVDRip.XviD-SAiNTS - [01/33] - "Criminal.Minds.S03E01.Doubt.PROPER.DVDRip.XviD-SAiNTS.par2" yEnc',
                    'ordinal' => 45,
                ),
                39 =>
                array (
                    'id' => 541,
                    'group_regex' => '^alt\\.binaries\\.teevee$',
                'regex' => '/^\\[ (?P<match0>.+?) \\] .+ \\(\\d+\\/(?P<match1>\\d+\\)) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                'description' => '//[ Anthony.Bourdain.Parts.Unknown.S01.480p.HDTV.x264-mSD ] MKV.h264 (03/17) - "Anthony.Bourdain.Parts.Unknown.S01E01.480p.HDTV.x264-mSD.mkv" yEnc',
                    'ordinal' => 50,
                ),
                40 =>
                array (
                    'id' => 542,
                    'group_regex' => '^alt\\.binaries\\.teevee$',
                'regex' => '/^(?P<match0>[a-zA-Z0-9 ]+)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2 |\\.[A-Za-z0-9]{2,4} )\\[\\d+(?P<match1>\\/\\d+\\] - yEnc)$/',
                    'status' => 1,
                    'description' => '//Silent Witness S15E02 Death has no dominion.par2 [01/44] - yEnc',
                    'ordinal' => 55,
                ),
                41 =>
                array (
                    'id' => 543,
                    'group_regex' => '^alt\\.binaries\\.teevee$',
                'regex' => '/^\\(bf1\\) \\[\\d+(?P<match0>\\/\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                'description' => '//(bf1) [03/31] - "The.Block.AU.Sky.High.S07E61.WS.PDTV.XviD.BF1.part01.sfv" yEnc (1/1)',
                    'ordinal' => 60,
                ),
                42 =>
                array (
                    'id' => 544,
                    'group_regex' => '^alt\\.binaries\\.teevee$',
                'regex' => '/^(?P<match0>\\[ [A-Za-z]+ \\] - (\\[\\d+\\/\\d+\\] - )?".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                    'description' => '//[ TVPower ] - "Dexter.S07E10.720p.HDTV.x264-NLsubs.par2" yEnc ::: //[ TVPower ] - [010/101] - "Desperate.Housewives.S08Disc2.NLsubs.part009.rar" yEnc',
                    'ordinal' => 65,
                ),
                43 =>
                array (
                    'id' => 545,
                    'group_regex' => '^alt\\.binaries\\.teevee$',
                'regex' => '/^(?P<match0>\\[.+?\\]-\\[.+?\\]-\\[)\\d+\\/\\d+\\] ".+?" - \\d+([.,]\\d+ [kKmMgG])?[bB] - yEnc$/',
                    'status' => 1,
                    'description' => '//[www.allyourbasearebelongtous.pw]-[WWE.Monday.Night.Raw.2013.07.22.HDTV.x264-IWStreams]-[03/69] "WWE.Monday.Night.Raw.2013.07.22.HDTV.x264-IWStreams.r00" - 1.58 GB - yEnc',
                    'ordinal' => 70,
                ),
                44 =>
                array (
                    'id' => 546,
                    'group_regex' => '^alt\\.binaries\\.teevee$',
                'regex' => '/^(?P<match0>\\(www\\..+?\\) .+? <Sponsored.+?> - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                'description' => '//(www.Thunder-News.org) >CD1< <Sponsored by Secretusenet> - "moovee-fastest.cda.par2" yEnc',
                    'ordinal' => 75,
                ),
                45 =>
                array (
                    'id' => 547,
                    'group_regex' => '^alt\\.binaries\\.teevee$',
                'regex' => '/(?P<match0>\\.info .+?Powered by .+?\\.com ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") .+? \\d+\\/\\d+ \\(\\d+[,.]\\d+ [mMkKgG][bB]\\) .+? yEnc$/i',
                    'status' => 1,
                'description' => '//<<<Pitbull>>> usenet-space-cowboys.info <<<Powered by https://secretusenet.com>< "S05E03 Pack die Badehose ein_usenet-space-cowbys.info.par2" >< 01/10 (411,16 MB) >< 3,48 kB > yEnc',
                    'ordinal' => 80,
                ),
                46 =>
                array (
                    'id' => 548,
                    'group_regex' => '^alt\\.binaries\\.teevee$',
                'regex' => '/^(?P<match0>[a-zA-Z0-9]+ .+? - S\\d+E\\d+ - .+? \\[)\\d+\\/\\d+\\] - ".+?\\..+?" yEnc$/',
                    'status' => 1,
                    'description' => '//Newport Harbor The Real Orange County - S01E01 - A Black & White Affair [01/11] - "Newport Harbor The Real Orange County - S01E01 - A Black & White Affair.mkv" yEnc',
                    'ordinal' => 85,
                ),
                47 =>
                array (
                    'id' => 549,
                    'group_regex' => '^alt\\.binaries\\.teevee$',
                'regex' => '/^"(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                    'description' => '//"Mad.Men.S06E11.HDTV.x264-2HD.par2" yEnc',
                    'ordinal' => 90,
                ),
                48 =>
                array (
                    'id' => 550,
                    'group_regex' => '^alt\\.binaries\\.teevee$',
                'regex' => '/^"(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[ _-]{0,3}\\[\\d+\\/(?P<match1>\\d+\\])[ _-]{0,3}yEnc$/i',
                    'status' => 1,
                    'description' => '//"Marvels.Agents.of.S.H.I.E.L.D.S01E07.HDTV.XviD-FUM.avi.nfo" [09/16] yEnc',
                    'ordinal' => 95,
                ),
                49 =>
                array (
                    'id' => 551,
                    'group_regex' => '^alt\\.binaries\\.teevee$',
                'regex' => '/^\\[\\d+\\]-\\[ (?P<match0>.+?) \\]- ".+?" yEnc$/i',
                    'status' => 1,
                    'description' => '//[185891]-[ Suits.S01E01.720p.BluRay.X264-REWARD ]- "Suits.S01E01.720p.BluRay.par2" yEnc',
                    'ordinal' => 100,
                ),
                50 =>
                array (
                    'id' => 552,
                    'group_regex' => '^alt\\.binaries\\.teevee$',
                'regex' => '/^\\.\\.[-_\\s]{0,3}\\[\\d+\\/(?P<match0>\\d+\\])[-_\\s]{0,3}"(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                    'description' => '//.. - [01/42] - "Under.the.Dome.S01E04.Outbreak.1080p.WEB-DL.DD5.1.H.264-NTb.par2" yEnc',
                    'ordinal' => 105,
                ),
                51 =>
                array (
                    'id' => 553,
                    'group_regex' => '^alt\\.binaries\\.town$',
                'regex' => '/town\\.ag.+?download all our files with.+?www\\..+?\\.info.+? \\[\\d+(?P<match0>\\/\\d+\\] - ".+?)(-sample)?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[.,]\\d+ [kKmMgG][bB] yEnc$/i',
                    'status' => 1,
                    'description' => '//<TOWN><www.town.ag > <download all our files with>>> www.ssl-news.info <<< > [05/87] - "Deep.Black.Ass.5.XXX.1080p.WEBRip.x264-TBP.part03.rar" - 7,87 GB yEnc',
                    'ordinal' => 5,
                ),
                52 =>
                array (
                    'id' => 554,
                    'group_regex' => '^alt\\.binaries\\.town$',
                'regex' => '/^"(?P<match0>.+)__www.realmom.info__.+" \\(\\d+\\/(?P<match1>\\d+\\)) \\d+[.,]\\d+ [kKmMgG][bB] yEnc$/',
                    'status' => 1,
                'description' => '//"Armored_Core_V_PS3-ANTiDOTE__www.realmom.info__.r00" (03/78) 3,32 GB yEnc',
                    'ordinal' => 10,
                ),
                53 =>
                array (
                    'id' => 555,
                    'group_regex' => '^alt\\.binaries\\.tun$',
                'regex' => '/^(?P<match0>\\[PRiVATE\\] [a-z0-9A-Z]+=+ \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                    'status' => 1,
                    'description' => '//[PRiVATE] UmVndWxhci5TaG93LlMwMkUyOC4xMDgwcC5CbHVSYXkueDI2NC1ERWlNT1M= [06/32] - "89769f0736162e1cb113655cb10e42ff.part02.rar" yEnc',
                    'ordinal' => 5,
                ),
                54 =>
                array (
                    'id' => 556,
                    'group_regex' => '^alt\\.binaries\\.tun$',
                'regex' => '/^\\[ nEwZ\\[NZB\\]\\.iNFO( \\])?[-_ ]{0,3}\\[ (?P<match0>.+?) \\][-_ ]{0,3}(File )?[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]]): "(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}").+?yEnc$/',
                    'status' => 1,
                    'description' => '//[ nEwZ[NZB].iNFO - [ Zed--The_Invitation-WEB-2010-WUS ] - File [12/13]: "08-zed--the_river.mp3" yEnc',
                    'ordinal' => 10,
                ),
                55 =>
                array (
                    'id' => 557,
                    'group_regex' => '^alt\\.binaries\\.tun$',
                'regex' => '/^nEwZ\\[NZB\\]\\.iNFO[-_ ]{0,3} (?P<match0>.+?) [-_ ]{0,3}(File )?[\\(\\[]\\d+\\/(?P<match1>\\d+[\\)\\]]): "(.+)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}")$/',
                    'status' => 1,
                'description' => '//nEwZ[NZB].iNFO - VA-Universal_Music_Sampler_07_February-PROMO-CDR-FLAC-2013-WRE - File [6/9]: "01-alesso-years_(hard_rock_sofa_remix).flac"',
                    'ordinal' => 15,
                ),
                56 =>
                array (
                    'id' => 558,
                    'group_regex' => '^alt\\.binaries\\.tv$',
                'regex' => '/^(?P<match0>[a-zA-Z0-9.-]+ \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                    'status' => 1,
                    'description' => '//Borgen.2x02.A.Bruxelles.Non.Ti.Sentono.Urlare.ITA.BDMux.x264-NovaRip [02/22] - "borgen.2x02.ita.bdmux.x264-novarip.par2" yEnc',
                    'ordinal' => 5,
                ),
                57 =>
                array (
                    'id' => 559,
                    'group_regex' => '^alt\\.binaries\\.tv$',
                'regex' => '/^\\(bf1\\) \\[\\d+(?P<match0>\\/\\d+\\] - ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                'description' => '//(bf1) [03/31] - "The.Block.AU.Sky.High.S07E56.WS.PDTV.XviD.BF1.part01.sfv" yEnc',
                    'ordinal' => 10,
                ),
                58 =>
                array (
                    'id' => 560,
                    'group_regex' => '^alt\\.binaries\\.tv$',
                'regex' => '/^\\[\\d+\\/(?P<match0>\\d+\\])[-_\\s]{0,3}(?P<match1>[\\w.\\() -]{8,}?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar)?(\\d{1,3}\\.rev|\\.vol\\d+\\+\\d+\\.par2|\\.[A-Za-z0-9]{2,4})[-_\\s]{0,3}yEnc$/',
                    'status' => 1,
                'description' => '//[014/144] - The Bible (2013) - S1E01 - In the Beginning AVC 480p.vol31+27.PAR2  yEnc',
                    'ordinal' => 15,
                ),
                59 =>
                array (
                    'id' => 561,
                    'group_regex' => '^alt\\.binaries\\.tv$',
                'regex' => '/^Saturday Morning Classic (?P<match0>[\\w. -]{8,}?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar)?(\\d{1,3}\\.rev|\\.vol\\d+\\+\\d+\\.par2|\\.[A-Za-z0-9]{2,4})[-_\\s]{0,3}yEnc$/',
                    'status' => 1,
                    'description' => '//Saturday Morning Classic Return-to-the-Planet-of-the-Apes-S01E03 - Lagoon of Peril.avi.001  yEnc',
                    'ordinal' => 20,
                ),
                60 =>
                array (
                    'id' => 562,
                    'group_regex' => '^alt\\.binaries\\.tvseries$',
                'regex' => '/^"(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")( - \\d+([.,]\\d+ [kKmMgG])?[bB])? - \\d+([.,]\\d+ [kKmMgG])?[bB] - yEnc$/i',
                    'status' => 1,
                    'description' => '//"Forbrydelsen.II.S01E03.2009.DVDRip.MULTi.DD5.1.x264.nzb" - 213.54 kB - yEnc ::: //"Futurama S07E01 The Bots And The Bees.vol26+23.PAR2" - 8.49 MB - 193.51 MB - yEnc',
                    'ordinal' => 5,
                ),
                61 =>
                array (
                    'id' => 563,
                    'group_regex' => '^alt\\.binaries\\.tvseries$',
                'regex' => '/^"(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\[\\d+\\/(?P<match1>\\d+\\]) - yEnc$/i',
                    'status' => 1,
                    'description' => '//"Rijdende.Rechter.-.19x01.-.Huisbiggen.1080p.MKV-BNABOYZ.part38.rar" - [40/56] - yEnc',
                    'ordinal' => 10,
                ),
                62 =>
                array (
                    'id' => 564,
                    'group_regex' => '^alt\\.binaries\\.tvseries$',
                'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\) ".+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[.,]\\d+ [kKmMgG][bB] - yEnc$/i',
                    'status' => 1,
                'description' => '//(003/104) "blackcave1001.part002.rar" - 4,83 GB - yEnc',
                    'ordinal' => 15,
                ),
                63 =>
                array (
                    'id' => 565,
                    'group_regex' => '^alt\\.binaries\\.tvseries$',
                'regex' => '/^[a-zA-Z0-9 -_\\.]+ \\[\\d+\\/(?P<match0>\\d+\\]) - "(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                    'description' => '//X-Men Evolution - 2000 -  [01/20] - "X-Men Evolution - 3x03 - Mainstream.par2" yEnc',
                    'ordinal' => 20,
                ),
                64 =>
                array (
                    'id' => 566,
                    'group_regex' => '^alt\\.binaries\\.tvseries$',
                'regex' => '/^(?P<match0>[a-zA-Z0-9 -_\\.]+) (RETRY)?[-_ ]{0,3}".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") \\d+(?P<match1>\\/\\d+)( {0,2}yEnc)?$/i',
                    'status' => 1,
                    'description' => '//\'X-Files\' Season 1 XviD RETRY  "Files101.par2" 004/387 ::: //\'X-Files\' Season 5 XviD "Files502.par2" 018/321 yEnc ::: //\'X-Files\' Season 2 XviD  "Files223.part2.rar" 356/401  yEnc',
                    'ordinal' => 25,
                ),
                65 =>
                array (
                    'id' => 567,
                    'group_regex' => '^alt\\.binaries\\.tvseries$',
                'regex' => '/^"(?P<match0>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                    'description' => '//"the.tudors.s03e03.nfo" yEnc',
                    'ordinal' => 30,
                ),
                66 =>
                array (
                    'id' => 568,
                    'group_regex' => '^alt\\.binaries\\.tvseries$',
                'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\)) "((BBC|ITV) )?(?P<match1>.+?)(\\.part\\d+)?(\\.(par2|(vol.+?))"|\\.[a-z0-9]{3}"|") - \\d.+? - (\\d.+? -)? yEnc$/',
                    'status' => 1,
                'description' => '//(08/25) "Wild Russia 5 of 6 The Secret Forest 2009.part06.rar" - 47.68 MB - 771.18 MB - yEnc ::: //(01/24) "ITV Wild Britain With Ray Mears 1 of 6 Deciduous Forest 2011.nfo" - 4.34 kB - 770.97 MB - yEnc ::: //(24/24) "BBC Great British Garden Revival 03 of 10 Cottage Gardens And House Plants 2013.vol27+22.PAR2" - 48.39 MB - 808.88 MB - yEnc',
                    'ordinal' => 35,
                ),
                67 =>
                array (
                    'id' => 569,
                    'group_regex' => '^alt\\.binaries\\.tvseries$',
                'regex' => '/^(?P<match0>[a-zA-Z0-9 -_\\.]+) \\(\\d+(?P<match1>\\/\\d+\\)) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                'description' => '//Chuck - Season2 (015/164) - "2x04.par2" yEnc',
                    'ordinal' => 40,
                ),
                68 =>
                array (
                    'id' => 570,
                    'group_regex' => '^alt\\.binaries\\.tvseries$',
                'regex' => '/^(?P<match0>[a-zA-Z0-9 -_\\.]+) - \\[\\d+(?P<match1>\\/\\d+\\]) - ".+?([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}\\d+([.,]\\d+)? [kKmMgG][bB][-_\\s]{0,3}[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                    'description' => '//FIRST.WAVE.NTSC.DVD.DD2.0 - [121/512] - "FIRST_WAVE_SEASON_1_DVD2.r26" - 44,33 GB - yEnc',
                    'ordinal' => 45,
                ),
                69 =>
                array (
                    'id' => 571,
                    'group_regex' => '^alt\\.binaries\\.tvseries$',
                'regex' => '/^\\(\\d+(?P<match0>\\/\\d+\\)) "(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}\\d+([.,]\\d+)? [kKmMgG][bB][-_\\s]{0,3}[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                'description' => '//(03/19) "Damages S04E02 FR.avi" - 5,49 GB yEnc',
                    'ordinal' => 50,
                ),
                70 =>
                array (
                    'id' => 572,
                    'group_regex' => '^alt\\.binaries\\.u-4all$',
                'regex' => '/\\[ usenet-4all\\.info - powered by ssl\\.news -\\][-_\\s]{0,3}\\[\\d+([.,]\\d+)? [kKmMgG][bB]\\][-_\\s]{0,3}\\[\\d+\\/(?P<match0>\\d+)\\][-_\\s]{0,3}"(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|")[-_\\s]{0,3}yEnc$/ui',
                    'status' => 1,
                'description' => '//-4y (PW)   [ usenet-4all.info - powered by ssl.news -] [1,44 GB] [08/14] "71cc4edc6R08eb7.vol00+01.PAR2" yEnc',
                    'ordinal' => 55,
                ),
                71 =>
                array (
                    'id' => 573,
                    'group_regex' => '^alt\\.binaries\\.warez$',
                'regex' => '/.*[\\(\\[]\\d+\\/(?P<match0>\\d+[\\)\\]][-_ ]{0,3}("|#34;).+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4})("|#34;)(.+?)yEnc$/i',
                    'status' => 1,
                    'description' => '//-Panzer.Command.Kharkov-SKIDROW - [1/7] - "-Panzer.Command.Kharkov-SKIDROW.rar" yEnc ::: //-AssMasterpiece.12.07.09.Alexis.Monroe.XXX.1080p.x264-SEXORS - [1/7] - #34;-AssMasterpiece.12.07.09.Alexis.Monroe.XXX.1080p.x264-SEXORS.rar#34; yEnc',
                    'ordinal' => 5,
                ),
                72 =>
                array (
                    'id' => 574,
                    'group_regex' => '^alt\\.binaries\\.warez$',
                'regex' => '/.*"(?P<match0>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}")(?P<match1>.+?)yEnc$/i',
                    'status' => 1,
                    'description' => '//- "JH2U0H5FIK8TO7YK3Q.part12.rar" yEnc',
                    'ordinal' => 10,
                ),
                73 =>
                array (
                    'id' => 575,
                    'group_regex' => '^alt\\.binaries\\.warez$',
                'regex' => '/^\\( (?P<match0>.+?) \\) - yEnc$/',
                    'status' => 1,
                'description' => '//( XS Video Converter Ultimate 7.7.0 Build 20121226 ) - yEnc',
                    'ordinal' => 15,
                ),
                74 =>
                array (
                    'id' => 576,
                    'group_regex' => '^alt\\.binaries\\.warez\\.0-day$',
                'regex' => '/.*[\\(\\[]\\d+\\/(?P<match0>\\d+[\\)\\]][-_ ]{0,3}("|#34;).+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4})("|#34;)(.+?)yEnc$/i',
                    'status' => 1,
                    'description' => '//-Panzer.Command.Kharkov-SKIDROW - [1/7] - "-Panzer.Command.Kharkov-SKIDROW.rar" yEnc ::: //-AssMasterpiece.12.07.09.Alexis.Monroe.XXX.1080p.x264-SEXORS - [1/7] - #34;-AssMasterpiece.12.07.09.Alexis.Monroe.XXX.1080p.x264-SEXORS.rar#34; yEnc',
                    'ordinal' => 5,
                ),
                75 =>
                array (
                    'id' => 577,
                    'group_regex' => '^alt\\.binaries\\.warez\\.0-day$',
                'regex' => '/.*"(?P<match0>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}")(?P<match1>.+?)yEnc$/i',
                    'status' => 1,
                    'description' => '//- "JH2U0H5FIK8TO7YK3Q.part12.rar" yEnc',
                    'ordinal' => 10,
                ),
                76 =>
                array (
                    'id' => 578,
                    'group_regex' => '^alt\\.binaries\\.warez\\.0-day$',
                'regex' => '/^\\( (?P<match0>.+?) \\) - yEnc$/',
                    'status' => 1,
                'description' => '//( XS Video Converter Ultimate 7.7.0 Build 20121226 ) - yEnc',
                    'ordinal' => 15,
                ),
                77 =>
                array (
                    'id' => 579,
                    'group_regex' => '^alt\\.binaries\\.warez\\.0-day$',
                'regex' => '/^(?P<match0>[a-zA-Z].+) - \\[\\d+\\/(?P<match1>\\d+\\]) - ".+?" yEnc$/',
                    'status' => 1,
                    'description' => '//BabysitterMovies.13.03.11.Babysitter.Jocelyn.Pink.XXX.HR.WMV-VSEX - [7/7] - "BabysitterMovies.13.03.11.Babysitter.Jocelyn.Pink.XXX.HR.WMV-VSEX.rar.vol15+5.par2" yEnc',
                    'ordinal' => 20,
                ),
                78 =>
                array (
                    'id' => 580,
                    'group_regex' => '^alt\\.binaries\\.worms$',
                'regex' => '/^(?P<match0>\\[U4A]) (?P<match1>.+?)\\[\\d+(?P<match2>\\/\\d+\\]) - ".+?" yEnc$/',
                    'status' => 1,
                    'description' => '//[U4A] 2 Dudes and a Dream 2009 BRRip XvidHD 720p-NPW[01/36] - "2 Dudes and a Dream 2009 BRRip XvidHD 720p-NPW-Sample.avi" yEnc',
                    'ordinal' => 5,
                ),
                79 =>
                array (
                    'id' => 581,
                    'group_regex' => '^alt\\.binaries\\.worms$',
                'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\)) ("|#34;)(?P<match1>.+)(\\.[vol|part].+)?\\.(par2|nfo|rar|nzb)("|#34;) - \\d+[.,]\\d+ [kKmMgG][bB] - yEnc$/i',
                    'status' => 1,
                'description' => '//(12/57) "Fright.Night.2.New.Blood.2013.UNRATED.BluRay.810p.DTS.x264-PRoDJi.nfo" - 4,81 GB - yEnc ::: //(14/20) "Jack.the.Giant.Slayer.2013.AC3.192Kbps.23fps.2ch.TR.Audio.BluRay-Demuxed.by.par2" - 173,15 MB - yEnc',
                    'ordinal' => 10,
                ),
                80 =>
                array (
                    'id' => 582,
                    'group_regex' => '^alt\\.binaries\\.x264$',
                'regex' => '/^"(?P<match0>.+?)(\\.part\\d*|\\.rar)?(\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}") \\(\\d+\\/(?P<match1>\\d+\\)) yEnc$/i',
                    'status' => 1,
                'description' => '//"Batman-8 TDKR-Pittis AVCHD-ADD.English.dtsHDma.part013.rar" (042/197) yEnc',
                    'ordinal' => 5,
                ),
                81 =>
                array (
                    'id' => 583,
                    'group_regex' => '^alt\\.binaries\\.x264$',
                'regex' => '/^\\(\\d+\\/(?P<match0>\\d+\\)) "(?P<match1>.+?)([-_](proof|sample|thumbs?))*(\\.part\\d*(\\.rar)?|\\.rar|\\.7z)?(\\d{1,3}\\.rev"|\\.vol\\d+\\+\\d+\\.par2"|\\.[A-Za-z0-9]{2,4}"|") - \\d+[,.]\\d+ [mMkKgG][bB]( -)? yEnc$/i',
                    'status' => 1,
                'description' => '//(001/108) "Wizards.of.Waverly.Place.720p.S04E01.by.sugarr.par2" - 5,15 GB - yEnc',
                    'ordinal' => 10,
                ),
                82 =>
                array (
                    'id' => 584,
                    'group_regex' => '^dk\\.binaer\\.tv$',
                'regex' => '/^(?P<match0>[a-zA-Z0-9].+? - \\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                    'status' => 1,
                    'description' => '//Store.Boligdroemme.S02E06.DANiS H.HDTV.x264-TVBYEN - [01/28] - "store.boligdroemme.s02e06.danis h.hdtv.x264-tvbyen.nfo" yEnc',
                    'ordinal' => 5,
                ),
                83 =>
                array (
                    'id' => 585,
                    'group_regex' => '^alt\\.binaries\\.fz$',
                'regex' => '#^(?P<match0>Uploader\\.Presents-.+?)\\s+\\[\\d{1,3}(?P<match1>/\\d{1,3}\\]\\s*").+?"\\s+yEnc$#i',
                    'status' => 1,
                    'description' => 'Uploader.Presents-Black.Sails.S02E02.Die.schwarze.Flagge.GERMAN.DUBBED.BLURAYRiP.x264-SOF [00/23]"sof-black-sails-s02e02.nzb" yEnc',
                    'ordinal' => 10,
                ),
                84 =>
                array (
                    'id' => 586,
                'group_regex' => '^alt\\.binaries\\.sounds\\.(flac|lossless)$',
                'regex' => '/^.+dream-of-usenet.+[-_ ]{0,3}\\[\\d+\\/(?P<match0>\\d+\\])[-_ ]{0,3}("|#34;)(?P<match1>.+?)(\\.part\\d*|\\.rar)?(\\.vol.+ (\\d+\\/\\d+) "|\\.[A-Za-z0-9]{2,4}("|#34;))[-_ ]{0,3}yEnc$/i',
                    'status' => 1,
                'description' => '//(dream-of-usenet.info) - [01/21] - "A_Perfect_Circle-aMOTION-CD-FLAC-2004-SCORN.nfo" yEnc',
                    'ordinal' => 5,
                ),
                85 =>
                array (
                    'id' => 587,
                    'group_regex' => '^alt\\.binaries\\.sounds\\.flac$',
                'regex' => '/^.+www\\.EliteNZB\\.net.+[-_ ]{0,3}\\[\\d+\\/(?P<match0>\\d+\\])[-_ ]{0,3}("|#34;)(?P<match1>.+?)(\\.part\\d*|\\.rar)?(\\.vol.+ (\\d+\\/\\d+) "|\\.[A-Za-z0-9]{2,4}("|#34;))[-_ ]{0,3}yEnc$/i',
                    'status' => 1,
                    'description' => '//The Elite Team Presents www.EliteNZB.net, Powered by 4UX.NL, Only The Best 4 You!!!! [01/19] - "Habariyaasubuhi_12352_TvPYrS1128.par2" yEnc',
                    'ordinal' => 15,
                ),
                86 =>
                array (
                    'id' => 588,
                    'group_regex' => '^alt\\.binaries\\.sounds\\.flac$',
                'regex' => '/^("|#34;)(?P<match1>.+?)(\\.part\\d*|\\.rar)?(\\.vol.+ \\(\\d+\\/\\d+\\) "|\\.[A-Za-z0-9]{2,4}("|#34;))[-_ ]{0,3}\\[\\d+\\/(?P<match0>\\d+\\]).+www\\.EliteNZB\\.net.+[-_ ]{0,3}yEnc$/i',
                    'status' => 1,
                    'description' => '//"Jinsi_12187_v807.par2" [01/13] - The Elite Team Presents www.EliteNZB.net, Powered by 4UX.NL, Only The Best 4 You!!!! yEnc',
                    'ordinal' => 20,
                ),
                87 =>
                array (
                    'id' => 589,
                'group_regex' => '^alt\\.binaries\\.mp3(\\.full_albums)?$',
                'regex' => '/^JN Dutplanet.+[-_ ]{0,3}\\[\\d+\\/(?P<match0>\\d+\\])[-_ ]{0,3}("|#34;)(?P<match1>.+?)(\\.part\\d*|\\.rar)?(\\.vol.+ (\\d+\\/\\d+) "|\\.[A-Za-z0-9]{2,4}("|#34;))[-_ ]{0,3}yEnc$/i',
                    'status' => 1,
                    'description' => '//JN Dutplanet.net - [02/16] - "JN Dutplanet.net Foreigner - I Want To Know What Love Is - The Ballads [2014]FLAC.part1.rar" yEnc',
                    'ordinal' => 5,
                ),
                88 =>
                array (
                    'id' => 590,
                'group_regex' => '(audiobooks|abooks)',
                'regex' => '#^(?P<match0>.{8,}? )[\\[)]?\\d+(?P<match1>(?:/| of )\\d+[\\[)]?(?:[0-9\\WBKMG]+)?").+?"(?:[0-9\\WBKMG]+)? yEnc$#i',
                    'status' => 1,
                'description' => 'As requested Diana Gabaldon 1of 3 parts - [025/356] - "Diana Gabaldon - (Outlander 06) A Breath Of Snow And Ashes - D01.07-18.mp3" yEnc',
                    'ordinal' => 80,
                ),
                89 =>
                array (
                    'id' => 591,
                'group_regex' => '(audiobooks|abooks)',
                'regex' => '#^(?P<match0>.{8,}? ").+?" [\\[)]?\\d+(?P<match1>/\\d+[\\[)]? yEnc)$#i',
                    'status' => 1,
                'description' => 'Dragonlance Second Generation - Dragons of Summer Flame (NMR 32 kbps)  "Dragonlance Second Generation - Dragons of Summer Flame.nzb" 000/141 yEnc',
                    'ordinal' => 85,
                ),
                90 =>
                array (
                    'id' => 592,
                    'group_regex' => '^alt\\.binaries\\.multimedia\\.korean$',
                'regex' => '/^(?P<match0>\\[KoreanTV\\]s.+?\\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                    'status' => 1,
                    'description' => '[KoreanTV] The.Village.Achiaras.Secret.E08.151029.HDTV.XviD-WITH [2/18] - "마을.아치아라의.비밀.E08.151029.HDTV.XviD-WITH.part01.rar" yEnc',
                    'ordinal' => 5,
                ),
                91 =>
                array (
                    'id' => 593,
                    'group_regex' => '^korea\\.binaries\\.tv$',
                'regex' => '/^(?P<match0>\\[KoreanTV\\]s.+?\\[)\\d+\\/\\d+\\] - ".+?" yEnc$/',
                    'status' => 1,
                    'description' => '[KoreanTV] The.Village.Achiaras.Secret.E08.151029.HDTV.XviD-WITH [2/18] - "마을.아치아라의.비밀.E08.151029.HDTV.XviD-WITH.part01.rar" yEnc',
                    'ordinal' => 5,
                ),
                92 =>
                array (
                    'id' => 594,
                    'group_regex' => '^korea\\.binaries\\.music\\.videos$',
                'regex' => '/^(?P<match0>\\[KoreanMusic\\] .+) \\[\\d+\\/\\d+\\] - ".+?" yEnc$/',
                    'status' => 1,
                    'description' => '[KoreanMusic] 151015.TWTV.MTV.Idols.of.Asia.Lovelyz [2/45] - "151015.TWTV.MTV.Idols.of.Asia.Lovelyz.part01.rar" yEnc',
                    'ordinal' => 5,
                ),
                93 =>
                array (
                    'id' => 595,
                    'group_regex' => '^korea\\.binaries\\.movies$',
                'regex' => '/^(?P<match0>\\[KoreanMovies\\] .+) \\[\\d+\\/\\d+\\] - ".+?" yEnc$/',
                    'status' => 1,
                    'description' => '[KoreanMovies] Gangnam.Blues.2015.720p.BluRay.x264-WiKi [2/125] - "Gangnam.Blues.2015.720p.BluRay.x264-WiKi.part001.rar" yEnc',
                    'ordinal' => 5,
                ),
                94 =>
                array (
                    'id' => 596,
                    'group_regex' => '^korea\\.binaries\\.tv$',
                'regex' => '/^(?P<match0>area-11) "(?P<match1>.+?)\\.(vol\\d+\\+\\d+\\.par2|part\\d+\\.rar|par2|nzb)" \\[\\d+\\/\\d+\\] yEnc$/i',
                    'status' => 1,
                    'description' => 'area-11 "Glamorous.Temptation.E01.720p.HDTV.x264-AREA11.nzb" [00/56] yEnc',
                    'ordinal' => 10,
                ),
                95 =>
                array (
                    'id' => 597,
                    'group_regex' => '^alt\\.binaries\\.multimedia\\.korean$',
                'regex' => '/^(?P<match0>.+?(MP3 320K|FLAC)\\[)\\d+\\/\\d+\\] - ".+" yEnc$/',
                    'status' => 1,
                    'description' => 'Davichi - Amaranth Repackage MP3 320K[01/21] - ".par2" yEnc',
                    'ordinal' => 10,
                ),
                96 =>
                array (
                    'id' => 598,
                    'group_regex' => '^alt\\.binaries\\.e-book\\.technical$',
                'regex' => '/^(?P<match0>(New )?tech eBooks -=?\\[?\\s?[\\w\\.-]+\\s?\\]?=?- )".+?" yEnc$/i',
                    'status' => 1,
                    'description' => 'New tech eBooks -[ Springer.Toxic.Trauma.A.Basic.Clinical.Guide.2014.RETAIL.EBOOK-METHLAB ]- "ml-0435a.zip" yEnc',
                    'ordinal' => 5,
                ),
                97 =>
                array (
                    'id' => 599,
                'group_regex' => '^alt\\.binaries\\.(cores|ath)$',
                'regex' => '/^(?P<match0>\\[(SERIES|MOVIES)\\]-\\[ www\\.vip-lounge\\.me \\]) \\[\\d+\\/\\d+\\] - "(?P<match1>.+?)\\.(par2|nfo|rar|part\\d+\\.rar|vol\\d+\\+\\d+\\.par2)" - \\d+\\d+ [MG]B yEnc$/i',
                    'status' => 1,
                    'description' => '55',
                    'ordinal' => 0,
                ),
                98 =>
                array (
                    'id' => 600,
                    'group_regex' => '^alt\\.binaries\\.cores$',
                'regex' => '/^(?P<match0>.+?) - \\[\\d+\\/\\d+\\] - ".+?" yEnc$/',
                    'status' => 1,
                    'description' => 'Gracepoint S01E04 Episode Four 1080p WEB-DL DD51 H 264 CtrlHD - [52/52] - "Gracepoint S01E04 Episode Four 1080p WEB-DL DD51 H 264 CtrlHD.vol511+021.par2" yEnc',
                    'ordinal' => 80,
                ),
                99 =>
                array (
                    'id' => 601,
                    'group_regex' => '^alt\\.binaries\\.howard-stern$',
                'regex' => '/^(?P<match0>.+?) \\[\\d+\\/\\d+\\] "(?P<match1>.+?)\\.(mp3|nzb).*?" yEnc$/',
                    'status' => 1,
                    'description' => 'Artie Lange ArtieQuitter Podcast [2/9] "ArtieQuiterPodcast_2015-11-05_161_CF_128k.mp3.par2" yEnc',
                    'ordinal' => 5,
                ),
                100 =>
                array (
                    'id' => 602,
                    'group_regex' => '^alt\\.binaries\\.howard-stern$',
                'regex' => '/^(?P<match0>.+?) - File \\d+ of \\d+ - yEnc "(?P<match1>.+?).mp3" \\d+ bytes$/',
                    'status' => 1,
                'description' => 'Howard Stern 11.04.2015 CF 32K 57.7MB + WUS - File 1 of 1 - yEnc "Howard Stern 11.04.15 (Alanis Morissette Visits).mp3" 60596352 bytes',
                    'ordinal' => 10,
                ),
                101 =>
                array (
                    'id' => 603,
                    'group_regex' => '^alt\\.binaries\\.howard-stern$',
                'regex' => '/^(?P<match0>.+?) \\d (?P<match1>\\d+kbps) - \\[\\d+\\/\\d+\\] - "(?P<match2>.+?)Part_\\d+\\.(mp3|nzb).*?" yEnc$/',
                    'status' => 1,
                    'description' => 'Howard Stern Show Oct 19 2015 Mon Hour 6 96kbps - [1/1] - "Stern-2015_10_19-96k-Part_06.mp3" yEnc',
                    'ordinal' => 15,
                ),
            ));


    }
}