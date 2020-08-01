@extends('layouts.front.masterlayout')

@section('content')
<section id="cart-view">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="cart-view-area" style="margin-bottom: 30px;">
            <div class="cart-view-table">
              {{-- <form action=""> --}}
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <td colspan="6" style="padding-top: 120px;padding-bottom: 120px;">
                        <div class="card">
                            <h2>{{ __('Verify Your Email Address') }}</h2>
            
                            <div class="card-body">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                @endif
            
                                {{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email') }},
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                                </form>
                            </div>
                        </div>
                    </td>
                  </tr>
                </table>
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
