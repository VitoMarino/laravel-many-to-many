@extends('layouts.admin')

@section('content')
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @method('POST')
                    @csrf

                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control mb-3"
                            value="{{ old('name', $project->name) }}">
                        @error('name')
                            <div class="alert alert-danger mb-3">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="activity">Activity</label>
                        <input type="text" name="activity" id="activity" class="form-control mb-3"
                            value="{{ old('activity', $project->activity) }}">
                        @error('activity')
                            <div class="alert alert-danger mb-3">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <select class="form-select mb-3" aria-label="Default select example" name="type_id">
                            @foreach ($types as $type)
                                <!--All'interno della option gli sto dicendo che se non trova la categoria che ho selezionato, deve comunque lasciare quella che ho messo. WARNING: Usare doppio uguale e NON triplo uguale, in questo caso.-->
                                <option value="{{ $type->id }}"
                                    {{ $type->id == old('type_id', $project->type_id) ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('type_id')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="name">Description</label>
                        <input type="text" name="description" id="description" class="form-control mb-3"
                            value="{{ old('description', $project->desription) }}">
                        @error('description')
                            <div class="alert alert-danger mb-3">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="name">Image URL</label>
                        <input type="text" name="image" id="image" class="form-control mb-3"
                            value="{{ old('image', $project->image) }}">
                        @error('image')
                            <div class="alert alert-danger mb-3">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <input type="submit" value="Create" class="btn btn-primary">
                    <input type="reset" value="Reset" class="btn btn-warning">
                </form>
            </div>
        </div>
    </div>
@endsection
