<x-layout>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>User</h5>
    </div>

    <div class="row">
        <div class="col mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive small">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Transaction Date</th>
                                    <th scope="col">Visit Date</th>
                                    <th scope="col">Status Transaction</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 1;
                                @endphp
                            @foreach ($transactions as $ts)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{$ts->name_buyer}}</td>
                                    <td>{{$ts->created_at->format('Y-m-d')}}</td>
                                    <td>{{$ts->date_ticket}}</td>
                                    <td>
                                        @if ($ts->status_transaction == "PAID")
                                        <span class="badge text-bg-success">Success</span>
                                        @elseif ($ts->status_transaction == "EXPIRED")
                                        <span class="badge text-bg-danger">Expired</span>
                                        @else
                                        <span class="badge text-bg-warning">Pending</span>
                                        @endif
                                    </td>
                                    
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal{{ $ts->id }}">
                                            Detail Ticket
                                        </button>
                                        <a target="_blank" href="{{ route('download.pdf',['id' => $ts->id])}}" class="btn btn-sm btn-primary">Print</a>
                                    </td>
                            @endforeach

                            @foreach ($transactions as $ts)
                                        <!-- Modal -->
                                        <div class="modal fade" id="detailModal{{ $ts->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Detail Ticket</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <p>Invoice - {{$ts->external_id}}</p>
                                                                <p>Ticket: {{$ts->ticket->name}}</p>
                                                                <p>Qty : {{$ts->qty}}</p>
                                                                <p>Price :  {{$ts->amount}}</p>
                                                                <p>Payment: <a target="_blank" href="{{ $ts->invoice_url }}">Invoice Url</a></p>
                                                            </div>
                                                            <div class="col-4">
                                                                {!! DNS2D::getBarcodeSVG('Nama:' . $ts->name_buyer . '|Harga Ticket' . $ts->amount . '|Jumlah Ticket:' . $ts->qty, 'QRCODE', 4, 4, 'L') !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>