
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
                                <figure>
                                    <p>croquet</p>
                                </figure>
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
