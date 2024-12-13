@extends('admin.index')
@section('admin')
    <!-- sherah Dashboard -->
    <section class="sherah-adashboard sherah-show">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sherah-body">
                        <!-- Dashboard Inner -->
                        <div class="sherah-dsinner">

                            <div class="row">
                                <div class="col-12">
                                    <div class="sherah-breadcrumb mg-top-30">
                                        <h2 class="sherah-breadcrumb__title">Categories & Subcategories</h2>
                                        <ul class="sherah-breadcrumb__list">
                                            <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                                            <li class="active"><a href="{{ route('admin.category.list') }}">Category &
                                                    Subcategory
                                                    List</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-3 col-lg-4 col-12">
                                    <!-- Product Category Sidebar -->
                                    <div class="sherah-product-sidebar sherah-default-bg mg-top-25">
                                        <h4 class="sherah-product-sidebar__title sherah-border-btm">Categories</h4>
                                        <ul class="sherah-product-sidebar__list">
                                            @if (count($categories) > 0)
                                                @foreach ($categories as $category)
                                                    <li><a href="#"><span><i
                                                                    class="fa-solid fa-chevron-right"></i>{{ $category->name }}</span><span
                                                                class="count">15</span></a></li>
                                                @endforeach
                                            @else
                                            @endif
                                        </ul>
                                    </div>
                                    <!-- End Product Category Sidebar -->
                                </div>
                                <div class="col-xxl-9 col-lg-8 col-12">
                                    <div class="sherah-page-inner sherah-default-bg sherah-border mg-top-25">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="sherah-product-sidebar__title sherah-border-btm">Subcategories</h4>
                                            <a class="btn fw-bold" href="{{ route('vendor.add.subcategory') }}"
                                                style="background-color: #6176FE; color: white;">
                                                Add Subcategory
                                            </a>
                                        </div>
                                        <div class="sherah-table p-0">
                                            <table id="sherah-table__vendor"
                                                class="sherah-table__main sherah-table__main-v3">
                                                <!-- sherah Table Head -->
                                                <thead class="sherah-table__head">
                                                    <tr>
                                                        <th class="sherah-table__column-1 sherah-table__h1">Image</th>
                                                        <th class="sherah-table__column-2 sherah-table__h2">Subcategory</th>
                                                        <th class="sherah-table__column-2 sherah-table__h2">Category</th>
                                                        <th class="sherah-table__column-7 sherah-table__h6">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="sherah-table__body">
                                                    @if (count($subcategories) > 0)
                                                        @foreach ($subcategories as $subcategory)
                                                            <tr>
                                                                {{-- <td class="sherah-table__column-1 sherah-table__data-1">
                                                                    <div
                                                                        class="sherah-table__product d-flex justify-content-center">
                                                                        <div class="sherah-table__vendor-img">
                                                                            <img src="{{ asset('upload/admin_images/' . $category->image) }}"
                                                                                alt="Category Image" class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </td> --}}
                                                                <td class="sherah-table__column-1 sherah-table__data-1">
                                                                    <div
                                                                        class="d-flex justify-content-center align-items-center">
                                                                        <div class="sherah-table__vendor-img">
                                                                            <img src="{{ asset('upload/admin_images/' . $subcategory->image) }}"
                                                                                alt="Category Image" class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="sherah-table__column-2 sherah-table__data-2">
                                                                    <div class="sherah-table__vendor">
                                                                        <h4 class="sherah-table__vendor--title">
                                                                            {{ $subcategory->name }}
                                                                        </h4>
                                                                    </div>
                                                                </td>
                                                                <td class="sherah-table__column-2 sherah-table__data-2">
                                                                    <div class="sherah-table__vendor">
                                                                        <h4 class="sherah-table__vendor--title">
                                                                            {{ $subcategory->category->name }}
                                                                        </h4>
                                                                    </div>
                                                                </td>
                                                                <td class="sherah-table__column-8 sherah-table__data-8">
                                                                    <div
                                                                        class="d-flex justify-content-center align-items-center gap-2">
                                                                        <!-- Approve Button -->
                                                                        {{-- <form method="POST"
                                                                            action="{{ route('vendor.edit.subcategory', $subcategory->id) }}"
                                                                            style="display:inline;">
                                                                            @csrf
                                                                            <button type="submit"
                                                                                class="btn btn-outline-success d-flex align-items-center gap-1">
                                                                                <i class="fas fa-check-circle"></i> Edit
                                                                            </button>
                                                                        </form> --}}
                                                                        <a href="{{ route('vendor.edit.subcategory', $subcategory->id) }}"
                                                                            class="btn btn-outline-success d-flex align-items-center gap-1">
                                                                            <i class="fas fa-edit"></i> Edit
                                                                        </a>
                                                                        <!-- Delete Button -->
                                                                        <form method="POST"
                                                                            action="{{ route('vendor.subcategory.delete', $subcategory->id) }}"
                                                                            style="display:inline;">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                class="btn btn-outline-danger d-flex align-items-center gap-1">
                                                                                <i class="fa-solid fa-trash"></i> Delete
                                                                            </button>
                                                                        </form>

                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Dashboard Inner -->
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End sherah Dashboard -->
    <style>
        table th,
        table td {
            text-align: center !important;
        }
    </style>
@endsection
