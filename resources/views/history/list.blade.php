@extends('layouts.menu')
@section('content')

 <!-- BEGIN: Content -->
 <div class="content">
    <h2 class="intro-y text-lg font-medium mt-10">
        List of Products
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="{{ route('product.createView') }}"  class="btn btn-primary shadow-md mr-2">Add New Product</a>
            <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">PRODUIT</th>
                        <th class="text-center whitespace-nowrap">CATEGORY / UNITY</th>
                        <th class="text-center whitespace-nowrap">CREATION DE / ROLE</th>
                        <th class="text-center whitespace-nowrap">DEPOT</th>
                        <th class="text-center whitespace-nowrap">QUANTITE</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @if($histories->count() > 0 )
                    @foreach($histories as $history)
                    <tr class="intro-x">
                        <td class="w-40">
                            <a href="" class="font-medium whitespace-nowrap"></a>
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap"></a>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5"></div>
                        </td>
                        <td class="w-40">
                            <a href="" class="font-medium whitespace-nowrap"></a>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5"></div>
                        </td>
                        <td class="text-center"></td>
                        <td class="w-40">
                            <div class="flex items-center justify-center text-success"></div>
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <h3 class="text-center mt-5 mb-5">Pas encore des users</h3>
                    @endif
                </tbody>
            </table>

        </div>
        <!-- END: Data List -->
    </div>
   </div>
  <!-- END: Content -->

@endsection
