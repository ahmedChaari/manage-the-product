

@extends('layouts.menu')
@section('content')
<!-- BEGIN: Content -->
    <div class="content" style="padding-top: 0rem;">
        <div class="flex items-center mt-8">
            <h2 class="intro-y text-lg font-medium mr-auto">
                Wizard Layout
            </h2>
        </div>
        <!-- BEGIN: Wizard Layout -->
        <div class="intro-y box py-10 sm:py-20 mt-5">
            <div class="relative before:hidden before:lg:block before:absolute before:w-[69%] before:h-[3px] before:top-0 before:bottom-0 before:mt-4 before:bg-slate-100 before:dark:bg-darkmode-400 flex flex-col lg:flex-row justify-center px-5 sm:px-20">
                <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                    <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">1</button>
                    <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Créer un Nouveau Compte</div>
                </div>
                <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                    <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">2</button> 
                    <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Configurez Votre Profil</div>
                </div>
                <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                    <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">3</button>
                    <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Configurez les détails de votre Entreprise</div>
                </div>
                <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                    <button class="w-10 h-10 rounded-full btn btn-primary">4</button>
                    <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto" >Configurer le Compte</div>
                </div>
                <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                    <button class="w-10 h-10 rounded-full btn text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400">5</button>
                    <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400">Finalisez Votre Compte</div>
                </div>
            </div>
            <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">
                <div class="font-medium text-base">Configurer le Compte</div>
                <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-1" class="form-label">Registre Commerce</label>
                        <input id="input-wizard-1" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-2" class="form-label">Fiscale</label>
                        <input id="input-wizard-2" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-3" class="form-label">ICE</label>
                        <input id="input-wizard-3" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <label for="input-wizard-4" class="form-label">Patent</label>
                        <input id="input-wizard-4" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                        <button class="btn btn-secondary w-24">Previous</button>
                        <button class="btn btn-primary w-24 ml-2">Next</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Wizard Layout -->
    </div>
<!-- END: Content -->
@endsection