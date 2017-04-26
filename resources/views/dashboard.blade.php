@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-3">
        <button class="btn btn-primary">
            Contacts
        </button>
      </div>
        <div class="col-md-3">
          <button class="btn btn-primary">
              Notable Events
          </button>
        </div>
          <div class="col-md-6">
              <div class="panel panel-default">
                  <div class="panel-heading">Previous Transactions</div>
                  <div class="panel-body">
                      No Previous Transactions
                  </div>
              </div>
          </div>
    </div>
</div>
@endsection
