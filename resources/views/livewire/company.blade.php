<div class="intro-y box py-10 sm:py-20 mt-5">
       <!-- Circles which indicates the steps of the form: -->
        <div class="relative before:hidden before:lg:block before:absolute before:w-[69%] before:h-[3px] before:top-0 before:bottom-0 before:mt-4 before:bg-slate-100 before:dark:bg-darkmode-400 flex flex-col lg:flex-row justify-center px-5 sm:px-20">
            <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                <button class="step w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400" disabled>1</button>
                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Créer un Nouveau Compte</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button class="step w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400" disabled>2</button>
                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Configurez Votre Profil</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button class="step w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400" disabled>3</button>
                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Configurez les détails de votre Entreprise</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button class="step w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400" disabled>4</button>
                <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Configurer le Compte</div>
            </div>
            <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                <button class="step w-10 h-10 rounded-full btn btn-primary" disabled>5</button>
                <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto" >Finalisez Votre Compte</div>
            </div>
        </div>

      
        <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">
        <!-- One "tab" for each step in the form: -->
       
@if ($step <= 1)
    <form wire:submit.prevent="step1" >
            <div class="tab">
                <div class="font-medium text-base">Créer un Nouveau Compte</div>
                <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-1" class="form-label">Nom de société</label>
                        <input id="input-wizard-1" type="text" class="form-control" wire:model="name" placeholder="Nom de société">
                        @error('name')
                        <div class="alert alert-danger-soft show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-2" class="form-label">Secteur d'activité</label>
                        <input id="input-wizard-2" type="text" class="form-control" wire:model="activite" 
                        name="activite" placeholder="Secteur d'activité">
                        @error('activite')
                        <div class="alert alert-danger-soft show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-3" class="form-label">Date du Création</label>
                        <input type="date" id="input-wizard-3" class="form-control" wire:model="date_creation" 
                        name="date_creation">
                        @error('date_creation')
                        <div class="alert alert-danger-soft show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> {{ $message }}</div>
                        @enderror
                    </div>
                    
                </div>
                <div class="mt-3" style="overflow:auto; float:right;">
                        <!-- <button class="btn btn-secondary w-24" type="button" id="prevBtn" >Previous</button> -->
                    <button class="btn btn-primary w-24 ml-2" type="submit"  >Continuer</button>
                </div>
            </div>
        </form>
        @elseif ($step <= 2)
        <form wire:submit.prevent="step2" >
            <div class="tab">
                <div class="font-medium text-base">Configurez Votre Profil</div>
                <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-1" class="form-label">Nom de Gerant</label>
                        <input id="input-wizard-1" name="gerant"
                            type="text" class="form-control" placeholder="Nom de Gerant">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-2" class="form-label">Email</label>
                        <input id="input-wizard-2" type="text" class="form-control"
                            name="email"
                        placeholder="example@gmail.com">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-3" class="form-label">Ville</label>
                        <select id="input-wizard-3" name="ville" value="ville"
                            class="form-select">
                            <option value="Rabat">Rabat</option>
                            <option value="Marrakech">Marrakech</option>
                            <option value="Kenitra">Kenitra</option>
                            <option value="Sale">Sale</option>
                        </select>
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-4" class="form-label">Pays</label>
                        <select id="input-wizard-3" name="pays" value="pays"
                            class="form-select">
                            <option value="Rabat">Maroc</option>
                            <option value="Marrakech">France</option>
                            <option value="Kenitra">Espagne</option>
                            <option value="Sale">USA</option>
                        </select>
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-16">
                        <label for="input-wizard-5" class="form-label">Adresse Complète</label>
                        <textarea name="" id="input-wizard-4" class="form-control" cols="30" name="adresse"
                        placeholder="Rue 58 BD N°12" rows="10"></textarea>
                    </div>
                    
                </div>
                <div class="mt-3" style="overflow:auto; float:right;">
                        <button class="btn btn-secondary w-24" type="button" wire:click="stepBack" wire:loading.attr="disabled" >Previous</button>
                        <button class="btn btn-primary w-24 ml-2" type="submit" id="nextBtn" >Continuer</button>
                    </div>
            </div>
        </form>
            @elseif ($step <= 3)
        <form wire:submit.prevent="step3" >
            <div class="tab">
                <div class="font-medium text-base">Configurez les détails de votre Entreprise</div>
                <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-1" class="form-label">Téléphone</label>
                        <input id="input-wizard-1" type="text" class="form-control" name="tel" placeholder="0 XX XX XX XX">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-2" class="form-label">Téléphone Fix</label>
                        <input id="input-wizard-2" type="text" class="form-control" name="tel_mobile" placeholder="0 XX XX XX XX">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-3" class="form-label">Fax</label>
                        <input id="input-wizard-3" type="text" class="form-control" name="fax" placeholder="0 XX XX XX XX">
                    </div>
                    <div class="mt-3" style="overflow:auto; float:right;">
                        <button class="btn btn-secondary w-24" type="button" wire:click="stepBack" wire:loading.attr="disabled" >Previous</button>
                        <button class="btn btn-primary w-24 ml-2" type="submit" id="nextBtn" >Continuer</button>
                    </div>
                </div>
            </div>
        </form> 
            @elseif ($step <= 4)
        <form wire:submit.prevent="step4" >
            <div class="tab">
                <div class="font-medium text-base">Configurer le Compte</div>
                <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-1" class="form-label">Registre Commerce</label>
                        <input id="input-wizard-1" type="text" class="form-control" name="registre_commerce" placeholder="">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-2" class="form-label">Fiscale</label>
                        <input id="input-wizard-2" type="text" class="form-control" name="fiscale" placeholder="">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-3" class="form-label">ICE</label>
                        <input id="input-wizard-3" type="text" class="form-control" name="ICE" placeholder="">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-4" class="form-label">Patent</label>
                        <input id="input-wizard-4" type="text" class="form-control" name="patent" placeholder="">
                    </div>
                    <div class="mt-3" style="overflow:auto; float:right;">
                        <button class="btn btn-secondary w-24" type="button" wire:click="stepBack" wire:loading.attr="disabled" >Previous</button>
                        <button class="btn btn-primary w-24 ml-2" type="submit" id="nextBtn" >Continuer</button>
                    </div>
                </div>
            </div>
        </form>
        @else($step <= 5)
        <form wire:submit.prevent="step5" >
            <div class="tab">
                <div class="font-medium text-base">Finalisez Votre Compte</div>
                <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-1" class="form-label">Votre SitWeb</label>
                        <input id="input-wizard-1" type="text" name="web" class="form-control" placeholder="www.yourwebsite.com">
                    </div>
                </div>
            </div>
            <div class="mt-3" style="overflow:auto; float:right;">
            <div class="mt-3" style="overflow:auto; float:right;">
                <button class="btn btn-secondary w-24" type="button" wire:click="stepBack" wire:loading.attr="disabled" >Previous</button>
                <button class="btn btn-primary w-24 ml-2" type="submit" id="nextBtn" >Continuer</button>
            </div>
            </div>
        </form>
        @endif
        </div>
    </div>

<!-- END: Content -->