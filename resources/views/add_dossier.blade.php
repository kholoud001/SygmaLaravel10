
<x-app-layout>


<!-- Modal -->
<div id="myModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
        <p id="modalText" class="text-lg font-semibold">Processing...</p>
    </div>
</div>

<div class="ml-0 md:ml-52 p-8">
    <h1 class="font-bold text-3xl">Créer nouveau rapport</h1>
    <form id="submit_all"  action="{{ route('dossier.store') }}" method="post" enctype="multipart/form-data">
    @csrf

        <div class="mt-4 bg-white p-4 py-8 rounded-lg">
            <div id="alert-additional-content-5" class="p-4 border border-gray-300 rounded-lg bg-gray-50" role="alert">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <h3 class="text-lg font-medium text-gray-800">Importer carte grise</h3>
                </div>
            <!--Form part 1 Carte grise -->
                <div class="flex flex-row md:flex-no-wrap flex-wrap-reverse md:flex-row justify-between">
                    <div class="mt-2 mb-4 text-sm text-gray-800">
                        Veuillez importer une photo de votre carte grise. Veillez à ce que les informations suivantes soient visibles et correctes:
                        <ul class="mt-1.5 ml-8 list-disc list-inside space-y-2">
                            <li class="font-bold" id="numero">Numéro d'immatriculation: <input type="text" name="data[Machine][num_imma]" class="border rounded-lg border-black p-1 font-normal"></li>
                            <li class="font-bold" id="immat">Immatriculation antérieure: <input type="text" name="data[Machine][num_imma_ante]" class="border rounded-lg border-black p-1 font-normal"></li>
                            <li class="font-bold" id="premiere">Première mise en circulation: <input type="text" name="data[Machine][date_mc]" class="border rounded-lg border-black p-1 font-normal"></li>
                            <li class="font-bold" id="mc">M.C. au Maroc: <input type="text" name="data[Machine][date_mc_maroc]" class="border rounded-lg border-black p-1 font-normal"></li>
                            <li class="font-bold" id="usage">Usage: <input type="text" name="data[Machine][v_usage]" class="border rounded-lg border-black p-1 font-normal"></li>
                            <li class="font-bold" id="proper">Propriétaire: <input type="text" name="data[Machine][name]" class="border rounded-lg border-black p-1 font-normal"></li>
                            <li class="font-bold" id="address">Adresse: <input type="text" name="data[Machine][adresse]" class="border rounded-lg border-black p-1 font-normal"></li>
                            <li class="font-bold" id="fin">Fin de validité: <input type="text" name="data[Machine][fin_valide]" class="border rounded-lg border-black p-1 font-normal"></li>
                        </ul>
                        <ul class="mt-8 ml-8 list-disc list-inside space-y-2">
                            <li class="font-bold" id="marque">Marque: <input type="text" name="data[Machine][marque]" class="border rounded-lg border-black p-1 font-normal"></li>
                            <li class="font-bold" id="type">Type: <input type="text" name="data[Machine][type]" class="border rounded-lg border-black p-1 font-normal"></li>
                            <li class="font-bold" id="genre">Genre: <input type="text" name="data[Machine][genre]" class="border rounded-lg border-black p-1 font-normal"></li>
                            <li class="font-bold" id="modele">Modèle: <input type="text" name="data[Machine][modele]" class="border rounded-lg border-black p-1 font-normal"></li>
                            <li class="font-bold" id="carburant">Type carburant: <input type="text" name="data[Machine][type_carburant]" class="border rounded-lg border-black p-1 font-normal"></li>
                            <li class="font-bold" id="chassis">N° de châssis: <input type="text" name="data[Machine][n_chassis]" class="border rounded-lg border-black p-1 font-normal"></li>
                            <li class="font-bold" id="cylindre">Nombre de cylindres: <input type="text" name="data[Machine][n_cylindres]" class="border rounded-lg border-black p-1 font-normal"></li>
                            <li class="font-bold" id="fiscale">Puissance fiscale: <input type="text" name="data[Machine][puissance]" class="border rounded-lg border-black p-1 font-normal"></li>
                        </ul>
                    </div>
                    <div class="flex flex-row md:flex-col gap-4 items-center">
                        <div class="flex flex-col">
                            <label for="frontCard" class="cursor-pointer hover:bg-white transition-all flex flex-col justify-center items-center w-fit h-40 md:w-[302px] md:h-[204px] border-dashed border-2 rounded-lg bg-gray-200 border-gray-300">
                                <i class="text-gray-400 text-3xl fas fa-upload"></i>
                                <p class="text-center text-gray-400">Cliquez ici pour importer le recto de votre carte grise</p>
                                <input id="frontCard" type="file" class="hidden" name="data[Machine][cartrecto]" />
                            </label>
                        </div>
                        <div class="flex flex-col">
                            <label for="backCard" class="cursor-pointer hover:bg-white flex flex-col justify-center items-center w-fit h-40 md:w-[302px] md:h-[204px] border-dashed border-2 rounded-lg bg-gray-200 border-gray-300">
                                <i class="text-gray-400 text-3xl fas fa-upload"></i>
                                <p class="text-center text-gray-400">Cliquez ici pour importer le verso de votre carte grise</p>
                                <input id="backCard" type="file" class="hidden" name="data[Machine][cartverso]"  />
                            </label>
                        </div>
                        <button id="submitBtn" class="mt-4 p-2 bg-blue-500 text-white rounded">Envoyer Photos</button>

                    </div>

                </div>

            </div>
        </div>

        <!--form part 2 Dommages -->

        <div class="bg-white px-4 pb-4">
            <div id="alert-additional-content-5" class="p-4 border border-gray-300 rounded-lg bg-gray-50" role="alert">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Information</span>
                    <h3 class="text-lg font-medium text-gray-800">Dommages</h3>
                </div>
                <div class="flex flex-row justify-between">
                    <div class="mt-2 mb-4 text-sm text-gray-800 h-fit">
                        Sélectionnez différentes parties de la voiture dans le schéma suivant, puis insérez une photo de la partie endommagée (s'il y en a une) et sélectionnez la gravité des dommages. Une fois que vous avez ajouté les informations relatives à la carte grise et aux dommages subis par la voiture, cliquez sur le bouton « Soumettre ».
                        <div class="flex w-full justify-between">
                            <div id="gridDiv" class="grid grid-cols-5 gap-4 h-fit mt-2">

                            </div>
                            <svg class="block w-1/3" viewBox="280 -280 1100 1800" xmlns="http://www.w3.org/2000/svg" id="car-map">
                                <g id="layer2" transform="matrix(0, 1, -1, 0, 254.000085527972, -254.000194186645)" style="transform-origin: 555.665px 834.02px;">
                                    <g id="g4113" transform="translate(-13.78 3.524)">
                                        <path class="mapPath" data-bg="https://www.aureliacar.com/Files/29327/Img/09/FT02146-SX-Aile-arriere-gauche-FIAT-500-phase-1--2007-2015--Neuve-a-peindre_1x800.jpg" data-name="Aile arriere gauche" data-id="path3070" style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);" d="M 357.43 1085.43 C 393.14 1062.57 494.57 1006.86 494.57 1006.86 C 536 991.14 634.57 995.43 686 994 C 737.43 992.57 777.248 996.088 818.148 1012.998 C 859.148 1029.928 936.567 1087.874 953.267 1093.074 C 976.067 1100.214 1080.3 1101.14 1118.9 1114 C 1157.4 1126.86 1144.6 1146.86 1144.6 1146.86 L 1114.6 1142.57 L 1108.8 1195.49 C 1108.8 1195.49 1146 1196.86 1150.3 1211.14 C 1154.6 1225.43 1156 1242.57 1147.4 1252.57 C 1138.9 1262.6 1133.1 1251.14 1128.9 1265.4 C 1124.6 1279.7 1126 1294 1101.7 1292.6 C 1077.4 1291.1 1003.1 1292.6 1003.1 1292.6 C 1003.1 1292.6 987.4 1184 904.6 1186.86 C 821.7 1189.71 808.9 1292.6 808.9 1292.6 L 361.599 1292.6" data-name="Aile arriere gauche" data-severity="0"></path>
                                        <path class="mapPath" data-bg="https://www.pieces-auto-moins-cher.fr/1111465/aile-avant-gauche-clio-0419.jpg" data-name="Aile avant gauche" data-id="path30701" style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);" d="M 361.599 1292.6 L 308.86 1292.6 C 308.86 1292.6 303.14 1188.29 211.71 1186.86 C 120.29 1185.43 113.14 1292.6 113.14 1292.6 L 47.43 1292.6 L 28.86 1254 C 28.34 1254 2.61 1254 7.43 1236.86 C 12.08 1220.3 3.14 1195.43 24.57 1195.43 C 46 1195.43 71.71 1196.86 71.71 1196.86 L 87.43 1152.57 L 46 1149.71 C 46 1149.71 80.29 1125.43 164.57 1116.86 C 248.86 1108.29 321.71 1108.29 357.43 1085.43 L 361.599 1292.6 Z" data-name="Aile avant gauche" data-severity="0">
                                            <title>Path</title>
                                        </path>
                                        <path class="mapPath" data-bg="https://salmia.ma/wp-content/uploads/2023/02/Porte-avant-gauche-PEUGEOT-3008.jpg" data-name="Porte avant gauche" data-id="path3900" style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);" d="M 886.971 1038.45 L 878.308 983.581 L 873.976 934.969 L 877.826 867.105 L 881.196 845.446 L 886.971 740.039 L 834.99 740.521 L 775.789 746.778 L 752.205 751.109 L 735.841 759.292 L 670.383 797.315 L 599.64 837.66 C 585.56 868.63 581.34 909.45 581.34 931.97 C 581.34 954.49 585.56 1024.944 603.86 1038.944 L 886.971 1038.45 Z" transform="translate(-254 254)" data-name="Porte avant gauche" data-severity="0"></path>
                                        <path class="mapPath" data-bg="https://salmia.ma/wp-content/uploads/2023/02/Porte-arriere-gauche-Peugeot-5008.jpg" data-name="Porte arriere gauche" data-id="path39006" d="M 680.781 993.783 L 732.762 994.746 L 779.2 1000.17 C 797.5 1012.84 835.5 1050.84 872.1 1104.33 C 908.7 1157.82 880.5 1163.45 853.8 1178.93 C 827 1194.42 804.5 1221.641 786.2 1291.981 L 632.78 1292.419 C 627.15 1267.119 620.12 1209.9 620.12 1187.4 C 621.29 1151.3 622.6 1118.8 626.27 1100.1 C 628.74 1075 631.38 1000.204 632.78 994.574 L 680.781 993.783 Z" style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);" data-name="Porte arriere gauche" data-severity="0"></path>
                                        <path class="mapPath" data-name="" data-id="path3884" style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);" d="m618.57 847.14c15.72-18.57 123.38-81.52 151.43-88.57 29.5-7.41 103-7.14 103-7.14l-7.14 95.71z" transform="translate(-254 254)"></path>
                                        <path class="mapPath" data-name="" data-id="path3892" style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);" d="m898.7 752.84-4.29 94.32h207.19c-11.3-20.75-46.6-74.9-72.9-88.57-14.3-10-82.86-4.33-130-5.75z" transform="translate(-254 254)"></path>
                                    </g>
                                    <path class="mapPath" data-bg="https://salmia.ma/wp-content/uploads/2023/02/Pare-choc-arriere-DS-DS3-PHASE-2-doccasion.jpeg" data-name="Pare-choc arriere" data-id="path43810" style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);" d="M 1267.042 624.97 C 1267.042 624.97 1336.7 623.56 1336.7 646.09 L 1336.7 1017.7 C 1336.7 1040.2 1264.271 1043 1264.271 1043" data-name="Pare-choc arriere" data-severity="2"></path>
                                    <g id="g4451" transform="translate(-13.78 15.524)">
                                        <path class="mapPath" data-bg="https://www.piece-carrosserie-discount.com/image/pare-chocs-183428.jpg" data-name="Pare-choc avant" data-id="path4175" style="stroke:#000000;stroke-width:5;fill:none" d="m736.17 416.79s94.31 5.63 152.02 5.63c106.98 0 201.31-5.63 201.31-5.63m-1.4 297s-77.4-5.63-199.91-5.63c-68.97 0-152.02 7.04-152.02 7.04" transform="translate(-254 254)"></path>
                                        <path class="mapPath" data-bg="https://www.piece-carrosserie-discount.com/image/capot-moteur-183402.png" data-name="Capot" data-id="path41359" d="m345.78 632.78h-294.19l-14.076 102.76-7.038 11.26v142.17l7.038 14.07 15.483 101.36h288.55" style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);" data-name="Capot" data-severity="0"></path>
                                        <path class="mapPath" data-bg="https://fs.opisto.fr/Pictures/4672/2024_3/84616834-48726a0b5100799397a26b05e50c561ec9b497f31927b46991d42e2bdac21195.jpg" data-name="Malle" data-id="path15" style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);" d="M 1282.678 961.782 L 1282.677 677.454 L 1214.68 677.456 L 1214.68 961.786 L 1282.678 961.782 Z M 832.7 670.79 C 832.7 670.79 820 718.65 820 743.98 L 820 890.37 C 820 915.71 832.7 967.79 832.7 967.79 L 1038.2 1005.8 L 1146.6 1005.8 C 1146.6 1005.8 1160.6 924.16 1160.6 890.37 L 1160.6 742.58 C 1160.6 704.57 1146.6 632.78 1146.6 632.78 L 1038.2 632.78 L 832.7 670.79 Z" data-name="Malle" data-severity="2"></path>
                                        <path class="mapPath" data-bg="https://voiture.kidioui.fr/image/lexique/pare-brise-athermique.jpg" data-name="Pare-brise avant" data-id="path4165" style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);" d="M 595.41 378.78 L 736.17 416.79 C 736.17 416.79 727.73 466.01 727.73 488.75 L 727.73 636.37 C 727.73 667.34 736.17 715.2 736.17 715.2 L 595.41 748.98 C 595.41 748.98 578.17 687.08 578.17 656.08 C 578.55 622.28 580.28 470.28 580.28 470.28 C 578.87 439.31 595.41 378.78 595.41 378.78 L 595.41 378.78 Z" transform="translate(-254 254)" data-name="Pare-brise avant" data-severity="0"></path>
                                        <path class="mapPath" data-bg="https://assets-global.website-files.com/6413856d54d41b5f298d5953/64d63826f8cdfc369418fed1_lunette-arriere-automobile.jpeg" data-name="Pare-brise arriere" data-id="path4205" style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);" d="m1097.9 435.09s-8.4 40.82-8.4 56.3v144.98c0 19.71 7 57.72 7 57.72s94.3 26.74 123.9 26.74h42.2v-312.49h-47.8c-25.4 0-116.9 26.75-116.9 26.75z" transform="translate(-254 254)" data-name="Pare-brise arriere" data-severity="0"></path>
                                    </g>
                                    <path class="mapPath" data-bg="https://www.piece-carrosserie-discount.com/image/pare-chocs-183428.jpg" data-name="Pare-choc avant" data-id="path4245" style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);" d="M -74.052 1042.25 L -45.91 1042.1 C -17.754 1042.1 -23.38 1019.6 -23.38 1019.6 L -23.38 923.9 C -36.06 923.9 -34.65 914.29 -34.65 907.01 L -34.65 757.81 C -34.2 738.92 -24.79 740.92 -24.79 740.92 L -23.38 649.42 C -23.38 649.42 -16.855 626.389 -47.821 624.989 C -78.791 623.579 -75.919 624.665 -76.336 624.523 C -76.753 624.38 -144.37 622.97 -144.37 645.49 L -144.37 1017.1 C -144.37 1039.6 -74.052 1042.25 -74.052 1042.25 Z" data-name="Pare-choc avant" data-severity="0"></path>
                                    <g id="g4428" transform="translate(-13.78 15.524)">
                                        <path class="mapPath" data-bg="https://www.piece-carrosserie-discount.com/image/pare-chocs-183428.jpg" data-name="Aile avant droit" data-id="path38526" d="M 373.313 355.9 L 308.86 355.9 C 308.86 355.9 303.14 460.19 211.71 461.61 C 120.29 463.04 113.14 355.9 113.14 355.9 L 47.429 355.9 L 28.857 394.47 C 28.342 394.47 2.614 394.47 7.429 411.61 C 12.08 428.18 3.143 453.04 24.571 453.04 C 46 453.04 71.714 451.61 71.714 451.61 L 87.429 495.9 L 46 498.76 C 46 498.76 80.286 523.04 164.57 531.61 C 248.86 540.19 321.71 540.19 357.43 563.04" style="stroke: rgb(0, 0, 0); stroke-width: 5px; fill: rgb(255, 255, 255);" data-name="Aile avant droit" data-severity="0"></path>
                                        <path class="mapPath" data-bg="https://www.piecesvoiturettes.fr/1761-large_default/friendly-url-autogeneration-failed.jpg" data-name="Aile arriere droit" data-id="path385267" d="M 373.313 355.9 L 808.86 355.9 C 808.86 355.9 821.71 458.76 904.57 461.61 C 987.43 464.47 1003.1 355.9 1003.1 355.9 C 1003.1 355.9 1077.4 357.33 1101.7 355.9 C 1126 354.47 1124.6 368.76 1128.9 383.04 C 1133.1 397.33 1138.9 385.9 1147.4 395.9 C 1156 405.9 1154.6 423.04 1150.3 437.33 C 1146 451.61 1108.8 452.98 1108.8 452.98 L 1114.6 505.9 L 1144.6 501.61 C 1144.6 501.61 1157.4 521.61 1118.9 534.47 C 1080.3 547.33 975.802 558.017 953.002 565.157 C 936.302 570.357 853.501 620.391 812.511 637.321 C 771.551 654.231 737.43 655.9 686 654.47 C 634.57 653.04 536 657.33 494.57 641.61 C 494.57 641.61 393.14 585.9 357.43 563.04" style="stroke: rgb(0, 0, 0); stroke-width: 5px; fill: rgb(255, 255, 255);" data-name="Aile arriere droit" data-severity="0"></path>
                                        <path class="mapPath" data-bg="https://fs.opisto.fr/Pictures/4481/2023_1/Piece-Porte-avant-droit-801001895R-DACIA-LOGAN-1-PHASE-1-deab956cb50582ae623aece05c3df1d4929bb97179869cebfb401fe22e570376_mtn.jpg" data-name="Porte avant droite" data-id="path39004" d="M 345.64 556.81 C 331.56 525.84 327.34 485.02 327.34 462.5 C 327.34 439.98 331.56 371.01 349.86 356.93 L 635.128 355.533 L 626.117 398.01 L 620.325 451.428 L 622.256 506.133 L 627.405 560.195 L 633.197 655.446 L 570.769 654.802 L 508.984 647.723 L 474.23 632.277 L 345.64 556.81 Z" style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);" data-name="Porte avant droite" data-severity="0"></path>
                                        <path class="mapPath" data-bg="https://fs.opisto.fr/Pictures/4481/2023_1/Piece-Porte-avant-droit-801001895R-DACIA-LOGAN-1-PHASE-1-deab956cb50582ae623aece05c3df1d4929bb97179869cebfb401fe22e570376_mtn.jpg" data-name="Porte arriere droite" data-id="path39422" d="M 720.688 654.344 L 632.78 655.34 C 631.38 649.71 628.74 573.44 626.27 548.41 C 622.6 529.69 621.29 497.19 620.12 461.09 C 620.12 438.57 627.15 380.86 632.78 355.52 L 786.21 356.23 C 804.51 426.61 827.03 454.06 853.78 469.54 C 880.52 485.02 908.67 490.65 872.08 544.14 C 835.48 597.63 797.47 635.64 779.17 648.3 L 720.688 654.344 Z" style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);" data-name="Porte arriere droite" data-severity="0"></path>
                                        <path class="mapPath" data-name="" data-id="path38965" d="m644.7 641.63-4.29-94.32h207.17c-11.31 20.75-46.62 74.9-72.86 88.57-14.29 10-82.88 4.33-130.02 5.75z" style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);"></path>
                                        <path class="mapPath" data-name="" data-id="path38844" d="m364.57 547.33c15.72 18.57 123.38 81.52 151.43 88.57 29.5 7.41 103 7.14 103 7.14l-7.14-95.71z" style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);"></path>
                                    </g>
                                    <path class="mapPath" data-bg="https://fs.opisto.fr/Pictures/4481/2023_1/Piece-Porte-avant-droit-801001895R-DACIA-LOGAN-1-PHASE-1-deab956cb50582ae623aece05c3df1d4929bb97179869cebfb401fe22e570376_mtn.jpg" data-name="Feu avant gauche" data-id="path4361" style="stroke: rgb(0, 0, 0); stroke-width: 5px; paint-order: stroke; fill: rgb(255, 255, 255);" d="M -71.88 985.879 L -71.88 948.339 L -49.35 948.339 L -26.83 948.339 L -26.83 985.879 L -26.83 1023.376 L -49.35 1023.376 L -71.88 1023.376 L -71.88 985.879 Z" data-name="Feu avant gauche" data-severity="0"></path>
                                    <path class="mapPath" data-bg="https://www.piece-carrosserie-discount.com/image/10533-183437.jpg" data-name="Feu avant droit" data-id="path4363" style="stroke-width: 5px; stroke: rgb(0, 0, 0); paint-order: stroke; fill: rgb(255, 255, 255);" d="M -71.88 681.701 L -71.88 642.757 L -49.35 642.757 L -26.83 642.757 L -26.83 681.701 L -26.83 720.644 L -49.35 720.644 L -71.88 720.644 L -71.88 681.701 Z" data-name="Feu avant droit" data-severity="0"></path>
                                    <path class="mapPath" data-name="" data-id="path4610" style="stroke:#000000;stroke-width:2;fill:#c8c8c8" d="m195.66 202.84a76.01 76.01 0 1 1 -152.02 0 76.01 76.01 0 1 1 152.02 0z" transform="translate(78.489 1074.7)"></path>
                                    <path class="mapPath" data-name="" data-id="path4612" style="stroke:#000000;stroke-width:2;fill:#ffffff" d="m147.8 72.633a44.339 44.339 0 1 1 -88.681 0 44.339 44.339 0 1 1 88.681 0z" transform="translate(94.676 1204.9)"></path>
                                    <path class="mapPath" data-name="" data-id="path46109" style="stroke: rgb(0, 0, 0); stroke-width: 2; fill: rgb(200, 200, 200);" d="m195.66 202.84a76.01 76.01 0 1 1 -152.02 0 76.01 76.01 0 1 1 152.02 0z" transform="translate(78.489 187.66)"></path>
                                    <path class="mapPath" data-name="" data-id="path46124" style="stroke:#000000;stroke-width:2;fill:#ffffff" d="m147.8 72.633a44.339 44.339 0 1 1 -88.681 0 44.339 44.339 0 1 1 88.681 0z" transform="translate(94.676 317.86)"></path>
                                    <path class="mapPath" data-name="" data-id="path46105" style="stroke:#000000;stroke-width:2;fill:#c8c8c8" d="m195.66 202.84a76.01 76.01 0 1 1 -152.02 0 76.01 76.01 0 1 1 152.02 0z" transform="translate(773.03 187.66)"></path>
                                    <path class="mapPath" data-name="" data-id="path46121" style="stroke:#000000;stroke-width:2;fill:#ffffff" d="m147.8 72.633a44.339 44.339 0 1 1 -88.681 0 44.339 44.339 0 1 1 88.681 0z" transform="translate(789.21 317.86)"></path>
                                    <path class="mapPath" data-name="" data-id="path46104" style="stroke:#000000;stroke-width:2;fill:#c8c8c8" d="m195.66 202.84a76.01 76.01 0 1 1 -152.02 0 76.01 76.01 0 1 1 152.02 0z" transform="translate(773.03 1074.7)"></path>
                                    <path class="mapPath" data-name="" data-id="path46123" style="stroke:#000000;stroke-width:2;fill:#ffffff" d="m147.8 72.633a44.339 44.339 0 1 1 -88.681 0 44.339 44.339 0 1 1 88.681 0z" transform="translate(789.21 1204.9)"></path>
                                    <path class="mapPath" data-bg="https://www.vignal-group.com/media/cache/Catalogue%20Product%20Pictures/Signalisation/Feuxarriere/1/5/154210_web.jpg" data-name="Feu arriere droit" data-id="path4499" style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);" d="M 1199.9 633.86 L 1199.9 707.05 L 1267.5 707.05 L 1267.5 624 L 1242.2 609.93 L 1199.9 633.86 Z" data-name="Feu arriere droit" data-severity="0"></path>
                                    <path class="mapPath" data-bg="https://www.vignal-group.com/media/cache/Catalogue%20Product%20Pictures/Signalisation/Feuxarriere/1/5/152200_web.jpg" data-name="Feu arriere gauche" data-id="path4501" style="stroke: rgb(0, 0, 0); stroke-width: 5; fill: rgb(255, 255, 255);" d="M 1199.9 963.24 L 1267.5 963.24 L 1267.5 1042.1 L 1243.6 1056.1 L 1199.9 1037.8 L 1199.9 963.24 Z" data-name="Feu arriere gauche" data-severity="0"></path>
                                    <path class="mapPath" data-bg="https://maroctl.com/wp-content/uploads/2021/01/plaques-immatriculation-min.jpg" data-name="Plaque immatriculation avant" data-id="path28" style="stroke-width: 5px; stroke: rgb(0, 0, 0); paint-order: stroke; fill: rgb(255, 255, 255);" d="M -126.593 832.725 L -126.593 735.712 L -113.949 735.712 L -101.311 735.712 L -101.311 832.725 L -101.311 929.735 L -113.949 929.735 L -126.593 929.735 L -126.593 832.725 Z" data-name="Plaque immatriculation avant" data-severity="0"></path>
                                    <path class="mapPath" data-bg="https://www.feuvert.be/articles/wp-content/uploads/2021/04/Article-Modifications-legislations-Feu-VERT-2021-plaque-immatriculation-2002.png" data-name="Plaque immatriculation arriere" data-id="path37" style="stroke-width: 5px; stroke: rgb(0, 0, 0); paint-order: stroke; fill: rgb(255, 255, 255);" d="M 1292.264 833.899 L 1292.264 736.886 L 1304.908 736.886 L 1317.546 736.886 L 1317.546 833.899 L 1317.546 930.909 L 1304.908 930.909 L 1292.264 930.909 L 1292.264 833.899 Z" data-name="Plaque immatriculation arriere" data-severity="0"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div id="added_data">
        </div>
                        -->
    </form>

    <button form="submit_all" type="submit" class="mt-4 p-2 bg-blue-500 text-white rounded w-full">Ajouter Dossier</button>


