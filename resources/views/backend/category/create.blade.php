@extends('backend.layouts.app')
@section('content')
<style>
    /* Preview image styles */
#imgpreview {
    margin-top: 20px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

#imgpreview img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
    margin-bottom: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Delete button styles */
#deleteImage {
    background-color: #dc3545;
    color: #fff;
    border: none;
    padding: 8px 16px;
    font-size: 14px;
    cursor: pointer;
    border-radius: 4px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

#deleteImage:hover {
    background-color: #c82333;
}

#deleteImage:focus {
    outline: none;
}
background-color{
    darkred;
} 


</style>
    <!-- main-content-wrap -->
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Category infomation</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="#">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <a href="#">
                            <div class="text-tiny">Categories</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">New Category</div>
                    </li>
                </ul>
            </div>
            <!-- new-category -->
            <div class="wg-box">
                <form class="form-new-brand form-style-1" action="{{ route('resources-category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <fieldset class="name">
                        <div class="body-title">Category Name <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Category Name" name="name" tabindex="0"
                            value="" aria-required="true" required="">
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title">Category Title <span class="tf-color-1">*</span></div>
                        <input class="flex-grow" type="text" placeholder="Category Title" name="title" tabindex="0"
                            value="" aria-required="true" required="">
                    </fieldset>
                    <div class="bot">
                        <div></div>
                        <button class="tf-button w208" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /main-content-wrap -->
@endsection

@push('scripts')

@endpush
