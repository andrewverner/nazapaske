<?php

class UController extends Controller
{

    public function actionTire()
    {
        $rows = explode('
',"BFGoodrich;BFGoodrich Activan;185;75;16C;104/102R;Summer;Light;;4;6,293
BFGoodrich;BFGoodrich Activan;195;70;15C;104/102R;Summer;Light;;4;5,419
BFGoodrich;BFGoodrich All Terrain T/A KO;10.5;31;15;109S;Demiseason;Light;;4;8,239
BFGoodrich;BFGoodrich All Terrain T/A KO;305;65;17;121/118R;Demiseason;Light;;4;15,274
BFGoodrich;BFGoodrich All Terrain T/A KO2;10.5;31;15;109S;Demiseason;Light;;4;10,547
BFGoodrich;BFGoodrich All Terrain T/A KO2;12.5;35;15;113Q;Demiseason;Light;;4;14,062
BFGoodrich;BFGoodrich All Terrain T/A KO2;225;75;16C;115/112S;Demiseason;Light;;4;9,164
BFGoodrich;BFGoodrich All Terrain T/A KO2;225;65;17C;107/103S;Demiseason;Light;;4;12,492
BFGoodrich;BFGoodrich All Terrain T/A KO2;235;75;15C;104/101S;Demiseason;Light;;4;9,297
BFGoodrich;BFGoodrich All Terrain T/A KO2;235;70;16C;104/101S;Demiseason;Light;;4;9,724
BFGoodrich;BFGoodrich All Terrain T/A KO2;235;85;16C;120/116S;Demiseason;Light;;4;12,054
BFGoodrich;BFGoodrich All Terrain T/A KO2;245;70;16;113/110S;Demiseason;Light;;4;9,829
BFGoodrich;BFGoodrich All Terrain T/A KO2;245;75;16C;120/116S;Demiseason;Light;;4;11,409
BFGoodrich;BFGoodrich All Terrain T/A KO2;245;65;17C;111/108S;Demiseason;Light;;4;11,909
BFGoodrich;BFGoodrich All Terrain T/A KO2;245;70;17;119/116S;Demiseason;Light;;4;12,044
BFGoodrich;BFGoodrich All Terrain T/A KO2;265;70;16C;121/118S;Demiseason;Light;;4;10,817
BFGoodrich;BFGoodrich All Terrain T/A KO2;265;70;17C;121/118S;Demiseason;Light;;4;12,887
BFGoodrich;BFGoodrich All Terrain T/A KO2;265;60;18C;119/116S;Demiseason;Light;;4;12,616
BFGoodrich;BFGoodrich All Terrain T/A KO2;275;70;16C;119/116S;Demiseason;Light;;4;11,847
BFGoodrich;BFGoodrich All Terrain T/A KO2;275;65;17C;121/118S;Demiseason;Light;;4;11,783
BFGoodrich;BFGoodrich All Terrain T/A KO2;285;75;16C;116/113R;Demiseason;Light;;4;13,459
BFGoodrich;BFGoodrich All Terrain T/A KO2;285;70;17C;121/118R;Demiseason;Light;;4;14,842
BFGoodrich;BFGoodrich G-Force Profiler;235;45;17;97Y;Summer;Light;;4;6,294
BFGoodrich;BFGoodrich G-Grip;185;65;14;86T;Summer;Light;;4;2,525
BFGoodrich;BFGoodrich G-Grip;185;65;15;88T;Summer;Light;;4;2,319
BFGoodrich;BFGoodrich G-Grip;195;50;15;82H;Summer;Light;;4;3,234
BFGoodrich;BFGoodrich G-Grip;195;60;15;88H;Summer;Light;;4;3,262
BFGoodrich;BFGoodrich G-Grip;205;60;16;92H;Summer;Light;;4;4,088
BFGoodrich;BFGoodrich G-Grip;215;60;16;95H;Summer;Light;;4;4,517
BFGoodrich;BFGoodrich G-Grip;215;55;16;97H;Summer;Light;;4;5,314
BFGoodrich;BFGoodrich G-Grip;215;60;16;99V;Summer;Light;;4;5,180
BFGoodrich;BFGoodrich Mud Terrain T/A KM2;9.5;30;15;104Q;Demiseason;Light;;4;10,016
BFGoodrich;BFGoodrich Mud Terrain T/A KM2;11.5;32;15;113Q;Demiseason;Light;;4;12,751
BFGoodrich;BFGoodrich Mud Terrain T/A KM2;12.5;33;15C;108Q;Demiseason;Light;;4;13,094
BFGoodrich;BFGoodrich Mud Terrain T/A KM2;12.5;35;15;113Q;Demiseason;Light;;4;14,780
BFGoodrich;BFGoodrich Mud Terrain T/A KM2;235;75;15C;104/101Q;Demiseason;Light;;4;9,756
BFGoodrich;BFGoodrich Mud Terrain T/A KM2;235;85;16;120/116Q;Demiseason;Light;;4;12,658
BFGoodrich;BFGoodrich Mud Terrain T/A KM2;265;70;17;121/118Q;Demiseason;Light;;4;13,531
BFGoodrich;BFGoodrich Touring;175;70;13;82T;Summer;Light;;4;2,243
BFGoodrich;BFGoodrich Activan Winter;205;65;16C;107/105T;Winter;Light;;4;6,552
BFGoodrich;BFGoodrich G-Force Stud;185;65;14;86Q;Winter;Light;Yes;4;2,693
BFGoodrich;BFGoodrich G-Force Stud;195;65;15;95Q;Winter;Light;Yes;4;3,097
BFGoodrich;BFGoodrich G-Force Winter;175;70;14;84T;Winter;Light;;4;2,504
BFGoodrich;BFGoodrich G-Force Winter;175;65;15;84T;Winter;Light;;4;3,270
BFGoodrich;BFGoodrich G-Force Winter;185;60;14;82T;Winter;Light;;4;2,726
BFGoodrich;BFGoodrich G-Force Winter;185;70;14;88T;Winter;Light;;4;2,852
BFGoodrich;BFGoodrich G-Force Winter;215;50;17;95H;Winter;Light;;4;6,303
BFGoodrich;BFGoodrich G-Force Winter;225;55;17;101H;Winter;Light;;4;6,235
BFGoodrich;BFGoodrich G-Force Winter;225;45;17;94V;Winter;Light;;4;5,837
BFGoodrich;BFGoodrich Winter G;155;70;13;75T;Winter;Light;;4;2,329
BFGoodrich;BFGoodrich Winter Slalom Ksi;205;70;15;96S;Winter;Light;;4;5,008
BFGoodrich;BFGoodrich Winter Slalom Ksi;225;60;17;99S;Winter;Light;;4;8,435
BFGoodrich;BFGoodrich Winter Slalom Ksi;235;65;17;108S;Winter;Light;;4;6,648
BFGoodrich;BFGoodrich Winter Slalom Ksi;245;75;16;109S;Winter;Light;;4;7,942
BFGoodrich;BFGoodrich Winter Slalom Ksi;265;70;17;115S;Winter;Light;;4;8,537
Bridgestone;Bridgestone Dueler H/P Sport;255;50;20;109V;Summer;Light;;4;13,311
Bridgestone;Bridgestone Ecopia EP150;185;65;14;86H;Summer;Light;;4;2,804
Bridgestone;Bridgestone Blizzak DM-V1;235;70;16;106R;Winter;Light;;4;7,143
Bridgestone;Bridgestone Blizzak DM-V1;275;60;18;113R;Winter;Light;;4;9,535
Bridgestone;Bridgestone Blizzak DM-V2;235;70;16;106S;Winter;Light;;4;7,937
Bridgestone;Bridgestone Blizzak Spike-01;175;65;14;82T;Winter;Light;Yes;4;3,130
Bridgestone;Bridgestone Blizzak Spike-01;185;60;14;82T;Winter;Light;Yes;4;3,685
Bridgestone;Bridgestone Blizzak Spike-01;185;65;14;86T;Winter;Light;Yes;4;3,431
Bridgestone;Bridgestone Blizzak Spike-01;185;65;15;88T;Winter;Light;Yes;4;3,522
Bridgestone;Bridgestone Blizzak Spike-01;185;55;16;83T;Winter;Light;Yes;4;4,525
Bridgestone;Bridgestone Blizzak Spike-01;195;50;15;82T;Winter;Light;Yes;4;5,246
Bridgestone;Bridgestone Blizzak Spike-01;195;65;15;91T;Winter;Light;Yes;4;3,229
Bridgestone;Bridgestone Blizzak Spike-01;205;55;16;91T;Winter;Light;Yes;4;5,031
Bridgestone;Bridgestone Blizzak Spike-01;205;60;16;92T;Winter;Light;Yes;4;5,269
Bridgestone;Bridgestone Blizzak Spike-01;215;70;16;100T;Winter;Light;Yes;4;6,468
Bridgestone;Bridgestone Blizzak Spike-01;215;65;16;98T;Winter;Light;Yes;4;5,161
Bridgestone;Bridgestone Blizzak Spike-01;215;55;17;98T;Winter;Light;Yes;4;8,227
Bridgestone;Bridgestone Blizzak Spike-01;225;70;16;107T;Winter;Light;Yes;4;6,927
Bridgestone;Bridgestone Blizzak Spike-01;225;60;17;103T;Winter;Light;Yes;4;7,979
Bridgestone;Bridgestone Blizzak Spike-01;225;45;17;91T;Winter;Light;Yes;4;8,623
Bridgestone;Bridgestone Blizzak Spike-01;225;60;18;104T;Winter;Light;Yes;4;9,156
Bridgestone;Bridgestone Blizzak Spike-01;235;60;18;107T;Winter;Light;Yes;4;8,529
Bridgestone;Bridgestone Blizzak Spike-01;255;45;18;103T;Winter;Light;Yes;4;11,488
Bridgestone;Bridgestone Blizzak Spike-01;275;65;17;119T;Winter;Light;Yes;4;8,528
Bridgestone;Bridgestone Blizzak VRX;215;65;16;98S;Winter;Light;;4;5,067
Bridgestone;Bridgestone Ice Cruiser 7000;185;60;14;82T;Winter;Light;Yes;4;3,137
Bridgestone;Bridgestone Ice Cruiser 7000;205;55;16;91T;Winter;Light;Yes;4;4,554
Bridgestone;Bridgestone Ice Cruiser 7000;215;70;16;100T;Winter;Light;Yes;4;6,174
Bridgestone;Bridgestone Ice Cruiser 7000;215;60;16;95T;Winter;Light;Yes;4;5,020
Bridgestone;Bridgestone Ice Cruiser 7000;225;70;16;107T;Winter;Light;Yes;4;6,002
Bridgestone;Bridgestone Ice Cruiser 7000;235;60;16;100T;Winter;Light;Yes;4;5,312
Bridgestone;Bridgestone Ice Cruiser 7000;275;40;20;106T;Winter;Light;Yes;4;9,379
Continental;Continental ContiCrossContact UHP;255;45;19;100V;Summer;Light;;4;15,424
Continental;Continental ContiPremiumContact 5;175;65;14;82T;Summer;Light;;4;2,731
Continental;Continental ContiPremiumContact 5;195;50;15;82H;Summer;Light;;4;3,383
Continental;Continental ContiSportContact 5 SUV;275;40;20;106Y;Summer;Light;;4;16,634
Continental;Continental ContiCrossContact Winter;255;60;18;112H;Winter;Light;;4;9,704
Continental;Continental ContiIceContact;185;65;15;92T;Winter;Light;Yes;4;4,287
Continental;Continental ContiIceContact;195;65;15;95T;Winter;Light;Yes;4;3,984
Continental;Continental ContiIceContact;205;55;16;94T;Winter;Light;Yes;4;6,675
Continental;Continental ContiIceContact 4x4;215;70;16;100T;Winter;Light;Yes;4;8,727
Continental;Continental ContiIceContact 4x4;235;65;17;108T;Winter;Light;Yes;4;8,746
Continental;Continental ContiVikingContact 6;185;65;15;92T;Winter;Light;;4;3,854
Continental;Continental ContiVikingContact 6;205;50;17;93T;Winter;Light;;4;8,212
Continental;Continental IceContact 2;205;55;16;94T;Winter;Light;Yes;4;7,266
Continental;Continental IceContact 2 SUV;225;60;17;103T;Winter;Light;Yes;4;10,843
Continental;Continental IceContact 2 SUV;225;65;17;106T;Winter;Light;Yes;4;9,502
Dunlop;Dunlop SP Sport Maxx GT;255;45;20;101W;Summer;Light;;4;12,745
Dunlop;Dunlop SP StreetResponse;185;65;14;86T;Summer;Light;;4;2,457
Dunlop;Dunlop Sport BluResponse;205;55;16;91H;Summer;Light;;4;3,805
Dunlop;Dunlop Ice Touch;195;65;15;95T;Winter;Light;Yes;4;3,169
Dunlop;Dunlop SP Winter Sport 3D;245;45;18;100V;Winter;Light;;4;11,895
Dunlop JP;Dunlop JP SP Winter Ice01;185;65;14;90T;Winter;Light;Yes;4;2,549
Dunlop JP;Dunlop JP SP Winter Ice01;195;65;15;95T;Winter;Light;Yes;4;2,864
Dunlop JP;Dunlop JP SP Winter Ice01;205;65;15;94T;Winter;Light;Yes;4;3,180
Dunlop JP;Dunlop JP SP Winter Ice01;205;55;16;94T;Winter;Light;Yes;4;4,376
Formula;Formula Formula Energy;195;65;15;91T;Summer;Light;;4;2,444
Formula;Formula Formula Energy;195;65;15;95T;Summer;Light;;4;2,569
Formula;Formula Formula Ice;185;60;15;88T;Winter;Light;Yes;4;2,569
Gislaved;Gislaved Nord*Frost 100;155;65;14;75T;Winter;Light;Yes;4;2,707
Gislaved;Gislaved Nord*Frost 100;175;65;15;88T;Winter;Light;Yes;4;3,567
Gislaved;Gislaved Nord*Frost 100;185;60;14;82T;Winter;Light;Yes;4;3,159
Gislaved;Gislaved Nord*Frost 100;195;55;15;89T;Winter;Light;Yes;4;4,212
Gislaved;Gislaved Nord*Frost 100;195;60;15;92T;Winter;Light;Yes;4;3,336
Gislaved;Gislaved Nord*Frost 100;205;55;16;94T;Winter;Light;Yes;4;4,817
Gislaved;Gislaved Nord*Frost 100;205;60;16;96T;Winter;Light;Yes;4;4,990
Gislaved;Gislaved Nord*Frost 100;215;60;16;99T;Winter;Light;Yes;4;5,669
Gislaved;Gislaved Nord*Frost 100;225;55;16;99T;Winter;Light;Yes;4;6,211
Gislaved;Gislaved Nord*Frost 100;225;50;17;98T;Winter;Light;Yes;4;7,307
Gislaved;Gislaved Nord*Frost 100 SUV;235;65;17;108T;Winter;Light;Yes;4;7,037
Gislaved;Gislaved Nord*Frost VAN;185;0;14C;102/100Q;Winter;Light;Yes;4;4,846
Goodyear;Goodyear Cargo Marathon;205;65;16C;99H;Summer;Light;;4;6,483
Goodyear;Goodyear DuraGrip;185;70;14;88T;Summer;Light;;4;2,924
Goodyear;Goodyear Eagle RS-A;265;50;20;106V;Summer;Light;;4;12,690
Goodyear;Goodyear EfficientGrip;185;65;14;86H;Summer;Light;;4;2,385
Goodyear;Goodyear EfficientGrip Compact;175;65;14;82T;Summer;Light;;4;2,364
Goodyear;Goodyear EfficientGrip Compact;195;65;15;91T;Summer;Light;;4;3,092
Goodyear;Goodyear EfficientGrip Performance;195;50;15;82V;Summer;Light;;4;3,071
Goodyear;Goodyear EfficientGrip Performance;195;55;15;85V;Summer;Light;;4;4,134
Goodyear;Goodyear EfficientGrip Performance;195;60;15;88V;Summer;Light;;4;3,082
Goodyear;Goodyear EfficientGrip Performance;205;65;15;94V;Summer;Light;;4;3,343
Goodyear;Goodyear EfficientGrip Performance;215;60;16;99W;Summer;Light;;4;5,394
Goodyear;Goodyear EfficientGrip SUV;235;65;17;104V;Summer;Light;;4;7,897
Goodyear;Goodyear Excellence;215;60;16;95H;Summer;Light;;4;4,014
Goodyear;Goodyear Wrangler AT/SA;235;65;17;108T;Summer;Light;;4;7,574
Goodyear;Goodyear Wrangler HP All Weather;235;60;18;103V;Demiseason;Light;;4;8,549
Goodyear;Goodyear Cargo UltraGrip;185;75;16C;104/102R;Winter;Light;Yes;4;5,924
Goodyear;Goodyear UltraGrip 500;255;65;17;110T;Winter;Light;Yes;4;6,103
Goodyear;Goodyear UltraGrip 500;255;60;18;112T;Winter;Light;Yes;4;7,757
Goodyear;Goodyear UltraGrip 500;255;55;19;111T;Winter;Light;Yes;4;10,726
Goodyear;Goodyear UltraGrip Ice 2;185;65;14;86T;Winter;Light;;4;2,948
Goodyear;Goodyear UltraGrip Ice Arctic;175;65;14;86T;Winter;Light;Yes;4;2,709
Goodyear;Goodyear UltraGrip Ice Arctic;175;70;14;88T;Winter;Light;Yes;4;2,751
Goodyear;Goodyear UltraGrip Ice Arctic;185;65;14;86T;Winter;Light;Yes;4;3,182
Goodyear;Goodyear UltraGrip Ice Arctic;185;65;15;88T;Winter;Light;Yes;4;2,890
Goodyear;Goodyear UltraGrip Ice Arctic;185;60;15;88T;Winter;Light;Yes;4;3,351
Goodyear;Goodyear UltraGrip Ice Arctic;195;55;15;85T;Winter;Light;Yes;4;4,276
Goodyear;Goodyear UltraGrip Ice Arctic;195;60;15;88T;Winter;Light;Yes;4;3,444
Goodyear;Goodyear UltraGrip Ice Arctic;195;65;15;95T;Winter;Light;Yes;4;2,915
Goodyear;Goodyear UltraGrip Ice Arctic;195;55;16;87T;Winter;Light;Yes;4;4,816
Goodyear;Goodyear UltraGrip Ice Arctic;205;60;16;92T;Winter;Light;Yes;4;5,041
Goodyear;Goodyear UltraGrip Ice Arctic;205;60;16;96T;Winter;Light;Yes;4;4,998
Goodyear;Goodyear UltraGrip Ice Arctic;215;55;16;97T;Winter;Light;Yes;4;5,183
Goodyear;Goodyear UltraGrip Ice Arctic;215;60;16;99T;Winter;Light;Yes;4;5,700
Goodyear;Goodyear UltraGrip Ice Arctic;215;50;17;95T;Winter;Light;Yes;4;6,489
Goodyear;Goodyear UltraGrip Ice Arctic;215;55;17;98T;Winter;Light;Yes;4;6,942
Goodyear;Goodyear UltraGrip Ice Arctic;225;55;17;101T;Winter;Light;Yes;4;7,857
Goodyear;Goodyear UltraGrip Ice Arctic;225;45;17;94T;Winter;Light;Yes;4;7,435
Goodyear;Goodyear UltraGrip Ice Arctic;235;55;17;103T;Winter;Light;Yes;4;8,120
Goodyear;Goodyear UltraGrip Ice Arctic SUV;225;65;17;102T;Winter;Light;Yes;4;7,007
Goodyear;Goodyear UltraGrip Ice Arctic SUV;225;55;18;102T;Winter;Light;Yes;4;8,206
Goodyear;Goodyear UltraGrip Ice Arctic SUV;235;55;19;105T;Winter;Light;Yes;4;9,220
Goodyear;Goodyear UltraGrip Ice Arctic SUV;255;55;18;109T;Winter;Light;Yes;4;8,076
Goodyear;Goodyear UltraGrip Ice WRT;225;55;18;98T;Winter;Light;;4;8,504
Goodyear;Goodyear UltraGrip Ice+;175;70;13;82T;Winter;Light;;4;2,794
Goodyear;Goodyear UltraGrip Perfomance;195;55;15;85H;Winter;Light;;4;3,494
Goodyear;Goodyear UltraGrip Performance GEN-1 ;205;55;16;94V;Winter;Light;;4;6,238
Goodyear;Goodyear UltraGrip Performance GEN-1 ;215;65;16;98H;Winter;Light;;4;5,312
Hankook;Hankook Dynapro i*cept RW08;215;65;16;98Q;Winter;Light;;4;4,562
Hankook;Hankook Dynapro i*cept RW08;225;70;16;103Q;Winter;Light;;4;5,841
Hankook;Hankook Dynapro i*cept RW08;235;70;16;106Q;Winter;Light;;4;6,337
Hankook;Hankook Dynapro i*cept RW08;245;60;18;104T;Winter;Light;;4;8,458
Hankook;Hankook Dynapro i*cept RW08;255;50;19;103Q;Winter;Light;;4;9,199
Hankook;Hankook Dynapro i*cept RW08;255;55;19;111Q;Winter;Light;;4;9,159
Hankook;Hankook Dynapro i*cept RW08;265;50;19;106Q;Winter;Light;;4;8,232
Hankook;Hankook i*Pike RW11;215;70;16;100T;Winter;Light;Yes;4;6,115
Hankook;Hankook i*Pike RW11;215;75;16;103T;Winter;Light;Yes;4;6,459
Hankook;Hankook i*Pike RW11;215;55;18;95T;Winter;Light;Yes;4;7,929
Hankook;Hankook i*Pike RW11;225;75;16;104T;Winter;Light;Yes;4;7,129
Hankook;Hankook i*Pike RW11;225;55;18;98T;Winter;Light;Yes;4;6,645
Hankook;Hankook i*Pike RW11;235;70;16;109T;Winter;Light;Yes;4;6,624
Hankook;Hankook i*Pike RW11;235;55;18;100T;Winter;Light;Yes;4;7,163
Hankook;Hankook i*Pike RW11;235;65;18;104T;Winter;Light;Yes;4;7,538
Hankook;Hankook i*Pike RW11;235;60;18;107T;Winter;Light;Yes;4;7,290
Hankook;Hankook i*Pike RW11;255;60;18;108T;Winter;Light;Yes;4;7,702
Hankook;Hankook i*Pike RW11;255;55;18;109T;Winter;Light;Yes;4;6,728
Hankook;Hankook i*Pike RW11;265;70;18;114T;Winter;Light;Yes;4;9,418
Hankook;Hankook i*Pike RW11;265;50;20;107T;Winter;Light;Yes;4;9,891
Hankook;Hankook i*Pike RW11;275;40;20;106T;Winter;Light;Yes;4;8,330
Hankook;Hankook i*Pike RW11;275;60;20;114T;Winter;Light;Yes;4;10,944
Hankook;Hankook i*Pike RW11;285;60;18;116T;Winter;Light;Yes;4;8,424
Hankook;Hankook IceBear W300A;295;30;22;103W;Winter;Light;;4;14,005
Hankook;Hankook Winter i*cept Evo W310;235;45;18;98V;Winter;Light;;4;8,719
Hankook;Hankook Winter i*cept Evo W310;245;45;19;102V;Winter;Light;;4;10,223
Hankook;Hankook Winter i*cept Evo W310;255;45;18;103V;Winter;Light;;4;9,095
Hankook;Hankook Winter i*cept IZ W606;175;65;14;82T;Winter;Light;;4;2,572
Hankook;Hankook Winter i*cept IZ W606;185;60;14;82T;Winter;Light;;4;2,959
Hankook;Hankook Winter i*cept IZ W606;185;65;15;88T;Winter;Light;;4;2,899
Hankook;Hankook Winter i*cept IZ W606;195;65;15;91T;Winter;Light;;4;3,144
Hankook;Hankook Winter i*cept IZ W606;235;45;17;94T;Winter;Light;;4;6,769
Hankook;Hankook Winter i*Pike LT RW09;185;75;16C;104/102P;Winter;Light;Yes;4;5,931
Hankook;Hankook Winter i*Pike LT RW09;195;65;16C;104/102T;Winter;Light;Yes;4;6,023
Hankook;Hankook Winter i*Pike LT RW09;205;75;16C;110/108R;Winter;Light;Yes;4;6,371
Hankook;Hankook Winter i*Pike RS W419;175;65;14;86T;Winter;Light;Yes;4;2,383
Hankook;Hankook Winter i*Pike RS W419;185;60;14;82T;Winter;Light;Yes;4;2,860
Hankook;Hankook Winter i*Pike RS W419;185;65;14;90T;Winter;Light;Yes;4;2,576
Hankook;Hankook Winter i*Pike RS W419;185;55;15;86T;Winter;Light;Yes;4;4,058
Hankook;Hankook Winter i*Pike RS W419;185;65;15;92T;Winter;Light;Yes;4;3,143
Hankook;Hankook Winter i*Pike RS W419;195;70;14;91T;Winter;Light;Yes;4;3,472
Hankook;Hankook Winter i*Pike RS W419;195;65;15;95T;Winter;Light;Yes;4;3,009
Hankook;Hankook Winter i*Pike RS W419;195;55;16;91T;Winter;Light;Yes;4;4,527
Hankook;Hankook Winter i*Pike RS W419;215;65;16;98T;Winter;Light;Yes;4;4,252
Hankook;Hankook Winter i*Pike RS W419;215;55;17;98T;Winter;Light;Yes;4;6,504
Hankook;Hankook Winter i*Pike RS W419;225;50;17;98T;Winter;Light;Yes;4;5,902
Hankook;Hankook Winter i*Pike RS W419;225;45;18;95T;Winter;Light;Yes;4;8,506
Hankook;Hankook Winter RW06;205;75;16C;110/108R;Winter;Light;;4;6,081
Hankook;Hankook Winter RW06;225;60;16C;101/99T;Winter;Light;;4;7,382
Kumho Marshal;Kumho Marshal I'Zen KW31;235;55;17;99R;Winter;Light;;4;5,954
Kumho Marshal;Kumho Marshal I'Zen RV Stud KC16;215;65;16;98Q;Winter;Light;Yes;4;4,061
Kumho Marshal;Kumho Marshal WinterCraft Ice WI31;185;55;15;82T;Winter;Light;Yes;4;3,461
Kumho Marshal;Kumho Marshal WinterCraft Ice WI31;215;45;17;91T;Winter;Light;Yes;4;5,616
Michelin;Michelin 4X4 Diamaris;235;65;17;108V;Summer;Light;;4;8,401
Michelin;Michelin 4X4 Diamaris;275;40;20;106Y;Summer;Light;;4;17,073
Michelin;Michelin Agilis;185;0;14C;102/100R;Summer;Light;;4;5,364
Michelin;Michelin Agilis;195;0;14C;106/104R;Summer;Light;;4;3,726
Michelin;Michelin Agilis +;185;75;16C;104/102R;Summer;Light;;4;7,231
Michelin;Michelin Agilis +;195;0;14C;106/104R;Summer;Light;;4;6,626
Michelin;Michelin Agilis +;195;70;15C;104/102R;Summer;Light;;4;6,052
Michelin;Michelin Agilis +;195;65;16C;104/102R;Summer;Light;;4;6,459
Michelin;Michelin Agilis +;195;75;16C;110/108R;Summer;Light;;4;7,389
Michelin;Michelin Agilis +;205;70;15C;106/104R;Summer;Light;;4;7,273
Michelin;Michelin Agilis +;205;65;16C;107/105T;Summer;Light;;4;7,577
Michelin;Michelin Agilis +;215;70;15C;109/107S;Summer;Light;;4;7,701
Michelin;Michelin Agilis +;215;65;16C;109/107T;Summer;Light;;4;7,889
Michelin;Michelin Agilis +;215;75;16C;116/114R;Summer;Light;;4;8,661
Michelin;Michelin Agilis +;225;70;15C;112/110S;Summer;Light;;4;7,347
Michelin;Michelin Agilis +;225;65;16C;112/110R;Summer;Light;;4;8,578
Michelin;Michelin Agilis +;225;75;16C;118/116R;Summer;Light;;4;9,371
Michelin;Michelin Agilis 51;205;65;15C;102/100T;Summer;Light;;4;6,356
Michelin;Michelin Agilis 51;215;65;15C;104T;Summer;Light;;4;5,339
Michelin;Michelin CrossClimate;185;65;15;92T;Demiseason;Light;;4;3,684
Michelin;Michelin CrossClimate;195;55;15;89V;Demiseason;Light;;4;5,489
Michelin;Michelin CrossClimate;195;60;15;92V;Demiseason;Light;;4;4,362
Michelin;Michelin CrossClimate;195;65;15;95V;Demiseason;Light;;4;3,820
Michelin;Michelin CrossClimate;195;55;16;91V;Demiseason;Light;;4;6,178
Michelin;Michelin CrossClimate;205;65;15;99V;Demiseason;Light;;4;4,623
Michelin;Michelin CrossClimate;205;55;16;94V;Demiseason;Light;;4;3,986
Michelin;Michelin CrossClimate;205;60;16;96V;Demiseason;Light;;4;5,730
Michelin;Michelin CrossClimate;215;65;16;102V;Demiseason;Light;;4;6,428
Michelin;Michelin CrossClimate;215;55;16;97V;Demiseason;Light;;4;6,199
Michelin;Michelin CrossClimate;215;60;16;99V;Demiseason;Light;;4;6,710
Michelin;Michelin CrossClimate;215;50;17;95W;Demiseason;Light;;4;9,028
Michelin;Michelin CrossClimate;215;55;17;98W;Demiseason;Light;;4;7,598
Michelin;Michelin CrossClimate;225;55;16;99W;Demiseason;Light;;4;8,045
Michelin;Michelin CrossClimate;225;55;17;101W;Demiseason;Light;;4;9,924
Michelin;Michelin CrossClimate;225;45;17;94W;Demiseason;Light;;4;6,752
Michelin;Michelin CrossClimate;225;50;17;98V;Demiseason;Light;;4;8,829
Michelin;Michelin Energy Saver;205;55;16;91V;Summer;Light;;4;3,841
Michelin;Michelin Energy Saver;215;65;15;96T;Summer;Light;;4;4,166
Michelin;Michelin Energy Saver;215;55;16;93V;Summer;Light;;4;5,959
Michelin;Michelin Energy Saver +;165;70;14;81T;Summer;Light;;4;3,434
Michelin;Michelin Energy Saver +;185;55;16;87H;Summer;Light;;4;5,541
Michelin;Michelin Energy Saver +;195;50;15;82T;Summer;Light;;4;3,747
Michelin;Michelin Energy Saver +;195;55;16;87H;Summer;Light;;4;5,939
Michelin;Michelin Energy XM2;175;65;14;82T;Summer;Light;;4;3,193
Michelin;Michelin Energy XM2;175;65;15;84H;Summer;Light;;4;3,579
Michelin;Michelin Energy XM2;185;60;14;82H;Summer;Light;;4;3,131
Michelin;Michelin Energy XM2;185;65;14;86H;Summer;Light;;4;3,444
Michelin;Michelin Energy XM2;185;65;15;88T;Summer;Light;;4;3,549
Michelin;Michelin Energy XM2;195;60;15;88H;Summer;Light;;4;3,361
Michelin;Michelin Energy XM2;195;65;15;91H;Summer;Light;;4;3,673
Michelin;Michelin Energy XM2;205;60;15;91H;Summer;Light;;4;5,051
Michelin;Michelin Energy XM2;205;65;15;94H;Summer;Light;;4;4,446
Michelin;Michelin Latitude Cross;205;70;15;100H;Summer;Light;;4;6,188
Michelin;Michelin Latitude Cross;205;80;16;104T;Summer;Light;;4;6,637
Michelin;Michelin Latitude Cross;215;75;15;100T;Summer;Light;;4;6,919
Michelin;Michelin Latitude Cross;215;65;16;102H;Summer;Light;;4;6,491
Michelin;Michelin Latitude Cross;215;70;16;104H;Summer;Light;;4;7,347
Michelin;Michelin Latitude Cross;215;60;17;100H;Summer;Light;;4;8,713
Michelin;Michelin Latitude Cross;225;70;16;103H;Summer;Light;;4;7,765
Michelin;Michelin Latitude Cross;225;55;17;101H;Summer;Light;;4;10,019
Michelin;Michelin Latitude Cross;225;65;17;102H;Summer;Light;;4;8,087
Michelin;Michelin Latitude Cross;225;65;18;107H;Summer;Light;;4;12,648
Michelin;Michelin Latitude Cross;235;60;16;104H;Summer;Light;;4;8,182
Michelin;Michelin Latitude Cross;235;70;16;106H;Summer;Light;;4;8,473
Michelin;Michelin Latitude Cross;235;55;17;103H;Summer;Light;;4;9,976
Michelin;Michelin Latitude Cross;235;65;17;108H;Summer;Light;;4;8,235
Michelin;Michelin Latitude Cross;235;55;18;100H;Summer;Light;;4;11,813
Michelin;Michelin Latitude Cross;235;60;18;107H;Summer;Light;;4;9,715
Michelin;Michelin Latitude Cross;245;65;17;111H;Summer;Light;;4;9,277
Michelin;Michelin Latitude Cross;245;70;17;114T;Summer;Light;;4;10,029
Michelin;Michelin Latitude Cross;255;65;17;114H;Summer;Light;;4;9,934
Michelin;Michelin Latitude Cross;255;55;18;109H;Summer;Light;;4;9,601
Michelin;Michelin Latitude Cross;255;60;18;112H;Summer;Light;;4;12,022
Michelin;Michelin Latitude Cross;265;70;16;112H;Summer;Light;;4;8,840
Michelin;Michelin Latitude Cross;265;65;17;112H;Summer;Light;;4;10,331
Michelin;Michelin Latitude Cross;265;60;18;110H;Summer;Light;;4;10,582
Michelin;Michelin Latitude Cross;275;65;17;115T;Summer;Light;;4;9,590
Michelin;Michelin Latitude Diamaris;235;50;18;97V;Summer;Light;;4;9,566
Michelin;Michelin Latitude Sport;235;55;17;99V;Summer;Light;;4;9,976
Michelin;Michelin Latitude Sport;255;55;18;109Y;Summer;Light;;4;9,789
Michelin;Michelin Latitude Sport;275;45;19;108Y;Summer;Light;;4;14,027
Michelin;Michelin Latitude Sport;275;55;19;111V;Summer;Light;;4;12,235
Michelin;Michelin Latitude Sport;275;55;19;111W;Summer;Light;;4;15,580
Michelin;Michelin Latitude Sport;275;50;20;109W;Summer;Light;;4;18,638
Michelin;Michelin Latitude Sport;275;45;20;110Y;Summer;Light;;4;15,873
Michelin;Michelin Latitude Sport;275;45;21;110Y;Summer;Light;;4;20,340
Michelin;Michelin Latitude Sport 3;225;65;17;102V;Summer;Light;;4;8,087
Michelin;Michelin Latitude Sport 3;225;60;18;100V;Summer;Light;;4;10,300
Michelin;Michelin Latitude Sport 3;235;65;17;108V;Summer;Light;;4;8,235
Michelin;Michelin Latitude Sport 3;235;55;18;100V;Summer;Light;;4;11,813
Michelin;Michelin Latitude Sport 3;235;60;18;103W;Summer;Light;;4;9,913
Michelin;Michelin Latitude Sport 3;235;65;18;110H;Summer;Light;;4;10,050
Michelin;Michelin Latitude Sport 3;235;55;19;105V;Summer;Light;;4;12,011
Michelin;Michelin Latitude Sport 3;235;50;19;99V;Summer;Light;;4;14,537
Michelin;Michelin Latitude Sport 3;245;60;18;105H;Summer;Light;;4;10,739
Michelin;Michelin Latitude Sport 3;255;60;17;106V;Summer;Light;;4;9,466
Michelin;Michelin Latitude Sport 3;255;55;18;105W;Summer;Light;;4;9,789
Michelin;Michelin Latitude Sport 3;255;55;18;109V;Summer;Light;;4;11,031
Michelin;Michelin Latitude Sport 3;255;55;18;109Y;Summer;Light;;4;9,601
Michelin;Michelin Latitude Sport 3;255;60;18;112V;Summer;Light;;4;12,022
Michelin;Michelin Latitude Sport 3;255;45;19;100V;Summer;Light;;4;16,895
Michelin;Michelin Latitude Sport 3;255;50;19;107W;Summer;Light;;4;13,274
Michelin;Michelin Latitude Sport 3;255;45;20;105V;Summer;Light;;4;15,904
Michelin;Michelin Latitude Sport 3;255;50;20;109Y;Summer;Light;;4;15,675
Michelin;Michelin Latitude Sport 3;265;50;19;110Y;Summer;Light;;4;13,921
Michelin;Michelin Latitude Sport 3;265;50;20;107V;Summer;Light;;4;16,385
Michelin;Michelin Latitude Sport 3;265;40;21;101Y;Summer;Light;;4;20,871
Michelin;Michelin Latitude Sport 3;275;55;17;109V;Summer;Light;;4;11,688
Michelin;Michelin Latitude Sport 3;275;45;19;108Y;Summer;Light;;4;16,113
Michelin;Michelin Latitude Sport 3;275;40;20;106Y;Summer;Light;;4;16,403
Michelin;Michelin Latitude Sport 3;275;45;20;110Y;Summer;Light;;4;15,873
Michelin;Michelin Latitude Sport 3;285;45;19;111W;Summer;Light;;4;15,289
Michelin;Michelin Latitude Sport 3;295;35;21;103Y;Summer;Light;;4;19,671
Michelin;Michelin Latitude Sport 3;295;35;21;107Y;Summer;Light;;4;19,671
Michelin;Michelin Latitude Sport 3;315;35;20;110W;Summer;Light;;4;20,266
Michelin;Michelin Latitude Tour HP;215;70;16;100H;Summer;Light;;4;6,992
Michelin;Michelin Latitude Tour HP;215;65;16;98H;Summer;Light;;4;6,188
Michelin;Michelin Latitude Tour HP;225;65;17;102H;Summer;Light;;4;7,701
Michelin;Michelin Latitude Tour HP;225;60;18;100H;Summer;Light;;4;9,810
Michelin;Michelin Latitude Tour HP;235;60;16;100H;Summer;Light;;4;7,796
Michelin;Michelin Latitude Tour HP;235;70;16;106H;Summer;Light;;4;5,506
Michelin;Michelin Latitude Tour HP;235;65;17;108V;Summer;Light;;4;7,836
Michelin;Michelin Latitude Tour HP;235;60;18;103V;Summer;Light;;4;9,445
Michelin;Michelin Latitude Tour HP;235;60;18;103V;Summer;Light;;4;9,257
Michelin;Michelin Latitude Tour HP;235;65;18;104H;Summer;Light;;4;9,288
Michelin;Michelin Latitude Tour HP;235;55;19;101V;Summer;Light;;4;11,657
Michelin;Michelin Latitude Tour HP;235;55;20;102H;Summer;Light;;4;16,113
Michelin;Michelin Latitude Tour HP;255;55;18;105V;Summer;Light;;4;9,141
Michelin;Michelin Latitude Tour HP;255;55;18;109V;Summer;Light;;4;9,141
Michelin;Michelin Latitude Tour HP;255;60;18;112V;Summer;Light;;4;11,459
Michelin;Michelin Latitude Tour HP;255;50;19;103V;Summer;Light;;4;12,899
Michelin;Michelin Latitude Tour HP;255;50;19;107H;Summer;Light;;4;14,548
Michelin;Michelin Latitude Tour HP;255;55;19;111V;Summer;Light;;4;12,628
Michelin;Michelin Latitude Tour HP;265;60;18;109H;Summer;Light;;4;10,071
Michelin;Michelin Latitude Tour HP;265;50;19;110V;Summer;Light;;4;13,253
Michelin;Michelin Latitude Tour HP;265;45;20;104V;Summer;Light;;4;17,865
Michelin;Michelin Latitude Tour HP;275;60;20;114H;Summer;Light;;4;16,436
Michelin;Michelin Pilot Sport PS2;235;40;18;95(Y);Summer;Light;;4;11,083
Michelin;Michelin Pilot Sport PS2;245;40;19;94(Y);Summer;Light;;4;16,103
Michelin;Michelin Pilot Sport PS2;255;35;19;96Y;Summer;Light;;4;11,058
Michelin;Michelin Pilot Sport PS3;205;50;16;87V;Summer;Light;;4;7,180
Michelin;Michelin Pilot Sport PS3;205;45;16;87W;Summer;Light;;4;7,482
Michelin;Michelin Pilot Sport PS3;205;55;16;94W;Summer;Light;;4;4,028
Michelin;Michelin Pilot Sport PS3;205;50;17;93W;Summer;Light;;4;7,659
Michelin;Michelin Pilot Sport PS3;225;50;17;98Y;Summer;Light;;4;8,922
Michelin;Michelin Pilot Sport PS3;235;45;19;99W;Summer;Light;;4;15,873
Michelin;Michelin Pilot Sport PS3;245;45;19;102Y;Summer;Light;;4;16,301
Michelin;Michelin Pilot Sport PS3;245;40;19;98(Y);Summer;Light;;4;16,103
Michelin;Michelin Pilot Sport PS3;255;40;19;100(Y);Summer;Light;;4;13,357
Michelin;Michelin Pilot Sport PS3;255;40;19;100Y;Summer;Light;;4;13,357
Michelin;Michelin Pilot Sport PS3;275;40;19;101Y;Summer;Light;;4;16,811
Michelin;Michelin Pilot Sport PS4;215;45;17;91(Y);Summer;Light;;4;6,877
Michelin;Michelin Pilot Sport PS4;225;45;17;94(Y);Summer;Light;;4;6,824
Michelin;Michelin Pilot Sport PS4;225;40;18;92(Y);Summer;Light;;4;10,832
Michelin;Michelin Pilot Sport PS4;225;45;18;95(Y);Summer;Light;;4;11,197
Michelin;Michelin Pilot Sport PS4;235;45;17;97(Y);Summer;Light;;4;7,765
Michelin;Michelin Pilot Sport PS4;235;40;18;95(Y);Summer;Light;;4;11,083
Michelin;Michelin Pilot Sport PS4;245;40;17;95Y;Summer;Light;;4;10,718
Michelin;Michelin Pilot Sport PS4;245;45;17;99(Y);Summer;Light;;4;8,745
Michelin;Michelin Pilot Sport PS4;245;45;18;100(Y);Summer;Light;;4;10,937
Michelin;Michelin Pilot Sport PS4;245;40;18;97(Y);Summer;Light;;4;12,262
Michelin;Michelin Pilot Sport PS4;255;35;18;94(Y);Summer;Light;;4;13,796
Michelin;Michelin Pilot Sport PS4;265;35;18;97(Y);Summer;Light;;4;15,091
Michelin;Michelin Pilot Super Sport;225;40;18;88Y;Summer;Light;;4;11,375
Michelin;Michelin Pilot Super Sport;225;45;18;95(Y);Summer;Light;;4;11,761
Michelin;Michelin Pilot Super Sport;225;40;19;93(Y);Summer;Light;;4;14,057
Michelin;Michelin Pilot Super Sport;235;35;19;91(Y);Summer;Light;;4;14,328
Michelin;Michelin Pilot Super Sport;235;40;19;96(Y);Summer;Light;;4;15,091
Michelin;Michelin Pilot Super Sport;245;40;18;97(Y);Summer;Light;;4;12,878
Michelin;Michelin Pilot Super Sport;245;35;19;93(Y);Summer;Light;;4;15,112
Michelin;Michelin Pilot Super Sport;245;40;19;98(Y);Summer;Light;;4;16,906
Michelin;Michelin Pilot Super Sport;245;35;20;95(Y);Summer;Light;;4;16,623
Michelin;Michelin Pilot Super Sport;255;40;19;100(Y);Summer;Light;;4;14,036
Michelin;Michelin Pilot Super Sport;255;45;19;104(Y);Summer;Light;;4;17,730
Michelin;Michelin Pilot Super Sport;255;35;19;96(Y);Summer;Light;;4;17,886
Michelin;Michelin Pilot Super Sport;255;40;20;101(Y);Summer;Light;;4;20,662
Michelin;Michelin Pilot Super Sport;255;40;20;101(Y);Summer;Light;;4;20,246
Michelin;Michelin Pilot Super Sport;255;35;20;97(Y);Summer;Light;;4;20,089
Michelin;Michelin Pilot Super Sport;265;35;19;98(Y);Summer;Light;;4;18,106
Michelin;Michelin Pilot Super Sport;295;35;20;105(Y);Summer;Light;;4;21,529
Michelin;Michelin Primacy 3;205;55;16;91V;Summer;Light;;4;3,841
Michelin;Michelin Primacy 3;205;60;16;96W;Summer;Light;;4;5,511
Michelin;Michelin Primacy 3;205;45;17;88V;Summer;Light;;4;7,326
Michelin;Michelin Primacy 3;205;50;17;93V;Summer;Light;;4;7,305
Michelin;Michelin Primacy 3;205;55;17;95V;Summer;Light;;4;8,182
Michelin;Michelin Primacy 3;215;55;16;97V;Summer;Light;;4;5,959
Michelin;Michelin Primacy 3;215;60;16;99V;Summer;Light;;4;6,459
Michelin;Michelin Primacy 3;215;50;17;95W;Summer;Light;;4;8,692
Michelin;Michelin Primacy 3;215;60;17;96V;Summer;Light;;4;8,296
Michelin;Michelin Primacy 3;215;55;17;98W;Summer;Light;;4;7,315
Michelin;Michelin Primacy 3;225;60;16;102V;Summer;Light;;4;7,691
Michelin;Michelin Primacy 3;225;55;16;95V;Summer;Light;;4;7,743
Michelin;Michelin Primacy 3;225;55;17;101W;Summer;Light;;4;9,548
Michelin;Michelin Primacy 3;225;45;17;91W;Summer;Light;;4;7,461
Michelin;Michelin Primacy 3;225;50;17;94W;Summer;Light;;4;9,768
Michelin;Michelin Primacy 3;225;45;17;94W;Summer;Light;;4;6,491
Michelin;Michelin Primacy 3;225;55;17;97Y;Summer;Light;;4;10,988
Michelin;Michelin Primacy 3;225;50;17;98W;Summer;Light;;4;8,494
Michelin;Michelin Primacy 3;225;45;18;95Y;Summer;Light;;4;12,878
Michelin;Michelin Primacy 3;225;55;18;98V;Summer;Light;;4;9,184
Michelin;Michelin Primacy 3;235;55;17;103Y;Summer;Light;;4;9,496
Michelin;Michelin Primacy 3;235;45;17;97W;Summer;Light;;4;7,400
Michelin;Michelin Primacy 3;235;50;18;101Y;Summer;Light;;4;11,375
Michelin;Michelin Primacy 3;235;45;18;98W;Summer;Light;;4;11,124
Michelin;Michelin Primacy 3;245;55;17;102W;Summer;Light;;4;13,035
Michelin;Michelin Primacy 3;245;45;17;99W;Summer;Light;;4;8,328
Michelin;Michelin Primacy 3;245;50;18;100W;Summer;Light;;4;12,690
Michelin;Michelin Primacy 3;245;40;18;93Y;Summer;Light;;4;11,678
Michelin;Michelin Primacy 3;245;45;19;98Y;Summer;Light;;4;17,844
Michelin;Michelin Primacy 3;255;45;18;99Y;Summer;Light;;4;11,887
Michelin;Michelin Primacy 3;275;40;19;101Y;Summer;Light;;4;19,337
Michelin;Michelin Primacy HP;225;45;17;91W;Summer;Light;;4;6,491
Michelin;Michelin Primacy HP;235;45;17;94W;Summer;Light;;4;7,400
Michelin;Michelin Primacy HP;235;50;18;101Y;Summer;Light;;4;9,868
Michelin;Michelin Primacy HP;245;40;17;91W;Summer;Light;;4;10,206
Michelin;Michelin Primacy HP;245;40;18;93Y;Summer;Light;;4;9,869
Michelin;Michelin Primacy HP;255;45;18;99Y;Summer;Light;;4;11,887
Michelin;Michelin Primacy HP;275;45;18;103Y;Summer;Light;;4;16,238
Michelin;Michelin Agilis 51 Snow-Ice;175;65;14C;90/88T;Winter;Light;;4;4,881
Michelin;Michelin Agilis 81 Snow-Ice;195;65;16C;104Q;Winter;Light;;4;4,985
Michelin;Michelin Agilis Alpin;185;75;16C;104/102R;Winter;Light;;4;6,362
Michelin;Michelin Agilis Alpin;195;70;15C;104/102R;Winter;Light;;4;5,792
Michelin;Michelin Agilis Alpin;195;65;16C;104/102R;Winter;Light;;4;6,459
Michelin;Michelin Agilis Alpin;215;75;16C;116/114R;Winter;Light;;4;7,346
Michelin;Michelin Agilis Alpin;225;65;16C;112/110R;Winter;Light;;4;8,076
Michelin;Michelin Agilis Alpin;235;65;16C;115/113R;Winter;Light;;4;8,062
Michelin;Michelin Agilis X-Ice North;185;0;14C;102/100R;Winter;Light;Yes;4;5,674
Michelin;Michelin Agilis X-Ice North;185;75;16C;104/102R;Winter;Light;Yes;4;6,697
Michelin;Michelin Agilis X-Ice North;195;70;15C;104/102R;Winter;Light;Yes;4;6,063
Michelin;Michelin Agilis X-Ice North;195;65;16C;104/102R;Winter;Light;Yes;4;6,856
Michelin;Michelin Agilis X-Ice North;195;75;16C;107/105R;Winter;Light;Yes;4;6,064
Michelin;Michelin Agilis X-Ice North;205;65;16C;107/105R;Winter;Light;Yes;4;6,996
Michelin;Michelin Agilis X-Ice North;215;65;16C;109/107R;Winter;Light;Yes;4;7,358
Michelin;Michelin Agilis X-Ice North;215;75;16C;116/114R;Winter;Light;Yes;4;7,311
Michelin;Michelin Agilis X-Ice North;225;70;15C;112/110R;Winter;Light;Yes;4;7,253
Michelin;Michelin Agilis X-Ice North;225;65;16C;112/110R;Winter;Light;Yes;4;8,496
Michelin;Michelin Agilis X-Ice North;225;75;16C;121/120R;Winter;Light;Yes;4;8,282
Michelin;Michelin Alpin A3;185;65;14;86T;Winter;Light;;4;3,265
Michelin;Michelin Alpin A3;185;70;14;88T;Winter;Light;;4;4,094
Michelin;Michelin Alpin A4;175;65;14;82T;Winter;Light;;4;3,509
Michelin;Michelin Alpin A4;185;60;14;82T;Winter;Light;;4;3,329
Michelin;Michelin Alpin A4;195;50;15;82T;Winter;Light;;4;4,560
Michelin;Michelin Alpin A4;195;55;15;85T;Winter;Light;;4;5,805
Michelin;Michelin Alpin A4;195;60;15;88T;Winter;Light;;4;4,447
Michelin;Michelin Alpin A4;195;65;15;91T;Winter;Light;;4;3,148
Michelin;Michelin Alpin A4;195;65;15;95T;Winter;Light;;4;3,742
Michelin;Michelin Alpin A4;205;55;16;91H;Winter;Light;;4;4,925
Michelin;Michelin Alpin A4;205;55;16;94H;Winter;Light;;4;5,596
Michelin;Michelin Alpin A4;215;50;17;95V;Winter;Light;;4;8,887
Michelin;Michelin Alpin A4;225;55;16;99H;Winter;Light;;4;6,683
Michelin;Michelin Alpin A5;205;60;16;96H;Winter;Light;;4;5,347
Michelin;Michelin Alpin A5;215;55;17;98V;Winter;Light;;4;9,992
Michelin;Michelin Alpin A5;225;50;17;98H;Winter;Light;;4;9,529
Michelin;Michelin Latitude Alpin;205;80;16;104T;Winter;Light;;4;7,484
Michelin;Michelin Latitude Alpin;225;55;18;98H;Winter;Light;;4;8,395
Michelin;Michelin Latitude Alpin;235;75;15;109T;Winter;Light;;4;8,089
Michelin;Michelin Latitude Alpin;235;60;16;100T;Winter;Light;;4;8,532
Michelin;Michelin Latitude Alpin;255;65;16;109T;Winter;Light;;4;8,286
Michelin;Michelin Latitude Alpin;255;55;18;109V;Winter;Light;;4;9,328
Michelin;Michelin Latitude Alpin;255;55;18;109V;Winter;Light;;4;9,293
Michelin;Michelin Latitude Alpin;255;60;18;112V;Winter;Light;;4;9,306
Michelin;Michelin Latitude Alpin 2;215;70;16;104H;Winter;Light;;4;7,636
Michelin;Michelin Latitude Alpin 2;225;75;16;108H;Winter;Light;;4;7,906
Michelin;Michelin Latitude Alpin 2;225;60;17;103H;Winter;Light;;4;8,416
Michelin;Michelin Latitude Alpin 2;225;65;17;106H;Winter;Light;;4;7,190
Michelin;Michelin Latitude Alpin 2;225;60;18;104H;Winter;Light;;4;10,903
Michelin;Michelin Latitude Alpin 2;235;60;17;106H;Winter;Light;;4;9,034
Michelin;Michelin Latitude Alpin 2;235;65;17;108H;Winter;Light;;4;7,361
Michelin;Michelin Latitude Alpin 2;235;60;18;107H;Winter;Light;;4;9,067
Michelin;Michelin Latitude Alpin 2;235;65;18;110H;Winter;Light;;4;8,592
Michelin;Michelin Latitude Alpin 2;235;55;19;105V;Winter;Light;;4;10,051
Michelin;Michelin Latitude Alpin 2;245;45;20;103V;Winter;Light;;4;15,016
Michelin;Michelin Latitude Alpin 2;255;60;17;110H;Winter;Light;;4;9,724
Michelin;Michelin Latitude Alpin 2;255;55;18;109V;Winter;Light;;4;8,978
Michelin;Michelin Latitude Alpin 2;255;50;19;107V;Winter;Light;;4;11,013
Michelin;Michelin Latitude Alpin 2;255;55;19;111V;Winter;Light;;4;10,999
Michelin;Michelin Latitude Alpin 2;255;55;20;110V;Winter;Light;;4;15,380
Michelin;Michelin Latitude Alpin 2;265;65;17;116H;Winter;Light;;4;9,549
Michelin;Michelin Latitude Alpin 2;265;60;18;114H;Winter;Light;;4;9,771
Michelin;Michelin Latitude Alpin 2;265;40;21;105V;Winter;Light;;4;16,968
Michelin;Michelin Latitude Alpin 2;275;40;20;106V;Winter;Light;;4;11,890
Michelin;Michelin Latitude Alpin 2;275;45;21;110V;Winter;Light;;4;15,628
Michelin;Michelin Latitude Alpin 2;295;35;21;107V;Winter;Light;;4;15,616
Michelin;Michelin Latitude Alpin HP;265;55;19;109H;Winter;Light;;4;18,469
Michelin;Michelin Latitude X-Ice;245;65;17;107Q;Winter;Light;;4;8,185
Michelin;Michelin Latitude X-Ice;275;70;16;114Q;Winter;Light;;4;5,188
Michelin;Michelin Latitude X-Ice North;215;60;17;96T;Winter;Light;Yes;4;7,602
Michelin;Michelin Latitude X-Ice North;235;70;16;106Q;Winter;Light;Yes;4;7,060
Michelin;Michelin Latitude X-Ice North;235;60;17;102T;Winter;Light;Yes;4;8,939
Michelin;Michelin Latitude X-Ice North;295;35;21;107T;Winter;Light;Yes;4;15,783
Michelin;Michelin Latitude X-Ice North LXIN2;215;70;16;100T;Winter;Light;Yes;4;8,039
Michelin;Michelin Latitude X-Ice North LXIN2;225;70;16;107T;Winter;Light;Yes;4;7,917
Michelin;Michelin Latitude X-Ice North LXIN2;225;65;17;102T;Winter;Light;Yes;4;7,872
Michelin;Michelin Latitude X-Ice North LXIN2;225;55;18;102T;Winter;Light;Yes;4;10,045
Michelin;Michelin Latitude X-Ice North LXIN2;225;60;18;104T;Winter;Light;Yes;4;9,680
Michelin;Michelin Latitude X-Ice North LXIN2;235;55;18;104T;Winter;Light;Yes;4;11,151
Michelin;Michelin Latitude X-Ice North LXIN2;235;60;18;107T;Winter;Light;Yes;4;9,818
Michelin;Michelin Latitude X-Ice North LXIN2;235;65;18;110T;Winter;Light;Yes;4;8,683
Michelin;Michelin Latitude X-Ice North LXIN2;235;55;19;105T;Winter;Light;Yes;4;10,377
Michelin;Michelin Latitude X-Ice North LXIN2;235;45;20;100T;Winter;Light;Yes;4;16,774
Michelin;Michelin Latitude X-Ice North LXIN2;245;70;17;110T;Winter;Light;Yes;4;8,485
Michelin;Michelin Latitude X-Ice North LXIN2;245;60;18;105T;Winter;Light;Yes;4;10,881
Michelin;Michelin Latitude X-Ice North LXIN2;245;45;20;99T;Winter;Light;Yes;4;16,141
Michelin;Michelin Latitude X-Ice North LXIN2;255;65;17;114T;Winter;Light;Yes;4;9,655
Michelin;Michelin Latitude X-Ice North LXIN2;255;55;18;109T;Winter;Light;Yes;4;8,719
Michelin;Michelin Latitude X-Ice North LXIN2;255;60;18;112T;Winter;Light;Yes;4;10,128
Michelin;Michelin Latitude X-Ice North LXIN2;255;50;19;107T;Winter;Light;Yes;4;11,348
Michelin;Michelin Latitude X-Ice North LXIN2;255;55;19;111T;Winter;Light;Yes;4;11,119
Michelin;Michelin Latitude X-Ice North LXIN2;255;45;20;105T;Winter;Light;Yes;4;14,513
Michelin;Michelin Latitude X-Ice North LXIN2;255;50;20;109T;Winter;Light;Yes;4;16,754
Michelin;Michelin Latitude X-Ice North LXIN2;265;70;16;112T;Winter;Light;Yes;4;9,445
Michelin;Michelin Latitude X-Ice North LXIN2;265;65;17;116T;Winter;Light;Yes;4;9,508
Michelin;Michelin Latitude X-Ice North LXIN2;265;60;18;114T;Winter;Light;Yes;4;9,427
Michelin;Michelin Latitude X-Ice North LXIN2;265;45;21;104T;Winter;Light;Yes;4;14,050
Michelin;Michelin Latitude X-Ice North LXIN2;275;40;20;106T;Winter;Light;Yes;4;11,283
Michelin;Michelin Latitude X-Ice North LXIN2;275;40;21;107T;Winter;Light;Yes;4;18,124
Michelin;Michelin Latitude X-Ice North LXIN2;285;65;17;116T;Winter;Light;Yes;4;10,148
Michelin;Michelin Latitude X-Ice North LXIN2+;225;65;17;102T;Winter;Light;Yes;4;7,566
Michelin;Michelin Latitude X-Ice North LXIN2+;225;60;17;103T;Winter;Light;Yes;4;8,856
Michelin;Michelin Latitude X-Ice North LXIN2+;225;60;18;104T;Winter;Light;Yes;4;11,719
Michelin;Michelin Latitude X-Ice North LXIN2+;235;65;17;108T;Winter;Light;Yes;4;7,752
Michelin;Michelin Latitude X-Ice North LXIN2+;235;55;18;104T;Winter;Light;Yes;4;9,413
Michelin;Michelin Latitude X-Ice North LXIN2+;235;60;18;107T;Winter;Light;Yes;4;9,752
Michelin;Michelin Latitude X-Ice North LXIN2+;255;55;18;109T;Winter;Light;Yes;4;8,920
Michelin;Michelin Latitude X-Ice North LXIN2+;255;50;19;107T;Winter;Light;Yes;4;10,019
Michelin;Michelin Latitude X-Ice North LXIN2+;255;45;20;105T;Winter;Light;Yes;4;15,247
Michelin;Michelin Latitude X-Ice North LXIN2+;255;55;20;110T;Winter;Light;Yes;4;15,450
Michelin;Michelin Latitude X-Ice North LXIN2+;265;50;19;110T;Winter;Light;Yes;4;12,493
Michelin;Michelin Latitude X-Ice North LXIN2+;265;45;20;104T;Winter;Light;Yes;4;14,197
Michelin;Michelin Latitude X-Ice North LXIN2+;265;50;20;111T;Winter;Light;Yes;4;13,637
Michelin;Michelin Latitude X-Ice North LXIN2+;265;45;21;104T;Winter;Light;Yes;4;14,050
Michelin;Michelin Latitude X-Ice North LXIN2+;275;40;20;106T;Winter;Light;Yes;4;12,786
Michelin;Michelin Latitude X-Ice North LXIN2+;275;45;20;110T;Winter;Light;Yes;4;13,240
Michelin;Michelin Latitude X-Ice North LXIN2+;285;60;18;116T;Winter;Light;Yes;4;11,318
Michelin;Michelin Latitude X-Ice Xi2;215;70;16;100T;Winter;Light;;4;7,636
Michelin;Michelin Latitude X-Ice Xi2;225;70;16;103T;Winter;Light;;4;8,001
Michelin;Michelin Latitude X-Ice Xi2;225;65;17;102T;Winter;Light;;4;7,190
Michelin;Michelin Latitude X-Ice Xi2;235;70;16;106T;Winter;Light;;4;7,183
Michelin;Michelin Latitude X-Ice Xi2;235;60;17;102T;Winter;Light;;4;8,492
Michelin;Michelin Latitude X-Ice Xi2;235;65;17;108T;Winter;Light;;4;6,993
Michelin;Michelin Latitude X-Ice Xi2;235;55;18;100T;Winter;Light;;4;8,754
Michelin;Michelin Latitude X-Ice Xi2;235;65;18;106T;Winter;Light;;4;8,077
Michelin;Michelin Latitude X-Ice Xi2;235;60;18;107T;Winter;Light;;4;9,067
Michelin;Michelin Latitude X-Ice Xi2;235;55;19;101H;Winter;Light;;4;9,502
Michelin;Michelin Latitude X-Ice Xi2;245;70;16;107T;Winter;Light;;4;9,736
Michelin;Michelin Latitude X-Ice Xi2;245;70;17;110T;Winter;Light;;4;8,064
Michelin;Michelin Latitude X-Ice Xi2;255;65;17;110T;Winter;Light;;4;9,713
Michelin;Michelin Latitude X-Ice Xi2;255;55;18;109T;Winter;Light;;4;9,020
Michelin;Michelin Latitude X-Ice Xi2;255;55;19;111H;Winter;Light;;4;10,948
Michelin;Michelin Latitude X-Ice Xi2;265;70;15;112T;Winter;Light;;4;8,416
Michelin;Michelin Latitude X-Ice Xi2;265;65;17;112T;Winter;Light;;4;8,488
Michelin;Michelin Latitude X-Ice Xi2;265;70;17;115T;Winter;Light;;4;9,470
Michelin;Michelin Latitude X-Ice Xi2;265;60;18;110T;Winter;Light;;4;8,582
Michelin;Michelin Latitude X-Ice Xi2;275;70;16;114T;Winter;Light;;4;9,297
Michelin;Michelin Latitude X-Ice Xi2;285;60;18;116H;Winter;Light;;4;9,898
Michelin;Michelin Pilot Alpin PA3;225;45;17;94V;Winter;Light;;4;8,028
Michelin;Michelin Pilot Alpin PA3;255;35;20;97W;Winter;Light;;4;19,292
Michelin;Michelin Pilot Alpin PA4;215;45;18;93V;Winter;Light;;4;10,863
Michelin;Michelin Pilot Alpin PA4;225;55;18;102V;Winter;Light;;4;9,342
Michelin;Michelin Pilot Alpin PA4;225;40;18;92V;Winter;Light;;4;10,189
Michelin;Michelin Pilot Alpin PA4;235;55;17;103H;Winter;Light;;4;8,007
Michelin;Michelin Pilot Alpin PA4;235;45;17;97V;Winter;Light;;4;9,279
Michelin;Michelin Pilot Alpin PA4;235;50;18;101H;Winter;Light;;4;11,240
Michelin;Michelin Pilot Alpin PA4;235;45;18;98V;Winter;Light;;4;11,718
Michelin;Michelin Pilot Alpin PA4;235;35;19;91W;Winter;Light;;4;12,671
Michelin;Michelin Pilot Alpin PA4;235;45;19;99V;Winter;Light;;4;13,269
Michelin;Michelin Pilot Alpin PA4;245;45;17;99V;Winter;Light;;4;9,957
Michelin;Michelin Pilot Alpin PA4;245;45;18;100V;Winter;Light;;4;11,835
Michelin;Michelin Pilot Alpin PA4;245;50;18;104V;Winter;Light;;4;11,893
Michelin;Michelin Pilot Alpin PA4;245;40;18;97V;Winter;Light;;4;10,095
Michelin;Michelin Pilot Alpin PA4;245;40;19;98V;Winter;Light;;4;12,857
Michelin;Michelin Pilot Alpin PA4;255;45;18;103V;Winter;Light;;4;11,789
Michelin;Michelin Pilot Alpin PA4;255;40;18;99V;Winter;Light;;4;14,276
Michelin;Michelin Pilot Alpin PA4;255;35;20;97W;Winter;Light;;4;16,084
Michelin;Michelin Pilot Alpin PA4;275;35;20;102W;Winter;Light;;4;21,868
Michelin;Michelin Pilot Alpin PA4 (Porsche);235;40;19;92V;Winter;Light;;4;11,822
Michelin;Michelin Pilot Alpin PA4 (Porsche);255;45;19;104W;Winter;Light;;4;14,227
Michelin;Michelin Pilot Alpin PA4 (Porsche);255;40;20;101V;Winter;Light;;4;22,120
Michelin;Michelin Primacy Alpin PA3;195;50;15;82H;Winter;Light;;4;4,198
Michelin;Michelin Primacy Alpin PA3;195;55;16;87H;Winter;Light;;4;5,850
Michelin;Michelin Primacy Alpin PA3;225;45;17;91H;Winter;Light;;4;8,028
Michelin;Michelin X-Ice North;175;70;13;82T;Winter;Light;Yes;4;2,565
Michelin;Michelin X-Ice North Xin2;175;70;14;88T;Winter;Light;Yes;4;3,181
Michelin;Michelin X-Ice North Xin2;185;60;14;86T;Winter;Light;Yes;4;3,530
Michelin;Michelin X-Ice North Xin2;185;65;14;90T;Winter;Light;Yes;4;3,247
Michelin;Michelin X-Ice North Xin2;195;60;15;92T;Winter;Light;Yes;4;3,497
Michelin;Michelin X-Ice North Xin2;195;55;16;91T;Winter;Light;Yes;4;4,817
Michelin;Michelin X-Ice North Xin2;205;60;15;95T;Winter;Light;Yes;4;4,050
Michelin;Michelin X-Ice North Xin2;215;50;17;95T;Winter;Light;Yes;4;6,560
Michelin;Michelin X-Ice North Xin2;215;55;17;98T;Winter;Light;Yes;4;7,462
Michelin;Michelin X-Ice North Xin2;225;40;18;92T;Winter;Light;Yes;4;9,590
Michelin;Michelin X-Ice North Xin2;235;40;18;95T;Winter;Light;Yes;4;10,431
Michelin;Michelin X-Ice North Xin2;235;45;18;98T;Winter;Light;Yes;4;11,015
Michelin;Michelin X-Ice North Xin2;245;45;17;99T;Winter;Light;Yes;4;8,751
Michelin;Michelin X-Ice North Xin3;175;65;14;86T;Winter;Light;Yes;4;3,446
Michelin;Michelin X-Ice North Xin3;175;65;15;88T;Winter;Light;Yes;4;4,116
Michelin;Michelin X-Ice North Xin3;185;60;14;86T;Winter;Light;Yes;4;3,801
Michelin;Michelin X-Ice North Xin3;185;55;15;86T;Winter;Light;Yes;4;5,051
Michelin;Michelin X-Ice North Xin3;185;60;15;88T;Winter;Light;Yes;4;4,198
Michelin;Michelin X-Ice North Xin3;185;65;15;92T;Winter;Light;Yes;4;3,586
Michelin;Michelin X-Ice North Xin3;195;50;15;86T;Winter;Light;Yes;4;5,282
Michelin;Michelin X-Ice North Xin3;195;55;15;89T;Winter;Light;Yes;4;4,952
Michelin;Michelin X-Ice North Xin3;195;60;15;92T;Winter;Light;Yes;4;3,706
Michelin;Michelin X-Ice North Xin3;195;65;15;95T;Winter;Light;Yes;4;3,603
Michelin;Michelin X-Ice North Xin3;195;55;16;91T;Winter;Light;Yes;4;5,502
Michelin;Michelin X-Ice North Xin3;195;60;16;93T;Winter;Light;Yes;4;6,659
Michelin;Michelin X-Ice North Xin3;205;60;15;95T;Winter;Light;Yes;4;5,152
Michelin;Michelin X-Ice North Xin3;205;55;16;94T;Winter;Light;Yes;4;5,039
Michelin;Michelin X-Ice North Xin3;205;60;16;96T;Winter;Light;Yes;4;5,158
Michelin;Michelin X-Ice North Xin3;205;65;16;99T;Winter;Light;Yes;4;6,083
Michelin;Michelin X-Ice North Xin3;205;50;17;93T;Winter;Light;Yes;4;7,929
Michelin;Michelin X-Ice North Xin3;205;55;17;95T;Winter;Light;Yes;4;9,199
Michelin;Michelin X-Ice North Xin3;215;65;15;100T;Winter;Light;Yes;4;5,941
Michelin;Michelin X-Ice North Xin3;215;65;16;102T;Winter;Light;Yes;4;4,819
Michelin;Michelin X-Ice North Xin3;215;55;16;97T;Winter;Light;Yes;4;6,103
Michelin;Michelin X-Ice North Xin3;215;60;16;99T;Winter;Light;Yes;4;6,192
Michelin;Michelin X-Ice North Xin3;215;55;17;98T;Winter;Light;Yes;4;9,433
Michelin;Michelin X-Ice North Xin3;215;55;18;99T;Winter;Light;Yes;4;9,526
Michelin;Michelin X-Ice North Xin3;225;60;16;102T;Winter;Light;Yes;4;7,113
Michelin;Michelin X-Ice North Xin3;225;55;16;99T;Winter;Light;Yes;4;7,214
Michelin;Michelin X-Ice North Xin3;225;55;17;101T;Winter;Light;Yes;4;8,856
Michelin;Michelin X-Ice North Xin3;225;45;17;94T;Winter;Light;Yes;4;9,285
Michelin;Michelin X-Ice North Xin3;225;50;17;98T;Winter;Light;Yes;4;8,256
Michelin;Michelin X-Ice North Xin3;225;40;18;92T;Winter;Light;Yes;4;10,952
Michelin;Michelin X-Ice North Xin3;225;45;18;95T;Winter;Light;Yes;4;10,954
Michelin;Michelin X-Ice North Xin3;235;55;17;103T;Winter;Light;Yes;4;8,428
Michelin;Michelin X-Ice North Xin3;235;45;17;97T;Winter;Light;Yes;4;9,183
Michelin;Michelin X-Ice North Xin3;235;50;18;101T;Winter;Light;Yes;4;11,411
Michelin;Michelin X-Ice North Xin3;235;40;18;95T;Winter;Light;Yes;4;10,403
Michelin;Michelin X-Ice North Xin3;235;45;18;98T;Winter;Light;Yes;4;12,601
Michelin;Michelin X-Ice North Xin3;245;45;17;99T;Winter;Light;Yes;4;9,892
Michelin;Michelin X-Ice North Xin3;245;45;18;100T;Winter;Light;Yes;4;11,963
Michelin;Michelin X-Ice North Xin3;245;50;18;104T;Winter;Light;Yes;4;12,084
Michelin;Michelin X-Ice North Xin3;245;40;18;97T;Winter;Light;Yes;4;10,857
Michelin;Michelin X-Ice North Xin3;245;45;19;102H;Winter;Light;Yes;4;12,895
Michelin;Michelin X-Ice North Xin3;255;45;18;103T;Winter;Light;Yes;4;11,974
Michelin;Michelin X-Ice North Xin3;255;40;18;99T;Winter;Light;Yes;4;14,428
Michelin;Michelin X-Ice XI2;215;65;15;100T;Winter;Light;;4;5,971
Michelin;Michelin X-Ice XI2;225;55;16;99T;Winter;Light;;4;6,779
Michelin;Michelin X-Ice XI3;155;65;14;75T;Winter;Light;;4;3,711
Michelin;Michelin X-Ice XI3;175;70;13;86T;Winter;Light;;4;3,156
Michelin;Michelin X-Ice XI3;175;65;14;86T;Winter;Light;;4;3,171
Michelin;Michelin X-Ice XI3;175;65;15;88T;Winter;Light;;4;4,139
Michelin;Michelin X-Ice XI3;185;60;14;86H;Winter;Light;;4;3,394
Michelin;Michelin X-Ice XI3;185;65;14;90T;Winter;Light;;4;3,486
Michelin;Michelin X-Ice XI3;185;55;15;86H;Winter;Light;;4;4,799
Michelin;Michelin X-Ice XI3;185;60;15;88H;Winter;Light;;4;3,988
Michelin;Michelin X-Ice XI3;185;65;15;92T;Winter;Light;;4;3,406
Michelin;Michelin X-Ice XI3;185;55;16;87H;Winter;Light;;4;4,854
Michelin;Michelin X-Ice XI3;195;55;15;89H;Winter;Light;;4;5,003
Michelin;Michelin X-Ice XI3;195;60;15;92H;Winter;Light;;4;3,719
Michelin;Michelin X-Ice XI3;195;65;15;95T;Winter;Light;;4;3,552
Michelin;Michelin X-Ice XI3;195;60;16;89H;Winter;Light;;4;6,327
Michelin;Michelin X-Ice XI3;195;55;16;91H;Winter;Light;;4;5,561
Michelin;Michelin X-Ice XI3;205;60;15;95H;Winter;Light;;4;4,601
Michelin;Michelin X-Ice XI3;205;55;16;91H;Winter;Light;;4;5,918
Michelin;Michelin X-Ice XI3;205;55;16;94H;Winter;Light;;4;4,783
Michelin;Michelin X-Ice XI3;205;60;16;96H;Winter;Light;;4;4,902
Michelin;Michelin X-Ice XI3;205;65;16;99T;Winter;Light;;4;5,783
Michelin;Michelin X-Ice XI3;205;50;17;89H;Winter;Light;;4;7,113
Michelin;Michelin X-Ice XI3;215;65;16;102T;Winter;Light;;4;4,919
Michelin;Michelin X-Ice XI3;215;55;16;97H;Winter;Light;;4;6,166
Michelin;Michelin X-Ice XI3;215;60;16;99H;Winter;Light;;4;6,226
Michelin;Michelin X-Ice XI3;215;45;17;91H;Winter;Light;;4;8,708
Michelin;Michelin X-Ice XI3;215;50;17;95H;Winter;Light;;4;7,462
Michelin;Michelin X-Ice XI3;215;60;17;96T;Winter;Light;;4;7,094
Michelin;Michelin X-Ice XI3;215;45;18;93H;Winter;Light;;4;10,210
Michelin;Michelin X-Ice XI3;215;55;18;99H;Winter;Light;;4;10,027
Michelin;Michelin X-Ice XI3;225;60;16;102H;Winter;Light;;4;7,192
Michelin;Michelin X-Ice XI3;225;55;16;99H;Winter;Light;;4;6,851
Michelin;Michelin X-Ice XI3;225;55;17;101H;Winter;Light;;4;8,416
Michelin;Michelin X-Ice XI3;225;45;17;91H;Winter;Light;;4;10,141
Michelin;Michelin X-Ice XI3;225;45;17;94H;Winter;Light;;4;8,377
Michelin;Michelin X-Ice XI3;225;50;17;98H;Winter;Light;;4;7,840
Michelin;Michelin X-Ice XI3;225;60;17;99H;Winter;Light;;4;7,995
Michelin;Michelin X-Ice XI3;225;60;18;100H;Winter;Light;;4;10,903
Michelin;Michelin X-Ice XI3;225;45;18;95H;Winter;Light;;4;10,185
Michelin;Michelin X-Ice XI3;225;55;18;98H;Winter;Light;;4;9,342
Michelin;Michelin X-Ice XI3;235;60;16;100T;Winter;Light;;4;8,532
Michelin;Michelin X-Ice XI3;235;45;17;97H;Winter;Light;;4;8,723
Michelin;Michelin X-Ice XI3;235;40;18;95H;Winter;Light;;4;10,238
Michelin;Michelin X-Ice XI3;235;45;18;98H;Winter;Light;;4;11,718
Michelin;Michelin X-Ice XI3;245;45;17;99H;Winter;Light;;4;9,301
Michelin;Michelin X-Ice XI3;245;45;18;100H;Winter;Light;;4;11,124
Michelin;Michelin X-Ice XI3;245;50;18;104H;Winter;Light;;4;11,893
Michelin;Michelin X-Ice XI3;245;40;18;97H;Winter;Light;;4;10,095
Michelin;Michelin X-Ice XI3;245;45;19;102H;Winter;Light;;4;11,993
Michelin;Michelin X-Ice XI3;245;40;19;98H;Winter;Light;;4;13,677
Michelin;Michelin X-Ice XI3;255;45;18;103H;Winter;Light;;4;11,849
Nexen;Nexen Winguard Ice;175;65;14;82Q;Winter;Light;;4;2,207
Nokian;Nokian Hakka Black;205;50;16;91W;Summer;Light;;4;6,625
Nokian;Nokian Hakka Black;215;55;17;98W;Summer;Light;;4;7,312
Nokian;Nokian Hakka Blue;195;50;15;86V;Summer;Light;;4;3,131
Nokian;Nokian Hakka Blue;215;60;16;99V;Summer;Light;;4;6,023
Nokian;Nokian Hakka Blue;215;50;17;95V;Summer;Light;;4;7,020
Nokian;Nokian Hakka Blue;225;45;17;94V;Summer;Light;;4;6,219
Nokian;Nokian Hakka Blue SUV;225;65;17;106H;Summer;Light;;4;6,823
Nokian;Nokian Hakka Blue SUV;235;65;17;108H;Summer;Light;;4;7,426
Nokian;Nokian Hakka Blue SUV;235;60;18;107H;Summer;Light;;4;9,038
Nokian;Nokian Hakka C2;185;75;16C;104/102S;Summer;Light;;4;4,660
Nokian;Nokian Hakka C2;225;70;15C;112/110R;Summer;Light;;4;5,502
Nokian;Nokian Hakka Green;175;65;14;82T;Summer;Light;;4;2,158
Nokian;Nokian Hakka Green;185;65;14;86H;Summer;Light;;4;2,412
Nokian;Nokian Hakka Green;185;65;15;92H;Summer;Light;;4;2,682
Nokian;Nokian Hakka Green;195;60;15;88H;Summer;Light;;4;3,142
Nokian;Nokian Hakka Green;195;65;15;95H;Summer;Light;;4;2,879
Nokian;Nokian Hakka Green;195;65;15;95T;Summer;Light;;4;2,844
Nokian;Nokian Hakka Green;205;55;16;94H;Summer;Light;;4;3,367
Nokian;Nokian Hakka Green;205;60;16;96H;Summer;Light;;4;4,216
Nokian;Nokian Hakka Green;215;55;16;97H;Summer;Light;;4;5,051
Nokian;Nokian Hakka Green;215;60;16;99H;Summer;Light;;4;4,938
Nokian;Nokian Hakka Green 2;205;55;16;94H;Summer;Light;;4;3,682
Nokian;Nokian Hakka SUV;265;70;16;112T;Summer;Light;;4;6,428
Nokian;Nokian Hakka Z SUV;275;40;20;106Y;Summer;Light;;4;14,259
Nokian;Nokian Rotiiva AT;265;70;18;124/121S;Summer;Light;;4;7,483
Nokian;Nokian Hakkapeliitta 5;205;55;16;94T;Winter;Light;Yes;4;6,679
Nokian;Nokian Hakkapeliitta 5;215;60;17;100T;Winter;Light;Yes;4;11,408
Nokian;Nokian Hakkapeliitta 5 SUV;225;55;18;102T;Winter;Light;Yes;4;9,854
Nokian;Nokian Hakkapeliitta 5 SUV;265;60;18;114T;Winter;Light;Yes;4;10,812
Nokian;Nokian Hakkapeliitta 7;175;70;13;82T;Winter;Light;Yes;4;2,723
Nokian;Nokian Hakkapeliitta 7;175;65;14;86T;Winter;Light;Yes;4;3,159
Nokian;Nokian Hakkapeliitta 7;185;65;14;90T;Winter;Light;Yes;4;3,648
Nokian;Nokian Hakkapeliitta 7;185;60;15;88T;Winter;Light;Yes;4;4,176
Nokian;Nokian Hakkapeliitta 7;195;60;15;92T;Winter;Light;Yes;4;4,034
Nokian;Nokian Hakkapeliitta 7;195;65;15;95T;Winter;Light;Yes;4;3,790
Nokian;Nokian Hakkapeliitta 7;205;55;16;94T;Winter;Light;Yes;4;5,668
Nokian;Nokian Hakkapeliitta 7;205;60;16;96T;Winter;Light;Yes;4;5,831
Nokian;Nokian Hakkapeliitta 7;215;65;16;102T;Winter;Light;Yes;4;8,044
Nokian;Nokian Hakkapeliitta 7;215;55;16;97T;Winter;Light;Yes;4;6,338
Nokian;Nokian Hakkapeliitta 7;215;50;17;95T;Winter;Light;Yes;4;8,086
Nokian;Nokian Hakkapeliitta 7;215;55;17;98T;Winter;Light;Yes;4;8,878
Nokian;Nokian Hakkapeliitta 7;225;55;17;101T;Winter;Light;Yes;4;8,716
Nokian;Nokian Hakkapeliitta 7;225;45;17;94T;Winter;Light;Yes;4;8,950
Nokian;Nokian Hakkapeliitta 7;225;50;17;98T;Winter;Light;Yes;4;8,207
Nokian;Nokian Hakkapeliitta 7;235;50;18;101T;Winter;Light;Yes;4;11,266
Nokian;Nokian Hakkapeliitta 7;255;35;20;97T;Winter;Light;Yes;4;15,552
Nokian;Nokian Hakkapeliitta 7 SUV;215;70;16;100T;Winter;Light;Yes;4;9,162
Nokian;Nokian Hakkapeliitta 7 SUV;225;60;17;103T;Winter;Light;Yes;4;9,082
Nokian;Nokian Hakkapeliitta 7 SUV;225;65;17;106T;Winter;Light;Yes;4;7,985
Nokian;Nokian Hakkapeliitta 7 SUV;235;60;17;106T;Winter;Light;Yes;4;10,859
Nokian;Nokian Hakkapeliitta 7 SUV;235;65;17;108T;Winter;Light;Yes;4;8,461
Nokian;Nokian Hakkapeliitta 7 SUV;235;60;18;107T;Winter;Light;Yes;4;10,209
Nokian;Nokian Hakkapeliitta 7 SUV;245;55;19;107T;Winter;Light;Yes;4;11,275
Nokian;Nokian Hakkapeliitta 7 SUV;255;55;18;109T;Winter;Light;Yes;4;11,296
Nokian;Nokian Hakkapeliitta 7 SUV;255;60;18;112T;Winter;Light;Yes;4;11,926
Nokian;Nokian Hakkapeliitta 7 SUV;255;50;19;107T;Winter;Light;Yes;4;13,328
Nokian;Nokian Hakkapeliitta 7 SUV;265;70;17;115T;Winter;Light;Yes;4;12,230
Nokian;Nokian Hakkapeliitta 7 SUV;265;65;17;116T;Winter;Light;Yes;4;10,056
Nokian;Nokian Hakkapeliitta 7 SUV;265;60;18;114T;Winter;Light;Yes;4;10,128
Nokian;Nokian Hakkapeliitta 7 SUV;265;50;19;110T;Winter;Light;Yes;4;13,500
Nokian;Nokian Hakkapeliitta 7 SUV;265;50;20;111T;Winter;Light;Yes;4;13,562
Nokian;Nokian Hakkapeliitta 7 SUV;265;45;21;108T;Winter;Light;Yes;4;16,355
Nokian;Nokian Hakkapeliitta 7 SUV;295;40;21;111T;Winter;Light;Yes;4;17,350
Nokian;Nokian Hakkapeliitta 8;175;70;13;82T;Winter;Light;Yes;4;3,596
Nokian;Nokian Hakkapeliitta 8;185;55;15;86T;Winter;Light;Yes;4;6,471
Nokian;Nokian Hakkapeliitta 8;185;65;15;92T;Winter;Light;Yes;4;4,562
Nokian;Nokian Hakkapeliitta 8;195;55;15;89T;Winter;Light;Yes;4;6,765
Nokian;Nokian Hakkapeliitta 8;195;60;15;92T;Winter;Light;Yes;4;5,161
Nokian;Nokian Hakkapeliitta 8;195;55;16;91T;Winter;Light;Yes;4;7,588
Nokian;Nokian Hakkapeliitta 8;205;55;16;94T;Winter;Light;Yes;4;7,395
Nokian;Nokian Hakkapeliitta 8;205;60;16;96T;Winter;Light;Yes;4;7,690
Nokian;Nokian Hakkapeliitta 8;215;60;16;99T;Winter;Light;Yes;4;8,564
Nokian;Nokian Hakkapeliitta 8;215;50;17;95T;Winter;Light;Yes;4;10,361
Nokian;Nokian Hakkapeliitta 8;225;55;16;99T;Winter;Light;Yes;4;9,539
Nokian;Nokian Hakkapeliitta 8;225;45;17;94T;Winter;Light;Yes;4;11,459
Nokian;Nokian Hakkapeliitta 8;235;55;17;103T;Winter;Light;Yes;4;11,376
Nokian;Nokian Hakkapeliitta 8 SUV;225;60;17;103T;Winter;Light;Yes;4;11,376
Nokian;Nokian Hakkapeliitta 8 SUV;225;60;17;99T;Winter;Light;Yes;4;15,928
Nokian;Nokian Hakkapeliitta 8 SUV;225;55;18;102T;Winter;Light;Yes;4;12,829
Nokian;Nokian Hakkapeliitta 8 SUV;235;65;17;108T;Winter;Light;Yes;4;10,483
Nokian;Nokian Hakkapeliitta 8 SUV;235;60;18;107T;Winter;Light;Yes;4;12,780
Nokian;Nokian Hakkapeliitta 8 SUV;255;65;17;114T;Winter;Light;Yes;4;13,124
Nokian;Nokian Hakkapeliitta 8 SUV;265;50;20;111T;Winter;Light;Yes;4;16,630
Nokian;Nokian Hakkapeliitta C Van;205;65;15C;102/100R;Winter;Light;Yes;4;5,839
Nokian;Nokian Hakkapeliitta CR Van;195;65;16C;104/102R;Winter;Light;;4;6,436
Nokian;Nokian Hakkapeliitta R;195;55;16;87R;Winter;Light;;4;5,998
Nokian;Nokian Hakkapeliitta R;215;60;16;99R;Winter;Light;;4;7,854
Nokian;Nokian Hakkapeliitta R;225;55;16;99R;Winter;Light;;4;6,144
Nokian;Nokian Hakkapeliitta R SUV;235;70;16;106R;Winter;Light;;4;7,772
Nokian;Nokian Hakkapeliitta R SUV;235;55;19;105R;Winter;Light;;4;8,095
Nokian;Nokian Hakkapeliitta R SUV;255;50;19;107R;Winter;Light;;4;8,388
Nokian;Nokian Hakkapeliitta R SUV;265;65;17;116R;Winter;Light;;4;10,711
Nokian;Nokian Hakkapeliitta R SUV;275;55;19;115R;Winter;Light;;4;8,940
Nokian;Nokian Hakkapeliitta R2;175;70;13;82R;Winter;Light;;4;3,016
Nokian;Nokian Hakkapeliitta R2;185;65;14;90R;Winter;Light;;4;4,114
Nokian;Nokian Hakkapeliitta R2;185;65;15;92R;Winter;Light;;4;3,982
Nokian;Nokian Hakkapeliitta R2;195;65;15;95R;Winter;Light;;4;4,225
Nokian;Nokian Hakkapeliitta R2;195;50;16;88R;Winter;Light;;4;6,532
Nokian;Nokian Hakkapeliitta R2;195;55;16;91R;Winter;Light;;4;6,765
Nokian;Nokian Hakkapeliitta R2;205;65;15;99R;Winter;Light;;4;5,211
Nokian;Nokian Hakkapeliitta R2;205;55;16;94R;Winter;Light;;4;6,369
Nokian;Nokian Hakkapeliitta R2;205;60;16;96R;Winter;Light;;4;6,420
Nokian;Nokian Hakkapeliitta R2;205;65;16;99R;Winter;Light;;4;6,420
Nokian;Nokian Hakkapeliitta R2;235;55;17;103R;Winter;Light;;4;9,975
Nokian;Nokian Hakkapeliitta R2 SUV;215;70;16;100R;Winter;Light;;4;8,990
Nokian;Nokian Hakkapeliitta R2 SUV;215;60;17;100R;Winter;Light;;4;9,356
Nokian;Nokian Hakkapeliitta R2 SUV;225;60;17;103R;Winter;Light;;4;9,640
Nokian;Nokian Hakkapeliitta R2 SUV;225;65;17;106R;Winter;Light;;4;9,011
Nokian;Nokian Hakkapeliitta R2 SUV;225;55;18;102R;Winter;Light;;4;10,432
Nokian;Nokian Hakkapeliitta R2 SUV;225;60;18;104R;Winter;Light;;4;10,585
Nokian;Nokian Hakkapeliitta R2 SUV;235;60;17;106R;Winter;Light;;4;9,955
Nokian;Nokian Hakkapeliitta R2 SUV;235;65;17;108R;Winter;Light;;4;9,468
Nokian;Nokian Hakkapeliitta R2 SUV;235;55;18;104R;Winter;Light;;4;10,626
Nokian;Nokian Hakkapeliitta R2 SUV;235;60;18;107R;Winter;Light;;4;10,209
Nokian;Nokian Hakkapeliitta R2 SUV;235;55;19;105R;Winter;Light;;4;11,083
Nokian;Nokian Hakkapeliitta R2 SUV;255;60;18;112R;Winter;Light;;4;10,809
Nokian;Nokian Hakkapeliitta R2 SUV;265;65;17;116R;Winter;Light;;4;11,154
Nokian;Nokian Hakkapeliitta R2 SUV;285;60;18;116R;Winter;Light;;4;11,915
Nokian;Nokian WR A3;205;55;16;91H;Winter;Light;;4;6,004
Nokian;Nokian WR A3;205;45;17;88V;Winter;Light;;4;11,469
Nokian;Nokian WR D3;185;65;14;90T;Winter;Light;;4;3,281
Nokian;Nokian WR D3;195;60;15;92H;Winter;Light;;4;3,992
Nokian;Nokian WR D3;215;65;16;102H;Winter;Light;;4;5,536
Nokian;Nokian WR D3;215;60;16;99H;Winter;Light;;4;6,511
Nokian;Nokian WR G2 SUV;255;55;18;109V;Winter;Light;;4;8,940
Nokian;Nokian WR SUV 3;225;60;17;103H;Winter;Light;;4;9,285
Nokian;Nokian WR SUV 3;225;65;17;106H;Winter;Light;;4;9,132
Nokian;Nokian WR SUV 3;225;55;18;102H;Winter;Light;;4;9,925
Nokian;Nokian WR SUV 3;235;60;18;107V;Winter;Light;;4;10,016
Nokian;Nokian WR SUV 3;255;50;19;107V;Winter;Light;;4;12,140
Nokian;Nokian WR SUV 3;265;60;18;114H;Winter;Light;;4;10,219
Nordman;Nordman Nordman S SUV;215;70;16;100T;Summer;Light;;4;4,982
Nordman;Nordman Nordman S SUV;215;65;16;98H;Summer;Light;;4;4,774
Nordman;Nordman Nordman S SUV;225;70;16;103T;Summer;Light;;4;4,930
Nordman;Nordman Nordman S SUV;225;65;17;102H;Summer;Light;;4;5,908
Nordman;Nordman Nordman S SUV;235;65;17;104H;Summer;Light;;4;6,147
Nordman;Nordman Nordman S SUV;235;55;17;99H;Summer;Light;;4;7,260
Nordman;Nordman Nordman S SUV;255;55;18;105H;Summer;Light;;4;7,228
Nordman;Nordman Nordman SX;175;65;14;82T;Summer;Light;;4;2,080
Nordman;Nordman Nordman SX;185;65;14;86H;Summer;Light;;4;2,288
Nordman;Nordman Nordman SX;195;50;15;82V;Summer;Light;;4;2,631
Nordman;Nordman Nordman SX;195;60;15;88H;Summer;Light;;4;3,192
Nordman;Nordman Nordman SX;205;60;15;91H;Summer;Light;;4;3,369
Nordman;Nordman Nordman SX;205;65;15;94H;Summer;Light;;4;3,048
Nordman;Nordman Nordman SX;205;60;16;92H;Summer;Light;;4;3,901
Nordman;Nordman Nordman 4;205;55;16;94T;Winter;Light;Yes;4;4,144
Nordman;Nordman Nordman 4;215;55;16;97T;Winter;Light;Yes;4;4,642
Nordman;Nordman Nordman 5;175;70;13;82T;Winter;Light;Yes;4;2,235
Nordman;Nordman Nordman 5;175;65;14;86T;Winter;Light;Yes;4;2,397
Nordman;Nordman Nordman 5;185;60;14;82T;Winter;Light;Yes;4;2,734
Nordman;Nordman Nordman 5;185;70;14;92T;Winter;Light;Yes;4;2,742
Nordman;Nordman Nordman 5;195;55;15;89T;Winter;Light;Yes;4;3,820
Nordman;Nordman Nordman 5;205;65;15;99T;Winter;Light;Yes;4;3,139
Nordman;Nordman Nordman 5;205;55;16;94T;Winter;Light;Yes;4;4,176
Nordman;Nordman Nordman 5;205;60;16;96T;Winter;Light;Yes;4;4,256
Nordman;Nordman Nordman 5 SUV;235;65;17;108T;Winter;Light;Yes;4;6,502
Nordman;Nordman Nordman 5 SUV;255;60;18;112T;Winter;Light;Yes;4;8,270
Nordman;Nordman Nordman 5 SUV;265;70;17;115T;Winter;Light;Yes;4;8,573
Nordman;Nordman Nordman RS;195;55;15;89R;Winter;Light;;4;3,718
Nordman;Nordman Nordman RS;215;65;16;102R;Winter;Light;;4;4,490
Nordman;Nordman Nordman RS2 SUV;215;65;16;102R;Winter;Light;;4;4,582
Nordman;Nordman Nordman SUV;215;70;16;100T;Winter;Light;Yes;4;5,363
Nordman;Nordman Nordman SUV;245;65;17;107T;Winter;Light;Yes;4;5,892
Pirelli;Pirelli Cinturato P1 Verde;175;65;14;82T;Summer;Light;;4;2,277
Pirelli;Pirelli Cinturato P1 Verde;185;65;14;86H;Summer;Light;;4;2,291
Pirelli;Pirelli Cinturato P1 Verde;185;65;14;86T;Summer;Light;;4;2,541
Pirelli;Pirelli Cinturato P1 Verde;185;60;15;84H;Summer;Light;;4;2,485
Pirelli;Pirelli Cinturato P1 Verde;185;65;15;88T;Summer;Light;;4;2,773
Pirelli;Pirelli Cinturato P1 Verde;195;55;15;85H;Summer;Light;;4;3,968
Pirelli;Pirelli Cinturato P1 Verde;195;60;15;88V;Summer;Light;;4;3,137
Pirelli;Pirelli Cinturato P1 Verde;195;65;15;91H;Summer;Light;;4;2,995
Pirelli;Pirelli Cinturato P1 Verde;195;65;15;91T;Summer;Light;;4;2,389
Pirelli;Pirelli Cinturato P1 Verde;195;65;15;91V;Summer;Light;;4;2,995
Pirelli;Pirelli Cinturato P1 Verde;195;55;16;87H;Summer;Light;;4;4,524
Pirelli;Pirelli Cinturato P1 Verde;205;55;16;91H;Summer;Light;;4;3,390
Pirelli;Pirelli Cinturato P4;175;65;14;82T;Summer;Light;;4;2,501
Pirelli;Pirelli Cinturato P4;175;70;14;84T;Summer;Light;;4;2,467
Pirelli;Pirelli Cinturato P4;185;70;14;88T;Summer;Light;;4;2,944
Pirelli;Pirelli Cinturato P6;185;60;14;82H;Summer;Light;;4;2,064
Pirelli;Pirelli Cinturato P6;185;65;15;88H;Summer;Light;;4;2,435
Pirelli;Pirelli Cinturato P6;195;60;15;88H;Summer;Light;;4;2,910
Pirelli;Pirelli Cinturato P6;195;65;15;91V;Summer;Light;;4;2,572
Pirelli;Pirelli Cinturato P7;205;55;16;91H;Summer;Light;;4;4,007
Pirelli;Pirelli Cinturato P7;205;55;16;91V;Summer;Light;;4;3,512
Pirelli;Pirelli Cinturato P7;205;60;16;92H;Summer;Light;;4;3,968
Pirelli;Pirelli Cinturato P7 Blue;225;55;16;95V;Summer;Light;;4;5,657
Pirelli;Pirelli P Zero Asimmetrico;255;45;18;99Y;Summer;Light;;4;10,041
Pirelli;Pirelli P Zero Nero GT;245;45;17;99Y;Summer;Light;;4;6,534
Pirelli;Pirelli P Zero Rosso Asimmetrico;275;45;19;108Y;Summer;Light;;4;14,726
Pirelli;Pirelli P Zero Rosso Asimmetrico;315;35;20;106Y;Summer;Light;;4;19,381
Pirelli;Pirelli Scorpion ATR;235;65;17;108H;Demiseason;Light;;4;6,953
Pirelli;Pirelli Scorpion ATR;255;55;19;111H;Demiseason;Light;;4;10,759
Pirelli;Pirelli Scorpion STR;215;65;16;98H;Demiseason;Light;;4;5,517
Pirelli;Pirelli Scorpion STR;265;60;18;110H;Demiseason;Light;;4;8,798
Pirelli;Pirelli Scorpion Verde;215;60;17;96V;Summer;Light;;4;7,748
Pirelli;Pirelli Scorpion Verde;225;65;17;102H;Summer;Light;;4;5,445
Pirelli;Pirelli Scorpion Verde;235;70;16;106H;Summer;Light;;4;5,749
Pirelli;Pirelli Scorpion Verde;255;50;19;103W;Summer;Light;;4;11,760
Pirelli;Pirelli Scorpion Verde All-Season;205;70;15;96H;Demiseason;Light;;4;5,000
Pirelli;Pirelli Scorpion Verde All-Season;235;55;17;99V;Demiseason;Light;;4;8,471
Pirelli;Pirelli Scorpion Verde All-Season;255;60;17;106V;Demiseason;Light;;4;8,492
Pirelli;Pirelli Scorpion Zero;235;60;18;103V;Summer;Light;;4;8,745
Pirelli;Pirelli Scorpion Zero;255;55;19;111V;Summer;Light;;4;11,619
Pirelli;Pirelli Scorpion Zero;285;55;18;113V;Summer;Light;;4;10,182
Pirelli;Pirelli Scorpion Zero Asimmetrico;235;60;17;102V;Summer;Light;;4;9,716
Pirelli;Pirelli Scorpion Zero Asimmetrico;235;50;18;97H;Summer;Light;;4;7,888
Pirelli;Pirelli Scorpion Zero Asimmetrico;255;55;18;109H;Summer;Light;;4;9,251
Pirelli;Pirelli Chrono Winter;195;75;16C;107/105R;Winter;Light;Yes;4;5,526
Pirelli;Pirelli Ice Zero;195;65;15;95T;Winter;Light;Yes;4;3,504
Pirelli;Pirelli Ice Zero;205;55;16;94T;Winter;Light;Yes;4;4,923
Pirelli;Pirelli Ice Zero;215;65;16;102T;Winter;Light;Yes;4;4,764
Pirelli;Pirelli Ice Zero;225;45;17;94T;Winter;Light;Yes;4;7,877
Pirelli;Pirelli Ice Zero FR;175;65;14;82T;Winter;Light;;4;2,679
Pirelli;Pirelli Ice Zero FR;215;65;16;102T;Winter;Light;;4;4,733
Pirelli;Pirelli Scorpion Winter;225;65;17;102T;Winter;Light;;4;7,252
Pirelli;Pirelli Scorpion Winter;255;55;19;111V;Winter;Light;;4;11,265
Pirelli;Pirelli Winter Carving Edge;215;65;16;98T;Winter;Light;Yes;4;4,767
Pirelli;Pirelli Winter Carving Edge;215;60;16;99T;Winter;Light;Yes;4;4,252
Pirelli;Pirelli Winter Carving Edge;215;60;17;100T;Winter;Light;Yes;4;6,669
Pirelli;Pirelli Winter Carving Edge;215;55;17;98T;Winter;Light;Yes;4;5,896
Pirelli;Pirelli Winter Carving Edge;225;60;17;103T;Winter;Light;Yes;4;6,691
Pirelli;Pirelli Winter Carving Edge;225;45;17;94T;Winter;Light;Yes;4;6,234
Pirelli;Pirelli Winter Carving Edge;225;50;17;98T;Winter;Light;Yes;4;5,892
Pirelli;Pirelli Winter Carving Edge;235;65;17;108T;Winter;Light;Yes;4;6,827
Pirelli;Pirelli Winter Carving Edge;265;60;18;114T;Winter;Light;Yes;4;7,739
Pirelli;Pirelli Winter Ice Control;185;65;15;92T;Winter;Light;;4;3,070
Pirelli;Pirelli Winter SnowControl Serie II;195;50;15;82H;Winter;Light;;4;4,066
Pirelli;Pirelli Winter SnowControl Serie III;185;65;14;86T;Winter;Light;;4;3,038
Pirelli;Pirelli Winter SnowControl Serie III;195;65;15;95T;Winter;Light;;4;3,070
Pirelli;Pirelli Winter SottoZero;215;60;17;96H;Winter;Light;;4;6,194
Pirelli;Pirelli Winter SottoZero Serie III;205;55;17;95H;Winter;Light;;4;7,697
Tigar;Tigar Cargo Speed;185;0;15C;103/102R;Summer;Light;;4;3,608
Tigar;Tigar Cargo Speed;195;65;16C;104/102R;Summer;Light;;4;3,759
Tigar;Tigar Prima;195;50;15;82H;Summer;Light;;4;2,442
Tigar;Tigar Prima;195;60;15;88H;Summer;Light;;4;2,604
Tigar;Tigar Prima;195;65;15;91V;Summer;Light;;4;2,184
Tigar;Tigar Prima;205;60;15;91H;Summer;Light;;4;2,938
Tigar;Tigar Sigura;155;65;13;73T;Summer;Light;;4;1,752
Tigar;Tigar Sigura;165;65;13;77T;Summer;Light;;4;1,773
Tigar;Tigar Sigura;175;65;14;82H;Summer;Light;;4;2,067
Tigar;Tigar Sigura;175;70;14;84T;Summer;Light;;4;2,138
Tigar;Tigar Sigura;185;60;14;82H;Summer;Light;;4;2,098
Tigar;Tigar Sigura;185;65;14;86H;Summer;Light;;4;2,219
Tigar;Tigar Sigura;185;65;15;88H;Summer;Light;;4;2,371
Tigar;Tigar SUV Summer;215;70;16;100H;Summer;Light;;4;3,982
Tigar;Tigar SUV Summer;225;65;17;106H;Summer;Light;;4;4,590
Tigar;Tigar SUV Summer;235;65;17;108V;Summer;Light;;4;5,410
Tigar;Tigar Syneris;205;55;16;94V;Summer;Light;;4;2,878
Tigar;Tigar Syneris;215;60;16;99V;Summer;Light;;4;3,698
Tigar;Tigar Cargo Speed Winter;215;65;16C;109/107R;Winter;Light;Yes;4;4,366
Tigar;Tigar Sigura Stud;175;70;13;82T;Winter;Light;Yes;4;1,946
Tigar;Tigar Sigura Stud;175;65;14;82T;Winter;Light;Yes;4;1,855
Tigar;Tigar Sigura Stud;185;60;14;82T;Winter;Light;Yes;4;2,224
Tigar;Tigar Sigura Stud;185;65;14;86T;Winter;Light;Yes;4;2,126
Tigar;Tigar Sigura Stud;185;70;14;88T;Winter;Light;Yes;4;2,239
Tigar;Tigar Sigura Stud;195;65;15;95T;Winter;Light;Yes;4;2,287
Tigar;Tigar Sigura Stud;205;65;15;99T;Winter;Light;Yes;4;2,545
Tigar;Tigar Sigura Stud;215;55;16;97T;Winter;Light;Yes;4;3,515
Tigar;Tigar Winter 1;155;80;13;79Q;Winter;Light;;4;1,883
Tigar;Tigar Winter 1;175;70;13;82T;Winter;Light;;4;1,847
Tigar;Tigar Winter 1;185;65;14;86T;Winter;Light;;4;2,015
Tigar;Tigar Winter 1;185;70;14;88T;Winter;Light;;4;2,126
Tigar;Tigar Winter 1;195;60;15;88T;Winter;Light;;4;2,399
Tigar;Tigar Winter 1;195;55;16;87H;Winter;Light;;4;3,779
Yokohama;Yokohama Advan S.T. V802;275;40;20;106Y;Summer;Light;;4;13,210
Yokohama;Yokohama BluEarth AE-01;175;70;13;82T;Summer;Light;;4;2,002
Yokohama;Yokohama BluEarth AE-01;185;70;14;88T;Summer;Light;;4;2,615
Yokohama;Yokohama BluEarth AE-01;185;60;15;84H;Summer;Light;;4;2,475
Yokohama;Yokohama BluEarth AE-01;205;60;15;91H;Summer;Light;;4;3,046
Yokohama;Yokohama BluEarth AE-01;205;55;16;91H;Summer;Light;;4;3,204
Yokohama;Yokohama BluEarth AE-01A;185;60;14;82T;Summer;Light;;4;2,104
Yokohama;Yokohama BluEarth AE-01A;195;50;15;82T;Summer;Light;;4;2,473
Yokohama;Yokohama BluEarth-A AE-50;185;65;15;88H;Summer;Light;;4;2,728
Yokohama;Yokohama BluEarth-A AE-50;205;60;16;92V;Summer;Light;;4;3,642
Yokohama;Yokohama BluEarth-A AE-50;205;55;16;94V;Summer;Light;;4;3,312
Yokohama;Yokohama C.drive2 AC02;185;60;14;82H;Summer;Light;;4;2,268
Yokohama;Yokohama C.drive2 AC02;185;65;14;86H;Summer;Light;;4;2,314
Yokohama;Yokohama C.drive2 AC02;185;55;15;82V;Summer;Light;;4;3,145
Yokohama;Yokohama C.drive2 AC02;185;65;15;88H;Summer;Light;;4;2,592
Yokohama;Yokohama C.drive2 AC02;185;60;15;88H;Summer;Light;;4;2,545
Yokohama;Yokohama C.drive2 AC02;195;60;14;86H;Summer;Light;;4;2,779
Yokohama;Yokohama C.drive2 AC02;195;50;15;82H;Summer;Light;;4;2,662
Yokohama;Yokohama C.drive2 AC02;195;55;15;85V;Summer;Light;;4;3,504
Yokohama;Yokohama C.drive2 AC02;195;60;15;88H;Summer;Light;;4;3,018
Yokohama;Yokohama C.drive2 AC02;195;65;15;95H;Summer;Light;;4;2,717
Yokohama;Yokohama C.drive2 AC02;195;55;16;87V;Summer;Light;;4;4,264
Yokohama;Yokohama C.drive2 AC02;205;60;15;95H;Summer;Light;;4;3,180
Yokohama;Yokohama C.drive2 AC02;205;65;15;99H;Summer;Light;;4;3,211
Yokohama;Yokohama C.drive2 AC02;205;55;16;91H;Summer;Light;;4;3,241
Yokohama;Yokohama C.drive2 AC02;205;60;16;92V;Summer;Light;;4;3,461
Yokohama;Yokohama C.drive2 AC02;205;50;17;93W;Summer;Light;;4;4,903
Yokohama;Yokohama C.drive2 AC02;215;65;15;100H;Summer;Light;;4;3,494
Yokohama;Yokohama C.drive2 AC02;215;55;16;97W;Summer;Light;;4;4,920
Yokohama;Yokohama C.drive2 AC02;215;60;16;99V;Summer;Light;;4;4,116
Yokohama;Yokohama C.drive2 AC02;215;45;17;91W;Summer;Light;;4;5,289
Yokohama;Yokohama C.drive2 AC02;225;60;16;98W;Summer;Light;;4;4,641
Yokohama;Yokohama C.drive2 AC02;225;55;16;99W;Summer;Light;;4;5,281
Yokohama;Yokohama RY818;185;0;14C;102/100R;Summer;Light;;4;3,677
Yokohama;Yokohama Advan Winter V902;265;35;20;99V;Winter;Light;;4;16,225
Yokohama;Yokohama Geolandar I/T-S G073;215;70;16;100Q;Winter;Light;;4;6,036
Yokohama;Yokohama Geolandar I/T-S G073;225;70;16;103Q;Winter;Light;;4;5,810
Yokohama;Yokohama Geolandar I/T-S G073;235;70;16;106Q;Winter;Light;;4;5,994
Yokohama;Yokohama Geolandar I/T-S G073;235;65;17;108Q;Winter;Light;;4;6,390
Yokohama;Yokohama Geolandar I/T-S G073;255;50;19;107Q;Winter;Light;;4;9,612
Yokohama;Yokohama Geolandar I/T-S G073;255;55;19;111Q;Winter;Light;;4;9,461
Yokohama;Yokohama Geolandar I/T-S G073;265;45;21;104Q;Winter;Light;;4;10,909
Yokohama;Yokohama Geolandar I/T-S G073;275;45;19;108Q;Winter;Light;;4;11,705
Yokohama;Yokohama Geolandar I/T-S G073;275;40;20;106Q;Winter;Light;;4;10,749
Yokohama;Yokohama Geolandar I/T-S G073;295;45;20;114Q;Winter;Light;;4;17,615
Yokohama;Yokohama Geolandar I/T-S G073;295;35;21;107Q;Winter;Light;;4;13,104
Yokohama;Yokohama iceGuard Stud F700S;225;45;17;91Q;Winter;Light;Yes;4;4,832
Yokohama;Yokohama iceGuard Stud iG35;175;70;14;84T;Winter;Light;Yes;4;2,324
Yokohama;Yokohama iceGuard Stud iG35;175;65;14;86T;Winter;Light;Yes;4;2,240
Yokohama;Yokohama iceGuard Stud iG35;185;60;14;82T;Winter;Light;Yes;4;2,748
Yokohama;Yokohama iceGuard Stud iG35;185;70;14;92T;Winter;Light;Yes;4;2,569
Yokohama;Yokohama iceGuard Stud iG35;185;70;14;92T;Winter;Light;Yes;4;2,441
Yokohama;Yokohama iceGuard Stud iG35;195;55;15;89T;Winter;Light;Yes;4;3,441
Yokohama;Yokohama iceGuard Stud iG35;195;55;15;89T;Winter;Light;Yes;4;3,441
Yokohama;Yokohama iceGuard Stud iG35;195;60;15;92T;Winter;Light;Yes;4;2,910
Yokohama;Yokohama iceGuard Stud iG35;195;65;15;95T;Winter;Light;Yes;4;2,784
Yokohama;Yokohama iceGuard Stud iG35;195;65;15;95T;Winter;Light;Yes;4;2,646
Yokohama;Yokohama iceGuard Stud iG35;205;55;16;94T;Winter;Light;Yes;4;4,179
Yokohama;Yokohama iceGuard Stud iG35;205;60;16;96T;Winter;Light;Yes;4;4,253
Yokohama;Yokohama iceGuard Stud iG35;215;70;16;100T;Winter;Light;Yes;4;5,662
Yokohama;Yokohama iceGuard Stud iG35;215;65;16;102T;Winter;Light;Yes;4;4,204
Yokohama;Yokohama iceGuard Stud iG35;215;55;16;97T;Winter;Light;Yes;4;4,618
Yokohama;Yokohama iceGuard Stud iG35;215;60;16;99T;Winter;Light;Yes;4;4,606
Yokohama;Yokohama iceGuard Stud iG35;215;60;17;100T;Winter;Light;Yes;4;5,982
Yokohama;Yokohama iceGuard Stud iG35;215;60;17;100T;Winter;Light;Yes;4;5,712
Yokohama;Yokohama iceGuard Stud iG35;215;50;17;95T;Winter;Light;Yes;4;5,821
Yokohama;Yokohama iceGuard Stud iG35;215;55;17;98T;Winter;Light;Yes;4;6,604
Yokohama;Yokohama iceGuard Stud iG35;215;55;18;95T;Winter;Light;Yes;4;8,364
Yokohama;Yokohama iceGuard Stud iG35;225;55;16;99T;Winter;Light;Yes;4;5,520
Yokohama;Yokohama iceGuard Stud iG35;225;60;17;103T;Winter;Light;Yes;4;6,584
Yokohama;Yokohama iceGuard Stud iG35;225;45;17;94T;Winter;Light;Yes;4;6,530
Yokohama;Yokohama iceGuard Stud iG35;225;50;17;98T;Winter;Light;Yes;4;6,439
Yokohama;Yokohama iceGuard Stud iG35;225;55;18;98T;Winter;Light;Yes;4;6,024
Yokohama;Yokohama iceGuard Stud iG35;235;55;17;103T;Winter;Light;Yes;4;7,184
Yokohama;Yokohama iceGuard Stud iG35;235;55;17;103T;Winter;Light;Yes;4;6,849
Yokohama;Yokohama iceGuard Stud iG35;235;65;17;108T;Winter;Light;Yes;4;5,816
Yokohama;Yokohama iceGuard Stud iG35;235;60;18;107T;Winter;Light;Yes;4;7,464
Yokohama;Yokohama iceGuard Stud iG35;255;50;19;107T;Winter;Light;Yes;4;8,678
Yokohama;Yokohama iceGuard Stud iG35;265;65;17;112T;Winter;Light;Yes;4;7,055
Yokohama;Yokohama iceGuard Stud iG35;265;65;17;112T;Winter;Light;Yes;4;6,703
Yokohama;Yokohama iceGuard Stud iG35;265;60;18;110T;Winter;Light;Yes;4;8,074
Yokohama;Yokohama iceGuard Stud iG35;265;50;20;111T;Winter;Light;Yes;4;9,686
Yokohama;Yokohama iceGuard Stud iG35;265;45;21;104T;Winter;Light;Yes;4;10,417
Yokohama;Yokohama iceGuard Stud iG35;275;65;17;115T;Winter;Light;Yes;4;6,904
Yokohama;Yokohama iceGuard Stud iG35;275;40;20;106T;Winter;Light;Yes;4;8,174
Yokohama;Yokohama iceGuard Stud iG35;275;45;20;110T;Winter;Light;Yes;4;10,001
Yokohama;Yokohama iceGuard Stud iG35;285;65;17;116T;Winter;Light;Yes;4;6,717
Yokohama;Yokohama iceGuard Stud iG35;285;60;18;116T;Winter;Light;Yes;4;8,325
Yokohama;Yokohama iceGuard Stud iG35;285;60;18;116T;Winter;Light;Yes;4;7,908
Yokohama;Yokohama iceGuard Stud iG35;295;35;21;107T;Winter;Light;Yes;4;13,292
Yokohama;Yokohama iceGuard Stud iG55;175;65;14;86T;Winter;Light;Yes;4;2,554
Yokohama;Yokohama iceGuard Stud iG55;185;65;14;90T;Winter;Light;Yes;4;2,951
Yokohama;Yokohama iceGuard Stud iG55;185;70;14;92T;Winter;Light;Yes;4;2,781
Yokohama;Yokohama iceGuard Stud iG55;185;65;15;92T;Winter;Light;Yes;4;2,982
Yokohama;Yokohama iceGuard Stud iG55;195;55;15;89T;Winter;Light;Yes;4;3,990
Yokohama;Yokohama iceGuard Stud iG55;195;60;15;92T;Winter;Light;Yes;4;3,098
Yokohama;Yokohama iceGuard Stud iG55;195;65;15;95T;Winter;Light;Yes;4;3,028
Yokohama;Yokohama iceGuard Stud iG55;205;55;16;94T;Winter;Light;Yes;4;4,562
Yokohama;Yokohama iceGuard Stud iG55;215;65;16;102T;Winter;Light;Yes;4;4,388
Yokohama;Yokohama iceGuard Stud iG55;215;55;16;97T;Winter;Light;Yes;4;4,950
Yokohama;Yokohama iceGuard Stud iG55;215;60;17;100T;Winter;Light;Yes;4;6,434
Yokohama;Yokohama iceGuard Stud iG55;225;60;17;103T;Winter;Light;Yes;4;7,135
Yokohama;Yokohama iceGuard Stud iG55;225;65;17;106T;Winter;Light;Yes;4;6,280
Yokohama;Yokohama iceGuard Stud iG55;225;50;17;98T;Winter;Light;Yes;4;6,853
Yokohama;Yokohama iceGuard Stud iG55;225;55;18;102T;Winter;Light;Yes;4;6,409
Yokohama;Yokohama iceGuard Stud iG55;255;55;18;109T;Winter;Light;Yes;4;7,030
Yokohama;Yokohama iceGuard Stud iG55;255;50;19;107T;Winter;Light;Yes;4;9,573
Yokohama;Yokohama iceGuard Stud iG55;285;50;20;112T;Winter;Light;Yes;4;11,239
Yokohama;Yokohama iceGuard Studless iG30;185;70;14;88Q;Winter;Light;;4;2,584
Yokohama;Yokohama iceGuard Studless iG30;185;65;15;88Q;Winter;Light;;4;2,900
Yokohama;Yokohama iceGuard Studless iG30;195;65;15;91Q;Winter;Light;;4;2,835
Yokohama;Yokohama iceGuard Studless iG30;215;60;16;95Q;Winter;Light;;4;4,632
Yokohama;Yokohama iceGuard Studless iG30;215;60;17;96Q;Winter;Light;;4;5,291
Yokohama;Yokohama iceGuard Studless iG30;225;55;17;97Q;Winter;Light;;4;6,576
Yokohama;Yokohama iceGuard Studless iG50;155;65;13;73Q;Winter;Light;;4;2,526
Yokohama;Yokohama iceGuard Studless iG50;155;70;13;75Q;Winter;Light;;4;2,338
Yokohama;Yokohama iceGuard Studless iG50;185;65;14;86Q;Winter;Light;;4;2,803
Yokohama;Yokohama iceGuard Studless iG50;185;60;15;84Q;Winter;Light;;4;3,209
Yokohama;Yokohama iceGuard Studless iG50;195;65;15;91Q;Winter;Light;;4;2,989
Yokohama;Yokohama iceGuard Studless iG50;205;60;15;91Q;Winter;Light;;4;3,377
Yokohama;Yokohama iceGuard Studless iG50;205;65;15;94Q;Winter;Light;;4;3,497
Yokohama;Yokohama iceGuard Studless iG50;215;65;16;98Q;Winter;Light;;4;4,368
Yokohama;Yokohama iceGuard Studless iG50;215;55;18;95Q;Winter;Light;;4;8,367
Yokohama;Yokohama iceGuard Studless iG50;225;60;16;98Q;Winter;Light;;4;4,519
Yokohama;Yokohama iceGuard Studless iG50+;175;70;13;82Q;Winter;Light;;4;2,437
Yokohama;Yokohama iceGuard Studless iG50+;175;65;14;82Q;Winter;Light;;4;2,534
Yokohama;Yokohama iceGuard Studless iG50+;185;60;14;82Q;Winter;Light;;4;2,932
Yokohama;Yokohama iceGuard Studless iG50+;195;65;15;91Q;Winter;Light;;4;2,989
Yokohama;Yokohama iceGuard Studless iG50+;205;55;16;91Q;Winter;Light;;4;4,657
Yokohama;Yokohama iceGuard Studless iG50+;205;60;16;92Q;Winter;Light;;4;4,477
Yokohama;Yokohama iceGuard Studless iG50+;205;50;17;93Q;Winter;Light;;4;5,369
Yokohama;Yokohama iceGuard Studless iG50+;215;65;16;98Q;Winter;Light;;4;4,368
Yokohama;Yokohama iceGuard Studless iG50+;215;60;17;96Q;Winter;Light;;4;5,566
Yokohama;Yokohama iceGuard Studless iG50+;215;55;18;95Q;Winter;Light;;4;8,367
Yokohama;Yokohama iceGuard Studless iG50+;225;55;16;99Q;Winter;Light;;4;5,691
Yokohama;Yokohama iceGuard Studless iG50+;225;45;17;91Q;Winter;Light;;4;7,277
Yokohama;Yokohama W.drive V902A;225;65;17;102H;Winter;Light;;4;6,391
Yokohama;Yokohama W.drive WY01;205;65;16C;107/105T;Winter;Light;;4;5,650
BFGoodrich;BFGoodrich Activan;165;70;14C;89/87R;Summer;Light;;4;4,046
BFGoodrich;BFGoodrich Activan;215;75;16C;116/114R;Summer;Light;;4;8,092
BFGoodrich;BFGoodrich All Terrain T/A KO;12.5;33;15;108R;Demiseason;Light;;4;10,643
BFGoodrich;BFGoodrich All Terrain T/A KO;225;70;16;102R;Demiseason;Light;;4;8,435
BFGoodrich;BFGoodrich All Terrain T/A KO;245;70;17;119/116R;Demiseason;Light;;4;10,354
BFGoodrich;BFGoodrich All Terrain T/A KO;315;70;17;121/118R;Demiseason;Light;;4;15,921
BFGoodrich;BFGoodrich All Terrain T/A KO2;10.5;31;15;109S;Demiseason;Light;;4;10,547
BFGoodrich;BFGoodrich All Terrain T/A KO2;9.5;30;15;104S;Demiseason;Light;;4;9,548
BFGoodrich;BFGoodrich All Terrain T/A KO2;225;75;16C;115/112S;Demiseason;Light;;4;9,164
BFGoodrich;BFGoodrich All Terrain T/A KO2;225;65;17C;107/103S;Demiseason;Light;;4;12,492
BFGoodrich;BFGoodrich All Terrain T/A KO2;235;75;15C;104/101S;Demiseason;Light;;4;9,297
BFGoodrich;BFGoodrich All Terrain T/A KO2;245;75;16C;120/116S;Demiseason;Light;;4;11,409
BFGoodrich;BFGoodrich All Terrain T/A KO2;245;65;17C;111/108S;Demiseason;Light;;4;11,909
BFGoodrich;BFGoodrich All Terrain T/A KO2;265;75;16C;119/116R;Demiseason;Light;;4;12,231
BFGoodrich;BFGoodrich All Terrain T/A KO2;275;70;16C;119/116S;Demiseason;Light;;4;11,847
BFGoodrich;BFGoodrich All Terrain T/A KO2;275;65;17C;121/118S;Demiseason;Light;;4;11,783
BFGoodrich;BFGoodrich G-Grip;165;70;14;81T;Summer;Light;;4;2,746
BFGoodrich;BFGoodrich G-Grip;195;50;15;82H;Summer;Light;;4;3,234
BFGoodrich;BFGoodrich Mud Terrain T/A KM2;11.5;32;15;113Q;Demiseason;Light;;4;12,751
BFGoodrich;BFGoodrich Mud Terrain T/A KM2;12.5;35;15;113Q;Demiseason;Light;;4;14,780
BFGoodrich;BFGoodrich Mud Terrain T/A KM2;215;75;15;100/97Q;Demiseason;Light;;4;9,121
BFGoodrich;BFGoodrich Mud Terrain T/A KM2;235;75;15C;104/101Q;Demiseason;Light;;4;9,756
BFGoodrich;BFGoodrich Mud Terrain T/A KM2;245;70;17;119/116Q;Demiseason;Light;;4;12,658
BFGoodrich;BFGoodrich G-Force Stud;195;65;15;95Q;Winter;Light;Yes;4;3,097
BFGoodrich;BFGoodrich Winter Slalom Ksi;225;65;17;102S;Winter;Light;;4;7,993
BFGoodrich;BFGoodrich Winter Slalom Ksi;225;60;17;99S;Winter;Light;;4;8,435
BFGoodrich;BFGoodrich Winter Slalom Ksi;255;70;16;111S;Winter;Light;;4;7,964
Bridgestone;Bridgestone Dueler A/T 697;9.5;30;15;104S;Demiseason;Light;;4;6,129
Bridgestone;Bridgestone Dueler A/T 697;215;75;15;100S;Demiseason;Light;;4;5,118
Bridgestone;Bridgestone Dueler A/T 697;235;75;15;104/101S;Demiseason;Light;;4;5,952
Bridgestone;Bridgestone Dueler A/T 697;235;70;16;106T;Demiseason;Light;;4;6,828
Bridgestone;Bridgestone Dueler A/T 697;275;65;17;115T;Demiseason;Light;;4;8,537
Bridgestone;Bridgestone Dueler H/L 400;235;55;19;101H;Summer;Light;;4;11,550
Bridgestone;Bridgestone Dueler H/P Sport;215;65;16;98H;Summer;Light;;4;5,503
Bridgestone;Bridgestone Dueler H/P Sport;215;60;17;96H;Summer;Light;;4;8,276
Bridgestone;Bridgestone Dueler H/P Sport;215;55;18;99V;Summer;Light;;4;8,714
Bridgestone;Bridgestone Dueler H/P Sport;225;55;17;97W;Summer;Light;;4;7,390
Bridgestone;Bridgestone Dueler H/P Sport;235;65;18;106H;Summer;Light;;4;8,329
Bridgestone;Bridgestone Dueler H/P Sport;245;45;19;102W;Summer;Light;;4;14,072
Bridgestone;Bridgestone Dueler H/P Sport;255;60;17;106V;Summer;Light;;4;8,777
Bridgestone;Bridgestone Dueler H/P Sport;255;60;18;112V;Summer;Light;;4;10,424
Bridgestone;Bridgestone Dueler H/P Sport;255;50;19;103V;Summer;Light;;4;12,102
Bridgestone;Bridgestone Dueler H/P Sport;255;50;20;109V;Summer;Light;;4;13,311
Bridgestone;Bridgestone Dueler H/P Sport;265;60;18;109V;Summer;Light;;4;9,903
Bridgestone;Bridgestone Dueler H/P Sport;275;55;19;111V;Summer;Light;;4;14,364
Bridgestone;Bridgestone Dueler H/P Sport;285;60;18;116V;Summer;Light;;4;10,612
Bridgestone;Bridgestone Dueler H/P Sport;285;45;19;107V;Summer;Light;;4;12,728
Bridgestone;Bridgestone Ecopia EP150;175;65;14;82H;Summer;Light;;4;2,512
Bridgestone;Bridgestone Ecopia EP150;175;70;14;84H;Summer;Light;;4;2,731
Bridgestone;Bridgestone Ecopia EP150;185;60;14;82H;Summer;Light;;4;2,532
Bridgestone;Bridgestone Ecopia EP150;185;65;14;86H;Summer;Light;;4;2,804
Bridgestone;Bridgestone Ecopia EP150;185;60;15;84H;Summer;Light;;4;2,929
Bridgestone;Bridgestone Ecopia EP150;185;65;15;88H;Summer;Light;;4;2,950
Bridgestone;Bridgestone Ecopia EP150;195;60;15;88H;Summer;Light;;4;3,419
Bridgestone;Bridgestone Ecopia EP150;195;65;15;91H;Summer;Light;;4;3,263
Bridgestone;Bridgestone Ecopia EP150;205;65;15;94H;Summer;Light;;4;3,523
Bridgestone;Bridgestone Ecopia EP150;205;70;15;96H;Summer;Light;;4;4,003
Bridgestone;Bridgestone Ecopia EP200;205;55;16;91V;Summer;Light;;4;3,908
Bridgestone;Bridgestone Ecopia EP200;205;60;16;92V;Summer;Light;;4;4,420
Bridgestone;Bridgestone Ecopia EP200;215;55;17;94V;Summer;Light;;4;6,776
Bridgestone;Bridgestone Ecopia EP200;225;50;17;94V;Summer;Light;;4;7,464
Bridgestone;Bridgestone MY-02 Sporty Style;185;65;14;86H;Summer;Light;;4;2,731
Bridgestone;Bridgestone MY-02 Sporty Style;195;50;15;82V;Summer;Light;;4;3,137
Bridgestone;Bridgestone MY-02 Sporty Style;195;55;15;85V;Summer;Light;;4;4,180
Bridgestone;Bridgestone MY-02 Sporty Style;195;60;15;88V;Summer;Light;;4;3,534
Bridgestone;Bridgestone MY-02 Sporty Style;195;65;15;91V;Summer;Light;;4;3,231
Bridgestone;Bridgestone MY-02 Sporty Style;205;65;15;94V;Summer;Light;;4;3,523
Bridgestone;Bridgestone MY-02 Sporty Style;205;55;16;91V;Summer;Light;;4;3,868
Bridgestone;Bridgestone MY-02 Sporty Style;215;45;17;91V;Summer;Light;;4;5,286
Bridgestone;Bridgestone MY-02 Sporty Style;215;55;17;94V;Summer;Light;;4;6,140
Bridgestone;Bridgestone MY-02 Sporty Style;225;45;17;91V;Summer;Light;;4;6,317
Bridgestone;Bridgestone Potenza Adrenalin RE002;195;55;15;85W;Summer;Light;;4;4,357
Bridgestone;Bridgestone Potenza Adrenalin RE002;245;45;17;95W;Summer;Light;;4;7,588
Bridgestone;Bridgestone Potenza Adrenalin RE002;245;45;18;100W;Summer;Light;;4;9,434
Bridgestone;Bridgestone Potenza Adrenalin RE003;245;40;19;98W;Summer;Light;;4;13,750
Bridgestone;Bridgestone Potenza RE040;235;55;17;99Y;Summer;Light;;4;7,829
Bridgestone;Bridgestone Potenza S001;215;45;18;93Y;Summer;Light;;4;8,215
Bridgestone;Bridgestone Potenza S001;245;45;18;100Y;Summer;Light;;4;10,173
Bridgestone;Bridgestone Potenza S001;255;40;19;100Y;Summer;Light;;4;13,395
Bridgestone;Bridgestone Turanza ER30;245;50;18;100W;Summer;Light;;4;9,028
Bridgestone;Bridgestone Turanza ER33;255;35;18;90Y;Summer;Light;;4;11,675
Bridgestone;Bridgestone Turanza T001;185;65;15;88H;Summer;Light;;4;3,190
Bridgestone;Bridgestone Turanza T001;195;50;15;82V;Summer;Light;;4;3,482
Bridgestone;Bridgestone Turanza T001;205;55;16;94W;Summer;Light;;4;3,950
Bridgestone;Bridgestone Turanza T001;215;60;16;95V;Summer;Light;;4;5,181
Bridgestone;Bridgestone Turanza T001;225;55;16;95V;Summer;Light;;4;6,776
Bridgestone;Bridgestone Turanza T001;235;45;17;94W;Summer;Light;;4;7,547
Bridgestone;Bridgestone Turanza T001;235;40;18;95W;Summer;Light;;4;8,944
Bridgestone;Bridgestone Turanza T001;245;45;17;95W;Summer;Light;;4;7,985
Bridgestone;Bridgestone Blizzak DM-V1;215;70;17;101R;Winter;Light;;4;6,240
Bridgestone;Bridgestone Blizzak DM-V1;275;60;18;113R;Winter;Light;;4;9,535
Bridgestone;Bridgestone Blizzak DM-V1;275;40;20;106R;Winter;Light;;4;12,935
Bridgestone;Bridgestone Blizzak DM-V2;215;70;15;98S;Winter;Light;;4;4,959
Bridgestone;Bridgestone Blizzak RFT;255;50;19;107Q;Winter;Light;;4;15,073
Bridgestone;Bridgestone Blizzak Spike-01;185;55;15;82T;Winter;Light;Yes;4;4,659
Bridgestone;Bridgestone Blizzak Spike-01;185;55;16;83T;Winter;Light;Yes;4;4,525
Bridgestone;Bridgestone Blizzak Spike-01;195;50;15;82T;Winter;Light;Yes;4;5,246
Bridgestone;Bridgestone Blizzak Spike-01;195;55;15;85T;Winter;Light;Yes;4;4,700
Bridgestone;Bridgestone Blizzak Spike-01;195;60;15;88T;Winter;Light;Yes;4;3,715
Bridgestone;Bridgestone Blizzak Spike-01;195;65;15;91T;Winter;Light;Yes;4;3,229
Bridgestone;Bridgestone Blizzak Spike-01;205;65;15;94T;Winter;Light;Yes;4;4,192
Bridgestone;Bridgestone Blizzak Spike-01;205;55;16;91T;Winter;Light;Yes;4;5,031
Bridgestone;Bridgestone Blizzak Spike-01;205;60;16;92T;Winter;Light;Yes;4;5,269
Bridgestone;Bridgestone Blizzak Spike-01;205;65;16;95T;Winter;Light;Yes;4;5,760
Bridgestone;Bridgestone Blizzak Spike-01;205;50;17;89T;Winter;Light;Yes;4;7,159
Bridgestone;Bridgestone Blizzak Spike-01;215;70;16;100T;Winter;Light;Yes;4;6,468
Bridgestone;Bridgestone Blizzak Spike-01;215;55;16;93T;Winter;Light;Yes;4;5,011
Bridgestone;Bridgestone Blizzak Spike-01;215;60;16;95T;Winter;Light;Yes;4;5,064
Bridgestone;Bridgestone Blizzak Spike-01;215;45;17;87T;Winter;Light;Yes;4;7,995
Bridgestone;Bridgestone Blizzak Spike-01;215;50;17;91T;Winter;Light;Yes;4;7,368
Bridgestone;Bridgestone Blizzak Spike-01;215;55;17;98T;Winter;Light;Yes;4;8,227
Bridgestone;Bridgestone Blizzak Spike-01;225;60;16;102T;Winter;Light;Yes;4;6,325
Bridgestone;Bridgestone Blizzak Spike-01;225;70;16;107T;Winter;Light;Yes;4;6,927
Bridgestone;Bridgestone Blizzak Spike-01;225;55;17;101T;Winter;Light;Yes;4;8,595
Bridgestone;Bridgestone Blizzak Spike-01;225;60;17;103T;Winter;Light;Yes;4;7,979
Bridgestone;Bridgestone Blizzak Spike-01;225;45;17;91T;Winter;Light;Yes;4;8,623
Bridgestone;Bridgestone Blizzak Spike-01;225;50;17;98T;Winter;Light;Yes;4;7,406
Bridgestone;Bridgestone Blizzak Spike-01;235;70;16;106T;Winter;Light;Yes;4;7,809
Bridgestone;Bridgestone Blizzak Spike-01;235;60;17;106T;Winter;Light;Yes;4;8,271
Bridgestone;Bridgestone Blizzak Spike-01;235;65;17;108T;Winter;Light;Yes;4;7,915
Bridgestone;Bridgestone Blizzak Spike-01;235;45;17;94T;Winter;Light;Yes;4;8,315
Bridgestone;Bridgestone Blizzak Spike-01;235;60;18;107T;Winter;Light;Yes;4;8,529
Bridgestone;Bridgestone Blizzak Spike-01;245;65;17;111T;Winter;Light;Yes;4;8,296
Bridgestone;Bridgestone Blizzak Spike-01;245;45;17;99T;Winter;Light;Yes;4;8,369
Bridgestone;Bridgestone Blizzak Spike-01;245;40;18;97T;Winter;Light;Yes;4;10,404
Bridgestone;Bridgestone Blizzak Spike-01;255;70;16;111T;Winter;Light;Yes;4;7,682
Bridgestone;Bridgestone Blizzak Spike-01;255;65;17;110T;Winter;Light;Yes;4;7,915
Bridgestone;Bridgestone Blizzak Spike-01;255;45;18;103T;Winter;Light;Yes;4;11,488
Bridgestone;Bridgestone Blizzak Spike-01;255;55;18;109T;Winter;Light;Yes;4;8,864
Bridgestone;Bridgestone Blizzak Spike-01;255;50;19;101T;Winter;Light;Yes;4;10,891
Bridgestone;Bridgestone Blizzak Spike-01;275;40;20;106T;Winter;Light;Yes;4;11,284
Bridgestone;Bridgestone Ice Cruiser 7000;195;65;15;91T;Winter;Light;Yes;4;3,036
Bridgestone;Bridgestone Ice Cruiser 7000;235;60;16;100T;Winter;Light;Yes;4;5,312
Bridgestone;Bridgestone Ice Cruiser 7000;235;65;17;108T;Winter;Light;Yes;4;6,339
Bridgestone;Bridgestone Ice Cruiser 7000;245;45;18;96T;Winter;Light;Yes;4;11,111
Bridgestone;Bridgestone Ice Cruiser 7000;275;40;20;106T;Winter;Light;Yes;4;9,379
Continental;Continental Conti4x4Contact;235;50;19;99H;Summer;Light;;4;12,477
Continental;Continental Conti4x4Contact;255;60;17;106H;Summer;Light;;4;8,536
Continental;Continental Conti4x4Contact;255;50;19;107H;Summer;Light;;4;11,976
Continental;Continental Conti4x4Contact;265;50;19;110H;Summer;Light;;4;12,999
Continental;Continental Conti4x4Contact;275;55;19;111H;Summer;Light;;4;14,902
Continental;Continental ContiCrossContact LX Sport;245;70;16;111T;Summer;Light;;4;7,182
Continental;Continental ContiCrossContact LX Sport;255;55;18;109H;Summer;Light;;4;9,321
Continental;Continental ContiCrossContact LX Sport;255;50;19;107H;Summer;Light;;4;11,976
Continental;Continental ContiCrossContact LX Sport;275;45;20;110V;Summer;Light;;4;16,601
Continental;Continental ContiCrossContact LX2;215;60;16;95H;Summer;Light;;4;6,206
Continental;Continental ContiCrossContact LX2;215;60;17;96H;Summer;Light;;4;9,137
Continental;Continental ContiCrossContact LX2;255;70;16;111S;Summer;Light;;4;7,964
Continental;Continental ContiCrossContact LX2;265;70;17;115T;Summer;Light;;4;10,490
Continental;Continental ContiCrossContact LX2;275;60;20;119H;Summer;Light;;4;18,455
Continental;Continental ContiCrossContact LX2;285;65;17;116H;Summer;Light;;4;9,489
Continental;Continental ContiCrossContact LX2;285;60;18;116V;Summer;Light;;4;12,834
Continental;Continental ContiCrossContact UHP;235;60;16;100H;Summer;Light;;4;6,947
Continental;Continental ContiCrossContact UHP;235;50;19;99V;Summer;Light;;4;13,575
Continental;Continental ContiCrossContact UHP;255;60;18;112H;Summer;Light;;4;11,540
Continental;Continental ContiCrossContact UHP;255;50;19;103W;Summer;Light;;4;12,208
Continental;Continental ContiCrossContact UHP;255;55;19;111H;Summer;Light;;4;15,017
Continental;Continental ContiCrossContact UHP;255;45;20;105W;Summer;Light;;4;18,729
Continental;Continental ContiCrossContact UHP;265;50;19;110Y;Summer;Light;;4;13,047
Continental;Continental ContiCrossContact UHP;265;50;20;111V;Summer;Light;;4;21,050
Continental;Continental ContiCrossContact UHP;275;40;20;106Y;Summer;Light;;4;16,634
Continental;Continental ContiCrossContact UHP;285;45;19;107W;Summer;Light;;4;13,965
Continental;Continental ContiCrossContact UHP;295;35;21;107Y;Summer;Light;;4;18,887
Continental;Continental ContiCrossContact UHP;295;40;20;106Y;Summer;Light;;4;18,688
Continental;Continental ContiEcoContact 5;175;70;13;82T;Summer;Light;;4;2,747
Continental;Continental ContiEcoContact 5;185;65;14;86T;Summer;Light;;4;3,193
Continental;Continental ContiEcoContact 5;185;55;15;82H;Summer;Light;;4;4,331
Continental;Continental ContiEcoContact 5;205;50;17;89V;Summer;Light;;4;7,719
Continental;Continental ContiEcoContact 5;215;45;17;87V;Summer;Light;;4;7,303
Continental;Continental ContiEcoContact 5;215;55;17;94V;Summer;Light;;4;8,889
Continental;Continental ContiPremiumContact 2;155;70;14;77T;Summer;Light;;4;2,873
Continental;Continental ContiPremiumContact 2;205;50;16;87W;Summer;Light;;4;7,576
Continental;Continental ContiPremiumContact 5;185;65;15;88T;Summer;Light;;4;3,248
Continental;Continental ContiPremiumContact 5;195;50;15;82H;Summer;Light;;4;3,383
Continental;Continental ContiPremiumContact 5;195;55;15;85H;Summer;Light;;4;4,655
Continental;Continental ContiPremiumContact 5;195;60;15;88H;Summer;Light;;4;4,038
Continental;Continental ContiPremiumContact 5;195;65;15;91H;Summer;Light;;4;3,544
Continental;Continental ContiPremiumContact 5;205;60;16;92H;Summer;Light;;4;5,066
Continental;Continental ContiPremiumContact 5;205;55;17;95V;Summer;Light;;4;7,794
Continental;Continental ContiPremiumContact 5;215;60;16;95V;Summer;Light;;4;6,213
Continental;Continental ContiPremiumContact 5;215;65;16;98H;Summer;Light;;4;5,301
Continental;Continental ContiPremiumContact 5;215;60;17;96H;Summer;Light;;4;7,754
Continental;Continental ContiPremiumContact 5;225;55;16;95W;Summer;Light;;4;7,579
Continental;Continental ContiPremiumContact 5;235;55;17;99V;Summer;Light;;4;10,610
Continental;Continental ContiSportContact 3;245;40;18;97Y;Summer;Light;;4;11,263
Continental;Continental ContiSportContact 3;275;40;19;101W;Summer;Light;;4;16,863
Continental;Continental ContiSportContact 5;205;50;17;89V;Summer;Light;;4;7,719
Continental;Continental ContiSportContact 5;225;45;17;91W;Summer;Light;;4;8,224
Continental;Continental ContiSportContact 5;225;40;18;92Y;Summer;Light;;4;9,730
Continental;Continental ContiSportContact 5;235;45;18;98Y;Summer;Light;;4;9,911
Continental;Continental ContiSportContact 5;275;40;19;101Y;Summer;Light;;4;14,964
Continental;Continental ContiSportContact 5 SUV;235;50;18;97V;Summer;Light;;4;12,916
Continental;Continental ContiSportContact 5 SUV;255;50;20;109Y;Summer;Light;;4;14,808
Continental;Continental ContiSportContact 5 SUV;275;40;20;106Y;Summer;Light;;4;16,634
Continental;Continental ContiSportContact 5 SUV;275;50;20;109W;Summer;Light;;4;17,370
Continental;Continental ContiSportContact 5 SUV;295;35;21;103Y;Summer;Light;;4;18,719
Continental;Continental ContiVanContact 100;185;75;16C;104/102R;Summer;Light;;4;5,908
Continental;Continental ContiVanContact 100;205;65;15C;102/100T;Summer;Light;;4;5,561
Continental;Continental ContiVanContact 100;205;70;15C;106/104R;Summer;Light;;4;5,919
Continental;Continental VancoFourSeason;205;75;16C;110/108R;Demiseason;Light;;4;6,808
Continental;Continental Conti4x4WinterContact;275;55;17;109H;Winter;Light;;4;10,672
Continental;Continental ContiCrossContact Winter;205;70;15;96T;Winter;Light;;4;4,935
Continental;Continental ContiCrossContact Winter;235;70;16;106T;Winter;Light;;4;6,916
Continental;Continental ContiCrossContact Winter;235;65;18;110H;Winter;Light;;4;8,529
Continental;Continental ContiCrossContact Winter;255;65;17;110H;Winter;Light;;4;9,721
Continental;Continental ContiCrossContact Winter;255;60;18;112H;Winter;Light;;4;9,704
Continental;Continental ContiIceContact;175;65;14;86T;Winter;Light;Yes;4;3,861
Continental;Continental ContiIceContact;185;65;14;90T;Winter;Light;Yes;4;4,030
Continental;Continental ContiIceContact;185;60;15;88T;Winter;Light;Yes;4;4,877
Continental;Continental ContiIceContact;195;65;15;95T;Winter;Light;Yes;4;3,984
Continental;Continental ContiIceContact;195;55;16;91T;Winter;Light;Yes;4;6,747
Continental;Continental ContiIceContact;195;55;16;91T;Winter;Light;Yes;4;6,207
Continental;Continental ContiIceContact;215;55;16;97T;Winter;Light;Yes;4;6,047
Continental;Continental ContiIceContact;215;60;16;99T;Winter;Light;Yes;4;8,290
Continental;Continental ContiIceContact;215;50;17;95T;Winter;Light;Yes;4;7,935
Continental;Continental ContiIceContact;215;50;17;95T;Winter;Light;Yes;4;9,208
Continental;Continental ContiIceContact;225;60;16;102T;Winter;Light;Yes;4;8,595
Continental;Continental ContiIceContact;225;50;17;98T;Winter;Light;Yes;4;9,658
Continental;Continental ContiIceContact;225;60;17;99T;Winter;Light;Yes;4;10,358
Continental;Continental ContiIceContact 4x4;215;70;16;100T;Winter;Light;Yes;4;9,269
Continental;Continental ContiIceContact 4x4;225;65;17;102T;Winter;Light;Yes;4;8,414
Continental;Continental ContiIceContact 4x4;235;65;17;108T;Winter;Light;Yes;4;8,746
Continental;Continental ContiIceContact 4x4;235;55;19;105T;Winter;Light;Yes;4;10,527
Continental;Continental ContiIceContact 4x4;245;70;16;111T;Winter;Light;Yes;4;10,925
Continental;Continental ContiIceContact 4x4;255;55;18;109T;Winter;Light;Yes;4;10,882
Continental;Continental ContiIceContact 4x4;255;50;19;107T;Winter;Light;Yes;4;12,587
Continental;Continental ContiIceContact 4x4;265;50;19;110T;Winter;Light;Yes;4;12,497
Continental;Continental ContiVikingContact 5;195;55;15;89T;Winter;Light;;4;5,522
Continental;Continental ContiVikingContact 5;215;60;16;99T;Winter;Light;;4;7,390
Continental;Continental ContiVikingContact 5;215;50;17;95T;Winter;Light;;4;8,247
Continental;Continental ContiVikingContact 5;225;55;16;99T;Winter;Light;;4;7,637
Continental;Continental ContiVikingContact 5;225;45;18;95T;Winter;Light;;4;11,391
Continental;Continental ContiVikingContact 6;195;60;16;93T;Winter;Light;;4;6,805
Continental;Continental ContiVikingContact 6;205;60;16;96T;Winter;Light;;4;6,101
Continental;Continental ContiVikingContact 6;215;55;16;97T;Winter;Light;;4;6,662
Continental;Continental ContiVikingContact 6;235;45;17;97T;Winter;Light;;4;10,373
Continental;Continental ContiVikingContact 6;245;40;19;98T;Winter;Light;;4;13,012
Continental;Continental ContiVikingContact 6 SUV;225;70;16;107T;Winter;Light;;4;8,547
Continental;Continental ContiVikingContact 6 SUV;235;65;17;108T;Winter;Light;;4;9,495
Continental;Continental ContiVikingContact 6 SUV;245;75;16;111T;Winter;Light;;4;9,680
Continental;Continental ContiVikingContact 6 SUV;245;70;16;111T;Winter;Light;;4;9,970
Continental;Continental ContiVikingContact 6 SUV;265;65;17;116T;Winter;Light;;4;9,416
Continental;Continental ContiWinterContact TS 790;245;55;17;102H;Winter;Light;;4;12,571
Continental;Continental ContiWinterContact TS 810 Sport;185;60;16;86H;Winter;Light;;4;6,276
Continental;Continental ContiWinterContact TS 810 Sport;225;45;17;91H;Winter;Light;;4;10,204
Continental;Continental ContiWinterContact TS 830 P;235;45;18;98V;Winter;Light;;4;14,787
Continental;Continental ContiWinterContact TS 830 P;295;30;19;100W;Winter;Light;;4;21,936
Continental;Continental IceContact 2;175;65;14;86T;Winter;Light;Yes;4;4,137
Continental;Continental IceContact 2;205;55;16;94T;Winter;Light;Yes;4;7,266
Continental;Continental IceContact 2;215;45;18;93T;Winter;Light;Yes;4;13,198
Continental;Continental IceContact 2;235;45;17;97T;Winter;Light;Yes;4;11,633
Continental;Continental IceContact 2 SUV;225;60;17;103T;Winter;Light;Yes;4;10,843
Continental;Continental IceContact 2 SUV;225;65;17;106T;Winter;Light;Yes;4;9,502
Continental;Continental IceContact 2 SUV;235;70;16;106T;Winter;Light;Yes;4;10,502
Continental;Continental IceContact 2 SUV;235;55;19;105T;Winter;Light;Yes;4;12,431
Continental;Continental IceContact 2 SUV;245;55;19;103T;Winter;Light;Yes;4;11,844
Continental;Continental IceContact 2 SUV;265;65;17;116T;Winter;Light;Yes;4;11,657
Continental;Continental VancoVikingContact 2;175;65;14C;90/88T;Winter;Light;;4;4,881
Continental;Continental VancoWinter 2;205;65;15C;102/100T;Winter;Light;;4;5,777
Dunlop;Dunlop Grandtrek AT3;9.5;30;15;104S;Summer;Light;;4;5,855
Dunlop;Dunlop SP Sport 01;245;40;18;93Y;Summer;Light;;4;9,953
Dunlop;Dunlop SP Sport 01A;245;40;20;95Y;Summer;Light;;4;13,314
Dunlop;Dunlop SP Sport 5000;275;55;17;109V;Summer;Light;;4;11,114
Dunlop;Dunlop SP Sport Maxx;255;40;20;101W;Summer;Light;;4;16,370
Dunlop;Dunlop SP Sport Maxx GT;245;45;18;96Y;Summer;Light;;4;10,046
Dunlop;Dunlop SP StreetResponse;165;65;15;81T;Summer;Light;;4;2,724
Dunlop;Dunlop Sport BluResponse;195;50;15;82V;Summer;Light;;4;2,798
Dunlop;Dunlop Sport BluResponse;215;50;17;95W;Summer;Light;;4;7,306
Dunlop;Dunlop Sport Maxx RT;225;40;18;92Y;Summer;Light;;4;8,077
Dunlop;Dunlop Sport Maxx RT;235;45;18;98(Y);Summer;Light;;4;10,372
Dunlop;Dunlop Sport Maxx RT;245;40;17;91Y;Summer;Light;;4;8,578
Dunlop;Dunlop Sport Maxx RT;245;40;18;97(Y);Summer;Light;;4;8,957
Dunlop;Dunlop Sport Maxx RT;245;35;19;93(Y);Summer;Light;;4;13,014
Dunlop;Dunlop Ice Touch;175;65;14;82T;Winter;Light;Yes;4;2,654
Dunlop;Dunlop Ice Touch;185;65;14;86T;Winter;Light;Yes;4;2,949
Dunlop;Dunlop Ice Touch;185;60;15;88T;Winter;Light;Yes;4;3,567
Dunlop;Dunlop Ice Touch;195;65;15;95T;Winter;Light;Yes;4;3,169
Dunlop;Dunlop Ice Touch;205;65;15;94T;Winter;Light;Yes;4;3,538
Dunlop;Dunlop Ice Touch;205;55;16;94T;Winter;Light;Yes;4;4,422
Dunlop;Dunlop Ice Touch;205;60;16;96T;Winter;Light;Yes;4;4,535
Dunlop;Dunlop Ice Touch;215;55;16;97T;Winter;Light;Yes;4;5,386
Dunlop;Dunlop Ice Touch;215;55;17;94T;Winter;Light;Yes;4;6,229
Dunlop;Dunlop Ice Touch;225;55;16;95T;Winter;Light;Yes;4;5,660
Dunlop;Dunlop Ice Touch;225;45;17;94T;Winter;Light;Yes;4;7,335
Dunlop;Dunlop Ice Touch;225;50;17;94T;Winter;Light;Yes;4;7,182
Dunlop;Dunlop SP Winter Response;165;65;14;79T;Winter;Light;;4;2,704
Dunlop;Dunlop SP Winter Response;175;70;14;84T;Winter;Light;;4;2,735
Dunlop;Dunlop SP Winter Response;175;70;14;88T;Winter;Light;;4;2,445
Dunlop;Dunlop SP Winter Response;185;70;14;88T;Winter;Light;;4;2,695
Dunlop;Dunlop SP Winter Sport 3D;255;50;19;107H;Winter;Light;;4;13,235
Dunlop;Dunlop SP Winter Sport M3;175;80;14;88T;Winter;Light;;4;3,304
Dunlop;Dunlop SP Winter Sport M3;205;55;16;91H;Winter;Light;;4;5,845
Dunlop;Dunlop SP Winter Sport M3;245;40;18;97V;Winter;Light;;4;11,229
Dunlop;Dunlop Winter Response 2;195;50;15;82H;Winter;Light;;4;4,134
Dunlop;Dunlop Winter Response 2;195;50;15;82T;Winter;Light;;4;3,648
Dunlop JP;Dunlop JP Graspic DS3;175;70;13;82Q;Winter;Light;;4;2,306
Dunlop JP;Dunlop JP Graspic DS3;185;60;14;82Q;Winter;Light;;4;2,738
Dunlop JP;Dunlop JP Graspic DS3;185;70;14;88Q;Winter;Light;;4;2,618
Dunlop JP;Dunlop JP SP Winter Ice01;175;70;13;82T;Winter;Light;Yes;4;2,372
Dunlop JP;Dunlop JP SP Winter Ice01;185;70;14;88T;Winter;Light;Yes;4;2,619
Dunlop JP;Dunlop JP SP Winter Ice01;185;65;15;88T;Winter;Light;Yes;4;2,970
Dunlop JP;Dunlop JP SP Winter Ice01;195;65;15;95T;Winter;Light;Yes;4;2,864
Dunlop JP;Dunlop JP SP Winter Ice01;205;55;16;94T;Winter;Light;Yes;4;4,376
Dunlop JP;Dunlop JP SP Winter Ice01;225;55;16;95T;Winter;Light;Yes;4;5,624
Dunlop JP;Dunlop JP SP Winter Ice01;225;45;17;94T;Winter;Light;Yes;4;6,978
Dunlop JP;Dunlop JP SP Winter Ice01;255;55;18;109T;Winter;Light;Yes;4;7,101
Dunlop JP;Dunlop JP Winter Maxx SJ8;285;65;17;116R;Winter;Light;;4;6,776
Formula;Formula Formula Energy;155;80;13;79T;Summer;Light;;4;1,892
Formula;Formula Formula Energy;175;70;13;82T;Summer;Light;;4;1,841
Formula;Formula Formula Energy;185;65;14;86H;Summer;Light;;4;2,143
Formula;Formula Formula Energy;185;55;15;82V;Summer;Light;;4;2,829
Formula;Formula Formula Energy;185;65;15;88T;Summer;Light;;4;2,330
Formula;Formula Formula Energy;195;60;15;88H;Summer;Light;;4;2,767
Formula;Formula Formula Energy;235;45;18;98Y;Summer;Light;;4;8,300
Gislaved;Gislaved Nord*Frost 100;225;60;16;102T;Winter;Light;Yes;4;6,250
Gislaved;Gislaved Nord*Frost 100;235;45;17;97T;Winter;Light;Yes;4;8,053
Gislaved;Gislaved Nord*Frost 100 SUV;205;70;15;96T;Winter;Light;Yes;4;4,684
Gislaved;Gislaved Nord*Frost 100 SUV;235;55;19;105T;Winter;Light;Yes;4;8,700
Gislaved;Gislaved Nord*Frost 100 SUV;245;70;16;111T;Winter;Light;Yes;4;7,797
Goodyear;Goodyear Cargo G26;175;75;16C;101/99R;Summer;Light;;4;5,280
Goodyear;Goodyear Cargo G26;205;70;15C;106/104R;Summer;Light;;4;4,978
Goodyear;Goodyear Cargo Marathon;195;65;16C;100/98T;Summer;Light;;4;5,728
Goodyear;Goodyear Eagle F1 Asymmetric;235;50;17;96Y;Summer;Light;;4;7,498
Goodyear;Goodyear Eagle F1 Asymmetric 2;225;45;17;91Y;Summer;Light;;4;6,518
Goodyear;Goodyear Eagle F1 Asymmetric 2;225;45;17;91Y;Summer;Light;;4;6,982
Goodyear;Goodyear Eagle F1 Asymmetric 2;235;35;19;91Y;Summer;Light;;4;12,257
Goodyear;Goodyear Eagle F1 Asymmetric 2;245;40;18;97Y;Summer;Light;;4;10,584
Goodyear;Goodyear Eagle F1 Asymmetric 2;245;40;19;98Y;Summer;Light;;4;13,433
Goodyear;Goodyear Eagle F1 Asymmetric 2;255;40;20;101Y;Summer;Light;;4;18,962
Goodyear;Goodyear Eagle F1 Asymmetric 2;255;35;20;97Y;Summer;Light;;4;16,100
Goodyear;Goodyear Eagle F1 GS-D3;235;50;18;97V;Summer;Light;;4;10,704
Goodyear;Goodyear Eagle LS-2;245;45;18;100V;Summer;Light;;4;12,880
Goodyear;Goodyear Eagle LS-2;275;45;19;108V;Summer;Light;;4;14,951
Goodyear;Goodyear EfficientGrip;225;50;16;92W;Summer;Light;;4;5,950
Goodyear;Goodyear EfficientGrip Compact;155;65;13;73T;Summer;Light;;4;2,233
Goodyear;Goodyear EfficientGrip Compact;165;70;13;79T;Summer;Light;;4;2,394
Goodyear;Goodyear EfficientGrip Compact;175;65;14;82T;Summer;Light;;4;2,364
Goodyear;Goodyear EfficientGrip Performance;185;55;15;82V;Summer;Light;;4;3,791
Goodyear;Goodyear EfficientGrip Performance;205;50;16;87W;Summer;Light;;4;6,747
Goodyear;Goodyear EfficientGrip Performance;205;50;17;93V;Summer;Light;;4;5,757
Goodyear;Goodyear EfficientGrip Performance;215;45;17;91W;Summer;Light;;4;5,633
Goodyear;Goodyear EfficientGrip Performance;225;40;18;92W;Summer;Light;;4;8,298
Goodyear;Goodyear EfficientGrip Performance;235;40;18;95W;Summer;Light;;4;10,933
Goodyear;Goodyear EfficientGrip Performance;245;45;17;99Y;Summer;Light;;4;7,893
Goodyear;Goodyear EfficientGrip Performance;245;40;18;97W;Summer;Light;;4;9,923
Goodyear;Goodyear EfficientGrip SUV;235;65;17;104V;Summer;Light;;4;7,897
Goodyear;Goodyear EfficientGrip SUV;255;60;17;106V;Summer;Light;;4;7,669
Goodyear;Goodyear EfficientGrip SUV;255;60;18;112V;Summer;Light;;4;10,612
Goodyear;Goodyear Excellence;275;40;20;106Y;Summer;Light;;4;15,213
Goodyear;Goodyear Wrangler HP All Weather;235;55;19;105V;Demiseason;Light;;4;10,245
Goodyear;Goodyear Wrangler HP All Weather;245;70;16;107H;Demiseason;Light;;4;6,696
Goodyear;Goodyear Wrangler HP All Weather;245;65;17;111H;Demiseason;Light;;4;7,508
Goodyear;Goodyear Cargo UltraGrip;185;75;16C;104/102R;Winter;Light;Yes;4;5,924
Goodyear;Goodyear Cargo UltraGrip;195;75;16C;107/105R;Winter;Light;Yes;4;6,553
Goodyear;Goodyear Cargo UltraGrip 2;235;65;16C;115/113R;Winter;Light;Yes;4;7,084
Goodyear;Goodyear Eagle UltraGrip GW-3;185;60;16;86H;Winter;Light;;4;5,388
Goodyear;Goodyear Eagle UltraGrip GW-3;225;50;16;92H;Winter;Light;;4;8,581
Goodyear;Goodyear Eagle UltraGrip GW-3;255;45;18;99V;Winter;Light;;4;13,010
Goodyear;Goodyear UltraGrip + SUV ;235;65;17;108H;Winter;Light;;4;7,217
Goodyear;Goodyear UltraGrip + SUV ;235;60;18;107H;Winter;Light;;4;8,171
Goodyear;Goodyear UltraGrip + SUV ;245;65;17;107H;Winter;Light;;4;7,768
Goodyear;Goodyear UltraGrip 500;195;55;15;85T;Winter;Light;Yes;4;4,049
Goodyear;Goodyear UltraGrip 8 Perfomance;195;55;15;85H;Winter;Light;;4;4,408
Goodyear;Goodyear UltraGrip 9;195;65;15;95T;Winter;Light;;4;3,308
Goodyear;Goodyear UltraGrip 9;205;60;15;91T;Winter;Light;;4;3,929
Goodyear;Goodyear UltraGrip Ice 2;185;65;14;86T;Winter;Light;;4;2,948
Goodyear;Goodyear UltraGrip Ice 2;205;65;15;99T;Winter;Light;;4;4,360
Goodyear;Goodyear UltraGrip Ice 2;245;45;18;100T;Winter;Light;;4;11,441
Goodyear;Goodyear UltraGrip Ice Arctic;155;65;14;75T;Winter;Light;Yes;4;2,714
Goodyear;Goodyear UltraGrip Ice Arctic;175;70;13;82T;Winter;Light;Yes;4;2,816
Goodyear;Goodyear UltraGrip Ice Arctic;175;65;14;86T;Winter;Light;Yes;4;2,709
Goodyear;Goodyear UltraGrip Ice Arctic;185;65;14;86T;Winter;Light;Yes;4;3,182
Goodyear;Goodyear UltraGrip Ice Arctic;195;55;15;85T;Winter;Light;Yes;4;4,276
Goodyear;Goodyear UltraGrip Ice Arctic;195;60;15;88T;Winter;Light;Yes;4;3,444
Goodyear;Goodyear UltraGrip Ice Arctic;195;55;16;87T;Winter;Light;Yes;4;4,816
Goodyear;Goodyear UltraGrip Ice Arctic;205;65;15;99T;Winter;Light;Yes;4;3,596
Goodyear;Goodyear UltraGrip Ice Arctic;205;60;16;92T;Winter;Light;Yes;4;5,041
Goodyear;Goodyear UltraGrip Ice Arctic;205;55;16;94T;Winter;Light;Yes;4;4,458
Goodyear;Goodyear UltraGrip Ice Arctic;205;60;16;96T;Winter;Light;Yes;4;4,998
Goodyear;Goodyear UltraGrip Ice Arctic;215;55;16;97T;Winter;Light;Yes;4;5,183
Goodyear;Goodyear UltraGrip Ice Arctic;215;65;16;98T;Winter;Light;Yes;4;4,217
Goodyear;Goodyear UltraGrip Ice Arctic;215;60;16;99T;Winter;Light;Yes;4;5,700
Goodyear;Goodyear UltraGrip Ice Arctic;215;55;17;98T;Winter;Light;Yes;4;6,942
Goodyear;Goodyear UltraGrip Ice Arctic;225;60;16;102T;Winter;Light;Yes;4;6,305
Goodyear;Goodyear UltraGrip Ice Arctic;225;45;17;94T;Winter;Light;Yes;4;7,435
Goodyear;Goodyear UltraGrip Ice Arctic;225;50;17;98T;Winter;Light;Yes;4;6,910
Goodyear;Goodyear UltraGrip Ice Arctic;225;45;18;95T;Winter;Light;Yes;4;11,216
Goodyear;Goodyear UltraGrip Ice Arctic;235;55;17;103T;Winter;Light;Yes;4;8,120
Goodyear;Goodyear UltraGrip Ice Arctic;235;45;17;97T;Winter;Light;Yes;4;7,092
Goodyear;Goodyear UltraGrip Ice Arctic;235;50;18;101T;Winter;Light;Yes;4;9,944
Goodyear;Goodyear UltraGrip Ice Arctic;235;40;18;95T;Winter;Light;Yes;4;10,787
Goodyear;Goodyear UltraGrip Ice Arctic SUV;215;70;16;100T;Winter;Light;Yes;4;6,124
Goodyear;Goodyear UltraGrip Ice Arctic SUV;215;60;17;100T;Winter;Light;Yes;4;7,244
Goodyear;Goodyear UltraGrip Ice Arctic SUV;225;70;16;103T;Winter;Light;Yes;4;6,901
Goodyear;Goodyear UltraGrip Ice Arctic SUV;225;65;17;102T;Winter;Light;Yes;4;7,007
Goodyear;Goodyear UltraGrip Ice Arctic SUV;225;60;17;103T;Winter;Light;Yes;4;7,663
Goodyear;Goodyear UltraGrip Ice Arctic SUV;225;55;18;102T;Winter;Light;Yes;4;8,206
Goodyear;Goodyear UltraGrip Ice Arctic SUV;225;60;18;104T;Winter;Light;Yes;4;10,132
Goodyear;Goodyear UltraGrip Ice Arctic SUV;235;70;16;106T;Winter;Light;Yes;4;7,559
Goodyear;Goodyear UltraGrip Ice Arctic SUV;235;60;17;106T;Winter;Light;Yes;4;8,307
Goodyear;Goodyear UltraGrip Ice Arctic SUV;235;55;19;105T;Winter;Light;Yes;4;9,220
Goodyear;Goodyear UltraGrip Ice Arctic SUV;245;70;16;107T;Winter;Light;Yes;4;8,190
Goodyear;Goodyear UltraGrip Ice Arctic SUV;245;70;16;111T;Winter;Light;Yes;4;7,857
Goodyear;Goodyear UltraGrip Ice Arctic SUV;245;65;17;111T;Winter;Light;Yes;4;8,022
Goodyear;Goodyear UltraGrip Ice Arctic SUV;255;65;17;110T;Winter;Light;Yes;4;7,829
Goodyear;Goodyear UltraGrip Ice Arctic SUV;255;55;18;109T;Winter;Light;Yes;4;8,076
Goodyear;Goodyear UltraGrip Ice Arctic SUV;255;60;18;112T;Winter;Light;Yes;4;7,811
Goodyear;Goodyear UltraGrip Ice Arctic SUV;255;50;19;107T;Winter;Light;Yes;4;10,489
Goodyear;Goodyear UltraGrip Ice Arctic SUV;275;45;20;110T;Winter;Light;Yes;4;12,779
Goodyear;Goodyear UltraGrip Ice WRT;225;55;18;98T;Winter;Light;;4;8,504
Goodyear;Goodyear UltraGrip Ice WRT;235;60;16;100S;Winter;Light;;4;7,491
Goodyear;Goodyear UltraGrip Ice WRT;235;50;18;97T;Winter;Light;;4;8,894
Goodyear;Goodyear UltraGrip Ice+;175;70;13;82T;Winter;Light;;4;2,794
Hankook;Hankook Dynapro ATM RF10;215;75;15C;100/97S;Summer;Light;;4;4,981
Hankook;Hankook Dynapro ATM RF10;215;85;16C;115/112R;Summer;Light;;4;7,274
Hankook;Hankook Dynapro ATM RF10;235;75;15;109T;Summer;Light;;4;5,706
Hankook;Hankook Dynapro ATM RF10;235;60;16;100T;Summer;Light;;4;5,666
Hankook;Hankook Dynapro ATM RF10;235;70;16;107T;Summer;Light;;4;5,969
Hankook;Hankook Dynapro ATM RF10;235;60;18;102T;Summer;Light;;4;8,074
Hankook;Hankook Dynapro ATM RF10;245;70;17;108T;Summer;Light;;4;8,098
Hankook;Hankook Dynapro ATM RF10;255;70;15;112/110L;Summer;Light;;4;6,083
Hankook;Hankook Dynapro ATM RF10;255;60;18;107T;Summer;Light;;4;9,000
Hankook;Hankook Dynapro ATM RF10;255;70;18;112T;Summer;Light;;4;10,607
Hankook;Hankook Dynapro ATM RF10;265;65;17;112T;Summer;Light;;4;7,440
Hankook;Hankook Dynapro ATM RF10;265;60;18;114T;Summer;Light;;4;8,991
Hankook;Hankook Dynapro ATM RF10;285;65;17;116T;Summer;Light;;4;10,875
Hankook;Hankook Dynapro HP RA23;215;65;16;98H;Summer;Light;;4;4,805
Hankook;Hankook Dynapro HP RA23;215;60;17;96H;Summer;Light;;4;7,162
Hankook;Hankook Dynapro HP RA23;225;65;16;104T;Summer;Light;;4;6,254
Hankook;Hankook Dynapro HP RA23;235;70;17;111H;Summer;Light;;4;7,403
Hankook;Hankook Dynapro HP RA23;235;55;17;99V;Summer;Light;;4;6,824
Hankook;Hankook Dynapro HP RA23;255;70;16;111H;Summer;Light;;4;7,086
Hankook;Hankook Dynapro HP2 RA33;215;70;15;98H;Summer;Light;;4;5,958
Hankook;Hankook Dynapro HP2 RA33;215;70;16;100H;Summer;Light;;4;4,893
Hankook;Hankook Dynapro HP2 RA33;225;70;16;103H;Summer;Light;;4;5,225
Hankook;Hankook Dynapro HP2 RA33;225;65;17;102H;Summer;Light;;4;5,301
Hankook;Hankook Dynapro HP2 RA33;235;70;16;106H;Summer;Light;;4;5,969
Hankook;Hankook Dynapro HP2 RA33;235;65;17;108V;Summer;Light;;4;6,497
Hankook;Hankook Dynapro HP2 RA33;235;55;18;100V;Summer;Light;;4;8,751
Hankook;Hankook Dynapro HP2 RA33;235;65;18;106H;Summer;Light;;4;7,197
Hankook;Hankook Dynapro HP2 RA33;235;60;18;107V;Summer;Light;;4;8,051
Hankook;Hankook Dynapro HP2 RA33;235;50;19;99V;Summer;Light;;4;10,984
Hankook;Hankook Dynapro HP2 RA33;235;55;20;102H;Summer;Light;;4;11,579
Hankook;Hankook Dynapro HP2 RA33;245;70;16;111H;Summer;Light;;4;5,951
Hankook;Hankook Dynapro HP2 RA33;245;70;17;110H;Summer;Light;;4;8,082
Hankook;Hankook Dynapro HP2 RA33;255;65;16;109H;Summer;Light;;4;5,994
Hankook;Hankook Dynapro HP2 RA33;255;60;17;106V;Summer;Light;;4;7,752
Hankook;Hankook Dynapro HP2 RA33;255;60;18;112V;Summer;Light;;4;8,912
Hankook;Hankook Dynapro HP2 RA33;255;50;19;107H;Summer;Light;;4;11,088
Hankook;Hankook Dynapro HP2 RA33;265;70;15;112H;Summer;Light;;4;6,249
Hankook;Hankook Dynapro HP2 RA33;265;70;16;112H;Summer;Light;;4;5,819
Hankook;Hankook Dynapro HP2 RA33;265;65;17;112H;Summer;Light;;4;6,991
Hankook;Hankook Dynapro HP2 RA33;265;70;17;116H;Summer;Light;;4;9,603
Hankook;Hankook Dynapro HP2 RA33;265;60;18;110V;Summer;Light;;4;8,274
Hankook;Hankook Dynapro HP2 RA33;265;50;20;107V;Summer;Light;;4;9,935
Hankook;Hankook Dynapro HP2 RA33;275;70;16;114H;Summer;Light;;4;6,445
Hankook;Hankook Dynapro HP2 RA33;275;60;18;113H;Summer;Light;;4;8,224
Hankook;Hankook Dynapro HP2 RA33;275;65;18;116H;Summer;Light;;4;10,518
Hankook;Hankook Dynapro HP2 RA33;285;65;17;116H;Summer;Light;;4;10,247
Hankook;Hankook Dynapro MT RT03;8.5;28;15C;102Q;Summer;Light;;4;6,288
Hankook;Hankook Dynapro MT RT03;235;85;16C;120/116Q;Summer;Light;;4;8,287
Hankook;Hankook Dynapro MT RT03;285;75;16C;126/123Q;Summer;Light;;4;10,548
Hankook;Hankook Kinergy Eco K425;165;60;14;75T;Summer;Light;;4;2,603
Hankook;Hankook Kinergy Eco K425;165;65;14;79T;Summer;Light;;4;2,442
Hankook;Hankook Kinergy Eco K425;175;50;15;75H;Summer;Light;;4;3,075
Hankook;Hankook Kinergy Eco K425;175;55;15;77T;Summer;Light;;4;3,444
Hankook;Hankook Kinergy Eco K425;185;55;14;80H;Summer;Light;;4;3,620
Hankook;Hankook Kinergy Eco K425;185;60;15;88H;Summer;Light;;4;2,676
Hankook;Hankook Kinergy Eco K425;195;60;15;88H;Summer;Light;;4;3,165
Hankook;Hankook Kinergy Eco K425;205;70;15;96T;Summer;Light;;4;3,992
Hankook;Hankook Kinergy Eco K425;205;55;16;91H;Summer;Light;;4;3,416
Hankook;Hankook Optimo K415;235;55;18;100H;Summer;Light;;4;0
Hankook;Hankook Optimo K715;145;70;13;71T;Summer;Light;;4;2,098
Hankook;Hankook Optimo K715;155;80;13;79T;Summer;Light;;4;2,215
Hankook;Hankook Optimo K715;155;70;14;77T;Summer;Light;;4;2,512
Hankook;Hankook Optimo K715;165;65;13;77T;Summer;Light;;4;2,274
Hankook;Hankook Optimo K715;185;70;14;88T;Summer;Light;;4;2,829
Hankook;Hankook Optimo K715;195;65;14;89T;Summer;Light;;4;2,927
Hankook;Hankook Optimo K715;195;60;15;88T;Summer;Light;;4;3,069
Hankook;Hankook Optimo ME02 K424;175;70;13;82H;Summer;Light;;4;2,233
Hankook;Hankook Optimo ME02 K424;175;65;14;82H;Summer;Light;;4;2,243
Hankook;Hankook Optimo ME02 K424;175;70;14;84H;Summer;Light;;4;2,434
Hankook;Hankook Optimo ME02 K424;185;60;13;80H;Summer;Light;;4;2,654
Hankook;Hankook Optimo ME02 K424;185;70;14;88H;Summer;Light;;4;2,915
Hankook;Hankook Optimo ME02 K424;185;60;15;84H;Summer;Light;;4;2,676
Hankook;Hankook Optimo ME02 K424;195;60;15;88H;Summer;Light;;4;3,165
Hankook;Hankook Optimo ME02 K424;205;65;15;94H;Summer;Light;;4;3,105
Hankook;Hankook Optimo ME02 K424;225;60;15;96H;Summer;Light;;4;4,628
Hankook;Hankook Optimo ME02 K424;235;60;16;100H;Summer;Light;;4;5,297
Hankook;Hankook Radial RA08;155;70;12C;104/102N;Summer;Light;;4;4,151
Hankook;Hankook Radial RA08;165;70;14C;89/87R;Summer;Light;;4;4,089
Hankook;Hankook Radial RA08;175;0;13C;97/95Q;Summer;Light;;4;4,689
Hankook;Hankook Radial RA08;215;70;16C;108/106T;Summer;Light;;4;5,953
Hankook;Hankook Radial RA10;175;75;16C;101/99R;Demiseason;Light;;4;5,108
Hankook;Hankook Vantra LT RA18;155;0;12C;88/86P;Summer;Light;;4;3,496
Hankook;Hankook Vantra LT RA18;195;70;15C;104/102R;Summer;Light;;4;4,624
Hankook;Hankook Vantra LT RA18;195;60;16C;99/97H;Summer;Light;;4;5,679
Hankook;Hankook Vantra LT RA18;205;75;14C;109/107R;Summer;Light;;4;5,786
Hankook;Hankook Vantra LT RA18;205;70;15C;105/104R;Summer;Light;;4;4,807
Hankook;Hankook Vantra LT RA18;215;70;15C;109/107S;Summer;Light;;4;5,584
Hankook;Hankook Vantra LT RA18;215;60;16C;103/101T;Summer;Light;;4;5,943
Hankook;Hankook Vantra LT RA18;225;70;15C;112/110S;Summer;Light;;4;5,569
Hankook;Hankook Ventus ME01 K114;185;55;16;83V;Summer;Light;;4;4,123
Hankook;Hankook Ventus ME01 K114;205;65;16;95V;Summer;Light;;4;4,437
Hankook;Hankook Ventus ME01 K114;215;60;16;95H;Summer;Light;;4;4,287
Hankook;Hankook Ventus ME01 K114;225;55;16;95V;Summer;Light;;4;5,602
Hankook;Hankook Ventus ME01 K114;225;55;18;98V;Summer;Light;;4;7,820
Hankook;Hankook Ventus ME01 K114;245;50;18;100W;Summer;Light;;4;8,535
Hankook;Hankook Ventus Prime 2 K115;195;55;16;87V;Summer;Light;;4;4,645
Hankook;Hankook Ventus Prime 2 K115;215;55;16;93V;Summer;Light;;4;5,523
Hankook;Hankook Ventus Prime 2 K115;225;45;17;91V;Summer;Light;;4;5,555
Hankook;Hankook Ventus Prime 2 K115;225;50;17;98W;Summer;Light;;4;6,588
Hankook;Hankook Ventus Prime 2 K115;225;45;18;95V;Summer;Light;;4;7,956
Hankook;Hankook Ventus Prime 2 K115;235;55;17;103W;Summer;Light;;4;0
Hankook;Hankook Ventus Prime 2 K115;235;60;18;103H;Summer;Light;;4;7,889
Hankook;Hankook Ventus Prime 2 K115;235;45;18;94V;Summer;Light;;4;8,928
Hankook;Hankook Ventus Prime 2 K115;245;40;19;94V;Summer;Light;;4;11,173
Hankook;Hankook Ventus Prime 2 K115;245;45;19;98V;Summer;Light;;4;10,989
Hankook;Hankook Ventus Prime 2 K115B;195;55;16;87W;Summer;Light;;4;5,865
Hankook;Hankook Ventus S1 Evo 2 K117;205;45;17;84W;Summer;Light;;4;7,015
Hankook;Hankook Ventus S1 Evo 2 K117;215;45;18;93Y;Summer;Light;;4;7,242
Hankook;Hankook Ventus S1 Evo 2 K117;225;45;17;94Y;Summer;Light;;4;5,903
Hankook;Hankook Ventus S1 Evo 2 K117;225;40;18;88Y;Summer;Light;;4;8,452
Hankook;Hankook Ventus S1 Evo 2 K117;225;40;19;93Y;Summer;Light;;4;11,271
Hankook;Hankook Ventus S1 Evo 2 K117;235;45;18;98Y;Summer;Light;;4;9,112
Hankook;Hankook Ventus S1 Evo 2 K117;235;35;20;92Y;Summer;Light;;4;11,546
Hankook;Hankook Ventus S1 Evo 2 K117;245;45;18;100Y;Summer;Light;;4;8,927
Hankook;Hankook Ventus S1 Evo 2 K117;245;40;18;93W;Summer;Light;;4;10,409
Hankook;Hankook Ventus S1 Evo 2 K117;245;45;18;96Y;Summer;Light;;4;9,409
Hankook;Hankook Ventus S1 Evo 2 K117;245;45;19;102Y;Summer;Light;;4;11,213
Hankook;Hankook Ventus S1 Evo 2 K117;245;35;19;93Y;Summer;Light;;4;11,558
Hankook;Hankook Ventus S1 Evo 2 K117;255;40;17;98Y;Summer;Light;;4;8,337
Hankook;Hankook Ventus S1 Evo 2 K117;255;35;18;94Y;Summer;Light;;4;9,747
Hankook;Hankook Ventus S1 Evo 2 K117;255;35;18;94Y;Summer;Light;;4;11,072
Hankook;Hankook Ventus S1 Evo 2 K117;255;45;19;104Y;Summer;Light;;4;11,840
Hankook;Hankook Ventus S1 Evo 2 K117;255;35;19;96Y;Summer;Light;;4;12,185
Hankook;Hankook Ventus S1 Evo 2 K117;255;35;20;97Y;Summer;Light;;4;13,149
Hankook;Hankook Ventus S1 Evo 2 K117;255;40;19;100Y;Summer;Light;;4;11,369
Hankook;Hankook Ventus S1 Evo 2 K117;275;30;20;97Y;Summer;Light;;4;16,583
Hankook;Hankook Ventus S1 Evo 2 K117A SUV;235;55;18;100V;Summer;Light;;4;8,841
Hankook;Hankook Ventus S1 Evo 2 K117A SUV;255;55;18;109Y;Summer;Light;;4;8,000
Hankook;Hankook Ventus S1 Evo 2 K117A SUV;255;55;19;111V;Summer;Light;;4;10,546
Hankook;Hankook Ventus S1 Evo 2 K117A SUV;275;45;19;108Y;Summer;Light;;4;11,637
Hankook;Hankook Ventus S1 Evo 2 K117A SUV;275;55;19;111V;Summer;Light;;4;13,239
Hankook;Hankook Ventus S1 Evo 2 K117A SUV;275;40;20;106Y;Summer;Light;;4;12,684
Hankook;Hankook Ventus S1 Evo 2 K117A SUV;275;50;20;109W;Summer;Light;;4;13,533
Hankook;Hankook Ventus S1 Evo 2 K117B;245;45;17;95W;Summer;Light;;4;8,469
Hankook;Hankook Ventus S1 Evo K107;235;30;20;88Y;Summer;Light;;4;14,521
Hankook;Hankook Ventus ST RH06;225;55;17;97V;Summer;Light;;4;6,662
Hankook;Hankook Ventus ST RH06;235;60;17;102V;Summer;Light;;4;7,960
Hankook;Hankook Ventus ST RH06;285;60;18;116V;Summer;Light;;4;9,544
Hankook;Hankook Ventus ST RH06;285;45;19;111W;Summer;Light;;4;10,878
Hankook;Hankook Ventus ST RH06;295;40;20;106W;Summer;Light;;4;14,001
Hankook;Hankook Ventus V12 Evo 2 K120;195;50;15;82V;Summer;Light;;4;3,471
Hankook;Hankook Ventus V12 Evo 2 K120;195;55;15;85V;Summer;Light;;4;3,523
Hankook;Hankook Ventus V12 Evo 2 K120;205;55;16;94W;Summer;Light;;4;3,669
Hankook;Hankook Ventus V12 Evo 2 K120;205;50;17;93Y;Summer;Light;;4;5,449
Hankook;Hankook Ventus V12 Evo 2 K120;205;45;17;88W;Summer;Light;;4;5,865
Hankook;Hankook Ventus V12 Evo 2 K120;215;40;17;87Y;Summer;Light;;4;6,868
Hankook;Hankook Ventus V12 Evo 2 K120;215;40;18;89Y;Summer;Light;;4;9,246
Hankook;Hankook Ventus V12 Evo 2 K120;215;45;18;93Y;Summer;Light;;4;7,242
Hankook;Hankook Ventus V12 Evo 2 K120;225;50;16;96W;Summer;Light;;4;5,908
Hankook;Hankook Ventus V12 Evo 2 K120;225;45;17;94Y;Summer;Light;;4;5,903
Hankook;Hankook Ventus V12 Evo 2 K120;225;50;17;98Y;Summer;Light;;4;6,794
Hankook;Hankook Ventus V12 Evo 2 K120;225;35;19;88Y;Summer;Light;;4;10,177
Hankook;Hankook Ventus V12 Evo 2 K120;235;40;17;94Y;Summer;Light;;4;6,875
Hankook;Hankook Ventus V12 Evo 2 K120;245;40;17;95Y;Summer;Light;;4;7,849
Hankook;Hankook Ventus V12 Evo 2 K120;245;45;17;99Y;Summer;Light;;4;6,901
Hankook;Hankook Ventus V12 Evo 2 K120;245;45;18;100Y;Summer;Light;;4;8,927
Hankook;Hankook Ventus V12 Evo 2 K120;245;35;19;93Y;Summer;Light;;4;11,152
Hankook;Hankook Ventus V12 Evo 2 K120;245;35;20;95Y;Summer;Light;;4;11,971
Hankook;Hankook Ventus V12 Evo 2 K120;245;40;20;99Y;Summer;Light;;4;12,255
Hankook;Hankook Ventus V12 Evo 2 K120;245;40;18;97Y;Summer;Light;;4;9,053
Hankook;Hankook Ventus V12 Evo 2 K120;255;45;18;103Y;Summer;Light;;4;9,868
Hankook;Hankook Ventus V12 Evo 2 K120;255;35;19;96Y;Summer;Light;;4;12,185
Hankook;Hankook Ventus V12 Evo 2 K120;275;35;18;99Y;Summer;Light;;4;12,859
Hankook;Hankook Ventus V12 Evo K110;205;50;15;86W;Summer;Light;;4;4,076
Hankook;Hankook Dynapro i*cept RW08;205;75;15;97Q;Winter;Light;;4;4,472
Hankook;Hankook Dynapro i*cept RW08;215;70;16;100Q;Winter;Light;;4;5,900
Hankook;Hankook Dynapro i*cept RW08;215;55;18;95Q;Winter;Light;;4;8,066
Hankook;Hankook Dynapro i*cept RW08;225;70;16;103Q;Winter;Light;;4;5,841
Hankook;Hankook Dynapro i*cept RW08;225;60;17;99T;Winter;Light;;4;5,834
Hankook;Hankook Dynapro i*cept RW08;235;60;17;102T;Winter;Light;;4;7,209
Hankook;Hankook Dynapro i*cept RW08;235;55;18;100T;Winter;Light;;4;6,996
Hankook;Hankook Dynapro i*cept RW08;245;65;17;107Q;Winter;Light;;4;7,204
Hankook;Hankook Dynapro i*cept RW08;245;55;19;107T;Winter;Light;;4;7,251
Hankook;Hankook Dynapro i*cept RW08;255;60;18;108T;Winter;Light;;4;7,326
Hankook;Hankook Dynapro i*cept RW08;255;55;18;109Q;Winter;Light;;4;6,444
Hankook;Hankook Dynapro i*cept RW08;255;50;19;103Q;Winter;Light;;4;9,199
Hankook;Hankook Dynapro i*cept RW08;255;55;19;111Q;Winter;Light;;4;9,159
Hankook;Hankook Dynapro i*cept RW08;265;50;20;107Q;Winter;Light;;4;10,241
Hankook;Hankook Dynapro i*cept RW08;275;40;20;106R;Winter;Light;;4;9,101
Hankook;Hankook Dynapro i*cept RW08;285;65;17;116Q;Winter;Light;;4;6,898
Hankook;Hankook i*Pike RW11;205;70;15;96T;Winter;Light;Yes;4;4,133
Hankook;Hankook i*Pike RW11;205;75;15;97T;Winter;Light;Yes;4;4,656
Hankook;Hankook i*Pike RW11;215;70;15;98T;Winter;Light;Yes;4;5,020
Hankook;Hankook i*Pike RW11;215;70;16;100T;Winter;Light;Yes;4;6,115
Hankook;Hankook i*Pike RW11;215;60;16;95T;Winter;Light;Yes;4;4,875
Hankook;Hankook i*Pike RW11;215;55;18;95T;Winter;Light;Yes;4;7,929
Hankook;Hankook i*Pike RW11;225;55;18;98T;Winter;Light;Yes;4;6,645
Hankook;Hankook i*Pike RW11;235;70;16;109T;Winter;Light;Yes;4;6,624
Hankook;Hankook i*Pike RW11;235;60;17;102T;Winter;Light;Yes;4;7,264
Hankook;Hankook i*Pike RW11;235;55;18;100T;Winter;Light;Yes;4;7,163
Hankook;Hankook i*Pike RW11;235;65;18;104T;Winter;Light;Yes;4;7,538
Hankook;Hankook i*Pike RW11;235;60;18;107T;Winter;Light;Yes;4;7,290
Hankook;Hankook i*Pike RW11;235;50;18;97T;Winter;Light;Yes;4;7,942
Hankook;Hankook i*Pike RW11;235;55;19;101T;Winter;Light;Yes;4;7,988
Hankook;Hankook i*Pike RW11;245;75;16;111T;Winter;Light;Yes;4;8,313
Hankook;Hankook i*Pike RW11;245;65;17;107T;Winter;Light;Yes;4;7,059
Hankook;Hankook i*Pike RW11;245;55;19;107T;Winter;Light;Yes;4;6,882
Hankook;Hankook i*Pike RW11;255;60;17;106T;Winter;Light;Yes;4;8,124
Hankook;Hankook i*Pike RW11;255;60;18;108T;Winter;Light;Yes;4;7,702
Hankook;Hankook i*Pike RW11;255;55;18;109T;Winter;Light;Yes;4;6,728
Hankook;Hankook i*Pike RW11;255;50;19;103T;Winter;Light;Yes;4;8,612
Hankook;Hankook i*Pike RW11;255;55;19;107T;Winter;Light;Yes;4;9,110
Hankook;Hankook i*Pike RW11;255;60;19;109T;Winter;Light;Yes;4;10,269
Hankook;Hankook i*Pike RW11;265;65;17;112T;Winter;Light;Yes;4;7,175
Hankook;Hankook i*Pike RW11;265;60;18;110T;Winter;Light;Yes;4;7,898
Hankook;Hankook i*Pike RW11;265;65;18;112T;Winter;Light;Yes;4;11,106
Hankook;Hankook i*Pike RW11;265;50;20;107T;Winter;Light;Yes;4;9,891
Hankook;Hankook i*Pike RW11;275;70;16;114T;Winter;Light;Yes;4;7,348
Hankook;Hankook i*Pike RW11;275;65;18;114T;Winter;Light;Yes;4;11,430
Hankook;Hankook i*Pike RW11;275;40;20;106T;Winter;Light;Yes;4;8,330
Hankook;Hankook i*Pike RW11;285;60;18;116T;Winter;Light;Yes;4;8,424
Hankook;Hankook Winter i*cept Evo 2 W320;245;45;19;102V;Winter;Light;;4;10,586
Hankook;Hankook Winter i*cept Evo W310;215;55;16;93H;Winter;Light;;4;5,202
Hankook;Hankook Winter i*cept Evo W310;215;65;16;98H;Winter;Light;;4;4,783
Hankook;Hankook Winter i*cept Evo W310;255;45;18;103V;Winter;Light;;4;9,095
Hankook;Hankook Winter i*cept IZ W606;175;65;15;84T;Winter;Light;;4;2,998
Hankook;Hankook Winter i*cept IZ W606;185;70;14;88T;Winter;Light;;4;2,891
Hankook;Hankook Winter i*cept IZ W606;185;55;15;82T;Winter;Light;;4;3,798
Hankook;Hankook Winter i*cept IZ W606;185;65;15;88T;Winter;Light;;4;2,899
Hankook;Hankook Winter i*cept IZ W606;185;55;16;83T;Winter;Light;;4;4,121
Hankook;Hankook Winter i*cept IZ W606;195;60;15;88T;Winter;Light;;4;3,340
Hankook;Hankook Winter i*cept IZ W606;195;65;15;91T;Winter;Light;;4;3,144
Hankook;Hankook Winter i*cept IZ W606;205;65;15;94T;Winter;Light;;4;3,557
Hankook;Hankook Winter i*cept IZ W606;205;55;16;91T;Winter;Light;;4;4,190
Hankook;Hankook Winter i*cept IZ W606;205;60;16;92T;Winter;Light;;4;4,170
Hankook;Hankook Winter i*cept IZ W606;215;70;15;98T;Winter;Light;;4;4,811
Hankook;Hankook Winter i*cept IZ W606;215;55;16;93T;Winter;Light;;4;5,258
Hankook;Hankook Winter i*cept IZ W606;215;60;16;95T;Winter;Light;;4;4,857
Hankook;Hankook Winter i*cept IZ W606;215;65;16;98T;Winter;Light;;4;4,562
Hankook;Hankook Winter i*cept IZ W606;225;55;16;95T;Winter;Light;;4;5,787
Hankook;Hankook Winter i*cept IZ W606;235;40;18;95T;Winter;Light;;4;8,591
Hankook;Hankook Winter i*cept IZ W606;255;45;18;103T;Winter;Light;;4;8,814
Hankook;Hankook Winter i*cept IZ W606;255;40;19;100T;Winter;Light;;4;9,782
Hankook;Hankook Winter i*Pike LT RW09;165;70;14C;89/87R;Winter;Light;Yes;4;4,705
Hankook;Hankook Winter i*Pike LT RW09;195;65;16C;104/102T;Winter;Light;Yes;4;6,023
Hankook;Hankook Winter i*Pike LT RW09;195;75;16C;107/105R;Winter;Light;Yes;4;5,831
Hankook;Hankook Winter i*Pike LT RW09;205;65;15C;102/100R;Winter;Light;Yes;4;5,742
Hankook;Hankook Winter i*Pike LT RW09;215;75;16C;116/114R;Winter;Light;Yes;4;6,852
Hankook;Hankook Winter i*Pike LT RW09;235;65;16C;115/113R;Winter;Light;Yes;4;7,319
Hankook;Hankook Winter i*Pike RS W419;155;65;14;75T;Winter;Light;Yes;4;2,714
Hankook;Hankook Winter i*Pike RS W419;175;70;13;82T;Winter;Light;Yes;4;2,332
Hankook;Hankook Winter i*Pike RS W419;185;60;14;82T;Winter;Light;Yes;4;2,860
Hankook;Hankook Winter i*Pike RS W419;185;65;14;90T;Winter;Light;Yes;4;2,576
Hankook;Hankook Winter i*Pike RS W419;185;55;15;86T;Winter;Light;Yes;4;4,058
Hankook;Hankook Winter i*Pike RS W419;185;65;15;92T;Winter;Light;Yes;4;3,143
Hankook;Hankook Winter i*Pike RS W419;195;70;14;91T;Winter;Light;Yes;4;3,472
Hankook;Hankook Winter i*Pike RS W419;195;65;15;95T;Winter;Light;Yes;4;3,009
Hankook;Hankook Winter i*Pike RS W419;205;65;16;95T;Winter;Light;Yes;4;5,191
Hankook;Hankook Winter i*Pike RS W419;205;60;16;96T;Winter;Light;Yes;4;4,308
Hankook;Hankook Winter i*Pike RS W419;215;70;15;97T;Winter;Light;Yes;4;4,776
Hankook;Hankook Winter i*Pike RS W419;215;55;16;97T;Winter;Light;Yes;4;5,029
Hankook;Hankook Winter i*Pike RS W419;215;45;17;91T;Winter;Light;Yes;4;6,586
Hankook;Hankook Winter i*Pike RS W419;215;50;17;95T;Winter;Light;Yes;4;5,628
Hankook;Hankook Winter i*Pike RS W419;215;55;17;98T;Winter;Light;Yes;4;6,504
Hankook;Hankook Winter i*Pike RS W419;225;55;16;99T;Winter;Light;Yes;4;5,796
Hankook;Hankook Winter i*Pike RS W419;235;45;17;97T;Winter;Light;Yes;4;6,785
Hankook;Hankook Winter i*Pike RS W419;235;40;18;95T;Winter;Light;Yes;4;8,570
Hankook;Hankook Winter i*Pike RS W419;245;45;18;100T;Winter;Light;Yes;4;9,710
Hankook;Hankook Winter i*Pike RS W419;255;45;18;103T;Winter;Light;Yes;4;8,972
Hankook;Hankook Winter i*Pike W409;205;55;16;91T;Winter;Light;Yes;4;6,047
Hankook;Hankook Winter i*Pike W409;215;65;17;98T;Winter;Light;Yes;4;6,199
Hankook;Hankook Winter i*Pike W409;225;50;18;95T;Winter;Light;Yes;4;8,741
Hankook;Hankook Winter RW06;185;0;14C;102/100Q;Winter;Light;;4;3,988
Hankook;Hankook Winter RW06;195;80;15C;107/105L;Winter;Light;;4;4,503
Hankook;Hankook Winter RW06;205;65;15C;102/100T;Winter;Light;;4;5,756
Hankook;Hankook Winter RW06;205;70;15C;105/104R;Winter;Light;;4;5,291
Hankook;Hankook Winter RW06;215;65;16C;109/107R;Winter;Light;;4;6,081
Hankook;Hankook Winter RW06;215;75;16C;113/111R;Winter;Light;;4;6,809
Hankook;Hankook Winter RW06;225;60;16C;101/99T;Winter;Light;;4;7,382
Hankook;Hankook Zovac HP W401;145;0;12;72Q;Winter;Light;Yes;4;3,161
Kingstar;Kingstar SW41;175;70;14;84T;Winter;Light;Yes;4;0
Kormoran;Kormoran Gamma b2;185;55;15;82V;Summer;Light;;4;2,246
Kormoran;Kormoran Gamma b2;195;50;15;82V;Summer;Light;;4;2,319
Kormoran;Kormoran Gamma b2;195;55;15;85V;Summer;Light;;4;2,257
Kormoran;Kormoran Gamma b2;195;60;15;88V;Summer;Light;;4;2,473
Kormoran;Kormoran Gamma b2;195;45;16;84V;Summer;Light;;4;2,875
Kormoran;Kormoran Gamma b2;195;55;16;87V;Summer;Light;;4;3,235
Kormoran;Kormoran Gamma b2;205;60;15;91V;Summer;Light;;4;2,793
Kormoran;Kormoran Gamma b2;205;65;15;94V;Summer;Light;;4;2,690
Kormoran;Kormoran Gamma b2;205;50;16;87V;Summer;Light;;4;3,379
Kormoran;Kormoran Gamma b2;205;60;16;96V;Summer;Light;;4;3,204
Kormoran;Kormoran Gamma b2;205;45;17;88V;Summer;Light;;4;3,193
Kormoran;Kormoran Gamma b2;205;50;17;93V;Summer;Light;;4;3,812
Kormoran;Kormoran Gamma b2;205;45;16;87W;Summer;Light;;4;3,348
Kormoran;Kormoran Gamma b2;205;40;17;84W;Summer;Light;;4;3,431
Kormoran;Kormoran Gamma b2;215;60;16;99V;Summer;Light;;4;3,405
Kormoran;Kormoran Gamma b2;215;55;16;97W;Summer;Light;;4;3,339
Kormoran;Kormoran Gamma b2;215;40;17;87W;Summer;Light;;4;3,667
Kormoran;Kormoran Gamma b2;215;45;17;91W;Summer;Light;;4;3,740
Kormoran;Kormoran Gamma b2;215;55;17;98W;Summer;Light;;4;3,823
Kormoran;Kormoran Gamma b2;225;50;16;92W;Summer;Light;;4;3,812
Kormoran;Kormoran Gamma b2;225;55;16;99W;Summer;Light;;4;3,832
Kormoran;Kormoran Gamma b2;225;55;17;101W;Summer;Light;;4;4,379
Kormoran;Kormoran Gamma b2;225;50;17;98W;Summer;Light;;4;4,018
Kormoran;Kormoran Gamma b2;235;45;17;97Y;Summer;Light;;4;4,111
Kormoran;Kormoran Gamma b2;235;45;18;98W;Summer;Light;;4;4,472
Kormoran;Kormoran Gamma b2;245;40;17;95W;Summer;Light;;4;4,709
Kormoran;Kormoran Gamma b2;245;45;17;99W;Summer;Light;;4;4,368
Kormoran;Kormoran Gamma b2;245;45;18;100W;Summer;Light;;4;5,130
Kormoran;Kormoran Gamma b2;245;35;18;92Y;Summer;Light;;4;4,811
Kormoran;Kormoran Gamma b2;245;40;18;97Y;Summer;Light;;4;5,090
Kormoran;Kormoran Gamma b2;255;45;18;103Y;Summer;Light;;4;5,533
Kormoran;Kormoran Gamma b2;255;35;18;94W;Summer;Light;;4;4,915
Kormoran;Kormoran Gamma b4;205;55;16;94V;Summer;Light;;4;2,610
Kormoran;Kormoran Gamma b4;225;45;17;94Y;Summer;Light;;4;3,534
Kormoran;Kormoran Impulser b2;145;70;13;71T;Summer;Light;;4;1,432
Kormoran;Kormoran Impulser b2;145;80;13;75T;Summer;Light;;4;1,628
Kormoran;Kormoran Impulser b2;175;65;15;84T;Summer;Light;;4;2,060
Kormoran;Kormoran Impulser b2;185;65;14;82T;Summer;Light;;4;2,112
Kormoran;Kormoran Impulser b2;185;65;15;88T;Summer;Light;;4;2,257
Kormoran;Kormoran Impulser b3;155;80;13;79T;Summer;Light;;4;1,722
Kormoran;Kormoran Impulser b3;165;70;13;79T;Summer;Light;;4;1,793
Kormoran;Kormoran Impulser b3;185;60;14;82T;Summer;Light;;4;1,989
Kormoran;Kormoran Impulser b4;165;65;14;79T;Summer;Light;;4;1,793
Kormoran;Kormoran Impulser b4;175;65;14;82T;Summer;Light;;4;1,968
Kormoran;Kormoran Runpro b2;185;60;15;88H;Summer;Light;;4;2,175
Kormoran;Kormoran Runpro b3;185;55;14;80H;Summer;Light;;4;2,340
Kormoran;Kormoran Runpro b3;195;60;14;86H;Summer;Light;;4;2,215
Kormoran;Kormoran SUV Summer;205;70;15;96H;Summer;Light;;4;3,513
Kormoran;Kormoran SUV Summer;215;70;16;100H;Summer;Light;;4;3,782
Kormoran;Kormoran SUV Summer;215;65;16;102H;Summer;Light;;4;3,740
Kormoran;Kormoran SUV Summer;225;65;17;106H;Summer;Light;;4;4,358
Kormoran;Kormoran SUV Summer;225;55;18;98V;Summer;Light;;4;5,295
Kormoran;Kormoran SUV Summer;235;60;16;100H;Summer;Light;;4;4,183
Kormoran;Kormoran SUV Summer;235;60;17;102V;Summer;Light;;4;5,471
Kormoran;Kormoran SUV Summer;235;65;17;108V;Summer;Light;;4;5,141
Kormoran;Kormoran SUV Summer;235;55;18;100V;Summer;Light;;4;5,399
Kormoran;Kormoran SUV Summer;235;60;18;107W;Summer;Light;;4;5,090
Kormoran;Kormoran SUV Summer;235;50;18;97V;Summer;Light;;4;5,399
Kormoran;Kormoran SUV Summer;255;55;18;109W;Summer;Light;;4;5,378
Kormoran;Kormoran Vanpro b2;185;0;14C;102/100R;Summer;Light;;4;3,266
Kormoran;Kormoran Vanpro b2;185;0;15C;103/102R;Summer;Light;;4;3,431
Kormoran;Kormoran Vanpro b2;195;0;14C;106/104R;Summer;Light;;4;3,585
Kormoran;Kormoran Vanpro b2;195;70;15C;104/102R;Summer;Light;;4;3,214
Kormoran;Kormoran Vanpro b2;195;65;16C;104/102R;Summer;Light;;4;3,575
Kormoran;Kormoran Vanpro b2;195;60;16C;99/97H;Summer;Light;;4;3,792
Kormoran;Kormoran Vanpro b2;205;65;16C;107/105T;Summer;Light;;4;3,729
Kormoran;Kormoran Vanpro b2;215;65;16C;109/107R;Summer;Light;;4;4,049
Kormoran;Kormoran Vanpro b2;225;65;16C;112/110R;Summer;Light;;4;4,554
Kormoran;Kormoran Vanpro b3;165;70;14C;89/87R;Summer;Light;;4;2,710
Kormoran;Kormoran Vanpro b3;175;65;14C;90/88R;Summer;Light;;4;2,730
Kumho Marshal;Kumho Marshal Crugen HP91;235;55;17;99V;Summer;Light;;4;5,866
Kumho Marshal;Kumho Marshal Crugen HP91;255;60;17;106V;Summer;Light;;4;6,241
Kumho Marshal;Kumho Marshal Crugen HP91;275;45;20;110Y;Summer;Light;;4;10,161
Kumho Marshal;Kumho Marshal Crugen HP91;285;55;18;113V;Summer;Light;;4;8,279
Kumho Marshal;Kumho Marshal Crugen KL21;265;60;18;110H;Summer;Light;;4;6,530
Kumho Marshal;Kumho Marshal Matrac FX MU11;185;55;14;80V;Summer;Light;;4;2,823
Kumho Marshal;Kumho Marshal Matrac FX MU11;195;55;15;85V;Summer;Light;;4;3,210
Kumho Marshal;Kumho Marshal Matrac FX MU11;205;45;16;83W;Summer;Light;;4;4,028
Kumho Marshal;Kumho Marshal Matrac FX MU11;205;55;16;91W;Summer;Light;;4;3,045
Kumho Marshal;Kumho Marshal Matrac FX MU11;205;40;17;80W;Summer;Light;;4;5,202
Kumho Marshal;Kumho Marshal Matrac FX MU11;205;45;17;88W;Summer;Light;;4;5,202
Kumho Marshal;Kumho Marshal Matrac FX MU11;205;50;17;93W;Summer;Light;;4;4,205
Kumho Marshal;Kumho Marshal Matrac FX MU11;215;55;16;93W;Summer;Light;;4;4,205
Kumho Marshal;Kumho Marshal Matrac FX MU11;215;55;17;94W;Summer;Light;;4;4,925
Kumho Marshal;Kumho Marshal Matrac FX MU11;225;60;16;98H;Summer;Light;;4;4,316
Kumho Marshal;Kumho Marshal Matrac FX MU11;225;45;18;91W;Summer;Light;;4;6,087
Kumho Marshal;Kumho Marshal Matrac FX MU11;235;45;17;94W;Summer;Light;;4;4,738
Kumho Marshal;Kumho Marshal Matrac FX MU11;245;40;17;91W;Summer;Light;;4;5,866
Kumho Marshal;Kumho Marshal Matrac FX MU11;245;45;18;100W;Summer;Light;;4;6,309
Kumho Marshal;Kumho Marshal Matrac FX MU11;275;35;18;99Y;Summer;Light;;4;10,514
Kumho Marshal;Kumho Marshal Matrac MH11;165;65;13;77H;Summer;Light;;4;1,904
Kumho Marshal;Kumho Marshal Matrac MH11;185;60;14;82H;Summer;Light;;4;2,004
Kumho Marshal;Kumho Marshal Matrac MH11;185;65;14;86H;Summer;Light;;4;2,047
Kumho Marshal;Kumho Marshal Matrac MH11;185;60;15;88H;Summer;Light;;4;2,346
Kumho Marshal;Kumho Marshal Matrac MH11;185;65;15;92T;Summer;Light;;4;2,180
Kumho Marshal;Kumho Marshal Matrac MH11;195;60;14;86H;Summer;Light;;4;2,434
Kumho Marshal;Kumho Marshal Matrac MH11;195;60;15;88H;Summer;Light;;4;2,635
Kumho Marshal;Kumho Marshal Matrac MH11;205;60;15;91V;Summer;Light;;4;2,878
Kumho Marshal;Kumho Marshal Matrac MH11;205;65;15;94V;Summer;Light;;4;2,713
Kumho Marshal;Kumho Marshal Matrac MH11;215;60;16;95H;Summer;Light;;4;3,519
Kumho Marshal;Kumho Marshal Matrac MH11;215;65;16;98H;Summer;Light;;4;3,597
Kumho Marshal;Kumho Marshal Matrac MU19;225;45;17;94Y;Summer;Light;;4;4,516
Kumho Marshal;Kumho Marshal Matrac MU19;225;35;18;87Y;Summer;Light;;4;6,419
Kumho Marshal;Kumho Marshal Matrac STX KL12;275;55;17;109V;Summer;Light;;4;6,751
Kumho Marshal;Kumho Marshal Matrac X3 KL17;255;50;19;103W;Summer;Light;;4;8,190
Kumho Marshal;Kumho Marshal Matrac XM KH35;175;65;15;84H;Summer;Light;;4;2,102
Kumho Marshal;Kumho Marshal Matrac XM KH35;185;55;14;80H;Summer;Light;;4;2,767
Kumho Marshal;Kumho Marshal Matrac XM KH35;185;60;14;82H;Summer;Light;;4;2,004
Kumho Marshal;Kumho Marshal Matrac XM KH35;185;60;15;84H;Summer;Light;;4;2,346
Kumho Marshal;Kumho Marshal Matrac XM KH35;195;50;15;82V;Summer;Light;;4;2,379
Kumho Marshal;Kumho Marshal Matrac XM KH35;195;60;15;88V;Summer;Light;;4;2,690
Kumho Marshal;Kumho Marshal Matrac XM KH35;195;65;15;91H;Summer;Light;;4;2,324
Kumho Marshal;Kumho Marshal Matrac XM KH35;195;50;16;84V;Summer;Light;;4;4,095
Kumho Marshal;Kumho Marshal Matrac XM KH35;195;55;16;87H;Summer;Light;;4;3,541
Kumho Marshal;Kumho Marshal Matrac XM KH35;205;55;16;91V;Summer;Light;;4;2,878
Kumho Marshal;Kumho Marshal Matrac XM KH35;215;65;15;96H;Summer;Light;;4;3,210
Kumho Marshal;Kumho Marshal Matrac XM KH35;215;60;16;95V;Summer;Light;;4;3,597
Kumho Marshal;Kumho Marshal Matrac XM KH35;215;55;16;97W;Summer;Light;;4;4,205
Kumho Marshal;Kumho Marshal Matrac XM KH35;215;65;16;98H;Summer;Light;;4;3,597
Kumho Marshal;Kumho Marshal Matrac XM KH35;215;50;17;91W;Summer;Light;;4;4,316
Kumho Marshal;Kumho Marshal Matrac XM KH35;215;55;17;94W;Summer;Light;;4;4,815
Kumho Marshal;Kumho Marshal Matrac XM KH35;225;45;17;94W;Summer;Light;;4;4,307
Kumho Marshal;Kumho Marshal Matrac XM KH35;225;55;17;97W;Summer;Light;;4;5,091
Kumho Marshal;Kumho Marshal Matrac XM KH35;225;60;17;99W;Summer;Light;;4;5,290
Kumho Marshal;Kumho Marshal Matrac XM KH35;235;60;16;100W;Summer;Light;;4;4,484
Kumho Marshal;Kumho Marshal Matrac XM KH35;235;50;17;96W;Summer;Light;;4;5,290
Kumho Marshal;Kumho Marshal Matrac XM KH35;235;45;17;97W;Summer;Light;;4;4,649
Kumho Marshal;Kumho Marshal Matrac XM KH35;235;55;17;99W;Summer;Light;;4;5,534
Kumho Marshal;Kumho Marshal Radial 857;165;70;14C;89R;Summer;Light;;4;2,379
Kumho Marshal;Kumho Marshal Radial 857;185;0;14C;99/97Q;Summer;Light;;4;3,099
Kumho Marshal;Kumho Marshal Radial 857;195;0;14C;106/104R;Summer;Light;;4;3,763
Kumho Marshal;Kumho Marshal Radial 857;195;70;15C;104/102R;Summer;Light;;4;3,377
Kumho Marshal;Kumho Marshal Radial 857;195;75;16C;107/105R;Summer;Light;;4;4,316
Kumho Marshal;Kumho Marshal Radial 857;205;65;15C;102/100R;Summer;Light;;4;3,796
Kumho Marshal;Kumho Marshal Radial 857;205;70;15C;106/104S;Summer;Light;;4;3,984
Kumho Marshal;Kumho Marshal Radial 857;205;65;16C;107/105T;Summer;Light;;4;4,539
Kumho Marshal;Kumho Marshal Radial 857;205;75;16C;110/108R;Summer;Light;;4;4,539
Kumho Marshal;Kumho Marshal Radial 857;215;65;16C;109/107R;Summer;Light;;4;4,484
Kumho Marshal;Kumho Marshal Radial 857;215;75;16C;113/111R;Summer;Light;;4;4,892
Kumho Marshal;Kumho Marshal Radial 857;225;70;15C;112/110R;Summer;Light;;4;4,316
Kumho Marshal;Kumho Marshal Radial 857;225;75;16C;118/116Q;Summer;Light;;4;5,312
Kumho Marshal;Kumho Marshal Radial 857;235;65;16C;115/113R;Summer;Light;;4;6,087
Kumho Marshal;Kumho Marshal Road Venture APT KL51;215;65;16;102H;Summer;Light;;4;3,873
Kumho Marshal;Kumho Marshal Road Venture APT KL51;225;70;15;100T;Summer;Light;;4;4,205
Kumho Marshal;Kumho Marshal Road Venture APT KL51;225;75;15;102T;Summer;Light;;4;4,428
Kumho Marshal;Kumho Marshal Road Venture APT KL51;235;70;15;102T;Summer;Light;;4;5,202
Kumho Marshal;Kumho Marshal Road Venture APT KL51;235;60;17;102V;Summer;Light;;4;5,844
Kumho Marshal;Kumho Marshal Road Venture APT KL51;235;60;18;103V;Summer;Light;;4;6,309
Kumho Marshal;Kumho Marshal Road Venture APT KL51;255;65;17;108T;Summer;Light;;4;6,087
Kumho Marshal;Kumho Marshal Road Venture AT KL78;215;75;15;100/97S;Demiseason;Light;;4;3,918
Kumho Marshal;Kumho Marshal Road Venture AT KL78;265;75;16;123/120Q;Demiseason;Light;;4;6,419
Kumho Marshal;Kumho Marshal Road Venture AT KL78;265;70;17;112/109Q;Demiseason;Light;;4;7,084
Kumho Marshal;Kumho Marshal Road Venture AT KL78;275;65;18;114S;Demiseason;Light;;4;8,855
Kumho Marshal;Kumho Marshal Road Venture AT KL78;275;55;20;117S;Demiseason;Light;;4;10,492
Kumho Marshal;Kumho Marshal I'Zen KW22;185;60;14;82T;Winter;Light;Yes;4;2,584
Kumho Marshal;Kumho Marshal I'Zen KW22;225;50;17;98T;Winter;Light;Yes;4;5,236
Kumho Marshal;Kumho Marshal I'Zen KW22;235;50;18;101T;Winter;Light;Yes;4;6,595
Kumho Marshal;Kumho Marshal I'Zen KW31;205;65;16;95R;Winter;Light;;4;4,139
Kumho Marshal;Kumho Marshal I'Zen KW31;215;55;17;98R;Winter;Light;;4;5,537
Kumho Marshal;Kumho Marshal I'Zen KW31;225;60;16;98R;Winter;Light;;4;4,388
Kumho Marshal;Kumho Marshal I'Zen KW31;225;40;18;92R;Winter;Light;;4;6,294
Kumho Marshal;Kumho Marshal I'Zen MW15;195;60;15;88T;Winter;Light;;4;2,807
Kumho Marshal;Kumho Marshal I'Zen RV KC15;255;70;16;111H;Winter;Light;;4;5,942
Kumho Marshal;Kumho Marshal I'Zen RV KC15;255;55;18;109H;Winter;Light;;4;5,367
Kumho Marshal;Kumho Marshal I'Zen RV KC15;255;50;19;107V;Winter;Light;;4;7,719
Kumho Marshal;Kumho Marshal I'Zen RV KC15;265;60;18;114H;Winter;Light;;4;6,074
Kumho Marshal;Kumho Marshal I'Zen RV KC15;275;40;20;106W;Winter;Light;;4;8,763
Kumho Marshal;Kumho Marshal I'Zen RV Stud KC16;215;70;16;100T;Winter;Light;Yes;4;5,198
Kumho Marshal;Kumho Marshal I'Zen RV Stud KC16;225;65;17;106T;Winter;Light;Yes;4;5,133
Kumho Marshal;Kumho Marshal I'Zen RV Stud KC16;225;60;18;104T;Winter;Light;Yes;4;6,348
Kumho Marshal;Kumho Marshal I'Zen RV Stud KC16;235;60;16;104T;Winter;Light;Yes;4;4,532
Kumho Marshal;Kumho Marshal I'Zen RV Stud KC16;255;55;18;109T;Winter;Light;Yes;4;5,629
Kumho Marshal;Kumho Marshal I'Zen RV Stud KC16;255;50;19;107T;Winter;Light;Yes;4;7,575
Kumho Marshal;Kumho Marshal I'Zen RV Stud KC16;265;60;18;114T;Winter;Light;Yes;4;6,465
Kumho Marshal;Kumho Marshal I'Zen RV Stud KC16;265;50;20;111T;Winter;Light;Yes;4;8,397
Kumho Marshal;Kumho Marshal I'Zen RV Stud KC16;275;65;17;115T;Winter;Light;Yes;4;6,138
Kumho Marshal;Kumho Marshal I'Zen RV Stud KC16;285;60;18;116T;Winter;Light;Yes;4;7,157
Kumho Marshal;Kumho Marshal Power Grip KC11;205;65;16C;107/105R;Winter;Light;Yes;4;4,872
Kumho Marshal;Kumho Marshal Power Grip KC11;245;75;16C;120/116Q;Winter;Light;Yes;4;6,438
Kumho Marshal;Kumho Marshal Road Venture SAT KL61;265;65;17;110S;Winter;Light;;4;5,694
Kumho Marshal;Kumho Marshal Winter PorTran CW51;195;0;14C;106/104Q;Winter;Light;;4;4,023
Kumho Marshal;Kumho Marshal WinterCraft Ice WI31;165;65;14;79T;Winter;Light;Yes;4;2,795
Kumho Marshal;Kumho Marshal WinterCraft Ice WI31;185;60;14;82T;Winter;Light;Yes;4;2,729
Kumho Marshal;Kumho Marshal WinterCraft Ice WI31;215;70;15;98T;Winter;Light;Yes;4;4,114
Kumho Marshal;Kumho Marshal WinterCraft Ice WI31;225;45;17;94T;Winter;Light;Yes;4;5,916
Matador;Matador MPS 330 Maxilla 2;205;65;16C;107/105T;Summer;Light;;4;0
Matador;Matador MP 50 Sibir Ice (view1);175;70;14;84T;Winter;Light;Yes;4;2,295
Matador;Matador MP 50 Sibir Ice (view1);205;65;15;94T;Winter;Light;Yes;4;3,089
Matador;Matador MP 50 Sibir Ice (view1);215;55;16;93T;Winter;Light;Yes;4;4,397
Matador;Matador MP 50 Sibir Ice (view2);195;60;15;88T;Winter;Light;Yes;4;2,798
Matador;Matador MP 50 Sibir Ice SUV;225;70;16;102T;Winter;Light;Yes;4;0
Michelin;Michelin 4X4 Diamaris;275;40;20;106Y;Summer;Light;;4;17,073
Michelin;Michelin Agilis;185;0;14C;102/100R;Summer;Light;;4;5,364
Michelin;Michelin Agilis +;185;75;16C;104/102R;Summer;Light;;4;7,231
Michelin;Michelin Agilis +;195;0;14C;106/104R;Summer;Light;;4;6,626
Michelin;Michelin Agilis +;195;70;15C;104/102R;Summer;Light;;4;6,052
Michelin;Michelin Agilis +;195;65;16C;104/102R;Summer;Light;;4;6,459
Michelin;Michelin Agilis +;195;75;16C;110/108R;Summer;Light;;4;7,389
Michelin;Michelin Agilis +;205;70;15C;106/104R;Summer;Light;;4;7,273
Michelin;Michelin Agilis +;205;65;16C;107/105T;Summer;Light;;4;7,577
Michelin;Michelin Agilis +;215;70;15C;109/107S;Summer;Light;;4;7,701
Michelin;Michelin Agilis +;215;65;16C;109/107T;Summer;Light;;4;7,889
Michelin;Michelin Agilis +;215;60;17C;109/107T;Summer;Light;;4;9,904
Michelin;Michelin Agilis +;225;70;15C;112/110S;Summer;Light;;4;7,347
Michelin;Michelin Agilis +;225;75;16C;118/116R;Summer;Light;;4;9,371
Michelin;Michelin Agilis +;235;65;16C;121/119R;Summer;Light;;4;10,061
Michelin;Michelin Agilis 51;175;65;14C;90/88T;Summer;Light;;4;4,352
Michelin;Michelin Agilis 51;205;65;15C;102/100T;Summer;Light;;4;6,356
Michelin;Michelin Agilis 51;215;65;15C;104/102T;Summer;Light;;4;7,054
Michelin;Michelin Agilis 51;225;60;16C;105/103T;Summer;Light;;4;9,559
Michelin;Michelin CrossClimate;185;60;15;88V;Demiseason;Light;;4;4,362
Michelin;Michelin CrossClimate;185;65;15;92T;Demiseason;Light;;4;3,684
Michelin;Michelin CrossClimate;195;55;15;89V;Demiseason;Light;;4;5,489
Michelin;Michelin CrossClimate;195;65;15;95V;Demiseason;Light;;4;3,820
Michelin;Michelin CrossClimate;195;55;16;91V;Demiseason;Light;;4;6,178
Michelin;Michelin CrossClimate;205;65;15;99V;Demiseason;Light;;4;4,623
Michelin;Michelin CrossClimate;205;55;16;94V;Demiseason;Light;;4;3,986
Michelin;Michelin CrossClimate;205;50;17;93W;Demiseason;Light;;4;7,587
Michelin;Michelin CrossClimate;215;65;16;102V;Demiseason;Light;;4;6,428
Michelin;Michelin CrossClimate;215;55;16;97V;Demiseason;Light;;4;6,199
Michelin;Michelin CrossClimate;215;60;16;99V;Demiseason;Light;;4;6,710
Michelin;Michelin CrossClimate;215;60;17;100V;Demiseason;Light;;4;8,621
Michelin;Michelin CrossClimate;215;50;17;95W;Demiseason;Light;;4;9,028
Michelin;Michelin CrossClimate;215;55;17;98W;Demiseason;Light;;4;7,598
Michelin;Michelin CrossClimate;225;55;16;99W;Demiseason;Light;;4;8,045
Michelin;Michelin Energy E3B 1;155;70;13;75T;Summer;Light;;4;2,374
Michelin;Michelin Energy Saver;205;55;16;91V;Summer;Light;;4;3,841
Michelin;Michelin Energy Saver;215;55;16;93V;Summer;Light;;4;5,959
Michelin;Michelin Energy Saver +;165;65;15;81T;Summer;Light;;4;4,164
Michelin;Michelin Energy Saver +;185;55;16;87H;Summer;Light;;4;5,541
Michelin;Michelin Energy Saver +;195;50;15;82T;Summer;Light;;4;3,747
Michelin;Michelin Energy Saver +;195;55;16;87H;Summer;Light;;4;5,939
Michelin;Michelin Energy XM2;175;65;14;82T;Summer;Light;;4;3,193
Michelin;Michelin Energy XM2;175;70;14;84T;Summer;Light;;4;3,820
Michelin;Michelin Energy XM2;185;60;14;82H;Summer;Light;;4;3,131
Michelin;Michelin Energy XM2;185;65;14;86H;Summer;Light;;4;3,444
Michelin;Michelin Energy XM2;185;65;15;88T;Summer;Light;;4;3,549
Michelin;Michelin Energy XM2;195;60;15;88H;Summer;Light;;4;3,361
Michelin;Michelin Energy XM2;195;65;15;91H;Summer;Light;;4;3,673
Michelin;Michelin Energy XM2;205;60;15;91H;Summer;Light;;4;5,051
Michelin;Michelin Latitude Cross;205;70;15;100H;Summer;Light;;4;6,188
Michelin;Michelin Latitude Cross;205;80;16;104T;Summer;Light;;4;6,637
Michelin;Michelin Latitude Cross;215;75;15;100T;Summer;Light;;4;6,919
Michelin;Michelin Latitude Cross;215;65;16;102H;Summer;Light;;4;6,491
Michelin;Michelin Latitude Cross;215;70;16;104H;Summer;Light;;4;7,347
Michelin;Michelin Latitude Cross;215;60;17;100H;Summer;Light;;4;8,713
Michelin;Michelin Latitude Cross;225;75;16;108H;Summer;Light;;4;8,328
Michelin;Michelin Latitude Cross;225;55;17;101H;Summer;Light;;4;10,019
Michelin;Michelin Latitude Cross;225;65;17;102H;Summer;Light;;4;8,087
Michelin;Michelin Latitude Cross;235;75;15;109H;Summer;Light;;4;7,002
Michelin;Michelin Latitude Cross;235;60;16;104H;Summer;Light;;4;8,182
Michelin;Michelin Latitude Cross;235;70;16;106H;Summer;Light;;4;8,473
Michelin;Michelin Latitude Cross;235;55;18;100H;Summer;Light;;4;11,813
Michelin;Michelin Latitude Cross;235;60;18;107H;Summer;Light;;4;9,715
Michelin;Michelin Latitude Cross;245;65;17;111H;Summer;Light;;4;9,277
Michelin;Michelin Latitude Cross;245;70;17;114T;Summer;Light;;4;10,029
Michelin;Michelin Latitude Cross;255;65;16;113H;Summer;Light;;4;8,066
Michelin;Michelin Latitude Cross;255;65;17;114H;Summer;Light;;4;9,934
Michelin;Michelin Latitude Cross;255;55;18;109H;Summer;Light;;4;9,601
Michelin;Michelin Latitude Cross;255;60;18;112H;Summer;Light;;4;12,022
Michelin;Michelin Latitude Cross;265;70;16;112H;Summer;Light;;4;8,840
Michelin;Michelin Latitude Cross;265;65;17;112H;Summer;Light;;4;10,331
Michelin;Michelin Latitude Cross;265;60;18;110H;Summer;Light;;4;10,582
Michelin;Michelin Latitude Cross;275;70;16;114H;Summer;Light;;4;10,082
Michelin;Michelin Latitude Cross;275;65;17;115T;Summer;Light;;4;9,590
Michelin;Michelin Latitude Diamaris;255;45;18;99V;Summer;Light;;4;11,279
Michelin;Michelin Latitude Sport;235;65;17;104V;Summer;Light;;4;9,408
Michelin;Michelin Latitude Sport;235;55;19;101W;Summer;Light;;4;12,637
Michelin;Michelin Latitude Sport;255;55;18;109Y;Summer;Light;;4;9,789
Michelin;Michelin Latitude Sport;255;55;20;110Y;Summer;Light;;4;18,272
Michelin;Michelin Latitude Sport;275;55;19;111W;Summer;Light;;4;15,580
Michelin;Michelin Latitude Sport;275;50;20;109W;Summer;Light;;4;18,638
Michelin;Michelin Latitude Sport;275;45;20;110Y;Summer;Light;;4;15,873
Michelin;Michelin Latitude Sport 3;225;65;17;102V;Summer;Light;;4;8,087
Michelin;Michelin Latitude Sport 3;225;60;18;100V;Summer;Light;;4;10,300
Michelin;Michelin Latitude Sport 3;235;55;18;100V;Summer;Light;;4;11,813
Michelin;Michelin Latitude Sport 3;235;60;18;103W;Summer;Light;;4;9,913
Michelin;Michelin Latitude Sport 3;235;65;18;110H;Summer;Light;;4;10,050
Michelin;Michelin Latitude Sport 3;235;55;19;101Y;Summer;Light;;4;12,241
Michelin;Michelin Latitude Sport 3;235;55;19;105V;Summer;Light;;4;12,011
Michelin;Michelin Latitude Sport 3;235;65;19;109V;Summer;Light;;4;14,318
Michelin;Michelin Latitude Sport 3;235;50;19;99V;Summer;Light;;4;14,537
Michelin;Michelin Latitude Sport 3;245;60;18;105H;Summer;Light;;4;10,739
Michelin;Michelin Latitude Sport 3;245;45;20;103W;Summer;Light;;4;18,293
Michelin;Michelin Latitude Sport 3;255;55;17;104V;Summer;Light;;4;10,947
Michelin;Michelin Latitude Sport 3;255;60;17;106V;Summer;Light;;4;9,466
Michelin;Michelin Latitude Sport 3;255;55;18;105W;Summer;Light;;4;9,789
Michelin;Michelin Latitude Sport 3;255;55;18;109V;Summer;Light;;4;11,031
Michelin;Michelin Latitude Sport 3;255;60;18;112V;Summer;Light;;4;12,022
Michelin;Michelin Latitude Sport 3;255;45;19;100V;Summer;Light;;4;16,895
Michelin;Michelin Latitude Sport 3;255;50;20;109Y;Summer;Light;;4;15,675
Michelin;Michelin Latitude Sport 3;265;50;19;110Y;Summer;Light;;4;13,921
Michelin;Michelin Latitude Sport 3;265;50;20;107V;Summer;Light;;4;16,385
Michelin;Michelin Latitude Sport 3;275;55;17;109V;Summer;Light;;4;11,688
Michelin;Michelin Latitude Sport 3;275;45;19;108Y;Summer;Light;;4;16,113
Michelin;Michelin Latitude Sport 3;275;45;20;110Y;Summer;Light;;4;15,873
Michelin;Michelin Latitude Sport 3;285;55;18;113V;Summer;Light;;4;13,452
Michelin;Michelin Latitude Sport 3;285;45;19;111W;Summer;Light;;4;15,289
Michelin;Michelin Latitude Sport 3;285;45;19;111W;Summer;Light;;4;17,585
Michelin;Michelin Latitude Sport 3;295;40;20;106Y;Summer;Light;;4;20,704
Michelin;Michelin Latitude Sport 3;315;35;20;110W;Summer;Light;;4;20,266
Michelin;Michelin Latitude Tour HP;215;70;16;100H;Summer;Light;;4;6,992
Michelin;Michelin Latitude Tour HP;215;65;16;98H;Summer;Light;;4;6,188
Michelin;Michelin Latitude Tour HP;225;60;18;100H;Summer;Light;;4;9,810
Michelin;Michelin Latitude Tour HP;235;60;16;100H;Summer;Light;;4;7,796
Michelin;Michelin Latitude Tour HP;235;65;17;108V;Summer;Light;;4;7,836
Michelin;Michelin Latitude Tour HP;235;60;18;103V;Summer;Light;;4;9,445
Michelin;Michelin Latitude Tour HP;235;60;18;103V;Summer;Light;;4;9,257
Michelin;Michelin Latitude Tour HP;235;55;19;101V;Summer;Light;;4;11,657
Michelin;Michelin Latitude Tour HP;235;55;19;101V;Summer;Light;;4;11,438
Michelin;Michelin Latitude Tour HP;235;55;20;102H;Summer;Light;;4;16,113
Michelin;Michelin Latitude Tour HP;255;55;18;109V;Summer;Light;;4;9,141
Michelin;Michelin Latitude Tour HP;255;60;18;112V;Summer;Light;;4;11,459
Michelin;Michelin Latitude Tour HP;255;50;19;103V;Summer;Light;;4;12,899
Michelin;Michelin Latitude Tour HP;255;50;19;107H;Summer;Light;;4;14,548
Michelin;Michelin Latitude Tour HP;265;60;18;109H;Summer;Light;;4;10,071
Michelin;Michelin Latitude Tour HP;265;50;19;110V;Summer;Light;;4;13,253
Michelin;Michelin Latitude Tour HP;265;45;20;104V;Summer;Light;;4;17,865
Michelin;Michelin Latitude Tour HP;275;45;19;108V;Summer;Light;;4;15,351
Michelin;Michelin Latitude Tour HP;275;60;20;114H;Summer;Light;;4;16,436
Michelin;Michelin Latitude Tour HP;295;40;20;106V;Summer;Light;;4;19,327
Michelin;Michelin Pilot Sport Cup +;305;30;19;102(Y);Summer;Light;;4;9,334
Michelin;Michelin Pilot Sport Cup 2;235;40;18;95(Y);Summer;Light;;4;12,200
Michelin;Michelin Pilot Sport Cup 2;235;35;19;91(Y);Summer;Light;;4;16,082
Michelin;Michelin Pilot Sport Cup 2;235;40;19;96(Y);Summer;Light;;4;16,602
Michelin;Michelin Pilot Sport Cup 2;245;35;20;91(Y);Summer;Light;;4;18,272
Michelin;Michelin Pilot Sport Cup 2;255;40;20;101(Y);Summer;Light;;4;22,270
Michelin;Michelin Pilot Sport Cup 2;265;35;19;98(Y);Summer;Light;;4;19,912
Michelin;Michelin Pilot Sport Cup 2;265;35;20;99(Y);Summer;Light;;4;22,990
Michelin;Michelin Pilot Sport Cup 2;285;30;18;97(Y);Summer;Light;;4;20,517
Michelin;Michelin Pilot Sport Cup 2;305;30;20;103(Y);Summer;Light;;4;29,178
Michelin;Michelin Pilot Sport PS2;225;40;18;92Y;Summer;Light;;4;10,740
Michelin;Michelin Pilot Sport PS2;235;35;19;87(Y);Summer;Light;;4;13,640
Michelin;Michelin Pilot Sport PS2;245;40;18;93Y;Summer;Light;;4;14,098
Michelin;Michelin Pilot Sport PS2;245;40;19;94(Y);Summer;Light;;4;16,103
Michelin;Michelin Pilot Sport PS2;265;40;18;101(Y);Summer;Light;;4;15,778
Michelin;Michelin Pilot Sport PS2;265;35;18;93(Y);Summer;Light;;4;15,091
Michelin;Michelin Pilot Sport PS2;265;35;21;101(Y);Summer;Light;;4;22,927
Michelin;Michelin Pilot Sport PS2;275;35;18;95Y;Summer;Light;;4;18,836
Michelin;Michelin Pilot Sport PS2;295;35;18;99(Y);Summer;Light;;4;18,222
Michelin;Michelin Pilot Sport PS2;295;30;19;100(Y);Summer;Light;;4;20,308
Michelin;Michelin Pilot Sport PS2;305;30;19;102(Y);Summer;Light;;4;21,571
Michelin;Michelin Pilot Sport PS3;205;50;16;87V;Summer;Light;;4;7,180
Michelin;Michelin Pilot Sport PS3;205;55;16;94W;Summer;Light;;4;4,028
Michelin;Michelin Pilot Sport PS3;205;40;17;84W;Summer;Light;;4;8,098
Michelin;Michelin Pilot Sport PS3;215;40;17;87W;Summer;Light;;4;8,264
Michelin;Michelin Pilot Sport PS3;215;45;18;93W;Summer;Light;;4;10,061
Michelin;Michelin Pilot Sport PS3;235;35;19;91Y;Summer;Light;;4;13,640
Michelin;Michelin Pilot Sport PS3;235;45;19;99W;Summer;Light;;4;15,873
Michelin;Michelin Pilot Sport PS3;245;35;18;92Y;Summer;Light;;4;13,274
Michelin;Michelin Pilot Sport PS3;245;40;19;98(Y);Summer;Light;;4;16,103
Michelin;Michelin Pilot Sport PS3;255;40;18;99(Y);Summer;Light;;4;14,401
Michelin;Michelin Pilot Sport PS3;255;40;19;100(Y);Summer;Light;;4;13,357
Michelin;Michelin Pilot Sport PS3;255;40;19;100Y;Summer;Light;;4;13,357
Michelin;Michelin Pilot Sport PS3;275;40;19;101Y;Summer;Light;;4;16,811
Michelin;Michelin Pilot Sport PS3;275;35;18;99(Y);Summer;Light;;4;14,814
Michelin;Michelin Pilot Sport PS3;285;35;18;101(Y);Summer;Light;;4;17,271
Michelin;Michelin Pilot Sport PS4;205;45;17;88(Y);Summer;Light;;4;7,691
Michelin;Michelin Pilot Sport PS4;215;45;17;91(Y);Summer;Light;;4;6,877
Michelin;Michelin Pilot Sport PS4;215;40;18;89Y;Summer;Light;;4;14,433
Michelin;Michelin Pilot Sport PS4;225;45;17;94(Y);Summer;Light;;4;6,824
Michelin;Michelin Pilot Sport PS4;225;40;18;92(Y);Summer;Light;;4;10,832
Michelin;Michelin Pilot Sport PS4;225;45;18;95(Y);Summer;Light;;4;11,197
Michelin;Michelin Pilot Sport PS4;235;45;17;97(Y);Summer;Light;;4;7,765
Michelin;Michelin Pilot Sport PS4;235;40;18;95(Y);Summer;Light;;4;11,083
Michelin;Michelin Pilot Sport PS4;245;40;17;95Y;Summer;Light;;4;10,718
Michelin;Michelin Pilot Sport PS4;245;45;17;99(Y);Summer;Light;;4;8,745
Michelin;Michelin Pilot Sport PS4;245;45;18;100(Y);Summer;Light;;4;10,937
Michelin;Michelin Pilot Sport PS4;245;40;18;97(Y);Summer;Light;;4;12,262
Michelin;Michelin Pilot Sport PS4;255;35;18;94(Y);Summer;Light;;4;13,796
Michelin;Michelin Pilot Sport PS4;265;35;18;97(Y);Summer;Light;;4;15,091
Michelin;Michelin Pilot Sport PS4;275;35;18;99(Y);Summer;Light;;4;16,385
Michelin;Michelin Pilot Super Sport;225;35;18;87(Y);Summer;Light;;4;13,107
Michelin;Michelin Pilot Super Sport;225;40;18;88Y;Summer;Light;;4;11,375
Michelin;Michelin Pilot Super Sport;225;45;18;95(Y);Summer;Light;;4;11,761
Michelin;Michelin Pilot Super Sport;225;35;19;88(Y);Summer;Light;;4;15,268
Michelin;Michelin Pilot Super Sport;225;40;19;93(Y);Summer;Light;;4;14,057
Michelin;Michelin Pilot Super Sport;225;35;20;90(Y);Summer;Light;;4;19,181
Michelin;Michelin Pilot Super Sport;235;45;18;94(Y);Summer;Light;;4;12,262
Michelin;Michelin Pilot Super Sport;235;30;19;86(Y);Summer;Light;;4;18,335
Michelin;Michelin Pilot Super Sport;235;35;19;91(Y);Summer;Light;;4;14,328
Michelin;Michelin Pilot Super Sport;235;40;19;96(Y);Summer;Light;;4;15,091
Michelin;Michelin Pilot Super Sport;235;30;20;88(Y);Summer;Light;;4;19,066
Michelin;Michelin Pilot Super Sport;235;35;20;88(Y);Summer;Light;;4;17,992
Michelin;Michelin Pilot Super Sport;245;35;18;92Y;Summer;Light;;4;11,531
Michelin;Michelin Pilot Super Sport;245;40;18;97(Y);Summer;Light;;4;12,878
Michelin;Michelin Pilot Super Sport;245;35;19;89(Y);Summer;Light;;4;17,387
Michelin;Michelin Pilot Super Sport;245;35;19;93(Y);Summer;Light;;4;15,112
Michelin;Michelin Pilot Super Sport;245;40;19;98(Y);Summer;Light;;4;16,906
Michelin;Michelin Pilot Super Sport;245;35;20;95(Y);Summer;Light;;4;16,623
Michelin;Michelin Pilot Super Sport;255;40;18;99(Y);Summer;Light;;4;15,112
Michelin;Michelin Pilot Super Sport;255;40;19;100(Y);Summer;Light;;4;14,036
Michelin;Michelin Pilot Super Sport;255;45;19;104(Y);Summer;Light;;4;17,730
Michelin;Michelin Pilot Super Sport;255;30;19;91(Y);Summer;Light;;4;18,816
Michelin;Michelin Pilot Super Sport;255;35;19;96(Y);Summer;Light;;4;17,886
Michelin;Michelin Pilot Super Sport;255;40;20;101(Y);Summer;Light;;4;20,662
Michelin;Michelin Pilot Super Sport;255;30;20;92(Y);Summer;Light;;4;18,774
Michelin;Michelin Pilot Super Sport;255;35;20;97(Y);Summer;Light;;4;20,089
Michelin;Michelin Pilot Super Sport;265;40;18;101(Y);Summer;Light;;4;16,573
Michelin;Michelin Pilot Super Sport;265;40;19;102(Y);Summer;Light;;4;17,417
Michelin;Michelin Pilot Super Sport;265;30;19;93(Y);Summer;Light;;4;17,897
Michelin;Michelin Pilot Super Sport;265;35;19;98(Y);Summer;Light;;4;18,461
Michelin;Michelin Pilot Super Sport;265;35;19;98(Y);Summer;Light;;4;18,106
Michelin;Michelin Pilot Super Sport;265;30;20;94(Y);Summer;Light;;4;20,183
Michelin;Michelin Pilot Super Sport;275;40;18;99(Y);Summer;Light;;4;15,664
Michelin;Michelin Pilot Super Sport;275;40;19;105(Y);Summer;Light;;4;17,646
Michelin;Michelin Pilot Super Sport;285;40;19;103(Y);Summer;Light;;4;21,288
Michelin;Michelin Pilot Super Sport;285;35;19;103(Y);Summer;Light;;4;19,077
Michelin;Michelin Pilot Super Sport;285;35;21;105Y;Summer;Light;;4;26,079
Michelin;Michelin Pilot Super Sport;295;30;19;100(Y);Summer;Light;;4;21,331
Michelin;Michelin Pilot Super Sport;295;30;21;102(Y);Summer;Light;;4;26,967
Michelin;Michelin Pilot Super Sport;325;30;19;105(Y);Summer;Light;;4;25,453
Michelin;Michelin Pilot Super Sport;325;25;20;101(Y);Summer;Light;;4;25,548
Michelin;Michelin Pilot Super Sport;325;30;21;108Y;Summer;Light;;4;25,035
Michelin;Michelin Primacy 3;195;55;16;91V;Summer;Light;;4;6,835
Michelin;Michelin Primacy 3;205;55;16;91V;Summer;Light;;4;3,841
Michelin;Michelin Primacy 3;205;60;16;96W;Summer;Light;;4;5,511
Michelin;Michelin Primacy 3;205;45;17;88V;Summer;Light;;4;7,326
Michelin;Michelin Primacy 3;205;55;17;91W;Summer;Light;;4;9,403
Michelin;Michelin Primacy 3;205;50;17;93V;Summer;Light;;4;7,305
Michelin;Michelin Primacy 3;205;55;17;95V;Summer;Light;;4;8,182
Michelin;Michelin Primacy 3;215;55;16;97V;Summer;Light;;4;5,959
Michelin;Michelin Primacy 3;215;60;17;96V;Summer;Light;;4;8,296
Michelin;Michelin Primacy 3;215;55;17;98W;Summer;Light;;4;7,315
Michelin;Michelin Primacy 3;215;55;18;99V;Summer;Light;;4;9,403
Michelin;Michelin Primacy 3;225;60;16;102V;Summer;Light;;4;7,691
Michelin;Michelin Primacy 3;225;50;16;92V;Summer;Light;;4;8,422
Michelin;Michelin Primacy 3;225;55;16;95V;Summer;Light;;4;7,743
Michelin;Michelin Primacy 3;225;55;17;101W;Summer;Light;;4;9,548
Michelin;Michelin Primacy 3;225;45;17;94W;Summer;Light;;4;6,491
Michelin;Michelin Primacy 3;225;60;17;99V;Summer;Light;;4;9,684
Michelin;Michelin Primacy 3;225;45;18;95Y;Summer;Light;;4;12,878
Michelin;Michelin Primacy 3;225;55;18;98V;Summer;Light;;4;9,184
Michelin;Michelin Primacy 3;235;50;17;96W;Summer;Light;;4;9,664
Michelin;Michelin Primacy 3;235;45;17;97W;Summer;Light;;4;7,400
Michelin;Michelin Primacy 3;235;50;18;101Y;Summer;Light;;4;11,375
Michelin;Michelin Primacy 3;235;45;18;98W;Summer;Light;;4;11,124
Michelin;Michelin Primacy 3;245;55;17;102W;Summer;Light;;4;13,035
Michelin;Michelin Primacy 3;245;45;17;99W;Summer;Light;;4;8,328
Michelin;Michelin Primacy 3;245;45;18;100Y;Summer;Light;;4;11,981
Michelin;Michelin Primacy 3;245;40;18;93Y;Summer;Light;;4;11,678
Michelin;Michelin Primacy 3;245;40;18;97Y;Summer;Light;;4;13,431
Michelin;Michelin Primacy 3;245;45;19;98Y;Summer;Light;;4;17,844
Michelin;Michelin Primacy 3;255;45;18;99Y;Summer;Light;;4;11,887
Michelin;Michelin Primacy 3;275;40;19;101Y;Summer;Light;;4;19,337
Michelin;Michelin Primacy HP;215;45;17;87W;Summer;Light;;4;6,317
Michelin;Michelin Primacy HP;225;50;16;92V;Summer;Light;;4;6,378
Michelin;Michelin Primacy HP;245;40;17;91W;Summer;Light;;4;10,206
Michelin;Michelin Primacy HP;255;45;18;99Y;Summer;Light;;4;11,887
Michelin;Michelin Primacy HP;275;45;18;103Y;Summer;Light;;4;16,238
Michelin;Michelin Agilis 51 Snow-Ice;175;65;14C;90/88T;Winter;Light;;4;4,881
Michelin;Michelin Agilis Alpin;195;65;16C;104/102R;Winter;Light;;4;6,459
Michelin;Michelin Agilis Alpin;195;60;16C;99/97T;Winter;Light;;4;6,873
Michelin;Michelin Agilis Alpin;205;70;15C;106/104R;Winter;Light;;4;6,083
Michelin;Michelin Agilis Alpin;205;65;16C;107/105T;Winter;Light;;4;6,675
Michelin;Michelin Agilis Alpin;215;75;16C;116/114R;Winter;Light;;4;7,346
Michelin;Michelin Agilis Alpin;225;65;16C;112/110R;Winter;Light;;4;8,076
Michelin;Michelin Agilis Alpin;235;60;17C;117/115R;Winter;Light;;4;11,497
Michelin;Michelin Agilis X-Ice North;185;0;14C;102/100R;Winter;Light;Yes;4;5,674
Michelin;Michelin Agilis X-Ice North;185;75;16C;104/102R;Winter;Light;Yes;4;6,697
Michelin;Michelin Agilis X-Ice North;205;65;16C;107/105R;Winter;Light;Yes;4;6,996
Michelin;Michelin Agilis X-Ice North;205;75;16C;110/108R;Winter;Light;Yes;4;6,996
Michelin;Michelin Agilis X-Ice North;215;70;15C;109/107R;Winter;Light;Yes;4;6,717
Michelin;Michelin Agilis X-Ice North;215;65;16C;109/107R;Winter;Light;Yes;4;7,358
Michelin;Michelin Agilis X-Ice North;215;75;16C;116/114R;Winter;Light;Yes;4;7,311
Michelin;Michelin Agilis X-Ice North;225;65;16C;112/110R;Winter;Light;Yes;4;8,496
Michelin;Michelin Agilis X-Ice North;225;75;16C;121/120R;Winter;Light;Yes;4;8,282
Michelin;Michelin Agilis X-Ice North;235;65;16C;115/113R;Winter;Light;Yes;4;8,441
Michelin;Michelin Alpin A3;155;70;13;75T;Winter;Light;;4;3,199
Michelin;Michelin Alpin A3;185;65;14;86T;Winter;Light;;4;3,265
Michelin;Michelin Alpin A3;185;70;14;88T;Winter;Light;;4;4,094
Michelin;Michelin Alpin A4;175;65;14;82T;Winter;Light;;4;3,509
Michelin;Michelin Alpin A4;185;65;15;92T;Winter;Light;;4;4,187
Michelin;Michelin Alpin A4;195;50;15;82T;Winter;Light;;4;4,560
Michelin;Michelin Alpin A4;195;60;15;88T;Winter;Light;;4;4,447
Michelin;Michelin Alpin A4;205;60;15;91T;Winter;Light;;4;4,210
Michelin;Michelin Alpin A4;205;65;15;94T;Winter;Light;;4;5,097
Michelin;Michelin Alpin A4;215;50;17;95V;Winter;Light;;4;8,887
Michelin;Michelin Latitude Alpin;205;70;15;96T;Winter;Light;;4;5,376
Michelin;Michelin Latitude Alpin;205;80;16;104T;Winter;Light;;4;7,484
Michelin;Michelin Latitude Alpin;215;60;17;96T;Winter;Light;;4;7,229
Michelin;Michelin Latitude Alpin;235;75;15;109T;Winter;Light;;4;8,089
Michelin;Michelin Latitude Alpin;235;60;16;100T;Winter;Light;;4;8,532
Michelin;Michelin Latitude Alpin;235;70;16;106T;Winter;Light;;4;8,164
Michelin;Michelin Latitude Alpin;265;70;16;112T;Winter;Light;;4;9,491
Michelin;Michelin Latitude Alpin 2;215;70;16;104H;Winter;Light;;4;7,636
Michelin;Michelin Latitude Alpin 2;225;75;16;108H;Winter;Light;;4;7,906
Michelin;Michelin Latitude Alpin 2;225;60;17;103H;Winter;Light;;4;8,416
Michelin;Michelin Latitude Alpin 2;225;60;18;104H;Winter;Light;;4;10,903
Michelin;Michelin Latitude Alpin 2;235;60;18;107H;Winter;Light;;4;9,067
Michelin;Michelin Latitude Alpin 2;245;45;20;103V;Winter;Light;;4;15,016
Michelin;Michelin Latitude Alpin 2;255;60;17;110H;Winter;Light;;4;9,724
Michelin;Michelin Latitude Alpin 2;255;55;20;110V;Winter;Light;;4;15,380
Michelin;Michelin Latitude Alpin 2;265;65;17;116H;Winter;Light;;4;9,549
Michelin;Michelin Latitude Alpin 2;265;60;18;114H;Winter;Light;;4;9,771
Michelin;Michelin Latitude Alpin 2;265;45;21;104V;Winter;Light;;4;13,936
Michelin;Michelin Latitude X-Ice North;215;60;17;96T;Winter;Light;Yes;4;7,602
Michelin;Michelin Latitude X-Ice North;235;70;16;106Q;Winter;Light;Yes;4;7,060
Michelin;Michelin Latitude X-Ice North;235;60;17;102T;Winter;Light;Yes;4;8,939
Michelin;Michelin Latitude X-Ice North;245;70;16;107Q;Winter;Light;Yes;4;10,238
Michelin;Michelin Latitude X-Ice North;295;35;21;107T;Winter;Light;Yes;4;15,783
Michelin;Michelin Latitude X-Ice North LXIN2;215;70;16;100T;Winter;Light;Yes;4;8,039
Michelin;Michelin Latitude X-Ice North LXIN2;225;70;16;107T;Winter;Light;Yes;4;7,917
Michelin;Michelin Latitude X-Ice North LXIN2;225;65;17;102T;Winter;Light;Yes;4;7,872
Michelin;Michelin Latitude X-Ice North LXIN2;225;60;17;103T;Winter;Light;Yes;4;8,022
Michelin;Michelin Latitude X-Ice North LXIN2;225;55;18;102T;Winter;Light;Yes;4;10,045
Michelin;Michelin Latitude X-Ice North LXIN2;235;55;18;104T;Winter;Light;Yes;4;11,151
Michelin;Michelin Latitude X-Ice North LXIN2;235;65;18;110T;Winter;Light;Yes;4;8,683
Michelin;Michelin Latitude X-Ice North LXIN2;235;55;19;105T;Winter;Light;Yes;4;10,377
Michelin;Michelin Latitude X-Ice North LXIN2;235;45;20;100T;Winter;Light;Yes;4;16,774
Michelin;Michelin Latitude X-Ice North LXIN2;245;70;17;110T;Winter;Light;Yes;4;8,485
Michelin;Michelin Latitude X-Ice North LXIN2;245;60;18;105T;Winter;Light;Yes;4;10,881
Michelin;Michelin Latitude X-Ice North LXIN2;245;45;20;99T;Winter;Light;Yes;4;16,141
Michelin;Michelin Latitude X-Ice North LXIN2;255;65;17;114T;Winter;Light;Yes;4;9,655
Michelin;Michelin Latitude X-Ice North LXIN2;255;55;18;109T;Winter;Light;Yes;4;8,719
Michelin;Michelin Latitude X-Ice North LXIN2;255;60;18;112T;Winter;Light;Yes;4;10,128
Michelin;Michelin Latitude X-Ice North LXIN2;255;55;19;111T;Winter;Light;Yes;4;11,119
Michelin;Michelin Latitude X-Ice North LXIN2;255;45;20;105T;Winter;Light;Yes;4;14,513
Michelin;Michelin Latitude X-Ice North LXIN2;255;55;20;110T;Winter;Light;Yes;4;16,046
Michelin;Michelin Latitude X-Ice North LXIN2;265;70;16;112T;Winter;Light;Yes;4;9,445
Michelin;Michelin Latitude X-Ice North LXIN2;265;65;17;116T;Winter;Light;Yes;4;9,508
Michelin;Michelin Latitude X-Ice North LXIN2;265;60;18;114T;Winter;Light;Yes;4;9,427
Michelin;Michelin Latitude X-Ice North LXIN2;265;50;19;110T;Winter;Light;Yes;4;12,474
Michelin;Michelin Latitude X-Ice North LXIN2;265;45;20;104T;Winter;Light;Yes;4;14,240
Michelin;Michelin Latitude X-Ice North LXIN2;265;45;21;104T;Winter;Light;Yes;4;14,050
Michelin;Michelin Latitude X-Ice North LXIN2;275;70;16;114T;Winter;Light;Yes;4;10,408
Michelin;Michelin Latitude X-Ice North LXIN2;275;40;20;106T;Winter;Light;Yes;4;11,283
Michelin;Michelin Latitude X-Ice North LXIN2;275;45;20;110T;Winter;Light;Yes;4;14,741
Michelin;Michelin Latitude X-Ice North LXIN2;275;40;21;107T;Winter;Light;Yes;4;18,124
Michelin;Michelin Latitude X-Ice North LXIN2;285;65;17;116T;Winter;Light;Yes;4;10,148
Michelin;Michelin Latitude X-Ice North LXIN2+;225;65;17;102T;Winter;Light;Yes;4;7,566
Michelin;Michelin Latitude X-Ice North LXIN2+;225;60;17;103T;Winter;Light;Yes;4;8,856
Michelin;Michelin Latitude X-Ice North LXIN2+;235;65;17;108T;Winter;Light;Yes;4;7,752
Michelin;Michelin Latitude X-Ice North LXIN2+;235;60;18;107T;Winter;Light;Yes;4;9,752
Michelin;Michelin Latitude X-Ice North LXIN2+;235;55;19;105T;Winter;Light;Yes;4;9,195
Michelin;Michelin Latitude X-Ice North LXIN2+;255;55;18;109T;Winter;Light;Yes;4;8,920
Michelin;Michelin Latitude X-Ice North LXIN2+;255;50;19;107T;Winter;Light;Yes;4;10,019
Michelin;Michelin Latitude X-Ice North LXIN2+;255;45;20;105T;Winter;Light;Yes;4;15,247
Michelin;Michelin Latitude X-Ice North LXIN2+;255;55;20;110T;Winter;Light;Yes;4;15,450
Michelin;Michelin Latitude X-Ice North LXIN2+;265;50;19;110T;Winter;Light;Yes;4;12,493
Michelin;Michelin Latitude X-Ice North LXIN2+;265;45;20;104T;Winter;Light;Yes;4;14,197
Michelin;Michelin Latitude X-Ice North LXIN2+;265;50;20;111T;Winter;Light;Yes;4;13,637
Michelin;Michelin Latitude X-Ice North LXIN2+;265;45;21;104T;Winter;Light;Yes;4;14,050
Michelin;Michelin Latitude X-Ice North LXIN2+;275;40;20;106T;Winter;Light;Yes;4;12,786
Michelin;Michelin Latitude X-Ice North LXIN2+;285;60;18;116T;Winter;Light;Yes;4;11,318
Michelin;Michelin Latitude X-Ice North LXIN2+;295;40;20;110T;Winter;Light;Yes;4;15,214
Michelin;Michelin Latitude X-Ice Xi2;215;70;16;100T;Winter;Light;;4;7,636
Michelin;Michelin Latitude X-Ice Xi2;225;70;16;103T;Winter;Light;;4;8,001
Michelin;Michelin Latitude X-Ice Xi2;235;75;15;108T;Winter;Light;;4;8,089
Michelin;Michelin Latitude X-Ice Xi2;235;70;16;106T;Winter;Light;;4;7,183
Michelin;Michelin Latitude X-Ice Xi2;235;60;17;102T;Winter;Light;;4;8,492
Michelin;Michelin Latitude X-Ice Xi2;235;65;17;108T;Winter;Light;;4;6,993
Michelin;Michelin Latitude X-Ice Xi2;235;55;18;100T;Winter;Light;;4;8,754
Michelin;Michelin Latitude X-Ice Xi2;235;65;18;106T;Winter;Light;;4;8,077
Michelin;Michelin Latitude X-Ice Xi2;245;70;16;107T;Winter;Light;;4;9,736
Michelin;Michelin Latitude X-Ice Xi2;245;65;17;107T;Winter;Light;;4;9,112
Michelin;Michelin Latitude X-Ice Xi2;245;70;17;110T;Winter;Light;;4;8,064
Michelin;Michelin Latitude X-Ice Xi2;245;60;18;105T;Winter;Light;;4;10,116
Michelin;Michelin Latitude X-Ice Xi2;255;65;17;110T;Winter;Light;;4;9,713
Michelin;Michelin Latitude X-Ice Xi2;255;55;18;109T;Winter;Light;;4;9,020
Michelin;Michelin Latitude X-Ice Xi2;255;50;19;107H;Winter;Light;;4;10,960
Michelin;Michelin Latitude X-Ice Xi2;255;55;19;111H;Winter;Light;;4;10,948
Michelin;Michelin Latitude X-Ice Xi2;265;70;15;112T;Winter;Light;;4;8,416
Michelin;Michelin Latitude X-Ice Xi2;265;70;16;112T;Winter;Light;;4;9,491
Michelin;Michelin Latitude X-Ice Xi2;265;65;17;112T;Winter;Light;;4;8,488
Michelin;Michelin Latitude X-Ice Xi2;265;70;17;115T;Winter;Light;;4;9,470
Michelin;Michelin Latitude X-Ice Xi2;265;60;18;110T;Winter;Light;;4;8,582
Michelin;Michelin Latitude X-Ice Xi2;275;70;16;114T;Winter;Light;;4;9,297
Michelin;Michelin Latitude X-Ice Xi2;275;65;17;115T;Winter;Light;;4;9,477
Michelin;Michelin Latitude X-Ice Xi2;275;40;20;106H;Winter;Light;;4;11,176
Michelin;Michelin Pilot Alpin PA4;215;45;18;93V;Winter;Light;;4;10,863
Michelin;Michelin Pilot Alpin PA4;225;35;19;88W;Winter;Light;;4;16,649
Michelin;Michelin Pilot Alpin PA4;245;55;17;102V;Winter;Light;;4;12,902
Michelin;Michelin Pilot Alpin PA4;245;50;18;104V;Winter;Light;;4;11,893
Michelin;Michelin Pilot Alpin PA4;255;35;18;94V;Winter;Light;;4;13,151
Michelin;Michelin Pilot Alpin PA4;275;35;19;100W;Winter;Light;;4;20,672
Michelin;Michelin Pilot Alpin PA4;275;35;20;102W;Winter;Light;;4;21,868
Michelin;Michelin Pilot Alpin PA4 (Porsche);235;40;19;96W;Winter;Light;;4;12,217
Michelin;Michelin X-Ice North;175;70;13;82T;Winter;Light;Yes;4;2,565
Michelin;Michelin X-Ice North;205;65;15;94T;Winter;Light;Yes;4;4,844
Michelin;Michelin X-Ice North Xin2;175;70;14;88T;Winter;Light;Yes;4;3,181
Michelin;Michelin X-Ice North Xin2;185;60;14;86T;Winter;Light;Yes;4;3,530
Michelin;Michelin X-Ice North Xin2;185;65;14;90T;Winter;Light;Yes;4;3,247
Michelin;Michelin X-Ice North Xin2;185;65;15;92T;Winter;Light;Yes;4;3,731
Michelin;Michelin X-Ice North Xin2;195;60;15;92T;Winter;Light;Yes;4;4,045
Michelin;Michelin X-Ice North Xin2;195;60;15;92T;Winter;Light;Yes;4;3,497
Michelin;Michelin X-Ice North Xin2;205;60;16;96T;Winter;Light;Yes;4;6,276
Michelin;Michelin X-Ice North Xin2;215;50;17;95T;Winter;Light;Yes;4;6,560
Michelin;Michelin X-Ice North Xin3;175;65;15;88T;Winter;Light;Yes;4;4,116
Michelin;Michelin X-Ice North Xin3;185;55;15;86T;Winter;Light;Yes;4;5,051
Michelin;Michelin X-Ice North Xin3;185;60;15;88T;Winter;Light;Yes;4;4,198
Michelin;Michelin X-Ice North Xin3;185;65;15;92T;Winter;Light;Yes;4;3,586
Michelin;Michelin X-Ice North Xin3;185;55;16;87T;Winter;Light;Yes;4;5,112
Michelin;Michelin X-Ice North Xin3;195;50;15;86T;Winter;Light;Yes;4;5,282
Michelin;Michelin X-Ice North Xin3;195;55;15;89T;Winter;Light;Yes;4;4,952
Michelin;Michelin X-Ice North Xin3;195;60;15;92T;Winter;Light;Yes;4;3,706
Michelin;Michelin X-Ice North Xin3;195;60;16;93T;Winter;Light;Yes;4;6,659
Michelin;Michelin X-Ice North Xin3;205;60;15;95T;Winter;Light;Yes;4;5,152
Michelin;Michelin X-Ice North Xin3;205;60;16;96T;Winter;Light;Yes;4;5,158
Michelin;Michelin X-Ice North Xin3;205;65;16;99T;Winter;Light;Yes;4;6,083
Michelin;Michelin X-Ice North Xin3;205;50;17;93T;Winter;Light;Yes;4;7,929
Michelin;Michelin X-Ice North Xin3;205;55;17;95T;Winter;Light;Yes;4;9,199
Michelin;Michelin X-Ice North Xin3;215;65;16;102T;Winter;Light;Yes;4;4,819
Michelin;Michelin X-Ice North Xin3;215;55;16;97T;Winter;Light;Yes;4;6,103
Michelin;Michelin X-Ice North Xin3;215;60;16;99T;Winter;Light;Yes;4;6,192
Michelin;Michelin X-Ice North Xin3;215;55;18;99T;Winter;Light;Yes;4;9,526
Michelin;Michelin X-Ice North Xin3;225;60;16;102T;Winter;Light;Yes;4;7,113
Michelin;Michelin X-Ice North Xin3;225;55;17;101T;Winter;Light;Yes;4;8,856
Michelin;Michelin X-Ice North Xin3;225;45;17;94T;Winter;Light;Yes;4;9,285
Michelin;Michelin X-Ice North Xin3;225;50;17;98T;Winter;Light;Yes;4;8,256
Michelin;Michelin X-Ice North Xin3;225;40;18;92T;Winter;Light;Yes;4;10,952
Michelin;Michelin X-Ice North Xin3;225;50;18;99T;Winter;Light;Yes;4;11,693
Michelin;Michelin X-Ice North Xin3;235;55;17;103T;Winter;Light;Yes;4;8,428
Michelin;Michelin X-Ice North Xin3;235;45;17;97T;Winter;Light;Yes;4;9,183
Michelin;Michelin X-Ice North Xin3;235;50;18;101T;Winter;Light;Yes;4;11,411
Michelin;Michelin X-Ice North Xin3;235;40;18;95T;Winter;Light;Yes;4;10,403
Michelin;Michelin X-Ice North Xin3;235;45;18;98T;Winter;Light;Yes;4;12,601
Michelin;Michelin X-Ice North Xin3;245;45;17;99T;Winter;Light;Yes;4;9,892
Michelin;Michelin X-Ice North Xin3;245;45;18;100T;Winter;Light;Yes;4;11,963
Michelin;Michelin X-Ice North Xin3;245;50;18;104T;Winter;Light;Yes;4;12,084
Michelin;Michelin X-Ice North Xin3;245;40;18;97T;Winter;Light;Yes;4;10,857
Michelin;Michelin X-Ice North Xin3;245;45;19;102H;Winter;Light;Yes;4;12,895
Michelin;Michelin X-Ice North Xin3;255;40;18;99T;Winter;Light;Yes;4;14,428
Michelin;Michelin X-Ice North Xin3;285;40;19;107H;Winter;Light;Yes;4;17,552
Michelin;Michelin X-Ice XI3;155;65;14;75T;Winter;Light;;4;3,711
Michelin;Michelin X-Ice XI3;175;70;13;86T;Winter;Light;;4;3,156
Michelin;Michelin X-Ice XI3;175;65;14;86T;Winter;Light;;4;3,171
Michelin;Michelin X-Ice XI3;185;60;14;86H;Winter;Light;;4;3,394
Michelin;Michelin X-Ice XI3;185;60;15;88H;Winter;Light;;4;3,988
Michelin;Michelin X-Ice XI3;185;65;15;92T;Winter;Light;;4;3,406
Michelin;Michelin X-Ice XI3;195;55;15;89H;Winter;Light;;4;5,003
Michelin;Michelin X-Ice XI3;195;60;15;92H;Winter;Light;;4;3,719
Michelin;Michelin X-Ice XI3;195;65;15;95T;Winter;Light;;4;3,552
Michelin;Michelin X-Ice XI3;195;60;16;89H;Winter;Light;;4;6,327
Michelin;Michelin X-Ice XI3;205;65;15;99T;Winter;Light;;4;4,406
Michelin;Michelin X-Ice XI3;205;55;16;91H;Winter;Light;;4;5,918
Michelin;Michelin X-Ice XI3;205;55;16;94H;Winter;Light;;4;4,783
Michelin;Michelin X-Ice XI3;205;60;16;96H;Winter;Light;;4;4,902
Michelin;Michelin X-Ice XI3;205;65;16;99T;Winter;Light;;4;5,783
Michelin;Michelin X-Ice XI3;205;50;17;89H;Winter;Light;;4;7,113
Michelin;Michelin X-Ice XI3;215;65;16;102T;Winter;Light;;4;4,919
Michelin;Michelin X-Ice XI3;215;60;16;99H;Winter;Light;;4;6,226
Michelin;Michelin X-Ice XI3;215;60;17;96T;Winter;Light;;4;7,094
Michelin;Michelin X-Ice XI3;215;55;17;98H;Winter;Light;;4;8,473
Michelin;Michelin X-Ice XI3;215;45;18;93H;Winter;Light;;4;10,210
Michelin;Michelin X-Ice XI3;225;55;17;101H;Winter;Light;;4;8,416
Michelin;Michelin X-Ice XI3;225;45;17;94H;Winter;Light;;4;8,377
Michelin;Michelin X-Ice XI3;225;50;17;98H;Winter;Light;;4;7,840
Michelin;Michelin X-Ice XI3;225;60;17;99H;Winter;Light;;4;7,995
Michelin;Michelin X-Ice XI3;225;60;18;100H;Winter;Light;;4;10,903
Michelin;Michelin X-Ice XI3;225;45;18;95H;Winter;Light;;4;10,185
Michelin;Michelin X-Ice XI3;235;60;16;100T;Winter;Light;;4;8,532
Michelin;Michelin X-Ice XI3;235;45;17;97H;Winter;Light;;4;8,723
Michelin;Michelin X-Ice XI3;235;50;18;101H;Winter;Light;;4;10,614
Michelin;Michelin X-Ice XI3;235;45;18;98H;Winter;Light;;4;11,718
Michelin;Michelin X-Ice XI3;245;45;17;99H;Winter;Light;;4;9,301
Michelin;Michelin X-Ice XI3;245;50;18;104H;Winter;Light;;4;11,893
Mickey Thompson;Mickey Thompson Baja STZ;275;70;17;121R;Demiseason;Light;;4;0
Nexen;Nexen CP643A;225;55;17;97V;Summer;Light;;4;5,367
Nexen;Nexen N6000;225;45;17;94W;Summer;Light;;4;4,589
Nexen;Nexen N6000;255;45;18;103Y;Summer;Light;;4;8,113
Nexen;Nexen Nblue HD;225;50;16;92V;Summer;Light;;4;4,601
Nexen;Nexen Nblue HD Plus;215;55;16;93V;Summer;Light;;4;4,349
Nexen;Nexen Nblue HD Plus;215;55;17;94V;Summer;Light;;4;4,695
Nexen;Nexen Nfera AU5;225;40;18;92W;Summer;Light;;4;5,965
Nexen;Nexen Nfera RU1;225;55;18;98V;Summer;Light;;4;7,007
Nexen;Nexen Nfera RU1;235;55;18;100V;Summer;Light;;4;7,084
Nexen;Nexen Nfera RU1;255;55;19;111V;Summer;Light;;4;8,462
Nexen;Nexen Nfera SU1;225;55;17;101W;Summer;Light;;4;5,756
Nexen;Nexen Nfera SU1;275;40;19;105Y;Summer;Light;;4;10,058
Nexen;Nexen Npriz RH1;215;60;17;96H;Summer;Light;;4;6,258
Nexen;Nexen Roadian HP;235;65;17;108V;Summer;Light;;4;5,574
Nexen;Nexen Roadian HT;225;70;15;100S;Summer;Light;;4;3,971
Nexen;Nexen Roadian HTX RH5;235;70;16;106T;Summer;Light;;4;4,766
Nexen;Nexen Roadian MT;235;85;16C;120/116Q;Demiseason;Light;;4;7,121
Nexen;Nexen Winguard Ice;205;70;15;96Q;Winter;Light;;4;3,582
Nexen;Nexen Winguard SUV;235;60;17;106H;Winter;Light;;4;5,908
Nexen;Nexen Winguard Winspike WH6;185;60;14;82T;Winter;Light;Yes;4;2,498
Nexen;Nexen Winguard Winspike WH6;185;55;15;86T;Winter;Light;Yes;4;3,291
Nexen;Nexen Winguard Winspike WH6;185;60;15;88T;Winter;Light;Yes;4;2,824
Nexen;Nexen Winguard Winspike WH6;195;55;15;89T;Winter;Light;Yes;4;3,148
Nexen;Nexen Winguard Winspike WH6;195;60;15;92T;Winter;Light;Yes;4;2,662
Nexen;Nexen Winguard Winspike WH6;195;65;15;95T;Winter;Light;Yes;4;2,710
Nexen;Nexen Winguard Winspike WH6;205;55;16;94T;Winter;Light;Yes;4;3,783
Nexen;Nexen Winguard Winspike WH62;205;55;16;94T;Winter;Light;Yes;4;4,034
Nitto;Nitto NT90W;235;55;18;104Q;Winter;Light;;4;0
Nitto;Nitto Therma Spike;295;40;21;111T;Winter;Light;Yes;4;15,876
Nokian;Nokian Hakka Black;215;40;17;87W;Summer;Light;;4;7,302
Nokian;Nokian Hakka Black;215;50;17;95W;Summer;Light;;4;7,488
Nokian;Nokian Hakka Black;215;55;17;98W;Summer;Light;;4;7,312
Nokian;Nokian Hakka Black;215;45;17;91Y;Summer;Light;;4;6,802
Nokian;Nokian Hakka Black;225;50;16;96W;Summer;Light;;4;6,750
Nokian;Nokian Hakka Black;225;45;17;91W;Summer;Light;;4;9,777
Nokian;Nokian Hakka Black;225;50;17;94W;Summer;Light;;4;10,910
Nokian;Nokian Hakka Black;225;55;17;101Y;Summer;Light;;4;7,864
Nokian;Nokian Hakka Black;225;50;17;98Y;Summer;Light;;4;7,644
Nokian;Nokian Hakka Black;225;40;18;92Y;Summer;Light;;4;8,538
Nokian;Nokian Hakka Black;225;45;18;95Y;Summer;Light;;4;9,538
Nokian;Nokian Hakka Black;235;45;18;98W;Summer;Light;;4;10,068
Nokian;Nokian Hakka Black;235;55;17;103Y;Summer;Light;;4;8,227
Nokian;Nokian Hakka Black;235;45;17;97Y;Summer;Light;;4;6,782
Nokian;Nokian Hakka Black;235;40;18;95Y;Summer;Light;;4;9,600
Nokian;Nokian Hakka Black;235;35;19;91Y;Summer;Light;;4;11,826
Nokian;Nokian Hakka Black;245;40;17;95Y;Summer;Light;;4;8,383
Nokian;Nokian Hakka Black;245;45;17;99Y;Summer;Light;;4;7,811
Nokian;Nokian Hakka Black;245;40;18;97Y;Summer;Light;;4;9,642
Nokian;Nokian Hakka Black;245;35;19;93Y;Summer;Light;;4;13,064
Nokian;Nokian Hakka Black;245;40;19;98Y;Summer;Light;;4;12,086
Nokian;Nokian Hakka Black;245;40;20;99Y;Summer;Light;;4;13,521
Nokian;Nokian Hakka Black;255;45;18;103Y;Summer;Light;;4;10,526
Nokian;Nokian Hakka Black;255;35;18;94Y;Summer;Light;;4;10,838
Nokian;Nokian Hakka Black;255;35;19;96Y;Summer;Light;;4;13,292
Nokian;Nokian Hakka Black;255;35;20;97Y;Summer;Light;;4;14,884
Nokian;Nokian Hakka Black;265;35;18;97Y;Summer;Light;;4;12,158
Nokian;Nokian Hakka Black;275;35;20;102Y;Summer;Light;;4;16,069
Nokian;Nokian Hakka Black SUV;235;65;17;108V;Summer;Light;;4;8,196
Nokian;Nokian Hakka Black SUV;235;60;18;107W;Summer;Light;;4;9,933
Nokian;Nokian Hakka Black SUV;235;55;19;105W;Summer;Light;;4;11,264
Nokian;Nokian Hakka Black SUV;245;55;19;103V;Summer;Light;;4;11,327
Nokian;Nokian Hakka Black SUV;245;50;20;102W;Summer;Light;;4;15,216
Nokian;Nokian Hakka Black SUV;255;60;18;112V;Summer;Light;;4;10,547
Nokian;Nokian Hakka Black SUV;255;50;19;107W;Summer;Light;;4;12,242
Nokian;Nokian Hakka Black SUV;255;55;19;111W;Summer;Light;;4;11,399
Nokian;Nokian Hakka Black SUV;255;55;18;109Y;Summer;Light;;4;8,841
Nokian;Nokian Hakka Black SUV;255;45;20;105Y;Summer;Light;;4;14,072
Nokian;Nokian Hakka Black SUV;265;50;20;111W;Summer;Light;;4;15,331
Nokian;Nokian Hakka Black SUV;265;45;20;108Y;Summer;Light;;4;14,686
Nokian;Nokian Hakka Black SUV;265;45;21;104Y;Summer;Light;;4;16,891
Nokian;Nokian Hakka Black SUV;275;55;19;111W;Summer;Light;;4;13,219
Nokian;Nokian Hakka Black SUV;275;50;20;113W;Summer;Light;;4;15,622
Nokian;Nokian Hakka Black SUV;275;45;19;108Y;Summer;Light;;4;13,240
Nokian;Nokian Hakka Black SUV;275;40;20;106Y;Summer;Light;;4;15,310
Nokian;Nokian Hakka Black SUV;275;45;20;110Y;Summer;Light;;4;14,717
Nokian;Nokian Hakka Black SUV;285;45;19;111W;Summer;Light;;4;13,874
Nokian;Nokian Hakka Black SUV;285;50;20;116W;Summer;Light;;4;16,724
Nokian;Nokian Hakka Black SUV;295;40;20;110Y;Summer;Light;;4;17,317
Nokian;Nokian Hakka Black SUV;295;35;21;107Y;Summer;Light;;4;17,525
Nokian;Nokian Hakka Black SUV;295;30;22;103Y;Summer;Light;;4;19,169
Nokian;Nokian Hakka Blue;185;55;15;86V;Summer;Light;;4;3,922
Nokian;Nokian Hakka Blue;195;50;15;86V;Summer;Light;;4;3,131
Nokian;Nokian Hakka Blue;205;60;15;95V;Summer;Light;;4;4,316
Nokian;Nokian Hakka Blue;205;55;16;91V;Summer;Light;;4;5,752
Nokian;Nokian Hakka Blue;205;55;16;94V;Summer;Light;;4;3,848
Nokian;Nokian Hakka Blue;205;50;17;93V;Summer;Light;;4;6,282
Nokian;Nokian Hakka Blue;205;55;17;95V;Summer;Light;;4;6,906
Nokian;Nokian Hakka Blue;215;50;17;95V;Summer;Light;;4;7,020
Nokian;Nokian Hakka Blue;215;45;18;93W;Summer;Light;;4;7,447
Nokian;Nokian Hakka Blue;225;55;16;99V;Summer;Light;;4;6,511
Nokian;Nokian Hakka Blue;225;55;16;99W;Summer;Light;;4;6,657
Nokian;Nokian Hakka Blue;225;45;17;94V;Summer;Light;;4;6,219
Nokian;Nokian Hakka Blue;225;50;17;98W;Summer;Light;;4;7,238
Nokian;Nokian Hakka Blue SUV;205;70;15;96H;Summer;Light;;4;5,180
Nokian;Nokian Hakka Blue SUV;215;70;16;100H;Summer;Light;;4;5,773
Nokian;Nokian Hakka Blue SUV;215;60;17;100H;Summer;Light;;4;7,946
Nokian;Nokian Hakka Blue SUV;215;55;18;95V;Summer;Light;;4;8,393
Nokian;Nokian Hakka Blue SUV;225;70;16;103H;Summer;Light;;4;6,105
Nokian;Nokian Hakka Blue SUV;225;60;17;103V;Summer;Light;;4;8,612
Nokian;Nokian Hakka Blue SUV;225;65;17;106H;Summer;Light;;4;6,823
Nokian;Nokian Hakka Blue SUV;225;60;18;104H;Summer;Light;;4;8,019
Nokian;Nokian Hakka Blue SUV;225;55;18;98V;Summer;Light;;4;8,986
Nokian;Nokian Hakka Blue SUV;225;55;19;103V;Summer;Light;;4;10,733
Nokian;Nokian Hakka Blue SUV;235;70;16;106H;Summer;Light;;4;6,355
Nokian;Nokian Hakka Blue SUV;235;60;17;102V;Summer;Light;;4;9,329
Nokian;Nokian Hakka Blue SUV;235;55;17;103V;Summer;Light;;4;8,799
Nokian;Nokian Hakka Blue SUV;235;65;17;108H;Summer;Light;;4;7,426
Nokian;Nokian Hakka Blue SUV;235;55;18;100V;Summer;Light;;4;9,829
Nokian;Nokian Hakka Blue SUV;235;60;18;107H;Summer;Light;;4;9,038
Nokian;Nokian Hakka Blue SUV;245;65;17;111H;Summer;Light;;4;8,602
Nokian;Nokian Hakka Blue SUV;245;60;18;105H;Summer;Light;;4;9,735
Nokian;Nokian Hakka Blue SUV;255;60;17;106V;Summer;Light;;4;8,758
Nokian;Nokian Hakka Blue SUV;265;70;17;115H;Summer;Light;;4;8,071
Nokian;Nokian Hakka Blue SUV;265;65;17;116H;Summer;Light;;4;8,217
Nokian;Nokian Hakka Blue SUV;265;60;18;110V;Summer;Light;;4;9,829
Nokian;Nokian Hakka Blue SUV;285;65;17;116H;Summer;Light;;4;9,496
Nokian;Nokian Hakka Blue SUV;285;60;18;116V;Summer;Light;;4;10,204
Nokian;Nokian Hakka C2;165;70;14C;89/87R;Summer;Light;;4;3,837
Nokian;Nokian Hakka C2;175;70;14C;95/93R;Summer;Light;;4;4,431
Nokian;Nokian Hakka C2;185;75;16C;104/102S;Summer;Light;;4;4,660
Nokian;Nokian Hakka C2;195;70;15C;104/102R;Summer;Light;;4;4,128
Nokian;Nokian Hakka C2;195;65;16C;104/102T;Summer;Light;;4;5,481
Nokian;Nokian Hakka C2;195;75;16C;107/105S;Summer;Light;;4;4,982
Nokian;Nokian Hakka C2;205;65;15C;102/100T;Summer;Light;;4;4,711
Nokian;Nokian Hakka C2;205;70;15C;106/104R;Summer;Light;;4;4,763
Nokian;Nokian Hakka C2;205;65;16C;107/105T;Summer;Light;;4;6,147
Nokian;Nokian Hakka C2;205;75;16C;113/111S;Summer;Light;;4;5,657
Nokian;Nokian Hakka C2;215;65;15C;104/102T;Summer;Light;;4;4,869
Nokian;Nokian Hakka C2;215;70;15C;109/107R;Summer;Light;;4;4,909
Nokian;Nokian Hakka C2;215;65;16C;109/107T;Summer;Light;;4;6,334
Nokian;Nokian Hakka C2;215;75;16C;116/114S;Summer;Light;;4;6,593
Nokian;Nokian Hakka C2;225;70;15C;112/110R;Summer;Light;;4;5,502
Nokian;Nokian Hakka C2;225;65;16C;112/110T;Summer;Light;;4;7,593
Nokian;Nokian Hakka C2;225;75;16C;121/120R;Summer;Light;;4;7,437
Nokian;Nokian Hakka Green;175;70;13;82T;Summer;Light;;4;1,980
Nokian;Nokian Hakka Green;185;65;14;86H;Summer;Light;;4;2,412
Nokian;Nokian Hakka Green;195;60;15;88H;Summer;Light;;4;3,142
Nokian;Nokian Hakka Green;195;55;15;89H;Summer;Light;;4;3,856
Nokian;Nokian Hakka Green;195;65;15;95H;Summer;Light;;4;2,879
Nokian;Nokian Hakka Green;195;65;15;95T;Summer;Light;;4;2,844
Nokian;Nokian Hakka Green;195;60;16;89H;Summer;Light;;4;4,103
Nokian;Nokian Hakka Green;205;60;15;91H;Summer;Light;;4;3,579
Nokian;Nokian Hakka Green;205;55;16;94V;Summer;Light;;4;3,565
Nokian;Nokian Hakka Green;205;60;16;96H;Summer;Light;;4;4,216
Nokian;Nokian Hakka Green;205;60;16;96V;Summer;Light;;4;4,860
Nokian;Nokian Hakka Green;215;55;16;97H;Summer;Light;;4;5,051
Nokian;Nokian Hakka Green;215;60;16;99H;Summer;Light;;4;4,938
Nokian;Nokian Hakka Green 2;165;70;14;81T;Summer;Light;;4;2,383
Nokian;Nokian Hakka Green 2;175;70;13;82T;Summer;Light;;4;2,236
Nokian;Nokian Hakka Green 2;175;65;14;86T;Summer;Light;;4;2,433
Nokian;Nokian Hakka Green 2;175;70;14;88T;Summer;Light;;4;2,673
Nokian;Nokian Hakka Green 2;185;60;14;82T;Summer;Light;;4;2,486
Nokian;Nokian Hakka Green 2;185;65;14;86H;Summer;Light;;4;2,725
Nokian;Nokian Hakka Green 2;185;65;15;92H;Summer;Light;;4;3,027
Nokian;Nokian Hakka Green 2;195;60;15;88H;Summer;Light;;4;3,548
Nokian;Nokian Hakka Green 2;195;55;15;89V;Summer;Light;;4;4,357
Nokian;Nokian Hakka Green 2;195;65;15;95H;Summer;Light;;4;3,245
Nokian;Nokian Hakka Green 2;205;65;15;99H;Summer;Light;;4;3,817
Nokian;Nokian Hakka Green 2;205;55;16;94H;Summer;Light;;4;3,682
Nokian;Nokian Hakka Green 2;205;60;16;96V;Summer;Light;;4;4,795
Nokian;Nokian Hakka Green 2;215;55;16;97V;Summer;Light;;4;5,710
Nokian;Nokian Hakka Z SUV;275;45;19;108Y;Summer;Light;;4;12,345
Nokian;Nokian Rotiiva AT;235;85;16C;120/116R;Summer;Light;;4;6,323
Nokian;Nokian Rotiiva AT;235;70;17;111T;Summer;Light;;4;7,623
Nokian;Nokian Rotiiva AT;245;70;17;110T;Summer;Light;;4;7,956
Nokian;Nokian Rotiiva AT;245;65;17;111T;Summer;Light;;4;7,416
Nokian;Nokian Rotiiva AT;245;75;17C;121/118S;Summer;Light;;4;8,726
Nokian;Nokian Rotiiva AT;255;70;17;112T;Summer;Light;;4;8,435
Nokian;Nokian Rotiiva AT;265;70;17;115T;Summer;Light;;4;7,935
Nokian;Nokian Rotiiva AT;265;60;18;114T;Summer;Light;;4;8,352
Nokian;Nokian Rotiiva AT;275;65;18;116T;Summer;Light;;4;10,589
Nokian;Nokian Rotiiva AT;275;55;20;117T;Summer;Light;;4;15,384
Nokian;Nokian Rotiiva AT;285;75;16C;122/119S;Summer;Light;;4;8,446
Nokian;Nokian Rotiiva AT Plus;315;70;17C;121/118S;Summer;Light;;4;11,191
Nokian;Nokian Rotiiva HT;235;65;18;110H;Summer;Light;;4;7,238
Nokian;Nokian Rotiiva HT;265;75;16;116S;Summer;Light;;4;6,126
Nokian;Nokian Rotiiva HT;265;70;17C;121/118S;Summer;Light;;4;6,188
Nokian;Nokian Rotiiva HT;265;65;18;114H;Summer;Light;;4;6,729
Nokian;Nokian Hakkapeliitta 5;175;70;13;82T;Winter;Light;Yes;4;2,203
Nokian;Nokian Hakkapeliitta 5 SUV;235;60;17;106T;Winter;Light;Yes;4;11,347
Nokian;Nokian Hakkapeliitta 5 SUV;235;65;17;108T;Winter;Light;Yes;4;11,597
Nokian;Nokian Hakkapeliitta 5 SUV;255;65;17;114T;Winter;Light;Yes;4;10,769
Nokian;Nokian Hakkapeliitta 5 SUV;275;55;17;113T;Winter;Light;Yes;4;10,159
Nokian;Nokian Hakkapeliitta 5 SUV;275;60;17;114T;Winter;Light;Yes;4;10,361
Nokian;Nokian Hakkapeliitta 7;155;65;14;75T;Winter;Light;Yes;4;3,251
Nokian;Nokian Hakkapeliitta 7;175;65;14;86T;Winter;Light;Yes;4;3,159
Nokian;Nokian Hakkapeliitta 7;175;70;14;88T;Winter;Light;Yes;4;3,078
Nokian;Nokian Hakkapeliitta 7;175;65;15;88T;Winter;Light;Yes;4;4,135
Nokian;Nokian Hakkapeliitta 7;185;65;14;90T;Winter;Light;Yes;4;3,648
Nokian;Nokian Hakkapeliitta 7;185;65;15;92T;Winter;Light;Yes;4;3,586
Nokian;Nokian Hakkapeliitta 7;195;55;15;89T;Winter;Light;Yes;4;5,272
Nokian;Nokian Hakkapeliitta 7;195;60;15;92T;Winter;Light;Yes;4;4,034
Nokian;Nokian Hakkapeliitta 7;195;65;15;95T;Winter;Light;Yes;4;3,790
Nokian;Nokian Hakkapeliitta 7;195;55;16;91T;Winter;Light;Yes;4;5,932
Nokian;Nokian Hakkapeliitta 7;195;60;16;93T;Winter;Light;Yes;4;6,247
Nokian;Nokian Hakkapeliitta 7;205;65;15;99T;Winter;Light;Yes;4;4,480
Nokian;Nokian Hakkapeliitta 7;205;55;16;94T;Winter;Light;Yes;4;5,668
Nokian;Nokian Hakkapeliitta 7;205;60;16;96T;Winter;Light;Yes;4;5,831
Nokian;Nokian Hakkapeliitta 7;205;50;17;93T;Winter;Light;Yes;4;7,599
Nokian;Nokian Hakkapeliitta 7;215;55;16;97T;Winter;Light;Yes;4;6,338
Nokian;Nokian Hakkapeliitta 7;215;60;16;99T;Winter;Light;Yes;4;6,431
Nokian;Nokian Hakkapeliitta 7;215;45;17;91T;Winter;Light;Yes;4;8,380
Nokian;Nokian Hakkapeliitta 7;215;50;17;95T;Winter;Light;Yes;4;8,086
Nokian;Nokian Hakkapeliitta 7;215;55;17;98T;Winter;Light;Yes;4;8,878
Nokian;Nokian Hakkapeliitta 7;225;60;16;102T;Winter;Light;Yes;4;7,506
Nokian;Nokian Hakkapeliitta 7;225;55;16;99T;Winter;Light;Yes;4;7,457
Nokian;Nokian Hakkapeliitta 7;225;55;17;101T;Winter;Light;Yes;4;8,716
Nokian;Nokian Hakkapeliitta 7;225;45;17;94T;Winter;Light;Yes;4;8,950
Nokian;Nokian Hakkapeliitta 7;225;45;18;95T;Winter;Light;Yes;4;11,266
Nokian;Nokian Hakkapeliitta 7;235;45;17;97T;Winter;Light;Yes;4;9,478
Nokian;Nokian Hakkapeliitta 7;235;50;18;101T;Winter;Light;Yes;4;11,266
Nokian;Nokian Hakkapeliitta 7;235;40;18;95T;Winter;Light;Yes;4;10,646
Nokian;Nokian Hakkapeliitta 7;245;45;17;99T;Winter;Light;Yes;4;10,209
Nokian;Nokian Hakkapeliitta 7;245;40;19;98T;Winter;Light;Yes;4;10,900
Nokian;Nokian Hakkapeliitta 7;255;45;18;103T;Winter;Light;Yes;4;12,189
Nokian;Nokian Hakkapeliitta 7;295;30;19;100H;Winter;Light;Yes;4;12,332
Nokian;Nokian Hakkapeliitta 7 SUV;205;70;15;100T;Winter;Light;Yes;4;6,887
Nokian;Nokian Hakkapeliitta 7 SUV;215;70;16;100T;Winter;Light;Yes;4;9,162
Nokian;Nokian Hakkapeliitta 7 SUV;215;60;17;100T;Winter;Light;Yes;4;10,716
Nokian;Nokian Hakkapeliitta 7 SUV;215;70;17;101T;Winter;Light;Yes;4;10,229
Nokian;Nokian Hakkapeliitta 7 SUV;215;55;18;99T;Winter;Light;Yes;4;11,408
Nokian;Nokian Hakkapeliitta 7 SUV;225;70;16;107T;Winter;Light;Yes;4;10,209
Nokian;Nokian Hakkapeliitta 7 SUV;225;60;17;103T;Winter;Light;Yes;4;9,082
Nokian;Nokian Hakkapeliitta 7 SUV;225;65;17;106T;Winter;Light;Yes;4;7,985
Nokian;Nokian Hakkapeliitta 7 SUV;225;55;18;102T;Winter;Light;Yes;4;11,631
Nokian;Nokian Hakkapeliitta 7 SUV;225;60;18;104T;Winter;Light;Yes;4;11,783
Nokian;Nokian Hakkapeliitta 7 SUV;235;60;17;106T;Winter;Light;Yes;4;10,859
Nokian;Nokian Hakkapeliitta 7 SUV;235;65;17;108T;Winter;Light;Yes;4;8,461
Nokian;Nokian Hakkapeliitta 7 SUV;235;55;18;104T;Winter;Light;Yes;4;11,844
Nokian;Nokian Hakkapeliitta 7 SUV;235;60;18;107T;Winter;Light;Yes;4;10,209
Nokian;Nokian Hakkapeliitta 7 SUV;235;50;19;103T;Winter;Light;Yes;4;12,850
Nokian;Nokian Hakkapeliitta 7 SUV;245;70;16;111T;Winter;Light;Yes;4;11,448
Nokian;Nokian Hakkapeliitta 7 SUV;245;65;17;111T;Winter;Light;Yes;4;11,102
Nokian;Nokian Hakkapeliitta 7 SUV;245;60;18;109T;Winter;Light;Yes;4;11,855
Nokian;Nokian Hakkapeliitta 7 SUV;245;55;19;107T;Winter;Light;Yes;4;11,275
Nokian;Nokian Hakkapeliitta 7 SUV;255;65;17;114T;Winter;Light;Yes;4;11,895
Nokian;Nokian Hakkapeliitta 7 SUV;255;60;18;112T;Winter;Light;Yes;4;11,926
Nokian;Nokian Hakkapeliitta 7 SUV;255;50;19;107T;Winter;Light;Yes;4;13,328
Nokian;Nokian Hakkapeliitta 7 SUV;255;55;19;111T;Winter;Light;Yes;4;12,687
Nokian;Nokian Hakkapeliitta 7 SUV;265;70;16;112T;Winter;Light;Yes;4;11,967
Nokian;Nokian Hakkapeliitta 7 SUV;265;70;17;115T;Winter;Light;Yes;4;12,230
Nokian;Nokian Hakkapeliitta 7 SUV;265;65;17;116T;Winter;Light;Yes;4;10,056
Nokian;Nokian Hakkapeliitta 7 SUV;265;60;18;114T;Winter;Light;Yes;4;10,128
Nokian;Nokian Hakkapeliitta 7 SUV;265;50;19;110T;Winter;Light;Yes;4;13,500
Nokian;Nokian Hakkapeliitta 7 SUV;265;50;20;111T;Winter;Light;Yes;4;13,562
Nokian;Nokian Hakkapeliitta 7 SUV;265;45;21;108T;Winter;Light;Yes;4;16,355
Nokian;Nokian Hakkapeliitta 7 SUV;275;65;17;119T;Winter;Light;Yes;4;12,687
Nokian;Nokian Hakkapeliitta 7 SUV;275;60;18;117T;Winter;Light;Yes;4;12,464
Nokian;Nokian Hakkapeliitta 7 SUV;275;55;19;115T;Winter;Light;Yes;4;13,551
Nokian;Nokian Hakkapeliitta 7 SUV;275;40;20;106T;Winter;Light;Yes;4;14,222
Nokian;Nokian Hakkapeliitta 7 SUV;275;50;20;113T;Winter;Light;Yes;4;15,278
Nokian;Nokian Hakkapeliitta 7 SUV;275;60;20;115T;Winter;Light;Yes;4;14,009
Nokian;Nokian Hakkapeliitta 7 SUV;275;55;20;117T;Winter;Light;Yes;4;14,313
Nokian;Nokian Hakkapeliitta 7 SUV;285;65;17;116T;Winter;Light;Yes;4;13,094
Nokian;Nokian Hakkapeliitta 7 SUV;285;60;18;116T;Winter;Light;Yes;4;10,991
Nokian;Nokian Hakkapeliitta 7 SUV;285;45;19;111T;Winter;Light;Yes;4;14,892
Nokian;Nokian Hakkapeliitta 7 SUV;285;50;20;116T;Winter;Light;Yes;4;15,470
Nokian;Nokian Hakkapeliitta 8;155;65;14;75T;Winter;Light;Yes;4;4,155
Nokian;Nokian Hakkapeliitta 8;175;70;13;82T;Winter;Light;Yes;4;3,596
Nokian;Nokian Hakkapeliitta 8;175;65;14;86T;Winter;Light;Yes;4;4,083
Nokian;Nokian Hakkapeliitta 8;175;65;15;88T;Winter;Light;Yes;4;5,272
Nokian;Nokian Hakkapeliitta 8;185;65;14;90T;Winter;Light;Yes;4;4,673
Nokian;Nokian Hakkapeliitta 8;185;70;14;92T;Winter;Light;Yes;4;4,714
Nokian;Nokian Hakkapeliitta 8;185;55;15;86T;Winter;Light;Yes;4;6,471
Nokian;Nokian Hakkapeliitta 8;185;60;15;88T;Winter;Light;Yes;4;5,435
Nokian;Nokian Hakkapeliitta 8;185;65;15;92T;Winter;Light;Yes;4;4,562
Nokian;Nokian Hakkapeliitta 8;195;55;15;89T;Winter;Light;Yes;4;6,765
Nokian;Nokian Hakkapeliitta 8;195;60;15;92T;Winter;Light;Yes;4;5,161
Nokian;Nokian Hakkapeliitta 8;195;65;15;95T;Winter;Light;Yes;4;4,836
Nokian;Nokian Hakkapeliitta 8;195;55;16;87T;Winter;Light;Yes;4;10,626
Nokian;Nokian Hakkapeliitta 8;195;55;16;91T;Winter;Light;Yes;4;7,588
Nokian;Nokian Hakkapeliitta 8;205;65;15;99T;Winter;Light;Yes;4;5,862
Nokian;Nokian Hakkapeliitta 8;205;55;16;91T;Winter;Light;Yes;4;10,352
Nokian;Nokian Hakkapeliitta 8;205;60;16;92T;Winter;Light;Yes;4;10,768
Nokian;Nokian Hakkapeliitta 8;205;55;16;94T;Winter;Light;Yes;4;7,395
Nokian;Nokian Hakkapeliitta 8;205;60;16;96T;Winter;Light;Yes;4;7,690
Nokian;Nokian Hakkapeliitta 8;205;45;17;88V;Winter;Light;Yes;4;14,405
Nokian;Nokian Hakkapeliitta 8;205;50;17;89T;Winter;Light;Yes;4;13,611
Nokian;Nokian Hakkapeliitta 8;205;50;17;93T;Winter;Light;Yes;4;9,721
Nokian;Nokian Hakkapeliitta 8;215;55;16;97T;Winter;Light;Yes;4;8,270
Nokian;Nokian Hakkapeliitta 8;215;60;16;99T;Winter;Light;Yes;4;8,564
Nokian;Nokian Hakkapeliitta 8;215;50;17;95T;Winter;Light;Yes;4;10,361
Nokian;Nokian Hakkapeliitta 8;215;45;18;93T;Winter;Light;Yes;4;13,611
Nokian;Nokian Hakkapeliitta 8;225;60;16;102T;Winter;Light;Yes;4;9,600
Nokian;Nokian Hakkapeliitta 8;225;55;16;99T;Winter;Light;Yes;4;9,539
Nokian;Nokian Hakkapeliitta 8;225;55;17;101T;Winter;Light;Yes;4;11,154
Nokian;Nokian Hakkapeliitta 8;225;45;17;91T;Winter;Light;Yes;4;16,030
Nokian;Nokian Hakkapeliitta 8;225;50;17;94T;Winter;Light;Yes;4;14,994
Nokian;Nokian Hakkapeliitta 8;225;45;17;94T;Winter;Light;Yes;4;11,459
Nokian;Nokian Hakkapeliitta 8;225;50;17;98T;Winter;Light;Yes;4;10,716
Nokian;Nokian Hakkapeliitta 8;225;45;18;95T;Winter;Light;Yes;4;14,414
Nokian;Nokian Hakkapeliitta 8;235;50;17;100T;Winter;Light;Yes;4;11,083
Nokian;Nokian Hakkapeliitta 8;235;55;17;103T;Winter;Light;Yes;4;11,376
Nokian;Nokian Hakkapeliitta 8;235;45;17;97T;Winter;Light;Yes;4;12,129
Nokian;Nokian Hakkapeliitta 8;235;50;18;101T;Winter;Light;Yes;4;14,709
Nokian;Nokian Hakkapeliitta 8;235;40;18;95T;Winter;Light;Yes;4;13,611
Nokian;Nokian Hakkapeliitta 8;235;45;18;98T;Winter;Light;Yes;4;15,248
Nokian;Nokian Hakkapeliitta 8;245;45;17;99T;Winter;Light;Yes;4;13,064
Nokian;Nokian Hakkapeliitta 8;245;50;18;100T;Winter;Light;Yes;4;20,702
Nokian;Nokian Hakkapeliitta 8;245;45;18;100T;Winter;Light;Yes;4;15,156
Nokian;Nokian Hakkapeliitta 8;245;40;19;98T;Winter;Light;Yes;4;13,957
Nokian;Nokian Hakkapeliitta 8;255;45;18;103T;Winter;Light;Yes;4;15,604
Nokian;Nokian Hakkapeliitta 8;255;40;19;100T;Winter;Light;Yes;4;16,019
Nokian;Nokian Hakkapeliitta 8;255;45;19;104H;Winter;Light;Yes;4;15,572
Nokian;Nokian Hakkapeliitta 8;255;35;20;97T;Winter;Light;Yes;4;19,889
Nokian;Nokian Hakkapeliitta 8;285;35;19;103H;Winter;Light;Yes;4;19,493
Nokian;Nokian Hakkapeliitta 8;295;35;19;104H;Winter;Light;Yes;4;21,748
Nokian;Nokian Hakkapeliitta 8 SUV;215;70;16;100T;Winter;Light;Yes;4;10,098
Nokian;Nokian Hakkapeliitta 8 SUV;215;65;16;102T;Winter;Light;Yes;4;7,101
Nokian;Nokian Hakkapeliitta 8 SUV;215;60;17;100T;Winter;Light;Yes;4;11,814
Nokian;Nokian Hakkapeliitta 8 SUV;215;55;18;99T;Winter;Light;Yes;4;12,575
Nokian;Nokian Hakkapeliitta 8 SUV;225;60;17;103T;Winter;Light;Yes;4;11,376
Nokian;Nokian Hakkapeliitta 8 SUV;225;65;17;106T;Winter;Light;Yes;4;9,885
Nokian;Nokian Hakkapeliitta 8 SUV;225;60;17;99T;Winter;Light;Yes;4;15,928
Nokian;Nokian Hakkapeliitta 8 SUV;225;55;18;102T;Winter;Light;Yes;4;12,829
Nokian;Nokian Hakkapeliitta 8 SUV;235;55;17;103T;Winter;Light;Yes;4;11,439
Nokian;Nokian Hakkapeliitta 8 SUV;235;60;17;106T;Winter;Light;Yes;4;11,976
Nokian;Nokian Hakkapeliitta 8 SUV;235;60;18;107T;Winter;Light;Yes;4;12,780
Nokian;Nokian Hakkapeliitta 8 SUV;235;55;19;105T;Winter;Light;Yes;4;12,555
Nokian;Nokian Hakkapeliitta 8 SUV;245;65;17;111T;Winter;Light;Yes;4;12,251
Nokian;Nokian Hakkapeliitta 8 SUV;245;60;18;109T;Winter;Light;Yes;4;13,064
Nokian;Nokian Hakkapeliitta 8 SUV;245;55;19;107T;Winter;Light;Yes;4;13,815
Nokian;Nokian Hakkapeliitta 8 SUV;255;65;17;114T;Winter;Light;Yes;4;13,124
Nokian;Nokian Hakkapeliitta 8 SUV;255;55;18;109T;Winter;Light;Yes;4;12,454
Nokian;Nokian Hakkapeliitta 8 SUV;255;60;18;112T;Winter;Light;Yes;4;13,155
Nokian;Nokian Hakkapeliitta 8 SUV;255;50;19;107T;Winter;Light;Yes;4;14,698
Nokian;Nokian Hakkapeliitta 8 SUV;255;45;20;105T;Winter;Light;Yes;4;15,847
Nokian;Nokian Hakkapeliitta 8 SUV;265;70;17;115T;Winter;Light;Yes;4;13,490
Nokian;Nokian Hakkapeliitta 8 SUV;265;65;17;116T;Winter;Light;Yes;4;12,596
Nokian;Nokian Hakkapeliitta 8 SUV;265;60;18;114T;Winter;Light;Yes;4;12,403
Nokian;Nokian Hakkapeliitta 8 SUV;265;50;19;110T;Winter;Light;Yes;4;14,903
Nokian;Nokian Hakkapeliitta 8 SUV;265;40;21;105T;Winter;Light;Yes;4;19,017
Nokian;Nokian Hakkapeliitta 8 SUV;275;55;19;115T;Winter;Light;Yes;4;14,942
Nokian;Nokian Hakkapeliitta 8 SUV;275;40;20;106T;Winter;Light;Yes;4;15,675
Nokian;Nokian Hakkapeliitta 8 SUV;275;45;20;110T;Winter;Light;Yes;4;15,796
Nokian;Nokian Hakkapeliitta 8 SUV;275;55;20;117T;Winter;Light;Yes;4;15,785
Nokian;Nokian Hakkapeliitta 8 SUV;285;65;17;116T;Winter;Light;Yes;4;14,444
Nokian;Nokian Hakkapeliitta 8 SUV;295;40;20;110T;Winter;Light;Yes;4;16,619
Nokian;Nokian Hakkapeliitta C3;185;75;16C;104/102R;Winter;Light;Yes;4;6,491
Nokian;Nokian Hakkapeliitta C3;195;70;15C;104/102R;Winter;Light;Yes;4;6,431
Nokian;Nokian Hakkapeliitta C3;195;75;16C;107/105R;Winter;Light;Yes;4;6,837
Nokian;Nokian Hakkapeliitta C3;205;65;15C;102/100R;Winter;Light;Yes;4;6,431
Nokian;Nokian Hakkapeliitta C3;205;70;15C;106/104R;Winter;Light;Yes;4;6,563
Nokian;Nokian Hakkapeliitta C3;205;65;16C;107/105R;Winter;Light;Yes;4;7,477
Nokian;Nokian Hakkapeliitta C3;205;75;16C;113/111R;Winter;Light;Yes;4;7,578
Nokian;Nokian Hakkapeliitta C3;215;60;16C;108/106R;Winter;Light;Yes;4;7,304
Nokian;Nokian Hakkapeliitta C3;215;65;16C;109/107R;Winter;Light;Yes;4;7,832
Nokian;Nokian Hakkapeliitta C3;215;75;16C;116/114R;Winter;Light;Yes;4;8,300
Nokian;Nokian Hakkapeliitta C3;225;75;16C;121/120R;Winter;Light;Yes;4;9,041
Nokian;Nokian Hakkapeliitta C3;235;65;16C;121/119R;Winter;Light;Yes;4;8,787
Nokian;Nokian Hakkapeliitta CR3;205;70;15C;106/104R;Winter;Light;;4;6,379
Nokian;Nokian Hakkapeliitta CR3;225;70;15C;112/110R;Winter;Light;;4;7,293
Nokian;Nokian Hakkapeliitta LT 2;225;75;16;115/112Q;Winter;Light;Yes;4;8,878
Nokian;Nokian Hakkapeliitta LT 2;245;75;16;120/116Q;Winter;Light;Yes;4;9,650
Nokian;Nokian Hakkapeliitta LT 2;245;70;17;119/116Q;Winter;Light;Yes;4;9,844
Nokian;Nokian Hakkapeliitta LT 2;245;75;17;121/118Q;Winter;Light;Yes;4;13,429
Nokian;Nokian Hakkapeliitta LT 2;265;75;16;123/120Q;Winter;Light;Yes;4;9,914
Nokian;Nokian Hakkapeliitta LT 2;285;75;16;122/119Q;Winter;Light;Yes;4;10,209
Nokian;Nokian Hakkapeliitta R;185;70;14;92R;Winter;Light;;4;3,656
Nokian;Nokian Hakkapeliitta R SUV;235;70;16;106R;Winter;Light;;4;7,772
Nokian;Nokian Hakkapeliitta R SUV;265;65;17;116R;Winter;Light;;4;10,711
Nokian;Nokian Hakkapeliitta R2;155;65;14;75R;Winter;Light;;4;3,667
Nokian;Nokian Hakkapeliitta R2;165;60;15;81R;Winter;Light;;4;4,815
Nokian;Nokian Hakkapeliitta R2;175;65;14;86R;Winter;Light;;4;3,627
Nokian;Nokian Hakkapeliitta R2;175;65;15;88R;Winter;Light;;4;4,693
Nokian;Nokian Hakkapeliitta R2;185;55;15;86R;Winter;Light;;4;5,750
Nokian;Nokian Hakkapeliitta R2;185;65;15;92R;Winter;Light;;4;3,982
Nokian;Nokian Hakkapeliitta R2;195;55;15;89R;Winter;Light;;4;6,024
Nokian;Nokian Hakkapeliitta R2;195;60;15;92R;Winter;Light;;4;4,318
Nokian;Nokian Hakkapeliitta R2;195;65;15;95R;Winter;Light;;4;4,225
Nokian;Nokian Hakkapeliitta R2;195;55;16;87R;Winter;Light;;4;9,458
Nokian;Nokian Hakkapeliitta R2;195;55;16;91R;Winter;Light;;4;6,765
Nokian;Nokian Hakkapeliitta R2;195;60;16;93R;Winter;Light;;4;7,151
Nokian;Nokian Hakkapeliitta R2;205;55;16;91R;Winter;Light;;4;8,919
Nokian;Nokian Hakkapeliitta R2;205;60;16;92R;Winter;Light;;4;8,990
Nokian;Nokian Hakkapeliitta R2;205;55;16;94R;Winter;Light;;4;6,369
Nokian;Nokian Hakkapeliitta R2;205;60;16;96R;Winter;Light;;4;6,420
Nokian;Nokian Hakkapeliitta R2;205;65;16;99R;Winter;Light;;4;6,420
Nokian;Nokian Hakkapeliitta R2;205;50;17;89R;Winter;Light;;4;11,866
Nokian;Nokian Hakkapeliitta R2;205;50;17;93R;Winter;Light;;4;8,483
Nokian;Nokian Hakkapeliitta R2;215;55;16;97R;Winter;Light;;4;7,395
Nokian;Nokian Hakkapeliitta R2;215;60;16;99R;Winter;Light;;4;7,324
Nokian;Nokian Hakkapeliitta R2;215;45;17;91R;Winter;Light;;4;9,611
Nokian;Nokian Hakkapeliitta R2;215;50;17;95R;Winter;Light;;4;9,020
Nokian;Nokian Hakkapeliitta R2;215;55;17;98R;Winter;Light;;4;9,975
Nokian;Nokian Hakkapeliitta R2;225;60;16;102R;Winter;Light;;4;8,158
Nokian;Nokian Hakkapeliitta R2;225;55;17;101R;Winter;Light;;4;9,518
Nokian;Nokian Hakkapeliitta R2;225;45;17;91R;Winter;Light;;4;13,978
Nokian;Nokian Hakkapeliitta R2;225;50;17;94R;Winter;Light;;4;12,870
Nokian;Nokian Hakkapeliitta R2;225;45;17;94R;Winter;Light;;4;9,986
Nokian;Nokian Hakkapeliitta R2;225;55;17;97R;Winter;Light;;4;13,328
Nokian;Nokian Hakkapeliitta R2;225;50;17;98R;Winter;Light;;4;9,193
Nokian;Nokian Hakkapeliitta R2;225;40;18;92R;Winter;Light;;4;11,905
Nokian;Nokian Hakkapeliitta R2;225;45;18;95R;Winter;Light;;4;12,526
Nokian;Nokian Hakkapeliitta R2;235;60;16;104R;Winter;Light;;4;9,732
Nokian;Nokian Hakkapeliitta R2;235;55;17;103R;Winter;Light;;4;9,975
Nokian;Nokian Hakkapeliitta R2;235;45;17;97R;Winter;Light;;4;10,768
Nokian;Nokian Hakkapeliitta R2;235;50;18;101R;Winter;Light;;4;12,829
Nokian;Nokian Hakkapeliitta R2;235;40;18;95R;Winter;Light;;4;12,200
Nokian;Nokian Hakkapeliitta R2;235;45;18;98R;Winter;Light;;4;13,349
Nokian;Nokian Hakkapeliitta R2;245;45;17;99R;Winter;Light;;4;11,601
Nokian;Nokian Hakkapeliitta R2;245;50;18;100R;Winter;Light;;4;18,641
Nokian;Nokian Hakkapeliitta R2;245;45;18;100R;Winter;Light;;4;13,185
Nokian;Nokian Hakkapeliitta R2;245;50;18;104R;Winter;Light;;4;13,317
Nokian;Nokian Hakkapeliitta R2;245;40;18;97R;Winter;Light;;4;11,866
Nokian;Nokian Hakkapeliitta R2;245;45;19;102R;Winter;Light;;4;13,460
Nokian;Nokian Hakkapeliitta R2;245;40;19;98R;Winter;Light;;4;12,546
Nokian;Nokian Hakkapeliitta R2;255;45;18;103R;Winter;Light;;4;13,886
Nokian;Nokian Hakkapeliitta R2;255;40;19;100R;Winter;Light;;4;14,354
Nokian;Nokian Hakkapeliitta R2;285;30;20;99R;Winter;Light;;4;23,100
Nokian;Nokian Hakkapeliitta R2 SUV;205;70;15;100R;Winter;Light;;4;7,374
Nokian;Nokian Hakkapeliitta R2 SUV;215;70;16;100R;Winter;Light;;4;8,990
Nokian;Nokian Hakkapeliitta R2 SUV;215;65;16;102R;Winter;Light;;4;6,136
Nokian;Nokian Hakkapeliitta R2 SUV;215;60;17;100R;Winter;Light;;4;9,356
Nokian;Nokian Hakkapeliitta R2 SUV;215;65;17;103R;Winter;Light;;4;9,315
Nokian;Nokian Hakkapeliitta R2 SUV;225;60;17;103R;Winter;Light;;4;9,640
Nokian;Nokian Hakkapeliitta R2 SUV;225;65;17;106R;Winter;Light;;4;9,011
Nokian;Nokian Hakkapeliitta R2 SUV;225;60;17;99R;Winter;Light;;4;13,490
Nokian;Nokian Hakkapeliitta R2 SUV;225;55;18;102R;Winter;Light;;4;10,432
Nokian;Nokian Hakkapeliitta R2 SUV;225;60;18;104R;Winter;Light;;4;10,585
Nokian;Nokian Hakkapeliitta R2 SUV;235;75;15;105R;Winter;Light;;4;9,214
Nokian;Nokian Hakkapeliitta R2 SUV;235;70;16;106R;Winter;Light;;4;9,772
Nokian;Nokian Hakkapeliitta R2 SUV;235;60;17;106R;Winter;Light;;4;9,955
Nokian;Nokian Hakkapeliitta R2 SUV;235;65;17;108R;Winter;Light;;4;9,468
Nokian;Nokian Hakkapeliitta R2 SUV;235;55;18;104R;Winter;Light;;4;10,626
Nokian;Nokian Hakkapeliitta R2 SUV;235;60;18;107R;Winter;Light;;4;10,209
Nokian;Nokian Hakkapeliitta R2 SUV;235;65;18;110R;Winter;Light;;4;10,676
Nokian;Nokian Hakkapeliitta R2 SUV;235;55;19;105R;Winter;Light;;4;11,083
Nokian;Nokian Hakkapeliitta R2 SUV;245;70;16;111R;Winter;Light;;4;10,696
Nokian;Nokian Hakkapeliitta R2 SUV;245;65;17;111R;Winter;Light;;4;10,839
Nokian;Nokian Hakkapeliitta R2 SUV;245;60;18;109R;Winter;Light;;4;10,676
Nokian;Nokian Hakkapeliitta R2 SUV;245;55;19;107R;Winter;Light;;4;11,702
Nokian;Nokian Hakkapeliitta R2 SUV;245;50;20;106R;Winter;Light;;4;13,450
Nokian;Nokian Hakkapeliitta R2 SUV;255;65;17;114R;Winter;Light;;4;11,113
Nokian;Nokian Hakkapeliitta R2 SUV;255;55;18;109R;Winter;Light;;4;10,462
Nokian;Nokian Hakkapeliitta R2 SUV;255;60;18;112R;Winter;Light;;4;10,809
Nokian;Nokian Hakkapeliitta R2 SUV;255;65;18;115R;Winter;Light;;4;11,661
Nokian;Nokian Hakkapeliitta R2 SUV;255;55;19;111R;Winter;Light;;4;12,200
Nokian;Nokian Hakkapeliitta R2 SUV;265;70;16;112R;Winter;Light;;4;10,952
Nokian;Nokian Hakkapeliitta R2 SUV;265;70;17;115R;Winter;Light;;4;11,185
Nokian;Nokian Hakkapeliitta R2 SUV;265;65;17;116R;Winter;Light;;4;11,154
Nokian;Nokian Hakkapeliitta R2 SUV;265;50;20;111R;Winter;Light;;4;14,080
Nokian;Nokian Hakkapeliitta R2 SUV;275;70;16;114R;Winter;Light;;4;11,275
Nokian;Nokian Hakkapeliitta R2 SUV;275;65;17;119R;Winter;Light;;4;11,376
Nokian;Nokian Hakkapeliitta R2 SUV;275;60;18;113R;Winter;Light;;4;11,641
Nokian;Nokian Hakkapeliitta R2 SUV;275;65;18;116R;Winter;Light;;4;12,708
Nokian;Nokian Hakkapeliitta R2 SUV;275;55;19;115R;Winter;Light;;4;12,668
Nokian;Nokian Hakkapeliitta R2 SUV;275;45;20;110R;Winter;Light;;4;13,267
Nokian;Nokian Hakkapeliitta R2 SUV;285;65;17;116R;Winter;Light;;4;12,008
Nokian;Nokian Hakkapeliitta R2 SUV;285;50;20;116R;Winter;Light;;4;14,903
Nokian;Nokian WR A3;195;50;15;86H;Winter;Light;;4;5,719
Nokian;Nokian WR A3;205;55;16;91H;Winter;Light;;4;6,004
Nokian;Nokian WR A3;205;55;16;91V;Winter;Light;;4;8,716
Nokian;Nokian WR A3;205;45;17;88V;Winter;Light;;4;8,187
Nokian;Nokian WR A3;205;50;17;89V;Winter;Light;;4;10,493
Nokian;Nokian WR A3;215;55;16;97V;Winter;Light;;4;6,532
Nokian;Nokian WR A3;215;45;17;91V;Winter;Light;;4;8,503
Nokian;Nokian WR A3;215;55;17;98V;Winter;Light;;4;8,818
Nokian;Nokian WR A3;225;60;16;98H;Winter;Light;;4;7,780
Nokian;Nokian WR A3;225;55;16;99H;Winter;Light;;4;7,314
Nokian;Nokian WR A3;225;55;16;99V;Winter;Light;;4;7,537
Nokian;Nokian WR A3;225;55;17;101V;Winter;Light;;4;9,041
Nokian;Nokian WR A3;225;45;17;91V;Winter;Light;;4;12,363
Nokian;Nokian WR A3;235;45;17;97H;Winter;Light;;4;9,315
Nokian;Nokian WR A3;235;40;18;95V;Winter;Light;;4;10,413
Nokian;Nokian WR A3;245;45;17;99V;Winter;Light;;4;10,035
Nokian;Nokian WR A3;245;45;18;100V;Winter;Light;;4;11,672
Nokian;Nokian WR A3;245;50;18;104V;Winter;Light;;4;11,398
Nokian;Nokian WR A3;245;40;18;97V;Winter;Light;;4;10,514
Nokian;Nokian WR A3;245;40;19;98V;Winter;Light;;4;12,342
Nokian;Nokian WR A3;255;45;18;103V;Winter;Light;;4;11,824
Nokian;Nokian WR C3;205;70;15C;106/104S;Winter;Light;;4;5,973
Nokian;Nokian WR C3;205;65;16C;107/105T;Winter;Light;;4;6,796
Nokian;Nokian WR C3;215;65;16C;109/107R;Winter;Light;;4;7,131
Nokian;Nokian WR C3;215;75;16C;116/114S;Winter;Light;;4;7,558
Nokian;Nokian WR C3;225;65;16C;112/110T;Winter;Light;;4;7,466
Nokian;Nokian WR C3;235;65;16C;121/119R;Winter;Light;;4;7,985
Nokian;Nokian WR D3;175;65;14;82T;Winter;Light;;4;3,016
Nokian;Nokian WR D3;185;65;14;90T;Winter;Light;;4;3,281
Nokian;Nokian WR D3;195;60;15;92H;Winter;Light;;4;3,992
Nokian;Nokian WR D3;205;65;15;99H;Winter;Light;;4;4,419
Nokian;Nokian WR D3;215;65;16;102H;Winter;Light;;4;5,536
Nokian;Nokian WR D4;175;65;14;82T;Winter;Light;;4;3,403
Nokian;Nokian WR D4;185;65;14;86T;Winter;Light;;4;3,718
Nokian;Nokian WR D4;185;65;15;88T;Winter;Light;;4;3,962
Nokian;Nokian WR D4;185;60;15;88T;Winter;Light;;4;4,215
Nokian;Nokian WR D4;195;65;15;91T;Winter;Light;;4;4,195
Nokian;Nokian WR D4;195;60;15;92H;Winter;Light;;4;4,277
Nokian;Nokian WR D4;195;60;16;89H;Winter;Light;;4;6,125
Nokian;Nokian WR D4;195;55;16;91H;Winter;Light;;4;5,993
Nokian;Nokian WR D4;205;55;16;91H;Winter;Light;;4;5,963
Nokian;Nokian WR D4;205;55;16;91T;Winter;Light;;4;5,668
Nokian;Nokian WR D4;215;65;16;102H;Winter;Light;;4;6,125
Nokian;Nokian WR D4;215;60;16;99H;Winter;Light;;4;7,284
Nokian;Nokian WR D4;215;60;17;96H;Winter;Light;;4;9,620
Nokian;Nokian WR D4;225;55;16;99H;Winter;Light;;4;7,284
Nokian;Nokian WR D4;225;45;17;94H;Winter;Light;;4;8,807
Nokian;Nokian WR D4;225;55;17;97H;Winter;Light;;4;8,990
Nokian;Nokian WR D4;225;50;17;98H;Winter;Light;;4;8,391
Nokian;Nokian WR D4;225;45;18;95V;Winter;Light;;4;11,062
Nokian;Nokian WR G2 SUV;235;70;16;106H;Winter;Light;;4;7,354
Nokian;Nokian WR G2 SUV;245;70;16;111H;Winter;Light;;4;7,670
Nokian;Nokian WR SUV 3;215;70;16;100H;Winter;Light;;4;8,492
Nokian;Nokian WR SUV 3;215;65;16;102H;Winter;Light;;4;7,913
Nokian;Nokian WR SUV 3;215;60;17;100H;Winter;Light;;4;8,858
Nokian;Nokian WR SUV 3;215;65;17;103H;Winter;Light;;4;8,705
Nokian;Nokian WR SUV 3;225;70;16;107H;Winter;Light;;4;8,818
Nokian;Nokian WR SUV 3;225;60;17;103H;Winter;Light;;4;9,285
Nokian;Nokian WR SUV 3;225;65;17;106H;Winter;Light;;4;9,132
Nokian;Nokian WR SUV 3;225;55;18;102H;Winter;Light;;4;9,925
Nokian;Nokian WR SUV 3;235;60;17;106H;Winter;Light;;4;9,386
Nokian;Nokian WR SUV 3;235;65;17;108H;Winter;Light;;4;9,112
Nokian;Nokian WR SUV 3;235;55;18;104H;Winter;Light;;4;10,240
Nokian;Nokian WR SUV 3;235;60;18;107V;Winter;Light;;4;10,016
Nokian;Nokian WR SUV 3;245;70;16;111H;Winter;Light;;4;9,885
Nokian;Nokian WR SUV 3;245;65;17;111H;Winter;Light;;4;10,311
Nokian;Nokian WR SUV 3;255;55;18;109V;Winter;Light;;4;14,678
Nokian;Nokian WR SUV 3;255;55;18;109V;Winter;Light;;4;10,483
Nokian;Nokian WR SUV 3;255;60;18;112H;Winter;Light;;4;10,188
Nokian;Nokian WR SUV 3;255;50;19;107V;Winter;Light;;4;16,995
Nokian;Nokian WR SUV 3;255;55;19;111V;Winter;Light;;4;10,941
Nokian;Nokian WR SUV 3;265;70;16;112H;Winter;Light;;4;10,331
Nokian;Nokian WR SUV 3;265;70;17;115H;Winter;Light;;4;10,646
Nokian;Nokian WR SUV 3;265;45;21;108V;Winter;Light;;4;14,100
Nokian;Nokian WR SUV 3;275;45;19;108V;Winter;Light;;4;12,474
Nordman;Nordman Nordman S SUV;215;70;16;100T;Summer;Light;;4;4,982
Nordman;Nordman Nordman S SUV;215;65;16;98H;Summer;Light;;4;4,774
Nordman;Nordman Nordman S SUV;225;70;16;103T;Summer;Light;;4;4,930
Nordman;Nordman Nordman S SUV;225;55;18;98H;Summer;Light;;4;7,488
Nordman;Nordman Nordman S SUV;235;60;16;100H;Summer;Light;;4;5,314
Nordman;Nordman Nordman S SUV;235;70;16;106T;Summer;Light;;4;5,283
Nordman;Nordman Nordman S SUV;235;65;17;104H;Summer;Light;;4;6,147
Nordman;Nordman Nordman S SUV;235;55;17;99H;Summer;Light;;4;7,260
Nordman;Nordman Nordman S SUV;235;55;18;100H;Summer;Light;;4;8,185
Nordman;Nordman Nordman S SUV;235;60;18;103H;Summer;Light;;4;7,665
Nordman;Nordman Nordman S SUV;245;70;16;107T;Summer;Light;;4;5,336
Nordman;Nordman Nordman S SUV;255;55;18;105H;Summer;Light;;4;7,228
Nordman;Nordman Nordman S SUV;265;70;16;112T;Summer;Light;;4;5,918
Nordman;Nordman Nordman SC;185;75;16C;104/102S;Summer;Light;;4;3,963
Nordman;Nordman Nordman SC;195;70;15C;104/102S;Summer;Light;;4;3,505
Nordman;Nordman Nordman SC;195;75;16C;107/105S;Summer;Light;;4;4,233
Nordman;Nordman Nordman SC;215;75;16C;116/114S;Summer;Light;;4;5,398
Nordman;Nordman Nordman SX;155;70;13;75T;Summer;Light;;4;1,830
Nordman;Nordman Nordman SX;165;70;13;79T;Summer;Light;;4;1,935
Nordman;Nordman Nordman SX;175;70;13;82T;Summer;Light;;4;1,977
Nordman;Nordman Nordman SX;175;65;14;82T;Summer;Light;;4;2,080
Nordman;Nordman Nordman SX;175;70;14;84T;Summer;Light;;4;2,195
Nordman;Nordman Nordman SX;185;60;14;82H;Summer;Light;;4;2,163
Nordman;Nordman Nordman SX;185;65;14;86H;Summer;Light;;4;2,288
Nordman;Nordman Nordman SX;185;70;14;88T;Summer;Light;;4;2,404
Nordman;Nordman Nordman SX;185;65;15;88H;Summer;Light;;4;2,548
Nordman;Nordman Nordman SX;185;60;15;88T;Summer;Light;;4;3,037
Nordman;Nordman Nordman SX;195;50;15;82V;Summer;Light;;4;2,631
Nordman;Nordman Nordman SX;195;60;15;88H;Summer;Light;;4;3,192
Nordman;Nordman Nordman SX;195;55;15;89H;Summer;Light;;4;3,713
Nordman;Nordman Nordman SX;195;65;15;91H;Summer;Light;;4;2,725
Nordman;Nordman Nordman SX;205;60;15;91H;Summer;Light;;4;3,369
Nordman;Nordman Nordman SX;205;65;15;94H;Summer;Light;;4;3,048
Nordman;Nordman Nordman SX;205;55;16;91H;Summer;Light;;4;3,142
Nordman;Nordman Nordman SX;205;60;16;92H;Summer;Light;;4;3,901
Nordman;Nordman Nordman SX;215;60;16;99H;Summer;Light;;4;4,753
Nordman;Nordman Nordman SZ ;225;40;18;92W;Summer;Light;;4;6,199
Nordman;Nordman Nordman SZ ;245;40;18;97W;Summer;Light;;4;7,010
Nordman;Nordman Nordman 4;165;70;14;81T;Winter;Light;Yes;4;2,468
Nordman;Nordman Nordman 4;205;65;15;94T;Winter;Light;Yes;4;3,125
Nordman;Nordman Nordman 4;215;65;16;102T;Winter;Light;Yes;4;4,365
Nordman;Nordman Nordman 5;165;65;14;79T;Winter;Light;Yes;4;2,377
Nordman;Nordman Nordman 5;165;70;14;81T;Winter;Light;Yes;4;2,651
Nordman;Nordman Nordman 5;175;70;13;82T;Winter;Light;Yes;4;2,235
Nordman;Nordman Nordman 5;175;65;14;86T;Winter;Light;Yes;4;2,397
Nordman;Nordman Nordman 5;185;75;14;89T;Winter;Light;Yes;4;2,864
Nordman;Nordman Nordman 5;185;65;14;90T;Winter;Light;Yes;4;2,540
Nordman;Nordman Nordman 5;185;70;14;92T;Winter;Light;Yes;4;2,742
Nordman;Nordman Nordman 5;185;55;15;86T;Winter;Light;Yes;4;3,971
Nordman;Nordman Nordman 5;205;65;15;99T;Winter;Light;Yes;4;3,139
Nordman;Nordman Nordman 5;205;55;16;94T;Winter;Light;Yes;4;4,176
Nordman;Nordman Nordman 5;205;60;16;96T;Winter;Light;Yes;4;4,256
Nordman;Nordman Nordman 5;215;55;16;97T;Winter;Light;Yes;4;4,978
Nordman;Nordman Nordman 5;215;60;16;99T;Winter;Light;Yes;4;5,181
Nordman;Nordman Nordman 5;215;55;17;98T;Winter;Light;Yes;4;6,959
Nordman;Nordman Nordman 5;225;60;16;102T;Winter;Light;Yes;4;5,770
Nordman;Nordman Nordman 5;225;55;17;101T;Winter;Light;Yes;4;7,365
Nordman;Nordman Nordman 5;225;45;17;94T;Winter;Light;Yes;4;7,416
Nordman;Nordman Nordman 5;225;50;17;98T;Winter;Light;Yes;4;7,080
Nordman;Nordman Nordman 5;235;55;17;103T;Winter;Light;Yes;4;7,964
Nordman;Nordman Nordman 5 SUV;215;70;15;98T;Winter;Light;Yes;4;4,642
Nordman;Nordman Nordman 5 SUV;215;70;16;100T;Winter;Light;Yes;4;6,136
Nordman;Nordman Nordman 5 SUV;215;65;16;102T;Winter;Light;Yes;4;4,795
Nordman;Nordman Nordman 5 SUV;215;60;17;100T;Winter;Light;Yes;4;6,989
Nordman;Nordman Nordman 5 SUV;225;60;17;103T;Winter;Light;Yes;4;7,120
Nordman;Nordman Nordman 5 SUV;235;60;16;104T;Winter;Light;Yes;4;6,136
Nordman;Nordman Nordman 5 SUV;235;75;16;108T;Winter;Light;Yes;4;6,866
Nordman;Nordman Nordman 5 SUV;235;65;17;108T;Winter;Light;Yes;4;6,502
Nordman;Nordman Nordman 5 SUV;235;55;18;104T;Winter;Light;Yes;4;8,300
Nordman;Nordman Nordman 5 SUV;235;60;18;107T;Winter;Light;Yes;4;7,893
Nordman;Nordman Nordman 5 SUV;235;65;18;110T;Winter;Light;Yes;4;7,608
Nordman;Nordman Nordman 5 SUV;245;70;16;111T;Winter;Light;Yes;4;6,929
Nordman;Nordman Nordman 5 SUV;245;65;17;111T;Winter;Light;Yes;4;7,466
Nordman;Nordman Nordman 5 SUV;255;60;18;112T;Winter;Light;Yes;4;8,270
Nordman;Nordman Nordman 5 SUV;265;70;16;112T;Winter;Light;Yes;4;7,334
Nordman;Nordman Nordman 5 SUV;265;65;17;112T;Winter;Light;Yes;4;7,710
Nordman;Nordman Nordman 5 SUV;265;70;17;115T;Winter;Light;Yes;4;8,573
Nordman;Nordman Nordman RS;155;70;13;75R;Winter;Light;;4;2,184
Nordman;Nordman Nordman RS;165;65;14;79R;Winter;Light;;4;2,286
Nordman;Nordman Nordman RS;175;70;13;82R;Winter;Light;;4;2,195
Nordman;Nordman Nordman RS;175;65;14;82R;Winter;Light;;4;2,174
Nordman;Nordman Nordman RS;175;70;14;88R;Winter;Light;;4;2,377
Nordman;Nordman Nordman RS;185;65;14;90R;Winter;Light;;4;2,387
Nordman;Nordman Nordman RS;185;70;14;92R;Winter;Light;;4;2,693
Nordman;Nordman Nordman RS;195;65;15;95R;Winter;Light;;4;2,773
Nordman;Nordman Nordman RS;205;70;15;100R;Winter;Light;;4;3,971
Nordman;Nordman Nordman RS;205;60;16;96R;Winter;Light;;4;4,165
Nordman;Nordman Nordman RS2 SUV;235;65;17;108R;Winter;Light;;4;6,522
Nordman;Nordman Nordman RS2 SUV;235;60;18;107R;Winter;Light;;4;6,186
Nordman;Nordman Nordman RS2 SUV;235;65;18;110R;Winter;Light;;4;6,075
Nordman;Nordman Nordman RS2 SUV;245;65;17;111R;Winter;Light;;4;6,949
Nordman;Nordman Nordman SUV;215;70;15;98T;Winter;Light;Yes;4;4,622
Pirelli;Pirelli Carrier;175;65;14C;90T;Summer;Light;;4;3,452
Pirelli;Pirelli Carrier;195;65;16C;104R;Summer;Light;;4;5,264
Pirelli;Pirelli Carrier;205;65;15C;102T;Summer;Light;;4;4,524
Pirelli;Pirelli Carrier;215;65;16C;109T;Summer;Light;;4;6,083
Pirelli;Pirelli Carrier;225;75;16C;118R;Summer;Light;;4;7,146
Pirelli;Pirelli Chrono 2;165;70;14;89R;Summer;Light;;4;3,348
Pirelli;Pirelli Chrono 2;175;75;16C;101R;Summer;Light;;4;4,565
Pirelli;Pirelli Chrono 2;195;0;14C;106/104R;Summer;Light;;4;4,503
Pirelli;Pirelli Chrono 2;195;70;15C;104R;Summer;Light;;4;3,968
Pirelli;Pirelli Chrono 2;195;65;15C;95T;Summer;Light;;4;5,060
Pirelli;Pirelli Chrono 2;205;65;15C;102T;Summer;Light;;4;6,590
Pirelli;Pirelli Chrono 2;215;65;15C;104T;Summer;Light;;4;4,676
Pirelli;Pirelli Chrono 2;215;60;16C;103T;Summer;Light;;4;5,961
Pirelli;Pirelli Chrono 2;225;70;15C;112S;Summer;Light;;4;5,283
Pirelli;Pirelli Chrono 2;235;65;16C;115R;Summer;Light;;4;8,168
Pirelli;Pirelli Cinturato P1;185;60;15;84H;Summer;Light;;4;2,693
Pirelli;Pirelli Cinturato P1;195;55;16;87V;Summer;Light;;4;6,537
Pirelli;Pirelli Cinturato P1;195;55;16;87W;Summer;Light;;4;6,669
Pirelli;Pirelli Cinturato P1 Verde;165;65;14;79T;Summer;Light;;4;2,349
Pirelli;Pirelli Cinturato P1 Verde;175;65;14;82T;Summer;Light;;4;2,277
Pirelli;Pirelli Cinturato P1 Verde;175;70;14;84T;Summer;Light;;4;2,520
Pirelli;Pirelli Cinturato P1 Verde;175;65;15;84H;Summer;Light;;4;2,641
Pirelli;Pirelli Cinturato P1 Verde;185;60;14;82H;Summer;Light;;4;2,277
Pirelli;Pirelli Cinturato P1 Verde;185;65;14;86H;Summer;Light;;4;2,291
Pirelli;Pirelli Cinturato P1 Verde;185;65;14;86T;Summer;Light;;4;2,541
Pirelli;Pirelli Cinturato P1 Verde;185;55;15;82H;Summer;Light;;4;3,583
Pirelli;Pirelli Cinturato P1 Verde;185;65;15;88H;Summer;Light;;4;2,734
Pirelli;Pirelli Cinturato P1 Verde;185;65;15;88T;Summer;Light;;4;2,773
Pirelli;Pirelli Cinturato P1 Verde;195;50;15;82V;Summer;Light;;4;2,915
Pirelli;Pirelli Cinturato P1 Verde;195;55;15;85H;Summer;Light;;4;3,968
Pirelli;Pirelli Cinturato P1 Verde;195;60;15;88V;Summer;Light;;4;3,137
Pirelli;Pirelli Cinturato P1 Verde;195;65;15;91H;Summer;Light;;4;2,995
Pirelli;Pirelli Cinturato P1 Verde;195;65;15;91V;Summer;Light;;4;2,995
Pirelli;Pirelli Cinturato P1 Verde;205;60;15;91H;Summer;Light;;4;3,361
Pirelli;Pirelli Cinturato P1 Verde;205;55;16;91H;Summer;Light;;4;3,390
Pirelli;Pirelli Cinturato P1 Verde;205;55;16;91V;Summer;Light;;4;3,390
Pirelli;Pirelli Cinturato P4;175;70;13;82T;Summer;Light;;4;2,176
Pirelli;Pirelli Cinturato P4;175;65;14;82T;Summer;Light;;4;2,501
Pirelli;Pirelli Cinturato P7;205;55;16;91V;Summer;Light;;4;4,007
Pirelli;Pirelli Cinturato P7;205;55;16;91V;Summer;Light;;4;3,512
Pirelli;Pirelli Cinturato P7;205;55;16;91W;Summer;Light;;4;4,089
Pirelli;Pirelli Cinturato P7;205;55;16;91W;Summer;Light;;4;4,392
Pirelli;Pirelli Cinturato P7;205;60;16;92H;Summer;Light;;4;3,968
Pirelli;Pirelli Cinturato P7;205;60;16;92W;Summer;Light;;4;5,718
Pirelli;Pirelli Cinturato P7;205;50;17;93W;Summer;Light;;4;6,590
Pirelli;Pirelli Cinturato P7;205;40;18;86W;Summer;Light;;4;11,234
Pirelli;Pirelli Cinturato P7;215;55;16;93V;Summer;Light;;4;5,375
Pirelli;Pirelli Cinturato P7;215;60;16;99H;Summer;Light;;4;4,423
Pirelli;Pirelli Cinturato P7;215;55;17;94V;Summer;Light;;4;6,052
Pirelli;Pirelli Cinturato P7;215;55;17;94W;Summer;Light;;4;6,153
Pirelli;Pirelli Cinturato P7;215;45;18;93W;Summer;Light;;4;7,115
Pirelli;Pirelli Cinturato P7;225;50;16;92V;Summer;Light;;4;8,360
Pirelli;Pirelli Cinturato P7;225;55;16;95V;Summer;Light;;4;5,770
Pirelli;Pirelli Cinturato P7;225;60;16;98Y;Summer;Light;;4;7,348
Pirelli;Pirelli Cinturato P7;225;55;16;99Y;Summer;Light;;4;7,095
Pirelli;Pirelli Cinturato P7;225;55;17;101W;Summer;Light;;4;8,623
Pirelli;Pirelli Cinturato P7;225;45;17;91V;Summer;Light;;4;7,206
Pirelli;Pirelli Cinturato P7;225;45;17;91V;Summer;Light;;4;5,930
Pirelli;Pirelli Cinturato P7;225;45;17;91W;Summer;Light;;4;6,144
Pirelli;Pirelli Cinturato P7;225;45;17;91Y;Summer;Light;;4;6,144
Pirelli;Pirelli Cinturato P7;225;50;17;94H;Summer;Light;;4;9,423
Pirelli;Pirelli Cinturato P7;225;50;17;94W;Summer;Light;;4;9,423
Pirelli;Pirelli Cinturato P7;225;50;17;94Y;Summer;Light;;4;8,440
Pirelli;Pirelli Cinturato P7;225;55;17;97Y;Summer;Light;;4;10,596
Pirelli;Pirelli Cinturato P7;225;55;17;97Y;Summer;Light;;4;8,460
Pirelli;Pirelli Cinturato P7;225;60;17;99V;Summer;Light;;4;8,330
Pirelli;Pirelli Cinturato P7;225;45;18;91V;Summer;Light;;4;11,832
Pirelli;Pirelli Cinturato P7;225;40;18;92Y;Summer;Light;;4;10,090
Pirelli;Pirelli Cinturato P7;225;50;18;95W;Summer;Light;;4;13,815
Pirelli;Pirelli Cinturato P7;225;45;19;97W;Summer;Light;;4;14,523
Pirelli;Pirelli Cinturato P7;235;50;17;96W;Summer;Light;;4;7,095
Pirelli;Pirelli Cinturato P7;235;55;17;99W;Summer;Light;;4;9,282
Pirelli;Pirelli Cinturato P7;235;55;17;99Y;Summer;Light;;4;9,282
Pirelli;Pirelli Cinturato P7;245;40;17;91W;Summer;Light;;4;9,656
Pirelli;Pirelli Cinturato P7;245;45;17;95W;Summer;Light;;4;7,611
Pirelli;Pirelli Cinturato P7;245;45;17;95Y;Summer;Light;;4;7,611
Pirelli;Pirelli Cinturato P7;245;45;17;99Y;Summer;Light;;4;7,763
Pirelli;Pirelli Cinturato P7;245;50;18;100W;Summer;Light;;4;12,863
Pirelli;Pirelli Cinturato P7;245;40;18;93Y;Summer;Light;;4;9,757
Pirelli;Pirelli Cinturato P7;245;45;18;96Y;Summer;Light;;4;11,436
Pirelli;Pirelli Cinturato P7;245;40;18;97Y;Summer;Light;;4;9,958
Pirelli;Pirelli Cinturato P7;255;45;18;99W;Summer;Light;;4;13,633
Pirelli;Pirelli Cinturato P7;275;40;18;99Y;Summer;Light;;4;16,548
Pirelli;Pirelli Cinturato P7 Blue;205;50;17;93W;Summer;Light;;4;5,597
Pirelli;Pirelli Cinturato P7 Blue;225;55;16;95V;Summer;Light;;4;5,657
Pirelli;Pirelli Cinturato P7 Blue;225;55;17;101W;Summer;Light;;4;7,448
Pirelli;Pirelli Cinturato P7 Blue;225;40;18;92W;Summer;Light;;4;8,553
Pirelli;Pirelli P Zero;205;45;17;84V;Summer;Light;;4;8,836
Pirelli;Pirelli P Zero;205;45;17;88Y;Summer;Light;;4;7,641
Pirelli;Pirelli P Zero;215;40;18;85Y;Summer;Light;;4;10,830
Pirelli;Pirelli P Zero;225;45;17;91W;Summer;Light;;4;9,969
Pirelli;Pirelli P Zero;225;45;19;92W;Summer;Light;;4;15,788
Pirelli;Pirelli P Zero;225;45;17;94Y;Summer;Light;;4;8,360
Pirelli;Pirelli P Zero;225;40;18;92Y;Summer;Light;;4;9,524
Pirelli;Pirelli P Zero;225;40;19;93Y;Summer;Light;;4;12,610
Pirelli;Pirelli P Zero;235;60;17;102Y;Summer;Light;;4;10,303
Pirelli;Pirelli P Zero;235;55;18;104Y;Summer;Light;;4;11,194
Pirelli;Pirelli P Zero;235;45;17;97Y;Summer;Light;;4;8,017
Pirelli;Pirelli P Zero;235;40;18;95Y;Summer;Light;;4;10,020
Pirelli;Pirelli P Zero;235;35;19;87(Y);Summer;Light;;4;12,904
Pirelli;Pirelli P Zero;235;35;19;91(Y);Summer;Light;;4;13,005
Pirelli;Pirelli P Zero;235;35;20;88(Y);Summer;Light;;4;14,311
Pirelli;Pirelli P Zero;245;40;18;97Y;Summer;Light;;4;10,952
Pirelli;Pirelli P Zero;245;30;19;89Y;Summer;Light;;4;21,487
Pirelli;Pirelli P Zero;245;45;18;100(Y);Summer;Light;;4;9,372
Pirelli;Pirelli P Zero;245;50;18;100(Y);Summer;Light;;4;10,738
Pirelli;Pirelli P Zero;245;35;19;93(Y);Summer;Light;;4;13,694
Pirelli;Pirelli P Zero;245;40;19;94(Y);Summer;Light;;4;12,924
Pirelli;Pirelli P Zero;245;40;19;94(Y);Summer;Light;;4;14,149
Pirelli;Pirelli P Zero;245;40;19;98(Y);Summer;Light;;4;13,188
Pirelli;Pirelli P Zero;245;35;20;91(Y);Summer;Light;;4;16,001
Pirelli;Pirelli P Zero;245;40;20;99(Y);Summer;Light;;4;16,273
Pirelli;Pirelli P Zero;255;45;18;99Y;Summer;Light;;4;11,628
Pirelli;Pirelli P Zero;255;40;18;99Y;Summer;Light;;4;13,622
Pirelli;Pirelli P Zero;255;35;19;92Y;Summer;Light;;4;18,521
Pirelli;Pirelli P Zero;255;40;20;101Y;Summer;Light;;4;18,561
Pirelli;Pirelli P Zero;255;35;18;94Y;Summer;Light;;4;11,083
Pirelli;Pirelli P Zero;255;40;19;100(Y);Summer;Light;;4;12,631
Pirelli;Pirelli P Zero;255;45;19;100(Y);Summer;Light;;4;16,760
Pirelli;Pirelli P Zero;255;40;20;101W;Summer;Light;;4;18,561
Pirelli;Pirelli P Zero;255;35;20;97(Y);Summer;Light;;4;17,944
Pirelli;Pirelli P Zero;255;35;20;97Y;Summer;Light;;4;17,944
Pirelli;Pirelli P Zero;265;35;18;97Y;Summer;Light;;4;12,824
Pirelli;Pirelli P Zero;265;40;22;106Y;Summer;Light;;4;14,523
Pirelli;Pirelli P Zero;265;40;18;101(Y);Summer;Light;;4;11,194
Pirelli;Pirelli P Zero;265;35;19;98(Y);Summer;Light;;4;16,284
Pirelli;Pirelli P Zero;265;45;20;108(Y);Summer;Light;;4;17,742
Pirelli;Pirelli P Zero;265;30;20;94Y;Summer;Light;;4;19,219
Pirelli;Pirelli P Zero;275;30;19;96Y;Summer;Light;;4;16,719
Pirelli;Pirelli P Zero;275;35;19;100(Y);Summer;Light;;4;16,193
Pirelli;Pirelli P Zero;275;35;19;96(Y);Summer;Light;;4;15,738
Pirelli;Pirelli P Zero;275;35;21;103(Y);Summer;Light;;4;22,235
Pirelli;Pirelli P Zero;285;35;18;97Y;Summer;Light;;4;16,336
Pirelli;Pirelli P Zero;285;40;19;107(Y);Summer;Light;;4;17,104
Pirelli;Pirelli P Zero;285;35;20;100(Y);Summer;Light;;4;19,797
Pirelli;Pirelli P Zero;295;35;21;107Y;Summer;Light;;4;19,533
Pirelli;Pirelli P Zero;295;35;20;105(Y);Summer;Light;;4;21,375
Pirelli;Pirelli P Zero;295;35;21;107Y;Summer;Light;;4;19,533
Pirelli;Pirelli P Zero;295;35;21;107Y;Summer;Light;;4;19,533
Pirelli;Pirelli P Zero;305;30;19;102(Y);Summer;Light;;4;20,393
Pirelli;Pirelli P Zero;305;30;19;102(Y);Summer;Light;;4;20,393
Pirelli;Pirelli P Zero;335;30;20;104Y;Summer;Light;;4;23,794
Pirelli;Pirelli P Zero;335;25;22;105(Y);Summer;Light;;4;36,760
Pirelli;Pirelli P Zero Asimmetrico;255;45;18;99Y;Summer;Light;;4;10,041
Pirelli;Pirelli P Zero Asimmetrico;285;45;18;103Y;Summer;Light;;4;28,126
Pirelli;Pirelli P Zero Nero;215;45;17;91Y;Summer;Light;;4;6,042
Pirelli;Pirelli P Zero Nero GT;245;40;18;97Y;Summer;Light;;4;7,777
Pirelli;Pirelli P Zero Nero GT;245;35;19;93(Y);Summer;Light;;4;10,627
Pirelli;Pirelli P Zero Nero GT;245;40;19;98(Y);Summer;Light;;4;12,122
Pirelli;Pirelli P Zero Rosso Asimmetrico;225;45;17;91W;Summer;Light;;4;7,834
Pirelli;Pirelli P Zero Rosso Asimmetrico;225;45;17;91W;Summer;Light;;4;6,716
Pirelli;Pirelli P Zero Rosso Asimmetrico;225;40;18;88Y;Summer;Light;;4;9,037
Pirelli;Pirelli P Zero Rosso Asimmetrico;235;60;18;103V;Summer;Light;;4;8,138
Pirelli;Pirelli P Zero Rosso Asimmetrico;235;45;19;95W;Summer;Light;;4;14,786
Pirelli;Pirelli P Zero Rosso Asimmetrico;235;40;18;91Y;Summer;Light;;4;9,158
Pirelli;Pirelli P Zero Rosso Asimmetrico;245;45;19;98Y;Summer;Light;;4;14,786
Pirelli;Pirelli P Zero Rosso Asimmetrico;255;45;18;99Y;Summer;Light;;4;11,628
Pirelli;Pirelli P Zero Rosso Asimmetrico;255;50;19;103W;Summer;Light;;4;12,560
Pirelli;Pirelli P Zero Rosso Asimmetrico;255;40;19;96W;Summer;Light;;4;12,367
Pirelli;Pirelli P Zero Rosso Asimmetrico;255;40;17;94Y;Summer;Light;;4;9,786
Pirelli;Pirelli P Zero Rosso Asimmetrico;255;55;18;109Y;Summer;Light;;4;10,263
Pirelli;Pirelli P Zero Rosso Asimmetrico;255;35;19;96(Y);Summer;Light;;4;14,675
Pirelli;Pirelli P Zero Rosso Asimmetrico;275;40;19;101Y;Summer;Light;;4;14,928
Pirelli;Pirelli P Zero Rosso Asimmetrico;275;45;19;108Y;Summer;Light;;4;14,726
Pirelli;Pirelli P Zero Rosso Asimmetrico;275;40;20;106Y;Summer;Light;;4;18,237
Pirelli;Pirelli P Zero Rosso Asimmetrico;275;45;20;110Y;Summer;Light;;4;14,523
Pirelli;Pirelli P Zero Rosso Asimmetrico;295;40;20;110Y;Summer;Light;;4;19,573
Pirelli;Pirelli P Zero Rosso Direzionale;225;35;19;84Y;Summer;Light;;4;11,122
Pirelli;Pirelli P7;225;60;18;100W;Summer;Light;;4;10,055
Pirelli;Pirelli Scorpion ATR;205;75;15;99T;Demiseason;Light;;4;5,982
Pirelli;Pirelli Scorpion ATR;215;80;15;102T;Demiseason;Light;;4;5,132
Pirelli;Pirelli Scorpion ATR;225;65;17;102H;Demiseason;Light;;4;6,873
Pirelli;Pirelli Scorpion ATR;235;70;16;105T;Demiseason;Light;;4;6,224
Pirelli;Pirelli Scorpion ATR;245;65;17;111T;Demiseason;Light;;4;7,115
Pirelli;Pirelli Scorpion ATR;255;65;17;110T;Demiseason;Light;;4;8,430
Pirelli;Pirelli Scorpion ATR;265;70;17;113T;Demiseason;Light;;4;8,239
Pirelli;Pirelli Scorpion ATR;265;60;18;110H;Demiseason;Light;;4;8,845
Pirelli;Pirelli Scorpion MTR;285;70;17;116Q;Demiseason;Light;;4;12,165
Pirelli;Pirelli Scorpion STR;215;65;16;98H;Demiseason;Light;;4;5,517
Pirelli;Pirelli Scorpion STR;235;55;17;99H;Demiseason;Light;;4;9,625
Pirelli;Pirelli Scorpion STR;235;50;18;97H;Demiseason;Light;;4;10,182
Pirelli;Pirelli Scorpion STR;255;65;16;109H;Demiseason;Light;;4;6,771
Pirelli;Pirelli Scorpion STR;275;60;18;113H;Demiseason;Light;;4;9,059
Pirelli;Pirelli Scorpion STR;275;55;20;111H;Demiseason;Light;;4;15,778
Pirelli;Pirelli Scorpion Verde;215;65;16;102H;Summer;Light;;4;4,807
Pirelli;Pirelli Scorpion Verde;215;60;17;96V;Summer;Light;;4;7,748
Pirelli;Pirelli Scorpion Verde;215;55;18;99V;Summer;Light;;4;7,905
Pirelli;Pirelli Scorpion Verde;225;70;16;103H;Summer;Light;;4;5,344
Pirelli;Pirelli Scorpion Verde;225;65;17;102H;Summer;Light;;4;5,445
Pirelli;Pirelli Scorpion Verde;225;55;17;97H;Summer;Light;;4;9,251
Pirelli;Pirelli Scorpion Verde;225;60;18;100H;Summer;Light;;4;7,480
Pirelli;Pirelli Scorpion Verde;225;55;18;98V;Summer;Light;;4;8,290
Pirelli;Pirelli Scorpion Verde;225;45;19;96W;Summer;Light;;4;11,102
Pirelli;Pirelli Scorpion Verde;235;70;16;106H;Summer;Light;;4;5,749
Pirelli;Pirelli Scorpion Verde;235;65;17;108V;Summer;Light;;4;6,842
Pirelli;Pirelli Scorpion Verde;235;55;17;99V;Summer;Light;;4;9,625
Pirelli;Pirelli Scorpion Verde;235;55;18;100V;Summer;Light;;4;9,251
Pirelli;Pirelli Scorpion Verde;235;50;18;97V;Summer;Light;;4;9,969
Pirelli;Pirelli Scorpion Verde;245;70;16;107H;Summer;Light;;4;6,346
Pirelli;Pirelli Scorpion Verde;255;60;17;106V;Summer;Light;;4;7,494
Pirelli;Pirelli Scorpion Verde;255;55;18;109V;Summer;Light;;4;10,141
Pirelli;Pirelli Scorpion Verde;255;50;19;103W;Summer;Light;;4;11,760
Pirelli;Pirelli Scorpion Verde All-Season;215;60;17;96V;Demiseason;Light;;4;7,945
Pirelli;Pirelli Scorpion Verde All-Season;225;65;17;102V;Demiseason;Light;;4;6,072
Pirelli;Pirelli Scorpion Verde All-Season;235;60;16;100H;Demiseason;Light;;4;6,002
Pirelli;Pirelli Scorpion Verde All-Season;235;70;16;106H;Demiseason;Light;;4;5,982
Pirelli;Pirelli Scorpion Verde All-Season;235;65;17;108V;Demiseason;Light;;4;7,065
Pirelli;Pirelli Scorpion Verde All-Season;235;55;17;99V;Demiseason;Light;;4;8,471
Pirelli;Pirelli Scorpion Verde All-Season;235;55;18;104V;Demiseason;Light;;4;9,989
Pirelli;Pirelli Scorpion Verde All-Season;235;50;18;97V;Demiseason;Light;;4;10,141
Pirelli;Pirelli Scorpion Verde All-Season;235;65;19;109V;Demiseason;Light;;4;11,487
Pirelli;Pirelli Scorpion Verde All-Season;255;60;17;106V;Demiseason;Light;;4;8,492
Pirelli;Pirelli Scorpion Verde All-Season;255;55;18;109H;Demiseason;Light;;4;8,147
Pirelli;Pirelli Scorpion Verde All-Season;255;60;18;112H;Demiseason;Light;;4;10,445
Pirelli;Pirelli Scorpion Verde All-Season;255;55;19;111H;Demiseason;Light;;4;10,738
Pirelli;Pirelli Scorpion Verde All-Season;255;55;20;110W;Demiseason;Light;;4;15,434
Pirelli;Pirelli Scorpion Verde All-Season;265;70;17;113H;Demiseason;Light;;4;6,477
Pirelli;Pirelli Scorpion Verde All-Season;265;60;18;110H;Demiseason;Light;;4;8,866
Pirelli;Pirelli Scorpion Verde All-Season;265;50;19;110V;Demiseason;Light;;4;12,519
Pirelli;Pirelli Scorpion Verde All-Season;275;45;20;110V;Demiseason;Light;;4;13,957
Pirelli;Pirelli Scorpion Verde All-Season;275;45;20;110V;Demiseason;Light;;4;13,927
Pirelli;Pirelli Scorpion Verde All-Season;275;45;21;110W;Demiseason;Light;;4;15,667
Pirelli;Pirelli Scorpion Verde All-Season;275;45;21;110Y;Demiseason;Light;;4;15,667
Pirelli;Pirelli Scorpion Verde All-Season;285;65;17;116H;Demiseason;Light;;4;8,815
Pirelli;Pirelli Scorpion Zero;235;60;18;103V;Summer;Light;;4;8,745
Pirelli;Pirelli Scorpion Zero;255;55;18;109V;Summer;Light;;4;9,251
Pirelli;Pirelli Scorpion Zero;255;60;18;112V;Summer;Light;;4;9,918
Pirelli;Pirelli Scorpion Zero;255;55;19;111V;Summer;Light;;4;11,619
Pirelli;Pirelli Scorpion Zero;275;55;19;111H;Summer;Light;;4;14,726
Pirelli;Pirelli Scorpion Zero;285;55;18;113V;Summer;Light;;4;10,182
Pirelli;Pirelli Scorpion Zero Asimmetrico;235;60;17;102V;Summer;Light;;4;9,716
Pirelli;Pirelli Scorpion Zero Asimmetrico;255;55;17;104V;Summer;Light;;4;9,392
Pirelli;Pirelli Scorpion Zero Asimmetrico;255;45;20;105V;Summer;Light;;4;13,248
Pirelli;Pirelli Scorpion Zero Asimmetrico;255;50;19;107Y;Summer;Light;;4;11,750
Pirelli;Pirelli Chrono Winter;175;65;14C;90/88T;Winter;Light;Yes;4;3,557
Pirelli;Pirelli Chrono Winter;195;65;16C;104/102R;Winter;Light;Yes;4;6,078
Pirelli;Pirelli Chrono Winter;195;75;16C;107/105R;Winter;Light;Yes;4;5,526
Pirelli;Pirelli Chrono Winter;205;70;15C;106/104R;Winter;Light;Yes;4;5,474
Pirelli;Pirelli Chrono Winter;205;65;16C;107/105T;Winter;Light;Yes;4;6,236
Pirelli;Pirelli Chrono Winter;205;75;16C;110/108R;Winter;Light;Yes;4;6,311
Pirelli;Pirelli Chrono Winter;215;60;16C;103/101R;Winter;Light;Yes;4;6,087
Pirelli;Pirelli Chrono Winter;215;65;16C;109/107R;Winter;Light;Yes;4;6,246
Pirelli;Pirelli Chrono Winter;215;75;16C;113/111R;Winter;Light;Yes;4;6,914
Pirelli;Pirelli Chrono Winter;225;65;16C;112/110R;Winter;Light;Yes;4;6,829
Pirelli;Pirelli Chrono Winter;225;75;16C;118/116R;Winter;Light;Yes;4;7,538
Pirelli;Pirelli Chrono Winter;235;65;16C;115/113R;Winter;Light;Yes;4;7,315
Pirelli;Pirelli Ice Zero;175;65;14;82T;Winter;Light;Yes;4;2,859
Pirelli;Pirelli Ice Zero;185;60;14;82T;Winter;Light;Yes;4;3,388
Pirelli;Pirelli Ice Zero;185;65;14;86T;Winter;Light;Yes;4;3,124
Pirelli;Pirelli Ice Zero;185;70;14;88T;Winter;Light;Yes;4;3,070
Pirelli;Pirelli Ice Zero;185;55;15;82T;Winter;Light;Yes;4;4,384
Pirelli;Pirelli Ice Zero;185;60;15;88T;Winter;Light;Yes;4;3,653
Pirelli;Pirelli Ice Zero;185;65;15;92T;Winter;Light;Yes;4;3,240
Pirelli;Pirelli Ice Zero;195;50;15;82T;Winter;Light;Yes;4;4,574
Pirelli;Pirelli Ice Zero;195;55;15;85T;Winter;Light;Yes;4;4,648
Pirelli;Pirelli Ice Zero;195;60;15;88T;Winter;Light;Yes;4;3,483
Pirelli;Pirelli Ice Zero;195;65;15;95T;Winter;Light;Yes;4;3,504
Pirelli;Pirelli Ice Zero;195;55;16;91T;Winter;Light;Yes;4;5,220
Pirelli;Pirelli Ice Zero;205;55;16;94T;Winter;Light;Yes;4;4,923
Pirelli;Pirelli Ice Zero;205;60;16;96T;Winter;Light;Yes;4;8,428
Pirelli;Pirelli Ice Zero;205;60;16;96T;Winter;Light;Yes;4;5,081
Pirelli;Pirelli Ice Zero;205;70;16;97T;Winter;Light;Yes;4;7,665
Pirelli;Pirelli Ice Zero;205;55;17;95T;Winter;Light;Yes;4;11,138
Pirelli;Pirelli Ice Zero;215;65;16;102T;Winter;Light;Yes;4;4,764
Pirelli;Pirelli Ice Zero;215;70;16;104T;Winter;Light;Yes;4;6,956
Pirelli;Pirelli Ice Zero;215;55;16;97T;Winter;Light;Yes;4;5,686
Pirelli;Pirelli Ice Zero;215;60;16;99T;Winter;Light;Yes;4;5,717
Pirelli;Pirelli Ice Zero;215;60;17;100T;Winter;Light;Yes;4;7,559
Pirelli;Pirelli Ice Zero;215;50;17;95T;Winter;Light;Yes;4;7,115
Pirelli;Pirelli Ice Zero;215;55;17;98T;Winter;Light;Yes;4;7,803
Pirelli;Pirelli Ice Zero;215;55;18;99T;Winter;Light;Yes;4;8,660
Pirelli;Pirelli Ice Zero;225;60;16;102T;Winter;Light;Yes;4;6,278
Pirelli;Pirelli Ice Zero;225;70;16;103T;Winter;Light;Yes;4;6,744
Pirelli;Pirelli Ice Zero;225;55;17;101T;Winter;Light;Yes;4;7,676
Pirelli;Pirelli Ice Zero;225;60;17;103T;Winter;Light;Yes;4;7,824
Pirelli;Pirelli Ice Zero;225;65;17;106T;Winter;Light;Yes;4;7,019
Pirelli;Pirelli Ice Zero;225;45;17;94T;Winter;Light;Yes;4;7,877
Pirelli;Pirelli Ice Zero;225;50;17;98T;Winter;Light;Yes;4;7,369
Pirelli;Pirelli Ice Zero;225;50;17;98T;Winter;Light;Yes;4;11,498
Pirelli;Pirelli Ice Zero;225;55;18;102T;Winter;Light;Yes;4;7,061
Pirelli;Pirelli Ice Zero;225;45;18;95H;Winter;Light;Yes;4;9,910
Pirelli;Pirelli Ice Zero;225;45;18;95H;Winter;Light;Yes;4;12,493
Pirelli;Pirelli Ice Zero;235;70;16;106T;Winter;Light;Yes;4;7,527
Pirelli;Pirelli Ice Zero;235;55;17;103T;Winter;Light;Yes;4;8,363
Pirelli;Pirelli Ice Zero;235;65;17;108T;Winter;Light;Yes;4;7,506
Pirelli;Pirelli Ice Zero;235;45;17;97T;Winter;Light;Yes;4;8,342
Pirelli;Pirelli Ice Zero;235;50;18;101T;Winter;Light;Yes;4;9,814
Pirelli;Pirelli Ice Zero;235;55;18;104T;Winter;Light;Yes;4;8,533
Pirelli;Pirelli Ice Zero;235;60;18;107H;Winter;Light;Yes;4;8,798
Pirelli;Pirelli Ice Zero;235;55;19;105H;Winter;Light;Yes;4;9,391
Pirelli;Pirelli Ice Zero;235;45;19;99H;Winter;Light;Yes;4;11,678
Pirelli;Pirelli Ice Zero;245;70;16;111T;Winter;Light;Yes;4;8,247
Pirelli;Pirelli Ice Zero;245;65;17;111T;Winter;Light;Yes;4;8,174
Pirelli;Pirelli Ice Zero;245;45;18;100H;Winter;Light;Yes;4;16,104
Pirelli;Pirelli Ice Zero;245;45;18;100H;Winter;Light;Yes;4;10,947
Pirelli;Pirelli Ice Zero;245;45;20;103H;Winter;Light;Yes;4;14,049
Pirelli;Pirelli Ice Zero;245;40;20;99T;Winter;Light;Yes;4;22,296
Pirelli;Pirelli Ice Zero;255;55;18;109H;Winter;Light;Yes;4;8,576
Pirelli;Pirelli Ice Zero;255;55;18;109H;Winter;Light;Yes;4;13,223
Pirelli;Pirelli Ice Zero;255;50;19;107H;Winter;Light;Yes;4;10,110
Pirelli;Pirelli Ice Zero;255;50;19;107H;Winter;Light;Yes;4;15,606
Pirelli;Pirelli Ice Zero;255;55;19;111T;Winter;Light;Yes;4;9,624
Pirelli;Pirelli Ice Zero;265;65;17;112T;Winter;Light;Yes;4;8,660
Pirelli;Pirelli Ice Zero;265;60;18;110T;Winter;Light;Yes;4;8,978
Pirelli;Pirelli Ice Zero;265;50;19;110T;Winter;Light;Yes;4;10,789
Pirelli;Pirelli Ice Zero;265;40;21;105H;Winter;Light;Yes;4;14,420
Pirelli;Pirelli Ice Zero;275;35;20;102T;Winter;Light;Yes;4;27,590
Pirelli;Pirelli Ice Zero;275;40;20;106T;Winter;Light;Yes;4;11,350
Pirelli;Pirelli Ice Zero;285;65;17;116T;Winter;Light;Yes;4;8,247
Pirelli;Pirelli Ice Zero;285;60;18;116T;Winter;Light;Yes;4;9,466
Pirelli;Pirelli Ice Zero FR;175;65;15;84T;Winter;Light;;4;3,918
Pirelli;Pirelli Ice Zero FR;185;65;15;92T;Winter;Light;;4;3,324
Pirelli;Pirelli Ice Zero FR;195;65;15;95T;Winter;Light;;4;3,388
Pirelli;Pirelli Ice Zero FR;205;55;16;91T;Winter;Light;;4;7,019
Pirelli;Pirelli Ice Zero FR;205;60;16;92H;Winter;Light;;4;7,359
Pirelli;Pirelli Ice Zero FR;205;55;16;94T;Winter;Light;;4;4,976
Pirelli;Pirelli Ice Zero FR;205;60;16;96T;Winter;Light;;4;5,135
Pirelli;Pirelli Ice Zero FR;205;50;17;93T;Winter;Light;;4;6,311
Pirelli;Pirelli Ice Zero FR;215;70;16;100T;Winter;Light;;4;6,321
Pirelli;Pirelli Ice Zero FR;215;65;16;102T;Winter;Light;;4;4,733
Pirelli;Pirelli Ice Zero FR;215;55;16;97T;Winter;Light;;4;5,368
Pirelli;Pirelli Ice Zero FR;215;60;17;100T;Winter;Light;;4;7,105
Pirelli;Pirelli Ice Zero FR;215;50;17;95H;Winter;Light;;4;6,501
Pirelli;Pirelli Ice Zero FR;215;55;17;98H;Winter;Light;;4;8,322
Pirelli;Pirelli Ice Zero FR;225;60;17;103H;Winter;Light;;4;7,126
Pirelli;Pirelli Ice Zero FR;225;45;17;94H;Winter;Light;;4;8,395
Pirelli;Pirelli Ice Zero FR;225;50;17;98H;Winter;Light;;4;7,601
Pirelli;Pirelli Ice Zero FR;235;65;17;108H;Winter;Light;;4;7,178
Pirelli;Pirelli Ice Zero FR;235;60;18;107H;Winter;Light;;4;8,756
Pirelli;Pirelli Ice Zero FR;255;55;18;109H;Winter;Light;;4;6,872
Pirelli;Pirelli Scorpion Ice&Snow;235;65;18;110H;Winter;Light;;4;9,095
Pirelli;Pirelli Scorpion Ice&Snow;245;60;18;105H;Winter;Light;;4;10,714
Pirelli;Pirelli Scorpion Ice&Snow;255;55;18;109H;Winter;Light;;4;8,894
Pirelli;Pirelli Scorpion Ice&Snow;265;50;20;111H;Winter;Light;;4;15,850
Pirelli;Pirelli Scorpion Ice&Snow;265;45;21;104H;Winter;Light;;4;16,196
Pirelli;Pirelli Scorpion Ice&Snow;275;55;17;109H;Winter;Light;;4;10,206
Pirelli;Pirelli Scorpion Ice&Snow;285;35;21;105V;Winter;Light;;4;24,712
Pirelli;Pirelli Scorpion Ice&Snow;325;30;21;108V;Winter;Light;;4;30,342
Pirelli;Pirelli Scorpion Winter;215;65;16;102H;Winter;Light;;4;5,496
Pirelli;Pirelli Scorpion Winter;215;70;16;104H;Winter;Light;;4;5,654
Pirelli;Pirelli Scorpion Winter;215;60;17;100V;Winter;Light;;4;7,506
Pirelli;Pirelli Scorpion Winter;225;70;16;103H;Winter;Light;;4;6,353
Pirelli;Pirelli Scorpion Winter;225;65;17;102T;Winter;Light;;4;7,252
Pirelli;Pirelli Scorpion Winter;225;60;17;103V;Winter;Light;;4;8,037
Pirelli;Pirelli Scorpion Winter;225;55;19;99H;Winter;Light;;4;12,186
Pirelli;Pirelli Scorpion Winter;235;70;16;106H;Winter;Light;;4;6,807
Pirelli;Pirelli Scorpion Winter;235;55;17;103V;Winter;Light;;4;9,560
Pirelli;Pirelli Scorpion Winter;235;60;17;106H;Winter;Light;;4;8,989
Pirelli;Pirelli Scorpion Winter;235;65;17;108H;Winter;Light;;4;7,772
Pirelli;Pirelli Scorpion Winter;235;50;18;101V;Winter;Light;;4;11,233
Pirelli;Pirelli Scorpion Winter;235;55;18;104H;Winter;Light;;4;9,116
Pirelli;Pirelli Scorpion Winter;235;60;18;107H;Winter;Light;;4;8,268
Pirelli;Pirelli Scorpion Winter;235;55;19;105H;Winter;Light;;4;11,096
Pirelli;Pirelli Scorpion Winter;235;65;19;109V;Winter;Light;;4;13,159
Pirelli;Pirelli Scorpion Winter;245;70;16;107H;Winter;Light;;4;6,872
Pirelli;Pirelli Scorpion Winter;245;65;17;111H;Winter;Light;;4;9,444
Pirelli;Pirelli Scorpion Winter;255;60;17;106H;Winter;Light;;4;9,306
Pirelli;Pirelli Scorpion Winter;255;65;17;110H;Winter;Light;;4;9,253
Pirelli;Pirelli Scorpion Winter;255;55;18;105V;Winter;Light;;4;9,370
Pirelli;Pirelli Scorpion Winter;255;55;18;109H;Winter;Light;;4;8,894
Pirelli;Pirelli Scorpion Winter;255;55;18;109V;Winter;Light;;4;8,660
Pirelli;Pirelli Scorpion Winter;255;60;18;112V;Winter;Light;;4;9,052
Pirelli;Pirelli Scorpion Winter;255;50;19;107V;Winter;Light;;4;11,625
Pirelli;Pirelli Scorpion Winter;255;55;19;111V;Winter;Light;;4;11,265
Pirelli;Pirelli Scorpion Winter;255;45;20;105V;Winter;Light;;4;16,293
Pirelli;Pirelli Scorpion Winter;255;55;20;110V;Winter;Light;;4;16,971
Pirelli;Pirelli Scorpion Winter;265;70;16;112H;Winter;Light;;4;7,072
Pirelli;Pirelli Scorpion Winter;265;65;17;112H;Winter;Light;;4;9,010
Pirelli;Pirelli Scorpion Winter;265;60;18;114H;Winter;Light;;4;9,539
Pirelli;Pirelli Scorpion Winter;265;50;19;110V;Winter;Light;;4;11,424
Pirelli;Pirelli Scorpion Winter;265;45;21;104H;Winter;Light;;4;17,744
Pirelli;Pirelli Scorpion Winter;275;40;20;106V;Winter;Light;;4;12,123
Pirelli;Pirelli Scorpion Winter;285;45;19;111V;Winter;Light;;4;20,614
Pirelli;Pirelli Scorpion Winter;295;45;20;114V;Winter;Light;;4;19,480
Pirelli;Pirelli Winter Carving Edge;185;60;14;82T;Winter;Light;Yes;4;2,729
Pirelli;Pirelli Winter Carving Edge;195;55;16;91T;Winter;Light;Yes;4;5,055
Pirelli;Pirelli Winter Carving Edge;215;65;16;98T;Winter;Light;Yes;4;4,767
Pirelli;Pirelli Winter Carving Edge;215;60;16;99T;Winter;Light;Yes;4;4,252
Pirelli;Pirelli Winter Carving Edge;215;60;17;100T;Winter;Light;Yes;4;6,669
Pirelli;Pirelli Winter Carving Edge;225;60;16;98T;Winter;Light;Yes;4;6,415
Pirelli;Pirelli Winter Carving Edge;225;65;17;106T;Winter;Light;Yes;4;6,036
Pirelli;Pirelli Winter Carving Edge;225;50;17;98T;Winter;Light;Yes;4;7,835
Pirelli;Pirelli Winter Carving Edge;225;55;18;102T;Winter;Light;Yes;4;8,116
Pirelli;Pirelli Winter Carving Edge;235;55;19;105T;Winter;Light;Yes;4;8,671
Pirelli;Pirelli Winter SnowControl Serie II;195;50;15;82H;Winter;Light;;4;4,066
Pirelli;Pirelli Winter SnowControl Serie III;155;65;14;75T;Winter;Light;;4;2,456
Pirelli;Pirelli Winter SnowControl Serie III;165;65;14;79T;Winter;Light;;4;2,922
Pirelli;Pirelli Winter SnowControl Serie III;165;70;14;81T;Winter;Light;;4;2,647
Pirelli;Pirelli Winter SnowControl Serie III;175;70;14;84T;Winter;Light;;4;2,922
Pirelli;Pirelli Winter SnowControl Serie III;185;60;14;82T;Winter;Light;;4;2,859
Pirelli;Pirelli Winter SnowControl Serie III;185;65;14;86T;Winter;Light;;4;3,038
Pirelli;Pirelli Winter SnowControl Serie III;185;70;14;88T;Winter;Light;;4;3,526
Pirelli;Pirelli Winter SnowControl Serie III;185;55;15;82T;Winter;Light;;4;4,002
Pirelli;Pirelli Winter SnowControl Serie III;185;65;15;88T;Winter;Light;;4;2,837
Pirelli;Pirelli Winter SnowControl Serie III;195;55;15;85H;Winter;Light;;4;4,341
Pirelli;Pirelli Winter SnowControl Serie III;195;60;15;88T;Winter;Light;;4;3,345
Pirelli;Pirelli Winter SnowControl Serie III;195;65;15;95T;Winter;Light;;4;3,070
Pirelli;Pirelli Winter SnowControl Serie III;195;55;16;87H;Winter;Light;;4;5,717
Pirelli;Pirelli Winter SnowControl Serie III;205;65;15;94H;Winter;Light;;4;4,436
Pirelli;Pirelli Winter SnowControl Serie III;205;55;16;91T;Winter;Light;;4;4,128
Pirelli;Pirelli Winter SottoZero;195;55;16;87H;Winter;Light;;4;4,987
Pirelli;Pirelli Winter SottoZero;195;60;16;89H;Winter;Light;;4;4,806
Pirelli;Pirelli Winter SottoZero;235;60;16;100H;Winter;Light;;4;6,384
Pirelli;Pirelli Winter SottoZero;255;45;18;99V;Winter;Light;;4;10,693
Pirelli;Pirelli Winter SottoZero Serie II;205;55;16;91H;Winter;Light;;4;5,346
Pirelli;Pirelli Winter SottoZero Serie II;205;60;16;92H;Winter;Light;;4;4,393
Pirelli;Pirelli Winter SottoZero Serie II;205;55;16;94V;Winter;Light;;4;6,194
Pirelli;Pirelli Winter SottoZero Serie II;205;55;17;91H;Winter;Light;;4;7,930
Pirelli;Pirelli Winter SottoZero Serie II;205;55;17;91V;Winter;Light;;4;8,088
Pirelli;Pirelli Winter SottoZero Serie II;205;50;17;93H;Winter;Light;;4;8,078
Pirelli;Pirelli Winter SottoZero Serie II;215;65;16;98H;Winter;Light;;4;5,346
Pirelli;Pirelli Winter SottoZero Serie II;215;45;17;91H;Winter;Light;;4;8,195
Pirelli;Pirelli Winter SottoZero Serie II;215;45;18;93V;Winter;Light;;4;10,354
Pirelli;Pirelli Winter SottoZero Serie II;225;55;16;95H;Winter;Light;;4;5,771
Pirelli;Pirelli Winter SottoZero Serie II;225;50;16;96V;Winter;Light;;4;9,264
Pirelli;Pirelli Winter SottoZero Serie II;225;60;16;98H;Winter;Light;;4;6,173
Pirelli;Pirelli Winter SottoZero Serie II;225;55;17;101V;Winter;Light;;4;8,088
Pirelli;Pirelli Winter SottoZero Serie II;225;65;17;102H;Winter;Light;;4;10,110
Pirelli;Pirelli Winter SottoZero Serie II;225;45;17;91H;Winter;Light;;4;6,956
Pirelli;Pirelli Winter SottoZero Serie II;225;50;17;94H;Winter;Light;;4;8,417
Pirelli;Pirelli Winter SottoZero Serie II;225;50;17;94H;Winter;Light;;4;6,807
Pirelli;Pirelli Winter SottoZero Serie II;225;55;17;97H;Winter;Light;;4;9,444
Pirelli;Pirelli Winter SottoZero Serie II;225;60;17;99H;Winter;Light;;4;10,302
Pirelli;Pirelli Winter SottoZero Serie II;225;60;17;99H;Winter;Light;;4;8,597
Pirelli;Pirelli Winter SottoZero Serie II;225;45;18;91H;Winter;Light;;4;10,110
Pirelli;Pirelli Winter SottoZero Serie II;225;50;18;99H;Winter;Light;;4;10,227
Pirelli;Pirelli Winter SottoZero Serie II;225;35;20;90V;Winter;Light;;4;28,427
Pirelli;Pirelli Winter SottoZero Serie II;235;55;18;104H;Winter;Light;;4;10,937
Pirelli;Pirelli Winter SottoZero Serie II;235;50;19;99H;Winter;Light;;4;13,551
Pirelli;Pirelli Winter SottoZero Serie II;235;45;20;100W;Winter;Light;;4;22,657
Pirelli;Pirelli Winter SottoZero Serie II;245;55;17;102V;Winter;Light;;4;10,206
Pirelli;Pirelli Winter SottoZero Serie II;245;45;17;99H;Winter;Light;;4;9,412
Pirelli;Pirelli Winter SottoZero Serie II;245;30;19;89V;Winter;Light;;4;21,481
Pirelli;Pirelli Winter SottoZero Serie II;245;35;20;95W;Winter;Light;;4;20,148
Pirelli;Pirelli Winter SottoZero Serie III;205;60;17;93H;Winter;Light;;4;9,370
Pirelli;Pirelli Winter SottoZero Serie III;205;50;17;93V;Winter;Light;;4;6,934
Pirelli;Pirelli Winter SottoZero Serie III;215;55;16;93H;Winter;Light;;4;6,078
Pirelli;Pirelli Winter SottoZero Serie III;215;65;16;98H;Winter;Light;;4;4,923
Pirelli;Pirelli Winter SottoZero Serie III;215;60;16;99H;Winter;Light;;4;5,558
Pirelli;Pirelli Winter SottoZero Serie III;215;50;17;95H;Winter;Light;;4;7,051
Pirelli;Pirelli Winter SottoZero Serie III;215;55;17;98H;Winter;Light;;4;7,559
Pirelli;Pirelli Winter SottoZero Serie III;215;55;18;95H;Winter;Light;;4;8,809
Pirelli;Pirelli Winter SottoZero Serie III;215;55;18;99V;Winter;Light;;4;9,782
Pirelli;Pirelli Winter SottoZero Serie III;225;55;16;99H;Winter;Light;;4;5,950
Pirelli;Pirelli Winter SottoZero Serie III;225;45;17;91H;Winter;Light;;4;6,765
Pirelli;Pirelli Winter SottoZero Serie III;225;45;17;94V;Winter;Light;;4;7,454
Pirelli;Pirelli Winter SottoZero Serie III;225;45;17;94V;Winter;Light;;4;8,936
Pirelli;Pirelli Winter SottoZero Serie III;225;55;17;97H;Winter;Light;;4;7,623
Pirelli;Pirelli Winter SottoZero Serie III;225;50;17;98H;Winter;Light;;4;6,807
Pirelli;Pirelli Winter SottoZero Serie III;225;55;18;98H;Winter;Light;;4;9,148
Pirelli;Pirelli Winter SottoZero Serie III;225;50;18;99H;Winter;Light;;4;10,227
Pirelli;Pirelli Winter SottoZero Serie III;235;45;17;97V;Winter;Light;;4;9,285
Pirelli;Pirelli Winter SottoZero Serie III;235;50;18;101V;Winter;Light;;4;10,270
Pirelli;Pirelli Winter SottoZero Serie III;235;40;18;95V;Winter;Light;;4;9,603
Pirelli;Pirelli Winter SottoZero Serie III;245;45;17;99V;Winter;Light;;4;9,899
Pirelli;Pirelli Winter SottoZero Serie III;245;50;18;100V;Winter;Light;;4;10,989
Pirelli;Pirelli Winter SottoZero Serie III;245;40;18;97V;Winter;Light;;4;11,783
Pirelli;Pirelli Winter SottoZero Serie III;245;40;20;99W;Winter;Light;;4;19,103
Sava;Sava Trenta M+S (view1);195;65;16C;104/102R;Winter;Light;Yes;4;4,323
Tigar;Tigar Prima;195;60;15;88H;Summer;Light;;4;2,604
Tigar;Tigar Prima;205;60;15;91H;Summer;Light;;4;2,938
Tigar;Tigar Prima;205;60;15;91V;Summer;Light;;4;2,857
Tigar;Tigar Sigura;175;65;14;82H;Summer;Light;;4;2,067
Tigar;Tigar SUV Summer;205;70;15;96H;Summer;Light;;4;3,698
Tigar;Tigar SUV Summer;215;70;16;100H;Summer;Light;;4;3,982
Tigar;Tigar SUV Summer;215;65;16;102H;Summer;Light;;4;3,931
Tigar;Tigar SUV Summer;225;65;17;106H;Summer;Light;;4;4,590
Tigar;Tigar SUV Summer;235;65;17;108V;Summer;Light;;4;5,410
Tigar;Tigar SUV Summer;255;55;18;109W;Summer;Light;;4;5,664
Tigar;Tigar Syneris;245;35;18;92Y;Summer;Light;;4;5,067
Tigar;Tigar Cargo Speed Winter;175;65;14C;90/88R;Winter;Light;Yes;4;2,965
Tigar;Tigar Cargo Speed Winter;195;65;16C;104/102R;Winter;Light;Yes;4;3,856
Tigar;Tigar Cargo Speed Winter;215;70;15C;109/107R;Winter;Light;Yes;4;4,101
Tigar;Tigar Sigura Stud;175;70;13;82T;Winter;Light;Yes;4;1,946
Tigar;Tigar Sigura Stud;175;65;14;82T;Winter;Light;Yes;4;1,855
Tigar;Tigar Sigura Stud;185;60;14;82T;Winter;Light;Yes;4;2,224
Tigar;Tigar Sigura Stud;185;65;14;86T;Winter;Light;Yes;4;2,126
Tigar;Tigar Sigura Stud;185;70;14;88T;Winter;Light;Yes;4;2,239
Tigar;Tigar Sigura Stud;195;65;15;95T;Winter;Light;Yes;4;2,287
Tigar;Tigar Sigura Stud;205;55;16;94T;Winter;Light;Yes;4;3,013
Tigar;Tigar Sigura Stud;215;55;16;97T;Winter;Light;Yes;4;3,515
Toyo;Toyo Open Country H/T;225;55;17;101H;Summer;Light;;4;6,360
Toyo;Toyo Proxes ST II;285;60;17;114V;Summer;Light;;4;7,812
Toyo;Toyo Observe G3-Ice;185;70;14;88T;Winter;Light;Yes;4;2,729
Toyo;Toyo Observe G3-Ice;195;55;15;85T;Winter;Light;Yes;4;3,779
Toyo;Toyo Observe G3-Ice;215;70;15;98T;Winter;Light;Yes;4;4,278
Toyo;Toyo Observe G3-Ice;215;60;16;95T;Winter;Light;Yes;4;5,083
Toyo;Toyo Observe G3-Ice;235;50;18;101T;Winter;Light;Yes;4;9,093
Toyo;Toyo Observe G3-Ice;245;55;19;103T;Winter;Light;Yes;4;9,327
Toyo;Toyo Observe G3-Ice;255;45;18;103T;Winter;Light;Yes;4;9,555
Toyo;Toyo Observe G3-Ice;265;60;18;114T;Winter;Light;Yes;4;8,160
Toyo;Toyo Observe G3-Ice;275;40;20;106T;Winter;Light;Yes;4;10,138
Toyo;Toyo Observe GSi-5;175;70;13;82Q;Winter;Light;;4;2,445
Toyo;Toyo Observe GSi-5;205;65;15;94Q;Winter;Light;;4;0
Toyo;Toyo Observe GSi-5;215;55;16;93Q;Winter;Light;;4;5,033
Toyo;Toyo Observe GSi-5;215;65;17;98Q;Winter;Light;;4;6,652
Toyo;Toyo Observe GSi-5;215;55;18;94Q;Winter;Light;;4;8,027
Toyo;Toyo Observe GSi-5;235;65;17;104Q;Winter;Light;;4;6,570
Toyo;Toyo Observe GSi-5;245;70;17;110Q;Winter;Light;;4;6,855
Toyo;Toyo Observe GSi-5;245;55;19;103Q;Winter;Light;;4;9,093
Toyo;Toyo Observe GSi-5;255;60;17;106Q;Winter;Light;;4;7,223
Toyo;Toyo Observe GSi-5;255;55;20;111Q;Winter;Light;;4;10,145
Toyo;Toyo Observe GSi-5;275;55;19;111Q;Winter;Light;;4;9,330
Yokohama;Yokohama A10A;215;45;18;89W;Summer;Light;;4;9,093
Yokohama;Yokohama Advan S.T. V802;235;65;17;108W;Summer;Light;;4;6,599
Yokohama;Yokohama Advan S.T. V802;235;50;18;101W;Summer;Light;;4;7,701
Yokohama;Yokohama Advan S.T. V802;245;50;19;105W;Summer;Light;;4;16,932
Yokohama;Yokohama Advan S.T. V802;255;50;17;101W;Summer;Light;;4;11,440
Yokohama;Yokohama Advan S.T. V802;255;60;17;110W;Summer;Light;;4;7,570
Yokohama;Yokohama Advan S.T. V802;255;50;19;107W;Summer;Light;;4;10,835
Yokohama;Yokohama Advan S.T. V802;255;55;19;107Y;Summer;Light;;4;10,337
Yokohama;Yokohama Advan S.T. V802;265;50;20;111W;Summer;Light;;4;10,031
Yokohama;Yokohama Advan S.T. V802;275;40;20;106Y;Summer;Light;;4;13,210
Yokohama;Yokohama Advan S.T. V802;275;45;20;110Y;Summer;Light;;4;12,514
Yokohama;Yokohama Advan S.T. V802;285;55;18;113W;Summer;Light;;4;9,710
Yokohama;Yokohama Advan S.T. V802;285;45;19;107W;Summer;Light;;4;11,388
Yokohama;Yokohama Advan Sport V103;275;35;20;102Y;Summer;Light;;4;14,700
Yokohama;Yokohama Advan Sport V103B;265;50;19;110Y;Summer;Light;;4;9,566
Yokohama;Yokohama Advan Sport V103B;275;45;19;108Y;Summer;Light;;4;11,826
Yokohama;Yokohama Advan Sport V103S;235;55;17;99Y;Summer;Light;;4;6,614
Yokohama;Yokohama Advan Sport V103S;235;40;18;91Y;Summer;Light;;4;7,534
Yokohama;Yokohama Advan Sport V103S;245;40;17;91W;Summer;Light;;4;7,494
Yokohama;Yokohama Advan Sport V103S;255;45;18;99Y;Summer;Light;;4;9,749
Yokohama;Yokohama Advan Sport V103S;255;30;19;91Y;Summer;Light;;4;14,317
Yokohama;Yokohama Advan Sport V105;225;50;16;92V;Summer;Light;;4;5,526
Yokohama;Yokohama Advan Sport V105;245;40;17;91W;Summer;Light;;4;7,888
Yokohama;Yokohama Advan Sport V105;255;30;20;92Y;Summer;Light;;4;14,317
Yokohama;Yokohama Advan Sport V105;285;35;18;97Y;Summer;Light;;4;13,661
Yokohama;Yokohama Advan Sport V105;285;35;18;97Y;Summer;Light;;4;13,661
Yokohama;Yokohama Advan Sport V105S;205;55;17;91Y;Summer;Light;;4;6,409
Yokohama;Yokohama Advan Sport V105S;215;45;17;91Y;Summer;Light;;4;5,965
Yokohama;Yokohama Advan Sport V105S;225;55;17;101Y;Summer;Light;;4;7,047
Yokohama;Yokohama Advan Sport V105S;225;40;18;92Y;Summer;Light;;4;8,083
Yokohama;Yokohama Advan Sport V105S;225;35;19;88Y;Summer;Light;;4;11,224
Yokohama;Yokohama Advan Sport V105S;235;50;17;96Y;Summer;Light;;4;6,613
Yokohama;Yokohama Advan Sport V105S;235;45;17;97Y;Summer;Light;;4;6,456
Yokohama;Yokohama Advan Sport V105S;235;50;18;101Y;Summer;Light;;4;7,701
Yokohama;Yokohama Advan Sport V105S;235;40;18;95Y;Summer;Light;;4;7,767
Yokohama;Yokohama Advan Sport V105S;235;45;18;98Y;Summer;Light;;4;9,144
Yokohama;Yokohama Advan Sport V105S;235;35;19;91Y;Summer;Light;;4;10,790
Yokohama;Yokohama Advan Sport V105S;245;45;17;99Y;Summer;Light;;4;7,073
Yokohama;Yokohama Advan Sport V105S;245;45;18;100Y;Summer;Light;;4;9,001
Yokohama;Yokohama Advan Sport V105S;245;40;18;97Y;Summer;Light;;4;9,107
Yokohama;Yokohama Advan Sport V105S;245;40;20;99Y;Summer;Light;;4;12,764
Yokohama;Yokohama Advan Sport V105S;255;40;17;98Y;Summer;Light;;4;8,236
Yokohama;Yokohama Advan Sport V105S;255;40;19;100Y;Summer;Light;;4;11,593
Yokohama;Yokohama Advan Sport V105S;255;35;19;96Y;Summer;Light;;4;12,382
Yokohama;Yokohama Advan Sport V105S;265;35;18;97Y;Summer;Light;;4;11,043
Yokohama;Yokohama Advan Sport V105S;265;30;19;93Y;Summer;Light;;4;13,487
Yokohama;Yokohama Advan Sport V105S;265;35;20;99Y;Summer;Light;;4;16,339
Yokohama;Yokohama Advan Sport V105S;275;35;18;99Y;Summer;Light;;4;13,585
Yokohama;Yokohama Advan Sport V105S;275;35;19;100Y;Summer;Light;;4;13,187
Yokohama;Yokohama Advan Sport V105S;275;40;19;105Y;Summer;Light;;4;13,350
Yokohama;Yokohama AVS Sport V102;285;40;19;103Y;Summer;Light;;4;17,194
Yokohama;Yokohama BluEarth AE-01;155;70;13;75T;Summer;Light;;4;1,905
Yokohama;Yokohama BluEarth AE-01;165;70;13;79T;Summer;Light;;4;1,980
Yokohama;Yokohama BluEarth AE-01;165;70;14;81T;Summer;Light;;4;2,067
Yokohama;Yokohama BluEarth AE-01;175;65;14;82T;Summer;Light;;4;2,011
Yokohama;Yokohama BluEarth AE-01;175;70;14;84T;Summer;Light;;4;2,185
Yokohama;Yokohama BluEarth AE-01;175;60;15;81H;Summer;Light;;4;2,913
Yokohama;Yokohama BluEarth AE-01;175;65;15;84T;Summer;Light;;4;2,353
Yokohama;Yokohama BluEarth AE-01;185;65;14;86T;Summer;Light;;4;2,300
Yokohama;Yokohama BluEarth AE-01;185;55;15;82H;Summer;Light;;4;3,046
Yokohama;Yokohama BluEarth AE-01;185;60;15;84H;Summer;Light;;4;2,475
Yokohama;Yokohama BluEarth AE-01;185;55;16;83V;Summer;Light;;4;3,318
Yokohama;Yokohama BluEarth AE-01;195;60;14;86H;Summer;Light;;4;2,646
Yokohama;Yokohama BluEarth AE-01;195;65;14;89H;Summer;Light;;4;2,708
Yokohama;Yokohama BluEarth AE-01;195;55;15;85H;Summer;Light;;4;3,431
Yokohama;Yokohama BluEarth AE-01;195;60;15;88H;Summer;Light;;4;2,839
Yokohama;Yokohama BluEarth AE-01;195;65;15;91T;Summer;Light;;4;2,519
Yokohama;Yokohama BluEarth AE-01;205;60;15;91H;Summer;Light;;4;3,046
Yokohama;Yokohama BluEarth AE-01;205;65;15;94H;Summer;Light;;4;2,870
Yokohama;Yokohama BluEarth AE-01;205;55;16;91H;Summer;Light;;4;3,204
Yokohama;Yokohama BluEarth AE-01;215;60;16;99H;Summer;Light;;4;4,023
Yokohama;Yokohama BluEarth AE-01A;185;60;14;82T;Summer;Light;;4;2,104
Yokohama;Yokohama BluEarth AE-01A;195;50;15;82T;Summer;Light;;4;2,473
Yokohama;Yokohama BluEarth AE-01B;165;65;14;79T;Summer;Light;;4;2,232
Yokohama;Yokohama BluEarth-A AE-50;185;60;14;82H;Summer;Light;;4;2,387
Yokohama;Yokohama BluEarth-A AE-50;185;65;14;86H;Summer;Light;;4;2,561
Yokohama;Yokohama BluEarth-A AE-50;185;55;15;82V;Summer;Light;;4;3,310
Yokohama;Yokohama BluEarth-A AE-50;185;60;15;88H;Summer;Light;;4;2,679
Yokohama;Yokohama BluEarth-A AE-50;185;65;15;88H;Summer;Light;;4;2,728
Yokohama;Yokohama BluEarth-A AE-50;195;50;15;82H;Summer;Light;;4;2,802
Yokohama;Yokohama BluEarth-A AE-50;195;55;15;85V;Summer;Light;;4;3,689
Yokohama;Yokohama BluEarth-A AE-50;195;60;15;88V;Summer;Light;;4;3,047
Yokohama;Yokohama BluEarth-A AE-50;195;65;15;91V;Summer;Light;;4;2,803
Yokohama;Yokohama BluEarth-A AE-50;195;55;16;87V;Summer;Light;;4;4,488
Yokohama;Yokohama BluEarth-A AE-50;205;60;15;95V;Summer;Light;;4;3,278
Yokohama;Yokohama BluEarth-A AE-50;205;65;15;99V;Summer;Light;;4;3,139
Yokohama;Yokohama BluEarth-A AE-50;205;55;16;91W;Summer;Light;;4;3,417
Yokohama;Yokohama BluEarth-A AE-50;205;60;16;92V;Summer;Light;;4;3,642
Yokohama;Yokohama BluEarth-A AE-50;205;55;16;94V;Summer;Light;;4;3,312
Yokohama;Yokohama BluEarth-A AE-50;215;65;15;100H;Summer;Light;;4;3,677
Yokohama;Yokohama BluEarth-A AE-50;215;55;16;97W;Summer;Light;;4;5,243
Yokohama;Yokohama BluEarth-A AE-50;215;65;16;98H;Summer;Light;;4;4,233
Yokohama;Yokohama BluEarth-A AE-50;215;60;16;99V;Summer;Light;;4;4,332
Yokohama;Yokohama BluEarth-A AE-50;215;55;17;94W;Summer;Light;;4;5,738
Yokohama;Yokohama BluEarth-A AE-50;225;60;16;98W;Summer;Light;;4;4,884
Yokohama;Yokohama BluEarth-A AE-50;225;55;16;99W;Summer;Light;;4;5,559
Yokohama;Yokohama BluEarth-A AE-50;225;55;17;101W;Summer;Light;;4;6,252
Yokohama;Yokohama BluEarth-A AE-50;225;45;17;94W;Summer;Light;;4;5,304
Yokohama;Yokohama BluEarth-A AE-50;225;50;17;98W;Summer;Light;;4;6,431
Yokohama;Yokohama C.drive AC01;195;50;16;88V;Summer;Light;;4;3,892
Yokohama;Yokohama C.drive AC01;215;60;15;98V;Summer;Light;;4;4,704
Yokohama;Yokohama C.drive2 AC02;185;60;14;82H;Summer;Light;;4;2,268
Yokohama;Yokohama C.drive2 AC02;185;65;14;86H;Summer;Light;;4;2,314
Yokohama;Yokohama C.drive2 AC02;185;55;15;82V;Summer;Light;;4;3,145
Yokohama;Yokohama C.drive2 AC02;185;65;15;88H;Summer;Light;;4;2,592
Yokohama;Yokohama C.drive2 AC02;185;60;15;88H;Summer;Light;;4;2,545
Yokohama;Yokohama C.drive2 AC02;195;60;14;86H;Summer;Light;;4;2,779
Yokohama;Yokohama C.drive2 AC02;195;50;15;82H;Summer;Light;;4;2,662
Yokohama;Yokohama C.drive2 AC02;195;55;15;85V;Summer;Light;;4;3,504
Yokohama;Yokohama C.drive2 AC02;195;60;15;88H;Summer;Light;;4;3,018
Yokohama;Yokohama C.drive2 AC02;195;55;16;87V;Summer;Light;;4;4,264
Yokohama;Yokohama C.drive2 AC02;205;60;15;95H;Summer;Light;;4;3,180
Yokohama;Yokohama C.drive2 AC02;205;65;15;99H;Summer;Light;;4;3,211
Yokohama;Yokohama C.drive2 AC02;205;55;16;91H;Summer;Light;;4;3,241
Yokohama;Yokohama C.drive2 AC02;205;50;17;93W;Summer;Light;;4;4,903
Yokohama;Yokohama C.drive2 AC02;215;65;15;100H;Summer;Light;;4;3,494
Yokohama;Yokohama C.drive2 AC02;215;55;16;97W;Summer;Light;;4;4,920
Yokohama;Yokohama C.drive2 AC02;215;60;16;99V;Summer;Light;;4;4,116
Yokohama;Yokohama C.drive2 AC02;215;45;17;91W;Summer;Light;;4;5,289
Yokohama;Yokohama C.drive2 AC02;225;60;15;96V;Summer;Light;;4;4,252
Yokohama;Yokohama C.drive2 AC02;225;60;16;98W;Summer;Light;;4;4,641
Yokohama;Yokohama C.drive2 AC02;225;55;16;99W;Summer;Light;;4;5,281
Yokohama;Yokohama C.drive2 AC02;225;45;17;91V;Summer;Light;;4;5,304
Yokohama;Yokohama Geolandar A/T-S G012;9.5;30;15C;104S;Summer;Light;;4;5,366
Yokohama;Yokohama Geolandar A/T-S G012;12.5;33;15C;108S;Summer;Light;;4;8,694
Yokohama;Yokohama Geolandar A/T-S G012;175;80;15;90S;Summer;Light;;4;3,920
Yokohama;Yokohama Geolandar A/T-S G012;195;80;15;96S;Summer;Light;;4;4,390
Yokohama;Yokohama Geolandar A/T-S G012;215;75;15;100/97S;Summer;Light;;4;4,531
Yokohama;Yokohama Geolandar A/T-S G012;215;70;15;98S;Summer;Light;;4;5,581
Yokohama;Yokohama Geolandar A/T-S G012;215;70;16;100S;Summer;Light;;4;5,031
Yokohama;Yokohama Geolandar A/T-S G012;215;80;16;103S;Summer;Light;;4;5,787
Yokohama;Yokohama Geolandar A/T-S G012;215;85;16C;110/107R;Summer;Light;;4;6,652
Yokohama;Yokohama Geolandar A/T-S G012;215;60;16;95H;Summer;Light;;4;4,498
Yokohama;Yokohama Geolandar A/T-S G012;215;65;16;98H;Summer;Light;;4;4,782
Yokohama;Yokohama Geolandar A/T-S G012;215;60;17;96H;Summer;Light;;4;7,344
Yokohama;Yokohama Geolandar A/T-S G012;225;75;16C;110/107R;Summer;Light;;4;4,973
Yokohama;Yokohama Geolandar A/T-S G012;225;65;17;102H;Summer;Light;;4;6,100
Yokohama;Yokohama Geolandar A/T-S G012;225;55;18;98H;Summer;Light;;4;8,579
Yokohama;Yokohama Geolandar A/T-S G012;235;70;15;102S;Summer;Light;;4;4,813
Yokohama;Yokohama Geolandar A/T-S G012;235;75;15;104/101S;Summer;Light;;4;5,086
Yokohama;Yokohama Geolandar A/T-S G012;235;60;16;100H;Summer;Light;;4;5,431
Yokohama;Yokohama Geolandar A/T-S G012;235;70;16;107S;Summer;Light;;4;5,980
Yokohama;Yokohama Geolandar A/T-S G012;235;85;16C;120/116R;Summer;Light;;4;5,430
Yokohama;Yokohama Geolandar A/T-S G012;235;65;17;108H;Summer;Light;;4;6,536
Yokohama;Yokohama Geolandar A/T-S G012;245;70;16;106S;Summer;Light;;4;5,907
Yokohama;Yokohama Geolandar A/T-S G012;245;75;17C;121/118R;Summer;Light;;4;8,053
Yokohama;Yokohama Geolandar A/T-S G012;255;65;17;110H;Summer;Light;;4;7,486
Yokohama;Yokohama Geolandar A/T-S G012;265;70;15;112T;Summer;Light;;4;5,409
Yokohama;Yokohama Geolandar A/T-S G012;265;70;16;111S;Summer;Light;;4;5,906
Yokohama;Yokohama Geolandar A/T-S G012;265;75;16C;119/116R;Summer;Light;;4;6,585
Yokohama;Yokohama Geolandar A/T-S G012;265;70;17;113S;Summer;Light;;4;8,305
Yokohama;Yokohama Geolandar A/T-S G012;275;70;16;114H;Summer;Light;;4;5,735
Yokohama;Yokohama Geolandar A/T-S G012;285;60;18;116H;Summer;Light;;4;9,821
Yokohama;Yokohama Geolandar A/T-S G012;305;45;20;112H;Summer;Light;;4;14,310
Yokohama;Yokohama Geolandar A/T-S G012;315;70;17C;121/118R;Summer;Light;;4;13,176
Yokohama;Yokohama Geolandar G91AT;225;65;17;102H;Summer;Light;;4;5,118
Yokohama;Yokohama Geolandar G91AT;225;60;18;100H;Summer;Light;;4;7,098
Yokohama;Yokohama Geolandar G94B;285;65;17;116H;Summer;Light;;4;10,104
Yokohama;Yokohama Geolandar G94BV;285;60;18;116V;Summer;Light;;4;9,821
Yokohama;Yokohama Geolandar H/T G039;265;70;16;112S;Summer;Light;;4;6,087
Yokohama;Yokohama Geolandar H/T G056;215;70;15;98H;Demiseason;Light;;4;5,471
Yokohama;Yokohama Geolandar H/T G056;255;70;15;108H;Demiseason;Light;;4;5,276
Yokohama;Yokohama Geolandar H/T G056;255;70;16;111H;Demiseason;Light;;4;6,886
Yokohama;Yokohama Geolandar H/T G056;255;65;17;114H;Demiseason;Light;;4;7,486
Yokohama;Yokohama Geolandar H/T G056;255;60;18;112V;Demiseason;Light;;4;8,501
Yokohama;Yokohama Geolandar H/T G056;265;70;16;112H;Demiseason;Light;;4;5,578
Yokohama;Yokohama Geolandar H/T G056;265;65;17;112H;Demiseason;Light;;4;6,674
Yokohama;Yokohama Geolandar H/T G056;265;70;17;115S;Demiseason;Light;;4;7,715
Yokohama;Yokohama Geolandar H/T G056;275;65;17;115H;Demiseason;Light;;4;5,808
Yokohama;Yokohama Geolandar H/T G902;265;65;17;112H;Demiseason;Light;;4;7,106
Yokohama;Yokohama Geolandar H/T-S G051;215;70;15;98H;Summer;Light;;4;5,311
Yokohama;Yokohama Geolandar H/T-S G051;225;70;17;108H;Summer;Light;;4;6,255
Yokohama;Yokohama Geolandar M/T+ G001C;10.5;31;15;109Q;Summer;Light;;4;7,538
Yokohama;Yokohama Geolandar M/T+ G001C;225;75;16;103S;Summer;Light;;4;6,424
Yokohama;Yokohama Geolandar M/T+ G001C;235;85;16;108Q;Summer;Light;;4;7,642
Yokohama;Yokohama Geolandar M/T+ G001C;265;70;17;112Q;Summer;Light;;4;10,473
Yokohama;Yokohama Geolandar SUV G055;215;70;16;100H;Summer;Light;;4;4,998
Yokohama;Yokohama Geolandar SUV G055;215;65;16;98H;Summer;Light;;4;4,656
Yokohama;Yokohama Geolandar SUV G055;215;60;17;96H;Summer;Light;;4;6,995
Yokohama;Yokohama Geolandar SUV G055;225;70;16;103H;Summer;Light;;4;4,981
Yokohama;Yokohama Geolandar SUV G055;235;60;17;102V;Summer;Light;;4;7,599
Yokohama;Yokohama Geolandar SUV G055;235;65;17;108V;Summer;Light;;4;6,109
Yokohama;Yokohama Geolandar SUV G055;235;55;17;99H;Summer;Light;;4;6,694
Yokohama;Yokohama Geolandar SUV G055;235;60;18;107V;Summer;Light;;4;7,702
Yokohama;Yokohama Geolandar SUV G055;255;60;17;106H;Summer;Light;;4;7,422
Yokohama;Yokohama Parada Spec-X PA02;245;45;20;99V;Summer;Light;;4;12,632
Yokohama;Yokohama Parada Spec-X PA02;255;40;20;101V;Summer;Light;;4;13,177
Yokohama;Yokohama Parada Spec-X PA02;255;50;20;109V;Summer;Light;;4;10,986
Yokohama;Yokohama Parada Spec-X PA02;285;30;22;101V;Summer;Light;;4;17,872
Yokohama;Yokohama RY818;175;65;14C;90/88T;Summer;Light;;4;2,639
Yokohama;Yokohama RY818;185;0;14C;102/100R;Summer;Light;;4;3,677
Yokohama;Yokohama RY818;195;70;15C;104/102R;Summer;Light;;4;4,315
Yokohama;Yokohama RY818;195;0;15C;106/104R;Summer;Light;;4;5,192
Yokohama;Yokohama RY818;195;65;16C;104/102R;Summer;Light;;4;4,624
Yokohama;Yokohama RY818;205;65;15C;102/100T;Summer;Light;;4;4,590
Yokohama;Yokohama RY818;205;70;15C;106/104R;Summer;Light;;4;4,535
Yokohama;Yokohama RY818;205;65;16C;107/105T;Summer;Light;;4;5,683
Yokohama;Yokohama RY818;215;75;16C;116/114R;Summer;Light;;4;5,974
Yokohama;Yokohama S.drive AS01;185;55;14;80V;Summer;Light;;4;3,363
Yokohama;Yokohama S.drive AS01;215;40;17;87Y;Summer;Light;;4;6,708
Yokohama;Yokohama S.drive AS01;225;35;19;88Y;Summer;Light;;4;10,589
Yokohama;Yokohama S.drive AS01;235;35;19;91Y;Summer;Light;;4;10,467
Yokohama;Yokohama Y354;185;0;14C;102/100Q;Demiseason;Light;;4;3,677
Yokohama;Yokohama Y354;185;75;16C;104/102R;Demiseason;Light;;4;4,670
Yokohama;Yokohama Y354;195;0;14C;106/104Q;Demiseason;Light;;4;4,293
Yokohama;Yokohama Y354;195;75;16C;107/105R;Demiseason;Light;;4;5,031
Yokohama;Yokohama Y354;205;0;14C;109/107Q;Demiseason;Light;;4;5,353
Yokohama;Yokohama Y354;205;70;15C;106/104R;Demiseason;Light;;4;4,535
Yokohama;Yokohama Y354;205;65;16C;107/105T;Demiseason;Light;;4;5,683
Yokohama;Yokohama Y354;205;75;16C;110/108R;Demiseason;Light;;4;5,436
Yokohama;Yokohama Y354;215;70;15C;109/107R;Demiseason;Light;;4;5,471
Yokohama;Yokohama Y354;215;65;16C;106/104T;Demiseason;Light;;4;5,304
Yokohama;Yokohama Y354;215;75;16C;116/114R;Demiseason;Light;;4;6,295
Yokohama;Yokohama Y354;225;70;15C;112/110R;Demiseason;Light;;4;5,675
Yokohama;Yokohama Y354;225;65;16C;112/110R;Demiseason;Light;;4;6,293
Yokohama;Yokohama Y354;225;75;16C;121/120R;Demiseason;Light;;4;6,483
Yokohama;Yokohama Y354;235;65;16C;115/113R;Demiseason;Light;;4;7,900
Yokohama;Yokohama Advan Winter V902;255;40;19;100V;Winter;Light;;4;10,954
Yokohama;Yokohama Geolandar I/T-S G073;225;70;16;103Q;Winter;Light;;4;5,810
Yokohama;Yokohama Geolandar I/T-S G073;225;55;19;99Q;Winter;Light;;4;9,236
Yokohama;Yokohama Geolandar I/T-S G073;235;60;17;102Q;Winter;Light;;4;7,206
Yokohama;Yokohama Geolandar I/T-S G073;235;65;17;108Q;Winter;Light;;4;6,390
Yokohama;Yokohama Geolandar I/T-S G073;235;65;18;106Q;Winter;Light;;4;5,961
Yokohama;Yokohama Geolandar I/T-S G073;245;65;17;107Q;Winter;Light;;4;7,184
Yokohama;Yokohama Geolandar I/T-S G073;245;70;17;110Q;Winter;Light;;4;6,576
Yokohama;Yokohama Geolandar I/T-S G073;255;60;17;106Q;Winter;Light;;4;6,664
Yokohama;Yokohama Geolandar I/T-S G073;255;50;19;107Q;Winter;Light;;4;9,612
Yokohama;Yokohama Geolandar I/T-S G073;255;55;19;111Q;Winter;Light;;4;9,461
Yokohama;Yokohama Geolandar I/T-S G073;265;50;19;110Q;Winter;Light;;4;9,655
Yokohama;Yokohama Geolandar I/T-S G073;275;60;18;113Q;Winter;Light;;4;8,226
Yokohama;Yokohama Geolandar I/T-S G073;275;55;19;111Q;Winter;Light;;4;9,117
Yokohama;Yokohama Geolandar I/T-S G073;275;40;20;106Q;Winter;Light;;4;10,749
Yokohama;Yokohama Geolandar I/T-S G073;285;65;17;116Q;Winter;Light;;4;6,626
Yokohama;Yokohama Geolandar I/T-S G073;295;40;20;110Q;Winter;Light;;4;12,650
Yokohama;Yokohama Geolandar I/T-S G073;295;45;20;114Q;Winter;Light;;4;17,615
Yokohama;Yokohama iceGuard Stud F700S;195;50;15;82Q;Winter;Light;Yes;4;4,232
Yokohama;Yokohama iceGuard Stud iG35;145;65;15;72T;Winter;Light;Yes;4;3,412
Yokohama;Yokohama iceGuard Stud iG35;175;70;13;82T;Winter;Light;Yes;4;2,110
Yokohama;Yokohama iceGuard Stud iG35;175;70;14;84T;Winter;Light;Yes;4;2,324
Yokohama;Yokohama iceGuard Stud iG35;175;65;14;86T;Winter;Light;Yes;4;2,240
Yokohama;Yokohama iceGuard Stud iG35;175;65;15;84T;Winter;Light;Yes;4;3,209
Yokohama;Yokohama iceGuard Stud iG35;185;60;14;82T;Winter;Light;Yes;4;2,748
Yokohama;Yokohama iceGuard Stud iG35;185;60;14;82T;Winter;Light;Yes;4;2,748
Yokohama;Yokohama iceGuard Stud iG35;185;65;14;90T;Winter;Light;Yes;4;2,352
Yokohama;Yokohama iceGuard Stud iG35;185;70;14;92T;Winter;Light;Yes;4;2,569
Yokohama;Yokohama iceGuard Stud iG35;185;70;14;92T;Winter;Light;Yes;4;2,441
Yokohama;Yokohama iceGuard Stud iG35;185;55;15;86T;Winter;Light;Yes;4;3,676
Yokohama;Yokohama iceGuard Stud iG35;185;65;15;92T;Winter;Light;Yes;4;2,817
Yokohama;Yokohama iceGuard Stud iG35;185;55;16;83T;Winter;Light;Yes;4;3,801
Yokohama;Yokohama iceGuard Stud iG35;195;50;15;82T;Winter;Light;Yes;4;4,166
Yokohama;Yokohama iceGuard Stud iG35;195;50;15;82T;Winter;Light;Yes;4;4,073
Yokohama;Yokohama iceGuard Stud iG35;195;55;15;89T;Winter;Light;Yes;4;3,441
Yokohama;Yokohama iceGuard Stud iG35;195;60;15;92T;Winter;Light;Yes;4;2,910
Yokohama;Yokohama iceGuard Stud iG35;195;65;15;95T;Winter;Light;Yes;4;2,784
Yokohama;Yokohama iceGuard Stud iG35;195;65;15;95T;Winter;Light;Yes;4;2,646
Yokohama;Yokohama iceGuard Stud iG35;205;70;15;96T;Winter;Light;Yes;4;3,746
Yokohama;Yokohama iceGuard Stud iG35;205;65;15;99T;Winter;Light;Yes;4;3,092
Yokohama;Yokohama iceGuard Stud iG35;205;55;16;94T;Winter;Light;Yes;4;4,179
Yokohama;Yokohama iceGuard Stud iG35;205;65;16;95T;Winter;Light;Yes;4;4,908
Yokohama;Yokohama iceGuard Stud iG35;205;60;16;96T;Winter;Light;Yes;4;4,253
Yokohama;Yokohama iceGuard Stud iG35;205;50;17;93T;Winter;Light;Yes;4;5,702
Yokohama;Yokohama iceGuard Stud iG35;215;70;15;98T;Winter;Light;Yes;4;4,025
Yokohama;Yokohama iceGuard Stud iG35;215;70;16;100T;Winter;Light;Yes;4;5,662
Yokohama;Yokohama iceGuard Stud iG35;215;70;16;100T;Winter;Light;Yes;4;5,806
Yokohama;Yokohama iceGuard Stud iG35;215;65;16;102T;Winter;Light;Yes;4;4,204
Yokohama;Yokohama iceGuard Stud iG35;215;55;16;97T;Winter;Light;Yes;4;4,618
Yokohama;Yokohama iceGuard Stud iG35;215;55;16;97T;Winter;Light;Yes;4;4,473
Yokohama;Yokohama iceGuard Stud iG35;215;60;16;99T;Winter;Light;Yes;4;4,606
Yokohama;Yokohama iceGuard Stud iG35;215;60;17;100T;Winter;Light;Yes;4;5,982
Yokohama;Yokohama iceGuard Stud iG35;215;45;17;91T;Winter;Light;Yes;4;6,303
Yokohama;Yokohama iceGuard Stud iG35;215;50;17;95T;Winter;Light;Yes;4;5,821
Yokohama;Yokohama iceGuard Stud iG35;215;55;17;98T;Winter;Light;Yes;4;6,604
Yokohama;Yokohama iceGuard Stud iG35;215;55;18;95T;Winter;Light;Yes;4;8,364
Yokohama;Yokohama iceGuard Stud iG35;225;70;16;107T;Winter;Light;Yes;4;5,506
Yokohama;Yokohama iceGuard Stud iG35;225;55;16;99T;Winter;Light;Yes;4;5,520
Yokohama;Yokohama iceGuard Stud iG35;225;55;17;101T;Winter;Light;Yes;4;6,841
Yokohama;Yokohama iceGuard Stud iG35;225;60;17;103T;Winter;Light;Yes;4;6,584
Yokohama;Yokohama iceGuard Stud iG35;225;50;17;98T;Winter;Light;Yes;4;6,439
Yokohama;Yokohama iceGuard Stud iG35;225;50;17;98T;Winter;Light;Yes;4;6,119
Yokohama;Yokohama iceGuard Stud iG35;225;45;18;95T;Winter;Light;Yes;4;8,513
Yokohama;Yokohama iceGuard Stud iG35;235;60;16;100T;Winter;Light;Yes;4;4,952
Yokohama;Yokohama iceGuard Stud iG35;235;70;16;106T;Winter;Light;Yes;4;6,449
Yokohama;Yokohama iceGuard Stud iG35;235;75;16;108T;Winter;Light;Yes;4;6,687
Yokohama;Yokohama iceGuard Stud iG35;235;60;17;102T;Winter;Light;Yes;4;6,977
Yokohama;Yokohama iceGuard Stud iG35;235;55;17;103T;Winter;Light;Yes;4;7,184
Yokohama;Yokohama iceGuard Stud iG35;235;65;17;108T;Winter;Light;Yes;4;5,816
Yokohama;Yokohama iceGuard Stud iG35;235;45;17;97T;Winter;Light;Yes;4;6,669
Yokohama;Yokohama iceGuard Stud iG35;235;50;18;101T;Winter;Light;Yes;4;7,668
Yokohama;Yokohama iceGuard Stud iG35;235;55;18;104T;Winter;Light;Yes;4;6,994
Yokohama;Yokohama iceGuard Stud iG35;235;60;18;107T;Winter;Light;Yes;4;7,464
Yokohama;Yokohama iceGuard Stud iG35;235;60;18;107T;Winter;Light;Yes;4;7,147
Yokohama;Yokohama iceGuard Stud iG35;235;55;19;101T;Winter;Light;Yes;4;7,745
Yokohama;Yokohama iceGuard Stud iG35;245;65;17;107T;Winter;Light;Yes;4;6,614
Yokohama;Yokohama iceGuard Stud iG35;245;45;17;99T;Winter;Light;Yes;4;7,173
Yokohama;Yokohama iceGuard Stud iG35;245;45;19;102T;Winter;Light;Yes;4;10,417
Yokohama;Yokohama iceGuard Stud iG35;245;45;19;102T;Winter;Light;Yes;4;11,045
Yokohama;Yokohama iceGuard Stud iG35;245;55;19;103T;Winter;Light;Yes;4;6,584
Yokohama;Yokohama iceGuard Stud iG35;245;40;19;98T;Winter;Light;Yes;4;10,541
Yokohama;Yokohama iceGuard Stud iG35;245;45;20;99T;Winter;Light;Yes;4;12,662
Yokohama;Yokohama iceGuard Stud iG35;255;60;17;106T;Winter;Light;Yes;4;10,138
Yokohama;Yokohama iceGuard Stud iG35;255;65;17;110T;Winter;Light;Yes;4;6,827
Yokohama;Yokohama iceGuard Stud iG35;255;45;18;103T;Winter;Light;Yes;4;8,821
Yokohama;Yokohama iceGuard Stud iG35;255;55;18;109T;Winter;Light;Yes;4;6,570
Yokohama;Yokohama iceGuard Stud iG35;255;45;19;104T;Winter;Light;Yes;4;12,070
Yokohama;Yokohama iceGuard Stud iG35;255;50;19;107T;Winter;Light;Yes;4;8,678
Yokohama;Yokohama iceGuard Stud iG35;255;45;20;105T;Winter;Light;Yes;4;13,015
Yokohama;Yokohama iceGuard Stud iG35;255;35;20;97T;Winter;Light;Yes;4;11,712
Yokohama;Yokohama iceGuard Stud iG35;265;65;17;112T;Winter;Light;Yes;4;7,055
Yokohama;Yokohama iceGuard Stud iG35;265;60;18;110T;Winter;Light;Yes;4;8,074
Yokohama;Yokohama iceGuard Stud iG35;265;50;19;110T;Winter;Light;Yes;4;8,602
Yokohama;Yokohama iceGuard Stud iG35;265;50;19;110T;Winter;Light;Yes;4;8,622
Yokohama;Yokohama iceGuard Stud iG35;265;50;20;111T;Winter;Light;Yes;4;9,686
Yokohama;Yokohama iceGuard Stud iG35;265;45;21;104T;Winter;Light;Yes;4;10,417
Yokohama;Yokohama iceGuard Stud iG35;275;70;16;114T;Winter;Light;Yes;4;6,614
Yokohama;Yokohama iceGuard Stud iG35;275;70;16;114T;Winter;Light;Yes;4;6,725
Yokohama;Yokohama iceGuard Stud iG35;275;65;17;115T;Winter;Light;Yes;4;6,904
Yokohama;Yokohama iceGuard Stud iG35;275;65;17;115T;Winter;Light;Yes;4;6,904
Yokohama;Yokohama iceGuard Stud iG35;275;40;20;106T;Winter;Light;Yes;4;8,174
Yokohama;Yokohama iceGuard Stud iG35;275;40;20;106T;Winter;Light;Yes;4;8,173
Yokohama;Yokohama iceGuard Stud iG35;275;45;20;110T;Winter;Light;Yes;4;10,528
Yokohama;Yokohama iceGuard Stud iG35;275;60;20;115T;Winter;Light;Yes;4;8,292
Yokohama;Yokohama iceGuard Stud iG35;285;35;21;105T;Winter;Light;Yes;4;14,990
Yokohama;Yokohama iceGuard Stud iG35;295;35;21;107T;Winter;Light;Yes;4;13,292
Yokohama;Yokohama iceGuard Stud iG55;175;70;13;82T;Winter;Light;Yes;4;2,386
Yokohama;Yokohama iceGuard Stud iG55;175;65;14;86T;Winter;Light;Yes;4;2,554
Yokohama;Yokohama iceGuard Stud iG55;175;70;14;88T;Winter;Light;Yes;4;2,488
Yokohama;Yokohama iceGuard Stud iG55;185;65;14;90T;Winter;Light;Yes;4;2,951
Yokohama;Yokohama iceGuard Stud iG55;185;70;14;92T;Winter;Light;Yes;4;2,781
Yokohama;Yokohama iceGuard Stud iG55;185;55;15;86T;Winter;Light;Yes;4;3,958
Yokohama;Yokohama iceGuard Stud iG55;185;60;15;88T;Winter;Light;Yes;4;3,377
Yokohama;Yokohama iceGuard Stud iG55;185;65;15;92T;Winter;Light;Yes;4;2,982
Yokohama;Yokohama iceGuard Stud iG55;195;50;15;82T;Winter;Light;Yes;4;4,480
Yokohama;Yokohama iceGuard Stud iG55;195;55;15;89T;Winter;Light;Yes;4;3,990
Yokohama;Yokohama iceGuard Stud iG55;195;60;15;92T;Winter;Light;Yes;4;3,098
Yokohama;Yokohama iceGuard Stud iG55;195;65;15;95T;Winter;Light;Yes;4;3,028
Yokohama;Yokohama iceGuard Stud iG55;205;65;15;99T;Winter;Light;Yes;4;3,395
Yokohama;Yokohama iceGuard Stud iG55;205;55;16;94T;Winter;Light;Yes;4;4,562
Yokohama;Yokohama iceGuard Stud iG55;205;60;16;96T;Winter;Light;Yes;4;4,608
Yokohama;Yokohama iceGuard Stud iG55;205;50;17;93T;Winter;Light;Yes;4;6,179
Yokohama;Yokohama iceGuard Stud iG55;215;70;15;98T;Winter;Light;Yes;4;4,459
Yokohama;Yokohama iceGuard Stud iG55;215;70;16;100T;Winter;Light;Yes;4;6,201
Yokohama;Yokohama iceGuard Stud iG55;215;65;16;102T;Winter;Light;Yes;4;4,388
Yokohama;Yokohama iceGuard Stud iG55;215;55;16;97T;Winter;Light;Yes;4;4,950
Yokohama;Yokohama iceGuard Stud iG55;215;60;16;99T;Winter;Light;Yes;4;5,209
Yokohama;Yokohama iceGuard Stud iG55;215;60;17;100T;Winter;Light;Yes;4;6,434
Yokohama;Yokohama iceGuard Stud iG55;215;50;17;95T;Winter;Light;Yes;4;6,092
Yokohama;Yokohama iceGuard Stud iG55;215;55;17;98T;Winter;Light;Yes;4;7,036
Yokohama;Yokohama iceGuard Stud iG55;225;55;16;99T;Winter;Light;Yes;4;5,883
Yokohama;Yokohama iceGuard Stud iG55;225;55;17;101T;Winter;Light;Yes;4;7,189
Yokohama;Yokohama iceGuard Stud iG55;225;60;17;103T;Winter;Light;Yes;4;7,135
Yokohama;Yokohama iceGuard Stud iG55;225;45;17;94T;Winter;Light;Yes;4;6,908
Yokohama;Yokohama iceGuard Stud iG55;225;50;17;98T;Winter;Light;Yes;4;6,853
Yokohama;Yokohama iceGuard Stud iG55;235;55;17;103T;Winter;Light;Yes;4;7,669
Yokohama;Yokohama iceGuard Stud iG55;235;65;17;108T;Winter;Light;Yes;4;6,339
Yokohama;Yokohama iceGuard Stud iG55;235;50;18;101T;Winter;Light;Yes;4;8,250
Yokohama;Yokohama iceGuard Stud iG55;235;60;18;107T;Winter;Light;Yes;4;8,088
Yokohama;Yokohama iceGuard Stud iG55;235;55;19;105T;Winter;Light;Yes;4;8,183
Yokohama;Yokohama iceGuard Stud iG55;245;70;16;111T;Winter;Light;Yes;4;7,237
Yokohama;Yokohama iceGuard Stud iG55;245;45;18;100T;Winter;Light;Yes;4;9,825
Yokohama;Yokohama iceGuard Stud iG55;245;55;19;103T;Winter;Light;Yes;4;7,030
Yokohama;Yokohama iceGuard Stud iG55;245;40;19;98T;Winter;Light;Yes;4;11,096
Yokohama;Yokohama iceGuard Stud iG55;255;55;18;109T;Winter;Light;Yes;4;7,030
Yokohama;Yokohama iceGuard Stud iG55;255;60;18;112T;Winter;Light;Yes;4;7,102
Yokohama;Yokohama iceGuard Stud iG55;255;50;19;107T;Winter;Light;Yes;4;9,573
Yokohama;Yokohama iceGuard Stud iG55;265;70;16;112T;Winter;Light;Yes;4;6,834
Yokohama;Yokohama iceGuard Stud iG55;265;65;17;116T;Winter;Light;Yes;4;7,731
Yokohama;Yokohama iceGuard Stud iG55;265;60;18;114T;Winter;Light;Yes;4;8,440
Yokohama;Yokohama iceGuard Stud iG55;265;50;20;111T;Winter;Light;Yes;4;10,987
Yokohama;Yokohama iceGuard Stud iG55;265;45;21;104T;Winter;Light;Yes;4;11,127
Yokohama;Yokohama iceGuard Stud iG55;285;50;20;112T;Winter;Light;Yes;4;11,239
Yokohama;Yokohama iceGuard Stud iG55;295;35;21;107T;Winter;Light;Yes;4;14,691
Yokohama;Yokohama iceGuard Studless iG30;155;80;13;79Q;Winter;Light;;4;2,352
Yokohama;Yokohama iceGuard Studless iG30;185;65;15;88Q;Winter;Light;;4;2,900
Yokohama;Yokohama iceGuard Studless iG30;195;65;15;91Q;Winter;Light;;4;2,835
Yokohama;Yokohama iceGuard Studless iG30;195;60;16;89Q;Winter;Light;;4;4,715
Yokohama;Yokohama iceGuard Studless iG30;205;65;15;94Q;Winter;Light;;4;3,323
Yokohama;Yokohama iceGuard Studless iG30;205;60;16;92Q;Winter;Light;;4;4,296
Yokohama;Yokohama iceGuard Studless iG30;215;60;16;95Q;Winter;Light;;4;4,632
Yokohama;Yokohama iceGuard Studless iG30;255;45;18;99Q;Winter;Light;;4;8,548
Yokohama;Yokohama iceGuard Studless iG50;155;65;13;73Q;Winter;Light;;4;2,526
Yokohama;Yokohama iceGuard Studless iG50;155;70;13;75Q;Winter;Light;;4;2,338
Yokohama;Yokohama iceGuard Studless iG50;155;65;14;75Q;Winter;Light;;4;2,793
Yokohama;Yokohama iceGuard Studless iG50;165;65;13;77Q;Winter;Light;;4;2,977
Yokohama;Yokohama iceGuard Studless iG50;165;65;14;79Q;Winter;Light;;4;2,787
Yokohama;Yokohama iceGuard Studless iG50;165;70;14;81Q;Winter;Light;;4;2,892
Yokohama;Yokohama iceGuard Studless iG50;175;65;14;82Q;Winter;Light;;4;2,534
Yokohama;Yokohama iceGuard Studless iG50;175;70;14;84Q;Winter;Light;;4;2,492
Yokohama;Yokohama iceGuard Studless iG50;175;65;15;84Q;Winter;Light;;4;3,183
Yokohama;Yokohama iceGuard Studless iG50;185;65;14;86Q;Winter;Light;;4;2,803
Yokohama;Yokohama iceGuard Studless iG50;185;70;14;88Q;Winter;Light;;4;2,719
Yokohama;Yokohama iceGuard Studless iG50;185;65;15;88Q;Winter;Light;;4;2,911
Yokohama;Yokohama iceGuard Studless iG50;195;60;15;88Q;Winter;Light;;4;2,994
Yokohama;Yokohama iceGuard Studless iG50;195;65;15;91Q;Winter;Light;;4;2,989
Yokohama;Yokohama iceGuard Studless iG50;205;60;15;91Q;Winter;Light;;4;3,377
Yokohama;Yokohama iceGuard Studless iG50;215;55;16;93Q;Winter;Light;;4;4,838
Yokohama;Yokohama iceGuard Studless iG50;215;65;16;98Q;Winter;Light;;4;4,368
Yokohama;Yokohama iceGuard Studless iG50;215;45;17;87Q;Winter;Light;;4;6,952
Yokohama;Yokohama iceGuard Studless iG50;215;55;18;95Q;Winter;Light;;4;8,367
Yokohama;Yokohama iceGuard Studless iG50;225;45;18;91Q;Winter;Light;;4;8,924
Yokohama;Yokohama iceGuard Studless iG50+;155;70;13;75Q;Winter;Light;;4;2,338
Yokohama;Yokohama iceGuard Studless iG50+;155;65;14;75Q;Winter;Light;;4;2,793
Yokohama;Yokohama iceGuard Studless iG50+;165;65;14;79Q;Winter;Light;;4;2,787
Yokohama;Yokohama iceGuard Studless iG50+;165;70;14;81Q;Winter;Light;;4;2,892
Yokohama;Yokohama iceGuard Studless iG50+;175;70;13;82Q;Winter;Light;;4;2,437
Yokohama;Yokohama iceGuard Studless iG50+;175;65;14;82Q;Winter;Light;;4;2,534
Yokohama;Yokohama iceGuard Studless iG50+;185;60;14;82Q;Winter;Light;;4;2,932
Yokohama;Yokohama iceGuard Studless iG50+;185;70;14;88Q;Winter;Light;;4;2,719
Yokohama;Yokohama iceGuard Studless iG50+;185;55;15;82Q;Winter;Light;;4;3,727
Yokohama;Yokohama iceGuard Studless iG50+;185;65;15;88Q;Winter;Light;;4;2,915
Yokohama;Yokohama iceGuard Studless iG50+;195;60;15;88Q;Winter;Light;;4;2,994
Yokohama;Yokohama iceGuard Studless iG50+;205;55;16;91Q;Winter;Light;;4;4,657
Yokohama;Yokohama iceGuard Studless iG50+;205;60;16;92Q;Winter;Light;;4;4,477
Yokohama;Yokohama iceGuard Studless iG50+;205;50;17;93Q;Winter;Light;;4;5,369
Yokohama;Yokohama iceGuard Studless iG50+;215;55;16;93Q;Winter;Light;;4;4,838
Yokohama;Yokohama iceGuard Studless iG50+;215;65;16;98Q;Winter;Light;;4;4,368
Yokohama;Yokohama iceGuard Studless iG50+;215;45;18;89Q;Winter;Light;;4;8,763
Yokohama;Yokohama iceGuard Studless iG50+;215;55;18;95Q;Winter;Light;;4;8,367
Yokohama;Yokohama iceGuard Studless iG50+;225;55;16;99Q;Winter;Light;;4;5,691
Yokohama;Yokohama iceGuard Studless iG50+;225;45;17;91Q;Winter;Light;;4;7,277
Yokohama;Yokohama iceGuard Studless iG50+;225;50;17;94Q;Winter;Light;;4;6,732
Yokohama;Yokohama iceGuard Studless iG50+;225;45;18;91Q;Winter;Light;;4;8,924
Yokohama;Yokohama iceGuard Studless iG50+;225;50;18;95Q;Winter;Light;;4;9,088
Yokohama;Yokohama iceGuard Studless iG50A;245;45;17;95Q;Winter;Light;;4;8,731
Yokohama;Yokohama iceGuard Studless iG50A+;235;45;17;94Q;Winter;Light;;4;7,354
Yokohama;Yokohama iceGuard Studless iG50A+;235;45;18;94Q;Winter;Light;;4;9,094
Yokohama;Yokohama iceGuard Studless iG50A+;235;40;18;95Q;Winter;Light;;4;8,449
Yokohama;Yokohama iceGuard Studless iG50A+;245;45;17;99Q;Winter;Light;;4;9,128
Yokohama;Yokohama iceGuard Studless iG50A+;245;50;18;104Q;Winter;Light;;4;9,584
Yokohama;Yokohama iceGuard Studless iG50A+;245;40;18;93Q;Winter;Light;;4;8,751
Yokohama;Yokohama iceGuard Studless iG50A+;245;45;18;96Q;Winter;Light;;4;9,633
Yokohama;Yokohama iceGuard Studless iG50A+;245;45;19;98Q;Winter;Light;;4;10,419
Yokohama;Yokohama iceGuard Studless iG50A+;255;45;18;99Q;Winter;Light;;4;10,196
Yokohama;Yokohama W.drive V902A;205;60;16;96H;Winter;Light;;4;5,187
Yokohama;Yokohama W.drive V902A;215;55;16;93H;Winter;Light;;4;5,543
Yokohama;Yokohama W.drive V902A;215;60;17;96H;Winter;Light;;4;6,804
Yokohama;Yokohama W.drive V902A;225;70;16;107H;Winter;Light;;4;6,382
Yokohama;Yokohama W.drive V902A;235;60;16;100H;Winter;Light;;4;6,861
Yokohama;Yokohama W.drive V902B;255;60;17;106H;Winter;Light;;4;8,377
Yokohama;Yokohama W.drive V902B;255;50;19;107V;Winter;Light;;4;10,208
Yokohama;Yokohama W.drive V902B;285;65;17;116H;Winter;Light;;4;9,147
Yokohama;Yokohama W.drive V905;245;40;18;97W;Winter;Light;;4;9,387
Yokohama;Yokohama W.drive V905;275;40;20;106V;Winter;Light;;4;10,844
Yokohama;Yokohama W.drive WY01;175;65;14C;90/88T;Winter;Light;;4;4,210
Yokohama;Yokohama W.drive WY01;195;65;16C;104/102T;Winter;Light;;4;4,969
Yokohama;Yokohama W.drive WY01;205;65;15C;102/100T;Winter;Light;;4;4,805
Yokohama;Yokohama W.drive WY01;205;65;16C;107/105T;Winter;Light;;4;5,650
Yokohama;Yokohama W.drive WY01;205;75;16C;110/108R;Winter;Light;;4;5,227
Yokohama;Yokohama W.drive WY01;215;65;16C;109/107T;Winter;Light;;4;5,805
Yokohama;Yokohama W.drive WY01;215;75;16C;116/114R;Winter;Light;;4;6,344");

        $producers = array();

        $s = array(
            'Всесезонная'   => 1,
            'Летняя'        => 2,
            'Зимняя'        => 3,
            'Demiseason'    => 1,
            'Summer'        => 2,
            'Winter'        => 3,
        );

        foreach ($rows as $row) {
            list($producerName,$model,$width,$shape,$diameter,$in,$season,$type,$studding,$count,$price) = explode(';',$row);
            $diameter = (int)preg_replace('/[^0-9\/]/','',str_replace(',0','',$diameter));
            $is = preg_replace('/[^A-Z]/','',$in);
            $in = preg_replace('/[^0-9\/]/','',$in);
            $price = preg_replace('/[^0-9\/]/','',$price);

            $pn = $producerName;
            $producerName = strtolower(trim($producerName));
            $model = strtolower(trim($model));

            if (!in_array($producerName,$producers)) {
                $producers[] = $producerName;
            }
            $producerID = array_search($producerName,$producers)+1;
            echo $producerID;

            $check = WheelsTire::model()->findByAttributes(array(
                'producer' => $producerID,
                'model' => $model,
                'shape' => $shape,
                'width' => $width,
                'diameter' => $diameter
            ));

            if ($check == null) {
                $export = ExportShiny::model()->findByAttributes(array(
                    'model' => trim(str_replace($pn,'',$model));
                ));
                $img = ($export != null) ? "/$export->goods_img" : null;

                $tire = new WheelsTire;
                $tire->setAttributes(array(
                    'width'     => $width,
                    'diameter'  => $diameter,
                    'shape'     => $shape,
                    'season'    => $s[$season],
                    'price'     => $price,
                    //'code'      => $article,
                    'name'      => "$model $width/$shape R$diameter $in$is",
                    'model'     => $model,
                    'speed'     => $is,
                    'studding'  => ($studding == 'Yes') ? 1 : 2,
                    'img'       => $img,
                    'producer'  => $producerID,
                    'raw_price' => $price,
                    'in_index'  => $in,
                    'rest'      => $count
                ));
                $tire->save();
            } else {
                $check->saveAttributes([
                    'price'     => $price,
                    'raw_price' => $price,
                ]);
            }
        }

        foreach ($producers as $index => $name) {
            $producer = new TireProducer;
            $producer->name = $name;
            $producer->save();
        }
    }

    public function actionW()
    {
        ini_set('max_execution_time',0);
        echo '<meta charset="utf-8" />';
        error_reporting(E_ALL);
        $w = Yii::app()->w;
        $opts = new WaterMarkOpts;
        $opts->ratio = 0.45;
        $opts->scale = false;
        $opts->alpha = true;
        $opts->horizontalAlign = WaterMarkOpts::HORIZONTAL_ALIGN_RIGHT;
        $opts->verticalAlign = WaterMarkOpts::VERTICAL_ALIGN_BOTTOM;
        /*$opts->horizontalAlign = WaterMarkOpts::HORIZONTAL_ALIGN_LEFT;
        $opts->verticalAlign = WaterMarkOpts::VERTICAL_ALIGN_TOP;*/
        $opts->x = 100;
        $opts->y = 100;
        $opts->stampType = WaterMarkOpts::STAMP_TYPE_IMAGE;
        $opts->outputFilePath = '/var/www/andrewverner/data/www/wheels.andrewverner.ru/wheels/images/disk/Enkei';
        $opts->sourceFilePath = '/var/www/andrewverner/data/www/wheels.andrewverner.ru/wheels/images/disk/Enkei';
        $opts->outputType = WaterMarkOpts::OUTPUT_TYPE_JPG;
        $opts->stampFilePath = '/var/www/andrewverner/data/www/wheels.andrewverner.ru/wheels/images';

        $path = $opts->sourceFilePath;
        $files = scandir($path);
        foreach ($files as $file) {
            if ($file != '.' && $file != '..' && !file_exists("$path/wtm_$file") && !strstr($file,'wtm_')) {
                list($name,$ext) = explode('.',basename($file));
                echo "$name ".$this->_t($name)."<br />";
                if ($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {
                    $opts->sourceFile = $file;
                    $opts->resultFilePrefix = 'wtm_';

                    list($sourceWidth,$sourceHeight) = getimagesize("$opts->sourceFilePath/$opts->sourceFile");
                    $scale = ceil(ceil(round($sourceWidth/10))/5)*5;

                    if ($scale > 100) $scale = 100;
                    if ($scale < 15) $scale = 15;

                    $opts->stampFile = "wtm_$scale.png";

                    if (!Yii::app()->w->run($opts)) echo print_r(Yii::app()->w->error());
                }
            }
        }
    }

    private function _t($str)
    {
        $str = mb_strtolower($str);
        $a = array(
            'й' => 'i',
            'ц' => 'ts',
            'у' => 'u',
            'к' => 'k',
            'е' => 'e',
            'н' => 'n',
            'г' => 'g',
            'ш' => 'sh',
            'щ' => 'sch',
            'з' => 'z',
            'х' => 'h',
            'ъ' => '',
            'ё' => 'yo',
            'ф' => 'f',
            'ы' => 'y',
            'в' => 'v',
            'а' => 'a',
            'п' => 'p',
            'р' => 'r',
            'о' => 'o',
            'л' => 'l',
            'д' => 'd',
            'ж' => 'j',
            'э' => 'e',
            'я' => 'ya',
            'ч' => 'ch',
            'с' => 's',
            'м' => 'm',
            'и' => 'i',
            'т' => 't',
            'ь' => '',
            'б' => 'b',
            'ю' => 'yu',
            ' ' => '_'
        );
        foreach ($a as $c => $l) {
            str_replace($c,$l,$str);
        }
        return $str;
    }

    public function actionDisk()
    {
        error_reporting(E_ALL);
        echo '<meta charset="utf-8">';

        $rows = explode('
','');

        foreach ($rows as $row) {
            if (count(explode(';',$row)) > 5) {
                list($name,$article,$width,$diameter,$pcd,$pcd2,$et,$dco,$color,$count,$price) = explode(';',$row);
                $m = str_replace('ENKEI ','',$name);
                //$model = preg_replace('/[0-9\/]/','',substr($m,0,3));
                $width = str_replace(',','.',$width);
                $pcd2 = str_replace(',','.',$pcd2);
                $dco = str_replace(',','.',$dco);
                $price = preg_replace('/[^0-9\/]/','',$price);

                $file = "/var/www/andrewverner/data/www/wheels.andrewverner.ru/wheels/images/disk/Enkei/wtm_$m-$color.jpg";
                $img = (file_exists($file)) ? "/images/disk/Enkei/wtm_$m-$color.jpg" : null;
                if (!$img) {
                    $file = "/var/www/andrewverner/data/www/wheels.andrewverner.ru/wheels/images/disk/Enkei/wtm_$m-$color.png";
                    $img = (file_exists($file)) ? "/images/disk/Enkei/wtm_$m-$color.png" : null;
                }

                $disk = new WheelsDisk();
                $disk->setAttributes(array(
                    'width'                     => $width,
                    'diameter'                  => $diameter,
                    'mounting_holes'            => $pcd,
                    'mounting_holes_diameter'   => $pcd2,
                    'outreach'                  => $et,
                    'central_hole_diameter'     => $dco,
                    'name'                      => $name,
                    'price'                     => $price,
                    'article'                   => $article,
                    'color'                     => $color,
                    'producer'                  => 4,
                    'img'                       => $img,
                    'raw_price'                 => $price,
                    'priority'                  => 0,
                    'percent'                   => 0,
                    //'model'                     => $model
                ));
                $disk->save();
            }
        }

    }

    public function actionReplayFix()
    {
        ini_set('max_execution_time',0);
        $models = WheelsDisk::model()->findAllByAttributes(array('producer'=>2));
        foreach ($models as $model) {
            if (!strstr($model->name,"Replay")) {
                $model->name = "Replay $model->name";
                $model->save();
            }
        }
    }

    public function actionYstDisk()
    {
        $xml = simplexml_load_string(file_get_contents("http://www.yst.ru/data/disk_base.xml"));
        foreach ($xml->gd as $disk) {
            if ($disk->price_recommend && in_array($disk->brand,array('ALCASTA','CROSS STREET','NZ','REPLICA','TREBL','X-RACE','YOKATTA','YST')) && trim($disk->foto)) {
                $producer = DiskProducer::model()->findByAttributes(array('name' => $disk->brand));
                if ($producer == null) {
                    $producer = new DiskProducer;
                    $producer->name = $disk->brand;
                    $producer->save();
                }

                $check = WheelsDisk::model()->findByAttributes(array(
                    'width' => $disk->width,
                    'diameter' => $disk->diameter,
                    'mounting_holes' => $disk->bolts_count,
                    'mounting_holes_diameter' => $disk->bolts_spacing,
                    'outreach' => $disk->et,
                    'central_hole_diameter' => $disk->dia,
                    'name' => $disk->model,
                    'color' => $disk->color,
                    'producer' => $producer->id,
                ));

                if (!$check) {
                    $model = new WheelsDisk;

                    $model->setAttributes(array(
                        'width' => $disk->width,
                        'diameter' => $disk->diameter,
                        'mounting_holes' => $disk->bolts_count,
                        'mounting_holes_diameter' => $disk->bolts_spacing,
                        'outreach' => $disk->et,
                        'central_hole_diameter' => $disk->dia,
                        'price' => $disk->price_recommend,
                        'article' => $disk->code,
                        'name' => $disk->model,
                        'color' => $disk->color,
                        'producer' => $producer->id,
                        'model' => '',
                        'img' => str_replace(' ','',trim($disk->foto)),
                        'raw_price' => $disk->price_recommend,
                        'percent' => ($disk->brand == 'REPLICA') ? 5 : null
                    ));
                    $model->save(false);
                }
                else
                    $check->saveAttributes([
                        'price' => $disk->price_recommend,
                        'raw_price' => $disk->price_recommend,
                    ]);
            }
        }
    }

    public function actionYstTire()
    {
        $xml = simplexml_load_string(file_get_contents("http://www.yst.ru/data/tyre_kr_opt.xml"));
        foreach ($xml as $item) {
            $producer = TireProducer::model()->findByAttributes(['name' => strtolower($item->brand)]);
            if ($producer == null) {
                $producer = new TireProducer();
                $producer->name = strtolower($item->brand);
                $producer->save();
            }

            $seasonWord = $item->season;
            if ($seasonWord == 'Зима') $season = WheelsTire::SEASON_WINTER;
            elseif ($seasonWord == 'Лето') $season = WheelsTire::SEASON_SUMMER;
            else $season = WheelsTire::SEASON_ALL;

            $model = WheelsTire::model()->findByAttributes([
                'width' => $item->width,
                'diameter' => $item->diameter,
                'shape' => $item->height,
                'studding' => $xml->thorn,
                'season' => $season,
                'producer' => $producer->id,
            ]);

            if ($model) {
                if ($model->price > (int)$item->price) {
                    $model->price = (int)$item->price;
                    $model->raw_price = (int)$item->price + ceil((int)$item->price*0.1);
                    $model->save();
                }
            } else {
                $model = new WheelsTire();
                $model->width = $item->width;
                $model->diameter = $item->diameter;
                $model->shape = $item->height;
                $model->season = $season;
                $model->price = (int)$item->price;
                $model->raw_price = (int)$item->price + ceil((int)$item->price*0.1);
                $model->name = "$item->model $item->width/$item->height $item->load_index$item->speed_index";
                $model->model = $item->model;
                $model->speed = $item->speed_index;
                $model->studding = $item->thorn;
                $model->producer = $producer->id;
                $model->in_index = $item->load_index;
                $model->rest = 4;
                $model->save(false);
            }
        }
    }

    public function actionYstImgFix()
    {
        $cr = new CDbCriteria;
        $cr->condition = 'producer >= :producer';
        $cr->params = array(':producer' => 17);
        $models = WheelsDisk::model()->findAll($cr);
        foreach ($models as $model) {
            $img = str_replace(' ','',trim($model->img));
            if ($img != $model->img) {
                $model->img = $img;
                $model->save();
            }
            /*if (!file_exists($model->img)) {
                $model->img = null;
            }*/
        }
    }

    public function actionModel()
    {
        $models = WheelsDisk::model()->findAllByAttributes(array('producer'=>20));
        $m = [];
        foreach ($models as $model) {
            $code = $price = preg_replace('/[^A-Z\/]/','',str_replace('CONCEPT','',strtoupper($model->name)));
            if (!in_array($code,$m)) $m[] = $code;
            $model->model = $code;
            $model->save();
        }
        echo '<pre>';
        print_r($m);
        echo '</pre>';
    }

    public function actionImgFix()
    {
        //ini_set('max_execution_time',0);
        $cr = new CDbCriteria();
        $cr->condition = 'img IS NOT NULL';
        $models = WheelsDisk::model()->findAllBySql("SELECT diskid, img FROM wheels_disk WHERE img IS NOT NULL");
        foreach ($models as $model) {
            if (!strstr($model->img,'http')) {
                if (!file_exists("/var/www/andrewverner/data/www/wheels.andrewverner.ru/wheels$model->img")) {
                    $model->img = null;
                    $model->save();
                }
            }
        }
    }

    public function actionImgExFix()
    {
        ini_set('max_execution_time',0);
        $models = WheelsDisk::model()->findAllBySql("SELECT diskid, img FROM wheels_disk WHERE img IS NOT NULL AND producer >= 17");
        foreach ($models as $model) {
            if (strstr($model->img,'http')) {
                if (!file_exists($model->img)) {
                    echo "$model->img<br />";
                    $model->img = null;
                    $model->save(false);
                }
            }
        }
    }

    public function actionEImgFix()
    {
        $models = WheelsDisk::model()->findAllByAttributes(['producer'=>4]);
        foreach ($models as $model) {
            $modelName = str_replace('Диск ENKEI ','',$model->name);
            if (file_exists("/var/www/andrewverner/data/www/wheels.andrewverner.ru/wheels/images/disk/Enkei/wtm_$modelName-$model->color.jpg")) {
                $model->img = "/images/disk/Enkei/wtm_$modelName-$model->color.jpg";
                $model->save(false);
            }
        }
    }

    public function actionPHPInfo()
    {
        phpinfo();
    }

}
