@extends('layouts.dashboard')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Wallet Transactions') }}
                    <button type="button" class="btn btn-primary btn-sm float-right mr-2" data-toggle="modal" data-target="#modelId">
                        Deposit
                    </button>
                    <button type="button" class="btn btn-danger btn-sm float-right mr-2" data-toggle="modal" data-target="#withdraw">
                        Withdraw
                    </button>
                </div>

                <div class="card-body">
                    <table class="table table-sm table-centered mb-0">
                        <thead class="thead-dark">
                        <tr>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach (Auth::user() ->transactions ->reverse()  as $trans)
                                <tr>
                                    <td>{{ $trans -> type }}</td>
                                    <td>{{ $trans -> amount }}</td>
                                    <td>{{ $trans -> confirmed }}</td>
                                    <td>{{ $trans -> created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Deposit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('wallet.load') }}" method="post">
                <div class="modal-body">

                        @csrf
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text" class="form-control" name="amount" id="amount">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Load</button>
                    <a href="{{ route('make.payment') }}" class="btn btn-outline-info">PayPal</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="withdraw" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Withdraw</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('wallet.withdraw') }}" method="post">
                <div class="modal-body">

                        @csrf
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text" class="form-control" name="amount" id="amount">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">withdraw</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

