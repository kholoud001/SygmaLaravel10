
<x-app-layout>
    <div class="p-4 md:ml-52   flex gap-2 flex-col">
            <h1 class="font-bold text-3xl">Dossiers</h1>
            <div class="mt-4 bg-white p-4 py-8 rounded-lg">
                <div class="flex flex-row gap-4">
                    <input type="text" placeholder="Search..." class="w-full px-4 py-2 mb-2 border-2 rounded-full border-[#009999]">
                    <input type="text" placeholder="Date..." class="w-42 px-4 py-2 mb-2 border-2 rounded-full border-[#009999]">
                    <i class="fas fa-list bg-[#009999] h-fit px-4 py-2 rounded-full text-white text-xl"></i>
                </div>
                <div class="flex flex-row w-full justify-between">
                    <select name="#" id="#" class="w-48 border-2 rounded-full border-[#009999] outline-none p-2 mb-4">
                        <option value="Testing" disabled selected>Select car...</option>
                    </select>
                    <a href="{{ route('add.dossier') }}" class="text-white bg-[#009999] hover:bg-[#008080] transition-all h-fit rounded-full p-3">
                        <i class="fas fa-plus mr-2"></i>Créer nouveau rapport
                    </a>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    @foreach($dossiers as $dossier)
                    <div class="card card-compact w-full md:w-96 bg-base-100 shadow-xl mb-4">
                        <!-- Etape Title -->
                        <div class="bg-[#009999] p-4 rounded-lg hover:scale-105 transition-all mb-6">
                            <h3 class="text-lg  text-white font-bold ">Etape</h3>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <figure>
                                    @foreach($dossier->dossierParties as $dossierPartie)
                                        <img class="rounded-lg" src="{{ asset( $dossierPartie->damage_image) }}" alt="Damage Image">
                                    @endforeach
                                </figure>
                            </div>
                            <div>

                                <div class="relative h-[300px] mb-24 md:mb-0 md:h-20">
                            <svg class="m-auto w-11/12 md:w-full relative bottom-12" viewBox="200 -400 1500 1800"
                                xmlns="http://www.w3.org/2000/svg" id="car-map">
                                <g id="layer2" transform="matrix(0, 1, -1, 0, 254.000085527972, -254.000194186645)"
                                    style="transform-origin: 555.665px 834.02px;">
                                    <g id="g4113" transform="translate(-13.78 3.524)">
                                        <path class = "carPart" id="path3070"
                                            style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);"
                                            d="M 357.43 1085.43 C 393.14 1062.57 494.57 1006.86 494.57 1006.86 C 536 991.14 634.57 995.43 686 994 C 737.43 992.57 777.248 996.088 818.148 1012.998 C 859.148 1029.928 936.567 1087.874 953.267 1093.074 C 976.067 1100.214 1080.3 1101.14 1118.9 1114 C 1157.4 1126.86 1144.6 1146.86 1144.6 1146.86 L 1114.6 1142.57 L 1108.8 1195.49 C 1108.8 1195.49 1146 1196.86 1150.3 1211.14 C 1154.6 1225.43 1156 1242.57 1147.4 1252.57 C 1138.9 1262.6 1133.1 1251.14 1128.9 1265.4 C 1124.6 1279.7 1126 1294 1101.7 1292.6 C 1077.4 1291.1 1003.1 1292.6 1003.1 1292.6 C 1003.1 1292.6 987.4 1184 904.6 1186.86 C 821.7 1189.71 808.9 1292.6 808.9 1292.6 L 361.599 1292.6"
                                            data-name="Aile arriere gauche" data-severity="0"></path>
                                        <path class = "carPart" id="path3070"
                                            style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);"
                                            d="M 361.599 1292.6 L 308.86 1292.6 C 308.86 1292.6 303.14 1188.29 211.71 1186.86 C 120.29 1185.43 113.14 1292.6 113.14 1292.6 L 47.43 1292.6 L 28.86 1254 C 28.34 1254 2.61 1254 7.43 1236.86 C 12.08 1220.3 3.14 1195.43 24.57 1195.43 C 46 1195.43 71.71 1196.86 71.71 1196.86 L 87.43 1152.57 L 46 1149.71 C 46 1149.71 80.29 1125.43 164.57 1116.86 C 248.86 1108.29 321.71 1108.29 357.43 1085.43 L 361.599 1292.6 Z"
                                            data-name="Aile avant gauche" data-severity="0">
                                            <title>Path</title>
                                        </path>
                                        <path class = "carPart" id="path3900"
                                            style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);"
                                            d="M 886.971 1038.45 L 878.308 983.581 L 873.976 934.969 L 877.826 867.105 L 881.196 845.446 L 886.971 740.039 L 834.99 740.521 L 775.789 746.778 L 752.205 751.109 L 735.841 759.292 L 670.383 797.315 L 599.64 837.66 C 585.56 868.63 581.34 909.45 581.34 931.97 C 581.34 954.49 585.56 1024.944 603.86 1038.944 L 886.971 1038.45 Z"
                                            transform="translate(-254 254)" data-name="Porte avant gauche"
                                            data-severity="0"></path>
                                        <path class = "carPart" id="path3900-6"
                                            d="M 680.781 993.783 L 732.762 994.746 L 779.2 1000.17 C 797.5 1012.84 835.5 1050.84 872.1 1104.33 C 908.7 1157.82 880.5 1163.45 853.8 1178.93 C 827 1194.42 804.5 1221.641 786.2 1291.981 L 632.78 1292.419 C 627.15 1267.119 620.12 1209.9 620.12 1187.4 C 621.29 1151.3 622.6 1118.8 626.27 1100.1 C 628.74 1075 631.38 1000.204 632.78 994.574 L 680.781 993.783 Z"
                                            style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);"
                                            data-name="Porte arriere gauche" data-severity="0"></path>
                                        <path class = "carPart" id="path3884"
                                            style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);"
                                            d="m618.57 847.14c15.72-18.57 123.38-81.52 151.43-88.57 29.5-7.41 103-7.14 103-7.14l-7.14 95.71z"
                                            transform="translate(-254 254)"></path>
                                        <path class = "carPart" id="path3892"
                                            style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);"
                                            d="m898.7 752.84-4.29 94.32h207.19c-11.3-20.75-46.6-74.9-72.9-88.57-14.3-10-82.86-4.33-130-5.75z"
                                            transform="translate(-254 254)"></path>
                                    </g>
                                    <path class = "carPart" class="cursor-pointer" id="parrechocArriere"
                                        style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);"
                                        d="M 1267.042 624.97 C 1267.042 624.97 1336.7 623.56 1336.7 646.09 L 1336.7 1017.7 C 1336.7 1040.2 1264.271 1043 1264.271 1043"
                                        data-name="Pare-choc arriere" data-severity="0"></path>
                                    <g id="g4451" transform="translate(-13.78 15.524)">
                                        <path class = "carPart" id="path4175" style="stroke:#000000;stroke-width:5;fill:none"
                                            d="m736.17 416.79s94.31 5.63 152.02 5.63c106.98 0 201.31-5.63 201.31-5.63m-1.4 297s-77.4-5.63-199.91-5.63c-68.97 0-152.02 7.04-152.02 7.04"
                                            transform="translate(-254 254)"></path>
                                        <path class = "carPart" id="path4135-9"
                                            d="m345.78 632.78h-294.19l-14.076 102.76-7.038 11.26v142.17l7.038 14.07 15.483 101.36h288.55"
                                            style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);"
                                            data-name="Capot" data-severity="0"></path>
                                        <path class = "carPart" class="cursor-pointer" id="malle"
                                            style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);"
                                            d="M 1282.678 961.782 L 1282.677 677.454 L 1214.68 677.456 L 1214.68 961.786 L 1282.678 961.782 Z M 832.7 670.79 C 832.7 670.79 820 718.65 820 743.98 L 820 890.37 C 820 915.71 832.7 967.79 832.7 967.79 L 1038.2 1005.8 L 1146.6 1005.8 C 1146.6 1005.8 1160.6 924.16 1160.6 890.37 L 1160.6 742.58 C 1160.6 704.57 1146.6 632.78 1146.6 632.78 L 1038.2 632.78 L 832.7 670.79 Z"
                                            data-name="Malle" data-severity="0"></path>
                                        <path class = "carPart" id="path4165"
                                            style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);"
                                            d="M 595.41 378.78 L 736.17 416.79 C 736.17 416.79 727.73 466.01 727.73 488.75 L 727.73 636.37 C 727.73 667.34 736.17 715.2 736.17 715.2 L 595.41 748.98 C 595.41 748.98 578.17 687.08 578.17 656.08 C 578.55 622.28 580.28 470.28 580.28 470.28 C 578.87 439.31 595.41 378.78 595.41 378.78 L 595.41 378.78 Z"
                                            transform="translate(-254 254)" data-name="Pare-brise avant"
                                            data-severity="0"></path>
                                        <path class = "carPart" id="path4205"
                                            style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);"
                                            d="m1097.9 435.09s-8.4 40.82-8.4 56.3v144.98c0 19.71 7 57.72 7 57.72s94.3 26.74 123.9 26.74h42.2v-312.49h-47.8c-25.4 0-116.9 26.75-116.9 26.75z"
                                            transform="translate(-254 254)" data-name="Pare-brise arriere"
                                            data-severity="0"></path>
                                    </g>
                                    <path class = "carPart" class="cursor-pointer" onclick="my_modal_4.showModal()" id="front"
                                        style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);"
                                        d="M -74.052 1042.25 L -45.91 1042.1 C -17.754 1042.1 -23.38 1019.6 -23.38 1019.6 L -23.38 923.9 C -36.06 923.9 -34.65 914.29 -34.65 907.01 L -34.65 757.81 C -34.2 738.92 -24.79 740.92 -24.79 740.92 L -23.38 649.42 C -23.38 649.42 -16.855 626.389 -47.821 624.989 C -78.791 623.579 -75.919 624.665 -76.336 624.523 C -76.753 624.38 -144.37 622.97 -144.37 645.49 L -144.37 1017.1 C -144.37 1039.6 -74.052 1042.25 -74.052 1042.25 Z"
                                        data-name="Pare-choc avant" data-severity="0"></path>
                                    <g id="g4428" transform="translate(-13.78 15.524)">
                                        <path class = "carPart" id="path3852-6"
                                            d="M 373.313 355.9 L 308.86 355.9 C 308.86 355.9 303.14 460.19 211.71 461.61 C 120.29 463.04 113.14 355.9 113.14 355.9 L 47.429 355.9 L 28.857 394.47 C 28.342 394.47 2.614 394.47 7.429 411.61 C 12.08 428.18 3.143 453.04 24.571 453.04 C 46 453.04 71.714 451.61 71.714 451.61 L 87.429 495.9 L 46 498.76 C 46 498.76 80.286 523.04 164.57 531.61 C 248.86 540.19 321.71 540.19 357.43 563.04"
                                            style="stroke: rgb(0, 0, 0); stroke-width: 5px; fill: rgb(255, 255, 255);"
                                            data-name="Aile avant droit" data-severity="0"></path>
                                        <path class = "carPart" id="path3852-6"
                                            d="M 373.313 355.9 L 808.86 355.9 C 808.86 355.9 821.71 458.76 904.57 461.61 C 987.43 464.47 1003.1 355.9 1003.1 355.9 C 1003.1 355.9 1077.4 357.33 1101.7 355.9 C 1126 354.47 1124.6 368.76 1128.9 383.04 C 1133.1 397.33 1138.9 385.9 1147.4 395.9 C 1156 405.9 1154.6 423.04 1150.3 437.33 C 1146 451.61 1108.8 452.98 1108.8 452.98 L 1114.6 505.9 L 1144.6 501.61 C 1144.6 501.61 1157.4 521.61 1118.9 534.47 C 1080.3 547.33 975.802 558.017 953.002 565.157 C 936.302 570.357 853.501 620.391 812.511 637.321 C 771.551 654.231 737.43 655.9 686 654.47 C 634.57 653.04 536 657.33 494.57 641.61 C 494.57 641.61 393.14 585.9 357.43 563.04"
                                            style="stroke: rgb(0, 0, 0); stroke-width: 5px; fill: rgb(255, 255, 255);"
                                            data-name="Aile arriere droit" data-severity="0"></path>
                                        <path class = "carPart" id="path3900-4"
                                            d="M 345.64 556.81 C 331.56 525.84 327.34 485.02 327.34 462.5 C 327.34 439.98 331.56 371.01 349.86 356.93 L 635.128 355.533 L 626.117 398.01 L 620.325 451.428 L 622.256 506.133 L 627.405 560.195 L 633.197 655.446 L 570.769 654.802 L 508.984 647.723 L 474.23 632.277 L 345.64 556.81 Z"
                                            style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);"
                                            data-name="Porte avant droite" data-severity="0"></path>
                                        <path class = "carPart" id="path3942-2"
                                            d="M 720.688 654.344 L 632.78 655.34 C 631.38 649.71 628.74 573.44 626.27 548.41 C 622.6 529.69 621.29 497.19 620.12 461.09 C 620.12 438.57 627.15 380.86 632.78 355.52 L 786.21 356.23 C 804.51 426.61 827.03 454.06 853.78 469.54 C 880.52 485.02 908.67 490.65 872.08 544.14 C 835.48 597.63 797.47 635.64 779.17 648.3 L 720.688 654.344 Z"
                                            style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);"
                                            data-name="Porte arriere droite" data-severity="0"></path>
                                        <path class = "carPart" id="path3892-5"
                                            d="m644.7 641.63-4.29-94.32h207.17c-11.31 20.75-46.62 74.9-72.86 88.57-14.29 10-82.88 4.33-130.02 5.75z"
                                            style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);">
                                        </path>
                                        <path class = "carPart" id="path3884-4"
                                            d="m364.57 547.33c15.72 18.57 123.38 81.52 151.43 88.57 29.5 7.41 103 7.14 103 7.14l-7.14-95.71z"
                                            style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);">
                                        </path>
                                    </g>
                                    <path class = "carPart" id="path4361"
                                        style="stroke: rgb(0, 0, 0); stroke-width: 5px; paint-order: stroke; fill: rgb(255, 255, 255);"
                                        d="M -71.88 985.879 L -71.88 948.339 L -49.35 948.339 L -26.83 948.339 L -26.83 985.879 L -26.83 1023.376 L -49.35 1023.376 L -71.88 1023.376 L -71.88 985.879 Z"
                                        data-name="Feu avant gauche" data-severity="0"></path>
                                    <path class = "carPart" id="path4363"
                                        style="stroke-width: 5px; stroke: rgb(0, 0, 0); paint-order: stroke; fill: rgb(255, 255, 255);"
                                        d="M -71.88 681.701 L -71.88 642.757 L -49.35 642.757 L -26.83 642.757 L -26.83 681.701 L -26.83 720.644 L -49.35 720.644 L -71.88 720.644 L -71.88 681.701 Z"
                                        data-name="Feu avant droit" data-severity="0"></path>
                                    <path class = "carPart" id="path4610" style="stroke:#000000;stroke-width:2;fill:#c8c8c8"
                                        d="m195.66 202.84a76.01 76.01 0 1 1 -152.02 0 76.01 76.01 0 1 1 152.02 0z"
                                        transform="translate(78.489 1074.7)"></path>
                                    <path class = "carPart" id="path4612" style="stroke:#000000;stroke-width:2;fill:#ffffff"
                                        d="m147.8 72.633a44.339 44.339 0 1 1 -88.681 0 44.339 44.339 0 1 1 88.681 0z"
                                        transform="translate(94.676 1204.9)"></path>
                                    <path class = "carPart" id="path4610-9"
                                        style="stroke: rgb(0, 0, 0); stroke-width: 2; fill: rgb(200, 200, 200);"
                                        d="m195.66 202.84a76.01 76.01 0 1 1 -152.02 0 76.01 76.01 0 1 1 152.02 0z"
                                        transform="translate(78.489 187.66)"></path>
                                    <path class = "carPart" id="path4612-4" style="stroke:#000000;stroke-width:2;fill:#ffffff"
                                        d="m147.8 72.633a44.339 44.339 0 1 1 -88.681 0 44.339 44.339 0 1 1 88.681 0z"
                                        transform="translate(94.676 317.86)"></path>
                                    <path class = "carPart" id="path4610-5" style="stroke:#000000;stroke-width:2;fill:#c8c8c8"
                                        d="m195.66 202.84a76.01 76.01 0 1 1 -152.02 0 76.01 76.01 0 1 1 152.02 0z"
                                        transform="translate(773.03 187.66)"></path>
                                    <path class = "carPart" id="path4612-1" style="stroke:#000000;stroke-width:2;fill:#ffffff"
                                        d="m147.8 72.633a44.339 44.339 0 1 1 -88.681 0 44.339 44.339 0 1 1 88.681 0z"
                                        transform="translate(789.21 317.86)"></path>
                                    <path class = "carPart" id="path4610-4" style="stroke:#000000;stroke-width:2;fill:#c8c8c8"
                                        d="m195.66 202.84a76.01 76.01 0 1 1 -152.02 0 76.01 76.01 0 1 1 152.02 0z"
                                        transform="translate(773.03 1074.7)"></path>
                                    <path class = "carPart" id="path4612-3" style="stroke:#000000;stroke-width:2;fill:#ffffff"
                                        d="m147.8 72.633a44.339 44.339 0 1 1 -88.681 0 44.339 44.339 0 1 1 88.681 0z"
                                        transform="translate(789.21 1204.9)"></path>
                                    <path class = "carPart" id="path4499"
                                        style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);"
                                        d="M 1199.9 633.86 L 1199.9 707.05 L 1267.5 707.05 L 1267.5 624 L 1242.2 609.93 L 1199.9 633.86 Z"
                                        data-name="Feu arriere droit" data-severity="0"></path>
                                    <path class = "carPart" id="path4501"
                                        style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);"
                                        d="M 1199.9 963.24 L 1267.5 963.24 L 1267.5 1042.1 L 1243.6 1056.1 L 1199.9 1037.8 L 1199.9 963.24 Z"
                                        data-name="Feu arriere gauche" data-severity="0"></path>
                                    <path class = "carPart" id="path-2"
                                        style="stroke-width: 5px; stroke: rgb(0, 0, 0); paint-order: stroke; fill: rgb(255, 255, 255);"
                                        d="M -126.593 832.725 L -126.593 735.712 L -113.949 735.712 L -101.311 735.712 L -101.311 832.725 L -101.311 929.735 L -113.949 929.735 L -126.593 929.735 L -126.593 832.725 Z"
                                        data-name="Plaque immatriculation avant" data-severity="0"></path>
                                    <path class = "carPart" id="path-3"
                                        style="stroke-width: 5px; stroke: rgb(0, 0, 0); paint-order: stroke; fill: rgb(255, 255, 255);"
                                        d="M 1292.264 833.899 L 1292.264 736.886 L 1304.908 736.886 L 1317.546 736.886 L 1317.546 833.899 L 1317.546 930.909 L 1304.908 930.909 L 1292.264 930.909 L 1292.264 833.899 Z"
                                        data-name="Plaque immatriculation arriere" data-severity="0"></path>
                                </g>
                            </svg>
                        </div>
                               
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <h2 class="card-title font-bold">{{ $dossier->modele->name }} - {{ $dossier->modele->marque->name }}</h2>
                            <p><b>Date:</b> {{ Carbon\Carbon::parse($dossier->first_registration)->format('d-m-Y') }} - {{ Carbon\Carbon::parse($dossier->validity_end)->format('d-m-Y') }}</p>
                            <p><b>Registration Number:</b> {{ $dossier->registration_number }}</p>
                            <p><b>Owner:</b> {{ $dossier->owner }}</p>
                            <div class="card-actions justify-end">
                                <a href="#" class="bg-[#009999] p-4 rounded-lg text-white font-bold hover:scale-105 transition-all">
                                    <i class="fas fa-eye mr-2"></i>Afficher les détails
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
</div>

            </div>
    </div>
</x-app-layout>
