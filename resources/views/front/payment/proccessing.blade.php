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
                        <h3>Your Payment is processing .</h3>
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