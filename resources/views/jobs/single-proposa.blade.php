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
        <div class="card-body">
            <h5>Leave a comment</h5>
            <form method="post" action="{{ route('comment.add') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="comment" class="form-control" />
                    <input type="hidden" name="job_proposal_id" value="{{ $jobProposal ->id }}" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Add Comment" />
                </div>
            </form>
            @foreach($jobProposal -> comments as $comment)
                <div class="display-comment">
                    <strong>{{ $comment->user->name }}</strong>
                    <p>{{ $comment->comment }}</p>
                    <a href="" id="reply"></a>
                    <form method="post" action="{{ route('reply.add') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="comment" class="form-control" />
                            <input type="hidden" name="user_id" value="{{  $jobProposal ->job ->user_id }}" />
                            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Reply" />
                        </div>
                    </form>
                    @include('post.partials.replies', ['comments' => $comment->replies])
                </div>
            @endforeach
        </div>
    </div>
@endsection
