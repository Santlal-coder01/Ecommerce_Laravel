@extends('admin.layout.layout')
@section('content')
<style>
    .error {
        color: red;
    }
</style>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-danger">
                <h4 class="card-title">Add Attribute</h4>
                <form class="forms-sample" action="{{ route('attribute-values.store') }}" method="post" id="attributeForm">
                    @csrf
                    <!-- Attribute ID Field -->
                    <div class="form-group">
                        <label for="attributeId">Attribute ID</label>
                        <select name="attribute_id" id="attribute_value" class="form-control">
                            <option value="">Select Attribute</option>
                            @foreach ($attributevalue_id as $attribute_id)
                                <option value="{{$attribute_id->id}}">{{$attribute_id->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Name Field -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ old('name') }}">
                        <div class="error">@error('name') {{ $message }} @enderror</div>
                    </div>

                    <!-- Status Field -->
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="">Select Status</option>
                            <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Enable</option>
                            <option value="2" {{ old('status') == 2 ? 'selected' : '' }}>Disable</option>
                        </select>
                        <div class="error">@error('status') {{ $message }} @enderror</div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
