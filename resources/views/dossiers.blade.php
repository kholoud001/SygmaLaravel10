
<x-app-layout>
    <div class="p-4  flex gap-2 flex-col">
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
                    <a href="#" class="text-white bg-[#009999] hover:bg-[#008080] transition-all h-fit rounded-full p-3">
                        <i class="fas fa-plus mr-2"></i>Créer nouveau rapport
                    </a>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <!-- card -->
                    <div class="card card-compact w-full md:w-96 bg-base-100 shadow-xl">
                        <figure><img class="h-24 w-full object-cover" src="{{ asset('images/car1.jpg') }}" alt="car_images"></figure>
                        <div class="card-body">
                            <h2 class="card-title font-bold">Car Model</h2>
                            <p><b>Date:</b> 01-01-2022 - 01-01-2023</p>
                            <p><b>VIN:</b> ABC123456789</p>
                            <p><b>Prix:</b> 1,500 Dh</p>
                            <div class="card-actions justify-end">
                                <a href="#" class="bg-[#009999] p-4 rounded-lg text-white font-bold hover:scale-105 transition-all">
                                    <i class="fas fa-eye mr-2"></i>Afficher les détails
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</x-app-layout>