</div>




<script>
    /// damage severity 

    document.addEventListener('DOMContentLoaded', () => {
        const existingImageDivs = {};

        document.querySelectorAll('.mapPath').forEach(mapPath => {

            const dataId = mapPath.getAttribute('data-id');
            const modal = document.createElement('div');
            const dataBg = mapPath.getAttribute('data-bg');
            const dataName = mapPath.getAttribute('data-name');
            const dataIdName = mapPath.getAttribute('data-id-name');

            //create inputs
            const input1 = document.createElement('input');
            const input2 = document.createElement('input');
            const input3 = document.createElement('input');

            // //fill inputs 
            input1.setAttribute('name', `${dataIdName}_report`);
            input2.setAttribute('name', `${dataIdName}_damage`);
            input3.setAttribute('name', `${dataIdName}_damage-picture`);
            input3.setAttribute('type', 'file');

            
            input1.classList.add('hidden');
            input2.classList.add('hidden');
            input3.classList.add('hidden');

                    
            document.getElementById('submit_all').appendChild(input1);
            document.getElementById('submit_all').appendChild(input2);
            document.getElementById('submit_all').appendChild(input3);


            if (dataName != '') {
                mapPath.classList.add('hover:brightness-75', 'transition-all');
            }

            let tooltip = tippy(mapPath);
            if (dataName != '') {

                tooltip.setProps({
                    followCursor: true,
                });
                tooltip.setContent(dataName + ' - 0')
            } else {
                tooltip.destroy();
            }

            modal.className = 'modal';
            modal.innerHTML = `
                    <dialog id="modal_${dataId}" class="modal">
                    <div class="modal-box w-11/12 max-w-3xl">
                        <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2 waves-effect -top-1 float-right">✕</button>
                        </form>
                        <h3 class="font-bold text-xl">Configure car part <b class = "lowercase font-bold">${dataName}</b></h3>
                        <p class = "my-2 font-bold text-lg">Select car severity</p>
                        <div class = "flex flex-col gap-2">
                            <div class = "flex flex-row gap-4 items-center">
                                <input type="radio" id="frottement" data-severity='1' name="severity_${dataId}" value="107 114 128" data-value="Rien" class = "peer/rien" checked />
                                <div class = "bg-gray-500 w-8 h-8"></div>   
                                <p>Pas de dommage</p> 
                            </div>
                            <div class = "flex flex-row gap-4 items-center">
                                <input type="radio" id="frottement" data-severity='1' name="severity_${dataId}" value="252 206 51" data-value="Frottement ou léger défaut d'aspect" class = "peer/frottement"  />
                                <div class = "bg-yellow-500 w-8 h-8"></div>   
                                <p>Frottement ou léger défaut d'aspect</p> 
                            </div>
                            <div class = "flex flex-row gap-4 items-center">
                                <input type="radio" id="reparation" data-severity='2' name="severity_${dataId}" value="179 213 232" data-value="Réparation rapide" class = "peer/reparation"  />
                                <div class = "bg-cyan-500 w-8 h-8"></div>   
                                <p>Réparation rapide</p> 
                            </div>
                            <div class = "flex flex-row gap-4 items-center">
                                <input type="radio" id="peinture" data-severity='3' name="severity_${dataId}" value="4 153 253" data-value="Peinture" class = "peer/peinture"  />
                                <div class = "bg-blue-500 w-8 h-8"></div>   
                                <p>Peinture</p> 
                            </div>
                            <div class = "flex flex-row gap-4 items-center">
                                <input type="radio" id="tolerie" data-severity='4' name="severity_${dataId}" value="252 2 4" data-value="Tolerie peinture" class = "peer/tolerie"  />
                                <div class = "bg-red-500 w-8 h-8"></div>   
                                <p>Tolerie peinture</p> 
                            </div>
                            <div class = "flex flex-row gap-4 items-center">
                                <input type="radio" id="remplacement" data-severity='5' name="severity_${dataId}" value="0 0 0" data-value="Remplacement" class = "peer/remplacement"  />
                                <div class = "bg-black w-8 h-8"></div>   
                                <p>Remplacement</p> 
                            </div>
                        </div>
                        <p class = "mt-4 mb-2 font-bold text-lg">Upload picture of the part</p>
                        <div class = "flex flex-row justify-center items-center mt-4">
                            <div class = "flex flex-col">
                                <label for = "frontCard_${dataId}" class = "bg-[url(${dataBg})] cursor-pointer hover:bg-white transition-all flex flex-col justify-center items-center w-[402px] h-[204px] border-dashed border-2 rounded-lg bg-cover border-gray-300 brightness-75 hover:brightness-50 transition-all">
                                    <input class = "frontCardID hidden" id="frontCard_${dataId}" type="file" />
                                </label>
                            </div>
                        </div>
                        <form class = "w-full flex justify-end" method="dialog">
                        <button type="submit" id="submit_${dataId}" data-id="${dataId}" data-name="${dataName}" class="bg-green-500 p-2 rounded-lg text-white "onclick="assemble_data(event)">Submit</button>
                        </form>
                    </div>
                    </dialog>`;

            //document.body.appendChild(modal);
            document.getElementById('submit_all').appendChild(modal);


            mapPath.setAttribute("onclick", `modal_${dataId}.showModal()`);

            document.getElementById(`submit_${dataId}`).addEventListener('click', () => {
                const severity = document.querySelector(`input[name="severity_${dataId}"]:checked`).value;
                console.log("severity is : ", severity);

                const severityNum = document.querySelector(`input[name="severity_${dataId}"]:checked`).getAttribute('data-severity');
                console.log("severity number is : ", severityNum);

                const fileInput = document.getElementById(`frontCard_${dataId}`);
                const file = fileInput.files[0];
                const reader = new FileReader();

                reader.onload = (e) => {
                    const imageUrl = e.target.result;

                    let imageDiv;
                    if (existingImageDivs[dataId]) {
                        imageDiv = existingImageDivs[dataId];
                    } else {
                        imageDiv = document.createElement('div');
                        existingImageDivs[dataId] = imageDiv;
                        document.getElementById('gridDiv').appendChild(imageDiv);
                    }

                    imageDiv.style.backgroundImage = `url(${imageUrl})`;
                    imageDiv.style.width = '125px';
                    imageDiv.style.height = '125px';
                    imageDiv.style.backgroundSize = 'cover';
                    imageDiv.style.border = '2px solid ' + 'rgb(' + severity + ')';
                    imageDiv.className = 'hover:scale-105 transition-all';
                    imageDiv.innerHTML = `
                    <div class = "group w-full h-full relative flex items-center justify-center relative">
                        <button class = "buttonDelete${dataId} absolute top-0 right-0 text-white px-2 py-1 z-50 m-1 rounded-full bg-red-500 group-hover:opacity-100 opacity-0 transition-all">✕</button>
                        <p onclick = "imageDivModal${dataId}.showModal()" class = "text-white font-bold text-lg group-hover:opacity-100 opacity-0 transition-all z-50">Enlarge</p>
                        <div onclick = "imageDivModal${dataId}.showModal()" class = "w-full h-full transition-all bg-black bg-opacity-0 absolute group-hover:bg-opacity-50"></div>
                    </div>`;

                    const imageDivModal = document.createElement('div');
                    imageDivModal.innerHTML = `
                <dialog id="imageDivModal${dataId}" class="modal">
                    <div class="modal-box">
                        <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2 waves-effect -top-1 float-right">✕</button>
                        </form>
                        <h3 class="text-lg font-medium text-gray-800">Picture of <b class = "lowercase">${dataName}</b></h3>
                        <img class = "mt-4" src = "${imageUrl}">
                    </div>
                </dialog>
                `;

                    document.getElementById('gridDiv').appendChild(imageDiv);
                    imageDiv.appendChild(imageDivModal);
                   // console.log("severity is : ", severity);
                    mapPath.style.fill = 'rgb(' + severity + ')';
                    tooltip.setContent(dataName + ' - ' + severityNum);
                    //console.log(tooltip);
                    //console.log(mapPath.style.fill);

                    const deleteButton = document.querySelector('.buttonDelete' + dataId);

                    deleteButton.addEventListener('click', () => {
                        imageDiv.remove();
                        imageDivModal.remove();
                        mapPath.style.fill = 'rgb(255, 255, 255)';
                        delete existingImageDivs[dataId];
                    });
                };

                if (file) {
                    reader.readAsDataURL(file);
                }

            });
        });


    });



