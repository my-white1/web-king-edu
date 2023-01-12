@extends('admin/layout/adminMaster')

@section('adminMaster_title')
Add Post Page
@endsection

@section('adminMaster_main_content')

<div class="container tm-mt-big tm-mb-big">
  <div class="row">
    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
      <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
        <div class="row">
          <div class="col-12">
            <h2 class="tm-block-title d-inline-block">Add Product</h2>
          </div>
        </div>
        <div class="row tm-edit-product-row">
          <div class="col-xl-6 col-lg-6 col-md-12">
            <form action="{{route('add_product.store')}}" method="post" class="tm-edit-product-form"
              enctype="multipart/form-data">
              @csrf
              <div class="form-group mb-3">
                @if ($errors->has('name'))
                  <span class="text-danger">{{$errors->first('title')}}</span>
                @endif
                <label for="name">Post Title</label>
                <input id="name" name="title" type="text" class="form-control validate" required />
              </div>
             
              <div class="form-group mb-3">
                @if ($errors->has('description'))
                  <span class="text-danger">{{$errors->first('description')}}</span>
                @endif
                <label for="description">Description</label>
                <textarea name="description" class="form-control validate" rows="3" required></textarea>
              </div>
              {{-- add category --}}
              {{-- <div class="form-group mb-3">
                <label for="category">Category</label>
                <select class="custom-select tm-select-accounts" id="category">
                  <option selected>Select category</option>
                  <option value="1">New Arrival</option>
                  <option value="2">Most Popular</option>
                  <option value="3">Trending</option>
                </select>
              </div> --}}
                <div class="form-group mb-3">
                  @if ($errors->has('price'))
                    <span class="text-danger">{{$errors->first('price')}}</span>
                  @endif
                  <label for="name">Post Price</label>
                  <input id="name" name="price" type="number" class="form-control validate" required />
                </div>

          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
            <div class="tm-product-img-dummy mx-auto">
              <i class="fas fa-cloud-upload-alt tm-upload-icon"
                onclick="document.getElementById('fileInput').click();"></i>
            </div>
            <div class="custom-file mt-3 mb-3">
              <input id="fileInput" type="file" style="display:none;" />
              <input type="button" class="btn btn-primary btn-block mx-auto" value="UPLOAD PRODUCT IMAGE"
                onclick="document.getElementById('fileInput').click();" />
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
