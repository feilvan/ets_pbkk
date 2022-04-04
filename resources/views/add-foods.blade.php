@extends('template')

@section('content')
    <div class="container my-5">
        <h1 class="text-center">Add Food</h1>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name Of Food</label>
                <input type="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="categorie" class="form-label">Category Of Food</label>
                <input type="categorie" class="form-control" id="categorie">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price Of Food</label>
                <input type="price" class="form-control" id="price">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description Of Food</label>
                <input type="description" class="form-control" id="description">
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Link Of Image</label>
                <input type="link" class="form-control" id="link">
            </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
@endsection