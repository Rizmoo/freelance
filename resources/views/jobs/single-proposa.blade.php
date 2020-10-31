@extends('layouts.dashboard')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $jobProposal -> job -> title }}
                </div>

                <div class="card-body">
                    <!-- project title-->
                    <h3 class="mt-0">
                        {{$jobProposal ->job -> title }}
                    </h3>
                    <div class="badge badge-secondary mb-3">{{ $jobProposal  -> status }}</div>

                    <h5>Project Overview:</h5>

                    <p class="text-muted mb-2">
                        {{ $jobProposal -> proposal_text }}
                    </p>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5>Start Date</h5>
                                <p>{{ $jobProposal -> start_date }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5>End Date</h5>
                                <p>{{ $jobProposal -> delivery_date  }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-4">
                                <h5>Bid</h5>
                                <p>$ {{ $jobProposal -> bid }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2>Delivery</h2>
                        </div>
                        <div class="col-md-12">
                            <p class="text-muted mb-2">
                                {{ $jobProposal -> proposal_text }}
                            </p>
                        </div>

                        <a href="#" class="btn btn-outline-warning"><i class="fa fa-download"></i>Download File</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
