<x-layout>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Welcome : {{ auth()->user()->name }}</h5>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-1">
                <a href="/tiket" class="btn btn-sm btn-info text-white">Beli e-Ticket</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4 mb-3 mb-sm-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="mb-1">Total Transaction</div>
                            <div class="h5 mb-0">{{$transactions}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-people" style="font-size: 2rem; color: cornflowerblue;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<a href="login">logout</a>
</x-layout>