</script>
<script>
    // Image conversion
    function imageToBase64(file) {
        return new Promise((resolve, reject) => {
            const reader = new FileReader();

            reader.onload = () => {
                const base64String = reader.result.split(',')[1]; // Remove data URL prefix
                resolve(base64String);
            };

            reader.onerror = (error) => {
                reject(error);
            };

            reader.readAsDataURL(file);
        });
    }

    // Function to handle the API call
    async function handleSubmit() {

        const frontFileInput = document.getElementById('frontCard');
        const backFileInput = document.getElementById('backCard');
        const modal = document.getElementById('myModal');
        const modalText = document.getElementById('modalText');


        // Check if files were selected
        if (!frontFileInput.files[0] || !backFileInput.files[0]) {
            alert("Please upload both front and back images.");
            return;
        }

        try {
            const frontFile = frontFileInput.files[0];
            const backFile = backFileInput.files[0];

            const frontBase64 = await imageToBase64(frontFile);
            const backBase64 = await imageToBase64(backFile);

            // Create FormData object and append the Base64 strings
            const formData = new FormData();
            formData.append('carte_grise_front', frontBase64);
            formData.append('carte_grise_back', backBase64);

            // Show modal
            modal.classList.remove('hidden');

            // Make the API call using fetch
            const response = await fetch('http://13.36.237.112/infos_carte_grise', {
                method: 'POST',
                body: formData
            });

            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }

            const result = await response.json();
            //console.log('API Response:', result);

            // Populate inputs with the received JSON data
            populateInputsFromJSON(result);

            // Update modal text to "Done"
            modalText.textContent = "Done";
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 1000);

        } catch (error) {
            console.error('Error:', error);
            modalText.textContent = "An error occurred.";
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 1000);
        }
    }
    $("#submitBtn").on("click", function(event) {
        event.preventDefault();
        handleSubmit()
    });
    // Add event listener to the submit button
