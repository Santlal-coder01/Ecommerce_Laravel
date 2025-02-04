@extends('admin.layout.layout')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

<section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="box box-danger">
            <h4 class="card-title">Add your block</h4>
            <form class="forms-sample" action="{{ route('block.store') }}" method="post" id="form" enctype="multipart/form-data">
                @csrf

                <!-- Identifier Field -->
                <div class="form-group">
                    <label for="exampleInputIdentifier">Identifier</label>
                    <input type="text" class="form-control" id="exampleInputIdentifier" placeholder="Identifier" name="identifier">
                    <div class="error">@error('identifier') {{ $message }} @enderror</div>
                </div>

                <!-- Name Field -->
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Name" name="name">
                    <div class="error">@error('name') {{ $message }} @enderror</div>
                </div>
                <div class="form-group">
                    <label for="exampleInputbanner_image5"> Banner image </label>
                    <input type="file" name="b_image" class="form-control" id="exampleInputbanner_image5">
                    <div class="error"> @error('image') {{$message}} @enderror</div>
                </div>
                <!-- Description Field -->
                <div class="form-group">
                    <label for="exampleInputDescription">Description</label>
                    <textarea name="description" class="form-control" id="content" cols="146" rows="4" placeholder="Add description here"></textarea>
                    <div class="error">@error('description') {{ $message }} @enderror</div>
                </div>

                <!-- Status Field -->
                <div class="form-group">
                    <label for="exampleSelectStatus">Status</label>
                    <select class="form-control" id="exampleSelectStatus" name="status">
                        <option value="">Select status</option>
                        <option value="1">Enable</option>
                        <option value="2">Disable</option>
                    </select>
                    <div class="error">@error('status') {{ $message }} @enderror</div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
        </div>
    </div>
    </div>
</section>
    <script>
        ClassicEditor.create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
