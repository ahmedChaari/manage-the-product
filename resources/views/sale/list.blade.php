@extends('layouts.menu')
@section('content')


<div class="content" style="padding-top: 0rem;">
    <h2 class="intro-y text-lg font-medium mt-10">
        LIST DU VENTES
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="javascript:;"  class="btn btn-primary shadow-md mr-2"
            data-tw-toggle="modal" data-tw-target="#header-footer-modal-preview-sale"
            title="Ajouter un Depot"
            >AJOUTTER ROLE</a>
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
                        <th class="whitespace-nowrap">Code</th>
                        <th class="whitespace-nowrap">Produit</th>
                        <th class="whitespace-nowrap">Depot</th>
                        <th class="whitespace-nowrap">Quantite</th>
                        <th class="whitespace-nowrap">Prix par unite</th>
                        <th class="text-center whitespace-nowrap">DATE DE CREATION</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @if($sales->count() > 0 )
                    @foreach($sales as $sale)
                    <tr class="intro-x">
                        <td class="w-40">
                            <a href="" class="font-medium whitespace-nowrap"> {{ $sale->code }}</a>
                        </td>
                        <td class="w-40">
                            <a href="" class="font-medium whitespace-nowrap"> {{ $sale->product->name }}</a>
                        </td>
                        <td class="w-40">
                            <a href="" class="font-medium whitespace-nowrap"> {{ $sale->depot->name }}</a>
                        </td>
                        <td class="w-40">
                            <a href="" class="font-medium whitespace-nowrap"> {{ $sale->quantite }}</a>
                        </td>
                        <td class="w-40">
                            <a href="" class="font-medium whitespace-nowrap"> {{ number_format( $sale->price , 2) }} DH</a>
                        </td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($sale->created_at)->format('M j Y') }}</td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a href="javascript:;" data-tw-toggle="modal"
                                data-tw-target="#overlapping-modal-preview_{{ $sale->id }}"
                                class="flex items-center mr-3">
                                <i data-lucide="check-square" class="w-4 h-4 mr-1">
                                </i>Edit</a>
                                <a class="flex items-center text-danger delete-confirm" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                            </div>
                        </td>
                    </tr>


                    @endforeach
                    @else
                    <h3 class="text-center mt-5 mb-5">Pas encore du ventes</h3>
                    @endif
                </tbody>
            </table>
        {{ $sales->links() }}
        </div>
        <!-- END: Data List -->
    </div>
   </div>



    <!-- BEGIN: Modal Content  category-->
    <div id="header-footer-modal-preview-sale" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- BEGIN: Modal Header -->
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Creation un Vente</h2>
                </div> <!-- END: Modal Header -->
                <!-- BEGIN: Modal Body -->
                <form method="POST" action="{{route('sale.create')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-12"> <label for="modal-form-1" class="form-label">Nom du produit</label>
                            <select class="form-select mt-2 sm:mr-2" name="product_id" aria-label="Default select example">
                                <option value="" selected disabled>--------</option>
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="col-span-12 sm:col-span-12"> <label for="modal-form-1" class="form-label">Nom du depot</label>
                            <select class="form-select mt-2 sm:mr-2" name="depot_id" aria-label="Default select example">
                                <option value="" selected disabled>--------</option>
                                    @foreach($depots as $depot)
                                        <option value="{{ $depot->id }}">{{ $depot->name }}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="col-span-12 sm:col-span-12"> <label for="modal-form-1" class="form-label">Quantite de produit</label>
                            <input name="quantite" id="quantite"
                            type="number" class="form-control" placeholder="quantite de produit">
                            @error('quantite')
                            <div class="alert alert-danger-soft show flex items-center mb-2" role="alert">
                                <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> {{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-12"> <label for="modal-form-1" class="form-label">Prix par unite</label>
                            <input name="price" id="price"
                            type="number" class="form-control" placeholder="Prix par unite ">
                            @error('price')
                            <div class="alert alert-danger-soft show flex items-center mb-2" role="alert">
                                <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> {{ $message }}</div>
                            @enderror
                        </div>
                    </div> <!-- END: Modal Body -->
                    <!-- BEGIN: Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-danger w-20 mr-1">Cancel</button>
                        <button type="submit"
                        class="btn btn-outline-primary w-20">Create</button> </div> <!-- END: Modal Footer -->

                </form>
            </div>
        </div>
    </div>
<!-- END: Modal Content Category -->



@endsection