</script>

<script>
    function assemble_data(event) {
    const id = event.target.dataset.id;
    const name = event.target.dataset.name;

    // console.log(id);
    // console.log(name);

    // Correctly access the value of the checked radio button
    const val_checked = $("input[name='severity_" + id + "']:checked").data('value');

    console.log("value checked: ",val_checked);

    // Access the file input
    const input_file = $("#frontCard_" + id).clone();

    // Create a new div and append hidden inputs
    const div_parent = $(`<div id="parent_${id}" class="div_parent"></div>`);
    const count_parent = $(".div_parent").length;
    div_parent.append(`<input type="hidden" name="data[part][${count_parent}][name]" value="${name}" >`);
    div_parent.append(`<input type="hidden" name="data[part][${count_parent}][severity]" value="${val_checked}" >`);
    input_file.attr('name',`data[part][${count_parent}][image]`)
    div_parent.append(input_file);
    
    // Append the div to the form
    $("#added_data").append(div_parent);
}

</script>
                    </div>

                    <nav class="layout-footer footer ">
                        <!-- <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
                            <div class="pt-3">
                                <span class="footer-text font-weight-semibold">
                                    <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
                                        <i class="lnr lnr-home text-large align-middle"></i>
                                    </a>
                                </span>
                            </div>
                        </div> -->

                    </nav>
                    <!-- [ Layout footer ] End -->
                </div>
                <!-- [ Layout content ] Start -->
            </script>
            <!-- [ Layout container ] End -->
        </div>
    </div>
    <!-- [ Layout wrapper] End -->

    <script type="text/javascript" src="/js/pace.js"></script><script type="text/javascript" src="/js/popper.js"></script><script type="text/javascript" src="/js/bootstrap.js"></script><script type="text/javascript" src="/js/sidenav.js"></script><script type="text/javascript" src="/js/layout-helpers.js"></script><script type="text/javascript" src="/js/material-ripple.js"></script><script type="text/javascript" src="/js/perfect-scrollbar.js"></script><script type="text/javascript" src="/js/eve.js"></script><script type="text/javascript" src="/js/flot.js"></script><script type="text/javascript" src="/js/curvedLines.js"></script><script type="text/javascript" src="/js/core.js"></script><script type="text/javascript" src="/js/charts.js"></script><script type="text/javascript" src="/js/animated.js"></script><script type="text/javascript" src="/js/demo.js"></script><script type="text/javascript" src="/js/analytics.js"></script>
    <!-- for data table  -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>

    <!-- for date range picker -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


    <!-- select2  -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        var reception = parseFloat($(".Reception").text());
        $(".receptionhead").text(reception);

        if (reception > 0) {
            $(".point_cliniot").addClass("badge-dot");
            $(".notif_reception").addClass("demo-navbar-notifications");
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('[id^="exemple"]').DataTable({
                "language": {
                    "url": "/css/French.json"
                }

            });
        });
    </script>
    <script>
        $(function() {
            $('input[name="daterange"]').daterangepicker({
                "locale": {
                    "format": "DD/MM/YYYY",
                    "separator": " - ",
                    "applyLabel": "Valider",
                    "cancelLabel": "Annuler",
                    "fromLabel": "De",
                    "toLabel": "à",
                    "customRangeLabel": "Custom",
                    "daysOfWeek": [
                        "Dim",
                        "Lun",
                        "Mar",
                        "Mer",
                        "Jeu",
                        "Ven",
                        "Sam"
                    ],
                    "monthNames": [
                        "Janvier",
                        "Février",
                        "Mars",
                        "Avril",
                        "Mai",
                        "Juin",
                        "Juillet",
                        "Août",
                        "Septembre",
                        "Octobre",
                        "Novembre",
                        "Décembre"
                    ],
                    "firstDay": 1
                }
            }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            });
        });

        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script>
        $(document).ready(function() {

            var text1 = $("#flashMessage").text();
            var res = text1.substring(0, 7);
            arrmsg = text1.split(" ").splice(-1);


            var htm1 = "<span class='content'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <strong>!</strong>&nbsp;&nbsp;" + text1 + "</span>";
            $("#flashMessage").html('<i class="zmdi zmdi-check-circle"></i>');
            $("#flashMessage").html(htm1);
            $("#flashMessage").attr("class", "alert au-alert-success alert-dismissible fade show au-alert au-alert--70per m-b-25");
            $("#flashMessage").attr("role", "alert");
            setTimeout(
                function() {
                    $("#flashMessage").fadeTo(2000, 500).slideUp(500, function() {
                        $("#flashMessage").slideUp(500);
                    });
                }, 5000);

            // code de disable autocomplet

            $(" form ").attr('autocomplete', 'off');

        });
    </script>



</x-app-layout>
