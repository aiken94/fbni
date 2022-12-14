@extends('layouts.front')

@section('content')
    <div class="container page__container page__container page-section">
        <div class="page-separator">
            <div class="page-separator__text">Overview</div>
        </div>

        <div class="row card-group-row mb-lg-8pt">
            <div class="col-lg-7 card-group-row__col">
                <div class="card card-group-row__card d-flex flex-column">
                    <div class="row no-gutters flex">
                        <div class="col-6 border-left">
                            <div class="card-body">
                                <h6 class="text-50">Account Balance</h6>
                                <div class="h2 mb-0">{{'N'.number_format(auth()->user()->account->balance, 2)}}</div>
                                <div class="d-flex flex-column">
                                    <strong>Total</strong>
                                    <small class="text-50">{{auth()->user()->account->count()}}</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 border-left">
                            <div class="card-body">
                                <h6 class="text-50">Spending</h6>
                                <div class="h2 mb-0">{{'N'.number_format(\App\Models\Transaction::whereUserId(auth()->id())->sum('amount_paid'), 2)}}</div>
                                <div class="d-flex flex-column">
                                    <strong>Total</strong>
                                    <small class="text-50">{{'N'.number_format(\App\Models\Transaction::whereUserId(auth()->id())->where('created_at', '>=', now())->sum('amount_paid'), 2)}} today</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
