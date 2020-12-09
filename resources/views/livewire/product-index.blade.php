<div class="container">
    <div class="row mb-2">
        <div class="col-md-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href=" {{route('home')}} " class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List Batch</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <h2> {{$title}} </h2>
        </div>
        <div class="col-md-3">
            <div class="input-group mb-3">

                <input wire:model="search" type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-search"></i>
                    </span>

                </div>
            </div>

        </div>
    </div>

    <section class="sold-fast mb-5">
        <div class="row mt-4">
            @foreach ($products as $sold)
            <div class="col-md-3 mb-3">
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <img src=" {{url('assets/sold')}}/{{ $sold->gambar }} " class="img-fluid">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5><strong> {{$sold->nama}} </strong></h5>
                                <h5>Rp. {{number_format( $sold->harga) }}</h5>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href=" {{ route('products.detail' ,$sold->id)}} " class="btn btn-dark btn-block">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col">
                {{$products->links()}}
            </div>
        </div>
    </section>
</div>